<?php
session_start();
if (!isset($_SESSION['user_id'])) exit;
require_once '../config/db.php';
require_once '../includes/csrf.php';

check_csrf();

$action = $_GET['action'] ?? '';

if ($action === 'add') {
    $name = $_POST['name'] ?? '';
    $ruc = $_POST['ruc'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';

    $stmt = $pdo->prepare("INSERT INTO suppliers (name, ruc, phone, email, address) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $ruc, $phone, $email, $address]);
} elseif ($action === 'edit') {
    $id = $_POST['id'] ?? 0;
    $name = $_POST['name'] ?? '';
    $ruc = $_POST['ruc'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';

    $stmt = $pdo->prepare("UPDATE suppliers SET name = ?, ruc = ?, phone = ?, email = ?, address = ? WHERE id = ?");
    $stmt->execute([$name, $ruc, $phone, $email, $address, $id]);
} elseif ($action === 'delete') {
    $id = $_GET['id'] ?? 0;
    $stmt = $pdo->prepare("DELETE FROM suppliers WHERE id = ?");
    $stmt->execute([$id]);
}

header('Location: ../suppliers.php');
exit;
?>
