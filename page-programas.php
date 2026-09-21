<?php
// page-programas.php - Perú Safe Journeys
$company_name = "Perú Safe Journeys";
$company_tagline = "tu camino hacia un Perú auténtico";
$phone_number = "+51 948 364 822";
$phone_clean = "51948364822";
$email_address = "informes-web@perusafejourneys.com";
$current_year = date('Y');

// Array de Programas
$programas = [
    [
        'id' => 'cusco-machu-picchu',
        'icon' => '🏔️',
        'title' => 'CUSCO & MACHU PICCHU',
        'subtitle' => 'La esencia del mundo Inca',
        'duration' => '5 días / 4 noches',
        'desc' => 'Descubre la magia de Cusco y vive el momento más esperado de tu viaje: Machu Picchu. Recorre la ciudad imperial, explora sus impresionantes sitios arqueológicos, descubre el Valle Sagrado y déjate sorprender por una de las maravillas más extraordinarias del mundo.',
        'includes' => 'Cusco City Tour • 4 ruinas incas • Valle Sagrado • Machu Picchu',
        'ideal' => 'viajeros que visitan Perú por primera vez.',
        'tagline' => '✨ Desde Cusco hasta Machu Picchu, cada día tiene una historia que contar.',
        'btn_text' => 'VER PROGRAMA →',
        'img' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Cusco & Machu Picchu'
    ],
    [
        'id' => 'lima-cusco-machu-picchu',
        'icon' => '🇵🇪',
        'title' => 'LIMA + CUSCO + MACHU PICCHU',
        'subtitle' => 'Perú en una sola aventura',
        'duration' => '6 días / 5 noches',
        'desc' => 'Una combinación perfecta para descubrir algunos de los lugares más representativos del Perú. Comienza en Lima, conoce su historia y gastronomía, continúa hacia Cusco y explora el legado de los Incas antes de llegar al espectacular Machu Picchu.',
        'includes' => 'Lima City Tour • Cusco City Tour • 4 ruinas incas • Valle Sagrado • Machu Picchu',
        'ideal' => 'viajeros que desean conocer lo esencial del Perú en pocos días.',
        'tagline' => '✨ Tres destinos. Una gran aventura.',
        'btn_text' => 'DESCUBRIR PROGRAMA →',
        'img' => 'https://images.unsplash.com/photo-1531968455001-5c5272a41129?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Lima + Cusco + Machu Picchu'
    ],
    [
        'id' => 'valle-sagrado-machu-picchu',
        'icon' => '🌄',
        'title' => 'VALLE SAGRADO + MACHU PICCHU',
        'subtitle' => 'Un viaje entre montañas y misterio',
        'duration' => '3 días / 2 noches',
        'desc' => 'Conecta con la historia del mundo Inca recorriendo el espectacular Valle Sagrado y culminando la experiencia en la ciudadela de Machu Picchu. Descubre paisajes andinos, pueblos tradicionales y antiguos centros arqueológicos antes de llegar a uno de los lugares más fascinantes del planeta.',
        'includes' => 'Valle Sagrado • Cultura Andina • Arqueología • Machu Picchu',
        'ideal' => 'viajeros con poco tiempo que quieren vivir una experiencia inolvidable.',
        'tagline' => '✨ De los Andes a Machu Picchu. Una experiencia que recordarás siempre.',
        'btn_text' => 'VER PROGRAMA →',
        'img' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Valle Sagrado'
    ],
    [
        'id' => 'cusco-montana-7-colores',
        'icon' => '🌈',
        'title' => 'CUSCO + MONTAÑA DE 7 COLORES',
        'subtitle' => 'Historia, cultura y aventura',
        'duration' => '4 días / 3 noches',
        'desc' => 'Una propuesta para quienes quieren descubrir la historia de Cusco y añadir una dosis de aventura a su viaje. Explora la ciudad imperial, descubre sus impresionantes sitios arqueológicos y prepárate para contemplar el espectacular paisaje de la Montaña de 7 Colores.',
        'includes' => 'Cusco • Arqueología • Trekking • Andes • Montaña de 7 Colores',
        'ideal' => 'viajeros aventureros y amantes de los paisajes de montaña.',
        'tagline' => '✨ Descubre la historia. Camina por los Andes. Vive la aventura.',
        'btn_text' => 'EXPLORAR PROGRAMA →',
        'img' => 'https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Trekking & Aventura'
    ],
    [
        'id' => 'peru-inca',
        'icon' => '🏛️',
        'title' => 'PERÚ INCA',
        'subtitle' => 'Una inmersión en la historia del Perú',
        'duration' => '7 días / 6 noches',
        'desc' => 'Un programa diseñado para quienes quieren descubrir con mayor profundidad el legado de la civilización Inca. Recorre Cusco, sus sitios arqueológicos, el Valle Sagrado y Machu Picchu, disfrutando además de momentos para descubrir la cultura, gastronomía y tradiciones de los Andes.',
        'includes' => 'Historia • Cultura • Arqueología • Comunidades • Machu Picchu',
        'ideal' => 'viajeros interesados en historia, cultura y experiencias auténticas.',
        'tagline' => '✨ No solo visites el mundo Inca. Conoce su historia.',
        'btn_text' => 'DESCUBRIR PROGRAMA →',
        'img' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Inmersión Inca'
    ],
    [
        'id' => 'peru-naturaleza-aventura',
        'icon' => '🌿',
        'title' => 'PERÚ NATURALEZA & AVENTURA',
        'subtitle' => 'Un viaje para quienes buscan más',
        'duration' => 'Programa Aventura',
        'desc' => 'Combina algunos de los destinos más fascinantes del Perú con experiencias llenas de naturaleza y aventura. Explora los Andes, descubre paisajes extraordinarios y vive actividades diseñadas para conectar con la naturaleza.',
        'includes' => 'Trekking • Montañas • Naturaleza • Aventura • Cultura Andina',
        'ideal' => 'aventureros, amantes de la naturaleza y viajeros activos.',
        'tagline' => '✨ Más caminos. Más paisajes. Más historias.',
        'btn_text' => 'VER PROGRAMAS →',
        'img' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Naturaleza & Aventura'
    ],
    [
        'id' => 'peru-esencial',
        'icon' => '🌊',
        'title' => 'PERÚ ESENCIAL',
        'subtitle' => 'De la costa a los Andes',
        'duration' => '8 días / 7 noches',
        'desc' => 'Una experiencia diseñada para descubrir diferentes rostros del Perú. Conoce Lima, explora Cusco y el Valle Sagrado, maravíllate con Machu Picchu y continúa hacia paisajes donde el desierto y el océano crean una combinación sorprendente.',
        'includes' => 'Lima • Cusco • Valle Sagrado • Machu Picchu • Costa Peruana',
        'ideal' => 'viajeros que quieren descubrir diferentes regiones del Perú en un solo viaje.',
        'tagline' => '✨ Un país. Diferentes mundos. Una experiencia extraordinaria.',
        'btn_text' => 'CONOCER PROGRAMA →',
        'img' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Ruta Completa'
    ],
    [
        'id' => 'programas-romanticos',
        'icon' => '💕',
        'title' => 'PROGRAMAS ROMÁNTICOS',
        'subtitle' => 'Viaja juntos. Crea recuerdos para siempre.',
        'duration' => 'A medida para parejas',
        'desc' => 'Celebra una ocasión especial con una experiencia diseñada para compartir. Descubre Cusco, disfruta de los paisajes de los Andes y vive junto a esa persona especial un momento inolvidable en Machu Picchu.',
        'includes' => 'Hoteles con encanto • Cenas exclusivas • Vistas panorámicas • Machu Picchu',
        'ideal' => 'parejas • aniversarios • lunas de miel • celebraciones especiales',
        'tagline' => '✨ Algunos recuerdos merecen ser compartidos.',
        'btn_text' => 'CREAR EXPERIENCIA EN PAREJA →',
        'img' => 'https://images.unsplash.com/photo-1530521954074-e64f6810b32d?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Parejas & Lunas de Miel'
    ],
    [
        'id' => 'programas-en-familia',
        'icon' => '👨‍👩‍👧‍👦',
        'title' => 'PROGRAMAS EN FAMILIA',
        'subtitle' => 'El mejor viaje es el que se comparte',
        'duration' => 'A medida para familias',
        'desc' => 'Descubre el Perú junto a quienes más quieres. Creamos programas familiares que combinan cultura, aventura, naturaleza y momentos de descanso para que cada integrante de la familia pueda disfrutar del viaje.',
        'includes' => 'Rutas cómodas • Actividades interactivas • Guías amigables • Seguridad total',
        'ideal' => 'familias con niños, adolescentes o adultos mayores.',
        'tagline' => '✨ Viajar en familia es crear historias que duran toda la vida.',
        'btn_text' => 'VER PROGRAMAS FAMILIARES →',
        'img' => 'https://images.unsplash.com/photo-1476514525535-ce74f45814d0?auto=format&fit=crop&w=1000&q=80',
        'badge' => 'Viajes Familiares'
    ]
];

