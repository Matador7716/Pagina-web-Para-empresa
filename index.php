<?php include 'includes/header.php'; ?>

<!-- Hero Slider -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
            <div class="carousel-caption d-none d-md-block text-start">
                <h2>Diseño Web Profesional</h2>
                <p>Creamos experiencias digitales únicas y personalizadas para tu negocio.</p>
                <a href="diseno-web.php" class="btn btn-primary btn-lg" style="background-color: var(--primary-color); border: none;">Ver Más</a>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1557838923-2985c318be48?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
            <div class="carousel-caption d-none d-md-block text-start">
                <h2>Marketing Digital</h2>
                <p>Potenciamos tu presencia online con estrategias creativas y efectivas.</p>
                <a href="servicios.php" class="btn btn-primary btn-lg" style="background-color: var(--primary-color); border: none;">Nuestros Servicios</a>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
            <div class="carousel-caption d-none d-md-block text-start">
                <h2>Tiendas Virtuales</h2>
                <p>Lleva tu negocio al siguiente nivel con nuestras soluciones de E-commerce.</p>
                <a href="tienda-virtual.php" class="btn btn-primary btn-lg" style="background-color: var(--primary-color); border: none;">Empezar Ahora</a>
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
<section class="bg-black py-5">
    <div class="container">
        <h2 class="section-title text-white">Nuestros Servicios Destacados</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 p-4 text-center">
                    <div class="icon-box"><i class="fas fa-laptop-code"></i></div>
                    <h4 class="card-title">Diseño Web</h4>
                    <p>Sitios web modernos, responsivos y optimizados para buscadores.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 p-4 text-center">
                    <div class="icon-box"><i class="fas fa-shopping-cart"></i></div>
                    <h4 class="card-title">Tienda Virtual</h4>
                    <p>Plataformas de venta online seguras y fáciles de administrar.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 p-4 text-center">
                    <div class="icon-box"><i class="fas fa-server"></i></div>
                    <h4 class="card-title">Hosting & Dominios</h4>
                    <p>El mejor alojamiento para tu proyecto con soporte 24/7.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
