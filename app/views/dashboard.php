<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistema de Farmacia</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Bienvenido, <?php echo $_SESSION['user_username']; ?>!</h2>
        <p>Rol: <?php echo $_SESSION['user_role']; ?></p>
        <?php if ($_SESSION['user_role'] == 'Administrador') : ?>
            <a href="index.php?action=users">Gestionar Usuarios</a>
        <?php endif; ?>
        <a href="index.php?action=products">Gestionar Productos</a>
        <a href="index.php?action=logout">Cerrar Sesión</a>

        <div class="alerts">
            <h3>Alertas</h3>
            <?php if (!empty($lowStockProducts)) : ?>
                <div class="alert low-stock">
                    <h4>Productos con Stock Bajo</h4>
                    <ul>
                        <?php foreach ($lowStockProducts as $product) : ?>
                            <li><?php echo $product->nombre; ?> (Stock: <?php echo $product->stock; ?>)</li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (!empty($expiringProducts)) : ?>
                <div class="alert expiring">
                    <h4>Productos Próximos a Vencer</h4>
                    <ul>
                        <?php foreach ($expiringProducts as $product) : ?>
                            <li><?php echo $product->nombre; ?> (Vence: <?php echo $product->fecha_vencimiento; ?>)</li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
