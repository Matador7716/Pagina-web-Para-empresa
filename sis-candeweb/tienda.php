<?php
require_once __DIR__ . '/includes/functions.php';

$pageTitle = "Catálogo de Productos - SIS CandeWeb Ventas Botica Cusco";

// Filtros
$catSlug = trim($_GET['categoria'] ?? '');
$subcatSlug = trim($_GET['subcategoria'] ?? '');
$marca = trim($_GET['marca'] ?? '');
$query = trim($_GET['q'] ?? '');
$minPrice = isset($_GET['min_price']) && is_numeric($_GET['min_price']) ? (float)$_GET['min_price'] : null;
$maxPrice = isset($_GET['max_price']) && is_numeric($_GET['max_price']) ? (float)$_GET['max_price'] : null;
$soloStock = !empty($_GET['solo_stock']);
$ofertas = !empty($_GET['ofertas']);
$orden = trim($_GET['orden'] ?? 'recientes');

// Construcción de la consulta dinámica
$where = ["p.estado = 'activo'"];
$params = [];

if ($catSlug !== '') {
    $where[] = "c.slug = ?";
    $params[] = $catSlug;
}
if ($subcatSlug !== '') {
    $where[] = "s.slug = ?";
    $params[] = $subcatSlug;
}
if ($marca !== '') {
    $where[] = "p.marca = ?";
    $params[] = $marca;
}
if ($query !== '') {
    $where[] = "(p.nombre LIKE ? OR p.descripcion LIKE ? OR p.marca LIKE ? OR p.codigo_barra LIKE ?)";
    $like = "%$query%";
    $params[] = $like;
    $params[] = $like;
    $params[] = $like;
    $params[] = $like;
}
if ($minPrice !== null) {
    $where[] = "COALESCE(p.precio_descuento, p.precio_venta) >= ?";
    $params[] = $minPrice;
}
if ($maxPrice !== null) {
    $where[] = "COALESCE(p.precio_descuento, p.precio_venta) <= ?";
    $params[] = $maxPrice;
}
if ($soloStock) {
    $where[] = "p.stock > 0";
}
if ($ofertas) {
    $where[] = "p.precio_descuento IS NOT NULL AND p.precio_descuento > 0";
}

$orderBy = "p.id DESC";
if ($orden === 'precio_asc') {
    $orderBy = "COALESCE(p.precio_descuento, p.precio_venta) ASC";
} elseif ($orden === 'precio_desc') {
    $orderBy = "COALESCE(p.precio_descuento, p.precio_venta) DESC";
} elseif ($orden === 'nombre') {
    $orderBy = "p.nombre ASC";
}

$sql = "SELECT p.*, c.nombre as categoria_nombre, c.slug as categoria_slug, s.nombre as subcategoria_nombre
        FROM productos p
        JOIN categorias c ON p.categoria_id = c.id
        LEFT JOIN subcategorias s ON p.subcategoria_id = s.id
        WHERE " . implode(' AND ', $where) . "
        ORDER BY $orderBy";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$products = $stmt->fetchAll();

// Listas para filtros laterales
$allCategories = $pdo->query("SELECT * FROM categorias WHERE estado = 'activo'")->fetchAll();
$allBrands = $pdo->query("SELECT DISTINCT marca FROM productos WHERE estado = 'activo' ORDER BY marca ASC")->fetchAll(PDO::FETCH_COLUMN);

require_once __DIR__ . '/includes/header.php';
?>

