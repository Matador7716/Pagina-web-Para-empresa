<?php
// page-contacto.php - Perú Safe Journeys
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$company_name = "Perú Safe Journeys";
$company_tagline = "Contacto y Reservas";

$phones = [
    'ventas' => ['number' => '+51 931 352 810', 'clean' => '51931352810', 'label' => 'Ventas'],
    'operaciones' => ['number' => '+51 930 823 110', 'clean' => '51930823110', 'label' => 'Operaciones'],
    'calidad' => ['number' => '+51 913 716 197', 'clean' => '51913716197', 'label' => 'Calidad 24/7']
];

$email_address = "informes-web@perusafejourneys.com";
$current_year = date('Y');

// Generar Token CSRF
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Procesar Formulario de Contacto
$form_status = null;
$form_msg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['action']) && $_POST['action'] === 'send_contact') {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $form_status = "danger";
        $form_msg = "Error de validación de seguridad. Por favor reintente.";
    } else {
        $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
        $email_user = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_SPECIAL_CHARS);
        $asunto = filter_input(INPUT_POST, 'asunto', FILTER_SANITIZE_SPECIAL_CHARS);
        $mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_SPECIAL_CHARS);

        if ($nombre && $email_user && $mensaje) {
            $to = $email_address;
            $subject = "Consulta Web Contacto - " . ($asunto ?: $nombre);
            $body = "Nueva consulta recibida desde el formulario de Contacto:\n\n";
            $body .= "Nombre: " . $nombre . "\n";
            $body .= "Correo Electrónico: " . $email_user . "\n";
            $body .= "Teléfono/WhatsApp: " . ($telefono ?: 'No especificado') . "\n";
            $body .= "Asunto/Tour: " . ($asunto ?: 'General') . "\n\n";
            $body .= "Mensaje:\n" . $mensaje . "\n";

            $headers = "From: " . $email_address . "\r\n";
            $headers .= "Reply-To: " . $email_user . "\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion();

            @mail($to, $subject, $body, $headers);

            $form_status = "success";
            $form_msg = "¡Gracias por comunicarte con Perú Safe Journeys! Tu mensaje ha sido enviado correctamente a " . $email_address . ". Te responderemos en breve.";
        } else {
            $form_status = "danger";
            $form_msg = "Por favor, completa los campos requeridos con información válida.";
        }
    }
}

