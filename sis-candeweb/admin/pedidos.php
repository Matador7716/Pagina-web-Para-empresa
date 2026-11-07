<?php
$activePage = 'pedidos';
$panelTitle = "Gestión de Pedidos & Ventas - SIS CandeWeb";
require_once __DIR__ . '/header.php';

$mensaje = '';
$error = '';

// Cambio de estado de pedido o guía courier
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = "Token inválido.";
    } else {
        $pedidoId = (int)$_POST['pedido_id'];
        $nuevoEstado = $_POST['estado_pedido'];
        $estadoPago = $_POST['estado_pago'];
        $guia = trim($_POST['numero_guia'] ?? '');
        $courier = trim($_POST['empresa_courier'] ?? '');

        $stmt = $pdo->prepare("UPDATE pedidos SET estado_pedido = ?, estado_pago = ?, numero_guia = ?, empresa_courier = ? WHERE id = ?");
        $stmt->execute([$nuevoEstado, $estadoPago, $guia, $courier, $pedidoId]);

        // Registrar notificación al usuario
        $pStmt = $pdo->prepare("SELECT usuario_id, codigo_pedido FROM pedidos WHERE id = ?");
        $pStmt->execute([$pedidoId]);
        $pedRow = $pStmt->fetch();

        addNotification(
            $pdo,
            $pedRow['usuario_id'],
            $pedidoId,
            'estado_pedido',
            'Tu pedido ' . $pedRow['codigo_pedido'] . ' cambió a: ' . $nuevoEstado,
            'El estado actual de tu pedido ha sido actualizado a ' . $nuevoEstado . ($guia ? " (Guía: $guia - Courier: $courier)" : ""),
            'email'
        );

        $mensaje = "Pedido actualizado correctamente.";
    }
}

// Filtro de estado
$filtroEstado = trim($_GET['estado'] ?? '');
if ($filtroEstado !== '') {
    $stmt = $pdo->prepare("SELECT * FROM pedidos WHERE estado_pedido = ? ORDER BY id DESC");
    $stmt->execute([$filtroEstado]);
} else {
    $stmt = $pdo->query("SELECT * FROM pedidos ORDER BY id DESC");
}
$pedidos = $stmt->fetchAll();

// Si se pide ver detalle
$verId = isset($_GET['accion']) && $_GET['accion'] === 'ver' ? (int)($_GET['id'] ?? 0) : 0;
$pedidoVer = null;
$pedidoVerDetalles = [];
if ($verId > 0) {
    $vStmt = $pdo->prepare("SELECT * FROM pedidos WHERE id = ?");
    $vStmt->execute([$verId]);
    $pedidoVer = $vStmt->fetch();

    $dStmt = $pdo->prepare("SELECT d.*, p.nombre, p.imagen_principal FROM pedido_detalles d JOIN productos p ON d.producto_id = p.id WHERE d.pedido_id = ?");
    $dStmt->execute([$verId]);
    $pedidoVerDetalles = $dStmt->fetchAll();
}
?>

