<?php
// page-inicio.php - Perú Safe Journeys
$company_name = "Perú Safe Journeys";
$company_tagline = "tu camino hacia un Perú auténtico";
$phone_number = "+51 948 364 822";
$phone_clean = "51948364822";
$email_address = "informes-web@perusafejourneys.com";
$current_year = date('Y');

// Array de tarjetas de tours
$tour_cards = [
    [
        'title' => 'Tours Tradicionales',
        'desc' => 'Descubre lugares imprescindibles del Perú.',
        'badge' => 'Cultura e Historia',
        'img' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'link' => '#tours-tradicionales'
    ],
    [
        'title' => 'Tours de Caminata',
        'desc' => 'Rutas, Montañas y Paisajes que te conectan con la naturaleza.',
        'badge' => 'Trekking & Nature',
        'img' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'link' => '#tours-caminata'
    ],
    [
        'title' => 'Aventura',
        'desc' => 'Experiencias llenas de adrenalina para los más valientes.',
        'badge' => 'Adrenalina pura',
        'img' => 'https://images.unsplash.com/photo-1533130061792-64b345e4a833?auto=format&fit=crop&w=800&q=80',
        'link' => '#aventura'
    ],
    [
        'title' => 'Expediciones',
        'desc' => 'Selva y montaña para explorar con territorios únicos.',
        'badge' => 'Exploración',
        'img' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80',
        'link' => '#expediciones'
    ],
    [
        'title' => 'Turismo Vivencial',
        'desc' => 'Comparte, aprende y vive nuestras tradiciones.',
        'badge' => 'Tradición Local',
        'img' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80',
        'link' => '#turismo-vivencial'
    ]
];

