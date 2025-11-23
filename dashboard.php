<?php
require_once __DIR__ . '/init.php';

// Proteger esta página
if (!isset($_SESSION['user_id'])) {
    header('Location: /login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Bienvenido al Dashboard, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>
        <p>Tu rol es: <?php echo htmlspecialchars($_SESSION['user_role']); ?></p>
        <a href="logout.php">Cerrar Sesión</a>
    </div>
</body>
</html>
