<?php
// page-tiendas-virtuales.php - CANDELAWEB / Todo Web Cusco
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendas Virtuales & E-Commerce | CANDELAWEB</title>
    <meta name="description" content="Desarrollo de Tiendas Virtuales modernas, adaptables y hechas para vender en CANDELAWEB. De tu vitrina física a una tienda que no cierra jamás.">

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

        .btn-custom-green {
            background: linear-gradient(135deg, #28a745 0%, var(--color-green) 100%);
            color: var(--color-text-white);
            border: none;
            padding: 15px 34px;
            font-weight: 700;
            border-radius: 50px;
            box-shadow: 0 8px 25px rgba(40, 167, 69, 0.5);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-custom-green:hover {
            transform: translateY(-4px) scale(1.03);
            box-shadow: 0 12px 30px rgba(40, 167, 69, 0.8);
            color: var(--color-text-white);
        }

        /* Page Hero Section */
        .page-hero {
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.95) 0%, rgba(6, 21, 120, 0.9) 50%, rgba(3, 99, 38, 0.85) 100%), url('https://images.unsplash.com/photo-1556742049-0a670f4a4591?auto=format&fit=crop&w=1600&q=80') center/cover;
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

        /* Glassmorphic Content Card */
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

        /* Customer Journey Flow Bar */
        .journey-flow-box {
            background: linear-gradient(145deg, rgba(11, 19, 43, 0.98), rgba(2, 6, 23, 0.98));
            border: 2px solid var(--color-gold);
            border-radius: 28px;
            padding: 40px 30px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
            position: relative;
        }

        .flow-step-item {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(0, 167, 250, 0.3);
            border-radius: 20px;
            padding: 20px 15px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .flow-step-item:hover {
            background: linear-gradient(135deg, rgba(0, 167, 250, 0.25), rgba(6, 21, 120, 0.4));
            border-color: var(--color-gold);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 167, 250, 0.3);
        }

        .flow-step-icon {
            font-size: 2.2rem;
            color: var(--color-gold);
            margin-bottom: 10px;
            filter: drop-shadow(0 0 10px rgba(196, 174, 4, 0.6));
        }

        .flow-arrow {
            font-size: 1.8rem;
            color: var(--color-blue-cyan);
            display: flex;
            align-items: center;
            justify-content: center;
            filter: drop-shadow(0 0 10px var(--color-blue-cyan));
        }

        /* Concept Callout Box */
        .concept-highlight-box {
            background: linear-gradient(135deg, rgba(6, 21, 120, 0.8) 0%, rgba(3, 99, 38, 0.8) 100%);
            border: 2px solid var(--color-blue-cyan);
            border-radius: 24px;
            padding: 35px;
            box-shadow: 0 15px 35px rgba(0, 167, 250, 0.25);
        }

        /* Accordion Custom Styling */
        .accordion-custom .accordion-item {
            background: rgba(11, 19, 43, 0.9) !important;
            border: 1px solid rgba(0, 167, 250, 0.3) !important;
            border-radius: 18px !important;
            margin-bottom: 16px;
            overflow: hidden;
        }

        .accordion-custom .accordion-button {
            background: rgba(2, 6, 23, 0.8) !important;
            color: #ffffff !important;
            font-weight: 700;
            font-size: 1.15rem;
            padding: 20px 24px;
            box-shadow: none !important;
        }

        .accordion-custom .accordion-button:not(.collapsed) {
            background: linear-gradient(90deg, rgba(6, 21, 120, 0.8), rgba(0, 167, 250, 0.4)) !important;
            color: #ffffff !important;
            border-bottom: 1px solid rgba(0, 167, 250, 0.4);
        }

        .accordion-custom .accordion-button::after {
            filter: invert(1);
        }

        .accordion-custom .accordion-body {
            background: rgba(11, 19, 43, 0.95);
            color: #ffffff !important;
            padding: 24px;
        }

        /* 24/7 Unlimited Section */
        .borderless-banner {
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.95) 0%, rgba(3, 99, 38, 0.85) 50%, rgba(6, 21, 120, 0.9) 100%);
            border: 2px solid var(--color-gold);
            border-radius: 28px;
            padding: 50px 40px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
            position: relative;
        }

        .time-badge {
            background: linear-gradient(135deg, var(--color-gold), #f3e03b);
            color: var(--color-black);
            font-weight: 900;
            font-size: 1.3rem;
            padding: 12px 28px;
            border-radius: 50px;
            display: inline-block;
            box-shadow: 0 0 25px rgba(196, 174, 4, 0.6);
            letter-spacing: 1px;
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
                            <a class="nav-link active" href="https://www.todowebcusco.com/tiendas-virtuales/">Tiendas Virtuales</a>
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
                Para <strong>CANDELAWEB</strong>, el concepto de Tiendas Virtuales va mucho más allá de “crear una tienda online”. Es la herramienta digital perfecta para convertir visitantes en clientes y clientes en ventas.
            </p>
        </div>
    </section>

    <!-- PAGE HERO SECTION -->
    <section class="page-hero">
        <div class="container position-relative z-2">
            <span class="page-hero-badge animate__animated animate__fadeInDown">
                <i class="bi bi-cart3"></i> E-Commerce & Venta Digital
            </span>
            <h1 class="page-hero-title animate__animated animate__fadeInUp">
                🛒 TIENDAS <span>VIRTUALES</span>
            </h1>
            <h2 class="page-hero-subtitle animate__animated animate__fadeInUp">
                Tu negocio siempre abierto. Tu tienda, en todas partes.
            </h2>
            <div class="page-hero-desc animate__animated animate__fadeInUp">
                <p class="mb-3">
                    En <strong>CANDELAWEB</strong> creamos tiendas virtuales modernas, dinámicas y personalizadas, diseñadas para que tus clientes puedan descubrir tus productos, elegir lo que necesitan y comprar desde cualquier lugar y dispositivo.
                </p>
                <p class="mb-3 opacity-90">
                    Convertimos tu catálogo de productos en una experiencia de compra digital, combinando diseño, tecnología y funcionalidades pensadas para ayudarte a vender más.
                </p>
                <p class="fw-bold text-warning fs-4 m-0 mt-3" style="text-shadow: 0 0 15px rgba(196, 174, 4, 0.6);">
                    🔥 De tu vitrina física a una tienda que nunca cierra.
                </p>
            </div>
            <div class="mt-4 pt-2">
                <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20crear%20mi%20Tienda%20Virtual" target="_blank" class="btn-custom-gold me-2 mb-2">
                    <i class="bi bi-bag-check-fill"></i> Crear mi Tienda Virtual
                </a>
                <a href="#funciones" class="btn-custom-primary mb-2">
                    <i class="bi bi-gear-wide-connected"></i> Ver Funcionalidades
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION: UNA TIENDA VIRTUAL HECHA PARA VENDER -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Experiencia de Usuario Optimizada</span>
                <h2 class="section-title">🚀 UNA TIENDA VIRTUAL HECHA PARA VENDER</h2>
                <p class="text-white fs-5 mt-3 opacity-90 max-w-2xl mx-auto">
                    Tu tienda online no debe ser solamente un catálogo estático.
                </p>
            </div>

            <!-- Customer Journey Step Box -->
            <div class="journey-flow-box mb-5">
                <h4 class="text-center text-warning fw-bold fs-4 mb-4">
                    Debe ser un espacio donde tu cliente pueda:
                </h4>

                <div class="row g-3 align-items-center justify-content-center">
                    <div class="col-6 col-md">
                        <div class="flow-step-item">
                            <div class="flow-step-icon"><i class="bi bi-compass"></i></div>
                            <h5 class="text-white fw-bold m-0 fs-5">Descubrir</h5>
                        </div>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>
                    </div>
                    <div class="col-6 col-md">
                        <div class="flow-step-item">
                            <div class="flow-step-icon"><i class="bi bi-search"></i></div>
                            <h5 class="text-white fw-bold m-0 fs-5">Explorar</h5>
                        </div>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>
                    </div>
                    <div class="col-6 col-md">
                        <div class="flow-step-item">
                            <div class="flow-step-icon"><i class="bi bi-check2-circle"></i></div>
                            <h5 class="text-white fw-bold m-0 fs-5">Elegir</h5>
                        </div>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>
                    </div>
                    <div class="col-6 col-md">
                        <div class="flow-step-item">
                            <div class="flow-step-icon"><i class="bi bi-cart-check"></i></div>
                            <h5 class="text-white fw-bold m-0 fs-5">Comprar</h5>
                        </div>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>
                    </div>
                    <div class="col-6 col-md">
                        <div class="flow-step-item">
                            <div class="flow-step-icon"><i class="bi bi-arrow-repeat"></i></div>
                            <h5 class="text-white fw-bold m-0 fs-5">Volver</h5>
                        </div>
                    </div>
                </div>

                <p class="text-center text-info fw-semibold fs-5 mt-4 m-0">
                    Por eso desarrollamos tiendas virtuales con una experiencia sencilla, rápida y atractiva.
                </p>
            </div>

            <!-- Core E-Commerce Modules Cards -->
            <div class="row g-4">
                <!-- 1. Catálogo de productos -->
                <div class="col-md-6 col-lg-3">
                    <div class="content-card">
                        <div class="card-icon-box"><i class="bi bi-shop"></i></div>
                        <h3 class="text-white fw-extrabold fs-4 mb-3">🛍️ Catálogo de productos</h3>
                        <p class="text-white opacity-90 mb-3 fs-6">
                            Presenta tus productos con la mayor claridad y atractivo visual:
                        </p>
                        <ul class="list-styled">
                            <li><i class="bi bi-check-circle-fill"></i> Fotografía de alta calidad</li>
                            <li><i class="bi bi-check-circle-fill"></i> Descripciones detalladas</li>
                            <li><i class="bi bi-check-circle-fill"></i> Precios e impuestos</li>
                            <li><i class="bi bi-check-circle-fill"></i> Variaciones (Talla, Color)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Categorías estructuradas</li>
                            <li><i class="bi bi-check-circle-fill"></i> Ofertas y descuentos</li>
                            <li><i class="bi bi-check-circle-fill"></i> Productos destacados</li>
                            <li><i class="bi bi-check-circle-fill"></i> Productos relacionados</li>
                        </ul>
                    </div>
                </div>

                <!-- 2. Carrito de compras -->
                <div class="col-md-6 col-lg-3">
                    <div class="content-card" style="border-color: rgba(196, 174, 4, 0.35);">
                        <div class="card-icon-box" style="color: var(--color-gold); border-color: var(--color-gold);"><i class="bi bi-cart3"></i></div>
                        <h3 class="text-white fw-extrabold fs-4 mb-3">🛒 Carrito de compras</h3>
                        <p class="text-white opacity-90 mb-3 fs-6">
                            Tus clientes pueden seleccionar productos, modificar cantidades y revisar su pedido antes de realizar la compra.
                        </p>
                        <div class="p-3 rounded-3 border border-warning my-3" style="background: rgba(196, 174, 4, 0.12);">
                            <span class="text-warning fw-bold d-block text-center fs-6">
                                Compra fácil.<br>Compra rápida.<br>Desde cualquier lugar.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- 3. Métodos de pago -->
                <div class="col-md-6 col-lg-3">
                    <div class="content-card" style="border-color: rgba(40, 167, 69, 0.35);">
                        <div class="card-icon-box" style="color: #28a745; border-color: #28a745;"><i class="bi bi-credit-card"></i></div>
                        <h3 class="text-white fw-extrabold fs-4 mb-3">💳 Métodos de pago</h3>
                        <p class="text-white opacity-90 mb-3 fs-6">
                            Integramos diferentes alternativas de pago según las necesidades de tu negocio:
                        </p>
                        <ul class="list-styled">
                            <li><i class="bi bi-check-circle-fill"></i> Tarjetas de crédito/débito</li>
                            <li><i class="bi bi-check-circle-fill"></i> Transferencias bancarias</li>
                            <li><i class="bi bi-check-circle-fill"></i> Yape / Plin</li>
                            <li><i class="bi bi-check-circle-fill"></i> Pago contra entrega</li>
                            <li><i class="bi bi-check-circle-fill"></i> Pasarelas (Culqi, Niubiz, MercadoPago)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Otros medios disponibles</li>
                        </ul>
                    </div>
                </div>

                <!-- 4. Gestión de pedidos -->
                <div class="col-md-6 col-lg-3">
                    <div class="content-card">
                        <div class="card-icon-box"><i class="bi bi-box-seam"></i></div>
                        <h3 class="text-white fw-extrabold fs-4 mb-3">📦 Gestión de pedidos</h3>
                        <p class="text-white opacity-90 mb-3 fs-6">
                            Administra tus ventas de forma limpia y transparente:
                        </p>
                        <div class="p-2 mb-3 rounded text-center border border-info" style="background: rgba(0, 167, 250, 0.15); font-size: 0.85rem; font-weight: 700; color: #ffffff;">
                            Nuevo pedido → Preparación → Envío → Entregado
                        </div>
                        <p class="text-white opacity-90 fs-6 m-0">
                            Consulta pedidos, clientes, productos y estados de compra desde tu plataforma administrativa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: UNA TIENDA QUE SE MUEVE CONTIGO -->
    <section class="py-5 position-relative">
        <div class="container py-3">
            <div class="concept-highlight-box">
                <div class="row align-items-center g-4">
                    <div class="col-lg-7">
                        <span class="badge bg-warning text-dark fw-bold uppercase px-3 py-1 mb-2">⚡ Panel de Control Autogestionable</span>
                        <h2 class="fw-extrabold text-white mb-2 fs-2">UNA TIENDA QUE SE MUEVE CONTIGO</h2>
                        <h4 class="text-warning fw-bold mb-3 fs-4">Actualiza. Publica. Vende.</h4>
                        <p class="text-white opacity-90 fs-5 mb-4">
                            Tu negocio cambia constantemente. Por eso puedes contar con una tienda administrable donde tengas control total sobre:
                        </p>

                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <span class="badge bg-dark border border-warning text-white fs-6 py-2 px-3"><i class="bi bi-box-seam text-warning me-1"></i> Productos</span>
                            <span class="badge bg-dark border border-warning text-white fs-6 py-2 px-3"><i class="bi bi-tags text-warning me-1"></i> Precios</span>
                            <span class="badge bg-dark border border-warning text-white fs-6 py-2 px-3"><i class="bi bi-folder text-warning me-1"></i> Categorías</span>
                            <span class="badge bg-dark border border-warning text-white fs-6 py-2 px-3"><i class="bi bi-image text-warning me-1"></i> Imágenes</span>
                            <span class="badge bg-dark border border-warning text-white fs-6 py-2 px-3"><i class="bi bi-stack text-warning me-1"></i> Stock</span>
                            <span class="badge bg-dark border border-warning text-white fs-6 py-2 px-3"><i class="bi bi-percent text-warning me-1"></i> Promociones</span>
                            <span class="badge bg-dark border border-warning text-white fs-6 py-2 px-3"><i class="bi bi-cart-check text-warning me-1"></i> Pedidos</span>
                            <span class="badge bg-dark border border-warning text-white fs-6 py-2 px-3"><i class="bi bi-people text-warning me-1"></i> Clientes</span>
                        </div>

                        <p class="text-info fw-semibold fs-5 m-0">
                            <i class="bi bi-shield-check me-2"></i> Sin depender constantemente de un desarrollador para realizar cambios básicos.
                        </p>
                    </div>

                    <div class="col-lg-5 text-center">
                        <div class="p-4 rounded-4 border border-warning" style="background: rgba(2, 6, 23, 0.9); box-shadow: 0 10px 30px rgba(0,0,0,0.8);">
                            <i class="bi bi-sliders text-warning fs-1 mb-3 d-block"></i>
                            <h4 class="text-white fw-bold fs-4 mb-3">Toma el Control de tus Ventas</h4>
                            <p class="text-white opacity-90 fs-6 mb-4">
                                Te capacitamos para que administres tu tienda de forma ágil e intuitiva.
                            </p>
                            <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20una%20Tienda%20Virtual%20Administrable" target="_blank" class="btn-custom-gold w-100 justify-content-center">
                                <i class="bi bi-whatsapp"></i> Solicitar Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: DISEÑADA PARA COMPRAR DESDE CUALQUIER LUGAR -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">100% Adaptable / Responsive</span>
                <h2 class="section-title">📱 DISEÑADA PARA COMPRAR DESDE CUALQUIER LUGAR</h2>
                <p class="text-white fs-5 mt-3 opacity-90 max-w-2xl mx-auto">
                    Hoy tus clientes pueden descubrir tu negocio desde un celular en cualquier momento del día.
                </p>
            </div>

            <!-- Locations Showcase Cards -->
            <div class="row g-3 mb-5 text-center">
                <div class="col">
                    <div class="p-3 rounded-4 border border-info h-100" style="background: rgba(11, 19, 43, 0.8);">
                        <div class="fs-2 text-warning mb-2">☕</div>
                        <h6 class="text-white fw-bold m-0">Tomando un café</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded-4 border border-info h-100" style="background: rgba(11, 19, 43, 0.8);">
                        <div class="fs-2 text-info mb-2">🚌</div>
                        <h6 class="text-white fw-bold m-0">Viajando</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded-4 border border-info h-100" style="background: rgba(11, 19, 43, 0.8);">
                        <div class="fs-2 text-success mb-2">🏠</div>
                        <h6 class="text-white fw-bold m-0">En casa</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded-4 border border-info h-100" style="background: rgba(11, 19, 43, 0.8);">
                        <div class="fs-2 text-warning mb-2">💼</div>
                        <h6 class="text-white fw-bold m-0">En el trabajo</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 rounded-4 border border-info h-100" style="background: rgba(11, 19, 43, 0.8);">
                        <div class="fs-2 text-info mb-2">🌎</div>
                        <h6 class="text-white fw-bold m-0">En cualquier parte</h6>
                    </div>
                </div>
            </div>

            <div class="p-4 rounded-4 border border-info text-center max-w-2xl mx-auto" style="background: linear-gradient(135deg, rgba(6, 21, 120, 0.8), rgba(0, 167, 250, 0.3));">
                <h4 class="text-white fw-bold fs-4 mb-3">Por eso desarrollamos tiendas Responsive, adaptadas a:</h4>
                <div class="d-flex justify-content-center gap-4 flex-wrap text-warning fw-bold fs-5">
                    <span>📱 Smartphones</span>
                    <span>💻 Computadoras</span>
                    <span>📲 Tablets</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: FUNCIONALIDADES QUE PUEDES INCORPORAR (ACCORDION / GRID) -->
    <section class="py-5 position-relative" id="funciones">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Módulos Escalas y Escalables</span>
                <h2 class="section-title">🎯 FUNCIONES QUE PUEDES INCORPORAR</h2>
                <p class="text-warning fs-4 fw-bold mt-2 opacity-90">
                    🔥 Tu tienda puede crecer contigo.
                </p>
            </div>

            <div class="row g-4">
                <!-- Accordion / Grid categories -->
                <div class="col-lg-6">
                    <div class="accordion accordion-custom" id="accordionFuncsLeft">
                        <!-- 1. Productos -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingProductos">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProductos" aria-expanded="true" aria-controls="collapseProductos">
                                    <i class="bi bi-box-seam text-warning me-3 fs-4"></i> Módulo de Productos
                                </button>
                            </h2>
                            <div id="collapseProductos" class="accordion-collapse collapse show" aria-labelledby="headingProductos" data-bs-parent="#accordionFuncsLeft">
                                <div class="accordion-body">
                                    <ul class="list-styled">
                                        <li><i class="bi bi-check-circle-fill"></i> Catálogo ilimitado de artículos</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Estructura multicategoría y subcategorías</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Variaciones complejas (Talla, Color, Sabor, Talla)</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Galería de productos destacados</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Precios de oferta y temporizadores promocionales</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 2. Ventas -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingVentas">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVentas" aria-expanded="false" aria-controls="collapseVentas">
                                    <i class="bi bi-cart-check text-info me-3 fs-4"></i> Módulo de Ventas y Checkout
                                </button>
                            </h2>
                            <div id="collapseVentas" class="accordion-collapse collapse" aria-labelledby="headingVentas" data-bs-parent="#accordionFuncsLeft">
                                <div class="accordion-body">
                                    <ul class="list-styled">
                                        <li><i class="bi bi-check-circle-fill"></i> Carrito interactivo dinámico</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Checkout rápido sin fricción</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Sistema de cupones de descuento</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Campañas promocionales automatizadas</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Múltiples pasarelas y métodos de pago</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Clientes -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingClientes">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseClientes" aria-expanded="false" aria-controls="collapseClientes">
                                    <i class="bi bi-people text-success me-3 fs-4"></i> Módulo de Clientes
                                </button>
                            </h2>
                            <div id="collapseClientes" class="accordion-collapse collapse" aria-labelledby="headingClientes" data-bs-parent="#accordionFuncsLeft">
                                <div class="accordion-body">
                                    <ul class="list-styled">
                                        <li><i class="bi bi-check-circle-fill"></i> Registro e inicio de sesión fácil</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Historial completo de pedidos</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Perfil personal y direcciones guardadas</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Lista de deseos (Wishlist)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="accordion accordion-custom" id="accordionFuncsRight">
                        <!-- 4. Administración -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingAdmin">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAdmin" aria-expanded="true" aria-controls="collapseAdmin">
                                    <i class="bi bi-speedometer2 text-warning me-3 fs-4"></i> Módulo de Administración
                                </button>
                            </h2>
                            <div id="collapseAdmin" class="accordion-collapse collapse show" aria-labelledby="headingAdmin" data-bs-parent="#accordionFuncsRight">
                                <div class="accordion-body">
                                    <ul class="list-styled">
                                        <li><i class="bi bi-check-circle-fill"></i> Panel administrativo inteligente</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Control de inventario y alertas de stock</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Gestión centralizada de pedidos</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Base de datos de clientes</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Reportes y métricas de venta</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 5. Comunicación -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingComun">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComun" aria-expanded="false" aria-controls="collapseComun">
                                    <i class="bi bi-chat-dots text-info me-3 fs-4"></i> Módulo de Comunicación
                                </button>
                            </h2>
                            <div id="collapseComun" class="accordion-collapse collapse" aria-labelledby="headingComun" data-bs-parent="#accordionFuncsRight">
                                <div class="accordion-body">
                                    <ul class="list-styled">
                                        <li><i class="bi bi-check-circle-fill"></i> Integración directa con WhatsApp</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Notificaciones automáticas por correo electrónico</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Confirmaciones de compra al instante</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Enlaces directos a Redes Sociales</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 6. Marketing -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingMarketing">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMarketing" aria-expanded="false" aria-controls="collapseMarketing">
                                    <i class="bi bi-graph-up-arrow text-success me-3 fs-4"></i> Módulo de Marketing & SEO
                                </button>
                            </h2>
                            <div id="collapseMarketing" class="accordion-collapse collapse" aria-labelledby="headingMarketing" data-bs-parent="#accordionFuncsRight">
                                <div class="accordion-body">
                                    <ul class="list-styled">
                                        <li><i class="bi bi-check-circle-fill"></i> Optimización SEO para buscadores</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Integración con Google Merchant & Ads</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Catálogo conectado con Facebook / Instagram</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Píxel de Meta y Google Analytics</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Campañas promocionales orientadas</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: VENDE SIN FRONTERAS 24/7 -->
    <section class="py-5 position-relative">
        <div class="container py-3">
            <div class="borderless-banner text-center">
                <span class="badge bg-warning text-dark fw-bold text-uppercase px-3 py-1 mb-3 fs-6">
                    <i class="bi bi-globe me-1"></i> Cobertura Global & Disponibilidad Total
                </span>
                <h2 class="display-5 fw-extrabold text-white mb-3" style="font-weight: 900; letter-spacing: -1px;">
                    🌎 VENDE SIN FRONTERAS
                </h2>
                <h4 class="text-warning fw-bold mb-4 fs-3">Tu tienda no necesita una puerta.</h4>

                <div class="row align-items-center justify-content-center g-4 mb-4">
                    <div class="col-md-5">
                        <div class="p-4 rounded-4 border border-secondary" style="background: rgba(2, 6, 23, 0.8);">
                            <h5 class="text-white-50 fw-semibold mb-2">Una tienda física</h5>
                            <p class="text-white fs-5 m-0 fw-bold">Tiene horarios acotados y limitaciones geográficas.</p>
                        </div>
                    </div>

                    <div class="col-md-2 text-warning fs-1 fw-bold">VS</div>

                    <div class="col-md-5">
                        <div class="p-4 rounded-4 border border-warning" style="background: linear-gradient(135deg, rgba(6, 21, 120, 0.8), rgba(3, 99, 38, 0.8));">
                            <h5 class="text-warning fw-bold mb-2">Una tienda virtual</h5>
                            <span class="time-badge">24 HORAS · 7 DÍAS · 365 DÍAS</span>
                        </div>
                    </div>
                </div>

                <p class="text-white fs-5 max-w-2xl mx-auto opacity-90 mb-4">
                    Tus clientes pueden conocer tus productos y realizar pedidos incluso cuando tu negocio está cerrado.
                </p>

                <div class="p-4 rounded-4 border border-info d-inline-block" style="background: rgba(0, 167, 250, 0.15);">
                    <h3 class="text-white fw-bold fs-3 m-0">
                        <i class="bi bi-rocket-takeoff-fill text-warning me-2"></i> Tu tienda trabaja mientras tú haces crecer tu negocio.
                    </h3>
                </div>

                <div class="mt-5">
                    <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20deseo%20crear%20mi%20Tienda%20Virtual%2024/7" target="_blank" class="btn-custom-gold btn-lg px-5">
                        <i class="bi bi-whatsapp"></i> Empezar Mi Tienda Hoy
                    </a>
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
                        <i class="bi bi-fire text-warning fs-3 me-2"></i>
                        <span>CANDELA<span class="cyan">WEB</span></span>
                    </a>
                    <p class="text-white opacity-90">
                        Agencia especializada en desarrollo web, creación de tiendas virtuales e-commerce, sistemas a medida, posicionamiento SEO y marketing digital en Cusco y todo el Perú.
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
                    <span class="text-white opacity-75 small">Encendemos tus ventas con tecnología</span>
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
