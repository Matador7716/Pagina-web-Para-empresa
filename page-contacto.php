<?php
// page-contacto.php - Perú Safe Journeys
$company_name = "Perú Safe Journeys";
$company_tagline = "Travel Agency";
$phone_number = "+51 948 364 822";
$phone_clean = "51948364822";
$email_address = "informesweb@perusafejourneyscorp.com";
$current_year = date('Y');

// Mensaje de respuesta del formulario si se envía
$form_status = false;
$form_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $correo = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $destino = filter_input(INPUT_POST, 'destino', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if ($nombre && $correo && $mensaje) {
        $form_status = "success";
        $form_msg = "¡Gracias $nombre! Hemos recibido tu mensaje. Un especialista de Perú Safe Journeys te contactará pronto.";
    } else {
        $form_status = "error";
        $form_msg = "Por favor completa los campos requeridos correctamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - <?php echo $company_name; ?></title>

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
        .hero-title, .section-title,
        .brand-text, .nav-link, .btn-reserva-llama, .btn-submit-contacto,
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
        .hero-banner-contacto {
            position: relative;
            padding: 8.5rem 0 6.5rem;
            background: linear-gradient(180deg, rgba(0, 34, 56, 0.88) 0%, rgba(0, 50, 80, 0.94) 100%),
                        url('https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            color: var(--color-blanco);
            text-align: center;
            overflow: hidden;
        }

        .hero-title {
            font-family: 'Poppins', sans-serif;
            font-size: 3.8rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 1.2rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .hero-title span {
            color: var(--color-dorado-andino);
            font-size: 2.8rem;
            display: block;
            margin-top: 0.2rem;
            font-weight: 700;
        }

        .hero-subtitle {
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

        /* Contact Info Cards */
        .contacto-card {
            background: var(--color-blanco);
            border: 1px solid var(--color-gris-border);
            border-radius: 20px;
            padding: 2.2rem;
            box-shadow: 0 10px 30px rgba(0, 50, 80, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }

        .contacto-card:hover {
            transform: translateY(-5px);
            border-color: var(--color-naranja-journey);
            box-shadow: 0 15px 35px rgba(255, 107, 34, 0.12);
        }

        .contacto-icon-box {
            width: 65px;
            height: 65px;
            background: rgba(255, 107, 34, 0.12);
            color: var(--color-naranja-journey);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.9rem;
            margin-bottom: 1.4rem;
        }

        /* Formulario de Contacto */
        .form-card {
            background: var(--color-blanco);
            border-radius: 24px;
            border: 1px solid var(--color-gris-border);
            padding: 3rem;
            box-shadow: 0 15px 40px rgba(0, 50, 80, 0.08);
        }

        .form-control, .form-select {
            border-radius: 12px;
            padding: 0.85rem 1.2rem;
            border: 1px solid var(--color-gris-border);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--color-naranja-journey);
            box-shadow: 0 0 0 4px var(--color-naranja-glow);
        }

        .btn-submit-contacto {
            background-color: var(--color-naranja-journey);
            color: var(--color-blanco);
            font-weight: 700;
            border-radius: 50px;
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px var(--color-naranja-glow);
            width: 100%;
        }

        .btn-submit-contacto:hover {
            background-color: var(--color-naranja-hover);
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(255, 107, 34, 0.45);
            color: var(--color-blanco);
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
                        <a class="nav-link" href="https://www.perusafejourneys.todowebcusco.com/programas/">PROGRAMAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneys.todowebcusco.com/nosotros/">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://www.perusafejourneys.todowebcusco.com/contacto/">CONTACTO</a>
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


    <!-- HERO BANNER CONTACTO -->
    <header class="hero-banner-contacto">
        <div class="container animate__animated animate__fadeIn">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill font-weight-bold text-uppercase mb-3 fs-6">
                📞 CONTACTO OFICIAL
            </span>
            <h1 class="hero-title">
                Estamos listos para planificar
                <span>tu viaje soñado al Perú</span>
            </h1>
            <p class="hero-subtitle">
                Escríbenos, llámanos o envíanos un mensaje. Nuestros especialistas locales te responderán con atención personalizada para armar el itinerario perfecto.
            </p>
        </div>
    </header>


    <!-- TARJETAS DE CONTACTO RÁPIDO -->
    <section class="py-5 bg-white">
        <div class="container py-3">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="contacto-card">
                        <div class="contacto-icon-box">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-2" style="color: var(--color-azul-peru-safe); font-family: 'Poppins', sans-serif;">Teléfono Directo</h4>
                        <p class="text-secondary small mb-3">Atención telefónica de lunes a domingo de 8:00 am a 8:00 pm.</p>
                        <a href="tel:<?php echo $phone_clean; ?>" class="fs-5 fw-bold text-decoration-none" style="color: var(--color-naranja-journey);">
                            <?php echo $phone_number; ?>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contacto-card">
                        <div class="contacto-icon-box">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <h4 class="fw-bold mb-2" style="color: var(--color-azul-peru-safe); font-family: 'Poppins', sans-serif;">WhatsApp Express</h4>
                        <p class="text-secondary small mb-3">Respuesta inmediata para cotizaciones y reservas inmediatas.</p>
                        <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20planificar%20un%20viaje" target="_blank" class="fs-5 fw-bold text-decoration-none text-success">
                            Chat en WhatsApp <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="contacto-card">
                        <div class="contacto-icon-box">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-2" style="color: var(--color-azul-peru-safe); font-family: 'Poppins', sans-serif;">Correo Electrónico</h4>
                        <p class="text-secondary small mb-3">Envíanos tus requerimientos detallados e itinerarios a medida.</p>
                        <a href="mailto:<?php echo $email_address; ?>" class="fs-6 fw-bold text-decoration-none" style="color: var(--color-naranja-journey);">
                            <?php echo $email_address; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FORMULARIO DE CONTACTO -->
    <section class="py-5" style="background-color: var(--color-gris-claro);">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <span class="section-badge">💬 ESCRÍBENOS</span>
                    <h2 class="section-title">Diseñemos juntos tu itinerario</h2>
                    <p class="text-secondary fs-5 mb-4" style="line-height: 1.8;">
                        ¿Tienes dudas sobre las fechas, vacunas, trenes a Machu Picchu o presupuesto?
                    </p>
                    <p class="text-secondary" style="line-height: 1.8;">
                        Déjanos tus datos en el formulario y un asesor experto de <strong>Perú Safe Journeys</strong> te enviará una propuesta adaptada a tus necesidades sin compromiso.
                    </p>

                    <div class="p-4 rounded-4 mt-4 bg-white border">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <i class="bi bi-shield-check text-warning fs-2"></i>
                            <div>
                                <h6 class="fw-bold mb-0" style="font-family: 'Poppins', sans-serif;">Reserva con Seguridad</h6>
                                <small class="text-muted">Garantía de confort y asesoría 24/7</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-person-check-fill text-warning fs-2"></i>
                            <div>
                                <h6 class="fw-bold mb-0" style="font-family: 'Poppins', sans-serif;">Asesoría Personalizada</h6>
                                <small class="text-muted">Expertos locales a tu disposición</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="form-card">
                        <?php if ($form_status == "success"): ?>
                            <div class="alert alert-success alert-dismissible fade show p-4 rounded-4 mb-4" role="alert">
                                <i class="bi bi-check-circle-fill me-2 fs-4 align-middle"></i>
                                <strong><?php echo $form_msg; ?></strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php elseif ($form_status == "error"): ?>
                            <div class="alert alert-danger alert-dismissible fade show p-4 rounded-4 mb-4" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2 fs-4 align-middle"></i>
                                <strong><?php echo $form_msg; ?></strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <form action="https://www.perusafejourneys.todowebcusco.com/contacto/" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-uppercase">Nombre Completo *</label>
                                    <input type="text" name="nombre" class="form-control" placeholder="Ej. Juan Pérez" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-uppercase">Correo Electrónico *</label>
                                    <input type="email" name="email" class="form-control" placeholder="ejemplo@correo.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-uppercase">Teléfono / WhatsApp</label>
                                    <input type="tel" name="telefono" class="form-control" placeholder="+51 900 000 000">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-uppercase">Destino de Interés</label>
                                    <select name="destino" class="form-select">
                                        <option value="Machu Picchu & Cusco">Machu Picchu & Cusco</option>
                                        <option value="Valle Sagrado">Valle Sagrado</option>
                                        <option value="Camino Inca / Treks">Camino Inca / Treks</option>
                                        <option value="Amazonia / Selva">Amazonía / Selva</option>
                                        <option value="Viaje Personalizado a Medida">Viaje Personalizado a Medida</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold small text-uppercase">Mensaje o Detalles del Viaje *</label>
                                    <textarea name="mensaje" rows="4" class="form-control" placeholder="Cuéntanos fechas estimadas, número de viajeros o lo que sueñas conocer del Perú..." required></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn-submit-contacto">
                                        <i class="bi bi-send-fill me-2"></i> ENVIAR SOLICITUD DE VIAJE
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- MAPA UBICACIÓN CUSCO -->
    <section class="py-5 bg-white">
        <div class="container text-center py-3">
            <span class="section-badge">📍 UBICACIÓN</span>
            <h2 class="section-title mb-4">Te esperamos en la Capital Inca</h2>
            <p class="text-secondary fs-5 max-w-700 mx-auto mb-4">
                Nuestras oficinas principales se encuentran en el corazón histórico de Cusco, Perú.
            </p>
            <div class="rounded-5 overflow-hidden shadow-lg border" style="height: 400px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.803730761616!2d-71.98096262426918!3d-13.51708878775458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd673a216c52b%3A0xb35a098eb02f1a60!2sPlaza%20de%20Armas%20de%20Cusco!5e0!3m2!1ses!2spe!4v1700000000000!5m2!1ses!2spe"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
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
