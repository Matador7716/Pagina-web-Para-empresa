<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CandelaWEB - Services</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 1.5em;
            text-align: center;
            border-bottom: 5px solid #e74c3c;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        nav ul li {
            margin: 0.5em;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 0.5em 1em;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #e74c3c;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #2c3e50;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        main {
            padding: 2em;
        }

        section {
            margin-bottom: 2em;
            background-color: white;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        #products-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5em;
        }

        .product {
            border: 1px solid #ddd;
            padding: 1em;
            text-align: center;
            border-radius: 8px;
            background-color: #fafafa;
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }

        .slider-container {
            width: 100%;
            height: 500px;
            overflow: hidden;
            position: relative;
        }

        .slider {
            width: 400%;
            height: 100%;
            display: flex;
            animation: slide 16s infinite;
        }

        .slide {
            width: 25%;
            height: 100%;
            position: relative;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .slide-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            animation: kenburns 16s infinite;
        }

        .slide-content {
            z-index: 1;
        }

        @keyframes slide {
            0% { transform: translateX(0); }
            25% { transform: translateX(0); }
            30% { transform: translateX(-25%); }
            55% { transform: translateX(-25%); }
            60% { transform: translateX(-50%); }
            85% { transform: translateX(-50%); }
            90% { transform: translateX(-75%); }
            100% { transform: translateX(-75%); }
        }

        @keyframes kenburns {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.2);
            }
        }

        .presentation {
            display: flex;
            align-items: center;
            gap: 2em;
        }

        .presentation-text {
            flex: 1;
        }

        .presentation-image {
            flex: 1;
        }

        .presentation-image img {
            max-width: 100%;
            border-radius: 8px;
        }

        .full-width-section {
            background-color: #ecf0f1;
            padding: 3em 2em;
            text-align: center;
        }

        .web-design-section {
            background-color: #3498db;
            color: white;
        }

        .card-carousel {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
        }

        .card {
            flex: 0 0 250px;
            margin: 1em;
            padding: 1.5em;
            background-color: white;
            color: #333;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            scroll-snap-align: center;
        }

        .card.highlighted {
            background-color: #e74c3c;
            color: white;
        }

        .btn {
            display: inline-block;
            background-color: #2c3e50;
            color: white;
            padding: 0.8em 1.5em;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn:hover {
            background-color: #e74c3c;
            transform: translateY(-3px);
        }

        .systems-design {
            display: flex;
            align-items: center;
            gap: 2em;
        }

        .systems-design-text {
            flex: 1;
        }

        .systems-design-video {
            flex: 1;
        }

        .systems-design-video video {
            max-width: 100%;
            border-radius: 8px;
        }

        .electronic-billing-section {
            background-color: #27ae60;
            color: white;
        }

        .electronic-billing-section .btn {
            margin: 0.5em;
        }

        .comments-section {
            text-align: center;
        }

        .comment-carousel {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
        }

        .comment {
            flex: 0 0 100%;
            padding: 2em;
            scroll-snap-align: center;
        }

        .social-media {
            margin-top: 2em;
        }

        .social-btn {
            display: inline-block;
            padding: 1em 2em;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 0.5em;
            transition: opacity 0.3s;
        }

        .social-btn.facebook {
            background-color: #3b5998;
        }

        .social-btn.instagram {
            background-color: #e1306c;
        }

        .social-btn:hover {
            opacity: 0.8;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
            }

            header {
                padding: 1em;
            }

            main {
                padding: 1em;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>CandelaWEB - Services</h1>
        <nav>
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="nosotros.php">NOSOTROS</a></li>
                <li class="dropdown">
                    <a href="servicios.php">SERVICIOS</a>
                    <div class="dropdown-content">
                        <a href="servicios.php#servicio-1">Diseño de paginas Web</a>
                        <a href="servicios.php#servicio-2">Diseño de sistemas de ventas web</a>
                        <a href="servicios.php#servicio-3">Facturacion electronica</a>
                        <a href="servicios.php#servicio-4">Soporte tecnico de equipos informaticos</a>
                        <a href="tienda.php">Venta de equipos informaticos</a>
                    </div>
                </li>
                <li><a href="paginas-web.php">PAGINAS WEB</a></li>
                <li><a href="woocommerce.php">WOOCOMMERCE</a></li>
                <li><a href="contacto.php">CONTACTO</a></li>
            </ul>
        </nav>
    </header>
