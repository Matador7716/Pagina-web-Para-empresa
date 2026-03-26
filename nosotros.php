<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Todo Web Cusco</title>
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

        html {
            scroll-behavior: smooth;
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

        .hero-section {
            height: 50vh;
            background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--light-color);
        }

        .section-title {
            position: relative;
            margin-bottom: 3rem;
            color: var(--primary-color);
        }

        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 60px;
            height: 3px;
            background-color: var(--secondary-color);
        }

        .service-anchor {
            scroll-margin-top: 100px;
        }

        .card-custom {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-section {
                height: 40vh;
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
            <a class="navbar-brand fw-bold" href="inicio.php">
                <span class="text-primary">TODO</span> WEB <span class="text-success">CUSCO</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-semibold">
                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="nosotros.php">NOSOTROS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="serviciosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SERVICIOS
                        </a>
                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="serviciosDropdown">
                            <li><a class="dropdown-item py-2" href="#hosting">HOSTING + DOMINIO</a></li>
                            <li><a class="dropdown-item py-2" href="#marketing">MARKETING DIGITAL</a></li>
                            <li><a class="dropdown-item py-2" href="#logo">DISEÑO DE LOGO</a></li>
                            <li><a class="dropdown-item py-2" href="#soporte">SOPORTE TECNICO COMPUTADORAS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#diseno-web">DISEÑO WEB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aulas">AULAS VIRTUALES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#landing">LANDING PAGE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="seoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SEO
                        </a>
                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="seoDropdown">
                            <li><a class="dropdown-item py-2" href="#seo-web">SEO PAGINAS WEB</a></li>
                            <li><a class="dropdown-item py-2" href="#seo-tienda">SEO TIENDAS VIRTUALES</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php#contacto">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <header class="hero-section">
        <div class="container">
            <h1 class="display-3 fw-bold animate__animated animate__fadeInDown">CONOCE TODO WEB CUSCO</h1>
            <p class="lead animate__animated animate__fadeInUp animate__delay-1s">💡 Transformamos ideas en soluciones digitales</p>
        </div>
    </header>

    <!-- SOBRE NOSOTROS -->
    <section class="py-5">
        <div class="container py-lg-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 reveal">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Sobre Todo Web Cusco" class="img-fluid rounded-4 shadow">
                </div>
                <div class="col-lg-6 ps-lg-5 reveal">
                    <h2 class="section-title fw-bold">SOBRE NOSOTROS</h2>
                    <p class="lead text-muted mb-4">Somos tu aliado estratégico en tecnología, diseño y marketing.</p>
                    <p>En <strong>Todo Web Cusco</strong>, nos apasiona ayudar a emprendedores, empresas y profesionales a destacar en el mundo digital. Creemos que cada negocio tiene el potencial de crecer si cuenta con las herramientas adecuadas.</p>
                    <p>Contamos con un equipo multidisciplinario dedicado a ofrecer soluciones modernas, rápidas y efectivas que se adaptan a las necesidades reales de nuestros clientes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MISIÓN, VISIÓN, COMPROMISO -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-4 reveal">
                    <div class="card card-custom p-4 bg-white shadow-sm">
                        <div class="mb-3 text-primary"><i class="bi bi-rocket-takeoff fs-1"></i></div>
                        <h4 class="fw-bold">Nuestra Misión</h4>
                        <p class="text-muted small">Brindar soluciones tecnológicas integrales que permitan a nuestros clientes alcanzar sus metas digitales con profesionalismo y eficiencia.</p>
                    </div>
                </div>
                <div class="col-md-4 reveal">
                    <div class="card card-custom p-4 bg-white shadow-sm">
                        <div class="mb-3 text-success"><i class="bi bi-eye fs-1"></i></div>
                        <h4 class="fw-bold">Nuestra Visión</h4>
                        <p class="text-muted small">Ser el referente líder en servicios digitales en Cusco y el Perú, reconocidos por nuestra innovación, calidad y atención personalizada.</p>
                    </div>
                </div>
                <div class="col-md-4 reveal">
                    <div class="card card-custom p-4 bg-white shadow-sm">
                        <div class="mb-3 text-warning"><i class="bi bi-heart fs-1"></i></div>
                        <h4 class="fw-bold">Nuestro Compromiso</h4>
                        <p class="text-muted small">Garantizar resultados reales para cada proyecto, acompañando a nuestros clientes en cada paso de su transformación digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DETALLE DE SERVICIOS -->
    <section class="py-5 overflow-hidden">
        <div class="container py-lg-4">
            <div class="text-center mb-5 reveal">
                <h2 class="fw-bold text-primary">NUESTROS SERVICIOS DETALLADOS</h2>
                <p class="text-muted">Ofrecemos soluciones integrales para que tu negocio tenga presencia profesional.</p>
            </div>

            <div class="row g-5">
                <!-- Hosting + Dominio -->
                <div class="col-lg-12 service-anchor reveal" id="hosting">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center text-primary d-none d-md-block">
                            <i class="bi bi-hdd-network fs-1"></i>
                        </div>
                        <div class="col-md-11">
                            <h3 class="fw-bold">🌍 HOSTING + DOMINIO</h3>
                            <p>Pon tu negocio en internet con un nombre propio y un hosting rápido y seguro. Te ayudamos a registrar tu dominio y alojar tu página web sin complicaciones, garantizando estabilidad y velocidad.</p>
                        </div>
                    </div>
                </div>

                <!-- Marketing Digital -->
                <div class="col-lg-12 service-anchor reveal" id="marketing">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center text-success d-none d-md-block">
                            <i class="bi bi-megaphone fs-1"></i>
                        </div>
                        <div class="col-md-11">
                            <h3 class="fw-bold">📢 MARKETING DIGITAL</h3>
                            <p>Impulsa tu marca con estrategias efectivas:</p>
                            <div class="row mt-3">
                                <div class="col-sm-6 col-md-3 mb-2"><i class="bi bi-check-circle text-success me-2"></i> Gestión de redes sociales</div>
                                <div class="col-sm-6 col-md-3 mb-2"><i class="bi bi-check-circle text-success me-2"></i> Publicidad en Facebook y Google</div>
                                <div class="col-sm-6 col-md-3 mb-2"><i class="bi bi-check-circle text-success me-2"></i> Creación de contenido</div>
                                <div class="col-sm-6 col-md-3 mb-2"><i class="bi bi-check-circle text-success me-2"></i> Posicionamiento online</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Diseño de Logo -->
                <div class="col-lg-12 service-anchor reveal" id="logo">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center text-info d-none d-md-block">
                            <i class="bi bi-palette fs-1"></i>
                        </div>
                        <div class="col-md-11">
                            <h3 class="fw-bold">🎨 DISEÑO DE LOGO</h3>
                            <p>Creamos identidades visuales únicas que representan tu marca. Diseños modernos, profesionales y personalizados, entregados en alta calidad para cualquier uso.</p>
                        </div>
                    </div>
                </div>

                <!-- Soporte Técnico -->
                <div class="col-lg-12 service-anchor reveal" id="soporte">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center text-danger d-none d-md-block">
                            <i class="bi bi-pc-display fs-1"></i>
                        </div>
                        <div class="col-md-11">
                            <h3 class="fw-bold">🛠️ SOPORTE TÉCNICO COMPUTADORAS</h3>
                            <p>Solucionamos tus problemas tecnológicos. Mantenimiento preventivo y correctivo, instalación de software y optimización general de tus equipos para que nunca dejes de trabajar.</p>
                        </div>
                    </div>
                </div>

                <!-- Diseño de Sistemas Web -->
                <div class="col-lg-12 service-anchor reveal" id="sistemas">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center text-dark d-none d-md-block">
                            <i class="bi bi-code-square fs-1"></i>
                        </div>
                        <div class="col-md-11">
                            <h3 class="fw-bold">💻 DISEÑO DE SISTEMAS WEB</h3>
                            <p>Desarrollamos sistemas a medida para tu negocio: sistemas administrativos, control de ventas, gestión de inventarios y plataformas personalizadas según tus requerimientos específicos.</p>
                        </div>
                    </div>
                </div>

                <!-- Diseño Web Profesional -->
                <div class="col-lg-12 service-anchor reveal" id="diseno-web">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center text-primary d-none d-md-block">
                            <i class="bi bi-window-fullscreen fs-1"></i>
                        </div>
                        <div class="col-md-11">
                            <h3 class="fw-bold">🌐 DISEÑO WEB PROFESIONAL</h3>
                            <p>Creamos páginas web modernas, rápidas y adaptables (responsive). Optimizadas para SEO básico y con panel autoadministrable para que tengas el control total.</p>
                        </div>
                    </div>
                </div>

                <!-- Aulas Virtuales -->
                <div class="col-lg-12 service-anchor reveal" id="aulas">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center text-info d-none d-md-block">
                            <i class="bi bi-mortarboard fs-1"></i>
                        </div>
                        <div class="col-md-11">
                            <h3 class="fw-bold">🎓 AULAS VIRTUALES</h3>
                            <p>Implementamos plataformas educativas modernas (Moodle, Chamilo) para que puedas impartir cursos online con facilidad, gestión de alumnos y material didáctico interactivo.</p>
                        </div>
                    </div>
                </div>

                <!-- Tiendas Online -->
                <div class="col-lg-12 service-anchor reveal" id="tiendas">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center text-success d-none d-md-block">
                            <i class="bi bi-cart4 fs-1"></i>
                        </div>
                        <div class="col-md-11">
                            <h3 class="fw-bold">🛒 TIENDAS ONLINE (WOOCOMMERCE)</h3>
                            <p>Vende tus productos en internet con una tienda virtual completa, integración de pasarelas de pago y una gestión sencilla de productos y pedidos.</p>
                        </div>
                    </div>
                </div>

                <!-- Landing Page -->
                <div class="col-lg-12 service-anchor reveal" id="landing">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center text-warning d-none d-md-block">
                            <i class="bi bi-lightning-charge fs-1"></i>
                        </div>
                        <div class="col-md-11">
                            <h3 class="fw-bold">⚡ LANDING PAGE</h3>
                            <p>Convierte visitas en clientes con páginas enfocadas en ventas. Diseño atractivo, persuasivo y optimizado para campañas publicitarias (Google Ads, Facebook Ads).</p>
                        </div>
                    </div>
                </div>

                <!-- SEO -->
                <div class="col-lg-12 service-anchor reveal" id="seo-web">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center text-secondary d-none d-md-block">
                            <i class="bi bi-search fs-1"></i>
                        </div>
                        <div class="col-md-11">
                            <h3 class="fw-bold">🎯 SEO PAGINAS WEB</h3>
                            <p>Mejoramos el posicionamiento de tu página web en los buscadores para que más clientes potenciales te encuentren orgánicamente.</p>
                        </div>
                    </div>
                </div>

                <!-- SEO Tiendas -->
                <div class="col-lg-12 service-anchor reveal" id="seo-tienda">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center text-secondary d-none d-md-block">
                            <i class="bi bi-graph-up-arrow fs-1"></i>
                        </div>
                        <div class="col-md-11">
                            <h3 class="fw-bold">📈 SEO TIENDAS VIRTUALES</h3>
                            <p>Estrategias específicas para e-commerce, posicionando tus productos clave frente a la competencia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="container reveal">
            <h2 class="fw-bold mb-4">¿POR QUÉ ELEGIRNOS?</h2>
            <div class="row justify-content-center g-4 mb-5">
                <div class="col-6 col-md-2">✔ Atención personalizada</div>
                <div class="col-6 col-md-2">✔ Soluciones rápidas</div>
                <div class="col-6 col-md-2">✔ Diseño moderno</div>
                <div class="col-6 col-md-2">✔ Precios accesibles</div>
                <div class="col-6 col-md-2">✔ Soporte constante</div>
            </div>
            <h3>IMPULSA TU NEGOCIO HOY</h3>
            <p class="mb-4">No importa si estás empezando o quieres mejorar tu presencia digital.</p>
            <a href="inicio.php#contacto" class="btn btn-light btn-lg px-5 fw-bold text-primary">Contáctanos ahora</a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-4 bg-dark text-white text-center">
        <div class="container">
            <p class="mb-0">&copy; <?php echo date('Y'); ?> Todo Web Cusco. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/51913952677" class="btn-whatsapp" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>

    <style>
        .btn-whatsapp {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25d366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
            z-index: 1000;
            transition: transform 0.3s ease;
        }
        .btn-whatsapp:hover {
            transform: scale(1.1);
            color: white;
        }
    </style>

    <!-- Bootstrap 5 Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Reveal on scroll animation
            function reveal() {
                var reveals = document.querySelectorAll(".reveal");
                for (var i = 0; i < reveals.length; i++) {
                    var windowHeight = window.innerHeight;
                    var elementTop = reveals[i].getBoundingClientRect().top;
                    var elementVisible = 150;
                    if (elementTop < windowHeight - elementVisible) {
                        reveals[i].classList.add("active");
                    }
                }
            }
            window.addEventListener("scroll", reveal);
            reveal(); // Initial check
        });
    </script>
</body>
</html>