// Puntos de confianza (Viaja con Perú Safe Journeys)
$confianza_items = [
    "Atención personalizada",
    "Guías profesionales",
    "Operación organizada",
    "Experiencias auténticas",
    "Asistencia durante el viaje",
    "Programas flexibles y personalizados"
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programas de Viaje - <?php echo $company_name; ?></title>

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

        /* Hero Banner Section para Programas */
        .hero-banner-programas {
            position: relative;
            padding: 8rem 0 6rem;
            background: linear-gradient(180deg, rgba(7, 18, 42, 0.85) 0%, rgba(11, 27, 61, 0.92) 100%),
                        url('https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            color: var(--color-blanco);
            text-align: center;
            overflow: hidden;
        }

        .programas-hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 1.2rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .programas-hero-title span {
            color: var(--color-naranja);
            font-family: 'Caveat', cursive;
            font-size: 4.8rem;
            display: block;
            margin-top: -0.5rem;
        }

        .programas-hero-subtitle {
            font-size: 1.25rem;
            color: #E2E8F0;
            max-width: 820px;
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

        /* Tarjeta de Programa Creativa */
        .programa-card {
            background: var(--color-blanco);
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 12px 35px rgba(11, 27, 61, 0.07);
            margin-bottom: 4.5rem;
            transition: all 0.4s ease;
        }

        .programa-card:hover {
            transform: translateY(-6px);
            border-color: var(--color-naranja);
            box-shadow: 0 20px 45px rgba(255, 107, 0, 0.18);
        }

        .programa-img-box {
            position: relative;
            height: 100%;
            min-height: 390px;
            overflow: hidden;
        }

        .programa-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .programa-card:hover .programa-img-box img {
            transform: scale(1.08);
        }

        .programa-badge-top {
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

        .programa-duration-badge {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background: var(--color-naranja);
            color: var(--color-blanco);
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 800;
            box-shadow: 0 4px 15px var(--color-naranja-glow);
        }

        .programa-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--color-azul-oscuro);
            margin-bottom: 0.3rem;
        }

        .programa-subtitle {
            color: var(--color-naranja);
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 1.2rem;
        }

        .programa-desc {
            color: #334155;
            font-size: 1.02rem;
            line-height: 1.8;
            margin-bottom: 1.2rem;
        }

        .programa-includes-box {
            background-color: var(--color-gris-bg);
            border-radius: 16px;
            padding: 1.25rem;
            margin-bottom: 1.2rem;
            border-left: 4px solid var(--color-naranja);
        }

        .programa-quote-tagline {
            font-weight: 700;
            color: var(--color-azul-oscuro);
            font-size: 1.05rem;
            margin-bottom: 1.8rem;
        }

        .btn-programa-action {
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

        .btn-programa-action:hover {
            background-color: var(--color-naranja-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 0, 0.4);
        }

        /* Sección Programa Personalizado */
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

        .custom-tags-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin: 1.8rem 0 2rem;
        }

        .custom-tag-item {
            background-color: var(--color-gris-bg);
            border: 1px solid var(--color-gris-border);
            padding: 0.9rem 1.2rem;
            border-radius: 14px;
            font-weight: 700;
            color: var(--color-azul-oscuro);
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.98rem;
        }

        /* Sección Viaja con Perú Safe Journeys */
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
                        <a class="nav-link" href="page-experiencias.php">EXPERIENCIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="page-programas.php">PROGRAMAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-inicio.php#nosotros">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-inicio.php#contacto">CONTACTO</a>
                    </li>
                </ul>

                <!-- BOTON "Reserva tu Viaje" con icono llamita -->
                <div class="text-center text-lg-end mt-3 mt-lg-0">
                    <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20reservar%20un%20programa%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="btn-reserva-llama">
                        <svg class="llama-svg" viewBox="0 0 512 512">
                            <path d="M224 96c0-26.5 21.5-48 48-48s48 21.5 48 48c0 14.7-6.6 27.8-17 36.7 18.2 16.5 29 40 29 65.3v24h16c35.3 0 64 28.7 64 64v16c0 17.7-14.3 32-32 32h-16v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-80h-32v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-96c0-44.2 35.8-80 80-80v-24c0-13.3-5.3-25.3-14-34.1-10.4-10.5-17-24.8-17-40.6zM272 80c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16z"/>
                        </svg>
                        <span>Reserva tu Viaje</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>


    <!-- HERO BANNER PROGRAMAS -->
    <header class="hero-banner-programas">
        <div class="container animate__animated animate__fadeIn">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3 fs-6">
                ✈️ PROGRAMAS DE VIAJE
            </span>
            <h1 class="programas-hero-title">
                PROGRAMAS
                <span>Tu viaje comienza con una buena elección</span>
            </h1>
            <p class="programas-hero-subtitle">
                ¿Tienes pocos días? ¿Quieres conocer Machu Picchu? ¿Buscas una aventura por los Andes? ¿Prefieres descubrir el Perú con calma?<br>
                En <strong>Perú Safe Journeys</strong> hemos creado programas pensados para diferentes estilos de viajeros, combinando <strong>destinos increíbles, experiencias auténticas y una planificación cuidadosamente organizada</strong>.
            </p>
        </div>
    </header>


    <!-- INTRODUCCIÓN Y CONCEPTO -->
    <section class="intro-section">
        <div class="container">
            <div class="intro-box text-center">
                <h2 class="font-playfair fw-bold text-dark fs-2 mb-3">
                    Elige tu programa, prepara tus maletas
                </h2>
                <p class="fs-5 text-secondary mb-4" style="max-width: 850px; margin: 0 auto; line-height: 1.8;">
                    Déjanos ayudarte a convertir tus días en el Perú en una historia para recordar.
                </p>
                <div class="d-inline-block px-4 py-2 rounded-pill" style="background-color: var(--color-azul-oscuro); color: var(--color-blanco);">
                    <span class="fw-bold fs-5">🇵🇪 Elige tu ruta. Vive la experiencia. Descubre el Perú.</span>
                </div>
            </div>
        </div>
    </section>


    <!-- LISTA DE PROGRAMAS -->
    <section class="py-4" id="programas-list">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-2">
                    ⭐ NUESTROS PROGRAMAS
                </span>
                <h2 class="font-playfair fw-bold text-dark fs-1">
                    Itinerarios diseñados a tu medida
                </h2>
            </div>

            <?php foreach($programas as $index => $item): ?>
            <div class="programa-card" id="<?php echo $item['id']; ?>">
                <div class="row g-0 align-items-stretch <?php echo ($index % 2 != 0) ? 'flex-row-reverse' : ''; ?>">
                    <!-- Imagen del Programa -->
                    <div class="col-lg-6">
                        <div class="programa-img-box">
                            <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>" loading="lazy">
                            <span class="programa-badge-top"><?php echo $item['icon'] . ' ' . $item['badge']; ?></span>
                            <span class="programa-duration-badge"><i class="bi bi-clock-history me-1"></i> <?php echo $item['duration']; ?></span>
                        </div>
                    </div>

                    <!-- Contenido del Programa -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="p-4 p-md-5 w-100">
                            <h2 class="programa-title"><?php echo $item['title']; ?></h2>
                            <h3 class="programa-subtitle"><?php echo $item['subtitle']; ?></h3>
                            <p class="programa-desc"><?php echo $item['desc']; ?></p>

                            <div class="programa-includes-box">
                                <div class="mb-2 fs-6 text-dark">
                                    <strong>✨ Incluye experiencias:</strong><br>
                                    <span class="text-secondary"><?php echo $item['includes']; ?></span>
                                </div>
                                <div class="mb-0 fs-6 text-dark pt-1 border-top border-light-subtle">
                                    <strong>👉 Ideal para:</strong> <?php echo $item['ideal']; ?>
                                </div>
                            </div>

                            <p class="programa-quote-tagline">
                                <?php echo $item['tagline']; ?>
                            </p>

                            <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20programa%20<?php echo urlencode($item['title']); ?>" target="_blank" class="btn-programa-action">
                                <i class="bi bi-whatsapp"></i> <?php echo $item['btn_text']; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- SECCIÓN ¿NO ENCUENTRAS EL PROGRAMA PERFECTO? -->
    <section class="personalizadas-section" id="personalizar">
        <div class="container">
            <div class="personalizada-card text-center text-lg-start">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3">
                            🧭 ¿NO ENCUENTRAS EL PROGRAMA PERFECTO?
                        </span>
                        <h2 class="font-playfair fw-bold text-dark fs-2 mb-3">
                            Creamos uno para ti.
                        </h2>
                        <p class="fs-5 text-secondary mb-3">
                            Cada viajero tiene una forma diferente de descubrir el mundo. Por eso podemos adaptar nuestros programas según:
                        </p>

                        <div class="custom-tags-grid">
                            <div class="custom-tag-item"><i class="bi bi-calendar3 text-warning"></i> 📅 Número de días</div>
                            <div class="custom-tag-item"><i class="bi bi-geo-alt-fill text-warning"></i> 🏔️ Destinos a conocer</div>
                            <div class="custom-tag-item"><i class="bi bi-person-walking text-warning"></i> 🥾 Nivel de aventura</div>
                            <div class="custom-tag-item"><i class="bi bi-people-fill text-warning"></i> 👨‍👩‍👧 Tipo de viaje</div>
                            <div class="custom-tag-item"><i class="bi bi-wallet2 text-warning"></i> 💰 Presupuesto</div>
                            <div class="custom-tag-item"><i class="bi bi-heart-fill text-warning"></i> ❤️ Experiencias deseadas</div>
                        </div>

                        <p class="fs-6 text-secondary mb-4">
                            Cuéntanos qué tienes en mente y nuestro equipo puede ayudarte a diseñar una experiencia personalizada por el Perú.
                        </p>
                        <h4 class="font-playfair fw-bold mb-4" style="color: var(--color-naranja);">
                            ✨ Tú eliges cómo quieres viajar. Nosotros diseñamos el camino.
                        </h4>
                    </div>

                    <div class="col-lg-5 text-center">
                        <div class="p-4 rounded-4" style="background-color: var(--color-azul-oscuro); color: var(--color-blanco);">
                            <i class="bi bi-compass-fill fs-1 text-warning d-block mb-3"></i>
                            <h3 class="font-playfair fw-bold mb-3">Diseña tu Itinerario</h3>
                            <p class="text-light fs-6 mb-4">Planificación 100% personalizada con especialistas locales para hacer realidad el viaje de tus sueños.</p>
                            <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20dise%C3%B1ar%20mi%20viaje%20a%20medida%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="btn-reserva-llama fs-6 w-100 justify-content-center py-3">
                                <i class="bi bi-whatsapp"></i> DISEÑAR MI VIAJE →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SECCIÓN VIAJA CON PERÚ SAFE JOURNEYS -->
    <section class="confianza-section">
        <div class="container text-center">
            <span class="badge bg-primary text-white px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3" style="background-color: var(--color-azul-oscuro) !important;">
                🛡️ VIAJA CON PERÚ SAFE JOURNEYS
            </span>
            <h2 class="font-playfair fw-bold text-dark fs-2 mb-3">
                Cada programa está pensado para que disfrutes más y te preocupes menos.
            </h2>

            <div class="row g-3 justify-content-center mt-4 mb-4">
                <?php foreach($confianza_items as $confianza): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="confianza-item-card">
                        <div class="confianza-icon">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <span>✓ <?php echo $confianza; ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="mt-4">
                <span class="fs-5 fw-bold" style="color: var(--color-azul-oscuro);">
                    🇵🇪 Viaja seguro. Vive auténticamente. Descubre el Perú.
                </span>
            </div>
        </div>
    </section>


    <!-- SECCIÓN CALL TO ACTION FINAL -->
    <section class="cta-final-section">
        <div class="container position-relative z-2">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3">
                ✨ TU PRÓXIMA HISTORIA COMIENZA AQUÍ
            </span>
            <h2 class="cta-final-title">
                Machu Picchu te espera.
            </h2>
            <p class="cta-final-subtitle fs-5 mb-4">
                Cusco tiene una historia que contarte.<br>
                Los Andes tienen caminos por descubrir.<br>
                El Perú tiene experiencias que recordarás para siempre.<br><br>
                <strong>Elige tu programa y comienza a planificar tu aventura.</strong>
            </p>

            <div class="btn-cta-group mb-5">
                <a href="#programas-list" class="btn-reserva-llama fs-5 px-4 py-3">
                    <i class="bi bi-compass-fill"></i> EXPLORAR PROGRAMAS
                </a>
                <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20hablar%20con%20un%20asesor%20de%20viajes" target="_blank" class="btn btn-outline-light rounded-pill fs-5 px-4 py-3 font-weight-bold border-2">
                    <i class="bi bi-headset text-warning me-2"></i> HABLAR CON UN ASESOR
                </a>
            </div>

            <div class="border-top border-secondary pt-4 mt-2 max-w-700 mx-auto">
                <h4 class="font-playfair fw-bold text-white mb-1">PERÚ SAFE JOURNEYS – TRAVEL AGENCY</h4>
                <p class="text-warning fst-italic fs-5 mb-0">Tu viaje. Tu historia. Nuestra experiencia.</p>
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
                        <li><a href="page-inicio.php#nosotros"><i class="bi bi-chevron-right text-warning fs-6"></i> NOSOTROS</a></li>
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
    <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20programas%20de%20viaje"
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
