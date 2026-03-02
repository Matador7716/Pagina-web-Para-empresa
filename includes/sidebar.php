<?php if (isset($_SESSION['user_id'])): ?>
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active text-white" href="index.php">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="pos.php">
                    <i class="bi bi-cart-plus me-2"></i> Punto de Venta (POS)
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="inventory.php">
                    <i class="bi bi-box-seam me-2"></i> Inventario
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="cash_control.php">
                    <i class="bi bi-cash-coin me-2"></i> Control de Caja
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="reports.php">
                    <i class="bi bi-graph-up me-2"></i> Informes
                </a>
            </li>
            <?php if ($_SESSION['role'] === 'admin'): ?>
            <li class="nav-item">
                <a class="nav-link text-white" href="users.php">
                    <i class="bi bi-people me-2"></i> Usuarios
                </a>
            </li>
            <?php endif; ?>
            <hr class="text-white">
            <li class="nav-item">
                <a class="nav-link text-white" href="logout.php">
                    <i class="bi bi-door-open me-2"></i> Salir
                </a>
            </li>
        </ul>
    </div>
</nav>
<?php endif; ?>
