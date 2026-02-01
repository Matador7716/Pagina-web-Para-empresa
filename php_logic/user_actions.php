<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') exit;
require_once '../config/db.php';
require_once '../includes/csrf.php';

check_csrf();

$action = $_GET['action'] ?? '';

if ($action === 'add') {
    $user = $_POST['username'] ?? '';
    $pass = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
    $name = $_POST['full_name'] ?? '';
    $role = $_POST['role'] ?? 'seller';

    $stmt = $pdo->prepare("INSERT INTO users (username, password, full_name, role) VALUES (?, ?, ?, ?)");
    $stmt->execute([$user, $pass, $name, $role]);
} elseif ($action === 'delete') {
    $id = $_GET['id'] ?? 0;
    // Don't delete yourself
    if ($id != $_SESSION['user_id']) {
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]);
    }
}

header('Location: ../users.php');
exit;
?>
