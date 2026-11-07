<?php
require_once __DIR__ . '/includes/functions.php';
requireAuth();

$userId = $_SESSION['user_id'];
$pageTitle = "Historial de Compras - SIS CandeWeb Botica Cusco";

$stmt = $pdo->prepare("SELECT * FROM pedidos WHERE usuario_id = ? ORDER BY id DESC");
$stmt->execute([$userId]);
$pedidos = $stmt->fetchAll();

require_once __DIR__ . '/includes/header.php';
?>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1"><i class="bi bi-clock-history text-primary me-2"></i>Mis Compras</h3>
            <p class="text-muted small mb-0">Revisa el historial de todos tus pedidos en SIS CandeWeb</p>
        </div>
        <a href="perfil.php" class="btn btn-outline-secondary btn-sm rounded-pill">
            <i class="bi bi-arrow-left"></i> Volver al Perfil
        </a>
    </div>

    <?php if (empty($pedidos)): ?>
        <div class="card border-0 shadow-sm rounded-4 p-5 text-center">
            <i class="bi bi-bag-x fs-1 text-muted mb-3"></i>
            <h5 class="fw-bold">Aún no has realizado ninguna compra</h5>
            <p class="text-muted small">Cuando hagas un pedido aparecerá en esta sección con su estado y comprobante.</p>
            <a href="tienda.php" class="btn btn-primary btn-sm mx-auto rounded-pill px-4">Ir a la Botica</a>
        </div>
    <?php else: ?>
        <div class="card border-0 shadow-sm rounded-4 p-4">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>N° Pedido</th>
                            <th>Fecha</th>
                            <th>Total</th>
                            <th>Método de Pago</th>
                            <th>Estado Pedido</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pedidos as $p): ?>
                            <tr>
                                <td><strong class="text-primary"><?= e($p['codigo_pedido']) ?></strong></td>
                                <td class="small text-muted"><?= date('d/m/Y H:i', strtotime($p['created_at'])) ?></td>
                                <td class="fw-bold">S/. <?= number_format($p['total'], 2) ?></td>
                                <td>
                                    <span class="badge bg-light text-dark border"><?= strtoupper($p['metodo_pago']) ?></span>
                                </td>
                                <td>
                                    <span class="badge bg-<?= in_array($p['estado_pedido'], ['Pagado', 'Entregado']) ? 'success' : 'warning' ?>">
                                        <?= e($p['estado_pedido']) ?>
                                    </span>
                                </td>
                                <td class="text-end">
                                    <a href="seguimiento.php?codigo=<?= urlencode($p['codigo_pedido']) ?>" class="btn btn-sm btn-outline-primary" title="Seguimiento">
                                        <i class="bi bi-truck"></i> Seguir
                                    </a>
                                    <a href="admin/imprimir_comprobante.php?id=<?= $p['id'] ?>" target="_blank" class="btn btn-sm btn-light border" title="Comprobante">
                                        <i class="bi bi-receipt"></i> Comprobante
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
