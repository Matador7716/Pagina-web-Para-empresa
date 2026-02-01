<?php
session_start();
if (!isset($_SESSION['user_id'])) exit;
require_once '../config/db.php';

$action = $_GET['action'] ?? '';

if ($action === 'search') {
    $q = $_GET['q'] ?? '';
    $stmt = $pdo->prepare("SELECT id, code, name, sale_price, stock FROM products WHERE name LIKE ? OR code LIKE ? LIMIT 10");
    $stmt->execute(["%$q%", "%$q%"]);
    echo json_encode($stmt->fetchAll());
    exit;
}

if ($action === 'process_sale') {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    require_once '../includes/csrf.php';
    if (!verify_csrf_token($data['csrf_token'] ?? '')) {
        echo json_encode(['success' => false, 'message' => 'Error de validación CSRF.']);
        exit;
    }

    if (!$data || empty($data['items'])) {
        echo json_encode(['success' => false, 'message' => 'Datos invalidos']);
        exit;
    }

    try {
        $pdo->beginTransaction();

        $total = 0;
        foreach ($data['items'] as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $stmt = $pdo->prepare("INSERT INTO sales (customer_id, user_id, total, payment_method, invoice_type) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([
            $data['customer_id'] ?: null,
            $_SESSION['user_id'],
            $total,
            $data['payment_method'],
            $data['invoice_type']
        ]);
        $sale_id = $pdo->lastInsertId();

        foreach ($data['items'] as $item) {
            // Save detail
            $stmt = $pdo->prepare("INSERT INTO sale_details (sale_id, product_id, quantity, price) VALUES (?, ?, ?, ?)");
            $stmt->execute([$sale_id, $item['id'], $item['quantity'], $item['price']]);

            // Update stock
            $stmt = $pdo->prepare("UPDATE products SET stock = stock - ? WHERE id = ?");
            $stmt->execute([$item['quantity'], $item['id']]);
        }

        $pdo->commit();
        echo json_encode(['success' => true, 'sale_id' => $sale_id]);
    } catch (Exception $e) {
        $pdo->rollBack();
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
    exit;
}
?>
