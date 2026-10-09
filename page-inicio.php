<?php
// page-inicio.php - Perú Safe Journeys
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

// Modalidades de Viaje
$tour_cards = [
    [
        'title' => 'Tours Tradicionales',
        'desc' => 'Descubre los santuarios arqueológicos e históricos más fascinantes del Perú con nuestros guías especialistas.',
        'badge' => 'Clásico & Imprescindible',
        'icon' => 'bi-bank2',
        'image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/'
    ],
    [
        'title' => 'Tours de Caminata',
        'desc' => 'Rutas de senderismo, cordilleras andinas y paisajes que te conectan directamente con la naturaleza.',
        'badge' => 'Trekking & Naturaleza',
        'icon' => 'bi-image-alt',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/experiencias/'
    ],
    [
        'title' => 'Aventura',
        'desc' => 'Experiencias de velocidad, deportes extremos y adrenalina pura diseñadas para viajeros audaces.',
        'badge' => 'Adrenalina Pura',
        'icon' => 'bi-lightning-charge-fill',
        'image' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/programas/'
    ],
    [
        'title' => 'Expediciones',
        'desc' => 'Explora territorios vírgenes en la Amazonía y los picos más imponentes de la geografía peruana.',
        'badge' => 'Exploración Única',
        'icon' => 'bi-compass-fill',
        'image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/'
    ],
    [
        'title' => 'Turismo Vivencial',
        'desc' => 'Inmersión cultural genuina compartiendo tradiciones, gastronomía y saberes ancestrales con familias locales.',
        'badge' => 'Cultura & Tradición',
        'icon' => 'bi-people-fill',
        'image' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/nosotros/'
    ]
];

// Destinos Estrellas
$destinos_cards_section = [
    [
        'title' => '7 Lagunas del Ausangate',
        'location' => 'Ausangate, Cusco',
        'duration' => 'Full Day',
        'rating' => '5.0',
        'reviews' => '86',
        'price_usd' => '80',
        'price_pen' => '275.50',
        'badge' => 'Glaciares & Termas',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/7-lagunas-del-ausangate/'
    ],
    [
        'title' => 'ATV Montaña de Colores (Simple)',
        'location' => 'Pitumarca, Cusco',
        'duration' => 'Full Day',
        'rating' => '4.9',
        'reviews' => '112',
        'price_usd' => '85',
        'price_pen' => '292.60',
        'badge' => 'Cuatrimoto Simple',
        'image' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/atv-montana-de-colores-fd/'
    ],
    [
        'title' => 'ATV Montaña de Colores (Doble)',
        'location' => 'Pitumarca, Cusco',
        'duration' => 'Full Day',
        'rating' => '4.9',
        'reviews' => '98',
        'price_usd' => '65',
        'price_pen' => '223.73',
        'badge' => 'Cuatrimoto Doble',
        'image' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/atv-montana-de-colores-fd/'
    ],
    [
        'title' => 'Laguna Humantay FD',
        'location' => 'Mollepata, Cusco',
        'duration' => 'Full Day',
        'rating' => '4.9',
        'reviews' => '140',
        'price_usd' => '30',
        'price_pen' => '103.50',
        'badge' => 'Aguas Turquesas',
        'image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/laguna-humantay-fd/'
    ],
    [
        'title' => 'Montaña Vinicunca FD',
        'location' => 'Quispicanchi, Cusco',
        'duration' => 'Full Day',
        'rating' => '4.8',
        'reviews' => '155',
        'price_usd' => '30',
        'price_pen' => '103.50',
        'badge' => '7 Colores',
        'image' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/montana-vinicunca-fd/'
    ],
    [
        'title' => 'Pallay Punchoy FD',
        'location' => 'Canas, Cusco',
        'duration' => 'Full Day',
        'rating' => '4.9',
        'reviews' => '78',
        'price_usd' => '45',
        'price_pen' => '154.90',
        'badge' => 'Cerro Afilado',
        'image' => 'https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/pallay-punchoy-fd/'
    ],
    [
        'title' => 'Quelcaya FD',
        'location' => 'Canchis, Cusco',
        'duration' => 'Full Day',
        'rating' => '5.0',
        'reviews' => '64',
        'price_usd' => '80',
        'price_pen' => '275.50',
        'badge' => 'Glacial Tropical',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/quelcaya-fd/'
    ],
    [
        'title' => 'Valle Sagrado Big',
        'location' => 'Valle Sagrado, Cusco',
        'duration' => 'Full Day',
        'rating' => '4.9',
        'reviews' => '130',
        'price_usd' => '35',
        'price_pen' => '120.50',
        'badge' => 'Pisac & Ollantaytambo',
        'image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-big/'
    ],
    [
        'title' => 'Valle Sagrado FD',
        'location' => 'Urubamba, Cusco',
        'duration' => 'Full Day',
        'rating' => '4.8',
        'reviews' => '98',
        'price_usd' => '30',
        'price_pen' => '103.50',
        'badge' => 'Tradición Inca',
        'image' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-fd/'
    ],
    [
        'title' => 'Valle Sur',
        'location' => 'Tipón & Pikillacta',
        'duration' => 'Half Day',
        'rating' => '4.7',
        'reviews' => '72',
        'price_usd' => '25',
        'price_pen' => '86.50',
        'badge' => 'Arqueología & Sabor',
        'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sur/'
    ],
    [
        'title' => 'Waqrapukara FD',
        'location' => 'Acomayo, Cusco',
        'duration' => 'Full Day',
        'rating' => '5.0',
        'reviews' => '90',
        'price_usd' => '40',
        'price_pen' => '138.00',
        'badge' => 'Fortaleza Mística',
        'image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/waqrapukara-fd/'
    ]
];

