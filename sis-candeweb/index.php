<?php
require_once __DIR__ . '/includes/functions.php';

$pageTitle = "SIS CandeWeb Ventas - Botica Cusco | Medicamentos y Salud";
$metaDescription = "Botica Cusco SIS CandeWeb: Compra online medicamentos, cuidado personal, oxímetros, tensiómetros con delivery en Cusco.";

// Obtener categorías con contador de productos
$categories = $pdo->query("SELECT c.*, COUNT(p.id) as total_prod FROM categorias c LEFT JOIN productos p ON c.id = p.categoria_id AND p.estado = 'activo' WHERE c.estado = 'activo' GROUP BY c.id ORDER BY c.id ASC")->fetchAll();

// Obtener productos destacados
$featuredProducts = $pdo->query("SELECT p.*, c.nombre as categoria_nombre FROM productos p JOIN categorias c ON p.categoria_id = c.id WHERE p.destacado = 1 AND p.estado = 'activo' ORDER BY p.id DESC LIMIT 8")->fetchAll();

// Obtener productos en oferta
$saleProducts = $pdo->query("SELECT p.*, c.nombre as categoria_nombre FROM productos p JOIN categorias c ON p.categoria_id = c.id WHERE p.precio_descuento IS NOT NULL AND p.precio_descuento > 0 AND p.estado = 'activo' ORDER BY p.id DESC LIMIT 4")->fetchAll();

require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Banner -->
<div class="bg-gradient text-white py-5" style="background: linear-gradient(135deg, #0284c7 0%, #0c4a6e 100%);">
    <div class="container py-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">
                    <i class="bi bi-star-fill me-1"></i> Farmacia & Botica Líder en Cusco
                </span>
                <h1 class="display-5 fw-bold mb-3">Salud y Medicamentos con Entrega Inmediata</h1>
                <p class="lead mb-4 text-light opacity-90">
                    Tu bienestar en las mejores manos. Encuentra medicamentos certificados con registro DIGEMID, equipos médicos y atención profesional los 7 días de la semana.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="tienda.php" class="btn btn-warning btn-lg px-4 fw-bold shadow-sm rounded-pill">
                        <i class="bi bi-bag-check-fill me-2"></i> Comprar Ahora
                    </a>
                    <a href="#promociones" class="btn btn-outline-light btn-lg px-4 fw-semibold rounded-pill">
                        Ver Ofertas Especiales
                    </a>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <div class="bg-white p-4 rounded-4 shadow-lg text-dark mx-auto text-start" style="max-width: 380px;">
                    <div class="d-flex align-items-center gap-3 mb-3 border-bottom pb-3">
                        <div class="bg-primary text-white p-3 rounded-circle"><i class="bi bi-lightning-charge-fill fs-3"></i></div>
                        <div>
                            <h6 class="mb-0 fw-bold">Delivery Express Cusco</h6>
                            <small class="text-muted">En 45 minutos en tu puerta</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-3 border-bottom pb-3">
                        <div class="bg-success text-white p-3 rounded-circle"><i class="bi bi-qr-code fs-3"></i></div>
                        <div>
                            <h6 class="mb-0 fw-bold">Paga con Yape y Plin</h6>
                            <small class="text-muted">Rápido, seguro y sin contacto</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-info text-white p-3 rounded-circle"><i class="bi bi-patch-check-fill fs-3"></i></div>
                        <div>
                            <h6 class="mb-0 fw-bold">Garantía DIGEMID</h6>
                            <small class="text-muted">100% productos originales</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Strip -->
<div class="bg-white py-3 border-bottom shadow-sm">
    <div class="container">
        <div class="row g-3 text-center">
            <div class="col-6 col-md-3 border-end">
                <i class="bi bi-truck text-primary fs-3"></i>
                <h6 class="mt-2 mb-0 fw-bold">Envíos a todo Cusco</h6>
                <small class="text-muted">Tarifas desde S/. 8.00</small>
            </div>
            <div class="col-6 col-md-3 border-end">
                <i class="bi bi-shield-lock-fill text-success fs-3"></i>
                <h6 class="mt-2 mb-0 fw-bold">Pagos 100% Seguros</h6>
                <small class="text-muted">SSL & Pasarelas oficiales</small>
            </div>
            <div class="col-6 col-md-3 border-end">
                <i class="bi bi-tag-fill text-danger fs-3"></i>
                <h6 class="mt-2 mb-0 fw-bold">Precios Bajos Siempre</h6>
                <small class="text-muted">Descuentos y cupones</small>
            </div>
            <div class="col-6 col-md-3">
                <i class="bi bi-headset text-warning fs-3"></i>
                <h6 class="mt-2 mb-0 fw-bold">Soporte Farmacéutico</h6>
                <small class="text-muted">Vía WhatsApp las 24 hrs</small>
            </div>
        </div>
    </div>
</div>

<!-- Categorías Principales -->
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <h6 class="text-primary fw-bold text-uppercase mb-1">Explora por Área</h6>
            <h2 class="fw-bold mb-0">Categorías de Farmacia</h2>
        </div>
        <a href="tienda.php" class="text-decoration-none fw-semibold">Ver Todo <i class="bi bi-arrow-right"></i></a>
    </div>

    <div class="row g-3">
        <?php foreach ($categories as $cat): ?>
            <div class="col-6 col-md-4 col-lg">
                <a href="tienda.php?categoria=<?= urlencode($cat['slug']) ?>" class="card h-100 text-center p-3 border-0 shadow-sm text-decoration-none text-dark hover-shadow transition">
                    <div class="mx-auto mb-2 text-primary fs-2">
                        <i class="bi <?= e($cat['icono'] ?? 'bi-capsule') ?>"></i>
                    </div>
                    <h6 class="fw-bold mb-1 small"><?= e($cat['nombre']) ?></h6>
                    <small class="text-muted"><?= $cat['total_prod'] ?> productos</small>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Promociones y Ofertas -->
