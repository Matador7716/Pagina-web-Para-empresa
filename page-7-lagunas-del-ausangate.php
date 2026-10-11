<?php
// page-7-lagunas-del-ausangate.php - Perú Safe Journeys
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$company_name = "Perú Safe Journeys";
$company_tagline = "Travel Agency";

// Teléfonos de contacto por área
$phones = [
    'ventas' => ['number' => '+51 931 352 810', 'clean' => '51931352810', 'label' => 'Ventas'],
    'operaciones' => ['number' => '+51 930 823 110', 'clean' => '51930823110', 'label' => 'Operaciones'],
    'calidad' => ['number' => '+51 913 716 197', 'clean' => '51913716197', 'label' => 'Calidad 24/7']
];

$email_address = "informes-web@perusafejourneys.com";
$current_year = date('Y');

// Submenú de Destinos
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

// Las 7 lagunas del Ausangate para la galería de 7 fotos
$seven_lakes_gallery = [
    [
        'url' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=1000&q=80',
        'title' => '1. Laguna Pucacocha',
        'subtitle' => 'Aguas rojizas al pie del Apu Ausangate'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=1000&q=80',
        'title' => '2. Laguna Patacocha',
        'subtitle' => 'Reflejos turquesa de montaña alta'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1000&q=80',
        'title' => '3. Laguna Alqacocha',
        'subtitle' => 'Espejo andino cristalino a más de 4,300 msnm'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1000&q=80',
        'title' => '4. Laguna Qomercocha',
        'subtitle' => 'Aguas de tono verde esmeralda deslumbrante'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1000&q=80',
        'title' => '5. Laguna Orco Otorongo',
        'subtitle' => 'Conocida como el Otorongo Macho de la cordillera'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1501555088652-021faa106b9b?auto=format&fit=crop&w=1000&q=80',
        'title' => '6. Laguna China Otorongo',
        'subtitle' => 'Su gemela andina con misteriosa fauna andina'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=1000&q=80',
        'title' => '7. Laguna Azulcocha',
        'subtitle' => 'Intenso color azul profundo de deshielo glaciar'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 Lagunas del Ausangate – <?php echo $company_name; ?></title>

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <style>
        :root {
            --color-naranja-journey: #E94D00;
            --color-naranja-hover: #C74000;
            --color-blanco: #FFFFFF;
            --color-azul-peru-safe: #002238;
            --color-azul-andino: #0B527A;
            --color-dorado-andino: #D9A441;
            --color-gris-claro: #F8FAFC;
            --color-texto-oscuro: #0F172A;
            --color-texto-suave: #475569;
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

        /* TOP BAR */
        .top-bar {
            background: linear-gradient(90deg, #001220 0%, #002238 50%, #001220 100%);
            font-size: 0.82rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
            padding: 0.45rem 0;
            z-index: 1050;
            position: relative;
        }

        .topbar-phone-badge {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 0.28rem 0.82rem;
            border-radius: 50px;
            font-size: 0.8rem;
            color: #F1F5F9 !important;
            text-decoration: none;
            transition: all 0.28s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .topbar-phone-badge:hover {
            background: var(--color-naranja-journey);
            color: var(--color-blanco) !important;
            border-color: var(--color-naranja-journey);
        }

        .topbar-social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            color: #CBD5E1 !important;
            font-size: 0.9rem;
            transition: all 0.28s ease;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .topbar-social-icon:hover {
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
            padding: 0.35rem 1.15rem;
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
            transform: translateY(-1px);
        }

        /* NAVBAR HEADER OVERLAY */
        .navbar-custom {
            background: rgba(0, 18, 32, 0.96);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 1040;
            transition: all 0.35s ease;
            padding: 0.4rem 0;
            border-bottom: 2px solid var(--color-naranja-journey);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.35);
        }

        .logo-img-header {
            height: 90px;
            width: auto;
            object-fit: contain;
            transition: transform 0.3s ease;
            filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.4));
        }

        .navbar-brand-logo:hover .logo-img-header {
            transform: scale(1.04);
        }

        .nav-link {
            color: #FFFFFF !important;
            font-weight: 700;
            font-size: 0.92rem;
            padding: 0.65rem 1.2rem !important;
            letter-spacing: 0.6px;
            text-transform: uppercase;
            position: relative;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.6);
            transition: color 0.25s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 2px;
            left: 50%;
            width: 0%;
            height: 3px;
            background: var(--color-naranja-journey);
            transition: all 0.3s ease;
            transform: translateX(-50%);
            border-radius: 3px;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--color-naranja-journey) !important;
        }

        .dropdown-menu-custom {
            background: rgba(0, 18, 32, 0.96) !important;
            backdrop-filter: blur(16px);
            border: 1px solid rgba(233, 77, 0, 0.3) !important;
            border-top: 3px solid var(--color-naranja-journey) !important;
            border-radius: 14px !important;
            padding: 0.6rem 0.4rem !important;
            min-width: 270px;
            margin-top: 0.4rem !important;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5) !important;
        }

        @media (min-width: 992px) {
            .nav-item.dropdown:hover .dropdown-menu-custom {
                display: block;
            }
        }

        .dropdown-item-custom {
            color: #F1F5F9 !important;
            font-size: 0.83rem !important;
            font-weight: 700 !important;
            letter-spacing: 0.4px;
            padding: 0.6rem 1rem !important;
            border-radius: 8px;
            transition: all 0.25s ease !important;
            text-transform: uppercase;
        }

        .dropdown-item-custom:hover {
            background-color: var(--color-naranja-journey) !important;
            color: #FFFFFF !important;
            transform: translateX(5px);
        }

        /* ULTRA-FRIENDLY & MODERN HERO BANNER MATCHING INICIO */
        .tour-hero-banner {
            background: linear-gradient(180deg, rgba(0, 18, 32, 0.65) 0%, rgba(0, 34, 56, 0.92) 100%), url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1800&q=80') center/cover no-repeat;
            padding: 5.8rem 0 4.8rem;
            color: #FFFFFF;
            border-bottom: 3px solid var(--color-naranja-journey);
            position: relative;
        }

        .section-badge-clean {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(233, 77, 0, 0.08);
            color: var(--color-naranja-journey);
            font-weight: 800;
            font-size: 0.8rem;
            padding: 0.38rem 1.1rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin-bottom: 0.6rem;
            border: 1px solid rgba(233, 77, 0, 0.22);
        }

        .tour-price-card-creative {
            background: rgba(0, 18, 32, 0.88);
            backdrop-filter: blur(18px);
            border: 2px solid rgba(233, 77, 0, 0.5);
            border-radius: 28px;
            padding: 2.2rem 2rem;
            text-align: center;
            transition: all 0.35s ease;
        }

        .tour-price-card-creative:hover {
            border-color: var(--color-naranja-journey);
            transform: translateY(-4px);
        }

        .tour-price-main {
            font-size: 2.8rem;
            font-weight: 900;
            color: #FFFFFF;
            line-height: 1;
        }

        .tour-price-pen-badge {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--color-dorado-andino);
        }

        /* GALERÍA MODERNA TIPO SLIDER Y CARDS INTERACTIVAS */
        .modern-gallery-section {
            background-color: #F8FAFC;
            padding: 4rem 0;
            border-bottom: 1px solid var(--color-gris-border);
        }

        .modern-gallery-track {
            display: flex;
            gap: 18px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 10px 4px 20px;
            scrollbar-width: none;
        }

        .modern-gallery-track::-webkit-scrollbar {
            display: none;
        }

        .modern-lake-card {
            flex: 0 0 310px;
            height: 380px;
            border-radius: 24px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            border: none !important;
            transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
            box-shadow: none !important;
        }

        .modern-lake-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .modern-lake-card:hover {
            transform: translateY(-8px);
        }

        .modern-lake-card:hover img {
            transform: scale(1.12);
        }

        .modern-lake-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(0, 18, 32, 0.15) 0%, rgba(0, 18, 32, 0.92) 100%);
            padding: 1.5rem 1.3rem;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            color: #FFFFFF;
        }

        .modern-lake-badge {
            position: absolute;
            top: 16px;
            left: 16px;
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: #FFFFFF;
            font-size: 0.78rem;
            font-weight: 800;
            padding: 0.38rem 0.95rem;
            border-radius: 50px;
            text-transform: uppercase;
        }

        .modern-zoom-btn {
            position: absolute;
            top: 16px;
            right: 16px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(8px);
            color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .modern-lake-card:hover .modern-zoom-btn {
            background: var(--color-naranja-journey);
            transform: scale(1.1);
        }

        /* CUERPO DEL TOUR RE-DISEÑADO CON PALETA INICIO */
        .tour-friendly-body {
            background-color: #FFFFFF;
            padding: 4.5rem 0;
        }

        .friendly-highlight-box {
            background: #F8FAFC;
            border-radius: 22px;
            border: 1px solid var(--color-gris-border);
            padding: 1.6rem 1.4rem;
            display: flex;
            align-items: center;
            gap: 16px;
            transition: all 0.3s ease;
        }

        .friendly-highlight-box:hover {
            border-color: var(--color-naranja-journey);
            transform: translateY(-3px);
            background: #FFFFFF;
        }

        .friendly-icon-circle {
            width: 54px;
            height: 54px;
            border-radius: 16px;
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .tour-spec-box {
            background: #FFFFFF;
            border-radius: 24px;
            border: 1px solid var(--color-gris-border);
            padding: 2.2rem 1.8rem;
            height: 100%;
            transition: all 0.3s ease;
        }

        .tour-spec-box:hover {
            border-color: var(--color-naranja-journey);
        }

        .tour-spec-icon {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            background: linear-gradient(135deg, rgba(233, 77, 0, 0.12) 0%, rgba(233, 77, 0, 0.04) 100%);
            color: var(--color-naranja-journey);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.2rem;
            border: 1px solid rgba(233, 77, 0, 0.25);
        }

        .tour-check-list {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }

        .tour-check-list li {
            position: relative;
            padding-left: 1.8rem;
            margin-bottom: 0.7rem;
            font-size: 0.94rem;
            color: #334155;
            line-height: 1.6;
        }

        .tour-check-list li::before {
            content: '\F26A';
            font-family: 'bootstrap-icons';
            color: #10B981;
            font-weight: 800;
            position: absolute;
            left: 0;
            top: 1px;
            font-size: 1.05rem;
        }

        .tour-uncheck-list {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }

        .tour-uncheck-list li {
            position: relative;
            padding-left: 1.8rem;
            margin-bottom: 0.7rem;
            font-size: 0.94rem;
            color: #334155;
            line-height: 1.6;
        }

        .tour-uncheck-list li::before {
            content: '\F62A';
            font-family: 'bootstrap-icons';
            color: #EF4444;
            font-weight: 800;
            position: absolute;
            left: 0;
            top: 1px;
            font-size: 1.05rem;
        }

        .tour-bullet-list {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }

        .tour-bullet-list li {
            position: relative;
            padding-left: 1.8rem;
            margin-bottom: 0.6rem;
            font-size: 0.93rem;
            color: #334155;
            line-height: 1.6;
        }

        .tour-bullet-list li::before {
            content: '\F231';
            font-family: 'bootstrap-icons';
            color: var(--color-naranja-journey);
            position: absolute;
            left: 0;
            top: 2px;
            font-size: 0.95rem;
        }

        /* LÍNEA DE TIEMPO DEL ITINERARIO */
        .itinerary-timeline {
            position: relative;
            padding-left: 2rem;
            border-left: 3px solid var(--color-naranja-journey);
            margin-left: 0.5rem;
        }

        .itinerary-step {
            position: relative;
            margin-bottom: 1.8rem;
        }

        .itinerary-step:last-child {
            margin-bottom: 0;
        }

        .itinerary-dot {
            position: absolute;
            left: -2.6rem;
            top: 2px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--color-naranja-journey);
            border: 4px solid #FFFFFF;
        }

        /* BOTONES DE RESERVA */
        .btn-reserve-wa {
            background: #25D366;
            color: #FFFFFF !important;
            font-weight: 800;
            font-size: 1rem;
            padding: 0.85rem 2rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .btn-reserve-wa:hover {
            background: #1EBE57;
            transform: translateY(-2px);
        }

        .btn-call-sales {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: #FFFFFF !important;
            font-weight: 800;
            font-size: 1rem;
            padding: 0.85rem 2rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .btn-call-sales:hover {
            background: linear-gradient(135deg, var(--color-naranja-hover) 0%, var(--color-naranja-journey) 100%);
            transform: translateY(-2px);
        }

        /* FOOTER */
        .footer-custom {
            background: #001220;
            border-top: 2px solid var(--color-naranja-journey);
            padding-top: 3.5rem;
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
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: rgba(233, 77, 0, 0.15);
            color: var(--color-naranja-journey);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.05rem;
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
        }

        .llama-svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }

        @media (max-width: 991.98px) {
            .navbar-custom { position: relative; top: 0; background: #FFFFFF; }
            .nav-link { color: var(--color-azul-peru-safe) !important; text-shadow: none; }
            .logo-img-header { height: 68px; }
        }

        @media (max-width: 575.98px) {
            .logo-img-header { height: 54px; }
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
                    <span><strong><?php echo $phones['ventas']['label']; ?>:</strong> <?php echo $phones['ventas']['number']; ?></span>
                </a>
                <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="topbar-phone-badge">
                    <i class="bi bi-gear-fill text-warning"></i>
                    <span><strong><?php echo $phones['operaciones']['label']; ?>:</strong> <?php echo $phones['operaciones']['number']; ?></span>
                </a>
                <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="topbar-phone-badge">
                    <i class="bi bi-shield-check text-warning"></i>
                    <span><strong><?php echo $phones['calidad']['label']; ?>:</strong> <?php echo $phones['calidad']['number']; ?></span>
                </a>
            </div>

            <div class="d-flex align-items-center gap-3">
                <a href="https://facebook.com" target="_blank" class="topbar-social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com" target="_blank" class="topbar-social-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://tiktok.com" target="_blank" class="topbar-social-icon" title="TikTok"><i class="bi bi-tiktok"></i></a>
                <a href="https://youtube.com" target="_blank" class="topbar-social-icon" title="YouTube"><i class="bi bi-youtube"></i></a>

                <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20el%20tour%207%20Lagunas%20del%20Ausangate" target="_blank" class="topbar-btn-reserva">
                    <svg class="llama-svg" viewBox="0 0 512 512">
                        <path d="M224 96c0-26.5 21.5-48 48-48s48 21.5 48 48c0 14.7-6.6 27.8-17 36.7 18.2 16.5 29 40 29 65.3v24h16c35.3 0 64 28.7 64 64v16c0 17.7-14.3 32-32 32h-16v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-80h-32v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-96c0-44.2 35.8-80 80-80v-24c0-13.3-5.3-25.3-14-34.1-10.4-10.5-17-24.8-17-40.6zM272 80c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16z"/>
                    </svg>
                    <span>Reserva tu Viaje</span>
                </a>
            </div>
        </div>
    </div>

    <!-- NAVBAR HEADER OVERLAY -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid px-3 px-lg-5">
            <a class="navbar-brand-logo" href="https://www.perusafejourneysgroup.com/">
                <img src="https://www.perusafejourneysgroup.com/wp-content/uploads/2026/10/Diseno-sin-titulo.png" alt="Perú Safe Journeys Logo" class="logo-img-header">
            </a>

            <button class="navbar-toggler text-white border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <i class="bi bi-list fs-1 text-white"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneysgroup.com/">INICIO</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="https://www.perusafejourneysgroup.com/destinos/" id="destinosDropdown" role="button" data-bs-toggle="dropdown">
                            DESTINOS
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="destinosDropdown">
                            <li>
                                <a class="dropdown-item dropdown-item-custom text-warning" href="https://www.perusafejourneysgroup.com/destinos/">
                                    VER TODOS LOS DESTINOS
                                </a>
                            </li>
                            <li><hr class="dropdown-divider my-1 border-secondary opacity-25"></li>
                            <?php foreach($destinos_submenu as $sub_item): ?>
                                <li>
                                    <a class="dropdown-item dropdown-item-custom" href="<?php echo $sub_item['url']; ?>">
                                        <?php echo $sub_item['name']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneysgroup.com/experiencias/">EXPERIENCIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneysgroup.com/programas/">PROGRAMAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneysgroup.com/nosotros/">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneysgroup.com/contacto/">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO HEADER DEL TOUR - PALETA Y DISEÑO DE PÁGINA DE INICIO -->
    <section class="tour-hero-banner">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <!-- TÍTULOS SIN FONDO BADGE CON PALETA INICIO -->
                    <div class="d-flex align-items-center gap-3 flex-wrap mb-3">
                        <span class="fw-bold text-warning text-uppercase fs-6">
                            <i class="bi bi-clock-history me-1"></i> FULL DAY
                        </span>
                        <span class="text-light opacity-50">•</span>
                        <span class="fw-bold text-info text-uppercase fs-6">
                            <i class="bi bi-geo-alt-fill me-1"></i> PACCHANTA – AUSANGATE
                        </span>
                    </div>

                    <h1 class="display-3 fw-extrabold text-white mb-3 text-uppercase" style="letter-spacing: -1px; text-shadow: 0 4px 20px rgba(0,0,0,0.85);">
                        7 LAGUNAS DEL AUSANGATE
                    </h1>
                    <p class="fs-5 text-light opacity-90 mb-4" style="line-height: 1.8; max-width: 720px; text-shadow: 0 2px 10px rgba(0,0,0,0.8);">
                        Ruta mística a través de siete deslumbrantes espejos de agua glaciares al pie de la majestuosa cordillera del Ausangate y relajantes aguas termales naturales en Pacchanta.
                    </p>

                    <!-- SPECS HIGHLIGHTS -->
                    <div class="row g-3 max-w-700">
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center gap-2 text-white">
                                <i class="bi bi-graph-up-arrow text-warning fs-3"></i>
                                <div>
                                    <small class="d-block text-uppercase text-light opacity-75 fw-bold" style="font-size: 0.7rem;">Altitud Máx.</small>
                                    <strong class="fs-6">4,300 msnm</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center gap-2 text-white">
                                <i class="bi bi-activity text-warning fs-3"></i>
                                <div>
                                    <small class="d-block text-uppercase text-light opacity-75 fw-bold" style="font-size: 0.7rem;">Dificultad</small>
                                    <strong class="fs-6">Moderada - Alta</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center gap-2 text-white">
                                <i class="bi bi-people-fill text-warning fs-3"></i>
                                <div>
                                    <small class="d-block text-uppercase text-light opacity-75 fw-bold" style="font-size: 0.7rem;">Modalidad</small>
                                    <strong class="fs-6">Grupal / Privado</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 text-lg-end">
                    <div class="tour-price-card-creative mx-auto ms-lg-auto max-w-380">
                        <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold text-uppercase mb-2" style="font-size: 0.72rem;">PRECIO OFICIAL CATÁLOGO</span>
                        <div class="tour-price-main my-1">USD 40.00</div>
                        <div class="tour-price-pen-badge mb-3">S/. 137.70 soles por persona</div>
                        <div class="d-flex flex-column gap-2">
                            <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20el%20tour%207%20Lagunas%20del%20Ausangate%20a%20USD%2040" target="_blank" class="btn btn-reserve-wa w-100 justify-content-center">
                                <i class="bi bi-whatsapp"></i> Reservar por WhatsApp
                            </a>
                            <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="btn btn-call-sales w-100 justify-content-center" style="font-size: 0.88rem; padding: 0.7rem 1.5rem;">
                                <i class="bi bi-telephone-fill"></i> Llamar a Ventas
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERÍA INTERACTIVA MODERNA TIPO SLIDER Y CARDS SIN BORDES -->
    <section class="modern-gallery-section">
        <div class="container-fluid px-3 px-lg-5">
            <div class="d-flex align-items-end justify-content-between flex-wrap gap-3 mb-4">
                <div>
                    <span class="section-badge-clean">GALERÍA VISUAL Y EXCLUSIVA</span>
                    <h2 class="display-6 fw-extrabold text-dark mb-1">Las 7 Lagunas del Ausangate</h2>
                    <p class="fs-6 text-secondary mb-0">Desliza de forma interactiva y haz clic en cualquier laguna para contemplarla en alta resolución.</p>
                </div>

                <div class="d-flex gap-2">
                    <button class="slider-nav-btn" id="galleryPrevBtn" aria-label="Anterior"><i class="bi bi-chevron-left"></i></button>
                    <button class="slider-nav-btn" id="galleryNextBtn" aria-label="Siguiente"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>

            <div class="modern-gallery-track" id="lakesGalleryTrack">
                <?php foreach($seven_lakes_gallery as $idx => $lake): ?>
                    <div class="modern-lake-card" onclick="openImageModal('<?php echo $lake['url']; ?>', '<?php echo addslashes($lake['title']); ?>', '<?php echo addslashes($lake['subtitle']); ?>')">
                        <span class="modern-lake-badge">Laguna <?php echo ($idx + 1); ?></span>
                        <div class="modern-zoom-btn"><i class="bi bi-arrows-angle-expand"></i></div>
                        <img src="<?php echo $lake['url']; ?>" alt="<?php echo $lake['title']; ?>" loading="lazy">
                        <div class="modern-lake-overlay">
                            <h5 class="fs-5 fw-bold text-white mb-1"><?php echo $lake['title']; ?></h5>
                            <p class="text-warning small mb-0 fw-medium"><?php echo $lake['subtitle']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CUERPO Y SECCIONES CON PALETA Y ESTILO PÁGINA DE INICIO -->
    <section class="tour-friendly-body">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row g-5">

                <!-- COLUMNA IZQUIERDA: ITINERARIO PASO A PASO -->
                <div class="col-lg-7">
                    <!-- SPECS RÁPIDAS AMIGABLES -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <div class="friendly-highlight-box">
                                <div class="friendly-icon-circle">
                                    <i class="bi bi-sunrise-fill"></i>
                                </div>
                                <div>
                                    <small class="d-block text-uppercase text-secondary fw-bold" style="font-size: 0.72rem;">Hora de Recojo</small>
                                    <strong class="fs-6 text-dark">04:30 a.m. – 05:00 a.m.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="friendly-highlight-box">
                                <div class="friendly-icon-circle">
                                    <i class="bi bi-sunset-fill"></i>
                                </div>
                                <div>
                                    <small class="d-block text-uppercase text-secondary fw-bold" style="font-size: 0.72rem;">Retorno a Cusco</small>
                                    <strong class="fs-6 text-dark">19:00 p.m. aprox.</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ITINERARIO DETALLADO -->
                    <div class="mb-5">
                        <span class="section-badge-clean">CRONOGRAMA DETALLADO</span>
                        <h3 class="fs-2 fw-extrabold text-dark mb-4">Itinerario de la Experiencia</h3>

                        <div class="itinerary-timeline">
                            <div class="itinerary-step">
                                <div class="itinerary-dot"></div>
                                <h5 class="fw-bold text-dark mb-1">04:30 a.m. – 05:00 a.m. | Recojo y Salida de Cusco</h5>
                                <p class="text-secondary small mb-0">Recojo directo desde tu hotel en Cusco e inicio del viaje panorámico en transporte turístico hacia la comunidad andina de Pacchanta.</p>
                            </div>

                            <div class="itinerary-step">
                                <div class="itinerary-dot"></div>
                                <h5 class="fw-bold text-dark mb-1">Desayuno Energético en Pacchanta</h5>
                                <p class="text-secondary small mb-0">Llegada a Pacchanta, pueblo ubicado en las faldas del nevado Ausangate. Disfrutaremos de un reconfortante desayuno andino tradicional antes de emprender el circuito.</p>
                            </div>

                            <div class="itinerary-step">
                                <div class="itinerary-dot"></div>
                                <h5 class="fw-bold text-dark mb-1">Caminata & Recorrido por las 7 Lagunas</h5>
                                <p class="text-secondary small mb-0">
                                    Inicio de la caminata guiada hacia el mirador inicial y visita sucesiva a las siete hermosas lagunas glaciares:
                                    <strong>Pucacocha, Patacocha, Alqacocha, Qomercocha, Orco Otorongo, China Otorongo y Azulcocha</strong>.
                                </p>
                            </div>

                            <div class="itinerary-step">
                                <div class="itinerary-dot"></div>
                                <h5 class="fw-bold text-dark mb-1">Almuerzo & Aguas Termales en Pacchanta</h5>
                                <p class="text-secondary small mb-0">Retorno a Pacchanta para disfrutar de un delicioso almuerzo reconstituyente. Tiempo libre opcional para relajarse en las célebres termo-medicinales térmicas de Pacchanta con vista al Apu Ausangate.</p>
                            </div>

                            <div class="itinerary-step">
                                <div class="itinerary-dot"></div>
                                <h5 class="fw-bold text-dark mb-1">19:00 p.m. | Retorno a la Ciudad del Cusco</h5>
                                <p class="text-secondary small mb-0">Abordaremos nuestro transporte de retorno para arribar al centro del Cusco aproximadamente a las 19:00 horas.</p>
                            </div>
                        </div>
                    </div>

                    <!-- DATOS IMPORTANTES -->
                    <div class="p-4 rounded-4 bg-light border border-warning">
                        <h4 class="fs-5 fw-bold text-dark mb-2"><i class="bi bi-exclamation-triangle-fill text-warning me-2"></i> Datos Importantes</h4>
                        <p class="text-secondary small mb-0" style="line-height: 1.8;">
                            • Caminata de aproximadamente <strong>2 horas hasta el mirador inicial</strong> y recorrido completo por el circuito de lagunas.<br>
                            • <strong>Altitud elevada:</strong> El recorrido alcanza altitudes superiores a los 4,300 msnm. Se recomienda considerar un periodo previo de aclimatación de al menos 1 o 2 días en Cusco antes de realizar este tour.
                        </p>
                    </div>
                </div>

                <!-- COLUMNA DERECHA: INCLUYE, NO INCLUYE Y QUÉ LLEVAR -->
                <div class="col-lg-5">
                    <div class="d-flex flex-column gap-4">

                        <!-- INCLUYE -->
                        <div class="tour-spec-box">
                            <div class="tour-spec-icon">
                                <i class="bi bi-check-circle-fill"></i>
                            </div>
                            <h4 class="fs-5 fw-bold text-dark mb-3">Servicios Incluidos</h4>
                            <ul class="tour-check-list">
                                <li>Transporte turístico compartido de ida y retorno</li>
                                <li>Guía profesional bilingüe (Español / Inglés)</li>
                                <li>Desayuno y almuerzo nutritivo en Pacchanta</li>
                                <li>Botiquín de primeros auxilios y balón de oxígeno</li>
                                <li>Bastones de caminata para el recorrido</li>
                            </ul>
                        </div>

                        <!-- NO INCLUYE -->
                        <div class="tour-spec-box">
                            <div class="tour-spec-icon" style="background: rgba(239, 68, 68, 0.12); color: #EF4444;">
                                <i class="bi bi-x-circle-fill"></i>
                            </div>
                            <h4 class="fs-5 fw-bold text-dark mb-3">No Incluye</h4>
                            <ul class="tour-uncheck-list">
                                <li>Ingreso a la comunidad / atractivo: S/ 20.00 por persona</li>
                                <li>Ingreso opcional a las aguas termales de Pacchanta (S/ 10.00 aprox.)</li>
                                <li>Seguro de viaje personal</li>
                                <li>Alquiler de caballo (opcional en caso de requerirlo)</li>
                                <li>Gastos adicionales no especificados</li>
                            </ul>
                        </div>

                        <!-- RECOMENDACIONES / QUÉ LLEVAR -->
                        <div class="tour-spec-box">
                            <div class="tour-spec-icon" style="background: rgba(217, 164, 65, 0.15); color: var(--color-dorado-andino);">
                                <i class="bi bi-backpack-fill"></i>
                            </div>
                            <h4 class="fs-5 fw-bold text-dark mb-3">Recomendaciones / Qué Llevar</h4>
                            <ul class="tour-bullet-list">
                                <li>Pantalones cómodos para caminata de montaña</li>
                                <li>Ropa abrigadora en capas (casaca, polar)</li>
                                <li>Poncho impermeable o casaca cortaviento</li>
                                <li>Gorro o chullo andino y guantes para el frío</li>
                                <li>Bloqueador solar y gafas de sol con protección UV</li>
                                <li>Repelente para mosquitos</li>
                                <li>Calzado adecuado para trekking con buena tracción</li>
                                <li>Traje de baño y toalla si deseas ingresar a las aguas termales</li>
                            </ul>
                        </div>

                        <!-- BOTONES DE CONTACTO DIRECTO -->
                        <div class="p-4 rounded-4 text-center" style="background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%); border: 1px solid rgba(233, 77, 0, 0.3);">
                            <h4 class="fs-5 fw-bold text-white mb-2">¿Tienes dudas o deseas reservar?</h4>
                            <p class="small text-light opacity-90 mb-3">Nuestros asesores de ventas están listos para asistirte al instante.</p>
                            <div class="d-flex flex-column gap-2">
                                <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20tour%207%20Lagunas%20del%20Ausangate" target="_blank" class="btn-reserve-wa w-100 justify-content-center">
                                    <i class="bi bi-whatsapp"></i> Consultar por WhatsApp
                                </a>
                                <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="btn-call-sales w-100 justify-content-center">
                                    <i class="bi bi-telephone-fill"></i> Llamar a Ventas
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- MODAL DE VISTA DE FOTO COMPLETA (TÍTULO Y DESCRIPCIÓN AL PIE) -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-dark text-white border-0 rounded-4 overflow-hidden">
                <div class="modal-header border-0 pb-0 pt-3 px-3 justify-content-end">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body p-2 text-center">
                    <img src="" id="modalImagePreview" class="img-fluid rounded-3 max-h-75vh object-fit-contain" alt="Vista completa">
                </div>
                <div class="modal-footer border-0 bg-black bg-opacity-75 d-block text-center py-3 px-4">
                    <h5 class="fw-bold text-white mb-1 fs-5" id="modalImageTitle">7 Lagunas del Ausangate</h5>
                    <p class="text-warning mb-0 small" id="modalImageSubtitle">Perú Safe Journeys</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER CON ICONOS -->
    <footer class="footer-custom">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <a href="https://www.perusafejourneysgroup.com/" class="fs-4 fw-extrabold text-white text-decoration-none">
                        Perú Safe Journeys <span style="color: var(--color-naranja-journey);">| Viajes Perú</span>
                    </a>
                    <p class="pe-lg-3 mt-2" style="color: #94A3B8;">
                        Agencia de viajes especializada en experiencias auténticas, seguras y personalizadas por el Perú.
                    </p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="https://facebook.com" target="_blank" class="topbar-social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com" target="_blank" class="topbar-social-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://tiktok.com" target="_blank" class="topbar-social-icon" title="TikTok"><i class="bi bi-tiktok"></i></a>
                        <a href="https://youtube.com" target="_blank" class="topbar-social-icon" title="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
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

    <!-- Icono flotante WhatsApp -->
    <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>" class="whatsapp-float" target="_blank" aria-label="WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Scripts Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function openImageModal(imgUrl, title, subtitle) {
            document.getElementById('modalImagePreview').src = imgUrl;
            document.getElementById('modalImageTitle').textContent = title || '';
            document.getElementById('modalImageSubtitle').textContent = subtitle || '';
            const modal = new bootstrap.Modal(document.getElementById('imageModal'));
            modal.show();
        }

        document.addEventListener('DOMContentLoaded', function() {
            const track = document.getElementById('lakesGalleryTrack');
            const prevBtn = document.getElementById('galleryPrevBtn');
            const nextBtn = document.getElementById('galleryNextBtn');

            if (track && prevBtn && nextBtn) {
                nextBtn.addEventListener('click', () => {
                    track.scrollBy({ left: 320, behavior: 'smooth' });
                });
                prevBtn.addEventListener('click', () => {
                    track.scrollBy({ left: -320, behavior: 'smooth' });
                });
            }
        });
    </script>
</body>
</html>
