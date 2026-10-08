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

// Submenú de Destinos (sin precios)
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

// 5 Tarjetas Creativas de Modalidades
$tour_cards = [
    [
        'title' => 'Tours Tradicionales',
        'desc' => 'Descubre lugares imprescindibles del Perú.',
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
        'desc' => 'Comparte, aprende y vive nuestras tradiciones.',
        'badge' => 'Cultura & Tradición',
        'image' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/nosotros/'
    ]
];

// Destinos
$destinos_cards_section = [
    [
        'title' => '7 LAGUNAS DEL AUSANGATE',
        'location' => 'Ausangate, Cusco',
        'duration' => 'Full Day (FD)',
        'rating' => '5.0 (86 Reseñas)',
        'price_usd' => '$ 80.00',
        'price_pen' => 'S/. 275.50',
        'badge' => 'Aguas Termales & Glaciares',
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
        'badge' => 'Adrenalina en Cuatrimoto',
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
        'badge' => 'Aguas Turquesas',
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
        'badge' => 'Montaña de 7 Colores',
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
        'badge' => 'Cerro Afilado',
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
        'badge' => 'Glacial Tropical',
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
        'badge' => 'Pisac, Ollantaytambo & Chinchero',
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
        'badge' => 'Tradición & Mercado Inca',
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
        'badge' => 'Arqueología & Gastronomía',
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
        'badge' => 'Fortaleza Mística',
        'image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/waqrapukara-fd/'
    ]
];

