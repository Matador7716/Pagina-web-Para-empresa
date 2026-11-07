<?php
$activePage = 'reportes';
$panelTitle = "Reportes y Estadísticas de Ventas - SIS CandeWeb";
require_once __DIR__ . '/header.php';

$desde = $_GET['desde'] ?? date('Y-m-01');
$hasta = $_GET['hasta'] ?? date('Y-m-d');

// Exportar a CSV si se solicita
if (isset($_GET['export']) && $_GET['export'] === 'csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=reporte_ventas_' . date('Ymd_His') . '.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output, ['Codigo Pedido', 'Fecha', 'Cliente', 'Documento', 'Tipo Comprobante', 'Metodo Pago', 'Estado', 'Subtotal', 'IGV', 'Envio', 'Total']);

    $stmtExp = $pdo->prepare("SELECT * FROM pedidos WHERE DATE(created_at) BETWEEN ? AND ? ORDER BY id DESC");
    $stmtExp->execute([$desde, $hasta]);
    while ($row = $stmtExp->fetch()) {
        fputcsv($output, [
            $row['codigo_pedido'],
            $row['created_at'],
            $row['nombre_cliente'],
            $row['documento_cliente'],
            $row['tipo_comprobante'],
            $row['metodo_pago'],
            $row['estado_pedido'],
            $row['subtotal'],
            $row['igv'],
            $row['costo_envio'],
            $row['total']
        ]);
    }
    fclose($output);
    exit;
}

// Ventas en el rango
$stmtVentas = $pdo->prepare("SELECT * FROM pedidos WHERE DATE(created_at) BETWEEN ? AND ? ORDER BY id DESC");
$stmtVentas->execute([$desde, $hasta]);
$pedidos = $stmtVentas->fetchAll();

// Totales consolidados
$totalIngresos = 0;
$totalIgv = 0;
$totalSubtotal = 0;
foreach ($pedidos as $p) {
    if ($p['estado_pedido'] !== 'Cancelado') {
        $totalIngresos += (float)$p['total'];
        $totalIgv += (float)$p['igv'];
        $totalSubtotal += (float)$p['subtotal'];
    }
}

