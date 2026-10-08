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

// Tarjetas creativas para el carrusel/slider
$tour_cards = [
    [
        'title' => 'Tours Tradicionales',
        'desc' => 'Descubre lugares imprescindibles del Perú.',
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
        'desc' => 'Selva y montaña para explorar con territorios únicos.',
        'badge' => '🌿 Exploración Única',
        'image' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/destinos/'
    ],
    [
        'title' => 'Turismo Vivencial',
        'desc' => 'Comparte, aprende y vive nuestras tradiciones.',
        'badge' => '🤝 Cultura & Tradición',
        'image' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80',
        'link' => 'https://www.perusafejourneysgroup.com/nosotros/'
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
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        :root {
            /* Colores Principales */
            --color-azul-peru-safe: #003250;  /* Azul oscuro elegante */
            --color-azul-andino: #0B527A;     /* Azul secundario */
            --color-naranja-journey: #E94D00; /* Nuevo naranja intenso */
            --color-naranja-hover: #C74000;   /* Naranja oscuro para hover */
            --color-dorado-andino: #D9A441;   /* Dorado/Amarillo acento */
            --color-blanco: #FFFFFF;          /* Blanco */
            --color-gris-claro: #F4F6F7;      /* Gris claro para secciones */

            --color-topbar: #002238;
            --color-texto-oscuro: #1E293B;
            --color-texto-suave: #64748B;
            --color-gris-border: #E2E8F0;
            --color-naranja-glow: rgba(233, 77, 0, 0.35);
        }

        body {
            font-family: 'Manrope', sans-serif;
            background-color: var(--color-blanco);
            color: var(--color-texto-oscuro);
            overflow-x: hidden;
            width: 100%;
        }

        /* Tipografía Amigable y Creativa (Poppins para títulos y botones) */
        h1, h2, h3, h4, h5, h6,
        .hero-title, .section-title, .brand-motto-title,
        .brand-text, .nav-link, .btn-reserva-llama, .btn-banner,
        .badge, .section-badge {
            font-family: 'Poppins', sans-serif;
        }

        /* 1. HEADER */
        /* Top Bar Superior Con Fondo Oscuro */
        .top-bar {
            background-color: var(--color-topbar);
            font-size: 0.88rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            z-index: 1040;
            position: relative;
            width: 100%;
        }

        .top-bar a {
            color: #CBD5E1;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .top-bar a:hover {
            color: var(--color-naranja-journey);
        }

        .topbar-phone-badge {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 0.25rem 0.75rem;
            border-radius: 30px;
            font-size: 0.85rem;
            transition: all 0.3s ease;
        }

        .topbar-phone-badge:hover {
            background: rgba(233, 77, 0, 0.25);
            border-color: var(--color-naranja-journey);
        }

        .topbar-social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: #CBD5E1 !important;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .topbar-social-icon:hover {
            background: var(--color-naranja-journey);
            color: var(--color-blanco) !important;
            transform: translateY(-2px) scale(1.1);
            box-shadow: 0 4px 10px var(--color-naranja-glow);
        }

        /* Menú Pegajoso (Sticky Header) Transparente sobre el video / scroll */
        .navbar-custom {
            background-color: rgba(0, 50, 80, 0.88);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            transition: all 0.4s ease;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            width: 100%;
        }

        .navbar-custom.scrolled {
            background-color: rgba(0, 34, 56, 0.98);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            padding-top: 0.4rem;
            padding-bottom: 0.4rem;
        }

        .navbar-brand-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        /* Aumento del tamaño del logo */
        .logo-img-header {
            height: 80px; /* Aumentado considerablemente */
            width: auto;
            object-fit: contain;
            filter: drop-shadow(0 2px 8px rgba(0,0,0,0.25));
            transition: transform 0.3s ease;
        }

        .navbar-brand-logo:hover .logo-img-header {
            transform: scale(1.05);
        }

        .nav-link {
            color: var(--color-blanco) !important;
            font-weight: 600;
            font-size: 0.98rem;
            padding: 0.6rem 1.2rem !important;
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
            background-color: var(--color-naranja-journey);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 70%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--color-naranja-journey) !important;
        }

        /* BOTON "Reserva tu Viaje" - Color Naranja #E94D00 */
        .btn-reserva-llama {
            background-color: var(--color-naranja-journey);
            color: var(--color-blanco) !important;
            font-weight: 700;
            border-radius: 50px;
            padding: 0.75rem 1.8rem;
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
            box-shadow: 0 8px 25px rgba(233, 77, 0, 0.5);
            color: var(--color-blanco);
        }

        .llama-svg {
            width: 24px;
            height: 24px;
            fill: currentColor;
            transition: transform 0.3s ease;
        }

        .btn-reserva-llama:hover .llama-svg {
            transform: scale(1.15) rotate(-8deg);
        }

        /* 2. CONTENIDO DE LA PAGINA: SLIDER CON VIDEO DE FONDO */
        .hero-video-slider {
            position: relative;
            height: 90vh;
            min-height: 620px;
            max-height: 850px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-blanco);
            width: 100%;
        }

        /* Contenedor del Video Embed YouTube */
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
            height: 56.25vw; /* 16:9 ratio */
            min-height: 100vh;
            min-width: 177.77vh; /* 16:9 ratio */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            object-fit: cover;
            filter: brightness(0.62) contrast(1.1);
        }

        .video-overlay-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                180deg,
                rgba(0, 34, 56, 0.65) 0%,
                rgba(0, 50, 80, 0.45) 50%,
                rgba(0, 26, 43, 0.85) 100%
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

        /* Letras Creativas con Tipografía Amigable */
        .hero-title {
            font-size: 4.2rem;
            font-weight: 800;
            letter-spacing: -1px;
            line-height: 1.15;
            margin-bottom: 1.5rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.6);
            background: linear-gradient(135deg, #FFFFFF 30%, #FFE0B2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-subtitle {
            font-size: 1.35rem;
            font-weight: 500;
            line-height: 1.8;
            margin-bottom: 2.5rem;
            color: #F1F5F9;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.7);
            max-width: 950px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-banner-primary {
            background-color: var(--color-naranja-journey);
            color: var(--color-blanco) !important;
            font-weight: 700;
            border-radius: 50px;
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px var(--color-naranja-glow);
            border: 2px solid var(--color-naranja-journey);
        }

        .btn-banner-primary:hover {
            background-color: var(--color-naranja-hover);
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(233, 77, 0, 0.5);
        }

        .btn-banner-secondary {
            background-color: rgba(255, 255, 255, 0.12);
            color: var(--color-blanco) !important;
            font-weight: 700;
            border-radius: 50px;
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            backdrop-filter: blur(8px);
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.6);
        }

        .btn-banner-secondary:hover {
            background-color: var(--color-blanco);
            color: var(--color-azul-peru-safe) !important;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 255, 255, 0.25);
        }

        /* 5 TARJETAS CREATIVAS CON BOTONES DE DESPLAZAMIENTO - Ancho Completo */
        .cards-slider-section {
            background-color: var(--color-gris-claro);
            padding: 5.5rem 0;
            position: relative;
            width: 100%;
        }

        .section-badge {
            display: inline-block;
            background-color: rgba(233, 77, 0, 0.12);
            color: var(--color-naranja-journey);
            font-weight: 800;
            font-size: 0.85rem;
            padding: 0.4rem 1.2rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 1rem;
            border: 1px solid rgba(233, 77, 0, 0.3);
        }

        .section-title {
            font-size: 2.8rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.5rem;
        }

        .cards-track-wrapper {
            position: relative;
            overflow: hidden;
            padding: 1rem 0 2rem;
            width: 100%;
        }

        .cards-track {
            display: flex;
            gap: 28px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 10px 5px 25px;
            scrollbar-width: none;
        }

        .cards-track::-webkit-scrollbar {
            display: none;
        }

        .creative-card {
            flex: 0 0 360px;
            background: var(--color-blanco);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 50, 80, 0.08);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            border: 1px solid var(--color-gris-border);
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: var(--color-texto-oscuro);
            position: relative;
        }

        .creative-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(233, 77, 0, 0.18);
            border-color: var(--color-naranja-journey);
            color: var(--color-texto-oscuro);
        }

        .card-img-container {
            position: relative;
            width: 100%;
            height: 420px;
            overflow: hidden;
        }

        .card-img-container img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .creative-card:hover .card-img-container img {
            transform: scale(1.08);
        }

        .card-badge-overlay {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(0, 50, 80, 0.85);
            backdrop-filter: blur(8px);
            color: var(--color-blanco);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 0.45rem 1rem;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-family: 'Poppins', sans-serif;
        }

        .card-body-content {
            padding: 1.8rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
            background: var(--color-blanco);
        }

        .card-title-text {
            font-size: 1.45rem;
            font-weight: 700;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.6rem;
            transition: color 0.3s ease;
        }

        .creative-card:hover .card-title-text {
            color: var(--color-naranja-journey);
        }

        .card-desc-text {
            font-size: 1rem;
            color: var(--color-texto-suave);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .card-btn-action {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-weight: 700;
            font-size: 0.95rem;
            color: var(--color-naranja-journey);
            font-family: 'Poppins', sans-serif;
            transition: gap 0.3s ease;
        }

        .creative-card:hover .card-btn-action {
            gap: 14px;
            color: var(--color-naranja-hover);
        }

        /* Botones de desplazamiento del Slider */
        .slider-nav-btn {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background-color: var(--color-blanco);
            border: 2px solid var(--color-gris-border);
            color: var(--color-azul-peru-safe);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .slider-nav-btn:hover {
            background-color: var(--color-naranja-journey);
            color: var(--color-blanco);
            border-color: var(--color-naranja-journey);
            box-shadow: 0 6px 20px var(--color-naranja-glow);
            transform: scale(1.08);
        }

        /* CONTENIDO CREATIVO CON MOVIMIENTO */
        .creative-narrative-section {
            padding: 6.5rem 0;
            background: linear-gradient(180deg, var(--color-blanco) 0%, #F8FAFC 100%);
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .animated-bg-shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.25;
            z-index: 0;
            animation: floatShape 8s infinite alternate ease-in-out;
        }

        .bg-shape-1 {
            width: 450px;
            height: 450px;
            background: var(--color-naranja-journey);
            top: -100px;
            right: -100px;
        }

        .bg-shape-2 {
            width: 550px;
            height: 550px;
            background: var(--color-azul-peru-safe);
            bottom: -150px;
            left: -150px;
            animation-delay: -4s;
        }

        @keyframes floatShape {
            0% { transform: translateY(0px) rotate(0deg) scale(1); }
            100% { transform: translateY(30px) rotate(15deg) scale(1.05); }
        }

        .narrative-card-wrapper {
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            padding: 4rem;
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: 0 20px 50px rgba(0, 50, 80, 0.06);
            width: 100%;
        }

        .narrative-paragraph {
            font-size: 1.2rem;
            line-height: 1.95;
            color: #334155;
            margin-bottom: 1.8rem;
        }

        .brand-motto-box {
            background: linear-gradient(135deg, var(--color-azul-peru-safe) 0%, var(--color-azul-andino) 100%);
            color: var(--color-blanco);
            border-radius: 24px;
            padding: 3.5rem;
            margin: 4rem 0;
            position: relative;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 50, 80, 0.2);
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
            filter: blur(50px);
        }

        .brand-motto-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--color-dorado-andino);
            margin-bottom: 1.2rem;
        }

        /* PILARES DE MARCA */
        .pillar-card {
            background: var(--color-blanco);
            border-radius: 20px;
            padding: 2.2rem;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.03);
            transition: all 0.3s ease;
            height: 100%;
        }

        .pillar-card:hover {
            transform: translateY(-6px);
            border-color: var(--color-naranja-journey);
            box-shadow: 0 15px 35px rgba(233, 77, 0, 0.12);
        }

        .pillar-icon-box {
            width: 62px;
            height: 62px;
            border-radius: 16px;
            background: rgba(233, 77, 0, 0.1);
            color: var(--color-naranja-journey);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 1.4rem;
            transition: all 0.3s ease;
        }

        .pillar-card:hover .pillar-icon-box {
            background: var(--color-naranja-journey);
            color: var(--color-blanco);
            transform: rotate(-6deg) scale(1.05);
        }

        .pillar-name {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.5rem;
            font-family: 'Poppins', sans-serif;
        }

        /* 3. FOOTER CREATIVO & DINAMICO - Ancho Completo */
        .footer-custom {
            background-color: #001A2B;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding-top: 5rem;
            padding-bottom: 2rem;
            font-size: 0.98rem;
            color: #CBD5E1;
            width: 100%;
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
            border-top: 1px solid rgba(255, 255, 255, 0.06);
            margin-top: 4rem;
            padding-top: 2rem;
            text-align: center;
            color: #94A3B8;
            font-size: 0.92rem;
        }

        /* Icono Flotante de WhatsApp */
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

        /* Responsivo */
        @media (max-width: 991.98px) {
            .hero-title { font-size: 3rem; }
            .hero-subtitle { font-size: 1.15rem; }
            .narrative-card-wrapper { padding: 2.2rem; }
            .brand-motto-title { font-size: 2rem; }
            .section-title { font-size: 2.2rem; }
            .logo-img-header { height: 65px; }
        }

        @media (max-width: 575.98px) {
            .hero-title { font-size: 2.2rem; }
            .creative-card { flex: 0 0 300px; }
            .logo-img-header { height: 55px; }
        }
    </style>
