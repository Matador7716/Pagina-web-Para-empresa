<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Todo Web Cusco</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        :root {
            --primary-color: #6f42c1; /* Purple */
            --secondary-color: #28a745; /* Green */
            --dark-color: #000000; /* Black */
            --light-color: #ffffff; /* White */
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-color);
        }

        .top-header {
            background-color: var(--dark-color);
            font-size: 0.9rem;
        }

        .top-header a:hover {
            color: var(--primary-color) !important;
        }

        .navbar-brand .text-primary {
            color: var(--primary-color) !important;
        }

        .navbar-brand .text-success {
            color: var(--secondary-color) !important;
        }

        .nav-link {
            color: var(--dark-color) !important;
            transition: color 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--primary-color) !important;
        }

        .dropdown-item:hover {
            background-color: var(--primary-color);
            color: var(--light-color);
        }

        .carousel-item {
            height: 80vh;
            background-size: cover;
            background-position: center;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: #5a32a3;
            border-color: #5a32a3;
        }

        .btn-success {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 1rem;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,0.175) !important;
        }

        section {
            overflow: hidden;
        }

        /* Specific purple/green accents */
        .text-primary {
            color: var(--primary-color) !important;
        }

        .bg-primary {
            background-color: var(--primary-color) !important;
        }

        .text-success {
            color: var(--secondary-color) !important;
        }

        .bg-success {
            background-color: var(--secondary-color) !important;
        }

        /* Animations for scroll (using simple way for now) */
        .service-card {
            animation: fadeInUp 0.5s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 40px, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .carousel-item {
                height: 60vh;
            }
            .display-3 {
                font-size: 2.5rem;
            }
            .display-4 {
                font-size: 2rem;
            }
            .top-header {
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>

    <!-- TOP HEADER -->
    <div class="top-header py-2 text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                    <span class="me-3"><i class="bi bi-telephone-fill me-1"></i> +51 913 952 677</span>
                    <span><i class="bi bi-envelope-fill me-1"></i> informesweb@todowebcusco.com</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="https://facebook.com" target="_blank" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com" target="_blank" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                    <a href="https://tiktok.com" target="_blank" class="text-white"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN MENU -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <span class="text-primary">TODO</span> WEB <span class="text-success">CUSCO</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-semibold">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">NOSOTROS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="serviciosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SERVICIOS
                        </a>
                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="serviciosDropdown">
                            <li><a class="dropdown-item py-2" href="#">HOSTING + DOMINIO</a></li>
                            <li><a class="dropdown-item py-2" href="#">MARKETING DIGITAL</a></li>
                            <li><a class="dropdown-item py-2" href="#">DISEÑO DE LOGO</a></li>
                            <li><a class="dropdown-item py-2" href="#">SOPORTE TECNICO COMPUTADORAS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">DISEÑO WEB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">AULAS VIRTUALES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LANDING PAGE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="seoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SEO
                        </a>
                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="seoDropdown">
                            <li><a class="dropdown-item py-2" href="#">SEO PAGINAS WEB</a></li>
                            <li><a class="dropdown-item py-2" href="#">SEO TIENDAS VIRTUALES</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CREATIVE SLIDER -->
    <div id="heroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                    <div class="text-center">
                        <h1 class="display-3 fw-bold animate__animated animate__fadeInDown mb-4">BIENVENIDO A <span class="text-primary">TODO WEB CUSCO</span></h1>
                        <p class="lead animate__animated animate__fadeInUp animate__delay-1s mb-5">🌐 Creamos, impulsamos y hacemos crecer tu presencia digital</p>
                        <a href="#contacto" class="btn btn-primary btn-lg px-4 py-2 animate__animated animate__zoomIn animate__delay-2s">Solicita tu cotización</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                    <div class="text-center">
                        <h2 class="display-4 fw-bold animate__animated animate__fadeInLeft mb-4">Transformamos ideas en soluciones digitales reales</h2>
                        <p class="lead animate__animated animate__fadeInRight mb-5">Somos tu aliado estratégico en tecnología, diseño y marketing</p>
                        <a href="#servicios" class="btn btn-success btn-lg px-4 py-2 animate__animated animate__bounceInUp">Descubre nuestros servicios</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- ABOUT SECTION -->
    <section class="py-5 bg-light">
        <div class="container py-lg-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Nosotros" class="img-fluid rounded-4 shadow">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mb-4">¿QUÉ HACEMOS?</h2>
                    <p class="lead text-muted">Ofrecemos servicios integrales para que tu negocio tenga presencia profesional y resultados reales en el mundo digital:</p>
                    <p>En Todo Web Cusco, transformamos ideas en soluciones digitales reales. Somos tu aliado estratégico en tecnología, diseño y marketing, ayudando a emprendedores, empresas y profesionales a destacar en internet con herramientas modernas, rápidas y efectivas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section id="servicios" class="py-5">
        <div class="container py-lg-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold">NUESTROS SERVICIOS</h2>
                <div class="mx-auto bg-primary mb-3" style="height: 3px; width: 60px;"></div>
                <p class="text-muted">Lleva tu negocio al siguiente nivel con tecnología, diseño y estrategia.</p>
            </div>
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm service-card p-4">
                        <div class="icon-box mb-3 text-primary">
                            <i class="bi bi-hdd-network-fill fs-1"></i>
                        </div>
                        <h4 class="fw-bold">HOSTING + DOMINIO</h4>
                        <p class="text-muted small">Pon tu negocio en internet con un nombre propio y un hosting rápido y seguro. Te ayudamos a registrar tu dominio y alojar tu página web sin complicaciones.</p>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm service-card p-4 text-white bg-primary">
                        <div class="icon-box mb-3 text-white">
                            <i class="bi bi-megaphone-fill fs-1"></i>
                        </div>
                        <h4 class="fw-bold">MARKETING DIGITAL</h4>
                        <ul class="list-unstyled small">
                            <li><i class="bi bi-check2 me-2"></i>Gestión de redes sociales</li>
                            <li><i class="bi bi-check2 me-2"></i>Publicidad en Facebook y Google</li>
                            <li><i class="bi bi-check2 me-2"></i>Creación de contenido</li>
                            <li><i class="bi bi-check2 me-2"></i>Posicionamiento online</li>
                        </ul>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm service-card p-4">
                        <div class="icon-box mb-3 text-success">
                            <i class="bi bi-palette-fill fs-1"></i>
                        </div>
                        <h4 class="fw-bold">DISEÑO DE LOGO</h4>
                        <p class="text-muted small">Creamos identidades visuales únicas que representan tu marca: logos modernos, diseño creativo y entrega en alta calidad.</p>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm service-card p-4">
                        <div class="icon-box mb-3 text-danger">
                            <i class="bi bi-pc-display-horizontal fs-1"></i>
                        </div>
                        <h4 class="fw-bold">SOPORTE TÉCNICO</h4>
                        <p class="text-muted small">Solucionamos tus problemas tecnológicos: mantenimiento, reparación, instalación de software y optimización de equipos.</p>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm service-card p-4">
                        <div class="icon-box mb-3 text-info">
                            <i class="bi bi-code-square fs-1"></i>
                        </div>
                        <h4 class="fw-bold">DISEÑO DE SISTEMAS WEB</h4>
                        <p class="text-muted small">Desarrollamos sistemas a medida: sistemas administrativos, control de ventas e inventarios y plataformas personalizadas.</p>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm service-card p-4">
                        <div class="icon-box mb-3 text-warning">
                            <i class="bi bi-browser-safari fs-1"></i>
                        </div>
                        <h4 class="fw-bold">DISEÑO WEB PROFESIONAL</h4>
                        <p class="text-muted small">Creamos páginas web modernas, rápidas y adaptables (responsive) con optimización SEO básica y panel autoadministrable.</p>
                    </div>
                </div>
                <!-- Service 7 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm service-card p-4">
                        <div class="icon-box mb-3 text-dark">
                            <i class="bi bi-cart-fill fs-1"></i>
                        </div>
                        <h4 class="fw-bold">TIENDAS ONLINE</h4>
                        <p class="text-muted small">Vende tus productos en internet con WooCommerce: tiendas virtuales completas, integración de pagos y gestión de pedidos.</p>
                    </div>
                </div>
                <!-- Service 8 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm service-card p-4 bg-success text-white">
                        <div class="icon-box mb-3 text-white">
                            <i class="bi bi-lightning-charge-fill fs-1"></i>
                        </div>
                        <h4 class="fw-bold">LANDING PAGE</h4>
                        <p class="small">Convierte visitas en clientes con páginas enfocadas en ventas, diseño atractivo y persuasivo, ideal para campañas publicitarias.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="py-5 bg-dark text-white">
        <div class="container py-lg-4">
            <div class="row">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">¿POR QUÉ ELEGIRNOS?</h2>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-center"><i class="bi bi-check-circle-fill text-success me-3 fs-4"></i> Atención personalizada</li>
                        <li class="mb-3 d-flex align-items-center"><i class="bi bi-check-circle-fill text-success me-3 fs-4"></i> Soluciones rápidas y efectivas</li>
                        <li class="mb-3 d-flex align-items-center"><i class="bi bi-check-circle-fill text-success me-3 fs-4"></i> Diseño moderno y profesional</li>
                        <li class="mb-3 d-flex align-items-center"><i class="bi bi-check-circle-fill text-success me-3 fs-4"></i> Precios accesibles</li>
                        <li class="mb-3 d-flex align-items-center"><i class="bi bi-check-circle-fill text-success me-3 fs-4"></i> Soporte constante</li>
                    </ul>
                </div>
                <div class="col-lg-7 text-center">
                    <div class="p-4 rounded-4 border border-secondary">
                        <h3 class="fw-bold mb-4">📈 IMPULSA TU NEGOCIO HOY</h3>
                        <p class="lead mb-4">No importa si estás empezando o quieres mejorar tu presencia digital, en Todo Web Cusco tenemos la solución perfecta para ti.</p>
                        <a href="#contacto" class="btn btn-primary btn-lg px-5">¡Comenzar ahora!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contacto" class="py-5">
        <div class="container py-lg-4 text-center">
            <h2 class="fw-bold mb-5">📩 CONTÁCTANOS</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="p-4 shadow-sm rounded-4 h-100">
                        <i class="bi bi-whatsapp fs-1 text-success mb-3"></i>
                        <h5>Escríbenos hoy mismo</h5>
                        <p class="text-muted">+51 913 952 677</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-4 shadow-sm rounded-4 h-100">
                        <i class="bi bi-envelope fs-1 text-primary mb-3"></i>
                        <h5>Solicita tu cotización</h5>
                        <p class="text-muted">informesweb@todowebcusco.com</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-4 shadow-sm rounded-4 h-100">
                        <i class="bi bi-chat-dots fs-1 text-info mb-3"></i>
                        <h5>Atención rápida</h5>
                        <p class="text-muted">Personalizada y directa</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-4 bg-dark text-white text-center">
        <div class="container">
            <p class="mb-0">&copy; <?php echo date('Y'); ?> Todo Web Cusco. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap 5 Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Todo Web Cusco - Inicio script loaded.');
        });
    </script>
</body>
</html>
