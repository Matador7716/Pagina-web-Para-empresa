<?php
require_once '../../config/db.php';
require_once '../../includes/csrf.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!check_csrf($_POST['csrf_token'] ?? '')) {
        echo json_encode(['success' => false, 'message' => 'Token CSRF inválido']);
        exit;
    }

    $cash_register_id = $_POST['cash_register_id'];
    $type = $_POST['type'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];

    try {
        $stmt = $pdo->prepare("INSERT INTO cash_movements (cash_register_id, type, amount, description) VALUES (?, ?, ?, ?)");
        $stmt->execute([$cash_register_id, $type, $amount, $description]);
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
    }
}
?>
