<?php
session_start();
if (!isset($_SESSION['user_id'])) exit;
require_once '../config/db.php';
require_once '../includes/csrf.php';

check_csrf();

$action = $_GET['action'] ?? '';

if ($action === 'add') {
    $code = $_POST['code'] ?? '';
    $name = $_POST['name'] ?? '';
    $desc = $_POST['description'] ?? '';
    $cat_id = $_POST['category_id'] ?? null;
    $p_price = $_POST['purchase_price'] ?? 0;
    $s_price = $_POST['sale_price'] ?? 0;
    $stock = $_POST['stock'] ?? 0;
    $min_stock = $_POST['min_stock'] ?? 5;

    $stmt = $pdo->prepare("INSERT INTO products (code, name, description, category_id, purchase_price, sale_price, stock, min_stock) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$code, $name, $desc, $cat_id, $p_price, $s_price, $stock, $min_stock]);
} elseif ($action === 'edit') {
    $id = $_POST['id'] ?? 0;
    $code = $_POST['code'] ?? '';
    $name = $_POST['name'] ?? '';
    $desc = $_POST['description'] ?? '';
    $cat_id = $_POST['category_id'] ?? null;
    $p_price = $_POST['purchase_price'] ?? 0;
    $s_price = $_POST['sale_price'] ?? 0;
    $stock = $_POST['stock'] ?? 0;
    $min_stock = $_POST['min_stock'] ?? 5;

    $stmt = $pdo->prepare("UPDATE products SET code = ?, name = ?, description = ?, category_id = ?, purchase_price = ?, sale_price = ?, stock = ?, min_stock = ? WHERE id = ?");
    $stmt->execute([$code, $name, $desc, $cat_id, $p_price, $s_price, $stock, $min_stock, $id]);
} elseif ($action === 'delete') {
    $id = $_GET['id'] ?? 0;
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$id]);
}

header('Location: ../products.php');
exit;
?>
