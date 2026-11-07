<?php
require_once __DIR__ . '/functions.php';

$currentUser = getCurrentUser();
$cartCount = getCartCount();
$pageTitle = $pageTitle ?? 'SIS CandeWeb Ventas - Botica Cusco';
$metaDescription = $metaDescription ?? 'Farmacia y Botica en Cusco: Medicamentos, Dispositivos Médicos, Cuidado Personal y Envíos a Domicilio.';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($metaDescription) ?>">
    <!-- Open Graph SEO -->
    <meta property="og:title" content="<?= e($pageTitle) ?>">
    <meta property="og:description" content="<?= e($metaDescription) ?>">
    <meta property="og:type" content="website">

    <!-- Bootstrap 5 CSS & Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-none d-md-flex align-items-center gap-3">
                <span><i class="bi bi-geo-alt-fill text-danger me-1"></i> Av. De la Cultura 780, Cusco</span>
                <span><i class="bi bi-telephone-fill text-success me-1"></i> Delivery: <?= e($sysConfig['empresa_telefono'] ?? '+51 984 765 432') ?></span>
            </div>
            <div class="ms-auto d-flex align-items-center gap-3">
                <span class="badge bg-success-subtle text-success border border-success-subtle"><i class="bi bi-shield-check me-1"></i> Compras 100% Seguras</span>
                <a href="seguimiento.php"><i class="bi bi-truck me-1"></i> Seguir Pedido</a>
                <?php if (isStaff()): ?>
                    <a href="admin/index.php" class="badge bg-warning text-dark"><i class="bi bi-speedometer2 me-1"></i> Panel Admin</a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-main sticky-top py-2">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
                <span class="brand-badge fs-4"><i class="bi bi-heart-pulse-fill"></i></span>
                <div>
                    <span class="fw-bold fs-4 text-primary d-block lh-1">SIS CandeWeb</span>
                    <small class="text-secondary fw-semibold" style="font-size: 0.72rem; letter-spacing: 1px;">BOTICA CUSCO VENTAS</small>
                </div>
            </a>

            <!-- Search Bar form -->
            <form class="d-flex mx-lg-4 my-2 my-lg-0 flex-grow-1 max-w-lg" action="tienda.php" method="GET" style="max-width: 520px;">
                <div class="input-group">
                    <input class="form-control border-primary" type="search" name="q" placeholder="Buscar medicamentos, vitaminas, pañales..." aria-label="Buscar" value="<?= e($_GET['q'] ?? '') ?>">
                    <button class="btn btn-primary px-3" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>

            <div class="d-flex align-items-center gap-3 ms-auto">
                <a href="tienda.php" class="text-decoration-none text-dark d-none d-lg-flex align-items-center gap-1 fw-semibold">
                    <i class="bi bi-grid-fill text-primary"></i> Catálogo
                </a>

                <!-- Wishlist Icon -->
                <a href="wishlist.php" class="btn btn-light position-relative p-2 rounded-circle" title="Lista de Deseos">
                    <i class="bi bi-heart fs-5"></i>
                </a>

                <!-- Shopping Cart Icon -->
                <a href="carrito.php" class="btn btn-outline-primary position-relative d-flex align-items-center gap-2 px-3 rounded-pill">
                    <i class="bi bi-cart3 fs-5"></i>
                    <span class="fw-bold d-none d-md-inline">Carrito</span>
                    <span class="cart-count-badge badge bg-danger rounded-pill <?= $cartCount > 0 ? '' : 'd-none' ?>">
                        <?= $cartCount ?>
                    </span>
                </a>

                <!-- User Account Dropdown -->
                <?php if ($currentUser): ?>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle rounded-pill px-3" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i> <?= e($currentUser['nombre']) ?>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            <li><h6 class="dropdown-header">Hola, <?= e($currentUser['nombre']) ?></h6></li>
                            <li><a class="dropdown-item" href="perfil.php"><i class="bi bi-person me-2"></i> Mi Perfil</a></li>
                            <li><a class="dropdown-item" href="historial_compras.php"><i class="bi bi-clock-history me-2"></i> Mis Pedidos</a></li>
                            <li><a class="dropdown-item" href="wishlist.php"><i class="bi bi-heart me-2"></i> Lista de Deseos</a></li>
                            <?php if (isStaff()): ?>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-primary" href="admin/index.php"><i class="bi bi-gear-wide-connected me-2"></i> Panel de Administración</a></li>
                            <?php endif; ?>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Cerrar Sesión</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="d-flex gap-2">
                        <a href="login.php" class="btn btn-outline-secondary rounded-pill px-3">Ingresar</a>
                        <a href="registro.php" class="btn btn-primary rounded-pill px-3">Registrarse</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
