<?php
// page-experiencias.php - Perú Safe Journeys
$company_name = "Perú Safe Journeys";
$company_tagline = "tu camino hacia un Perú auténtico";
$phone_number = "+51 948 364 822";
$phone_clean = "51948364822";
$email_address = "informes-web@perusafejourneys.com";
$current_year = date('Y');

// Array de Experiencias
$experiencias = [
    [
        'id' => 'aventuras-andes',
        'icon' => '🏔️',
        'title' => 'AVENTURAS EN LOS ANDES',
        'subtitle' => 'Siente la energía de las montañas',
        'desc' => 'Prepárate para caminar, explorar y contemplar algunos de los paisajes más impresionantes del Perú. Vive experiencias de trekking y aventura en los Andes, descubre caminos rodeados de montañas y contempla escenarios que parecen sacados de una postal.',
        'ideal' => 'viajeros aventureros, amantes de la naturaleza y quienes buscan superar nuevos desafíos.',
        'tagline' => '🥾 Explora. Respira. Conquista.',
        'btn_text' => 'DESCUBRIR AVENTURAS →',
        'img' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Trekking & Aventura'
    ],
    [
        'id' => 'experiencias-culturales',
        'icon' => '🏛️',
        'title' => 'EXPERIENCIAS CULTURALES',
        'subtitle' => 'Conoce el Perú más allá de los lugares turísticos',
        'desc' => 'El Perú tiene una historia que continúa viva. Descubre nuestras tradiciones, costumbres, música, arte, gastronomía y formas de vida que han pasado de generación en generación. Conecta con la cultura local y descubre el Perú desde una perspectiva más cercana y auténtica.',
        'ideal' => 'viajeros curiosos que quieren conocer la verdadera esencia de cada destino.',
        'tagline' => '❤️ No solo conozcas una cultura. Conecta con ella.',
        'btn_text' => 'VIVIR LA CULTURA →',
        'img' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Cultura & Tradición'
    ],
    [
        'id' => 'experiencias-incas',
        'icon' => '🌄',
        'title' => 'EXPERIENCIAS INCAS',
        'subtitle' => 'Camina por las huellas de una gran civilización',
        'desc' => 'Viaja al pasado a través de las impresionantes construcciones incas. Explora Machu Picchu, Cusco, el Valle Sagrado y otros centros arqueológicos, mientras descubres las historias, conocimientos y misterios que dejaron los antiguos habitantes de los Andes.',
        'ideal' => 'amantes de la historia, arqueología y civilizaciones antiguas.',
        'tagline' => '🏛️ La historia cobra vida cuando caminas sobre sus huellas.',
        'btn_text' => 'EXPLORAR EL MUNDO INCA →',
        'img' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Arqueología Inca'
    ],
    [
        'id' => 'naturaleza-vida-silvestre',
        'icon' => '🌿',
        'title' => 'NATURALEZA & VIDA SILVESTRE',
        'subtitle' => 'Descubre un Perú lleno de vida',
        'desc' => 'Desde los imponentes Andes hasta la exuberante Amazonía, el Perú ofrece una extraordinaria diversidad de paisajes y ecosistemas. Explora la naturaleza, observa la vida silvestre y descubre escenarios donde la aventura y la tranquilidad se encuentran.',
        'ideal' => 'familias, fotógrafos, amantes de la naturaleza y viajeros que buscan desconectarse.',
        'tagline' => '🌎 Respira naturaleza. Descubre nuevas perspectivas.',
        'btn_text' => 'EXPLORAR LA NATURALEZA →',
        'img' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Biodiversidad'
    ],
    [
        'id' => 'sabores-del-peru',
        'icon' => '🍽️',
        'title' => 'SABORES DEL PERÚ',
        'subtitle' => 'Un viaje que también se disfruta con el paladar',
        'desc' => 'La gastronomía peruana es parte fundamental de nuestra identidad. Descubre nuevos sabores, ingredientes tradicionales y platos que cuentan historias de diferentes regiones del país. Desde la costa hasta los Andes y la Amazonía, cada destino tiene algo delicioso que compartir.',
        'ideal' => 'amantes del buen comer, gourmets y viajeros interesados en el arte culinario.',
        'tagline' => '😋 Descubre el Perú, un sabor a la vez.',
        'btn_text' => 'DESCUBRIR SABORES →',
        'img' => 'https://images.unsplash.com/photo-1531968455001-5c5272a41129?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Ruta Gastronómica'
    ],
    [
        'id' => 'comunidades-cultura-viva',
        'icon' => '🧑‍🌾',
        'title' => 'COMUNIDADES & CULTURA VIVA',
        'subtitle' => 'Encuentra historias detrás de cada sonrisa',
        'desc' => 'Conoce comunidades andinas y descubre tradiciones que permanecen vivas. Comparte momentos especiales, conoce sus costumbres y descubre la importancia de preservar nuestros conocimientos ancestrales. Son encuentros que convierten un simple viaje en una experiencia humana.',
        'ideal' => 'viajeros empáticos que valoran el intercambio cultural y el turismo responsable.',
        'tagline' => '🤝 Conoce personas. Comparte historias. Crea recuerdos.',
        'btn_text' => 'CONOCER CULTURAS →',
        'img' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Turismo Vivencial'
    ],
    [
        'id' => 'experiencias-fotograficas',
        'icon' => '📸',
        'title' => 'EXPERIENCIAS FOTOGRÁFICAS',
        'subtitle' => 'Llévate recuerdos que nunca pasarán de moda',
        'desc' => 'El Perú está lleno de escenarios extraordinarios. Montañas, valles, ciudades históricas, paisajes naturales y comunidades tradicionales convierten cada recorrido en una oportunidad para capturar momentos únicos. Te llevaremos a descubrir lugares donde cada fotografía puede convertirse en una historia.',
        'ideal' => 'fotógrafos aficionados y profesionales, creadores de contenido y amantes de los paisajes.',
        'tagline' => '📷 Tu mejor recuerdo comienza con una experiencia.',
        'btn_text' => 'VER EXPERIENCIAS →',
        'img' => 'https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Fotografía & Paisajes'
    ]
];