<div class="container py-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
            <li class="breadcrumb-item active">Catálogo de Productos</li>
            <?php if ($catSlug): ?>
                <li class="breadcrumb-item active"><?= e($catSlug) ?></li>
            <?php endif; ?>
        </ol>
    </nav>

    <div class="row g-4">
        <!-- Sidebar Filtros -->
        <div class="col-lg-3">
            <div class="card border-0 shadow-sm rounded-4 p-3 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold mb-0"><i class="bi bi-funnel-fill text-primary me-2"></i>Filtros</h5>
                    <a href="tienda.php" class="small text-danger text-decoration-none">Limpiar</a>
                </div>

                <form method="GET" action="tienda.php">
                    <?php if ($query): ?>
                        <input type="hidden" name="q" value="<?= e($query) ?>">
                    <?php endif; ?>

                    <!-- Categorías -->
                    <div class="mb-3">
                        <label class="form-label fw-bold small text-uppercase">Categoría</label>
                        <select name="categoria" class="form-select form-select-sm" onchange="this.form.submit()">
                            <option value="">Todas las categorías</option>
                            <?php foreach ($allCategories as $c): ?>
                                <option value="<?= e($c['slug']) ?>" <?= $catSlug === $c['slug'] ? 'selected' : '' ?>>
                                    <?= e($c['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Marcas / Laboratorios -->
                    <div class="mb-3">
                        <label class="form-label fw-bold small text-uppercase">Marca / Laboratorio</label>
                        <select name="marca" class="form-select form-select-sm" onchange="this.form.submit()">
                            <option value="">Todas las marcas</option>
                            <?php foreach ($allBrands as $b): ?>
                                <option value="<?= e($b) ?>" <?= $marca === $b ? 'selected' : '' ?>><?= e($b) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Rango de Precios -->
                    <div class="mb-3">
                        <label class="form-label fw-bold small text-uppercase">Precio (S/.)</label>
                        <div class="d-flex gap-2">
                            <input type="number" step="0.5" name="min_price" class="form-control form-control-sm" placeholder="Mín" value="<?= e($minPrice ?? '') ?>">
                            <input type="number" step="0.5" name="max_price" class="form-control form-control-sm" placeholder="Máx" value="<?= e($maxPrice ?? '') ?>">
                        </div>
                    </div>

                    <!-- Solo con Stock -->
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="solo_stock" value="1" id="soloStockCheck" <?= $soloStock ? 'checked' : '' ?>>
                        <label class="form-check-label small" for="soloStockCheck">
                            Solo con stock disponible
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm w-100 rounded-pill">Aplicar Filtros</button>
                </form>
            </div>
        </div>

        <!-- Listado de Productos -->
        <div class="col-lg-9">
            <div class="d-flex justify-content-between align-items-center mb-4 bg-white p-3 rounded-4 shadow-sm">
                <div>
                    <h4 class="fw-bold mb-0">Catálogo</h4>
                    <small class="text-muted">Mostrando <?= count($products) ?> productos encontrados</small>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <label class="small text-muted text-nowrap d-none d-sm-block">Ordenar por:</label>
                    <select class="form-select form-select-sm" onchange="location = this.value;">
                        <option value="tienda.php?<?= http_build_query(array_merge($_GET, ['orden' => 'recientes'])) ?>" <?= $orden === 'recientes' ? 'selected' : '' ?>>Más recientes</option>
                        <option value="tienda.php?<?= http_build_query(array_merge($_GET, ['orden' => 'precio_asc'])) ?>" <?= $orden === 'precio_asc' ? 'selected' : '' ?>>Menor precio</option>
                        <option value="tienda.php?<?= http_build_query(array_merge($_GET, ['orden' => 'precio_desc'])) ?>" <?= $orden === 'precio_desc' ? 'selected' : '' ?>>Mayor precio</option>
                        <option value="tienda.php?<?= http_build_query(array_merge($_GET, ['orden' => 'nombre'])) ?>" <?= $orden === 'nombre' ? 'selected' : '' ?>>Nombre A-Z</option>
                    </select>
                </div>
            </div>

            <?php if (empty($products)): ?>
                <div class="card border-0 shadow-sm rounded-4 p-5 text-center">
                    <i class="bi bi-search fs-1 text-muted mb-3"></i>
                    <h5 class="fw-bold">No se encontraron productos</h5>
                    <p class="text-muted small">Intenta ajustar los filtros o el término de búsqueda.</p>
                    <a href="tienda.php" class="btn btn-outline-primary btn-sm mx-auto">Ver todo el catálogo</a>
                </div>
            <?php else: ?>
                <div class="row g-3">
                    <?php foreach ($products as $prod): ?>
                        <div class="col-12 col-sm-6 col-md-4">
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
                                    <span class="badge bg-light text-secondary border text-start w-100 text-truncate mb-1" style="font-size:0.75rem;">
                                        <?= e($prod['categoria_nombre']) ?>
                                    </span>
                                    <h6 class="fw-bold mb-1">
                                        <a href="producto.php?slug=<?= urlencode($prod['slug']) ?>" class="text-dark text-decoration-none text-truncate-2">
                                            <?= e($prod['nombre']) ?>
                                        </a>
                                    </h6>
                                    <small class="text-muted mb-2"><?= e($prod['marca']) ?> &bull; <?= e($prod['descripcion_corta']) ?></small>

                                    <div class="mt-auto">
                                        <div class="d-flex align-items-baseline gap-2 mb-2">
                                            <?php if (!empty($prod['precio_descuento']) && $prod['precio_descuento'] > 0): ?>
                                                <span class="fs-5 fw-bold text-dark">S/. <?= number_format($prod['precio_descuento'], 2) ?></span>
                                                <span class="text-muted text-decoration-line-through small">S/. <?= number_format($prod['precio_venta'], 2) ?></span>
                                            <?php else: ?>
                                                <span class="fs-5 fw-bold text-dark">S/. <?= number_format($prod['precio_venta'], 2) ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center mb-2 small">
                                            <span class="text-<?= $prod['stock'] > 5 ? 'success' : 'danger' ?>">
                                                <i class="bi bi-box-seam"></i> Stock: <?= $prod['stock'] ?>
                                            </span>
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
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
