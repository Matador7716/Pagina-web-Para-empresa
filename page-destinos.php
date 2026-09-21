<?php
// page-destinos.php - Perú Safe Journeys
$company_name = "Perú Safe Journeys";
$company_tagline = "tu camino hacia un Perú auténtico";
$phone_number = "+51 948 364 822";
$phone_clean = "51948364822";
$email_address = "informes-web@perusafejourneys.com";
$current_year = date('Y');

// Array de los 7 Destinos
$destinos = [
    [
        'id' => 'machu-picchu',
        'num' => '01',
        'title' => 'MACHU PICCHU',
        'subtitle' => 'El misterio que vive entre las montañas',
        'desc' => 'Hay lugares que fotografías y lugares que nunca olvidas. Entre las montañas de los Andes se encuentra Machu Picchu, la extraordinaria ciudadela inca que continúa sorprendiendo al mundo. Camina por sus antiguos caminos, contempla sus impresionantes construcciones y déjate envolver por la energía de un lugar donde historia y naturaleza se encuentran.',
        'experience' => 'Ciudadela Inca • Montañas • Historia • Cultura',
        'ideal' => 'viajeros que quieren conocer una de las grandes maravillas del mundo.',
        'tagline' => 'Machu Picchu: una historia que merece ser vivida.',
        'img' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1000&q=80',
        'badge' => '🏛️ Maravilla del Mundo'
    ],
    [
        'id' => 'cusco',
        'num' => '02',
        'title' => 'CUSCO',
        'subtitle' => 'Donde cada calle cuenta una historia',
        'desc' => 'Bienvenido a Cusco, la antigua capital del Imperio Inca. Camina por sus calles empedradas, descubre sus templos y plazas, contempla la arquitectura que une dos mundos y déjate sorprender por la cultura andina que permanece viva. Cusco es el punto de partida perfecto para explorar los grandes tesoros del sur del Perú.',
        'experience' => 'Centro Histórico • Cultura Andina • Arqueología • Gastronomía',
        'ideal' => 'viajeros que buscan historia, cultura y experiencias auténticas.',
        'tagline' => 'Cusco: el corazón de los Andes te espera.',
        'img' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=1000&q=80',
        'badge' => '🏔️ Capital Inca'
    ],
    [
        'id' => 'valle-sagrado',
        'num' => '03',
        'title' => 'VALLE SAGRADO DE LOS INCAS',
        'subtitle' => 'Un viaje entre montañas, historia y tradición',
        'desc' => 'Imagina recorrer un valle rodeado de enormes montañas, pueblos tradicionales y antiguos centros arqueológicos. El Valle Sagrado de los Incas es una experiencia donde la naturaleza y la historia se encuentran en cada recorrido. Conoce sus comunidades, descubre sus tradiciones y contempla los paisajes que alguna vez fueron parte fundamental del mundo inca.',
        'experience' => 'Paisajes Andinos • Cultura • Arqueología • Comunidades',
        'ideal' => 'viajeros que desean conectar con la naturaleza y la cultura local.',
        'tagline' => 'Valle Sagrado: descubre la esencia viva de los Andes.',
        'img' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1000&q=80',
        'badge' => '🌄 Mística & Naturaleza'
    ],
    [
        'id' => 'montana-7-colores',
        'num' => '04',
        'title' => 'MONTAÑA DE 7 COLORES',
        'subtitle' => 'Un paisaje que parece pintado por la naturaleza',
        'desc' => 'Prepárate para descubrir uno de los paisajes naturales más sorprendentes de los Andes. La Montaña de 7 Colores te espera con sus increíbles tonalidades naturales y un paisaje de alta montaña que convierte cada paso en una aventura. El camino es parte de la experiencia: respira profundo, contempla los Andes y disfruta de una vista que quedará grabada en tu memoria.',
        'experience' => 'Aventura • Trekking • Andes • Paisajes',
        'ideal' => 'aventureros, amantes de la fotografía y viajeros que buscan experiencias únicas.',
        'tagline' => 'Camina hacia un paisaje que no parece real.',
        'img' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1000&q=80',
        'badge' => '🌈 Maravilla Natural'
    ],
    [
        'id' => 'amazona-peruana',
        'num' => '05',
        'title' => 'AMAZONÍA PERUANA',
        'subtitle' => 'Una aventura en el corazón de la naturaleza',
        'desc' => 'Cambia las montañas por la selva y descubre un Perú completamente diferente. La Amazonía peruana te invita a navegar por sus ríos, descubrir su biodiversidad y conectar con uno de los ecosistemas más extraordinarios del planeta. Una experiencia de naturaleza, aventura y descubrimiento que te permitirá conocer otra de las grandes riquezas del Perú.',
        'experience' => 'Naturaleza • Biodiversidad • Aventura • Cultura',
        'ideal' => 'amantes de la naturaleza y viajeros que buscan aventura.',
        'tagline' => 'Amazonía: donde la naturaleza escribe su propia historia.',
        'img' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=1000&q=80',
        'badge' => '🌿 Pulmón del Mundo'
    ],
    [
        'id' => 'paracas-huacachina',
        'num' => '06',
        'title' => 'PARACAS & HUACACHINA',
        'subtitle' => 'Desierto, océano y aventura en un solo viaje',
        'desc' => '¿Desierto junto al océano? Sí, y está en Perú. Descubre Paracas, con sus impresionantes paisajes costeros y su extraordinaria vida marina, y continúa hasta Huacachina, el famoso oasis rodeado de enormes dunas. Disfruta de una combinación perfecta de naturaleza y aventura con actividades que harán de tu viaje una experiencia inolvidable.',
        'experience' => 'Océano • Desierto • Oasis • Aventura',
        'ideal' => 'viajeros que buscan adrenalina, paisajes y experiencias diferentes.',
        'tagline' => 'Dos mundos. Un solo viaje. Una experiencia inolvidable.',
        'img' => 'https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?auto=format&fit=crop&w=1000&q=80',
        'badge' => '🏜️ Oasis & Costa'
    ],
    [
        'id' => 'lima',
        'num' => '07',
        'title' => 'LIMA',
        'subtitle' => 'La puerta de entrada a las maravillas del Perú',
        'desc' => 'Tu aventura peruana comienza en Lima, una ciudad donde la historia, la cultura, la gastronomía y la modernidad se encuentran frente al océano Pacífico. Descubre su centro histórico, disfruta de su reconocida gastronomía y conoce una ciudad llena de contrastes. Lima es mucho más que una parada: es el primer capítulo de tu historia en el Perú.',
        'experience' => 'Gastronomía • Historia • Cultura • Modernidad',
        'ideal' => 'viajeros que quieren descubrir la esencia urbana y gastronómica del Perú.',
        'tagline' => 'Lima: comienza aquí tu historia peruana.',
        'img' => 'https://images.unsplash.com/photo-1531968455001-5c5272a41129?auto=format&fit=crop&w=1000&q=80',
        'badge' => '🌊 Capital Gastronómica'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinos - <?php echo $company_name; ?></title>

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

        /* Hero Banner Section para Destinos */
        .hero-banner-destinos {
            position: relative;
            padding: 8rem 0 6rem;
            background: linear-gradient(180deg, rgba(7, 18, 42, 0.85) 0%, rgba(11, 27, 61, 0.92) 100%),
                        url('https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            color: var(--color-blanco);
            text-align: center;
            overflow: hidden;
        }

        .destinos-hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 1.2rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .destinos-hero-title span {
            color: var(--color-naranja);
            font-family: 'Caveat', cursive;
            font-size: 4.8rem;
            display: block;
            margin-top: -0.5rem;
        }

        .destinos-hero-subtitle {
            font-size: 1.25rem;
            color: #E2E8F0;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Sección Introducción */
        .intro-destinos-section {
            padding: 4.5rem 0 3.5rem;
            background-color: var(--color-blanco);
        }

        .intro-box {
            background: var(--color-gris-bg);
            border-radius: 24px;
            padding: 3rem 2.5rem;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 10px 30px rgba(11, 27, 61, 0.05);
        }

        /* Item de Destino Creativo */
        .destino-card {
            background: var(--color-blanco);
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 12px 35px rgba(11, 27, 61, 0.07);
            margin-bottom: 4.5rem;
            transition: all 0.4s ease;
        }

        .destino-card:hover {
            transform: translateY(-6px);
            border-color: var(--color-naranja);
            box-shadow: 0 20px 45px rgba(255, 107, 0, 0.18);
        }

        .destino-number-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background-color: var(--color-naranja);
            color: var(--color-blanco);
            font-weight: 800;
            font-size: 1.2rem;
            border-radius: 14px;
            margin-bottom: 1rem;
            box-shadow: 0 6px 18px var(--color-naranja-glow);
        }

        .destino-img-box {
            position: relative;
            height: 100%;
            min-height: 380px;
            overflow: hidden;
        }

        .destino-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .destino-card:hover .destino-img-box img {
            transform: scale(1.08);
        }

        .destino-badge-top {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(11, 27, 61, 0.88);
            backdrop-filter: blur(8px);
            color: var(--color-blanco);
            padding: 0.5rem 1.1rem;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 700;
            border: 1px solid rgba(255, 107, 0, 0.5);
        }

        .destino-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--color-azul-oscuro);
            margin-bottom: 0.5rem;
        }

        .destino-subtitle {
            color: var(--color-naranja);
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 1.2rem;
        }

        .destino-desc {
            color: #334155;
            font-size: 1.02rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .destino-feature-box {
            background-color: var(--color-gris-bg);
            border-radius: 16px;
            padding: 1.25rem;
            margin-bottom: 1.5rem;
            border-left: 4px solid var(--color-naranja);
        }

        .destino-feature-item {
            margin-bottom: 0.6rem;
            font-size: 0.95rem;
            color: var(--color-texto-oscuro);
        }

        .destino-feature-item:last-child {
            margin-bottom: 0;
        }

        .destino-quote-tagline {
            font-style: italic;
            font-weight: 700;
            color: var(--color-azul-oscuro);
            font-size: 1.05rem;
            margin-bottom: 1.8rem;
        }

        .btn-destino-whatsapp {
            background-color: var(--color-naranja);
            color: var(--color-blanco) !important;
            font-weight: 700;
            padding: 0.75rem 1.8rem;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px var(--color-naranja-glow);
        }

        .btn-destino-whatsapp:hover {
            background-color: var(--color-naranja-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 0, 0.4);
        }

        /* Call To Action Final */
        .cta-final-section {
            background: linear-gradient(135deg, var(--color-azul-oscuro) 0%, #07122A 100%);
            color: var(--color-blanco);
            padding: 6rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-final-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
        }

        .cta-final-subtitle {
            font-size: 1.15rem;
            color: #CBD5E1;
            max-width: 820px;
            margin: 0 auto 2.5rem;
            line-height: 1.8;
        }

        .pilar-badges-final {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 2rem;
        }

        .pilar-badge-item {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 0.6rem 1.4rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.95rem;
            color: var(--color-blanco);
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
                        <a class="nav-link active" href="page-destinos.php">DESTINOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-experiencias.php">EXPERIENCIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-programas.php">PROGRAMAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-nosotros.php">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-contacto.php">CONTACTO</a>
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


    <!-- HERO BANNER CON IMAGEN DE FONDO -->
    <header class="hero-banner-destinos">
        <div class="container animate__animated animate__fadeIn">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3 fs-6">
                🇵🇪 Descubre el Perú
            </span>
            <h1 class="destinos-hero-title">
                DESTINOS
                <span>7 lugares mágicos para vivir el Perú</span>
            </h1>
            <p class="destinos-hero-subtitle">
                Viaja seguro. Vive auténticamente. Descubre el Perú.
            </p>
        </div>
    </header>


    <!-- INTRODUCCIÓN -->
    <section class="intro-destinos-section">
        <div class="container">
            <div class="intro-box text-center">
                <h2 class="font-playfair fw-bold text-dark fs-2 mb-3">
                    El Perú es mucho más que un destino
                </h2>
                <p class="fs-5 text-secondary mb-0" style="max-width: 850px; margin: 0 auto; line-height: 1.8;">
                    Es una colección de historias, paisajes, sabores y culturas que esperan ser descubiertos.
                    En <strong>Perú Safe Journeys</strong>, seleccionamos experiencias que te permiten conocer el Perú de una manera auténtica, emocionante y memorable.
                </p>
            </div>
        </div>
    </section>


    <!-- LISTA DE LOS 7 DESTINOS -->
    <section class="py-4">
        <div class="container">
            <?php foreach($destinos as $index => $item): ?>
            <div class="destino-card" id="<?php echo $item['id']; ?>">
                <div class="row g-0 align-items-stretch <?php echo ($index % 2 != 0) ? 'flex-row-reverse' : ''; ?>">
                    <!-- Imagen del Destino -->
                    <div class="col-lg-6">
                        <div class="destino-img-box">
                            <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>" loading="lazy">
                            <span class="destino-badge-top"><?php echo $item['badge']; ?></span>
                        </div>
                    </div>

                    <!-- Contenido del Destino -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="p-4 p-md-5 w-100">
                            <span class="destino-number-badge"><?php echo $item['num']; ?></span>
                            <h2 class="destino-title"><?php echo $item['title']; ?></h2>
                            <h3 class="destino-subtitle"><?php echo $item['subtitle']; ?></h3>
                            <p class="destino-desc"><?php echo $item['desc']; ?></p>

                            <div class="destino-feature-box">
                                <div class="destino-feature-item">
                                    <strong>✨ Vive la experiencia:</strong> <?php echo $item['experience']; ?>
                                </div>
                                <div class="destino-feature-item">
                                    <strong>👉 Ideal para:</strong> <?php echo $item['ideal']; ?>
                                </div>
                            </div>

                            <p class="destino-quote-tagline">
                                "<?php echo $item['tagline']; ?>"
                            </p>

                            <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20planificar%20un%20viaje%20a%20<?php echo urlencode($item['title']); ?>" target="_blank" class="btn-destino-whatsapp">
                                <i class="bi bi-whatsapp"></i> Consultar Tour a <?php echo $item['title']; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- SECCIÓN CALL TO ACTION FINAL -->
    <section class="cta-final-section">
        <div class="container position-relative z-2">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3">
                🇵🇪 TU PRÓXIMA AVENTURA COMIENZA EN PERÚ
            </span>
            <h2 class="cta-final-title">
                Elige tu destino. Nosotros diseñamos tu experiencia.
            </h2>
            <p class="cta-final-subtitle">
                Desde la majestuosidad de <strong>Machu Picchu</strong> hasta la inmensidad de la Amazonía, desde las montañas de Cusco hasta las dunas de Huacachina, el Perú tiene una experiencia esperando por ti. En <strong>Perú Safe Journeys</strong> diseñamos viajes pensados para que descubras cada destino con tranquilidad, confianza y atención personalizada.
            </p>

            <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20dise%C3%B1ar%20mi%20experiencia%20de%20viaje%20por%20el%20Per%C3%BA" target="_blank" class="btn-reserva-llama fs-5 px-4 py-3">
                <i class="bi bi-compass-fill"></i> Comienza Tu Viaje Ahora
            </a>

            <div class="pilar-badges-final">
                <div class="pilar-badge-item">🛡️ Viaja seguro.</div>
                <div class="pilar-badge-item">❤️ Vive auténticamente.</div>
                <div class="pilar-badge-item">🇵🇪 Descubre el Perú.</div>
            </div>
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
                        <li><a href="page-contacto.php"><i class="bi bi-chevron-right text-warning fs-6"></i> CONTACTO</a></li>
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
    <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%207%20destinos"
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
