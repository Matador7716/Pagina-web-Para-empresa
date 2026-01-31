<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">
                    <i class="bi bi-house-door me-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pos.php">
                    <i class="bi bi-cart me-2"></i>
                    Punto de Venta (POS)
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.php">
                    <i class="bi bi-box-seam me-2"></i>
                    Productos (Inventario)
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categories.php">
                    <i class="bi bi-tags me-2"></i>
                    Categorías
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Gestión</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="customers.php">
                    <i class="bi bi-people me-2"></i>
                    Clientes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="suppliers.php">
                    <i class="bi bi-truck me-2"></i>
                    Proveedores
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="purchases.php">
                    <i class="bi bi-bag-plus me-2"></i>
                    Entradas de Stock
                </a>
            </li>
        </ul>

        <?php if ($_SESSION['role'] === 'admin'): ?>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Administración</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="reports.php">
                    <i class="bi bi-graph-up me-2"></i>
                    Reportes y Análisis
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="users.php">
                    <i class="bi bi-person-gear me-2"></i>
                    Usuarios
                </a>
            </li>
        </ul>
        <?php endif; ?>
    </div>
</nav>
