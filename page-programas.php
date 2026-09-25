<?php
// page-programas.php - Perú Safe Journeys
$company_name = "Perú Safe Journeys";
$company_tagline = "tu camino hacia un Perú auténtico";
$phone_number = "+51 948 364 822";
$phone_clean = "51948364822";
$email_address = "informesweb@perusafejourneyscorp.com";
$current_year = date('Y');

// Array de los Programas de Viaje
$programas = [
    [
        'id' => 'cusco-machu-picchu',
        'title' => 'Cusco & Machu Picchu',
        'subtitle' => 'Lo mejor del mundo incaico en pocos días',
        'desc' => 'Un programa clásico e imprescindible para quienes desean conocer el corazón del Imperio Inca. Recorre Cusco, el Valle Sagrado y vive la inolvidable experiencia de llegar a la maravilla de Machu Picchu con todo organizado.',
        'duration' => '4 Días / 3 Noches',
        'badge' => '🏛️ Clásico Inca',
        'includes' => 'Cusco City Tour • Sacsayhuamán • Ollantaytambo • Pisac • Tren a Machu Picchu • Guiado en Ciudadela',
        'ideal' => 'viajeros que visitan Perú por primera vez y cuentan con tiempo justo.',
        'tagline' => 'El viaje esencial para enamorarte de los Andes.',
        'img' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1000&q=80'
    ],
    [
        'id' => 'lima-cusco-machupicchu',
        'title' => 'Lima + Cusco + Machu Picchu',
        'subtitle' => 'Perú en una sola aventura inolvidable',
        'desc' => 'Una combinación perfecta para descubrir los lugares más representativos del Perú. Comienza en la capital gastronómica de Lima, continúa hacia las alturas de Cusco y concluye en Machu Picchu.',
        'duration' => '6 Días / 5 Noches',
        'badge' => '🌊 Ciudad & Cultura',
        'includes' => 'Lima City Tour Gastronómico • Vuelo Interno Sugerido • Cusco • Valle Sagrado • Machu Picchu',
        'ideal' => 'viajeros que buscan cultura viva, buena mesa e historia imperial.',
        'tagline' => 'De las costas del Pacífico al misticismo de los Andes.',
        'img' => 'https://images.unsplash.com/photo-1531968455001-5c5272a41129?auto=format&fit=crop&w=1000&q=80'
    ],
    [
        'id' => 'valle-sagrado-machupicchu',
        'title' => 'Valle Sagrado + Machu Picchu',
        'subtitle' => 'Paisajes, pueblos andinos y la maravilla inca',
        'desc' => 'Un recorrido que combina la belleza natural del Valle Sagrado con sus pintorescos mercados artesanales, centros arqueológicos de vanguardia inca e ingreso a Machu Picchu.',
        'duration' => '3 Días / 2 Noches',
        'badge' => '🌄 Mística Andina',
        'includes' => 'Pisac Mercado & Ruinas • Ollantaytambo • Maras & Moray • Tren de Lujo u Opción Estándar • Machu Picchu',
        'ideal' => 'parejas y viajeros que buscan un ritmo relajado y vistas deslumbrantes.',
        'tagline' => 'Descubre por qué los Incas eligieron este valle como su refugio sagrado.',
        'img' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1000&q=80'
    ],
    [
        'id' => 'cusco-7-colores',
        'title' => 'Cusco + Montaña de 7 Colores',
        'subtitle' => 'Historia milenaria y naturaleza de alta montaña',
        'desc' => 'Combina las joyas históricas de la ciudad del Cusco con una de las caminatas naturales más famosas y deslumbrantes del planeta: Vinicunca.',
        'duration' => '5 Días / 4 Noches',
        'badge' => '🌈 Aventura Natural',
        'includes' => 'Cusco Histórico • Valle Sagrado • Machu Picchu • Trekking a Montaña de 7 Colores • Oxígeno & Asistencia',
        'ideal' => 'entusiastas del trekking, fotógrafos y caminantes activos.',
        'tagline' => 'Desafía tu ritmo y llega a una cima pintada por la naturaleza.',
        'img' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1000&q=80'
    ],
    [
        'id' => 'peru-inca-completo',
        'title' => 'Perú Inca Completo',
        'subtitle' => 'La gran ruta del Imperio del Sol',
        'desc' => 'El itinerario definitivo para recorrer la historia incaica. Desde los templos del sol en Cusco hasta las islas flotantes del Lago Titicaca en Puno pasando por la mística ruta del Sol.',
        'duration' => '8 Días / 7 Noches',
        'badge' => '👑 Gran Ruta Imperial',
        'includes' => 'Cusco • Valle Sagrado • Machu Picchu • Bus Turístico Ruta del Sol • Puno & Lago Titicaca (Uros y Taquile)',
        'ideal' => 'viajeros fascinados por las culturas precolombinas y la inmensidad del lago navegable más alto del mundo.',
        'tagline' => 'Una travesía completa por el legado legendario del sur andino.',
        'img' => 'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=1000&q=80'
    ],
    [
        'id' => 'peru-naturaleza-aventura',
        'title' => 'Perú Naturaleza & Aventura',
        'subtitle' => 'De la selva amazónica a la cima de las montañas',
        'desc' => 'Diseñado para los amantes de la biodiversidad extrema. Experimenta la magia salvaje de Puerto Maldonado o Tambopata en la selva amazónica y luego asciende a las cumbres andinas de Cusco.',
        'duration' => '9 Días / 8 Noches',
        'badge' => '🌿 Selva & Andes',
        'includes' => 'Ecolodge Amazónico • Navegación en Ríos • Avistamiento de Fauna • Cusco • Machu Picchu • Laguna Humantay',
        'ideal' => 'aventureros, ecoturistas y exploradores de naturaleza.',
        'tagline' => 'Siente dos mundos ecológicos opuestos y fascinantes en un mismo viaje.',
        'img' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=1000&q=80'
    ],
    [
        'id' => 'peru-esencial',
        'num' => '07',
        'title' => 'Perú Esencial (Lima, Ica, Cusco & Machu Picchu)',
        'subtitle' => 'Costas, desierto, oasis e historia imperial',
        'desc' => 'Un programa variado que abarca la gastronomía costera de Lima, las dunas e islas ballestas en Paracas/Huacachina y el fascinante esplendor de Cusco y Machu Picchu.',
        'duration' => '8 Días / 7 Noches',
        'badge' => '🏖️ Costa, Desierto & Andes',
        'includes' => 'Lima • Paracas Islas Ballestas • Oasis de Huacachina & Buggies • Cusco • Valle Sagrado • Machu Picchu',
        'ideal' => 'familias y grupos de amigos que buscan diversidad de paisajes y experiencias.',
        'tagline' => 'El resumen perfecto de las tres grandes geografías del Perú.',
        'img' => 'https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?auto=format&fit=crop&w=1000&q=80'
    ],
    [
        'id' => 'programas-romanticos',
        'title' => 'Programas Románticos & Luna de Miel',
        'subtitle' => 'Magia, distinción y momentos inolvidables en pareja',
        'desc' => 'Experiencias diseñadas con máximo nivel de detalle para aniversarios, lunas de miel o escapadas románticas. Hoteles de lujo boutique, cenas privadas, vagones de tren exclusivos y atención VIP.',
        'duration' => 'A la medida (5 a 10 Días)',
        'badge' => '❤️ Luxury & Romance',
        'includes' => 'Hoteles Boutique & Spa • Cenas Románticas Maridaje • Tren Hiram Bingham u Vistadome • Traslados Privados',
        'ideal' => 'parejas, recién casados y celebraciones especiales.',
        'tagline' => 'Creen recuerdos eternos en los escenarios más deslumbrantes del Perú.',
        'img' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1000&q=80'
    ],
    [
        'id' => 'programas-familia',
        'title' => 'Programas en Familia',
        'subtitle' => 'Seguridad, comodidad y diversión para todas las edades',
        'desc' => 'Diseñados con tiempos adaptados para niños y adultos mayores. Ritmo pausado, actividades interactivas como talleres de chocotefería o cerámica, transporte privado amplio y asistencia profesional continua.',
        'duration' => 'A la medida (4 a 8 Días)',
        'badge' => '👨‍👩‍👧‍👦 Familiar & Confort',
        'includes' => 'Transporte Privado Confortable • Tiempos Flexibles • Guía Privado Amigable • Hoteles Familiares',
        'ideal' => 'familias con niños, adolescentes o adultos mayores.',
        'tagline' => 'Un viaje inolvidable donde todos disfrutan con total tranquilidad.',
        'img' => 'https://images.unsplash.com/photo-1539635273304-0e8723e0f016?auto=format&fit=crop&w=1000&q=80'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programas de Viaje - <?php echo $company_name; ?></title>

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
            --color-azul-peru-safe: #003250;
            --color-azul-andino: #0B527A;
            --color-naranja-journey: #FF6B22;
            --color-naranja-hover: #E0540F;
            --color-dorado-andino: #D9A441;
            --color-blanco: #FFFFFF;
            --color-gris-claro: #F4F6F7;

            --color-topbar: #002238;
            --color-texto-oscuro: #1E293B;
            --color-texto-suave: #64748B;
            --color-gris-border: #E2E8F0;
            --color-naranja-glow: rgba(255, 107, 34, 0.35);
        }

        body {
            font-family: 'Manrope', sans-serif;
            background-color: var(--color-blanco);
            color: var(--color-texto-oscuro);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6,
        .programas-hero-title, .prog-title, .cta-final-title,
        .brand-text, .nav-link, .btn-reserva-llama, .btn-prog-whatsapp,
        .badge, .prog-duration-badge {
            font-family: 'Poppins', sans-serif;
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
            color: var(--color-naranja-journey);
        }

        .topbar-social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: #CBD5E1 !important;
            font-size: 0.88rem;
            transition: all 0.3s ease;
        }

        .topbar-social-icon:hover {
            background: var(--color-naranja-journey);
            color: var(--color-blanco) !important;
            transform: translateY(-2px) scale(1.1);
            box-shadow: 0 4px 10px var(--color-naranja-glow);
        }

        /* Sticky Navigation Bar */
        .navbar-custom {
            background-color: rgba(0, 50, 80, 0.95);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            transition: all 0.4s ease;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .navbar-custom.scrolled {
            background-color: rgba(0, 34, 56, 0.98);
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

        .logo-img-header {
            height: 52px;
            width: auto;
            object-fit: contain;
            filter: drop-shadow(0 2px 8px rgba(0,0,0,0.2));
            transition: transform 0.3s ease;
        }

        .navbar-brand-logo:hover .logo-img-header {
            transform: scale(1.04);
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

        /* Botón Llama */
        .btn-reserva-llama {
            background-color: var(--color-naranja-journey);
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
            box-shadow: 0 8px 25px rgba(255, 107, 34, 0.5);
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
            padding: 8.5rem 0 6.5rem;
            background: linear-gradient(180deg, rgba(0, 34, 56, 0.85) 0%, rgba(0, 50, 80, 0.92) 100%),
                        url('https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            color: var(--color-blanco);
            text-align: center;
            overflow: hidden;
        }

        .programas-hero-title {
            font-family: 'Poppins', sans-serif;
            font-size: 3.8rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 1.2rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .programas-hero-title span {
            color: var(--color-dorado-andino);
            font-size: 2.8rem;
            display: block;
            margin-top: 0.2rem;
            font-weight: 700;
        }

        .programas-hero-subtitle {
            font-size: 1.25rem;
            color: #E2E8F0;
            max-width: 820px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Card de Programa con tamaño de imágenes uniforme */
        .prog-card {
            background: var(--color-blanco);
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 12px 35px rgba(0, 50, 80, 0.07);
            margin-bottom: 4rem;
            transition: all 0.4s ease;
        }

        .prog-card:hover {
            transform: translateY(-6px);
            border-color: var(--color-naranja-journey);
            box-shadow: 0 20px 45px rgba(255, 107, 34, 0.18);
        }

        /* Estandarización de tamaño de imagen a un solo alto uniforme */
        .prog-img-box {
            position: relative;
            width: 100%;
            height: 420px;
            overflow: hidden;
        }

        .prog-img-box img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .prog-card:hover .prog-img-box img {
            transform: scale(1.08);
        }

        .prog-badge-top {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(0, 50, 80, 0.88);
            backdrop-filter: blur(8px);
            color: var(--color-blanco);
            padding: 0.5rem 1.1rem;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 700;
            border: 1px solid rgba(217, 164, 65, 0.5);
            font-family: 'Poppins', sans-serif;
        }

        .prog-duration-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background-color: var(--color-naranja-journey);
            color: var(--color-blanco);
            font-weight: 700;
            font-size: 0.85rem;
            padding: 0.4rem 1rem;
            border-radius: 50px;
            margin-bottom: 1rem;
            box-shadow: 0 4px 12px var(--color-naranja-glow);
            font-family: 'Poppins', sans-serif;
        }

        .prog-title {
            font-family: 'Poppins', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.4rem;
        }

        .prog-subtitle {
            color: var(--color-naranja-journey);
            font-weight: 700;
            font-size: 1.05rem;
            margin-bottom: 1.2rem;
        }

        .prog-desc {
            color: #334155;
            font-size: 1rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .prog-feature-box {
            background-color: var(--color-gris-claro);
            border-radius: 16px;
            padding: 1.25rem;
            margin-bottom: 1.5rem;
            border-left: 4px solid var(--color-naranja-journey);
        }

        .prog-feature-item {
            margin-bottom: 0.6rem;
            font-size: 0.93rem;
            color: var(--color-texto-oscuro);
        }

        .prog-feature-item:last-child {
            margin-bottom: 0;
        }

        .prog-quote-tagline {
            font-style: italic;
            font-weight: 700;
            color: var(--color-azul-peru-safe);
            font-size: 1rem;
            margin-bottom: 1.8rem;
        }

        .btn-prog-whatsapp {
            background-color: var(--color-naranja-journey);
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
            font-family: 'Poppins', sans-serif;
        }

        .btn-prog-whatsapp:hover {
            background-color: var(--color-naranja-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 34, 0.4);
        }

        /* Call To Action Final */
        .cta-final-section {
            background: linear-gradient(135deg, var(--color-azul-peru-safe) 0%, #001A2B 100%);
            color: var(--color-blanco);
            padding: 6rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-final-title {
            font-family: 'Poppins', sans-serif;
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

        /* Footer */
        .footer-custom {
            background-color: #001A2B;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding-top: 4rem;
            padding-bottom: 2rem;
            font-size: 0.95rem;
            color: #CBD5E1;
        }

        .footer-logo {
            font-family: 'Poppins', sans-serif;
            font-size: 1.6rem;
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
            font-size: 1.1rem;
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
            width: 35px;
            height: 2px;
            background-color: var(--color-naranja-journey);
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
            color: var(--color-naranja-journey);
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
            <div class="d-none d-md-flex align-items-center gap-3">
                <small class="text-light me-1">Síguenos:</small>
                <a href="https://facebook.com" target="_blank" class="topbar-social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com" target="_blank" class="topbar-social-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://tiktok.com" target="_blank" class="topbar-social-icon" title="TikTok"><i class="bi bi-tiktok"></i></a>
                <a href="https://youtube.com" target="_blank" class="topbar-social-icon" title="YouTube"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Menú Pegajoso (Sticky Navbar) -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-custom py-3">
        <div class="container">
            <!-- Imagen del Logo -->
            <a class="navbar-brand-logo" href="https://www.perusafejourneys.todowebcusco.com/">
                <img src="http://www.perusafejourneys.todowebcusco.com/wp-content/uploads/2026/09/Peru-Safe-Journeys-logo.png" alt="Perú Safe Journeys Logo" class="logo-img-header">
            </a>

            <!-- Toggle Mobile -->
            <button class="navbar-toggler text-white border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-1 text-white"></i>
            </button>

            <!-- Menú Links & Botón Llama -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneys.todowebcusco.com/">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneys.todowebcusco.com/destinos/">DESTINOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneys.todowebcusco.com/experiencias/">EXPERIENCIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://www.perusafejourneys.todowebcusco.com/programas/">PROGRAMAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneys.todowebcusco.com/nosotros/">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneys.todowebcusco.com/contacto/">CONTACTO</a>
                    </li>
                </ul>

                <!-- BOTON "Reserva tu Viaje" con icono llamita -->
                <div class="text-center text-lg-end mt-3 mt-lg-0">
                    <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20reservar%20un%20programa%20de%20viaje%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="btn-reserva-llama">
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
                🗺️ ITINERARIOS COMPLETOS Y ORGANIZADOS
            </span>
            <h1 class="programas-hero-title">
                PROGRAMAS DE VIAJE
                <span>Tu viaje comienza con una buena elección</span>
            </h1>
            <p class="programas-hero-subtitle">
                Diseñamos paquetes turísticos completos con transporte, hoteles, tickets e ingresos incluidos para que disfrutes tu aventura con máxima seguridad y confort.
            </p>
        </div>
    </header>


    <!-- INTRODUCCIÓN -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="p-4 p-md-5 rounded-4 text-center" style="background-color: var(--color-gris-claro); border: 1px solid var(--color-gris-border);">
                <h2 class="fw-bold text-dark fs-2 mb-3" style="font-family: 'Poppins', sans-serif;">
                    Planificación profesional al servicio de tus sueños
                </h2>
                <p class="fs-5 text-secondary mb-0" style="max-width: 880px; margin: 0 auto; line-height: 1.8;">
                    Nuestros programas combinan los destinos imprescindibles con un ritmo adecuado para permitirte descansar, disfrutar y conectar con cada paisaje sin contratiempos.
                </p>
            </div>
        </div>
    </section>


    <!-- LISTA DE LOS PROGRAMAS -->
    <section class="py-3">
        <div class="container">
            <?php foreach($programas as $index => $item): ?>
            <div class="prog-card" id="<?php echo $item['id']; ?>">
                <div class="row g-0 align-items-stretch <?php echo ($index % 2 != 0) ? 'flex-row-reverse' : ''; ?>">
                    <!-- Imagen del Programa Estandarizada -->
                    <div class="col-lg-6">
                        <div class="prog-img-box">
                            <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>" loading="lazy">
                            <span class="prog-badge-top"><?php echo $item['badge']; ?></span>
                        </div>
                    </div>

                    <!-- Contenido del Programa -->
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="p-4 p-md-5 w-100">
                            <span class="prog-duration-badge"><i class="bi bi-clock-fill"></i> <?php echo $item['duration']; ?></span>
                            <h2 class="prog-title"><?php echo $item['title']; ?></h2>
                            <h3 class="prog-subtitle"><?php echo $item['subtitle']; ?></h3>
                            <p class="prog-desc"><?php echo $item['desc']; ?></p>

                            <div class="prog-feature-box">
                                <div class="prog-feature-item">
                                    <strong>✨ Incluye experiencias:</strong> <?php echo $item['includes']; ?>
                                </div>
                                <div class="prog-feature-item">
                                    <strong>👉 Ideal para:</strong> <?php echo $item['ideal']; ?>
                                </div>
                            </div>

                            <p class="prog-quote-tagline">
                                "<?php echo $item['tagline']; ?>"
                            </p>

                            <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20consultar%20el%20programa%20<?php echo urlencode($item['title']); ?>" target="_blank" class="btn-prog-whatsapp">
                                <i class="bi bi-whatsapp"></i> Consultar Itinerario de <?php echo $item['title']; ?>
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
                ✨ ¿NO ENCUENTRAS EL PROGRAMA PERFECTO?
            </span>
            <h2 class="cta-final-title">
                Creamos tu programa de viaje 100% personalizado
            </h2>
            <p class="cta-final-subtitle">
                Si deseas agregar más días, incluir destinos adicionales o ajustar las actividades a tu propio ritmo, contáctanos y armaremos un itinerario a tu medida.
            </p>

            <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20solicitar%20un%20programa%20de%20viaje%20personalizado" target="_blank" class="btn-reserva-llama fs-5 px-4 py-3">
                <i class="bi bi-pencil-square"></i> Solicitar Itinerario Personalizado
            </a>
        </div>
    </section>


    <!-- 3. FOOTER -->
    <footer class="footer-custom" id="contacto">
        <div class="container">
            <div class="row g-4 justify-content-between">
                <!-- Branding & Descripción -->
                <div class="col-lg-4 col-md-6">
                    <a href="https://www.perusafejourneys.todowebcusco.com/" class="footer-logo">
                        Perú Safe Journeys <span>| Viajes Perú</span>
                    </a>
                    <p class="pe-lg-4" style="color: #94A3B8;">
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
                        <li><a href="https://www.perusafejourneys.todowebcusco.com/"><i class="bi bi-chevron-right text-warning fs-6"></i> INICIO</a></li>
                        <li><a href="https://www.perusafejourneys.todowebcusco.com/destinos/"><i class="bi bi-chevron-right text-warning fs-6"></i> DESTINOS</a></li>
                        <li><a href="https://www.perusafejourneys.todowebcusco.com/experiencias/"><i class="bi bi-chevron-right text-warning fs-6"></i> EXPERIENCIAS</a></li>
                        <li><a href="https://www.perusafejourneys.todowebcusco.com/programas/"><i class="bi bi-chevron-right text-warning fs-6"></i> PROGRAMAS</a></li>
                        <li><a href="https://www.perusafejourneys.todowebcusco.com/nosotros/"><i class="bi bi-chevron-right text-warning fs-6"></i> NOSOTROS</a></li>
                        <li><a href="https://www.perusafejourneys.todowebcusco.com/contacto/"><i class="bi bi-chevron-right text-warning fs-6"></i> CONTACTO</a></li>
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
    <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20programas%20de%20viaje"
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
