<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Digital Integral | CANDELAWEB - Todo Web Cusco</title>
    <meta name="description" content="Estrategias de Marketing Digital en Cusco y Perú. Tu ecosistema digital completo: Página Web, SEO, Google Ads, Social Media y Analítica. Del clic al cliente.">

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
        .hero-flow-card {
            background: rgba(13, 19, 34, 0.9);
            border: 2px solid var(--primary-cyan);
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
            border-color: var(--primary-yellow);
            background: rgba(196, 174, 4, 0.15);
            transform: scale(1.02);
        }
        .flow-arrow {
            text-align: center;
            color: var(--primary-yellow);
            font-size: 1.3rem;
            margin: 2px 0;
        }

        /* Service Cards */
        .marketing-card {
            background: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 16px;
            padding: 28px;
            height: 100%;
            transition: all 0.35s ease;
            box-shadow: 0 8px 24px rgba(0,0,0,0.3);
        }
        .marketing-card:hover {
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
                            <li><a class="dropdown-item" href="https://www.todowebcusco.com/posicionamiento-web-seo/"><i class="bi bi-search me-2 text-warning"></i>Posicionamiento Web (SEO)</a></li>
                            <li><a class="dropdown-item active" href="https://www.todowebcusco.com/marketing-digital/"><i class="bi bi-megaphone me-2 text-success"></i>Marketing Digital Integral</a></li>
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
                    <span class="section-tag animate__animated animate__fadeInDown"><i class="bi bi-megaphone me-1"></i> MARKETING DIGITAL INTEGRAL</span>
                    <h1 class="display-4 fw-extrabold text-white mb-3 leading-tight animate__animated animate__fadeInLeft">
                        No se trata solo de estar en Internet.<br>
                        <span style="color: var(--primary-yellow); background: linear-gradient(90deg, #c4ae04, #00a7fa); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Se trata de hacer que Internet trabaje para ti.</span>
                    </h1>
                    <p class="fs-5 text-white-sub mb-4" style="line-height: 1.7;">
                        Hoy tus clientes buscan, comparan, preguntan, miran redes sociales y compran desde Internet. Conectamos tu marca con las personas correctas en los canales adecuados.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20impulsar%20mi%20negocio%20con%20Marketing%20Digital" target="_blank" class="btn btn-contacto px-4 py-3 text-uppercase fw-bold">
                            <i class="bi bi-fire me-2"></i> Quiero Impulsar mi Negocio
                        </a>
                        <a href="#ecosistema" class="btn btn-outline-light rounded-pill px-4 py-3 fw-bold">
                            <i class="bi bi-diagram-3 me-2"></i> Ver Ecosistema Digital
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-flow-card animate__animated animate__fadeInRight">
                        <div class="text-center mb-4">
                            <span class="badge bg-warning text-dark text-uppercase px-3 py-2 fw-bold">CONCEPTO CREATIVO CANDELAWEB</span>
                            <h3 class="fw-bold text-white mt-2">TU NEGOCIO YA ESTÁ EN INTERNET.<br>AHORA HAGAMOS QUE SUCEDAN COSAS.</h3>
                        </div>

                        <div class="flow-node text-white"><i class="bi bi-eye-fill text-info me-2"></i> 👀 01 — ATENCIÓN</div>
                        <div class="flow-arrow"><i class="bi bi-chevron-down"></i></div>

                        <div class="flow-node text-white"><i class="bi bi-heart-fill text-danger me-2"></i> ❤️ 02 — INTERÉS</div>
                        <div class="flow-arrow"><i class="bi bi-chevron-down"></i></div>

                        <div class="flow-node text-white"><i class="bi bi-search text-warning me-2"></i> 🔎 03 — BÚSQUEDA</div>
                        <div class="flow-arrow"><i class="bi bi-chevron-down"></i></div>

                        <div class="flow-node text-white"><i class="bi bi-chat-dots-fill text-primary me-2"></i> 💬 04 — CONTACTO</div>
                        <div class="flow-arrow"><i class="bi bi-chevron-down"></i></div>

                        <div class="flow-node border-success bg-success bg-opacity-20 text-white fw-bold">
                            <i class="bi bi-cart-check-fill text-success fs-5 me-2"></i> 🛒 05 — CONVERSIÓN
                        </div>
                        <div class="flow-arrow"><i class="bi bi-chevron-down"></i></div>

                        <div class="flow-node border-warning bg-warning bg-opacity-20 text-white fw-bold">
                            <i class="bi bi-graph-up-arrow text-warning fs-5 me-2"></i> 📈 06 — CRECIMIENTO SOSTENIBLE
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ARCHITECTURAL FLOWCHART: DE UNA IDEA A UNA ESTRATEGIA -->
    <section id="ecosistema" class="py-5 bg-dark">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-diagram-3-fill me-1"></i> ARQUITECTURA INTEGRAL</span>
                <h2 class="section-title">De una Idea a una Estrategia Digital</h2>
                <p class="text-white max-w-700 mx-auto">
                    El Marketing Digital no es solo publicar en Facebook. Es construir un ecosistema donde cada herramienta cumple un rol preciso.
                </p>
            </div>

            <!-- Ecosistema Visual Diagram -->
            <div class="p-4 rounded-4 border border-info bg-black text-center max-w-900 mx-auto">
                <div class="d-inline-block p-3 rounded-3 bg-warning text-dark fw-bold mb-4 fs-5">
                    💡 TU NEGOCIO
                </div>
                <div class="text-warning fs-3 mb-2"><i class="bi bi-arrow-down-circle-fill"></i></div>
                <div class="d-inline-block p-3 rounded-3 bg-primary text-white fw-bold mb-4 fs-5">
                    🎯 ESTRATEGIA DIGITAL INTEGRAL
                </div>

                <div class="row g-3 my-3">
                    <div class="col-md-4">
                        <div class="p-3 rounded-3 border border-secondary bg-dark text-white fw-bold">
                            🌐 PÁGINA WEB<br><small class="text-info">Tu Casa Digital</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 rounded-3 border border-secondary bg-dark text-white fw-bold">
                            📱 REDES SOCIALES<br><small class="text-info">Atención y Comunidad</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 rounded-3 border border-secondary bg-dark text-white fw-bold">
                            🔎 POSICIONAMIENTO SEO<br><small class="text-info">Tráfico Orgánico</small>
                        </div>
                    </div>
                </div>

                <div class="text-warning fs-3 my-2"><i class="bi bi-arrow-down-circle-fill"></i></div>

                <div class="row g-3 justify-content-center">
                    <div class="col-md-3 col-6"><div class="p-2 bg-dark rounded border border-secondary text-white">📢 PUBLICIDAD</div></div>
                    <div class="col-md-3 col-6"><div class="p-2 bg-dark rounded border border-secondary text-white">👀 VISITAS</div></div>
                    <div class="col-md-3 col-6"><div class="p-2 bg-dark rounded border border-secondary text-white">💬 CONTACTOS</div></div>
                    <div class="col-md-3 col-6"><div class="p-2 bg-success rounded border border-success text-white fw-bold">🛒 VENTAS</div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE CHANNELS OF THE ECOSYSTEM (6 CARDS) -->
    <section class="py-5" style="background: #090e1a;">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-grid-3x3-gap-fill me-1"></i> TU ECOSISTEMA DIGITAL</span>
                <h2 class="section-title">Una Estrategia. Diferentes Canales.</h2>
            </div>

            <div class="row g-4">
                <!-- Channel 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="marketing-card">
                        <div class="icon-box"><i class="bi bi-globe"></i></div>
                        <h4 class="fw-bold text-white mb-2">Página Web</h4>
                        <span class="badge bg-primary mb-3">Tu Casa Digital</span>
                        <p class="text-white mb-3">Presenta tu empresa, servicios y productos con un diseño profesional optimizado para convertir visitas en clientes.</p>
                        <p class="text-warning fw-bold mb-0">Diseño + Tecnología + Conversión</p>
                    </div>
                </div>

                <!-- Channel 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="marketing-card">
                        <div class="icon-box"><i class="bi bi-search"></i></div>
                        <h4 class="fw-bold text-white mb-2">Posicionamiento Web</h4>
                        <span class="badge bg-success mb-3">Tráfico Orgánico</span>
                        <p class="text-white mb-3">Haz que las personas puedan encontrarte fácilmente cuando buscan tus servicios en Google.</p>
                        <p class="text-warning fw-bold mb-0">SEO + Contenido + Visibilidad</p>
                    </div>
                </div>

                <!-- Channel 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="marketing-card">
                        <div class="icon-box"><i class="bi bi-megaphone"></i></div>
                        <h4 class="fw-bold text-white mb-2">Google Ads</h4>
                        <span class="badge bg-warning text-dark mb-3">Captación Inmediata</span>
                        <p class="text-white mb-3">Aparece frente a personas que ya están buscando comprar exactamente lo que tu negocio ofrece.</p>
                        <p class="text-warning fw-bold mb-0">Búsqueda + Anuncios + Oportunidades</p>
                    </div>
                </div>

                <!-- Channel 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="marketing-card">
                        <div class="icon-box"><i class="bi bi-share"></i></div>
                        <h4 class="fw-bold text-white mb-2">Social Media Marketing</h4>
                        <span class="badge bg-info text-dark mb-3">Comunidad y Engagement</span>
                        <p class="text-white mb-3">Construye comunidad activa, comunica la propuesta de valor de tu marca y genera conversación real.</p>
                        <p class="text-warning fw-bold mb-0">Contenido + Creatividad + Comunidad</p>
                    </div>
                </div>

                <!-- Channel 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="marketing-card">
                        <div class="icon-box"><i class="bi bi-journal-text"></i></div>
                        <h4 class="fw-bold text-white mb-2">Marketing de Contenidos</h4>
                        <span class="badge bg-danger mb-3">Autoridad de Marca</span>
                        <p class="text-white mb-3">Crea artículos, guías y recursos que informen, eduquen, entretengan y generen confianza duradera.</p>
                        <p class="text-warning fw-bold mb-0">Contenido + Valor + Autoridad</p>
                    </div>
                </div>

                <!-- Channel 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="marketing-card">
                        <div class="icon-box"><i class="bi bi-graph-up"></i></div>
                        <h4 class="fw-bold text-white mb-2">Analítica Digital</h4>
                        <span class="badge bg-secondary mb-3">Medición Exacta</span>
                        <p class="text-white mb-3">Mide lo que ocurre en cada canal y utiliza datos exactos para tomar decisiones inteligentes de optimización.</p>
                        <p class="text-warning fw-bold mb-0">Datos + Análisis + Optimización</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CUSTOMER DIGITAL JOURNEY -->
    <section class="py-5 bg-dark">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-compass me-1"></i> EL VIAJE DEL CLIENTE</span>
                <h2 class="section-title">El Viaje Digital de tu Cliente</h2>
                <p class="text-white max-w-700 mx-auto">
                    Acompañamos a tu prospecto en cada etapa de decisión desde el primer contacto hasta la fidelización.
                </p>
            </div>

            <div class="row g-3 text-center mb-4">
                <div class="col-md-2 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-warning text-dark mb-2">01</span>
                        <h6 class="fw-bold text-white mb-1">TE DESCUBRE</h6>
                        <small class="text-white">Anuncio, SEO o redes</small>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-info text-dark mb-2">02</span>
                        <h6 class="fw-bold text-white mb-1">TE INVESTIGA</h6>
                        <small class="text-white">Visita tu web y perfiles</small>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-danger text-white mb-2">03</span>
                        <h6 class="fw-bold text-white mb-1">CONFIANZA</h6>
                        <small class="text-white">Ve información clara</small>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-primary text-white mb-2">04</span>
                        <h6 class="fw-bold text-white mb-1">TE CONTACTA</h6>
                        <small class="text-white">WhatsApp o llamada</small>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-success text-white mb-2">05</span>
                        <h6 class="fw-bold text-white mb-1">COMPRA</h6>
                        <small class="text-white">Se convierte en cliente</small>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="p-3 rounded-4 border border-secondary bg-black h-100">
                        <span class="badge bg-warning text-dark mb-2">06</span>
                        <h6 class="fw-bold text-white mb-1">REGRESA</h6>
                        <small class="text-white">Cliente recurrente</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CREATIVITY + STRATEGY + TECHNOLOGY -->
    <section class="py-5" style="background: #090e1a;">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-cpu me-1"></i> NUESTRO ADN</span>
                <h2 class="section-title">Creatividad + Estrategia + Tecnología</h2>
                <p class="text-white max-w-700 mx-auto">
                    Los tres pilares indispensables que garantizan el éxito de nuestras estrategias digitales.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-warning bg-black h-100 text-center">
                        <i class="bi bi-palette-fill fs-1 text-warning mb-3 d-block"></i>
                        <h4 class="fw-bold text-white">🎨 CREATIVIDAD</h4>
                        <p class="text-white mb-0">Creamos piezas e ideas disruptivas que atraen y capturan miradas al instante.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-info bg-black h-100 text-center">
                        <i class="bi bi-compass-fill fs-1 text-info mb-3 d-block"></i>
                        <h4 class="fw-bold text-white">🧠 ESTRATEGIA</h4>
                        <p class="text-white mb-0">Definimos objetivos claros hacia dónde llevar cada acción comercial.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-success bg-black h-100 text-center">
                        <i class="bi bi-laptop-fill fs-1 text-success mb-3 d-block"></i>
                        <h4 class="fw-bold text-white">💻 TECNOLOGÍA</h4>
                        <p class="text-white mb-0">Utilizamos software y herramientas actuales para ejecutar, medir y optimizar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- METRICS THAT MATTER ("NO SOLO ME GUSTA") -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-navy), #020617);">
        <div class="container py-4">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6">
                    <span class="section-tag text-warning border-warning"><i class="bi bi-bar-chart-line me-1"></i> MÉTRICAS DE NEGOCIO</span>
                    <h2 class="section-title text-white">No Solo Medimos "Me Gusta"</h2>
                    <p class="text-white fs-5 mb-4">
                        El Marketing Digital debe ir más allá de los números superficiales. Nos enfocamos en indicadores clave de retorno.
                    </p>
                    <div class="row g-3">
                        <div class="col-6"><div class="p-3 border border-secondary rounded-3 bg-black text-white"><i class="bi bi-check2-circle text-success me-2"></i> Alcance Real</div></div>
                        <div class="col-6"><div class="p-3 border border-secondary rounded-3 bg-black text-white"><i class="bi bi-check2-circle text-success me-2"></i> Tráfico Orgánico</div></div>
                        <div class="col-6"><div class="p-3 border border-secondary rounded-3 bg-black text-white"><i class="bi bi-check2-circle text-success me-2"></i> Clics y Mensajes</div></div>
                        <div class="col-6"><div class="p-3 border border-secondary rounded-3 bg-black text-white"><i class="bi bi-check2-circle text-success me-2"></i> Prospectos (Leads)</div></div>
                        <div class="col-6"><div class="p-3 border border-secondary rounded-3 bg-black text-white"><i class="bi bi-check2-circle text-success me-2"></i> Conversiones</div></div>
                        <div class="col-6"><div class="p-3 border border-secondary rounded-3 bg-black text-white"><i class="bi bi-check2-circle text-success me-2"></i> Ventas Reales</div></div>
                    </div>
                </div>

                <div class="col-lg-6 text-center">
                    <div class="p-5 rounded-4 border border-warning" style="background: rgba(0,0,0,0.6); backdrop-filter: blur(10px);">
                        <i class="bi bi-quote text-warning display-1 mb-2"></i>
                        <h4 class="fw-bold text-white mb-3">"Lo que se mide, se puede analizar.<br>Lo que se analiza, se puede mejorar."</h4>
                        <p class="text-white mb-4">Optimización continua basada en datos exactos para acelerar tu crecimiento.</p>
                        <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20cotizar%20un%20plan%20de%20Marketing%20Digital" target="_blank" class="btn btn-contacto btn-lg w-100 fw-bold py-3 text-uppercase">
                            <i class="bi bi-whatsapp me-2"></i> Solicitar Asesoría Personalizada
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
                <span class="section-tag"><i class="bi bi-arrow-repeat me-1"></i> NUESTRO PROCESO</span>
                <h2 class="section-title">7 Pasos hacia el Éxito Digital</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="badge bg-warning text-dark mb-2">Paso 01</div>
                        <h5 class="fw-bold text-white">1. Descubrimos</h5>
                        <p class="text-white mb-0">Conocemos a fondo los valores y objetivos de tu negocio.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="badge bg-info text-dark mb-2">Paso 02</div>
                        <h5 class="fw-bold text-white">2. Analizamos</h5>
                        <p class="text-white mb-0">Estudiamos tu mercado, público objetivo y competencia.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="badge bg-primary text-white mb-2">Paso 03</div>
                        <h5 class="fw-bold text-white">3. Estrategizamos</h5>
                        <p class="text-white mb-0">Definimos metas comerciales y seleccionamos los mejores canales.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="badge bg-success text-white mb-2">Paso 04</div>
                        <h5 class="fw-bold text-white">4. Creamos</h5>
                        <p class="text-white mb-0">Desarrollamos piezas creativas, copys persuasivos y campañas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="badge bg-danger text-white mb-2">Paso 05</div>
                        <h5 class="fw-bold text-white">5. Publicamos</h5>
                        <p class="text-white mb-0">Activamos la estrategia en todos los canales seleccionados.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="badge bg-warning text-dark mb-2">Paso 06</div>
                        <h5 class="fw-bold text-white">6. Medimos</h5>
                        <p class="text-white mb-0">Monitoreamos el comportamiento de cada métrica clave.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION BANNER -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-cyan), var(--primary-navy));">
        <div class="container text-center py-4">
            <span class="badge bg-warning text-dark text-uppercase px-3 py-2 mb-3 fw-bold">Del Clic al Cliente</span>
            <h2 class="display-5 fw-extrabold text-white mb-3">Encendemos Tu Marketing Digital</h2>
            <p class="fs-5 text-white max-w-700 mx-auto mb-4">
                Creatividad para llamar la atención. Estrategia para generar oportunidades. Tecnología para hacer crecer tu negocio.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20cotizar%20un%20plan%20de%20Marketing%20Digital" target="_blank" class="btn btn-warning btn-lg px-5 py-3 fw-bold rounded-pill text-dark text-uppercase shadow">
                    <i class="bi bi-whatsapp me-2"></i> Cotizar Plan de Marketing por WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20deseo%20informaci%C3%B3n%20sobre%20Marketing%20Digital" class="whatsapp-float" target="_blank" title="Contactar por WhatsApp">
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
                        Desarrollamos soluciones digitales que transforman negocios: Páginas Web, Tiendas Online, Apps Móviles, Google Ads y Marketing Digital en Cusco y todo el Perú.
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
