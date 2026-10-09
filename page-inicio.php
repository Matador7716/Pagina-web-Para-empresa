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
        'desc' => 'Descubre lugares imprescindibles del Perú con guías expertos.',
        'badge' => 'Clásico & Imprescindible',
        'image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/'
    ],
    [
        'title' => 'Tours de Caminata',
        'desc' => 'Rutas, Montañas y Paisajes que te conectan con la naturaleza.',
        'badge' => 'Trekking & Naturaleza',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/experiencias/'
    ],
    [
        'title' => 'Aventura',
        'desc' => 'Experiencias llenas de adrenalina para los más valientes.',
        'badge' => 'Adrenalina Pura',
        'image' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/programas/'
    ],
    [
        'title' => 'Expediciones',
        'desc' => 'Selva y montaña para explorar territorios únicos.',
        'badge' => 'Exploración Única',
        'image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/'
    ],
    [
        'title' => 'Turismo Vivencial',
        'desc' => 'Comparte, aprende y vive nuestras tradiciones andinas.',
        'badge' => 'Cultura & Tradición',
        'image' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/nosotros/'
    ]
];

// Destinos Estrellas Rediseñados
$destinos_cards_section = [
    [
        'title' => '7 LAGUNAS DEL AUSANGATE',
        'location' => 'Ausangate, Cusco',
        'duration' => 'Full Day (FD)',
        'rating' => '5.0',
        'reviews' => '86',
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
        'rating' => '4.9',
        'reviews' => '112',
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
        'rating' => '4.9',
        'reviews' => '98',
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
        'rating' => '4.9',
        'reviews' => '140',
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
        'rating' => '4.8',
        'reviews' => '155',
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
        'rating' => '4.9',
        'reviews' => '78',
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
        'rating' => '5.0',
        'reviews' => '64',
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
        'rating' => '4.9',
        'reviews' => '130',
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
        'rating' => '4.8',
        'reviews' => '98',
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
        'rating' => '4.7',
        'reviews' => '72',
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
        'rating' => '5.0',
        'reviews' => '90',
        'price_usd' => '$ 40.00',
        'price_pen' => 'S/. 138.00',
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

        /* 1. TOP BAR REDISEÑADO CON BOTON "RESERVA TU VIAJE", REDES SOCIALES COMPLETA (CON YOUTUBE) Y SIN CORREO */
        .top-bar {
            background: linear-gradient(90deg, #001220 0%, #002238 50%, #001220 100%);
            font-size: 0.82rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
            padding: 0.4rem 0;
            z-index: 1050;
            position: relative;
        }

        .topbar-phone-badge {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.78rem;
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
            transform: translateY(-1px);
        }

        /* 2. NAVBAR-CUSTOM MINIMALISTA Y AMIGABLE PARA AGENCIA DE TURISMO */
        .navbar-custom {
            background: #FFFFFF;
            transition: all 0.3s ease;
            border-bottom: 2px solid var(--color-naranja-journey);
            width: 100%;
            padding: 0.35rem 0;
            box-shadow: 0 4px 20px rgba(0, 34, 56, 0.05);
        }

        .navbar-custom.scrolled {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(12px);
            padding: 0.25rem 0;
            box-shadow: 0 6px 25px rgba(0, 34, 56, 0.08);
        }

        .logo-img-header {
            height: 82px;
            width: auto;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .navbar-brand-logo:hover .logo-img-header {
            transform: scale(1.03);
        }

        .nav-link {
            color: var(--color-azul-peru-safe) !important;
            font-weight: 700;
            font-size: 0.88rem;
            padding: 0.55rem 1.1rem !important;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            position: relative;
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
            width: 75%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--color-naranja-journey) !important;
        }

        .dropdown-menu-custom {
            background: #FFFFFF !important;
            border: 1px solid var(--color-gris-border) !important;
            border-top: 3px solid var(--color-naranja-journey) !important;
            border-radius: 12px !important;
            padding: 0.5rem 0.3rem !important;
            min-width: 260px;
            margin-top: 0.3rem !important;
            box-shadow: 0 10px 30px rgba(0, 34, 56, 0.08) !important;
        }

        @media (min-width: 992px) {
            .nav-item.dropdown:hover .dropdown-menu-custom {
                display: block;
            }
        }

        .dropdown-item-custom {
            color: var(--color-texto-oscuro) !important;
            font-size: 0.82rem !important;
            font-weight: 700 !important;
            letter-spacing: 0.4px;
            padding: 0.55rem 0.9rem !important;
            border-radius: 6px;
            transition: all 0.25s ease !important;
            text-transform: uppercase;
        }

        .dropdown-item-custom:hover {
            background-color: rgba(233, 77, 0, 0.08) !important;
            color: var(--color-naranja-journey) !important;
            transform: translateX(4px);
        }

        .llama-svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }

        /* HERO SLIDER */
        .hero-video-slider {
            position: relative;
            height: 76vh;
            min-height: 500px;
            max-height: 720px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-blanco);
            width: 100vw;
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
            filter: brightness(0.5) contrast(1.15);
        }

        .video-overlay-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                180deg,
                rgba(0, 18, 32, 0.78) 0%,
                rgba(0, 34, 56, 0.4) 50%,
                rgba(0, 18, 32, 0.9) 100%
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
            font-size: 3.8rem;
            font-weight: 900;
            letter-spacing: -0.5px;
            line-height: 1.1;
            margin-bottom: 1rem;
            text-transform: uppercase;
            color: #FFFFFF;
        }

        .hero-subtitle {
            font-size: 1.18rem;
            font-weight: 500;
            line-height: 1.75;
            margin-bottom: 2rem;
            color: #F8FAFC;
            max-width: 850px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-banner-primary {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: var(--color-blanco) !important;
            font-weight: 700;
            border-radius: 50px;
            padding: 0.75rem 1.8rem;
            font-size: 0.92rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.3);
            text-transform: uppercase;
            box-shadow: none !important;
        }

        .btn-banner-secondary {
            background-color: rgba(255, 255, 255, 0.15);
            color: var(--color-blanco) !important;
            font-weight: 700;
            border-radius: 50px;
            padding: 0.75rem 1.8rem;
            font-size: 0.92rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.7);
            text-transform: uppercase;
            box-shadow: none !important;
        }

        /* BADGES Y TITULOS */
        .section-badge-clean {
            display: inline-block;
            background-color: rgba(233, 77, 0, 0.08);
            color: var(--color-naranja-journey);
            font-weight: 800;
            font-size: 0.78rem;
            padding: 0.28rem 0.9rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.4rem;
            border: 1px solid rgba(233, 77, 0, 0.2);
        }

        .section-title {
            font-size: 2.1rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.2rem;
        }

        .narrative-section-compact {
            background: linear-gradient(180deg, #FFFFFF 0%, #F8FAFC 100%);
            padding: 2.5rem 0;
            width: 100vw;
        }

        .agency-glass-card {
            border-radius: 0 !important;
            padding: 0 !important;
            background: transparent !important;
            border: none !important;
            box-shadow: none !important;
        }

        .narrative-paragraph {
            font-size: 1rem;
            line-height: 1.8;
            color: #334155;
            margin-bottom: 1rem;
        }

        /* POR QUÉ ELEGIRNOS CON COLOR DE FONDO Y ENLACE NOSOTROS */
        .why-choose-us-section {
            background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%);
            color: #FFFFFF;
            padding: 3.2rem 0;
            width: 100vw;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .why-choose-us-section .section-badge-clean {
            background-color: rgba(233, 77, 0, 0.2);
            color: #FFB800;
            border-color: rgba(255, 184, 0, 0.3);
        }

        .why-choose-us-section .section-title {
            color: #FFFFFF;
        }

        .btn-conoce-nosotros {
            background: var(--color-naranja-journey);
            color: #FFFFFF !important;
            font-weight: 700;
            font-size: 0.88rem;
            padding: 0.7rem 1.6rem;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.28s ease;
            text-transform: uppercase;
        }

        .btn-conoce-nosotros:hover {
            background: var(--color-naranja-hover);
            transform: translateY(-2px);
        }

        /* TARJETAS MINIMALISTAS */
        .minimalist-value-card {
            background: #FFFFFF;
            border-radius: 16px;
            padding: 1.6rem 1.3rem;
            border: 1px solid var(--color-gris-border);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            transition: all 0.28s ease;
            box-shadow: none !important;
        }

        .minimalist-value-card:hover {
            border-color: var(--color-naranja-journey);
            transform: translateY(-3px);
        }

        .minimalist-icon-badge {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            background: rgba(233, 77, 0, 0.08);
            color: var(--color-naranja-journey);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
            margin-bottom: 0.85rem;
            border: 1px solid rgba(233, 77, 0, 0.18);
            transition: all 0.28s ease;
        }

        .minimalist-value-card:hover .minimalist-icon-badge {
            background: var(--color-naranja-journey);
            color: #FFFFFF;
        }

        .minimalist-value-title {
            font-size: 1.12rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.35rem;
        }

        .minimalist-value-desc {
            font-size: 0.86rem;
            color: var(--color-texto-suave);
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* SLIDERS Y TARJETAS MINIMALISTAS */
        .cards-slider-unified-section {
            padding: 2.5rem 0;
            width: 100vw;
        }

        .slider-nav-btn {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: var(--color-blanco);
            border: 1px solid var(--color-gris-border);
            color: var(--color-azul-peru-safe);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.95rem;
            transition: all 0.25s ease;
            cursor: pointer;
            box-shadow: none !important;
        }

        .slider-nav-btn:hover {
            background: var(--color-naranja-journey);
            color: var(--color-blanco);
            border-color: var(--color-naranja-journey);
        }

        .unified-cards-track {
            display: flex;
            gap: 18px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 8px 2px 14px;
            scrollbar-width: none;
        }

        .unified-cards-track::-webkit-scrollbar {
            display: none;
        }

        .unified-card {
            flex: 0 0 calc(25% - 14px);
            min-width: 265px;
            background: var(--color-blanco);
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            box-shadow: none !important;
            transition: border-color 0.3s ease, transform 0.3s ease;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: var(--color-texto-oscuro);
        }

        .unified-card:hover {
            border-color: var(--color-naranja-journey);
            transform: translateY(-3px);
        }

        .unified-card-img-box {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .unified-card-img-box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .unified-card:hover .unified-card-img-box img {
            transform: scale(1.06);
        }

        .unified-card-badge {
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

        .unified-card-body {
            padding: 1.15rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }

        .unified-card-title {
            font-size: 1.1rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.35rem;
            line-height: 1.3;
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

        /* DESTINOS POPULARES ENHANCED MINIMALISTA */
        .dest-card-enhanced {
            flex: 0 0 calc(25% - 14px);
            min-width: 265px;
            background: #FFFFFF;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.3s ease;
            box-shadow: none !important;
        }

        .dest-card-enhanced:hover {
            border-color: var(--color-naranja-journey);
            transform: translateY(-3px);
        }

        .dest-img-header {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .dest-img-header img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .dest-card-enhanced:hover .dest-img-header img {
            transform: scale(1.06);
        }

        .dest-badge-top {
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(0, 34, 56, 0.88);
            backdrop-filter: blur(6px);
            color: #FFFFFF;
            font-size: 0.72rem;
            font-weight: 700;
            padding: 0.28rem 0.75rem;
            border-radius: 20px;
        }

        .price-overlay-box {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: rgba(233, 77, 0, 0.95);
            color: #FFFFFF;
            padding: 0.3rem 0.75rem;
            border-radius: 10px;
            text-align: right;
        }

        .price-overlay-usd {
            font-size: 0.95rem;
            font-weight: 900;
            line-height: 1.1;
        }

        .price-overlay-pen {
            font-size: 0.7rem;
            font-weight: 600;
            opacity: 0.95;
        }

        .dest-body-content {
            padding: 1.15rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }

        .dest-title-text {
            font-size: 1.08rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.45rem;
            line-height: 1.35;
        }

        .dest-rating-stars {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 0.78rem;
            color: #FFB800;
            margin-bottom: 0.75rem;
        }

        .tripadvisor-section {
            background: linear-gradient(180deg, #F8FAFC 0%, #FFFFFF 100%);
            padding: 2.8rem 0;
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
            border-radius: 16px;
            padding: 1.5rem 1.3rem;
            border: 1px solid var(--color-gris-border);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .btn-tripadvisor {
            background-color: var(--color-tripadvisor-green);
            color: var(--color-blanco) !important;
            font-weight: 700;
            border-radius: 50px;
            padding: 0.65rem 1.6rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: opacity 0.3s ease;
        }

        .footer-custom {
            background: #001220;
            border-top: 2px solid var(--color-naranja-journey);
            padding-top: 3.2rem;
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

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            margin-top: 2.2rem;
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
            box-shadow: none !important;
        }

        .whatsapp-float:hover {
            color: #FFF;
            background-color: #20BA5A;
            transform: scale(1.06);
        }

        @media (max-width: 1200px) {
            .unified-card, .dest-card-enhanced { flex: 0 0 calc(33.333% - 12px); }
        }

        @media (max-width: 991.98px) {
            .hero-title { font-size: 2.7rem; }
            .unified-card, .dest-card-enhanced { flex: 0 0 calc(50% - 10px); }
            .agency-glass-card { padding: 0; }
            .section-title { font-size: 1.8rem; }
            .logo-img-header { height: 68px; }
        }

        @media (max-width: 575.98px) {
            .hero-title { font-size: 1.95rem; }
            .unified-card, .dest-card-enhanced { flex: 0 0 245px; }
            .logo-img-header { height: 54px; }
        }
    </style>
</head>
<body>

    <!-- 1. TOP BAR REDISEÑADO CON BOTÓN RESERVA TU VIAJE, REDES SOCIALES COMPLETA (CON YOUTUBE) Y SIN CORREO -->
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

                <!-- BOTON RESERVA TU VIAJE EN EL TOP BAR -->
                <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20un%20viaje%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="topbar-btn-reserva">
                    <svg class="llama-svg" viewBox="0 0 512 512">
                        <path d="M224 96c0-26.5 21.5-48 48-48s48 21.5 48 48c0 14.7-6.6 27.8-17 36.7 18.2 16.5 29 40 29 65.3v24h16c35.3 0 64 28.7 64 64v16c0 17.7-14.3 32-32 32h-16v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-80h-32v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-96c0-44.2 35.8-80 80-80v-24c0-13.3-5.3-25.3-14-34.1-10.4-10.5-17-24.8-17-40.6zM272 80c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16z"/>
                    </svg>
                    <span>Reserva tu Viaje</span>
                </a>
            </div>
        </div>
    </div>

    <!-- 2. NAVBAR-CUSTOM MINIMALISTA Y AMIGABLE -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-custom">
        <div class="container-fluid px-3 px-lg-5">
            <a class="navbar-brand-logo" href="https://www.perusafejourneysgroup.com/">
                <img src="https://www.perusafejourneysgroup.com/wp-content/uploads/2026/10/Diseno-sin-titulo.png" alt="Perú Safe Journeys Logo" class="logo-img-header">
            </a>

            <button class="navbar-toggler text-dark border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <i class="bi bi-list fs-1 text-dark"></i>
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


    <!-- HERO SLIDER -->
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
                        Reserva Ahora y Viaja
                    </a>
                    <a href="https://www.perusafejourneysgroup.com/destinos/" class="btn-banner-secondary">
                        Explora Nuestros Tours
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- 1. QUIENES SOMOS -->
    <section class="narrative-section-compact">
        <div class="container-fluid px-3 px-lg-5">
            <div class="agency-glass-card">
                <div class="row align-items-center g-4">
                    <div class="col-lg-7">
                        <span class="section-badge-clean">QUIENES SOMOS</span>
                        <h2 class="section-title mb-3">
                            Perú Safe Journeys – <span style="color: var(--color-naranja-journey);">Travel Agency</span>
                        </h2>
                        <p class="narrative-paragraph">
                            <strong>Perú Safe Journeys – Travel Agency</strong> es una agencia especializada en crear experiencias auténticas, seguras y personalizadas por el Perú. Diseñamos cada viaje pensando en que nuestros viajeros no solo conozcan destinos, sino que vivan la esencia de cada lugar, conectando con nuestras culturas, tradiciones, historia, gastronomía y extraordinarios paisajes.
                        </p>
                        <p class="narrative-paragraph">
                            Desde la majestuosidad de <strong>Cusco y Machu Picchu</strong>, pasando por el Valle Sagrado, los Andes y la Amazonía, hasta las costas del Pacífico, acompañamos a nuestros viajeros con atención personalizada, planificación profesional, seguridad y confort en cada etapa de su aventura.
                        </p>
                        <p class="narrative-paragraph fw-semibold text-dark mb-3">
                            Nuestro propósito es convertir cada viaje en una experiencia memorable, combinando la riqueza cultural del Perú con la confianza de viajar acompañado por especialistas locales.
                        </p>

                        <a href="https://www.perusafejourneysgroup.com/nosotros/" class="btn btn-compact btn-banner-primary">
                            <span>Conoce Más Sobre Nosotros</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <div class="col-lg-5">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80" alt="Machu Picchu Perú Safe Journeys" class="img-fluid rounded-4 w-100" style="border: 3px solid #fff;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 3. POR QUÉ ELEGIRNOS CON COLOR DE FONDO Y ENLACE "CONOCE MÁS SOBRE NOSOTROS" -->
    <section class="why-choose-us-section">
        <div class="container-fluid px-3 px-lg-5">
            <div class="text-center max-w-800 mx-auto">
                <span class="section-badge-clean mb-2">¿POR QUÉ ELEGIRNOS?</span>
                <h2 class="section-title mb-2">Perú Safe Journeys: tu camino hacia un Perú auténtico</h2>
                <h4 class="fs-5 text-warning fw-bold mb-3">Tu aventura comienza con nosotros</h4>

                <p class="narrative-paragraph text-light mb-3" style="line-height: 1.85;">
                    Sabemos que viajar es mucho más que conocer nuevos lugares: es cumplir sueños, descubrir culturas, compartir momentos especiales y crear recuerdos que te acompañarán toda la vida.
                </p>
                <p class="narrative-paragraph text-light fw-medium mb-4" style="line-height: 1.85;">
                    En <strong>Perú Safe Journeys</strong>, queremos que vivas el Perú de una manera auténtica, cómoda y segura. Por eso, diseñamos viajes a tu medida para que descubras la magia de nuestros destinos, la riqueza de nuestras tradiciones, la calidez de nuestra gente y la belleza de nuestros paisajes.
                </p>

                <a href="https://www.perusafejourneysgroup.com/nosotros/" class="btn-conoce-nosotros">
                    <span>Conoce más sobre Nosotros</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>


    <!-- 3. DESTINOS POPULARES MINIMALISTAS -->
    <section class="cards-slider-unified-section" style="background-color: #FFFFFF;">
        <div class="container-fluid px-3 px-lg-5">
            <div class="d-flex justify-content-between align-items-end flex-wrap gap-2 mb-3">
                <div>
                    <span class="section-badge-clean">DESTINOS POPULARES</span>
                    <h2 class="section-title">Nuestros Tours y Destinos Estrellas</h2>
                </div>

                <div class="d-flex gap-2">
                    <button class="slider-nav-btn" id="slideDestPrevBtn" aria-label="Anterior">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="slider-nav-btn" id="slideDestNextBtn" aria-label="Siguiente">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="unified-cards-track" id="destinosTrack">
                <?php foreach($destinos_cards_section as $dest): ?>
                    <div class="dest-card-enhanced">
                        <div class="dest-img-header">
                            <img src="<?php echo $dest['image']; ?>" alt="<?php echo $dest['title']; ?>" loading="lazy">
                            <span class="dest-badge-top"><?php echo $dest['badge']; ?></span>

                            <div class="price-overlay-box">
                                <div class="price-overlay-usd"><?php echo $dest['price_usd']; ?></div>
                                <div class="price-overlay-pen"><?php echo $dest['price_pen']; ?></div>
                            </div>
                        </div>

                        <div class="dest-body-content">
                            <div>
                                <div class="d-flex justify-content-between text-muted small fw-semibold mb-2">
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

                            <a href="<?php echo $dest['url']; ?>" class="btn btn-reserva-llama w-100 justify-content-center py-2 mt-2">
                                <span>Ver Tour Completo</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- 3. NUESTROS VALORES MINIMALISTA -->
    <section class="cards-slider-unified-section" style="background-color: #F8FAFC;">
        <div class="container-fluid px-3 px-lg-5">
            <div class="text-center mb-4">
                <span class="section-badge-clean">NUESTROS VALORES</span>
                <h2 class="section-title">Pilares de Marca</h2>
                <p class="text-muted small max-w-700 mx-auto">Nuestros seis compromisos fundamentales para garantizar un viaje extraordinario.</p>
            </div>

            <div class="row g-3">
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


    <!-- EXPERIENCIAS EXCLUSIVAS -->
    <section class="cards-slider-unified-section" style="background-color: #FFFFFF;">
        <div class="container-fluid px-3 px-lg-5">
            <div class="d-flex justify-content-between align-items-end flex-wrap gap-2 mb-3">
                <div>
                    <span class="section-badge-clean">EXPERIENCIAS EXCLUSIVAS</span>
                    <h2 class="section-title">Modalidades de Viaje</h2>
                </div>

                <div class="d-flex gap-2">
                    <button class="slider-nav-btn" id="slideModPrevBtn" aria-label="Anterior">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="slider-nav-btn" id="slideModNextBtn" aria-label="Siguiente">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="unified-cards-track" id="modalidadesTrack">
                <?php foreach($tour_cards as $card): ?>
                    <a href="<?php echo $card['link']; ?>" class="unified-card">
                        <div class="unified-card-img-box">
                            <img src="<?php echo $card['image']; ?>" alt="<?php echo $card['title']; ?>" loading="lazy">
                            <span class="unified-card-badge"><?php echo $card['badge']; ?></span>
                        </div>
                        <div class="unified-card-body">
                            <div>
                                <h3 class="unified-card-title"><?php echo $card['title']; ?></h3>
                                <p class="text-muted small mb-2"><?php echo $card['desc']; ?></p>
                            </div>
                            <div class="fw-bold text-warning small text-uppercase mt-2">
                                <span>Ver Experiencia</span>
                                <i class="bi bi-arrow-right ms-1"></i>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
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
                <p class="text-muted small max-w-700 mx-auto">Conoce los comentarios y testimonios reales de nuestros viajeros internacionales.</p>
            </div>

            <div class="row g-3 mb-4">
                <?php foreach($tripadvisor_reviews as $rev): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="review-card">
                            <div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="badge bg-success font-weight-bold" style="background-color: var(--color-tripadvisor-green) !important;">
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

    <!-- JS para Sliders -->
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
                        const cardWidth = track.firstElementChild ? track.firstElementChild.offsetWidth + 18 : 280;
                        track.scrollBy({ left: cardWidth, behavior: 'smooth' });
                    });
                    prevBtn.addEventListener('click', () => {
                        const cardWidth = track.firstElementChild ? track.firstElementChild.offsetWidth + 18 : 280;
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
