<?php
include 'includes/header.php';
include 'includes/sidebar.php';

$id = $_GET['id'] ?? 0;

// Fetch purchase
$stmt = $pdo->prepare("SELECT p.*, s.name as supplier_name, s.ruc, u.full_name as user_name FROM purchases p LEFT JOIN suppliers s ON p.supplier_id = s.id LEFT JOIN users u ON p.user_id = u.id WHERE p.id = ?");
$stmt->execute([$id]);
$purchase = $stmt->fetch();

if (!$purchase) {
    die("Entrada no encontrada.");
}

// Fetch details
$stmt = $pdo->prepare("SELECT pd.*, p.name as product_name, p.code FROM purchase_details pd JOIN products p ON pd.product_id = p.id WHERE pd.purchase_id = ?");
$stmt->execute([$id]);
$details = $stmt->fetchAll();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detalle de Entrada #<?php echo $id; ?></h1>
        <div>
            <button onclick="window.print()" class="btn btn-primary d-print-none">Imprimir</button>
            <a href="purchases.php" class="btn btn-secondary d-print-none">Volver</a>
        </div>
    </div>

    <div class="card shadow-sm p-4">
        <div class="row mb-4">
            <div class="col-6">
                <h6>Proveedor:</h6>
                <p class="mb-0"><strong>Nombre:</strong> <?php echo htmlspecialchars($purchase['supplier_name']); ?></p>
                <p><strong>RUC:</strong> <?php echo htmlspecialchars($purchase['ruc']); ?></p>
            </div>
            <div class="col-6 text-end">
                <h6>Información:</h6>
                <p class="mb-0"><strong>Fecha:</strong> <?php echo $purchase['purchase_date']; ?></p>
                <p class="mb-0"><strong>Estado:</strong> <?php echo ucfirst($purchase['status']); ?></p>
                <p><strong>Registrado por:</strong> <?php echo htmlspecialchars($purchase['user_name']); ?></p>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Cód.</th>
                        <th>Producto</th>
                        <th class="text-end">Cant.</th>
                        <th class="text-end">Costo Unit.</th>
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
                        <th class="text-end h4">$<?php echo number_format($purchase['total'], 2); ?></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
