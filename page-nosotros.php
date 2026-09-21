<?php
// page-nosotros.php - Perú Safe Journeys
$company_name = "Perú Safe Journeys";
$company_tagline = "Travel Agency";
$phone_number = "+51 948 364 822";
$phone_clean = "51948364822";
$email_address = "informes-web@perusafejourneys.com";
$current_year = date('Y');

// Pilares / Esencia
$essences = [
    [
        'icon' => 'bi-shield-check',
        'title' => 'SEGURIDAD',
        'desc' => 'Planificamos cada experiencia pensando en la tranquilidad de nuestros viajeros.',
        'badge' => 'Tranquilidad Total'
    ],
    [
        'icon' => 'bi-hand-thumbs-up',
        'title' => 'CONFIANZA',
        'desc' => 'Acompañamos a nuestros clientes antes, durante y después de su viaje.',
        'badge' => 'Acompañamiento 24/7'
    ],
    [
        'icon' => 'bi-heart-pulse',
        'title' => 'AUTENTICIDAD',
        'desc' => 'Buscamos que cada experiencia tenga una conexión real con el destino y su cultura.',
        'badge' => 'Esencia Peruana'
    ],
    [
        'icon' => 'bi-sliders',
        'title' => 'PERSONALIZACIÓN',
        'desc' => 'Cada viajero es diferente. Adaptamos nuestras propuestas a sus intereses, tiempo y estilo de viaje.',
        'badge' => 'A tu medida'
    ],
    [
        'icon' => 'bi-tree',
        'title' => 'CONEXIÓN',
        'desc' => 'Creamos oportunidades para descubrir la naturaleza, las comunidades, la cultura y la historia del Perú.',
        'badge' => 'Cultura & Naturaleza'
    ],
    [
        'icon' => 'bi-award',
        'title' => 'CALIDAD',
        'desc' => 'Cuidamos los detalles para ofrecer experiencias organizadas, cómodas y memorables.',
        'badge' => 'Excelencia'
    ]
];

// ¿Qué hacemos?
$what_we_do = [
    [
        'icon' => 'bi-bank',
        'title' => 'CULTURA & HISTORIA',
        'desc' => 'Descubre las antiguas civilizaciones, tradiciones y ciudades históricas que forman parte de la identidad peruana.',
        'img' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'icon' => 'bi-compass',
        'title' => 'AVENTURA & TREKKING',
        'desc' => 'Explora los Andes, recorre caminos ancestrales y disfruta de paisajes extraordinarios.',
        'img' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'icon' => 'bi-gem',
        'title' => 'MACHU PICCHU & MUNDO INCA',
        'desc' => 'Vive experiencias alrededor de Cusco, Machu Picchu y el legado de la civilización Inca.',
        'img' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'icon' => 'bi-tree-fill',
        'title' => 'NATURALEZA',
        'desc' => 'Conecta con los extraordinarios ecosistemas del Perú, desde los Andes hasta la Amazonía.',
        'img' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'icon' => 'bi-cup-hot-fill',
        'title' => 'GASTRONOMÍA',
        'desc' => 'Descubre un país a través de sus sabores, ingredientes y tradiciones culinarias.',
        'img' => 'https://images.unsplash.com/photo-1531968455001-5c5272a41129?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'icon' => 'bi-people-fill',
        'title' => 'VIAJES EN FAMILIA',
        'desc' => 'Creamos experiencias para compartir momentos especiales y descubrir el Perú juntos.',
        'img' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'icon' => 'bi-heart-fill',
        'title' => 'VIAJES EN PAREJA',
        'desc' => 'Experiencias diseñadas para aniversarios, lunas de miel, escapadas y momentos especiales.',
        'img' => 'https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'icon' => 'bi-gear-wide-connected',
        'title' => 'VIAJES PERSONALIZADOS',
        'desc' => '¿Tienes una idea diferente? Diseñamos un programa adaptado a tus intereses, fechas y presupuesto.',
        'img' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=600&q=80'
    ]
];

