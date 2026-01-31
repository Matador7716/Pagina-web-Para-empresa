<?php
session_start();
if (!isset($_SESSION['user_id'])) exit;
require_once '../config/db.php';
require_once '../includes/csrf.php';

check_csrf();

$action = $_GET['action'] ?? '';

if ($action === 'add') {
    $name = $_POST['name'] ?? '';
    $dni = $_POST['dni_ruc'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';

    $stmt = $pdo->prepare("INSERT INTO customers (name, dni_ruc, phone, email, address) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $dni, $phone, $email, $address]);
} elseif ($action === 'edit') {
    $id = $_POST['id'] ?? 0;
    $name = $_POST['name'] ?? '';
    $dni = $_POST['dni_ruc'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';

    $stmt = $pdo->prepare("UPDATE customers SET name = ?, dni_ruc = ?, phone = ?, email = ?, address = ? WHERE id = ?");
    $stmt->execute([$name, $dni, $phone, $email, $address, $id]);
} elseif ($action === 'delete') {
    $id = $_GET['id'] ?? 0;
    $stmt = $pdo->prepare("DELETE FROM customers WHERE id = ?");
    $stmt->execute([$id]);
}

header('Location: ../customers.php');
exit;
?>
