<?php
$activePage = 'dashboard';
$panelTitle = "Dashboard General - SIS CandeWeb Ventas";
require_once __DIR__ . '/header.php';

// Estadísticas de ventas
$ventasHoy = $pdo->query("SELECT COALESCE(SUM(total), 0) FROM pedidos WHERE DATE(created_at) = CURDATE() AND estado_pedido != 'Cancelado'")->fetchColumn();
$pedidosHoy = $pdo->query("SELECT COUNT(*) FROM pedidos WHERE DATE(created_at) = CURDATE() AND estado_pedido != 'Cancelado'")->fetchColumn();
$ventasMes = $pdo->query("SELECT COALESCE(SUM(total), 0) FROM pedidos WHERE MONTH(created_at) = MONTH(CURDATE()) AND YEAR(created_at) = YEAR(CURDATE()) AND estado_pedido != 'Cancelado'")->fetchColumn();
$clientesTotal = $pdo->query("SELECT COUNT(*) FROM usuarios WHERE rol = 'cliente'")->fetchColumn();
$productosTotal = $pdo->query("SELECT COUNT(*) FROM productos WHERE estado = 'activo'")->fetchColumn();

// Ganancia estimada del mes
$gananciaMes = $pdo->query("
    SELECT COALESCE(SUM(d.subtotal - (p.precio_compra * d.cantidad)), 0)
    FROM pedido_detalles d
    JOIN productos p ON d.producto_id = p.id
    JOIN pedidos ped ON d.pedido_id = ped.id
    WHERE MONTH(ped.created_at) = MONTH(CURDATE()) AND YEAR(ped.created_at) = YEAR(CURDATE()) AND ped.estado_pedido != 'Cancelado'
")->fetchColumn();

// Últimos 5 pedidos
$ultimosPedidos = $pdo->query("SELECT * FROM pedidos ORDER BY id DESC LIMIT 5")->fetchAll();

// Productos más vendidos
$topProductos = $pdo->query("
    SELECT p.nombre, p.imagen_principal, SUM(d.cantidad) as total_vendido, SUM(d.subtotal) as total_monto
    FROM pedido_detalles d
    JOIN productos p ON d.producto_id = p.id
    JOIN pedidos ped ON d.pedido_id = ped.id
    WHERE ped.estado_pedido != 'Cancelado'
    GROUP BY p.id
    ORDER BY total_vendido DESC
    LIMIT 5
")->fetchAll();

// Ventas últimos 7 días para gráfico Chart.js
$diasVentas = [];
$totalesVentas = [];
for ($i = 6; $i >= 0; $i--) {
    $date = date('Y-m-d', strtotime("-$i days"));
    $diaNombre = date('d/m', strtotime($date));
    $stmt = $pdo->prepare("SELECT COALESCE(SUM(total), 0) FROM pedidos WHERE DATE(created_at) = ? AND estado_pedido != 'Cancelado'");
    $stmt->execute([$date]);
    $diasVentas[] = $diaNombre;
    $totalesVentas[] = (float)$stmt->fetchColumn();
}
?>

<!-- KPI Stat Cards -->
<div class="row g-3 mb-4">
    <div class="col-sm-6 col-xl-3">
        <div class="card stat-card p-3 bg-white border-start border-primary border-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="text-muted small fw-bold text-uppercase">Ventas Hoy</span>
                    <h3 class="fw-bold text-primary mb-0">S/. <?= number_format($ventasHoy, 2) ?></h3>
                    <small class="text-success"><i class="bi bi-cart-check"></i> <?= $pedidosHoy ?> pedidos hoy</small>
                </div>
                <div class="bg-primary-subtle text-primary p-3 rounded-circle fs-3"><i class="bi bi-currency-dollar"></i></div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card stat-card p-3 bg-white border-start border-success border-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="text-muted small fw-bold text-uppercase">Ventas del Mes</span>
                    <h3 class="fw-bold text-success mb-0">S/. <?= number_format($ventasMes, 2) ?></h3>
                    <small class="text-muted">Mes en curso</small>
                </div>
                <div class="bg-success-subtle text-success p-3 rounded-circle fs-3"><i class="bi bi-graph-up-arrow"></i></div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card stat-card p-3 bg-white border-start border-info border-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="text-muted small fw-bold text-uppercase">Ganancia Estimada</span>
                    <h3 class="fw-bold text-info mb-0">S/. <?= number_format($gananciaMes, 2) ?></h3>
                    <small class="text-muted">Margen bruto neto</small>
                </div>
                <div class="bg-info-subtle text-info p-3 rounded-circle fs-3"><i class="bi bi-piggy-bank"></i></div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card stat-card p-3 bg-white border-start border-warning border-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="text-muted small fw-bold text-uppercase">Clientes Registrados</span>
                    <h3 class="fw-bold text-dark mb-0"><?= $clientesTotal ?></h3>
                    <small class="text-muted">Total de usuarios clientes</small>
                </div>
                <div class="bg-warning-subtle text-warning p-3 rounded-circle fs-3"><i class="bi bi-people"></i></div>
            </div>
        </div>
    </div>
</div>

<!-- Gráfico de Ventas y Top Productos -->
<div class="row g-4 mb-4">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white h-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-bold mb-0"><i class="bi bi-bar-chart-fill text-primary me-2"></i>Evolución de Ventas (Últimos 7 días)</h6>
                <span class="badge bg-light text-dark border">En Soles (PEN)</span>
            </div>
            <div style="height: 280px;">
                <canvas id="salesChart"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white h-100">
            <h6 class="fw-bold mb-3"><i class="bi bi-trophy-fill text-warning me-2"></i>Top 5 Productos Más Vendidos</h6>
            <div class="list-group list-group-flush">
                <?php if (empty($topProductos)): ?>
                    <p class="text-muted small py-3">No hay ventas registradas aún.</p>
                <?php else: ?>
                    <?php foreach ($topProductos as $tp): ?>
                        <div class="list-group-item px-0 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2">
                                <img src="../<?= e($tp['imagen_principal']) ?>" class="rounded border" style="width: 40px; height: 40px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=80';">
                                <div>
                                    <div class="small fw-bold text-truncate" style="max-width: 160px;"><?= e($tp['nombre']) ?></div>
                                    <small class="text-muted"><?= $tp['total_vendido'] ?> unidades</small>
                                </div>
                            </div>
                            <span class="badge bg-primary-subtle text-primary fw-bold">S/. <?= number_format($tp['total_monto'], 2) ?></span>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Últimos Pedidos Registrados -->
<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h6 class="fw-bold mb-0"><i class="bi bi-clock-history text-primary me-2"></i>Últimos Pedidos Registrados</h6>
        <a href="pedidos.php" class="btn btn-sm btn-outline-primary rounded-pill">Ver todos los pedidos</a>
    </div>

    <div class="table-responsive">
        <table class="table align-middle">
            <thead class="table-light">
                <tr>
                    <th>Código</th>
                    <th>Cliente</th>
                    <th>Tipo</th>
                    <th>Pago</th>
                    <th>Estado</th>
                    <th>Total</th>
                    <th class="text-end">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ultimosPedidos as $p): ?>
                    <tr>
                        <td><strong><?= e($p['codigo_pedido']) ?></strong></td>
                        <td>
                            <div class="fw-bold small"><?= e($p['nombre_cliente']) ?></div>
                            <small class="text-muted"><?= e($p['telefono_cliente']) ?></small>
                        </td>
                        <td><span class="badge bg-light text-secondary border"><?= strtoupper($p['tipo_comprobante']) ?></span></td>
                        <td><span class="badge bg-info-subtle text-info border"><?= strtoupper($p['metodo_pago']) ?></span></td>
                        <td>
                            <span class="badge bg-<?= in_array($p['estado_pedido'], ['Pagado', 'Entregado']) ? 'success' : 'warning' ?>">
                                <?= e($p['estado_pedido']) ?>
                            </span>
                        </td>
                        <td class="fw-bold">S/. <?= number_format($p['total'], 2) ?></td>
                        <td class="text-end">
                            <a href="pedidos.php?accion=ver&id=<?= $p['id'] ?>" class="btn btn-sm btn-light border" title="Detalle"><i class="bi bi-eye"></i></a>
                            <a href="imprimir_comprobante.php?id=<?= $p['id'] ?>" target="_blank" class="btn btn-sm btn-light border" title="Imprimir"><i class="bi bi-printer"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const ctx = document.getElementById('salesChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?= json_encode($diasVentas) ?>,
            datasets: [{
                label: 'Ventas (S/.)',
                data: <?= json_encode($totalesVentas) ?>,
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13, 110, 253, 0.1)',
                borderWidth: 3,
                fill: true,
                tension: 0.3,
                pointRadius: 4,
                pointBackgroundColor: '#0d6efd'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) { return 'S/. ' + value; }
                    }
                }
            }
        }
    });
});
</script>

<?php require_once __DIR__ . '/footer.php'; ?>
