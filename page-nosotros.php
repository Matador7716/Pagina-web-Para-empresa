<?php
// page-nosotros.php - Perú Safe Journeys
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

// Tabla de Personalidad de Marca
$brand_personality_table = [
    ['attribute' => 'Auténtica', 'feeling' => 'Perú real, cercano y con identidad.'],
    ['attribute' => 'Segura', 'feeling' => 'Organización, respaldo y confianza.'],
    ['attribute' => 'Premium', 'feeling' => 'Calidad, cuidado y sofisticación sin ostentación.'],
    ['attribute' => 'Cercana', 'feeling' => 'Atención humana y personalizada.'],
    ['attribute' => 'Aventurera', 'feeling' => 'Descubrimiento, emoción y exploración.'],
    ['attribute' => 'Contemporánea', 'feeling' => 'Una marca peruana moderna y relevante.']
];

// Galería creativa de imágenes
$about_gallery_images = [
    [
        'url' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'title' => 'Santuario Histórico de Machu Picchu',
        'subtitle' => 'Patrimonio de la Humanidad'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80',
        'title' => 'Montaña de Colores (Vinicunca)',
        'subtitle' => 'Paisajes Andinos Únicos'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80',
        'title' => 'Laguna Humantay',
        'subtitle' => 'Aguas Turquesas y Glaciares'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80',
        'title' => 'Turismo Vivencial en Valle Sagrado',
        'subtitle' => 'Comunidades & Tradición Ancestral'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80',
        'title' => 'Rutas de Aventura & ATVs',
        'badge' => 'Adrenalina',
        'subtitle' => 'Velocidad y Paisajes de Altura'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'title' => 'Circuito Ausangate & 7 Lagunas',
        'subtitle' => 'Glaciares & Naturaleza Virgen'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros – <?php echo $company_name; ?></title>

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

        /* NAVBAR HEADER */
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

        .llama-svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }

        /* BANNER HEADER */
        .page-header-banner {
            background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%);
            padding: 3.8rem 0 3.2rem;
            color: var(--color-blanco);
            text-align: center;
            border-bottom: 3px solid var(--color-naranja-journey);
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
            max-width: 820px;
            margin: 0.3rem auto 1.4rem auto;
            line-height: 1.6;
            font-weight: 400;
        }

        /* TARJETAS MISIÓN, VISIÓN Y VALORES */
        .mvv-card {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 2rem 1.6rem;
            border: 1px solid var(--color-gris-border);
            height: 100%;
            transition: all 0.3s ease;
        }

        .mvv-card:hover {
            border-color: var(--color-naranja-journey);
            transform: translateY(-5px);
            box-shadow: 0 16px 32px rgba(0, 34, 56, 0.08);
        }

        .mvv-icon-box {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            background: linear-gradient(135deg, rgba(233, 77, 0, 0.1) 0%, rgba(233, 77, 0, 0.05) 100%);
            color: var(--color-naranja-journey);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            margin-bottom: 1.2rem;
            border: 1px solid rgba(233, 77, 0, 0.2);
        }

        .mvv-card:hover .mvv-icon-box {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: #FFFFFF;
            border-color: var(--color-naranja-journey);
        }

        /* TABLA DE PERSONALIDAD DE MARCA */
        .brand-table-card {
            background: #FFFFFF;
            border-radius: 20px;
            border: 1px solid var(--color-gris-border);
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(0, 34, 56, 0.05);
        }

        .custom-brand-table {
            margin-bottom: 0;
            width: 100%;
        }

        .custom-brand-table thead {
            background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%);
            color: #FFFFFF;
        }

        .custom-brand-table th {
            padding: 1rem 1.5rem;
            font-size: 0.95rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            border: none;
        }

        .custom-brand-table td {
            padding: 1.1rem 1.5rem;
            font-size: 0.95rem;
            vertical-align: middle;
            border-bottom: 1px solid var(--color-gris-border);
        }

        .custom-brand-table tr:last-child td {
            border-bottom: none;
        }

        .custom-brand-table tr:hover {
            background-color: rgba(233, 77, 0, 0.03);
        }

        .attribute-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: #FFFFFF;
            font-weight: 700;
            font-size: 0.85rem;
            padding: 0.35rem 1rem;
            border-radius: 50px;
            text-transform: uppercase;
        }

        /* SECCIÓN DE POLÍTICA DE CANCELACIÓN Y REEMBOLSOS */
        .policy-section {
            background-color: #F8FAFC;
            padding: 4rem 0;
            border-top: 1px solid var(--color-gris-border);
            border-bottom: 1px solid var(--color-gris-border);
        }

        .policy-card {
            background: #FFFFFF;
            border-radius: 24px;
            border: 1px solid var(--color-gris-border);
            padding: 2.5rem;
            box-shadow: 0 16px 36px rgba(0, 34, 56, 0.06);
        }

        .policy-header-box {
            background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%);
            color: #FFFFFF;
            padding: 1.8rem;
            border-radius: 18px;
            margin-bottom: 2rem;
            border-left: 5px solid var(--color-naranja-journey);
        }

        .policy-title {
            font-size: 1.45rem;
            font-weight: 800;
            color: #FFFFFF;
            margin-bottom: 0.2rem;
            text-transform: uppercase;
        }

        .policy-subtitle {
            font-size: 0.9rem;
            color: var(--color-dorado-andino);
            font-weight: 600;
            margin-bottom: 0;
        }

        .policy-point-item {
            margin-bottom: 1.8rem;
            padding-bottom: 1.4rem;
            border-bottom: 1px solid var(--color-gris-border);
        }

        .policy-point-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .policy-point-title {
            font-size: 1.1rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .policy-point-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: rgba(233, 77, 0, 0.12);
            color: var(--color-naranja-journey);
            font-size: 0.85rem;
            font-weight: 800;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .policy-text {
            font-size: 0.94rem;
            color: #475569;
            line-height: 1.8;
            margin-bottom: 0.6rem;
        }

        .policy-list-bullet {
            list-style: none;
            padding-left: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .policy-list-bullet li {
            position: relative;
            font-size: 0.93rem;
            color: #334155;
            margin-bottom: 0.4rem;
            line-height: 1.7;
        }

        .policy-list-bullet li::before {
            content: '•';
            color: var(--color-naranja-journey);
            font-weight: 900;
            font-size: 1.2rem;
            position: absolute;
            left: -1rem;
            top: -2px;
        }

        .policy-notice-box {
            background-color: rgba(255, 184, 0, 0.12);
            border: 1px solid rgba(255, 184, 0, 0.4);
            border-radius: 14px;
            padding: 1.2rem 1.5rem;
            font-size: 0.88rem;
            color: #856404;
            margin-top: 1.8rem;
        }

        /* GALERÍA CREATIVA */
        .creative-gallery-section {
            background-color: #FFFFFF;
            padding: 3.5rem 0;
        }

        .creative-gallery-item {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            height: 260px;
            border: 1px solid var(--color-gris-border);
            transition: all 0.35s ease;
        }

        .creative-gallery-item img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .creative-gallery-item:hover img {
            transform: scale(1.08);
        }

        .creative-gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(180deg, transparent 0%, rgba(0, 18, 32, 0.92) 100%);
            padding: 1.2rem;
            color: #FFFFFF;
            transition: all 0.3s ease;
        }

        .creative-gallery-title {
            font-size: 1rem;
            font-weight: 800;
            color: #FFFFFF;
            margin-bottom: 0.2rem;
        }

        .creative-gallery-subtitle {
            font-size: 0.78rem;
            color: var(--color-dorado-andino);
            font-weight: 600;
            margin-bottom: 0;
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

        @media (max-width: 991.98px) {
            .navbar-custom { position: relative; top: 0; background: #FFFFFF; }
            .nav-link { color: var(--color-azul-peru-safe) !important; text-shadow: none; }
            .logo-img-header { height: 68px; }
            .policy-card { padding: 1.5rem; }
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

                <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20un%20viaje%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="topbar-btn-reserva">
                    <svg class="llama-svg" viewBox="0 0 512 512">
                        <path d="M224 96c0-26.5 21.5-48 48-48s48 21.5 48 48c0 14.7-6.6 27.8-17 36.7 18.2 16.5 29 40 29 65.3v24h16c35.3 0 64 28.7 64 64v16c0 17.7-14.3 32-32 32h-16v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-80h-32v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-96c0-44.2 35.8-80 80-80v-24c0-13.3-5.3-25.3-14-34.1-10.4-10.5-17-24.8-17-40.6zM272 80c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16z"/>
                    </svg>
                    <span>Reserva tu Viaje</span>
                </a>
            </div>
        </div>
    </div>

    <!-- NAVBAR HEADER -->
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
                        <a class="nav-link active" href="https://www.perusafejourneysgroup.com/nosotros/">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneysgroup.com/contacto/">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- BANNER HEADER -->
    <section class="page-header-banner">
        <div class="container-fluid px-3 px-lg-5">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">ESPECIALISTAS LOCALES EN PERÚ</span>
            <h1 class="display-5 fw-extrabold text-white">Nuestra Identidad & Filosofía</h1>
            <p class="fs-6 text-light max-w-700 mx-auto mb-0">Creamos viajes que van más allá del turismo convencional, conectando almas con la autenticidad del Perú.</p>
        </div>
    </section>

    <!-- SOBRE PERÚ SAFE JOURNEY - CONCEPTOS ENRIQUECIDOS -->
    <section class="py-5">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-7">
                    <span class="section-badge-clean">CONCEPTO DE MARCA</span>
                    <h2 class="section-title mb-3">Perú Safe Journeys: Tu camino hacia un Perú auténtico</h2>

                    <p class="fs-6 text-dark fw-medium mb-3" style="line-height: 1.8;">
                        <strong>Perú Safe Journeys – Travel Agency SAC</strong> es una agencia especializada en crear experiencias auténticas, seguras y personalizadas por el Perú. Diseñamos cada viaje pensando en que nuestros viajeros no solo conozcan destinos, sino que vivan la esencia de cada lugar, conectando con nuestras culturas, tradiciones, historia, gastronomía y extraordinarios paisajes.
                    </p>
                    <p class="text-secondary mb-3" style="line-height: 1.8;">
                        Desde la majestuosidad de <strong>Cusco y Machu Picchu</strong>, pasando por el Valle Sagrado, los Andes y la Amazonía, hasta las costas del Pacífico, acompañamos a nuestros viajeros con atención personalizada, planificación profesional, seguridad y confort en cada etapa de su aventura.
                    </p>
                    <p class="text-secondary mb-0" style="line-height: 1.8;">
                        Nuestro propósito es convertir cada viaje en una experiencia memorable, combinando la riqueza cultural del Perú con la confianza de viajar acompañado por especialistas locales.
                    </p>
                </div>

                <div class="col-lg-5">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80" alt="Machu Picchu Perú Safe Journeys" class="img-fluid rounded-4 shadow-lg w-100" style="border: 4px solid #FFFFFF;">
                    </div>
                </div>
            </div>

            <!-- SECCIÓN MISIÓN, VISIÓN Y VALORES -->
            <div class="my-5">
                <div class="text-center mb-4">
                    <span class="section-badge-clean">NUESTRO PROPÓSITO</span>
                    <h2 class="section-title">Misión, Visión y Valores</h2>
                    <p class="section-lead-concept">Los principios estratégicos que guían cada uno de nuestros itinerarios y atenciones en ruta.</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="mvv-card">
                            <div class="mvv-icon-box">
                                <i class="bi bi-compass-fill"></i>
                            </div>
                            <h3 class="fs-5 fw-bold text-dark mb-2">Misión</h3>
                            <p class="text-secondary small mb-0" style="line-height: 1.75;">
                                Diseñar e implementar experiencias turísticas memorables, auténticas y seguras en todo el Perú, promoviendo el desarrollo responsable, el respeto por las comunidades locales y el confort absoluto de cada viajero.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="mvv-card">
                            <div class="mvv-icon-box">
                                <i class="bi bi-eye-fill"></i>
                            </div>
                            <h3 class="fs-5 fw-bold text-dark mb-2">Visión</h3>
                            <p class="text-secondary small mb-0" style="line-height: 1.75;">
                                Ser la agencia de viajes peruana referente a nivel internacional por su excelencia operativa, autenticidad en la vivencia cultural, personalización de servicios y garantía total de seguridad y satisfacción.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="mvv-card">
                            <div class="mvv-icon-box">
                                <i class="bi bi-gem"></i>
                            </div>
                            <h3 class="fs-5 fw-bold text-dark mb-2">Valores</h3>
                            <p class="text-secondary small mb-0" style="line-height: 1.75;">
                                • <strong>Autenticidad:</strong> Vínculo real con la esencia del Perú.<br>
                                • <strong>Seguridad:</strong> Planificación responsable y respuesta inmediata.<br>
                                • <strong>Calidez:</strong> Atención humana, personalizada y cercana.<br>
                                • <strong>Excelencia:</strong> Servicio impecable en cada detalle.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TABLA DE PERSONALIDAD DE MARCA -->
            <div class="my-5">
                <div class="text-center mb-4">
                    <span class="section-badge-clean">IDENTIDAD DE MARCA</span>
                    <h2 class="section-title">Personalidad de Marca</h2>
                    <p class="section-lead-concept">Los pilares emotivos y profesionales que definen cómo se siente viajar con Perú Safe Journeys.</p>
                </div>

                <div class="brand-table-card mx-auto max-w-900">
                    <div class="table-responsive">
                        <table class="table custom-brand-table">
                            <thead>
                                <tr>
                                    <th style="width: 35%;">Atributo</th>
                                    <th style="width: 65%;">Cómo debe sentirse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($brand_personality_table as $row): ?>
                                    <tr>
                                        <td>
                                            <span class="attribute-badge"><?php echo $row['attribute']; ?></span>
                                        </td>
                                        <td class="fw-semibold text-dark">
                                            <?php echo $row['feeling']; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN POLÍTICA DE CANCELACIÓN Y REEMBOLSOS -->
    <section class="policy-section" id="politica-cancelacion">
        <div class="container-fluid px-3 px-lg-5">
            <div class="policy-card max-w-1000 mx-auto">

                <div class="policy-header-box">
                    <div class="policy-title">PERÚ SAFE JOURNEYS TRAVEL AGENCY SAC</div>
                    <div class="policy-subtitle">POLÍTICA DE CANCELACIÓN Y REEMBOLSOS (Versión para publicación en página web)</div>
                </div>

                <!-- PUNTO 1 -->
                <div class="policy-point-item">
                    <div class="policy-point-title">
                        <span class="policy-point-number">1</span>
                        <span>Alcance</span>
                    </div>
                    <p class="policy-text">
                        En PERÚ SAFE JOURNEYS TRAVEL AGENCY SAC sabemos que los planes de viaje pueden cambiar. Esta política establece las condiciones aplicables a las cancelaciones, reembolsos, modificaciones y reprogramaciones de los servicios turísticos contratados. Al confirmar una reserva, el cliente declara haber leído y aceptado estas condiciones, así como las condiciones particulares que correspondan a determinados servicios o proveedores.
                    </p>
                </div>

                <!-- PUNTO 2 -->
                <div class="policy-point-item">
                    <div class="policy-point-title">
                        <span class="policy-point-number">2</span>
                        <span>Cancelación por parte del cliente</span>
                    </div>
                    <p class="policy-text">
                        Cuando el cliente solicite la cancelación total o parcial de los servicios contratados, se aplicarán las siguientes penalidades según la anticipación con la que se reciba la solicitud:
                    </p>
                    <ul class="policy-list-bullet">
                        <li><strong>Más de 30 días de anticipación:</strong> penalidad del 35% del monto total de los servicios contratados.</li>
                        <li><strong>Entre 7 y 30 días de anticipación:</strong> penalidad del 45% del monto total de los servicios contratados.</li>
                        <li><strong>Menos de 7 días de anticipación:</strong> penalidad del 100% del monto total de los servicios contratados; no corresponderá reembolso.</li>
                    </ul>
                    <p class="policy-text">
                        La fecha considerada para determinar el plazo será la fecha en que PERÚ SAFE JOURNEYS reciba la solicitud de cancelación por un medio que permita dejar constancia de ella.
                    </p>
                </div>

                <!-- PUNTO 3 -->
                <div class="policy-point-item">
                    <div class="policy-point-title">
                        <span class="policy-point-number">3</span>
                        <span>Cancelaciones con más de 95 días de anticipación</span>
                    </div>
                    <p class="policy-text">
                        La documentación contractual actualmente utilizada por PERÚ SAFE JOURNEYS contempla expresamente una penalidad del 35% para cancelaciones realizadas con más de 30 y hasta 95 días de anticipación, pero no establece una condición específica para cancelaciones efectuadas con más de 95 días de anticipación. Por ello, esta situación deberá ser definida y comunicada expresamente en la cotización, contrato o confirmación de reserva correspondiente antes de publicar esta política como condición definitiva.
                    </p>
                </div>

                <!-- PUNTO 4 -->
                <div class="policy-point-item">
                    <div class="policy-point-title">
                        <span class="policy-point-number">4</span>
                        <span>Vuelos</span>
                    </div>
                    <p class="policy-text">
                        Los vuelos adquiridos a través de PERÚ SAFE JOURNEYS TRAVEL AGENCY SAC están sujetos a una penalidad del 100%, de acuerdo con las condiciones establecidas para dichos servicios. Asimismo, podrán aplicar las restricciones y condiciones particulares del proveedor o aerolínea correspondiente.
                    </p>
                </div>

                <!-- PUNTO 5 -->
                <div class="policy-point-item">
                    <div class="policy-point-title">
                        <span class="policy-point-number">5</span>
                        <span>Reembolsos</span>
                    </div>
                    <p class="policy-text">
                        Cuando, de acuerdo con las condiciones aplicables, corresponda realizar un reembolso, PERÚ SAFE JOURNEYS determinará el importe considerando el monto efectivamente pagado, las penalidades aplicables, los servicios ya emitidos, reservados o utilizados y las condiciones particulares de los proveedores.
                    </p>
                    <p class="policy-text">
                        El importe final del reembolso será comunicado al cliente una vez evaluada la solicitud y verificadas las condiciones de los servicios contratados.
                    </p>
                </div>

                <!-- PUNTO 6 -->
                <div class="policy-point-item">
                    <div class="policy-point-title">
                        <span class="policy-point-number">6</span>
                        <span>Servicios con condiciones particulares</span>
                    </div>
                    <p class="policy-text">
                        Algunos servicios pueden estar sujetos a condiciones específicas de cancelación, modificación o reembolso establecidas por sus respectivos proveedores. Esto puede incluir vuelos, trenes, alojamientos, entradas, boletos turísticos, traslados, tours, excursiones y otros servicios. Cuando existan condiciones particulares, estas deberán ser informadas al cliente antes o durante el proceso de contratación, según corresponda.
                    </p>
                </div>

                <!-- PUNTO 7 -->
                <div class="policy-point-item">
                    <div class="policy-point-title">
                        <span class="policy-point-number">7</span>
                        <span>Modificaciones y reprogramaciones</span>
                    </div>
                    <p class="policy-text">
                        Las solicitudes de cambio de fechas, destinos, actividades u otros servicios serán evaluadas previamente por PERÚ SAFE JOURNEYS y estarán sujetas a disponibilidad, condiciones del proveedor, diferencias tarifarias y posibles gastos o penalidades.
                    </p>
                    <p class="policy-text">
                        Ninguna modificación se considerará confirmada hasta que haya sido aceptada por la agencia y, cuando corresponda, por los proveedores involucrados.
                    </p>
                </div>

                <!-- PUNTO 8 -->
                <div class="policy-point-item">
                    <div class="policy-point-title">
                        <span class="policy-point-number">8</span>
                        <span>No presentación (No-Show)</span>
                    </div>
                    <p class="policy-text">
                        La no presentación del cliente a un servicio reservado, tour, traslado, alojamiento, transporte, actividad o cualquier otro servicio contratado será considerada una cancelación de último momento y podrá estar sujeta a una penalidad de hasta el 100%, dependiendo de las condiciones del servicio y del proveedor.
                    </p>
                    <p class="policy-text">
                        Cuando un proveedor establezca una condición específica de no-show, prevalecerá dicha condición, siempre que haya sido comunicada o forme parte de las condiciones aplicables a la reserva.
                    </p>
                </div>

                <!-- PUNTO 9 -->
                <div class="policy-point-item">
                    <div class="policy-point-title">
                        <span class="policy-point-number">9</span>
                        <span>Servicios parcialmente utilizados</span>
                    </div>
                    <p class="policy-text">
                        Una vez iniciado el viaje, los servicios no utilizados voluntariamente por el cliente, así como las actividades que el cliente decida omitir durante el programa, no generan automáticamente derecho a reembolso.
                    </p>
                    <p class="policy-text">
                        Cualquier solicitud relacionada con servicios parcialmente utilizados será evaluada de acuerdo con las condiciones del servicio y del proveedor correspondiente.
                    </p>
                </div>

                <!-- PUNTO 10 -->
                <div class="policy-point-item">
                    <div class="policy-point-title">
                        <span class="policy-point-number">10</span>
                        <span>Cancelaciones por circunstancias fuera del control de la agencia</span>
                    </div>
                    <p class="policy-text">
                        PERÚ SAFE JOURNEYS se compromete a gestionar los servicios contratados de manera diligente y profesional. Sin embargo, pueden presentarse circunstancias fuera del control directo de la agencia, tales como:
                    </p>
                    <ul class="policy-list-bullet">
                        <li>Condiciones meteorológicas adversas.</li>
                        <li>Huelgas, paralizaciones o bloqueos.</li>
                        <li>Cancelaciones o modificaciones de vuelos.</li>
                        <li>Cancelaciones, cambios o interrupciones de servicios por parte de proveedores.</li>
                        <li>Otras circunstancias externas que puedan afectar la prestación de los servicios.</li>
                    </ul>
                    <p class="policy-text">
                        En estas situaciones, la agencia comunicará al cliente la situación y las alternativas disponibles, de acuerdo con las condiciones y políticas de los proveedores correspondientes.
                    </p>
                </div>

                <!-- PUNTO 11 -->
                <div class="policy-point-item">
                    <div class="policy-point-title">
                        <span class="policy-point-number">11</span>
                        <span>Seguro de viaje</span>
                    </div>
                    <p class="policy-text">
                        PERÚ SAFE JOURNEYS recomienda contratar un seguro de viaje que incluya cobertura para cancelación o interrupción del viaje, accidentes, problemas de salud, pérdida o demora de equipaje y otros imprevistos.
                    </p>
                    <p class="policy-text">
                        Salvo que se indique expresamente lo contrario en el programa o contrato de servicios, la contratación y responsabilidad del seguro de viaje corresponde al cliente.
                    </p>
                </div>

                <!-- PUNTO 12 -->
                <div class="policy-point-item">
                    <div class="policy-point-title">
                        <span class="policy-point-number">12</span>
                        <span>Procedimiento para solicitar una cancelación</span>
                    </div>
                    <ul class="policy-list-bullet">
                        <li>Enviar la solicitud de cancelación por un medio que permita dejar constancia.</li>
                        <li>Indicar los datos de la reserva y los servicios que se desean cancelar.</li>
                        <li>La agencia verificará la fecha de recepción de la solicitud y las condiciones aplicables.</li>
                        <li>Se informará al cliente la penalidad correspondiente y, de existir, el importe estimado del reembolso.</li>
                        <li>El reembolso, cuando corresponda, será gestionado conforme a las condiciones aplicables a la reserva.</li>
                    </ul>
                </div>

                <!-- PUNTO 13 -->
                <div class="policy-point-item">
                    <div class="policy-point-title">
                        <span class="policy-point-number">13</span>
                        <span>Aceptación</span>
                    </div>
                    <p class="policy-text">
                        La confirmación y/o pago de una reserva implica que el cliente declara haber leído, comprendido y aceptado esta Política de Cancelación y Reembolsos, además de las condiciones particulares indicadas en su cotización, contrato, voucher o confirmación de servicios.
                    </p>
                </div>

                <!-- PUNTO 14 -->
                <div class="policy-point-item">
                    <div class="policy-point-title">
                        <span class="policy-point-number">14</span>
                        <span>Información de la empresa</span>
                    </div>
                    <p class="policy-text fw-bold text-dark mb-1">PERÚ SAFE JOURNEYS TRAVEL AGENCY SAC</p>
                    <p class="policy-text mb-1"><strong>RUC:</strong> 20613753258</p>
                    <p class="policy-text mb-0">Cusco – Perú</p>
                </div>

                <!-- NOTA IMPORTANTE -->
                <div class="policy-notice-box">
                    <strong><i class="bi bi-exclamation-triangle-fill me-1"></i> IMPORTANTE PARA PUBLICACIÓN:</strong><br>
                    Antes de publicar esta política como versión definitiva, recomendamos completar la condición para cancelaciones con más de 95 días de anticipación y validar jurídicamente las cláusulas de no-show, servicios parcialmente utilizados y circunstancias fuera del control de la agencia.
                </div>

            </div>
        </div>
    </section>

    <!-- GALERÍA CREATIVA EN EL PIE DE LOS DATOS -->
    <section class="creative-gallery-section">
        <div class="container-fluid px-3 px-lg-5">
            <div class="text-center mb-4">
                <span class="section-badge-clean">INSPIRACIÓN VISUAL</span>
                <h2 class="section-title">Descubre el Perú a Través de Nuestras Rutas</h2>
                <p class="section-lead-concept">Un vistazo a los paisajes sobrecogedores y vivencias culturales que te esperan en cada uno de nuestros itinerarios.</p>
            </div>

            <div class="row g-4">
                <?php foreach($about_gallery_images as $gImg): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="creative-gallery-item">
                            <img src="<?php echo $gImg['url']; ?>" alt="<?php echo $gImg['title']; ?>" loading="lazy">
                            <div class="creative-gallery-overlay">
                                <h4 class="creative-gallery-title"><?php echo $gImg['title']; ?></h4>
                                <p class="creative-gallery-subtitle"><?php echo $gImg['subtitle']; ?></p>
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
</body>
</html>
