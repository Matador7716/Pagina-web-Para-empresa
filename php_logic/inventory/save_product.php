<?php
require_once '../../config/db.php';
require_once '../../includes/csrf.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!check_csrf($_POST['csrf_token'] ?? '')) {
        echo json_encode(['success' => false, 'message' => 'Token CSRF inválido']);
        exit;
    }

    $id = $_POST['id'] ?? null;
    $barcode = $_POST['barcode'];
    $name = $_POST['name'];
    $category_id = $_POST['category_id'] ?: null;
    $purchase_price = $_POST['purchase_price'] ?: 0;
    $sale_price = $_POST['sale_price'];
    $stock = $_POST['stock'] ?: 0;
    $min_stock = $_POST['min_stock'] ?: 5;

    try {
        if ($id) {
            $stmt = $pdo->prepare("UPDATE products SET barcode=?, name=?, category_id=?, purchase_price=?, sale_price=?, stock=?, min_stock=? WHERE id=?");
            $stmt->execute([$barcode, $name, $category_id, $purchase_price, $sale_price, $stock, $min_stock, $id]);
        } else {
            $stmt = $pdo->prepare("INSERT INTO products (barcode, name, category_id, purchase_price, sale_price, stock, min_stock) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$barcode, $name, $category_id, $purchase_price, $sale_price, $stock, $min_stock]);
        }
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
    }
}
?>
