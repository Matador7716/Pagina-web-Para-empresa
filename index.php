<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Web Cusco - Servicios Informáticos</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Top Header -->
    <div class="top-header text-white py-2">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="contact-info">
                <span><i class="fas fa-envelope"></i> informeswe@todowebcusco.com</span>
                <span class="ms-3"><i class="fas fa-phone"></i> +51 913 952 677</span>
            </div>
            <div class="login-btn">
                <a href="#" class="btn btn-sm btn-outline-light">Iniciar Sesión</a>
            </div>
        </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#">TODO WEB <span class="text-accent">CUSCO</span></a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">INICIO</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nosotros">NOSOTROS</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#servicios-web" id="serviciosWebDropdown" role="button" data-bs-toggle="dropdown">SERVICIOS WEB</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Diseño de Páginas web (Dinámicas y estáticas)</a></li>
                            <li><a class="dropdown-item" href="#">Woocommerce</a></li>
                            <li><a class="dropdown-item" href="#">Diseño de sistemas de Ventas WEB</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#marketing-digital" id="marketingDigitalDropdown" role="button" data-bs-toggle="dropdown">MARKETING DIGITAL</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Marketing Facebook</a></li>
                            <li><a class="dropdown-item" href="#">Marketing Instagram</a></li>
                            <li><a class="dropdown-item" href="#">Marketing TikTok</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#soporte-tecnico">SOPORTE TECNICO</a></li>
                    <li class="nav-item"><a class="nav-link" href="#hosting">HOSTING</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">CONTACTO</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section (Inicio) -->
    <section id="inicio" class="hero-section text-center text-white d-flex align-items-center">
        <div class="container">
            <h1 class="display-3 fw-bold">TODO WEB CUSCO</h1>
            <p class="lead">Potenciamos tu negocio en el mundo digital.</p>
            <a href="#contacto" class="btn btn-primary btn-lg mt-4">Solicitar Presupuesto</a>
        </div>
    </section>

    <!-- Nosotros -->
    <section id="nosotros" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="text-accent mb-4">SOBRE NOSOTROS</h2>
                    <p>Somos una empresa cusqueña dedicada a brindar soluciones integrales en el ámbito tecnológico y digital. Nuestra pasión es ayudar a las empresas locales a crecer y modernizarse.</p>
                    <p>Contamos con un equipo de profesionales expertos en desarrollo web, marketing digital y soporte técnico, comprometidos con la excelencia y la satisfacción del cliente.</p>
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c" alt="Sobre Nosotros" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios Web -->
    <section id="servicios-web" class="py-5 bg-black text-white">
        <div class="container">
            <h2 class="text-center text-accent mb-5">SERVICIOS WEB</h2>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="service-card p-4 h-100">
                        <i class="fas fa-laptop-code fa-3x text-accent mb-3"></i>
                        <h4>Diseño Web</h4>
                        <p>Desarrollamos páginas web dinámicas y estáticas adaptadas a tus necesidades.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card p-4 h-100">
                        <i class="fas fa-shopping-cart fa-3x text-accent mb-3"></i>
                        <h4>Woocommerce</h4>
                        <p>Crea tu propia tienda online y vende tus productos en todo el mundo.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card p-4 h-100">
                        <i class="fas fa-cash-register fa-3x text-accent mb-3"></i>
                        <h4>Sistemas de Ventas</h4>
                        <p>Optimiza tu negocio con nuestros sistemas de ventas web personalizados.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Marketing Digital -->
    <section id="marketing-digital" class="py-5 bg-dark text-white text-center">
        <div class="container">
            <h2 class="text-accent mb-5">MARKETING DIGITAL</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="marketing-card p-4 h-100 border border-purple">
                        <i class="fab fa-facebook fa-3x mb-3 text-primary"></i>
                        <h4>Facebook Marketing</h4>
                        <p>Llega a tu audiencia ideal a través de campañas publicitarias efectivas en Facebook.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="marketing-card p-4 h-100 border border-purple">
                        <i class="fab fa-instagram fa-3x mb-3 text-danger"></i>
                        <h4>Instagram Marketing</h4>
                        <p>Mejora tu presencia visual y conecta con más clientes en Instagram.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="marketing-card p-4 h-100 border border-purple">
                        <i class="fab fa-tiktok fa-3x mb-3 text-info"></i>
                        <h4>TikTok Marketing</h4>
                        <p>Aprovecha el poder de los videos cortos para viralizar tu marca.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Soporte Tecnico & Hosting -->
    <section class="py-5 bg-black text-white">
        <div class="container">
            <div class="row g-4">
                <div id="soporte-tecnico" class="col-md-6">
                    <div class="info-box p-5 h-100 bg-dark rounded">
                        <h2 class="text-accent mb-4">SOPORTE TECNICO</h2>
                        <p>Brindamos asistencia técnica especializada para resolver cualquier problema informático en tu empresa.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-green me-2"></i> Mantenimiento preventivo</li>
                            <li><i class="fas fa-check text-green me-2"></i> Reparación de hardware</li>
                            <li><i class="fas fa-check text-green me-2"></i> Optimización de software</li>
                        </ul>
                    </div>
                </div>
                <div id="hosting" class="col-md-6">
                    <div class="info-box p-5 h-100 bg-dark rounded">
                        <h2 class="text-accent mb-4">HOSTING</h2>
                        <p>Aloja tu sitio web en servidores rápidos y seguros con nuestro servicio de hosting de alta calidad.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-green me-2"></i> 99.9% de tiempo de actividad</li>
                            <li><i class="fas fa-check text-green me-2"></i> Soporte 24/7</li>
                            <li><i class="fas fa-check text-green me-2"></i> Certificados SSL incluidos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="py-5 bg-dark text-white">
        <div class="container">
            <h2 class="text-center text-accent mb-5">CONTACTO</h2>
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card bg-black p-4 border-0 shadow">
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Asunto</label>
                                <input type="text" class="form-control" id="subject" name="subject">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
                        </form>
                        <div id="responseMessage" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white text-center py-4 border-top border-purple">
        <div class="container">
            <p class="mb-0">&copy; 2023 Todo Web Cusco. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS & jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
