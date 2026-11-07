<?php
$activePage = 'clientes';
$panelTitle = "Gestión de Clientes - SIS CandeWeb";
require_once __DIR__ . '/header.php';

$mensaje = '';
$error = '';

// Cambiar estado activo/inactivo
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'toggle_estado') {
    if (verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $id = (int)$_POST['id'];
        $estadoActual = $_POST['estado_actual'];
        $nuevo = ($estadoActual === 'activo') ? 'inactivo' : 'activo';
        $pdo->prepare("UPDATE usuarios SET estado = ? WHERE id = ? AND rol = 'cliente'")->execute([$nuevo, $id]);
        $mensaje = "Estado del cliente actualizado.";
    }
}

$q = trim($_GET['q'] ?? '');
if ($q !== '') {
    $stmt = $pdo->prepare("
        SELECT u.*, COUNT(p.id) as total_pedidos, COALESCE(SUM(p.total), 0) as total_gastado
        FROM usuarios u
        LEFT JOIN pedidos p ON u.id = p.usuario_id AND p.estado_pedido != 'Cancelado'
        WHERE (u.nombre LIKE ? OR u.apellido LIKE ? OR u.email LIKE ? OR u.telefono LIKE ?) AND u.rol = 'cliente'
        GROUP BY u.id
        ORDER BY u.id DESC
    ");
    $stmt->execute(["%$q%", "%$q%", "%$q%", "%$q%"]);
} else {
    $stmt = $pdo->query("
        SELECT u.*, COUNT(p.id) as total_pedidos, COALESCE(SUM(p.total), 0) as total_gastado
        FROM usuarios u
        LEFT JOIN pedidos p ON u.id = p.usuario_id AND p.estado_pedido != 'Cancelado'
        WHERE u.rol = 'cliente'
        GROUP BY u.id
        ORDER BY u.id DESC
    ");
}
$clientes = $stmt->fetchAll();
?>

<?php if ($mensaje): ?>
    <div class="alert alert-success alert-dismissible fade show"><?= e($mensaje) ?></div>
<?php endif; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="fw-bold mb-0">Gestión de Clientes</h4>
        <small class="text-muted">Total: <?= count($clientes) ?> clientes registrados</small>
    </div>
</div>

<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
    <form method="GET" action="clientes.php" class="row g-2 mb-4">
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar por nombre, correo o celular..." value="<?= e($q) ?>">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
        <?php if ($q): ?>
            <div class="col-md-2">
                <a href="clientes.php" class="btn btn-outline-secondary w-100">Limpiar</a>
            </div>
        <?php endif; ?>
    </form>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Cliente</th>
                    <th>Contacto</th>
                    <th>Ciudad / Dirección</th>
                    <th class="text-center">Pedidos</th>
                    <th class="text-end">Total Compras</th>
                    <th>Estado</th>
                    <th class="text-end">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $c): ?>
                    <tr>
                        <td>
                            <strong class="d-block"><?= e($c['nombre'] . ' ' . $c['apellido']) ?></strong>
                            <small class="text-muted">ID: #<?= $c['id'] ?> &bull; Registrado: <?= date('d/m/Y', strtotime($c['created_at'])) ?></small>
                        </td>
                        <td>
                            <div><i class="bi bi-envelope me-1"></i> <?= e($c['email']) ?></div>
                            <small class="text-muted"><i class="bi bi-telephone me-1"></i> <?= e($c['telefono'] ?? 'Sin teléfono') ?></small>
                        </td>
                        <td class="small">
                            <?= e($c['ciudad'] ?? 'Cusco') ?><br>
                            <span class="text-muted"><?= e($c['direccion'] ?? 'Sin dirección') ?></span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark border"><?= $c['total_pedidos'] ?> pedidos</span>
                        </td>
                        <td class="text-end fw-bold">S/. <?= number_format($c['total_gastado'], 2) ?></td>
                        <td>
                            <span class="badge bg-<?= $c['estado'] === 'activo' ? 'success' : 'danger' ?>">
                                <?= ucfirst($c['estado']) ?>
                            </span>
                        </td>
                        <td class="text-end">
                            <form method="POST" action="clientes.php" class="d-inline">
                                <input type="hidden" name="csrf_token" value="<?= getCsrfToken() ?>">
                                <input type="hidden" name="action" value="toggle_estado">
                                <input type="hidden" name="id" value="<?= $c['id'] ?>">
                                <input type="hidden" name="estado_actual" value="<?= $c['estado'] ?>">
                                <button type="submit" class="btn btn-sm btn-outline-<?= $c['estado'] === 'activo' ? 'danger' : 'success' ?>" title="Activar/Desactivar">
                                    <i class="bi bi-power"></i> <?= $c['estado'] === 'activo' ? 'Bloquear' : 'Activar' ?>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
