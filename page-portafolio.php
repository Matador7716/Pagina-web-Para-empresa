<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio de Proyectos | CANDELAWEB - Todo Web Cusco</title>
    <meta name="description" content="Explora nuestro portafolio de proyectos desarrollados: Páginas Web corporativas, Tiendas Virtuales E-Commerce, Sistemas Web y Aplicaciones Móviles en Cusco y Perú.">

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

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #020617 0%, var(--primary-navy) 60%, #031046 100%);
            padding: 80px 0 60px;
            position: relative;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Section Tag & Titles */
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

        /* Portfolio Filter Buttons */
        .portfolio-filter-btn {
            background: rgba(255, 255, 255, 0.05);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 8px 22px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            margin: 4px;
        }
        .portfolio-filter-btn:hover, .portfolio-filter-btn.active {
            background: var(--primary-yellow);
            color: #000000;
            border-color: var(--primary-yellow);
            box-shadow: 0 4px 15px rgba(196, 174, 4, 0.4);
        }

        /* Project Portfolio Cards */
        .portfolio-card {
            background: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 18px;
            overflow: hidden;
            height: 100%;
            transition: all 0.35s ease;
            box-shadow: 0 8px 25px rgba(0,0,0,0.4);
        }
        .portfolio-card:hover {
            transform: translateY(-8px);
            border-color: var(--primary-cyan);
            box-shadow: 0 15px 35px rgba(0, 167, 250, 0.25);
        }
        .portfolio-img-wrapper {
            position: relative;
            height: 240px;
            overflow: hidden;
            background-color: #0d1322;
        }
        .portfolio-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .portfolio-card:hover .portfolio-img-wrapper img {
            transform: scale(1.08);
        }
        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(6, 21, 120, 0.85);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .portfolio-card:hover .portfolio-overlay {
            opacity: 1;
        }

        /* Tech Tag Badges */
        .tech-tag {
            background: rgba(0, 167, 250, 0.15);
            color: var(--primary-cyan);
            border: 1px solid rgba(0, 167, 250, 0.3);
            font-size: 0.75rem;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 20px;
            display: inline-block;
            margin-right: 4px;
            margin-bottom: 6px;
        }

        /* Statistics Counter Card */
        .stat-card {
            background: rgba(13, 19, 34, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 16px;
            padding: 24px;
            text-align: center;
        }

        /* Crisp White Text Override */
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
                        <a class="nav-link dropdown-toggle" href="#" id="marketingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Marketing Digital
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="marketingDropdown">
                            <li><a class="dropdown-item" href="https://www.todowebcusco.com/social-media-marketing/"><i class="bi bi-share me-2 text-info"></i>Social Media Marketing</a></li>
                            <li><a class="dropdown-item" href="https://www.todowebcusco.com/posicionamiento-web-seo/"><i class="bi bi-search me-2 text-warning"></i>Posicionamiento Web (SEO)</a></li>
                            <li><a class="dropdown-item" href="https://www.todowebcusco.com/marketing-digital/"><i class="bi bi-megaphone me-2 text-success"></i>Marketing Digital Integral</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://www.todowebcusco.com/portafolio/">Portafolio</a>
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
        <div class="container text-center">
            <span class="section-tag animate__animated animate__fadeInDown"><i class="bi bi-briefcase-fill me-1"></i> NUESTRO TRABAJO</span>
            <h1 class="display-4 fw-extrabold text-white mb-3 animate__animated animate__fadeInLeft">
                Nuestros Proyectos. <span style="color: var(--primary-yellow);">Resultados Reales.</span>
            </h1>
            <p class="fs-5 text-white-sub max-w-700 mx-auto mb-4" style="line-height: 1.7;">
                Descubre cómo hemos ayudado a empresas, agencias de turismo, comercios e instituciones a digitalizar sus servicios y multiplicar sus clientes en Cusco y todo el Perú.
            </p>

            <!-- Statistics Banner -->
            <div class="row g-3 justify-content-center mt-4">
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <h2 class="display-6 fw-bold text-warning mb-0">+120</h2>
                        <span class="text-white small">Proyectos Entregados</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <h2 class="display-6 fw-bold text-info mb-0">99%</h2>
                        <span class="text-white small">Satisfacción Clientes</span>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <h2 class="display-6 fw-bold text-success mb-0">+10</h2>
                        <span class="text-white small">Años de Experiencia</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO GRID & CATEGORY FILTERS -->
    <section class="py-5 bg-dark">
        <div class="container py-4">

            <!-- Category Filter Buttons -->
            <div class="d-flex justify-content-center flex-wrap mb-5" id="portfolio-filters">
                <button class="portfolio-filter-btn active" data-filter="all"><i class="bi bi-grid-fill me-1"></i> Todos</button>
                <button class="portfolio-filter-btn" data-filter="web"><i class="bi bi-globe me-1"></i> Páginas Web</button>
                <button class="portfolio-filter-btn" data-filter="ecommerce"><i class="bi bi-cart-check-fill me-1"></i> Tiendas Virtuales</button>
                <button class="portfolio-filter-btn" data-filter="sistemas"><i class="bi bi-cpu-fill me-1"></i> Sistemas Web</button>
                <button class="portfolio-filter-btn" data-filter="apps"><i class="bi bi-phone-fill me-1"></i> Apps Móviles</button>
            </div>

            <!-- Projects Grid -->
            <div class="row g-4" id="portfolio-grid">

                <!-- Project Item 1 -->
                <div class="col-lg-4 col-md-6 project-item" data-category="web">
                    <div class="portfolio-card">
                        <div class="portfolio-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1512100356356-de1b84283e18?auto=format&fit=crop&w=800&q=80" alt="Perú Safe Journeys Tour Agency">
                            <div class="portfolio-overlay">
                                <a href="https://www.perusafejourneys.todowebcusco.com/" target="_blank" class="btn btn-contacto">
                                    <i class="bi bi-box-arrow-up-right me-1"></i> Ver Proyecto en Vivo
                                </a>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary">Página Web Turística</span>
                                <small class="text-warning"><i class="bi bi-star-fill me-1"></i>Cusco</small>
                            </div>
                            <h5 class="fw-bold text-white mb-2">Perú Safe Journeys</h5>
                            <p class="text-white small mb-3">Portal turístico de alta gama con itinerarios interactivos, reservas directas a WhatsApp e integración multilingüe.</p>
                            <div class="mb-3">
                                <span class="tech-tag">HTML5 / PHP</span>
                                <span class="tech-tag">Bootstrap 5</span>
                                <span class="tech-tag">SEO Turístico</span>
                            </div>
                            <a href="https://www.perusafejourneys.todowebcusco.com/" target="_blank" class="text-info fw-bold text-decoration-none small">
                                Visitar Sitio Web <i class="bi bi-arrow-right me-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Item 2 -->
                <div class="col-lg-4 col-md-6 project-item" data-category="ecommerce">
                    <div class="portfolio-card">
                        <div class="portfolio-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=800&q=80" alt="Artesanías Andinas E-Commerce">
                            <div class="portfolio-overlay">
                                <a href="https://www.todowebcusco.com/tiendas-virtuales/" target="_blank" class="btn btn-contacto">
                                    <i class="bi bi-cart-check me-1"></i> Ver Tienda Demo
                                </a>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-success">Tienda Virtual E-Commerce</span>
                                <small class="text-warning"><i class="bi bi-star-fill me-1"></i>Perú</small>
                            </div>
                            <h5 class="fw-bold text-white mb-2">Artesanías Andinas Store</h5>
                            <p class="text-white small mb-3">Plataforma de comercio electrónico con pasarela de pagos Culqi e Yape, catálogo autogestionable y carrito dinámico.</p>
                            <div class="mb-3">
                                <span class="tech-tag">WooCommerce</span>
                                <span class="tech-tag">Culqi / Yape</span>
                                <span class="tech-tag">SSL Seguro</span>
                            </div>
                            <a href="https://www.todowebcusco.com/tiendas-virtuales/" target="_blank" class="text-info fw-bold text-decoration-none small">
                                Ver Detalles <i class="bi bi-arrow-right me-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Item 3 -->
                <div class="col-lg-4 col-md-6 project-item" data-category="sistemas">
                    <div class="portfolio-card">
                        <div class="portfolio-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="Registro Asistencia APAFA">
                            <div class="portfolio-overlay">
                                <a href="https://www.todowebcusco.com/" target="_blank" class="btn btn-contacto">
                                    <i class="bi bi-laptop me-1"></i> Explorar Sistema
                                </a>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-info text-dark">Sistema Web Administrativo</span>
                                <small class="text-warning"><i class="bi bi-star-fill me-1"></i>Institucional</small>
                            </div>
                            <h5 class="fw-bold text-white mb-2">Sistema de Asistencia APAFA</h5>
                            <p class="text-white small mb-3">Plataforma web personalizada para control de asistencia con código de barras, reportes PDF y gestión de padrón de socios.</p>
                            <div class="mb-3">
                                <span class="tech-tag">PHP / MySQL</span>
                                <span class="tech-tag">jQuery AJAX</span>
                                <span class="tech-tag">Reportes PDF</span>
                            </div>
                            <a href="https://www.todowebcusco.com/" target="_blank" class="text-info fw-bold text-decoration-none small">
                                Más Información <i class="bi bi-arrow-right me-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Item 4 -->
                <div class="col-lg-4 col-md-6 project-item" data-category="apps">
                    <div class="portfolio-card">
                        <div class="portfolio-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=800&q=80" alt="App Móvil Reservas">
                            <div class="portfolio-overlay">
                                <a href="https://www.todowebcusco.com/desarrollo-de-apps/" target="_blank" class="btn btn-contacto">
                                    <i class="bi bi-phone me-1"></i> Ver Detalles App
                                </a>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-danger">Aplicación Móvil iOS/Android</span>
                                <small class="text-warning"><i class="bi bi-star-fill me-1"></i>Cusco</small>
                            </div>
                            <h5 class="fw-bold text-white mb-2">Cusco Delivery & Tours App</h5>
                            <p class="text-white small mb-3">Aplicación nativa multiplataforma con geolocalización GPS en tiempo real, notificaciones push y módulo de reservas.</p>
                            <div class="mb-3">
                                <span class="tech-tag">Flutter / React Native</span>
                                <span class="tech-tag">Firebase API</span>
                                <span class="tech-tag">GPS Maps</span>
                            </div>
                            <a href="https://www.todowebcusco.com/desarrollo-de-apps/" target="_blank" class="text-info fw-bold text-decoration-none small">
                                Ver Detalles <i class="bi bi-arrow-right me-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Item 5 -->
                <div class="col-lg-4 col-md-6 project-item" data-category="web">
                    <div class="portfolio-card">
                        <div class="portfolio-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=800&q=80" alt="Hotel Corporativo Cusco">
                            <div class="portfolio-overlay">
                                <a href="https://www.todowebcusco.com/paginas-web/" target="_blank" class="btn btn-contacto">
                                    <i class="bi bi-box-arrow-up-right me-1"></i> Ver Proyecto
                                </a>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary">Página Corporativa</span>
                                <small class="text-warning"><i class="bi bi-star-fill me-1"></i>Cusco</small>
                            </div>
                            <h5 class="fw-bold text-white mb-2">Hotel Boutique Valle Sagrado</h5>
                            <p class="text-white small mb-3">Diseño elegante responsive con motor de reservas integrado, galería 360 y formulario directo a recepción.</p>
                            <div class="mb-3">
                                <span class="tech-tag">HTML5 / JavaScript</span>
                                <span class="tech-tag">WhatsApp API</span>
                                <span class="tech-tag">Speed Optimized</span>
                            </div>
                            <a href="https://www.todowebcusco.com/paginas-web/" target="_blank" class="text-info fw-bold text-decoration-none small">
                                Visitar Demo <i class="bi bi-arrow-right me-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Item 6 -->
                <div class="col-lg-4 col-md-6 project-item" data-category="sistemas">
                    <div class="portfolio-card">
                        <div class="portfolio-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=800&q=80" alt="Sistema Restaurante El Barrio Calculator">
                            <div class="portfolio-overlay">
                                <a href="https://www.todowebcusco.com/" target="_blank" class="btn btn-contacto">
                                    <i class="bi bi-calculator me-1"></i> Probar Módulo
                                </a>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-info text-dark">Sistema Restaurante & Calculadora</span>
                                <small class="text-warning"><i class="bi bi-star-fill me-1"></i>El Barrio</small>
                            </div>
                            <h5 class="fw-bold text-white mb-2">Calculadora Comercial - El Barrio</h5>
                            <p class="text-white small mb-3">Módulo interactivo de cálculo de pedidos y cotizaciones en tiempo real para clientes y administradores.</p>
                            <div class="mb-3">
                                <span class="tech-tag">JavaScript Grid</span>
                                <span class="tech-tag">CSS Grid Layout</span>
                                <span class="tech-tag">Math Engine</span>
                            </div>
                            <a href="https://www.todowebcusco.com/" target="_blank" class="text-info fw-bold text-decoration-none small">
                                Probar Sistema <i class="bi bi-arrow-right me-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CLIENT TESTIMONIALS -->
    <section class="py-5" style="background: #090e1a;">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="section-tag"><i class="bi bi-chat-quote-fill me-1"></i> TESTIMONIOS REALES</span>
                <h2 class="section-title">Lo que Dicen Nuestros Clientes</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="text-warning mb-2">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="text-white mb-3 fst-italic">"CANDELAWEB diseñó la página web de nuestra agencia de viajes y desde el primer mes nuestras reservas por WhatsApp aumentaron notablemente."</p>
                        <h6 class="fw-bold text-info mb-0">— Gerencia General, Perú Safe Journeys</h6>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="text-warning mb-2">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="text-white mb-3 fst-italic">"Excelente atención y soporte posterior. Desarrollaron nuestro sistema administrativo a la medida exacta de nuestras necesidades."</p>
                        <h6 class="fw-bold text-info mb-0">— Directiva APAFA, Institución Educativa</h6>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-secondary bg-black h-100">
                        <div class="text-warning mb-2">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="text-white mb-3 fst-italic">"Nuestra tienda virtual vende las 24 horas. La integración con Yape y tarjetas facilitó totalmente nuestras ventas online."</p>
                        <h6 class="fw-bold text-info mb-0">— Fundador, Artesanías Andinas</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION BANNER -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-cyan), var(--primary-navy));">
        <div class="container text-center py-4">
            <span class="badge bg-warning text-dark text-uppercase px-3 py-2 mb-3 fw-bold">¿Tienes un proyecto en mente?</span>
            <h2 class="display-5 fw-extrabold text-white mb-3">Hagamos Realidad Tu Próximo Sitio Web</h2>
            <p class="fs-5 text-white max-w-700 mx-auto mb-4">
                Déjanos ayudarte a digitalizar tu empresa con tecnología moderna, velocidad y diseño adaptado a tu marca.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20cotizar%20un%20proyecto%20para%20mi%20empresa" target="_blank" class="btn btn-warning btn-lg px-5 py-3 fw-bold rounded-pill text-dark text-uppercase shadow">
                    <i class="bi bi-whatsapp me-2"></i> Cotizar Mi Proyecto por WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20deseo%20consultar%20sobre%20sus%20servicios" class="whatsapp-float" target="_blank" title="Contactar por WhatsApp">
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

    <!-- Bootstrap 5 JS Bundle & Portfolio Filter Logic -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.portfolio-filter-btn');
            const projectItems = document.querySelectorAll('.project-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    projectItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                            item.classList.add('animate__animated', 'animate__fadeIn');
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>
