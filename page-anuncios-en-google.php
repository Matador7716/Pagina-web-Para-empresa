<?php
// page-anuncios-en-google.php - CANDELAWEB / Todo Web Cusco
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuncios en Google & Google Ads | CANDELAWEB</title>
    <meta name="description" content="Gestión profesional de campañas de Google Ads con CANDELAWEB. Aparece justo cuando tus clientes te están buscando en Cusco y todo el Perú.">

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&display=swap" rel="stylesheet">

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
            --color-dark-bg: #020617;
            --color-card-bg: rgba(11, 19, 43, 0.88);
            --color-text-white: #ffffff;
            --color-text-light: #f8f9fa;
        }

        * {
            font-family: 'Poppins', sans-serif !important;
        }

        body {
            font-family: 'Poppins', sans-serif !important;
            background-color: var(--color-dark-bg);
            color: var(--color-text-white);
            overflow-x: hidden;
            position: relative;
        }

        /* Ambient Glow Background Orbs */
        .ambient-glow {
            position: absolute;
            border-radius: 50%;
            filter: blur(100px);
            z-index: 0;
            pointer-events: none;
            opacity: 0.35;
        }

        .glow-1 {
            width: 500px;
            height: 500px;
            background: var(--color-blue-cyan);
            top: -100px;
            left: -150px;
        }

        .glow-2 {
            width: 450px;
            height: 450px;
            background: var(--color-gold);
            top: 35%;
            right: -150px;
        }

        .glow-3 {
            width: 550px;
            height: 550px;
            background: var(--color-green);
            bottom: 10%;
            left: -200px;
        }

        /* Top Bar */
        .top-bar {
            background-color: var(--color-black);
            border-bottom: 2px solid var(--color-blue-deep);
            font-size: 0.88rem;
            padding: 8px 0;
            position: relative;
            z-index: 1040;
        }

        .top-bar a {
            color: var(--color-text-white);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .top-bar a:hover {
            color: var(--color-blue-cyan);
            text-shadow: 0 0 10px rgba(0, 167, 250, 0.8);
        }

        .top-bar .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(0, 167, 250, 0.3);
            color: var(--color-text-white);
            margin-left: 8px;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-decoration: none;
        }

        .top-bar .social-icons a:hover {
            background: linear-gradient(135deg, var(--color-blue-cyan), var(--color-gold));
            color: var(--color-black);
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 0 15px rgba(0, 167, 250, 0.8);
        }

        /* Main Header Navigation */
        .main-header {
            background: rgba(2, 6, 23, 0.92);
            backdrop-filter: blur(16px);
            position: sticky;
            top: 0;
            z-index: 1030;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.8);
            border-bottom: 1px solid rgba(0, 167, 250, 0.25);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.7rem;
            letter-spacing: -0.5px;
            color: var(--color-text-white) !important;
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.03);
        }

        .navbar-brand span.cyan {
            color: var(--color-blue-cyan);
            text-shadow: 0 0 12px rgba(0, 167, 250, 0.6);
        }

        .nav-link {
            color: var(--color-text-white) !important;
            font-weight: 500;
            font-size: 0.95rem;
            padding: 0.6rem 1rem !important;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--color-blue-cyan) !important;
            text-shadow: 0 0 10px rgba(0, 167, 250, 0.5);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            border-radius: 2px;
            background: linear-gradient(90deg, var(--color-gold), var(--color-blue-cyan));
            transition: all 0.3s ease;
            transform: translateX(-50%);
            box-shadow: 0 0 10px var(--color-blue-cyan);
        }

        .nav-link:hover::after, .nav-link.active::after {
            width: 85%;
        }

        .dropdown-menu {
            background-color: rgba(11, 19, 43, 0.96);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 167, 250, 0.4);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.8);
            border-radius: 12px;
            padding: 0.6rem;
        }

        .dropdown-item {
            color: var(--color-text-white);
            font-weight: 500;
            padding: 0.7rem 1.2rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: linear-gradient(90deg, var(--color-blue-deep), var(--color-blue-cyan));
            color: var(--color-text-white);
            transform: translateX(6px);
            box-shadow: 0 4px 15px rgba(0, 167, 250, 0.4);
        }

        /* Buttons Styling */
        .btn-custom-primary {
            background: linear-gradient(135deg, var(--color-blue-cyan) 0%, var(--color-blue-deep) 100%);
            color: var(--color-text-white);
            border: none;
            padding: 15px 34px;
            font-weight: 700;
            border-radius: 50px;
            box-shadow: 0 8px 25px rgba(0, 167, 250, 0.5);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-custom-primary:hover {
            transform: translateY(-4px) scale(1.03);
            box-shadow: 0 12px 30px rgba(0, 167, 250, 0.8);
            color: var(--color-text-white);
        }

        .btn-custom-gold {
            background: linear-gradient(135deg, var(--color-gold) 0%, #e5d122 100%);
            color: var(--color-black);
            border: none;
            padding: 15px 34px;
            font-weight: 800;
            border-radius: 50px;
            box-shadow: 0 8px 25px rgba(196, 174, 4, 0.5);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-custom-gold:hover {
            transform: translateY(-4px) scale(1.03);
            box-shadow: 0 12px 30px rgba(196, 174, 4, 0.8);
            color: var(--color-black);
        }

        /* Page Hero Section */
        .page-hero {
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.95) 0%, rgba(6, 21, 120, 0.9) 50%, rgba(3, 99, 38, 0.85) 100%), url('https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?auto=format&fit=crop&w=1600&q=80') center/cover;
            padding: 95px 0 85px;
            position: relative;
            border-bottom: 2px solid rgba(0, 167, 250, 0.3);
            text-align: center;
        }

        .page-hero-badge {
            background: linear-gradient(90deg, var(--color-gold), #e0cb1c);
            color: var(--color-black);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            padding: 8px 22px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            box-shadow: 0 0 20px rgba(196, 174, 4, 0.6);
            margin-bottom: 20px;
        }

        .page-hero-title {
            font-size: 3.6rem;
            font-weight: 900;
            letter-spacing: -1px;
            color: var(--color-text-white);
            margin-bottom: 15px;
            text-shadow: 0 4px 20px rgba(0,0,0,0.8);
        }

        .page-hero-title span {
            color: var(--color-blue-cyan);
            filter: drop-shadow(0 0 12px rgba(0, 167, 250, 0.7));
        }

        .page-hero-subtitle {
            font-size: 1.6rem;
            color: var(--color-gold);
            font-weight: 700;
            margin-bottom: 25px;
            text-shadow: 0 0 12px rgba(196, 174, 4, 0.4);
        }

        .page-hero-desc {
            max-width: 900px;
            margin: 0 auto;
            font-size: 1.15rem;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.95);
        }

        /* Section Titles */
        .section-header {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
            z-index: 2;
        }

        .section-subtitle {
            color: var(--color-gold);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-size: 0.92rem;
            display: block;
            margin-bottom: 10px;
            text-shadow: 0 0 10px rgba(196, 174, 4, 0.4);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 900;
            color: var(--color-text-white);
            position: relative;
            display: inline-block;
            letter-spacing: -0.5px;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 5px;
            background: linear-gradient(90deg, var(--color-blue-cyan), var(--color-green), var(--color-gold));
            margin: 14px auto 0;
            border-radius: 3px;
            box-shadow: 0 0 12px var(--color-blue-cyan);
        }

        /* Hero Search Bar Graphic Component */
        .search-hero-box {
            background: linear-gradient(145deg, rgba(11, 19, 43, 0.98), rgba(2, 6, 23, 0.98));
            border: 2px solid var(--color-gold);
            border-radius: 32px;
            padding: 45px 35px;
            position: relative;
            box-shadow: 0 25px 60px rgba(0,0,0,0.9), 0 0 40px rgba(196, 174, 4, 0.3);
        }

        .google-search-bar {
            background: #ffffff;
            border-radius: 50px;
            padding: 14px 28px;
            color: #1a2238;
            font-weight: 600;
            font-size: 1.15rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .ad-result-card {
            background: rgba(2, 6, 23, 0.9);
            border: 1px solid var(--color-blue-cyan);
            border-radius: 20px;
            padding: 24px;
            text-align: start;
            max-width: 700px;
            margin: 0 auto;
            box-shadow: 0 10px 30px rgba(0, 167, 250, 0.25);
        }

        .ad-tag {
            background: #202124;
            color: #ffffff;
            font-size: 0.78rem;
            font-weight: 800;
            padding: 3px 10px;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 8px;
            border: 1px solid rgba(255,255,255,0.3);
        }

        .ad-title {
            color: var(--color-blue-cyan) !important;
            font-weight: 800;
            font-size: 1.35rem;
            margin-bottom: 6px;
        }

        .ad-url {
            color: var(--color-gold) !important;
            font-size: 0.88rem;
            margin-bottom: 8px;
            display: block;
        }

        .ad-desc {
            color: rgba(255, 255, 255, 0.9) !important;
            font-size: 0.95rem;
            margin-bottom: 0;
        }

        /* Glassmorphic Cards */
        .content-card {
            background: var(--color-card-bg);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 167, 250, 0.25);
            border-radius: 24px;
            padding: 35px;
            height: 100%;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.6);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .content-card:hover {
            transform: translateY(-8px);
            border-color: var(--color-blue-cyan);
            box-shadow: 0 20px 50px rgba(0, 167, 250, 0.35);
        }

        .card-icon-box {
            width: 65px;
            height: 65px;
            border-radius: 18px;
            background: linear-gradient(135deg, rgba(0, 167, 250, 0.2), rgba(6, 21, 120, 0.6));
            border: 1px solid var(--color-blue-cyan);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--color-blue-cyan);
            margin-bottom: 20px;
            box-shadow: 0 0 20px rgba(0, 167, 250, 0.3);
        }

        /* Process Steps Cards */
        .step-flow-item {
            background: rgba(11, 19, 43, 0.9);
            border: 1px solid rgba(0, 167, 250, 0.3);
            border-radius: 20px;
            padding: 24px;
            height: 100%;
            transition: all 0.3s ease;
        }

        .step-flow-item:hover {
            transform: translateY(-5px);
            border-color: var(--color-gold);
            box-shadow: 0 15px 35px rgba(196, 174, 4, 0.3);
        }

        /* Footer */
        footer {
            background-color: var(--color-black);
            border-top: 1px solid rgba(0, 167, 250, 0.25);
            padding-top: 65px;
            padding-bottom: 25px;
            color: var(--color-text-white);
            font-size: 0.9rem;
            position: relative;
            z-index: 2;
        }

        footer h5 {
            color: var(--color-text-white);
            font-weight: 800;
            margin-bottom: 22px;
            position: relative;
            padding-bottom: 12px;
        }

        footer h5::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: var(--color-gold);
            box-shadow: 0 0 8px var(--color-gold);
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer ul li {
            margin-bottom: 11px;
        }

        footer ul li a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        footer ul li a:hover {
            color: var(--color-blue-cyan);
            padding-left: 6px;
            text-shadow: 0 0 8px rgba(0, 167, 250, 0.6);
        }

        /* Floating WhatsApp Button */
        .btn-whatsapp-float {
            position: fixed;
            bottom: 28px;
            right: 28px;
            width: 65px;
            height: 65px;
            background-color: #25d366;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6);
            z-index: 1050;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-decoration: none;
            border: 2px solid #ffffff;
        }

        .btn-whatsapp-float:hover {
            transform: scale(1.15) rotate(10deg);
            color: #ffffff;
            box-shadow: 0 10px 28px rgba(37, 211, 102, 0.9);
        }
    </style>