// Destinos resumen
$destinos = [
    [
        'name' => 'MACHU PICCHU',
        'sub' => 'El misterio que vive entre las montañas.',
        'desc' => 'Una experiencia imprescindible para descubrir la grandeza del mundo Inca.',
        'badge' => '🏛️ Maravilla del Mundo'
    ],
    [
        'name' => 'CUSCO',
        'sub' => 'Donde cada calle cuenta una historia.',
        'desc' => 'La antigua capital del Imperio Inca y uno de los destinos culturales más fascinantes de Sudamérica.',
        'badge' => '🏔️ Capital Inca'
    ],
    [
        'name' => 'VALLE SAGRADO',
        'sub' => 'Un viaje entre montañas, historia y tradición.',
        'desc' => 'Paisajes, comunidades y vestigios arqueológicos que mantienen viva la esencia andina.',
        'badge' => '🌄 Mística & Naturaleza'
    ],
    [
        'name' => 'ANDES PERUANOS',
        'sub' => 'Camina hacia nuevas perspectivas.',
        'desc' => 'Montañas, caminos ancestrales y aventuras para quienes buscan descubrir el Perú de una manera diferente.',
        'badge' => '🏔️ Aventura & Caminos'
    ],
    [
        'name' => 'AMAZONÍA',
        'sub' => 'Donde la naturaleza escribe su propia historia.',
        'desc' => 'Una experiencia de biodiversidad, aventura y conexión con la naturaleza.',
        'badge' => '🌿 Selva Viva'
    ],
    [
        'name' => 'LIMA & COSTA PERUANA',
        'sub' => 'Sabores, cultura y paisajes frente al Pacífico.',
        'desc' => 'Descubre la capital peruana y los extraordinarios paisajes de nuestra costa.',
        'badge' => '🌊 Océano & Gastronomía'
    ]
];

