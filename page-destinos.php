<?php
// page-destinos.php - Perú Safe Journeys
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

// Lista completa de destinos
$destinations_list = [
    [
        'title' => 'Machu Picchu & Cusco',
        'sub' => 'La Joya del Imperio Inca',
        'desc' => 'Descubre la imponente ciudadela inca, la Plaza de Armas de Cusco, Sacsayhuamán y los secretos arqueológicos del ombligo del mundo.',
        'badge' => '🏛️ Maravilla del Mundo',
        'image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'duration' => '4 Días / 3 Noches'
    ],
    [
        'title' => 'Valle Sagrado de los Incas',
        'sub' => 'Tradición & Paisajes Andinos',
        'desc' => 'Explora Pisac, Ollantaytambo, Chinchero y las salineras de Maras en un recorrido mágico rodeado de impresionantes montañas.',
        'badge' => '🌄 Mística & Naturaleza',
        'image' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80',
        'duration' => '1 a 2 Días'
    ],
    [
        'title' => 'Ruta del Trekking & Caminata',
        'sub' => 'Salkantay & Camino Inca',
        'desc' => 'Rutas legendarias a través de pasos nevados, bosques de neblina y senderos ancestrales hacia Machu Picchu.',
        'badge' => '🥾 Trekking de Altura',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'duration' => '4 a 5 Días'
    ],
    [
        'title' => 'Montaña de 7 Colores & Humantay',
        'sub' => 'Lagunas & Maravillas Naturales',
        'desc' => 'Visita la impactante Laguna Humantay de aguas turquesas y la radiante Montaña Vinicunca.',
        'badge' => '🌈 Naturaleza Extrema',
        'image' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80',
        'duration' => 'Full Day'
    ],
    [
        'title' => 'Amazonía & Selva de Tambopata',
        'sub' => 'Biodiversidad & Selva Viva',
        'desc' => 'Adéntrate en la selva virgen de Puerto Maldonado, avista guacamayos, nutrias gigantes y la flora tropical del Amazonas.',
        'badge' => '🌿 Selva & Expedición',
        'image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80',
        'duration' => '3 a 4 Días'
    ],
    [
        'title' => 'Lago Titicaca & Puno',
        'sub' => 'El Lago Navegable Más Alto',
        'desc' => 'Conoce las islas flotantes de los Uros, Taquile y Amantaní en una inmersión cultural viva única en el mundo.',
        'badge' => '⛵ Cultura Vivencial',
        'image' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80',
        'duration' => '2 Días / 1 Noche'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinos - <?php echo $company_name; ?></title>

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
        .destinos-hero-title, .section-title,
        .brand-text, .nav-link, .dropdown-item, .btn-reserva-llama, .btn-banner,
        .badge, .section-badge {
            font-family: 'Poppins', sans-serif;
        }

        /* TopBar Superior */
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

        /* Sticky Navigation Bar */
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

        /* DROPDOWN MENU REDISEÑADO PARA DESTINOS */
        .dropdown-menu-custom {
            background: rgba(0, 20, 35, 0.98) !important;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15) !important;
            border-top: 3px solid var(--color-naranja-journey) !important;
            border-radius: 16px !important;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.45) !important;
            padding: 0.6rem 0.4rem !important;
            min-width: 280px;
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
            font-size: 0.83rem !important;
            font-weight: 600 !important;
            letter-spacing: 0.5px;
            padding: 0.55rem 0.9rem !important;
            border-radius: 10px;
            transition: all 0.25s ease !important;
            display: flex;
            align-items: center;
            gap: 10px;
            text-transform: uppercase;
        }

        .dropdown-item-custom i {
            color: var(--color-naranja-journey);
            font-size: 0.9rem;
            transition: transform 0.25s ease;
        }

        .dropdown-item-custom:hover {
            background-color: rgba(233, 77, 0, 0.18) !important;
            color: var(--color-blanco) !important;
            transform: translateX(4px);
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

        /* Hero Banner Section */
        .hero-banner-destinos {
            position: relative;
            padding: 8.5rem 0 6.5rem;
            background: linear-gradient(180deg, rgba(0, 18, 32, 0.82) 0%, rgba(0, 34, 56, 0.92) 100%),
                        url('https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            color: var(--color-blanco);
            text-align: center;
            overflow: hidden;
            width: 100vw;
        }

        .destinos-hero-title {
            font-family: 'Poppins', sans-serif;
            font-size: 3.8rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 1.2rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.6);
            text-transform: uppercase;
        }

        .destinos-hero-title span {
            color: var(--color-dorado-andino);
            font-size: 2.8rem;
            display: block;
            margin-top: 0.2rem;
            font-weight: 700;
        }

        .destinos-hero-subtitle {
            font-size: 1.3rem;
            color: #E2E8F0;
            max-width: 850px;
            margin: 0 auto;
            line-height: 1.8;
            font-weight: 500;
        }

        /* Section Title Styling */
        .section-badge {
            display: inline-block;
            background-color: rgba(233, 77, 0, 0.1);
            color: var(--color-naranja-journey);
            font-weight: 800;
            font-size: 0.85rem;
            padding: 0.4rem 1.2rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 1rem;
            border: 1px solid rgba(233, 77, 0, 0.25);
        }

        .section-title {
            font-family: 'Poppins', sans-serif;
            font-size: 2.8rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        /* Card Styling Optimizado */
        .destino-card {
            background: var(--color-blanco);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 10px 30px rgba(0, 34, 56, 0.05);
            transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .destino-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 40px rgba(233, 77, 0, 0.18);
            border-color: var(--color-naranja-journey);
        }

        .destino-img-wrapper {
            position: relative;
            width: 100%;
            height: 260px;
            overflow: hidden;
        }

        .destino-img-wrapper img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .destino-card:hover .destino-img-wrapper img {
            transform: scale(1.08);
        }

        .card-badge-tag {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(0, 34, 56, 0.88);
            backdrop-filter: blur(8px);
            color: var(--color-blanco);
            font-size: 0.78rem;
            font-weight: 700;
            padding: 0.4rem 0.9rem;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-family: 'Poppins', sans-serif;
        }

        .destino-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }

        .destino-duration {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--color-naranja-journey);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.4rem;
            font-family: 'Poppins', sans-serif;
        }

        .destino-title {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.3rem;
            font-family: 'Poppins', sans-serif;
        }

        .destino-sub {
            font-size: 0.92rem;
            color: var(--color-azul-andino);
            font-weight: 600;
            margin-bottom: 0.8rem;
            font-family: 'Poppins', sans-serif;
        }

        .destino-desc {
            color: var(--color-texto-suave);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        /* Footer */
        .footer-custom {
            background: #001220;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 5rem;
            padding-bottom: 2rem;
            font-size: 0.98rem;
            color: #CBD5E1;
            width: 100vw;
        }

        .footer-logo {
            font-family: 'Poppins', sans-serif;
            font-size: 1.85rem;
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
            margin-bottom: 1.2rem;
            color: #94A3B8;
        }

        .footer-contact-icon {
            width: 42px;
            height: 42px;
            background-color: rgba(255, 255, 255, 0.06);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-naranja-journey);
            font-size: 1.2rem;
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
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--color-blanco);
            margin-bottom: 1.6rem;
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
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 0.85rem;
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
            transform: translateX(6px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            margin-top: 4rem;
            padding-top: 2rem;
            text-align: center;
            color: #94A3B8;
            font-size: 0.92rem;
        }

        /* Botón Flotante de WhatsApp */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 65px;
            height: 65px;
            background-color: #25D366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 34px;
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
    </style>