// Clientes Frecuentes
$stmtClientes = $pdo->prepare("
    SELECT nombre_cliente, documento_cliente, COUNT(*) as total_compras, SUM(total) as monto_total
    FROM pedidos
    WHERE DATE(created_at) BETWEEN ? AND ? AND estado_pedido != 'Cancelado'
    GROUP BY documento_cliente, nombre_cliente
    ORDER BY total_compras DESC, monto_total DESC
    LIMIT 5
");
$stmtClientes->execute([$desde, $hasta]);
$clientesFrecuentes = $stmtClientes->fetchAll();

// Productos más vendidos en el rango
$stmtTop = $pdo->prepare("
    SELECT p.nombre, p.marca, SUM(d.cantidad) as total_unidades, SUM(d.subtotal) as total_ventas
    FROM pedido_detalles d
    JOIN productos p ON d.producto_id = p.id
    JOIN pedidos ped ON d.pedido_id = ped.id
    WHERE DATE(ped.created_at) BETWEEN ? AND ? AND ped.estado_pedido != 'Cancelado'
    GROUP BY p.id
    ORDER BY total_unidades DESC
    LIMIT 5
");
$stmtTop->execute([$desde, $hasta]);
$topVendidos = $stmtTop->fetchAll();
?>

<div class="card border-0 shadow-sm rounded-4 p-4 bg-white mb-4">
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
        <div>
            <h4 class="fw-bold mb-0">Filtro de Reportes</h4>
            <small class="text-muted">Selecciona el rango de fechas para consultar ingresos, ganancias y ventas</small>
        </div>
        <form method="GET" action="reportes.php" class="d-flex flex-wrap align-items-center gap-2">
            <div class="input-group input-group-sm">
                <span class="input-group-text">Desde:</span>
                <input type="date" name="desde" class="form-control" value="<?= e($desde) ?>">
            </div>
            <div class="input-group input-group-sm">
                <span class="input-group-text">Hasta:</span>
                <input type="date" name="hasta" class="form-control" value="<?= e($hasta) ?>">
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Filtrar</button>
            <a href="reportes.php?desde=<?= urlencode($desde) ?>&hasta=<?= urlencode($hasta) ?>&export=csv" class="btn btn-sm btn-success">
                <i class="bi bi-file-earmark-excel me-1"></i> Exportar CSV
            </a>
            <button type="button" class="btn btn-sm btn-outline-dark" onclick="window.print()">
                <i class="bi bi-printer me-1"></i> Imprimir / PDF
            </button>
        </form>
    </div>
</div>

<!-- Resumen Financiero en el Rango -->
<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="card stat-card p-3 bg-white border-start border-primary border-4">
            <span class="text-muted small text-uppercase fw-bold">Total Ingresos Facturados</span>
            <h3 class="fw-bold text-primary mb-0">S/. <?= number_format($totalIngresos, 2) ?></h3>
            <small class="text-muted"><?= count($pedidos) ?> pedidos registrados</small>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card stat-card p-3 bg-white border-start border-success border-4">
            <span class="text-muted small text-uppercase fw-bold">Base Imponible (Ventas Netas)</span>
            <h3 class="fw-bold text-success mb-0">S/. <?= number_format($totalSubtotal - $totalIgv, 2) ?></h3>
            <small class="text-muted">Sin impuestos</small>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card stat-card p-3 bg-white border-start border-info border-4">
            <span class="text-muted small text-uppercase fw-bold">IGV Generado (18%)</span>
            <h3 class="fw-bold text-info mb-0">S/. <?= number_format($totalIgv, 2) ?></h3>
            <small class="text-muted">A declarar a SUNAT</small>
        </div>
    </div>
</div>

<!-- Ranking de Clientes y Productos -->
<div class="row g-4 mb-4">
    <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white h-100">
            <h6 class="fw-bold mb-3"><i class="bi bi-people-fill text-primary me-2"></i>Clientes Frecuentes</h6>
            <div class="table-responsive">
                <table class="table table-sm align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Cliente</th>
                            <th class="text-center">Compras</th>
                            <th class="text-end">Monto Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($clientesFrecuentes)): ?>
                            <tr><td colspan="3" class="text-center text-muted">Sin datos en el período</td></tr>
                        <?php else: ?>
                            <?php foreach ($clientesFrecuentes as $cf): ?>
                                <tr>
                                    <td>
                                        <strong><?= e($cf['nombre_cliente']) ?></strong>
                                        <div class="small text-muted"><?= e($cf['documento_cliente']) ?></div>
                                    </td>
                                    <td class="text-center"><span class="badge bg-light text-dark border"><?= $cf['total_compras'] ?></span></td>
                                    <td class="text-end fw-bold">S/. <?= number_format($cf['monto_total'], 2) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white h-100">
            <h6 class="fw-bold mb-3"><i class="bi bi-star-fill text-warning me-2"></i>Productos Más Vendidos</h6>
            <div class="table-responsive">
                <table class="table table-sm align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Producto</th>
                            <th class="text-center">Unidades</th>
                            <th class="text-end">Monto Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($topVendidos)): ?>
                            <tr><td colspan="3" class="text-center text-muted">Sin datos en el período</td></tr>
                        <?php else: ?>
                            <?php foreach ($topVendidos as $tv): ?>
                                <tr>
                                    <td>
                                        <strong><?= e($tv['nombre']) ?></strong>
                                        <div class="small text-muted"><?= e($tv['marca']) ?></div>
                                    </td>
                                    <td class="text-center"><span class="badge bg-primary"><?= $tv['total_unidades'] ?></span></td>
                                    <td class="text-end fw-bold">S/. <?= number_format($tv['total_ventas'], 2) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Listado Detallado de Ventas para Impresión / Auditoría -->
<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
    <h5 class="fw-bold mb-3">Detalle de Operaciones en el Período</h5>
    <div class="table-responsive">
        <table class="table table-sm table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Código</th>
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Comprobante</th>
                    <th>Medio Pago</th>
                    <th>Estado</th>
                    <th class="text-end">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($pedidos)): ?>
                    <tr><td colspan="7" class="text-center text-muted py-3">No hay operaciones en este rango de fechas.</td></tr>
                <?php else: ?>
                    <?php foreach ($pedidos as $p): ?>
                        <tr>
                            <td><strong><?= e($p['codigo_pedido']) ?></strong></td>
                            <td class="small"><?= date('d/m/Y H:i', strtotime($p['created_at'])) ?></td>
                            <td><?= e($p['nombre_cliente']) ?></td>
                            <td><span class="badge bg-light text-dark border"><?= strtoupper($p['tipo_comprobante']) ?></span></td>
                            <td><?= strtoupper($p['metodo_pago']) ?></td>
                            <td>
                                <span class="badge bg-<?= in_array($p['estado_pedido'], ['Pagado', 'Entregado']) ? 'success' : 'warning' ?>">
                                    <?= e($p['estado_pedido']) ?>
                                </span>
                            </td>
                            <td class="text-end fw-bold">S/. <?= number_format($p['total'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