// Razones
$reasons = [
    ['title' => 'VIAJA CON TRANQUILIDAD', 'desc' => 'Nos preocupamos por la organización y coordinación de tu experiencia.', 'icon' => 'bi-shield-check'],
    ['title' => 'ATENCIÓN PERSONALIZADA', 'desc' => 'Escuchamos tus necesidades para ayudarte a encontrar el viaje adecuado.', 'icon' => 'bi-headset'],
    ['title' => 'CONOCIMIENTO LOCAL', 'desc' => 'Conocemos los destinos y las experiencias que hacen especial cada recorrido.', 'icon' => 'bi-geo-alt-fill'],
    ['title' => 'EXPERIENCIAS AUTÉNTICAS', 'desc' => 'Queremos que conozcas el Perú más allá de los lugares tradicionales.', 'icon' => 'bi-stars'],
    ['title' => 'PROGRAMAS FLEXIBLES', 'desc' => 'Podemos adaptar las experiencias según tus días, intereses y estilo de viaje.', 'icon' => 'bi-calendar-event'],
    ['title' => 'ACOMPAÑAMIENTO', 'desc' => 'Estamos disponibles para ayudarte durante las diferentes etapas de tu aventura.', 'icon' => 'bi-heart-fill']
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - <?php echo $company_name; ?></title>

    <!-- Google Fonts: Plus Jakarta Sans & Playfair Display / Caveat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600&family=Caveat:wght@600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        :root {
            --color-naranja: #FF6B00;
            --color-naranja-hover: #E05A00;
            --color-naranja-glow: rgba(255, 107, 0, 0.35);
            --color-blanco: #FFFFFF;
            --color-azul-oscuro: #0B1B3D;
            --color-azul-card: #0F234D;
            --color-topbar: #07122A;
            --color-texto-oscuro: #1E293B;
            --color-texto-suave: #64748B;
            --color-gris-bg: #F8FAFC;
            --color-gris-border: #E2E8F0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--color-blanco);
            color: var(--color-texto-oscuro);
            overflow-x: hidden;
        }

        /* TopBar Superior */
        .top-bar {
            background-color: var(--color-topbar);
            font-size: 0.88rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            z-index: 1040;
            position: relative;
        }

        .top-bar a {
            color: #CBD5E1;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .top-bar a:hover {
            color: var(--color-naranja);
        }

        /* Sticky Navigation Bar */
        .navbar-custom {
            background-color: rgba(11, 27, 61, 0.95);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            transition: all 0.4s ease;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .navbar-custom.scrolled {
            background-color: rgba(7, 18, 42, 0.98);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .navbar-brand-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .logo-icon-box {
            width: 44px;
            height: 44px;
            background: linear-gradient(135deg, var(--color-naranja), #FF8800);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px var(--color-naranja-glow);
        }

        .brand-text {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 1.4rem;
            color: var(--color-blanco);
            line-height: 1.1;
            letter-spacing: -0.5px;
        }

        .brand-text span {
            color: var(--color-naranja);
            display: block;
            font-size: 0.65rem;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .nav-link {
            color: var(--color-blanco) !important;
            font-weight: 600;
            font-size: 0.92rem;
            padding: 0.5rem 1rem !important;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0%;
            height: 2px;
            background-color: var(--color-naranja);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 70%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--color-naranja) !important;
        }

        /* Botón Llama */
        .btn-reserva-llama {
            background-color: var(--color-naranja);
            color: var(--color-blanco) !important;
            font-weight: 700;
            border-radius: 50px;
            padding: 0.65rem 1.6rem;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            box-shadow: 0 4px 18px var(--color-naranja-glow);
            border: 2px solid transparent;
        }

        .btn-reserva-llama:hover {
            background-color: var(--color-naranja-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 0, 0.5);
            color: var(--color-blanco);
        }

        .llama-svg {
            width: 22px;
            height: 22px;
            fill: currentColor;
            transition: transform 0.3s ease;
        }

        .btn-reserva-llama:hover .llama-svg {
            transform: scale(1.15) rotate(-8deg);
        }

        /* Hero Banner Section */
        .hero-banner-nosotros {
            position: relative;
            padding: 8.5rem 0 6.5rem;
            background: linear-gradient(180deg, rgba(7, 18, 42, 0.88) 0%, rgba(11, 27, 61, 0.94) 100%),
                        url('https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            color: var(--color-blanco);
            text-align: center;
            overflow: hidden;
        }

        .nosotros-hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 3.8rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 1.2rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .nosotros-hero-title span {
            color: var(--color-naranja);
            font-family: 'Caveat', cursive;
            font-size: 4.5rem;
            display: block;
            margin-top: -0.5rem;
        }

        .nosotros-hero-subtitle {
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
            background-color: rgba(255, 107, 0, 0.12);
            color: var(--color-naranja);
            font-weight: 800;
            font-size: 0.85rem;
            padding: 0.4rem 1.2rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 1rem;
            border: 1px solid rgba(255, 107, 0, 0.3);
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 800;
            color: var(--color-azul-oscuro);
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        /* Card Styling & Hover Effects */
        .glass-card {
            background: var(--color-blanco);
            border-radius: 20px;
            border: 1px solid var(--color-gris-border);
            padding: 2.2rem;
            box-shadow: 0 10px 30px rgba(11, 27, 61, 0.05);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--color-naranja), #FF8800);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .glass-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(11, 27, 61, 0.12);
            border-color: rgba(255, 107, 0, 0.4);
        }

        .glass-card:hover::before {
            opacity: 1;
        }

        .card-icon-box {
            width: 60px;
            height: 60px;
            background: rgba(255, 107, 0, 0.1);
            color: var(--color-naranja);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 1.4rem;
            transition: all 0.3s ease;
        }

        .glass-card:hover .card-icon-box {
            background: var(--color-naranja);
            color: var(--color-blanco);
            transform: scale(1.08) rotate(-4deg);
            box-shadow: 0 8px 20px var(--color-naranja-glow);
        }

        /* Sección Esencia / Pilares */
        .essences-section {
            background-color: var(--color-gris-bg);
            padding: 5.5rem 0;
        }

        /* Misión & Visión Dark Banner */
        .mission-vision-section {
            background: linear-gradient(135deg, var(--color-topbar) 0%, var(--color-azul-oscuro) 100%);
            color: var(--color-blanco);
            padding: 6rem 0;
            position: relative;
        }

        .dark-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            padding: 3rem 2.5rem;
            transition: all 0.3s ease;
        }

        .dark-card:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--color-naranja);
            transform: translateY(-5px);
        }

        /* What We Do Image Cards */
        .what-card {
            border-radius: 20px;
            overflow: hidden;
            background: var(--color-blanco);
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 10px 25px rgba(11, 27, 61, 0.06);
            transition: all 0.4s ease;
            height: 100%;
        }

        .what-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 35px rgba(255, 107, 0, 0.15);
            border-color: var(--color-naranja);
        }

        .what-img-wrapper {
            position: relative;
            height: 180px;
            overflow: hidden;
        }

        .what-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .what-card:hover .what-img-wrapper img {
            transform: scale(1.1);
        }

        .what-card-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(11, 27, 61, 0.85);
            color: var(--color-blanco);
            padding: 0.3rem 0.8rem;
            border-radius: 30px;
            font-size: 0.75rem;
            font-weight: 700;
        }

        /* Destinos Highlight Grid */
        .destino-pill-card {
            background: var(--color-blanco);
            border-radius: 18px;
            padding: 1.8rem;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 8px 20px rgba(11, 27, 61, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }

        .destino-pill-card:hover {
            border-color: var(--color-naranja);
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(255, 107, 0, 0.12);
        }

        /* Call To Action Final */
        .cta-nosotros-section {
            background: linear-gradient(135deg, var(--color-azul-oscuro) 0%, #07122A 100%);
            color: var(--color-blanco);
            padding: 6.5rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-nosotros-title {
            font-family: 'Playfair Display', serif;
            font-size: 3.2rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
        }

        /* Footer */
        .footer-custom {
            background-color: #040A18;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding-top: 4rem;
            padding-bottom: 2rem;
            font-size: 0.95rem;
            color: #CBD5E1;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--color-blanco);
            margin-bottom: 1.2rem;
            display: inline-block;
            text-decoration: none;
        }

        .footer-logo span {
            color: var(--color-naranja);
        }

        .footer-contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 1rem;
            color: #94A3B8;
        }

        .footer-contact-icon {
            width: 38px;
            height: 38px;
            background-color: rgba(255, 255, 255, 0.06);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-naranja);
            font-size: 1.1rem;
        }

        .footer-contact-item a {
            color: #E2E8F0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-contact-item a:hover {
            color: var(--color-naranja);
        }

        .footer-heading {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--color-blanco);
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 35px;
            height: 2px;
            background-color: var(--color-naranja);
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: #94A3B8;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .footer-links a:hover {
            color: var(--color-naranja);
            transform: translateX(4px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.06);
            margin-top: 3.5rem;
            padding-top: 1.8rem;
            text-align: center;
            color: #94A3B8;
            font-size: 0.88rem;
        }

        /* Botón Flotante de WhatsApp */
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
    </style>
