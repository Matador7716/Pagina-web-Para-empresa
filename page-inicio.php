<?php
// page-inicio.php - CANDELAWEB / Todo Web Cusco
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANDELAWEB | Encendemos tus ideas con tecnología</title>
    <meta name="description" content="CANDELAWEB: Desarrollo web, sistemas personalizados, soporte informático y posicionamiento SEO. Transformamos tus ideas en soluciones digitales.">

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
            --color-card-bg: #0b132b;
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
            color: var(--color-text-white);
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
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            color: var(--color-text-white);
            margin-left: 6px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .top-bar .social-icons a:hover {
            background: var(--color-blue-cyan);
            color: var(--color-black);
            transform: translateY(-2px);
        }

        /* Navbar Header */
        .main-header {
            background: rgba(6, 21, 120, 0.95);
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
            color: var(--color-text-white) !important;
        }

        .navbar-brand span.gold {
            color: var(--color-gold);
        }

        .navbar-brand span.cyan {
            color: var(--color-blue-cyan);
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
            color: var(--color-text-white);
            font-weight: 500;
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: linear-gradient(90deg, var(--color-blue-deep), var(--color-blue-cyan));
            color: var(--color-text-white);
            transform: translateX(4px);
        }

        /* Hero Carousel Slider */
        .hero-slider .carousel-item {
            height: 85vh;
            min-height: 550px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .hero-slider .carousel-item::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(135deg, rgba(0,0,0,0.88) 0%, rgba(6,21,120,0.82) 55%, rgba(3,99,38,0.7) 100%);
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
            color: var(--color-text-white);
            text-shadow: 0 4px 10px rgba(0,0,0,0.6);
        }

        .hero-title span {
            background: linear-gradient(90deg, var(--color-blue-cyan), var(--color-gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-desc {
            font-size: 1.2rem;
            color: var(--color-text-white);
            max-width: 700px;
            margin-bottom: 30px;
            font-weight: 400;
        }

        .btn-custom-primary {
            background: linear-gradient(135deg, var(--color-blue-cyan), var(--color-blue-deep));
            color: var(--color-text-white);
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
            color: var(--color-text-white);
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
            color: var(--color-text-white);
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

        /* Custom Cards with White Text on Dark Background */
        .card-dark-custom {
            background: var(--color-card-bg);
            border: 1px solid rgba(0, 167, 250, 0.2);
            border-radius: 16px;
            padding: 30px;
            height: 100%;
            transition: all 0.4s ease;
            position: relative;
            color: var(--color-text-white);
        }

        .card-dark-custom:hover {
            transform: translateY(-6px);
            border-color: var(--color-blue-cyan);
            box-shadow: 0 12px 30px rgba(0, 167, 250, 0.25);
        }

        /* Services Cards */
        .service-card {
            background: var(--color-card-bg);
            border: 1px solid rgba(0, 167, 250, 0.18);
            border-radius: 16px;
            padding: 30px;
            height: 100%;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            color: var(--color-text-white);
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
            color: var(--color-text-white);
        }

        .service-description {
            color: var(--color-text-white);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
            opacity: 0.95;
        }

        .service-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-list li {
            padding: 6px 0;
            font-size: 0.92rem;
            color: var(--color-text-white);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .service-list li i {
            color: var(--color-gold);
            font-size: 0.85rem;
        }

        /* Slogans Banner */
        .slogans-box {
            background: linear-gradient(135deg, rgba(6,21,120,0.6) 0%, rgba(3,99,38,0.5) 100%);
            border: 1px solid rgba(196, 174, 4, 0.4);
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .slogan-pill {
            background: rgba(8, 17, 43, 0.8);
            border: 1px solid rgba(0, 167, 250, 0.3);
            color: var(--color-text-white);
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 0.95rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .slogan-pill:hover {
            border-color: var(--color-gold);
            background: rgba(6, 21, 120, 0.9);
            transform: translateY(-3px);
        }

        /* Structure Section */
        .structure-card {
            background: rgba(11, 19, 43, 0.9);
            border: 1px solid rgba(0, 167, 250, 0.2);
            border-radius: 12px;
            padding: 20px;
            height: 100%;
            transition: all 0.3s ease;
            position: relative;
            color: var(--color-text-white);
        }

        .structure-card:hover {
            border-color: var(--color-gold);
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(196, 174, 4, 0.2);
        }

        .structure-num {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--color-blue-cyan), var(--color-blue-deep));
            color: var(--color-text-white);
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        /* Sección Visual de Impacto - Digital Transformation Pipeline */
        .impact-section {
            background: linear-gradient(180deg, #020617 0%, #061578 50%, #020617 100%);
            padding: 90px 0;
            position: relative;
            overflow: hidden;
        }

        .flow-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            max-width: 850px;
            margin: 40px auto 0;
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
            background: rgba(8, 17, 43, 0.9);
            border: 2px solid var(--color-blue-cyan);
            border-radius: 16px;
            padding: 24px 20px;
            text-align: center;
            width: 100%;
            max-width: 160px;
            position: relative;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            color: var(--color-text-white);
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
            color: var(--color-text-white);
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
            background: rgba(8, 17, 43, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 14px;
            padding: 28px 24px;
            height: 100%;
            transition: all 0.3s ease;
            position: relative;
            color: var(--color-text-white);
        }

        .why-card:hover {
            background: rgba(6, 21, 120, 0.5);
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
            color: var(--color-text-white);
        }

        .why-desc {
            color: var(--color-text-white);
            font-size: 0.95rem;
            line-height: 1.6;
            margin: 0;
            opacity: 0.92;
        }

        /* Tech Badges */
        .tech-box {
            background: var(--color-card-bg);
            border: 1px solid rgba(0, 167, 250, 0.2);
            border-radius: 12px;
            padding: 20px 15px;
            text-align: center;
            transition: all 0.3s ease;
            color: var(--color-text-white);
        }

        .tech-box:hover {
            border-color: var(--color-blue-cyan);
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 167, 250, 0.3);
        }

        .tech-icon {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: var(--color-blue-cyan);
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
            color: var(--color-text-white);
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
            color: var(--color-text-white);
            font-size: 0.9rem;
        }

        footer h5 {
            color: var(--color-text-white);
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
            color: var(--color-text-white);
            text-decoration: none;
            transition: color 0.3s ease;
            opacity: 0.9;
        }

        footer ul li a:hover {
            color: var(--color-blue-cyan);
            opacity: 1;
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
                    <span class="me-2 d-none d-lg-inline text-white opacity-75">Síguenos:</span>
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
                    <i class="bi bi-fire text-warning fs-2"></i>
                    <span>CANDELA<span class="cyan">WEB</span></span>
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

    <!-- 1. HERO CAROUSEL SLIDER WITH ANIMATIONS & SLOGAN -->
    <section class="hero-slider" id="hero">
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
                        <div class="hero-content text-start col-lg-9">
                            <span class="hero-badge animate__animated animate__fadeInDown mb-2">CANDELAWEB</span>
                            <h1 class="hero-title animate__animated animate__fadeInLeft">
                                “Encendemos tus ideas <span>con tecnología.”</span>
                            </h1>
                            <p class="hero-desc animate__animated animate__fadeInUp">
                                Soluciones digitales integrales que transforman proyectos en marcas potentes y rentables.
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
                        <div class="hero-content text-start col-lg-9">
                            <span class="hero-badge animate__animated animate__fadeInDown mb-2">Sistemas & Software</span>
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
                        <div class="hero-content text-start col-lg-9">
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

    <!-- 2. PRESENTACIÓN & SOBRE CANDELAWEB + SLOGANS -->
    <section class="py-5" id="sobre-candelaweb">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="section-subtitle">Sobre CANDELAWEB</span>
                    <h2 class="section-title text-start mb-4">
                        Tecnología creada para hacer crecer tus ideas
                    </h2>
                    <p class="fs-5 text-white mb-3 fw-medium">
                        <strong class="text-warning">CANDELAWEB</strong> nace con la visión de acercar la tecnología a empresas, emprendedores, instituciones y profesionales, ofreciendo soluciones digitales que combinen diseño, funcionalidad y tecnología.
                    </p>
                    <p class="text-white mb-3 fs-6" style="line-height: 1.8;">
                        Nuestro trabajo va desde la creación de una página web hasta el desarrollo de sistemas personalizados capaces de transformar procesos completos de una organización.
                    </p>
                    <div class="p-3 my-4 rounded-3 border border-warning" style="background: rgba(196, 174, 4, 0.1);">
                        <p class="mb-0 text-white fs-5 font-italic fw-semibold">
                            <i class="bi bi-quote fs-2 text-warning me-2 align-middle"></i>
                            Tu proyecto comienza con una idea. Nosotros ayudamos a convertirla en tecnología.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="slogans-box">
                        <h4 class="text-warning fw-bold mb-3 d-flex align-items-center gap-2">
                            <i class="bi bi-fire fs-3"></i> Slogans para CANDELAWEB
                        </h4>

                        <!-- Main Slogan Highlight -->
                        <div class="p-3 mb-4 rounded-3 border border-info" style="background: rgba(0, 167, 250, 0.15);">
                            <span class="badge bg-warning text-dark mb-1 fw-bold">Opción Principal</span>
                            <h3 class="text-white fw-bold m-0">
                                CANDELAWEB <br>
                                <span style="color: var(--color-blue-cyan);">“Encendemos tus ideas con tecnología.”</span>
                            </h3>
                        </div>

                        <p class="text-white fw-semibold mb-3">Otras alternativas de valor:</p>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="slogan-pill"><i class="bi bi-stars text-warning"></i> “Tecnología que transforma ideas.”</span>
                            <span class="slogan-pill"><i class="bi bi-lightning-charge text-warning"></i> “Tu idea. Nuestra tecnología.”</span>
                            <span class="slogan-pill"><i class="bi bi-graph-up-arrow text-warning"></i> “Soluciones digitales que hacen crecer tu negocio.”</span>
                            <span class="slogan-pill"><i class="bi bi-code-slash text-warning"></i> “Creamos tecnología para tus proyectos.”</span>
                            <span class="slogan-pill"><i class="bi bi-arrow-right-circle text-warning"></i> “De una idea a una solución digital.”</span>
                            <span class="slogan-pill"><i class="bi bi-lightbulb text-warning"></i> “Innovación que empieza con una idea.”</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SPECIAL SECTION: ESTRUCTURA RECOMENDADA PARA TU PÁGINA WEB (10 PUNTOS) -->
    <section class="py-5" id="estructura-recomendada" style="background: rgba(6, 21, 120, 0.2); border-y: 1px solid rgba(0,167,250,0.15);">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Arquitectura Digital Estratégica</span>
                <h2 class="section-title">Estructura recomendada para tu página web</h2>
                <p class="text-white fs-5 mt-2 max-w-2xl mx-auto opacity-90">
                    Yo organizaría la Home de CANDELAWEB así para lograr el máximo impacto y conversión:
                </p>
            </div>

            <div class="row g-4">
                <!-- 1. Hero -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">1</div>
                        <h4 class="text-info fw-bold mb-2">Hero</h4>
                        <p class="text-white m-0">
                            <strong>Mensaje clave:</strong> Encendemos tus ideas con tecnología. Impacto directo al ingresar al sitio.
                        </p>
                    </div>
                </div>

                <!-- 2. Presentación -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">2</div>
                        <h4 class="text-info fw-bold mb-2">Presentación</h4>
                        <p class="text-white m-0">
                            Desarrollo web, sistemas web y soluciones informáticas orientadas a resultados.
                        </p>
                    </div>
                </div>

                <!-- 3. Servicios -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">3</div>
                        <h4 class="text-info fw-bold mb-2">Servicios</h4>
                        <p class="text-white m-0">
                            Páginas Web | Sistemas Web | Servicios Informáticos | Posicionamiento SEO
                        </p>
                    </div>
                </div>

                <!-- 4. ¿Qué podemos desarrollar? -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">4</div>
                        <h4 class="text-info fw-bold mb-2">¿Qué podemos desarrollar?</h4>
                        <p class="text-white m-0">
                            Empresas | Emprendimientos | Instituciones | Profesionales
                        </p>
                    </div>
                </div>

                <!-- 5. Proceso de trabajo -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">5</div>
                        <h4 class="text-info fw-bold mb-2">Proceso de trabajo</h4>
                        <p class="text-white m-0">
                            Analizamos → Diseñamos → Desarrollamos → Implementamos → Acompañamos
                        </p>
                    </div>
                </div>

                <!-- 6. Proyectos / Portafolio -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">6</div>
                        <h4 class="text-info fw-bold mb-2">Proyectos / Portafolio</h4>
                        <p class="text-white m-0">
                            Muestra visual de nuestros casos de éxito y soluciones implementadas.
                        </p>
                    </div>
                </div>

                <!-- 7. ¿Por qué CANDELAWEB? -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">7</div>
                        <h4 class="text-info fw-bold mb-2">¿Por qué CANDELAWEB?</h4>
                        <p class="text-white m-0">
                            Creatividad, tecnología, personalización, soporte continuo y orientación a resultados.
                        </p>
                    </div>
                </div>

                <!-- 8. Tecnologías -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">8</div>
                        <h4 class="text-info fw-bold mb-2">Tecnologías</h4>
                        <p class="text-white m-0">
                            Herramientas y lenguajes modernos para garantizar soluciones rápidas, seguras y escalables.
                        </p>
                    </div>
                </div>

                <!-- 9. Testimonios / Clientes -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">9</div>
                        <h4 class="text-info fw-bold mb-2">Testimonios / Clientes</h4>
                        <p class="text-white m-0">
                            Reseñas y experiencia de empresas y profesionales que confían en nuestro trabajo.
                        </p>
                    </div>
                </div>

                <!-- 10. CTA Final -->
                <div class="col-12">
                    <div class="p-4 rounded-4 text-center border border-warning" style="background: linear-gradient(135deg, var(--color-blue-deep), var(--color-green));">
                        <div class="d-inline-block px-3 py-1 rounded-pill bg-warning text-dark fw-bold mb-2">Punto 10: CTA Final</div>
                        <h3 class="text-white fw-bold fs-2 mb-3">
                            ¿Tienes una idea? Enciéndela con CANDELAWEB.
                        </h3>
                        <a href="https://wa.me/51935209781" target="_blank" class="btn btn-custom-gold fs-5">
                            <i class="bi bi-whatsapp"></i> Hablar con un Asesor
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. NUESTROS SERVICIOS -->
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

    <!-- 4. ¿QUÉ PODEMOS DESARROLLAR? -->
    <section class="py-5" id="que-desarrollamos">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Soluciones adaptadas a cada perfil</span>
                <h2 class="section-title">¿Qué podemos desarrollar?</h2>
            </div>

            <div class="row g-4 text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="card-dark-custom">
                        <div class="mb-3 text-info fs-1"><i class="bi bi-building"></i></div>
                        <h4 class="fw-bold text-white mb-2">Empresas</h4>
                        <p class="text-white opacity-90 m-0">Sistemas corporativos, plataformas de gestión y portales institucionales de alto impacto.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card-dark-custom">
                        <div class="mb-3 text-warning fs-1"><i class="bi bi-rocket"></i></div>
                        <h4 class="fw-bold text-white mb-2">Emprendimientos</h4>
                        <p class="text-white opacity-90 m-0">Landing pages, tiendas virtuales y soluciones ágiles para arrancar con fuerza en el mercado.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card-dark-custom">
                        <div class="mb-3 text-success fs-1"><i class="bi bi-bank"></i></div>
                        <h4 class="fw-bold text-white mb-2">Instituciones</h4>
                        <p class="text-white opacity-90 m-0">Sitios oficiales, aulas virtuales y plataformas de atención e información al ciudadano.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card-dark-custom">
                        <div class="mb-3 text-cyan fs-1" style="color: var(--color-blue-cyan);"><i class="bi bi-person-badge"></i></div>
                        <h4 class="fw-bold text-white mb-2">Profesionales</h4>
                        <p class="text-white opacity-90 m-0">Portafolios profesionales, blogs de autor y sistemas de reservas de citas personalizadas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PROCESO DE TRABAJO & SECCIÓN VISUAL DE IMPACTO -->
    <section class="impact-section" id="proceso-de-trabajo">
        <div class="container text-center">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold text-uppercase">Proceso de Trabajo</span>
            <h2 class="display-5 fw-extrabold text-white mt-3 mb-2" style="font-weight: 900; letter-spacing: -1px;">
                ENCENDEMOS TU TRANSFORMACIÓN DIGITAL
            </h2>
            <p class="fs-5 text-white max-w-2xl mx-auto opacity-90">
                Desde una página web hasta un sistema completo para tu empresa.
            </p>

            <div class="flow-container">
                <div class="flow-wrapper">

                    <!-- Step 1: IDEA -->
                    <div class="flow-step">
                        <div class="flow-step-num">1</div>
                        <div class="flow-step-icon"><i class="bi bi-search"></i></div>
                        <h4 class="flow-step-title">ANALIZAMOS</h4>
                        <span class="badge bg-secondary mt-2">IDEA</span>
                    </div>

                    <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>

                    <!-- Step 2: DISEÑO -->
                    <div class="flow-step">
                        <div class="flow-step-num">2</div>
                        <div class="flow-step-icon"><i class="bi bi-palette-fill"></i></div>
                        <h4 class="flow-step-title">DISEÑAMOS</h4>
                        <span class="badge bg-secondary mt-2">DISEÑO</span>
                    </div>

                    <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>

                    <!-- Step 3: DESARROLLO -->
                    <div class="flow-step">
                        <div class="flow-step-num">3</div>
                        <div class="flow-step-icon"><i class="bi bi-code-square"></i></div>
                        <h4 class="flow-step-title">DESARROLLAMOS</h4>
                        <span class="badge bg-secondary mt-2">DESARROLLO</span>
                    </div>

                    <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>

                    <!-- Step 4: TECNOLOGÍA -->
                    <div class="flow-step">
                        <div class="flow-step-num">4</div>
                        <div class="flow-step-icon"><i class="bi bi-cpu-fill"></i></div>
                        <h4 class="flow-step-title">IMPLEMENTAMOS</h4>
                        <span class="badge bg-secondary mt-2">TECNOLOGÍA</span>
                    </div>

                    <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>

                    <!-- Step 5: RESULTADO -->
                    <div class="flow-step" style="border-color: var(--color-gold);">
                        <div class="flow-step-num" style="background: var(--color-blue-cyan); color: #fff;">5</div>
                        <div class="flow-step-icon" style="color: var(--color-gold);"><i class="bi bi-trophy-fill"></i></div>
                        <h4 class="flow-step-title" style="color: var(--color-gold);">ACOMPAÑAMOS</h4>
                        <span class="badge bg-warning text-dark mt-2 fw-bold">RESULTADO</span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 6. PROYECTOS / PORTAFOLIO -->
    <section class="py-5" id="portafolio">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Casos de Éxito</span>
                <h2 class="section-title">Proyectos Destacados</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card-dark-custom p-0 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80" class="img-fluid" alt="Proyecto Portal Web">
                        <div class="p-4">
                            <span class="badge bg-info text-dark mb-2">Página Web</span>
                            <h4 class="text-white fw-bold mb-2">Portal Corporativo</h4>
                            <p class="text-white opacity-90 fs-6">Diseño responsive de alta velocidad optimizado para posicionamiento en motores de búsqueda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-dark-custom p-0 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556742049-0a67d511894b?auto=format&fit=crop&w=600&q=80" class="img-fluid" alt="E-Commerce">
                        <div class="p-4">
                            <span class="badge bg-success text-white mb-2">Tienda Online</span>
                            <h4 class="text-white fw-bold mb-2">E-Commerce Multicategoría</h4>
                            <p class="text-white opacity-90 fs-6">Integración de pasarelas de pago, gestión de catálogo e inventario automatizado.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-dark-custom p-0 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80" class="img-fluid" alt="Sistema Administrativo">
                        <div class="p-4">
                            <span class="badge bg-warning text-dark mb-2">Sistema Web</span>
                            <h4 class="text-white fw-bold mb-2">Sistema de Ventas & Reservas</h4>
                            <p class="text-white opacity-90 fs-6">Plataforma a medida para la digitalización integral de procesos administrativos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. ¿POR QUÉ CANDELAWEB? -->
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
                            Convertimos conceptos e ideas en experiencias digitales atractivas, funcionales y memorables.
                        </p>
                    </div>
                </div>

                <!-- Item 2: Tecnología -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h3 class="why-title">Tecnología</h3>
                        <p class="why-desc">
                            Utilizamos herramientas y tecnologías actuales para desarrollar soluciones altamente eficientes e innovadoras.
                        </p>
                    </div>
                </div>

                <!-- Item 3: Personalización -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-card">
                        <div class="why-icon"><i class="bi bi-sliders"></i></div>
                        <h3 class="why-title">Personalización</h3>
                        <p class="why-desc">
                            Cada proyecto se adapta meticulosamente a las necesidades reales y objetivos específicos de cada cliente.
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

    <!-- 8. TECNOLOGÍAS -->
    <section class="py-5" id="tecnologias" style="background: rgba(8, 17, 43, 0.5);">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Stack Tecnológico</span>
                <h2 class="section-title">Tecnologías que utilizamos</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="tech-box">
                        <i class="fab fa-html5 tech-icon text-danger"></i>
                        <h5 class="m-0 text-white fs-6 fw-bold">HTML5 / CSS3</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="tech-box">
                        <i class="fab fa-js-square tech-icon text-warning"></i>
                        <h5 class="m-0 text-white fs-6 fw-bold">JavaScript</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="tech-box">
                        <i class="fab fa-php tech-icon text-info"></i>
                        <h5 class="m-0 text-white fs-6 fw-bold">PHP 8</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="tech-box">
                        <i class="fas fa-database tech-icon text-success"></i>
                        <h5 class="m-0 text-white fs-6 fw-bold">MySQL</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="tech-box">
                        <i class="fab fa-bootstrap tech-icon" style="color: #7952b3;"></i>
                        <h5 class="m-0 text-white fs-6 fw-bold">Bootstrap 5</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="tech-box">
                        <i class="fab fa-wordpress tech-icon text-primary"></i>
                        <h5 class="m-0 text-white fs-6 fw-bold">WordPress</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. TESTIMONIOS / CLIENTES -->
    <section class="py-5" id="testimonios">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Confianza y Garantía</span>
                <h2 class="section-title">Lo que dicen nuestros clientes</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card-dark-custom">
                        <div class="d-flex align-items-center mb-3">
                            <div class="text-warning fs-5 me-2">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <p class="text-white opacity-90 fs-6 mb-3">
                            “CANDELAWEB transformó la imagen de nuestra empresa. La velocidad de la página web y el sistema de gestión interna optimizaron todas nuestras ventas.”
                        </p>
                        <h5 class="text-info fw-bold mb-0">Carlos Mendoza</h5>
                        <small class="text-white opacity-75">Gerente Comercial - Empresa Turística Cusco</small>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card-dark-custom">
                        <div class="d-flex align-items-center mb-3">
                            <div class="text-warning fs-5 me-2">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <p class="text-white opacity-90 fs-6 mb-3">
                            “Excelente atención y acompañamiento constante. Entendieron perfectamente nuestra idea y la convirtieron en un sistema web súper intuitivo.”
                        </p>
                        <h5 class="text-info fw-bold mb-0">Mariela Quispe</h5>
                        <small class="text-white opacity-75">Directora - Institución Educativa</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. CTA FINAL & CALL TO ACTION BANNER -->
    <section class="py-5" id="cta-final">
        <div class="container">
            <div class="cta-banner text-center text-lg-start">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <span class="badge bg-warning text-dark fw-bold px-3 py-1 mb-2">CTA Final</span>
                        <h2 class="fw-extrabold text-white mb-2 fs-1">¿Tienes una idea? Enciéndela con CANDELAWEB.</h2>
                        <p class="text-white mb-0 fs-5 opacity-90">
                            Desde una página web hasta un sistema completo para tu empresa.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="https://wa.me/51935209781" target="_blank" class="btn-custom-gold fs-5">
                            <i class="bi bi-whatsapp"></i> Hablar con un Asesor
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
                        <i class="bi bi-fire text-warning fs-3 me-2"></i>
                        <span>CANDELA<span class="cyan">WEB</span></span>
                    </a>
                    <p class="text-white opacity-90">
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
                    <span class="text-white opacity-75 small">Encendemos tus ideas con tecnología</span>
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