$destinos_submenu = [
    ['name' => '7 LAGUNAS DEL AUSANGATE', 'url' => 'https://www.perusafejourneysgroup.com/destinos/7-lagunas-del-ausangate/'],
    ['name' => 'ATV MONTAÑA DE COLORES FD', 'url' => 'https://www.perusafejourneysgroup.com/destinos/atv-montana-de-colores-fd/'],
    ['name' => 'LAGUNA HUMANTAY FD', 'url' => 'https://www.perusafejourneysgroup.com/destinos/laguna-humantay-fd/'],
    ['name' => 'MONTAÑA VINICUNCA FD', 'url' => 'https://www.perusafejourneysgroup.com/destinos/montana-vinicunca-fd/'],
    ['name' => 'PALLAY PUNCHOY FD', 'url' => 'https://www.perusafejourneysgroup.com/destinos/pallay-punchoy-fd/'],
    ['name' => 'QUELCAYA FD', 'url' => 'https://www.perusafejourneysgroup.com/destinos/quelcaya-fd/'],
    ['name' => 'VALLE SAGRADO BIG', 'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-big/'],
    ['name' => 'VALLE SAGRADO FD', 'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-fd/'],
    ['name' => 'VALLE SUR', 'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sur/'],
    ['name' => 'WAQRAPUKARA FD', 'url' => 'https://www.perusafejourneysgroup.com/destinos/waqrapukara-fd/']
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto – <?php echo $company_name; ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <style>
        :root {
            --color-naranja-journey: #E94D00;
            --color-naranja-hover: #C74000;
            --color-blanco: #FFFFFF;
            --color-azul-peru-safe: #002238;
            --color-azul-andino: #0B527A;
            --color-gris-claro: #F8FAFC;
            --color-texto-oscuro: #0F172A;
            --color-texto-suave: #64748B;
            --color-gris-border: #E2E8F0;
        }

        body, button, input, select, textarea, .nav-link, .dropdown-item, .btn {
            font-family: 'Poppins', sans-serif !important;
        }

        body {
            background-color: var(--color-blanco);
            color: var(--color-texto-oscuro);
            overflow-x: hidden;
            width: 100vw;
            margin: 0;
            padding: 0;
        }

        /* TOP BAR */
        .top-bar {
            background: linear-gradient(90deg, #001220 0%, #002238 50%, #001220 100%);
            font-size: 0.82rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
            padding: 0.45rem 0;
            z-index: 1050;
            position: relative;
        }

        .topbar-phone-badge {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 0.28rem 0.82rem;
            border-radius: 50px;
            font-size: 0.8rem;
            color: #F1F5F9 !important;
            text-decoration: none;
            transition: all 0.28s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .topbar-phone-badge:hover {
            background: var(--color-naranja-journey);
            color: var(--color-blanco) !important;
            border-color: var(--color-naranja-journey);
        }

        .topbar-social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            color: #CBD5E1 !important;
            font-size: 0.9rem;
            transition: all 0.28s ease;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .topbar-social-icon:hover {
            background: var(--color-naranja-journey);
            color: var(--color-blanco) !important;
            border-color: var(--color-naranja-journey);
        }

        .topbar-btn-reserva {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: var(--color-blanco) !important;
            font-weight: 700;
            font-size: 0.78rem;
            border-radius: 50px;
            padding: 0.35rem 1.15rem;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            transition: all 0.28s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
            text-transform: uppercase;
        }

        .topbar-btn-reserva:hover {
            background: linear-gradient(135deg, var(--color-naranja-hover) 0%, var(--color-naranja-journey) 100%);
            transform: translateY(-1px);
        }

        /* NAVBAR HEADER DARK TRANSPARENT OVERLAY MATCHING INICIO */
        .navbar-custom {
            background: rgba(0, 18, 32, 0.96);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 1040;
            transition: all 0.35s ease;
            padding: 0.4rem 0;
            border-bottom: 2px solid var(--color-naranja-journey);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.35);
        }

        .logo-img-header {
            height: 90px;
            width: auto;
            object-fit: contain;
            transition: transform 0.3s ease;
            filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.4));
        }

        .navbar-brand-logo:hover .logo-img-header {
            transform: scale(1.04);
        }

        .nav-link {
            color: #FFFFFF !important;
            font-weight: 700;
            font-size: 0.92rem;
            padding: 0.65rem 1.2rem !important;
            letter-spacing: 0.6px;
            text-transform: uppercase;
            position: relative;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.6);
            transition: color 0.25s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 2px;
            left: 50%;
            width: 0%;
            height: 3px;
            background: var(--color-naranja-journey);
            transition: all 0.3s ease;
            transform: translateX(-50%);
            border-radius: 3px;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--color-naranja-journey) !important;
        }

        .dropdown-menu-custom {
            background: rgba(0, 18, 32, 0.96) !important;
            backdrop-filter: blur(16px);
            border: 1px solid rgba(233, 77, 0, 0.3) !important;
            border-top: 3px solid var(--color-naranja-journey) !important;
            border-radius: 14px !important;
            padding: 0.6rem 0.4rem !important;
            min-width: 270px;
            margin-top: 0.4rem !important;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5) !important;
        }

        @media (min-width: 992px) {
            .nav-item.dropdown:hover .dropdown-menu-custom {
                display: block;
            }
        }

        .dropdown-item-custom {
            color: #F1F5F9 !important;
            font-size: 0.83rem !important;
            font-weight: 700 !important;
            letter-spacing: 0.4px;
            padding: 0.6rem 1rem !important;
            border-radius: 8px;
            transition: all 0.25s ease !important;
            text-transform: uppercase;
        }

        .dropdown-item-custom:hover {
            background-color: var(--color-naranja-journey) !important;
            color: #FFFFFF !important;
            transform: translateX(5px);
        }

        /* BANNER HEADER */
        .page-header-banner {
            background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%);
            padding: 3.8rem 0 3.2rem;
            color: var(--color-blanco);
            text-align: center;
            border-bottom: 3px solid var(--color-naranja-journey);
        }

        /* TARJETAS DE CONTACTO SIN BORDER-TOP & MAPA MEJORADO */
        .contact-info-card {
            background: #FFFFFF;
            border-radius: 24px;
            border: 1px solid var(--color-gris-border);
            border-top: none !important;
            padding: 2.5rem 2.2rem;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .contact-item-box {
            background: #F8FAFC;
            border-radius: 18px;
            border: 1px solid var(--color-gris-border);
            padding: 1.1rem 1.3rem;
            transition: all 0.3s ease;
            height: 86px;
            display: flex;
            align-items: center;
        }

        .contact-item-box:hover {
            border-color: var(--color-naranja-journey);
            background: #FFFFFF;
            transform: translateY(-3px);
        }

        .contact-icon-wrapper {
            width: 50px;
            height: 50px;
            border-radius: 16px;
            background: linear-gradient(135deg, rgba(233, 77, 0, 0.12) 0%, rgba(233, 77, 0, 0.04) 100%);
            color: var(--color-naranja-journey);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            border: 1px solid rgba(233, 77, 0, 0.25);
            flex-shrink: 0;
        }

        .contact-form-card {
            background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%);
            border-radius: 24px;
            padding: 2.5rem 2.2rem;
            color: #FFFFFF;
            border: 1px solid rgba(233, 77, 0, 0.25);
            border-top: none !important;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .form-label-custom {
            font-weight: 600;
            font-size: 0.85rem;
            color: #E2E8F0;
            margin-bottom: 0.4rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-control-custom {
            background: rgba(255, 255, 255, 0.08) !important;
            border: 1px solid rgba(255, 255, 255, 0.18) !important;
            color: #FFFFFF !important;
            border-radius: 12px !important;
            padding: 0.75rem 1rem !important;
            font-size: 0.92rem !important;
        }

        .form-control-custom:focus {
            background: rgba(255, 255, 255, 0.14) !important;
            border-color: var(--color-naranja-journey) !important;
            box-shadow: 0 0 0 0.2rem rgba(233, 77, 0, 0.25) !important;
        }

        .form-control-custom::placeholder {
            color: #94A3B8 !important;
        }

        .btn-submit-contact {
            background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%);
            color: #FFFFFF !important;
            font-weight: 800;
            font-size: 0.95rem;
            padding: 0.85rem 2rem;
            border-radius: 50px;
            border: none;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            transition: all 0.3s ease;
        }

        .btn-submit-contact:hover {
            background: linear-gradient(135deg, var(--color-naranja-hover) 0%, var(--color-naranja-journey) 100%);
            transform: translateY(-2px);
        }

        .map-wrapper {
            border-radius: 20px;
            overflow: hidden;
            border: 2px solid var(--color-gris-border);
            box-shadow: none;
        }

        /* FOOTER */
        .footer-custom {
            background: #001220;
            border-top: 2px solid var(--color-naranja-journey);
            padding-top: 3.5rem;
            padding-bottom: 1.5rem;
            color: #CBD5E1;
            width: 100vw;
        }

        .footer-contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 0.85rem;
            color: #E2E8F0;
        }

        .footer-contact-icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: rgba(233, 77, 0, 0.15);
            color: var(--color-naranja-journey);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.05rem;
            border: 1px solid rgba(233, 77, 0, 0.25);
            flex-shrink: 0;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 58px;
            height: 58px;
            background-color: #25D366;
            color: #FFF;
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            z-index: 1050;
            text-decoration: none;
            box-shadow: none !important;
        }

        .llama-svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }

        @media (max-width: 991.98px) {
            .navbar-custom { position: relative; top: 0; background: #FFFFFF; }
            .nav-link { color: var(--color-azul-peru-safe) !important; text-shadow: none; }
            .logo-img-header { height: 68px; }
        }

        @media (max-width: 575.98px) {
            .logo-img-header { height: 54px; }
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container-fluid px-3 px-lg-5 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="topbar-phone-badge"><i class="bi bi-telephone-fill text-warning"></i> Ventas: <?php echo $phones['ventas']['number']; ?></a>
                <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="topbar-phone-badge"><i class="bi bi-gear-fill text-warning"></i> Operaciones: <?php echo $phones['operaciones']['number']; ?></a>
                <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="topbar-phone-badge"><i class="bi bi-shield-check text-warning"></i> Calidad: <?php echo $phones['calidad']['number']; ?></a>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="https://facebook.com" target="_blank" class="topbar-social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com" target="_blank" class="topbar-social-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://tiktok.com" target="_blank" class="topbar-social-icon" title="TikTok"><i class="bi bi-tiktok"></i></a>
                <a href="https://youtube.com" target="_blank" class="topbar-social-icon" title="YouTube"><i class="bi bi-youtube"></i></a>
                <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20un%20viaje" target="_blank" class="topbar-btn-reserva">
                    <svg class="llama-svg" viewBox="0 0 512 512"><path d="M224 96c0-26.5 21.5-48 48-48s48 21.5 48 48c0 14.7-6.6 27.8-17 36.7 18.2 16.5 29 40 29 65.3v24h16c35.3 0 64 28.7 64 64v16c0 17.7-14.3 32-32 32h-16v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-80h-32v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-96c0-44.2 35.8-80 80-80v-24c0-13.3-5.3-25.3-14-34.1-10.4-10.5-17-24.8-17-40.6zM272 80c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16z"/></svg>
                    <span>Reserva tu Viaje</span>
                </a>
            </div>
        </div>
    </div>

    <!-- NAVBAR HEADER OVERLAY -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid px-3 px-lg-5">
            <a class="navbar-brand-logo" href="https://www.perusafejourneysgroup.com/">
                <img src="https://www.perusafejourneysgroup.com/wp-content/uploads/2026/10/Diseno-sin-titulo.png" alt="Perú Safe Journeys Logo" class="logo-img-header">
            </a>

            <button class="navbar-toggler text-white border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <i class="bi bi-list fs-1 text-white"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneysgroup.com/">INICIO</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://www.perusafejourneysgroup.com/destinos/" id="destinosDropdown" role="button" data-bs-toggle="dropdown">
                            DESTINOS
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="destinosDropdown">
                            <li>
                                <a class="dropdown-item dropdown-item-custom text-warning" href="https://www.perusafejourneysgroup.com/destinos/">
                                    VER TODOS LOS DESTINOS
                                </a>
                            </li>
                            <li><hr class="dropdown-divider my-1 border-secondary opacity-25"></li>
                            <?php foreach($destinos_submenu as $sub_item): ?>
                                <li>
                                    <a class="dropdown-item dropdown-item-custom" href="<?php echo $sub_item['url']; ?>">
                                        <?php echo $sub_item['name']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
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
                        <a class="nav-link active" href="https://www.perusafejourneysgroup.com/contacto/">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- BANNER HEADER -->
    <section class="page-header-banner">
        <div class="container-fluid px-3 px-lg-5">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">ESTAMOS LISTOS PARA ATENDERTE</span>
            <h1 class="display-5 fw-extrabold text-white">Contáctanos</h1>
            <p class="fs-6 text-light max-w-700 mx-auto mb-0">Comunícate directamente con nuestros especialistas locales antes, durante y después de tu experiencia.</p>
        </div>
    </section>

    <!-- SECCIÓN DE CONTACTO AMIGABLE & FORMULARIO -->
    <section class="py-5">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row g-5 align-items-start">

                <!-- TARJETAS DE LÍNEAS DIRECTAS DE ATENCIÓN DE IGUAL TAMAÑO -->
                <div class="col-lg-5">
                    <div class="contact-info-card">
                        <div>
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold text-uppercase mb-2">CANALES OFICIALES</span>
                            <h2 class="fs-3 fw-extrabold text-dark mb-2">Líneas Directas de Atención</h2>
                            <p class="small text-secondary mb-4" style="line-height: 1.6;">
                                Comunícate directamente con nuestros especialistas locales según el tipo de atención que requieras: cotizaciones personalizadas, estado de tus reservas en ruta o asistencia en tiempo real las 24 horas.
                            </p>
                        </div>

                        <div class="d-flex flex-column gap-3">
                            <div class="contact-item-box">
                                <div class="d-flex align-items-center gap-3 w-100">
                                    <div class="contact-icon-wrapper">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <strong class="d-block text-secondary text-uppercase fw-bold" style="font-size: 0.75rem;">Área de Ventas</strong>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                            <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="text-dark fw-bold text-decoration-none" style="font-size: 0.95rem;"><?php echo $phones['ventas']['number']; ?></a>
                                            <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>" target="_blank" class="badge bg-success text-white text-decoration-none px-2 py-1 rounded-pill" style="font-size: 0.72rem;"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-item-box">
                                <div class="d-flex align-items-center gap-3 w-100">
                                    <div class="contact-icon-wrapper">
                                        <i class="bi bi-gear-fill"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <strong class="d-block text-secondary text-uppercase fw-bold" style="font-size: 0.75rem;">Área de Operaciones</strong>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                            <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="text-dark fw-bold text-decoration-none" style="font-size: 0.95rem;"><?php echo $phones['operaciones']['number']; ?></a>
                                            <a href="https://wa.me/<?php echo $phones['operaciones']['clean']; ?>" target="_blank" class="badge bg-success text-white text-decoration-none px-2 py-1 rounded-pill" style="font-size: 0.72rem;"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-item-box">
                                <div class="d-flex align-items-center gap-3 w-100">
                                    <div class="contact-icon-wrapper">
                                        <i class="bi bi-shield-check"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <strong class="d-block text-secondary text-uppercase fw-bold" style="font-size: 0.75rem;">Atención de Calidad 24/7</strong>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                                            <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="text-dark fw-bold text-decoration-none" style="font-size: 0.95rem;"><?php echo $phones['calidad']['number']; ?></a>
                                            <a href="https://wa.me/<?php echo $phones['calidad']['clean']; ?>" target="_blank" class="badge bg-success text-white text-decoration-none px-2 py-1 rounded-pill" style="font-size: 0.72rem;"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-item-box">
                                <div class="d-flex align-items-center gap-3 w-100">
                                    <div class="contact-icon-wrapper">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <strong class="d-block text-secondary text-uppercase fw-bold" style="font-size: 0.75rem;">Correo Electrónico</strong>
                                        <a href="mailto:<?php echo $email_address; ?>" class="text-dark fw-bold text-decoration-none text-truncate d-block" style="font-size: 0.88rem;"><?php echo $email_address; ?></a>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-item-box">
                                <div class="d-flex align-items-center gap-3 w-100">
                                    <div class="contact-icon-wrapper">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <strong class="d-block text-secondary text-uppercase fw-bold" style="font-size: 0.75rem;">Oficina Central</strong>
                                        <span class="text-dark fw-bold d-block" style="font-size: 0.88rem;">Plaza de Armas del Cusco, Perú</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FORMULARIO ATRACTIVO -->
                <div class="col-lg-7">
                    <div class="contact-form-card">
                        <div class="mb-4">
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold text-uppercase mb-2">RESPUESTA RÁPIDA</span>
                            <h2 class="fs-2 fw-extrabold text-white mb-2">Envíanos un Mensaje Directo</h2>
                            <p class="fs-6 text-light opacity-90 mb-0">Escríbenos tus dudas, fechas o destinos preferidos. Recibirás respuesta directa a tu correo.</p>
                        </div>

                        <?php if ($form_status): ?>
                            <div class="alert alert-<?php echo $form_status; ?> alert-dismissible fade show rounded-3 mb-4" role="alert">
                                <i class="bi bi-info-circle-fill me-2"></i> <?php echo $form_msg; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <form action="page-contacto.php" method="POST">
                            <input type="hidden" name="action" value="send_contact">
                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nombre" class="form-label-custom">Nombre Completo *</label>
                                    <input type="text" class="form-control form-control-custom" id="nombre" name="nombre" placeholder="Ej: María García" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label-custom">Correo Electrónico *</label>
                                    <input type="email" class="form-control form-control-custom" id="email" name="email" placeholder="nombre@correo.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefono" class="form-label-custom">Teléfono / WhatsApp</label>
                                    <input type="tel" class="form-control form-control-custom" id="telefono" name="telefono" placeholder="+51 900 000 000">
                                </div>
                                <div class="col-md-6">
                                    <label for="asunto" class="form-label-custom">Destino / Asunto</label>
                                    <input type="text" class="form-control form-control-custom" id="asunto" name="asunto" placeholder="Ej: Tour Machu Picchu 3D/2N">
                                </div>
                                <div class="col-12">
                                    <label for="mensaje" class="form-label-custom">Detalles de tu Consulta *</label>
                                    <textarea class="form-control form-control-custom" id="mensaje" name="mensaje" rows="4" placeholder="Indica fechas estimadas, número de personas o cualquier preferencia especial..." required></textarea>
                                </div>
                                <div class="col-12 mt-4 text-end">
                                    <button type="submit" class="btn btn-submit-contact shadow">
                                        <i class="bi bi-send-fill me-2"></i> Enviar Mensaje
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECCIÓN DE UBICACIÓN GOOGLE MAPS - PLAZA DE ARMAS DEL CUSCO -->
    <section class="py-5 bg-light border-top border-bottom">
        <div class="container-fluid px-3 px-lg-5">
            <div class="text-center mb-4">
                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">UBICACIÓN ESTRATÉGICA</span>
                <h2 class="display-6 fw-extrabold text-dark mb-2">Encuéntranos en el Corazón del Cusco</h2>
                <p class="fs-6 text-secondary max-w-700 mx-auto mb-0">Visítanos a pocos pasos de la emblemática Plaza de Armas del Cusco, centro histórico e Inca del Perú.</p>
            </div>

            <div class="map-wrapper mx-auto max-w-1200">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.330419266782!2d-71.98108422394336!3d-13.516748487756184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd673f324ad77%3A0x6b803f2780775d5f!2sPlaza%20de%20Armas%20de%20Cusco!5e0!3m2!1ses-419!2spe!4v1700000000000!5m2!1ses-419!2spe"
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Ubicación Plaza de Armas del Cusco - Perú Safe Journeys">
                </iframe>
            </div>
        </div>
    </section>

    <!-- FOOTER CON ICONOS -->
    <footer class="footer-custom">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <a href="https://www.perusafejourneysgroup.com/" class="fs-4 fw-extrabold text-white text-decoration-none">
                        Perú Safe Journeys <span style="color: var(--color-naranja-journey);">| Viajes Perú</span>
                    </a>
                    <p class="pe-lg-3 mt-2" style="color: #94A3B8;">
                        Agencia de viajes especializada en experiencias auténticas, seguras y personalizadas.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold text-white mb-3">Navegación</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://www.perusafejourneysgroup.com/" class="text-secondary text-decoration-none">INICIO</a></li>
                        <li class="mb-2"><a href="https://www.perusafejourneysgroup.com/destinos/" class="text-secondary text-decoration-none">DESTINOS</a></li>
                        <li class="mb-2"><a href="https://www.perusafejourneysgroup.com/experiencias/" class="text-secondary text-decoration-none">EXPERIENCIAS</a></li>
                        <li class="mb-2"><a href="https://www.perusafejourneysgroup.com/programas/" class="text-secondary text-decoration-none">PROGRAMAS</a></li>
                        <li class="mb-2"><a href="https://www.perusafejourneysgroup.com/nosotros/" class="text-secondary text-decoration-none">NOSOTROS</a></li>
                        <li class="mb-2"><a href="https://www.perusafejourneysgroup.com/contacto/" class="text-secondary text-decoration-none">CONTACTO</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h5 class="fw-bold text-white mb-3">Contacto Oficial</h5>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon"><i class="bi bi-telephone-fill"></i></div>
                        <div>
                            <small class="d-block text-secondary">Ventas:</small>
                            <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="text-white text-decoration-none fw-bold"><?php echo $phones['ventas']['number']; ?></a>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon"><i class="bi bi-gear-fill"></i></div>
                        <div>
                            <small class="d-block text-secondary">Operaciones:</small>
                            <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="text-white text-decoration-none fw-bold"><?php echo $phones['operaciones']['number']; ?></a>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon"><i class="bi bi-shield-check"></i></div>
                        <div>
                            <small class="d-block text-secondary">Calidad 24/7:</small>
                            <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="text-white text-decoration-none fw-bold"><?php echo $phones['calidad']['number']; ?></a>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon"><i class="bi bi-envelope-fill"></i></div>
                        <div>
                            <small class="d-block text-secondary">Correo de contacto:</small>
                            <a href="mailto:<?php echo $email_address; ?>" class="text-white text-decoration-none fw-bold"><?php echo $email_address; ?></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top border-secondary border-opacity-25 mt-4 pt-3 text-center text-secondary small">
                <p class="mb-0">&copy; <?php echo $current_year; ?> Todos los derechos reservados para: <strong>Perú Safe Journeys | Viajes Perú</strong></p>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>" class="whatsapp-float"><i class="bi bi-whatsapp"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
