<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RA Travel Cusco</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #084749;
            --secondary-color: #d4af37;
            --accent-color: #e67e22;
            --text-light: #ffffff;
            --text-dark: #333333;
            --bg-light: #ffffff;
            --bg-grey: #f9f9f9;
        }

        body {
            font-family: 'Poppins', sans-serif;
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

        .info-section { display: flex; justify-content: space-around; background-color: var(--bg-light); gap: 30px; }
        .info-card { display: flex; align-items: center; background-color: var(--bg-light); padding: 25px; border-left: 4px solid var(--secondary-color); border-radius: 8px; flex: 1; box-shadow: 0 4px 15px rgba(0,0,0,0.08); transition: all 0.3s ease; }
        .info-card:hover { transform: translateY(-5px); box-shadow: 0 8px 25px rgba(0,0,0,0.12); }
        .info-card .card-text { flex-grow: 1; }
        .info-card h3 { margin-top: 0; color: var(--primary-color); font-weight: 600; }
        .info-card p { font-size: 0.9em; }
        .info-card .card-icon { font-size: 3.5em; color: var(--primary-color); margin-left: 25px; }

        .about-section { display: flex; background-color: var(--bg-grey); gap: 40px; align-items: center; }
        .about-content, .about-carousel { width: 50%; }
        .about-content h2 { font-size: 2.5em; color: var(--primary-color); }
        .about-slider .swiper-slide { height: 350px; background-size: cover; background-position: center; border-radius: 8px;}

        .popular-tours { text-align: center; }
        .tours-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; }
        .tour-card { position: relative; height: 350px; background-size: cover; background-position: center; border-radius: 12px; overflow: hidden; color: var(--text-light); border: 4px solid var(--secondary-color); display: flex; flex-direction: column; justify-content: flex-end; padding: 25px; transition: transform 0.3s ease; box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
        .tour-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(0,0,0,0.95), transparent 60%); z-index: 0; }
        .tour-card:hover { transform: translateY(-10px); }
        .tour-card-content { position: relative; z-index: 1; transform: translateY(50px); transition: transform 0.4s ease; opacity: 0; }
        .tour-card:hover .tour-card-content { transform: translateY(0); opacity: 1; }
        .tour-card-content h3 { margin: 0 0 15px; font-size: 1.6em; }

        .tripadvisor-section { background-color: var(--bg-light); }
        .tripadvisor-container { max-width: 1200px; margin: 0 auto; }
        .tripadvisor-slider .swiper-slide { padding: 30px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ddd; text-align: left; height: auto;}
        .review-author { font-weight: bold; margin-top: 15px; }
        .review-stars { color: #f2b01e; }
        .tripadvisor-button { text-align: right; margin-top: 20px; }

        .packages-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
        .package-card { background: var(--bg-light); border-radius: 12px; overflow: hidden; text-align: left; box-shadow: 0 5px 20px rgba(0,0,0,0.08); display: flex; flex-direction: column; transition: all 0.3s ease; }
        .package-card:hover { transform: translateY(-8px); box-shadow: 0 12px 28px rgba(0,0,0,0.12); }
        .package-card img { width: 100%; height: 220px; object-fit: cover; }
        .package-card-content { padding: 25px; flex-grow: 1; display: flex; flex-direction: column; }
        .package-card h3 { font-size: 1.3em; font-weight: 600; color: var(--primary-color); margin-top: 0; margin-bottom: 10px; }
        .package-price { font-size: 1.6em; font-weight: 700; color: var(--accent-color); margin: 5px 0; }
        .package-price .stars { font-size: 0.7em; color: #f2b01e; margin-left: 10px; }
        .package-meta { display: flex; justify-content: flex-start; gap: 20px; margin: 15px 0; color: #666; flex-wrap: wrap; font-size: 0.9em;}
        .package-meta span { display: flex; align-items: center; gap: 8px; }
        .package-card-content .btn { margin-top: auto; align-self: flex-start; }

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