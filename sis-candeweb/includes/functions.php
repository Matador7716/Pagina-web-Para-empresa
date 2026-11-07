<?php
/**
 * SIS CandeWeb Ventas - Funciones Utilitarias y Seguridad
 */

require_once __DIR__ . '/../config/db.php';

// Generación y Verificación de Token CSRF
function getCsrfToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verifyCsrfToken($token) {
    if (empty($_SESSION['csrf_token']) || empty($token)) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $token);
}

// Sanitización XSS
function e($string) {
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
}

// Formato de Moneda
function formatMoney($amount, $currency = 'S/.') {
    return $currency . ' ' . number_format((float)$amount, 2, '.', ',');
}

// Autenticación y Sesiones
function isLoggedIn() {
    return !empty($_SESSION['user_id']);
}

function getCurrentUser() {
    if (!isLoggedIn()) return null;
    return [
        'id' => $_SESSION['user_id'],
        'nombre' => $_SESSION['user_nombre'] ?? '',
        'apellido' => $_SESSION['user_apellido'] ?? '',
        'email' => $_SESSION['user_email'] ?? '',
        'rol' => $_SESSION['user_rol'] ?? 'cliente',
        'telefono' => $_SESSION['user_telefono'] ?? ''
    ];
}

function isAdmin() {
    return isLoggedIn() && (($_SESSION['user_rol'] ?? '') === 'admin');
}

function isStaff() {
    return isLoggedIn() && in_array($_SESSION['user_rol'] ?? '', ['admin', 'vendedor']);
}

function requireAuth($role = null) {
    if (!isLoggedIn()) {
        $loginUrl = (strpos($_SERVER['REQUEST_URI'] ?? '', '/admin/') !== false) ? '../login.php' : 'login.php';
        header('Location: ' . $loginUrl . '?msg=debe_iniciar_sesion');
        exit;
    }
    if ($role === 'admin' && !isAdmin()) {
        header('Location: ../index.php?error=acceso_denegado');
        exit;
    }
    if ($role === 'staff' && !isStaff()) {
        header('Location: ../index.php?error=acceso_denegado');
        exit;
    }
}

// Generador de Código de Pedido Único
function generateOrderNumber($pdo) {
    $year = date('Y');
    $stmt = $pdo->query("SELECT COUNT(*) AS total FROM pedidos WHERE YEAR(created_at) = '$year'");
    $row = $stmt->fetch();
    $next = ($row['total'] ?? 0) + 1;
    return 'PED-' . $year . '-' . str_pad($next, 5, '0', STR_PAD_LEFT);
}

// Carrito en Sesión
function getCartItems() {
    return $_SESSION['cart'] ?? [];
}

function getCartCount() {
    $cart = getCartItems();
    $total = 0;
    foreach ($cart as $item) {
        $total += (int)$item['cantidad'];
    }
    return $total;
}

function calculateCartTotals($pdo, $couponCode = null, $shippingMethod = 'local') {
    global $sysConfig;
    $cart = getCartItems();
    $subtotal = 0.00;
    $itemsDetails = [];

    if (!empty($cart)) {
        $ids = array_keys($cart);
        $placeholders = implode(',', array_fill(0, count($ids), '?'));
        $stmt = $pdo->prepare("SELECT * FROM productos WHERE id IN ($placeholders) AND estado = 'activo'");
        $stmt->execute($ids);
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $prodMap = [];
        foreach ($products as $p) {
            $prodMap[$p['id']] = $p;
        }

        foreach ($cart as $prodId => $cartData) {
            if (isset($prodMap[$prodId])) {
                $p = $prodMap[$prodId];
                $qty = (int)$cartData['cantidad'];
                // Asegurar no exceder stock
                if ($qty > $p['stock']) {
                    $qty = max(1, $p['stock']);
                    $_SESSION['cart'][$prodId]['cantidad'] = $qty;
                }
                $unitPrice = (!empty($p['precio_descuento']) && $p['precio_descuento'] > 0) ? (float)$p['precio_descuento'] : (float)$p['precio_venta'];
                $itemSubtotal = $unitPrice * $qty;
                $subtotal += $itemSubtotal;

                $itemsDetails[] = [
                    'id' => $p['id'],
                    'nombre' => $p['nombre'],
                    'slug' => $p['slug'],
                    'imagen' => $p['imagen_principal'],
                    'precio_unitario' => $unitPrice,
                    'precio_compra' => (float)$p['precio_compra'],
                    'cantidad' => $qty,
                    'stock' => (int)$p['stock'],
                    'subtotal' => $itemSubtotal,
                    'codigo_barra' => $p['codigo_barra']
                ];
            }
        }
    }

    // Costo de Envío
    $costoEnvio = 0.00;
    if ($shippingMethod === 'local') {
        $costoEnvio = (float)($sysConfig['costo_envio_local'] ?? 8.00);
    } elseif ($shippingMethod === 'nacional') {
        $costoEnvio = (float)($sysConfig['costo_envio_nacional'] ?? 18.00);
    } elseif ($shippingMethod === 'recojo_tienda') {
        $costoEnvio = 0.00;
    }

    // Cupones y Descuentos
    $descuento = 0.00;
    $cuponValido = null;
    $couponCode = $couponCode ?? ($_SESSION['applied_coupon'] ?? null);

    if (!empty($couponCode)) {
        $cStmt = $pdo->prepare("SELECT * FROM cupones WHERE codigo = ? AND estado = 'activo' AND (fecha_fin IS NULL OR fecha_fin >= CURDATE())");
        $cStmt->execute([strtoupper(trim($couponCode))]);
        $cup = $cStmt->fetch();

        if ($cup) {
            if ($subtotal >= (float)$cup['monto_minimo']) {
                if ($cup['tipo'] === 'porcentaje') {
                    $descuento = round(($subtotal * (float)$cup['valor']) / 100, 2);
                } else {
                    $descuento = min($subtotal, (float)$cup['valor']);
                }
                $cuponValido = $cup;
                $_SESSION['applied_coupon'] = $cup['codigo'];
            } else {
                unset($_SESSION['applied_coupon']);
            }
        } else {
            unset($_SESSION['applied_coupon']);
        }
    }

    $subtotalConDescuento = max(0, $subtotal - $descuento);
    // IGV incluido del 18% (en Perú los precios mostrados incluyen IGV)
    $igvRate = ((float)($sysConfig['igv_porcentaje'] ?? 18.00)) / 100;
    $baseImponible = round($subtotalConDescuento / (1 + $igvRate), 2);
    $igv = round($subtotalConDescuento - $baseImponible, 2);
    $total = $subtotalConDescuento + $costoEnvio;

    return [
        'items' => $itemsDetails,
        'count' => count($itemsDetails),
        'subtotal' => $subtotal,
        'descuento' => $descuento,
        'cupon' => $cuponValido,
        'base_imponible' => $baseImponible,
        'igv' => $igv,
        'costo_envio' => $costoEnvio,
        'metodo_envio' => $shippingMethod,
        'total' => $total
    ];
}

// Registrar Notificación en Sistema
function addNotification($pdo, $userId, $orderId, $tipo, $titulo, $mensaje, $canal = 'sistema') {
    try {
        $stmt = $pdo->prepare("INSERT INTO notificaciones (usuario_id, pedido_id, tipo, titulo, mensaje, canal) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$userId, $orderId, $tipo, $titulo, $mensaje, $canal]);
    } catch (Exception $e) {
        // Silencioso para no romper flujo principal
    }
}
