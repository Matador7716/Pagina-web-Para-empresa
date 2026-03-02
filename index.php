<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'config/db.php';

// Obtener estadísticas rápidas
$stmt = $pdo->query("SELECT COUNT(*) FROM products");
$total_products = $stmt->fetchColumn();

$stmt = $pdo->query("SELECT SUM(final_amount) FROM sales WHERE DATE(created_at) = CURDATE()");
$today_sales = $stmt->fetchColumn() ?? 0;

$stmt = $pdo->query("SELECT COUNT(*) FROM sales WHERE DATE(created_at) = CURDATE()");
$today_orders = $stmt->fetchColumn();

// Productos con stock bajo
$stmt = $pdo->query("SELECT name, stock, min_stock FROM products WHERE stock <= min_stock LIMIT 5");
$low_stock_products = $stmt->fetchAll();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <span class="badge bg-primary p-2">Bienvenido, <?php echo htmlspecialchars($_SESSION['full_name']); ?></span>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
        <div class="col">
            <div class="card text-white bg-primary h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title">Ventas de Hoy</h5>
                    <p class="card-text fs-3">S/ <?php echo number_format($today_sales, 2); ?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-success h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title">Pedidos de Hoy</h5>
                    <p class="card-text fs-3"><?php echo $today_orders; ?></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-info h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title">Productos en Catálogo</h5>
                    <p class="card-text fs-3"><?php echo $total_products; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header bg-warning">
                    <i class="bi bi-exclamation-triangle-fill"></i> Alerta de Stock Bajo
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Stock</th>
                                <th>Mín.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($low_stock_products)): ?>
                                <tr><td colspan="3" class="text-center">Todo está en orden.</td></tr>
                            <?php else: ?>
                                <?php foreach ($low_stock_products as $p): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($p['name']); ?></td>
                                    <td class="text-danger fw-bold"><?php echo $p['stock']; ?></td>
                                    <td><?php echo $p['min_stock']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-secondary text-white">
                    <i class="bi bi-lightning-fill"></i> Acciones Rápidas
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="pos.php" class="btn btn-primary btn-lg"><i class="bi bi-cart-plus"></i> Abrir POS</a>
                        <a href="inventory.php" class="btn btn-outline-secondary"><i class="bi bi-box-seam"></i> Gestionar Inventario</a>
                        <a href="cash_control.php" class="btn btn-outline-success"><i class="bi bi-cash-coin"></i> Ver Caja</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>
