<?php
require_once 'includes/header.php';
require_once 'config/db.php';

$sale_id = $_GET['id'] ?? null;
if (!$sale_id) {
    die("Venta no encontrada");
}

$stmt = $pdo->prepare("SELECT s.*, u.full_name as seller_name FROM sales s JOIN users u ON s.user_id = u.id WHERE s.id = ?");
$stmt->execute([$sale_id]);
$sale = $stmt->fetch();

if (!$sale) {
    die("Venta no encontrada");
}

$stmt = $pdo->prepare("SELECT si.*, p.name FROM sale_items si JOIN products p ON si.product_id = p.id WHERE si.sale_id = ?");
$stmt->execute([$sale_id]);
$items = $stmt->fetchAll();
?>

<div class="container mt-4 mb-4" style="max-width: 400px; background: white; padding: 20px; border: 1px solid #ccc;">
    <div class="receipt-header">
        <h3>BAR & LICORERÍA</h3>
        <p>Av. Principal 123 - Cusco<br>RUC: 10234567890<br>Telf: 987 654 321</p>
        <hr>
        <h5>COMPROBANTE DE VENTA</h5>
        <p>Ticket N°: <?php echo str_pad($sale['id'], 8, '0', STR_PAD_LEFT); ?></p>
    </div>

    <div class="receipt-body">
        <p>Fecha: <?php echo $sale['created_at']; ?><br>
        Atendido por: <?php echo htmlspecialchars($sale['seller_name']); ?><br>
        Cliente: <?php echo htmlspecialchars($sale['customer_name']); ?></p>
        <hr>
        <table class="table table-sm table-borderless">
            <thead>
                <tr>
                    <th>Desc.</th>
                    <th>Cant.</th>
                    <th class="text-end">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['name']); ?></td>
                    <td><?php echo $item['quantity']; ?> x <?php echo number_format($item['unit_price'], 2); ?></td>
                    <td class="text-end"><?php echo number_format($item['subtotal'], 2); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <hr>
        <div class="d-flex justify-content-between">
            <span>Subtotal:</span>
            <span>S/ <?php echo number_format($sale['total_amount'], 2); ?></span>
        </div>
        <div class="d-flex justify-content-between">
            <span>Descuento:</span>
            <span>- S/ <?php echo number_format($sale['discount_amount'], 2); ?></span>
        </div>
        <div class="d-flex justify-content-between fw-bold fs-5">
            <span>TOTAL:</span>
            <span>S/ <?php echo number_format($sale['final_amount'], 2); ?></span>
        </div>
        <p class="mt-2 small">Método de Pago: <?php echo ucfirst($sale['payment_method']); ?></p>
    </div>

    <div class="receipt-footer">
        <p>¡Gracias por su preferencia!</p>
        <button class="btn btn-sm btn-dark d-print-none" onclick="window.print()">Imprimir</button>
        <a href="pos.php" class="btn btn-sm btn-outline-secondary d-print-none">Volver al POS</a>
    </div>
</div>

<style>
@media print {
    .d-print-none { display: none !important; }
    body { background: white; }
    .container { border: none !important; box-shadow: none !important; width: 100% !important; max-width: 100% !important; padding: 0 !important; }
}
</style>

<?php require_once 'includes/footer.php'; ?>
