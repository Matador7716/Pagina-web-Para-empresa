<?php
require_once __DIR__ . '/includes/functions.php';

$pageTitle = "Carrito de Compras - SIS CandeWeb Botica Cusco";

$shippingMethod = $_GET['envio'] ?? ($_SESSION['shipping_method'] ?? 'local');
$_SESSION['shipping_method'] = $shippingMethod;

$cartTotals = calculateCartTotals($pdo, null, $shippingMethod);

require_once __DIR__ . '/includes/header.php';
?>

<div class="container py-5">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h2 class="fw-bold mb-0"><i class="bi bi-cart3 text-primary me-2"></i>Carrito de Compras</h2>
            <small class="text-muted">Revisa tus productos y elige la forma de envío</small>
        </div>
        <a href="tienda.php" class="btn btn-outline-primary btn-sm rounded-pill">
            <i class="bi bi-arrow-left me-1"></i> Continuar Comprando
        </a>
    </div>

    <?php if (empty($cartTotals['items'])): ?>
        <div class="card border-0 shadow-sm rounded-4 p-5 text-center my-4">
            <i class="bi bi-cart-x fs-1 text-muted mb-3"></i>
            <h4 class="fw-bold">Tu carrito está vacío</h4>
            <p class="text-muted">Explora nuestro catálogo para encontrar tus medicamentos y productos de salud.</p>
            <a href="tienda.php" class="btn btn-primary px-4 py-2 rounded-pill mx-auto">Ir a la Botica Online</a>
        </div>
    <?php else: ?>
        <div class="row g-4">
            <!-- Tabla de items -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 p-4">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Producto</th>
                                    <th scope="col" class="text-center">Precio</th>
                                    <th scope="col" class="text-center" style="width: 140px;">Cantidad</th>
                                    <th scope="col" class="text-end">Subtotal</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cartTotals['items'] as $item): ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="<?= e($item['imagen']) ?>" class="rounded-3 border" style="width: 50px; height: 50px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=100&auto=format&fit=crop';">
                                                <div>
                                                    <a href="producto.php?slug=<?= urlencode($item['slug']) ?>" class="text-dark fw-bold text-decoration-none">
                                                        <?= e($item['nombre']) ?>
                                                    </a>
                                                    <div class="small text-muted">Stock actual: <?= $item['stock'] ?></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">S/. <?= number_format($item['precio_unitario'], 2) ?></td>
                                        <td class="text-center">
                                            <div class="input-group input-group-sm">
                                                <button class="btn btn-outline-secondary" onclick="updateCartItem(<?= $item['id'] ?>, <?= $item['cantidad'] - 1 ?>)">-</button>
                                                <input type="text" class="form-control text-center" value="<?= $item['cantidad'] ?>" readonly>
                                                <button class="btn btn-outline-secondary" onclick="updateCartItem(<?= $item['id'] ?>, <?= $item['cantidad'] + 1 ?>)">+</button>
                                            </div>
                                        </td>
                                        <td class="text-end fw-bold">S/. <?= number_format($item['subtotal'], 2) ?></td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-light text-danger" onclick="removeCartItem(<?= $item['id'] ?>)" title="Eliminar"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                        <button class="btn btn-sm btn-outline-secondary" onclick="saveCartForLater()">
                            <i class="bi bi-bookmark-plus me-1"></i> Guardar Carrito para Después
                        </button>
                        <span class="small text-muted"><i class="bi bi-info-circle me-1"></i> Precios calculados en Soles Peruanos (PEN).</span>
                    </div>
                </div>
            </div>

            <!-- Resumen y Cupón -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 mb-3">
                    <h5 class="fw-bold mb-3">Resumen de Compra</h5>

                    <!-- Selector de Envío -->
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Método de Envío / Entrega:</label>
                        <select class="form-select form-select-sm" onchange="location = 'carrito.php?envio=' + this.value;">
                            <option value="local" <?= $shippingMethod === 'local' ? 'selected' : '' ?>>Delivery Cusco Ciudad (S/. 8.00)</option>
                            <option value="recojo_tienda" <?= $shippingMethod === 'recojo_tienda' ? 'selected' : '' ?>>Recojo en Tienda (Gratis)</option>
                            <option value="nacional" <?= $shippingMethod === 'nacional' ? 'selected' : '' ?>>Envío Nacional / Provincias (S/. 18.00)</option>
                        </select>
                    </div>

                    <!-- Cupón de Descuento -->
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Cupón de Descuento:</label>
                        <div class="input-group input-group-sm">
                            <input type="text" id="couponInput" class="form-control" placeholder="Ej: BIENVENIDO10" value="<?= e($cartTotals['cupon']['codigo'] ?? '') ?>">
                            <button class="btn btn-dark" type="button" onclick="applyCoupon()">Aplicar</button>
                        </div>
                        <?php if ($cartTotals['cupon']): ?>
                            <small class="text-success fw-bold d-block mt-1">
                                <i class="bi bi-check-circle-fill"></i> Cupón "<?= e($cartTotals['cupon']['codigo']) ?>" aplicado (-S/. <?= number_format($cartTotals['descuento'], 2) ?>)
                            </small>
                        <?php endif; ?>
                    </div>

                    <ul class="list-group list-group-flush mb-3 small">
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Subtotal (sin IGV)</span>
                            <span>S/. <?= number_format($cartTotals['base_imponible'], 2) ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">IGV (18%)</span>
                            <span>S/. <?= number_format($cartTotals['igv'], 2) ?></span>
                        </li>
                        <?php if ($cartTotals['descuento'] > 0): ?>
                            <li class="list-group-item d-flex justify-content-between px-0 text-success">
                                <span>Descuento</span>
                                <span>-S/. <?= number_format($cartTotals['descuento'], 2) ?></span>
                            </li>
                        <?php endif; ?>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span class="text-muted">Costo de Envío</span>
                            <span><?= $cartTotals['costo_envio'] > 0 ? 'S/. ' . number_format($cartTotals['costo_envio'], 2) : 'GRATIS' ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0 fs-5 fw-bold text-primary border-top">
                            <span>Total a Pagar</span>
                            <span>S/. <?= number_format($cartTotals['total'], 2) ?></span>
                        </li>
                    </ul>

                    <a href="checkout.php" class="btn btn-primary w-100 py-2 fw-bold rounded-pill shadow-sm">
                        Continuar al Checkout <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<script>
async function updateCartItem(id, qty) {
    const res = await fetch('ajax/cart_handler.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `action=update&product_id=${id}&quantity=${qty}`
    });
    const d = await res.json();
    if(d.success) location.reload();
    else alert(d.message);
}

async function removeCartItem(id) {
    if(!confirm('¿Deseas eliminar este producto del carrito?')) return;
    const res = await fetch('ajax/cart_handler.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `action=remove&product_id=${id}`
    });
    const d = await res.json();
    if(d.success) location.reload();
}

async function applyCoupon() {
    const code = document.getElementById('couponInput').value;
    const res = await fetch('ajax/cart_handler.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `action=apply_coupon&code=${encodeURIComponent(code)}`
    });
    const d = await res.json();
    alert(d.message);
    location.reload();
}

async function saveCartForLater() {
    const res = await fetch('ajax/cart_handler.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `action=save_for_later`
    });
    const d = await res.json();
    alert(d.message);
}
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