// Puntos de confianza (Viaja con confianza)
$confianza_items = [
    "Atención personalizada",
    "Guías profesionales",
    "Operación responsable",
    "Experiencias cuidadosamente organizadas",
    "Asistencia durante tu viaje",
    "Itinerarios adaptados a tus necesidades"
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencias - <?php echo $company_name; ?></title>

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

        /* Hero Banner Section para Experiencias */
        .hero-banner-experiencias {
            position: relative;
            padding: 8rem 0 6rem;
            background: linear-gradient(180deg, rgba(7, 18, 42, 0.85) 0%, rgba(11, 27, 61, 0.92) 100%),
                        url('https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            color: var(--color-blanco);
            text-align: center;
            overflow: hidden;
        }

        .experiencias-hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 1.2rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .experiencias-hero-title span {
            color: var(--color-naranja);
            font-family: 'Caveat', cursive;
            font-size: 4.8rem;
            display: block;
            margin-top: -0.5rem;
        }

        .experiencias-hero-subtitle {
            font-size: 1.25rem;
            color: #E2E8F0;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Sección Introducción */
        .intro-section {
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

        /* Tarjeta de Experiencia Creativa */
        .experiencia-card {
            background: var(--color-blanco);
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 12px 35px rgba(11, 27, 61, 0.07);
            margin-bottom: 4.5rem;
            transition: all 0.4s ease;
        }

        .experiencia-card:hover {
            transform: translateY(-6px);
            border-color: var(--color-naranja);
            box-shadow: 0 20px 45px rgba(255, 107, 0, 0.18);
        }

        .experiencia-img-box {
            position: relative;
            height: 100%;
            min-height: 380px;
            overflow: hidden;
        }

        .experiencia-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .experiencia-card:hover .experiencia-img-box img {
            transform: scale(1.08);
        }

        .experiencia-badge-top {
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

        .experiencia-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--color-azul-oscuro);
            margin-bottom: 0.5rem;
        }

        .experiencia-subtitle {
            color: var(--color-naranja);
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 1.2rem;
        }

        .experiencia-desc {
            color: #334155;
            font-size: 1.02rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .experiencia-feature-box {
            background-color: var(--color-gris-bg);
            border-radius: 16px;
            padding: 1.25rem;
            margin-bottom: 1.5rem;
            border-left: 4px solid var(--color-naranja);
        }

        .experiencia-quote-tagline {
            font-weight: 700;
            color: var(--color-azul-oscuro);
            font-size: 1.08rem;
            margin-bottom: 1.8rem;
        }

        .btn-experiencia-action {
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
            letter-spacing: 0.5px;
        }

        .btn-experiencia-action:hover {
            background-color: var(--color-naranja-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 0, 0.4);
        }

        /* Experiencias Personalizadas Section */
        .personalizadas-section {
            background-color: var(--color-gris-bg);
            padding: 5rem 0;
            border-top: 1px solid var(--color-gris-border);
            border-bottom: 1px solid var(--color-gris-border);
        }

        .personalizada-card {
            background: var(--color-blanco);
            border-radius: 24px;
            padding: 3rem 2.5rem;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 15px 35px rgba(11, 27, 61, 0.06);
        }

        .question-list {
            list-style: none;
            padding: 0;
            margin: 1.5rem 0 2rem;
        }

        .question-list li {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--color-azul-oscuro);
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .question-list li i {
            color: var(--color-naranja);
        }

        /* Sección Viaja con Confianza */
        .confianza-section {
            padding: 5rem 0;
            background-color: var(--color-blanco);
        }

        .confianza-item-card {
            background: var(--color-gris-bg);
            border-radius: 16px;
            padding: 1.5rem;
            border: 1px solid var(--color-gris-border);
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            color: var(--color-azul-oscuro);
            transition: all 0.3s ease;
        }

        .confianza-item-card:hover {
            background: var(--color-blanco);
            border-color: var(--color-naranja);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 107, 0, 0.12);
        }

        .confianza-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: rgba(255, 107, 0, 0.15);
            color: var(--color-naranja);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            flex-shrink: 0;
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

        .btn-cta-group {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
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
                        <a class="nav-link active" href="page-experiencias.php">EXPERIENCIAS</a>
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
                    <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20reservar%20una%20experiencia%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="btn-reserva-llama">
                        <svg class="llama-svg" viewBox="0 0 512 512">
                            <path d="M224 96c0-26.5 21.5-48 48-48s48 21.5 48 48c0 14.7-6.6 27.8-17 36.7 18.2 16.5 29 40 29 65.3v24h16c35.3 0 64 28.7 64 64v16c0 17.7-14.3 32-32 32h-16v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-80h-32v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-96c0-44.2 35.8-80 80-80v-24c0-13.3-5.3-25.3-14-34.1-10.4-10.5-17-24.8-17-40.6zM272 80c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16z"/>
                        </svg>
                        <span>Reserva tu Viaje</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>


    <!-- HERO BANNER EXPERIENCIAS -->
    <header class="hero-banner-experiencias">
        <div class="container animate__animated animate__fadeIn">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3 fs-6">
                ✨ EXPERIENCIAS INOLVIDABLES
            </span>
            <h1 class="experiencias-hero-title">
                EXPERIENCIAS
                <span>No solo visites el Perú. Vívelo.</span>
            </h1>
            <p class="experiencias-hero-subtitle">
                🇵🇪 Tu viaje. Tu historia. Tu experiencia.
            </p>
        </div>
    </header>


    <!-- INTRODUCCIÓN -->
    <section class="intro-section">
        <div class="container">
            <div class="intro-box text-center">
                <h2 class="font-playfair fw-bold text-dark fs-2 mb-3">
                    Conecta, explora y descubre momentos auténticos
                </h2>
                <p class="fs-5 text-secondary mb-0" style="max-width: 850px; margin: 0 auto; line-height: 1.8;">
                    En <strong>Perú Safe Journeys</strong> creemos que un gran viaje no se mide por la cantidad de lugares que visitas, sino por las experiencias que llevas contigo. Por eso creamos experiencias que te permiten <strong>conectar con la cultura, explorar la naturaleza, descubrir nuestra historia y vivir momentos auténticos</strong>.
                </p>
            </div>
        </div>
    </section>


    <!-- LISTA DE EXPERIENCIAS -->
    <section class="py-4">
        <div class="container">
            <?php foreach($experiencias as $index => $item): ?>
            <div class="experiencia-card" id="<?php echo $item['id']; ?>">
                <div class="row g-0 align-items-stretch <?php echo ($index % 2 != 0) ? 'flex-row-reverse' : ''; ?>">
                    <!-- Imagen de la Experiencia -->
                    <div class="col-lg-6">
                        <div class="experiencia-img-box">
                            <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>" loading="lazy">
                            <span class="experiencia-badge-top"><?php echo $item['icon'] . ' ' . $item['badge']; ?></span>
                        </div>
                    </div>

                    <!-- Contenido de la Experiencia -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="p-4 p-md-5 w-100">
                            <h2 class="experiencia-title"><?php echo $item['title']; ?></h2>
                            <h3 class="experiencia-subtitle"><?php echo $item['subtitle']; ?></h3>
                            <p class="experiencia-desc"><?php echo $item['desc']; ?></p>

                            <div class="experiencia-feature-box">
                                <div class="mb-0 fs-6 text-dark">
                                    <strong>👉 Ideal para:</strong> <?php echo $item['ideal']; ?>
                                </div>
                            </div>

                            <p class="experiencia-quote-tagline">
                                <?php echo $item['tagline']; ?>
                            </p>

                            <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20<?php echo urlencode($item['title']); ?>" target="_blank" class="btn-experiencia-action">
                                <i class="bi bi-whatsapp"></i> <?php echo $item['btn_text']; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- EXPERIENCIAS PERSONALIZADAS -->
    <section class="personalizadas-section" id="personalizadas">
        <div class="container">
            <div class="personalizada-card text-center text-lg-start">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3">
                            ❤️ EXPERIENCIAS PERSONALIZADAS
                        </span>
                        <h2 class="font-playfair fw-bold text-dark fs-2 mb-3">
                            Diseñamos el viaje que imaginas
                        </h2>
                        <ul class="question-list">
                            <li><i class="bi bi-check-circle-fill"></i> ¿Quieres combinar Machu Picchu + Cusco + Valle Sagrado?</li>
                            <li><i class="bi bi-check-circle-fill"></i> ¿Prefieres una aventura de trekking?</li>
                            <li><i class="bi bi-check-circle-fill"></i> ¿Viajas en familia?</li>
                            <li><i class="bi bi-check-circle-fill"></i> ¿Buscas una experiencia cultural, gastronómica o romántica?</li>
                        </ul>
                        <p class="fs-5 text-secondary mb-4">
                            Cuéntanos qué quieres vivir y nuestro equipo diseñará una experiencia adaptada a tus intereses, tiempo y estilo de viaje.
                        </p>
                        <h4 class="font-playfair fw-bold text-warning-emphasis mb-4" style="color: var(--color-naranja);">
                            ✨ Tú imaginas el viaje. Nosotros hacemos posible la experiencia.
                        </h4>
                    </div>
                    <div class="col-lg-5 text-center">
                        <div class="p-4 rounded-4" style="background-color: var(--color-azul-oscuro); color: var(--color-blanco);">
                            <i class="bi bi-magic fs-1 text-warning d-block mb-3"></i>
                            <h3 class="font-playfair fw-bold mb-3">¿Listo para comenzar?</h3>
                            <p class="text-light fs-6 mb-4">Diseña tu itinerario 100% a medida con la guía de especialistas locales.</p>
                            <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20crear%20mi%20experiencia%20personalizada%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="btn-reserva-llama fs-6 w-100 justify-content-center py-3">
                                <i class="bi bi-whatsapp"></i> CREAR MI EXPERIENCIA →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SECCIÓN VIAJA CON CONFIANZA -->
    <section class="confianza-section">
        <div class="container text-center">
            <span class="badge bg-primary text-white px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3" style="background-color: var(--color-azul-oscuro) !important;">
                🛡️ VIAJA CON CONFIANZA
            </span>
            <h2 class="font-playfair fw-bold text-dark fs-2 mb-3">
                Tu tranquilidad también forma parte de la experiencia
            </h2>
            <p class="fs-5 text-secondary mb-5" style="max-width: 800px; margin: 0 auto;">
                Tu experiencia comienza mucho antes de llegar a tu destino. En <strong>Perú Safe Journeys</strong> cuidamos cada detalle para que puedas disfrutar de tu viaje con tranquilidad.
            </p>

            <div class="row g-3 justify-content-center">
                <?php foreach($confianza_items as $confianza): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="confianza-item-card">
                        <div class="confianza-icon">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <span><?php echo $confianza; ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- SECCIÓN CALL TO ACTION FINAL -->
    <section class="cta-final-section">
        <div class="container position-relative z-2">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3">
                🇵🇪 VIVE EL PERÚ A TU MANERA
            </span>
            <h2 class="cta-final-title">
                ¿Qué experiencia quieres vivir?
            </h2>
            <p class="cta-final-subtitle">
                No importa si buscas <strong>aventura, cultura, naturaleza, gastronomía, historia o momentos especiales</strong>. Tenemos una experiencia para ti.<br>
                <strong>Perú Safe Journeys</strong>: Viaja seguro. Vive auténticamente. Descubre el Perú.
            </p>

            <div class="btn-cta-group">
                <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20quiero%20explorar%20experiencias%20de%20viaje" target="_blank" class="btn-reserva-llama fs-5 px-4 py-3">
                    <i class="bi bi-compass-fill"></i> EXPLORAR EXPERIENCIAS
                </a>
                <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20planificar%20mi%20viaje%20a%20Per%C3%BA" target="_blank" class="btn btn-outline-light rounded-pill fs-5 px-4 py-3 font-weight-bold border-2">
                    <i class="bi bi-calendar-check-fill text-warning me-2"></i> PLANIFICAR MI VIAJE
                </a>
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
    <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20las%20experiencias%20de%20viaje"
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
