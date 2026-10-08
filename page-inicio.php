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

// Submenú de Destinos con Precios en $ USD y S/. Soles
$destinos_submenu = [
    [
        'name' => '7 LAGUNAS DEL AUSANGATE',
        'price_usd' => '$ 80.00',
        'price_pen' => 'S/. 275.50',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/7-lagunas-del-ausangate/'
    ],
    [
        'name' => 'ATV MONTAÑA DE COLORES FD',
        'price_usd' => '$ 85.00 Simp. / $ 65.00 Dob.',
        'price_pen' => 'S/. 292.60 Simp. / S/. 223.73 Dob.',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/atv-montana-de-colores-fd/'
    ],
    [
        'name' => 'LAGUNA HUMANTAY FD',
        'price_usd' => '$ 30.00',
        'price_pen' => 'S/. 103.50',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/laguna-humantay-fd/'
    ],
    [
        'name' => 'MONTAÑA VINICUNCA FD',
        'price_usd' => '$ 30.00',
        'price_pen' => 'S/. 103.50',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/montana-vinicunca-fd/'
    ],
    [
        'name' => 'PALLAY PUNCHOY FD',
        'price_usd' => '$ 45.00',
        'price_pen' => 'S/. 154.90',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/pallay-punchoy-fd/'
    ],
    [
        'name' => 'QUELCAYA FD',
        'price_usd' => '$ 80.00',
        'price_pen' => 'S/. 275.50',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/quelcaya-fd/'
    ],
    [
        'name' => 'VALLE SAGRADO BIG',
        'price_usd' => '$ 35.00',
        'price_pen' => 'S/. 120.50',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-big/'
    ],
    [
        'name' => 'VALLE SAGRADO FD',
        'price_usd' => '$ 30.00',
        'price_pen' => 'S/. 103.50',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-fd/'
    ],
    [
        'name' => 'VALLE SUR',
        'price_usd' => '$ 25.00',
        'price_pen' => 'S/. 86.50',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sur/'
    ],
    [
        'name' => 'WAQRAPUKARA FD',
        'price_usd' => '$ 40.00',
        'price_pen' => 'S/. 138.00',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/waqrapukara-fd/'
    ]
];

// Tarjetas creativas para la sección "Encuentra tu próximo destino"
$tour_cards = [
    [
        'title' => 'Tours Tradicionales',
        'desc' => 'Descubre lugares imprescindibles del Perú con guías locales.',
        'badge' => '🏛️ Clásico & Imprescindible',
        'image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/'
    ],
    [
        'title' => 'Tours de Caminata',
        'desc' => 'Rutas, Montañas y Paisajes que te conectan con la naturaleza.',
        'badge' => '🏔️ Trekking & Naturaleza',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/experiencias/'
    ],
    [
        'title' => 'Aventura',
        'desc' => 'Experiencias llenas de adrenalina para los más valientes.',
        'badge' => '⚡ Adrenalina Pura',
        'image' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/programas/'
    ],
    [
        'title' => 'Expediciones',
        'desc' => 'Selva y montaña para explorar territorios únicos.',
        'badge' => '🌿 Exploración Única',
        'image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/'
    ],
    [
        'title' => 'Turismo Vivencial',
        'desc' => 'Comparte, aprende y vive nuestras tradiciones andinas.',
        'badge' => '🤝 Cultura & Tradición',
        'image' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/nosotros/'
    ]
];

