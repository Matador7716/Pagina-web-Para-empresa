<?php
// page-inicio.php - Todo Web Cusco / CandelaWeb
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Web Cusco | Desarrollo Web, Apps y Transformación Digital</title>
    <meta name="description" content="Creamos páginas web, tiendas virtuales, sistemas empresariales y estrategias de marketing digital para impulsar tu negocio al siguiente nivel.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome 6 & Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
        :root {
            --color-black: #000000;
            --color-gold: #c4ae04;
            --color-green: #036326;
            --color-blue-deep: #061578;
            --color-blue-cyan: #00a7fa;
            --color-dark-bg: #030818;
            --color-card-bg: #08112b;
            --color-text-muted: #b0c4de;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #04091e;
            color: #ffffff;
            overflow-x: hidden;
        }

        /* Top Bar */
        .top-bar {
            background-color: var(--color-black);
            border-bottom: 2px solid var(--color-blue-deep);
            font-size: 0.88rem;
            padding: 8px 0;
            transition: all 0.3s ease;
        }

        .top-bar a {
            color: #e0e0e0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .top-bar a:hover {
            color: var(--color-blue-cyan);
        }

        .top-bar .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            margin-left: 6px;
            transition: all 0.3s ease;
        }

        .top-bar .social-icons a:hover {
            background: var(--color-blue-cyan);
            color: var(--color-black);
            transform: translateY(-2px);
        }

        /* Navbar Header */
        .main-header {
            background: rgba(6, 21, 120, 0.92);
            backdrop-filter: blur(12px);
            position: sticky;
            top: 0;
            z-index: 1030;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            border-bottom: 1px solid rgba(0, 167, 250, 0.2);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.6rem;
            letter-spacing: -0.5px;
            color: #ffffff !important;
        }

        .navbar-brand span.gold {
            color: var(--color-gold);
        }

        .navbar-brand span.cyan {
            color: var(--color-blue-cyan);
        }

        .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            font-size: 0.95rem;
            padding: 0.6rem 1rem !important;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--color-blue-cyan) !important;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--color-gold), var(--color-blue-cyan));
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after, .nav-link.active::after {
            width: 80%;
        }

        .dropdown-menu {
            background-color: var(--color-card-bg);
            border: 1px solid rgba(0, 167, 250, 0.3);
            box-shadow: 0 10px 30px rgba(0,0,0,0.6);
            border-radius: 8px;
            padding: 0.5rem;
        }

        .dropdown-item {
            color: #e2e8f0;
            font-weight: 500;
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: linear-gradient(90deg, var(--color-blue-deep), var(--color-blue-cyan));
            color: #ffffff;
            transform: translateX(4px);
        }

        /* Hero Carousel Slider */
        .hero-slider .carousel-item {
            height: 80vh;
            min-height: 520px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .hero-slider .carousel-item::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(135deg, rgba(0,0,0,0.85) 0%, rgba(6,21,120,0.8) 60%, rgba(3,99,38,0.7) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            background: linear-gradient(90deg, var(--color-gold), #e0cb1c);
            color: var(--color-black);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            padding: 6px 18px;
            border-radius: 50px;
            display: inline-block;
            font-size: 0.85rem;
            box-shadow: 0 0 15px rgba(196, 174, 4, 0.4);
        }

        .hero-title {
            font-size: 3.2rem;
            font-weight: 800;
            line-height: 1.2;
            margin-top: 15px;
            margin-bottom: 20px;
            text-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }

        .hero-title span {
            background: linear-gradient(90deg, var(--color-blue-cyan), #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-desc {
            font-size: 1.15rem;
            color: #d1d5db;
            max-width: 680px;
            margin-bottom: 30px;
        }

        .btn-custom-primary {
            background: linear-gradient(135deg, var(--color-blue-cyan), var(--color-blue-deep));
            color: #ffffff;
            border: none;
            padding: 14px 32px;
            font-weight: 600;
            border-radius: 50px;
            box-shadow: 0 6px 20px rgba(0, 167, 250, 0.4);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-custom-primary:hover {
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 10px 25px rgba(0, 167, 250, 0.6);
            color: #ffffff;
        }

        .btn-custom-gold {
            background: linear-gradient(135deg, var(--color-gold), #e5d122);
            color: var(--color-black);
            border: none;
            padding: 14px 32px;
            font-weight: 700;
            border-radius: 50px;
            box-shadow: 0 6px 20px rgba(196, 174, 4, 0.4);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-custom-gold:hover {
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 10px 25px rgba(196, 174, 4, 0.6);
            color: var(--color-black);
        }

        /* Section Titles */
        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-subtitle {
            color: var(--color-gold);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9rem;
            display: block;
            margin-bottom: 8px;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #ffffff;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 70px;
            height: 4px;
            background: linear-gradient(90deg, var(--color-blue-cyan), var(--color-gold));
            margin: 12px auto 0;
            border-radius: 2px;
        }

        /* Services Cards */
        .service-card {
            background: var(--color-card-bg);
            border: 1px solid rgba(0, 167, 250, 0.15);
            border-radius: 16px;
            padding: 30px;
            height: 100%;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--color-blue-cyan), var(--color-green), var(--color-gold));
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .service-card:hover {
            transform: translateY(-8px);
            border-color: rgba(0, 167, 250, 0.5);
            box-shadow: 0 15px 35px rgba(0, 167, 250, 0.25);
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .service-icon-box {
            width: 65px;
            height: 65px;
            border-radius: 14px;
            background: linear-gradient(135deg, rgba(6,21,120,0.8), rgba(0,167,250,0.2));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--color-blue-cyan);
            margin-bottom: 22px;
            border: 1px solid rgba(0, 167, 250, 0.3);
        }

        .service-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 12px;
            color: #ffffff;
        }

        .service-description {
            color: var(--color-text-muted);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .service-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-list li {
            padding: 6px 0;
            font-size: 0.9rem;
            color: #e2e8f0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .service-list li i {
            color: var(--color-gold);
            font-size: 0.8rem;
        }

        /* Sección Visual de Impacto - Digital Transformation Pipeline */
        .impact-section {
            background: linear-gradient(180deg, #030818 0%, #061578 50%, #030818 100%);
            padding: 90px 0;
            position: relative;
            overflow: hidden;
        }

        .impact-section::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0,167,250,0.08) 0%, transparent 60%);
            pointer-events: none;
        }

        .flow-container {
            position: relative;
            z-index: 2;
            margin-top: 40px;
        }

        .flow-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            max-width: 850px;
            margin: 0 auto;
        }

        @media (min-width: 992px) {
            .flow-wrapper {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                gap: 0;
            }
        }

        .flow-step {
            background: rgba(8, 17, 43, 0.85);
            border: 2px solid var(--color-blue-cyan);
            border-radius: 16px;
            padding: 24px 20px;
            text-align: center;
            width: 100%;
            max-width: 160px;
            position: relative;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(8px);
        }

        .flow-step:hover {
            transform: scale(1.1) translateY(-6px);
            border-color: var(--color-gold);
            box-shadow: 0 0 25px rgba(196, 174, 4, 0.6);
            background: rgba(12, 25, 60, 0.95);
        }

        .flow-step-num {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--color-gold);
            color: var(--color-black);
            font-weight: 800;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
        }

        .flow-step-icon {
            font-size: 2rem;
            color: var(--color-blue-cyan);
            margin-bottom: 10px;
            transition: color 0.3s ease;
        }

        .flow-step:hover .flow-step-icon {
            color: var(--color-gold);
        }

        .flow-step-title {
            font-weight: 800;
            font-size: 1.1rem;
            letter-spacing: 1px;
            color: #ffffff;
            margin: 0;
        }

        .flow-arrow {
            color: var(--color-gold);
            font-size: 2rem;
            animation: pulseArrow 1.5s infinite alternate;
        }

        @keyframes pulseArrow {
            0% { transform: scale(0.9); opacity: 0.6; }
            100% { transform: scale(1.2); opacity: 1; }
        }

        @media (max-width: 991px) {
            .flow-arrow i {
                transform: rotate(90deg);
            }
        }

        /* Why Choose Us Section */
        .why-card {
            background: rgba(8, 17, 43, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 14px;
            padding: 28px 24px;
            height: 100%;
            transition: all 0.3s ease;
            position: relative;
        }

        .why-card:hover {
            background: rgba(6, 21, 120, 0.4);
            border-color: var(--color-green);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(3, 99, 38, 0.3);
        }

        .why-icon {
            font-size: 2.2rem;
            color: var(--color-green);
            margin-bottom: 15px;
        }

        .why-card:hover .why-icon {
            color: var(--color-gold);
        }

        .why-title {
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: #ffffff;
        }

        .why-desc {
            color: var(--color-text-muted);
            font-size: 0.92rem;
            line-height: 1.5;
            margin: 0;
        }

        /* Call To Action Banner */
        .cta-banner {
            background: linear-gradient(135deg, var(--color-blue-deep) 0%, var(--color-green) 100%);
            border-radius: 20px;
            padding: 50px 30px;
            border: 1px solid rgba(0, 167, 250, 0.3);
            box-shadow: 0 15px 40px rgba(0,0,0,0.5);
            position: relative;
            overflow: hidden;
        }

        .cta-banner::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 300px;
            height: 300px;
            background: rgba(196, 174, 4, 0.15);
            border-radius: 50%;
            filter: blur(50px);
        }

        /* Footer */
        footer {
            background-color: var(--color-black);
            border-top: 1px solid rgba(0, 167, 250, 0.2);
            padding-top: 60px;
            padding-bottom: 25px;
            color: #a0aec0;
            font-size: 0.9rem;
        }

        footer h5 {
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        footer h5::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 35px;
            height: 3px;
            background: var(--color-gold);
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer ul li {
            margin-bottom: 10px;
        }

        footer ul li a {
            color: #a0aec0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer ul li a:hover {
            color: var(--color-blue-cyan);
            padding-left: 4px;
        }

        /* Floating WhatsApp Button */
        .btn-whatsapp-float {
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 60px;
            height: 60px;
            background-color: #25d366;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.5);
            z-index: 1000;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-whatsapp-float:hover {
            transform: scale(1.1);
            color: #ffffff;
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.8);
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-center text-md-start mb-2 mb-md-0">
                    <span class="me-3">
                        <i class="bi bi-telephone-fill text-warning me-1"></i>
                        <a href="https://wa.me/51935209781" target="_blank">+51 935 209 781</a>
                    </span>
                    <span>
                        <i class="bi bi-envelope-fill text-info me-1"></i>
                        <a href="mailto:adminweb@todowebcusco.com">adminweb@todowebcusco.com</a>
                    </span>
                </div>
                <div class="col-md-4 text-center text-md-end">
                    <span class="me-2 d-none d-lg-inline text-muted">Síguenos:</span>
                    <div class="social-icons d-inline-block">
                        <a href="https://facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://tiktok.com" target="_blank" title="TikTok"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN HEADER & NAVIGATION -->
    <header class="main-header">
        <nav class="navbar navbar-expand-lg navbar-dark py-2">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2" href="https://www.todowebcusco.com/">
                    <i class="bi bi-code-slash text-info fs-2"></i>
                    <span>TODO WEB <span class="gold">CUSCO</span></span>
                </a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ms-auto align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="https://www.todowebcusco.com/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.todowebcusco.com/paginas-web/">Página Web</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.todowebcusco.com/tiendas-virtuales/">Tiendas Virtuales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.todowebcusco.com/desarrollo-de-apps/">Desarrollo de Apps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.todowebcusco.com/anuncios-en-google/">Anuncios en Google</a>
                        </li>

                        <!-- Marketing Submenu Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="marketingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Marketing Digital
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="marketingDropdown">
                                <li>
                                    <a class="dropdown-item" href="https://www.todowebcusco.com/social-media-marketing/">
                                        <i class="bi bi-share me-2 text-info"></i>Social Media Marketing
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://www.todowebcusco.com/posicionamiento-web-seo/">
                                        <i class="bi bi-search me-2 text-warning"></i>Posicionamiento Web (SEO)
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://www.todowebcusco.com/marketing-digital/">
                                        <i class="bi bi-graph-up-arrow me-2 text-success"></i>Marketing Digital
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.todowebcusco.com/portafolio/">Portafolio</a>
                        </li>
                        <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                            <a class="btn btn-custom-gold btn-sm px-3" href="https://www.todowebcusco.com/contacto/">
                                <i class="bi bi-chat-left-dots-fill"></i> Contacto
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- HERO CAROUSEL SLIDER WITH ANIMATIONS -->
    <section class="hero-slider">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=1600&q=80');">
                    <div class="container h-100 d-flex align-items-center">
                        <div class="hero-content text-start col-lg-8">
                            <span class="hero-badge animate__animated animate__fadeInDown mb-2">Desarrollo Web Profesional</span>
                            <h1 class="hero-title animate__animated animate__fadeInLeft">
                                Diseñamos Sitios Web que <span>Impulsan Tu Negocio</span>
                            </h1>
                            <p class="hero-desc animate__animated animate__fadeInUp">
                                Modernos, veloces, adaptables a dispositivos móviles y optimizados para convertir visitantes en clientes reales.
                            </p>
                            <div class="d-flex flex-wrap gap-3 animate__animated animate__zoomIn">
                                <a href="https://www.todowebcusco.com/contacto/" class="btn-custom-primary">
                                    <i class="bi bi-rocket-takeoff-fill"></i> Empezar Mi Proyecto
                                </a>
                                <a href="https://wa.me/51935209781" target="_blank" class="btn-custom-gold">
                                    <i class="bi bi-whatsapp"></i> Hablar por WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1600&q=80');">
                    <div class="container h-100 d-flex align-items-center">
                        <div class="hero-content text-start col-lg-8">
                            <span class="hero-badge animate__animated animate__fadeInDown mb-2">Sistemas a Medida</span>
                            <h1 class="hero-title animate__animated animate__fadeInRight">
                                Digitalizamos y <span>Optimizamos Tus Procesos</span>
                            </h1>
                            <p class="hero-desc animate__animated animate__fadeInUp">
                                Sistemas de ventas, inventarios, reservas y plataformas empresariales adaptadas exactamente a tus requerimientos.
                            </p>
                            <div class="d-flex flex-wrap gap-3 animate__animated animate__zoomIn">
                                <a href="https://www.todowebcusco.com/desarrollo-de-apps/" class="btn-custom-primary">
                                    <i class="bi bi-cpu-fill"></i> Ver Sistemas Web
                                </a>
                                <a href="https://www.todowebcusco.com/contacto/" class="btn-custom-gold">
                                    <i class="bi bi-envelope-paper-fill"></i> Solicitar Cotización
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1600&q=80');">
                    <div class="container h-100 d-flex align-items-center">
                        <div class="hero-content text-start col-lg-8">
                            <span class="hero-badge animate__animated animate__fadeInDown mb-2">Crecimiento Digital</span>
                            <h1 class="hero-title animate__animated animate__fadeInUp">
                                Posicionamiento SEO y <span>Estrategias de Marketing</span>
                            </h1>
                            <p class="hero-desc animate__animated animate__fadeInUp">
                                Aumenta tu visibilidad en Google y atrae clientes potenciales calificados con nuestras campañas de marketing digital.
                            </p>
                            <div class="d-flex flex-wrap gap-3 animate__animated animate__zoomIn">
                                <a href="https://www.todowebcusco.com/posicionamiento-web-seo/" class="btn-custom-primary">
                                    <i class="bi bi-graph-up"></i> Estrategia SEO
                                </a>
                                <a href="https://wa.me/51935209781" target="_blank" class="btn-custom-gold">
                                    <i class="bi bi-telephone-outbound-fill"></i> Asesoría Gratuita
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </section>

    <!-- SECTION: NUESTROS SERVICIOS -->
    <section class="py-5" id="servicios">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Soluciones Integrales</span>
                <h2 class="section-title">Nuestros Servicios</h2>
            </div>

            <div class="row g-4">
                <!-- Card 1: Desarrollo de Páginas Web -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="bi bi-window-sidebar"></i>
                        </div>
                        <h3 class="service-title">Desarrollo de Páginas Web</h3>
                        <p class="service-description">
                            Creamos sitios web modernos, rápidos, adaptables a celulares y diseñados de acuerdo con la identidad de cada negocio.
                        </p>
                        <ul class="service-list">
                            <li><i class="bi bi-check-circle-fill"></i> Páginas corporativas</li>
                            <li><i class="bi bi-check-circle-fill"></i> Landing pages</li>
                            <li><i class="bi bi-check-circle-fill"></i> Tiendas online</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sitios institucionales</li>
                            <li><i class="bi bi-check-circle-fill"></i> Blogs</li>
                            <li><i class="bi bi-check-circle-fill"></i> Portafolios profesionales</li>
                            <li><i class="bi bi-check-circle-fill"></i> Rediseño de páginas web</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2: Sistemas Web -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="bi bi-cpu"></i>
                        </div>
                        <h3 class="service-title">Sistemas Web</h3>
                        <p class="service-description">
                            Desarrollamos sistemas personalizados para digitalizar y optimizar los procesos de tu empresa.
                        </p>
                        <ul class="service-list">
                            <li><i class="bi bi-check-circle-fill"></i> Sistemas administrativos</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sistemas de ventas</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sistemas de inventario</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sistemas para restaurantes</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sistemas de reservas</li>
                            <li><i class="bi bi-check-circle-fill"></i> Plataformas educativas</li>
                            <li><i class="bi bi-check-circle-fill"></i> Paneles administrativos</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 3: Servicios Informáticos -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h3 class="service-title">Servicios Informáticos</h3>
                        <p class="service-description">
                            Soluciones tecnológicas para mantener tus equipos, sistemas y proyectos funcionando correctamente.
                        </p>
                        <ul class="service-list">
                            <li><i class="bi bi-check-circle-fill"></i> Soporte informático</li>
                            <li><i class="bi bi-check-circle-fill"></i> Instalación y configuración</li>
                            <li><i class="bi bi-check-circle-fill"></i> Mantenimiento de computadoras</li>
                            <li><i class="bi bi-check-circle-fill"></i> Redes</li>
                            <li><i class="bi bi-check-circle-fill"></i> Configuración de servidores</li>
                            <li><i class="bi bi-check-circle-fill"></i> Asesoría tecnológica</li>
                            <li><i class="bi bi-check-circle-fill"></i> Soluciones para empresas</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 4: Posicionamiento y Presencia Digital -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon-box">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h3 class="service-title">Posicionamiento & Presencia Digital</h3>
                        <p class="service-description">
                            Ayudamos a que tu negocio tenga una presencia digital más profesional y visible en internet.
                        </p>
                        <ul class="service-list">
                            <li><i class="bi bi-check-circle-fill"></i> SEO y Optimización web</li>
                            <li><i class="bi bi-check-circle-fill"></i> Google Business</li>
                            <li><i class="bi bi-check-circle-fill"></i> Integración de redes sociales</li>
                            <li><i class="bi bi-check-circle-fill"></i> Analítica web</li>
                            <li><i class="bi bi-check-circle-fill"></i> Optimización de velocidad</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN VISUAL DE IMPACTO: TRANSFORMACIÓN DIGITAL PIPELINE -->
    <section class="impact-section">
        <div class="container text-center">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold text-uppercase tracking-wider">Metodología Innovadora</span>
            <h2 class="display-5 fw-extrabold text-white mt-3 mb-2" style="font-weight: 900; letter-spacing: -1px;">
                ENCENDEMOS TU TRANSFORMACIÓN DIGITAL
            </h2>
            <p class="fs-5 text-info max-w-2xl mx-auto" style="color: var(--color-blue-cyan) !important;">
                Desde una página web hasta un sistema completo para tu empresa.
            </p>

            <div class="flow-container">
                <div class="flow-wrapper">

                    <!-- Step 1: IDEA -->
                    <div class="flow-step">
                        <div class="flow-step-num">1</div>
                        <div class="flow-step-icon"><i class="bi bi-lightbulb-fill"></i></div>
                        <h4 class="flow-step-title">IDEA</h4>
                    </div>

                    <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>

                    <!-- Step 2: DISEÑO -->
                    <div class="flow-step">
                        <div class="flow-step-num">2</div>
                        <div class="flow-step-icon"><i class="bi bi-palette-fill"></i></div>
                        <h4 class="flow-step-title">DISEÑO</h4>
                    </div>

                    <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>

                    <!-- Step 3: DESARROLLO -->
                    <div class="flow-step">
                        <div class="flow-step-num">3</div>
                        <div class="flow-step-icon"><i class="bi bi-code-square"></i></div>
                        <h4 class="flow-step-title">DESARROLLO</h4>
                    </div>

                    <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>

                    <!-- Step 4: TECNOLOGÍA -->
                    <div class="flow-step">
                        <div class="flow-step-num">4</div>
                        <div class="flow-step-icon"><i class="bi bi-cpu-fill"></i></div>
                        <h4 class="flow-step-title">TECNOLOGÍA</h4>
                    </div>

                    <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>

                    <!-- Step 5: RESULTADO -->
                    <div class="flow-step" style="border-color: var(--color-gold);">
                        <div class="flow-step-num" style="background: var(--color-blue-cyan); color: #fff;">5</div>
                        <div class="flow-step-icon" style="color: var(--color-gold);"><i class="bi bi-trophy-fill"></i></div>
                        <h4 class="flow-step-title" style="color: var(--color-gold);">RESULTADO</h4>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: ¿POR QUÉ ELEGIR CANDELAWEB? -->
    <section class="py-5" id="nosotros">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Nuestro Valor Agregado</span>
                <h2 class="section-title">¿Por qué elegir CANDELAWEB?</h2>
            </div>

            <div class="row g-4">
                <!-- Item 1: Creatividad -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-brush-fill"></i></div>
                        <h3 class="why-title">Creatividad</h3>
                        <p class="why-desc">
                            Convertimos conceptos e ideas en experiencias digitales atractivas y memorables.
                        </p>
                    </div>
                </div>

                <!-- Item 2: Tecnología -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h3 class="why-title">Tecnología</h3>
                        <p class="why-desc">
                            Utilizamos herramientas y tecnologías actuales para desarrollar soluciones eficientes e innovadoras.
                        </p>
                    </div>
                </div>

                <!-- Item 3: Personalización -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-sliders"></i></div>
                        <h3 class="why-title">Personalización</h3>
                        <p class="why-desc">
                            Cada proyecto se adapta cuidadosamente a las necesidades reales de cada cliente.
                        </p>
                    </div>
                </div>

                <!-- Item 4: Soporte -->
                <div class="col-md-6 col-lg-6">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-headset"></i></div>
                        <h3 class="why-title">Soporte Continuo</h3>
                        <p class="why-desc">
                            Te acompañamos de forma activa después de poner tu proyecto en funcionamiento, garantizando tranquilidad total.
                        </p>
                    </div>
                </div>

                <!-- Item 5: Orientación a resultados -->
                <div class="col-md-12 col-lg-6">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-bullseye"></i></div>
                        <h3 class="why-title">Orientación a Resultados</h3>
                        <p class="why-desc">
                            Desarrollamos pensando estratégicamente en los objetivos reales de tu negocio, no solamente en la apariencia estética.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION BANNER -->
    <section class="py-5">
        <div class="container">
            <div class="cta-banner text-center text-lg-start">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <h2 class="fw-bold text-white mb-2">¿Listo para hacer crecer tu empresa en internet?</h2>
                        <p class="text-light mb-0 fs-5">
                            Ponte en contacto con nosotros hoy mismo y hagamos realidad tu próximo proyecto digital.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="https://wa.me/51935209781" target="_blank" class="btn-custom-gold fs-5">
                            <i class="bi bi-whatsapp"></i> Contactar Ahora
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <a class="navbar-brand d-inline-block mb-3" href="#">
                        <i class="bi bi-code-slash text-info fs-3 me-2"></i>
                        <span>TODO WEB <span class="gold">CUSCO</span></span>
                    </a>
                    <p class="text-muted">
                        Agencia especializada en desarrollo web, creación de sistemas a medida, posicionamiento SEO y marketing digital en Cusco y todo el Perú.
                    </p>
                    <div class="social-icons mt-3">
                        <a href="https://facebook.com" class="btn btn-outline-light btn-sm rounded-circle me-1" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://instagram.com" class="btn btn-outline-light btn-sm rounded-circle me-1" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://tiktok.com" class="btn btn-outline-light btn-sm rounded-circle" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h5>Enlaces Rápidos</h5>
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li><a href="https://www.todowebcusco.com/">Inicio</a></li>
                                <li><a href="https://www.todowebcusco.com/paginas-web/">Página Web</a></li>
                                <li><a href="https://www.todowebcusco.com/tiendas-virtuales/">Tiendas Virtuales</a></li>
                                <li><a href="https://www.todowebcusco.com/desarrollo-de-apps/">Desarrollo Apps</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li><a href="https://www.todowebcusco.com/anuncios-en-google/">Google Ads</a></li>
                                <li><a href="https://www.todowebcusco.com/marketing-digital/">Marketing Digital</a></li>
                                <li><a href="https://www.todowebcusco.com/portafolio/">Portafolio</a></li>
                                <li><a href="https://www.todowebcusco.com/contacto/">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h5>Contacto</h5>
                    <ul class="text-muted">
                        <li class="mb-2"><i class="bi bi-geo-alt-fill text-warning me-2"></i> Cusco, Perú</li>
                        <li class="mb-2"><i class="bi bi-telephone-fill text-success me-2"></i> +51 935 209 781</li>
                        <li class="mb-2"><i class="bi bi-envelope-fill text-info me-2"></i> adminweb@todowebcusco.com</li>
                        <li class="mb-2"><i class="bi bi-clock-fill text-primary me-2"></i> Lunes a Sábado: 8:00 am - 7:00 pm</li>
                    </ul>
                </div>
            </div>

            <hr class="mt-4 border-secondary opacity-25">

            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-muted">&copy; <?php echo date('Y'); ?> Todo Web Cusco / CANDELAWEB. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                    <span class="text-muted small">Desarrollado con innovación y pasión digital</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp button -->
    <a href="https://wa.me/51935209781" class="btn-whatsapp-float" target="_blank" title="Contactar por WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Smooth scroll for internal links if any
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>
