<?php
session_start();
if (empty($_SESSION['active'])) {
    header('location: ../index.php');
    exit;
}
include_once "../conexion.php";
$query_empresa = mysqli_query($conexion, "SELECT * FROM configuracion");
$data_empresa = mysqli_fetch_assoc($query_empresa);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - <?php echo $data_empresa['nombre']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7f6;
        }
        #wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #004d40;
            color: #fff;
            transition: all 0.3s;
            min-height: 100vh;
        }
        #sidebar .sidebar-header {
            padding: 20px;
            background: #00332c;
            text-align: center;
        }
        #sidebar ul.components {
            padding: 20px 0;
        }
        #sidebar ul li a {
            padding: 10px 20px;
            font-size: 1.1em;
            display: block;
            color: #fff;
            text-decoration: none;
        }
        #sidebar ul li a:hover {
            background: #00695c;
        }
        #sidebar ul li.active > a {
            background: #00695c;
        }
        #content {
            width: 100%;
            padding: 20px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .btn-primary {
            background-color: #004d40;
            border-color: #004d40;
        }
        .btn-primary:hover {
            background-color: #00695c;
            border-color: #00695c;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>FERRETERIA</h3>
                <strong>CW</strong>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <?php if ($_SESSION['rol'] == 'administrador') { ?>
                <li>
                    <a href="usuarios.php"><i class="fas fa-users"></i> Usuarios</a>
                </li>
                <li>
                    <a href="configuracion.php"><i class="fas fa-cogs"></i> Configuración</a>
                </li>
                <?php } ?>
                <?php if ($_SESSION['rol'] == 'administrador' || $_SESSION['rol'] == 'supervisor') { ?>
                <li>
                    <a href="productos.php"><i class="fas fa-box"></i> Productos</a>
                </li>
                <?php } ?>
                <li>
                    <a href="clientes.php"><i class="fas fa-user-friends"></i> Clientes</a>
                </li>
                <li>
                    <a href="nueva_venta.php"><i class="fas fa-shopping-cart"></i> Nueva Venta</a>
                </li>
                <li>
                    <a href="ventas.php"><i class="fas fa-history"></i> Historial Ventas</a>
                </li>
                <li>
                    <a href="salir.php"><i class="fas fa-sign-out-alt"></i> Salir</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 rounded shadow-sm">
                <div class="container-fluid">
                    <span class="navbar-text">
                        Bienvenido, <strong><?php echo $_SESSION['nombre']; ?></strong> (<?php echo $_SESSION['rol']; ?>)
                    </span>
                    <div class="ms-auto">
                        <span class="text-muted"><?php echo date('d/m/Y'); ?></span>
                    </div>
                </div>
            </nav>