<div id="promociones" class="bg-light py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div>
                <span class="badge bg-danger text-white px-3 py-1 rounded-pill mb-2"><i class="bi bi-fire me-1"></i> Ahorro Directo</span>
                <h2 class="fw-bold mb-0">Ofertas de la Semana</h2>
            </div>
            <a href="tienda.php?ofertas=1" class="text-decoration-none fw-semibold">Ver Todas las Ofertas <i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="row g-4">
            <?php foreach ($saleProducts as $prod): ?>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="product-card position-relative">
                        <?php if (!empty($prod['precio_descuento'])): ?>
                            <span class="product-badge-discount">
                                -<?= round((($prod['precio_venta'] - $prod['precio_descuento']) / $prod['precio_venta']) * 100) ?>%
                            </span>
                        <?php endif; ?>

                        <button class="product-wishlist-btn" data-product-id="<?= $prod['id'] ?>" title="Añadir a lista de deseos">
                            <i class="bi bi-heart"></i>
                        </button>

                        <a href="producto.php?slug=<?= urlencode($prod['slug']) ?>">
                            <img src="<?= e($prod['imagen_principal']) ?>" class="product-thumb" alt="<?= e($prod['nombre']) ?>" onerror="this.src='https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=500&auto=format&fit=crop';">
                        </a>

                        <div class="p-3 d-flex flex-column flex-grow-1">
                            <small class="text-muted mb-1"><?= e($prod['categoria_nombre']) ?></small>
                            <h6 class="fw-bold mb-2">
                                <a href="producto.php?slug=<?= urlencode($prod['slug']) ?>" class="text-dark text-decoration-none text-truncate-2">
                                    <?= e($prod['nombre']) ?>
                                </a>
                            </h6>
                            <div class="mt-auto">
                                <div class="d-flex align-items-baseline gap-2 mb-2">
                                    <span class="fs-5 fw-bold text-primary">S/. <?= number_format($prod['precio_descuento'], 2) ?></span>
                                    <span class="text-muted text-decoration-line-through small">S/. <?= number_format($prod['precio_venta'], 2) ?></span>
                                </div>
                                <button class="btn btn-primary w-100 btn-add-cart d-flex align-items-center justify-content-center gap-2" data-product-id="<?= $prod['id'] ?>">
                                    <i class="bi bi-cart-plus"></i> Agregar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Productos Destacados -->
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <h6 class="text-primary fw-bold text-uppercase mb-1">Los Más Buscados</h6>
            <h2 class="fw-bold mb-0">Productos Destacados</h2>
        </div>
        <a href="tienda.php" class="text-decoration-none fw-semibold">Explorar Catálogo <i class="bi bi-arrow-right"></i></a>
    </div>

    <div class="row g-4">
        <?php foreach ($featuredProducts as $prod): ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="product-card position-relative">
                    <?php if (!empty($prod['precio_descuento']) && $prod['precio_descuento'] > 0): ?>
                        <span class="product-badge-discount">
                            -<?= round((($prod['precio_venta'] - $prod['precio_descuento']) / $prod['precio_venta']) * 100) ?>%
                        </span>
                    <?php endif; ?>

                    <button class="product-wishlist-btn" data-product-id="<?= $prod['id'] ?>" title="Añadir a lista de deseos">
                        <i class="bi bi-heart"></i>
                    </button>

                    <a href="producto.php?slug=<?= urlencode($prod['slug']) ?>">
                        <img src="<?= e($prod['imagen_principal']) ?>" class="product-thumb" alt="<?= e($prod['nombre']) ?>" onerror="this.src='https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=500&auto=format&fit=crop';">
                    </a>

                    <div class="p-3 d-flex flex-column flex-grow-1">
                        <small class="text-muted mb-1"><?= e($prod['categoria_nombre']) ?></small>
                        <h6 class="fw-bold mb-2">
                            <a href="producto.php?slug=<?= urlencode($prod['slug']) ?>" class="text-dark text-decoration-none text-truncate-2">
                                <?= e($prod['nombre']) ?>
                            </a>
                        </h6>
                        <small class="text-secondary mb-2"><?= e($prod['marca']) ?></small>

                        <div class="mt-auto">
                            <div class="d-flex align-items-baseline gap-2 mb-2">
                                <?php if (!empty($prod['precio_descuento']) && $prod['precio_descuento'] > 0): ?>
                                    <span class="fs-5 fw-bold text-primary">S/. <?= number_format($prod['precio_descuento'], 2) ?></span>
                                    <span class="text-muted text-decoration-line-through small">S/. <?= number_format($prod['precio_venta'], 2) ?></span>
                                <?php else: ?>
                                    <span class="fs-5 fw-bold text-primary">S/. <?= number_format($prod['precio_venta'], 2) ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-<?= $prod['stock'] > 5 ? 'success-subtle text-success' : 'danger-subtle text-danger' ?> small">
                                    <i class="bi bi-box-seam me-1"></i> Stock: <?= $prod['stock'] ?>
                                </span>
                                <?php if ($prod['requiere_receta']): ?>
                                    <span class="badge bg-warning-subtle text-warning-emphasis small" title="Requiere receta médica"><i class="bi bi-file-earmark-medical"></i> Receta</span>
                                <?php endif; ?>
                            </div>

                            <button class="btn btn-primary w-100 btn-add-cart d-flex align-items-center justify-content-center gap-2" data-product-id="<?= $prod['id'] ?>">
                                <i class="bi bi-cart-plus"></i> Agregar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