// Pilares de marca
$brand_pillars = [
    [
        'name' => 'Autenticidad',
        'desc' => 'Experiencias conectadas con la verdadera esencia del Perú.',
        'icon' => 'bi-compass-fill'
    ],
    [
        'name' => 'Seguridad',
        'desc' => 'Planificación responsable y acompañamiento durante el viaje.',
        'icon' => 'bi-shield-check'
    ],
    [
        'name' => 'Personalización',
        'desc' => 'Itinerarios adaptados a los intereses y necesidades de cada viajero.',
        'icon' => 'bi-sliders'
    ],
    [
        'name' => 'Confianza',
        'desc' => 'Atención cercana antes, durante y después de cada experiencia.',
        'icon' => 'bi-heart-fill'
    ],
    [
        'name' => 'Conexión',
        'desc' => 'Cultura, historia, naturaleza, gastronomía y comunidades locales.',
        'icon' => 'bi-people-fill'
    ],
    [
        'name' => 'Confort',
        'desc' => 'Servicios pensados para disfrutar cada destino sin preocupaciones.',
        'icon' => 'bi-stars'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company_name; ?> – <?php echo $company_tagline; ?></title>

    <!-- Google Fonts: Poppins & Manrope -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        :root {
            /* 3 Colores Principales */
            --color-naranja-journey: #E94D00;
            --color-naranja-hover: #C74000;
            --color-blanco: #FFFFFF;
            --color-azul-peru-safe: #002238;
            --color-azul-andino: #0B527A;
            --color-dorado-andino: #D9A441;
            --color-gris-claro: #F8FAFC;

            --color-texto-oscuro: #0F172A;
            --color-texto-suave: #64748B;
            --color-gris-border: #E2E8F0;
            --color-naranja-glow: rgba(233, 77, 0, 0.4);
        }

        * {
            box-sizing: border-box;
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

        h1, h2, h3, h4, h5, h6,
        .hero-title, .section-title, .brand-motto-title,
        .brand-text, .nav-link, .dropdown-item, .btn-reserva-llama, .btn-banner,
        .badge, .section-badge {
            font-family: 'Poppins', sans-serif;
        }

        /* 1. TOP BAR Y MENÚ DE NAVEGACIÓN */
        .top-bar {
            background: linear-gradient(90deg, #001220 0%, #002238 50%, #001220 100%);
            font-size: 0.85rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            z-index: 1050;
            position: relative;
            width: 100%;
            padding: 0.45rem 0;
        }

        .topbar-phone-badge {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 0.28rem 0.8rem;
            border-radius: 50px;
            font-size: 0.8rem;
            color: #E2E8F0 !important;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .topbar-phone-badge:hover {
            background: var(--color-naranja-journey);
            border-color: var(--color-naranja-journey);
            color: var(--color-blanco) !important;
            transform: translateY(-2px);
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
            transition: all 0.3s ease;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .topbar-social-icon:hover {
            background: var(--color-naranja-journey);
            color: var(--color-blanco) !important;
            border-color: var(--color-naranja-journey);
            transform: translateY(-2px);
        }

        /* Sticky Navbar */
        .navbar-custom {
            background: rgba(0, 34, 56, 0.96);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            transition: all 0.35s ease;
            border-bottom: 2px solid var(--color-naranja-journey);
            width: 100%;
            padding: 0.55rem 0;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
        }

        .navbar-custom.scrolled {
            background: rgba(0, 18, 32, 0.98);
            padding: 0.4rem 0;
        }

        .logo-img-header {
            height: 84px;
            width: auto;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .navbar-brand-logo:hover .logo-img-header {
            transform: scale(1.04);
        }

        .nav-link {
            color: var(--color-blanco) !important;
            font-weight: 700;
            font-size: 0.9rem;
            padding: 0.6rem 1.1rem !important;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 2px;
            left: 50%;
            width: 0%;
            height: 3px;
            background: var(--color-naranja-journey);
            transition: all 0.35s ease;
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

        /* DROPDOWN SUBMENU SIN ICONOS NI PRECIOS */
        .dropdown-menu-custom {
            background: rgba(0, 22, 40, 0.98) !important;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(233, 77, 0, 0.3) !important;
            border-top: 4px solid var(--color-naranja-journey) !important;
            border-radius: 14px !important;
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.5) !important;
            padding: 0.6rem 0.4rem !important;
            min-width: 270px;
            margin-top: 0.4rem !important;
        }

        @media (min-width: 992px) {
            .nav-item.dropdown:hover .dropdown-menu-custom {
                display: block;
                animation: dropdownGlow 0.28s ease forwards;
            }
        }

        @keyframes dropdownGlow {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .dropdown-item-custom {
            color: #F1F5F9 !important;
            font-size: 0.84rem !important;
            font-weight: 700 !important;
            letter-spacing: 0.5px;
            padding: 0.6rem 1rem !important;
            border-radius: 8px;
            transition: all 0.25s ease !important;
            text-transform: uppercase;
        }

        .dropdown-item-custom:hover {
            background-color: var(--color-naranja-journey) !important;
            color: var(--color-blanco) !important;
            transform: translateX(5px);
        }

        /* BOTONES COMPACTOS */
        .btn-compact {
            padding: 0.58rem 1.35rem !important;
            font-size: 0.88rem !important;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            width: auto !important;
        }

        .btn-reserva-llama {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: var(--color-blanco) !important;
            font-weight: 700;
            font-size: 0.88rem;
            border-radius: 50px;
            padding: 0.6rem 1.35rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px var(--color-naranja-glow);
            border: 2px solid rgba(255, 255, 255, 0.25);
            text-transform: uppercase;
            width: auto;
        }

        .btn-reserva-llama:hover {
            background: linear-gradient(135deg, var(--color-naranja-hover) 0%, var(--color-naranja-journey) 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 22px rgba(233, 77, 0, 0.5);
            color: var(--color-blanco);
        }

        .llama-svg {
            width: 18px;
            height: 18px;
            fill: currentColor;
        }

        /* 2. HERO SLIDER CON VIDEO DE FONDO */
        .hero-video-slider {
            position: relative;
            height: 82vh;
            min-height: 560px;
            max-height: 800px;
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
            max-width: 1100px;
            text-align: center;
            padding: 1.5rem 1rem;
        }

        .hero-title {
            font-size: 4.2rem;
            font-weight: 900;
            letter-spacing: -1px;
            line-height: 1.1;
            margin-bottom: 1.2rem;
            text-transform: uppercase;
            text-shadow: 0 4px 25px rgba(0, 0, 0, 0.8);
            background: linear-gradient(135deg, #FFFFFF 30%, #FFE8D6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            font-weight: 500;
            line-height: 1.8;
            margin-bottom: 2.2rem;
            color: #F8FAFC;
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.85);
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-banner-primary {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: var(--color-blanco) !important;
            font-weight: 700;
            border-radius: 50px;
            padding: 0.8rem 2rem;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px var(--color-naranja-glow);
            border: 2px solid rgba(255, 255, 255, 0.3);
            text-transform: uppercase;
            width: auto;
        }

        .btn-banner-primary:hover {
            background: linear-gradient(135deg, var(--color-naranja-hover) 0%, var(--color-naranja-journey) 100%);
            transform: translateY(-2px);
        }

        .btn-banner-secondary {
            background-color: rgba(255, 255, 255, 0.15);
            color: var(--color-blanco) !important;
            font-weight: 700;
            border-radius: 50px;
            padding: 0.8rem 2rem;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.7);
            text-transform: uppercase;
            width: auto;
        }

        .btn-banner-secondary:hover {
            background-color: var(--color-blanco);
            color: var(--color-azul-peru-safe) !important;
            transform: translateY(-2px);
        }

        /* SECTION BADGES LIMPIOS (SIN ICONOS) & ESPACIOS REDUCIDOS */
        .section-padding-compact {
            padding: 3.5rem 0;
            width: 100vw;
            position: relative;
        }

        .section-badge-clean {
            display: inline-block;
            background-color: rgba(233, 77, 0, 0.1);
            color: var(--color-naranja-journey);
            font-weight: 800;
            font-size: 0.8rem;
            padding: 0.35rem 1.1rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin-bottom: 0.6rem;
            border: 1px solid rgba(233, 77, 0, 0.25);
        }

        .section-title {
            font-size: 2.4rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.3rem;
        }

        /* 3. SECCIÓN QUIENES SOMOS (AHORA DIRECTAMENTE DEBAJO DEL SLIDER) */
        .narrative-section-compact {
            background: linear-gradient(180deg, #FFFFFF 0%, #F8FAFC 100%);
            padding: 3.8rem 0;
            width: 100vw;
        }

        .agency-glass-card {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 28px;
            padding: 3rem 2.5rem;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 15px 45px rgba(0, 34, 56, 0.05);
        }

        .narrative-paragraph {
            font-size: 1.08rem;
            line-height: 1.85;
            color: #334155;
            margin-bottom: 1.3rem;
        }

        .brand-motto-box {
            background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%);
            color: var(--color-blanco);
            border-radius: 22px;
            padding: 2.8rem 2.2rem;
            margin: 2.8rem 0;
            text-align: center;
            position: relative;
            box-shadow: 0 18px 40px rgba(0, 18, 32, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .brand-motto-title {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--color-dorado-andino);
            margin-bottom: 1.2rem;
        }

        /* PILARES */
        .pillar-card {
            background: var(--color-blanco);
            border-radius: 20px;
            padding: 1.8rem 1.5rem;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.03);
            transition: all 0.35s ease;
            height: 100%;
        }

        .pillar-card:hover {
            transform: translateY(-6px);
            border-color: var(--color-naranja-journey);
            box-shadow: 0 14px 35px rgba(233, 77, 0, 0.15);
        }

        .pillar-name {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.4rem;
        }

        /* 4. SECCIÓN MODALIDADES EN FORMATO SLIDER */
        .modalidades-slider-section {
            background: #F1F5F9;
            padding: 3.8rem 0;
            width: 100vw;
        }

        .slider-nav-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: var(--color-blanco);
            border: 1px solid var(--color-gris-border);
            color: var(--color-azul-peru-safe);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            transition: all 0.28s ease;
            cursor: pointer;
        }

        .slider-nav-btn:hover {
            background: var(--color-naranja-journey);
            color: var(--color-blanco);
            border-color: var(--color-naranja-journey);
            transform: scale(1.06);
        }

        .cards-track {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 10px 5px 18px;
            scrollbar-width: none;
        }

        .cards-track::-webkit-scrollbar {
            display: none;
        }

        .creative-card {
            flex: 0 0 270px;
            background: var(--color-blanco);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 34, 56, 0.05);
            transition: all 0.35s ease;
            border: 1px solid var(--color-gris-border);
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: var(--color-texto-oscuro);
        }

        .creative-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 36px rgba(233, 77, 0, 0.18);
            border-color: var(--color-naranja-journey);
        }

        .card-img-container {
            width: 100%;
            height: 220px;
            overflow: hidden;
            position: relative;
        }

        .card-img-container img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .creative-card:hover .card-img-container img {
            transform: scale(1.08);
        }

        .card-badge-overlay {
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(0, 34, 56, 0.9);
            color: var(--color-blanco);
            font-size: 0.72rem;
            font-weight: 700;
            padding: 0.3rem 0.75rem;
            border-radius: 20px;
        }

        .card-body-content {
            padding: 1.25rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }

        .card-title-text {
            font-size: 1.18rem;
            font-weight: 700;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.4rem;
        }

        .card-desc-text {
            font-size: 0.85rem;
            color: var(--color-texto-suave);
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        /* 5. SECCIÓN DESTINOS POPULARES EN FORMATO CARDS-SLIDER-SECCIÓN */
        .destinos-slider-section {
            padding: 3.8rem 0;
            background: var(--color-blanco);
            width: 100vw;
        }

        .dest-card-creative {
            flex: 0 0 290px;
            background: var(--color-blanco);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 10px 30px rgba(0, 34, 56, 0.05);
            transition: all 0.35s ease;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: var(--color-texto-oscuro);
        }

        .dest-card-creative:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 42px rgba(233, 77, 0, 0.2);
            border-color: var(--color-naranja-journey);
        }

        .dest-card-img-box {
            position: relative;
            width: 100%;
            height: 230px;
            overflow: hidden;
        }

        .dest-card-img-box img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .dest-card-creative:hover .dest-card-img-box img {
            transform: scale(1.08);
        }

        .dest-card-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: var(--color-naranja-journey);
            color: var(--color-blanco);
            font-size: 0.72rem;
            font-weight: 800;
            padding: 0.32rem 0.8rem;
            border-radius: 20px;
        }

        .dest-card-body {
            padding: 1.4rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }

        .dest-card-title {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.6rem;
            line-height: 1.3;
        }

        .price-usd {
            font-size: 1.15rem;
            font-weight: 900;
            color: var(--color-naranja-journey);
            font-family: 'Poppins', sans-serif;
        }

        .price-pen {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--color-azul-andino);
            font-family: 'Poppins', sans-serif;
        }

        /* FOOTER */
        .footer-custom {
            background: #001220;
            border-top: 2px solid var(--color-naranja-journey);
            padding-top: 4rem;
            padding-bottom: 1.8rem;
            font-size: 0.95rem;
            color: #CBD5E1;
            width: 100vw;
        }

        .footer-logo {
            font-family: 'Poppins', sans-serif;
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--color-blanco);
            margin-bottom: 1rem;
            display: inline-block;
            text-decoration: none;
        }

        .footer-logo span {
            color: var(--color-naranja-journey);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            margin-top: 3rem;
            padding-top: 1.8rem;
            text-align: center;
            color: #94A3B8;
            font-size: 0.9rem;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 62px;
            height: 62px;
            background-color: #25D366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 32px;
            box-shadow: 0 10px 22px rgba(37, 211, 102, 0.4);
            z-index: 1050;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .whatsapp-float:hover {
            color: #FFF;
            background-color: #20BA5A;
            transform: scale(1.1);
        }

        @media (max-width: 991.98px) {
            .hero-title { font-size: 3rem; }
            .hero-subtitle { font-size: 1.1rem; }
            .agency-glass-card { padding: 2rem 1.4rem; }
            .section-title { font-size: 2rem; }
            .logo-img-header { height: 70px; }
            .dropdown-menu-custom { min-width: 250px; }
        }

        @media (max-width: 575.98px) {
            .hero-title { font-size: 2.1rem; }
            .creative-card { flex: 0 0 240px; }
            .dest-card-creative { flex: 0 0 250px; }
            .logo-img-header { height: 56px; }
        }
    </style>
</head>
<body>

    <!-- 1. TOP BAR -->
    <div class="top-bar">
        <div class="container-fluid px-3 px-lg-5 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="topbar-phone-badge">
                    <span><strong><?php echo $phones['ventas']['label']; ?>:</strong> <?php echo $phones['ventas']['number']; ?></span>
                </a>
                <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="topbar-phone-badge">
                    <span><strong><?php echo $phones['operaciones']['label']; ?>:</strong> <?php echo $phones['operaciones']['number']; ?></span>
                </a>
                <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="topbar-phone-badge">
                    <span><strong><?php echo $phones['calidad']['label']; ?>:</strong> <?php echo $phones['calidad']['number']; ?></span>
                </a>
            </div>

            <div class="d-none d-md-flex align-items-center gap-3">
                <a href="mailto:<?php echo $email_address; ?>" class="text-white text-decoration-none small me-2">
                    <?php echo $email_address; ?>
                </a>
                <a href="https://facebook.com" target="_blank" class="topbar-social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com" target="_blank" class="topbar-social-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://tiktok.com" target="_blank" class="topbar-social-icon" title="TikTok"><i class="bi bi-tiktok"></i></a>
            </div>
        </div>
    </div>

    <!-- NAVBAR PEGAJOSO -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-custom">
        <div class="container-fluid px-3 px-lg-5">
            <a class="navbar-brand-logo" href="https://www.perusafejourneysgroup.com/">
                <img src="https://www.perusafejourneysgroup.com/wp-content/uploads/2026/10/Diseno-sin-titulo.png" alt="Perú Safe Journeys Logo" class="logo-img-header">
            </a>

            <button class="navbar-toggler text-white border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <i class="bi bi-list fs-1 text-white"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="https://www.perusafejourneysgroup.com/">INICIO</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://www.perusafejourneysgroup.com/destinos/" id="destinosDropdown" role="button" data-bs-toggle="dropdown">
                            DESTINOS
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom shadow-lg" aria-labelledby="destinosDropdown">
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

                <div class="text-center text-lg-end mt-3 mt-lg-0">
                    <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20un%20viaje%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="btn-reserva-llama">
                        <svg class="llama-svg" viewBox="0 0 512 512">
                            <path d="M224 96c0-26.5 21.5-48 48-48s48 21.5 48 48c0 14.7-6.6 27.8-17 36.7 18.2 16.5 29 40 29 65.3v24h16c35.3 0 64 28.7 64 64v16c0 17.7-14.3 32-32 32h-16v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-80h-32v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-96c0-44.2 35.8-80 80-80v-24c0-13.3-5.3-25.3-14-34.1-10.4-10.5-17-24.8-17-40.6zM272 80c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16z"/>
                        </svg>
                        <span>Reserva tu Viaje</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>


    <!-- 2. SLIDER CON VIDEO DE FONDO -->
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
            <div class="hero-content mx-auto animate__animated animate__fadeInUp">
                <span class="badge bg-warning text-dark px-4 py-2 rounded-pill font-weight-bold text-uppercase mb-3 fs-6">
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


    <!-- 3. DEBAJO DEL SLIDER: SECCIÓN "QUIENES SOMOS" Y NARRATIVA CREATIVA -->
    <section class="narrative-section-compact">
        <div class="container-fluid px-3 px-lg-5">
            <div class="agency-glass-card">
                <div class="row align-items-center g-4 mb-4">
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
                        <p class="narrative-paragraph fw-semibold text-dark mb-4">
                            Nuestro propósito es convertir cada viaje en una experiencia memorable, combinando la riqueza cultural del Perú con la confianza de viajar acompañado por especialistas locales.
                        </p>

                        <a href="https://www.perusafejourneysgroup.com/nosotros/" class="btn btn-compact btn-banner-primary">
                            <span>Conoce Más Sobre Nosotros</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <div class="col-lg-5">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80" alt="Machu Picchu Perú Safe Journeys" class="img-fluid rounded-4 shadow-sm w-100" style="border: 3px solid #fff;">
                        </div>
                    </div>
                </div>

                <!-- CONTENIDO CREATIVO CON CONCEPTO Y MOTTO -->
                <div class="brand-motto-box">
                    <span class="badge bg-warning text-dark px-3 py-1 rounded-pill font-weight-bold text-uppercase mb-2 fs-6">
                        CONTENIDO CREATIVO
                    </span>
                    <h3 class="brand-motto-title">
                        Perú Safe Journeys: tu camino hacia un Perú auténtico.
                    </h3>
                    <p class="fs-5 text-light max-w-800 mx-auto mb-3" style="line-height: 1.7;">
                        Creamos viajes que van más allá del turismo convencional. Diseñamos experiencias a tu medida para descubrir el Perú de manera segura, cómoda y auténtica, conectándote con sus pueblos, culturas, historia, naturaleza y tradiciones.
                    </p>
                    <p class="fs-5 fw-bold text-warning mb-0">
                        Con conocimiento local y atención personalizada, transformamos cada recorrido en una historia para recordar. Tú eliges cómo quieres vivir el Perú; nosotros nos encargamos de hacer del camino una experiencia segura y extraordinaria.
                    </p>
                </div>

                <!-- PILARES DE MARCA SIN ICONOS/EMOJIS EN EL BADGE -->
                <div class="pt-2">
                    <div class="text-center mb-4">
                        <span class="section-badge-clean">NUESTROS VALORES</span>
                        <h2 class="section-title">Pilares de Marca</h2>
                    </div>

                    <div class="row g-3">
                        <?php foreach($brand_pillars as $pillar): ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="pillar-card">
                                    <h4 class="pillar-name"><?php echo $pillar['name']; ?></h4>
                                    <p class="text-secondary mb-0" style="line-height: 1.6; font-size: 0.92rem;"><?php echo $pillar['desc']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- 4. SECCIÓN MODALIDADES EN FORMATO SLIDER -->
    <section class="modalidades-slider-section">
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

            <div class="cards-track" id="modalidadesTrack">
                <?php foreach($tour_cards as $card): ?>
                    <a href="<?php echo $card['link']; ?>" class="creative-card">
                        <div class="card-img-container">
                            <img src="<?php echo $card['image']; ?>" alt="<?php echo $card['title']; ?>" loading="lazy">
                            <span class="card-badge-overlay"><?php echo $card['badge']; ?></span>
                        </div>
                        <div class="card-body-content">
                            <div>
                                <h3 class="card-title-text"><?php echo $card['title']; ?></h3>
                                <p class="card-desc-text"><?php echo $card['desc']; ?></p>
                            </div>
                            <div class="fw-bold text-warning small text-uppercase">
                                <span>Ver Más</span>
                                <i class="bi bi-arrow-right ms-1"></i>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- 5. SECCIÓN DESTINOS EN FORMATO CARDS-SLIDER-SECCIÓN -->
    <section class="destinos-slider-section">
        <div class="container-fluid px-3 px-lg-5">
            <div class="d-flex justify-content-between align-items-end flex-wrap gap-2 mb-4">
                <div>
                    <span class="section-badge-clean">DESTINOS POPULARES</span>
                    <h2 class="section-title">Nuestros Tours y Destinos Estrellas</h2>
                    <p class="text-muted mb-0 fs-6">Desplaza lateralmente para explorar nuestras salidas diarias.</p>
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

            <!-- Carrusel de Destinos -->
            <div class="cards-track" id="destinosTrack">
                <?php foreach($destinos_cards_section as $dest): ?>
                    <div class="dest-card-creative">
                        <div class="dest-card-img-box">
                            <img src="<?php echo $dest['image']; ?>" alt="<?php echo $dest['title']; ?>" loading="lazy">
                            <span class="dest-card-badge"><?php echo $dest['badge']; ?></span>
                        </div>
                        <div class="dest-card-body">
                            <div>
                                <div class="d-flex justify-content-between text-muted small fw-bold mb-2">
                                    <span><?php echo $dest['location']; ?></span>
                                    <span><?php echo $dest['duration']; ?></span>
                                </div>
                                <h3 class="dest-card-title"><?php echo $dest['title']; ?></h3>
                            </div>

                            <div class="d-flex align-items-center justify-content-between pt-2 border-top mt-2">
                                <div>
                                    <div class="price-usd"><?php echo $dest['price_usd']; ?></div>
                                    <div class="price-pen"><?php echo $dest['price_pen']; ?></div>
                                </div>
                                <a href="<?php echo $dest['url']; ?>" class="btn btn-compact btn-reserva-llama fs-6 py-1 px-3">
                                    <span>Ver Tour</span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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
                    <p class="pe-lg-4" style="color: #94A3B8;">
                        Agencia de viajes especializada en experiencias auténticas, seguras y personalizadas. Conectamos viajeros con el corazón cultural, histórico y natural del Perú.
                    </p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="https://facebook.com" target="_blank" class="topbar-social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com" target="_blank" class="topbar-social-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://tiktok.com" target="_blank" class="topbar-social-icon" title="TikTok"><i class="bi bi-tiktok"></i></a>
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
                    <p class="mb-1"><strong>Ventas:</strong> <?php echo $phones['ventas']['number']; ?></p>
                    <p class="mb-1"><strong>Operaciones:</strong> <?php echo $phones['operaciones']['number']; ?></p>
                    <p class="mb-1"><strong>Calidad 24/7:</strong> <?php echo $phones['calidad']['number']; ?></p>
                    <p class="mb-0"><strong>Correo:</strong> <?php echo $email_address; ?></p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>

    <!-- Custom JS Script para Sliders -->
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

            // Slider Modalidades
            const modTrack = document.getElementById('modalidadesTrack');
            const modPrevBtn = document.getElementById('slideModPrevBtn');
            const modNextBtn = document.getElementById('slideModNextBtn');

            if (modTrack && modPrevBtn && modNextBtn) {
                modNextBtn.addEventListener('click', () => {
                    modTrack.scrollBy({ left: 300, behavior: 'smooth' });
                });
                modPrevBtn.addEventListener('click', () => {
                    modTrack.scrollBy({ left: -300, behavior: 'smooth' });
                });
            }

            // Slider Destinos
            const destTrack = document.getElementById('destinosTrack');
            const destPrevBtn = document.getElementById('slideDestPrevBtn');
            const destNextBtn = document.getElementById('slideDestNextBtn');

            if (destTrack && destPrevBtn && destNextBtn) {
                destNextBtn.addEventListener('click', () => {
                    destTrack.scrollBy({ left: 320, behavior: 'smooth' });
                });
                destPrevBtn.addEventListener('click', () => {
                    destTrack.scrollBy({ left: -320, behavior: 'smooth' });
                });
            }
        });
    </script>
</body>
</html>