</head>
<body>

    <!-- 1. HEADER ANCHO COMPLETO -->
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

    <!-- Sticky Navbar con Dropdown de Destinos y Ancho de Botón Reducido -->
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
                        <a class="nav-link" href="https://www.perusafejourneysgroup.com/">INICIO</a>
                    </li>

                    <!-- DESTINOS DROPDOWN -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="https://www.perusafejourneysgroup.com/destinos/" id="destinosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            DESTINOS <i class="bi bi-chevron-down ms-1 fs-6 text-warning"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom shadow-lg" aria-labelledby="destinosDropdown">
                            <li>
                                <a class="dropdown-item dropdown-item-custom fw-bold text-warning" href="https://www.perusafejourneysgroup.com/destinos/">
                                    <i class="bi bi-compass-fill"></i> VER TODOS LOS DESTINOS
                                </a>
                            </li>
                            <li><hr class="dropdown-divider dropdown-divider-custom"></li>
                            <?php foreach($destinos_submenu as $sub_item): ?>
                                <li>
                                    <a class="dropdown-item dropdown-item-custom" href="<?php echo $sub_item['url']; ?>">
                                        <i class="bi bi-geo-alt-fill"></i> <?php echo $sub_item['name']; ?>
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


    <!-- HERO BANNER DESTINOS ANCHO COMPLETO -->
    <header class="hero-banner-destinos">
        <div class="container-fluid px-3 px-lg-5 animate__animated animate__fadeIn">
            <span class="badge bg-warning text-dark px-4 py-2 rounded-pill font-weight-bold text-uppercase mb-3 fs-6">
                🗺️ RUTA PERÚ SAFE JOURNEYS
            </span>
            <h1 class="destinos-hero-title">
                DESTINOS MÁGICOS DEL PERÚ
                <span>CUSCO, MACHU PICCHU, ANDES & SELVA</span>
            </h1>
            <p class="destinos-hero-subtitle">
                Diseñamos experiencias a tu medida para descubrir los tesoros naturales y culturales del Perú con la máxima seguridad y confort.
            </p>
        </div>
    </header>


    <!-- SECCIÓN LISTA DE DESTINOS ANCHO COMPLETO -->
    <section class="py-5" style="background-color: var(--color-gris-claro);">
        <div class="container-fluid px-3 px-lg-5 py-4">
            <div class="text-center max-w-700 mx-auto mb-5">
                <span class="section-badge">✨ EXPLORA CADA RINCÓN</span>
                <h2 class="section-title">Nuestros Destinos Principales</h2>
                <p class="text-secondary fs-5">
                    Selecciona tu próximo destino y contáctanos para personalizar tu itinerario ideal.
                </p>
            </div>

            <div class="row g-4">
                <?php foreach($destinations_list as $dest): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="destino-card">
                        <div class="destino-img-wrapper">
                            <img src="<?php echo $dest['image']; ?>" alt="<?php echo $dest['title']; ?>">
                            <span class="card-badge-tag"><?php echo $dest['badge']; ?></span>
                        </div>
                        <div class="destino-body">
                            <div>
                                <div class="destino-duration"><i class="bi bi-clock me-1"></i> <?php echo $dest['duration']; ?></div>
                                <h3 class="destino-title"><?php echo $dest['title']; ?></h3>
                                <div class="destino-sub"><?php echo $dest['sub']; ?></div>
                                <p class="destino-desc"><?php echo $dest['desc']; ?></p>
                            </div>
                            <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20<?php echo urlencode($dest['title']); ?>"
                               target="_blank"
                               class="btn-reserva-llama justify-content-center w-100">
                                <span>Cotizar Destino</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- FOOTER ANCHO COMPLETO -->
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
        });
    </script>
</body>
</html>
