<?php
session_start();
if (!isset($_SESSION['user_id'])) exit;
require_once '../config/db.php';
require_once '../includes/csrf.php';

check_csrf();

$action = $_GET['action'] ?? '';

if ($action === 'add') {
    $supplier_id = $_POST['supplier_id'] ?? null;
    $status = $_POST['status'] ?? 'received';
    $product_ids = $_POST['product_id'] ?? [];
    $quantities = $_POST['quantity'] ?? [];
    $prices = $_POST['price'] ?? [];

    if (empty($product_ids)) {
        header('Location: ../purchases.php?error=empty');
        exit;
    }

    try {
        $pdo->beginTransaction();

        $total = 0;
        foreach ($product_ids as $index => $pid) {
            $total += $quantities[$index] * $prices[$index];
        }

        $stmt = $pdo->prepare("INSERT INTO purchases (supplier_id, user_id, total, status) VALUES (?, ?, ?, ?)");
        $stmt->execute([$supplier_id, $_SESSION['user_id'], $total, $status]);
        $purchase_id = $pdo->lastInsertId();

        foreach ($product_ids as $index => $pid) {
            $qty = $quantities[$index];
            $price = $prices[$index];

            // Save detail
            $stmt = $pdo->prepare("INSERT INTO purchase_details (purchase_id, product_id, quantity, price) VALUES (?, ?, ?, ?)");
            $stmt->execute([$purchase_id, $pid, $qty, $price]);

            // Update stock and purchase price ONLY if received
            if ($status === 'received') {
                $stmt = $pdo->prepare("UPDATE products SET stock = stock + ?, purchase_price = ? WHERE id = ?");
                $stmt->execute([$qty, $price, $pid]);
            }
        }

        $pdo->commit();
        header('Location: ../purchases.php?success=1');
    } catch (Exception $e) {
        $pdo->rollBack();
        die("Error: " . $e->getMessage());
    }
} elseif ($action === 'status') {
    $id = $_GET['id'] ?? 0;
    $new_status = $_GET['status'] ?? '';

    if (!in_array($new_status, ['received', 'cancelled'])) {
        header('Location: ../purchases.php?error=invalid_status');
        exit;
    }

    try {
        $pdo->beginTransaction();

        // Check if it was pending
        $stmt = $pdo->prepare("SELECT status FROM purchases WHERE id = ?");
        $stmt->execute([$id]);
        $current = $stmt->fetch();

        if ($current && $current['status'] === 'pending') {
            $stmt = $pdo->prepare("UPDATE purchases SET status = ? WHERE id = ?");
            $stmt->execute([$new_status, $id]);

            if ($new_status === 'received') {
                // Update stock for all items in this purchase
                $stmt = $pdo->prepare("SELECT * FROM purchase_details WHERE purchase_id = ?");
                $stmt->execute([$id]);
                $details = $stmt->fetchAll();

                foreach ($details as $d) {
                    $stmt = $pdo->prepare("UPDATE products SET stock = stock + ?, purchase_price = ? WHERE id = ?");
                    $stmt->execute([$d['quantity'], $d['price'], $d['product_id']]);
                }
            }
        }

        $pdo->commit();
        header('Location: ../purchases.php?success=status_updated');
    } catch (Exception $e) {
        $pdo->rollBack();
        die("Error: " . $e->getMessage());
    }
}
?>
