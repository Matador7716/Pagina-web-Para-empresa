<?php
// page-contacto.php - Página de Contacto CANDELAWEB / Todo Web Cusco
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | CANDELAWEB - Hablemos de tu Proyecto Digital</title>
    <meta name="description" content="Ponte en contacto con CANDELAWEB. Desarrollamos páginas web, tiendas virtuales, apps y sistemas a medida en Cusco y todo el Perú. ¡Solicita tu cotización gratuita!">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        :root {
            --color-black: #000000;
            --color-yellow: #c4ae04;
            --color-green: #036326;
            --color-blue-dark: #061578;
            --color-blue-light: #00a7fa;
            --color-dark-bg: #0B1120;
            --color-card-bg: #151D30;
            --color-border: #1E293B;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--color-dark-bg);
            color: #ffffff;
            overflow-x: hidden;
            line-height: 1.6;
        }

        p, li, span, label, input, textarea, select {
            color: #ffffff !important;
        }

        .text-muted, .text-secondary {
            color: #e2e8f0 !important;
        }

        /* Top Bar */
        .top-bar {
            background-color: var(--color-black);
            border-bottom: 2px solid var(--color-yellow);
            font-size: 0.9rem;
            padding: 8px 0;
        }
        .top-bar a {
            color: #ffffff !important;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .top-bar a:hover {
            color: var(--color-yellow) !important;
        }
        .top-bar .social-icons a {
            font-size: 1.1rem;
            margin-left: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        .top-bar .social-icons a:hover {
            background: var(--color-blue-light);
            color: var(--color-black) !important;
        }

        /* Navbar */
        .navbar-candela {
            background-color: rgba(6, 21, 120, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 167, 250, 0.3);
            padding: 12px 0;
        }
        .navbar-brand {
            font-weight: 800;
            font-size: 1.6rem;
            color: #ffffff !important;
            letter-spacing: -0.5px;
        }
        .navbar-brand span {
            color: var(--color-yellow);
        }
        .nav-link {
            color: #ffffff !important;
            font-weight: 500;
            font-size: 0.95rem;
            padding: 8px 16px !important;
            transition: all 0.3s ease;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--color-yellow) !important;
        }
        .dropdown-menu {
            background-color: var(--color-blue-dark);
            border: 1px solid var(--color-blue-light);
            border-radius: 8px;
        }
        .dropdown-item {
            color: #ffffff !important;
            font-weight: 400;
            padding: 10px 20px;
        }
        .dropdown-item:hover {
            background-color: var(--color-blue-light);
            color: #000000 !important;
        }

        /* Buttons */
        .btn-candela-primary {
            background: linear-gradient(135deg, var(--color-blue-light), var(--color-blue-dark));
            color: #ffffff !important;
            font-weight: 700;
            border: none;
            padding: 12px 28px;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(0, 167, 250, 0.4);
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .btn-candela-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 167, 250, 0.6);
            background: linear-gradient(135deg, var(--color-yellow), #e0cb00);
            color: var(--color-black) !important;
        }
        .btn-candela-success {
            background: linear-gradient(135deg, #25D366, var(--color-green));
            color: #ffffff !important;
            font-weight: 700;
            border: none;
            padding: 12px 28px;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
            transition: all 0.3s ease;
        }
        .btn-candela-success:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.6);
            color: #ffffff !important;
        }

        /* Contact Hero */
        .contact-hero {
            position: relative;
            background: linear-gradient(135deg, rgba(6, 21, 120, 0.95), rgba(11, 17, 32, 0.98)), url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1600&auto=format&fit=crop') center/cover no-repeat;
            padding: 90px 0 70px;
            border-bottom: 3px solid var(--color-yellow);
        }
        .hero-badge {
            background: rgba(196, 174, 4, 0.2);
            border: 1px solid var(--color-yellow);
            color: var(--color-yellow) !important;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Contact Info Cards */
        .info-card {
            background-color: var(--color-card-bg);
            border: 1px solid var(--color-border);
            border-radius: 16px;
            padding: 30px;
            height: 100%;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        .info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--color-blue-light);
            transition: width 0.3s ease;
        }
        .info-card:hover {
            transform: translateY(-8px);
            border-color: var(--color-yellow);
            box-shadow: 0 12px 30px rgba(0, 167, 250, 0.2);
        }
        .info-card:hover::before {
            width: 8px;
            background: var(--color-yellow);
        }
        .info-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, rgba(0, 167, 250, 0.2), rgba(6, 21, 120, 0.5));
            border: 1px solid var(--color-blue-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            color: var(--color-yellow);
            margin-bottom: 20px;
        }

        /* Form Styling */
        .contact-form-container {
            background-color: var(--color-card-bg);
            border: 1px solid var(--color-blue-light);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
            position: relative;
        }
        .form-control, .form-select {
            background-color: rgba(11, 17, 32, 0.8) !important;
            border: 1px solid var(--color-border) !important;
            color: #ffffff !important;
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .form-control:focus, .form-select:focus {
            background-color: rgba(15, 23, 42, 1) !important;
            border-color: var(--color-blue-light) !important;
            box-shadow: 0 0 10px rgba(0, 167, 250, 0.3);
            outline: none;
        }
        .form-control::placeholder {
            color: #94a3b8 !important;
        }
        .form-label {
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 8px;
            color: #ffffff !important;
        }

        /* Direct Chat Banner */
        .direct-chat-box {
            background: linear-gradient(135deg, var(--color-blue-dark), #031842);
            border: 2px dashed var(--color-yellow);
            border-radius: 20px;
            padding: 35px;
            text-align: center;
        }

        /* FAQ Accordion */
        .accordion-item {
            background-color: var(--color-card-bg);
            border: 1px solid var(--color-border);
            margin-bottom: 15px;
            border-radius: 12px !important;
            overflow: hidden;
        }
        .accordion-button {
            background-color: var(--color-card-bg);
            color: #ffffff !important;
            font-weight: 600;
            font-size: 1.05rem;
            padding: 20px 25px;
            box-shadow: none !important;
        }
        .accordion-button:not(.collapsed) {
            background-color: rgba(0, 167, 250, 0.15);
            color: var(--color-yellow) !important;
        }
        .accordion-button::after {
            filter: invert(1);
        }
        .accordion-body {
            background-color: rgba(11, 17, 32, 0.5);
            border-top: 1px solid var(--color-border);
            padding: 20px 25px;
            color: #ffffff !important;
        }

        /* Map frame */
        .map-frame {
            border-radius: 20px;
            overflow: hidden;
            border: 2px solid var(--color-blue-light);
            box-shadow: 0 15px 30px rgba(0,0,0,0.5);
        }

        /* Floating WhatsApp */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            color: #ffffff !important;
            border-radius: 50%;
            text-align: center;
            font-size: 32px;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.5);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .whatsapp-float:hover {
            transform: scale(1.1);
            background-color: #20ba5a;
            color: #ffffff !important;
        }

        /* Footer */
        footer {
            background-color: var(--color-black);
            border-top: 1px solid var(--color-border);
            padding: 60px 0 30px;
            font-size: 0.95rem;
        }
        footer a {
            color: #ffffff !important;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: var(--color-yellow) !important;
        }
        .footer-title {
            color: var(--color-yellow) !important;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 1.2rem;
            position: relative;
            padding-bottom: 8px;
        }
        .footer-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background-color: var(--color-blue-light);
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex align-items-center gap-3">
                <span><i class="bi bi-telephone-fill text-warning me-1"></i> +51 935 209 781</span>
                <span><i class="bi bi-envelope-fill text-warning me-1"></i> adminweb@todowebcusco.com</span>
            </div>
            <div class="social-icons d-flex align-items-center mt-2 mt-sm-0">
                <span class="me-2 text-white-50">Síguenos:</span>
                <a href="https://facebook.com" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://tiktok.com" target="_blank" title="TikTok"><i class="bi bi-tiktok"></i></a>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-candela sticky-top">
        <div class="container">
            <a class="navbar-brand animate__animated animate__fadeInLeft" href="https://www.todowebcusco.com/">
                🔥 CANDELA<span>WEB</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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
                            <li><a class="dropdown-item" href="https://www.todowebcusco.com/social-media-marketing/">Social Media Marketing</a></li>
                            <li><a class="dropdown-item" href="https://www.todowebcusco.com/posicionamiento-web-seo/">Posicionamiento Web (SEO)</a></li>
                            <li><a class="dropdown-item" href="https://www.todowebcusco.com/marketing-digital/">Marketing Digital Integral</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.todowebcusco.com/portafolio/">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold text-warning" href="https://www.todowebcusco.com/contacto/">Contacto</a>
                    </li>
                </ul>
                <a href="#formulario-contacto" class="btn btn-candela-primary ms-lg-3 mt-3 mt-lg-0">Cotizar Ahora</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="contact-hero text-center text-white">
        <div class="container">
            <span class="hero-badge animate__animated animate__fadeInDown"><i class="bi bi-chat-left-dots-fill me-2"></i>Atención Inmediata</span>
            <h1 class="display-4 fw-black mb-3 animate__animated animate__fadeInUp">¡Hablemos de Tu Próximo Proyecto Digital!</h1>
            <p class="lead max-w-700 mx-auto mb-4 animate__animated animate__fadeInUp animate__delay-1s" style="max-width: 800px; font-size: 1.25rem;">
                ¿Tienes una idea, empresa o negocio que deseas potenciar? Estamos listos para asesorarte y convertir tu visión en una plataforma web de alto rendimiento.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap animate__animated animate__fadeInUp animate__delay-2s">
                <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quisiera%20solicitar%20una%20cotizaci%C3%B3n" target="_blank" class="btn btn-candela-success btn-lg">
                    <i class="bi bi-whatsapp me-2"></i>Escribir por WhatsApp
                </a>
                <a href="#formulario-contacto" class="btn btn-candela-primary btn-lg">
                    <i class="bi bi-pencil-square me-2"></i>Enviar Mensaje
                </a>
            </div>
        </div>
    </section>

    <!-- CONTACT CARDS SECTION -->
    <section class="py-5" style="background-color: rgba(11, 17, 32, 0.7);">
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp">
                    <div class="info-card text-center">
                        <div class="info-icon mx-auto">
                            <i class="bi bi-telephone-outbound-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-2 text-warning">Llámanos o WhatsApp</h4>
                        <p class="mb-3 text-white">Atención directa e inmediata para consultas y proyectos.</p>
                        <a href="tel:+51935209781" class="fw-bold fs-5 text-info d-block text-decoration-none">+51 935 209 781</a>
                        <small class="text-white-50">Lunes a Sábado: 8:00 AM - 8:00 PM</small>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="info-card text-center">
                        <div class="info-icon mx-auto">
                            <i class="bi bi-envelope-open-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-2 text-warning">Correo Electrónico</h4>
                        <p class="mb-3 text-white">Envíanos tus requerimientos o propuestas detalladas.</p>
                        <a href="mailto:adminweb@todowebcusco.com" class="fw-bold fs-6 text-info d-block text-decoration-none">adminweb@todowebcusco.com</a>
                        <small class="text-white-50">Respuesta en menos de 2 horas</small>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp animate__delay-2s">
                    <div class="info-card text-center">
                        <div class="info-icon mx-auto">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-2 text-warning">Ubicación Central</h4>
                        <p class="mb-3 text-white">Operamos con pasión desde el corazón imperial.</p>
                        <span class="fw-bold text-white d-block">Cusco, Perú</span>
                        <small class="text-white-50">Atención a todo el Perú y LATAM</small>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp animate__delay-3s">
                    <div class="info-card text-center">
                        <div class="info-icon mx-auto">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h4 class="fw-bold mb-2 text-warning">Soporte Técnico</h4>
                        <p class="mb-3 text-white">Monitoreo y asistencia para plataformas activas.</p>
                        <span class="fw-bold text-success d-block"><i class="bi bi-check-circle-fill me-1"></i>Soporte 24/7</span>
                        <small class="text-white-50">Para clientes con plan activo</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FORM AND SIDEBAR SECTION -->
    <section class="py-5" id="formulario-contacto">
        <div class="container py-4">
            <div class="row g-5 align-items-stretch">
                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div class="contact-form-container">
                        <h2 class="fw-bold mb-2 text-warning"><i class="bi bi-send-fill me-2 text-info"></i>Solicita tu Cotización Personalizada</h2>
                        <p class="text-white mb-4">Completa el siguiente formulario y nuestro equipo técnico de CANDELAWEB se pondrá en contacto contigo de forma inmediata.</p>

                        <div id="alertSuccess" class="alert alert-success d-none mb-4" role="alert">
                            <i class="bi bi-check-circle-fill me-2"></i>¡Mensaje enviado con éxito! Nos comunicaremos contigo en breve.
                        </div>

                        <form id="contactForm" onsubmit="handleFormSubmit(event)">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Nombre Completo *</label>
                                    <input type="text" class="form-control" placeholder="Ej. Juan Pérez" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Teléfono / WhatsApp *</label>
                                    <input type="tel" class="form-control" placeholder="Ej. +51 987 654 321" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Correo Electrónico *</label>
                                    <input type="email" class="form-control" placeholder="ejemplo@empresa.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Nombre de la Empresa / Negocio</label>
                                    <input type="text" class="form-control" placeholder="Ej. Mi Negocio SAC">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Servicio de Interés *</label>
                                    <select class="form-select" required>
                                        <option value="" selected disabled>Selecciona un servicio</option>
                                        <option value="web">Desarrollo de Página Web Corporativa</option>
                                        <option value="tienda">Tienda Virtual / E-Commerce</option>
                                        <option value="apps">Desarrollo de Aplicación Móvil</option>
                                        <option value="sistema">Sistema Web Administrativo / Ventas</option>
                                        <option value="ads">Anuncios en Google (Google Ads)</option>
                                        <option value="social">Social Media Marketing</option>
                                        <option value="seo">Posicionamiento SEO</option>
                                        <option value="integral">Paquete Integral de Marketing Digital</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Presupuesto Estimado</label>
                                    <select class="form-select">
                                        <option value="basico">S/ 800 - S/ 1,500</option>
                                        <option value="intermedio">S/ 1,500 - S/ 3,500</option>
                                        <option value="avanzado">S/ 3,500 - S/ 7,000</option>
                                        <option value="corporativo">S/ 7,000 a más</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Cuéntanos más sobre tu proyecto *</label>
                                <textarea class="form-control" rows="4" placeholder="Describe brevemente tus objetivos, requerimientos específicos o consultas..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-candela-primary btn-lg w-100 py-3 fs-5">
                                <i class="bi bi-rocket-takeoff-fill me-2"></i>Enviar Solicitud de Cotización
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Direct Chat & Fast Info -->
                <div class="col-lg-5 d-flex flex-column justify-content-between">
                    <div class="direct-chat-box mb-4">
                        <div class="mb-3 text-warning display-4"><i class="bi bi-whatsapp"></i></div>
                        <h3 class="fw-bold text-white mb-2">¿Prefieres una respuesta inmediata?</h3>
                        <p class="text-white mb-4 fs-6">Escríbenos directamente por WhatsApp y nuestro equipo de ingenieros te responderá al instante.</p>
                        <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20necesito%20asesor%C3%ADa%20para%20un%20proyecto" target="_blank" class="btn btn-candela-success btn-lg w-100 py-3 fw-bold">
                            <i class="bi bi-chat-dots-fill me-2"></i>Iniciar Chateo en Vivo
                        </a>
                    </div>

                    <div class="p-4 rounded-4" style="background-color: var(--color-card-bg); border: 1px solid var(--color-border);">
                        <h4 class="fw-bold text-warning mb-3"><i class="bi bi-shield-check me-2 text-info"></i>¿Por qué trabajar con CANDELAWEB?</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-warning me-3 fs-5"></i>
                                <div>
                                    <strong class="text-white d-block">Asesoría 100% Personalizada</strong>
                                    <span class="text-white-50">Analizamos tus metas comerciales antes de escribir la primera línea de código.</span>
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-warning me-3 fs-5"></i>
                                <div>
                                    <strong class="text-white d-block">Tecnología de Vanguardia</strong>
                                    <span class="text-white-50">Sitios ultrarrápidos, optimizados para Google y con código limpio y seguro.</span>
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-warning me-3 fs-5"></i>
                                <div>
                                    <strong class="text-white d-block">Garantía y Soporte Continuo</strong>
                                    <span class="text-white-50">Te acompañamos post-lanzamiento para asegurar la máxima rentabilidad de tu inversión.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="py-5" style="background-color: rgba(6, 21, 120, 0.2);">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="hero-badge"><i class="bi bi-question-circle-fill me-2"></i>Resolvemos tus dudas</span>
                <h2 class="display-5 fw-bold text-white">Preguntas Frecuentes</h2>
                <p class="text-white fs-5">Respuestas rápidas a las consultas más comunes sobre nuestros servicios.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ¿Cuánto tiempo toma desarrollar una página web o tienda virtual?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    El tiempo de entrega depende de la complejidad del proyecto. Una Landing Page o web corporativa toma entre <strong>5 a 10 días hábiles</strong>, mientras que una Tienda Virtual o Sistema Web personalizado requiere entre <strong>2 a 4 semanas</strong>.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿Incluyen Hosting, Dominio y Correos Corporativos?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    ¡Sí! Todos nuestros paquetes incluyen el primer año de <strong>Hosting SSD de alta velocidad</strong>, registro de dominio (.com o .pe) y la configuración de sus correos corporativos profesionales sin costos ocultos.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Mi página web se verá bien en teléfonos móviles y tablets?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Totalmente. Desarrollamos con la metodología <em>Mobile-First</em> y el framework Bootstrap 5, garantizando que tu sitio web sea 100% responsivo, rápido y cómodo de navegar en smartphones, tablets y computadoras de escritorio.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    ¿Cómo se realizan los pagos para iniciar el proyecto?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Trabajamos con una modalidad de <strong>50% de adelanto al inicio</strong> y el <strong>50% restante contra entrega y conformidad</strong> del proyecto. Aceptamos transferencias bancarias (BCP, BBVA, Interbank), Yape, Plin y tarjetas de crédito.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAP SECTION -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center mb-4">
                <h3 class="fw-bold text-warning"><i class="bi bi-geo-alt-fill me-2"></i>Nuestra Cobertura en Cusco y el Perú</h3>
                <p class="text-white fs-6">Desarrollamos proyectos digitales con alcance nacional e internacional desde Cusco, Perú.</p>
            </div>
            <div class="map-frame">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62058.82582846175!2d-71.9922119!3d-13.5226402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5d826598431%3A0x2aa9392abf2f64f4!2sCusco!5e0!3m2!1ses!2spe!4v1700000000000!5m2!1ses!2spe" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quisiera%20m%C3%A1s%20informaci%C3%B3n" class="whatsapp-float" target="_blank" title="Contactar por WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h3 class="fw-black text-white mb-3">🔥 CANDELA<span class="text-warning">WEB</span></h3>
                    <p class="text-white mb-3">Transformamos ideas en experiencias digitales potentes, veloces y enfocadas en maximizar los resultados comerciales de tu negocio.</p>
                    <div class="social-icons d-flex gap-2">
                        <a href="https://facebook.com" target="_blank" class="text-white fs-5 p-2 rounded-circle bg-dark border border-secondary"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com" target="_blank" class="text-white fs-5 p-2 rounded-circle bg-dark border border-secondary"><i class="bi bi-instagram"></i></a>
                        <a href="https://tiktok.com" target="_blank" class="text-white fs-5 p-2 rounded-circle bg-dark border border-secondary"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <h5 class="footer-title">Navegación</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://www.todowebcusco.com/">Inicio</a></li>
                        <li class="mb-2"><a href="https://www.todowebcusco.com/paginas-web/">Página Web</a></li>
                        <li class="mb-2"><a href="https://www.todowebcusco.com/tiendas-virtuales/">Tiendas Virtuales</a></li>
                        <li class="mb-2"><a href="https://www.todowebcusco.com/desarrollo-de-apps/">Desarrollo de Apps</a></li>
                        <li class="mb-2"><a href="https://www.todowebcusco.com/portafolio/">Portafolio</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4">
                    <h5 class="footer-title">Servicios Digitales</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://www.todowebcusco.com/anuncios-en-google/">Anuncios en Google</a></li>
                        <li class="mb-2"><a href="https://www.todowebcusco.com/social-media-marketing/">Social Media Marketing</a></li>
                        <li class="mb-2"><a href="https://www.todowebcusco.com/posicionamiento-web-seo/">Posicionamiento SEO</a></li>
                        <li class="mb-2"><a href="https://www.todowebcusco.com/marketing-digital/">Marketing Digital</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4">
                    <h5 class="footer-title">Contacto Directo</h5>
                    <p class="mb-2 text-white"><i class="bi bi-telephone-fill text-warning me-2"></i> +51 935 209 781</p>
                    <p class="mb-2 text-white"><i class="bi bi-envelope-fill text-warning me-2"></i> adminweb@todowebcusco.com</p>
                    <p class="mb-0 text-white"><i class="bi bi-geo-alt-fill text-warning me-2"></i> Cusco, Perú</p>
                </div>
            </div>

            <hr class="my-4 border-secondary">
            <div class="text-center text-white-50">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> CANDELAWEB. Todos los derechos reservados. Desarrollado con pasión para impulsar negocios.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function handleFormSubmit(event) {
            event.preventDefault();
            const alertBox = document.getElementById('alertSuccess');
            alertBox.classList.remove('d-none');
            alertBox.classList.add('animate__animated', 'animate__fadeIn');
            document.getElementById('contactForm').reset();

            setTimeout(() => {
                alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }, 100);
        }
    </script>
</body>
</html>
