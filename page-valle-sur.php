<?php
// page-valle-sur.php - Perú Safe Journeys
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

// Galería de 7 fotos para Valle Sur
$valle_sur_gallery = [
    [
        'url' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1000&q=80',
        'title' => 'Centro Arqueológico de Tipón',
        'subtitle' => 'Obra maestra de ingeniería hidráulica y fuentes incas de agua'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=1000&q=80',
        'title' => 'Ciudad Pre-Inca de Pikillacta',
        'subtitle' => 'Gran metrópoli amurallada de la cultura Wari'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=1000&q=80',
        'title' => 'Iglesia de San Pedro de Andahuaylillas',
        'subtitle' => 'La célebre Capilla Sixtina de América con arte barroco andino'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1000&q=80',
        'title' => 'Laguna de Huacarpay',
        'subtitle' => 'Humedal natural rodeado de avistamiento de aves migratorias'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1000&q=80',
        'title' => 'Canales & Terrazas de Tipón',
        'subtitle' => 'Armonía perfecta entre la arquitectura inca y la naturaleza'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1501555088652-021faa106b9b?auto=format&fit=crop&w=1000&q=80',
        'title' => 'Pueblo Tradicional de Saylla / Oropesa',
        'subtitle' => 'Famosa tradición gastronómica y chicharrón andino'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=1000&q=80',
        'title' => 'Murales & Liensos Virreinales',
        'subtitle' => 'Tesoro cultural e histórico del sur del Cusco'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valle Sur – <?php echo $company_name; ?></title>

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

        /* HERO BANNER */
        .tour-hero-banner {
            background: linear-gradient(180deg, rgba(0, 18, 32, 0.65) 0%, rgba(0, 34, 56, 0.92) 100%), url('https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1800&q=80') center/cover no-repeat;
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

        /* GALERÍA VISIBLE */
        .interactive-gallery-section {
            background-color: #F8FAFC;
            padding: 2.2rem 0;
            border-bottom: 1px solid var(--color-gris-border);
        }

        .gallery-all-visible-card {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            height: 200px;
            cursor: pointer;
            border: none !important;
            box-shadow: none !important;
            transition: all 0.35s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .gallery-all-visible-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .gallery-all-visible-card:hover {
            transform: translateY(-4px);
        }

        .gallery-all-visible-card:hover img {
            transform: scale(1.1);
        }

        .gallery-all-visible-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 40%, rgba(0, 18, 32, 0.92) 100%);
            padding: 1.1rem;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            color: #FFFFFF;
        }

        .gallery-all-visible-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: rgba(233, 77, 0, 0.92);
            color: #FFFFFF;
            font-size: 0.72rem;
            font-weight: 800;
            padding: 0.28rem 0.78rem;
            border-radius: 50px;
            text-transform: uppercase;
        }

        .gallery-all-visible-zoom {
            position: absolute;
            top: 12px;
            right: 12px;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(8px);
            color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.3s ease;
        }

        .gallery-all-visible-card:hover .gallery-all-visible-zoom {
            opacity: 1;
            transform: scale(1);
            background: var(--color-naranja-journey);
        }

        /* SECCIÓN FOOTER CTA */
        .footer-cta-section {
            background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%);
            padding: 3.8rem 0;
            color: #FFFFFF;
            width: 100vw;
            border-top: 3px solid var(--color-naranja-journey);
            position: relative;
        }

        .cta-action-btn-wa {
            background: #25D366;
            color: #FFFFFF !important;
            font-weight: 800;
            font-size: 0.92rem;
            padding: 0.65rem 1.8rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.3);
        }

        .cta-action-btn-wa:hover {
            background: #1EBE57;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.45);
        }

        .cta-action-btn-call {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: #FFFFFF !important;
            font-weight: 800;
            font-size: 0.92rem;
            padding: 0.65rem 1.8rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(233, 77, 0, 0.3);
        }

        .cta-action-btn-call:hover {
            background: linear-gradient(135deg, var(--color-naranja-hover) 0%, var(--color-naranja-journey) 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(233, 77, 0, 0.45);
        }

        /* CUERPO DEL TOUR */
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

                <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20el%20tour%20Valle%20Sur" target="_blank" class="topbar-btn-reserva">
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

    <!-- HERO HEADER DEL TOUR -->
    <section class="tour-hero-banner">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="d-flex align-items-center gap-3 flex-wrap mb-3">
                        <span class="fw-bold text-warning text-uppercase fs-6">
                            <i class="bi bi-clock-history me-1"></i> HALF DAY
                        </span>
                        <span class="text-light opacity-50">•</span>
                        <span class="fw-bold text-info text-uppercase fs-6">
                            <i class="bi bi-geo-alt-fill me-1"></i> TIPÓN – PIKILLACTA – ANDAHUAYLILLAS
                        </span>
                    </div>

                    <h1 class="display-3 fw-extrabold text-white mb-3 text-uppercase" style="text-shadow: 0 4px 20px rgba(0,0,0,0.85);">
                        VALLE SUR CUSCO
                    </h1>
                    <p class="fs-5 text-light opacity-90 mb-4" style="line-height: 1.8; max-width: 720px; text-shadow: 0 2px 10px rgba(0,0,0,0.8);">
                        Ruta fascinante al sur de la capital inka. Conoce las fuentes hidráulicas de Tipón, la metrópoli pre-inca de Pikillacta, los humedales de Huacarpay y la Capilla Sixtina de América en Andahuaylillas.
                    </p>

                    <!-- SPECS HIGHLIGHTS -->
                    <div class="row g-3 max-w-700">
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center gap-2 text-white">
                                <i class="bi bi-graph-up-arrow text-warning fs-3"></i>
                                <div>
                                    <small class="d-block text-uppercase text-light opacity-75 fw-bold" style="font-size: 0.7rem;">Altitud Prom.</small>
                                    <strong class="fs-6">3,100 – 3,560 m s. n. m.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center gap-2 text-white">
                                <i class="bi bi-bank text-warning fs-3"></i>
                                <div>
                                    <small class="d-block text-uppercase text-light opacity-75 fw-bold" style="font-size: 0.7rem;">Estilo</small>
                                    <strong class="fs-6">Arqueología & Arte Sacro</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center gap-2 text-white">
                                <i class="bi bi-clock-fill text-warning fs-3"></i>
                                <div>
                                    <small class="d-block text-uppercase text-light opacity-75 fw-bold" style="font-size: 0.7rem;">Duración</small>
                                    <strong class="fs-6">Medio Día (Half Day)</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 text-lg-end">
                    <div class="tour-price-card-creative mx-auto ms-lg-auto max-w-380">
                        <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold text-uppercase mb-2" style="font-size: 0.72rem;">PRECIO PUBLICADO CATÁLOGO</span>
                        <div class="tour-price-main my-1">USD 25.00</div>
                        <div class="tour-price-pen-badge mb-3">S/. 86.00 soles por persona</div>
                        <div class="d-flex flex-column gap-2">
                            <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20el%20tour%20Valle%20Sur%20a%20USD%2025" target="_blank" class="btn btn-reserve-wa w-100 justify-content-center">
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

    <!-- GALERÍA DONDE SE VEN TODAS LAS IMÁGENES AL MISMO TIEMPO -->
    <section class="interactive-gallery-section">
        <div class="container-fluid px-2 px-lg-4">
            <div class="text-center mb-3">
                <span class="section-badge-clean">GALERÍA VISUAL Y EXCLUSIVA</span>
                <h2 class="display-6 fw-extrabold text-dark mb-1">Valle Sur en Imágenes</h2>
                <p class="fs-6 text-secondary max-w-700 mx-auto mb-0">Haz clic en cualquiera de las imágenes para ampliar la vista.</p>
            </div>

            <div class="row g-2">
                <?php foreach($valle_sur_gallery as $idx => $photo): ?>
                    <div class="<?php echo ($idx === 0) ? 'col-lg-6 col-md-12' : 'col-lg-3 col-md-6'; ?>">
                        <div class="gallery-all-visible-card <?php echo ($idx === 0) ? 'h-100' : ''; ?>" onclick="openImageModal('<?php echo $photo['url']; ?>', '<?php echo addslashes($photo['title']); ?>', '<?php echo addslashes($photo['subtitle']); ?>')">
                            <span class="gallery-all-visible-badge">Foto 0<?php echo ($idx + 1); ?></span>
                            <div class="gallery-all-visible-zoom"><i class="bi bi-arrows-angle-expand"></i></div>
                            <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['title']; ?>" style="<?php echo ($idx === 0) ? 'height: 280px;' : 'height: 200px;'; ?>" loading="lazy">
                            <div class="gallery-all-visible-overlay">
                                <h5 class="fs-6 fw-bold text-white mb-0"><?php echo $photo['title']; ?></h5>
                                <small class="text-warning"><?php echo $photo['subtitle']; ?></small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CUERPO Y SECCIONES -->
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
                                    <strong class="fs-6 text-dark">08:30 a.m. – 09:00 a.m.</strong>
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
                                    <strong class="fs-6 text-dark">14:30 p.m. – 15:00 p.m.</strong>
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
                                <h5 class="fw-bold text-dark mb-1">08:30 a.m. – 09:00 a.m. | Recojo & Salida hacia Tipón</h5>
                                <p class="text-secondary small mb-0">Recojo en tu alojamiento e inicio del recorrido hacia Tipón, impresionante complejo arqueológico famoso por sus acueductos y canales de agua inca aún en funcionamiento.</p>
                            </div>

                            <div class="itinerary-step">
                                <div class="itinerary-dot"></div>
                                <h5 class="fw-bold text-dark mb-1">Pikillacta & Laguna de Huacarpay</h5>
                                <p class="text-secondary small mb-0">Continuación hacia Pikillacta, importante centro urbano de la cultura pre-inca Wari, caracterizado por sus calles rectilíneas y murallas de piedra. Durante el trayecto bordearemos la hermosa Laguna de Huacarpay.</p>
                            </div>

                            <div class="itinerary-step">
                                <div class="itinerary-dot"></div>
                                <h5 class="fw-bold text-dark mb-1">Andahuaylillas & Capilla Sixtina de América</h5>
                                <p class="text-secondary small mb-0">Visita al pintoresco pueblo de Andahuaylillas para explorar la iglesia de San Pedro Apóstol, mundialmente célebre como la "Capilla Sixtina de América" por sus murales virreinales y techos dorados.</p>
                            </div>

                            <div class="itinerary-step">
                                <div class="itinerary-dot"></div>
                                <h5 class="fw-bold text-dark mb-1">14:30 p.m. – 15:00 p.m. | Retorno a la Ciudad del Cusco</h5>
                                <p class="text-secondary small mb-0">Abordaremos nuestro transporte de retorno finalizando la excursión en el centro del Cusco entre las 14:30 y 15:00 horas.</p>
                            </div>
                        </div>
                    </div>

                    <!-- DATOS IMPORTANTES -->
                    <div class="p-4 rounded-4 bg-light border border-warning">
                        <h4 class="fs-5 fw-bold text-dark mb-2"><i class="bi bi-exclamation-triangle-fill text-warning me-2"></i> Datos Importantes</h4>
                        <p class="text-secondary small mb-0" style="line-height: 1.8;">
                            • <strong>Modalidad:</strong> El catálogo presenta la ficha comercial como Half Day (media jornada).<br>
                            • <strong>Ingresos:</strong> Los atractivos de Tipón y Pikillacta se visitan con el Boleto Turístico del Cusco. La entrada a Andahuaylillas se paga por separado en el lugar.
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
                                <li>Guía bilingüe profesional (Español / Inglés)</li>
                                <li>Almuerzo buffet en Urubamba (opcional según itinerario)</li>
                                <li>Botiquín de primeros auxilios</li>
                            </ul>
                        </div>

                        <!-- NO INCLUYE -->
                        <div class="tour-spec-box">
                            <div class="tour-spec-icon" style="background: rgba(239, 68, 68, 0.12); color: #EF4444;">
                                <i class="bi bi-x-circle-fill"></i>
                            </div>
                            <h4 class="fs-5 fw-bold text-dark mb-3">No Incluye</h4>
                            <ul class="tour-uncheck-list">
                                <li>Ingreso a la Capilla Sixtina de Andahuaylillas: S/ 20.00 por persona</li>
                                <li>Boleto Turístico Parcial: S/ 40.00 / Boleto Integral: S/ 70.00</li>
                                <li>Seguro de viaje personal</li>
                                <li>Bebidas frías ni gastos adicionales no especificados</li>
                            </ul>
                        </div>

                        <!-- RECOMENDACIONES / QUÉ LLEVAR -->
                        <div class="tour-spec-box">
                            <div class="tour-spec-icon" style="background: rgba(217, 164, 65, 0.15); color: var(--color-dorado-andino);">
                                <i class="bi bi-backpack-fill"></i>
                            </div>
                            <h4 class="fs-5 fw-bold text-dark mb-3">Recomendaciones / Qué Llevar</h4>
                            <ul class="tour-bullet-list">
                                <li>Pantalones cómodos de viaje</li>
                                <li>Casaca cortaviento o impermeable</li>
                                <li>Gorro o chullo andino y sombrero para sol</li>
                                <li>Bloqueador solar</li>
                                <li>Gafas de sol</li>
                                <li>Repelente para mosquitos</li>
                                <li>Calzado cómodo de caminata urbana y rural</li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECCIÓN DE BOTONES DE CONTACTO DIRECTO AL PIE DE PÁGINA -->
    <section class="footer-cta-section text-center" id="reserva-directa">
        <div class="container-fluid px-3 px-lg-5">
            <div class="max-w-900 mx-auto">
                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold text-uppercase mb-3">ATENCIÓN INMEDIATA Y PERSONALIZADA</span>
                <h2 class="display-5 fw-extrabold text-white mb-3">¿Listo para explorar la ruta del Valle Sur?</h2>
                <p class="fs-5 text-light opacity-90 mb-4 max-w-700 mx-auto" style="line-height: 1.8;">
                    Nuestros especialistas locales están disponibles en tiempo real para cotizar tu grupo, responder consultas o asegurar tu reserva.
                </p>

                <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                    <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20el%20tour%20Valle%20Sur" target="_blank" class="cta-action-btn-wa">
                        <i class="bi bi-whatsapp"></i>
                        <span>Consultar por WhatsApp</span>
                    </a>

                    <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="cta-action-btn-call">
                        <i class="bi bi-telephone-fill"></i>
                        <span>Llamar Directamente</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL DE VISTA DE FOTO COMPLETA -->
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
                    <h5 class="fw-bold text-white mb-1 fs-5" id="modalImageTitle">Valle Sur</h5>
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
    </script>
</body>
</html>
