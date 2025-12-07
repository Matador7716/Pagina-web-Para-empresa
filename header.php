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
