<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CandelaWeb - Agencia de Marketing Digital</title>
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

        /* Slider Hero */
        #slider-hero {
            position: relative;
            padding-top: 80px; /* Para compensar el header fijo */
            height: 90vh;
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

            #slider-hero {
                height: 60vh;
                padding-top: 60px;
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
        <!-- 1. Slider Creativo Dinámico -->
        <section id="slider-hero">
            <div class="swiper-container hero-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                        <div class="slide-content">
                            <h1>Diseño de Páginas Web</h1>
                            <p>Creamos sitios web modernos y funcionales.</p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                        <div class="slide-content">
                            <h1>Diseño de Sistemas Web</h1>
                            <p>Desarrollamos sistemas a la medida de tu negocio.</p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                        <div class="slide-content">
                            <h1>Soporte Técnico</h1>
                            <p>Asistencia técnica para tus equipos y proyectos.</p>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <!-- 2. Sección de Presentación -->
        <section id="presentacion">
            <div class="container">
                <div class="texto">
                    <h1>CandelaWeb</h1>
                    <p>En CandelaWeb, transformamos ideas en realidades digitales. Somos un equipo apasionado por la tecnología y el diseño, dedicado a ofrecer soluciones web integrales que impulsan el crecimiento de nuestros clientes. Desde páginas web atractivas hasta sistemas de facturación eficientes, nuestro objetivo es ser tu socio estratégico en el mundo digital.</p>
                </div>
                <div class="imagen">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Equipo de CandelaWeb">
                </div>
            </div>
        </section>

        <!-- 3. Mis Servicios -->
        <section id="servicios">
            <div class="container">
                <h2>Mis Servicios</h2>
                <div class="tarjetas-servicios">
                    <div class="card-servicio">
                        <div class="icono">🌐</div>
                        <h3>Diseño de Páginas Web</h3>
                        <p>Creamos sitios web visualmente atractivos, intuitivos y optimizados para todos los dispositivos.</p>
                        <a href="#" class="boton">Ver más</a>
                    </div>
                    <div class="card-servicio">
                        <div class="icono">💻</div>
                        <h3>Diseño de Sistemas Web</h3>
                        <p>Desarrollamos aplicaciones web a medida para automatizar procesos y mejorar la eficiencia de tu empresa.</p>
                        <a href="#" class="boton">Ver más</a>
                    </div>
                    <div class="card-servicio">
                        <div class="icono">📄</div>
                        <h3>Facturación Electrónica</h3>
                        <p>Integramos soluciones de facturación electrónica para simplificar tu contabilidad y cumplir con la normativa.</p>
                        <a href="#" class="boton">Ver más</a>
                    </div>
                    <div class="card-servicio">
                        <div class="icono">🛠️</div>
                        <h3>Soporte Técnico</h3>
                        <p>Ofrecemos soporte y mantenimiento para tus equipos informáticos y proyectos web, garantizando su óptimo funcionamiento.</p>
                        <a href="#" class="boton">Ver más</a>
                    </div>
                    <div class="card-servicio">
                        <div class="icono"><i class="fas fa-bullhorn"></i></div>
                        <h3>Marketing en Redes Sociales</h3>
                        <p>Gestionamos tus redes sociales para aumentar tu visibilidad y conectar con tu audiencia de manera efectiva.</p>
                        <a href="#" class="boton">Ver más</a>
                    </div>
                    <div class="card-servicio">
                        <div class="icono"><i class="fas fa-laptop"></i></div>
                        <h3>Venta de Equipos Informáticos</h3>
                        <p>Proveemos equipos informáticos de última generación, adecuados a tus necesidades y presupuesto.</p>
                        <a href="#" class="boton">Ver más</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Mis Proyectos -->
        <section id="proyectos">
            <div class="container">
                <h2>Mis Proyectos</h2>
                <div class="swiper-container proyectos-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card-proyecto">
                                <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Proyecto 1">
                                <h3>Proyecto E-commerce</h3>
                                <p>Desarrollamos una tienda online completa para una marca de moda, con un diseño atractivo, pasarela de pagos segura y un panel de administración intuitivo.</p>
                                <a href="#" class="boton">Ver proyecto</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-proyecto">
                                <img src="https://images.pexels.com/photos/38544/imac-apple-mockup-app-38544.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Proyecto 2">
                                <h3>Sistema de Reservas</h3>
                                <p>Creación de una plataforma web para la gestión de reservas de un hotel, permitiendo a los clientes consultar disponibilidad y pagar de forma segura.</p>
                                <a href="#" class="boton">Ver proyecto</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-proyecto">
                                <img src="https://images.pexels.com/photos/1029757/pexels-photo-1029757.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Proyecto 3">
                                <h3>Web Corporativa</h3>
                                <p>Diseñamos un sitio web corporativo para una consultora financiera, enfocado en transmitir profesionalismo y confianza a sus clientes potenciales.</p>
                                <a href="#" class="boton">Ver proyecto</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>

        <!-- 5. Comentarios "Ellos opinan" -->
        <section id="comentarios">
            <div class="container">
                <h2>Ellos Opinan</h2>
                <div class="swiper-container comentarios-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card-comentario">
                                <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?q=80&w=2071&auto=format&fit=crop" alt="Foto de Carlos" class="autor-foto">
                                <p>"El equipo de CandelaWeb superó nuestras expectativas. El nuevo sitio web es fantástico y fácil de usar."</p>
                                <span class="autor-nombre">Carlos Rodríguez</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-comentario">
                                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1976&auto=format&fit=crop" alt="Foto de Ana" class="autor-foto">
                                <p>"El sistema de facturación que desarrollaron para nosotros nos ha ahorrado incontables horas de trabajo."</p>
                                <span class="autor-nombre">Ana Gómez</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-comentario">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1974&auto=format&fit=crop" alt="Foto de Javier" class="autor-foto">
                                <p>"Siempre están disponibles para ayudarnos con cualquier problema técnico. ¡Un servicio de primera!"</p>
                                <span class="autor-nombre">Javier Martinez</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-comentario">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1974&auto=format&fit=crop" alt="Foto de Laura" class="autor-foto">
                                <p>"Gracias a su estrategia de marketing, nuestra visibilidad en redes sociales ha aumentado exponencialmente."</p>
                                <span class="autor-nombre">Laura Fernández</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-comentario">
                                <img src="https://images.unsplash.com/photo-1583864697784-a0efc8379f70?q=80&w=1980&auto=format&fit=crop" alt="Foto de Miguel" class="autor-foto">
                                <p>"Compramos todos nuestros equipos informáticos a través de ellos y el servicio postventa es inmejorable."</p>
                                <span class="autor-nombre">Miguel Ángel</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-comentario">
                                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=1961&auto=format&fit=crop" alt="Foto de Sofía" class="autor-foto">
                                <p>"El diseño de nuestro sistema web interno ha optimizado nuestros procesos de una manera que no creíamos posible."</p>
                                <span class="autor-nombre">Sofía Castillo</span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-comentario">
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop" alt="Foto de David" class="autor-foto">
                                <p>"Profesionalismo, creatividad y compromiso. CandelaWeb es, sin duda, nuestro socio tecnológico de confianza."</p>
                                <span class="autor-nombre">David Reyes</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- 6. ¿Quieres hablar con un asesor? -->
        <section id="contacto-asesor">
            <div class="container">
                <h2>¿Quieres hablar con un asesor?</h2>
                <p>Estamos listos para ayudarte a llevar tu proyecto al siguiente nivel. Contáctanos para una consulta gratuita.</p>
                <div class="botones-contacto">
                    <a href="#" class="boton contacto"><i class="fas fa-envelope"></i>Contáctanos</a>
                    <a href="https://wa.me/51935209781" class="boton whatsapp"><i class="fab fa-whatsapp"></i>Asesor en línea</a>
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

            // Slider Hero
            var heroSlider = new Swiper('.hero-slider', {
                loop: true,
                effect: 'fade',
                autoplay: {
                    delay: 2000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

            // Carrusel de Proyectos
            var proyectosSlider = new Swiper('.proyectos-slider', {
                slidesPerView: 1,
                spaceBetween: 30,
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