// Tarjetas Creativas Destacadas de la Sección "Destinos" con precios reales
$creative_destinations = [
    [
        'title' => 'Valle Sagrado Big',
        'location' => 'Valle Sagrado, Cusco',
        'duration' => '1 Día Completo',
        'rating' => '4.9 (128 Reseñas)',
        'price_usd' => '$ 35.00',
        'price_pen' => 'S/. 120.50',
        'badge' => '🔥 Valle Inca',
        'image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-big/'
    ],
    [
        'title' => 'Laguna Humantay FD',
        'location' => 'Anta, Cusco',
        'duration' => '1 Día Completo',
        'rating' => '4.8 (95 Reseñas)',
        'price_usd' => '$ 30.00',
        'price_pen' => 'S/. 103.50',
        'badge' => '💧 Laguna Turquesa',
        'image' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/laguna-humantay-fd/'
    ],
    [
        'title' => 'Montaña Vinicunca FD',
        'location' => 'Quispicanchi, Cusco',
        'duration' => '1 Día Completo',
        'rating' => '4.9 (110 Reseñas)',
        'price_usd' => '$ 30.00',
        'price_pen' => 'S/. 103.50',
        'badge' => '🌈 7 Colores',
        'image' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/montana-vinicunca-fd/'
    ],
    [
        'title' => '7 Lagunas del Ausangate',
        'location' => 'Pacchanta, Cusco',
        'duration' => '1 Día Completo',
        'rating' => '5.0 (82 Reseñas)',
        'price_usd' => '$ 80.00',
        'price_pen' => 'S/. 275.50',
        'badge' => '🏔️ Aguas Termales',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'url' => 'https://www.perusafejourneysgroup.com/destinos/7-lagunas-del-ausangate/'
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
            /* Colores Principales */
            --color-azul-peru-safe: #002238;
            --color-azul-andino: #0B527A;
            --color-naranja-journey: #E94D00;
            --color-naranja-hover: #C74000;
            --color-dorado-andino: #D9A441;
            --color-blanco: #FFFFFF;
            --color-gris-claro: #F8FAFC;

            --color-topbar: #001726;
            --color-texto-oscuro: #0F172A;
            --color-texto-suave: #64748B;
            --color-gris-border: #E2E8F0;
            --color-naranja-glow: rgba(233, 77, 0, 0.35);
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

        /* Tipografía Amigable y Creativa */
        h1, h2, h3, h4, h5, h6,
        .hero-title, .section-title, .brand-motto-title,
        .brand-text, .nav-link, .dropdown-item, .btn-reserva-llama, .btn-banner,
        .badge, .section-badge {
            font-family: 'Poppins', sans-serif;
        }

        /* 1. HEADER & TOP BAR REDISEÑADOS */
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
            font-size: 0.82rem;
            color: #E2E8F0 !important;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .topbar-phone-badge:hover {
            background: var(--color-naranja-journey);
            border-color: var(--color-naranja-journey);
            color: var(--color-blanco) !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px var(--color-naranja-glow);
        }

        .topbar-phone-badge i {
            color: var(--color-dorado-andino);
            transition: color 0.3s ease;
        }

        .topbar-phone-badge:hover i {
            color: var(--color-blanco);
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
        }

        .topbar-social-icon:hover {
            background: var(--color-naranja-journey);
            color: var(--color-blanco) !important;
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 4px 12px var(--color-naranja-glow);
        }

        /* Menú Pegajoso (Navbar con Glassmorphism) */
        .navbar-custom {
            background: rgba(0, 26, 43, 0.92);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            transition: all 0.4s ease;
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
            width: 100%;
            padding: 0.5rem 0;
        }

        .navbar-custom.scrolled {
            background: rgba(0, 18, 32, 0.98);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
            padding: 0.3rem 0;
        }

        .navbar-brand-logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo-img-header {
            height: 88px;
            width: auto;
            object-fit: contain;
            filter: drop-shadow(0 4px 12px rgba(0,0,0,0.3));
            transition: transform 0.3s ease;
        }

        .navbar-brand-logo:hover .logo-img-header {
            transform: scale(1.04);
        }

        .nav-link {
            color: var(--color-blanco) !important;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 0.6rem 1rem !important;
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
            height: 2px;
            background: linear-gradient(90deg, var(--color-naranja-journey), var(--color-dorado-andino));
            transition: all 0.3s ease;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 75%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--color-naranja-journey) !important;
        }

        /* DROPDOWN MENU REDISEÑADO CON PRECIOS VISIBLES */
        .dropdown-menu-custom {
            background: rgba(0, 18, 32, 0.98) !important;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15) !important;
            border-top: 3px solid var(--color-naranja-journey) !important;
            border-radius: 16px !important;
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.5) !important;
            padding: 0.6rem 0.4rem !important;
            min-width: 380px; /* Expandido para mostrar precios */
            margin-top: 0.5rem !important;
        }

        @media (min-width: 992px) {
            .nav-item.dropdown:hover .dropdown-menu-custom {
                display: block;
                animation: fadeInDropdown 0.3s ease forwards;
            }
        }

        @keyframes fadeInDropdown {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .dropdown-item-custom {
            color: #E2E8F0 !important;
            font-size: 0.82rem !important;
            font-weight: 600 !important;
            letter-spacing: 0.5px;
            padding: 0.6rem 0.9rem !important;
            border-radius: 10px;
            transition: all 0.25s ease !important;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            text-transform: uppercase;
        }

        .dropdown-item-custom .dest-title {
            display: flex;
            align-items: center;
            gap: 8px;
            max-width: 220px;
        }

        .dropdown-item-custom i {
            color: var(--color-naranja-journey);
            font-size: 0.9rem;
            transition: transform 0.25s ease;
        }

        .menu-price-tag {
            background: rgba(233, 77, 0, 0.18);
            color: var(--color-dorado-andino);
            border: 1px solid rgba(217, 164, 65, 0.3);
            font-size: 0.72rem;
            font-weight: 700;
            padding: 0.2rem 0.55rem;
            border-radius: 20px;
            white-space: nowrap;
        }

        .dropdown-item-custom:hover {
            background-color: rgba(233, 77, 0, 0.22) !important;
            color: var(--color-blanco) !important;
            transform: translateX(4px);
        }

        .dropdown-item-custom:hover .menu-price-tag {
            background: var(--color-naranja-journey);
            color: var(--color-blanco);
            border-color: var(--color-naranja-journey);
        }

        .dropdown-item-custom:hover i {
            transform: scale(1.2) rotate(6deg);
            color: var(--color-dorado-andino);
        }

        .dropdown-divider-custom {
            border-top: 1px solid rgba(255, 255, 255, 0.1) !important;
            margin: 0.35rem 0 !important;
        }

        /* Botones con Ancho Reducido */
        .btn-compact {
            padding: 0.6rem 1.4rem !important;
            font-size: 0.88rem !important;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            width: auto !important;
        }

        .btn-reserva-llama {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: var(--color-blanco) !important;
            font-weight: 700;
            font-size: 0.88rem;
            letter-spacing: 0.5px;
            border-radius: 50px;
            padding: 0.65rem 1.4rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: all 0.35s ease;
            box-shadow: 0 4px 16px var(--color-naranja-glow);
            border: 2px solid rgba(255, 255, 255, 0.2);
            text-transform: uppercase;
            width: auto;
        }

        .btn-reserva-llama:hover {
            background: linear-gradient(135deg, var(--color-naranja-hover) 0%, var(--color-naranja-journey) 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(233, 77, 0, 0.55);
            color: var(--color-blanco);
        }

        .llama-svg {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }

        /* 3. HERO SLIDER CON VIDEO DE FONDO Y ANCHO COMPLETO */
        .hero-video-slider {
            position: relative;
            height: 88vh;
            min-height: 600px;
            max-height: 850px;
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
            filter: brightness(0.55) contrast(1.15);
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
                rgba(0, 34, 56, 0.45) 50%,
                rgba(0, 18, 32, 0.9) 100%
            );
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            max-width: 1100px;
            text-align: center;
            padding: 2rem 1rem;
        }

        .hero-title {
            font-size: 4.2rem;
            font-weight: 900;
            letter-spacing: -1px;
            line-height: 1.1;
            margin-bottom: 1.4rem;
            text-transform: uppercase;
            text-shadow: 0 4px 25px rgba(0, 0, 0, 0.7);
            background: linear-gradient(135deg, #FFFFFF 20%, #FFE0B2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            font-weight: 500;
            line-height: 1.8;
            margin-bottom: 2.5rem;
            color: #F1F5F9;
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.8);
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
            font-size: 0.98rem;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            transition: all 0.35s ease;
            box-shadow: 0 6px 20px var(--color-naranja-glow);
            border: 2px solid rgba(255, 255, 255, 0.3);
            text-transform: uppercase;
            width: auto;
        }

        .btn-banner-primary:hover {
            background: linear-gradient(135deg, var(--color-naranja-hover) 0%, var(--color-naranja-journey) 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 28px rgba(233, 77, 0, 0.55);
        }

        .btn-banner-secondary {
            background-color: rgba(255, 255, 255, 0.15);
            color: var(--color-blanco) !important;
            font-weight: 700;
            border-radius: 50px;
            padding: 0.8rem 2rem;
            font-size: 0.98rem;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            backdrop-filter: blur(10px);
            transition: all 0.35s ease;
            border: 2px solid rgba(255, 255, 255, 0.7);
            text-transform: uppercase;
            width: auto;
        }

        .btn-banner-secondary:hover {
            background-color: var(--color-blanco);
            color: var(--color-azul-peru-safe) !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(255, 255, 255, 0.3);
        }

        /* 4. SECCIÓN TARJETAS CREATIVAS DE DESTINOS */
        .cards-slider-section {
            background: linear-gradient(180deg, var(--color-gris-claro) 0%, #EDF2F7 100%);
            padding: 5rem 0;
            position: relative;
            width: 100vw;
        }

        .section-badge {
            display: inline-block;
            background-color: rgba(233, 77, 0, 0.1);
            color: var(--color-naranja-journey);
            font-weight: 800;
            font-size: 0.82rem;
            padding: 0.4rem 1.2rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 0.8rem;
            border: 1px solid rgba(233, 77, 0, 0.25);
        }

        .section-title {
            font-size: 2.6rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.4rem;
        }

        .cards-track-wrapper {
            position: relative;
            overflow: hidden;
            padding: 1rem 0 1.5rem;
            width: 100%;
        }

        .cards-track {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 10px 5px 20px;
            scrollbar-width: none;
        }

        .cards-track::-webkit-scrollbar {
            display: none;
        }

        .creative-card {
            flex: 0 0 280px;
            background: var(--color-blanco);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 34, 56, 0.06);
            transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
            border: 1px solid var(--color-gris-border);
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: var(--color-texto-oscuro);
            position: relative;
        }

        .creative-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 35px rgba(233, 77, 0, 0.18);
            border-color: var(--color-naranja-journey);
        }

        .card-img-container {
            position: relative;
            width: 100%;
            height: 250px;
            overflow: hidden;
        }

        .card-img-container img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .creative-card:hover .card-img-container img {
            transform: scale(1.08);
        }

        .card-badge-overlay {
            position: absolute;
            top: 12px;
            left: 12px;
            background: rgba(0, 34, 56, 0.88);
            backdrop-filter: blur(8px);
            color: var(--color-blanco);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.35rem 0.8rem;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-family: 'Poppins', sans-serif;
        }

        .card-body-content {
            padding: 1.3rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
            background: var(--color-blanco);
        }

        .card-title-text {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .creative-card:hover .card-title-text {
            color: var(--color-naranja-journey);
        }

        .card-desc-text {
            font-size: 0.88rem;
            color: var(--color-texto-suave);
            line-height: 1.55;
            margin-bottom: 1.2rem;
        }

        /* SECCIÓN TARJETAS CREATIVAS DE DESTINOS DESTACADOS CON DUAL CURRENCY PRECIOS */
        .destinos-creative-section {
            padding: 5.5rem 0;
            background: var(--color-blanco);
            width: 100vw;
        }

        .dest-card-creative {
            background: var(--color-blanco);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 10px 30px rgba(0, 34, 56, 0.05);
            transition: all 0.35s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .dest-card-creative:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 40px rgba(233, 77, 0, 0.16);
            border-color: var(--color-naranja-journey);
        }

        .dest-card-img-box {
            position: relative;
            width: 100%;
            height: 240px;
            overflow: hidden;
        }

        .dest-card-img-box img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .dest-card-creative:hover .dest-card-img-box img {
            transform: scale(1.08);
        }

        .dest-card-badge {
            position: absolute;
            top: 14px;
            right: 14px;
            background: rgba(233, 77, 0, 0.9);
            color: var(--color-blanco);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.35rem 0.85rem;
            border-radius: 30px;
            backdrop-filter: blur(6px);
        }

        .dest-card-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }

        .dest-card-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.82rem;
            color: var(--color-texto-suave);
            margin-bottom: 0.6rem;
        }

        .dest-card-title {
            font-size: 1.28rem;
            font-weight: 700;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.8rem;
        }

        .dest-card-prices-box {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .price-usd {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--color-naranja-journey);
            font-family: 'Poppins', sans-serif;
            line-height: 1.2;
        }

        .price-pen {
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--color-azul-andino);
            font-family: 'Poppins', sans-serif;
        }

        /* 5. SECCIÓN REDISEÑADA: PERÚ SAFE JOURNEYS – TRAVEL AGENCY */
        .creative-narrative-section {
            padding: 6rem 0;
            background: linear-gradient(180deg, #FFFFFF 0%, #F1F5F9 100%);
            position: relative;
            overflow: hidden;
            width: 100vw;
        }

        .agency-glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 28px;
            padding: 3.5rem;
            border: 1px solid rgba(226, 232, 240, 0.9);
            box-shadow: 0 20px 50px rgba(0, 34, 56, 0.06);
        }

        .narrative-paragraph {
            font-size: 1.12rem;
            line-height: 1.85;
            color: #334155;
            margin-bottom: 1.5rem;
        }

        .brand-motto-box {
            background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%);
            color: var(--color-blanco);
            border-radius: 24px;
            padding: 3.2rem 2.5rem;
            margin: 3.5rem 0;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 18, 32, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .brand-motto-box::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 350px;
            height: 350px;
            background: rgba(233, 77, 0, 0.25);
            border-radius: 50%;
            filter: blur(60px);
        }

        .brand-motto-title {
            font-size: 2.4rem;
            font-weight: 800;
            color: var(--color-dorado-andino);
            margin-bottom: 1.2rem;
        }

        /* 6. PILARES DE MARCA REDISEÑADOS */
        .pillar-card {
            background: var(--color-blanco);
            border-radius: 20px;
            padding: 2rem 1.8rem;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.03);
            transition: all 0.35s ease;
            height: 100%;
        }

        .pillar-card:hover {
            transform: translateY(-6px);
            border-color: var(--color-naranja-journey);
            box-shadow: 0 16px 36px rgba(233, 77, 0, 0.12);
        }

        .pillar-icon-box {
            width: 58px;
            height: 58px;
            border-radius: 16px;
            background: rgba(233, 77, 0, 0.1);
            color: var(--color-naranja-journey);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            margin-bottom: 1.2rem;
            transition: all 0.35s ease;
        }

        .pillar-card:hover .pillar-icon-box {
            background: var(--color-naranja-journey);
            color: var(--color-blanco);
            transform: rotate(-6deg) scale(1.05);
            box-shadow: 0 6px 18px var(--color-naranja-glow);
        }

        .pillar-name {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.5rem;
            font-family: 'Poppins', sans-serif;
        }

        /* FOOTER */
        .footer-custom {
            background: #001220;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 5rem;
            padding-bottom: 2rem;
            font-size: 0.95rem;
            color: #CBD5E1;
            width: 100vw;
        }

        .footer-logo {
            font-family: 'Poppins', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--color-blanco);
            margin-bottom: 1.2rem;
            display: inline-block;
            text-decoration: none;
        }

        .footer-logo span {
            color: var(--color-naranja-journey);
        }

        .footer-contact-item {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 1.1rem;
            color: #94A3B8;
        }

        .footer-contact-icon {
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.06);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-naranja-journey);
            font-size: 1.1rem;
        }

        .footer-contact-item a {
            color: #E2E8F0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-contact-item a:hover {
            color: var(--color-naranja-journey);
        }

        .footer-heading {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--color-blanco);
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
            font-family: 'Poppins', sans-serif;
        }

        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background-color: var(--color-naranja-journey);
            border-radius: 2px;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: #94A3B8;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .footer-links a:hover {
            color: var(--color-naranja-journey);
            transform: translateX(5px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            margin-top: 3.5rem;
            padding-top: 1.8rem;
            text-align: center;
            color: #94A3B8;
            font-size: 0.9rem;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 32px;
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4);
            z-index: 1050;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            animation: pulseWhatsApp 2s infinite;
        }

        .whatsapp-float:hover {
            color: #FFF;
            background-color: #20BA5A;
            transform: scale(1.12) rotate(8deg);
            box-shadow: 0 15px 30px rgba(37, 211, 102, 0.6);
        }

        @keyframes pulseWhatsApp {
            0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
            70% { box-shadow: 0 0 0 18px rgba(37, 211, 102, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
        }

        @media (max-width: 991.98px) {
            .hero-title { font-size: 3rem; }
            .hero-subtitle { font-size: 1.15rem; }
            .agency-glass-card { padding: 2.2rem 1.6rem; }
            .brand-motto-title { font-size: 1.9rem; }
            .section-title { font-size: 2.1rem; }
            .logo-img-header { height: 72px; }
            .dropdown-menu-custom { min-width: 300px; }
        }

        @media (max-width: 575.98px) {
            .hero-title { font-size: 2.2rem; }
            .creative-card { flex: 0 0 250px; }
            .card-img-container, .card-img-container img { height: 210px; }
            .logo-img-header { height: 58px; }
        }
    </style>
</head>
<body>

    <!-- 1. HEADER & TOP BAR -->
    <div class="top-bar">
        <div class="container-fluid px-3 px-lg-5 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="topbar-phone-badge">
                    <i class="bi bi-telephone-fill"></i>
                    <span><strong><?php echo $phones['ventas']['label']; ?>:</strong> <?php echo $phones['ventas']['number']; ?></span>
                </a>
                <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="topbar-phone-badge">
                    <i class="bi bi-gear-fill"></i>
                    <span><strong><?php echo $phones['operaciones']['label']; ?>:</strong> <?php echo $phones['operaciones']['number']; ?></span>
                </a>
                <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="topbar-phone-badge">
                    <i class="bi bi-shield-check"></i>
                    <span><strong><?php echo $phones['calidad']['label']; ?>:</strong> <?php echo $phones['calidad']['number']; ?></span>
                </a>
                <a href="mailto:<?php echo $email_address; ?>" class="topbar-email-link d-none d-xl-flex align-items-center gap-2 ms-3">
                    <i class="bi bi-envelope-fill text-warning"></i>
                    <span><?php echo $email_address; ?></span>
                </a>
            </div>

            <div class="d-none d-md-flex align-items-center gap-3">
                <small class="text-light me-1 opacity-75">Síguenos:</small>
                <a href="https://facebook.com" target="_blank" class="topbar-social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com" target="_blank" class="topbar-social-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://tiktok.com" target="_blank" class="topbar-social-icon" title="TikTok"><i class="bi bi-tiktok"></i></a>
                <a href="https://youtube.com" target="_blank" class="topbar-social-icon" title="YouTube"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Menú Pegajoso con Submenú Destinos y Precios $ USD / S/. Soles -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-custom">
        <div class="container-fluid px-3 px-lg-5">
            <a class="navbar-brand-logo" href="https://www.perusafejourneysgroup.com/">
                <img src="https://www.perusafejourneysgroup.com/wp-content/uploads/2026/10/Diseno-sin-titulo.png" alt="Perú Safe Journeys Logo" class="logo-img-header">
            </a>

            <button class="navbar-toggler text-white border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-1 text-white"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="https://www.perusafejourneysgroup.com/">INICIO</a>
                    </li>

                    <!-- DESTINOS DROPDOWN CON PRECIOS -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://www.perusafejourneysgroup.com/destinos/" id="destinosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            DESTINOS <i class="bi bi-chevron-down ms-1 fs-6 text-warning"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom shadow-lg" aria-labelledby="destinosDropdown">
                            <li>
                                <a class="dropdown-item dropdown-item-custom fw-bold text-warning" href="https://www.perusafejourneysgroup.com/destinos/">
                                    <span><i class="bi bi-compass-fill"></i> VER TODOS LOS DESTINOS</span>
                                </a>
                            </li>
                            <li><hr class="dropdown-divider dropdown-divider-custom"></li>
                            <?php foreach($destinos_submenu as $sub_item): ?>
                                <li>
                                    <a class="dropdown-item dropdown-item-custom" href="<?php echo $sub_item['url']; ?>">
                                        <span class="dest-title"><i class="bi bi-geo-alt-fill"></i> <?php echo $sub_item['name']; ?></span>
                                        <span class="menu-price-tag"><?php echo $sub_item['price_usd']; ?> | <?php echo $sub_item['price_pen']; ?></span>
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

                <!-- BOTÓN RESERVA CON ANCHO AJUSTADO COMPACTO -->
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
                    🇵🇪 EXPERIENCIAS AUTÉNTICAS EN EL PERÚ
                </span>
                <h1 class="hero-title">
                    VIVE EL PERÚ A TU MANERA
                </h1>
                <p class="hero-subtitle">
                    Diseñamos viajes personalizados con seguridad, confort y una profunda conexión con nuestra cultura, historia y naturaleza.
                </p>
                <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                    <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20ahora%20mi%20viaje" target="_blank" class="btn-banner-primary">
                        <i class="bi bi-calendar-check-fill"></i> Reserva Ahora y Viaja
                    </a>
                    <a href="https://www.perusafejourneysgroup.com/destinos/" class="btn-banner-secondary">
                        <i class="bi bi-compass-fill"></i> Explora Nuestros Tours
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- 3. SECCIÓN "ENCUENTRA TU PRÓXIMO DESTINO" CON ANCHO Y BOTONES COMPACTOS -->
    <section class="cards-slider-section">
        <div class="container-fluid px-3 px-lg-5">
            <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-4">
                <div>
                    <span class="section-badge">🗺️ EXPERIENCIAS DESTACADAS</span>
                    <h2 class="section-title">Encuentra tu próximo destino</h2>
                    <p class="text-muted mb-0 fs-5">Explora nuestras categorías de viaje diseñadas para cada tipo de aventurero.</p>
                </div>

                <div class="d-flex gap-2">
                    <button class="slider-nav-btn" id="slidePrevBtn" aria-label="Anterior">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="slider-nav-btn" id="slideNextBtn" aria-label="Siguiente">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>

            <div class="cards-track-wrapper">
                <div class="cards-track" id="cardsTrack">
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
                                <div class="card-btn-action">
                                    <span>Ver Experiencia</span>
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>


    <!-- SECCIÓN: TARJETAS CREATIVAS DE DESTINOS DESTACADOS CON DUAL CURRENCY PRECIOS -->
    <section class="destinos-creative-section">
        <div class="container-fluid px-3 px-lg-5">
            <div class="text-center max-w-700 mx-auto mb-5">
                <span class="section-badge">🏔️ DESTINOS DESTACADOS</span>
                <h2 class="section-title">Nuestras Rutas e Itinerarios Estrellas</h2>
                <p class="text-muted fs-5">Rutas planificadas por especialistas locales con máxima seguridad y tarifas claras.</p>
            </div>

            <div class="row g-4">
                <?php foreach($creative_destinations as $dest): ?>
                    <div class="col-xl-3 col-md-6">
                        <div class="dest-card-creative">
                            <div class="dest-card-img-box">
                                <img src="<?php echo $dest['image']; ?>" alt="<?php echo $dest['title']; ?>" loading="lazy">
                                <span class="dest-card-badge"><?php echo $dest['badge']; ?></span>
                            </div>
                            <div class="dest-card-body">
                                <div>
                                    <div class="dest-card-meta">
                                        <span><i class="bi bi-geo-alt-fill text-warning me-1"></i> <?php echo $dest['location']; ?></span>
                                        <span><i class="bi bi-clock me-1 text-warning"></i> <?php echo $dest['duration']; ?></span>
                                    </div>
                                    <h3 class="dest-card-title"><?php echo $dest['title']; ?></h3>
                                    <div class="d-flex align-items-center gap-1 mb-3 text-warning small fw-bold">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <span class="text-secondary ms-1">(<?php echo $dest['rating']; ?>)</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-between pt-3 border-top mt-2">
                                    <div class="dest-card-prices-box">
                                        <span class="price-usd"><?php echo $dest['price_usd']; ?></span>
                                        <span class="price-pen"><?php echo $dest['price_pen']; ?></span>
                                    </div>
                                    <a href="<?php echo $dest['url']; ?>" class="btn btn-compact btn-reserva-llama">
                                        <span>Ver Detalle</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- 5. SECCIÓN REDISEÑADA: PERÚ SAFE JOURNEYS – TRAVEL AGENCY -->
    <section class="creative-narrative-section">
        <div class="container-fluid px-3 px-lg-5">
            <div class="agency-glass-card">
                <div class="row align-items-center g-5 mb-5">
                    <div class="col-lg-7">
                        <span class="section-badge">✨ QUIÉNES SOMOS</span>
                        <h2 class="section-title mb-4">
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
                            <span>Conoce Nuestra Historia</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <div class="col-lg-5">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80" alt="Machu Picchu Perú Safe Journeys" class="img-fluid rounded-4 shadow-lg w-100" style="border: 4px solid #fff;">
                            <div class="position-absolute bottom-0 start-0 m-4 p-4 rounded-3 text-white shadow-lg" style="background: rgba(0, 34, 56, 0.92); backdrop-filter: blur(8px);">
                                <i class="bi bi-quote fs-2 text-warning"></i>
                                <p class="fs-6 mb-0">"Convertimos cada recorrido en una historia para recordar."</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="brand-motto-box text-center">
                    <span class="badge bg-warning text-dark px-4 py-2 rounded-pill font-weight-bold text-uppercase mb-3 fs-6">
                        🌟 CONTENIDO CREATIVO
                    </span>
                    <h3 class="brand-motto-title">
                        Perú Safe Journeys: tu camino hacia un Perú auténtico.
                    </h3>
                    <p class="fs-5 text-light max-w-800 mx-auto mb-4" style="line-height: 1.8;">
                        Creamos viajes que van más allá del turismo convencional. Diseñamos experiencias a tu medida para descubrir el Perú de manera segura, cómoda y auténtica, conectándote con sus pueblos, culturas, historia, naturaleza y tradiciones.
                    </p>
                    <p class="fs-5 fw-bold text-warning mb-0">
                        Con conocimiento local y atención personalizada, transformamos cada recorrido en una historia para recordar. Tú eliges cómo quieres vivir el Perú; nosotros nos encargamos de hacer del camino una experiencia segura y extraordinaria.
                    </p>
                </div>

                <div class="pt-3">
                    <div class="text-center mb-5">
                        <span class="section-badge">💎 NUESTROS VALORES</span>
                        <h2 class="section-title">Pilares de Marca</h2>
                        <p class="text-muted fs-5">Las columnas que fundamentan el compromiso con nuestros viajeros.</p>
                    </div>

                    <div class="row g-4">
                        <?php foreach($brand_pillars as $pillar): ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="pillar-card">
                                    <div class="pillar-icon-box">
                                        <i class="bi <?php echo $pillar['icon']; ?>"></i>
                                    </div>
                                    <h4 class="pillar-name"><?php echo $pillar['name']; ?></h4>
                                    <p class="text-secondary mb-0" style="line-height: 1.7; font-size: 0.95rem;"><?php echo $pillar['desc']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

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
                    <p class="pe-lg-4" style="color: #94A3B8; font-size: 0.98rem;">
                        Agencia de viajes especializada en experiencias auténticas, seguras y personalizadas. Conectamos viajeros con el corazón cultural, histórico y natural del Perú.
                    </p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="https://facebook.com" target="_blank" class="footer-contact-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com" target="_blank" class="footer-contact-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://tiktok.com" target="_blank" class="footer-contact-icon" title="TikTok"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-heading">Navegación</h5>
                    <ul class="footer-links">
                        <li><a href="https://www.perusafejourneysgroup.com/"><i class="bi bi-chevron-right text-warning fs-6"></i> INICIO</a></li>
                        <li><a href="https://www.perusafejourneysgroup.com/destinos/"><i class="bi bi-chevron-right text-warning fs-6"></i> DESTINOS</a></li>
                        <li><a href="https://www.perusafejourneysgroup.com/experiencias/"><i class="bi bi-chevron-right text-warning fs-6"></i> EXPERIENCIAS</a></li>
                        <li><a href="https://www.perusafejourneysgroup.com/programas/"><i class="bi bi-chevron-right text-warning fs-6"></i> PROGRAMAS</a></li>
                        <li><a href="https://www.perusafejourneysgroup.com/nosotros/"><i class="bi bi-chevron-right text-warning fs-6"></i> NOSOTROS</a></li>
                        <li><a href="https://www.perusafejourneysgroup.com/contacto/"><i class="bi bi-chevron-right text-warning fs-6"></i> CONTACTO</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-heading">Contacto Oficial</h5>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <small class="d-block" style="color: #94A3B8;">Ventas:</small>
                            <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="fw-bold fs-6"><?php echo $phones['ventas']['number']; ?></a>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <div>
                            <small class="d-block" style="color: #94A3B8;">Operaciones:</small>
                            <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="fw-bold fs-6"><?php echo $phones['operaciones']['number']; ?></a>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <small class="d-block" style="color: #94A3B8;">Calidad 24/7:</small>
                            <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="fw-bold fs-6"><?php echo $phones['calidad']['number']; ?></a>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <small class="d-block" style="color: #94A3B8;">Correo de contacto:</small>
                            <a href="mailto:<?php echo $email_address; ?>" class="fw-bold fs-6"><?php echo $email_address; ?></a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>

    <!-- Custom JS Script -->
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

            const track = document.getElementById('cardsTrack');
            const prevBtn = document.getElementById('slidePrevBtn');
            const nextBtn = document.getElementById('slideNextBtn');

            if (track && prevBtn && nextBtn) {
                const scrollAmount = 300;

                nextBtn.addEventListener('click', () => {
                    track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                });

                prevBtn.addEventListener('click', () => {
                    track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                });
            }
        });
    </script>
</body>
</html>
