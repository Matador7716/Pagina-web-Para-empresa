<?php
include 'includes/header.php';
include 'includes/sidebar.php';

$id = $_GET['id'] ?? 0;

// Fetch sale
$stmt = $pdo->prepare("SELECT s.*, c.name as customer_name, c.dni_ruc, u.full_name as seller_name FROM sales s LEFT JOIN customers c ON s.customer_id = c.id LEFT JOIN users u ON s.user_id = u.id WHERE s.id = ?");
$stmt->execute([$id]);
$sale = $stmt->fetch();

if (!$sale) {
    die("Venta no encontrada.");
}

// Fetch details
$stmt = $pdo->prepare("SELECT sd.*, p.name as product_name, p.code FROM sale_details sd JOIN products p ON sd.product_id = p.id WHERE sd.sale_id = ?");
$stmt->execute([$id]);
$details = $stmt->fetchAll();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Comprobante de Venta #<?php echo $id; ?></h1>
        <button onclick="window.print()" class="btn btn-primary d-print-none">
            <i class="bi bi-printer me-2"></i> Imprimir
        </button>
    </div>

    <div class="card shadow-sm invoice-box p-4" id="invoice">
        <div class="row mb-4">
            <div class="col-6">
                <h3>InvSystem</h3>
                <p>Calle Principal 123<br>Cusco, Perú<br>RUC: 20123456789</p>
            </div>
            <div class="col-6 text-end">
                <h4><?php echo strtoupper($sale['invoice_type']); ?></h4>
                <p class="mb-0"><strong>Número:</strong> <?php echo str_pad($sale['id'], 8, '0', STR_PAD_LEFT); ?></p>
                <p><strong>Fecha:</strong> <?php echo $sale['sale_date']; ?></p>
            </div>
        </div>

        <div class="row mb-4 border-top pt-3">
            <div class="col-6">
                <h6>Cliente:</h6>
                <p class="mb-0"><strong>Nombre:</strong> <?php echo htmlspecialchars($sale['customer_name'] ?: 'Cliente Genérico'); ?></p>
                <p><strong>DNI/RUC:</strong> <?php echo htmlspecialchars($sale['dni_ruc'] ?: '-'); ?></p>
            </div>
            <div class="col-6 text-end">
                <h6>Vendedor:</h6>
                <p><?php echo htmlspecialchars($sale['seller_name']); ?></p>
                <h6>Método de Pago:</h6>
                <p><?php echo ucfirst($sale['payment_method']); ?></p>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Cód.</th>
                        <th>Producto</th>
                        <th class="text-end">Cant.</th>
                        <th class="text-end">Precio</th>
                        <th class="text-end">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($details as $d): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($d['code']); ?></td>
                        <td><?php echo htmlspecialchars($d['product_name']); ?></td>
                        <td class="text-end"><?php echo $d['quantity']; ?></td>
                        <td class="text-end">$<?php echo number_format($d['price'], 2); ?></td>
                        <td class="text-end">$<?php echo number_format($d['price'] * $d['quantity'], 2); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" class="text-end">TOTAL</th>
                        <th class="text-end h4">$<?php echo number_format($sale['total'], 2); ?></th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="mt-5 text-center">
            <p>¡Gracias por su compra!</p>
        </div>
    </div>
</main>

<style>
@media print {
    .sidebar, .navbar, .d-print-none {
        display: none !important;
    }
    main {
        margin: 0 !important;
        width: 100% !important;
    }
    .card {
        border: none !important;
        box-shadow: none !important;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
