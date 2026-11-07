<?php
require_once __DIR__ . '/../includes/functions.php';
requireAuth('staff');

$currentUser = getCurrentUser();
$activePage = $activePage ?? 'dashboard';

// Alerta de stock mínimo
$minStockCount = (int)$pdo->query("SELECT COUNT(*) FROM productos WHERE stock <= stock_minimo AND estado = 'activo'")->fetchColumn();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($panelTitle ?? 'Panel de Control - SIS CandeWeb Ventas') ?></title>
    <!-- Bootstrap 5 CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Chart.js para Estadísticas -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --sidebar-bg: #0b192c;
            --sidebar-hover: #1e293b;
            --sidebar-active: #0d6efd;
        }
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f1f5f9;
        }
        #sidebar-wrapper {
            min-height: 100vh;
            width: 260px;
            background-color: var(--sidebar-bg);
            color: #94a3b8;
            transition: margin 0.25s ease-out;
        }
        #sidebar-wrapper .sidebar-heading {
            padding: 1.25rem 1.5rem;
            font-size: 1.2rem;
            color: #fff;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        .list-group-item-sidebar {
            background-color: transparent;
            color: #94a3b8;
            border: none;
            padding: 0.85rem 1.5rem;
            display: flex;
            align-items: center;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .list-group-item-sidebar:hover {
            background-color: var(--sidebar-hover);
            color: #ffffff;
        }
        .list-group-item-sidebar.active {
            background-color: var(--sidebar-active);
            color: #ffffff;
            font-weight: 600;
        }
        .list-group-item-sidebar i {
            margin-right: 0.75rem;
            font-size: 1.15rem;
        }
        .stat-card {
            border: none;
            border-radius: 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            transition: transform 0.2s ease;
        }
        .stat-card:hover {
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="d-flex flex-column flex-shrink-0">
        <div class="sidebar-heading d-flex align-items-center gap-2">
            <span class="badge bg-primary fs-5"><i class="bi bi-heart-pulse-fill"></i></span>
            <div>
                <span class="fw-bold d-block lh-1 text-white fs-6">SIS CandeWeb</span>
                <span class="small text-muted" style="font-size:0.7rem;">BOTICA CUSCO</span>
            </div>
        </div>

        <div class="list-group list-group-flush my-3 flex-grow-1">
            <a href="index.php" class="list-group-item-sidebar <?= $activePage === 'dashboard' ? 'active' : '' ?>">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="pos.php" class="list-group-item-sidebar text-warning fw-bold <?= $activePage === 'pos' ? 'active' : '' ?>">
                <i class="bi bi-upc-scan"></i> Punto de Venta (POS)
            </a>
            <a href="pedidos.php" class="list-group-item-sidebar <?= $activePage === 'pedidos' ? 'active' : '' ?>">
                <i class="bi bi-bag-check"></i> Gestión de Pedidos
            </a>
            <a href="productos.php" class="list-group-item-sidebar <?= $activePage === 'productos' ? 'active' : '' ?>">
                <i class="bi bi-capsule"></i> Productos & Catálogo
            </a>
            <a href="inventario.php" class="list-group-item-sidebar <?= $activePage === 'inventario' ? 'active' : '' ?>">
                <i class="bi bi-box-seam"></i> Inventario & Stock
                <?php if ($minStockCount > 0): ?>
                    <span class="badge bg-danger ms-auto"><?= $minStockCount ?></span>
                <?php endif; ?>
            </a>
            <a href="clientes.php" class="list-group-item-sidebar <?= $activePage === 'clientes' ? 'active' : '' ?>">
                <i class="bi bi-people"></i> Clientes
            </a>
            <a href="reportes.php" class="list-group-item-sidebar <?= $activePage === 'reportes' ? 'active' : '' ?>">
                <i class="bi bi-bar-chart-line"></i> Reportes & Estadísticas
            </a>
            <a href="proveedores.php" class="list-group-item-sidebar <?= $activePage === 'proveedores' ? 'active' : '' ?>">
                <i class="bi bi-truck"></i> Proveedores
            </a>
            <a href="cupones.php" class="list-group-item-sidebar <?= $activePage === 'cupones' ? 'active' : '' ?>">
                <i class="bi bi-ticket-perforated"></i> Cupones & Promos
            </a>
            <a href="configuracion.php" class="list-group-item-sidebar <?= $activePage === 'configuracion' ? 'active' : '' ?>">
                <i class="bi bi-gear"></i> Configuración
            </a>
        </div>

        <div class="p-3 border-top border-secondary border-opacity-25 small">
            <a href="../index.php" class="btn btn-outline-light btn-sm w-100 mb-2" target="_blank">
                <i class="bi bi-shop me-1"></i> Ver Tienda Web
            </a>
            <a href="../logout.php" class="btn btn-danger btn-sm w-100">
                <i class="bi bi-box-arrow-right me-1"></i> Cerrar Sesión
            </a>
        </div>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper" class="flex-grow-1 d-flex flex-column min-vh-100">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm px-4 py-2">
            <div class="d-flex align-items-center justify-content-between w-100">
                <h5 class="mb-0 fw-bold text-dark"><?= e($panelTitle ?? 'Panel de Control') ?></h5>
                <div class="d-flex align-items-center gap-3">
                    <?php if ($minStockCount > 0): ?>
                        <a href="inventario.php?filtro=bajo_stock" class="badge bg-danger-subtle text-danger border border-danger text-decoration-none py-2 px-3">
                            <i class="bi bi-exclamation-triangle-fill me-1"></i> <?= $minStockCount ?> productos con bajo stock
                        </a>
                    <?php endif; ?>
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle fs-5 text-primary"></i>
                            <span class="small fw-bold"><?= e($currentUser['nombre']) ?> (<?= e($currentUser['rol']) ?>)</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            <li><a class="dropdown-item" href="../perfil.php"><i class="bi bi-person me-2"></i> Mi Perfil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="../logout.php"><i class="bi bi-box-arrow-right me-2"></i> Salir</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid p-4">
