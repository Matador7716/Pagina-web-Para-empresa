<?php include 'includes/header.php'; ?>

<!-- Hero Slider -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
            <div class="carousel-caption d-none d-md-block text-start">
                <span class="badge mb-3" style="background-color: var(--primary-color); color: var(--secondary-color); font-size: 1rem;">EXPERIENCIA DIGITAL</span>
                <h2>Diseño Web <br><span style="color: white;">Profesional & Creativo</span></h2>
                <p class="fs-4">Creamos experiencias digitales únicas que cautivan a tu audiencia y <br>potencian la identidad de tu marca en el mundo digital.</p>
                <div class="mt-4">
                    <a href="diseno-web.php" class="btn btn-primary btn-lg me-3" style="background-color: var(--primary-color); border: none; padding: 12px 30px;">Descubrir Más</a>
                    <a href="contacto.php" class="btn btn-outline-light btn-lg" style="padding: 12px 30px;">Empezar Proyecto</a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1557838923-2985c318be48?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
            <div class="carousel-caption d-none d-md-block text-start">
                <span class="badge mb-3" style="background-color: var(--primary-color); color: var(--secondary-color); font-size: 1rem;">ESTRATEGIA ONLINE</span>
                <h2>Marketing <br><span style="color: white;">Digital Inteligente</span></h2>
                <p class="fs-4">Potenciamos tu presencia online con estrategias creativas y efectivas <br>diseñadas para generar un impacto real en tu crecimiento.</p>
                <div class="mt-4">
                    <a href="servicios.php" class="btn btn-primary btn-lg me-3" style="background-color: var(--primary-color); border: none; padding: 12px 30px;">Nuestros Servicios</a>
                    <a href="contacto.php" class="btn btn-outline-light btn-lg" style="padding: 12px 30px;">Contactar</a>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
            <div class="carousel-caption d-none d-md-block text-start">
                <span class="badge mb-3" style="background-color: var(--primary-color); color: var(--secondary-color); font-size: 1rem;">VENTAS GLOBALES</span>
                <h2>Tiendas <br><span style="color: white;">Virtuales de Alto Rendimiento</span></h2>
                <p class="fs-4">Lleva tu negocio al siguiente nivel con nuestras soluciones de <br>E-commerce optimizadas para convertir visitantes en clientes fieles.</p>
                <div class="mt-4">
                    <a href="tienda-virtual.php" class="btn btn-primary btn-lg me-3" style="background-color: var(--primary-color); border: none; padding: 12px 30px;">Ver Tiendas</a>
                    <a href="contacto.php" class="btn btn-outline-light btn-lg" style="padding: 12px 30px;">Ver Cotización</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Welcome Section -->
<section class="welcome-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="section-title text-start">Bienvenidos a <span style="color: var(--primary-color)">CandelaWeb</span></h1>
                <p class="lead">Somos tu socio estratégico en el mundo digital. En CandelaWeb, transformamos ideas en realidades digitales de alto impacto.</p>
                <p>Nos especializamos en diseño web creativo, desarrollo de sistemas a medida y estrategias de marketing que generan resultados reales para nuestros clientes.</p>
                <a href="nosotros.php" class="btn btn-outline-dark mt-3">Conócenos Más</a>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Team" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="bg-black">
    <div class="container">
        <h2 class="section-title text-white">Nuestros Servicios Destacados</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 p-4 text-center">
                    <div class="icon-box"><i class="fas fa-laptop-code"></i></div>
                    <h4 class="card-title">Diseño Web</h4>
                    <p>Sitios web modernos, responsivos y optimizados para buscadores.</p>
                    <a href="diseno-web.php" class="btn btn-link text-decoration-none">Ver más <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 p-4 text-center">
                    <div class="icon-box"><i class="fas fa-shopping-cart"></i></div>
                    <h4 class="card-title">Tienda Virtual</h4>
                    <p>Plataformas de venta online seguras y fáciles de administrar.</p>
                    <a href="tienda-virtual.php" class="btn btn-link text-decoration-none">Ver más <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 p-4 text-center">
                    <div class="icon-box"><i class="fas fa-server"></i></div>
                    <h4 class="card-title">Hosting & Dominios</h4>
                    <p>El mejor alojamiento para tu proyecto con soporte 24/7.</p>
                    <a href="servicios.php#hosting" class="btn btn-link text-decoration-none">Ver más <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <span class="stat-number">150+</span>
                    <p class="mb-0">Proyectos Web</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <span class="stat-number">200+</span>
                    <p class="mb-0">Clientes Felices</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <span class="stat-number">10+</span>
                    <p class="mb-0">Años Experiencia</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <span class="stat-number">24/7</span>
                    <p class="mb-0">Soporte Técnico</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Process" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h2 class="section-title text-start mt-4 mt-md-0">¿Por qué elegir <span style="color: var(--primary-color)">CandelaWeb</span>?</h2>
                <div class="d-flex mb-4">
                    <div class="icon-box me-3"><i class="fas fa-check-circle"></i></div>
                    <div>
                        <h5>Creatividad Sin Límites</h5>
                        <p>No usamos plantillas genéricas. Cada diseño es único y adaptado a la identidad de tu marca.</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="icon-box me-3"><i class="fas fa-check-circle"></i></div>
                    <div>
                        <h5>Tecnología de Vanguardia</h5>
                        <p>Utilizamos las últimas herramientas y lenguajes para asegurar sitios rápidos y seguros.</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="icon-box me-3"><i class="fas fa-check-circle"></i></div>
                    <div>
                        <h5>Enfoque en Resultados</h5>
                        <p>Nuestro objetivo es que tu inversión retorne a través de más ventas y mejor posicionamiento.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Process -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Nuestro Proceso Creativo</h2>
        <div class="row mt-5">
            <div class="col-md-3 mb-4">
                <div class="process-step bg-white shadow-sm h-100">
                    <div class="step-number">01</div>
                    <h5 class="mt-3">Briefing</h5>
                    <p>Analizamos tus necesidades y objetivos para trazar la mejor estrategia.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="process-step bg-white shadow-sm h-100">
                    <div class="step-number">02</div>
                    <h5 class="mt-3">Diseño</h5>
                    <p>Creamos los mockups y la interfaz visual de tu proyecto digital.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="process-step bg-white shadow-sm h-100">
                    <div class="step-number">03</div>
                    <h5 class="mt-3">Desarrollo</h5>
                    <p>Nuestros expertos codifican y dan vida a la estructura de tu web.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="process-step bg-white shadow-sm h-100">
                    <div class="step-number">04</div>
                    <h5 class="mt-3">Lanzamiento</h5>
                    <p>Probamos, optimizamos y publicamos tu sitio al mundo entero.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="bg-black py-5 text-center text-white">
    <div class="container">
        <h2 class="mb-4">¿Listo para comenzar tu proyecto digital?</h2>
        <p class="lead mb-5">Déjanos ayudarte a destacar en internet con soluciones creativas y profesionales.</p>
        <a href="contacto.php" class="btn btn-primary btn-lg" style="background-color: var(--primary-color); border: none; padding: 15px 40px;">Solicitar Cotización</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
