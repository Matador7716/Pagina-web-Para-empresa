<?php
// page-contacto.php - Perú Safe Journeys
$company_name = "Perú Safe Journeys";
$company_tagline = "Travel Agency";
$phone_number = "+51 948 364 822";
$phone_clean = "51948364822";

// Correos de contacto actualizados
$email_informes = "informesweb@perusafejourneyscorp.com";
$email_reservas = "reservascusco@perusafejourneyscorp.com";
$email_contacto = "contactoweb@perusafejourneyscorp.com";

$current_year = date('Y');

// Mensaje de éxito al enviar formulario
$form_submitted = false;
$user_name = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_submitted = true;
    $user_name = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8') : 'Viajero';
}

// Canales de correo
$email_channels = [
    [
        'title' => 'Información General',
        'email' => $email_informes,
        'icon' => 'bi-info-circle-fill',
        'badge' => 'Consultas & Asesoría',
        'desc' => '¿Tienes dudas sobre nuestros itinerarios, clima o logística? Escríbenos para recibir atención detallada.'
    ],
    [
        'title' => 'Reservas & Confirmaciones',
        'email' => $email_reservas,
        'icon' => 'bi-ticket-perforated-fill',
        'badge' => 'Cusco & Machu Picchu',
        'desc' => 'Canal directo para asegurar tus tickets de ingreso, trenes, hoteles y tours guiados en Cusco.'
    ],
    [
        'title' => 'Contacto Corporativo',
        'email' => $email_contacto,
        'icon' => 'bi-briefcase-fill',
        'badge' => 'Alianzas & Prensa',
        'desc' => 'Atención a agencias aliadas, viajes de grupos, corporativos y consultas administrativas.'
    ]
];

