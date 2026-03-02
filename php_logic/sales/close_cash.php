<?php
require_once '../../config/db.php';
require_once '../../includes/csrf.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!check_csrf($_POST['csrf_token'] ?? '')) {
        echo json_encode(['success' => false, 'message' => 'Token CSRF inválido']);
        exit;
    }

    $id = $_POST['id'];
    $closing_balance = $_POST['closing_balance'];

    try {
        $stmt = $pdo->prepare("UPDATE cash_registers SET closing_balance = ?, closing_date = CURRENT_TIMESTAMP, status = 'closed' WHERE id = ?");
        $stmt->execute([$closing_balance, $id]);
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
    }
}
?>