</head>
<body>

    <!-- 1. HEADER -->
    <!-- Top Bar -->
    <div class="top-bar py-2">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="d-flex align-items-center gap-4 flex-wrap">
                <a href="tel:<?php echo $phone_clean; ?>" class="d-flex align-items-center gap-2">
                    <i class="bi bi-telephone-fill text-warning"></i>
                    <span><?php echo $phone_number; ?></span>
                </a>
                <a href="mailto:<?php echo $email_address; ?>" class="d-flex align-items-center gap-2">
                    <i class="bi bi-envelope-fill text-warning"></i>
                    <span><?php echo $email_address; ?></span>
                </a>
            </div>
            <div class="d-none d-md-flex align-items-center gap-3 text-muted">
                <small class="text-light"><i class="bi bi-shield-check text-warning me-1"></i> Agencia Oficial Certificada</small>
            </div>
        </div>
    </div>

    <!-- Menú Pegajoso (Sticky Navbar) -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-custom py-3">
        <div class="container">
            <!-- Imagen / Logo -->
            <a class="navbar-brand-logo" href="page-inicio.php">
                <div class="logo-icon-box">
                    <i class="bi bi-compass text-white fs-4"></i>
                </div>
                <div class="brand-text">
                    Perú Safe Journeys
                    <span>Travel Agency</span>
                </div>
            </a>

            <!-- Toggle Mobile -->
            <button class="navbar-toggler text-white border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-1 text-white"></i>
            </button>

            <!-- Menú Links & Botón Llama -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="page-inicio.php#inicio">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-destinos.php">DESTINOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-experiencias.php">EXPERIENCIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-programas.php">PROGRAMAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="page-nosotros.php">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-inicio.php#contacto">CONTACTO</a>
                    </li>
                </ul>

                <!-- BOTON "Reserva tu Viaje" con icono llamita -->
                <div class="text-center text-lg-end mt-3 mt-lg-0">
                    <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20reservar%20un%20viaje%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="btn-reserva-llama">
                        <svg class="llama-svg" viewBox="0 0 512 512">
                            <path d="M224 96c0-26.5 21.5-48 48-48s48 21.5 48 48c0 14.7-6.6 27.8-17 36.7 18.2 16.5 29 40 29 65.3v24h16c35.3 0 64 28.7 64 64v16c0 17.7-14.3 32-32 32h-16v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-80h-32v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-96c0-44.2 35.8-80 80-80v-24c0-13.3-5.3-25.3-14-34.1-10.4-10.5-17-24.8-17-40.6zM272 80c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16z"/>
                        </svg>
                        <span>Reserva tu Viaje</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>


    <!-- HERO BANNER NOSOTROS -->
    <header class="hero-banner-nosotros">
        <div class="container animate__animated animate__fadeIn">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3 fs-6">
                🇵🇪 PERÚ SAFE JOURNEYS | Travel Agency
            </span>
            <h1 class="nosotros-hero-title">
                Viaja seguro. Vive auténticamente.
                <span>Descubre el Perú.</span>
            </h1>
            <p class="nosotros-hero-subtitle">
                Diseñamos experiencias personalizadas con la seguridad, confort y la profunda conexión cultural que mereces.
            </p>
        </div>
    </header>


    <!-- SOBRE NOSOTROS -->
    <section class="py-5 bg-white" id="sobre-nosotros">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <span class="section-badge">🌎 SOBRE NOSOTROS</span>
                    <h2 class="section-title">Tu camino hacia un Perú auténtico</h2>
                    <p class="fs-5 text-secondary lead mb-4">
                        <strong>Perú Safe Journeys – Travel Agency</strong> es una agencia especializada en crear experiencias auténticas, seguras y personalizadas por el Perú.
                    </p>
                    <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                        Diseñamos cada viaje pensando en que nuestros viajeros no solo conozcan destinos, sino que <strong>vivan la esencia de cada lugar</strong>, conectando con nuestras culturas, tradiciones, historia, gastronomía y extraordinarios paisajes.
                    </p>
                    <p class="text-secondary" style="line-height: 1.8; font-size: 1.05rem;">
                        Desde la majestuosidad de <strong>Cusco y Machu Picchu</strong>, pasando por el mágico <strong>Valle Sagrado, los Andes y la Amazonía</strong>, hasta las costas del Pacífico, acompañamos a nuestros viajeros con atención personalizada, planificación profesional, seguridad y confort en cada etapa de su aventura.
                    </p>
                    <div class="p-4 rounded-4 my-4" style="background: rgba(255, 107, 0, 0.08); border-left: 5px solid var(--color-naranja);">
                        <h4 class="fw-bold mb-1" style="color: var(--color-azul-oscuro); font-family: 'Playfair Display', serif;">
                            ❤️ No solo organizamos viajes.
                        </h4>
                        <p class="fw-bold fs-5 text-warning mb-0" style="color: var(--color-naranja) !important;">
                            Creamos historias para recordar.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80" alt="Machu Picchu Safe Journeys" class="img-fluid rounded-5 shadow-lg">
                        <div class="position-absolute bottom-0 start-0 m-4 p-4 rounded-4 text-white shadow-lg d-none d-md-block" style="background: rgba(11, 27, 61, 0.9); backdrop-filter: blur(10px); max-width: 320px; border: 1px solid rgba(255, 107, 0, 0.4);">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-stars text-warning fs-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-0">Especialistas Locales</h6>
                                    <small class="text-light">Confianza y planificación profesional en todo momento.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- NUESTRA ESENCIA / PILARES -->
    <section class="essences-section">
        <div class="container">
            <div class="text-center max-w-700 mx-auto mb-5">
                <span class="section-badge">✨ NUESTRA ESENCIA</span>
                <h2 class="section-title">El significado de viajar con nosotros</h2>
                <p class="text-secondary fs-5">
                    Un verdadero viaje comienza cuando descubres una nueva cultura, pruebes un sabor diferente, contemplas un paisaje por primera vez y compartes momentos únicos.
                </p>
            </div>

            <div class="row g-4">
                <?php foreach($essences as $item): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="glass-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="card-icon-box">
                                <i class="bi <?php echo $item['icon']; ?>"></i>
                            </div>
                            <span class="badge bg-light text-dark border px-3 py-1 rounded-pill fw-bold" style="font-size: 0.75rem;">
                                <?php echo $item['badge']; ?>
                            </span>
                        </div>
                        <h3 class="fw-bold fs-4 mb-2" style="color: var(--color-azul-oscuro);"><?php echo $item['title']; ?></h3>
                        <p class="text-secondary mb-0" style="line-height: 1.7;"><?php echo $item['desc']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- MISIÓN & VISIÓN -->
    <section class="mission-vision-section">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <!-- MISIÓN -->
                <div class="col-lg-6">
                    <div class="dark-card h-100">
                        <span class="badge bg-warning text-dark fw-bold px-3 py-1 rounded-pill mb-3">🎯 NUESTRA MISIÓN</span>
                        <h3 class="font-playfair fw-bold fs-2 text-white mb-3">Conectar y Transformar</h3>
                        <p class="text-light fs-5 mb-4" style="line-height: 1.8;">
                            Diseñar y brindar experiencias turísticas auténticas, seguras y personalizadas en el Perú, ofreciendo a nuestros viajeros atención profesional, confianza y acompañamiento durante cada etapa de su viaje.
                        </p>
                        <p class="text-secondary mb-4">
                            Buscamos conectar a cada visitante con la riqueza cultural, histórica, gastronómica y natural del Perú, promoviendo una forma de viajar responsable, cercana y memorable.
                        </p>
                        <div class="p-3 rounded-3" style="background: rgba(255, 107, 0, 0.15); border-left: 4px solid var(--color-naranja);">
                            <p class="fw-bold mb-0 text-white">
                                "Nuestra misión es que cada viajero llegue como visitante y se vaya con una historia que contar."
                            </p>
                        </div>
                    </div>
                </div>

                <!-- VISIÓN -->
                <div class="col-lg-6">
                    <div class="dark-card h-100">
                        <span class="badge bg-info text-dark fw-bold px-3 py-1 rounded-pill mb-3">🔭 NUESTRA VISIÓN</span>
                        <h3 class="font-playfair fw-bold fs-2 text-white mb-3">Liderar con Excelencia</h3>
                        <p class="text-light fs-5 mb-4" style="line-height: 1.8;">
                            Ser una agencia de viajes reconocida nacional e internacionalmente por crear experiencias auténticas, confiables y memorables en el Perú, convirtiéndonos en un referente del turismo personalizado y responsable.
                        </p>
                        <p class="text-secondary mb-4">
                            Queremos crecer junto a nuestros viajeros, nuestros colaboradores y las comunidades locales, promoviendo un turismo que valore y contribuya a preservar la riqueza cultural y natural de nuestro país.
                        </p>
                        <div class="p-3 rounded-3" style="background: rgba(255, 107, 0, 0.15); border-left: 4px solid var(--color-naranja);">
                            <p class="fw-bold mb-0 text-white">
                                "Nuestra visión es llevar la esencia del Perú al mundo a través de experiencias que inspiren, conecten y perduren."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- NUESTRO PROPÓSITO -->
    <section class="py-5 bg-white">
        <div class="container py-4 text-center">
            <span class="section-badge">💛 NUESTRO PROPÓSITO</span>
            <h2 class="section-title max-w-800 mx-auto mb-4">
                Hacer que descubrir el Perú sea una experiencia que quieras recordar para siempre.
            </h2>
            <p class="text-secondary fs-5 max-w-700 mx-auto mb-5">
                Cada persona viaja por una razón diferente. Algunos buscan aventura, cultura, desconexión, momentos especiales o cumplir el sueño de conocer Machu Picchu. Nosotros estamos aquí para transformar esos sueños en experiencias reales.
            </p>

            <div class="row g-3 justify-content-center">
                <div class="col-md-2 col-6"><div class="p-3 bg-light rounded-4 fw-bold border text-dark">🏔️ Aventura</div></div>
                <div class="col-md-2 col-6"><div class="p-3 bg-light rounded-4 fw-bold border text-dark">🏛️ Cultura</div></div>
                <div class="col-md-2 col-6"><div class="p-3 bg-light rounded-4 fw-bold border text-dark">🌿 Desconexión</div></div>
                <div class="col-md-2 col-6"><div class="p-3 bg-light rounded-4 fw-bold border text-dark">❤️ Compartir</div></div>
                <div class="col-md-3 col-12"><div class="p-3 bg-warning text-dark rounded-4 fw-bold border">✨ Cumplir Sueños</div></div>
            </div>
        </div>
    </section>


    <!-- ¿QUÉ HACEMOS? -->
    <section class="py-5" style="background-color: var(--color-gris-bg);">
        <div class="container">
            <div class="text-center max-w-700 mx-auto mb-5">
                <span class="section-badge">🗺️ ¿QUÉ HACEMOS?</span>
                <h2 class="section-title">Experiencias para cada estilo de viajero</h2>
                <p class="text-secondary fs-5">Diseñamos y operamos programas turísticos adaptados a tus expectativas.</p>
            </div>

            <div class="row g-4">
                <?php foreach($what_we_do as $item): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="what-card">
                        <div class="what-img-wrapper">
                            <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
                            <span class="what-card-badge"><i class="bi <?php echo $item['icon']; ?> me-1"></i> Experiencia</span>
                        </div>
                        <div class="p-4">
                            <h4 class="fw-bold fs-5 mb-2" style="color: var(--color-azul-oscuro);"><?php echo $item['title']; ?></h4>
                            <p class="text-secondary small mb-0" style="line-height: 1.6;"><?php echo $item['desc']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- NUESTROS DESTINOS DESTACADOS -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center max-w-700 mx-auto mb-5">
                <span class="section-badge">🏔️ NUESTROS DESTINOS</span>
                <h2 class="section-title">Los mejores rincones del Perú te esperan</h2>
            </div>

            <div class="row g-4">
                <?php foreach($destinos as $dest): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="destino-pill-card">
                        <span class="badge bg-light text-dark border mb-2"><?php echo $dest['badge']; ?></span>
                        <h3 class="fw-bold fs-4 mb-1" style="color: var(--color-azul-oscuro);"><?php echo $dest['name']; ?></h3>
                        <p class="fw-bold text-warning mb-2" style="color: var(--color-naranja) !important; font-size: 0.95rem;"><?php echo $dest['sub']; ?></p>
                        <p class="text-secondary small mb-3"><?php echo $dest['desc']; ?></p>
                        <a href="page-destinos.php" class="fw-bold text-decoration-none small" style="color: var(--color-azul-oscuro);">
                            Explorar destino <i class="bi bi-arrow-right text-warning ms-1"></i>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- NUESTRA PROMESA & POR QUÉ ELEGIRNOS -->
    <section class="py-5" style="background-color: var(--color-topbar); color: var(--color-blanco);">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <span class="badge bg-warning text-dark fw-bold px-3 py-1 rounded-pill mb-3">🌟 NUESTRA PROMESA</span>
                    <h2 class="font-playfair fw-bold fs-1 text-white mb-4">
                        Sentirte acompañado hace toda la diferencia
                    </h2>
                    <p class="text-light lead mb-4">
                        Cuando eliges <strong>Perú Safe Journeys</strong>, no eliges simplemente un itinerario. Eliges un equipo que se preocupa por tu experiencia.
                    </p>
                    <ul class="list-unstyled text-light fs-5">
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-warning me-2"></i> Te ayudamos a planificar.</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-warning me-2"></i> Te acompañamos durante el viaje.</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-warning me-2"></i> Cuidamos cada detalle.</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-warning me-2"></i> Estamos contigo en cada etapa.</li>
                    </ul>
                </div>

                <div class="col-lg-7">
                    <div class="row g-3">
                        <?php foreach($reasons as $reason): ?>
                        <div class="col-md-6">
                            <div class="p-4 rounded-4" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1);">
                                <i class="bi <?php echo $reason['icon']; ?> fs-2 text-warning mb-2 d-block"></i>
                                <h5 class="fw-bold text-white mb-2"><?php echo $reason['title']; ?></h5>
                                <small class="text-light" style="line-height: 1.6; display: block;"><?php echo $reason['desc']; ?></small>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- TURISMO CON CONEXIÓN -->
    <section class="py-5 bg-white text-center">
        <div class="container py-4">
            <span class="section-badge">🤝 TURISMO CON CONEXIÓN</span>
            <h2 class="section-title max-w-800 mx-auto mb-4">
                Viajar también es aprender, conectar y cuidar.
            </h2>
            <p class="text-secondary fs-5 max-w-800 mx-auto mb-4" style="line-height: 1.8;">
                Creemos en un turismo que permita al viajero descubrir el Perú mientras se conecta de manera respetuosa con nuestras comunidades, culturas y espacios naturales. Queremos que cada experiencia genere recuerdos memorables y contribuya a valorar lo que hace único a nuestro país.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <span class="badge bg-light text-dark border px-4 py-2 rounded-pill fs-6">🌱 Turismo Responsable</span>
                <span class="badge bg-light text-dark border px-4 py-2 rounded-pill fs-6">👥 Respeto Comunitario</span>
                <span class="badge bg-light text-dark border px-4 py-2 rounded-pill fs-6">⛰️ Preservación Natural</span>
            </div>
        </div>
    </section>


    <!-- SECCIÓN CALL TO ACTION FINAL -->
    <section class="cta-nosotros-section">
        <div class="container position-relative z-2">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3">
                ✈️ TU PRÓXIMA HISTORIA COMIENZA AQUÍ
            </span>
            <h2 class="cta-nosotros-title">
                ¿Cuál será tu próxima historia en el Perú?
            </h2>
            <p class="text-light fs-5 max-w-800 mx-auto mb-5" style="line-height: 1.8;">
                Machu Picchu te espera. Cusco tiene una historia que contarte. Los Andes tienen caminos por descubrir. La Amazonía guarda experiencias únicas. La costa tiene sabores y paisajes que te sorprenderán.
            </p>

            <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap mb-4">
                <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20planificar%20mi%20viaje%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="btn-reserva-llama fs-5 px-4 py-3">
                    <i class="bi bi-calendar-check-fill"></i> PLANIFICAR MI VIAJE
                </a>
                <a href="page-destinos.php" class="btn btn-outline-light rounded-pill px-4 py-3 fw-bold fs-6">
                    EXPLORAR DESTINOS
                </a>
                <a href="page-programas.php" class="btn btn-outline-warning rounded-pill px-4 py-3 fw-bold fs-6">
                    VER PROGRAMAS
                </a>
            </div>

            <p class="fw-bold fs-5 text-warning mb-0">
                Tu viaje. Tu historia. Nuestra experiencia.
            </p>
        </div>
    </section>


    <!-- 3. FOOTER -->
    <footer class="footer-custom" id="contacto">
        <div class="container">
            <div class="row g-4 justify-content-between">
                <!-- Branding & Descripción -->
                <div class="col-lg-4 col-md-6">
                    <a href="page-inicio.php" class="footer-logo">
                        Perú Safe Journeys <span>| Viajes Perú</span>
                    </a>
                    <p class="pe-lg-4" style="color: #94A3B8;">
                        Agencia de viajes especializada en experiencias auténticas, seguras y personalizadas. Conectamos viajeros con el corazón cultural, histórico y natural del Perú.
                    </p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="footer-contact-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="footer-contact-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="footer-contact-icon" title="TikTok"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <!-- Enlaces Rápidos -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-heading">Navegación</h5>
                    <ul class="footer-links">
                        <li><a href="page-inicio.php#inicio"><i class="bi bi-chevron-right text-warning fs-6"></i> INICIO</a></li>
                        <li><a href="page-destinos.php"><i class="bi bi-chevron-right text-warning fs-6"></i> DESTINOS</a></li>
                        <li><a href="page-experiencias.php"><i class="bi bi-chevron-right text-warning fs-6"></i> EXPERIENCIAS</a></li>
                        <li><a href="page-programas.php"><i class="bi bi-chevron-right text-warning fs-6"></i> PROGRAMAS</a></li>
                        <li><a href="page-nosotros.php"><i class="bi bi-chevron-right text-warning fs-6"></i> NOSOTROS</a></li>
                        <li><a href="page-inicio.php#contacto"><i class="bi bi-chevron-right text-warning fs-6"></i> CONTACTO</a></li>
                    </ul>
                </div>

                <!-- Datos de Contacto Requeridos -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-heading">Contacto Oficial</h5>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <small class="d-block" style="color: #94A3B8;">Teléfono de contacto:</small>
                            <a href="tel:<?php echo $phone_clean; ?>" class="fw-bold fs-6"><?php echo $phone_number; ?></a>
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
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <small class="d-block" style="color: #94A3B8;">Ubicación:</small>
                            <span class="text-light">Cusco - Perú</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie de página copyright -->
            <div class="footer-bottom">
                <p class="mb-0">
                    &copy; <?php echo $current_year; ?> Todos los derechos reservados para: <strong>Perú Safe Journeys | Viajes Perú</strong>
                </p>
            </div>
        </div>
    </footer>

    <!-- Icono flotante de WhatsApp -->
    <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Per%C3%BA%20Safe%20Journeys"
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
