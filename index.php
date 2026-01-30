<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CandelaWeb - Soluciones Digitales Creativas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Add Slick Slider for creative carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>

    <!-- Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="contact-info">
                <a href="tel:+51935209781"><i class="fas fa-phone"></i> +51 935 209 781</a>
                <a href="mailto:informasweb@candelaweb.com"><i class="fas fa-envelope"></i> informasweb@candelaweb.com</a>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/51935209781"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav>
        <div class="container">
            <div class="logo">
                <h1>Candela<span>Web</span></h1>
            </div>
            <ul class="nav-links">
                <li><a href="#inicio">INICIO</a></li>
                <li><a href="#nosotros">NOSOTROS</a></li>
                <li class="dropdown">
                    <a href="#servicios">SERVICIOS <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="#diseno-web">Diseño de páginas web</a>
                        <a href="#woocommerce">Diseño de WooCommerce</a>
                        <a href="#facturas">Facturas electrónicas</a>
                        <a href="#sistemas-escritorio">Sistemas de escritorio</a>
                        <a href="#sistemas-web">Sistemas Web</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#hardware">HARDWARE <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="#soporte">Soporte técnico</a>
                        <a href="#venta">Venta de equipos</a>
                        <a href="#asesoria">Asesoría informática</a>
                    </div>
                </li>
                <li><a href="#proyectos">PROYECTOS</a></li>
                <li><a href="#marketing">MARKETING</a></li>
                <li><a href="#cursos">CURSOS</a></li>
                <li><a href="#contacto">CONTACTO</a></li>
            </ul>
        </div>
    </nav>

    <!-- Inicio Section -->
    <section id="inicio" class="hero-section">
        <div class="main-slider">
            <div class="slide" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://picsum.photos/id/1/1200/600');">
                <div class="slide-content">
                    <h2>Enciende tu Presencia Digital</h2>
                    <p>Diseño y Desarrollo Web con la chispa de la innovación.</p>
                    <a href="#contacto" class="btn-main">EMPEZAR AHORA</a>
                </div>
            </div>
            <div class="slide" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://picsum.photos/id/2/1200/600');">
                <div class="slide-content">
                    <h2>Soporte Técnico Especializado</h2>
                    <p>Cuidamos tus equipos para que tu negocio nunca se detenga.</p>
                    <a href="#hardware" class="btn-main">SABER MÁS</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="services-overview">
        <div class="section-title">
            <h2>Nuestros Servicios</h2>
            <p>Soluciones integrales para el crecimiento de tu empresa</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <i class="fas fa-laptop-code"></i>
                <h3>Diseño Web</h3>
                <p>Creamos sitios dinámicos y profesionales adaptados a tus necesidades.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-shopping-cart"></i>
                <h3>E-commerce</h3>
                <p>Tiendas online potentes con WooCommerce y pasarelas de pago.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-tools"></i>
                <h3>Soporte Técnico</h3>
                <p>Mantenimiento y repotenciación de tus equipos informáticos.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-file-invoice-dollar"></i>
                <h3>Facturación</h3>
                <p>Sistemas de facturación electrónica validados por SUNAT.</p>
            </div>
        </div>
    </section>

    <!-- Nosotros Section -->
    <section id="nosotros" class="about-section">
        <div class="section-title">
            <h2>Nosotros</h2>
            <p>Conoce la chispa que enciende tus ideas</p>
        </div>
        <div class="brand-concept">
            <h3>Concepto de Marca – CandelaWeb</h3>
            <p>CandelaWeb es la chispa que enciende ideas digitales. Unimos diseño, tecnología y estrategia para transformar proyectos en experiencias digitales funcionales, atractivas y memorables. Creemos en la tecnología con alma: soluciones que no solo funcionan, sino que conectan, impactan y hacen crecer a las marcas.</p>
        </div>
        <div class="mission-vision">
            <div class="mission-box">
                <h4>Misión</h4>
                <p>Impulsar a personas, emprendedores y empresas mediante soluciones digitales creativas y eficientes, ofreciendo diseño web, desarrollo y servicios informáticos que combinan innovación, funcionalidad y cercanía humana.</p>
            </div>
            <div class="vision-box">
                <h4>Visión</h4>
                <p>Ser una marca referente en el mundo digital por encender proyectos con creatividad, confianza y tecnología inteligente, convirtiéndonos en aliados estratégicos de quienes buscan crecer y destacarse en el entorno digital.</p>
            </div>
        </div>
        <div class="values">
            <h4>Nuestros Valores</h4>
            <div class="values-grid">
                <div class="value-item"><strong>Creatividad que enciende:</strong> Pensamos diferente. Cada proyecto es único.</div>
                <div class="value-item"><strong>Cercanía y compromiso:</strong> Trabajamos de la mano con nuestros clientes.</div>
                <div class="value-item"><strong>Innovación constante:</strong> Evolucionamos con las nuevas tecnologías.</div>
                <div class="value-item"><strong>Calidad y detalle:</strong> Cuidamos cada aspecto del diseño y programación.</div>
                <div class="value-item"><strong>Crecimiento compartido:</strong> Si tú creces, nosotros crecemos.</div>
            </div>
        </div>

        <!-- Facebook Style Reviews -->
        <div class="reviews-section">
            <h4>Lo que dicen de nosotros</h4>
            <div class="reviews-grid">
                <div class="fb-card">
                    <div class="fb-header">
                        <img src="https://i.pravatar.cc/150?u=1" alt="User">
                        <div>
                            <div class="fb-user-name">Juan Pérez</div>
                            <div class="fb-date">Hace 2 días</div>
                        </div>
                    </div>
                    <p>Excelente servicio, mi página web quedó increíble y el soporte es de primera. ¡Muy recomendados!</p>
                    <div class="fb-footer">
                        <span><i class="far fa-thumbs-up"></i> Me gusta</span>
                        <span><i class="far fa-comment"></i> Comentar</span>
                        <span><i class="fas fa-share"></i> Compartir</span>
                    </div>
                </div>
                <div class="fb-card">
                    <div class="fb-header">
                        <img src="https://i.pravatar.cc/150?u=2" alt="User">
                        <div>
                            <div class="fb-user-name">Maria Garcia</div>
                            <div class="fb-date">Hace 1 semana</div>
                        </div>
                    </div>
                    <p>CandelaWeb nos ayudó con la facturación electrónica y fue súper rápido. El asesor online es muy atento.</p>
                    <div class="fb-footer">
                        <span><i class="far fa-thumbs-up"></i> Me gusta</span>
                        <span><i class="far fa-comment"></i> Comentar</span>
                        <span><i class="fas fa-share"></i> Compartir</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios Section -->
    <section id="servicios" class="services-detail">
        <div class="section-title">
            <h2>Nuestros Servicios en Detalle</h2>
            <p>Especialistas en transformar tu negocio al mundo digital</p>
        </div>

        <!-- Diseño Web -->
        <div id="diseno-web" class="service-category">
            <h3><i class="fas fa-code"></i> Diseño de Páginas Web</h3>
            <p>Ofrecemos diseño de páginas web dinámicas y estáticas para todas las empresas, con tecnología de vanguardia.</p>

            <div class="pricing-grid">
                <!-- Básico -->
                <div class="price-card">
                    <h4>Básico</h4>
                    <div class="price">S/ 450</div>
                    <ul>
                        <li><i class="fas fa-check text-success"></i> En WordPress</li>
                        <li><i class="fas fa-check text-success"></i> Diseño Adaptable</li>
                        <li><i class="fas fa-check text-success"></i> 3 Secciones</li>
                        <li><i class="fas fa-check text-success"></i> Soporte 24/7</li>
                    </ul>
                    <a href="https://wa.me/51935209781?text=Hola,%20me%20interesa%20el%20plan%20Básico%20de%20diseño%20web" class="btn-price">CONTRATAR</a>
                </div>
                <!-- General -->
                <div class="price-card featured">
                    <div class="badge-popular">MÁS POPULAR</div>
                    <h4>General</h4>
                    <div class="price">S/ 700</div>
                    <ul>
                        <li><i class="fas fa-check text-success"></i> En WordPress Avanzado</li>
                        <li><i class="fas fa-check text-success"></i> Diseño Premium</li>
                        <li><i class="fas fa-check text-success"></i> 6 Secciones</li>
                        <li><i class="fas fa-check text-success"></i> Formulario de Contacto</li>
                        <li><i class="fas fa-check text-success"></i> Optimización SEO</li>
                    </ul>
                    <a href="https://wa.me/51935209781?text=Hola,%20me%20interesa%20el%20plan%20General%20de%20diseño%20web" class="btn-price">CONTRATAR</a>
                </div>
                <!-- Profesional -->
                <div class="price-card">
                    <h4>Profesional</h4>
                    <div class="price">S/ 1700</div>
                    <ul>
                        <li><i class="fas fa-check text-success"></i> Puro Código (HTML/JS/PHP)</li>
                        <li><i class="fas fa-check text-success"></i> CMS a medida</li>
                        <li><i class="fas fa-check text-success"></i> Secciones Ilimitadas</li>
                        <li><i class="fas fa-check text-success"></i> Máxima Velocidad</li>
                        <li><i class="fas fa-check text-success"></i> Panel Administrable</li>
                    </ul>
                    <a href="https://wa.me/51935209781?text=Hola,%20me%20interesa%20el%20plan%20Profesional%20de%20diseño%20web" class="btn-price">CONTRATAR</a>
                </div>
            </div>
        </div>

        <!-- WooCommerce -->
        <div id="woocommerce" class="service-category" style="margin-top: 80px;">
            <h3><i class="fas fa-shopping-bag"></i> Diseño de WooCommerce</h3>
            <p>Tu tienda online con pasarelas de pago listas para vender.</p>
            <div class="pricing-grid" style="justify-content: center;">
                 <div class="price-card">
                    <h4>WooCommerce General</h4>
                    <p>Tienda básica con todo lo necesario para empezar.</p>
                    <a href="https://wa.me/51935209781" class="btn-price">Consultar Precio</a>
                </div>
                <div class="price-card">
                    <h4>WooCommerce Profesional</h4>
                    <p>Tienda completa con integraciones avanzadas.</p>
                    <a href="https://wa.me/51935209781" class="btn-price">Consultar Precio</a>
                </div>
            </div>
        </div>

        <!-- Other Services -->
        <div class="services-grid" style="margin-top: 80px;">
            <div id="facturas" class="info-card" style="background: var(--primary-color);">
                <h3>Venta de facturas electrónicas</h3>
                <p>Creamos facturas electrónicas con código y validación de la SUNAT para tu empresa.</p>
            </div>
            <div id="sistemas-escritorio" class="info-card" style="background: var(--secondary-color);">
                <h3>Diseño de sistemas de escritorio</h3>
                <p>Optimizamos las actividades de tu empresa con múltiples funciones con un enfoque de sistemas de escritorio.</p>
            </div>
            <div id="sistemas-web" class="info-card" style="background: var(--primary-color);">
                <h3>Diseño de sistemas web</h3>
                <p>Sistemas robustos accesibles desde cualquier lugar para gestionar tu negocio eficazmente.</p>
            </div>
        </div>
    </section>

    <!-- Hardware Section -->
    <section id="hardware" class="hardware-section" style="background: var(--bg-light); max-width: 100%;">
        <div class="container">
            <div class="section-title">
                <h2>Hardware & Soporte</h2>
                <p>Tu infraestructura tecnológica en las mejores manos</p>
            </div>
            <div class="hardware-grid">
                <div id="soporte" class="hw-card">
                    <img src="https://picsum.photos/id/3/400/300" alt="Soporte Técnico">
                    <div class="hw-card-body">
                        <h3>Soporte Técnico</h3>
                        <p>Soporte para todos tus equipos informáticos: cambio de piezas, repotenciación y más.</p>
                    </div>
                </div>
                <div id="venta" class="hw-card">
                    <img src="https://picsum.photos/id/4/400/300" alt="Venta de equipos">
                    <div class="hw-card-body">
                        <h3>Venta de Equipos</h3>
                        <p>Computadoras completas, CPUs, laptops, impresoras y periféricos de las mejores marcas.</p>
                    </div>
                </div>
                <div id="asesoria" class="hw-card">
                    <img src="https://picsum.photos/id/5/400/300" alt="Asesoría">
                    <div class="hw-card-body">
                        <h3>Asesoría Informática</h3>
                        <p>Te guiamos en tus proyectos web, escritorio y en la compra de tus equipos informáticos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Proyectos Section -->
    <section id="proyectos" class="projects-section">
        <div class="section-title">
            <h2>Nuestros Proyectos</h2>
            <p>Casos de éxito que respaldan nuestra experiencia</p>
        </div>
        <div class="projects-grid">
            <?php
            $result = $conn->query("SELECT * FROM projects");
            if ($result->num_rows > 0):
                while($project = $result->fetch_assoc()):
            ?>
            <div class="project-card">
                <img src="<?php echo $project['image_url']; ?>" alt="<?php echo $project['title']; ?>" onerror="this.src='https://picsum.photos/id/<?php echo rand(1,100); ?>/400/300'">
                <div class="project-card-body">
                    <h3><?php echo $project['title']; ?></h3>
                    <div class="btn-group">
                        <a href="<?php echo $project['project_link']; ?>" class="btn-sm" style="background: var(--primary-color);">VER PROYECTO</a>
                        <a href="https://wa.me/51935209781" class="btn-sm" style="background: #25d366;">CONTACTO</a>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
            else:
                echo "<p>Próximamente mostraremos nuestros proyectos.</p>";
            endif;
            ?>
        </div>
    </section>

    <!-- Marketing Digital Section -->
    <section id="marketing" class="marketing-section" style="background: var(--secondary-color); color: white; max-width: 100%;">
        <div class="container">
            <div class="section-title">
                <h2 style="color: white;">Marketing Digital</h2>
                <p>Impulsa tu marca y llega a más clientes</p>
            </div>
            <div class="marketing-content">
                <div class="marketing-text">
                    <h3 style="color: var(--accent-color);">Estrategias SEO de alto impacto</h3>
                    <p>Ofrecemos servicios de marketing digital con un SEO hecho y creado para que tu empresa salga y crezca rápidamente en los motores de búsqueda. Nos enfocamos en resultados medibles y crecimiento sostenido.</p>
                    <ul style="list-style: none; padding: 0; margin-top: 20px;">
                        <li><i class="fas fa-check-circle" style="color: var(--accent-color);"></i> Posicionamiento en Google</li>
                        <li><i class="fas fa-check-circle" style="color: var(--accent-color);"></i> Gestión de Redes Sociales</li>
                        <li><i class="fas fa-check-circle" style="color: var(--accent-color);"></i> Campañas de Ads</li>
                    </ul>
                </div>
                <div class="marketing-icon">
                    <i class="fas fa-chart-line" style="font-size: 10rem; color: var(--accent-color);"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Cursos Section -->
    <section id="cursos" class="courses-section">
        <div class="section-title">
            <h2>Cursos Web</h2>
            <p>Capacítate con los expertos y enciende tu futuro</p>
        </div>
        <div class="courses-grid">
            <?php
            $result = $conn->query("SELECT * FROM courses");
            if ($result->num_rows > 0):
                while($course = $result->fetch_assoc()):
            ?>
            <div class="course-card">
                <img src="<?php echo $course['image_url']; ?>" alt="<?php echo $course['title']; ?>" onerror="this.src='https://picsum.photos/id/<?php echo rand(101,200); ?>/400/300'">
                <div class="course-card-body">
                    <h4><?php echo $course['title']; ?></h4>
                    <div class="btn-group">
                        <a href="#" class="btn-xs" style="background: var(--primary-color);">VER PROYECTO</a>
                        <a href="https://wa.me/51935209781" class="btn-xs" style="background: #25d366;">CONTACTO</a>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
            else:
                echo "<p>Próximamente nuevos cursos.</p>";
            endif;
            ?>
        </div>
    </section>

    <!-- Contacto Section -->
    <section id="contacto" class="contact-section" style="background: var(--bg-light); max-width: 100%;">
        <div class="container">
            <div class="section-title">
                <h2>Contacto</h2>
                <p>Estamos listos para iniciar tu próximo proyecto</p>
            </div>
            <div class="contact-grid">
                <div class="contact-info-details">
                    <h3>Información de Contacto</h3>
                    <p><i class="fas fa-phone" style="color: var(--primary-color); width: 30px;"></i> +51 935 209 781</p>
                    <p><i class="fas fa-envelope" style="color: var(--primary-color); width: 30px;"></i> informasweb@candelaweb.com</p>
                    <p><i class="fas fa-map-marker-alt" style="color: var(--primary-color); width: 30px;"></i> Lima, Perú</p>
                    <div class="social-links-large">
                        <a href="#" style="color: #3b5998;"><i class="fab fa-facebook"></i></a>
                        <a href="#" style="color: #000;"><i class="fab fa-tiktok"></i></a>
                        <a href="#" style="color: #e1306c;"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/51935209781" style="color: #25d366;"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <div style="margin-top: 30px;">
                        <a href="https://wa.me/51935209781" class="btn-asesor">
                            <i class="fas fa-comments"></i> ASESOR ONLINE
                        </a>
                    </div>
                </div>
                <div class="contact-form-container">
                    <form action="php_logic/contact.php" method="POST" class="contact-form">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Nombre Completo" required class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Correo Electrónico" required class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Asunto" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Tu Mensaje" rows="5" required class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn-submit">ENVIAR MENSAJE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Floating Icons -->
    <div class="floating-container">
        <a href="#" class="floating-icon floating-chat" title="Asesor Online"><i class="fas fa-comments"></i></a>
        <a href="https://wa.me/51935209781" class="floating-icon floating-whatsapp" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 CandelaWeb. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
