<?php
require_once __DIR__ . '/../includes/functions.php';

header('Content-Type: application/json');

if (!isLoggedIn()) {
    echo json_encode(['success' => false, 'need_login' => true, 'message' => 'Inicia sesión para usar tu lista de deseos']);
    exit;
}

$action = $_POST['action'] ?? '';
$userId = $_SESSION['user_id'];

if ($action === 'toggle') {
    $productId = (int)($_POST['product_id'] ?? 0);
    if ($productId <= 0) {
        echo json_encode(['success' => false, 'message' => 'Producto inválido']);
        exit;
    }

    $chk = $pdo->prepare("SELECT id FROM wishlist WHERE usuario_id = ? AND producto_id = ?");
    $chk->execute([$userId, $productId]);
    $exists = $chk->fetch();

    if ($exists) {
        $del = $pdo->prepare("DELETE FROM wishlist WHERE id = ?");
        $del->execute([$exists['id']]);
        echo json_encode(['success' => true, 'added' => false, 'message' => 'Eliminado de tu lista de deseos']);
    } else {
        $ins = $pdo->prepare("INSERT INTO wishlist (usuario_id, producto_id) VALUES (?, ?)");
        $ins->execute([$userId, $productId]);
        echo json_encode(['success' => true, 'added' => true, 'message' => 'Añadido a tu lista de deseos']);
    }
    exit;
}

echo json_encode(['success' => false, 'message' => 'Acción inválida']);
