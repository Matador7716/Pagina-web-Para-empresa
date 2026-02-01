<?php
include 'includes/header.php';
include 'includes/sidebar.php';

if ($_SESSION['role'] !== 'admin') {
    echo "<main class='col-md-9 ms-sm-auto col-lg-10 px-md-4'><div class='alert alert-danger mt-4'>Acceso denegado. Solo administradores.</div></main>";
    include 'includes/footer.php';
    exit;
}

// Sales by day (last 7 days)
$stmt = $pdo->query("SELECT DATE(sale_date) as date, SUM(total) as total FROM sales GROUP BY DATE(sale_date) ORDER BY date DESC LIMIT 7");
$daily_sales = $stmt->fetchAll();

// Top products
$stmt = $pdo->query("SELECT p.name, SUM(sd.quantity) as total_qty FROM sale_details sd JOIN products p ON sd.product_id = p.id GROUP BY p.id ORDER BY total_qty DESC LIMIT 5");
$top_products = $stmt->fetchAll();

// Sales and Margin by Category
$stmt = $pdo->query("SELECT c.name,
                    SUM(sd.quantity * sd.price) as total_revenue,
                    SUM(sd.quantity * p.purchase_price) as total_cost,
                    SUM(sd.quantity * (sd.price - p.purchase_price)) as total_profit
                    FROM sale_details sd
                    JOIN products p ON sd.product_id = p.id
                    JOIN categories c ON p.category_id = c.id
                    GROUP BY c.id ORDER BY total_revenue DESC");
$category_stats = $stmt->fetchAll();

// Cash Flow (Simplified: Daily Entries vs Daily Exits)
$stmt = $pdo->query("
    SELECT date, SUM(entry) as entries, SUM(exit_val) as exits FROM (
        SELECT DATE(sale_date) as date, total as entry, 0 as exit_val FROM sales
        UNION ALL
        SELECT DATE(purchase_date) as date, 0 as entry, total as exit_val FROM purchases WHERE status = 'received'
    ) as flow
    GROUP BY date ORDER BY date DESC LIMIT 10
");
$cash_flow = $stmt->fetchAll();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Reportes y Análisis</h1>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">Ventas de los últimos 7 días</div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach ($daily_sales as $ds): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?php echo $ds['date']; ?>
                                <span class="badge bg-primary rounded-pill">$<?php echo number_format($ds['total'], 2); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">Productos más vendidos</div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach ($top_products as $tp): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?php echo htmlspecialchars($tp['name']); ?>
                                <span class="badge bg-success rounded-pill"><?php echo $tp['total_qty']; ?> unidades</span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header">Desempeño por Categoría (Ventas y Margen)</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Categoría</th>
                                    <th>Ventas (Ingresos)</th>
                                    <th>Costo Est.</th>
                                    <th>Ganancia Est.</th>
                                    <th>Margen %</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($category_stats as $cs):
                                    $margin_percent = $cs['total_revenue'] > 0 ? ($cs['total_profit'] / $cs['total_revenue']) * 100 : 0;
                                ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($cs['name']); ?></td>
                                        <td>$<?php echo number_format($cs['total_revenue'], 2); ?></td>
                                        <td>$<?php echo number_format($cs['total_cost'], 2); ?></td>
                                        <td class="text-success fw-bold">$<?php echo number_format($cs['total_profit'], 2); ?></td>
                                        <td><?php echo number_format($margin_percent, 1); ?>%</td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-4">
            <div class="card shadow-sm border-info">
                <div class="card-header bg-info text-white">Flujo de Caja (Ingresos vs Egresos)</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Ingresos (Ventas)</th>
                                    <th>Egresos (Compras)</th>
                                    <th>Saldo Neto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cash_flow as $cf): ?>
                                    <tr>
                                        <td><?php echo $cf['date']; ?></td>
                                        <td class="text-success">+$<?php echo number_format($cf['entries'], 2); ?></td>
                                        <td class="text-danger">-$<?php echo number_format($cf['exits'], 2); ?></td>
                                        <td class="fw-bold <?php echo ($cf['entries'] - $cf['exits']) >= 0 ? 'text-primary' : 'text-danger'; ?>">
                                            $<?php echo number_format($cf['entries'] - $cf['exits'], 2); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
