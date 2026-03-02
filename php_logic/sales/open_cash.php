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
    $opening_balance = $_POST['opening_balance'] ?: 0;

    try {
        $stmt = $pdo->prepare("INSERT INTO cash_registers (user_id, opening_balance, status) VALUES (?, ?, 'open')");
        $stmt->execute([$user_id, $opening_balance]);
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
    }
}
?>
