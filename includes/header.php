<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CandelaWeb - Diseño y Desarrollo Web</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Top Header -->
<div class="top-header">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="contact-info">
            <a href="https://wa.me/51935209781" target="_blank"><i class="fab fa-whatsapp"></i> +51 935 209 781</a>
            <a href="mailto:informes@candelaweb.com"><i class="far fa-envelope"></i> informes@candelaweb.com</a>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>

<!-- Navigation Menu -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">CANDELAWEB</a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="nosotros.php">Nosotros</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        Servicios
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="servicios.php#asesoria">Asesoria Informatica</a></li>
                        <li><a class="dropdown-item" href="servicios.php#soporte">Soporte Técnico</a></li>
                        <li><a class="dropdown-item" href="servicios.php#hosting">Venta de Hosting</a></li>
                        <li><a class="dropdown-item" href="servicios.php#plantillas">Plantillas Web</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="disenoDropdown" role="button" data-bs-toggle="dropdown">
                        Diseño Web
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="diseno-web.php#estatica">Web Estática</a></li>
                        <li><a class="dropdown-item" href="diseno-web.php#dinamica">Web Dinámica</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="tienda-virtual.php">Tienda Virtual</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="aula-virtual.php">Aula Virtual</a></li>
                <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>
