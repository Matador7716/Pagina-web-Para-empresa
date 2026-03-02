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
    $username = $_POST['username'];
    $full_name = $_POST['full_name'];
    $role = $_POST['role'];
    $password = $_POST['password'] ?? '';

    try {
        if ($id) {
            if ($password) {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("UPDATE users SET username=?, full_name=?, role=?, password=? WHERE id=?");
                $stmt->execute([$username, $full_name, $role, $hashed_password, $id]);
            } else {
                $stmt = $pdo->prepare("UPDATE users SET username=?, full_name=?, role=? WHERE id=?");
                $stmt->execute([$username, $full_name, $role, $id]);
            }
        } else {
            $hashed_password = password_hash($password ?: '123456', PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (username, full_name, role, password) VALUES (?, ?, ?, ?)");
            $stmt->execute([$username, $full_name, $role, $hashed_password]);
        }
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
    }
}
?>
