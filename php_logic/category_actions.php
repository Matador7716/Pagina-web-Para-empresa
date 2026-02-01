<?php
session_start();
if (!isset($_SESSION['user_id'])) exit;
require_once '../config/db.php';
require_once '../includes/csrf.php';

check_csrf();

$action = $_GET['action'] ?? '';

if ($action === 'add') {
    $name = $_POST['name'] ?? '';
    $desc = $_POST['description'] ?? '';
    $stmt = $pdo->prepare("INSERT INTO categories (name, description) VALUES (?, ?)");
    $stmt->execute([$name, $desc]);
} elseif ($action === 'edit') {
    $id = $_POST['id'] ?? 0;
    $name = $_POST['name'] ?? '';
    $desc = $_POST['description'] ?? '';
    $stmt = $pdo->prepare("UPDATE categories SET name = ?, description = ? WHERE id = ?");
    $stmt->execute([$name, $desc, $id]);
} elseif ($action === 'delete') {
    $id = $_GET['id'] ?? 0;
    $stmt = $pdo->prepare("DELETE FROM categories WHERE id = ?");
    $stmt->execute([$id]);
}

header('Location: ../categories.php');
exit;
?>
