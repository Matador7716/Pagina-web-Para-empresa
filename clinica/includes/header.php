<?php
require_once 'php/check_session.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title ?? 'Clínica'); ?> - Clínica Psicológica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark text-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom p-4">
            <h5 class="mb-0"><i class="fas fa-brain me-2"></i>Clínica Psico</h5>
        </div>
        <div class="list-group list-group-flush">
            <a href="dashboard.php" class="list-group-item list-group-item-action bg-dark text-white p-3">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
            <a href="agenda.php" class="list-group-item list-group-item-action bg-dark text-white p-3">
                <i class="fas fa-calendar-alt me-2"></i> Agenda
            </a>
            <a href="pacientes.php" class="list-group-item list-group-item-action bg-dark text-white p-3">
                <i class="fas fa-user-injured me-2"></i> Pacientes
            </a>
            <?php if ($_SESSION['user_rol'] === 'administrador'): ?>
            <a href="usuarios.php" class="list-group-item list-group-item-action bg-dark text-white p-3">
                <i class="fas fa-users me-2"></i> Usuarios
            </a>
            <?php endif; ?>
            <a href="cobros.php" class="list-group-item list-group-item-action bg-dark text-white p-3">
                <i class="fas fa-money-bill-wave me-2"></i> Cobros
            </a>
            <a href="php/logout.php" class="list-group-item list-group-item-action bg-danger text-white p-3 mt-auto">
                <i class="fas fa-sign-out-alt me-2"></i> Salir
            </a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" class="w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-3 px-4">
            <div class="container-fluid">
                <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-bars"></i></button>
                <div class="ms-auto d-flex align-items-center">
                    <span class="me-3 text-muted">Hola, <strong><?php echo htmlspecialchars($_SESSION['user_nombre']); ?></strong></span>
                    <span class="badge bg-info text-dark"><?php echo htmlspecialchars(ucfirst($_SESSION['user_rol'])); ?></span>
                </div>
            </div>
        </nav>

        <div class="container-fluid p-4">
