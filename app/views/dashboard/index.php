<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CandelaWEB</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="dashboard-container">
        <header class="dashboard-header">
            <h1>Bienvenido a CandelaWEB, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <p>Tu rol es: <strong><?php echo htmlspecialchars($_SESSION['role']); ?></strong></p>
            <a href="index.php?action=logout" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
        </header>

        <main class="dashboard-grid">
            <a href="index.php?action=sales" class="card card-sales">
                <div class="card-icon"><i class="fas fa-cash-register"></i></div>
                <div class="card-title">Punto de Venta</div>
                <p>Iniciar una nueva venta</p>
            </a>
            <a href="index.php?action=inventory" class="card card-inventory">
                <div class="card-icon"><i class="fas fa-boxes-stacked"></i></div>
                <div class="card-title">Inventario</div>
                <p>Gestionar productos y stock</p>
            </a>
            <a href="index.php?action=reports" class="card card-reports">
                <div class="card-icon"><i class="fas fa-chart-line"></i></div>
                <div class="card-title">Reportes</div>
                <p>Ver informes de ventas</p>
            </a>
            <a href="index.php?action=purchases" class="card card-purchases">
                <div class="card-icon"><i class="fas fa-truck-loading"></i></div>
                <div class="card-title">Compras</div>
                <p>Registrar nuevas compras</p>
            </a>
            <a href="index.php?action=users" class="card card-users">
                <div class="card-icon"><i class="fas fa-users-cog"></i></div>
                <div class="card-title">Usuarios</div>
                <p>Administrar usuarios del sistema</p>
            </a>
            <a href="index.php?action=settings" class="card card-settings">
                <div class="card-icon"><i class="fas fa-cogs"></i></div>
                <div class="card-title">Configuración</div>
                <p>Ajustes generales del sistema</p>
            </a>
        </main>
    </div>
</body>
</html>
