<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valle Sagrado + Maras Moray - RA Travel Cusco</title>
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

        .tour-content-section {
            display: flex;
            gap: 30px;
        }

        .tour-main-content {
            width: 80%;
        }

        .tour-sidebar {
            width: 20%;
        }

        .tour-info-bar {
            display: flex;
            justify-content: space-around;
            background: var(--bg-light);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .tour-info-bar span {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: bold;
        }

        .tabs-container {
            margin-top: 30px;
        }

        .tab-buttons {
            display: flex;
            gap: 5px;
        }

        .tab-button {
            padding: 15px 20px;
            cursor: pointer;
            border: none;
            background-color: #eee;
            border-radius: 8px 8px 0 0;
            transition: all 0.3s ease;
        }

        .tab-button:hover {
            background-color: #ddd;
        }

        .tab-button.active {
            background-color: var(--primary-color);
            color: var(--text-light);
        }

        .tab-content {
            display: none;
            padding: 20px;
            border: 1px solid #ddd;
            background: var(--bg-light);
        }

        .tab-content.active {
            display: block;
        }

        .tripadvisor-widget, .booking-widget {
            background: var(--bg-light);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .tripadvisor-widget h4, .booking-widget h4 {
            margin-top: 0;
            color: var(--primary-color);
        }

        .booking-widget label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        .booking-widget input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        .booking-widget button {
            width: 100%;
            margin-top: 15px;
        }

        .tour-title-section {
            text-align: center;
            padding: 20px 5%;
        }

        .tour-title-section h1 {
            font-size: 3em;
            color: #000;
            text-transform: uppercase;
            margin: 0;
        }

        .tour-title-section .stars {
            color: var(--secondary-color);
            font-size: 1.5em;
            margin-top: 10px;
        }

        .tour-gallery {
            padding: 0 5%;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .gallery-grid img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

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
            .footer-grid { grid-template-columns: repeat(2, 1fr); }
        }

        @media (max-width: 768px) {
            .top-header, .video-section { flex-direction: column; gap: 20px; }
            .main-nav .nav-links { display: none; flex-direction: column; width: 100%; background-color: var(--primary-color); position: absolute; top: 70px; left: 0; }
            .main-nav .nav-links.active { display: flex; }
            .main-nav .nav-links li { width: 100%; text-align: center; }
            .main-nav .nav-links .submenu { position: static; background-color: #0a5b5e; box-shadow: none; }
            .hamburger { display: block; }
            .footer-grid { grid-template-columns: 1fr; }
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
        <section class="tour-title-section">
            <h1>Valle Sagrado + Maras Moray</h1>
            <div class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
        </section>

        <section class="tour-gallery">
            <div class="gallery-grid">
                <img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/Machupicchu-Cusco-2.jpg" alt="Tour Image 1">
                <img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/laguna-humantay-4.jpg" alt="Tour Image 2">
                <img src="http://localhost/Agenccia%20de%20turismo%20-%20%20cusco/wp-content/uploads/2025/11/laguna-humantay-1.jpg" alt="Tour Image 3">
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
        <section class="tour-content-section">
            <div class="tour-main-content">
                <div class="tour-info-bar">
                    <span><i class="fas fa-clock"></i> Duración / 1 Dia</span>
                    <span><i class="fas fa-walking"></i> Tipo de Tour / Caminata</span>
                    <span><i class="fas fa-road"></i> Dificultad / Easy</span>
                    <span><i class="fas fa-calendar-alt"></i> Mejor Epoca / All Year Round</span>
                </div>
                <p>El Tour Valle Sagrado + Maras Moray es perfecto para quienes desean explorar la riqueza histórica y cultural de los incas mientras disfrutan de paisajes espectaculares...</p>

                <div class="tabs-container">
                    <div class="tab-buttons">
                        <button class="tab-button active" data-tab="resumen">RESUMEN</button>
                        <button class="tab-button" data-tab="itinerario">ITINERARIO</button>
                        <button class="tab-button" data-tab="incluye">INCLUYE / NO INCLUYE</button>
                        <button class="tab-button" data-tab="precios">PRECIOS</button>
                        <button class="tab-button" data-tab="mas-info">MAS INFO</button>
                    </div>
                    <div id="resumen" class="tab-content active">
                        <ul>
                            <li>Recojo del hotel: Entre las 06:00 a 06:30 a.m.</li>
                            <li>Salida de Cusco: Inicio del tour a las 07:00 a.m.</li>
                            <li>Chinchero: Visita a su centro arqueológico y exhibición de textiles andinos.</li>
                            <li>Moray: Exploración de los andenes circulares.</li>
                            <li>Maras: Recorrido por las impresionantes salineras.</li>
                            <li>Almuerzo en Urubamba: Opción de almuerzo buffet (opcional).</li>
                            <li>Ollantaytambo: Visita a la fortaleza inca.</li>
                            <li>Pisac: Exploración del mercado artesanal y el sitio arqueológico.</li>
                            <li>Regreso a Cusco: Arribo aproximado a las 19:00 horas.</li>
                            <li>Fin del servicio: Descenso en la Plaza San Francisco.</li>
                        </ul>
                    </div>
                    <div id="itinerario" class="tab-content">
                        <p>Comenzamos el tour recogiéndote desde la puerta de tu hotel en el centro histórico de Cusco...</p>
                    </div>
                    <div id="incluye" class="tab-content">
                        <p><strong>¿Qué incluye?</strong>...</p>
                        <p><strong>No incluye</strong>...</p>
                    </div>
                    <div id="precios" class="tab-content">
                        <p><strong>¿Cuánto cuesta el tour al valle sagrado?</strong>...</p>
                        <table width="623">...</table>
                    </div>
                    <div id="mas-info" class="tab-content">
                        <h3>BOLETO TURÍSTICO DEL CUSCO</h3>
                        <p>El Boleto Turístico del Cusco (BTC) es el pase oficial...</p>
                    </div>
                </div>
            </div>
            <div class="tour-sidebar">
                <div class="tripadvisor-widget">
                    <h4>Opiniones en Tripadvisor</h4>
                    <div class="review">
                        <div class="review-stars">★★★★★</div>
                        <p>"Una experiencia inolvidable. El guía fue excelente y los paisajes son impresionantes."</p>
                        <div class="review-author">- Maria G.</div>
                    </div>
                    <div class="review">
                        <div class="review-stars">★★★★★</div>
                        <p>"El tour estuvo muy bien organizado. Los lugares que visitamos fueron increíbles."</p>
                        <div class="review-author">- Juan P.</div>
                    </div>
                </div>
                <div class="booking-widget">
                    <h4>¡Reserva tu Aventura!</h4>
                    <label for="adventurers">Cantidad de aventureros:</label>
                    <input type="number" id="adventurers" value="1" min="1">
                    <label for="tour-date">Selecciona la fecha:</label>
                    <input type="date" id="tour-date">
                    <button id="book-now" class="btn btn-primary">Reservar Ahora</button>
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

        document.getElementById('book-now').addEventListener('click', () => {
            const adventurers = document.getElementById('adventurers').value;
            const date = document.getElementById('tour-date').value;
            const message = `¡Hola! Me gustaría reservar el tour "Valle Sagrado + Maras Moray" para ${adventurers} persona(s) en la fecha ${date}.`;
            const whatsappUrl = `https://wa.me/51935209781?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, '_blank');
        });

        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                tabButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const tabId = button.getAttribute('data-tab');
                tabContents.forEach(content => {
                    if (content.id === tabId) {
                        content.classList.add('active');
                    } else {
                        content.classList.remove('active');
                    }
                });
            });
        });
    </script>
</body>
</html>