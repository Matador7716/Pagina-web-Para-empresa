<?php
require_once '../../config/db.php';
require_once '../../includes/csrf.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!check_csrf($_POST['csrf_token'] ?? '')) {
        echo json_encode(['success' => false, 'message' => 'Token CSRF inválido']);
        exit;
    }

    $user_id = $_SESSION['user_id'];
    $cash_register_id = $_POST['cash_register_id'];
    $customer_name = $_POST['customer_name'] ?: 'Público General';
    $payment_method = $_POST['payment_method'];
    $discount = $_POST['discount'] ?: 0;
    $items = $_POST['items'];

    try {
        $pdo->beginTransaction();

        $subtotal = 0;
        foreach ($items as $item) {
            $subtotal += $item['quantity'] * $item['sale_price'];
        }
        $final_total = $subtotal - $discount;

        // 1. Insertar Venta
        $stmt = $pdo->prepare("INSERT INTO sales (user_id, cash_register_id, customer_name, total_amount, discount_amount, final_amount, payment_method) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$user_id, $cash_register_id, $customer_name, $subtotal, $discount, $final_total, $payment_method]);
        $sale_id = $pdo->lastInsertId();

        // 2. Insertar Detalle y Actualizar Stock
        $stmt_item = $pdo->prepare("INSERT INTO sale_items (sale_id, product_id, quantity, unit_price, subtotal) VALUES (?, ?, ?, ?, ?)");
        $stmt_stock = $pdo->prepare("UPDATE products SET stock = stock - ? WHERE id = ?");

        foreach ($items as $item) {
            $item_subtotal = $item['quantity'] * $item['sale_price'];
            $stmt_item->execute([$sale_id, $item['id'], $item['quantity'], $item['sale_price'], $item_subtotal]);
            $stmt_stock->execute([$item['quantity'], $item['id']]);
        }

        $pdo->commit();
        echo json_encode(['success' => true, 'sale_id' => $sale_id]);
    } catch (Exception $e) {
        $pdo->rollBack();
        echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
    }
}
?>
