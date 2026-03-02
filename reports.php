<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'config/db.php';

if ($_SESSION['role'] !== 'admin') {
    echo "<main class='col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-4'><div class='alert alert-danger'>Acceso denegado. Se requiere rol de Administrador.</div></main>";
    require_once 'includes/footer.php';
    exit;
}

// Ventas por día (últimos 7 días)
$stmt = $pdo->query("SELECT DATE(created_at) as date, SUM(final_amount) as total FROM sales GROUP BY DATE(created_at) ORDER BY date DESC LIMIT 7");
$daily_sales = $stmt->fetchAll();

// Top 5 Productos más vendidos
$stmt = $pdo->query("SELECT p.name, SUM(si.quantity) as total_qty FROM sale_items si JOIN products p ON si.product_id = p.id GROUP BY p.id ORDER BY total_qty DESC LIMIT 5");
$top_products = $stmt->fetchAll();

// Ventas por Categoría
$stmt = $pdo->query("SELECT c.name, SUM(si.subtotal) as total_sales FROM sale_items si JOIN products p ON si.product_id = p.id JOIN categories c ON p.category_id = c.id GROUP BY c.id ORDER BY total_sales DESC");
$category_sales = $stmt->fetchAll();

// Ganancias estimadas
$stmt = $pdo->query("SELECT SUM((si.unit_price - p.purchase_price) * si.quantity) as profit FROM sale_items si JOIN products p ON si.product_id = p.id");
$total_profit = $stmt->fetchColumn() ?? 0;
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Informes de Ventas</h1>
    </div>

    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-start border-success border-4">
                <div class="card-body">
                    <h6 class="text-muted">Ganancia Total Estimada</h6>
                    <h2 class="text-success">S/ <?php echo number_format($total_profit, 2); ?></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-dark text-white">Ventas de los últimos 7 días</div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th class="text-end">Monto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($daily_sales as $ds): ?>
                            <tr>
                                <td><?php echo $ds['date']; ?></td>
                                <td class="text-end">S/ <?php echo number_format($ds['total'], 2); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-dark text-white">Top 5 Productos</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <?php foreach ($top_products as $tp): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo htmlspecialchars($tp['name']); ?>
                            <span class="badge bg-primary rounded-pill"><?php echo $tp['total_qty']; ?> unid.</span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">Ventas por Categoría</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Categoría</th>
                                    <th class="text-end">Total Vendido</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($category_sales as $cs): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($cs['name']); ?></td>
                                    <td class="text-end">S/ <?php echo number_format($cs['total_sales'], 2); ?></td>
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

<?php require_once 'includes/footer.php'; ?>