<?php if ($mensaje): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i><?= e($mensaje) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<?php if ($error): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i><?= e($error) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<!-- Detalle de Pedido si está seleccionado -->
<?php if ($pedidoVer): ?>
    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white mb-4 border-start border-primary border-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-bold mb-0">Detalle del Pedido: <?= e($pedidoVer['codigo_pedido']) ?></h5>
            <a href="pedidos.php" class="btn btn-sm btn-outline-secondary">Cerrar Detalle</a>
        </div>

        <form method="POST" action="pedidos.php" class="row g-3">
            <input type="hidden" name="csrf_token" value="<?= getCsrfToken() ?>">
            <input type="hidden" name="pedido_id" value="<?= $pedidoVer['id'] ?>">

            <div class="col-md-3">
                <label class="form-label small fw-bold">Estado del Pedido:</label>
                <select name="estado_pedido" class="form-select form-select-sm">
                    <?php foreach (['Pendiente', 'Pagado', 'En proceso', 'Enviado', 'Entregado', 'Cancelado'] as $est): ?>
                        <option value="<?= $est ?>" <?= $pedidoVer['estado_pedido'] === $est ? 'selected' : '' ?>><?= $est ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label small fw-bold">Estado del Pago:</label>
                <select name="estado_pago" class="form-select form-select-sm">
                    <option value="pendiente" <?= $pedidoVer['estado_pago'] === 'pendiente' ? 'selected' : '' ?>>Pendiente</option>
                    <option value="pagado" <?= $pedidoVer['estado_pago'] === 'pagado' ? 'selected' : '' ?>>Pagado</option>
                    <option value="rechazado" <?= $pedidoVer['estado_pago'] === 'rechazado' ? 'selected' : '' ?>>Rechazado</option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label small fw-bold">Courier / Repartidor:</label>
                <input type="text" name="empresa_courier" class="form-control form-control-sm" value="<?= e($pedidoVer['empresa_courier'] ?? '') ?>" placeholder="Olva, Shalom o Motorizado">
            </div>

            <div class="col-md-3">
                <label class="form-label small fw-bold">N° Guía / Tracking:</label>
                <input type="text" name="numero_guia" class="form-control form-control-sm" value="<?= e($pedidoVer['numero_guia'] ?? '') ?>" placeholder="Tracking number">
            </div>

            <div class="col-12 text-end">
                <a href="imprimir_comprobante.php?id=<?= $pedidoVer['id'] ?>" target="_blank" class="btn btn-sm btn-outline-dark me-2">
                    <i class="bi bi-printer me-1"></i> Imprimir Boleta/Factura
                </a>
                <button type="submit" class="btn btn-sm btn-primary px-4 fw-bold">Guardar Cambios de Pedido</button>
            </div>
        </form>

        <hr class="my-4">

        <h6 class="fw-bold mb-3">Items del Pedido:</h6>
        <div class="table-responsive">
            <table class="table table-sm align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Producto</th>
                        <th class="text-center">Cantidad</th>
                        <th class="text-end">P. Unitario</th>
                        <th class="text-end">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pedidoVerDetalles as $d): ?>
                        <tr>
                            <td><?= e($d['nombre']) ?></td>
                            <td class="text-center"><?= $d['cantidad'] ?></td>
                            <td class="text-end">S/. <?= number_format($d['precio_unitario'], 2) ?></td>
                            <td class="text-end fw-bold">S/. <?= number_format($d['subtotal'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php endif; ?>

<!-- Listado general de pedidos -->
<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
        <div>
            <h5 class="fw-bold mb-0">Listado de Pedidos</h5>
            <small class="text-muted">Filtrar por estado</small>
        </div>
        <div class="btn-group btn-group-sm">
            <a href="pedidos.php" class="btn btn-<?= empty($filtroEstado) ? 'primary' : 'outline-primary' ?>">Todos</a>
            <a href="pedidos.php?estado=Pendiente" class="btn btn-<?= $filtroEstado === 'Pendiente' ? 'primary' : 'outline-primary' ?>">Pendientes</a>
            <a href="pedidos.php?estado=Pagado" class="btn btn-<?= $filtroEstado === 'Pagado' ? 'primary' : 'outline-primary' ?>">Pagados</a>
            <a href="pedidos.php?estado=Enviado" class="btn btn-<?= $filtroEstado === 'Enviado' ? 'primary' : 'outline-primary' ?>">Enviados</a>
            <a href="pedidos.php?estado=Entregado" class="btn btn-<?= $filtroEstado === 'Entregado' ? 'primary' : 'outline-primary' ?>">Entregados</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Código</th>
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Comprobante</th>
                    <th>Método Pago</th>
                    <th>Estado Pedido</th>
                    <th>Total</th>
                    <th class="text-end">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pedidos as $p): ?>
                    <tr>
                        <td><strong><?= e($p['codigo_pedido']) ?></strong></td>
                        <td class="small text-muted"><?= date('d/m/Y H:i', strtotime($p['created_at'])) ?></td>
                        <td>
                            <div class="fw-bold small"><?= e($p['nombre_cliente']) ?></div>
                            <small class="text-muted"><?= e($p['telefono_cliente']) ?></small>
                        </td>
                        <td><span class="badge bg-light text-dark border"><?= strtoupper($p['tipo_comprobante']) ?></span></td>
                        <td>
                            <span class="badge bg-secondary"><?= strtoupper($p['metodo_pago']) ?></span>
                            <?php if ($p['comprobante_pago']): ?>
                                <a href="../<?= e($p['comprobante_pago']) ?>" target="_blank" class="small text-primary d-block mt-1"><i class="bi bi-file-earmark-image"></i> Ver Voucher</a>
                            <?php endif; ?>
                        </td>
                        <td>
                            <span class="badge bg-<?= in_array($p['estado_pedido'], ['Pagado', 'Entregado']) ? 'success' : 'warning' ?>">
                                <?= e($p['estado_pedido']) ?>
                            </span>
                        </td>
                        <td class="fw-bold">S/. <?= number_format($p['total'], 2) ?></td>
                        <td class="text-end">
                            <a href="pedidos.php?accion=ver&id=<?= $p['id'] ?>" class="btn btn-sm btn-light border" title="Administrar"><i class="bi bi-gear"></i> Gestionar</a>
                            <a href="imprimir_comprobante.php?id=<?= $p['id'] ?>" target="_blank" class="btn btn-sm btn-light border" title="Comprobante"><i class="bi bi-printer"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
