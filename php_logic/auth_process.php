<?php
session_start();
require_once '../config/db.php';
require_once '../includes/csrf.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    check_csrf();
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        header('Location: ../login.php?error=empty');
        exit;
    }

    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['full_name'] = $user['full_name'];
        $_SESSION['role'] = $user['role'];

        header('Location: ../index.php');
        exit;
    } else {
        header('Location: ../login.php?error=1');
        exit;
    }
} else {
    header('Location: ../login.php');
    exit;
}
?>
