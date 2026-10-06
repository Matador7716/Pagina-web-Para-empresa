<?php
/**
 * Template Name: CANDELAWEB - Social Media Marketing
 * Single-file PHP template with HTML5, CSS3, JS, Bootstrap 5, FontAwesome & Animate.css
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Marketing | CANDELAWEB - Haz que tu marca tenga algo que decir</title>
    <meta name="description" content="Convertimos tus redes sociales en una experiencia que atrae, conecta y genera oportunidades reales. Estrategia, contenido, publicidad y analítica en CANDELAWEB.">

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons & FontAwesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        :root {
            --cw-black: #000000;
            --cw-gold: #c4ae04;
            --cw-green: #036326;
            --cw-blue: #061578;
            --cw-cyan: #00a7fa;
            --cw-dark-bg: #020617;
            --cw-card-bg: #0b1120;
            --cw-glass-bg: rgba(15, 23, 42, 0.75);
            --cw-glass-border: rgba(255, 255, 255, 0.12);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--cw-dark-bg);
            color: #f8fafc;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Top bar */
        .cw-topbar {
            background-color: #000000;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            font-size: 0.88rem;
            padding: 8px 0;
        }
        .cw-topbar a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s;
        }
        .cw-topbar a:hover {
            color: var(--cw-cyan);
        }
        .cw-social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            color: #fff !important;
            margin-left: 6px;
            transition: all 0.3s ease;
        }
        .cw-social-icon:hover {
            background: var(--cw-cyan);
            color: #000 !important;
            transform: translateY(-2px);
        }

        /* Main Nav Header */
        .cw-navbar {
            background: rgba(2, 6, 23, 0.92);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--cw-glass-border);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .cw-brand {
            font-size: 1.6rem;
            font-weight: 900;
            color: #ffffff;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            letter-spacing: -0.5px;
        }
        .cw-brand span.flame {
            color: var(--cw-gold);
            text-shadow: 0 0 12px rgba(196, 174, 4, 0.6);
        }
        .cw-brand span.highlight {
            color: var(--cw-cyan);
        }

        .nav-link {
            color: #e2e8f0 !important;
            font-weight: 500;
            font-size: 0.93rem;
            padding: 8px 14px !important;
            transition: all 0.25s ease;
            border-radius: 6px;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--cw-cyan) !important;
            background: rgba(0, 167, 250, 0.08);
        }

        .dropdown-menu-dark {
            background-color: #0b1120;
            border: 1px solid var(--cw-glass-border);
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            border-radius: 12px;
            padding: 10px;
        }
        .dropdown-item {
            color: #cbd5e1;
            font-size: 0.9rem;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.2s;
        }
        .dropdown-item:hover, .dropdown-item.active {
            background-color: rgba(0, 167, 250, 0.15);
            color: var(--cw-cyan);
        }

        .btn-cw-contact {
            background: linear-gradient(135deg, var(--cw-gold), #e0cb10);
            color: #000;
            font-weight: 700;
            padding: 10px 22px;
            border-radius: 50px;
            text-decoration: none;
            box-shadow: 0 0 15px rgba(196, 174, 4, 0.4);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: none;
        }
        .btn-cw-contact:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 25px rgba(196, 174, 4, 0.7);
            color: #000;
        }

        .btn-cw-cyan {
            background: linear-gradient(135deg, var(--cw-cyan), #0077c8);
            color: #ffffff;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 50px;
            text-decoration: none;
            box-shadow: 0 0 20px rgba(0, 167, 250, 0.4);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 1.05rem;
        }
        .btn-cw-cyan:hover {
            color: #fff;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 0 30px rgba(0, 167, 250, 0.7);
        }

        /* Section Styling */
        .cw-section {
            padding: 80px 0;
            position: relative;
        }

        .cw-badge {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 50px;
            background: rgba(0, 167, 250, 0.12);
            border: 1px solid rgba(0, 167, 250, 0.3);
            color: var(--cw-cyan);
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 15px;
        }

        .cw-badge-gold {
            background: rgba(196, 174, 4, 0.15);
            border-color: rgba(196, 174, 4, 0.4);
            color: var(--cw-gold);
        }

        .cw-badge-green {
            background: rgba(3, 99, 38, 0.25);
            border-color: rgba(40, 167, 69, 0.4);
            color: #2ecc71;
        }

        .cw-title-lg {
            font-size: 2.8rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #ffffff;
        }
        @media (max-width: 768px) {
            .cw-title-lg { font-size: 2.1rem; }
        }

        /* Hero Section */
        .cw-hero {
            padding: 90px 0 70px 0;
            background: radial-gradient(circle at 50% 20%, rgba(6, 21, 120, 0.35) 0%, rgba(2, 6, 23, 1) 75%);
            border-bottom: 1px solid var(--cw-glass-border);
            position: relative;
            overflow: hidden;
        }

        /* Hero Concept Animated Funnel Pill */
        .funnel-container {
            background: var(--cw-glass-bg);
            border: 1px solid var(--cw-glass-border);
            border-radius: 24px;
            padding: 30px;
            backdrop-filter: blur(16px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
            position: relative;
        }

        .funnel-step {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 14px;
            padding: 14px 20px;
            margin-bottom: 12px;
            transition: all 0.3s ease;
        }
        .funnel-step:hover {
            transform: translateX(8px);
            background: rgba(0, 167, 250, 0.1);
            border-color: var(--cw-cyan);
        }
        .funnel-step .icon-box {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .funnel-arrow {
            text-align: center;
            color: var(--cw-cyan);
            font-size: 1.1rem;
            margin: -6px 0 6px 0;
            opacity: 0.8;
            animation: bounceDown 2s infinite;
        }

        @keyframes bounceDown {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(4px); }
        }

        /* Cards and UI Elements */
        .cw-card {
            background: var(--cw-card-bg);
            border: 1px solid var(--cw-glass-border);
            border-radius: 18px;
            padding: 30px;
            height: 100%;
            transition: all 0.35s ease;
            position: relative;
            overflow: hidden;
        }
        .cw-card:hover {
            transform: translateY(-6px);
            border-color: rgba(0, 167, 250, 0.4);
            box-shadow: 0 15px 35px rgba(0, 167, 250, 0.15);
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            margin-bottom: 20px;
        }

        /* Flow diagram for IDEA -> CLIENTES */
        .flow-horizontal {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-top: 30px;
        }
        .flow-pill {
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid var(--cw-glass-border);
            padding: 12px 22px;
            border-radius: 50px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.95rem;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            transition: all 0.3s;
        }
        .flow-pill:hover {
            border-color: var(--cw-gold);
            transform: translateY(-3px);
        }
        .flow-arrow-right {
            color: var(--cw-cyan);
            font-size: 1.2rem;
            font-weight: bold;
        }

        /* Social Platform Cards */
        .social-platform-card {
            background: rgba(11, 17, 32, 0.8);
            border: 1px solid var(--cw-glass-border);
            border-radius: 16px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
        }
        .social-platform-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.5);
        }

        /* Content Pillars Grid */
        .pillar-card {
            background: rgba(255,255,255,0.02);
            border: 1px solid rgba(255,255,255,0.07);
            border-radius: 16px;
            padding: 22px;
            transition: all 0.3s;
        }
        .pillar-card:hover {
            background: rgba(0, 167, 250, 0.05);
            border-color: var(--cw-cyan);
        }

        /* Process Steps Timeline */
        .process-num {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--cw-blue), var(--cw-cyan));
            color: #fff;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-bottom: 15px;
            box-shadow: 0 0 15px rgba(0, 167, 250, 0.3);
        }

        /* Target Audience Pills/Cards */
        .target-card {
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid var(--cw-glass-border);
            border-radius: 14px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.3s;
        }
        .target-card:hover {
            border-color: var(--cw-gold);
            background: rgba(196, 174, 4, 0.05);
            transform: translateY(-4px);
        }

        /* Banners */
        .banner-quote {
            background: linear-gradient(135deg, rgba(6, 21, 120, 0.6), rgba(3, 99, 38, 0.5));
            border: 1px solid rgba(0, 167, 250, 0.3);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0,0,0,0.4);
        }

        /* Floating WhatsApp Button */
        .cw-whatsapp-float {
            position: fixed;
            bottom: 28px;
            right: 28px;
            width: 62px;
            height: 62px;
            background-color: #25d366;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.5);
            z-index: 9999;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .cw-whatsapp-float:hover {
            transform: scale(1.1) rotate(8deg);
            color: #ffffff;
            box-shadow: 0 12px 30px rgba(37, 211, 102, 0.8);
        }

        /* Footer */
        .cw-footer {
            background: #000000;
            border-top: 1px solid var(--cw-glass-border);
            padding: 60px 0 30px 0;
            color: #94a3b8;
            font-size: 0.9rem;
        }
        .cw-footer h5 {
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .cw-footer a {
            color: #94a3b8;
            text-decoration: none;
            transition: color 0.25s;
        }
        .cw-footer a:hover {
            color: var(--cw-cyan);
        }

        .pulse-btn {
            animation: pulseGlow 2.5s infinite;
        }
        @keyframes pulseGlow {
            0% { box-shadow: 0 0 0 0 rgba(0, 167, 250, 0.6); }
            70% { box-shadow: 0 0 0 18px rgba(0, 167, 250, 0); }
            100% { box-shadow: 0 0 0 0 rgba(0, 167, 250, 0); }
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="cw-topbar">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3 flex-wrap">
                <a href="tel:+51935209781"><i class="bi bi-telephone-fill me-1 text-warning"></i> +51 935 209 781</a>
                <span class="text-secondary">|</span>
                <a href="mailto:adminweb@todowebcusco.com"><i class="bi bi-envelope-fill me-1 text-warning"></i> adminweb@todowebcusco.com</a>
            </div>
            <div class="d-flex align-items-center mt-1 mt-md-0">
                <span class="text-secondary me-2 d-none d-sm-inline">Síguenos:</span>
                <a href="https://facebook.com" target="_blank" class="cw-social-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com" target="_blank" class="cw-social-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://tiktok.com" target="_blank" class="cw-social-icon" title="TikTok"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
    </div>

    <!-- NAVIGATION MENU -->
    <nav class="navbar navbar-expand-lg cw-navbar">
        <div class="container">
            <a class="cw-brand" href="https://www.todowebcusco.com/">
                <span class="flame"><i class="fa-solid fa-fire"></i></span> CANDELA<span class="highlight">WEB</span>
            </a>

            <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-1 text-white"></i>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
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
                        <a class="nav-link" href="https://www.todowebcusco.com/anuncios-en-google/">Anuncios en Google</a>
                    </li>

                    <!-- Dropdown for Marketing & SEO -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="marketingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Marketing Digital
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="marketingDropdown">
                            <li><a class="dropdown-item active" href="https://www.todowebcusco.com/social-media-marketing/"><i class="bi bi-share me-2 text-info"></i> Social Media Marketing</a></li>
                            <li><a class="dropdown-item" href="https://www.todowebcusco.com/posicionamiento-web-seo/"><i class="bi bi-search me-2 text-warning"></i> Posicionamiento Web (SEO)</a></li>
                            <li><a class="dropdown-item" href="https://www.todowebcusco.com/marketing-digital/"><i class="bi bi-bullseye me-2 text-success"></i> Marketing Digital Integral</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://www.todowebcusco.com/portafolio/">Portafolio</a>
                    </li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="btn-cw-contact" href="https://www.todowebcusco.com/contacto/">
                            <i class="bi bi-chat-dots-fill"></i> Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="cw-hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <span class="cw-badge"><i class="bi bi-chat-quote-fill me-1"></i> SOCIAL MEDIA MARKETING</span>
                    <h1 class="cw-title-lg text-uppercase fw-extrabold mb-3">
                        NO PUBLIQUES.<br><span style="color: var(--cw-gold);">HAZTE NOTAR.</span>
                    </h1>
                    <p class="fs-5 text-slate-300 mb-4" style="color: #cbd5e1; line-height: 1.6;">
                        Haz que tu marca tenga algo que decir. Convertimos tus redes sociales en una experiencia que atrae, conecta y genera oportunidades reales para tu negocio.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20potenciar%20mi%20marca%20en%20redes%20sociales" target="_blank" class="btn-cw-cyan pulse-btn">
                            🔥 QUIERO POTENCIAR MI MARCA
                        </a>
                    </div>

                    <div class="p-3 border-start border-3 border-info rounded bg-dark bg-opacity-50">
                        <small class="text-light fst-italic">"La pregunta no es si tu negocio debe estar en redes. La pregunta es cómo quieres que te recuerden."</small>
                    </div>
                </div>

                <!-- Interactive Hero Concept Funnel -->
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <div class="funnel-container">
                        <div class="text-center mb-4">
                            <span class="cw-badge-gold">CONCEPTO CREATIVO CANDELAWEB</span>
                            <h4 class="fw-bold text-white mb-0">De Publicar a Convertir</h4>
                        </div>

                        <div class="funnel-step">
                            <div class="d-flex align-items-center gap-3">
                                <div class="icon-box bg-secondary bg-opacity-25 text-white">📱</div>
                                <div>
                                    <h6 class="fw-bold text-white mb-0">PUBLICAR</h6>
                                    <small class="text-slate-300" style="color: #cbd5e1;">Presencia constante y diseño profesional</small>
                                </div>
                            </div>
                            <i class="bi bi-check-circle-fill text-secondary"></i>
                        </div>
                        <div class="funnel-arrow"><i class="bi bi-chevron-down"></i></div>

                        <div class="funnel-step">
                            <div class="d-flex align-items-center gap-3">
                                <div class="icon-box bg-primary bg-opacity-25 text-info">👀</div>
                                <div>
                                    <h6 class="fw-bold text-info mb-0">ATRAER</h6>
                                    <small class="text-slate-300" style="color: #cbd5e1;">Detén el scroll con piezas disruptivas</small>
                                </div>
                            </div>
                            <i class="bi bi-eye-fill text-info"></i>
                        </div>
                        <div class="funnel-arrow"><i class="bi bi-chevron-down"></i></div>

                        <div class="funnel-step">
                            <div class="d-flex align-items-center gap-3">
                                <div class="icon-box bg-danger bg-opacity-25 text-danger">❤️</div>
                                <div>
                                    <h6 class="fw-bold text-danger mb-0">CONECTAR</h6>
                                    <small class="text-slate-300" style="color: #cbd5e1;">Genera emociones y comunidad fiel</small>
                                </div>
                            </div>
                            <i class="bi bi-heart-fill text-danger"></i>
                        </div>
                        <div class="funnel-arrow"><i class="bi bi-chevron-down"></i></div>

                        <div class="funnel-step">
                            <div class="d-flex align-items-center gap-3">
                                <div class="icon-box bg-warning bg-opacity-25 text-warning">💬</div>
                                <div>
                                    <h6 class="fw-bold text-warning mb-0">CONVERSAR</h6>
                                    <small class="text-slate-300" style="color: #cbd5e1;">Comentarios, compartidos y mensajes directos</small>
                                </div>
                            </div>
                            <i class="bi bi-chat-square-text-fill text-warning"></i>
                        </div>
                        <div class="funnel-arrow"><i class="bi bi-chevron-down"></i></div>

                        <div class="funnel-step" style="border-color: #2ecc71; background: rgba(46, 204, 113, 0.1);">
                            <div class="d-flex align-items-center gap-3">
                                <div class="icon-box bg-success bg-opacity-25 text-success">🤝</div>
                                <div>
                                    <h6 class="fw-bold text-success mb-0">CONVERTIR</h6>
                                    <small class="text-light">Seguidores transformados en clientes reales</small>
                                </div>
                            </div>
                            <i class="bi bi-award-fill text-success fs-5"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INTRO STATEMENT SECTION -->
    <section class="cw-section bg-black bg-opacity-50">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="cw-badge-gold">NUESTRA FILOSOFÍA</span>
                    <h2 class="cw-title-lg text-white mb-3">HOY TUS CLIENTES ESTÁN EN LAS REDES SOCIALES</h2>
                    <p class="fs-5 text-light mb-4" style="line-height: 1.8;">
                        Miran, descubren, comparan, comentan, comparten y compran.
                    </p>
                    <p class="text-slate-300 mb-4" style="color: #cbd5e1;">
                        En <strong>CANDELAWEB</strong> desarrollamos estrategias de Social Media Marketing para convertir tus redes sociales en un canal activo de comunicación, posicionamiento y crecimiento para tu negocio.
                    </p>
                    <div class="p-3 rounded bg-dark border border-secondary border-opacity-25">
                        <h5 class="fw-bold text-warning mb-1"><i class="bi bi-lightning-charge-fill me-2"></i> No publicamos por publicar.</h5>
                        <p class="mb-0 text-white-50">Creamos contenido con propósito alineado a los objetivos comerciales de tu empresa.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="cw-card">
                        <span class="cw-badge mb-3"><i class="bi bi-diagram-3-fill me-1"></i> RUTA DE IMPACTO</span>
                        <h4 class="fw-bold text-white mb-3">🚀 De una Publicación a una Conexión</h4>
                        <p class="text-muted mb-4">
                            Una buena estrategia empieza con una idea clara y termina construyendo una relación sólida y duradera con el público.
                        </p>

                        <!-- Flow pills container -->
                        <div class="flow-horizontal">
                            <div class="flow-pill"><span class="text-warning">💡</span> IDEA</div>
                            <div class="flow-arrow-right">→</div>
                            <div class="flow-pill"><span class="text-info">🎨</span> CONTENIDO</div>
                            <div class="flow-arrow-right">→</div>
                            <div class="flow-pill"><span class="text-primary">📱</span> PUBLICACIÓN</div>
                            <div class="flow-arrow-right">→</div>
                            <div class="flow-pill"><span class="text-danger">👀</span> ATENCIÓN</div>
                            <div class="flow-arrow-right">→</div>
                            <div class="flow-pill"><span class="text-warning">💬</span> INTERACCIÓN</div>
                            <div class="flow-arrow-right">→</div>
                            <div class="flow-pill"><span class="text-info">❤️</span> COMUNIDAD</div>
                            <div class="flow-arrow-right">→</div>
                            <div class="flow-pill border-success bg-success bg-opacity-25"><span class="text-success">🤝</span> CLIENTES</div>
                        </div>

                        <div class="mt-4 pt-3 border-top border-secondary border-opacity-25 text-center">
                            <p class="fw-bold text-white mb-0">Tu marca merece estar presente. Pero, sobre todo, <span class="text-warning">merece ser recordada</span>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ¿QUÉ HACEMOS? ESTRATEGIA -->
    <section class="cw-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="cw-badge">🔥 ¿QUÉ HACEMOS?</span>
                <h2 class="cw-title-lg text-white">ESTRATEGIA DE REDES SOCIALES</h2>
                <p class="text-muted mx-auto" style="max-width: 700px;">
                    Antes de publicar, definimos hacia dónde queremos llegar. Cada pieza debe tener un porqué.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4 col-lg-2">
                    <div class="cw-card text-center py-4">
                        <div class="icon-circle bg-primary bg-opacity-25 text-info mx-auto">🏢</div>
                        <h6 class="fw-bold text-white">Tu Negocio</h6>
                        <small class="text-muted">Entendemos tu propuesta de valor única</small>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="cw-card text-center py-4">
                        <div class="icon-circle bg-warning bg-opacity-25 text-warning mx-auto">🎯</div>
                        <h6 class="fw-bold text-white">Tu Público</h6>
                        <small class="text-muted">Identificamos tu cliente ideal</small>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="cw-card text-center py-4">
                        <div class="icon-circle bg-danger bg-opacity-25 text-danger mx-auto">🥊</div>
                        <h6 class="fw-bold text-white">Competencia</h6>
                        <small class="text-muted">Analizamos el entorno del sector</small>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="cw-card text-center py-4">
                        <div class="icon-circle bg-success bg-opacity-25 text-success mx-auto">🚀</div>
                        <h6 class="fw-bold text-white">Objetivos</h6>
                        <small class="text-muted">Fijamos metas medibles y alcanzables</small>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="cw-card text-center py-4">
                        <div class="icon-circle bg-info bg-opacity-25 text-cyan mx-auto">✨</div>
                        <h6 class="fw-bold text-white">Identidad</h6>
                        <small class="text-muted">Coherencia visual y tono de voz</small>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2">
                    <div class="cw-card text-center py-4">
                        <div class="icon-circle bg-secondary bg-opacity-25 text-light mx-auto">📡</div>
                        <h6 class="fw-bold text-white">Canales</h6>
                        <small class="text-muted">Selección de redes adecuadas</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENIDO QUE LLAMA LA ATENCIÓN -->
    <section class="cw-section bg-black bg-opacity-40">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <span class="cw-badge-gold">🎨 CREATIVIDAD DISRUPTIVA</span>
                    <h2 class="cw-title-lg text-white">CREAMOS CONTENIDO QUE LLAMA LA ATENCIÓN</h2>
                    <p class="text-light fs-5 mb-4">
                        En un mundo lleno de publicaciones... Tienes pocos segundos para detener el scroll.
                    </p>
                    <div class="p-4 rounded-4 bg-dark border border-info border-opacity-25 mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <span class="fs-1">⚡</span>
                            <div>
                                <h6 class="fw-bold text-info mb-1">Scroll → Pausa → Atención → Interacción</h6>
                                <small class="text-muted">Diseñamos cada pieza con psicología visual para captar miradas al instante.</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-4">
                            <div class="pillar-card">
                                <div class="fs-3 mb-2 text-info"><i class="bi bi-image"></i></div>
                                <h6 class="fw-bold text-white">📸 Publicaciones</h6>
                                <small class="text-muted">Diseños estáticos impecables</small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="pillar-card">
                                <div class="fs-3 mb-2 text-danger"><i class="bi bi-play-btn-fill"></i></div>
                                <h6 class="fw-bold text-white">🎬 Reels</h6>
                                <small class="text-muted">Videos cortos de alto impacto</small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="pillar-card">
                                <div class="fs-3 mb-2 text-warning"><i class="bi bi-circle-square"></i></div>
                                <h6 class="fw-bold text-white">📱 Stories</h6>
                                <small class="text-muted">Contenido fresco cotidiano</small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="pillar-card">
                                <div class="fs-3 mb-2 text-primary"><i class="bi bi-images"></i></div>
                                <h6 class="fw-bold text-white">🎨 Carruseles</h6>
                                <small class="text-muted">Historias deslizables continuas</small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="pillar-card">
                                <div class="fs-3 mb-2 text-success"><i class="bi bi-camera-reels"></i></div>
                                <h6 class="fw-bold text-white">🎥 Videos</h6>
                                <small class="text-muted">Edición dinámica y profesional</small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="pillar-card">
                                <div class="fs-3 mb-2 text-info"><i class="bi bi-lightbulb-fill"></i></div>
                                <h6 class="fw-bold text-white">💡 Educativo</h6>
                                <small class="text-muted">Aporta valor real al cliente</small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="pillar-card">
                                <div class="fs-3 mb-2 text-warning"><i class="bi bi-fire"></i></div>
                                <h6 class="fw-bold text-white">🔥 Promocional</h6>
                                <small class="text-muted">Llamados a la acción claros y persuasivos</small>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="pillar-card">
                                <div class="fs-3 mb-2 text-danger"><i class="bi bi-chat-dots-fill"></i></div>
                                <h6 class="fw-bold text-white">💬 Interactivo</h6>
                                <small class="text-muted">Encuestas, preguntas y stickers activa-audiencia</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PLATAFORMAS DIGITALES -->
    <section class="cw-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="cw-badge"><i class="bi bi-globe me-1"></i> PLATAFORMAS</span>
                <h2 class="cw-title-lg text-white">REDES QUE TRABAJAN PARA TU MARCA</h2>
                <p class="text-muted mx-auto" style="max-width: 650px;">
                    Desarrollamos contenido y estrategias adaptadas a las dinámicas propias de cada plataforma.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4 col-lg border-hover">
                    <div class="social-platform-card">
                        <i class="fab fa-facebook text-primary display-4 mb-3"></i>
                        <h5 class="fw-bold text-white">Facebook</h5>
                        <p class="text-muted small mb-0">Construye comunidad sólida y conecta con clientes locales.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg">
                    <div class="social-platform-card">
                        <i class="fab fa-instagram text-danger display-4 mb-3"></i>
                        <h5 class="fw-bold text-white">Instagram</h5>
                        <p class="text-muted small mb-0">Haz que tu marca entre por los ojos con estética impecable.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg">
                    <div class="social-platform-card">
                        <i class="fab fa-tiktok text-light display-4 mb-3"></i>
                        <h5 class="fw-bold text-white">TikTok</h5>
                        <p class="text-muted small mb-0">Convierte la creatividad en alcance masivo orgánico.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="social-platform-card">
                        <i class="fab fa-linkedin text-info display-4 mb-3"></i>
                        <h5 class="fw-bold text-white">LinkedIn</h5>
                        <p class="text-muted small mb-0">Construye autoridad B2B y presencia corporativa.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="social-platform-card">
                        <i class="fab fa-youtube text-danger display-4 mb-3"></i>
                        <h5 class="fw-bold text-white">YouTube</h5>
                        <p class="text-muted small mb-0">Cuenta historias profundas que duren más de unos segundos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PILARES DE CONTENIDO CON PERSONALIDAD -->
    <section class="cw-section bg-black bg-opacity-60">
        <div class="container">
            <div class="text-center mb-5">
                <span class="cw-badge-gold">🧠 IDENTIDAD DE MARCA</span>
                <h2 class="cw-title-lg text-white">CONTENIDO CON PERSONALIDAD</h2>
                <p class="text-light mx-auto" style="max-width: 700px;">
                    No queremos que tu negocio publique lo mismo que todos. Queremos que tenga su propia voz distintiva.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="cw-card">
                        <div class="icon-circle bg-info bg-opacity-25 text-info">📚</div>
                        <h5 class="fw-bold text-white">EDUCAR</h5>
                        <p class="text-muted mb-0">Comparte conocimiento valioso y demuestra tu experiencia en el sector.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cw-card">
                        <div class="icon-circle bg-warning bg-opacity-25 text-warning">🎯</div>
                        <h5 class="fw-bold text-white">INFORMAR</h5>
                        <p class="text-muted mb-0">Presenta tus productos, servicios, horarios y novedades de forma clara.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cw-card">
                        <div class="icon-circle bg-danger bg-opacity-25 text-danger">❤️</div>
                        <h5 class="fw-bold text-white">CONECTAR</h5>
                        <p class="text-muted mb-0">Muestra el lado humano de tu marca, tu equipo y el detrás de cámaras.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cw-card">
                        <div class="icon-circle bg-primary bg-opacity-25 text-primary">😂</div>
                        <h5 class="fw-bold text-white">ENTRETENER</h5>
                        <p class="text-muted mb-0">Crea contenido ameno y tendencias que las personas deseen compartir.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cw-card">
                        <div class="icon-circle bg-success bg-opacity-25 text-success">🛍️</div>
                        <h5 class="fw-bold text-white">VENDER</h5>
                        <p class="text-muted mb-0">Presenta tus productos con llamados a la acción que conviertan en ventas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cw-card">
                        <div class="icon-circle bg-secondary bg-opacity-25 text-gold">🏆</div>
                        <h5 class="fw-bold text-white">POSICIONAR</h5>
                        <p class="text-muted mb-0">Haz que las personas asocien instantáneamente tu marca con la solución que buscan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONVERSIÓN DEL SCROLL AL CLIENTE -->
    <section class="cw-section">
        <div class="container">
            <div class="cw-card bg-gradient border-info p-5 text-center">
                <span class="cw-badge mb-3">⚡ DEJA DE PUBLICAR. EMPIEZA A COMUNICAR.</span>
                <h2 class="cw-title-lg text-white mb-4">EL VERDADERO POTENCIAL DE LAS REDES SOCIALES</h2>

                <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 my-4 fs-5 fw-bold">
                    <span class="px-3 py-2 rounded-pill bg-dark border border-secondary text-info">👀 Atención</span>
                    <span class="text-cyan">↓</span>
                    <span class="px-3 py-2 rounded-pill bg-dark border border-secondary text-danger">❤️ Reacción</span>
                    <span class="text-cyan">↓</span>
                    <span class="px-3 py-2 rounded-pill bg-dark border border-secondary text-warning">💬 Comentario</span>
                    <span class="text-cyan">↓</span>
                    <span class="px-3 py-2 rounded-pill bg-dark border border-secondary text-primary">🔄 Compartido</span>
                    <span class="text-cyan">↓</span>
                    <span class="px-3 py-2 rounded-pill bg-dark border border-secondary text-info">📩 Mensaje</span>
                    <span class="text-cyan">↓</span>
                    <span class="px-3 py-2 rounded-pill bg-success text-white border border-success">🤝 Cliente</span>
                </div>
                <p class="text-light fs-5 mx-auto mt-3" style="max-width: 700px;">
                    Transformamos interacciones pasivas en conversaciones comerciales de alto valor.
                </p>
            </div>
        </div>
    </section>

    <!-- MARKETING BASADO EN DATOS + REDES Y PUBLICIDAD -->
    <section class="cw-section bg-black bg-opacity-50">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Data Driven -->
                <div class="col-lg-6">
                    <span class="cw-badge-green"><i class="bi bi-graph-up-arrow me-1"></i> ANALÍTICA CONSTANTE</span>
                    <h2 class="cw-title-lg text-white">📈 MARKETING BASADO EN DATOS</h2>
                    <p class="text-light mb-4">
                        No todo lo que funciona para una marca funciona para otra. Por eso analizamos el comportamiento exacto de tu comunidad.
                    </p>

                    <div class="row g-3">
                        <div class="col-6"><div class="p-2 border border-secondary rounded text-slate-200"><i class="bi bi-check2-circle text-success me-2"></i> Alcance</div></div>
                        <div class="col-6"><div class="p-2 border border-secondary rounded text-slate-200"><i class="bi bi-check2-circle text-success me-2"></i> Impresiones</div></div>
                        <div class="col-6"><div class="p-2 border border-secondary rounded text-slate-200"><i class="bi bi-check2-circle text-success me-2"></i> Interacciones</div></div>
                        <div class="col-6"><div class="p-2 border border-secondary rounded text-slate-200"><i class="bi bi-check2-circle text-success me-2"></i> Seguidores</div></div>
                        <div class="col-6"><div class="p-2 border border-secondary rounded text-slate-200"><i class="bi bi-check2-circle text-success me-2"></i> Reproducciones</div></div>
                        <div class="col-6"><div class="p-2 border border-secondary rounded text-slate-200"><i class="bi bi-check2-circle text-success me-2"></i> Clics y Mensajes</div></div>
                    </div>

                    <div class="p-3 bg-dark rounded border border-secondary border-opacity-25 mt-4 text-center">
                        <span class="fw-bold text-warning">Publicamos → Medimos → Aprendemos → Optimizamos</span>
                    </div>
                </div>

                <!-- Organic + Ads -->
                <div class="col-lg-6">
                    <div class="cw-card border-warning">
                        <span class="cw-badge-gold">📢 REDES + PUBLICIDAD</span>
                        <h3 class="fw-bold text-white mb-3">POTENCIA TU IMPACTO CON ADS</h3>
                        <p class="text-light">
                            Tu contenido puede llegar de forma orgánica... Pero también podemos potenciarlo mediante campañas publicitarias altamente segmentadas.
                        </p>

                        <ul class="list-unstyled d-flex flex-column gap-2 text-white-50 my-3">
                            <li class="d-flex align-items-center gap-2"><i class="bi bi-fire text-warning"></i> <span><strong>Más alcance:</strong> Llama la atención de miles de personas.</span></li>
                            <li class="d-flex align-items-center gap-2"><i class="bi bi-crosshair text-info"></i> <span><strong>Más segmentación:</strong> Llega solo a tu cliente ideal.</span></li>
                            <li class="d-flex align-items-center gap-2"><i class="bi bi-people-fill text-primary"></i> <span><strong>Más personas interesadas:</strong> Tráfico calificado a tu perfil.</span></li>
                            <li class="d-flex align-items-center gap-2"><i class="bi bi-chat-dots-fill text-success"></i> <span><strong>Más contactos directos:</strong> Mensajes directo a WhatsApp.</span></li>
                        </ul>

                        <div class="p-3 bg-black rounded text-center">
                            <small class="text-info fw-bold">Campañas orientadas a: Reconocimiento · Interacción · Tráfico · Mensajes · Leads · Ventas</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MARCA PRESENTE & CONFIANZA -->
    <section class="cw-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="cw-badge"><i class="bi bi-shield-check me-1"></i> CONFIANZA Y AUTORIDAD</span>
                    <h2 class="cw-title-lg text-white">🌎 HAZ QUE TU MARCA ESTÉ PRESENTE</h2>
                    <p class="text-light mb-4">
                        Imagina que alguien escucha hablar de tu negocio. Lo primero que hace es <strong>buscarte en redes</strong>.
                    </p>
                    <p class="text-muted mb-4">
                        Y cuando entra a tus redes encuentra una marca profesional, una identidad coherente, contenido útil, actividad constante y una comunidad activa.
                    </p>
                    <div class="p-3 bg-primary bg-opacity-10 border border-info rounded">
                        <h6 class="fw-bold text-info mb-1"><i class="bi bi-star-fill text-warning me-2"></i> Eso también es vender.</h6>
                        <small class="text-light">Porque antes de comprar, muchas personas necesitan confiar en tu marca.</small>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-quote">
                        <h3 class="fw-extrabold text-white mb-3">“Contenido que atrae. Estrategias que conectan.”</h3>
                        <p class="text-info fs-5 mb-0">Del scroll al contacto directo con tu empresa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NUESTRO PROCESO EN 7 PASOS -->
    <section class="cw-section bg-black bg-opacity-40">
        <div class="container">
            <div class="text-center mb-5">
                <span class="cw-badge-gold">🚀 NUESTRO PROCESO</span>
                <h2 class="cw-title-lg text-white">CÓMO TRABAJAMOS JUNTO A TI</h2>
                <p class="text-muted mx-auto" style="max-width: 650px;">
                    Un método estructurado en 7 etapas para garantizar resultados sostenibles.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="cw-card">
                        <div class="process-num">01</div>
                        <h5 class="fw-bold text-white">🔎 DESCUBRIMOS</h5>
                        <p class="text-muted mb-0">Conocemos a fondo tu marca, público objetivo y metas comerciales.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="cw-card">
                        <div class="process-num">02</div>
                        <h5 class="fw-bold text-white">🧠 PLANIFICAMOS</h5>
                        <p class="text-muted mb-0">Creamos una estrategia de contenido mensual personalizada.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="cw-card">
                        <div class="process-num">03</div>
                        <h5 class="fw-bold text-white">🎨 CREAMOS</h5>
                        <p class="text-muted mb-0">Diseñamos piezas visuales, redactamos copypersuasivo y editamos videos.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="cw-card">
                        <div class="process-num">04</div>
                        <h5 class="fw-bold text-white">📲 PUBLICAMOS</h5>
                        <p class="text-muted mb-0">Mantenemos una presencia constante y profesional en tus redes.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="cw-card">
                        <div class="process-num">05</div>
                        <h5 class="fw-bold text-white">💬 CONECTAMOS</h5>
                        <p class="text-muted mb-0">Impulsamos la interacción constante con tu comunidad.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="cw-card">
                        <div class="process-num">06</div>
                        <h5 class="fw-bold text-white">📊 ANALIZAMOS</h5>
                        <p class="text-muted mb-0">Medimos resultados exactos y detectamos nuevas oportunidades.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="cw-card border-success">
                        <div class="process-num bg-success">07</div>
                        <h5 class="fw-bold text-white">🔥 OPTIMIZAMOS</h5>
                        <p class="text-muted mb-0">Mejoramos la estrategia continuamente para acelerar tu crecimiento.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ¿PARA QUIÉN ES? -->
    <section class="cw-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="cw-badge">🎯 ¿PARA QUIÉN ES?</span>
                <h2 class="cw-title-lg text-white">SOLUCIONES ADAPTADAS A TU SECTOR</h2>
            </div>

            <div class="row g-3">
                <div class="col-md-4 col-lg-3">
                    <div class="target-card">
                        <span class="fs-2">🏢</span>
                        <div>
                            <h6 class="fw-bold text-white mb-0">Empresas</h6>
                            <small class="text-muted">Haz crecer tu presencia digital</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="target-card">
                        <span class="fs-2">🛍️</span>
                        <div>
                            <h6 class="fw-bold text-white mb-0">Tiendas</h6>
                            <small class="text-muted">Convierte seguidores en compradores</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="target-card">
                        <span class="fs-2">🍔</span>
                        <div>
                            <h6 class="fw-bold text-white mb-0">Restaurantes</h6>
                            <small class="text-muted">Haz que tus platillos entren por los ojos</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="target-card">
                        <span class="fs-2">✈️</span>
                        <div>
                            <h6 class="fw-bold text-white mb-0">Agencias de Viajes</h6>
                            <small class="text-muted">Inspira a tus próximos viajeros</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="target-card">
                        <span class="fs-2">🎓</span>
                        <div>
                            <h6 class="fw-bold text-white mb-0">Instituciones</h6>
                            <small class="text-muted">Comunica valores y construye comunidad</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="target-card">
                        <span class="fs-2">👨‍💼</span>
                        <div>
                            <h6 class="fw-bold text-white mb-0">Profesionales</h6>
                            <small class="text-muted">Construye una marca personal sólida</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="target-card">
                        <span class="fs-2">🚀</span>
                        <div>
                            <h6 class="fw-bold text-white mb-0">Emprendedores</h6>
                            <small class="text-muted">Haz que tu nueva marca comience visible</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CAROUSEL DE BANNERS / FRASES DESTACADAS -->
    <section class="cw-section bg-gradient">
        <div class="container">
            <div id="bannerQuotesCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active text-center py-4">
                        <h2 class="fw-extrabold text-warning display-5">“Tu marca merece ser vista.”</h2>
                        <p class="text-light fs-5">Haz ruido. Haz conexión. Haz crecer tu marca con CANDELAWEB.</p>
                    </div>
                    <div class="carousel-item text-center py-4">
                        <h2 class="fw-extrabold text-info display-5">“Del scroll al contacto.”</h2>
                        <p class="text-light fs-5">No publiques por publicar. Convierte atención en oportunidades reales.</p>
                    </div>
                    <div class="carousel-item text-center py-4">
                        <h2 class="fw-extrabold text-success display-5">“Tu comunidad puede convertirse en tu mejor cliente.”</h2>
                        <p class="text-light fs-5">Enciende tus redes. Conecta con tu audiencia hoy mismo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION FINAL -->
    <section class="cw-section text-center" style="background: radial-gradient(circle at center, rgba(6, 21, 120, 0.4), #000);">
        <div class="container">
            <span class="cw-badge-gold mb-3">📱 CANDELAWEB</span>
            <h2 class="cw-title-lg text-white mb-3">ENCIENDE TUS REDES. CONECTA CON TU AUDIENCIA.</h2>
            <p class="text-light fs-5 mx-auto mb-4" style="max-width: 650px;">
                ¿Listo para transformar tus redes sociales en un canal activo de clientes? Conversemos hoy mismo.
            </p>
            <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20potenciar%20mis%20redes%20sociales" target="_blank" class="btn-cw-cyan pulse-btn fs-5">
                🔥 QUIERO POTENCIAR MI MARCA
            </a>
        </div>
    </section>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20deseo%20informacion%20sobre%20Social%20Media%20Marketing" target="_blank" class="cw-whatsapp-float" title="Contactar por WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- FOOTER -->
    <footer class="cw-footer">
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-lg-4">
                    <a class="cw-brand mb-3 d-inline-block" href="https://www.todowebcusco.com/">
                        <span class="flame"><i class="fa-solid fa-fire"></i></span> CANDELA<span class="highlight">WEB</span>
                    </a>
                    <p class="text-muted">
                        Agencia de desarrollo web y marketing digital de alto impacto en Cusco, Perú. Transformamos ideas en experiencias digitales exitosas.
                    </p>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5>Servicios</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="https://www.todowebcusco.com/paginas-web/">Páginas Web</a></li>
                        <li><a href="https://www.todowebcusco.com/tiendas-virtuales/">Tiendas Virtuales</a></li>
                        <li><a href="https://www.todowebcusco.com/desarrollo-de-apps/">Desarrollo de Apps</a></li>
                        <li><a href="https://www.todowebcusco.com/anuncios-en-google/">Anuncios en Google</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5>Marketing Digital</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="https://www.todowebcusco.com/social-media-marketing/" class="text-info fw-bold">Social Media Marketing</a></li>
                        <li><a href="https://www.todowebcusco.com/posicionamiento-web-seo/">Posicionamiento SEO</a></li>
                        <li><a href="https://www.todowebcusco.com/marketing-digital/">Marketing Digital Integral</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><i class="bi bi-telephone text-warning me-2"></i> +51 935 209 781</li>
                        <li><i class="bi bi-envelope text-warning me-2"></i> adminweb@todowebcusco.com</li>
                        <li><i class="bi bi-geo-alt text-warning me-2"></i> Cusco, Perú</li>
                    </ul>
                </div>
            </div>
            <div class="border-top border-secondary border-opacity-25 pt-4 text-center">
                <p class="mb-0 text-muted">&copy; <?php echo date('Y'); ?> CANDELAWEB / Todo Web Cusco. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
