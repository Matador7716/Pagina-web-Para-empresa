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
        .destinos-hero-title, .section-title,
        .brand-text, .nav-link, .btn-reserva-llama, .btn-banner,
        .badge, .section-badge {
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

        .topbar-phone-badge {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 0.2rem 0.65rem;
            border-radius: 30px;
            font-size: 0.82rem;
            transition: all 0.3s ease;
        }

        .topbar-phone-badge:hover {
            background: rgba(255, 107, 34, 0.2);
            border-color: var(--color-naranja-journey);
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

        /* Hero Banner Section */
        .hero-banner-destinos {
            position: relative;
            padding: 8.5rem 0 6.5rem;
            background: linear-gradient(180deg, rgba(0, 34, 56, 0.85) 0%, rgba(0, 50, 80, 0.92) 100%),
                        url('https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            color: var(--color-blanco);
            text-align: center;
            overflow: hidden;
        }

        .destinos-hero-title {
            font-family: 'Poppins', sans-serif;
            font-size: 3.8rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 1.2rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
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
            background-color: rgba(255, 107, 34, 0.12);
            color: var(--color-naranja-journey);
            font-weight: 800;
            font-size: 0.85rem;
            padding: 0.4rem 1.2rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 1rem;
            border: 1px solid rgba(255, 107, 34, 0.3);
            font-family: 'Poppins', sans-serif;
        }

        .section-title {
            font-family: 'Poppins', sans-serif;
            font-size: 2.8rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        /* Card Styling & Hover Effects */
        .destino-card {
            background: var(--color-blanco);
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 12px 35px rgba(0, 50, 80, 0.06);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .destino-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 45px rgba(255, 107, 34, 0.18);
            border-color: var(--color-naranja-journey);
        }

        /* Estandarización de tamaño de imagen a alto uniforme */
        .destino-img-wrapper {
            position: relative;
            width: 100%;
            height: 420px;
            overflow: hidden;
        }

        .destino-img-wrapper img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .destino-card:hover .destino-img-wrapper img {
            transform: scale(1.08);
        }

        .card-badge-tag {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(0, 50, 80, 0.88);
            backdrop-filter: blur(8px);
            color: var(--color-blanco);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 0.45rem 1rem;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-family: 'Poppins', sans-serif;
        }

        .destino-body {
            padding: 2rem;
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
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.3rem;
            font-family: 'Poppins', sans-serif;
        }

        .destino-sub {
            font-size: 0.95rem;
            color: var(--color-azul-andino);
            font-weight: 600;
            margin-bottom: 1rem;
            font-family: 'Poppins', sans-serif;
        }

        .destino-desc {
            color: var(--color-texto-suave);
            font-size: 0.98rem;
            line-height: 1.7;
            margin-bottom: 1.8rem;
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
                        <a class="nav-link" href="https://www.perusafejourneysgroup.com/">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://www.perusafejourneysgroup.com/destinos/">DESTINOS</a>
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


    <!-- HERO BANNER DESTINOS -->
    <header class="hero-banner-destinos">
        <div class="container animate__animated animate__fadeIn">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3 fs-6">
                🗺️ RUTA PERÚ SAFE JOURNEYS
            </span>
            <h1 class="destinos-hero-title">
                Destinos Mágicos del Perú
                <span>Cusco, Machu Picchu, Andes & Selva</span>
            </h1>
            <p class="destinos-hero-subtitle">
                Diseñamos experiencias a tu medida para descubrir los tesoros naturales y culturales del Perú con la máxima seguridad y confort.
            </p>
        </div>
    </header>


    <!-- SECCIÓN LISTA DE DESTINOS -->
    <section class="py-5" style="background-color: var(--color-gris-claro);">
        <div class="container py-4">
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


    <!-- 3. FOOTER -->
    <footer class="footer-custom" id="contacto">
        <div class="container">
            <div class="row g-4 justify-content-between">
                <!-- Branding & Descripción -->
                <div class="col-lg-4 col-md-6">
                    <a href="https://www.perusafejourneysgroup.com/" class="footer-logo">
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
