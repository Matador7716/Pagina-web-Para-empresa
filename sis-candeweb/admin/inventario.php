<?php
$activePage = 'inventario';
$panelTitle = "Control de Inventario & Kardex - SIS CandeWeb";
require_once __DIR__ . '/header.php';

$mensaje = '';
$error = '';

// Procesar entrada, salida o ajuste manual
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = "Token no válido.";
    } else {
        $productoId = (int)$_POST['producto_id'];
        $tipo = $_POST['tipo']; // 'entrada', 'salida', 'ajuste'
        $cantidad = (int)$_POST['cantidad'];
        $motivo = trim($_POST['motivo']);
        $doc = trim($_POST['documento_referencia'] ?? '');

        if ($productoId <= 0 || $cantidad <= 0 || empty($motivo)) {
            $error = "Por favor completa todos los campos requeridos.";
        } else {
            $pStmt = $pdo->prepare("SELECT stock FROM productos WHERE id = ?");
            $pStmt->execute([$productoId]);
            $currentStock = (int)$pStmt->fetchColumn();

            $newStock = $currentStock;
            if ($tipo === 'entrada') {
                $newStock = $currentStock + $cantidad;
            } elseif ($tipo === 'salida') {
                if ($cantidad > $currentStock) {
                    $error = "La cantidad a retirar no puede ser mayor al stock actual ($currentStock).";
                } else {
                    $newStock = $currentStock - $cantidad;
                }
            } elseif ($tipo === 'ajuste') {
                $newStock = $cantidad;
            }

            if (empty($error)) {
                $pdo->beginTransaction();
                try {
                    $uStmt = $pdo->prepare("UPDATE productos SET stock = ? WHERE id = ?");
                    $uStmt->execute([$newStock, $productoId]);

                    $kStmt = $pdo->prepare("INSERT INTO inventario_movimientos (producto_id, usuario_id, tipo, cantidad, stock_anterior, stock_nuevo, motivo, documento_referencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                    $kStmt->execute([$productoId, $currentUser['id'], $tipo, $cantidad, $currentStock, $newStock, $motivo, $doc]);

                    $pdo->commit();
                    $mensaje = "Movimiento de inventario registrado con éxito.";
                } catch (Exception $e) {
                    $pdo->rollBack();
                    $error = "Error al registrar movimiento: " . $e->getMessage();
                }
            }
        }
    }
}

// Filtro de bajo stock
$filtro = $_GET['filtro'] ?? '';
$where = "WHERE estado = 'activo'";
if ($filtro === 'bajo_stock') {
    $where .= " AND stock <= stock_minimo";
}

$productos = $pdo->query("SELECT * FROM productos $where ORDER BY stock ASC")->fetchAll();

// Historial reciente de movimientos Kardex
$movimientos = $pdo->query("
    SELECT m.*, p.nombre as producto_nombre, u.nombre as usuario_nombre
    FROM inventario_movimientos m
    JOIN productos p ON m.producto_id = p.id
    LEFT JOIN usuarios u ON m.usuario_id = u.id
    ORDER BY m.id DESC LIMIT 20
")->fetchAll();
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

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="fw-bold mb-0">Control de Inventario</h4>
        <small class="text-muted">Kardex de entradas y salidas de medicamentos y productos</small>
    </div>
    <div class="d-flex gap-2">
        <a href="inventario.php" class="btn btn-sm btn-<?= empty($filtro) ? 'primary' : 'outline-primary' ?>">Ver Todo el Stock</a>
        <a href="inventario.php?filtro=bajo_stock" class="btn btn-sm btn-<?= $filtro === 'bajo_stock' ? 'danger' : 'outline-danger' ?>">
            <i class="bi bi-exclamation-triangle me-1"></i> Alertas Stock Mínimo
        </a>
        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#movimientoModal">
            <i class="bi bi-arrow-left-right me-1"></i> Nuevo Movimiento
        </button>
    </div>
</div>

<!-- Tabla de Existencias Actuales -->
<div class="card border-0 shadow-sm rounded-4 p-4 bg-white mb-4">
    <h5 class="fw-bold mb-3">Existencias y Niveles de Stock</h5>
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Producto</th>
                    <th>Lote</th>
                    <th>Vencimiento</th>
                    <th class="text-center">Stock Mínimo</th>
                    <th class="text-center">Stock Actual</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $p): ?>
                    <tr>
                        <td class="fw-bold"><?= e($p['nombre']) ?></td>
                        <td><code><?= e($p['lote'] ?? 'S/L') ?></code></td>
                        <td><?= e($p['fecha_vencimiento'] ?? 'N/D') ?></td>
                        <td class="text-center"><?= $p['stock_minimo'] ?></td>
                        <td class="text-center fw-bold fs-6 <?= $p['stock'] <= $p['stock_minimo'] ? 'text-danger' : 'text-success' ?>">
                            <?= $p['stock'] ?>
                        </td>
                        <td>
                            <?php if ($p['stock'] <= 0): ?>
                                <span class="badge bg-danger">Agotado</span>
                            <?php elseif ($p['stock'] <= $p['stock_minimo']): ?>
                                <span class="badge bg-warning text-dark"><i class="bi bi-exclamation-triangle-fill"></i> Reponer Urgente</span>
                            <?php else: ?>
                                <span class="badge bg-success-subtle text-success border border-success-subtle">Normal</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Historial de Movimientos Kardex -->
