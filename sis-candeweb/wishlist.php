<?php
require_once __DIR__ . '/includes/functions.php';
requireAuth();

$userId = $_SESSION['user_id'];
$pageTitle = "Mi Lista de Deseos (Wishlist) - SIS CandeWeb Botica Cusco";

$stmt = $pdo->prepare("SELECT p.*, c.nombre as categoria_nombre, w.id as wishlist_id
                       FROM wishlist w
                       JOIN productos p ON w.producto_id = p.id
                       JOIN categorias c ON p.categoria_id = c.id
                       WHERE w.usuario_id = ?
                       ORDER BY w.id DESC");
$stmt->execute([$userId]);
$wishlistItems = $stmt->fetchAll();

require_once __DIR__ . '/includes/header.php';
?>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1"><i class="bi bi-heart-fill text-danger me-2"></i>Mi Lista de Deseos</h3>
            <p class="text-muted small mb-0">Tus medicamentos y productos guardados para comprar después</p>
        </div>
        <a href="tienda.php" class="btn btn-outline-primary btn-sm rounded-pill">
            <i class="bi bi-plus-circle me-1"></i> Explorar Más Productos
        </a>
    </div>

    <?php if (empty($wishlistItems)): ?>
        <div class="card border-0 shadow-sm rounded-4 p-5 text-center">
            <i class="bi bi-heartbreak fs-1 text-muted mb-3"></i>
            <h5 class="fw-bold">Tu lista de deseos está vacía</h5>
            <p class="text-muted small">Guarda aquí los productos que quieres seguir o comprar más adelante.</p>
            <a href="tienda.php" class="btn btn-primary btn-sm mx-auto rounded-pill px-4">Ir a la Tienda</a>
        </div>
    <?php else: ?>
        <div class="row g-4">
            <?php foreach ($wishlistItems as $prod): ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card position-relative">
                        <button class="product-wishlist-btn active" data-product-id="<?= $prod['id'] ?>" title="Quitar de favoritos">
                            <i class="bi bi-heart-fill text-danger"></i>
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
                                    <?php if (!empty($prod['precio_descuento']) && $prod['precio_descuento'] > 0): ?>
                                        <span class="fs-5 fw-bold text-primary">S/. <?= number_format($prod['precio_descuento'], 2) ?></span>
                                        <span class="text-muted text-decoration-line-through small">S/. <?= number_format($prod['precio_venta'], 2) ?></span>
                                    <?php else: ?>
                                        <span class="fs-5 fw-bold text-primary">S/. <?= number_format($prod['precio_venta'], 2) ?></span>
                                    <?php endif; ?>
                                </div>

                                <button class="btn btn-primary w-100 btn-add-cart d-flex align-items-center justify-content-center gap-2" data-product-id="<?= $prod['id'] ?>">
                                    <i class="bi bi-cart-plus"></i> Añadir al Carrito
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
