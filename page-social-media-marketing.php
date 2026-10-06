<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Marketing | CANDELAWEB - Todo Web Cusco</title>
    <meta name="description" content="Gestión profesional de redes sociales en Cusco. Estrategia de contenidos, diseño creativo, reels, crecimiento orgánico y campañas publicitarias para transformar seguidores en clientes.">

    <!-- Google Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        :root {
            --primary-black: #000000;
            --primary-yellow: #c4ae04;
            --primary-green: #036326;
            --primary-navy: #061578;
            --primary-cyan: #00a7fa;
            --light-bg: #090e1a;
            --card-bg: #111827;
            --dark-card: #0d1322;
            --font-family: 'Poppins', sans-serif;
        }

        body {
            font-family: var(--font-family);
            background-color: var(--light-bg);
            color: #ffffff;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Top Bar */
        .top-bar {
            background-color: #000000;
            color: #ffffff;
            font-size: 0.85rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        }
        .top-bar a {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .top-bar a:hover {
            color: var(--primary-cyan);
        }
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff !important;
            border-radius: 50%;
            margin-left: 6px;
            transition: all 0.3s ease;
        }
        .social-icons a:hover {
            background: var(--primary-yellow);
            color: #000 !important;
            transform: translateY(-2px);
        }

        /* Navbar */
        .navbar {
            background-color: rgba(6, 21, 120, 0.95) !important;
            backdrop-filter: blur(10px);
            border-bottom: 3px solid var(--primary-yellow);
        }
        .navbar-brand {
            font-weight: 800;
            font-size: 1.6rem;
            color: #ffffff !important;
        }
        .navbar-brand span.candela {
            color: #ffffff;
        }
        .navbar-brand span.web {
            color: var(--primary-cyan);
        }
        .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            font-size: 0.95rem;
            padding: 0.5rem 0.9rem !important;
            transition: all 0.3s ease;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--primary-yellow) !important;
        }
        .dropdown-menu {
            background-color: var(--primary-navy);
            border: 1px solid var(--primary-yellow);
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
        }
        .dropdown-item {
            color: #ffffff !important;
            font-size: 0.9rem;
            transition: all 0.2s ease;
        }
        .dropdown-item:hover {
            background-color: rgba(196, 174, 4, 0.2);
            color: var(--primary-yellow) !important;
            padding-left: 1.5rem;
        }
        .btn-contacto {
            background: linear-gradient(135deg, var(--primary-yellow), #e5cb05);
            color: #000 !important;
            font-weight: 700;
            border-radius: 50px;
            padding: 0.5rem 1.4rem;
            border: none;
            box-shadow: 0 4px 15px rgba(196, 174, 4, 0.4);
            transition: all 0.3s ease;
        }
        .btn-contacto:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(196, 174, 4, 0.6);
            background: linear-gradient(135deg, #e5cb05, var(--primary-yellow));
        }

        /* Custom Section Titles */
        .section-tag {
            display: inline-block;
            background: rgba(0, 167, 250, 0.15);
            color: var(--primary-cyan);
            padding: 6px 18px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 0.85rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: 1px solid rgba(0, 167, 250, 0.3);
            margin-bottom: 12px;
        }
        .section-title {
            font-weight: 800;
            font-size: 2.4rem;
            color: #ffffff;
            margin-bottom: 15px;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #020617 0%, var(--primary-navy) 60%, #031046 100%);
            padding: 90px 0 70px;
            position: relative;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Interactive Funnel Visual in Hero */
        .hero-funnel-card {
            background: rgba(13, 19, 34, 0.85);
            border: 1px solid rgba(0, 167, 250, 0.3);
            border-radius: 20px;
            backdrop-filter: blur(12px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.6);
            padding: 30px;
        }

        .funnel-step {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            padding: 14px 20px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.3s ease;
        }
        .funnel-step:hover {
            transform: translateX(6px);
            border-color: var(--primary-cyan);
            background: rgba(0, 167, 250, 0.1);
        }
        .funnel-arrow {
            text-align: center;
            color: var(--primary-yellow);
            font-size: 1.2rem;
            margin: -4px 0 6px;
        }

        /* Cards & Styling */
        .smm-card {
            background: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 16px;
            padding: 28px;
            height: 100%;
            transition: all 0.35 ease;
            box-shadow: 0 8px 24px rgba(0,0,0,0.3);
        }
        .smm-card:hover {
            transform: translateY(-8px);
            border-color: var(--primary-cyan);
            box-shadow: 0 15px 35px rgba(0, 167, 250, 0.2);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 20px;
            background: linear-gradient(135deg, rgba(0, 167, 250, 0.2), rgba(6, 21, 120, 0.4));
            color: var(--primary-cyan);
            border: 1px solid rgba(0, 167, 250, 0.3);
        }

        /* Platform Badge */
        .platform-card {
            background: #0f172a;
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 16px;
            padding: 24px;
            text-align: center;
            transition: all 0.3s ease;
        }
        .platform-card:hover {
            border-color: var(--primary-yellow);
            transform: scale(1.03);
            box-shadow: 0 10px 25px rgba(196, 174, 4, 0.15);
        }

        /* Timeline Process */
        .timeline-box {
            position: relative;
            padding-left: 30px;
            border-left: 3px solid var(--primary-cyan);
        }
        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -39px;
            top: 5px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--primary-yellow);
            border: 3px solid var(--primary-navy);
        }

        /* Text Contrast Overrides - Guaranteeing white readable text */
        .text-white-sub {
            color: #ffffff !important;
            opacity: 0.95;
        }
        p, span, small, label, div {
            color: #ffffff;
        }
        .text-muted {
            color: #ffffff !important;
            opacity: 0.9;
        }

        /* Floating WhatsApp Button */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 30px;
            right: 30px;
            background-color: #25d366;
            color: #ffffff;
            border-radius: 50px;
            text-align: center;
            font-size: 32px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.4);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .whatsapp-float:hover {
            transform: scale(1.1);
            color: #ffffff;
            box-shadow: 0px 6px 20px rgba(37, 211, 102, 0.6);
        }

        /* Footer */
        footer {
            background-color: #000000;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #ffffff;
            font-size: 0.9rem;
        }
        footer a {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s;
        }
        footer a:hover {
            color: var(--primary-cyan);
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="top-bar py-2">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex align-items-center gap-3">
                <a href="tel:+51935209781"><i class="bi bi-telephone-fill text-warning me-1"></i> +51 935 209 781</a>
                <span class="text-white-50">|</span>
                <a href="mailto:adminweb@todowebcusco.com"><i class="bi bi-envelope-fill text-warning me-1"></i> adminweb@todowebcusco.com</a>
            </div>
            <div class="d-flex align-items-center gap-2 mt-1 mt-md-0">
                <span class="me-1">Síguenos:</span>
                <div class="social-icons">
                    <a href="https://facebook.com" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://tiktok.com" target="_blank" title="TikTok"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN MENU NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="https://www.todowebcusco.com/">
                <i class="bi bi-fire text-warning fs-3"></i>
                <span><span class="candela">CANDELA</span><span class="web">WEB</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-1">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="marketingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Marketing Digital
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="marketingDropdown">
                            <li><a class="dropdown-item active" href="https://www.todowebcusco.com/social-media-marketing/"><i class="bi bi-share me-2 text-info"></i>Social Media Marketing</a></li>
                            <li><a class="dropdown-item" href="https://www.todowebcusco.com/posicionamiento-web-seo/"><i class="bi bi-search me-2 text-warning"></i>Posicionamiento Web (SEO)</a></li>
                            <li><a class="dropdown-item" href="https://www.todowebcusco.com/marketing-digital/"><i class="bi bi-megaphone me-2 text-success"></i>Marketing Digital Integral</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.todowebcusco.com/portafolio/">Portafolio</a>
                    </li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="btn btn-contacto" href="https://www.todowebcusco.com/contacto/">
                            <i class="bi bi-chat-dots-fill me-1"></i> Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6">
                    <span class="section-tag animate__animated animate__fadeInDown"><i class="bi bi-chat-heart me-1"></i> Social Media Marketing</span>
                    <h1 class="display-4 fw-extrabold text-white mb-3 leading-tight animate__animated animate__fadeInLeft">
                        NO PUBLIQUES.<br>
                        <span style="color: var(--primary-yellow); background: linear-gradient(90deg, #c4ae04, #00a7fa); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">HAZTE NOTAR.</span>
                    </h1>
                    <p class="fs-5 text-white-sub mb-4" style="line-height: 1.7;">
                        Haz que tu marca tenga algo que decir. Convertimos tus redes sociales en una experiencia visual envolvente que atrae audiencia real, conecta emocionalmente y genera ventas constantes.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20potenciar%20mis%20Redes%20Sociales" target="_blank" class="btn btn-contacto px-4 py-3 text-uppercase fw-bold">
                            <i class="bi bi-fire me-2"></i> Quiero Potenciar mi Marca
                        </a>
                        <a href="#estrategia" class="btn btn-outline-light rounded-pill px-4 py-3 fw-bold">
                            <i class="bi bi-compass me-2"></i> Ver Estrategia
                        </a>
                    </div>

                    <div class="p-3 rounded-4 border border-secondary" style="background: rgba(255, 255, 255, 0.05);">
                        <i class="bi bi-quote text-warning fs-3"></i>
                        <p class="mb-0 text-white fst-italic">"La pregunta no es si tu negocio debe estar en redes. La pregunta es cómo quieres que te recuerden cuando pasen por tu perfil."</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-funnel-card animate__animated animate__fadeInRight">
                        <div class="text-center mb-4">
                            <span class="badge bg-warning text-dark text-uppercase px-3 py-2 fw-bold">CONCEPTO CREATIVO CANDELAWEB</span>
                            <h3 class="fw-bold text-white mt-2">De Publicar a Convertir</h3>
                        </div>

                        <div class="funnel-step">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-primary p-2 rounded-3 text-white"><i class="bi bi-phone fs-4"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0 text-white">PUBLICAR</h6>
                                    <small class="text-white-sub">Presencia constante y diseño profesional</small>
                                </div>
                            </div>
                            <i class="bi bi-check-circle-fill text-info"></i>
                        </div>
                        <div class="funnel-arrow"><i class="bi bi-chevron-down"></i></div>

                        <div class="funnel-step">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-success p-2 rounded-3 text-white"><i class="bi bi-eye fs-4"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0 text-white">ATRAER</h6>
                                    <small class="text-white-sub">Detén el scroll con piezas disruptivas</small>
                                </div>
                            </div>
                            <i class="bi bi-eye-fill text-success"></i>
                        </div>
                        <div class="funnel-arrow"><i class="bi bi-chevron-down"></i></div>

                        <div class="funnel-step">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-danger p-2 rounded-3 text-white"><i class="bi bi-heart fs-4"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0 text-white">CONECTAR</h6>
                                    <small class="text-white-sub">Genera emociones y comunidad fiel</small>
                                </div>
                            </div>
                            <i class="bi bi-heart-fill text-danger"></i>
                        </div>
                        <div class="funnel-arrow"><i class="bi bi-chevron-down"></i></div>

                        <div class="funnel-step">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-warning p-2 rounded-3 text-dark"><i class="bi bi-chat-quote fs-4"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0 text-white">CONVERSAR</h6>
                                    <small class="text-white-sub">Comentarios, compartidos y mensajes directos</small>
                                </div>
                            </div>
                            <i class="bi bi-chat-fill text-warning"></i>
                        </div>
                        <div class="funnel-arrow"><i class="bi bi-chevron-down"></i></div>

                        <div class="funnel-step" style="border-color: #2ecc71; background: rgba(46, 204, 113, 0.15);">
                            <div class="d-flex align-items-center gap-3">
                                <div class="p-2 rounded-3 text-white" style="background: #2ecc71;"><i class="bi bi-cash-coin fs-4"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0 text-white">CONVERTIR</h6>
                                    <small class="text-white-sub">Nuevos clientes y ventas reales</small>
                                </div>
                            </div>
                            <i class="bi bi-trophy-fill text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ROUTE FLOW SECTION: EL CAMINO DE TU AUDIENCIA -->
    <section class="py-5 bg-dark">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-diagram-3 me-1"></i> RUTA DE RESULTADOS</span>
                <h2 class="section-title">El Camino de tu Público hacia tu Cliente</h2>
                <p class="text-white-sub max-w-700 mx-auto">Diseñamos una línea estratégica clara desde el primer vistazo hasta la conversión final.</p>
            </div>

            <div class="row g-3 text-center">
                <div class="col-md-3 col-6">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-warning text-dark mb-2">Paso 01</span>
                        <h5 class="fw-bold text-white mb-2">IDEA</h5>
                        <p class="text-white mb-0 small">Estrategia de marca y concepto visual</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-info text-dark mb-2">Paso 02</span>
                        <h5 class="fw-bold text-white mb-2">CONTENIDO</h5>
                        <p class="text-white mb-0 small">Reels, carruseles, flyers y textos clave</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-success text-white mb-2">Paso 03</span>
                        <h5 class="fw-bold text-white mb-2">INTERACCIÓN</h5>
                        <p class="text-white mb-0 small">Comunidad activa que comparte y opina</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-primary text-white mb-2">Paso 04</span>
                        <h5 class="fw-bold text-white mb-2">VENTAS</h5>
                        <p class="text-white mb-0 small">Mensajes directos y prospectos calificados</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE SERVICES / ESTRATEGIA STRATEGY GRID -->
    <section id="estrategia" class="py-5" style="background: #090e1a;">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-gear-wide-connected me-1"></i> NUESTROS PILARES</span>
                <h2 class="section-title">Estrategia Integral para tus Redes Sociales</h2>
                <p class="text-white mx-auto" style="max-width: 700px;">
                    No hacemos publicaciones al azar. Creamos un plan estructurado acorde a la personalidad de tu negocio.
                </p>
            </div>

            <div class="row g-4">
                <!-- Pillars Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="smm-card">
                        <div class="icon-box"><i class="bi bi-lightbulb"></i></div>
                        <h4 class="fw-bold text-white mb-3">1. Estrategia & Identidad</h4>
                        <p class="text-white mb-3">Definimos el tono de voz, colores de marca y arquetipo de cliente ideal para comunicar con coherencia y autoridad.</p>
                        <ul class="list-unstyled text-white d-flex flex-column gap-2 mb-0">
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Análisis de competencia y sector</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Pilares de contenido mensuales</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Manual de identidad en redes</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillars Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="smm-card">
                        <div class="icon-box"><i class="bi bi-palette"></i></div>
                        <h4 class="fw-bold text-white mb-3">2. Diseño & Producción</h4>
                        <p class="text-white mb-3">Diseños atractivos, reels dinámicos y carruseles educativos adaptados a las tendencias actuales de cada plataforma.</p>
                        <ul class="list-unstyled text-white d-flex flex-column gap-2 mb-0">
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Videos Reels y TikToks de alto impacto</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Carruseles interactivos</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Historias con interacción</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillars Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="smm-card">
                        <div class="icon-box"><i class="bi bi-calendar-check"></i></div>
                        <h4 class="fw-bold text-white mb-3">3. Gestión & Publicación</h4>
                        <p class="text-white mb-3">Mantenemos tus perfiles activos en horarios de mayor tráfico con calendarios de contenido programados.</p>
                        <ul class="list-unstyled text-white d-flex flex-column gap-2 mb-0">
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Calendario mensual anticipado</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Copywriting persuasivo con hashtags</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Optimización de bio y enlaces</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillars Card 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="smm-card">
                        <div class="icon-box"><i class="bi bi-people"></i></div>
                        <h4 class="fw-bold text-white mb-3">4. Comunidad & Interacción</h4>
                        <p class="text-white mb-3">Fomentamos la conversación con tus seguidores, incrementando el engagement orgánico y el algoritmo a tu favor.</p>
                        <ul class="list-unstyled text-white d-flex flex-column gap-2 mb-0">
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Respuesta activa a preguntas</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Dinámicas, encuestas y stickers</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Fidelización de clientes</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillars Card 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="smm-card">
                        <div class="icon-box"><i class="bi bi-graph-up-arrow"></i></div>
                        <h4 class="fw-bold text-white mb-3">5. Campañas Publicitarias</h4>
                        <p class="text-white mb-3">Complementamos el contenido orgánico con Meta Ads para impulsar tus promociones directamente al público comprador.</p>
                        <ul class="list-unstyled text-white d-flex flex-column gap-2 mb-0">
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Segmentación geográfica precisa</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Anuncios orientados a WhatsApp</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Retargeting estratégico</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillars Card 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="smm-card">
                        <div class="icon-box"><i class="bi bi-pie-chart"></i></div>
                        <h4 class="fw-bold text-white mb-3">6. Reportes & Analítica</h4>
                        <p class="text-white mb-3">Evaluamos métricas reales de alcance, interacción y crecimiento para ajustar la estrategia en beneficio de tu inversión.</p>
                        <ul class="list-unstyled text-white d-flex flex-column gap-2 mb-0">
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Informes mensuales claros</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Métricas de rendimiento clave (KPIs)</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Propuestas de mejora continua</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FORMATS & CONTENT TYPES -->
    <section class="py-5 bg-dark border-top border-bottom border-secondary">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-film me-1"></i> FORMATOS DE IMPACTO</span>
                <h2 class="section-title">Contenido que Detiene el Scroll</h2>
                <p class="text-white mx-auto" style="max-width: 650px;">
                    Utilizamos diversidad de formatos diseñados estratégicamente para capturar la atención en segundos.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary" style="background: rgba(255,255,255,0.03);">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="p-3 bg-danger rounded-3 text-white fs-4"><i class="bi bi-camera-reels"></i></span>
                            <div>
                                <h5 class="fw-bold text-white mb-0">Reels & Videos Cortos</h5>
                                <span class="badge bg-danger">Máximo Alcance</span>
                            </div>
                        </div>
                        <p class="text-white mb-0">Videos dinámicos con tendencias, música en tendencia y guiones persuasivos que el algoritmo favorece.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary" style="background: rgba(255,255,255,0.03);">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="p-3 bg-primary rounded-3 text-white fs-4"><i class="bi bi-images"></i></span>
                            <div>
                                <h5 class="fw-bold text-white mb-0">Carruseles Educativos</h5>
                                <span class="badge bg-primary">Mayor Guardados</span>
                            </div>
                        </div>
                        <p class="text-white mb-0">Secuencias de imágenes informativas que transmiten autoridad y fomentan la interacción paso a paso.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary" style="background: rgba(255,255,255,0.03);">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="p-3 bg-warning text-dark rounded-3 fs-4"><i class="bi bi-lightning-charge"></i></span>
                            <div>
                                <h5 class="fw-bold text-white mb-0">Historias Diarias</h5>
                                <span class="badge bg-warning text-dark">Alta Conversión</span>
                            </div>
                        </div>
                        <p class="text-white mb-0">Contenido cercano, encuestas, enlaces directos a WhatsApp y novedades para mantener el contacto diario.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PLATFORMS WE MANAGE -->
    <section class="py-5" style="background: #0d1322;">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-share me-1"></i> COBERUTRA MULTICANAL</span>
                <h2 class="section-title">Canales donde tu Marca Debe Destacar</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="platform-card">
                        <i class="bi bi-facebook fs-1 text-primary mb-3"></i>
                        <h5 class="fw-bold text-white">Facebook</h5>
                        <p class="text-white small mb-0">Construye comunidad sólida y conecta con clientes locales.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="platform-card">
                        <i class="bi bi-instagram fs-1 text-danger mb-3"></i>
                        <h5 class="fw-bold text-white">Instagram</h5>
                        <p class="text-white small mb-0">Haz que tu marca entre por los ojos con estética impecable.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="platform-card">
                        <i class="bi bi-tiktok fs-1 text-white mb-3"></i>
                        <h5 class="fw-bold text-white">TikTok</h5>
                        <p class="text-white small mb-0">Convierte la creatividad en alcance masivo orgánico.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="platform-card">
                        <i class="bi bi-linkedin fs-1 text-info mb-3"></i>
                        <h5 class="fw-bold text-white">LinkedIn</h5>
                        <p class="text-white small mb-0">Construye autoridad B2B y presencia corporativa.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="platform-card">
                        <i class="bi bi-youtube fs-1 text-danger mb-3"></i>
                        <h5 class="fw-bold text-white">YouTube</h5>
                        <p class="text-white small mb-0">Cuenta historias profundas que duren más de unos segundos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENT PILLARS breakdown -->
    <section class="py-5" style="background: #080d19;">
        <div class="container py-4">
            <div class="row align-items-center gy-5">
                <div class="col-lg-5">
                    <span class="section-tag"><i class="bi bi-pie-chart-fill me-1"></i> MATRIZ DE CONTENIDOS</span>
                    <h2 class="section-title">Equilibrio Perfecto en tus Publicaciones</h2>
                    <p class="text-white mb-4">
                        Publicar solo ofertas cansa a la audiencia. Aplicamos una matriz equilibrada para educar, entretener, posicionar y vender en el momento oportuno.
                    </p>
                    <a href="https://wa.me/51935209781?text=Hola,%20deseo%20una%20propuesta%20para%20mis%20Redes%20Sociales" class="btn btn-contacto px-4 py-3 fw-bold">
                        <i class="bi bi-chat-left-text-fill me-2"></i> Solicitar Propuesta de Contenido
                    </a>
                </div>

                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="p-4 rounded-4 border border-secondary bg-black">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-journal-bookmark-fill text-info fs-4"></i>
                                    <h5 class="fw-bold text-white mb-0">1. Educar</h5>
                                </div>
                                <p class="text-white mb-0">Comparte conocimiento valioso y demuestra tu experiencia en el sector.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-4 rounded-4 border border-secondary bg-black">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-info-circle-fill text-warning fs-4"></i>
                                    <h5 class="fw-bold text-white mb-0">2. Informar</h5>
                                </div>
                                <p class="text-white mb-0">Presenta tus productos, servicios, horarios y novedades de forma clara.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-4 rounded-4 border border-secondary bg-black">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-people-fill text-success fs-4"></i>
                                    <h5 class="fw-bold text-white mb-0">3. Conectar</h5>
                                </div>
                                <p class="text-white mb-0">Muestra el lado humano de tu marca, tu equipo y el detrás de cámaras.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-4 rounded-4 border border-secondary bg-black">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-emoji-smile-fill text-danger fs-4"></i>
                                    <h5 class="fw-bold text-white mb-0">4. Entretener</h5>
                                </div>
                                <p class="text-white mb-0">Crea contenido ameno y tendencias que las personas deseen compartir.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-4 rounded-4 border border-secondary bg-black">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-cart-check-fill text-primary fs-4"></i>
                                    <h5 class="fw-bold text-white mb-0">5. Vender</h5>
                                </div>
                                <p class="text-white mb-0">Presenta tus productos con llamados a la acción que conviertan en ventas.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-4 rounded-4 border border-secondary bg-black">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-star-fill text-warning fs-4"></i>
                                    <h5 class="fw-bold text-white mb-0">6. Posicionar</h5>
                                </div>
                                <p class="text-white mb-0">Haz que las personas asocien instantáneamente tu marca con la solución que buscan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- METRICS & RESULTS -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-navy), #020617);">
        <div class="container py-4">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6">
                    <span class="section-tag text-warning border-warning"><i class="bi bi-bar-chart-line me-1"></i> MÉTRICAS QUE IMPORTAN</span>
                    <h2 class="section-title text-white">No Solo Likes, Resultados Medibles</h2>
                    <p class="text-white fs-5 mb-4">
                        Nos enfocamos en métricas que impactan directamente en el crecimiento de tu marca y tus ventas.
                    </p>
                    <div class="row g-3">
                        <div class="col-6"><div class="p-3 border border-secondary rounded-3 bg-black text-white"><i class="bi bi-check2-circle text-success me-2"></i> Alcance Real</div></div>
                        <div class="col-6"><div class="p-3 border border-secondary rounded-3 bg-black text-white"><i class="bi bi-check2-circle text-success me-2"></i> Impresiones</div></div>
                        <div class="col-6"><div class="p-3 border border-secondary rounded-3 bg-black text-white"><i class="bi bi-check2-circle text-success me-2"></i> Interacciones</div></div>
                        <div class="col-6"><div class="p-3 border border-secondary rounded-3 bg-black text-white"><i class="bi bi-check2-circle text-success me-2"></i> Seguidores Reales</div></div>
                        <div class="col-6"><div class="p-3 border border-secondary rounded-3 bg-black text-white"><i class="bi bi-check2-circle text-success me-2"></i> Reproducciones</div></div>
                        <div class="col-6"><div class="p-3 border border-secondary rounded-3 bg-black text-white"><i class="bi bi-check2-circle text-success me-2"></i> Clics y Mensajes</div></div>
                    </div>
                </div>

                <div class="col-lg-6 text-center">
                    <div class="p-5 rounded-4 border border-warning" style="background: rgba(0,0,0,0.6); backdrop-filter: blur(10px);">
                        <i class="bi bi-trophy text-warning display-1 mb-3"></i>
                        <h3 class="fw-bold text-white mb-2">Transforma tu Presencia Digital</h3>
                        <p class="text-white mb-4 fs-5">Permítenos gestionar tus redes para que puedas enfocarte en atender a tus nuevos clientes.</p>
                        <a href="https://wa.me/51935209781?text=Hola,%20necesito%20asesoria%20de%20Social%20Media%20Marketing" target="_blank" class="btn btn-contacto btn-lg w-100 fw-bold py-3 text-uppercase">
                            <i class="bi bi-whatsapp me-2"></i> Iniciar Asesoría en WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WORKFLOW PROCESS (7 STEPS) -->
    <section class="py-5 bg-dark">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-arrow-repeat me-1"></i> PROCESO PASO A PASO</span>
                <h2 class="section-title">Cómo Trabajamos Tu Marca</h2>
                <p class="text-white mx-auto" style="max-width: 650px;">
                    Un flujo organizado y transparente desde el primer día.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="badge bg-warning text-dark mb-2">Paso 01</div>
                        <h5 class="fw-bold text-white">1. Diagnóstico & Brief</h5>
                        <p class="text-white mb-0">Conocemos a fondo tu marca, público objetivo y metas comerciales.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="badge bg-info text-dark mb-2">Paso 02</div>
                        <h5 class="fw-bold text-white">2. Estrategia de Contenido</h5>
                        <p class="text-white mb-0">Creamos una estrategia de contenido mensual personalizada.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="badge bg-primary text-white mb-2">Paso 03</div>
                        <h5 class="fw-bold text-white">3. Diseño & Edición</h5>
                        <p class="text-white mb-0">Diseñamos piezas visuales, redactamos copy persuasivo y editamos videos.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="badge bg-success text-white mb-2">Paso 04</div>
                        <h5 class="fw-bold text-white">4. Programación</h5>
                        <p class="text-white mb-0">Mantenemos una presencia constante y profesional en tus redes.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="badge bg-danger text-white mb-2">Paso 05</div>
                        <h5 class="fw-bold text-white">5. Interacción con la Comunidad</h5>
                        <p class="text-white mb-0">Impulsamos la interacción constante con tu comunidad.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="badge bg-warning text-dark mb-2">Paso 06</div>
                        <h5 class="fw-bold text-white">6. Análisis de Métricas</h5>
                        <p class="text-white mb-0">Medimos resultados exactos y detectamos nuevas oportunidades.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- IDEAL FOR TARGET AUDIENCE -->
    <section class="py-5" style="background: #090e1a;">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-bullseye me-1"></i> PÚBLICO OBJETIVO</span>
                <h2 class="section-title">¿Para Quién es Ideal este Servicio?</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="p-4 rounded-4 border border-secondary bg-dark text-center h-100">
                        <i class="bi bi-shop fs-1 text-warning mb-3"></i>
                        <h6 class="fw-bold text-white">Negocios Locales</h6>
                        <small class="text-white d-block">Haz crecer tu presencia digital</small>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="p-4 rounded-4 border border-secondary bg-dark text-center h-100">
                        <i class="bi bi-bag-check fs-1 text-info mb-3"></i>
                        <h6 class="fw-bold text-white">E-Commerce / Tiendas</h6>
                        <small class="text-white d-block">Convierte seguidores en compradores</small>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="p-4 rounded-4 border border-secondary bg-dark text-center h-100">
                        <i class="bi bi-cup-hot fs-1 text-danger mb-3"></i>
                        <h6 class="fw-bold text-white">Restaurantes & Cafés</h6>
                        <small class="text-white d-block">Haz que tus platillos entren por los ojos</small>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="p-4 rounded-4 border border-secondary bg-dark text-center h-100">
                        <i class="bi bi-airplane fs-1 text-success mb-3"></i>
                        <h6 class="fw-bold text-white">Agencias de Turismo</h6>
                        <small class="text-white d-block">Inspira a tus próximos viajeros</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION BANNER -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-cyan), var(--primary-navy));">
        <div class="container text-center py-4">
            <span class="badge bg-warning text-dark text-uppercase px-3 py-2 mb-3 fw-bold">¿Listo para encender tus Redes?</span>
            <h2 class="display-5 fw-extrabold text-white mb-3">Haz que tu Marca Sobresalga en el Feed</h2>
            <p class="fs-5 text-white max-w-700 mx-auto mb-4">
                Déjanos ayudarte a transmitir el verdadero valor de tu empresa con contenidos profesionales y llamativos.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20cotizar%20Social%20Media%20Marketing" target="_blank" class="btn btn-warning btn-lg px-5 py-3 fw-bold rounded-pill text-dark text-uppercase shadow">
                    <i class="bi bi-whatsapp me-2"></i> Cotizar Servicio por WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20deseo%20información%20sobre%20Social%20Media%20Marketing" class="whatsapp-float" target="_blank" title="Contactar por WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- FOOTER -->
    <footer class="py-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <a class="navbar-brand d-flex align-items-center gap-2 mb-3" href="#">
                        <i class="bi bi-fire text-warning fs-3"></i>
                        <span class="text-white fw-extrabold fs-4">CANDELAWEB</span>
                    </a>
                    <p class="text-white">
                        Desarrollamos soluciones digitales que transforman negocios: Páginas Web, Tiendas Online, Apps Móviles, Google Ads y Social Media Marketing en Cusco y todo el Perú.
                    </p>
                </div>

                <div class="col-lg-2 col-md-4">
                    <h6 class="fw-bold text-warning mb-3 text-uppercase">Navegación</h6>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="https://www.todowebcusco.com/">Inicio</a></li>
                        <li><a href="https://www.todowebcusco.com/paginas-web/">Página Web</a></li>
                        <li><a href="https://www.todowebcusco.com/tiendas-virtuales/">Tiendas Virtuales</a></li>
                        <li><a href="https://www.todowebcusco.com/desarrollo-de-apps/">Desarrollo de Apps</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4">
                    <h6 class="fw-bold text-warning mb-3 text-uppercase">Servicios Digitales</h6>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="https://www.todowebcusco.com/anuncios-en-google/">Anuncios en Google</a></li>
                        <li><a href="https://www.todowebcusco.com/social-media-marketing/">Social Media Marketing</a></li>
                        <li><a href="https://www.todowebcusco.com/posicionamiento-web-seo/">Posicionamiento Web (SEO)</a></li>
                        <li><a href="https://www.todowebcusco.com/marketing-digital/">Marketing Digital</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4">
                    <h6 class="fw-bold text-warning mb-3 text-uppercase">Contacto</h6>
                    <p class="text-white mb-2"><i class="bi bi-geo-alt-fill text-warning me-2"></i> Cusco, Perú</p>
                    <p class="text-white mb-2"><i class="bi bi-telephone-fill text-warning me-2"></i> +51 935 209 781</p>
                    <p class="text-white mb-3"><i class="bi bi-envelope-fill text-warning me-2"></i> adminweb@todowebcusco.com</p>
                    <div class="social-icons">
                        <a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://tiktok.com" target="_blank"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>
            </div>

            <hr class="my-4 border-secondary">

            <div class="text-center">
                <p class="mb-0 text-white">&copy; <?php echo date('Y'); ?> CANDELAWEB / Todo Web Cusco. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
