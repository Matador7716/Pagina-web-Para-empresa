<?php
require_once '../../config/db.php';

header('Content-Type: application/json');

$search = $_GET['search'] ?? '';
$category_id = $_GET['category_id'] ?? 'all';

$sql = "SELECT id, name, sale_price, stock, barcode FROM products WHERE status = 1";
$params = [];

if ($search) {
    $sql .= " AND (name LIKE ? OR barcode = ?)";
    $params[] = "%$search%";
    $params[] = $search;
}

if ($category_id !== 'all') {
    $sql .= " AND category_id = ?";
    $params[] = $category_id;
}

$sql .= " ORDER BY name ASC";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$products = $stmt->fetchAll();

echo json_encode($products);
?>
