<?php
require_once __DIR__ . '/../includes/functions.php';

header('Content-Type: application/json');

$action = $_POST['action'] ?? '';

if ($action === 'add') {
    $productId = (int)($_POST['product_id'] ?? 0);
    $quantity = max(1, (int)($_POST['quantity'] ?? 1));

    if ($productId <= 0) {
        echo json_encode(['success' => false, 'message' => 'Producto no válido']);
        exit;
    }

    $stmt = $pdo->prepare("SELECT id, nombre, stock, precio_venta, precio_descuento FROM productos WHERE id = ? AND estado = 'activo'");
    $stmt->execute([$productId]);
    $prod = $stmt->fetch();

    if (!$prod) {
        echo json_encode(['success' => false, 'message' => 'Producto no encontrado o inactivo']);
        exit;
    }

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $currentInCart = isset($_SESSION['cart'][$productId]) ? (int)$_SESSION['cart'][$productId]['cantidad'] : 0;
    $newTotal = $currentInCart + $quantity;

    if ($newTotal > (int)$prod['stock']) {
        echo json_encode([
            'success' => false,
            'message' => 'Solo hay ' . $prod['stock'] . ' unidades disponibles de este producto.'
        ]);
        exit;
    }

    $_SESSION['cart'][$productId] = [
        'id' => $prod['id'],
        'cantidad' => $newTotal
    ];

    echo json_encode([
        'success' => true,
        'message' => 'Producto añadido al carrito correctamente',
        'cartCount' => getCartCount()
    ]);
    exit;
}

if ($action === 'update') {
    $productId = (int)($_POST['product_id'] ?? 0);
    $quantity = (int)($_POST['quantity'] ?? 1);

    if ($productId <= 0 || !isset($_SESSION['cart'][$productId])) {
        echo json_encode(['success' => false, 'message' => 'Elemento no encontrado en carrito']);
        exit;
    }

    if ($quantity <= 0) {
        unset($_SESSION['cart'][$productId]);
    } else {
        $stmt = $pdo->prepare("SELECT stock FROM productos WHERE id = ?");
        $stmt->execute([$productId]);
        $stock = (int)$stmt->fetchColumn();

        if ($quantity > $stock) {
            echo json_encode(['success' => false, 'message' => "Stock insuficiente. Máximo: $stock"]);
            exit;
        }
        $_SESSION['cart'][$productId]['cantidad'] = $quantity;
    }

    echo json_encode([
        'success' => true,
        'cartCount' => getCartCount()
    ]);
    exit;
}

if ($action === 'remove') {
    $productId = (int)($_POST['product_id'] ?? 0);
    if (isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
    }
    echo json_encode([
        'success' => true,
        'message' => 'Producto eliminado del carrito',
        'cartCount' => getCartCount()
    ]);
    exit;
}

if ($action === 'apply_coupon') {
    $code = strtoupper(trim($_POST['code'] ?? ''));
    if (empty($code)) {
        unset($_SESSION['applied_coupon']);
        echo json_encode(['success' => false, 'message' => 'Código de cupón vacío']);
        exit;
    }

    $stmt = $pdo->prepare("SELECT * FROM cupones WHERE codigo = ? AND estado = 'activo' AND (fecha_fin IS NULL OR fecha_fin >= CURDATE())");
    $stmt->execute([$code]);
    $cup = $stmt->fetch();

    if ($cup) {
        $_SESSION['applied_coupon'] = $cup['codigo'];
        echo json_encode(['success' => true, 'message' => 'Cupón aplicado con éxito']);
    } else {
        unset($_SESSION['applied_coupon']);
        echo json_encode(['success' => false, 'message' => 'Cupón inválido o caducado']);
    }
    exit;
}

if ($action === 'save_for_later') {
    if (!isLoggedIn()) {
        echo json_encode(['success' => false, 'message' => 'Debes iniciar sesión para guardar tu carrito']);
        exit;
    }
    $userId = $_SESSION['user_id'];
    $json = json_encode($_SESSION['cart'] ?? []);

    $stmt = $pdo->prepare("INSERT INTO carrito_guardado (usuario_id, contenido_json) VALUES (?, ?) ON DUPLICATE KEY UPDATE contenido_json = ?");
    $stmt->execute([$userId, $json, $json]);

    echo json_encode(['success' => true, 'message' => 'Carrito guardado para tu próxima visita']);
    exit;
}

echo json_encode(['success' => false, 'message' => 'Acción inválida']);
