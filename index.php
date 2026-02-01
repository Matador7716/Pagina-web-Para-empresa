<?php
include 'includes/header.php';
include 'includes/sidebar.php';

// Stats
$today = date('Y-m-d');
$stmt = $pdo->prepare("SELECT SUM(total) as total_today FROM sales WHERE DATE(sale_date) = ?");
$stmt->execute([$today]);
$sales_today = $stmt->fetch()['total_today'] ?? 0;

$stmt = $pdo->query("SELECT COUNT(*) as total_products FROM products");
$total_products = $stmt->fetch()['total_products'];

$stmt = $pdo->query("SELECT COUNT(*) as low_stock FROM products WHERE stock <= min_stock");
$low_stock_count = $stmt->fetch()['low_stock'];

// Recent Sales
$stmt = $pdo->query("SELECT s.*, c.name as customer_name FROM sales s LEFT JOIN customers c ON s.customer_id = c.id ORDER BY s.sale_date DESC LIMIT 5");
$recent_sales = $stmt->fetchAll();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <!-- Cards -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card bg-primary text-white shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title">Ventas de Hoy</h6>
                            <h2 class="mb-0">$<?php echo number_format($sales_today, 2); ?></h2>
                        </div>
                        <i class="bi bi-cart-check fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card bg-success text-white shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title">Total Productos</h6>
                            <h2 class="mb-0"><?php echo $total_products; ?></h2>
                        </div>
                        <i class="bi bi-box-seam fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card bg-danger text-white shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-title">Bajo Stock</h6>
                            <h2 class="mb-0"><?php echo $low_stock_count; ?></h2>
                        </div>
                        <i class="bi bi-exclamation-triangle fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Recent Sales -->
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Ventas Recientes</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Cliente</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($recent_sales as $sale): ?>
                                <tr>
                                    <td><?php echo $sale['id']; ?></td>
                                    <td><?php echo $sale['sale_date']; ?></td>
                                    <td><?php echo htmlspecialchars($sale['customer_name'] ?: 'Genérico'); ?></td>
                                    <td>$<?php echo number_format($sale['total'], 2); ?></td>
                                    <td><a href="view_sale.php?id=<?php echo $sale['id']; ?>" class="btn btn-sm btn-outline-info">Ver</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick Actions -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 class="mb-0">Acceso Rápido</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="pos.php" class="btn btn-outline-primary"><i class="bi bi-plus-circle me-2"></i>Nueva Venta</a>
                        <a href="products.php" class="btn btn-outline-secondary"><i class="bi bi-box-seam me-2"></i>Inventario</a>
                        <a href="purchases.php" class="btn btn-outline-info"><i class="bi bi-truck me-2"></i>Entrada de Stock</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
