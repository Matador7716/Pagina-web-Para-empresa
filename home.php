<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RA Travel Cusco</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #084749;
            --secondary-color: #d4af37;
            --text-light: #fff;
            --text-dark: #333;
            --bg-light: #fff;
            --bg-grey: #f4f4f4;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: var(--bg-grey);
            color: var(--text-dark);
        }

        section {
            padding: 60px 5%;
        }

        .section-title {
            text-align: center;
            font-size: 2.5em;
            color: var(--primary-color);
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .section-description {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 40px;
            line-height: 1.6;
        }

        .top-header {
            background-color: #000;
            color: var(--text-light);
            padding: 10px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .top-header .left-section { display: flex; align-items: center; gap: 20px; flex-wrap: wrap; }
        .top-header .left-section span, .top-header .left-section a { display: flex; align-items: center; gap: 8px; color: var(--text-light); text-decoration: none; }
        .top-header .social-icons a { color: var(--text-light); margin-left: 15px; text-decoration: none; }

        .main-nav {
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 10px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .main-nav .logo img { height: 50px; }
        .main-nav .nav-links { list-style: none; display: flex; margin: 0; padding: 0; }
        .main-nav .nav-links li { position: relative; }
        .main-nav .nav-links > li > a { color: var(--text-light); padding: 15px 20px; text-decoration: none; display: block; }
        .main-nav .nav-links .submenu { display: none; position: absolute; background-color: var(--primary-color); list-style: none; padding: 0; margin: 0; min-width: 250px; box-shadow: 0 8px 16px rgba(0,0,0,0.2); }
        .main-nav .nav-links li:hover .submenu { display: block; }
        .main-nav .nav-links .submenu li a { color: var(--text-light); padding: 12px 15px; text-decoration: none; display: block; }
        .main-nav .nav-links .submenu li a:hover { background-color: #063a3c; }
        .hamburger { display: none; cursor: pointer; font-size: 24px; color: var(--text-light); }

        .btn { display: inline-block; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold; transition: all 0.3s ease; }
        .btn-primary { background-color: var(--secondary-color); color: #000; }
        .btn-primary:hover { background-color: #c09b2e; transform: translateY(-2px); }
        .btn-secondary { background-color: transparent; border: 2px solid var(--text-light); color: var(--text-light); }
        .btn-secondary:hover { background-color: var(--text-light); color: var(--text-dark); }

        .main-slider { width: 100%; height: 80vh; position: relative; padding: 0; }
        .main-slider .swiper-slide { display: flex; align-items: center; justify-content: center; text-align: center; color: var(--text-light); background-size: cover; background-position: center; }
        .main-slider .swiper-slide::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); }

        .main-slider .swiper-slide .slider-content {
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .main-slider .swiper-slide-active .slider-content {
            opacity: 1;
        }

        .slider-content { position: relative; z-index: 1; max-width: 800px; padding: 20px; }
        .slider-content h1 { font-size: 3em; margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); }
        .slider-content p { font-size: 1.2em; margin-bottom: 30px; }
        .slider-buttons .btn { padding: 12px 25px; margin: 0 10px; }

        .info-section { display: flex; justify-content: space-around; background-color: var(--bg-light); gap: 20px; }
        .info-card { display: flex; align-items: center; background-color: var(--bg-light); padding: 20px; border: 1px solid var(--secondary-color); border-radius: 8px; flex: 1; }
        .info-card .card-text { flex-grow: 1; }
        .info-card h3 { margin-top: 0; color: var(--primary-color); }
        .info-card .card-icon { font-size: 3em; color: var(--primary-color); margin-left: 20px; }

        .about-section { display: flex; background-color: #f9f9f9; gap: 40px; align-items: center; }
        .about-content, .about-carousel { width: 50%; }
        .about-content h2 { font-size: 2.5em; color: var(--primary-color); }
        .about-slider .swiper-slide { height: 350px; background-size: cover; background-position: center; border-radius: 8px;}

        .popular-tours { text-align: center; }
        .tours-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px; }
        .tour-card { position: relative; height: 300px; background-size: cover; background-position: center; border-radius: 10px; overflow: hidden; color: var(--text-light); border: 3px solid var(--secondary-color); display: flex; align-items: flex-end; }
        .tour-card-content { width: 100%; padding: 20px; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); transform: translateY(calc(100% - 70px)); transition: transform 0.4s ease; }
        .tour-card-content .btn { opacity: 0; transition: opacity 0.4s ease; margin-top:10px; }
        .tour-card:hover .tour-card-content { transform: translateY(0); }
        .tour-card:hover .btn { opacity: 1; }
        .tour-card-content h3 { margin: 0; }

        .tripadvisor-section { background-color: var(--bg-light); }
        .tripadvisor-container { max-width: 1200px; margin: 0 auto; }
        .tripadvisor-slider .swiper-slide { padding: 30px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ddd; text-align: left; height: auto;}
        .review-author { font-weight: bold; margin-top: 15px; }
        .review-stars { color: #f2b01e; }
        .tripadvisor-button { text-align: right; margin-top: 20px; }

        .packages-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
        .package-card { background: var(--bg-light); border: 1px solid #ddd; border-radius: 8px; overflow: hidden; text-align: center; box-shadow: 0 2px 5px rgba(0,0,0,0.1); display: flex; flex-direction: column;}
        .package-card img { width: 100%; height: 200px; object-fit: cover; }
        .package-card-content { padding: 20px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;}
        .package-card h3 { font-size: 1.2em; color: var(--primary-color); margin-top: 0;}
        .package-price { font-size: 1.5em; font-weight: bold; margin: 10px 0; }
        .package-price .stars { font-size: 0.7em; color: #f2b01e; margin-left: 10px; }
        .package-meta { display: flex; justify-content: center; gap: 15px; margin: 15px 0; color: #777; flex-wrap: wrap;}
        .package-meta span { display: flex; align-items: center; gap: 5px; }

        .video-section { display: flex; align-items: center; gap: 40px; background: var(--bg-light); }
        .video-player, .video-content { width: 50%; }
        .video-player { height: 350px; background: #000 url('http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Cusco-slider-2.jpg') no-repeat center center; background-size: cover; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 4em; cursor: pointer; transition: transform 0.3s ease; }
        .video-player:hover {transform: scale(1.05);}
        .video-player iframe { width: 100%; height: 100%; border: none; }

        .partners-section { background: var(--primary-color); padding: 40px 0; }
        .partners-slider .swiper-slide { display: flex; justify-content: center; align-items: center; }
        .partners-slider img { max-height: 60px; filter: grayscale(1) brightness(3); opacity: 0.8; transition: opacity 0.3s ease;}
        .partners-slider img:hover { opacity: 1; }

        .main-footer { background: #111; color: var(--text-light); padding: 60px 5% 20px; }
        .footer-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; }
        .footer-col h3 { color: var(--secondary-color); text-transform: uppercase; }
        .footer-col a { color: var(--text-light); text-decoration: none; }
        .footer-col p {line-height: 1.8;}
        .footer-col ul {list-style: none; padding: 0;}
        .footer-col ul li { margin-bottom: 10px; }
        .footer-col ul li i { margin-right: 10px; }
        .footer-socials a { margin-right: 15px; font-size: 1.5em; transition: color 0.3s ease;}
        .footer-socials a:hover { color: var(--secondary-color); }
        .footer-bottom { text-align: center; margin-top: 40px; padding-top: 20px; border-top: 1px solid #444; font-size: 0.9em;}

        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        .whatsapp-float span {
            visibility: hidden;
            width: 200px;
            background-color: #075e54;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 10px;
            position: absolute;
            z-index: 1;
            right: 105%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 14px;
        }

        .whatsapp-float:hover span {
            visibility: visible;
            opacity: 1;
        }

        @media (max-width: 992px) {
            .packages-grid { grid-template-columns: repeat(2, 1fr); }
            .footer-grid { grid-template-columns: repeat(2, 1fr); }
        }

        @media (max-width: 768px) {
            section {
                padding: 40px 5%;
            }
            .section-title {
                font-size: 2em;
            }
            .about-content h2 {
                font-size: 2em;
            }
            .slider-content h1 {
                font-size: 2em;
            }
            .slider-content p {
                font-size: 1em;
            }
            .btn {
                padding: 8px 16px;
                font-size: 0.9em;
            }
            .top-header, .info-section, .about-section, .video-section { flex-direction: column; gap: 20px; }
            .info-card, .about-content, .about-carousel, .video-player, .video-content { width: 100%; box-sizing: border-box; }
            .main-nav .nav-links { display: none; flex-direction: column; width: 100%; background-color: var(--primary-color); position: absolute; top: 70px; left: 0; }
            .main-nav .nav-links.active { display: flex; }
            .main-nav .nav-links li { width: 100%; text-align: center; }
            .main-nav .nav-links .submenu { position: static; background-color: #0a5b5e; box-shadow: none; }
            .hamburger { display: block; }
            .packages-grid, .footer-grid, .tours-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <header>
        <div class="top-header">
            <div class="left-section">
                <a href="#"><i class="fas fa-credit-card"></i> Formas de Pago</a>
                <a href="#"><i class="fab fa-cc-visa"></i> Pagos Online</a>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-youtube"></i></a><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-tripadvisor"></i></a>
            </div>
        </div>
        <nav class="main-nav">
            <div class="logo"><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/"><img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Logo-RA-Travel-Cusco.png" alt="RA Travel Cusco Logo"></a></div>
            <div class="hamburger"><i class="fas fa-bars"></i></div>
            <ul class="nav-links">
                <li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/">Home</a></li>
                <li><a href="#">Tours en Cusco</a><ul class="submenu"><li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=10">Valle Sagrado + Maras Moray</a></li><li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=12">City Tour Cusco Medio Día</a></li><li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=14">Valle Sagrado Tradicional</a></li></ul></li>
                <li><a href="#">Machu Picchu</a><ul class="submenu"><li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=16">Tour Machu Picchu 1 Día</a></li><li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=18">Tour Valle Sagrado y Camino Inca 3 Días</a></li><li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=16">Machu Picchu + Huayna Picchu 1 Día</a></li></ul></li>
                <li><a href="#">Paquetes</a><ul class="submenu"><li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=22">4 Días Cusco – Valle Sagrado – Machu Picchu</a></li><li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=24">5 Días Lima – Cusco – Machu Picchu – Puno</a></li><li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=26">6 Días Cusco – Valle Sagrado – Machu Picchu – Laguna Humantay – Montaña 7 Colores</a></li></ul></li>
                <li><a href="#">Camino Inca y Otros</a><ul class="submenu"><li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=28">Camino Inca a Machu Picchu 4 Días</a></li><li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=30">Salkantay Trek a Machu Picchu 4 Días</a></li><li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=32">Caminata Ausangate 5 Días</a></li></ul></li>
                <li><a href="#">Otros Destinos</a><ul class="submenu"><li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=34">Isla Uros y Taquile Full Day</a></li><li><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=36">Islas de los Uros Medio Día</a></li></ul></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="swiper-container main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url('http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Cusco-slider-2.jpg')"><div class="slider-content"><h1>Experiencias Reales en Cusco</h1><p>Reserva con anticipación y vive una experiencia única en Cusco y Machu Picchu, con guías expertos...</p><div class="slider-buttons"><a href="#" class="btn btn-primary">Explora Destinos</a><a href="https://wa.me/51935209781" target="_blank" class="btn btn-secondary">Planifica tu Viaje</a></div></div></div>
                <div class="swiper-slide" style="background-image:url('http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Cusco-slider-3.jpg')"><div class="slider-content"><h1>Aventura te Espera</h1><p>Descubre los misterios de los Andes y la magia de la cultura Inca con nuestros tours especializados.</p><div class="slider-buttons"><a href="#" class="btn btn-primary">Explora Destinos</a><a href="https://wa.me/51935209781" target="_blank" class="btn btn-secondary">Planifica tu Viaje</a></div></div></div>
                <div class="swiper-slide" style="background-image:url('http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/laguna-humantay-3.jpg')"><div class="slider-content"><h1>Paisajes Inolvidables</h1><p>Desde la Laguna Humantay hasta la Montaña de 7 Colores, te llevamos a lugares que te dejarán sin aliento.</p><div class="slider-buttons"><a href="#" class="btn btn-primary">Explora Destinos</a><a href="https://wa.me/51935209781" target="_blank" class="btn btn-secondary">Planifica tu Viaje</a></div></div></div>
            </div>
            <div class="swiper-pagination"></div>
        </section>

        <section class="info-section">
            <div class="info-card"><div class="card-text"><h3>Destinos únicos</h3><p>Descubra joyas ocultas y lugares emblemáticos con nuestras cuidadosamente seleccionadas.</p></div><div class="card-icon"><i class="fas fa-map-marker-alt"></i></div></div>
            <div class="info-card"><div class="card-text"><h3>Precios razonables</h3><p>Servicios de alta calidad, con precios justos que se adaptan a tu economía sin perder calidad.</p></div><div class="card-icon"><i class="fas fa-dollar-sign"></i></div></div>
            <div class="info-card"><div class="card-text"><h3>Itinerarios personalizados</h3><p>Diseñamos tu viaje, según tus intereses, ritmo y estilo. Tú eliges, nosotros lo hacemos realidad.</p></div><div class="card-icon"><i class="fas fa-calendar-alt"></i></div></div>
        </section>

        <section class="about-section">
            <div class="about-content">
                <h2 class="section-title" style="text-align:left">¿Por qué viajar con RA Travel Cusco?</h2>
                <p>Somos una agencia de viajes y operador local en Cusco, Perú, con amplia trayectoria y reconocimiento en el sector turístico. Nos especializamos en crear experiencias auténticas y memorables, con un equipo profesional, cercano y confiable. Ya sea que viajes solo, en pareja o en grupo, ofrecemos tours y excursiones personalizadas, en servicio compartido o privado. Con nosotros, tu viaje comienza con seguridad y termina con recuerdos inolvidables.</p>
                <a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=16" class="btn btn-primary">Conocer Más Cusco</a>
            </div>
            <div class="about-carousel">
                <img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Machupicchu-Cusco-3.jpg" alt="Machu Picchu" style="width: 100%; height: auto; border-radius: 8px;">
            </div>
        </section>

        <section class="popular-tours">
            <h2 class="section-title">Los Tours Más Populares entre los Viajeros</h2>
            <p class="section-description">Descubre las experiencias favoritas de quienes visitan Cusco, aventuras inolvidables, paisajes impactantes y cultura viva en cada destino.</p>
            <div class="tours-grid">
                <div class="tour-card" style="background-image:url('http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Machupicchu-Cusco-5.jpg')"><div class="tour-card-content"><h3>Tour Machu Picchu 1 Día</h3><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=16" class="btn btn-primary">Conoce esta Aventura</a></div></div>
                <div class="tour-card" style="background-image:url('http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Machupicchu-Cusco-4.jpg')"><div class="tour-card-content"><h3>4 Días Cusco – Valle Sagrado – Machu Picchu</h3><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=22" class="btn btn-primary">Conoce esta Aventura</a></div></div>
                <div class="tour-card" style="background-image:url('http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Machupicchu-Cusco-4.jpg')"><div class="tour-card-content"><h3>Machu Picchu + Huayna Picchu 1 Día</h3><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=16" class="btn btn-primary">Conoce esta Aventura</a></div></div>
                <div class="tour-card" style="background-image:url('http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Machupicchu-Cusco-4.jpg')"><div class="tour-card-content"><h3>6 Días Cusco – Valle Sagrado – Machu Picchu</h3><a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=26" class="btn btn-primary">Conoce esta Aventura</a></div></div>
            </div>
        </section>

        <section class="tripadvisor-section">
            <div class="tripadvisor-container">
            <h2 class="section-title">Gracias a nuestros clientes por los Reviews en Tripadvisor</h2>
            <p class="section-description">Las opiniones en TripAdvisor reflejan el compromiso que tenemos con brindar experiencias únicas, auténticas y memorables en cada viaje.</p>
            <div class="swiper-container tripadvisor-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="review-stars">★★★★★</div><p>"An absolutely breathtaking experience at Machu Picchu! The guides were knowledgeable..."</p><div class="review-author">- John D.</div></div>
                    <div class="swiper-slide"><div class="review-stars">★★★★★</div><p>"The Salkantay Trek was challenging but incredibly rewarding. The views are out of this world."</p><div class="review-author">- Maria S.</div></div>
                    <div class="swiper-slide"><div class="review-stars">★★★★★</div><p>"Humantay Lagoon is a must-see! The color of the water is unreal. Well-organized trip."</p><div class="review-author">- Alex P.</div></div>
                    <div class="swiper-slide"><div class="review-stars">★★★★★</div><p>"Rainbow Mountain was stunning. A tough hike but worth every step for the panoramic views."</p><div class="review-author">- Sarah W.</div></div>
                    <div class="swiper-slide"><div class="review-stars">★★★★★</div><p>"Exploring Cusco and the Sacred Valley with this agency was the best decision. Flawless logistics."</p><div class="review-author">- David L.</div></div>
                    <div class="swiper-slide"><div class="review-stars">★★★★★</div><p>"Our guide made our Machu Picchu tour unforgettable with stories and history. Highly recommended!"</p><div class="review-author">- Emily R.</div></div>
                    <div class="swiper-slide"><div class="review-stars">★★★★★</div><p>"A wonderful trip to the Sacred Valley. The transport was comfortable and the guide was excellent."</p><div class="review-author">- Michael B.</div></div>
                    <div class="swiper-slide"><div class="review-stars">★★★★★</div><p>"I highly recommend the 4-day Inca Trail trek. It was an experience of a lifetime."</p><div class="review-author">- Jessica H.</div></div>
                    <div class="swiper-slide"><div class="review-stars">★★★★★</div><p>"The city tour of Cusco was a great introduction to the history and culture of the region."</p><div class="review-author">- Chris G.</div></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="tripadvisor-button"><a href="#" class="btn btn-primary"><i class="fab fa-tripadvisor"></i> Ver Más Comentarios</a></div>
        </section>

        <section class="tour-packages">
            <h2 class="section-title">Mejores Paquetes a Cusco</h2>
            <p class="section-description">Explora Cusco y Machu Picchu con nuestros mejores paquetes turísticos. Incluyen transporte, alojamiento y visitas guiadas para una experiencia auténtica.</p>
            <div class="packages-grid">
                <div class="package-card"><img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Cusco-travel-4.jpg" alt="Valle Sagrado"><div class="package-card-content"><div><h3>Valle Sagrado Tradicional</h3><div class="package-price">$200.00 <span class="stars">★★★★★</span></div><div class="package-meta"><span><i class="fas fa-clock"></i> 2 Dias</span><span><i class="fas fa-calendar-alt"></i> Historial</span><span><i class="fas fa-route"></i> Aventura</span></div></div><a href="#" class="btn btn-primary">Ver Detalles</a></div></div>
                <div class="package-card"><img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Cusco-travel-3.jpg" alt="City Tour Cusco"><div class="package-card-content"><div><h3>City Tour Cusco Medio Día</h3><div class="package-price">$350.00 <span class="stars">★★★★★</span></div><div class="package-meta"><span><i class="fas fa-clock"></i> 1 Dia</span><span><i class="fas fa-calendar-alt"></i> Historial</span><span><i class="fas fa-route"></i> Aventura</span></div></div><a href="#" class="btn btn-primary">Ver Detalles</a></div></div>
                <div class="package-card"><img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Cusco-travel-1.jpg" alt="Maras Moray"><div class="package-card-content"><div><h3>Valle Sagrado + Maras Moray</h3><div class="package-price">$200.00 <span class="stars">★★★★★</span></div><div class="package-meta"><span><i class="fas fa-clock"></i> 3 Dias</span><span><i class="fas fa-calendar-alt"></i> Historial</span><span><i class="fas fa-route"></i> Aventura</span></div></div><a href="#" class="btn btn-primary">Ver Detalles</a></div></div>
            </div>
        </section>

        <section class="tour-packages" style="background-color: var(--bg-light);">
            <h2 class="section-title">Los Mejores Tours a MachuPicchu</h2>
            <p class="section-description">Explora los destinos más icónicos como Machu Picchu, Valle Sagrado o Montaña de 7 Colores en un solo día, con todo incluido y cero preocupaciones.</p>
            <div class="packages-grid">
                <div class="package-card"><img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Machupicchu-Cusco-1.jpg" alt="Tour Machu Picchu"><div class="package-card-content"><div><h3>Tour Machu Picchu 1 Día</h3><div class="package-price">$350.00 <span class="stars">★★★★★</span></div><div class="package-meta"><span><i class="fas fa-clock"></i> 2 Dias</span><span><i class="fas fa-calendar-alt"></i> Historial</span><span><i class="fas fa-route"></i> Aventura</span></div></div><a href="#" class="btn btn-primary">Ver Detalles</a></div></div>
                <div class="package-card"><img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Machupicchu-Cusco-1.jpg" alt="Camino Inca"><div class="package-card-content"><div><h3>Tour Valle Sagrado y Camino Inca 3 Días</h3><div class="package-price">$450.00 <span class="stars">★★★★★</span></div><div class="package-meta"><span><i class="fas fa-clock"></i> 3 Dias</span><span><i class="fas fa-calendar-alt"></i> Historial</span><span><i class="fas fa-route"></i> Aventura</span></div></div><a href="#" class="btn btn-primary">Ver Detalles</a></div></div>
                <div class="package-card"><img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Machupicchu-Cusco-1.jpg" alt="Huayna Picchu"><div class="package-card-content"><div><h3>Machu Picchu + Huayna Picchu 1 Día</h3><div class="package-price">$200.00 <span class="stars">★★★★★</span></div><div class="package-meta"><span><i class="fas fa-clock"></i> 1 Dia</span><span><i class="fas fa-calendar-alt"></i> Historial</span><span><i class="fas fa-route"></i> Aventura</span></div></div><a href="#" class="btn btn-primary">Ver Detalles</a></div></div>
            </div>
        </section>

        <section class="video-section">
            <div id="video-player" class="video-player" data-video-id="6G_o4441I3I"><i class="fab fa-youtube"></i></div>
            <div class="video-content">
                <h2 class="section-title" style="text-align: left; margin-bottom: 10px;">Conoce lo mejor de Cusco</h2>
                <h3 style="font-weight: normal; margin-top: 0;">con RA Travel Cusco</h3>
                <p>Tours a precios locales, paquetes completos y pensados en ti.</p>
                <a href="https://wa.me/51935209781" target="_blank" class="btn btn-primary"><i class="fab fa-whatsapp"></i> Contactar por Whatsapp</a>
            </div>
        </section>

        <section class="partners-section">
            <div class="swiper-container partners-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Visa.jpg" alt="Visa"></div>
                    <div class="swiper-slide"><img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/PayPal.jpg" alt="PayPal"></div>
                    <div class="swiper-slide"><img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Mince-Tour.jpg" alt="Mincetur"></div>
                    <div class="swiper-slide"><img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/MasterCard.jpg" alt="MasterCard"></div>
                    <div class="swiper-slide"><img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Marca-Peru.jpg" alt="Marca Peru"></div>
                    <div class="swiper-slide"><img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/American-Express.jpg" alt="American Express"></div>
                </div>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <div class="footer-grid">
            <div class="footer-col">
                <img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Logo-RA-Travel-Cusco.png" alt="RA Travel Logo" style="margin-bottom: 20px; max-width: 150px; background: transparent; padding: 0; border-radius: 0;">
                <div class="footer-socials">
                    <a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-tiktok"></i></a><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-tripadvisor"></i></a>
                </div>
                <h3 style="margin-top: 20px;">RA TRAVEL CUSCO</h3>
                <p>RUC: 10458795254</p>
                <p>Cusco - Wanchaq - Cusco</p>
            </div>
            <div class="footer-col">
                <h3>¿Quiénes Somos?</h3>
                <p>Nos especializamos en crear experiencias auténticas y memorables, con un equipo profesional, cercano y confiable.</p>
            </div>
            <div class="footer-col">
                <h3>CONTACTO</h3>
                <ul>
                    <li><i class="fas fa-phone"></i> 935 209 781</li>
                    <li><i class="fas fa-envelope"></i> informes@ratravelcusco.com</li>
                    <li><i class="fas fa-envelope"></i> viajescusco@ratravelcusco.com</li>
                </ul>
                <a href="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/?page_id=83" class="btn btn-primary">Iniciar Aventura</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 RA Travel Cusco. Todos los derechos reservados.</p>
        </div>
    </footer>

    <a href="https://wa.me/51935209781" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
        <span>Tu aventura Empieza Aquí</span>
    </a>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.querySelector('.hamburger').addEventListener('click', () => {
            document.querySelector('.nav-links').classList.toggle('active');
        });

        const mainSwiper = new Swiper('.main-slider', {
            effect: 'fade', loop: true, autoplay: { delay: 3000, disableOnInteraction: false },
            pagination: { el: '.swiper-pagination', clickable: true },
        });

        const tripadvisorSwiper = new Swiper('.tripadvisor-slider', {
            loop: true, slidesPerView: 1, spaceBetween: 30,
            autoplay: { delay: 2000, disableOnInteraction: false },
            pagination: { el: '.swiper-pagination', clickable: true },
            breakpoints: { 768: { slidesPerView: 2 }, 992: { slidesPerView: 3 } }
        });

        const partnersSwiper = new Swiper('.partners-slider', {
            loop: true, slidesPerView: 2, spaceBetween: 20,
            autoplay: { delay: 2000, disableOnInteraction: false },
            breakpoints: { 576: { slidesPerView: 3 }, 768: { slidesPerView: 4 }, 992: { slidesPerView: 5 }, 1200: { slidesPerView: 6 } }
        });

        document.getElementById('video-player').addEventListener('click', function() {
            const videoId = this.getAttribute('data-video-id');
            const iframe = document.createElement('iframe');
            iframe.setAttribute('src', `https://www.youtube.com/embed/${videoId}?autoplay=1`);
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('allow', 'autoplay; encrypted-media');
            iframe.setAttribute('allowfullscreen', '');
            this.innerHTML = '';
            this.appendChild(iframe);
        });
    </script>
</body>
</html>