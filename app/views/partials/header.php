<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candela Hotel - Admin</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <h2>Candela Hotel</h2>
        </div>
        <nav>
            <ul>
                <li><a href="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="users"><i class="fas fa-users"></i> Usuarios</a></li>
                <li><a href="rooms"><i class="fas fa-bed"></i> Habitaciones</a></li>
                <li><a href="bookings"><i class="fas fa-calendar-alt"></i> Reservas</a></li>
                <li><a href="housekeeping"><i class="fas fa-broom"></i> Limpieza</a></li>
                <li><a href="crm"><i class="fas fa-address-book"></i> CRM</a></li>
                <li><a href="finance"><i class="fas fa-wallet"></i> Finanzas</a></li>
                <li><a href="pos"><i class="fas fa-cash-register"></i> POS</a></li>
                <li><a href="marketing"><i class="fas fa-bullhorn"></i> Marketing</a></li>
                <li><a href="reports"><i class="fas fa-chart-line"></i> Reportes</a></li>
                <li><a href="auth/logout"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
            </ul>
        </nav>
    </div>
    <div class="main-content">
        <header>
            <div class="header-title">
                <h1><?php echo $data['title']; ?></h1>
            </div>
            <div class="user-info">
                <span><?php echo $_SESSION['user_name']; ?></span>
            </div>
        </header>
        <main>