// Preguntas frecuentes
$faqs = [
    [
        'q' => '¿Con cuánto tiempo de anticipación debo reservar mi viaje a Machu Picchu?',
        'a' => 'Recomendamos reservar con al menos 2 a 4 meses de anticipación, ya que los boletos de ingreso a la ciudadela de Machu Picchu y el Camino Inca tienen cupos limitados por día.'
    ],
    [
        'q' => '¿Qué incluye el acompañamiento personalizado durante mi viaje?',
        'a' => 'Nuestro equipo te acompaña antes (planificación), durante (asistencia 24/7 en Cusco y rutas) y después de tu experiencia para garantizar confort y seguridad.'
    ],
    [
        'q' => '¿Puedo personalizar un programa a la medida de mis días y presupuesto?',
        'a' => '¡Por supuesto! Diseñamos itinerarios 100% personalizados adaptados a tus fechas, ritmo de viaje, intereses culturales o de aventura.'
    ],
    [
        'q' => '¿Cómo puedo realizar el pago de mi reserva?',
        'a' => 'Aceptamos transferencias bancarias, tarjetas de crédito/débito internacionales y pagos seguros en línea con confirmación inmediata.'
    ]
];
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
            font-family: 'Manrope', sans-serif;
            background-color: var(--color-blanco);
            color: var(--color-texto-oscuro);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6,
        .contacto-hero-title, .section-title,
        .brand-text, .nav-link, .btn-reserva-llama, .btn-submit-contacto, .btn-whatsapp-direct,
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
            color: var(--color-naranja);
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
            background: var(--color-naranja);
            color: var(--color-blanco) !important;
            transform: translateY(-2px) scale(1.1);
            box-shadow: 0 4px 10px var(--color-naranja-glow);
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
        .hero-banner-contacto {
            position: relative;
            padding: 8.5rem 0 6rem;
            background: linear-gradient(180deg, rgba(7, 18, 42, 0.88) 0%, rgba(11, 27, 61, 0.95) 100%),
                        url('https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            color: var(--color-blanco);
            text-align: center;
            overflow: hidden;
        }

        .contacto-hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 3.8rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 1rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .contacto-hero-title span {
            color: var(--color-naranja);
            font-family: 'Caveat', cursive;
            font-size: 4.5rem;
            display: block;
            margin-top: -0.5rem;
        }

        .contacto-hero-subtitle {
            font-size: 1.25rem;
            color: #E2E8F0;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Section Styling */
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
            font-size: 2.6rem;
            font-weight: 800;
            color: var(--color-azul-oscuro);
            margin-bottom: 1rem;
        }

        /* Contact Form Container */
        .contact-card-glass {
            background: var(--color-blanco);
            border-radius: 28px;
            padding: 3.5rem 3rem;
            box-shadow: 0 20px 50px rgba(11, 27, 61, 0.08);
            border: 1px solid var(--color-gris-border);
            position: relative;
        }

        .form-label-custom {
            font-weight: 700;
            font-size: 0.92rem;
            color: var(--color-azul-oscuro);
            margin-bottom: 0.5rem;
        }

        .form-control-custom {
            background-color: var(--color-gris-bg);
            border: 1.5px solid var(--color-gris-border);
            border-radius: 14px;
            padding: 0.85rem 1.2rem;
            font-size: 0.98rem;
            color: var(--color-texto-oscuro);
            transition: all 0.3s ease;
        }

        .form-control-custom:focus {
            background-color: var(--color-blanco);
            border-color: var(--color-naranja);
            box-shadow: 0 0 0 4px var(--color-naranja-glow);
            outline: none;
        }

        .btn-submit-contacto {
            background-color: var(--color-naranja);
            color: var(--color-blanco);
            font-weight: 800;
            font-size: 1.1rem;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            border: none;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px var(--color-naranja-glow);
        }

        .btn-submit-contacto:hover {
            background-color: var(--color-naranja-hover);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(255, 107, 0, 0.5);
            color: var(--color-blanco);
        }

        /* Direct Contact Cards */
        .direct-card {
            background: var(--color-blanco);
            border-radius: 24px;
            padding: 2.2rem;
            border: 1px solid var(--color-gris-border);
            box-shadow: 0 10px 30px rgba(11, 27, 61, 0.05);
            transition: all 0.4s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .direct-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(255, 107, 0, 0.15);
            border-color: var(--color-naranja);
        }

        .direct-icon-box {
            width: 58px;
            height: 58px;
            background: rgba(255, 107, 0, 0.1);
            color: var(--color-naranja);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.7rem;
            margin-bottom: 1.2rem;
            transition: all 0.3s ease;
        }

        .direct-card:hover .direct-icon-box {
            background: var(--color-naranja);
            color: var(--color-blanco);
            transform: scale(1.1) rotate(-6deg);
        }

        .email-link {
            color: var(--color-azul-oscuro);
            font-weight: 700;
            font-size: 1.05rem;
            text-decoration: none;
            transition: color 0.3s ease;
            word-break: break-all;
        }

        .email-link:hover {
            color: var(--color-naranja);
        }

        /* WhatsApp Direct Banner Card */
        .whatsapp-banner-card {
            background: linear-gradient(135deg, #128C7E 0%, #25D366 100%);
            border-radius: 24px;
            padding: 3rem 2.5rem;
            color: var(--color-blanco);
            box-shadow: 0 15px 35px rgba(37, 211, 102, 0.3);
            position: relative;
            overflow: hidden;
        }

        .btn-whatsapp-direct {
            background-color: var(--color-blanco);
            color: #128C7E !important;
            font-weight: 800;
            padding: 0.9rem 2.2rem;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 1.05rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-whatsapp-direct:hover {
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
            background-color: var(--color-gris-bg);
        }

        /* FAQs Section Accordion */
        .faq-accordion .accordion-item {
            border: 1px solid var(--color-gris-border);
            border-radius: 18px !important;
            margin-bottom: 1.2rem;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(11, 27, 61, 0.04);
        }

        .faq-accordion .accordion-button {
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--color-azul-oscuro);
            padding: 1.25rem 1.5rem;
            background-color: var(--color-blanco);
        }

        .faq-accordion .accordion-button:not(.collapsed) {
            background-color: rgba(255, 107, 0, 0.08);
            color: var(--color-naranja);
            box-shadow: none;
        }

        .faq-accordion .accordion-button::after {
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
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
                <a href="mailto:<?php echo $email_informes; ?>" class="d-flex align-items-center gap-2">
                    <i class="bi bi-envelope-fill text-warning"></i>
                    <span><?php echo $email_informes; ?></span>
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
                    <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20para%20reservar%20mi%20viaje" target="_blank" class="btn-reserva-llama">
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
                💬 Estamos para Ayudarte
            </span>
            <h1 class="contacto-hero-title">
                CENTRO DE CONTACTO
                <span>Planifiquemos juntos tu viaje soñado</span>
            </h1>
            <p class="contacto-hero-subtitle">
                Escríbenos, llámanos o conéctate con nuestros especialistas en viajes por el Perú. Te responderemos con la calidez y precisión que mereces.
            </p>
        </div>
    </header>


    <!-- FORMULARIO DE CONSULTA & INFORMACIÓN PRINCIPAL -->
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <!-- Columna Formulario -->
                <div class="col-lg-7">
                    <div class="contact-card-glass">
                        <?php if ($form_submitted): ?>
                            <div class="text-center py-4 animate__animated animate__zoomIn">
                                <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                                <h3 class="fw-bold mt-3 mb-2" style="color: var(--color-azul-oscuro);">¡Gracias, <?php echo $user_name; ?>!</h3>
                                <p class="text-secondary fs-5 mb-4">
                                    Hemos recibido tu mensaje correctamente. Un especialista local de <strong>Perú Safe Journeys</strong> se pondrá en contacto contigo en breve.
                                </p>
                                <a href="page-contacto.php" class="btn btn-outline-warning rounded-pill px-4 py-2 fw-bold">Enviar otro mensaje</a>
                            </div>
                        <?php else: ?>
                            <div class="mb-4">
                                <span class="section-badge">📩 Formulario Rápido</span>
                                <h2 class="section-title fs-2 mb-2">Envíanos un mensaje</h2>
                                <p class="text-secondary">Cuéntanos tus planes y diseñaremos una propuesta personalizada a tu medida.</p>
                            </div>

                            <form action="page-contacto.php" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label-custom">Nombre completo *</label>
                                        <input type="text" name="nombre" class="form-control form-control-custom" placeholder="Ej. Juan Pérez" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-custom">Correo electrónico *</label>
                                        <input type="email" name="email" class="form-control form-control-custom" placeholder="ejemplo@correo.com" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-custom">Teléfono / WhatsApp *</label>
                                        <input type="tel" name="telefono" class="form-control form-control-custom" placeholder="+51 900 000 000" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-custom">Destino de interés</label>
                                        <select name="destino" class="form-select form-control-custom">
                                            <option value="Machu Picchu & Cusco">Machu Picchu & Cusco</option>
                                            <option value="Valle Sagrado">Valle Sagrado</option>
                                            <option value="Montaña de 7 Colores">Montaña de 7 Colores</option>
                                            <option value="Amazonía Peruana">Amazonía Peruana</option>
                                            <option value="Ruta Completa Perú">Ruta Completa Perú</option>
                                            <option value="Otro">Otro itinerario a medida</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label-custom">Detalles de tu viaje o mensaje *</label>
                                        <textarea name="mensaje" class="form-control form-control-custom" rows="4" placeholder="Indícanos número de viajeros, fechas estimadas, intereses o dudas especiales..." required></textarea>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn-submit-contacto">
                                            <i class="bi bi-send-fill"></i> Enviar Consulta de Viaje
                                        </button>
                                    </div>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Columna Canales Rápidos WhatsApp & Teléfono -->
                <div class="col-lg-5">
                    <div class="d-flex flex-column gap-4">
                        <!-- Banner Directo WhatsApp -->
                        <div class="whatsapp-banner-card">
                            <span class="badge bg-white text-dark fw-bold px-3 py-1 rounded-pill mb-3">⚡ Respuesta Inmediata</span>
                            <h3 class="fw-bold mb-2">Chatea por WhatsApp</h3>
                            <p class="mb-4 opacity-90" style="line-height: 1.6;">
                                ¿Prefieres atención directa y personalizada al instante? Nuestro equipo está disponible en WhatsApp.
                            </p>
                            <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20deseo%20consultar%20sobre%20un%20viaje%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="btn-whatsapp-direct">
                                <i class="bi bi-whatsapp fs-4"></i> WhatsApp: <?php echo $phone_number; ?>
                            </a>
                        </div>

                        <!-- Card Teléfono -->
                        <div class="p-4 rounded-4 bg-light border">
                            <div class="d-flex align-items-center gap-3">
                                <div class="p-3 bg-warning text-dark rounded-4 fs-3">
                                    <i class="bi bi-telephone-outbound-fill"></i>
                                </div>
                                <div>
                                    <span class="text-secondary small fw-bold uppercase">Llamada Telefónica Directa</span>
                                    <h4 class="fw-bold mb-0" style="color: var(--color-azul-oscuro);"><?php echo $phone_number; ?></h4>
                                    <small class="text-muted">Lunes a Domingo: 8:00 am - 8:00 pm (Hora Perú)</small>
                                </div>
                            </div>
                        </div>

                        <!-- Card Ubicación -->
                        <div class="p-4 rounded-4 bg-light border">
                            <div class="d-flex align-items-center gap-3">
                                <div class="p-3 bg-primary text-white rounded-4 fs-3">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div>
                                    <span class="text-secondary small fw-bold uppercase">Oficina Central</span>
                                    <h5 class="fw-bold mb-0" style="color: var(--color-azul-oscuro);">Cusco - Perú</h5>
                                    <small class="text-muted">El ombligo del mundo y punto de partida de tus aventuras.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- CANALES DE CORREO ELECTRÓNICO OFICIALES -->
    <section class="py-5" style="background-color: var(--color-gris-bg);">
        <div class="container">
            <div class="text-center max-w-700 mx-auto mb-5">
                <span class="section-badge">✉️ CORREOS DE CONTACTO</span>
                <h2 class="section-title">Canales especializados por departamento</h2>
                <p class="text-secondary fs-5">Escríbenos directamente al correo especializado según tu requerimiento.</p>
            </div>

            <div class="row g-4">
                <?php foreach($email_channels as $channel): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="direct-card">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div class="direct-icon-box">
                                <i class="bi <?php echo $channel['icon']; ?>"></i>
                            </div>
                            <span class="badge bg-light text-dark border px-3 py-1 rounded-pill fw-bold" style="font-size: 0.75rem;">
                                <?php echo $channel['badge']; ?>
                            </span>
                        </div>
                        <h3 class="fw-bold fs-4 mb-2" style="color: var(--color-azul-oscuro);"><?php echo $channel['title']; ?></h3>
                        <p class="text-secondary small mb-3" style="line-height: 1.6;"><?php echo $channel['desc']; ?></p>
                        <a href="mailto:<?php echo $channel['email']; ?>" class="email-link">
                            <i class="bi bi-envelope-at-fill text-warning me-1"></i> <?php echo $channel['email']; ?>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- PREGUNTAS FRECUENTES (FAQS) -->
    <section class="py-5 bg-white">
        <div class="container py-3">
            <div class="text-center max-w-700 mx-auto mb-5">
                <span class="section-badge">❓ PREGUNTAS FRECUENTES</span>
                <h2 class="section-title">¿Tienes alguna duda antes de contactarnos?</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion faq-accordion" id="faqAccordion">
                        <?php foreach($faqs as $index => $faq): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                                <button class="accordion-button <?php echo ($index !== 0) ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="<?php echo ($index === 0) ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $index; ?>">
                                    <?php echo $faq['q']; ?>
                                </button>
                            </h2>
                            <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo ($index === 0) ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-secondary" style="line-height: 1.7; font-size: 1rem;">
                                    <?php echo $faq['a']; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
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
                            <small class="d-block" style="color: #94A3B8;">Correo de informes:</small>
                            <a href="mailto:<?php echo $email_informes; ?>" class="fw-bold fs-6"><?php echo $email_informes; ?></a>
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
    <a href="https://wa.me/<?php echo $phone_clean; ?>?text=Hola,%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios"
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
