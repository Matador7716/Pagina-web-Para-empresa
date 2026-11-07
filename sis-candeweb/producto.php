<?php
require_once __DIR__ . '/includes/functions.php';

$slug = trim($_GET['slug'] ?? '');
if (empty($slug)) {
    header('Location: tienda.php');
    exit;
}

$stmt = $pdo->prepare("SELECT p.*, c.nombre as categoria_nombre, c.slug as categoria_slug, s.nombre as subcategoria_nombre, pr.razon_social as proveedor_nombre
                       FROM productos p
                       JOIN categorias c ON p.categoria_id = c.id
                       LEFT JOIN subcategorias s ON p.subcategoria_id = s.id
                       LEFT JOIN proveedores pr ON p.proveedor_id = pr.id
                       WHERE p.slug = ? AND p.estado = 'activo'");
$stmt->execute([$slug]);
$product = $stmt->fetch();

if (!$product) {
    header('Location: tienda.php');
    exit;
}

$pageTitle = e($product['nombre']) . " - SIS CandeWeb Botica Cusco";
$metaDescription = e($product['descripcion_corta'] ?? 'Comprar ' . $product['nombre'] . ' en Cusco con entrega rápida.');

// Productos Relacionados
$rStmt = $pdo->prepare("SELECT * FROM productos WHERE categoria_id = ? AND id != ? AND estado = 'activo' LIMIT 4");
$rStmt->execute([$product['categoria_id'], $product['id']]);
$related = $rStmt->fetchAll();

// Galería de imágenes decodificada
$gallery = [];
if (!empty($product['imagen_principal'])) {
    $gallery[] = $product['imagen_principal'];
}
if (!empty($product['galeria_imagenes'])) {
    $extra = json_decode($product['galeria_imagenes'], true);
    if (is_array($extra)) {
        $gallery = array_merge($gallery, $extra);
    }
}
$gallery = array_unique($gallery);

require_once __DIR__ . '/includes/header.php';
?>

<div class="container py-4">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
            <li class="breadcrumb-item"><a href="tienda.php">Catálogo</a></li>
            <li class="breadcrumb-item"><a href="tienda.php?categoria=<?= urlencode($product['categoria_slug']) ?>"><?= e($product['categoria_nombre']) ?></a></li>
            <li class="breadcrumb-item active text-truncate"><?= e($product['nombre']) ?></li>
        </ol>
    </nav>

    <div class="card border-0 shadow-sm rounded-4 p-4 mb-5">
        <div class="row g-5">
            <!-- Galería de Fotos y Video -->
            <div class="col-lg-6">
                <div class="position-relative mb-3">
                    <img id="mainImage" src="<?= e($product['imagen_principal']) ?>" class="img-fluid rounded-4 w-100 shadow-sm" style="max-height: 420px; object-fit: contain; background: #fff;" alt="<?= e($product['nombre']) ?>" onerror="this.src='https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=600&auto=format&fit=crop';">
                    <?php if (!empty($product['precio_descuento']) && $product['precio_descuento'] > 0): ?>
                        <span class="badge bg-danger position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill fs-6 shadow">
                            Oferta Especial -<?= round((($product['precio_venta'] - $product['precio_descuento']) / $product['precio_venta']) * 100) ?>%
                        </span>
                    <?php endif; ?>
                </div>

                <!-- Miniaturas -->
                <div class="d-flex gap-2 overflow-auto pb-2">
                    <?php foreach ($gallery as $img): ?>
                        <img src="<?= e($img) ?>" class="rounded-3 border cursor-pointer" style="width: 70px; height: 70px; object-fit: cover; cursor: pointer;" onclick="document.getElementById('mainImage').src = this.src;" onerror="this.src='https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=100&auto=format&fit=crop';">
                    <?php endforeach; ?>
                </div>

                <?php if (!empty($product['video_url'])): ?>
                    <div class="mt-4">
                        <h6 class="fw-bold"><i class="bi bi-play-circle text-danger me-2"></i>Video Demostrativo:</h6>
                        <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow-sm">
                            <iframe src="<?= e($product['video_url']) ?>" title="Demostración de producto" allowfullscreen></iframe>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Ficha Técnica y Compra -->
            <div class="col-lg-6">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 rounded-pill">
                        <?= e($product['categoria_nombre']) ?>
                    </span>
                    <span class="text-muted small">Marca: <strong><?= e($product['marca']) ?></strong></span>
                </div>

                <h2 class="fw-bold mb-3"><?= e($product['nombre']) ?></h2>

                <?php if ($product['requiere_receta']): ?>
                    <div class="alert alert-warning py-2 px-3 small d-flex align-items-center gap-2 rounded-3 mb-3">
                        <i class="bi bi-exclamation-triangle-fill fs-5"></i>
                        <div><strong>Atención:</strong> Medicamento de venta bajo receta médica retenida.</div>
                    </div>
                <?php endif; ?>

                <div class="p-3 bg-light rounded-4 mb-4">
                    <div class="d-flex align-items-baseline gap-3">
                        <?php if (!empty($product['precio_descuento']) && $product['precio_descuento'] > 0): ?>
                            <span class="display-6 fw-bold text-primary">S/. <?= number_format($product['precio_descuento'], 2) ?></span>
                            <span class="text-muted text-decoration-line-through fs-5">S/. <?= number_format($product['precio_venta'], 2) ?></span>
                        <?php else: ?>
                            <span class="display-6 fw-bold text-primary">S/. <?= number_format($product['precio_venta'], 2) ?></span>
                        <?php endif; ?>
                    </div>
                    <small class="text-muted d-block mt-1">Precios incluyen IGV (18%). Boleta o Factura electrónica.</small>
                </div>

                <div class="row g-2 mb-4 text-muted small">
                    <div class="col-6"><i class="bi bi-upc-scan me-1"></i> Código: <strong><?= e($product['codigo_barra'] ?? 'N/A') ?></strong></div>
                    <div class="col-6"><i class="bi bi-shield-check me-1"></i> Registro DIGEMID: <strong><?= e($product['registro_sanitario'] ?? 'En trámite') ?></strong></div>
                    <div class="col-6"><i class="bi bi-box-seam me-1"></i> Disponibilidad: <strong class="<?= $product['stock'] > 0 ? 'text-success' : 'text-danger' ?>"><?= $product['stock'] > 0 ? $product['stock'] . ' unidades en stock' : 'Agotado' ?></strong></div>
                    <div class="col-6"><i class="bi bi-calendar-event me-1"></i> Vencimiento: <strong><?= e($product['fecha_vencimiento'] ?? 'Garantizado') ?></strong></div>
                </div>

                <!-- Formulario de compra -->
                <?php if ($product['stock'] > 0): ?>
                    <div class="d-flex gap-3 mb-4">
                        <div class="input-group" style="width: 140px;">
                            <button class="btn btn-outline-secondary" type="button" onclick="let input = document.getElementById('qtyInput'); if(input.value > 1) input.value--;">-</button>
                            <input type="number" id="qtyInput" class="form-control text-center" value="1" min="1" max="<?= $product['stock'] ?>">
                            <button class="btn btn-outline-secondary" type="button" onclick="let input = document.getElementById('qtyInput'); if(input.value < <?= $product['stock'] ?>) input.value++;">+</button>
                        </div>
                        <button class="btn btn-primary flex-grow-1 fw-bold rounded-pill shadow-sm" onclick="addToCart(<?= $product['id'] ?>)">
                            <i class="bi bi-cart-plus me-2"></i> Añadir al Carrito
                        </button>
                        <button class="btn btn-outline-danger product-wishlist-btn position-static rounded-circle p-2" data-product-id="<?= $product['id'] ?>" title="Favorito">
                            <i class="bi bi-heart fs-5"></i>
                        </button>
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger">Producto momentáneamente sin stock. Comunícate con botica para consultar reingreso.</div>
                <?php endif; ?>

                <div class="d-flex gap-2">
                    <a href="https://wa.me/<?= e($sysConfig['empresa_whatsapp'] ?? '51984765432') ?>?text=Hola,%20deseo%20consultar%20sobre%20el%20producto:%20<?= urlencode($product['nombre']) ?>" target="_blank" class="btn btn-outline-success w-100 rounded-pill">
                        <i class="bi bi-whatsapp me-2"></i> Pedir o Consultar por WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <hr class="my-5">

        <!-- Descripción detallada -->
        <div class="row">
            <div class="col-lg-8">
                <h4 class="fw-bold mb-3">Descripción y Modo de Uso</h4>
                <div class="text-secondary lh-lg mb-4">
                    <?= nl2br(e($product['descripcion'])) ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light p-4 rounded-4">
                    <h6 class="fw-bold mb-3"><i class="bi bi-truck text-primary me-2"></i>Información de Envíos</h6>
                    <ul class="list-unstyled small text-muted mb-0 lh-lg">
                        <li>&bull; <strong>Cusco Local:</strong> Entregas en el día (S/. 8.00).</li>
                        <li>&bull; <strong>Provincias / Nacional:</strong> Vía Olva Courier o Shalom (S/. 18.00).</li>
                        <li>&bull; <strong>Recojo en Botica:</strong> Gratis en Av. De la Cultura 780, Cusco.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
async function addToCart(productId) {
    const qty = document.getElementById('qtyInput') ? document.getElementById('qtyInput').value : 1;
    try {
        const resp = await fetch('ajax/cart_handler.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: `action=add&product_id=${productId}&quantity=${qty}`
        });
        const data = await resp.json();
        if (data.success) {
            const badge = document.querySelector('.cart-count-badge');
            if (badge) {
                badge.textContent = data.cartCount;
                badge.classList.remove('d-none');
            }
            showToast('Éxito', data.message, 'success');
        } else {
            showToast('Aviso', data.message, 'warning');
        }
    } catch(err) {
        showToast('Error', 'No se pudo añadir al carrito', 'danger');
    }
}
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
