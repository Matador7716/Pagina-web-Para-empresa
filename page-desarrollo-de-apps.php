<?php
// page-desarrollo-de-apps.php - CANDELAWEB / Todo Web Cusco
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo de Apps Móviles iOS & Android | CANDELAWEB</title>
    <meta name="description" content="Diseño y desarrollo de aplicaciones móviles nativas e híbridas en CANDELAWEB. Convierte tu idea en una app interactiva, rápida y conectada a tu ecosistema digital.">

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
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.95) 0%, rgba(6, 21, 120, 0.9) 50%, rgba(3, 99, 38, 0.85) 100%), url('https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=1600&q=80') center/cover;
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

        /* Visual Phone Hero Graphic Component */
        .phone-experience-container {
            background: linear-gradient(145deg, rgba(11, 19, 43, 0.98), rgba(2, 6, 23, 0.98));
            border: 2px solid var(--color-blue-cyan);
            border-radius: 32px;
            padding: 50px 30px;
            position: relative;
            box-shadow: 0 25px 60px rgba(0,0,0,0.9), 0 0 40px rgba(0, 167, 250, 0.25);
            overflow: hidden;
        }

        .phone-mockup-wrapper {
            position: relative;
            width: 250px;
            height: 500px;
            margin: 0 auto;
            background: #000;
            border: 12px solid #1a2238;
            border-radius: 40px;
            box-shadow: 0 0 40px rgba(0, 167, 250, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .phone-screen {
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, var(--color-blue-deep) 0%, rgba(2, 6, 23, 0.95) 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            text-align: center;
        }

        .floating-pill {
            background: rgba(11, 19, 43, 0.95);
            border: 1px solid var(--color-gold);
            color: #ffffff !important;
            font-weight: 700;
            font-size: 0.95rem;
            padding: 12px 22px;
            border-radius: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.6), 0 0 15px rgba(196, 174, 4, 0.3);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin: 8px;
        }

        .floating-pill:hover {
            transform: scale(1.08) translateY(-4px);
            border-color: var(--color-blue-cyan);
            box-shadow: 0 15px 30px rgba(0, 167, 250, 0.5);
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

        .list-styled {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .list-styled li {
            padding: 8px 0;
            color: #ffffff !important;
            font-size: 0.98rem;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .list-styled li:last-child {
            border-bottom: none;
        }

        .list-styled li i {
            color: var(--color-gold);
            font-size: 1.1rem;
            filter: drop-shadow(0 0 6px rgba(196, 174, 4, 0.6));
        }

        /* Timeline Process Steps */
        .process-step-card {
            background: rgba(11, 19, 43, 0.9);
            border: 1px solid rgba(0, 167, 250, 0.3);
            border-radius: 20px;
            padding: 25px;
            height: 100%;
            transition: all 0.3s ease;
            position: relative;
        }

        .process-step-card:hover {
            transform: translateY(-6px);
            border-color: var(--color-gold);
            box-shadow: 0 15px 35px rgba(196, 174, 4, 0.3);
        }

        .step-number-badge {
            background: linear-gradient(135deg, var(--color-gold), #e0cb1c);
            color: var(--color-black);
            font-weight: 900;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            display: inline-block;
            margin-bottom: 12px;
            box-shadow: 0 0 10px rgba(196, 174, 4, 0.5);
        }

        /* Ecosystem Diagram Box */
        .ecosystem-container {
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.95) 0%, rgba(6, 21, 120, 0.9) 50%, rgba(3, 99, 38, 0.85) 100%);
            border: 2px solid var(--color-gold);
            border-radius: 28px;
            padding: 45px 35px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
            text-align: center;
        }

        .eco-node {
            background: rgba(11, 19, 43, 0.95);
            border: 2px solid var(--color-blue-cyan);
            border-radius: 20px;
            padding: 20px;
            color: #ffffff !important;
            font-weight: 800;
            box-shadow: 0 10px 25px rgba(0, 167, 250, 0.3);
            transition: all 0.3s ease;
        }

        .eco-node:hover {
            transform: scale(1.05);
            border-color: var(--color-gold);
            box-shadow: 0 15px 35px rgba(196, 174, 4, 0.4);
        }

        .eco-connector {
            font-size: 2rem;
            color: var(--color-gold);
            filter: drop-shadow(0 0 10px var(--color-gold));
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
                            <a class="nav-link active" href="https://www.todowebcusco.com/desarrollo-de-apps/">Desarrollo de Apps</a>
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
                Para <strong>CANDELAWEB</strong>, una App no es solo software: es la herramienta que convierte tu idea de negocio en una experiencia digital que tus clientes llevan consigo a todas partes.
            </p>
        </div>
    </section>

    <!-- PAGE HERO SECTION -->
    <section class="page-hero">
        <div class="container position-relative z-2">
            <span class="page-hero-badge animate__animated animate__fadeInDown">
                <i class="bi bi-phone"></i> Desarrollo de Apps Móviles
            </span>
            <h1 class="page-hero-title animate__animated animate__fadeInUp">
                📱 DESARROLLO DE <span>APPS</span>
            </h1>
            <h2 class="page-hero-subtitle animate__animated animate__fadeInUp">
                Tu idea en el bolsillo de tus clientes.
            </h2>
            <div class="page-hero-desc animate__animated animate__fadeInUp">
                <p class="mb-3">
                    Hoy tu negocio no tiene que esperar a que tus clientes lleguen a una página web. <strong>Puede acompañarlos a todas partes.</strong>
                </p>
                <p class="mb-3 opacity-90">
                    En <strong>CANDELAWEB</strong> diseñamos y desarrollamos aplicaciones móviles modernas, dinámicas y personalizadas, creadas para conectar tu negocio con tus clientes, automatizar procesos y ofrecer experiencias digitales rápidas, intuitivas y atractivas.
                </p>
                <p class="fw-bold text-warning fs-4 m-0 mt-3" style="text-shadow: 0 0 15px rgba(196, 174, 4, 0.6);">
                    ✨ Imagina tu idea. Nosotros la convertimos en una App.
                </p>
            </div>
            <div class="mt-4 pt-2">
                <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20crear%20mi%20App%20M%C3%B3vil" target="_blank" class="btn-custom-gold me-2 mb-2">
                    <i class="bi bi-rocket-takeoff-fill"></i> Crear mi App Móvil
                </a>
                <a href="#experiencia-visual" class="btn-custom-primary mb-2">
                    <i class="bi bi-phone-vibrate"></i> Ver Concepto Visual
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION VISUAL IMPACT HERO CONCEPT -->
    <section class="py-5 position-relative" id="experiencia-visual">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">El Concepto Visual CANDELAWEB</span>
                <h2 class="section-title">NO CREES SOLO UNA APP. CREA UNA EXPERIENCIA.</h2>
            </div>

            <div class="phone-experience-container text-center">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-end mb-4 mb-lg-0">
                        <div class="floating-pill"><i class="bi bi-cart-check text-warning fs-5"></i> 🛒 Comprar</div><br>
                        <div class="floating-pill"><i class="bi bi-calendar-event text-info fs-5"></i> 📅 Reservar</div><br>
                        <div class="floating-pill"><i class="bi bi-credit-card text-success fs-5"></i> 💳 Pagar</div><br>
                        <div class="floating-pill"><i class="bi bi-box-seam text-primary fs-5"></i> 📦 Pedir</div>
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="phone-mockup-wrapper">
                            <div class="phone-screen">
                                <i class="bi bi-fire text-warning display-1 mb-2"></i>
                                <h5 class="text-white fw-bold mb-1">CANDELAWEB</h5>
                                <p class="text-info small fw-semibold">App Digital Experience</p>
                                <div class="mt-3 p-2 rounded bg-dark border border-secondary text-white small">
                                    <i class="bi bi-bell-fill text-warning me-1"></i> ¡Notificación lista!
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 text-lg-start">
                        <div class="floating-pill"><i class="bi bi-mortarboard text-warning fs-5"></i> 🎓 Aprender</div><br>
                        <div class="floating-pill"><i class="bi bi-chat-dots text-info fs-5"></i> 💬 Conectar</div><br>
                        <div class="floating-pill"><i class="bi bi-graph-up text-success fs-5"></i> 📊 Gestionar</div><br>
                        <div class="floating-pill"><i class="bi bi-stars text-warning fs-5"></i> ✨ Evolucionar</div>
                    </div>
                </div>

                <div class="p-3 rounded-4 border border-warning mt-5 d-inline-block" style="background: rgba(196, 174, 4, 0.12);">
                    <h4 class="text-white fw-bold fs-4 m-0">
                        💡 Una idea. Una App. <span class="text-info">Nuevas posibilidades.</span>
                    </h4>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: UNA APP. INFINITAS POSIBILIDADES -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Versatilidad & Adaptabilidad</span>
                <h2 class="section-title">🚀 UNA APP. INFINITAS POSIBILIDADES.</h2>
                <p class="text-white fs-5 mt-3 opacity-90 max-w-2xl mx-auto">
                    Una aplicación puede ser mucho más que un ícono en el celular.
                </p>
            </div>

            <div class="row g-4 text-center">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-card py-4">
                        <div class="fs-1 text-warning mb-2">🛒</div>
                        <h5 class="text-white fw-bold fs-5 mb-0">Tu tienda</h5>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-card py-4">
                        <div class="fs-1 text-info mb-2">📅</div>
                        <h5 class="text-white fw-bold fs-5 mb-0">Tu sistema de reservas</h5>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-card py-4">
                        <div class="fs-1 text-success mb-2">💳</div>
                        <h5 class="text-white fw-bold fs-5 mb-0">Tu plataforma de pagos</h5>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-card py-4">
                        <div class="fs-1 text-warning mb-2">🎓</div>
                        <h5 class="text-white fw-bold fs-5 mb-0">Tu aula virtual</h5>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-card py-4">
                        <div class="fs-1 text-info mb-2">🚚</div>
                        <h5 class="text-white fw-bold fs-5 mb-0">Tu sistema de delivery</h5>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-card py-4">
                        <div class="fs-1 text-success mb-2">🏨</div>
                        <h5 class="text-white fw-bold fs-5 mb-0">Tu plataforma turística</h5>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-card py-4">
                        <div class="fs-1 text-warning mb-2">💼</div>
                        <h5 class="text-white fw-bold fs-5 mb-0">Tu herramienta empresarial</h5>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-card py-4">
                        <div class="fs-1 text-info mb-2">👥</div>
                        <h5 class="text-white fw-bold fs-5 mb-0">Tu comunidad digital</h5>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <p class="text-warning fw-bold fs-4 m-0" style="text-shadow: 0 0 10px rgba(196, 174, 4, 0.5);">
                    "Una sola App puede transformar la forma en que funciona tu negocio."
                </p>
            </div>
        </div>
    </section>

    <!-- SECTION: DE UNA IDEA A UNA EXPERIENCIA DIGITAL (PROCESO) -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Metodología CANDELAWEB</span>
                <h2 class="section-title">⚡ DE UNA IDEA A UNA EXPERIENCIA DIGITAL</h2>
                <p class="text-white fs-5 mt-3 opacity-90 max-w-2xl mx-auto">
                    Seguimos un proceso estructurado para convertir una idea en una aplicación funcional.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="process-step-card">
                        <span class="step-number-badge">💡 01 — IDEA</span>
                        <h4 class="text-white fw-bold fs-5 mb-2">Conceptualización</h4>
                        <p class="text-white opacity-90 m-0">
                            Nos cuentas qué quieres crear. ¿Qué problema quieres solucionar?
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="process-step-card">
                        <span class="step-number-badge">🎨 02 — DISEÑO</span>
                        <h4 class="text-white fw-bold fs-5 mb-2">UI & UX Móvil</h4>
                        <p class="text-white opacity-90 m-0">
                            Creamos una experiencia visual moderna, intuitiva y pensada para tus usuarios.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="process-step-card">
                        <span class="step-number-badge">💻 03 — DESARROLLO</span>
                        <h4 class="text-white fw-bold fs-5 mb-2">Programación & Código</h4>
                        <p class="text-white opacity-90 m-0">
                            Convertimos el diseño en una aplicación funcional, rápida y robusta.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="process-step-card">
                        <span class="step-number-badge">🧪 04 — PRUEBAS</span>
                        <h4 class="text-white fw-bold fs-5 mb-2">Control de Calidad</h4>
                        <p class="text-white opacity-90 m-0">
                            Probamos funcionalidades, navegación y experiencia de usuario en múltiples pantallas.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="process-step-card">
                        <span class="step-number-badge">🚀 05 — LANZAMIENTO</span>
                        <h4 class="text-white fw-bold fs-5 mb-2">Despliegue</h4>
                        <p class="text-white opacity-90 m-0">
                            Preparamos tu aplicación para llegar a tus usuarios en tiendas móviles y web.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="process-step-card">
                        <span class="step-number-badge">📈 06 — EVOLUCIÓN</span>
                        <h4 class="text-white fw-bold fs-5 mb-2">Crecimiento Continuo</h4>
                        <p class="text-white opacity-90 m-0">
                            Tu aplicación puede seguir creciendo con nuevas funcionalidades e innovaciones.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: APPS QUE SE ADAPTAN A TU IDEA (CATEGORÍAS) -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Soluciones Personalizadas</span>
                <h2 class="section-title">🔥 APPS QUE SE ADAPTAN A TU IDEA</h2>
                <p class="text-white fs-5 mt-3 opacity-90 max-w-2xl mx-auto">
                    No creemos que todos los negocios necesiten la misma aplicación. Por eso desarrollamos soluciones a medida.
                </p>
            </div>

            <div class="row g-4">
                <!-- 1. Tiendas -->
                <div class="col-md-6 col-lg-4">
                    <div class="content-card">
                        <div class="card-icon-box"><i class="bi bi-bag-check"></i></div>
                        <h3 class="text-white fw-bold fs-4 mb-2">🛍️ Apps para tiendas</h3>
                        <p class="text-white opacity-90 mb-3">
                            Convierte tu catálogo en una experiencia de compra móvil fluida.
                        </p>
                        <div class="p-2 rounded bg-dark border border-info text-info small fw-bold text-center">
                            Productos · Carrito · Pedidos · Pagos · Ofertas
                        </div>
                    </div>
                </div>

                <!-- 2. Restaurantes -->
                <div class="col-md-6 col-lg-4">
                    <div class="content-card" style="border-color: rgba(196, 174, 4, 0.35);">
                        <div class="card-icon-box" style="color: var(--color-gold); border-color: var(--color-gold);"><i class="bi bi-cup-hot"></i></div>
                        <h3 class="text-white fw-bold fs-4 mb-2">🍔 Apps para restaurantes</h3>
                        <p class="text-white opacity-90 mb-3">
                            Permite que tus clientes consulten el menú y realicen pedidos desde su celular.
                        </p>
                        <div class="p-2 rounded bg-dark border border-warning text-warning small fw-bold text-center">
                            Menú · Pedidos · Delivery · Reservas · Notificaciones
                        </div>
                    </div>
                </div>

                <!-- 3. Hoteles y Turismo -->
                <div class="col-md-6 col-lg-4">
                    <div class="content-card" style="border-color: rgba(40, 167, 69, 0.35);">
                        <div class="card-icon-box" style="color: #28a745; border-color: #28a745;"><i class="bi bi-compass"></i></div>
                        <h3 class="text-white fw-bold fs-4 mb-2">🏨 Apps para hoteles y turismo</h3>
                        <p class="text-white opacity-90 mb-3">
                            Conecta viajeros con experiencias, destinos y servicios turísticos.
                        </p>
                        <div class="p-2 rounded bg-dark border border-success text-success small fw-bold text-center">
                            Reservas · Tours · Destinos · Itinerarios · Información
                        </div>
                    </div>
                </div>

                <!-- 4. Educativas -->
                <div class="col-md-6 col-lg-4">
                    <div class="content-card">
                        <div class="card-icon-box"><i class="bi bi-journal-bookmark"></i></div>
                        <h3 class="text-white fw-bold fs-4 mb-2">🎓 Apps educativas</h3>
                        <p class="text-white opacity-90 mb-3">
                            Lleva el aprendizaje directamente al celular de tus estudiantes.
                        </p>
                        <div class="p-2 rounded bg-dark border border-info text-info small fw-bold text-center">
                            Cursos · Clases · Videos · Materiales · Evaluaciones
                        </div>
                    </div>
                </div>

                <!-- 5. Empresariales -->
                <div class="col-md-6 col-lg-4">
                    <div class="content-card" style="border-color: rgba(196, 174, 4, 0.35);">
                        <div class="card-icon-box" style="color: var(--color-gold); border-color: var(--color-gold);"><i class="bi bi-building-gear"></i></div>
                        <h3 class="text-white fw-bold fs-4 mb-2">💼 Apps empresariales</h3>
                        <p class="text-white opacity-90 mb-3">
                            Digitaliza procesos internos y mejora la gestión operativa de tu empresa.
                        </p>
                        <div class="p-2 rounded bg-dark border border-warning text-warning small fw-bold text-center">
                            Usuarios · Reportes · Inventario · Ventas · Administración
                        </div>
                    </div>
                </div>

                <!-- 6. Delivery -->
                <div class="col-md-6 col-lg-4">
                    <div class="content-card" style="border-color: rgba(40, 167, 69, 0.35);">
                        <div class="card-icon-box" style="color: #28a745; border-color: #28a745;"><i class="bi bi-truck"></i></div>
                        <h3 class="text-white fw-bold fs-4 mb-2">🚚 Apps de delivery</h3>
                        <p class="text-white opacity-90 mb-3">
                            Conecta clientes, negocios y repartidores en tiempo real.
                        </p>
                        <div class="p-2 rounded bg-dark border border-success text-success small fw-bold text-center">
                            Pedidos → Preparación → Recojo → Entrega
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: UNA EXPERIENCIA DISEÑADA PARA EL CELULAR -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Usabilidad & Rendimiento</span>
                <h2 class="section-title">📲 UNA EXPERIENCIA DISEÑADA PARA EL CELULAR</h2>
                <p class="text-white fs-5 mt-3 opacity-90 max-w-2xl mx-auto">
                    Tu aplicación debe sentirse natural, ágil e intuitiva en cada toque.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4 col-lg">
                    <div class="p-4 rounded-4 border border-info text-center h-100" style="background: rgba(11, 19, 43, 0.85);">
                        <div class="fs-1 text-warning mb-2"><i class="bi bi-hand-index-thumb"></i></div>
                        <h5 class="text-white fw-bold fs-5 mb-2">Fácil de usar</h5>
                        <p class="text-white opacity-90 small m-0">Interfaces intuitivas para que el usuario encuentre lo que necesita sin esfuerzo.</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg">
                    <div class="p-4 rounded-4 border border-info text-center h-100" style="background: rgba(11, 19, 43, 0.85);">
                        <div class="fs-1 text-info mb-2"><i class="bi bi-lightning-charge"></i></div>
                        <h5 class="text-white fw-bold fs-5 mb-2">Rápida</h5>
                        <p class="text-white opacity-90 small m-0">Experiencias ágiles y fluidas con tiempos de carga optimizados.</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg">
                    <div class="p-4 rounded-4 border border-info text-center h-100" style="background: rgba(11, 19, 43, 0.85);">
                        <div class="fs-1 text-success mb-2"><i class="bi bi-palette"></i></div>
                        <h5 class="text-white fw-bold fs-5 mb-2">Atractiva</h5>
                        <p class="text-white opacity-90 small m-0">Diseño visual moderno alineado perfectamente con la identidad de tu marca.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg">
                    <div class="p-4 rounded-4 border border-info text-center h-100" style="background: rgba(11, 19, 43, 0.85);">
                        <div class="fs-1 text-warning mb-2"><i class="bi bi-shield-lock"></i></div>
                        <h5 class="text-white fw-bold fs-5 mb-2">Segura</h5>
                        <p class="text-white opacity-90 small m-0">Protección de datos y buenas prácticas de seguridad informática.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg">
                    <div class="p-4 rounded-4 border border-info text-center h-100" style="background: rgba(11, 19, 43, 0.85);">
                        <div class="fs-1 text-info mb-2"><i class="bi bi-aspect-ratio"></i></div>
                        <h5 class="text-white fw-bold fs-5 mb-2">Adaptada</h5>
                        <p class="text-white opacity-90 small m-0">Experiencia optimizada para diferentes tamaños de pantalla y smartphones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: TU APP PUEDE HABLAR CON TUS CLIENTES (PUSH NOTIFICATIONS) -->
    <section class="py-5 position-relative">
        <div class="container py-3">
            <div class="p-5 rounded-4 border border-warning" style="background: linear-gradient(135deg, rgba(6, 21, 120, 0.9) 0%, rgba(3, 99, 38, 0.85) 100%); box-shadow: 0 20px 50px rgba(0,0,0,0.8);">
                <div class="row align-items-center g-4">
                    <div class="col-lg-7">
                        <span class="badge bg-warning text-dark fw-bold px-3 py-1 mb-2 fs-6">🔔 Notificaciones Push</span>
                        <h2 class="fw-extrabold text-white mb-3 fs-2">TU APP PUEDE HABLAR CON TUS CLIENTES</h2>
                        <p class="text-white fs-5 opacity-90 mb-4">
                            Una de las grandes ventajas de una aplicación es la posibilidad de mantener una comunicación directa, instantánea y personalizada.
                        </p>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="p-2 rounded bg-dark border border-secondary text-white fw-medium">
                                    📢 Nuevos productos
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-2 rounded bg-dark border border-secondary text-white fw-medium">
                                    🔥 Promociones
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-2 rounded bg-dark border border-secondary text-white fw-medium">
                                    🎁 Ofertas especiales
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-2 rounded bg-dark border border-secondary text-white fw-medium">
                                    📦 Estado del pedido
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-2 rounded bg-dark border border-secondary text-white fw-medium">
                                    📅 Recordatorios
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-2 rounded bg-dark border border-secondary text-white fw-medium">
                                    💬 Comunicaciones importantes
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 text-center">
                        <div class="p-4 rounded-4 border border-info" style="background: rgba(2, 6, 23, 0.9);">
                            <i class="bi bi-bell-ring-fill text-warning display-3 mb-3 d-block animate__animated animate__pulse animate__infinite"></i>
                            <h4 class="text-white fw-bold fs-4 mb-2">Presencia en Pantalla</h4>
                            <p class="text-warning fw-bold fs-5 m-0">
                                Tu marca en la pantalla de tus clientes, cuando realmente importa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: APP + WEB + SISTEMA (ECOSISTEMA DIGITAL) -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Integración Total</span>
                <h2 class="section-title">🌐 APP + WEB + SISTEMA</h2>
                <p class="text-white fs-5 mt-3 opacity-90 max-w-2xl mx-auto">
                    No tienes que elegir una sola tecnología. Podemos crear un ecosistema digital totalmente conectado.
                </p>
            </div>

            <div class="ecosystem-container max-w-3xl mx-auto">
                <div class="row align-items-center justify-content-center g-3 mb-4">
                    <!-- Top: Página Web -->
                    <div class="col-12">
                        <div class="eco-node d-inline-block px-4 py-3">
                            <i class="bi bi-globe me-2 text-info fs-4"></i> 🌐 PÁGINA WEB
                        </div>
                    </div>

                    <div class="col-12 eco-connector"><i class="bi bi-arrow-down-short"></i></div>

                    <!-- Middle: App Móvil + Sistema Web -->
                    <div class="col-md-5">
                        <div class="eco-node py-3">
                            <i class="bi bi-phone me-2 text-warning fs-4"></i> 📱 APP MÓVIL
                        </div>
                    </div>

                    <div class="col-md-2 eco-connector"><i class="bi bi-arrow-left-right"></i></div>

                    <div class="col-md-5">
                        <div class="eco-node py-3">
                            <i class="bi bi-gear-wide-connected me-2 text-success fs-4"></i> ⚙️ SISTEMA WEB
                        </div>
                    </div>

                    <div class="col-12 eco-connector"><i class="bi bi-arrow-down-short"></i></div>

                    <!-- Bottom: Base de datos -->
                    <div class="col-12">
                        <div class="eco-node d-inline-block px-4 py-3" style="border-color: var(--color-gold);">
                            <i class="bi bi-database me-2 text-warning fs-4"></i> 🗄️ BASE DE DATOS CENTRALIZADA
                        </div>
                    </div>
                </div>

                <p class="text-white fs-5 fw-semibold mb-0">
                    Así, tu aplicación puede trabajar junto con tu página web y tu sistema administrativo.<br>
                    <span class="text-warning">Todo conectado. Todo bajo control.</span>
                </p>
            </div>
        </div>
    </section>

    <!-- SECTION: TECNOLOGÍA QUE VA CONTIGO -->
    <section class="py-5 position-relative text-center">
        <div class="container py-3">
            <div class="p-5 rounded-4 border border-info" style="background: rgba(11, 19, 43, 0.9);">
                <span class="badge bg-warning text-dark fw-bold px-3 py-1 mb-3 fs-6">🚀 Presencia Permanente</span>
                <h2 class="fw-extrabold text-white mb-3 fs-2">TECNOLOGÍA QUE VA CONTIGO</h2>
                <p class="text-white fs-5 max-w-2xl mx-auto opacity-90 mb-4">
                    Tu cliente lleva su teléfono consigo prácticamente todo el día.<br>
                    Entonces... <strong>¿Por qué no llevar tu negocio con él?</strong>
                </p>

                <div class="d-flex justify-content-center gap-3 flex-wrap text-info fw-bold fs-4">
                    <span class="p-2 rounded border border-info bg-dark"><i class="bi bi-wallet2 me-2"></i> En su bolsillo</span>
                    <span class="p-2 rounded border border-info bg-dark"><i class="bi bi-phone me-2"></i> En su pantalla</span>
                    <span class="p-2 rounded border border-info bg-dark"><i class="bi bi-sun me-2"></i> En su día a día</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION (CTA) -->
    <section class="py-5 position-relative">
        <div class="container">
            <div class="p-5 rounded-4 border border-warning text-center" style="background: linear-gradient(135deg, var(--color-blue-deep) 0%, var(--color-green) 100%); box-shadow: 0 20px 50px rgba(0, 167, 250, 0.3);">
                <span class="badge bg-warning text-dark fw-bold px-3 py-1 mb-2 fs-6">💥 LLAMADA A LA ACCIÓN</span>
                <h2 class="fw-extrabold text-white mb-3 display-5">¿Tienes una idea para una App?</h2>
                <p class="text-white fs-4 max-w-2xl mx-auto opacity-90 mb-4">
                    Cuéntanos qué quieres crear. Nosotros nos encargamos de convertir esa idea en una experiencia digital moderna, funcional y preparada para crecer.
                </p>

                <div class="mb-4">
                    <h3 class="text-warning fw-extrabold fs-2 m-0" style="letter-spacing: 1px;">
                        🔥 CANDELAWEB
                    </h3>
                    <p class="text-white fw-bold fs-4 m-0 mt-1">
                        Enciende tu idea. Llévala al móvil.
                    </p>
                </div>

                <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20tengo%20una%20idea%20para%20una%20App%20M%C3%B3vil%20y%20quiero%20cotizar" target="_blank" class="btn-custom-gold btn-lg px-5 fs-4">
                    <i class="bi bi-rocket-takeoff-fill"></i> QUIERO CREAR MI APP
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
                        Agencia especializada en desarrollo web, creación de apps móviles, tiendas virtuales, sistemas a medida, SEO y marketing digital en Cusco y todo el Perú.
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
                    <span class="text-white opacity-75 small">Llevamos tu idea al móvil con tecnología</span>
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
