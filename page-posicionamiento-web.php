<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posicionamiento Web (SEO) | CANDELAWEB - Todo Web Cusco</title>
    <meta name="description" content="Haz que Google y tus clientes te encuentren. Posicionamiento Web (SEO) en Cusco y Perú. SEO técnico, investigación de palabras clave, contenido de valor y SEO local.">

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

        /* Hero Concept Animated Box */
        .hero-seo-flow {
            background: rgba(13, 19, 34, 0.9);
            border: 2px solid var(--primary-yellow);
            border-radius: 20px;
            backdrop-filter: blur(12px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.6);
            padding: 30px;
        }
        .flow-node {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            padding: 12px 20px;
            text-align: center;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .flow-node:hover {
            border-color: var(--primary-cyan);
            background: rgba(0, 167, 250, 0.15);
            transform: scale(1.02);
        }
        .flow-arrow-down {
            text-align: center;
            color: var(--primary-yellow);
            font-size: 1.4rem;
            margin: 4px 0;
        }

        /* Service & Benefit Cards */
        .seo-card {
            background: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 16px;
            padding: 28px;
            height: 100%;
            transition: all 0.35s ease;
            box-shadow: 0 8px 24px rgba(0,0,0,0.3);
        }
        .seo-card:hover {
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

        /* SEO vs Ads Matrix */
        .comparison-table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
        .comparison-table th {
            background-color: var(--primary-navy);
            color: #ffffff;
            padding: 18px;
            font-weight: 700;
        }
        .comparison-table td {
            background-color: var(--dark-card);
            color: #ffffff;
            padding: 16px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* Force Crisp White Text */
        p, span, small, label, div, li {
            color: #ffffff;
        }
        .text-white-sub {
            color: #ffffff !important;
            opacity: 0.95;
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
                            <li><a class="dropdown-item" href="https://www.todowebcusco.com/social-media-marketing/"><i class="bi bi-share me-2 text-info"></i>Social Media Marketing</a></li>
                            <li><a class="dropdown-item active" href="https://www.todowebcusco.com/posicionamiento-web-seo/"><i class="bi bi-search me-2 text-warning"></i>Posicionamiento Web (SEO)</a></li>
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
                    <span class="section-tag animate__animated animate__fadeInDown"><i class="bi bi-search me-1"></i> POSICIONAMIENTO WEB (SEO)</span>
                    <h1 class="display-4 fw-extrabold text-white mb-3 leading-tight animate__animated animate__fadeInLeft">
                        Haz que Google te encuentre.<br>
                        <span style="color: var(--primary-yellow); background: linear-gradient(90deg, #c4ae04, #00a7fa); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Haz que tus clientes te elijan.</span>
                    </h1>
                    <p class="fs-5 text-white-sub mb-4" style="line-height: 1.7;">
                        Tener una página web es solo el comienzo. Si tus clientes no logran encontrarte en Google cuando buscan tus servicios, estás perdiendo oportunidades reales cada día.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20posicionar%20mi%20P%C3%A1gina%20Web%20en%20Google" target="_blank" class="btn btn-contacto px-4 py-3 text-uppercase fw-bold">
                            <i class="bi bi-rocket-takeoff-fill me-2"></i> Quiero Posicionar mi Web
                        </a>
                        <a href="#como-funciona" class="btn btn-outline-light rounded-pill px-4 py-3 fw-bold">
                            <i class="bi bi-info-circle me-2"></i> ¿Cómo Funciona?
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-seo-flow animate__animated animate__fadeInRight">
                        <div class="text-center mb-4">
                            <span class="badge bg-warning text-dark text-uppercase px-3 py-2 fw-bold">CONCEPTO CREATIVO HERO</span>
                            <h3 class="fw-bold text-white mt-2">TU CLIENTE ESTÁ BUSCANDO.<br>¿TU WEB APARECE?</h3>
                        </div>

                        <div class="flow-node text-white"><i class="bi bi-person-circle text-info me-2"></i> 👤 CLIENTE POTENCIAL</div>
                        <div class="flow-arrow-down"><i class="bi bi-arrow-down-short"></i></div>

                        <div class="flow-node text-white"><i class="bi bi-search text-warning me-2"></i> 🔎 "buscando tu servicio en Cusco..."</div>
                        <div class="flow-arrow-down"><i class="bi bi-arrow-down-short"></i></div>

                        <div class="flow-node text-white"><i class="bi bi-google text-primary me-2"></i> 🌐 BÚSQUEDA EN GOOGLE</div>
                        <div class="flow-arrow-down"><i class="bi bi-arrow-down-short"></i></div>

                        <div class="flow-node border-danger text-white"><i class="bi bi-question-circle-fill text-danger me-2"></i> ¿DÓNDE ESTÁ TU NEGOCIO?</div>
                        <div class="flow-arrow-down"><i class="bi bi-arrow-down-short"></i></div>

                        <div class="flow-node border-success bg-success bg-opacity-20 text-white fw-bold">
                            <i class="bi bi-fire text-warning fs-5 me-2"></i> 🔥 CON CANDELAWEB: ¡AQUÍ ESTÁ TU NEGOCIO!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INVISIBLE TO FOUND SECTION -->
    <section id="como-funciona" class="py-5 bg-dark">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-eye me-1"></i> VISIBILIDAD GARANTIZADA</span>
                <h2 class="section-title">De Ser Invisible a Ser Encontrado</h2>
                <p class="text-white max-w-700 mx-auto">
                    Imagina que un cliente potencial toma su teléfono y busca en Google exactamente lo que tú vendes:
                </p>
            </div>

            <div class="row g-3 justify-content-center mb-5">
                <div class="col-md-4 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black text-center">
                        <i class="bi bi-search text-warning fs-4 mb-2 d-block"></i>
                        <span class="fw-bold text-white">“agencia de viajes en Cusco”</span>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black text-center">
                        <i class="bi bi-search text-info fs-4 mb-2 d-block"></i>
                        <span class="fw-bold text-white">“diseño de páginas web en Perú”</span>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black text-center">
                        <i class="bi bi-search text-success fs-4 mb-2 d-block"></i>
                        <span class="fw-bold text-white">“comprar joyas online”</span>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black text-center">
                        <i class="bi bi-search text-danger fs-4 mb-2 d-block"></i>
                        <span class="fw-bold text-white">“restaurante en Cusco”</span>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black text-center">
                        <i class="bi bi-search text-primary fs-4 mb-2 d-block"></i>
                        <span class="fw-bold text-white">“sistemas web para empresas”</span>
                    </div>
                </div>
            </div>

            <div class="p-4 rounded-4 border border-warning bg-black text-center max-w-700 mx-auto">
                <h4 class="fw-bold text-warning mb-2">¿Aparece tu negocio en los primeros resultados?</h4>
                <p class="text-white mb-0 fs-5">
                    Si la respuesta es <strong>NO</strong>, estás perdiendo clientes todos los días frente a tu competencia. En CANDELAWEB cambiamos eso.
                </p>
            </div>
        </div>
    </section>

    <!-- WHAT IS SEO DIAGRAM -->
    <section class="py-5" style="background: #090e1a;">
        <div class="container py-4">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6">
                    <span class="section-tag"><i class="bi bi-brain me-1"></i> DEFINICIÓN CLARA</span>
                    <h2 class="section-title">¿Qué es el SEO?</h2>
                    <p class="text-white fs-5 fw-bold mb-3">SEO = Search Engine Optimization (Optimización para Motores de Búsqueda)</p>
                    <p class="text-white mb-4" style="line-height: 1.8;">
                        En palabras sencillas: hacemos que tu página sea <strong>más fácil de entender para Google</strong> y <strong>más útil para tus visitantes reales</strong>. Trabajar SEO significa optimizar la estructura, velocidad y contenido para destacar sin pagar por cada clic.
                    </p>
                    <div class="p-3 rounded-3 border border-secondary bg-black">
                        <i class="bi bi-fire text-warning fs-3 me-2"></i>
                        <span class="fw-bold text-white">"No se trata solo de estar en Google. Se trata de aparecer exactamente cuando importa."</span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="p-4 rounded-4 border border-info bg-black text-center">
                        <h4 class="fw-bold text-info mb-4">El Flujo del Posicionamiento Exitoso</h4>
                        <div class="d-flex flex-column gap-2">
                            <div class="p-3 bg-dark rounded-3 border border-secondary text-white fw-bold">🌐 TU PÁGINA WEB</div>
                            <i class="bi bi-arrow-down-short text-warning fs-3"></i>
                            <div class="p-3 bg-primary rounded-3 text-white fw-bold">🔎 OPTIMIZACIÓN SEO</div>
                            <i class="bi bi-arrow-down-short text-warning fs-3"></i>
                            <div class="p-3 bg-dark rounded-3 border border-secondary text-white fw-bold">🤖 GOOGLE ENTIENDE TU SITIO</div>
                            <i class="bi bi-arrow-down-short text-warning fs-3"></i>
                            <div class="p-3 bg-info text-dark rounded-3 fw-bold">👀 MÁS VISIBILIDAD ORGANICA</div>
                            <i class="bi bi-arrow-down-short text-warning fs-3"></i>
                            <div class="p-3 bg-success rounded-3 text-white fw-bold">💬 MÁS OPORTUNIDADES DE VENTA</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT WE WORK ON (6 PILLARS) -->
    <section class="py-5 bg-dark">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-tools me-1"></i> METODOLOGÍA COMPLETA</span>
                <h2 class="section-title">¿Qué Trabajamos en tu Proyecto SEO?</h2>
                <p class="text-white mx-auto" style="max-width: 650px;">
                    Abordamos todos los aspectos necesarios para posicionar tu web de forma ética, sólida y duradera.
                </p>
            </div>

            <div class="row g-4">
                <!-- Pillar 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="seo-card">
                        <div class="icon-box"><i class="bi bi-key-fill"></i></div>
                        <h4 class="fw-bold text-white mb-3">01. Palabras Clave</h4>
                        <p class="text-white mb-3">Investigamos qué buscan exactamente tus clientes ideales. No adivinamos, analizamos datos reales de búsqueda.</p>
                        <ul class="list-unstyled text-white d-flex flex-column gap-2 mb-0">
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Intención de búsqueda del usuario</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Búsquedas locales específicas</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Análisis de la competencia directa</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="seo-card">
                        <div class="icon-box"><i class="bi bi-code-slash"></i></div>
                        <h4 class="fw-bold text-white mb-3">02. SEO Técnico</h4>
                        <p class="text-white mb-3">Optimizamos la estructura interna para que los robots de Google rastreen e indexen tu sitio sin obstáculos.</p>
                        <ul class="list-unstyled text-white d-flex flex-column gap-2 mb-0">
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Estructura de URLs y Sitemap XML</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Velocidad de carga y Core Web Vitals</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Adaptación 100% Móvil (Responsive)</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="seo-card">
                        <div class="icon-box"><i class="bi bi-file-earmark-text"></i></div>
                        <h4 class="fw-bold text-white mb-3">03. Contenido de Valor</h4>
                        <p class="text-white mb-3">Optimizamos títulos, metas y textos pensando tanto en el algoritmo de Google como en personas reales.</p>
                        <ul class="list-unstyled text-white d-flex flex-column gap-2 mb-0">
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Títulos (H1, H2, H3) y descripciones</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Optimización de imágenes (ALT tags)</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Textos enfocados en resolver dudas</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="seo-card">
                        <div class="icon-box"><i class="bi bi-geo-alt-fill"></i></div>
                        <h4 class="fw-bold text-white mb-3">04. SEO Local</h4>
                        <p class="text-white mb-3">Captura clientes en Cusco, Lima, Arequipa u otra ciudad cuando busquen servicios "cerca de mí".</p>
                        <ul class="list-unstyled text-white d-flex flex-column gap-2 mb-0">
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Optimización de Google Business Profile</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Búsquedas geolocalizadas clave</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Reseñas y citas locales</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="seo-card">
                        <div class="icon-box"><i class="bi bi-link-45deg"></i></div>
                        <h4 class="fw-bold text-white mb-3">05. Autoridad y Enlaces</h4>
                        <p class="text-white mb-3">Fortalecemos la relevancia digital de tu sitio mediante menciones y enlaces de calidad que inspiren confianza.</p>
                        <ul class="list-unstyled text-white d-flex flex-column gap-2 mb-0">
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Estrategia de enlaces internos y externos</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Construcción de reputación web</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Aumento del Domain Authority</li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="seo-card">
                        <div class="icon-box"><i class="bi bi-arrow-repeat"></i></div>
                        <h4 class="fw-bold text-white mb-3">06. Análisis y Mejora</h4>
                        <p class="text-white mb-3">El SEO es un proceso continuo. Analizamos datos con Google Analytics y Search Console para ajustar constantemente.</p>
                        <ul class="list-unstyled text-white d-flex flex-column gap-2 mb-0">
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Monitoreo mensual de posiciones</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Informes de tráfico orgánico real</li>
                            <li><i class="bi bi-check2-circle text-warning me-2"></i>Optimización continua de resultados</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO VS GOOGLE ADS COMPARISON -->
    <section class="py-5" style="background: #090e1a;">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-sliders me-1"></i> COMPARATIVA CLAVE</span>
                <h2 class="section-title">SEO vs. Publicidad (Google Ads)</h2>
                <p class="text-white max-w-700 mx-auto">
                    Ambas herramientas son potentes. Conoce sus diferencias para elegir la combinación ideal para tu empresa.
                </p>
            </div>

            <div class="table-responsive mb-4">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th style="width: 25%;">Característica</th>
                            <th style="width: 37.5%; background: var(--primary-navy);"><i class="bi bi-megaphone me-2"></i> Google Ads (SEM)</th>
                            <th style="width: 37.5%; background: var(--primary-green);"><i class="bi bi-search me-2"></i> Posicionamiento SEO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold text-warning">Pago por Clic</td>
                            <td>Pagas por cada visita recibida.</td>
                            <td>Visitas orgánicas 100% gratuitas.</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-warning">Velocidad de Resultados</td>
                            <td>Genera tráfico inmediato al activar la campaña.</td>
                            <td>Progresivo, requiere tiempo y optimización constante.</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-warning">Duración del Impacto</td>
                            <td>Desaparece al detener el presupuesto.</td>
                            <td>Sostenible a largo plazo sin pago recurrente por clic.</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-warning">Estrategia Ideal</td>
                            <td>Perfecto para promociones y captación inmediata.</td>
                            <td>Construye la autoridad principal de tu marca.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="p-4 rounded-4 border border-info bg-black text-center">
                <h4 class="fw-bold text-info mb-2"><i class="bi bi-rocket-fill text-warning me-2"></i> LA MEJOR ESTRATEGIA INTEGRAL</h4>
                <p class="text-white mb-0 fs-5">
                    <strong>SEO + Google Ads + Página Web Optimizada</strong> = Visibilidad inmediata HOY + crecimiento orgánico sólido a LARGO PLAZO.
                </p>
            </div>
        </div>
    </section>

    <!-- THE SEO JOURNEY (6 STEPS) -->
    <section class="py-5 bg-dark border-top border-bottom border-secondary">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-map me-1"></i> EL VIAJE DEL SEO</span>
                <h2 class="section-title">Nuestro Proceso de Trabajo</h2>
            </div>

            <div class="row g-4 text-center">
                <div class="col-md-2 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-warning text-dark mb-2">01</span>
                        <h6 class="fw-bold text-white mb-1">DESCUBRIR</h6>
                        <small class="text-white">Encontramos oportunidades</small>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-info text-dark mb-2">02</span>
                        <h6 class="fw-bold text-white mb-1">OPTIMIZAR</h6>
                        <small class="text-white">Mejoramos tu página</small>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-primary text-white mb-2">03</span>
                        <h6 class="fw-bold text-white mb-1">CREAR</h6>
                        <small class="text-white">Desarrollamos contenido</small>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-success text-white mb-2">04</span>
                        <h6 class="fw-bold text-white mb-1">POSICIONAR</h6>
                        <small class="text-white">Aumentamos visibilidad</small>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-danger text-white mb-2">05</span>
                        <h6 class="fw-bold text-white mb-1">MEDIR</h6>
                        <small class="text-white">Analizamos resultados</small>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-warning text-dark mb-2">06</span>
                        <h6 class="fw-bold text-white mb-1">CRECER</h6>
                        <small class="text-white">Aceleramos tu negocio</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPECTED RESULTS -->
    <section class="py-5" style="background: #090e1a;">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-trophy-fill me-1"></i> BENEFICIOS CLARO</span>
                <h2 class="section-title">¿Qué Vas a Conseguir con CANDELAWEB?</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <i class="bi bi-eye-fill fs-2 text-warning mb-3 d-block"></i>
                        <h5 class="fw-bold text-white">👀 Más Visibilidad</h5>
                        <p class="text-white mb-0">Haz que más personas conozcan tu marca en los momentos exactos en que buscan tus servicios.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <i class="bi bi-graph-up-arrow fs-2 text-info mb-3 d-block"></i>
                        <h5 class="fw-bold text-white">🌐 Más Tráfico Orgánico</h5>
                        <p class="text-white mb-0">Atrae un flujo constante de visitantes cualificados desde Google sin depender exclusivamente de anuncios.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <i class="bi bi-bullseye fs-2 text-success mb-3 d-block"></i>
                        <h5 class="fw-bold text-white">🎯 Tráfico Relevante</h5>
                        <p class="text-white mb-0">Llega directamente a prospectos con intención de compra real en tu ciudad o país.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <i class="bi bi-award-fill fs-2 text-primary mb-3 d-block"></i>
                        <h5 class="fw-bold text-white">🏆 Mayor Presencia Digital</h5>
                        <p class="text-white mb-0">Construye una presencia online sólida que inspire confianza y supere a tu competencia local.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <i class="bi bi-chat-dots-fill fs-2 text-danger mb-3 d-block"></i>
                        <h5 class="fw-bold text-white">💬 Más Oportunidades</h5>
                        <p class="text-white mb-0">Convierte visitas en consultas directas, mensajes de WhatsApp, llamadas y ventas concretas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION BANNER -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-cyan), var(--primary-navy));">
        <div class="container text-center py-4">
            <span class="badge bg-warning text-dark text-uppercase px-3 py-2 mb-3 fw-bold">⭐ Si no te encuentran, no pueden elegirte ⭐</span>
            <h2 class="display-5 fw-extrabold text-white mb-3">Tu Página Web Merece Ser Encontrada</h2>
            <p class="fs-5 text-white max-w-700 mx-auto mb-4">
                No escondas tu negocio en Internet. Hagamos que tu empresa aparezca donde tus clientes están buscando.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20deseo%20una%20auditoria%20SEO%20para%20mi%20p%C3%A1gina%20web" target="_blank" class="btn btn-warning btn-lg px-5 py-3 fw-bold rounded-pill text-dark text-uppercase shadow">
                    <i class="bi bi-whatsapp me-2"></i> Solicitar Auditoría SEO por WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20deseo%20informaci%C3%B3n%20sobre%20Posicionamiento%20Web%20SEO" class="whatsapp-float" target="_blank" title="Contactar por WhatsApp">
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
                        Desarrollamos soluciones digitales que transforman negocios: Páginas Web, Tiendas Online, Apps Móviles, Google Ads y Posicionamiento SEO en Cusco y todo el Perú.
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
