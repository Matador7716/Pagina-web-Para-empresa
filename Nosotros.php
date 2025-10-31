<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - CandelaWeb</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Poppins:wght@300;400;600&display=swap');

        /* Estilos Generales */
        :root {
            --primary-color: #000000; /* Negro */
            --secondary-color: #006400; /* Verde Oscuro */
            --white-color: #FFFFFF; /* Blanco */
            --text-color-light: #FFFFFF;
            --text-color-dark: #333; /* Un gris oscuro para texto sobre fondos claros */
        }

        body {
            font-family: 'Orbitron', sans-serif;
            margin: 0;
            color: var(--text-color-light);
            background-color: var(--primary-color); /* Fondo negro */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        h1, h2, h3 {
            font-weight: 700; /* Bold */
            text-transform: uppercase; /* Mayuscula */
        }

        h2 {
            text-align: center;
            margin-bottom: 50px;
            font-size: 3rem; /* Mas grande */
            color: var(--white-color);
        }

        section {
            padding: 80px 0;
        }

        /* Header */
        #top-header {
            background-color: #111;
            padding: 10px 0;
            border-bottom: 1px solid var(--secondary-color);
        }

        #top-header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .social-icons a {
            color: var(--white-color);
            margin-right: 15px;
            font-size: 1.2rem;
        }

        .contact-info span {
            margin-right: 20px;
        }

        .top-header-button {
            background-color: var(--secondary-color);
            color: var(--white-color);
            padding: 5px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        header {
            position: sticky;
            top: 0;
            left: 0;
            width: 100%;
            background-color: var(--primary-color);
            box-shadow: 0 2px 8px rgba(0, 100, 0, 0.5); /* Sombra verde */
            z-index: 1000;
            padding: 15px 0;
            border-bottom: 1px solid var(--secondary-color);
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--white-color);
            text-decoration: none;
            text-transform: uppercase;
        }
        .logo span {
            color: var(--secondary-color);
        }


        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--white-color);
            font-weight: 500;
            transition: color 0.3s ease;
            text-transform: uppercase;
        }

        .nav-links a:hover {
            color: var(--secondary-color);
        }

        .hamburger-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Page Header */
        .page-header {
            position: relative;
            padding: 150px 0 100px;
            text-align: center;
            color: var(--white-color);
            background-size: cover;
            background-position: center;
            z-index: 1;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }

        .page-header h1 {
            font-size: 4rem;
            text-transform: uppercase;
        }

        /* Content Section */
        .content-section {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .content-section .text {
            flex: 1;
        }

        .content-section .image {
            flex: 1;
        }

        .content-section img {
            max-width: 100%;
            border-radius: 10px;
            border: 2px solid var(--secondary-color);
        }

        /* Alternating layout */
        .content-section:nth-child(even) {
            flex-direction: row-reverse;
        }

        /* Services Carousel */
        #servicios-carrusel {
            background-color: var(--secondary-color);
        }

        .servicio-card {
            background-color: #111;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid var(--white-color);
        }

        .servicio-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .servicio-card-content {
            padding: 20px;
        }

        .servicio-card-content h3 {
            font-size: 1.5rem;
            margin-top: 0;
        }

        .servicio-card .boton {
            background-color: var(--primary-color);
            color: var(--white-color);
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 15px;
            border: 1px solid var(--white-color);
            transition: background-color 0.3s, color 0.3s;
        }

        .servicio-card .boton:hover {
            background-color: var(--white-color);
            color: var(--primary-color);
        }

        /* Team Section */
        #nuestro-personal {
            background-color: var(--primary-color);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .team-card {
            background-color: #111;
            padding: 20px;
            text-align: center;
            border: 1px solid var(--secondary-color);
            border-radius: 10px;
        }

        .team-card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 2px solid var(--secondary-color);
        }

        .team-card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .team-card p.role {
            color: var(--secondary-color);
            font-weight: bold;
            text-transform: uppercase;
        }


        /* Slider Hero */
        #slider-hero {
            position: relative;
            padding-top: 80px; /* Para compensar el header fijo */
            height: 100vh;
            background-color: var(--primary-color);
            overflow: hidden;
        }

        #slider-hero .swiper-button-next,
        #slider-hero .swiper-button-prev {
            color: var(--secondary-color);
        }

        #slider-hero .swiper-pagination-bullet-active {
            background: var(--secondary-color);
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: var(--white-color);
            background-size: cover;
            background-position: center;
        }

        .swiper-slide .slide-content {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            border: 1px solid var(--secondary-color);
        }

        .swiper-slide h1 {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        /* Presentación */
        #presentacion .container {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        #presentacion .texto {
            flex: 1;
        }

        #presentacion .texto p {
            color: #ccc;
            font-family: 'Poppins', sans-serif; /* Usar una fuente más legible para párrafos */
        }

        #presentacion .imagen {
            flex: 1;
        }

        #presentacion img {
            max-width: 100%;
            border-radius: 10px;
            border: 2px solid var(--secondary-color);
        }

        /* Servicios */
        #servicios {
            background-color: var(--primary-color);
        }

        .tarjetas-servicios {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .card-servicio {
            background-color: #111;
            color: var(--white-color);
            padding: 40px;
            text-align: center;
            border-radius: 10px;
            border: 1px solid var(--secondary-color);
            box-shadow: 0 5px 15px rgba(0, 100, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-servicio:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 100, 0, 0.4);
        }

        .card-servicio .icono {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }

        .card-servicio h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .card-servicio p {
            font-family: 'Poppins', sans-serif;
            color: #ccc;
        }

        .card-servicio .boton {
            background-color: var(--secondary-color);
            color: var(--white-color);
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
            text-transform: uppercase;
            border: 1px solid var(--secondary-color);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .card-servicio .boton:hover {
            background-color: var(--white-color);
            color: var(--secondary-color);
        }

        /* Proyectos */
        #proyectos {
            background-color: var(--secondary-color); /* Fondo verde oscuro */
        }

        .carrusel-proyectos {
            position: relative;
        }

        .card-proyecto {
            text-align: center;
            background-color: #111;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid var(--white-color);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card-proyecto:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
        }

        .card-proyecto img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .card-proyecto p {
            font-family: 'Poppins', sans-serif;
            color: #ccc;
        }

        .card-proyecto .boton {
            background-color: var(--primary-color);
            color: var(--white-color);
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
            text-transform: uppercase;
            border: 1px solid var(--white-color);
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .card-proyecto .boton:hover {
            background-color: var(--white-color);
            color: var(--primary-color);
        }


        /* Comentarios */
        #comentarios {
            background-color: var(--primary-color);
        }

        .card-comentario {
            background-color: #111;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            border: 1px solid var(--secondary-color);
            color: var(--white-color);
            max-width: 600px; /* Ancho máximo para una sola columna */
            margin: 0 auto; /* Centrar la tarjeta */
        }

        .card-comentario img.autor-foto {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 2px solid var(--secondary-color);
        }

        .card-comentario p {
            font-family: 'Poppins', sans-serif;
            color: #ccc;
            font-style: italic;
        }

        .card-comentario .autor-nombre {
            display: block;
            margin-top: 20px;
            font-weight: 700;
            color: var(--white-color);
            text-transform: uppercase;
        }

        /* Contacto Asesor */
        #contacto-asesor {
            text-align: center;
            background-color: var(--secondary-color);
        }
        #contacto-asesor p {
            color: #ccc;
            font-family: 'Poppins', sans-serif;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .botones-contacto {
            margin-top: 30px;
        }

        .botones-contacto .boton {
            margin: 10px 15px;
            padding: 15px 30px;
            color: var(--white-color);
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
            border: 2px solid var(--white-color);
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .boton.contacto {
            background-color: transparent;
        }
        .boton.contacto:hover {
            background-color: var(--white-color);
            color: var(--secondary-color);
        }

        .boton.whatsapp {
            background-color: #25D366;
            border-color: #25D366;
        }
        .boton.whatsapp:hover {
            background-color: #1EBE5A;
            border-color: #1EBE5A;
        }

        /* Footer */
        #footer {
            background-color: var(--primary-color);
            color: var(--white-color);
            padding: 50px 0;
            text-align: center;
            border-top: 1px solid var(--secondary-color);
        }

        /* Responsive */
        @media (max-width: 768px) {
            h2 {
                font-size: 2.2rem;
            }

            .hamburger-menu {
                display: block;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                position: fixed;
                top: 0;
                right: -100%;
                width: 70%;
                height: 100vh;
                background-color: #111;
                padding-top: 60px;
                transition: right 0.3s ease-in-out;
            }

            .nav-links.active {
                display: flex;
                right: 0;
            }

            .nav-links li {
                margin: 20px 30px;
            }

            .swiper-slide h1 {
                font-size: 2.5rem;
            }

            .content-section {
                flex-direction: column;
            }

            .content-section:nth-child(even) {
                flex-direction: column;
            }

            #presentacion .container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div id="top-header">
        <div class="container">
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="contact-info">
                <span>informesweb@candelaweb.com</span>
                <a href="#" class="top-header-button"><i class="fas fa-envelope"></i> Contáctanos</a>
            </div>
        </div>
    </div>
    <header>
        <div class="container">
            <a href="inicio.php" class="logo">Candela<span>Web</span></a>
            <ul class="nav-links">
                <li><a href="inicio.php">INICIO</a></li>
                <li><a href="Nosotros.php">NOSOTROS</a></li>
                <li><a href="#">DISEÑO WEB</a></li>
                <li><a href="#">MARKETING</a></li>
                <li><a href="#">SOPORTE TEC</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">CONTACTO</a></li>
            </ul>
            <div class="hamburger-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <main>
        <!-- Cabecera de la Página -->
        <section class="page-header" style="background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070&auto=format&fit=crop');">
            <div class="container">
                <h1>Nosotros</h1>
            </div>
        </section>

        <!-- Sección Sobre Nosotros -->
        <section id="sobre-nosotros">
            <div class="container content-section">
                <div class="text">
                    <h2>Sobre Nosotros</h2>
                    <p>En CandelaWeb, somos más que una agencia de marketing digital; somos arquitectos de la presencia online de tu marca. Fundada con la pasión por la innovación y el compromiso con la excelencia, nuestra misión es transformar tus ideas en soluciones digitales impactantes y efectivas. Creemos en el poder de la tecnología para conectar, inspirar y hacer crecer negocios.</p>
                </div>
                <div class="image">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c7da?q=80&w=2070&auto=format&fit=crop" alt="Equipo de CandelaWeb trabajando">
                </div>
            </div>
        </section>

        <!-- Sección Misión -->
        <section id="mision" style="background-color: #111;">
            <div class="container content-section">
                <div class="text">
                    <h2>Nuestra Misión</h2>
                    <p>Nuestra misión es proporcionar a las empresas las herramientas y estrategias digitales necesarias para prosperar en un mundo conectado. Nos dedicamos a ofrecer servicios de alta calidad, desde el diseño web y desarrollo de sistemas hasta el marketing en redes sociales, asegurando que cada solución sea creativa, funcional y esté alineada con los objetivos de nuestros clientes.</p>
                </div>
                <div class="image">
                    <img src="https://images.unsplash.com/photo-1559526324-c1f275fbfa32?q=80&w=2070&auto=format&fit=crop" alt="Estrategia y planificación">
                </div>
            </div>
        </section>

        <!-- Sección Visión -->
        <section id="vision">
            <div class="container content-section">
                <div class="text">
                    <h2>Nuestra Visión</h2>
                    <p>Aspiramos a ser la agencia de marketing digital líder en innovación y resultados, reconocida por nuestro enfoque centrado en el cliente y nuestra capacidad para adaptarnos a las tendencias tecnológicas. Queremos ser el socio de confianza que impulsa el crecimiento sostenible de empresas de todos los tamaños, convirtiendo sus visiones en realidades digitales exitosas.</p>
                </div>
                <div class="image">
                    <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?q=80&w=2070&auto=format&fit=crop" alt="Futuro tecnológico">
                </div>
            </div>
        </section>

        <!-- Carrusel de Servicios -->
        <section id="servicios-carrusel">
            <div class="container">
                <h2>Nuestros Servicios</h2>
                <div class="swiper-container servicios-slider">
                    <div class="swiper-wrapper">
                        <!-- Tarjeta 1 -->
                        <div class="swiper-slide">
                            <div class="servicio-card">
                                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=2070&auto=format&fit=crop" alt="Diseño Web">
                                <div class="servicio-card-content">
                                    <h3>Diseño de Páginas Web</h3>
                                    <p>Sitios web atractivos y optimizados para todos los dispositivos.</p>
                                    <a href="#" class="boton">Ver servicio ahora</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tarjeta 2 -->
                        <div class="swiper-slide">
                            <div class="servicio-card">
                                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=2070&auto=format&fit=crop" alt="Sistemas Web">
                                <div class="servicio-card-content">
                                    <h3>Diseño de Sistemas Web</h3>
                                    <p>Aplicaciones a medida para mejorar la eficiencia de tu empresa.</p>
                                    <a href="#" class="boton">Ver servicio ahora</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tarjeta 3 -->
                        <div class="swiper-slide">
                            <div class="servicio-card">
                                <img src="https://images.unsplash.com/photo-1554224155-1696413565d3?q=80&w=2070&auto=format&fit=crop" alt="Facturación Electrónica">
                                <div class="servicio-card-content">
                                    <h3>Facturación Electrónica</h3>
                                    <p>Soluciones para simplificar tu contabilidad y cumplir normativas.</p>
                                    <a href="#" class="boton">Ver servicio ahora</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tarjeta 4 -->
                         <div class="swiper-slide">
                            <div class="servicio-card">
                                <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=2070&auto=format&fit=crop" alt="Soporte Técnico">
                                <div class="servicio-card-content">
                                    <h3>Soporte Técnico</h3>
                                    <p>Mantenimiento para tus equipos y proyectos web.</p>
                                    <a href="#" class="boton">Ver servicio ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>

        <!-- Sección Nuestro Personal -->
        <section id="nuestro-personal">
            <div class="container">
                <h2>Nuestro Personal</h2>
                <div class="team-grid">
                    <!-- Miembro 1 -->
                    <div class="team-card">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop" alt="Rudy Alvaro Candela Rimachi">
                        <h3>Rudy Alvaro Candela Rimachi</h3>
                        <p class="role">Desarrollo Web</p>
                        <p>Experto en la creación de soluciones web robustas y escalables, enfocado en el rendimiento y la seguridad.</p>
                    </div>
                    <!-- Miembro 2 -->
                    <div class="team-card">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=1961&auto=format&fit=crop" alt="Karen Linares">
                        <h3>Karen Linares</h3>
                        <p class="role">Diseño Web</p>
                        <p>Creativa y detallista, especializada en diseñar interfaces de usuario intuitivas y atractivas que mejoran la experiencia del usuario.</p>
                    </div>
                    <!-- Miembro 3 -->
                    <div class="team-card">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1976&auto=format&fit=crop" alt="Mirian Caseres">
                        <h3>Mirian Caseres</h3>
                        <p class="role">Marketing Digital</p>
                        <p>Estratega en marketing digital, enfocada en potenciar la visibilidad de marcas a través de SEO, SEM y redes sociales.</p>
                    </div>
                    <!-- Miembro 4 -->
                    <div class="team-card">
                        <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?q=80&w=2071&auto=format&fit=crop" alt="Luis Mendoza">
                        <h3>Luis Mendoza</h3>
                        <p class="role">Técnico Servicios Informáticos</p>
                        <p>Especialista en soporte técnico y mantenimiento de equipos, garantizando el óptimo funcionamiento de la infraestructura tecnológica.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Proyectos -->
        <section id="proyectos-nosotros" style="background-color: #111;">
            <div class="container">
                <h2>Nuestros Proyectos</h2>
                <div class="swiper-container proyectos-slider">
                    <div class="swiper-wrapper">
                        <!-- Proyecto 1 -->
                        <div class="swiper-slide">
                             <div class="card-proyecto">
                                <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Proyecto 1">
                                <h3>Proyecto E-commerce</h3>
                                <p>Desarrollamos una tienda online completa para una marca de moda, con un diseño atractivo, pasarela de pagos segura y un panel de administración intuitivo.</p>
                                <a href="#" class="boton">Ver proyecto</a>
                            </div>
                        </div>
                        <!-- Proyecto 2 -->
                        <div class="swiper-slide">
                            <div class="card-proyecto">
                                <img src="https://images.pexels.com/photos/38544/imac-apple-mockup-app-38544.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Proyecto 2">
                                <h3>Sistema de Reservas</h3>
                                <p>Creación de una plataforma web para la gestión de reservas de un hotel, permitiendo a los clientes consultar disponibilidad y pagar de forma segura.</p>
                                <a href="#" class="boton">Ver proyecto</a>
                            </div>
                        </div>
                        <!-- Proyecto 3 -->
                        <div class="swiper-slide">
                            <div class="card-proyecto">
                                <img src="https://images.pexels.com/photos/1029757/pexels-photo-1029757.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Proyecto 3">
                                <h3>Web Corporativa</h3>
                                <p>Diseñamos un sitio web corporativo para una consultora financiera, enfocado en transmitir profesionalismo y confianza a sus clientes potenciales.</p>
                                <a href="#" class="boton">Ver proyecto</a>
                            </div>
                        </div>
                        <!-- Proyecto 4 -->
                        <div class="swiper-slide">
                            <div class="card-proyecto">
                                <img src="https://images.pexels.com/photos/270637/pexels-photo-270637.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Proyecto 4">
                                <h3>Blog de Tecnología</h3>
                                <p>Lanzamiento de un blog de noticias y artículos sobre tecnología, con un diseño limpio, optimizado para SEO y fácil de gestionar.</p>
                                <a href="#" class="boton">Ver proyecto</a>
                            </div>
                        </div>
                        <!-- Proyecto 5 -->
                        <div class="swiper-slide">
                           <div class="card-proyecto">
                                <img src="https://images.pexels.com/photos/4348401/pexels-photo-4348401.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Proyecto 5">
                                <h3>Plataforma Educativa</h3>
                                <p>Creación de un sistema e-learning para una institución educativa, con funcionalidades para cursos online, seguimiento de alumnos y material interactivo.</p>
                                <a href="#" class="boton">Ver proyecto</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
    </main>

    <!-- 7. Footer Creativo -->
    <footer id="footer">
        <div class="container">
            <p>&copy; 2024 CandelaWeb. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Hamburger Menu
            const hamburger = document.querySelector('.hamburger-menu');
            const navLinks = document.querySelector('.nav-links');

            hamburger.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });

            // Carrusel de Proyectos
            var proyectosSlider = new Swiper('.proyectos-slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });

            // Carrusel de Servicios
            var serviciosSlider = new Swiper('.servicios-slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });

            // Carrusel de Comentarios
            var comentariosSlider = new Swiper('.comentarios-slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });
        });
    </script>
</body>
</html>
