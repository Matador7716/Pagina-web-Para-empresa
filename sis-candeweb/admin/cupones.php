<?php
$activePage = 'cupones';
$panelTitle = "Gestión de Cupones & Promociones - SIS CandeWeb";
require_once __DIR__ . '/header.php';

$mensaje = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = "Token no válido.";
    } else {
        $codigo = strtoupper(trim($_POST['codigo']));
        $tipo = $_POST['tipo'];
        $valor = (float)$_POST['valor'];
        $minimo = (float)$_POST['monto_minimo'];
        $limite = (int)$_POST['limite_usos'];
        $fin = !empty($_POST['fecha_fin']) ? $_POST['fecha_fin'] : null;

        if (empty($codigo) || $valor <= 0) {
            $error = "Código y valor de descuento son obligatorios.";
        } else {
            $stmt = $pdo->prepare("INSERT INTO cupones (codigo, tipo, valor, monto_minimo, limite_usos, fecha_inicio, fecha_fin, estado) VALUES (?, ?, ?, ?, ?, CURDATE(), ?, 'activo')");
            $stmt->execute([$codigo, $tipo, $valor, $minimo, $limite, $fin]);
            $mensaje = "Cupón promocional creado exitosamente.";
        }
    }
}

$cupones = $pdo->query("SELECT * FROM cupones ORDER BY id DESC")->fetchAll();
?>

<?php if ($mensaje): ?>
    <div class="alert alert-success alert-dismissible fade show"><?= e($mensaje) ?></div>
<?php endif; ?>
<?php if ($error): ?>
    <div class="alert alert-danger alert-dismissible fade show"><?= e($error) ?></div>
<?php endif; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="fw-bold mb-0">Cupones y Descuentos</h4>
        <small class="text-muted">Campañas de marketing digital y fidelización de clientes</small>
    </div>
    <button class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#cuponModal">
        <i class="bi bi-plus-lg me-1"></i> Crear Cupón
    </button>
</div>

<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Código Cupón</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>Compra Mínima</th>
                    <th class="text-center">Usos / Límite</th>
                    <th>Vigencia</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cupones as $c): ?>
                    <tr>
                        <td><span class="badge bg-primary fs-6 font-monospace"><?= e($c['codigo']) ?></span></td>
                        <td><?= $c['tipo'] === 'porcentaje' ? 'Porcentaje (%)' : 'Monto Fijo (S/.)' ?></td>
                        <td class="fw-bold text-success">
                            <?= $c['tipo'] === 'porcentaje' ? $c['valor'] . '%' : 'S/. ' . number_format($c['valor'], 2) ?>
                        </td>
                        <td>S/. <?= number_format($c['monto_minimo'], 2) ?></td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark border"><?= $c['usos_actuales'] ?> / <?= $c['limite_usos'] ?></span>
                        </td>
                        <td class="small">Hasta: <?= e($c['fecha_fin'] ?? 'Ilimitada') ?></td>
                        <td>
                            <span class="badge bg-<?= $c['estado'] === 'activo' ? 'success' : 'danger' ?>"><?= ucfirst($c['estado']) ?></span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Cupón -->
<div class="modal fade" id="cuponModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="cupones.php">
                <input type="hidden" name="csrf_token" value="<?= getCsrfToken() ?>">

                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Crear Nuevo Cupón de Descuento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Código del Cupón *</label>
                        <input type="text" name="codigo" class="form-control text-uppercase" placeholder="EJ: FARMA2025" required>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-6">
                            <label class="form-label small fw-bold">Tipo *</label>
                            <select name="tipo" class="form-select">
                                <option value="porcentaje">Porcentaje (%)</option>
                                <option value="monto_fijo">Monto Fijo (S/.)</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label class="form-label small fw-bold">Valor *</label>
                            <input type="number" step="0.5" name="valor" class="form-control" placeholder="10" required>
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-6">
                            <label class="form-label small fw-bold">Monto Mínimo (S/.)</label>
                            <input type="number" step="0.5" name="monto_minimo" class="form-control" value="0.00">
                        </div>
                        <div class="col-6">
                            <label class="form-label small fw-bold">Límite de Usos</label>
                            <input type="number" name="limite_usos" class="form-control" value="100">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Fecha de Vencimiento</label>
                        <input type="date" name="fecha_fin" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary px-4 fw-bold">Guardar Cupón</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