<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
    <h5 class="fw-bold mb-3"><i class="bi bi-journal-text text-primary me-2"></i>Historial Reciente de Kardex</h5>
    <div class="table-responsive">
        <table class="table table-sm align-middle">
            <thead class="table-light">
                <tr>
                    <th>Fecha</th>
                    <th>Producto</th>
                    <th>Tipo</th>
                    <th class="text-center">Cantidad</th>
                    <th class="text-center">Anterior</th>
                    <th class="text-center">Nuevo</th>
                    <th>Motivo / Guía</th>
                    <th>Usuario</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($movimientos)): ?>
                    <tr><td colspan="8" class="text-center text-muted py-3">No hay movimientos registrados.</td></tr>
                <?php else: ?>
                    <?php foreach ($movimientos as $m): ?>
                        <tr>
                            <td class="small text-muted"><?= date('d/m/Y H:i', strtotime($m['created_at'])) ?></td>
                            <td><?= e($m['producto_nombre']) ?></td>
                            <td>
                                <span class="badge bg-<?= $m['tipo'] === 'entrada' ? 'success' : ($m['tipo'] === 'salida' ? 'danger' : 'info') ?>">
                                    <?= strtoupper($m['tipo']) ?>
                                </span>
                            </td>
                            <td class="text-center fw-bold"><?= $m['cantidad'] ?></td>
                            <td class="text-center"><?= $m['stock_anterior'] ?></td>
                            <td class="text-center fw-bold"><?= $m['stock_nuevo'] ?></td>
                            <td class="small"><?= e($m['motivo']) ?> <?= $m['documento_referencia'] ? '('.e($m['documento_referencia']).')' : '' ?></td>
                            <td class="small text-muted"><?= e($m['usuario_nombre'] ?? 'Sistema') ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Registrar Movimiento -->
<div class="modal fade" id="movimientoModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="inventario.php">
                <input type="hidden" name="csrf_token" value="<?= getCsrfToken() ?>">

                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Registrar Entrada / Salida / Ajuste</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Producto *</label>
                        <select name="producto_id" class="form-select" required>
                            <?php foreach ($productos as $p): ?>
                                <option value="<?= $p['id'] ?>"><?= e($p['nombre']) ?> (Stock: <?= $p['stock'] ?>)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Tipo de Operación *</label>
                        <select name="tipo" class="form-select" required>
                            <option value="entrada">Entrada (Compra / Recepción)</option>
                            <option value="salida">Salida (Muestra, Merma, Venta Externa)</option>
                            <option value="ajuste">Ajuste de Conteo Físico</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Cantidad de Unidades *</label>
                        <input type="number" name="cantidad" class="form-control" min="1" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Motivo o Justificación *</label>
                        <input type="text" name="motivo" class="form-control" placeholder="Ej: Compra según factura F001-492" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">N° de Documento / Guía</label>
                        <input type="text" name="documento_referencia" class="form-control" placeholder="Guía de Remisión o Factura">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary px-4 fw-bold">Registrar en Kardex</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
