<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido al Sistema de Ventas e Inventario</h1>
    <p>Hola, <?php echo htmlspecialchars($_SESSION['usuario']['nombre']); ?>!</p>
    <a href="index.php?controller=login&action=logout">Cerrar Sesión</a>

    <h2>Configuración de la Empresa</h2>
    <p><a href="index.php?controller=configuracion&action=index">Ir a Configuración</a></p>

    <h2>Gestión de Productos</h2>
    <p><a href="index.php?controller=producto&action=index">Ir a Gestión de Productos</a></p>
</body>
</html>
