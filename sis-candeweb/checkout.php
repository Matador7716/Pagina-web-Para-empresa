<?php
require_once __DIR__ . '/includes/functions.php';

$pageTitle = "Finalizar Compra - SIS CandeWeb Botica Cusco";
$shippingMethod = $_SESSION['shipping_method'] ?? 'local';
$cartTotals = calculateCartTotals($pdo, null, $shippingMethod);

if (empty($cartTotals['items'])) {
    header('Location: carrito.php');
    exit;
}

$currentUser = getCurrentUser();
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = "Token de seguridad no válido. Por favor intenta de nuevo.";
    } else {
        $tipoComprobante = $_POST['tipo_comprobante'] ?? 'boleta';
        $docCliente = trim($_POST['documento_cliente'] ?? '');
        $nombreCliente = trim($_POST['nombre_cliente'] ?? '');
        $emailCliente = trim($_POST['email_cliente'] ?? '');
        $telefonoCliente = trim($_POST['telefono_cliente'] ?? '');
        $direccionEnvio = trim($_POST['direccion_envio'] ?? '');
        $ciudadEnvio = trim($_POST['ciudad_envio'] ?? 'Cusco');
        $metodoPago = $_POST['metodo_pago'] ?? 'yape';
        $notas = trim($_POST['notas'] ?? '');

        if (empty($docCliente) || empty($nombreCliente) || empty($emailCliente) || empty($direccionEnvio)) {
            $error = "Por favor completa todos los campos obligatorios de entrega y facturación.";
        } else {
            // Manejo de carga de comprobante si es Yape, Plin o Transferencia
            $comprobanteFile = null;
            if (isset($_FILES['voucher']) && $_FILES['voucher']['error'] === UPLOAD_ERR_OK) {
                $ext = strtolower(pathinfo($_FILES['voucher']['name'], PATHINFO_EXTENSION));
                if (in_array($ext, ['jpg', 'jpeg', 'png', 'pdf', 'webp'])) {
                    $voucherDir = __DIR__ . '/assets/uploads/vouchers/';
                    if (!is_dir($voucherDir)) {
                        mkdir($voucherDir, 0777, true);
                    }
                    $filename = 'voucher_' . time() . '_' . rand(1000, 9999) . '.' . $ext;
                    move_uploaded_file($_FILES['voucher']['tmp_name'], $voucherDir . $filename);
                    $comprobanteFile = 'assets/uploads/vouchers/' . $filename;
                }
            }

            // Iniciar Transacción
            $pdo->beginTransaction();
            try {
                $codigoPedido = generateOrderNumber($pdo);
                $estadoPago = ($metodoPago === 'tarjeta' || $metodoPago === 'paypal') ? 'pagado' : 'pendiente';
                $estadoPedido = ($estadoPago === 'pagado') ? 'Pagado' : 'Pendiente';

                // 1. Insertar Pedido
                $stmt = $pdo->prepare("INSERT INTO pedidos (codigo_pedido, usuario_id, tipo_comprobante, documento_cliente, nombre_cliente, email_cliente, telefono_cliente, direccion_envio, ciudad_envio, metodo_envio, metodo_pago, estado_pago, comprobante_pago, estado_pedido, subtotal, descuento, cupon_codigo, igv, costo_envio, total, notas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                $stmt->execute([
                    $codigoPedido,
                    $currentUser['id'] ?? null,
                    $tipoComprobante,
                    $docCliente,
                    $nombreCliente,
                    $emailCliente,
                    $telefonoCliente,
                    $direccionEnvio,
                    $ciudadEnvio,
                    $shippingMethod,
                    $metodoPago,
                    $estadoPago,
                    $comprobanteFile,
                    $estadoPedido,
                    $cartTotals['subtotal'],
                    $cartTotals['descuento'],
                    $cartTotals['cupon']['codigo'] ?? null,
                    $cartTotals['igv'],
                    $cartTotals['costo_envio'],
                    $cartTotals['total'],
                    $notas
                ]);
                $pedidoId = $pdo->lastInsertId();

                // 2. Insertar detalles y descontar stock
                $stmtDet = $pdo->prepare("INSERT INTO pedido_detalles (pedido_id, producto_id, cantidad, precio_unitario, subtotal) VALUES (?, ?, ?, ?, ?)");
                $stmtStock = $pdo->prepare("UPDATE productos SET stock = stock - ? WHERE id = ?");
                $stmtKardex = $pdo->prepare("INSERT INTO inventario_movimientos (producto_id, usuario_id, tipo, cantidad, stock_anterior, stock_nuevo, motivo, documento_referencia) VALUES (?, ?, 'salida', ?, ?, ?, ?, ?)");

                foreach ($cartTotals['items'] as $item) {
                    $stmtDet->execute([
                        $pedidoId,
                        $item['id'],
                        $item['cantidad'],
                        $item['precio_unitario'],
                        $item['subtotal']
                    ]);

                    // Descontar inventario
                    $stmtStock->execute([$item['cantidad'], $item['id']]);

                    // Registrar Kardex
                    $newStock = $item['stock'] - $item['cantidad'];
                    $stmtKardex->execute([
                        $item['id'],
                        $currentUser['id'] ?? null,
                        $item['cantidad'],
                        $item['stock'],
                        $newStock,
                        'Venta Online ' . $codigoPedido,
                        $codigoPedido
                    ]);
                }

                // 3. Notificación de Pedido
                addNotification(
                    $pdo,
                    $currentUser['id'] ?? null,
                    $pedidoId,
                    'nuevo_pedido',
                    'Nuevo Pedido ' . $codigoPedido,
                    'Tu pedido por S/. ' . number_format($cartTotals['total'], 2) . ' fue registrado con éxito.',
                    'sistema'
                );

                $pdo->commit();

                // Limpiar carrito
                unset($_SESSION['cart']);
                unset($_SESSION['applied_coupon']);

                header('Location: pedido_completado.php?codigo=' . urlencode($codigoPedido));
                exit;

            } catch (Exception $e) {
                $pdo->rollBack();
                $error = "Error al procesar el pedido: " . $e->getMessage();
            }
        }
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<div class="container py-5">
    <div class="row justify-content-center mb-4">
        <div class="col-md-8 text-center">
            <h2 class="fw-bold mb-1">Finalizar Compra</h2>
            <p class="text-muted small">Ingresa tus datos de facturación y selecciona tu medio de pago favorito.</p>
        </div>
    </div>

    <?php if ($error): ?>
        <div class="alert alert-danger py-2 small"><?= e($error) ?></div>
    <?php endif; ?>

    <form method="POST" action="checkout.php" enctype="multipart/form-data">
        <input type="hidden" name="csrf_token" value="<?= getCsrfToken() ?>">

        <div class="row g-4">
            <!-- Datos del Cliente y Envío -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                    <h5 class="fw-bold mb-3"><i class="bi bi-person-lines-fill text-primary me-2"></i>1. Datos de Entrega y Facturación</h5>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Tipo de Comprobante</label>
                        <div class="d-flex gap-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_comprobante" id="compBoleta" value="boleta" checked>
                                <label class="form-check-label small" for="compBoleta">Boleta de Venta</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_comprobante" id="compFactura" value="factura">
                                <label class="form-check-label small" for="compFactura">Factura (Con RUC)</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">DNI o RUC *</label>
                            <input type="text" name="documento_cliente" class="form-control" required placeholder="N° de documento">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Nombre Completo o Razón Social *</label>
                            <input type="text" name="nombre_cliente" class="form-control" required value="<?= e($currentUser ? ($currentUser['nombre'] . ' ' . $currentUser['apellido']) : '') ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Correo Electrónico *</label>
                            <input type="email" name="email_cliente" class="form-control" required value="<?= e($currentUser['email'] ?? '') ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Teléfono / Celular (WhatsApp) *</label>
                            <input type="text" name="telefono_cliente" class="form-control" required placeholder="Ej: 984 123 456" value="<?= e($currentUser['telefono'] ?? '') ?>">
                        </div>
                        <div class="col-12">
                            <label class="form-label small fw-bold">Dirección de Entrega *</label>
                            <input type="text" name="direccion_envio" class="form-control" required placeholder="Av, Jr, Calle, Urbanización, Referencia">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Ciudad / Distrito</label>
                            <input type="text" name="ciudad_envio" class="form-control" value="Cusco">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Instrucciones o Referencia de entrega</label>
                            <input type="text" name="notas" class="form-control" placeholder="Casa blanca, portón azul, etc.">
                        </div>
                    </div>
                </div>

                <!-- Pasarela de Pago -->
                <div class="card border-0 shadow-sm rounded-4 p-4">
                    <h5 class="fw-bold mb-3"><i class="bi bi-wallet2 text-primary me-2"></i>2. Forma de Pago</h5>

                    <div class="list-group gap-2 mb-3">
                        <!-- Yape / Plin -->
                        <label class="list-group-item list-group-item-action d-flex align-items-center gap-3 rounded-3 border p-3 cursor-pointer">
                            <input class="form-check-input flex-shrink-0" type="radio" name="metodo_pago" value="yape" checked onchange="toggleVoucherUpload(true)">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div>
                                    <h6 class="mb-0 fw-bold"><i class="bi bi-qr-code text-primary me-2"></i>Yape y Plin (Perú)</h6>
                                    <small class="text-muted">Paga al instante al número <strong>984 765 432</strong> (CandeWeb Botica)</small>
                                </div>
                                <span class="badge bg-purple text-white" style="background:#6f42c1;">Recomendado</span>
                            </div>
                        </label>

                        <!-- Tarjeta de Débito / Crédito -->
                        <label class="list-group-item list-group-item-action d-flex align-items-center gap-3 rounded-3 border p-3 cursor-pointer">
                            <input class="form-check-input flex-shrink-0" type="radio" name="metodo_pago" value="tarjeta" onchange="toggleVoucherUpload(false)">
                            <div>
                                <h6 class="mb-0 fw-bold"><i class="bi bi-credit-card-2-front text-success me-2"></i>Tarjeta de Crédito o Débito</h6>
                                <small class="text-muted">Visa, Mastercard, American Express (Pasarela Segura SSL)</small>
                            </div>
                        </label>

                        <!-- PayPal -->
                        <label class="list-group-item list-group-item-action d-flex align-items-center gap-3 rounded-3 border p-3 cursor-pointer">
                            <input class="form-check-input flex-shrink-0" type="radio" name="metodo_pago" value="paypal" onchange="toggleVoucherUpload(false)">
                            <div>
                                <h6 class="mb-0 fw-bold"><i class="bi bi-paypal text-primary me-2"></i>PayPal</h6>
                                <small class="text-muted">Pago internacional o saldo en cuenta PayPal</small>
                            </div>
                        </label>

                        <!-- Transferencia Bancaria -->
                        <label class="list-group-item list-group-item-action d-flex align-items-center gap-3 rounded-3 border p-3 cursor-pointer">
                            <input class="form-check-input flex-shrink-0" type="radio" name="metodo_pago" value="transferencia" onchange="toggleVoucherUpload(true)">
                            <div>
                                <h6 class="mb-0 fw-bold"><i class="bi bi-bank text-secondary me-2"></i>Transferencia Bancaria (BCP / BBVA / Interbank)</h6>
                                <small class="text-muted">Adjunta tu constancia de depósito</small>
                            </div>
                        </label>
                    </div>

                    <!-- Adjuntar Voucher para comprobación de pago -->
                    <div id="voucherContainer" class="p-3 bg-light rounded-3">
                        <label class="form-label small fw-bold">Adjuntar foto del comprobante / voucher (opcional si pagas ahora):</label>
                        <input type="file" name="voucher" class="form-control form-control-sm" accept="image/*,application/pdf">
                        <small class="text-muted">Formatos: JPG, PNG, PDF. También podrás enviarlo por WhatsApp con tu número de pedido.</small>
                    </div>
                </div>
            </div>

            <!-- Resumen y Confirmación -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm rounded-4 p-4 sticky-top" style="top: 80px;">
                    <h5 class="fw-bold mb-3">Tu Pedido</h5>

                    <div class="list-group list-group-flush mb-3">
                        <?php foreach ($cartTotals['items'] as $item): ?>
                            <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-secondary rounded-pill"><?= $item['cantidad'] ?>x</span>
                                    <span class="small fw-semibold text-truncate" style="max-width: 200px;"><?= e($item['nombre']) ?></span>
                                </div>
                                <span class="small fw-bold">S/. <?= number_format($item['subtotal'], 2) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <ul class="list-group list-group-flush mb-3 small">
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Subtotal</span>
                            <span>S/. <?= number_format($cartTotals['subtotal'], 2) ?></span>
                        </li>
                        <?php if ($cartTotals['descuento'] > 0): ?>
                            <li class="list-group-item d-flex justify-content-between px-0 text-success">
                                <span>Descuento aplicado</span>
                                <span>-S/. <?= number_format($cartTotals['descuento'], 2) ?></span>
                            </li>
                        <?php endif; ?>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Envío (<?= ucfirst($shippingMethod) ?>)</span>
                            <span><?= $cartTotals['costo_envio'] > 0 ? 'S/. ' . number_format($cartTotals['costo_envio'], 2) : 'GRATIS' ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0 fs-4 fw-bold text-primary border-top">
                            <span>Total</span>
                            <span>S/. <?= number_format($cartTotals['total'], 2) ?></span>
                        </li>
                    </ul>

                    <button type="submit" class="btn btn-success btn-lg w-100 py-3 fw-bold rounded-pill shadow-sm">
                        <i class="bi bi-shield-check me-2"></i> Confirmar y Realizar Pedido
                    </button>

                    <div class="text-center mt-3">
                        <small class="text-muted"><i class="bi bi-lock-fill text-success"></i> Transacción cifrada con SSL de 256 bits.</small>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
function toggleVoucherUpload(show) {
    const box = document.getElementById('voucherContainer');
    if(box) box.style.display = show ? 'block' : 'none';
}
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
