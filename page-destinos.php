<?php
// page-destinos.php - Perú Safe Journeys
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

// Listado de Tarjetas de Destinos Populares
$destinos_list = [
    [
        'title' => '7 LAGUNAS DEL AUSANGATE',
        'price_usd' => 'USD 40.00',
        'price_pen' => 'S/. 137.70',
        'duration' => 'Full Day',
        'badge' => 'Cultura & Aventura',
        'image' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80',
        'desc' => 'Espejos de agua glaciares al pie de la majestuosa cordillera del Ausangate y relajantes aguas termales en Pacchanta.',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/7-lagunas-del-ausangate/'
    ],
    [
        'title' => 'ATV MONTAÑA DE COLORES FD SIMPLE',
        'price_usd' => 'USD 85.00',
        'price_pen' => 'S/. 292.60',
        'duration' => 'Full Day',
        'badge' => 'Adrenalina',
        'image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'desc' => 'Recorre en cuatrimoto individual los espectaculares paisajes andinos hacia Vinicunca con caminata ligera de 5 minutos.',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/atv-montana-de-colores-fd/'
    ],
    [
        'title' => 'ATV MONTAÑA DE COLORES FD DOBLE',
        'price_usd' => 'USD 65.00',
        'price_pen' => 'S/. 223.73',
        'duration' => 'Full Day',
        'badge' => 'Parejas & Amigos',
        'image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80',
        'desc' => 'Comparte una cuatrimoto doble y vive la emoción hacia la Montaña de 7 Colores con la máxima seguridad.',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/atv-montana-de-colores-fd/'
    ],
    [
        'title' => 'LAGUNA HUMANTAY FD',
        'price_usd' => 'USD 30.00',
        'price_pen' => 'S/. 103.20',
        'duration' => 'Full Day',
        'badge' => 'Imperdible',
        'image' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80',
        'desc' => 'Trekking andino hacia la deslumbrante laguna turquesa a los pies del imponente nevado Humantay y Salkantay.',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/laguna-humantay-fd/'
    ],
    [
        'title' => 'MONTAÑA VINICUNCA FD',
        'price_usd' => 'USD 30.00',
        'price_pen' => 'S/. 103.20',
        'duration' => 'Full Day',
        'badge' => 'Icono Mundial',
        'image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'desc' => 'Caminata de alta montaña hacia la afamada Montaña de 7 Colores con vistas al Apu Ausangate.',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/montana-vinicunca-fd/'
    ],
    [
        'title' => 'PALLAY PUNCHOY FD',
        'price_usd' => 'USD 45.00',
        'price_pen' => 'S/. 154.80',
        'duration' => 'Full Day',
        'badge' => 'Paisaje Místico',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'desc' => 'Descubre la afilada cresta tricolor del Apu T’acllo y contempla la inmensidad de la Laguna de Langui-Layo.',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/pallay-punchoy-fd/'
    ],
    [
        'title' => 'QUELCAYA FD',
        'price_usd' => 'USD 80.00',
        'price_pen' => 'S/. 275.20',
        'duration' => 'Full Day',
        'badge' => 'Expedición Glaciar',
        'image' => 'https://images.unsplash.com/photo-1501555088652-021faa106b9b?auto=format&fit=crop&w=800&q=80',
        'desc' => 'Explora el glaciar tropical más extenso del planeta, sus murallas de hielo azul y la Laguna Sibinacocha.',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/quelcaya-fd/'
    ],
    [
        'title' => 'VALLE SAGRADO BIG',
        'price_usd' => 'USD 35.00',
        'price_pen' => 'S/. 120.40',
        'duration' => 'Full Day',
        'badge' => 'Completo VIP',
        'image' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80',
        'desc' => 'Recorrido intensivo por Chinchero, Moray, Salineras de Maras, Ollantaytambo y Pisac con almuerzo buffet.',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-big/'
    ],
    [
        'title' => 'VALLE SAGRADO FD',
        'price_usd' => 'USD 30.00',
        'price_pen' => 'S/. 103.20',
        'duration' => 'Full Day',
        'badge' => 'Tradicional',
        'image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'desc' => 'Ruta histórica visitando Pisac, el Valle de Urubamba, la fortaleza de Ollantaytambo y el centro textil de Chinchero.',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-fd/'
    ],
    [
        'title' => 'VALLE SUR',
        'price_usd' => 'USD 25.00',
        'price_pen' => 'S/. 86.00',
        'duration' => 'Half Day',
        'badge' => 'Historia & Arte Sacro',
        'image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80',
        'desc' => 'Circuito arqueológico por Tipón, la metrópoli Wari de Pikillacta y la Capilla Sixtina de América en Andahuaylillas.',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/valle-sur/'
    ],
    [
        'title' => 'WAQRAPUKARA FD',
        'price_usd' => 'USD 40.00',
        'price_pen' => 'S/. 137.60',
        'duration' => 'Full Day',
        'badge' => 'Santuario Místico',
        'image' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80',
        'desc' => 'Fortaleza inca en forma de cuernos erigida sobre los abismos del cañón del río Apurímac con caminata ligera.',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/waqrapukara-fd/'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Destinos – <?php echo $company_name; ?></title>

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

        /* HERO HEADER DESTINOS */
        .destinos-hero-banner {
            background: linear-gradient(180deg, rgba(0, 18, 32, 0.75) 0%, rgba(0, 34, 56, 0.92) 100%), url('https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1800&q=80') center/cover no-repeat;
            padding: 5.5rem 0 4.5rem;
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

        /* INTRO CONCEPT SECTION */
        .destinos-concept-section {
            background-color: #F8FAFC;
            padding: 4rem 0 3.5rem;
            border-bottom: 1px solid var(--color-gris-border);
        }

        .concept-card-highlight {
            background: #FFFFFF;
            border-radius: 24px;
            border: 1px solid var(--color-gris-border);
            padding: 2.8rem 2.2rem;
            transition: all 0.35s ease;
        }

        .concept-icon-badge {
            width: 60px;
            height: 60px;
            border-radius: 18px;
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: #FFFFFF;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 1.2rem;
        }

        /* TARJETAS DE DESTINOS EN 3 COLUMNAS */
        .destinos-catalog-section {
            padding: 4.5rem 0;
            background-color: #FFFFFF;
        }

        .destination-card-grid {
            background: #FFFFFF;
            border: 1px solid var(--color-gris-border);
            border-radius: 20px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: transform 0.35s ease, border-color 0.35s ease;
        }

        .destination-card-grid:hover {
            transform: translateY(-6px);
            border-color: var(--color-naranja-journey);
        }

        .destination-card-img-wrapper {
            position: relative;
            height: 240px;
            width: 100%;
            overflow: hidden;
        }

        .destination-card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .destination-card-grid:hover .destination-card-img-wrapper img {
            transform: scale(1.08);
        }

        .destination-card-badge {
            position: absolute;
            top: 14px;
            left: 14px;
            background: rgba(0, 18, 32, 0.88);
            backdrop-filter: blur(8px);
            color: var(--color-naranja-journey);
            font-size: 0.72rem;
            font-weight: 800;
            padding: 0.32rem 0.85rem;
            border-radius: 50px;
            text-transform: uppercase;
            border: 1px solid rgba(233, 77, 0, 0.4);
        }

        .destination-card-duration {
            position: absolute;
            top: 14px;
            right: 14px;
            background: var(--color-naranja-journey);
            color: #FFFFFF;
            font-size: 0.72rem;
            font-weight: 800;
            padding: 0.32rem 0.85rem;
            border-radius: 50px;
            text-transform: uppercase;
        }

        .destination-card-body {
            padding: 1.6rem 1.4rem 1.4rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .destination-card-title-row {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 0.6rem;
        }

        .destination-card-title {
            font-size: 1.05rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0;
            text-transform: uppercase;
            line-height: 1.35;
        }

        .destination-price-inline {
            text-align: right;
            flex-shrink: 0;
        }

        .destination-price-usd {
            font-size: 1.18rem;
            font-weight: 500;
            color: var(--color-texto-oscuro);
            line-height: 1;
            display: block;
        }

        .destination-price-pen {
            font-size: 0.82rem;
            font-weight: 500;
            color: var(--color-azul-andino);
            display: block;
            margin-top: 2px;
        }

        .destination-card-desc {
            font-size: 0.88rem;
            color: var(--color-texto-suave);
            line-height: 1.6;
            margin-bottom: 1.4rem;
            flex-grow: 1;
        }

        .destination-card-btn {
            background-color: #001220;
            color: #FFFFFF !important;
            font-weight: 700;
            font-size: 0.82rem;
            border-radius: 50px;
            padding: 0.65rem 1.2rem;
            text-align: center;
            text-decoration: none;
            display: block;
            width: 100%;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: none;
        }

        .destination-card-btn:hover {
            background-color: var(--color-naranja-journey);
            color: #FFFFFF !important;
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

                <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20un%20destino%20en%20Peru%20Safe%20Journeys" target="_blank" class="topbar-btn-reserva">
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

    <!-- HERO HEADER DESTINOS -->
    <section class="destinos-hero-banner text-center">
        <div class="container-fluid px-3 px-lg-5">
            <div class="max-w-900 mx-auto">
                <span class="section-badge-clean">CATÁLOGO EXCLUSIVO PERÚ SAFE JOURNEYS</span>
                <h1 class="display-3 fw-extrabold text-white mb-3 text-uppercase" style="text-shadow: 0 4px 20px rgba(0,0,0,0.85);">
                    Nuestros Destinos en el Perú
                </h1>
                <p class="fs-5 text-light opacity-90 max-w-750 mx-auto mb-0" style="line-height: 1.8; text-shadow: 0 2px 10px rgba(0,0,0,0.8);">
                    Explora paisajes sagrados, glaciares milenarios, valles místicos y rutas de pura adrenalina diseñados con el confort, autenticidad y la máxima seguridad que nos caracteriza.
                </p>
            </div>
        </div>
    </section>

    <!-- PRESENTACIÓN CONCEPTUAL CREATIVA -->
    <section class="destinos-concept-section">
        <div class="container-fluid px-3 px-lg-5">
            <div class="concept-card-highlight max-w-1100 mx-auto text-center">
                <div class="concept-icon-badge mx-auto">
                    <i class="bi bi-compass-fill"></i>
                </div>
                <h2 class="fs-2 fw-extrabold text-dark mb-3">El Arte de Viajar Seguro por Tierras Incas</h2>
                <p class="fs-6 text-secondary max-w-900 mx-auto mb-4" style="line-height: 1.8;">
                    En <strong class="text-dark">Perú Safe Journeys</strong> creemos que cada rincón de los Andes guarda una historia viva. Nuestro catálogo de destinos combina la majestuosidad de la alta montaña con planificación profesional de primer nivel, asistencia permanente 24/7 y guías locales expertos. Tú eliges la aventura que conmueva tu espíritu; nosotros nos encargamos de convertirla en un recuerdo imborrable.
                </p>

                <div class="d-flex justify-content-center gap-4 flex-wrap text-start mt-4 pt-2 border-top border-secondary border-opacity-10">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-shield-check text-warning fs-4"></i>
                        <small class="fw-bold text-dark">Garantía de Seguridad 100%</small>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-award-fill text-warning fs-4"></i>
                        <small class="fw-bold text-dark">Guías Locales Profesionales</small>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-heart-fill text-warning fs-4"></i>
                        <small class="fw-bold text-dark">Experiencias Auténticas</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CATÁLOGO DE TARJETAS MOSTRADAS EN FILAS DE 3 COLUMNAS -->
    <section class="destinos-catalog-section">
        <div class="container-fluid px-3 px-lg-5">
            <div class="text-center mb-5">
                <span class="section-badge-clean">TODAS NUESTRAS RUTAS</span>
                <h2 class="display-5 fw-extrabold text-dark mb-2">Explora Nuestros Tours y Destinos Estrellas</h2>
                <p class="fs-6 text-secondary max-w-700 mx-auto mb-0">Selecciona el destino de tu preferencia para ver el itinerario completo, precios, servicios incluidos y realizar tu reserva inmediata.</p>
            </div>

            <!-- FILAS DE 3 TARJETAS EN PANTALLA GRANDE (3 COLUMNAS) -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php foreach($destinos_list as $dest): ?>
                    <div class="col">
                        <div class="destination-card-grid">
                            <div class="destination-card-img-wrapper">
                                <span class="destination-card-badge"><?php echo $dest['badge']; ?></span>
                                <span class="destination-card-duration"><?php echo $dest['duration']; ?></span>
                                <img src="<?php echo $dest['image']; ?>" alt="<?php echo $dest['title']; ?>" loading="lazy">
                            </div>

                            <div class="destination-card-body">
                                <div class="destination-card-title-row">
                                    <h3 class="destination-card-title"><?php echo $dest['title']; ?></h3>
                                    <div class="destination-price-inline">
                                        <span class="destination-price-usd"><?php echo $dest['price_usd']; ?></span>
                                        <span class="destination-price-pen"><?php echo $dest['price_pen']; ?></span>
                                    </div>
                                </div>

                                <p class="destination-card-desc"><?php echo $dest['desc']; ?></p>

                                <a href="<?php echo $dest['link']; ?>" class="destination-card-btn">
                                    Ver Detalles del Tour
                                </a>
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
</body>
</html>