// Pilares de marca
$brand_pillars = [
    [
        'name' => 'Autenticidad',
        'desc' => 'Experiencias genuinas en contacto directo con las raíces y cultura viva del Perú.',
        'icon' => 'bi-compass-fill'
    ],
    [
        'name' => 'Seguridad',
        'desc' => 'Planificación responsable y asistencia profesional en cada tramo de tu ruta.',
        'icon' => 'bi-shield-check'
    ],
    [
        'name' => 'Personalización',
        'desc' => 'Itinerarios a tu medida adaptados a tus tiempos, gustos y presupuesto.',
        'icon' => 'bi-sliders'
    ],
    [
        'name' => 'Confianza',
        'desc' => 'Soporte cercano antes, durante y después de tu viaje con atención constante.',
        'icon' => 'bi-heart-fill'
    ],
    [
        'name' => 'Conexión',
        'desc' => 'Vínculos reales con las comunidades, historias, gastronomía y paisajes andinos.',
        'icon' => 'bi-people-fill'
    ],
    [
        'name' => 'Confort',
        'desc' => 'Transporte de nivel, atención cálida y servicios pensados para tu máximo confort.',
        'icon' => 'bi-stars'
    ]
];

// Reseñas de TripAdvisor
$tripadvisor_reviews = [
    [
        'title' => '¡Experiencia inolvidable en Cusco y Humantay!',
        'comment' => 'La organización de Perú Safe Journeys fue impecable de principio a fin. Guías muy atentos, transporte puntual y confortable. ¡Súper recomendados!',
        'author' => 'Sarah M.',
        'country' => 'Estados Unidos',
        'date' => 'Hace 1 semana',
        'rating' => 5
    ],
    [
        'title' => 'Seguridad y autenticidad garantizada',
        'comment' => 'Nos acompañaron durante todo el recorrido por el Valle Sagrado y Machu Picchu. Todo muy transparente con los precios y excelente atención 24/7.',
        'author' => 'Carlos & Elena R.',
        'country' => 'España',
        'date' => 'Hace 2 semanas',
        'rating' => 5
    ],
    [
        'title' => 'Increíble tour en ATV a Vinicunca',
        'comment' => 'La ruta en cuatrimoto fue una locura de adrenalina y belleza natural. El equipo veló por nuestra seguridad en cada segundo.',
        'author' => 'Jean-Pierre L.',
        'country' => 'Francia',
        'date' => 'Hace 1 mes',
        'rating' => 5
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company_name; ?> – <?php echo $company_tagline; ?></title>

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
            --color-tripadvisor-green: #00AA6C;
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

        /* 1. TOP BAR REDISEÑADO CON ESTILO ELEGANTE */
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

        /* 1. NAVBAR-CUSTOM TRANSPARENTE SOBRE EL SLIDER */
        .navbar-custom {
            background: transparent;
            position: absolute;
            top: 40px;
            left: 0;
            width: 100%;
            z-index: 1040;
            transition: all 0.35s ease;
            padding: 0.75rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        }

        .navbar-custom.scrolled {
            position: fixed;
            top: 0;
            background: rgba(0, 18, 32, 0.96);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
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

        .llama-svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }

        /* HERO SLIDER */
        .hero-video-slider {
            position: relative;
            height: 90vh;
            min-height: 580px;
            max-height: 820px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-blanco);
            width: 100vw;
            padding-top: 80px;
        }

        .video-background-wrapper {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100vw;
            height: 100vh;
            transform: translate(-50%, -50%);
            pointer-events: none;
            z-index: 1;
        }

        .video-background-wrapper iframe {
            width: 100vw;
            height: 56.25vw;
            min-height: 100vh;
            min-width: 177.77vh;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            object-fit: cover;
            filter: brightness(0.48) contrast(1.18);
        }

        .video-overlay-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                180deg,
                rgba(0, 18, 32, 0.75) 0%,
                rgba(0, 34, 56, 0.35) 50%,
                rgba(0, 18, 32, 0.88) 100%
            );
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            max-width: 1050px;
            text-align: center;
            padding: 1rem;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 900;
            letter-spacing: -0.5px;
            line-height: 1.1;
            margin-bottom: 1.2rem;
            text-transform: uppercase;
            color: #FFFFFF;
            text-shadow: 0 4px 25px rgba(0, 0, 0, 0.85);
        }

        .hero-subtitle {
            font-size: 1.28rem;
            font-weight: 500;
            line-height: 1.85;
            margin-bottom: 2.2rem;
            color: #F8FAFC;
            max-width: 880px;
            margin-left: auto;
            margin-right: auto;
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.8);
        }

        .btn-banner-primary {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: var(--color-blanco) !important;
            font-weight: 700;
            border-radius: 50px;
            padding: 0.85rem 2.2rem;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.3);
            text-transform: uppercase;
        }

        .btn-banner-primary:hover {
            transform: translateY(-2px);
            background: linear-gradient(135deg, var(--color-naranja-hover) 0%, var(--color-naranja-journey) 100%);
        }

        .btn-banner-secondary {
            background-color: rgba(255, 255, 255, 0.18);
            color: var(--color-blanco) !important;
            font-weight: 700;
            border-radius: 50px;
            padding: 0.85rem 2.2rem;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.7);
            text-transform: uppercase;
        }

        .btn-banner-secondary:hover {
            background-color: rgba(255, 255, 255, 0.35);
            transform: translateY(-2px);
        }

        /* SECTION TITLES & BADGES */
        .section-badge-clean {
            display: inline-flex;
            align-items: center;
            gap: 6px;
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

        .section-title {
            font-size: 2.35rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.3rem;
            letter-spacing: -0.4px;
        }

        .section-lead-concept {
            font-size: 1.08rem;
            color: var(--color-texto-suave);
            max-width: 780px;
            margin: 0.3rem auto 1.4rem auto;
            line-height: 1.6;
            font-weight: 400;
        }

        /* 1. SECCIÓN QUIENES SOMOS REDISEÑADA Y MÁS ATRACTIVA */
        .narrative-section-compact {
            background: linear-gradient(180deg, #FFFFFF 0%, #F8FAFC 100%);
            padding: 4rem 0;
            width: 100vw;
        }

        .agency-glass-card {
            background: transparent !important;
            border: none !important;
        }

        .narrative-paragraph {
            font-size: 1.1rem;
            line-height: 1.85;
            color: #334155;
            margin-bottom: 1.2rem;
        }

        .about-feature-item {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #FFFFFF;
            padding: 0.85rem 1.2rem;
            border-radius: 14px;
            border: 1px solid var(--color-gris-border);
            transition: all 0.28s ease;
        }

        .about-feature-item:hover {
            border-color: var(--color-naranja-journey);
            transform: translateX(4px);
        }

        .about-feature-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: rgba(233, 77, 0, 0.1);
            color: var(--color-naranja-journey);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .about-image-wrapper {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            border: 4px solid #FFFFFF;
            box-shadow: 0 20px 40px rgba(0, 34, 56, 0.12);
        }

        .about-image-wrapper img {
            transition: transform 0.6s ease;
        }

        .about-image-wrapper:hover img {
            transform: scale(1.05);
        }

        .about-floating-badge {
            position: absolute;
            bottom: 24px;
            left: 24px;
            background: rgba(0, 34, 56, 0.92);
            backdrop-filter: blur(12px);
            color: #FFFFFF;
            padding: 1rem 1.4rem;
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .about-floating-badge-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: var(--color-naranja-journey);
            color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
        }

        /* 1. SECCIÓN ¿POR QUÉ ELEGIRNOS? REDISEÑADA Y MÁS AMIGABLE */
        .why-choose-us-section {
            background: linear-gradient(135deg, #001220 0%, #002238 60%, #001A2C 100%);
            color: #FFFFFF;
            padding: 4.5rem 0;
            width: 100vw;
            position: relative;
            overflow: hidden;
        }

        .why-choose-us-section::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(233, 77, 0, 0.15) 0%, transparent 70%);
            pointer-events: none;
        }

        .why-choose-us-section .section-badge-clean {
            background-color: rgba(255, 184, 0, 0.15);
            color: #FFB800;
            border-color: rgba(255, 184, 0, 0.3);
        }

        .why-choose-us-section .section-title {
            color: #FFFFFF;
        }

        .why-card-item {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(10px);
            padding: 1.8rem 1.4rem;
            border-radius: 20px;
            height: 100%;
            transition: all 0.3s ease;
        }

        .why-card-item:hover {
            background: rgba(255, 255, 255, 0.09);
            border-color: var(--color-naranja-journey);
            transform: translateY(-4px);
        }

        .why-card-icon-box {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.1rem;
            box-shadow: 0 8px 20px rgba(233, 77, 0, 0.3);
        }

        .btn-conoce-nosotros {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: #FFFFFF !important;
            font-weight: 700;
            font-size: 0.92rem;
            padding: 0.85rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        .btn-conoce-nosotros:hover {
            background: linear-gradient(135deg, var(--color-naranja-hover) 0%, var(--color-naranja-journey) 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(233, 77, 0, 0.4);
        }

        /* 2. TARJETAS "DESTINOS POPULARES" REDISEÑADAS CON VISTA DE PRECIOS EXCLUSIVA Y ELEGANTE */
        .cards-slider-unified-section {
            padding: 3.5rem 0;
            width: 100vw;
        }

        .slider-nav-btn {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--color-blanco);
            border: 1.5px solid var(--color-gris-border);
            color: var(--color-azul-peru-safe);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            transition: all 0.25s ease;
            cursor: pointer;
        }

        .slider-nav-btn:hover {
            background: var(--color-naranja-journey);
            color: var(--color-blanco);
            border-color: var(--color-naranja-journey);
            transform: scale(1.08);
        }

        .unified-cards-track {
            display: flex;
            gap: 22px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 12px 4px 20px;
            scrollbar-width: none;
        }

        .unified-cards-track::-webkit-scrollbar {
            display: none;
        }

        /* DESTINOS POPULARES ENHANCED CARD */
        .dest-card-enhanced {
            flex: 0 0 calc(25% - 17px);
            min-width: 280px;
            background: #FFFFFF;
            border-radius: 22px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.35s ease;
            position: relative;
        }

        .dest-card-enhanced:hover {
            border-color: var(--color-naranja-journey);
            transform: translateY(-6px);
            box-shadow: 0 18px 35px rgba(0, 34, 56, 0.08);
        }

        .dest-img-header {
            position: relative;
            width: 100%;
            height: 220px;
            overflow: hidden;
        }

        .dest-img-header img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .dest-card-enhanced:hover .dest-img-header img {
            transform: scale(1.08);
        }

        .dest-badge-top {
            position: absolute;
            top: 14px;
            left: 14px;
            background: rgba(0, 18, 32, 0.88);
            backdrop-filter: blur(8px);
            color: #FFFFFF;
            font-size: 0.72rem;
            font-weight: 700;
            padding: 0.35rem 0.85rem;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            text-transform: uppercase;
            letter-spacing: 0.4px;
            z-index: 2;
        }

        /* 2. NUEVO DISEÑO ATRACTIVO Y DIFERENTE DE PRECIOS SOBRE LA IMAGEN CON PILL FLOTANTE */
        .dest-price-pill-modern {
            position: absolute;
            bottom: 12px;
            right: 12px;
            background: linear-gradient(135deg, #001A2C 0%, var(--color-azul-peru-safe) 100%);
            border: 1.5px solid var(--color-naranja-journey);
            border-radius: 14px;
            padding: 0.45rem 0.85rem;
            color: #FFFFFF;
            text-align: right;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
            z-index: 2;
            transition: transform 0.3s ease;
        }

        .dest-card-enhanced:hover .dest-price-pill-modern {
            transform: scale(1.04);
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            border-color: #FFFFFF;
        }

        .price-label-small {
            font-size: 0.62rem;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #FFB800;
            font-weight: 700;
            line-height: 1;
            margin-bottom: 2px;
            display: block;
        }

        .dest-card-enhanced:hover .price-label-small {
            color: #FFFFFF;
        }

        .price-main-usd {
            font-size: 1.15rem;
            font-weight: 900;
            color: #FFFFFF;
            line-height: 1;
            display: flex;
            align-items: baseline;
            justify-content: flex-end;
            gap: 2px;
        }

        .price-symbol {
            font-size: 0.75rem;
            font-weight: 700;
            color: #FFB800;
        }

        .dest-card-enhanced:hover .price-symbol {
            color: #FFFFFF;
        }

        .price-sub-pen {
            font-size: 0.7rem;
            font-weight: 600;
            color: #CBD5E1;
            line-height: 1.1;
            margin-top: 1px;
        }

        .dest-card-enhanced:hover .price-sub-pen {
            color: rgba(255, 255, 255, 0.9);
        }

        .dest-body-content {
            padding: 1.35rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }

        .dest-meta-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--color-texto-suave);
            margin-bottom: 0.6rem;
        }

        .dest-title-text {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.5rem;
            line-height: 1.35;
        }

        .dest-rating-stars {
            display: flex;
            align-items: center;
            gap: 3px;
            font-size: 0.82rem;
            color: #FFB800;
            margin-bottom: 1rem;
        }

        .btn-tour-completo {
            background: linear-gradient(135deg, rgba(0, 34, 56, 0.05) 0%, rgba(0, 34, 56, 0.08) 100%);
            color: var(--color-azul-peru-safe) !important;
            border: 1.5px solid var(--color-azul-peru-safe);
            font-weight: 700;
            font-size: 0.83rem;
            padding: 0.65rem 1rem;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }

        .dest-card-enhanced:hover .btn-tour-completo {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: #FFFFFF !important;
            border-color: var(--color-naranja-journey);
            box-shadow: 0 6px 18px rgba(233, 77, 0, 0.3);
        }

        /* 1. SECCIÓN NUESTROS VALORES REDISEÑADA */
        .minimalist-value-card {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 1.8rem 1.4rem;
            border: 1px solid var(--color-gris-border);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            transition: all 0.3s ease;
            position: relative;
        }

        .minimalist-value-card:hover {
            border-color: var(--color-naranja-journey);
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 34, 56, 0.06);
        }

        .minimalist-icon-badge {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            background: linear-gradient(135deg, rgba(233, 77, 0, 0.1) 0%, rgba(233, 77, 0, 0.05) 100%);
            color: var(--color-naranja-journey);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            border: 1px solid rgba(233, 77, 0, 0.2);
            transition: all 0.3s ease;
        }

        .minimalist-value-card:hover .minimalist-icon-badge {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: #FFFFFF;
            border-color: var(--color-naranja-journey);
        }

        .minimalist-value-title {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.4rem;
        }

        .minimalist-value-desc {
            font-size: 0.94rem;
            color: var(--color-texto-suave);
            line-height: 1.65;
            margin-bottom: 0;
        }

        /* 1. SECCIÓN EXPERIENCIAS EXCLUSIVAS REDISEÑADA Y MÁS AMIGABLE */
        .unified-card {
            flex: 0 0 calc(25% - 17px);
            min-width: 280px;
            background: #FFFFFF;
            border-radius: 22px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            transition: all 0.35s ease;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: var(--color-texto-oscuro);
        }

        .unified-card:hover {
            border-color: var(--color-naranja-journey);
            transform: translateY(-6px);
            box-shadow: 0 18px 35px rgba(0, 34, 56, 0.08);
        }

        .unified-card-img-box {
            position: relative;
            width: 100%;
            height: 220px;
            overflow: hidden;
        }

        .unified-card-img-box img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .unified-card:hover .unified-card-img-box img {
            transform: scale(1.08);
        }

        .unified-card-badge {
            position: absolute;
            top: 14px;
            right: 14px;
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: var(--color-blanco);
            font-size: 0.72rem;
            font-weight: 800;
            padding: 0.35rem 0.85rem;
            border-radius: 50px;
            box-shadow: 0 4px 12px rgba(233, 77, 0, 0.3);
            text-transform: uppercase;
        }

        .unified-card-body {
            padding: 1.4rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }

        .unified-card-title {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.45rem;
            line-height: 1.35;
        }

        .unified-card-desc {
            font-size: 0.92rem;
            color: var(--color-texto-suave);
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .unified-card-footer-action {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-weight: 700;
            font-size: 0.83rem;
            color: var(--color-naranja-journey);
            text-transform: uppercase;
            padding-top: 0.8rem;
            border-top: 1px solid var(--color-gris-border);
        }

        .unified-card:hover .unified-card-footer-action {
            color: var(--color-azul-peru-safe);
        }

        /* TRIPADVISOR SECTION */
        .tripadvisor-section {
            background: linear-gradient(180deg, #F8FAFC 0%, #FFFFFF 100%);
            padding: 3.5rem 0;
            border-top: 1px solid var(--color-gris-border);
            width: 100vw;
        }

        .tripadvisor-badge-box {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #FFFFFF;
            padding: 0.5rem 1.2rem;
            border-radius: 50px;
            border: 1px solid var(--color-gris-border);
            margin-bottom: 1rem;
        }

        .tripadvisor-dots {
            color: var(--color-tripadvisor-green);
            font-size: 1.1rem;
            letter-spacing: 2px;
        }

        .review-card {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 1.6rem 1.4rem;
            border: 1px solid var(--color-gris-border);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.3s ease;
        }

        .review-card:hover {
            border-color: var(--color-tripadvisor-green);
            transform: translateY(-4px);
        }

        .btn-tripadvisor {
            background-color: var(--color-tripadvisor-green);
            color: var(--color-blanco) !important;
            font-weight: 700;
            border-radius: 50px;
            padding: 0.75rem 1.8rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-tripadvisor:hover {
            background-color: #008856;
            transform: translateY(-2px);
        }

        /* FOOTER */
        .footer-custom {
            background: #001220;
            border-top: 2px solid var(--color-naranja-journey);
            padding-top: 3.5rem;
            padding-bottom: 1.5rem;
            font-size: 0.9rem;
            color: #CBD5E1;
            width: 100vw;
        }

        .footer-logo {
            font-size: 1.65rem;
            font-weight: 800;
            color: var(--color-blanco);
            margin-bottom: 0.8rem;
            display: inline-block;
            text-decoration: none;
        }

        .footer-logo span {
            color: var(--color-naranja-journey);
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

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            margin-top: 2.5rem;
            padding-top: 1.4rem;
            text-align: center;
            color: #94A3B8;
            font-size: 0.85rem;
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
            text-align: center;
            font-size: 28px;
            z-index: 1050;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.25s ease;
        }

        .whatsapp-float:hover {
            color: #FFF;
            background-color: #20BA5A;
            transform: scale(1.08);
        }

        @media (max-width: 1200px) {
            .unified-card, .dest-card-enhanced { flex: 0 0 calc(33.333% - 15px); }
        }

        @media (max-width: 991.98px) {
            .navbar-custom { position: relative; top: 0; background: #FFFFFF; }
            .nav-link { color: var(--color-azul-peru-safe) !important; text-shadow: none; }
            .hero-title { font-size: 2.7rem; }
            .unified-card, .dest-card-enhanced { flex: 0 0 calc(50% - 11px); }
            .section-title { font-size: 1.95rem; }
            .logo-img-header { height: 68px; }
        }

        @media (max-width: 575.98px) {
            .hero-title { font-size: 1.95rem; }
            .unified-card, .dest-card-enhanced { flex: 0 0 255px; }
            .logo-img-header { height: 54px; }
        }
    </style>
</head>
<body>

    <!-- TOP BAR REDISEÑADO -->
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

                <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20un%20viaje%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="topbar-btn-reserva">
                    <svg class="llama-svg" viewBox="0 0 512 512">
                        <path d="M224 96c0-26.5 21.5-48 48-48s48 21.5 48 48c0 14.7-6.6 27.8-17 36.7 18.2 16.5 29 40 29 65.3v24h16c35.3 0 64 28.7 64 64v16c0 17.7-14.3 32-32 32h-16v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-80h-32v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-96c0-44.2 35.8-80 80-80v-24c0-13.3-5.3-25.3-14-34.1-10.4-10.5-17-24.8-17-40.6zM272 80c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16z"/>
                    </svg>
                    <span>Reserva tu Viaje</span>
                </a>
            </div>
        </div>
    </div>

    <!-- NAVBAR TRANSPARENTE SOBRE HERO SLIDER -->
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
                        <a class="nav-link active" href="https://www.perusafejourneysgroup.com/">INICIO</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://www.perusafejourneysgroup.com/destinos/" id="destinosDropdown" role="button" data-bs-toggle="dropdown">
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


    <!-- HERO SLIDER VIDEO -->
    <section class="hero-video-slider">
        <div class="video-background-wrapper">
            <iframe src="https://www.youtube.com/embed/QPBMvXbjjUI?autoplay=1&mute=1&controls=0&loop=1&playlist=QPBMvXbjjUI&showinfo=0&rel=0&iv_load_policy=3&enablejsapi=1"
                    title="Perú Safe Journeys Background Video"
                    frameborder="0"
                    allow="autoplay; encrypted-media">
            </iframe>
        </div>
        <div class="video-overlay-gradient"></div>

        <div class="container-fluid px-3 px-lg-5 position-relative">
            <div class="hero-content mx-auto">
                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3 fs-6">
                    EXPERIENCIAS AUTÉNTICAS EN EL PERÚ
                </span>
                <h1 class="hero-title">
                    VIVE EL PERÚ A TU MANERA
                </h1>
                <p class="hero-subtitle">
                    Diseñamos viajes personalizados con seguridad, confort y una profunda conexión con nuestra cultura, historia y naturaleza.
                </p>
                <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                    <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20ahora%20mi%20viaje" target="_blank" class="btn-banner-primary">
                        <span>Reserva Ahora y Viaja</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <a href="https://www.perusafejourneysgroup.com/destinos/" class="btn-banner-secondary">
                        <span>Explora Nuestros Tours</span>
                        <i class="bi bi-compass"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- 1. QUIENES SOMOS - VISTA MEJORADA Y MÁS AMIGABLE -->
    <section class="narrative-section-compact">
        <div class="container-fluid px-3 px-lg-5">
            <div class="agency-glass-card">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="section-badge-clean">
                            <i class="bi bi-patch-check-fill text-warning"></i>
                            QUIENES SOMOS
                        </span>
                        <h2 class="section-title mb-2">
                            Perú Safe Journeys – <span style="color: var(--color-naranja-journey);">Travel Agency</span>
                        </h2>
                        <p class="section-lead-concept text-start ms-0 mb-4">
                            Creamos vivencias transformadoras y viajes seguros conectando el alma del Perú con cada viajero.
                        </p>

                        <p class="narrative-paragraph">
                            <strong>Perú Safe Journeys – Travel Agency</strong> es una agencia especializada en crear experiencias auténticas, seguras y personalizadas por el Perú. Diseñamos cada viaje pensando en que nuestros viajeros no solo conozcan destinos, sino que vivan la esencia de cada lugar, conectando con nuestras culturas, tradiciones, historia, gastronomía y extraordinarios paisajes.
                        </p>

                        <!-- FEATURE BADGES -->
                        <div class="row g-3 mb-4">
                            <div class="col-sm-6">
                                <div class="about-feature-item">
                                    <div class="about-feature-icon">
                                        <i class="bi bi-shield-lock-fill"></i>
                                    </div>
                                    <div>
                                        <strong class="d-block text-dark fs-6">Viajes 100% Seguros</strong>
                                        <small class="text-muted">Asistencia & Soporte 24/7</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-feature-item">
                                    <div class="about-feature-icon">
                                        <i class="bi bi-award-fill"></i>
                                    </div>
                                    <div>
                                        <strong class="d-block text-dark fs-6">Guías Especialistas</strong>
                                        <small class="text-muted">Conocimiento Local Profundo</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="narrative-paragraph mb-4">
                            Desde la majestuosidad de <strong>Cusco y Machu Picchu</strong>, pasando por el Valle Sagrado, los Andes y la Amazonía, hasta las costas del Pacífico, acompañamos a nuestros viajeros con atención personalizada, planificación profesional, seguridad y confort en cada etapa de su aventura.
                        </p>

                        <a href="https://www.perusafejourneysgroup.com/nosotros/" class="btn-banner-primary">
                            <span>Conoce Más Sobre Nosotros</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <div class="col-lg-5">
                        <div class="about-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80" alt="Machu Picchu Perú Safe Journeys" class="img-fluid w-100">

                            <div class="about-floating-badge">
                                <div class="about-floating-badge-icon">
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div>
                                    <strong class="d-block fs-5 text-white">4.9 / 5.0 Rating</strong>
                                    <small class="text-warning fw-semibold">Garantía Perú Safe Journeys</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 1. ¿POR QUÉ ELEGIRNOS? - VISTA MEJORADA Y AMIGABLE -->
    <section class="why-choose-us-section">
        <div class="container-fluid px-3 px-lg-5">
            <div class="text-center max-w-800 mx-auto mb-4">
                <span class="section-badge-clean">
                    <i class="bi bi-stars"></i>
                    ¿POR QUÉ ELEGIRNOS?
                </span>
                <h2 class="section-title mb-2">Perú Safe Journeys: tu camino hacia un Perú auténtico</h2>
                <p class="section-lead-concept text-light opacity-90 mb-3">La tranquilidad de explorar el Perú con planificación impecable y el respaldo de expertos locales.</p>
            </div>

            <!-- CARDS DE RAZONES -->
            <div class="row g-4 mb-4">
                <div class="col-lg-3 col-md-6">
                    <div class="why-card-item">
                        <div class="why-card-icon-box">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h4 class="fs-5 fw-bold text-white mb-2">Atención Cercana 24/7</h4>
                        <p class="text-light opacity-75 small mb-0">Acompañamiento continuo antes, durante y después de tu travesía.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="why-card-item">
                        <div class="why-card-icon-box">
                            <i class="bi bi-sliders"></i>
                        </div>
                        <h4 class="fs-5 fw-bold text-white mb-2">100% Personalizado</h4>
                        <p class="text-light opacity-75 small mb-0">Itinerarios a tu propio ritmo adaptados a tus gustos y expectativas.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="why-card-item">
                        <div class="why-card-icon-box">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4 class="fs-5 fw-bold text-white mb-2">Seguridad Absoluta</h4>
                        <p class="text-light opacity-75 small mb-0">Protocolos rigurosos y transporte privado de primera categoría.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="why-card-item">
                        <div class="why-card-icon-box">
                            <i class="bi bi-heart-pulse-fill"></i>
                        </div>
                        <h4 class="fs-5 fw-bold text-white mb-2">Conexión Cultural</h4>
                        <p class="text-light opacity-75 small mb-0">Encuentros reales con comunidades, tradiciones y gastronomía local.</p>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="https://www.perusafejourneysgroup.com/nosotros/" class="btn-conoce-nosotros">
                    <span>Conoce más sobre Nosotros</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>


    <!-- 2. DESTINOS POPULARES - TARJETAS Y PRECIOS REDISEÑADOS -->
    <section class="cards-slider-unified-section" style="background-color: #FFFFFF;">
        <div class="container-fluid px-3 px-lg-5">
            <div class="text-center mb-2">
                <span class="section-badge-clean">
                    <i class="bi bi-fire"></i>
                    DESTINOS POPULARES
                </span>
                <h2 class="section-title">Nuestros Tours y Destinos Estrellas</h2>
                <p class="section-lead-concept mb-3">Las aventuras más recomendadas con precios transparentes y atención personalizada.</p>
            </div>

            <div class="unified-cards-track" id="destinosTrack">
                <?php foreach($destinos_cards_section as $dest): ?>
                    <div class="dest-card-enhanced">
                        <div class="dest-img-header">
                            <img src="<?php echo $dest['image']; ?>" alt="<?php echo $dest['title']; ?>" loading="lazy">
                            <span class="dest-badge-top"><?php echo $dest['badge']; ?></span>

                            <!-- 2. NUEVA VISTA DE PRECIOS ELEGANTE Y DIFERENTE -->
                            <div class="dest-price-pill-modern">
                                <span class="price-label-small">DESDE SOLO</span>
                                <div class="price-main-usd">
                                    <span class="price-symbol">$</span><?php echo $dest['price_usd']; ?>
                                </div>
                                <div class="price-sub-pen">S/. <?php echo $dest['price_pen']; ?></div>
                            </div>
                        </div>

                        <div class="dest-body-content">
                            <div>
                                <div class="dest-meta-row">
                                    <span><i class="bi bi-geo-alt-fill text-warning me-1"></i><?php echo $dest['location']; ?></span>
                                    <span><i class="bi bi-clock me-1"></i><?php echo $dest['duration']; ?></span>
                                </div>
                                <h3 class="dest-title-text"><?php echo $dest['title']; ?></h3>

                                <div class="dest-rating-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="text-dark fw-bold ms-1"><?php echo $dest['rating']; ?></span>
                                    <span class="text-muted font-weight-normal">(<?php echo $dest['reviews']; ?>)</span>
                                </div>
                            </div>

                            <a href="<?php echo $dest['url']; ?>" class="btn-tour-completo w-100 mt-2">
                                <span>Ver Tour Completo</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- BOTONES DE NAVEGACIÓN EN LA PARTE INFERIOR DERECHA -->
            <div class="d-flex justify-content-end gap-2 mt-3">
                <button class="slider-nav-btn" id="slideDestPrevBtn" aria-label="Anterior">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="slider-nav-btn" id="slideDestNextBtn" aria-label="Siguiente">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>


    <!-- 1. NUESTROS VALORES - PILARES DE MARCA REDISEÑADOS -->
    <section class="cards-slider-unified-section" style="background-color: #F8FAFC;">
        <div class="container-fluid px-3 px-lg-5">
            <div class="text-center mb-4">
                <span class="section-badge-clean">
                    <i class="bi bi-gem"></i>
                    NUESTROS VALORES
                </span>
                <h2 class="section-title">Pilares de Marca</h2>
                <p class="section-lead-concept mb-3">Nuestros seis compromisos fundamentales para garantizar una experiencia inolvidable.</p>
            </div>

            <div class="row g-4">
                <?php foreach($brand_pillars as $pillar): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="minimalist-value-card">
                            <div class="minimalist-icon-badge">
                                <i class="bi <?php echo $pillar['icon']; ?>"></i>
                            </div>
                            <h4 class="minimalist-value-title"><?php echo $pillar['name']; ?></h4>
                            <p class="minimalist-value-desc"><?php echo $pillar['desc']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- 1. EXPERIENCIAS EXCLUSIVAS - MODALIDADES REDISEÑADAS -->
    <section class="cards-slider-unified-section" style="background-color: #FFFFFF;">
        <div class="container-fluid px-3 px-lg-5">
            <div class="text-center mb-2">
                <span class="section-badge-clean">
                    <i class="bi bi-compass"></i>
                    EXPERIENCIAS EXCLUSIVAS
                </span>
                <h2 class="section-title">Modalidades de Viaje</h2>
                <p class="section-lead-concept mb-3">Diferentes estilos de itinerarios para adaptarse a tu espíritu aventurero.</p>
            </div>

            <div class="unified-cards-track mt-2" id="modalidadesTrack">
                <?php foreach($tour_cards as $card): ?>
                    <a href="<?php echo $card['link']; ?>" class="unified-card">
                        <div class="unified-card-img-box">
                            <img src="<?php echo $card['image']; ?>" alt="<?php echo $card['title']; ?>" loading="lazy">
                            <span class="unified-card-badge"><?php echo $card['badge']; ?></span>
                        </div>
                        <div class="unified-card-body">
                            <div>
                                <h3 class="unified-card-title"><?php echo $card['title']; ?></h3>
                                <p class="unified-card-desc"><?php echo $card['desc']; ?></p>
                            </div>
                            <div class="unified-card-footer-action">
                                <span>Explorar Categoria</span>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- BOTONES DE NAVEGACIÓN EN LA PARTE INFERIOR DERECHA -->
            <div class="d-flex justify-content-end gap-2 mt-3">
                <button class="slider-nav-btn" id="slideModPrevBtn" aria-label="Anterior">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="slider-nav-btn" id="slideModNextBtn" aria-label="Siguiente">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>


    <!-- TRIPADVISOR REVIEWS -->
    <section class="tripadvisor-section">
        <div class="container-fluid px-3 px-lg-5">
            <div class="text-center mb-4">
                <div class="tripadvisor-badge-box">
                    <span class="fw-bold text-dark fs-6">TRIPADVISOR REVIEWS</span>
                    <span class="tripadvisor-dots">•••••</span>
                </div>
                <h2 class="section-title">TripAdvisor Perú Safe Journeys</h2>
                <p class="section-lead-concept mb-3">Testimonios reales de quienes vivieron la magia del Perú acompañados por nosotros.</p>
            </div>

            <div class="row g-4 mb-4">
                <?php foreach($tripadvisor_reviews as $rev): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="review-card">
                            <div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="badge font-weight-bold" style="background-color: var(--color-tripadvisor-green) !important; color: #FFF;">
                                        ★ 5.0 Excelente
                                    </span>
                                    <small class="text-muted"><?php echo $rev['date']; ?></small>
                                </div>
                                <h4 class="fs-6 fw-bold text-dark mb-2"><?php echo $rev['title']; ?></h4>
                                <p class="text-secondary small mb-3" style="line-height: 1.6;">"<?php echo $rev['comment']; ?>"</p>
                            </div>

                            <div class="border-top pt-2 d-flex align-items-center justify-content-between text-muted small">
                                <div>
                                    <strong class="text-dark d-block"><?php echo $rev['author']; ?></strong>
                                    <span><?php echo $rev['country']; ?></span>
                                </div>
                                <i class="bi bi-patch-check-fill text-success fs-5"></i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center">
                <a href="https://www.tripadvisor.com" target="_blank" class="btn-tripadvisor">
                    <i class="bi bi-box-arrow-up-right"></i>
                    <span>Ver más opiniones en TripAdvisor Perú Safe Journeys</span>
                </a>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer class="footer-custom" id="contacto">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <a href="https://www.perusafejourneysgroup.com/" class="footer-logo">
                        Perú Safe Journeys <span>| Viajes Perú</span>
                    </a>
                    <p class="pe-lg-3" style="color: #94A3B8;">
                        Agencia de viajes especializada en experiencias auténticas, seguras y personalizadas. Conectamos viajeros con el corazón cultural del Perú.
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
                        <div class="footer-contact-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <small class="d-block text-secondary">Ventas:</small>
                            <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="text-white text-decoration-none fw-bold"><?php echo $phones['ventas']['number']; ?></a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <div>
                            <small class="d-block text-secondary">Operaciones:</small>
                            <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="text-white text-decoration-none fw-bold"><?php echo $phones['operaciones']['number']; ?></a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <small class="d-block text-secondary">Calidad 24/7:</small>
                            <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="text-white text-decoration-none fw-bold"><?php echo $phones['calidad']['number']; ?></a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <small class="d-block text-secondary">Correo de contacto:</small>
                            <a href="mailto:<?php echo $email_address; ?>" class="text-white text-decoration-none fw-bold"><?php echo $email_address; ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="mb-0">
                    &copy; <?php echo $current_year; ?> Todos los derechos reservados para: <strong>Perú Safe Journeys | Viajes Perú</strong>
                </p>
            </div>
        </div>
    </footer>

    <!-- Icono flotante de WhatsApp -->
    <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Per%C3%BA%20Safe%20Journeys"
       class="whatsapp-float"
       target="_blank"
       aria-label="Contactar por WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Scripts Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS para Sliders & Navbar Sticky -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.navbar-custom');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            function setupSlider(trackId, prevBtnId, nextBtnId) {
                const track = document.getElementById(trackId);
                const prevBtn = document.getElementById(prevBtnId);
                const nextBtn = document.getElementById(nextBtnId);

                if (track && prevBtn && nextBtn) {
                    nextBtn.addEventListener('click', () => {
                        const cardWidth = track.firstElementChild ? track.firstElementChild.offsetWidth + 22 : 290;
                        track.scrollBy({ left: cardWidth, behavior: 'smooth' });
                    });
                    prevBtn.addEventListener('click', () => {
                        const cardWidth = track.firstElementChild ? track.firstElementChild.offsetWidth + 22 : 290;
                        track.scrollBy({ left: -cardWidth, behavior: 'smooth' });
                    });
                }
            }

            setupSlider('modalidadesTrack', 'slideModPrevBtn', 'slideModNextBtn');
            setupSlider('destinosTrack', 'slideDestPrevBtn', 'slideDestNextBtn');
        });
    </script>
</body>
</html>
