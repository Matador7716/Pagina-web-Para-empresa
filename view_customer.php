<?php
include 'includes/header.php';
include 'includes/sidebar.php';

$id = $_GET['id'] ?? 0;

// Fetch customer
$stmt = $pdo->prepare("SELECT * FROM customers WHERE id = ?");
$stmt->execute([$id]);
$customer = $stmt->fetch();

if (!$customer) {
    die("Cliente no encontrado.");
}

// Fetch purchase history (sales to this customer)
$stmt = $pdo->prepare("SELECT * FROM sales WHERE customer_id = ? ORDER BY sale_date DESC");
$stmt->execute([$id]);
$history = $stmt->fetchAll();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Historial de Cliente: <?php echo htmlspecialchars($customer['name']); ?></h1>
        <a href="customers.php" class="btn btn-secondary">Volver</a>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Datos del Cliente</h5>
                    <p><strong>DNI/RUC:</strong> <?php echo htmlspecialchars($customer['dni_ruc']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($customer['email']); ?></p>
                    <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($customer['phone']); ?></p>
                    <p><strong>Dirección:</strong> <?php echo htmlspecialchars($customer['address']); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-8 mb-4">
            <div class="card shadow-sm">
                <div class="card-header">Compras Realizadas</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID Venta</th>
                                    <th>Fecha</th>
                                    <th>Total</th>
                                    <th>Método Pago</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($history as $s): ?>
                                <tr>
                                    <td><?php echo $s['id']; ?></td>
                                    <td><?php echo $s['sale_date']; ?></td>
                                    <td>$<?php echo number_format($s['total'], 2); ?></td>
                                    <td><?php echo ucfirst($s['payment_method']); ?></td>
                                    <td><a href="view_sale.php?id=<?php echo $s['id']; ?>" class="btn btn-sm btn-info">Detalles</a></td>
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
