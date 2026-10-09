<?php
// page-destinos.php - Perú Safe Journeys
$company_name = "Perú Safe Journeys";
$company_tagline = "Destinos Turísticos en el Perú";

$phones = [
    'ventas' => ['number' => '+51 931 352 810', 'clean' => '51931352810', 'label' => 'Ventas'],
    'operaciones' => ['number' => '+51 930 823 110', 'clean' => '51930823110', 'label' => 'Operaciones'],
    'calidad' => ['number' => '+51 913 716 197', 'clean' => '51913716197', 'label' => 'Calidad 24/7']
];

$email_address = "informes-web@perusafejourneys.com";
$current_year = date('Y');

$destinos_submenu = [
    ['name' => '7 LAGUNAS DEL AUSANGATE', 'url' => 'https://www.perusafejourneysgroup.com/destinos/7-lagunas-del-ausangate/'],
    ['name' => 'ATV MONTAÑA DE COLORES FD', 'url' => 'https://www.perusafejourneysgroup.com/destinos/atv-montana-de-colores-fd/'],
    ['name' => 'LAGUNA HUMANTAY FD', 'url' => 'https://www.perusafejourneysgroup.com/destinos/laguna-humantay-fd/'],
    ['name' => 'MONTAÑA VINICUNCA FD', 'url' => 'https://www.perusafejourneysgroup.com/destinos/montana-vinicunca-fd/'],
    ['name' => 'PALLAY PUNCHOY FD', 'url' => 'https://www.perusafejourneysgroup.com/destinos/pallay-punchoy-fd/'],
    ['name' => 'QUELCAYA FD', 'url' => 'https://www.perusafejourneysgroup.com/destinos/quelcaya-fd/'],
    ['name' => 'VALLE SAGRADO BIG', 'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-big/'],
    ['name' => 'VALLE SAGRADO FD', 'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-fd/'],
    ['name' => 'VALLE SUR', 'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sur/'],
    ['name' => 'WAQRAPUKARA FD', 'url' => 'https://www.perusafejourneysgroup.com/destinos/waqrapukara-fd/']
];

