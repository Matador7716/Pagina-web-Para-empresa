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
        'rating' => '5.0 (86 Reseñas)',
        'price_usd' => '$ 80.00',
        'price_pen' => 'S/. 275.50',
        'badge' => '🏔️ Aguas Termales & Glaciares',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/7-lagunas-del-ausangate/'
    ],
    [
        'title' => 'ATV MONTAÑA DE COLORES FD',
        'location' => 'Pitumarca, Cusco',
        'duration' => 'Full Day (FD)',
        'rating' => '4.9 (112 Reseñas)',
        'price_usd' => '$ 85.00 Simp / $ 65.00 Dob',
        'price_pen' => 'S/. 292.60 Simp / S/. 223.73 Dob',
        'badge' => '⚡ Adrenalina en Cuatrimoto',
        'image' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/atv-montana-de-colores-fd/'
    ],
    [
        'title' => 'LAGUNA HUMANTAY FD',
        'location' => 'Mollepata, Cusco',
        'duration' => 'Full Day (FD)',
        'rating' => '4.9 (140 Reseñas)',
        'price_usd' => '$ 30.00',
        'price_pen' => 'S/. 103.50',
        'badge' => '💧 Aguas Turquesas',
        'image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/laguna-humantay-fd/'
    ],
    [
        'title' => 'MONTAÑA VINICUNCA FD',
        'location' => 'Quispicanchi, Cusco',
        'duration' => 'Full Day (FD)',
        'rating' => '4.8 (155 Reseñas)',
        'price_usd' => '$ 30.00',
        'price_pen' => 'S/. 103.50',
        'badge' => '🌈 Montaña de 7 Colores',
        'image' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/montana-vinicunca-fd/'
    ],
    [
        'title' => 'PALLAY PUNCHOY FD',
        'location' => 'Canas, Cusco',
        'duration' => 'Full Day (FD)',
        'rating' => '4.9 (78 Reseñas)',
        'price_usd' => '$ 45.00',
        'price_pen' => 'S/. 154.90',
        'badge' => '🏔️ Cerro Afilado',
        'image' => 'https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/pallay-punchoy-fd/'
    ],
    [
        'title' => 'QUELCAYA FD',
        'location' => 'Canchis, Cusco',
        'duration' => 'Full Day (FD)',
        'rating' => '5.0 (64 Reseñas)',
        'price_usd' => '$ 80.00',
        'price_pen' => 'S/. 275.50',
        'badge' => '❄️ Glacial Tropical',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/quelcaya-fd/'
    ],
    [
        'title' => 'VALLE SAGRADO BIG',
        'location' => 'Valle Sagrado, Cusco',
        'duration' => 'Full Day Extendido',
        'rating' => '4.9 (130 Reseñas)',
        'price_usd' => '$ 35.00',
        'price_pen' => 'S/. 120.50',
        'badge' => '🏛️ Pisac, Ollantaytambo & Chinchero',
        'image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-big/'
    ],
    [
        'title' => 'VALLE SAGRADO FD',
        'location' => 'Urubamba, Cusco',
        'duration' => 'Full Day Clásico',
        'rating' => '4.8 (98 Reseñas)',
        'price_usd' => '$ 30.00',
        'price_pen' => 'S/. 103.50',
        'badge' => '🌾 Tradición & Mercado Inca',
        'image' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-fd/'
    ],
    [
        'title' => 'VALLE SUR',
        'location' => 'Tipón & Pikillacta',
        'duration' => 'Half Day',
        'rating' => '4.7 (72 Reseñas)',
        'price_usd' => '$ 25.00',
        'price_pen' => 'S/. 86.50',
        'badge' => '🕌 Arqueología & Gastronomía',
        'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sur/'
    ],
    [
        'title' => 'WAQRAPUKARA FD',
        'location' => 'Acomayo, Cusco',
        'duration' => 'Full Day (FD)',
        'rating' => '5.0 (90 Reseñas)',
        'price_usd' => '$ 40.00',
        'price_pen' => 'S/. 138.00',
        'badge' => '🏰 Fortaleza mística',
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
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">

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
            --color-naranja-glow: rgba(233, 77, 0, 0.4);
        }

        body {
            font-family: 'Manrope', sans-serif;
            background-color: var(--color-blanco);
            color: var(--color-texto-oscuro);
            overflow-x: hidden;
            width: 100vw;
            margin: 0;
            padding: 0;
        }

        h1, h2, h3, h4, h5, h6, .nav-link, .dropdown-item, .btn-reserva-llama {
            font-family: 'Poppins', sans-serif;
        }

        .top-bar {
            background: linear-gradient(90deg, #001220 0%, #002238 50%, #001220 100%);
            font-size: 0.85rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 0.5rem 0;
        }

        .topbar-phone-badge {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 0.3rem 0.85rem;
            border-radius: 50px;
            font-size: 0.82rem;
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

        .navbar-custom {
            background: rgba(0, 34, 56, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 2px solid var(--color-naranja-journey);
            padding: 0.65rem 0;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
        }

        .logo-img-header {
            height: 88px;
            object-fit: contain;
        }

        .nav-link {
            color: var(--color-blanco) !important;
            font-weight: 700;
            font-size: 0.92rem;
            padding: 0.65rem 1.15rem !important;
            text-transform: uppercase;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--color-naranja-journey) !important;
        }

        .dropdown-menu-custom {
            background: rgba(0, 22, 40, 0.98) !important;
            border: 1px solid rgba(233, 77, 0, 0.35) !important;
            border-top: 4px solid var(--color-naranja-journey) !important;
            border-radius: 16px !important;
            min-width: 290px;
        }

        .dropdown-item-custom {
            color: #F1F5F9 !important;
            font-size: 0.85rem !important;
            font-weight: 700 !important;
            padding: 0.7rem 1.1rem !important;
            display: flex;
            align-items: center;
            gap: 10px;
            text-transform: uppercase;
        }

        .dropdown-item-custom:hover {
            background-color: var(--color-naranja-journey) !important;
            color: var(--color-blanco) !important;
        }

        .btn-reserva-llama {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: var(--color-blanco) !important;
            font-weight: 700;
            font-size: 0.88rem;
            border-radius: 50px;
            padding: 0.65rem 1.4rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            box-shadow: 0 4px 16px var(--color-naranja-glow);
            text-transform: uppercase;
        }

        .page-header-banner {
            background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%);
            padding: 5rem 0 4rem;
            color: var(--color-blanco);
            text-align: center;
            border-bottom: 3px solid var(--color-naranja-journey);
        }

        .dest-card-creative {
            background: var(--color-blanco);
            border-radius: 22px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 12px 35px rgba(0, 34, 56, 0.06);
            transition: all 0.38s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .dest-card-creative:hover {
            transform: translateY(-8px);
            box-shadow: 0 22px 48px rgba(233, 77, 0, 0.22);
            border-color: var(--color-naranja-journey);
        }

        .dest-card-img-box {
            position: relative;
            width: 100%;
            height: 250px;
            overflow: hidden;
        }

        .dest-card-img-box img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.65s ease;
        }

        .dest-card-creative:hover .dest-card-img-box img {
            transform: scale(1.1);
        }

        .dest-card-badge {
            position: absolute;
            top: 14px;
            right: 14px;
            background: var(--color-naranja-journey);
            color: var(--color-blanco);
            font-size: 0.75rem;
            font-weight: 800;
            padding: 0.38rem 0.9rem;
            border-radius: 30px;
        }

        .price-usd {
            font-size: 1.2rem;
            font-weight: 900;
            color: var(--color-naranja-journey);
            font-family: 'Poppins', sans-serif;
        }

        .price-pen {
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--color-azul-andino);
            font-family: 'Poppins', sans-serif;
        }

        .footer-custom {
            background: #001220;
            border-top: 2px solid var(--color-naranja-journey);
            padding-top: 5rem;
            padding-bottom: 2rem;
            color: #CBD5E1;
            width: 100vw;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 65px;
            height: 65px;
            background-color: #25D366;
            color: #FFF;
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4);
            z-index: 1050;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container-fluid px-3 px-lg-5 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="topbar-phone-badge">
                    <i class="bi bi-telephone-fill"></i>
                    <span><strong>Ventas:</strong> <?php echo $phones['ventas']['number']; ?></span>
                </a>
                <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="topbar-phone-badge">
                    <i class="bi bi-gear-fill"></i>
                    <span><strong>Operaciones:</strong> <?php echo $phones['operaciones']['number']; ?></span>
                </a>
                <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="topbar-phone-badge">
                    <i class="bi bi-shield-check"></i>
                    <span><strong>Calidad:</strong> <?php echo $phones['calidad']['number']; ?></span>
                </a>
            </div>
            <div class="d-none d-md-flex align-items-center gap-2 text-white">
                <i class="bi bi-envelope-fill text-warning"></i>
                <span><?php echo $email_address; ?></span>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-custom">
        <div class="container-fluid px-3 px-lg-5">
            <a href="https://www.perusafejourneysgroup.com/">
                <img src="https://www.perusafejourneysgroup.com/wp-content/uploads/2026/10/Diseno-sin-titulo.png" alt="Logo" class="logo-img-header">
            </a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
                <i class="bi bi-list fs-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item"><a class="nav-link" href="https://www.perusafejourneysgroup.com/">INICIO</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="https://www.perusafejourneysgroup.com/destinos/" data-bs-toggle="dropdown">
                            DESTINOS <i class="bi bi-chevron-down text-warning"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom shadow-lg">
                            <?php foreach($destinos_submenu as $sub_item): ?>
                                <li>
                                    <a class="dropdown-item dropdown-item-custom" href="<?php echo $sub_item['url']; ?>">
                                        <i class="bi bi-geo-alt-fill text-warning"></i>
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
                <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>" class="btn-reserva-llama">Reserva tu Viaje</a>
            </div>
        </div>
    </nav>

    <!-- BANNER -->
    <section class="page-header-banner">
        <div class="container-fluid px-3 px-lg-5">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">🇵🇪 TODOS NUESTROS DESTINOS</span>
            <h1 class="display-4 fw-extrabold text-white">Nuestros Destinos Turísticos</h1>
            <p class="fs-5 text-light max-w-700 mx-auto">Explora la magia, historia y paisajes extraordinarios del Perú con precios transparentes en USD ($) y Soles (S/.).</p>
        </div>
    </section>

    <!-- CARDS DE DESTINOS CON PRECIOS EN TODAS LAS TARJETAS -->
    <section class="py-5">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row g-4">
                <?php foreach($all_destinos as $dest): ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="dest-card-creative">
                            <div class="dest-card-img-box">
                                <img src="<?php echo $dest['image']; ?>" alt="<?php echo $dest['title']; ?>" loading="lazy">
                                <span class="dest-card-badge"><?php echo $dest['badge']; ?></span>
                            </div>
                            <div class="p-4 d-flex flex-column flex-grow-1 justify-content-between">
                                <div>
                                    <div class="d-flex justify-content-between text-muted small fw-bold mb-2">
                                        <span><i class="bi bi-geo-alt-fill text-warning"></i> <?php echo $dest['location']; ?></span>
                                        <span><i class="bi bi-clock text-warning"></i> <?php echo $dest['duration']; ?></span>
                                    </div>
                                    <h3 class="fs-5 fw-bold text-dark mb-2"><?php echo $dest['title']; ?></h3>
                                </div>
                                <div class="pt-3 border-top d-flex align-items-center justify-content-between">
                                    <div>
                                        <div class="price-usd"><?php echo $dest['price_usd']; ?></div>
                                        <div class="price-pen"><?php echo $dest['price_pen']; ?></div>
                                    </div>
                                    <a href="<?php echo $dest['url']; ?>" class="btn btn-sm btn-reserva-llama">Ver Tour</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer-custom">
        <div class="container-fluid px-3 px-lg-5 text-center">
            <p class="mb-0">&copy; <?php echo $current_year; ?> Todos los derechos reservados para: <strong>Perú Safe Journeys | Viajes Perú</strong></p>
        </div>
    </footer>

    <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>" class="whatsapp-float"><i class="bi bi-whatsapp"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>
</html>