</head>
<body>

    <!-- Ambient Background Glow Orbs -->
    <div class="ambient-glow glow-1"></div>
    <div class="ambient-glow glow-2"></div>
    <div class="ambient-glow glow-3"></div>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-center text-md-start mb-2 mb-md-0">
                    <span class="me-4 fw-medium">
                        <i class="bi bi-telephone-fill text-warning me-2"></i>
                        <a href="https://wa.me/51935209781" target="_blank">+51 935 209 781</a>
                    </span>
                    <span class="fw-medium">
                        <i class="bi bi-envelope-fill text-info me-2"></i>
                        <a href="mailto:adminweb@todowebcusco.com">adminweb@todowebcusco.com</a>
                    </span>
                </div>
                <div class="col-md-4 text-center text-md-end">
                    <span class="me-2 d-none d-lg-inline text-white opacity-75 fw-medium">Síguenos:</span>
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
                    <i class="bi bi-fire text-warning fs-2" style="filter: drop-shadow(0 0 8px rgba(196, 174, 4, 0.8));"></i>
                    <span>CANDELA<span class="cyan">WEB</span></span>
                </a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ms-auto align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.todowebcusco.com/">Inicio</a>
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
                            <a class="nav-link active" href="https://www.todowebcusco.com/anuncios-en-google/">Anuncios en Google</a>
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
                            <a class="btn btn-custom-gold btn-sm px-4" href="https://www.todowebcusco.com/contacto/">
                                <i class="bi bi-chat-left-dots-fill me-1"></i> Contacto
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- INTRO SPEECH CANDELAWEB CONCEPT -->
    <section class="py-3 position-relative" style="background: rgba(0, 167, 250, 0.08); border-bottom: 1px solid rgba(0, 167, 250, 0.2);">
        <div class="container text-center">
            <p class="m-0 fs-6 fw-semibold text-white">
                <i class="bi bi-lightbulb-fill text-warning me-2"></i>
                Para <strong>CANDELAWEB</strong>, Anuncios en Google no es solo "pagar publicidad": es poner tu negocio frente a personas que ya están buscando lo que tú ofreces.
            </p>
        </div>
    </section>

    <!-- PAGE HERO SECTION -->
    <section class="page-hero">
        <div class="container position-relative z-2">
            <span class="page-hero-badge animate__animated animate__fadeInDown">
                <i class="bi bi-search"></i> Publicidad Estratégica en Google
            </span>
            <h1 class="page-hero-title animate__animated animate__fadeInUp">
                🔎 ANUNCIOS EN <span>GOOGLE</span>
            </h1>
            <h2 class="page-hero-subtitle animate__animated animate__fadeInUp">
                Haz que te encuentren justo cuando te están buscando.
            </h2>
            <div class="page-hero-desc animate__animated animate__fadeInUp">
                <p class="mb-3 fs-5 text-warning fw-bold">
                    Imagina que alguien escribe en Google:
                </p>
                <div class="d-flex justify-content-center gap-2 flex-wrap mb-4">
                    <span class="badge bg-dark border border-secondary text-white fs-6 py-2 px-3">“agencia de viajes en Cusco”</span>
                    <span class="badge bg-dark border border-secondary text-white fs-6 py-2 px-3">“diseño de páginas web”</span>
                    <span class="badge bg-dark border border-secondary text-white fs-6 py-2 px-3">“restaurante cerca de mí”</span>
                    <span class="badge bg-dark border border-secondary text-white fs-6 py-2 px-3">“comprar zapatillas online”</span>
                </div>
                <p class="mb-3 opacity-90 fs-5">
                    Y en ese preciso momento... <strong>¡Tu negocio aparece! 🚀</strong>
                </p>
                <p class="opacity-90 m-0">
                    En <strong>CANDELAWEB</strong> creamos y gestionamos campañas de Google Ads orientadas a conectar tu negocio con personas que buscan activamente tus productos o servicios. No se trata de mostrar tu anuncio a todos: se trata de mostrarlo a las <strong>personas correctas.</strong>
                </p>
            </div>
            <div class="mt-4 pt-2">
                <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20anunciar%20mi%20negocio%20en%20Google" target="_blank" class="btn-custom-gold me-2 mb-2">
                    <i class="bi bi-rocket-takeoff-fill"></i> Anunciar Mi Negocio
                </a>
                <a href="#hero-creativo" class="btn-custom-primary mb-2">
                    <i class="bi bi-search"></i> Ver Cómo Funciona
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION CREATIVE HERO SEARCH CONCEPT -->
    <section class="py-5 position-relative" id="hero-creativo">
        <div class="container py-4 text-center">
            <div class="section-header">
                <span class="section-subtitle">Aparece en el Momento Decisivo</span>
                <h2 class="section-title">TU CLIENTE YA ESTÁ BUSCANDO. ¿POR QUÉ NO APARECER?</h2>
            </div>

            <div class="search-hero-box">
                <div class="google-search-bar">
                    <span><i class="bi bi-search text-primary me-2"></i> agencia de viajes en Cusco</span>
                    <i class="bi bi-mic-fill text-danger"></i>
                </div>

                <div class="ad-result-card animate__animated animate__fadeInUp">
                    <span class="ad-tag">Patrocinado · Anuncio</span>
                    <h3 class="ad-title">CANDELAWEB — Agencias y Servicios de Alto Impacto</h3>
                    <span class="ad-url">https://www.todowebcusco.com/anuncios-en-google</span>
                    <p class="ad-desc">
                        Aparece en las primeras posiciones de Google. Genera llamadas, visitas y ventas inmediatas con campañas estratégicas.
                    </p>
                </div>

                <div class="row align-items-center justify-content-center g-3 mt-4 text-center">
                    <div class="col-6 col-md-2">
                        <div class="p-3 rounded bg-dark border border-secondary text-warning fw-bold small">
                            🔎 Búsqueda
                        </div>
                    </div>
                    <div class="col-auto text-info fs-4"><i class="bi bi-arrow-right-short"></i></div>
                    <div class="col-6 col-md-2">
                        <div class="p-3 rounded bg-dark border border-secondary text-info fw-bold small">
                            📢 Anuncio
                        </div>
                    </div>
                    <div class="col-auto text-info fs-4"><i class="bi bi-arrow-right-short"></i></div>
                    <div class="col-6 col-md-2">
                        <div class="p-3 rounded bg-dark border border-secondary text-primary fw-bold small">
                            👆 Clic
                        </div>
                    </div>
                    <div class="col-auto text-info fs-4"><i class="bi bi-arrow-right-short"></i></div>
                    <div class="col-6 col-md-2">
                        <div class="p-3 rounded bg-dark border border-secondary text-success fw-bold small">
                            💬 Contacto
                        </div>
                    </div>
                    <div class="col-auto text-info fs-4"><i class="bi bi-arrow-right-short"></i></div>
                    <div class="col-6 col-md-2">
                        <div class="p-3 rounded bg-dark border border-warning text-warning fw-bold small">
                            🤝 Cliente
                        </div>
                    </div>
                </div>

                <p class="text-white fs-5 fw-semibold mt-4 mb-0">
                    Anuncios en Google que conectan búsquedas con oportunidades reales.
                </p>
            </div>
        </div>
    </section>

    <!-- SECTION: GOOGLE ADS: APARECE CUANDO IMPORTA -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Beneficios Clave</span>
                <h2 class="section-title">🎯 GOOGLE ADS: APARECE CUANDO IMPORTA</h2>
                <p class="text-white fs-5 mt-3 opacity-90 max-w-2xl mx-auto">
                    Una campaña de Google Ads bien optimizada te ayuda a conseguir resultados inmediatos:
                </p>
            </div>

            <div class="row g-4 text-center">
                <div class="col-md-4 col-lg-2">
                    <div class="content-card py-4">
                        <div class="fs-1 text-info mb-2">🔎</div>
                        <h6 class="text-white fw-bold fs-6 m-0">Más visibilidad</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="content-card py-4">
                        <div class="fs-1 text-warning mb-2">👥</div>
                        <h6 class="text-white fw-bold fs-6 m-0">Más visitas</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="content-card py-4">
                        <div class="fs-1 text-success mb-2">📞</div>
                        <h6 class="text-white fw-bold fs-6 m-0">Más consultas</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="content-card py-4">
                        <div class="fs-1 text-info mb-2">💬</div>
                        <h6 class="text-white fw-bold fs-6 m-0">Más contactos</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="content-card py-4">
                        <div class="fs-1 text-warning mb-2">🛒</div>
                        <h6 class="text-white fw-bold fs-6 m-0">Más ventas</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="content-card py-4">
                        <div class="fs-1 text-success mb-2">📈</div>
                        <h6 class="text-white fw-bold fs-6 m-0">Más oportunidades</h6>
                    </div>
                </div>
            </div>

            <div class="p-4 rounded-4 border border-warning text-center mt-5" style="background: rgba(196, 174, 4, 0.12);">
                <h4 class="text-white fw-bold fs-4 m-0">
                    <i class="bi bi-lightning-charge-fill text-warning me-2"></i> La diferencia está en llegar en el momento adecuado.
                </h4>
            </div>
        </div>
    </section>

    <!-- SECTION: ¿CÓMO FUNCIONA? (5 PASOS) -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Paso a Paso Explicado Fácil</span>
                <h2 class="section-title">💡 ¿CÓMO FUNCIONA?</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg">
                    <div class="step-flow-item text-center">
                        <span class="badge bg-warning text-dark fw-bold mb-2">01</span>
                        <h5 class="text-white fw-bold fs-5 mb-2">UNA PERSONA BUSCA</h5>
                        <p class="text-white opacity-90 small m-0">Alguien necesita un producto o servicio.<br><em>“Diseño web en Cusco”</em></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg">
                    <div class="step-flow-item text-center">
                        <span class="badge bg-info text-dark fw-bold mb-2">02</span>
                        <h5 class="text-white fw-bold fs-5 mb-2">GOOGLE PROCESA</h5>
                        <p class="text-white opacity-90 small m-0">Google identifica los resultados y anuncios relacionados.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg">
                    <div class="step-flow-item text-center">
                        <span class="badge bg-success text-white fw-bold mb-2">03</span>
                        <h5 class="text-white fw-bold fs-5 mb-2">APARECE TU ANUNCIO</h5>
                        <p class="text-white opacity-90 small m-0">Tu negocio aparece frente a esa persona con mensaje claro.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg">
                    <div class="step-flow-item text-center">
                        <span class="badge bg-primary text-white fw-bold mb-2">04</span>
                        <h5 class="text-white fw-bold fs-5 mb-2">EL USUARIO HACE CLIC</h5>
                        <p class="text-white opacity-90 small m-0">Visita tu página web, WhatsApp, tienda o landing page.</p>
                    </div>
                </div>

                <div class="col-md-12 col-lg">
                    <div class="step-flow-item text-center" style="border-color: var(--color-gold);">
                        <span class="badge bg-warning text-dark fw-bold mb-2">05</span>
                        <h5 class="text-white fw-bold fs-5 mb-2">SE CONVIERTE EN CLIENTE</h5>
                        <p class="text-white opacity-90 small m-0">Consulta, reserva, compra o solicita información.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: NO BUSCAMOS CLICS. BUSCAMOS OPORTUNIDADES (OBJETIVOS) -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Estrategia Basada en Objetivos</span>
                <h2 class="section-title">🔥 NO BUSCAMOS CLICS. BUSCAMOS OPORTUNIDADES.</h2>
                <p class="text-white fs-5 mt-3 opacity-90 max-w-2xl mx-auto">
                    Una campaña puede tener muchos clics y no generar resultados. Por eso en CANDELAWEB planteamos las campañas pensando en el objetivo de cada negocio.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="content-card">
                        <div class="card-icon-box"><i class="bi bi-telephone-out"></i></div>
                        <h4 class="text-white fw-bold fs-4 mb-2">📞 Llamadas</h4>
                        <p class="text-white opacity-90 m-0">Haz que potenciales clientes contacten directamente a tu equipo telefónico.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="content-card" style="border-color: rgba(40, 167, 69, 0.35);">
                        <div class="card-icon-box" style="color: #28a745; border-color: #28a745;"><i class="bi bi-whatsapp"></i></div>
                        <h4 class="text-white fw-bold fs-4 mb-2">💬 WhatsApp</h4>
                        <p class="text-white opacity-90 m-0">Lleva usuarios altamente interesados directo a una conversación de ventas.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="content-card">
                        <div class="card-icon-box"><i class="bi bi-globe"></i></div>
                        <h4 class="text-white fw-bold fs-4 mb-2">🌐 Visitas a tu web</h4>
                        <p class="text-white opacity-90 m-0">Atrae personas cualificadas hacia tu sitio web o landing page optimizada.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="content-card" style="border-color: rgba(196, 174, 4, 0.35);">
                        <div class="card-icon-box" style="color: var(--color-gold); border-color: var(--color-gold);"><i class="bi bi-cart-check"></i></div>
                        <h4 class="text-white fw-bold fs-4 mb-2">🛒 Ventas</h4>
                        <p class="text-white opacity-90 m-0">Promociona tus productos y dirige compradores directo a tu tienda online.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="content-card">
                        <div class="card-icon-box"><i class="bi bi-calendar-check"></i></div>
                        <h4 class="text-white fw-bold fs-4 mb-2">📅 Reservas</h4>
                        <p class="text-white opacity-90 m-0">Ideal para hoteles, restaurantes, agencias de viajes y servicios con citas.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="content-card">
                        <div class="card-icon-box"><i class="bi bi-file-earmark-text"></i></div>
                        <h4 class="text-white fw-bold fs-4 mb-2">📝 Formularios</h4>
                        <p class="text-white opacity-90 m-0">Consigue prospectos calificados para cotización o información detallada.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: ¿POR QUÉ GOOGLE ADS? (INTERRUMPIR VS CONECTAR) -->
    <section class="py-5 position-relative">
        <div class="container py-3">
            <div class="p-5 rounded-4 border border-warning" style="background: linear-gradient(135deg, rgba(6, 21, 120, 0.9) 0%, rgba(3, 99, 38, 0.85) 100%); box-shadow: 0 20px 50px rgba(0,0,0,0.8);">
                <div class="row align-items-center g-4">
                    <div class="col-lg-6">
                        <span class="badge bg-warning text-dark fw-bold px-3 py-1 mb-2 fs-6">🧠 Ventaja Estratégica</span>
                        <h2 class="fw-extrabold text-white mb-3 fs-2">¿POR QUÉ GOOGLE ADS?</h2>
                        <p class="text-white fs-5 opacity-90 mb-4">
                            Porque existe una diferencia enorme entre:
                        </p>

                        <div class="p-3 rounded-3 bg-dark border border-danger mb-3">
                            <span class="text-danger fw-bold fs-5 d-block mb-1">❌ Interrumpir</span>
                            <span class="text-white opacity-90">Mostrar publicidad invasiva a alguien que no está interesado en ese momento.</span>
                        </div>

                        <div class="p-3 rounded-3 bg-dark border border-success">
                            <span class="text-success fw-bold fs-5 d-block mb-1">✅ Conectar</span>
                            <span class="text-white opacity-90">Aparecer exactamente cuando una persona ya está buscando lo que tú ofreces.</span>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="p-4 rounded-4 border border-info text-start" style="background: rgba(2, 6, 23, 0.95);">
                            <h5 class="text-info fw-bold mb-3"><i class="bi bi-chat-quote-fill me-2"></i> Ejemplo práctico:</h5>
                            <div class="mb-3">
                                <span class="badge bg-secondary text-white mb-1">Persona:</span>
                                <p class="text-white fw-semibold m-0 ms-2">“Necesito una página web para mi empresa.”</p>
                            </div>
                            <div class="mb-3">
                                <span class="badge bg-primary text-white mb-1">Google:</span>
                                <p class="text-white fw-semibold m-0 ms-2">“Aquí tienes algunas opciones destacadas.”</p>
                            </div>
                            <div>
                                <span class="badge bg-warning text-dark fw-bold mb-1">Tu Empresa:</span>
                                <p class="text-warning fw-extrabold fs-5 m-0 ms-2">¡Aquí estamos! 🔥</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: LLEGA A LAS PERSONAS QUE TE INTERESAN (SEGMENTACIÓN) -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Segmentación Precisa</span>
                <h2 class="section-title">📍 LLEGA A LAS PERSONAS QUE TE INTERESAN</h2>
                <p class="text-white fs-5 mt-3 opacity-90 max-w-2xl mx-auto">
                    Orientamos tus campañas según criterios específicos para no desperdiciar tu presupuesto.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="content-card">
                        <div class="card-icon-box"><i class="bi bi-geo-alt"></i></div>
                        <h4 class="text-white fw-bold fs-5 mb-2">📍 Ubicación</h4>
                        <p class="text-white opacity-90 m-0">Cusco · Lima · Arequipa · Perú · Nivel Internacional</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="content-card">
                        <div class="card-icon-box"><i class="bi bi-key"></i></div>
                        <h4 class="text-white fw-bold fs-5 mb-2">🔎 Palabras clave</h4>
                        <p class="text-white opacity-90 m-0">Seleccionamos búsquedas de alta intención de compra.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="content-card">
                        <div class="card-icon-box"><i class="bi bi-people"></i></div>
                        <h4 class="text-white fw-bold fs-5 mb-2">👥 Público</h4>
                        <p class="text-white opacity-90 m-0">Orientación demográfica e intereses altamente relevantes.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="content-card">
                        <div class="card-icon-box"><i class="bi bi-clock-history"></i></div>
                        <h4 class="text-white fw-bold fs-5 mb-2">🕐 Horarios</h4>
                        <p class="text-white opacity-90 m-0">Adaptamos la estrategia según los horarios más convenientes de atención.</p>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="content-card">
                        <div class="card-icon-box"><i class="bi bi-laptop"></i></div>
                        <h4 class="text-white fw-bold fs-5 mb-2">📱 Dispositivos</h4>
                        <p class="text-white opacity-90 m-0">Optimizamos el rendimiento desde Móviles, Computadoras y Tablets.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: DEJAMOS QUE LOS DATOS HABLEN (MÉTRICAS) -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="p-5 rounded-4 border border-info" style="background: rgba(11, 19, 43, 0.95);">
                <div class="section-header mb-4">
                    <span class="section-subtitle">Analítica & Optimización</span>
                    <h2 class="section-title">📊 DEJAMOS QUE LOS DATOS HABLEN</h2>
                    <p class="text-white fs-5 mt-2 opacity-90">
                        Una campaña profesional no termina cuando el anuncio se activa. <strong>Analizamos → Medimos → Optimizamos → Mejoramos.</strong>
                    </p>
                </div>

                <div class="d-flex flex-wrap justify-content-center gap-3 mb-4 text-center">
                    <span class="p-3 rounded-3 bg-dark border border-info text-white fw-bold">Impresiones</span>
                    <span class="p-3 rounded-3 bg-dark border border-info text-white fw-bold">Clics</span>
                    <span class="p-3 rounded-3 bg-dark border border-info text-white fw-bold">Conversiones</span>
                    <span class="p-3 rounded-3 bg-dark border border-info text-white fw-bold">Costo por clic</span>
                    <span class="p-3 rounded-3 bg-dark border border-info text-white fw-bold">Costo por conversión</span>
                    <span class="p-3 rounded-3 bg-dark border border-info text-white fw-bold">Rendimiento de anuncios</span>
                </div>

                <div class="text-center">
                    <p class="text-warning fw-bold fs-5 m-0">
                        <i class="bi bi-graph-up-arrow me-2"></i> Porque una campaña inteligente aprende de los resultados continuos.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: NUESTRO PROCESO DE TRABAJO (6 PASOS) -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Paso a Paso Profesional</span>
                <h2 class="section-title">🚀 NUESTRO PROCESO</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="step-flow-item text-center">
                        <span class="badge bg-warning text-dark fw-bold mb-2">01 — ANALIZAMOS</span>
                        <h5 class="text-white fw-bold fs-5 mb-2">Diagnóstico</h5>
                        <p class="text-white opacity-90 small m-0">Conocemos tu negocio, mercado, competidores y metas comerciales.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="step-flow-item text-center">
                        <span class="badge bg-info text-dark fw-bold mb-2">02 — INVESTIGAMOS</span>
                        <h5 class="text-white fw-bold fs-5 mb-2">Oportunidades</h5>
                        <p class="text-white opacity-90 small m-0">Identificamos búsquedas de alto valor y palabras clave rentables.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="step-flow-item text-center">
                        <span class="badge bg-success text-white fw-bold mb-2">03 — CREAMOS</span>
                        <h5 class="text-white fw-bold fs-5 mb-2">Redacción</h5>
                        <p class="text-white opacity-90 small m-0">Diseñamos anuncios atractivos, persuasivos y relevantes.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="step-flow-item text-center">
                        <span class="badge bg-primary text-white fw-bold mb-2">04 — LANZAMOS</span>
                        <h5 class="text-white fw-bold fs-5 mb-2">Configuración</h5>
                        <p class="text-white opacity-90 small m-0">Configuramos la estructura, extensiones y activamos las campañas.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="step-flow-item text-center">
                        <span class="badge bg-secondary text-white fw-bold mb-2">05 — MEDIMOS</span>
                        <h5 class="text-white fw-bold fs-5 mb-2">Seguimiento</h5>
                        <p class="text-white opacity-90 small m-0">Analizamos detalladamente el comportamiento y resultados reales.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="step-flow-item text-center" style="border-color: var(--color-gold);">
                        <span class="badge bg-warning text-dark fw-bold mb-2">06 — OPTIMIZAMOS</span>
                        <h5 class="text-white fw-bold fs-5 mb-2">Mejora Continua</h5>
                        <p class="text-white opacity-90 small m-0">Ajustamos pujas y estrategias para maximizar tu retorno de inversión.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: ¿PARA QUIÉN ES? -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Sectores e Industrias</span>
                <h2 class="section-title">🎯 ¿PARA QUIÉN ES?</h2>
            </div>

            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="p-3 rounded-3 bg-dark border border-secondary text-white">
                        <h6 class="text-warning fw-bold fs-5 mb-1">🏢 Empresas</h6>
                        <p class="small opacity-90 m-0">Promociona tus servicios B2B y B2C para conseguir clientes corporativos.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="p-3 rounded-3 bg-dark border border-secondary text-white">
                        <h6 class="text-info fw-bold fs-5 mb-1">🛍️ Tiendas</h6>
                        <p class="small opacity-90 m-0">Lleva compradores cualificados directamente hacia tu catálogo e-commerce.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="p-3 rounded-3 bg-dark border border-secondary text-white">
                        <h6 class="text-success fw-bold fs-5 mb-1">🏨 Hoteles</h6>
                        <p class="small opacity-90 m-0">Consigue reservas directas de huéspedes que buscan hospedaje.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="p-3 rounded-3 bg-dark border border-secondary text-white">
                        <h6 class="text-warning fw-bold fs-5 mb-1">✈️ Agencias de viajes</h6>
                        <p class="small opacity-90 m-0">Aparece frente a turistas que buscan tours y experiencias inolvidables.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="p-3 rounded-3 bg-dark border border-secondary text-white">
                        <h6 class="text-info fw-bold fs-5 mb-1">🍽️ Restaurantes</h6>
                        <p class="small opacity-90 m-0">Atrae comensales locales y turistas que buscan dónde comer cerca.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="p-3 rounded-3 bg-dark border border-secondary text-white">
                        <h6 class="text-success fw-bold fs-5 mb-1">👨‍💼 Profesionales</h6>
                        <p class="small opacity-90 m-0">Promociona tus servicios independientes y recibe llamadas diarias.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION (CTA) -->
    <section class="py-5 position-relative">
        <div class="container">
            <div class="p-5 rounded-4 border border-warning text-center" style="background: linear-gradient(135deg, var(--color-blue-deep) 0%, var(--color-green) 100%); box-shadow: 0 20px 50px rgba(0, 167, 250, 0.3);">
                <span class="badge bg-warning text-dark fw-bold px-3 py-1 mb-2 fs-6">📢 CANDELAWEB</span>
                <h2 class="fw-extrabold text-white mb-3 display-5">Tu negocio está listo para crecer.</h2>
                <p class="text-white fs-4 max-w-2xl mx-auto opacity-90 mb-4">
                    Hagamos que Google lo muestre a los clientes indicados. Anuncios estratégicos. Datos reales. Mejores oportunidades.
                </p>

                <div class="mb-4">
                    <h3 class="text-warning fw-extrabold fs-2 m-0" style="letter-spacing: 1px;">
                        No esperes a que te encuentren. Aparece cuando te están buscando.
                    </h3>
                </div>

                <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20aparecer%20en%20Google%20con%20una%20campa%C3%B1a%20de%20Anuncios" target="_blank" class="btn-custom-gold btn-lg px-5 fs-4">
                    <i class="bi bi-search"></i> QUIERO APARECER EN GOOGLE 🔥
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <a class="navbar-brand d-inline-block mb-3" href="#">
                        <i class="bi bi-fire text-warning fs-3 me-2"></i>
                        <span>CANDELA<span class="cyan">WEB</span></span>
                    </a>
                    <p class="text-white opacity-90">
                        Agencia especializada en desarrollo web, gestión de anuncios en Google Ads, tiendas virtuales, SEO y marketing digital en Cusco y todo el Perú.
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
                    <ul class="text-white opacity-90">
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
                    <p class="mb-0 text-white opacity-90">&copy; <?php echo date('Y'); ?> CANDELAWEB / Todo Web Cusco. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                    <span class="text-white opacity-75 small">Conectamos búsquedas con oportunidades</span>
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
        // Smooth scroll for internal links
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