$all_destinos = [
    [
        'title' => '7 LAGUNAS DEL AUSANGATE',
        'location' => 'Ausangate, Cusco',
        'duration' => 'Full Day (FD)',
        'price_usd' => '$ 80.00',
        'price_pen' => 'S/. 275.50',
        'badge' => 'Aguas Termales & Glaciares',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/7-lagunas-del-ausangate/'
    ],
    [
        'title' => 'ATV MONTAÑA DE COLORES FD (SIMPLE)',
        'location' => 'Pitumarca, Cusco',
        'duration' => 'Full Day (FD)',
        'price_usd' => '$ 85.00',
        'price_pen' => 'S/. 292.60',
        'badge' => 'Adrenalina Simple',
        'image' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/atv-montana-de-colores-fd/'
    ],
    [
        'title' => 'ATV MONTAÑA DE COLORES FD (DOBLE)',
        'location' => 'Pitumarca, Cusco',
        'duration' => 'Full Day (FD)',
        'price_usd' => '$ 65.00',
        'price_pen' => 'S/. 223.73',
        'badge' => 'Adrenalina Doble',
        'image' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/atv-montana-de-colores-fd/'
    ],
    [
        'title' => 'LAGUNA HUMANTAY FD',
        'location' => 'Mollepata, Cusco',
        'duration' => 'Full Day (FD)',
        'price_usd' => '$ 30.00',
        'price_pen' => 'S/. 103.50',
        'badge' => 'Aguas Turquesas',
        'image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/laguna-humantay-fd/'
    ],
    [
        'title' => 'MONTAÑA VINICUNCA FD',
        'location' => 'Quispicanchi, Cusco',
        'duration' => 'Full Day (FD)',
        'price_usd' => '$ 30.00',
        'price_pen' => 'S/. 103.50',
        'badge' => 'Montaña de 7 Colores',
        'image' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/montana-vinicunca-fd/'
    ],
    [
        'title' => 'PALLAY PUNCHOY FD',
        'location' => 'Canas, Cusco',
        'duration' => 'Full Day (FD)',
        'price_usd' => '$ 45.00',
        'price_pen' => 'S/. 154.90',
        'badge' => 'Cerro Afilado',
        'image' => 'https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/pallay-punchoy-fd/'
    ],
    [
        'title' => 'QUELCAYA FD',
        'location' => 'Canchis, Cusco',
        'duration' => 'Full Day (FD)',
        'price_usd' => '$ 80.00',
        'price_pen' => 'S/. 275.50',
        'badge' => 'Glacial Tropical',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/quelcaya-fd/'
    ],
    [
        'title' => 'VALLE SAGRADO BIG',
        'location' => 'Valle Sagrado, Cusco',
        'duration' => 'Full Day Extendido',
        'price_usd' => '$ 35.00',
        'price_pen' => 'S/. 120.50',
        'badge' => 'Pisac & Ollantaytambo',
        'image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-big/'
    ],
    [
        'title' => 'VALLE SAGRADO FD',
        'location' => 'Urubamba, Cusco',
        'duration' => 'Full Day Clásico',
        'price_usd' => '$ 30.00',
        'price_pen' => 'S/. 103.50',
        'badge' => 'Tradición Inca',
        'image' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-fd/'
    ],
    [
        'title' => 'VALLE SUR',
        'location' => 'Tipón & Pikillacta',
        'duration' => 'Half Day',
        'price_usd' => '$ 25.00',
        'price_pen' => 'S/. 86.50',
        'badge' => 'Arqueología & Gastronomía',
        'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sur/'
    ],
    [
        'title' => 'WAQRAPUKARA FD',
        'location' => 'Acomayo, Cusco',
        'duration' => 'Full Day (FD)',
        'price_usd' => '$ 40.00',
        'price_pen' => 'S/. 138.00',
        'badge' => 'Fortaleza Mística',
        'image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/waqrapukara-fd/'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinos – <?php echo $company_name; ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <style>
        :root {
            --color-naranja-journey: #E94D00;
            --color-naranja-hover: #C74000;
            --color-blanco: #FFFFFF;
            --color-azul-peru-safe: #002238;
            --color-azul-andino: #0B527A;
            --color-gris-claro: #F8FAFC;
            --color-texto-oscuro: #0F172A;
            --color-texto-suave: #64748B;
            --color-gris-border: #E2E8F0;
        }

        body, button, input, select, textarea, .nav-link, .dropdown-item, .btn {
            font-family: 'Poppins', sans-serif !important;
        }

        body {
            background-color: var(--color-blanco);
            color: var(--color-texto-oscuro);
            overflow-x: hidden;
            width: 100vw;
            margin: 0;
            padding: 0;
        }

        .top-bar {
            background: linear-gradient(90deg, #001220 0%, #002238 50%, #001220 100%);
            font-size: 0.82rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 0.4rem 0;
        }

        .topbar-phone-badge {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.78rem;
            color: #E2E8F0 !important;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .topbar-phone-badge:hover {
            background: var(--color-naranja-journey);
            color: var(--color-blanco) !important;
            border-color: var(--color-naranja-journey);
        }

        .topbar-btn-reserva {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: var(--color-blanco) !important;
            font-weight: 700;
            font-size: 0.78rem;
            border-radius: 50px;
            padding: 0.32rem 1.1rem;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            transition: all 0.28s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
            text-transform: uppercase;
        }

        .topbar-btn-reserva:hover {
            background: linear-gradient(135deg, var(--color-naranja-hover) 0%, var(--color-naranja-journey) 100%);
        }

        .navbar-custom {
            background: #FFFFFF;
            transition: all 0.3s ease;
            border-bottom: 2px solid var(--color-naranja-journey);
            width: 100%;
            padding: 0.35rem 0;
            box-shadow: 0 4px 20px rgba(0, 34, 56, 0.05);
        }

        .logo-img-header {
            height: 82px;
            object-fit: contain;
        }

        .nav-link {
            color: var(--color-azul-peru-safe) !important;
            font-weight: 700;
            font-size: 0.88rem;
            padding: 0.55rem 1.1rem !important;
            text-transform: uppercase;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--color-naranja-journey) !important;
        }

        .dropdown-menu-custom {
            background: #FFFFFF !important;
            border: 1px solid var(--color-gris-border) !important;
            border-top: 3px solid var(--color-naranja-journey) !important;
            border-radius: 12px !important;
            min-width: 260px;
            box-shadow: 0 10px 30px rgba(0, 34, 56, 0.08) !important;
        }

        .dropdown-item-custom {
            color: var(--color-texto-oscuro) !important;
            font-size: 0.82rem !important;
            font-weight: 700 !important;
            padding: 0.55rem 0.9rem !important;
            display: flex;
            align-items: center;
            gap: 10px;
            text-transform: uppercase;
        }

        .dropdown-item-custom:hover {
            background-color: rgba(233, 77, 0, 0.08) !important;
            color: var(--color-naranja-journey) !important;
        }

        .page-header-banner {
            background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%);
            padding: 3.5rem 0 2.8rem;
            color: var(--color-blanco);
            text-align: center;
            border-bottom: 3px solid var(--color-naranja-journey);
        }

        .dest-card-creative {
            background: var(--color-blanco);
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: none !important;
        }

        .dest-card-creative:hover {
            transform: translateY(-3px);
            border-color: var(--color-naranja-journey);
        }

        .dest-card-img-box {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .dest-card-img-box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .dest-card-creative:hover .dest-card-img-box img {
            transform: scale(1.06);
        }

        .dest-card-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--color-naranja-journey);
            color: var(--color-blanco);
            font-size: 0.72rem;
            font-weight: 800;
            padding: 0.28rem 0.7rem;
            border-radius: 20px;
        }

        .price-usd {
            font-size: 1.05rem;
            font-weight: 900;
            color: var(--color-naranja-journey);
        }

        .price-pen {
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--color-azul-andino);
        }

        .footer-custom {
            background: #001220;
            border-top: 2px solid var(--color-naranja-journey);
            padding-top: 3.2rem;
            padding-bottom: 1.5rem;
            color: #CBD5E1;
            width: 100vw;
        }

        .footer-contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 0.85rem;
            color: #E2E8F0;
        }

        .footer-contact-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(233, 77, 0, 0.15);
            color: var(--color-naranja-journey);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            border: 1px solid rgba(233, 77, 0, 0.25);
            flex-shrink: 0;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 58px;
            height: 58px;
            background-color: #25D366;
            color: #FFF;
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            z-index: 1050;
            text-decoration: none;
            box-shadow: none !important;
        }

        .llama-svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container-fluid px-3 px-lg-5 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="topbar-phone-badge">
                    <i class="bi bi-telephone-fill text-warning"></i>
                    <span><strong>Ventas:</strong> <?php echo $phones['ventas']['number']; ?></span>
                </a>
                <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="topbar-phone-badge">
                    <i class="bi bi-gear-fill text-warning"></i>
                    <span><strong>Operaciones:</strong> <?php echo $phones['operaciones']['number']; ?></span>
                </a>
                <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="topbar-phone-badge">
                    <i class="bi bi-shield-check text-warning"></i>
                    <span><strong>Calidad:</strong> <?php echo $phones['calidad']['number']; ?></span>
                </a>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20un%20viaje%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="topbar-btn-reserva">
                    <svg class="llama-svg" viewBox="0 0 512 512">
                        <path d="M224 96c0-26.5 21.5-48 48-48s48 21.5 48 48c0 14.7-6.6 27.8-17 36.7 18.2 16.5 29 40 29 65.3v24h16c35.3 0 64 28.7 64 64v16c0 17.7-14.3 32-32 32h-16v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-80h-32v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-96c0-44.2 35.8-80 80-80v-24c0-13.3-5.3-25.3-14-34.1-10.4-10.5-17-24.8-17-40.6zM272 80c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16z"/>
                    </svg>
                    <span>Reserva tu Viaje</span>
                </a>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-custom">
        <div class="container-fluid px-3 px-lg-5">
            <a href="https://www.perusafejourneysgroup.com/">
                <img src="https://www.perusafejourneysgroup.com/wp-content/uploads/2026/10/Diseno-sin-titulo.png" alt="Logo" class="logo-img-header">
            </a>
            <button class="navbar-toggler text-dark border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
                <i class="bi bi-list fs-1 text-dark"></i>
            </button>
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item"><a class="nav-link" href="https://www.perusafejourneysgroup.com/">INICIO</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="https://www.perusafejourneysgroup.com/destinos/" data-bs-toggle="dropdown">
                            DESTINOS
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom shadow-lg">
                            <?php foreach($destinos_submenu as $sub_item): ?>
                                <li>
                                    <a class="dropdown-item dropdown-item-custom" href="<?php echo $sub_item['url']; ?>">
                                        <span><?php echo $sub_item['name']; ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://www.perusafejourneysgroup.com/experiencias/">EXPERIENCIAS</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.perusafejourneysgroup.com/programas/">PROGRAMAS</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.perusafejourneysgroup.com/nosotros/">NOSOTROS</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.perusafejourneysgroup.com/contacto/">CONTACTO</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- BANNER -->
    <section class="page-header-banner">
        <div class="container-fluid px-3 px-lg-5">
            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold mb-2">TODOS NUESTROS DESTINOS</span>
            <h1 class="display-5 fw-extrabold text-white">Nuestros Destinos Turísticos</h1>
            <p class="fs-6 text-light max-w-700 mx-auto">Explora la magia, historia y paisajes extraordinarios del Perú con precios transparentes en USD ($) y Soles (S/.).</p>
        </div>
    </section>

    <!-- CARDS DE DESTINOS -->
    <section class="py-4">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row g-3">
                <?php foreach($all_destinos as $dest): ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="dest-card-creative">
                            <div class="dest-card-img-box">
                                <img src="<?php echo $dest['image']; ?>" alt="<?php echo $dest['title']; ?>" loading="lazy">
                                <span class="dest-card-badge"><?php echo $dest['badge']; ?></span>
                            </div>
                            <div class="p-3 d-flex flex-column flex-grow-1 justify-content-between">
                                <div>
                                    <div class="d-flex justify-content-between text-muted small fw-bold mb-1">
                                        <span><?php echo $dest['location']; ?></span>
                                        <span><?php echo $dest['duration']; ?></span>
                                    </div>
                                    <h3 class="fs-6 fw-bold text-dark mb-2"><?php echo $dest['title']; ?></h3>
                                </div>
                                <div class="pt-2 border-top d-flex align-items-center justify-content-between">
                                    <div>
                                        <div class="price-usd"><?php echo $dest['price_usd']; ?></div>
                                        <div class="price-pen"><?php echo $dest['price_pen']; ?></div>
                                    </div>
                                    <a href="<?php echo $dest['url']; ?>" class="btn btn-sm btn-outline-warning text-dark fw-bold py-1 px-3">Ver Tour</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FOOTER CON ICONOS -->
    <footer class="footer-custom">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <a href="https://www.perusafejourneysgroup.com/" class="fs-4 fw-extrabold text-white text-decoration-none">
                        Perú Safe Journeys <span style="color: var(--color-naranja-journey);">| Viajes Perú</span>
                    </a>
                    <p class="pe-lg-3 mt-2" style="color: #94A3B8;">
                        Agencia de viajes especializada en experiencias auténticas, seguras y personalizadas. Conectamos viajeros con el corazón cultural del Perú.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold text-white mb-3">Navegación</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://www.perusafejourneysgroup.com/" class="text-secondary text-decoration-none">INICIO</a></li>
                        <li class="mb-2"><a href="https://www.perusafejourneysgroup.com/destinos/" class="text-secondary text-decoration-none">DESTINOS</a></li>
                        <li class="mb-2"><a href="https://www.perusafejourneysgroup.com/experiencias/" class="text-secondary text-decoration-none">EXPERIENCIAS</a></li>
                        <li class="mb-2"><a href="https://www.perusafejourneysgroup.com/programas/" class="text-secondary text-decoration-none">PROGRAMAS</a></li>
                        <li class="mb-2"><a href="https://www.perusafejourneysgroup.com/nosotros/" class="text-secondary text-decoration-none">NOSOTROS</a></li>
                        <li class="mb-2"><a href="https://www.perusafejourneysgroup.com/contacto/" class="text-secondary text-decoration-none">CONTACTO</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h5 class="fw-bold text-white mb-3">Contacto Oficial</h5>

                    <div class="footer-contact-item">
                        <div class="footer-contact-icon"><i class="bi bi-telephone-fill"></i></div>
                        <div>
                            <small class="d-block text-secondary">Ventas:</small>
                            <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="text-white text-decoration-none fw-bold"><?php echo $phones['ventas']['number']; ?></a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <div class="footer-contact-icon"><i class="bi bi-gear-fill"></i></div>
                        <div>
                            <small class="d-block text-secondary">Operaciones:</small>
                            <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="text-white text-decoration-none fw-bold"><?php echo $phones['operaciones']['number']; ?></a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <div class="footer-contact-icon"><i class="bi bi-shield-check"></i></div>
                        <div>
                            <small class="d-block text-secondary">Calidad 24/7:</small>
                            <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="text-white text-decoration-none fw-bold"><?php echo $phones['calidad']['number']; ?></a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <div class="footer-contact-icon"><i class="bi bi-envelope-fill"></i></div>
                        <div>
                            <small class="d-block text-secondary">Correo de contacto:</small>
                            <a href="mailto:<?php echo $email_address; ?>" class="text-white text-decoration-none fw-bold"><?php echo $email_address; ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top border-secondary border-opacity-25 mt-4 pt-3 text-center text-secondary small">
                <p class="mb-0">&copy; <?php echo $current_year; ?> Todos los derechos reservados para: <strong>Perú Safe Journeys | Viajes Perú</strong></p>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>" class="whatsapp-float"><i class="bi bi-whatsapp"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>
</html>
