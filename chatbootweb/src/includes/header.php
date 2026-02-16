<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['active'])) {
    header('location: ../index.php');
    exit;
}
require_once "../conexion.php";

// Get company config
$query_conf = mysqli_query($conexion, "SELECT * FROM configuracion LIMIT 1");
$data_conf = mysqli_fetch_assoc($query_conf);
$nombre_empresa = $data_conf['nombre_empresa'] ?? 'CHATBOOTWEB';
$logo_empresa = $data_conf['logo'] ?? 'default_logo.png';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombre_empresa; ?> | Panel de Control</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            overflow-x: hidden;
        }
        #sidebar {
            width: 250px;
            background-color: var(--primary-color);
            color: white;
            transition: all 0.3s;
            z-index: 1000;
        }
        #sidebar .sidebar-header {
            padding: 20px;
            background: rgba(0,0,0,0.1);
            text-align: center;
        }
        #sidebar ul.components {
            padding: 20px 0;
        }
        #sidebar ul li a {
            padding: 10px 20px;
            font-size: 1.1em;
            display: block;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
        }
        #sidebar ul li a:hover {
            color: white;
            background: rgba(255,255,255,0.1);
        }
        #sidebar ul li.active > a {
            color: white;
            background: var(--accent-color);
        }
        #content {
            flex: 1;
            padding: 20px;
            background-color: var(--bg-color);
        }
        .navbar {
            background: var(--white);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .stat-card {
            padding: 20px;
            border-radius: 15px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        .stat-card i {
            position: absolute;
            right: 10px;
            bottom: 10px;
            font-size: 3rem;
            opacity: 0.2;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <img src="../assets/img/<?php echo $logo_empresa; ?>" alt="Logo" style="width: 60px; border-radius: 50%;" onerror="this.src='https://via.placeholder.com/60?text=CB'">
            <h5 class="mt-2"><?php echo $nombre_empresa; ?></h5>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="dashboard.php"><i class="fas fa-home me-2"></i> Dashboard</a>
            </li>
            <li>
                <a href="chats.php"><i class="fas fa-comments me-2"></i> Chats</a>
            </li>
            <li>
                <a href="simulador.php"><i class="fas fa-vial me-2"></i> Simulador Bot</a>
            </li>
            <li>
                <a href="generador_links.php"><i class="fas fa-link me-2"></i> Generador de Links</a>
            </li>
            <li>
                <a href="widget.php"><i class="fas fa-comment-dots me-2"></i> Widget / JoinChat</a>
            </li>
            <li>
                <a href="preguntas.php"><i class="fas fa-robot me-2"></i> Respuestas IA</a>
            </li>
            <?php if ($_SESSION['rol'] == 'Administrador') { ?>
            <li>
                <a href="usuarios.php"><i class="fas fa-users me-2"></i> Usuarios</a>
            </li>
            <li>
                <a href="configuracion.php"><i class="fas fa-cogs me-2"></i> Configuración</a>
            </li>
            <?php } ?>
            <li>
                <a href="salir.php" class="text-danger"><i class="fas fa-sign-out-alt me-2"></i> Salir</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-primary d-md-none">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="ms-auto d-flex align-items-center">
                    <span class="me-3">Bienvenido, <strong><?php echo $_SESSION['nombre']; ?></strong> (<?php echo $_SESSION['rol']; ?>)</span>
                    <img src="../assets/img/default_user.png" alt="User" style="width: 40px; border-radius: 50%;">
                </div>
            </div>
        </nav>
