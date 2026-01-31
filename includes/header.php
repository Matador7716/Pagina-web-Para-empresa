<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
require_once 'config/db.php';
require_once 'includes/csrf.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario y Ventas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        body { font-size: .875rem; }
        .sidebar { position: fixed; top: 0; bottom: 0; left: 0; z-index: 100; padding: 48px 0 0; box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1); }
        .sidebar-sticky { position: relative; top: 0; height: calc(100vh - 48px); padding-top: .5rem; overflow-x: hidden; overflow-y: auto; }
        .navbar-brand { padding-top: .75rem; padding-bottom: .75rem; background-color: rgba(0, 0, 0, .25); box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25); }
        .navbar .navbar-toggler { top: .25rem; right: 1rem; }
    </style>
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="index.php">InvSystem</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav w-100">
            <div class="nav-item text-nowrap d-flex align-items-center px-3 text-white">
                <span class="me-3">Bienvenido, <?php echo htmlspecialchars($_SESSION['full_name']); ?> (<?php echo $_SESSION['role'] === 'admin' ? 'Admin' : 'Ventas'; ?>)</span>
                <a class="nav-link px-3" href="logout.php">Cerrar Sesión</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