// Pilares de Marca con imágenes de alta calidad
$brand_pillars = [
    [
        'title' => 'Autenticidad',
        'desc' => 'Experiencias conectadas con la verdadera esencia, mística y tradiciones del Perú.',
        'icon' => 'bi-compass-fill',
        'img' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Seguridad',
        'desc' => 'Planificación responsable y acompañamiento profesional constante durante todo tu viaje.',
        'icon' => 'bi-shield-check',
        'img' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Personalización',
        'desc' => 'Itinerarios hechos a la medida diseñados según tus intereses, ritmo y preferencias.',
        'icon' => 'bi-sliders',
        'img' => 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Confianza',
        'desc' => 'Atención cálida y personalizada antes, durante y después de cada una de tus experiencias.',
        'icon' => 'bi-heart-fill',
        'img' => 'https://images.unsplash.com/photo-1539635273304-0e8723e0f016?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Conexión',
        'desc' => 'Cultura viva, historia milenaria, naturaleza imponente, gastronomía y comunidades locales.',
        'icon' => 'bi-people-fill',
        'img' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=600&q=80'
    ],
    [
        'title' => 'Confort',
        'desc' => 'Servicios de alta calidad pensados para disfrutar cada destino con máxima comodidad.',
        'icon' => 'bi-stars',
        'img' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=600&q=80'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company_name; ?> - Viajes Auténticos y Seguros por el Perú</title>

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

        /* Hero Video Section */
        .hero-section {
            position: relative;
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-color: var(--color-azul-oscuro);
        }

        .video-background-container {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100vw;
            height: 100vh;
            transform: translate(-50%, -50%);
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        }

        .video-background-container iframe {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100vw;
            height: 56.25vw;
            min-height: 100vh;
            min-width: 177.77vh;
            transform: translate(-50%, -50%) scale(1.2);
            filter: brightness(0.55) contrast(1.1);
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg,
                rgba(7, 18, 42, 0.75) 0%,
                rgba(11, 27, 61, 0.6) 50%,
                rgba(11, 27, 61, 0.95) 100%);
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            max-width: 920px;
            text-align: center;
            padding: 4rem 1.5rem;
        }

        .hero-badge {
            display: inline-block;
            background-color: rgba(255, 107, 0, 0.25);
            border: 1px solid var(--color-naranja);
            color: #FFB380;
            font-size: 0.9rem;
            font-weight: 700;
            padding: 0.45rem 1.3rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 1.5rem;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 4.2rem;
            font-weight: 800;
            color: var(--color-blanco);
            line-height: 1.15;
            margin-bottom: 1.5rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.6);
        }

        .hero-title span {
            color: var(--color-naranja);
            font-family: 'Caveat', cursive;
            font-size: 5rem;
            display: block;
            margin-top: -0.5rem;
            font-weight: 700;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: #E2E8F0;
            margin-bottom: 2.5rem;
            line-height: 1.6;
            max-width: 780px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-hero-primary {
            background-color: var(--color-naranja);
            color: var(--color-blanco);
            font-weight: 700;
            font-size: 1.05rem;
            padding: 0.85rem 2.2rem;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 6px 20px var(--color-naranja-glow);
            transition: all 0.3s ease;
        }

        .btn-hero-primary:hover {
            background-color: var(--color-naranja-hover);
            color: var(--color-blanco);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(255, 107, 0, 0.5);
        }

        .btn-hero-secondary {
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);
            color: var(--color-blanco);
            font-weight: 700;
            font-size: 1.05rem;
            padding: 0.85rem 2.2rem;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .btn-hero-secondary:hover {
            background-color: var(--color-blanco);
            color: var(--color-azul-oscuro);
            transform: translateY(-3px);
        }

        /* Tarjetas Creativas Carousel Section - Fondo Blanco con contraste elegante */
        .cards-section {
            padding: 5.5rem 0;
            position: relative;
            background-color: var(--color-blanco);
        }

        .section-header {
            margin-bottom: 3rem;
        }

        .section-tag {
            color: var(--color-naranja);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            display: block;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.6rem;
            font-weight: 800;
            color: var(--color-azul-oscuro);
        }

        .cards-slider-container {
            position: relative;
            overflow: hidden;
            padding: 1rem 0;
        }

        .cards-track {
            display: flex;
            gap: 1.5rem;
            transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1);
            scroll-behavior: smooth;
        }

        .tour-card {
            min-width: 280px;
            max-width: 340px;
            flex: 0 0 calc(20% - 1.2rem);
            background: var(--color-blanco);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
            position: relative;
            box-shadow: 0 8px 20px rgba(11, 27, 61, 0.06);
        }

        @media (max-width: 1200px) {
            .tour-card { flex: 0 0 calc(33.333% - 1rem); }
        }

        @media (max-width: 768px) {
            .tour-card { flex: 0 0 calc(50% - 0.75rem); }
        }

        @media (max-width: 576px) {
            .tour-card { flex: 0 0 85%; }
        }

        .tour-card:hover {
            transform: translateY(-10px);
            border-color: var(--color-naranja);
            box-shadow: 0 20px 35px rgba(255, 107, 0, 0.2);
        }

        .card-img-wrapper {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .tour-card:hover .card-img-wrapper img {
            transform: scale(1.1);
        }

        .card-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(11, 27, 61, 0.88);
            backdrop-filter: blur(6px);
            color: var(--color-blanco);
            font-weight: 700;
            font-size: 0.75rem;
            padding: 0.35rem 0.85rem;
            border-radius: 30px;
            border: 1px solid rgba(255, 107, 0, 0.5);
            text-transform: uppercase;
        }

        .card-body-custom {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .card-title-custom {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--color-azul-oscuro);
            margin-bottom: 0.75rem;
        }

        .card-text-custom {
            font-size: 0.92rem;
            color: var(--color-texto-suave);
            line-height: 1.5;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .btn-card-action {
            background-color: transparent;
            color: var(--color-naranja);
            border: 1.5px solid var(--color-naranja);
            border-radius: 50px;
            padding: 0.55rem 1.2rem;
            font-weight: 700;
            font-size: 0.88rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .btn-card-action:hover {
            background-color: var(--color-naranja);
            color: var(--color-blanco);
            box-shadow: 0 4px 15px var(--color-naranja-glow);
        }

        /* Botones de desplazamiento slider */
        .slider-controls {
            display: flex;
            gap: 12px;
        }

        .btn-slider-nav {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: var(--color-blanco);
            border: 1px solid var(--color-gris-border);
            color: var(--color-azul-oscuro);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .btn-slider-nav:hover {
            background-color: var(--color-naranja);
            border-color: var(--color-naranja);
            color: var(--color-blanco);
            box-shadow: 0 4px 15px var(--color-naranja-glow);
            transform: scale(1.05);
        }

        /* Sección Concepto de la Agencia con Imágenes Creativas */
        .concept-section {
            padding: 6rem 0;
            background-color: var(--color-gris-bg);
            position: relative;
            border-top: 1px solid var(--color-gris-border);
            border-bottom: 1px solid var(--color-gris-border);
        }

        .agency-card-creative {
            background: var(--color-blanco);
            border-radius: 24px;
            padding: 3rem;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 15px 40px rgba(11, 27, 61, 0.08);
            margin-bottom: 4rem;
        }

        .agency-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.3rem;
            font-weight: 800;
            color: var(--color-azul-oscuro);
            margin-bottom: 1.5rem;
        }

        .agency-title span {
            color: var(--color-naranja);
        }

        .text-lead-custom {
            font-size: 1.08rem;
            color: #334155;
            line-height: 1.8;
            margin-bottom: 1.2rem;
        }

        .img-grid-creative {
            position: relative;
        }

        .img-creative-main {
            width: 100%;
            height: 380px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(11, 27, 61, 0.15);
        }

        .img-creative-overlay {
            position: absolute;
            bottom: -25px;
            left: -25px;
            width: 55%;
            height: 200px;
            object-fit: cover;
            border-radius: 16px;
            border: 5px solid var(--color-blanco);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .badge-floating-experience {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--color-naranja);
            color: var(--color-blanco);
            padding: 0.75rem 1.25rem;
            border-radius: 16px;
            font-weight: 800;
            box-shadow: 0 8px 20px var(--color-naranja-glow);
            text-align: center;
        }

        /* Sección PILARES DE MARCA REDISEÑADA Y SUPER CREATIVA */
        .pillars-section {
            padding: 6rem 0;
            background-color: var(--color-blanco);
        }

        .pillar-card-creative {
            background: var(--color-blanco);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 10px 25px rgba(11, 27, 61, 0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .pillar-card-creative:hover {
            transform: translateY(-10px);
            border-color: var(--color-naranja);
            box-shadow: 0 20px 40px rgba(255, 107, 0, 0.2);
        }

        .pillar-img-box {
            position: relative;
            height: 190px;
            overflow: hidden;
        }

        .pillar-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .pillar-card-creative:hover .pillar-img-box img {
            transform: scale(1.12);
        }

        .pillar-icon-badge {
            position: absolute;
            bottom: -22px;
            right: 20px;
            width: 52px;
            height: 52px;
            background: var(--color-naranja);
            color: var(--color-blanco);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 6px 18px var(--color-naranja-glow);
            border: 3px solid var(--color-blanco);
            transition: transform 0.3s ease;
        }

        .pillar-card-creative:hover .pillar-icon-badge {
            transform: rotate(8deg) scale(1.1);
        }

        .pillar-content {
            padding: 2rem 1.5rem 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .pillar-title-creative {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--color-azul-oscuro);
            margin-bottom: 0.75rem;
        }

        .pillar-desc-creative {
            font-size: 0.95rem;
            color: var(--color-texto-suave);
            line-height: 1.6;
        }

        /* Banner Promocional Creativo */
        .creative-banner {
            background: linear-gradient(135deg, var(--color-azul-oscuro) 0%, #132752 100%);
            border-radius: 24px;
            padding: 3.5rem 2.5rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(11, 27, 61, 0.2);
            color: var(--color-blanco);
            margin-top: 4rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .creative-banner::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 350px;
            height: 350px;
            background: radial-gradient(circle, rgba(255, 107, 0, 0.25) 0%, rgba(0,0,0,0) 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .creative-banner h3 {
            font-family: 'Playfair Display', serif;
            font-size: 2.3rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .creative-banner p {
            font-size: 1.1rem;
            max-width: 750px;
            color: #E2E8F0;
            margin-bottom: 2rem;
        }

        .btn-banner {
            background-color: var(--color-naranja);
            color: var(--color-blanco) !important;
            font-weight: 800;
            padding: 0.85rem 2.2rem;
            border-radius: 50px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px var(--color-naranja-glow);
        }

        .btn-banner:hover {
            background-color: var(--color-naranja-hover);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 107, 0, 0.5);
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
                        <a class="nav-link active" href="#inicio">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#destinos">DESTINOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experiencias">EXPERIENCIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#programas">PROGRAMAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">CONTACTO</a>
                    </li>
                </ul>

                <!-- BOTON "Reserva tu Viaje" con icono llamita -->
                <div class="text-center text-lg-end mt-3 mt-lg-0">
                    <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20reservar%20un%20viaje%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="btn-reserva-llama">
                        <!-- Icono Llamita SVG -->
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
    <main id="inicio">
        <!-- Hero Slider / Video Background -->
        <section class="hero-section">
            <div class="video-background-container">
                <iframe src="https://www.youtube.com/embed/1-fIilS45Q0?autoplay=1&mute=1&controls=0&loop=1&playlist=1-fIilS45Q0&showinfo=0&rel=0&enablejsapi=1"
                        title="Perú Travel Video"
                        frameborder="0"
                        allow="autoplay; encrypted-media"
                        allowfullscreen>
                </iframe>
            </div>
            <div class="hero-overlay"></div>

            <div class="container hero-content animate__animated animate__fadeIn">
                <span class="hero-badge animate__animated animate__fadeInDown"><i class="bi bi-star-fill text-warning me-2"></i> Experiencias Únicas e Inolvidables</span>
                <h1 class="hero-title">
                    Perú Safe Journeys
                    <span>Vive el Perú a tu manera</span>
                </h1>
                <p class="hero-subtitle">
                    Diseñamos viajes personalizados con seguridad, confort y una profunda conexión con nuestra cultura, historia y naturaleza.
                </p>
                <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                    <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20quisiera%20reservar%20ahora%20y%20viajar" target="_blank" class="btn-hero-primary">
                        <i class="bi bi-calendar-check-fill"></i> Reserva Ahora y Viaja
                    </a>
                    <a href="#tours-destacados" class="btn-hero-secondary">
                        <i class="bi bi-compass"></i> Explora Nuestros Tours
                    </a>
                </div>
            </div>
        </section>


        <!-- 5 Tarjetas Creativas en Fondo Blanco -->
        <section class="cards-section" id="tours-destacados">
            <div class="container">
                <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 section-header">
                    <div>
                        <span class="section-tag"><i class="bi bi-map me-1"></i> Categorías Principales</span>
                        <h2 class="section-title mb-0">Explora Nuestras Experiencias</h2>
                    </div>
                    <!-- Botones de Desplazamiento -->
                    <div class="slider-controls">
                        <button class="btn-slider-nav" id="btn-prev" aria-label="Anterior">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        <button class="btn-slider-nav" id="btn-next" aria-label="Siguiente">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Slider Track con 5 Tarjetas -->
                <div class="cards-slider-container">
                    <div class="cards-track" id="cardsTrack">
                        <?php foreach($tour_cards as $card): ?>
                        <div class="tour-card" id="<?php echo str_replace('#', '', $card['link']); ?>">
                            <div class="card-img-wrapper">
                                <img src="<?php echo $card['img']; ?>" alt="<?php echo $card['title']; ?>" loading="lazy">
                                <span class="card-badge"><?php echo $card['badge']; ?></span>
                            </div>
                            <div class="card-body-custom">
                                <h3 class="card-title-custom"><?php echo $card['title']; ?></h3>
                                <p class="card-text-custom"><?php echo $card['desc']; ?></p>
                                <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20informaci%C3%B3n%20sobre%20<?php echo urlencode($card['title']); ?>" class="btn-card-action" target="_blank">
                                    <span>Ver Detalles</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>


        <!-- Sección Concepto de la Agencia con Composición de Imágenes Creativas -->
        <section class="concept-section" id="nosotros">
            <div class="container">
                <div class="agency-card-creative">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-7">
                            <span class="section-tag"><i class="bi bi-award me-1"></i> Especialistas Locales en Perú</span>
                            <h2 class="agency-title">
                                Perú Safe Journeys – <span>Travel Agency</span>
                            </h2>
                            <p class="text-lead-custom">
                                Es una agencia especializada en crear experiencias auténticas, seguras y personalizadas por el Perú. Diseñamos cada viaje pensando en que nuestros viajeros no solo conozcan destinos, sino que vivan la esencia de cada lugar, conectando con nuestras culturas, tradiciones, historia, gastronomía y extraordinarios paisajes.
                            </p>
                            <p class="text-lead-custom">
                                Desde la majestuosidad de Cusco y Machu Picchu, pasando por el Valle Sagrado, los Andes y la Amazonía, hasta las costas del Pacífico, acompañamos a nuestros viajeros con atención personalizada, planificación profesional, seguridad y confort en cada etapa de su aventura.
                            </p>
                            <div class="p-3 mt-4 rounded-3" style="background: rgba(255, 107, 0, 0.08); border-left: 4px solid var(--color-naranja);">
                                <p class="mb-0 text-dark fw-semibold fs-6">
                                    <i class="bi bi-quote fs-4 text-warning me-2"></i>
                                    <strong>Nuestro propósito:</strong> Convertir cada viaje en una experiencia memorable, combinando la riqueza cultural del Perú con la confianza de viajar acompañado por especialistas locales.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="img-grid-creative">
                                <img src="https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80" alt="Machu Picchu Cusco" class="img-creative-main">
                                <img src="https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=600&q=80" alt="Cultura viva en Cusco" class="img-creative-overlay d-none d-sm-block">
                                <div class="badge-floating-experience">
                                    <i class="bi bi-patch-check-fill fs-3 d-block mb-1"></i>
                                    100% Seguro & Garantizado
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center max-w-800 mx-auto mt-5 pt-3">
                    <span class="section-tag"><i class="bi bi-heart me-1"></i> Tu Camino Hacia Un Perú Auténtico</span>
                    <h2 class="section-title">CONTENIDO CREATIVO</h2>
                    <p class="fs-5 text-dark fw-medium mt-3" style="max-width: 850px; margin-left: auto; margin-right: auto;">
                        Perú Safe Journeys: tu camino hacia un Perú auténtico.
                    </p>
                    <p class="text-secondary fs-6" style="max-width: 850px; margin-left: auto; margin-right: auto; line-height: 1.8;">
                        Creamos viajes que van más allá del turismo convencional. Diseñamos experiencias a tu medida para descubrir el Perú de manera segura, cómoda y auténtica, conectándote con sus pueblos, culturas, historia, naturaleza y tradiciones.
                    </p>
                    <p class="text-secondary fs-6" style="max-width: 850px; margin-left: auto; margin-right: auto; line-height: 1.8;">
                        Con conocimiento local y atención personalizada, transformamos cada recorrido en una historia para recordar. Tú eliges cómo quieres vivir el Perú; nosotros nos encargamos de hacer del camino una experiencia segura y extraordinaria.
                    </p>
                </div>
            </div>
        </section>


        <!-- Sección PILARES DE MARCA con Imágenes y Diseño Creativo -->
        <section class="pillars-section" id="experiencias">
            <div class="container">
                <div class="text-center mb-5">
                    <span class="section-tag"><i class="bi bi-gem me-1"></i> Nuestros Valores Fundamentales</span>
                    <h2 class="section-title">Pilares de marca</h2>
                    <p class="text-muted fs-6 mt-2">Los cimientos que garantizan que cada aventura sea extraordinaria.</p>
                </div>

                <div class="row g-4">
                    <?php foreach($brand_pillars as $pillar): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="pillar-card-creative">
                            <div class="pillar-img-box">
                                <img src="<?php echo $pillar['img']; ?>" alt="<?php echo $pillar['title']; ?>" loading="lazy">
                                <div class="pillar-icon-badge">
                                    <i class="bi <?php echo $pillar['icon']; ?>"></i>
                                </div>
                            </div>
                            <div class="pillar-content">
                                <h3 class="pillar-title-creative"><?php echo $pillar['title']; ?></h3>
                                <p class="pillar-desc-creative mb-0"><?php echo $pillar['desc']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Banner Promocional Creativo -->
                <div class="creative-banner text-center text-lg-start d-lg-flex align-items-center justify-content-between" id="programas">
                    <div class="position-relative z-2">
                        <h3>¿Listo para empezar tu viaje soñado?</h3>
                        <p class="mb-lg-0">Contáctanos hoy y comencemos a planificar juntos tu próxima aventura inolvidable por el Perú.</p>
                    </div>
                    <div class="position-relative z-2">
                        <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20planificar%20un%20viaje%20personalizado" target="_blank" class="btn-banner">
                            <i class="bi bi-whatsapp me-2"></i> Chatea con un Especialista
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>


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
                        <li><a href="#inicio"><i class="bi bi-chevron-right text-warning fs-6"></i> INICIO</a></li>
                        <li><a href="#destinos"><i class="bi bi-chevron-right text-warning fs-6"></i> DESTINOS</a></li>
                        <li><a href="#experiencias"><i class="bi bi-chevron-right text-warning fs-6"></i> EXPERIENCIAS</a></li>
                        <li><a href="#programas"><i class="bi bi-chevron-right text-warning fs-6"></i> PROGRAMAS</a></li>
                        <li><a href="#nosotros"><i class="bi bi-chevron-right text-warning fs-6"></i> NOSOTROS</a></li>
                        <li><a href="#contacto"><i class="bi bi-chevron-right text-warning fs-6"></i> CONTACTO</a></li>
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
    <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20tours"
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
            // Navbar cambio de fondo al hacer scroll
            const navbar = document.querySelector('.navbar-custom');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Lógica de desplazamiento para las 5 Tarjetas Creativas
            const track = document.getElementById('cardsTrack');
            const btnPrev = document.getElementById('btn-prev');
            const btnNext = document.getElementById('btn-next');

            if (track && btnPrev && btnNext) {
                const scrollAmount = 320;

                btnNext.addEventListener('click', function() {
                    track.scrollBy({
                        left: scrollAmount,
                        behavior: 'smooth'
                    });
                });

                btnPrev.addEventListener('click', function() {
                    track.scrollBy({
                        left: -scrollAmount,
                        behavior: 'smooth'
                    });
                });
            }

            // Smooth Scroll para enlaces internos de navegación
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const targetId = this.getAttribute('href');
                    if (targetId && targetId !== '#') {
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            e.preventDefault();
                            const offsetTop = targetElement.getBoundingClientRect().top + window.pageYOffset - 90;
                            window.scrollTo({
                                top: offsetTop,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
