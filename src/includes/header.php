<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['active'])) {
    header('location: ../');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistema de Farmacia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7f6;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #004d40;
            color: white;
            padding-top: 20px;
            z-index: 1000;
        }
        .sidebar a {
            padding: 10px 20px;
            text-decoration: none;
            color: rgba(255, 255, 255, 0.8);
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .sidebar a.active {
            background-color: #00796b;
            color: white;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .navbar {
            margin-left: 250px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            border-radius: 10px;
        }
        .btn-pharmacy {
            background-color: #004d40;
            color: white;
        }
        .btn-pharmacy:hover {
            background-color: #00332c;
            color: white;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center mb-4">Farmacia</h4>
        <a href="index.php" id="nav-dashboard"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
        <?php if ($_SESSION['rol'] == 'administrador') { ?>
        <a href="usuarios.php" id="nav-usuarios"><i class="fas fa-users me-2"></i> Usuarios</a>
        <a href="configuracion.php" id="nav-config"><i class="fas fa-cogs me-2"></i> Configuración</a>
        <?php } ?>
        <?php if ($_SESSION['rol'] == 'administrador' || $_SESSION['rol'] == 'supervisor') { ?>
        <a href="productos.php" id="nav-productos"><i class="fas fa-pills me-2"></i> Productos</a>
        <?php } ?>
        <a href="clientes.php" id="nav-clientes"><i class="fas fa-user-friends me-2"></i> Clientes</a>
        <a href="ventas.php" id="nav-ventas"><i class="fas fa-shopping-cart me-2"></i> Nueva Venta</a>
        <a href="historial.php" id="nav-historial"><i class="fas fa-history me-2"></i> Historial Ventas</a>
        <a href="salir.php" class="mt-auto"><i class="fas fa-sign-out-alt me-2"></i> Salir</a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid">
            <span class="navbar-brand">Sistema de Gestión Farmacéutica</span>
            <div class="ms-auto d-flex align-items-center">
                <span class="me-3"><i class="fas fa-user-circle me-1"></i> <?php echo $_SESSION['nombre']; ?> (<?php echo $_SESSION['rol']; ?>)</span>
            </div>
        </div>
    </nav>

    <div class="content">