</head>
<body>

    <!-- 1. HEADER - Ancho Completo -->
    <!-- Top Bar Superior -->
    <div class="top-bar py-2">
        <div class="container-fluid px-3 px-lg-5 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <!-- Teléfonos de contacto y Correo -->
            <div class="d-flex align-items-center gap-3 flex-wrap">
                <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="topbar-phone-badge d-flex align-items-center gap-2">
                    <i class="bi bi-telephone-fill text-warning"></i>
                    <span><strong><?php echo $phones['ventas']['label']; ?>:</strong> <?php echo $phones['ventas']['number']; ?></span>
                </a>
                <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="topbar-phone-badge d-flex align-items-center gap-2">
                    <i class="bi bi-gear-fill text-warning"></i>
                    <span><strong><?php echo $phones['operaciones']['label']; ?>:</strong> <?php echo $phones['operaciones']['number']; ?></span>
                </a>
                <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="topbar-phone-badge d-flex align-items-center gap-2">
                    <i class="bi bi-shield-check text-warning"></i>
                    <span><strong><?php echo $phones['calidad']['label']; ?>:</strong> <?php echo $phones['calidad']['number']; ?></span>
                </a>
                <a href="mailto:<?php echo $email_address; ?>" class="d-none d-xl-flex align-items-center gap-2 ms-2">
                    <i class="bi bi-envelope-fill text-warning"></i>
                    <span><?php echo $email_address; ?></span>
                </a>
            </div>

            <!-- Social Links con Hover -->
            <div class="d-none d-md-flex align-items-center gap-3">
                <small class="text-light me-1">Síguenos:</small>
                <a href="https://facebook.com" target="_blank" class="topbar-social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com" target="_blank" class="topbar-social-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://tiktok.com" target="_blank" class="topbar-social-icon" title="TikTok"><i class="bi bi-tiktok"></i></a>
                <a href="https://youtube.com" target="_blank" class="topbar-social-icon" title="YouTube"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Menú Pegajoso (Sticky Navbar) Ancho Completo -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-custom py-3">
        <div class="container-fluid px-3 px-lg-5">
            <!-- Imagen del Logo (Tamaño Aumentado) -->
            <a class="navbar-brand-logo" href="https://www.perusafejourneysgroup.com/">
                <img src="https://www.perusafejourneysgroup.com/wp-content/uploads/2026/10/Diseno-sin-titulo.png" alt="Perú Safe Journeys Logo" class="logo-img-header">
            </a>

            <!-- Toggle Mobile -->
            <button class="navbar-toggler text-white border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-1 text-white"></i>
            </button>

            <!-- Menú Links & Botón Llama -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="https://www.perusafejourneysgroup.com/">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneysgroup.com/destinos/">DESTINOS</a>
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

                <!-- BOTON "Reserva tu Viaje" con icono llamita -->
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


    <!-- 2. CONTENIDO DE LA PAGINA -->
    <!-- Slider con Video de Fondo (YouTube Video Background) Ancho Completo -->
    <section class="hero-video-slider">
        <!-- Contenedor del video embed de YouTube con autoplay, loop, mute -->
        <div class="video-background-wrapper">
            <iframe src="https://www.youtube.com/embed/QPBMvXbjjUI?autoplay=1&mute=1&controls=0&loop=1&playlist=QPBMvXbjjUI&showinfo=0&rel=0&iv_load_policy=3&enablejsapi=1"
                    title="Perú Safe Journeys Background Video"
                    frameborder="0"
                    allow="autoplay; encrypted-media">
            </iframe>
        </div>
        <div class="video-overlay-gradient"></div>

        <!-- Letras Creativas -->
        <div class="container-fluid px-3 px-lg-5 position-relative">
            <div class="hero-content mx-auto animate__animated animate__fadeInUp">
                <span class="badge bg-warning text-dark px-4 py-2 rounded-pill font-weight-bold text-uppercase mb-3 fs-6">
                    🇵🇪 Experiencias Auténticas en el Perú
                </span>
                <h1 class="hero-title">
                    Vive el Perú a tu manera
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


    <!-- 5 Tarjetas Creativas con Botones de Desplazamiento Ancho Completo -->
    <section class="cards-slider-section">
        <div class="container-fluid px-3 px-lg-5">
            <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-4">
                <div>
                    <span class="section-badge">🗺️ EXPERIENCIAS DESTACADAS</span>
                    <h2 class="section-title">Encuentra tu próximo destino</h2>
                    <p class="text-muted mb-0 fs-5">Explora nuestras categorías de viaje diseñadas para cada tipo de aventurero.</p>
                </div>

                <!-- Botones de desplazamiento -->
                <div class="d-flex gap-2">
                    <button class="slider-nav-btn" id="slidePrevBtn" aria-label="Anterior">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="slider-nav-btn" id="slideNextBtn" aria-label="Siguiente">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>

            <!-- Contenedor del Slider con 5 Tarjetas -->
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


    <!-- Contenido Creativo con Movimiento utilizando los colores principales - Ancho Completo -->
    <section class="creative-narrative-section">
        <div class="animated-bg-shape bg-shape-1"></div>
        <div class="animated-bg-shape bg-shape-2"></div>

        <div class="container-fluid px-3 px-lg-5">
            <div class="narrative-card-wrapper">
                <!-- Bloque de Introducción de la Marca -->
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
                        <p class="narrative-paragraph fw-semibold text-dark">
                            Nuestro propósito es convertir cada viaje en una experiencia memorable, combinando la riqueza cultural del Perú con la confianza de viajar acompañado por especialistas locales.
                        </p>
                    </div>

                    <div class="col-lg-5">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80" alt="Machu Picchu Perú Safe Journeys" class="img-fluid rounded-4 shadow-lg w-100" style="border: 4px solid #fff;">
                            <div class="position-absolute bottom-0 start-0 m-4 p-4 rounded-3 text-white shadow-lg" style="background: rgba(0, 50, 80, 0.92); backdrop-filter: blur(8px);">
                                <i class="bi bi-quote fs-2 text-warning"></i>
                                <p class="fs-6 mb-0">"Convertimos cada recorrido en una historia para recordar."</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONTENIDO CREATIVO BANNER DESTACADO -->
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

                <!-- PILARES DE MARCA -->
                <div class="pt-4">
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
                                    <p class="text-secondary mb-0" style="line-height: 1.7; font-size: 1rem;"><?php echo $pillar['desc']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- 3. FOOTER CREATIVO Y DINÁMICO - Ancho Completo -->
    <footer class="footer-custom" id="contacto">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row g-4 justify-content-between">
                <!-- Branding & Descripción -->
                <div class="col-lg-4 col-md-6">
                    <a href="https://www.perusafejourneysgroup.com/" class="footer-logo">
                        Perú Safe Journeys <span>| Viajes Perú</span>
                    </a>
                    <p class="pe-lg-4" style="color: #94A3B8; font-size: 1rem;">
                        Agencia de viajes especializada en experiencias auténticas, seguras y personalizadas. Conectamos viajeros con el corazón cultural, histórico y natural del Perú.
                    </p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="https://facebook.com" target="_blank" class="footer-contact-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com" target="_blank" class="footer-contact-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://tiktok.com" target="_blank" class="footer-contact-icon" title="TikTok"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <!-- Enlaces Rápidos -->
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

                <!-- Datos de Contacto Requeridos -->
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

            <!-- Pie de página copyright -->
            <div class="footer-bottom">
                <p class="mb-0">
                    &copy; <?php echo $current_year; ?> Todos los derechos reservados para: <strong>Perú Safe Journeys | Viajes Perú</strong>
                </p>
            </div>
        </div>
    </footer>

    <!-- Icono flotante de WhatsApp que lleva al contacto de Ventas (+51 931 352 810) -->
    <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Per%C3%BA%20Safe%20Journeys"
       class="whatsapp-float"
       target="_blank"
       aria-label="Contactar por WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Scripts Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>

    <!-- Custom JS Script para Interactividad del Slider -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Navbar Scroll Effect
            const navbar = document.querySelector('.navbar-custom');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Slider Nav Controls
            const track = document.getElementById('cardsTrack');
            const prevBtn = document.getElementById('slidePrevBtn');
            const nextBtn = document.getElementById('slideNextBtn');

            if (track && prevBtn && nextBtn) {
                const scrollAmount = 388; // width of card + gap

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
