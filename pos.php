<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'config/db.php';

// Verificar si hay caja abierta
$stmt = $pdo->prepare("SELECT id FROM cash_registers WHERE user_id = ? AND status = 'open'");
$stmt->execute([$_SESSION['user_id']]);
$cash_register_id = $stmt->fetchColumn();

if (!$cash_register_id) {
    echo "<main class='col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-4'>
            <div class='alert alert-warning'>
                <h4><i class='bi bi-exclamation-triangle'></i> Caja Cerrada</h4>
                <p>Debes abrir la caja antes de realizar ventas.</p>
                <a href='cash_control.php' class='btn btn-warning'>Ir a Control de Caja</a>
            </div>
          </main>";
    require_once 'includes/footer.php';
    exit;
}

$stmt = $pdo->query("SELECT * FROM categories ORDER BY name ASC");
$categories = $stmt->fetchAll();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="row mt-3">
        <!-- Panel de Productos -->
        <div class="col-md-7">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-search"></i> Productos</span>
                    <div class="input-group input-group-sm w-50">
                        <input type="text" id="pos-search" class="form-control" placeholder="Buscar por nombre o código...">
                        <span class="input-group-text"><i class="bi bi-upc-scan"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <button class="btn btn-sm btn-outline-secondary filter-cat active" data-id="all">Todo</button>
                        <?php foreach ($categories as $cat): ?>
                            <button class="btn btn-sm btn-outline-secondary filter-cat" data-id="<?php echo $cat['id']; ?>">
                                <?php echo htmlspecialchars($cat['name']); ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                    <div id="pos-product-list" class="row row-cols-2 row-cols-lg-4 g-2 overflow-auto" style="height: 500px;">
                        <!-- Productos cargados por AJAX -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Panel de Carrito -->
        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <i class="bi bi-cart3"></i> Detalle de Venta
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive" style="height: 350px;">
                        <table class="table table-sm align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Producto</th>
                                    <th>Cant.</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="cart-items">
                                <!-- Items agregados -->
                            </tbody>
                        </table>
                    </div>
                    <div class="p-3 bg-light border-top">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal</span>
                            <span id="pos-subtotal">S/ 0.00</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2 align-items-center">
                            <span>Descuento</span>
                            <div class="input-group input-group-sm w-25">
                                <span class="input-group-text">S/</span>
                                <input type="number" id="pos-discount" class="form-control" value="0.00" step="0.01">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between fs-4 fw-bold text-primary">
                            <span>TOTAL</span>
                            <span id="pos-total">S/ 0.00</span>
                        </div>
                        <hr>
                        <div class="row g-2">
                            <div class="col-6">
                                <button class="btn btn-outline-danger w-100" id="btn-cancel-sale">
                                    <i class="bi bi-x-circle"></i> Cancelar
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-success w-100" id="btn-pay" data-bs-toggle="modal" data-bs-target="#paymentModal">
                                    <i class="bi bi-cash-coin"></i> Pagar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Pago -->
    <div class="modal fade" id="paymentModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Finalizar Venta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <p class="mb-1 text-muted">Total a pagar</p>
                        <h1 class="display-4 text-primary fw-bold" id="pay-total-display">S/ 0.00</h1>
                    </div>
                    <form id="saleForm">
                        <input type="hidden" name="csrf_token" value="<?php echo get_csrf_token(); ?>">
                        <input type="hidden" name="cash_register_id" value="<?php echo $cash_register_id; ?>">
                        <div class="mb-3">
                            <label class="form-label">Método de Pago</label>
                            <select class="form-select" name="payment_method" id="payment_method">
                                <option value="cash">Efectivo</option>
                                <option value="card">Tarjeta (Débito/Crédito)</option>
                                <option value="transfer">Transferencia (Yape/Plin)</option>
                            </select>
                        </div>
                        <div id="cash-payment-info">
                            <div class="mb-3">
                                <label class="form-label">Monto Recibido</label>
                                <input type="number" step="0.01" class="form-control form-control-lg" name="received_amount" id="received_amount">
                            </div>
                            <div class="alert alert-info d-flex justify-content-between">
                                <span>Cambio (Vuelto):</span>
                                <strong id="change-amount">S/ 0.00</strong>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cliente (Opcional)</label>
                            <input type="text" class="form-control" name="customer_name" placeholder="Público General">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
                    <button type="button" class="btn btn-primary" id="btn-confirm-sale">Confirmar Venta e Imprimir</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>
