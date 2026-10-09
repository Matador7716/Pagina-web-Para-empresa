<?php
// page-programas.php - Perú Safe Journeys
$company_name = "Perú Safe Journeys";
$company_tagline = "Programas e Itinerarios de Viaje";

$phones = [
    'ventas' => ['number' => '+51 931 352 810', 'clean' => '51931352810', 'label' => 'Ventas'],
    'operaciones' => ['number' => '+51 930 823 110', 'clean' => '51930823110', 'label' => 'Operaciones'],
    'calidad' => ['number' => '+51 913 716 197', 'clean' => '51913716197', 'label' => 'Calidad 24/7']
];

$email_address = "informes-web@perusafejourneys.com";
$current_year = date('Y');

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
    <title>Programas – <?php echo $company_name; ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <style>
        :root {
            --color-naranja-journey: #E94D00;
            --color-blanco: #FFFFFF;
            --color-azul-peru-safe: #002238;
            --color-azul-andino: #0B527A;
            --color-gris-claro: #F8FAFC;
            --color-texto-oscuro: #0F172A;
            --color-texto-suave: #64748B;
            --color-gris-border: #E2E8F0;
            --color-naranja-glow: rgba(233, 77, 0, 0.35);
        }

        body, button, input, select, textarea, .nav-link, .dropdown-item, .btn {
            font-family: 'Poppins', sans-serif !important;
        }

        body { font-family: 'Poppins', sans-serif; background-color: var(--color-blanco); color: var(--color-texto-oscuro); overflow-x: hidden; width: 100vw; margin: 0; padding: 0; }

        .top-bar { background: linear-gradient(90deg, #001220 0%, #002238 50%, #001220 100%); font-size: 0.82rem; border-bottom: 1px solid rgba(255, 255, 255, 0.1); padding: 0.4rem 0; }
        .topbar-phone-badge { background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); padding: 0.25rem 0.75rem; border-radius: 50px; font-size: 0.78rem; color: #E2E8F0 !important; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; }

        .navbar-custom { background: rgba(0, 34, 56, 0.96); backdrop-filter: blur(20px); border-bottom: 2px solid var(--color-naranja-journey); padding: 0.5rem 0; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25); }
        .logo-img-header { height: 86px; object-fit: contain; }
        .nav-link { color: var(--color-blanco) !important; font-weight: 700; font-size: 0.9rem; padding: 0.6rem 1.15rem !important; text-transform: uppercase; }
        .nav-link:hover, .nav-link.active { color: var(--color-naranja-journey) !important; }

        .dropdown-menu-custom { background: rgba(0, 22, 40, 0.98) !important; border: 1px solid rgba(233, 77, 0, 0.3) !important; border-top: 4px solid var(--color-naranja-journey) !important; border-radius: 14px !important; min-width: 270px; }
        .dropdown-item-custom { color: #F1F5F9 !important; font-size: 0.84rem !important; font-weight: 700 !important; padding: 0.6rem 1rem !important; display: flex; align-items: center; gap: 10px; text-transform: uppercase; }
        .dropdown-item-custom:hover { background-color: var(--color-naranja-journey) !important; color: var(--color-blanco) !important; }

        .btn-reserva-llama { background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%); color: var(--color-blanco) !important; font-weight: 700; font-size: 0.88rem; border-radius: 50px; padding: 0.6rem 1.35rem; display: inline-flex; align-items: center; gap: 8px; text-decoration: none; box-shadow: 0 4px 15px var(--color-naranja-glow); text-transform: uppercase; }

        .page-header-banner { background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%); padding: 3.5rem 0 2.8rem; color: var(--color-blanco); text-align: center; border-bottom: 3px solid var(--color-naranja-journey); }

        .footer-custom { background: #001220; border-top: 2px solid var(--color-naranja-journey); padding-top: 3.5rem; padding-bottom: 1.5rem; color: #CBD5E1; width: 100vw; }
        .footer-contact-item { display: flex; align-items: center; gap: 12px; margin-bottom: 0.9rem; color: #E2E8F0; }
        .footer-contact-icon { width: 36px; height: 36px; border-radius: 50%; background: rgba(233, 77, 0, 0.15); color: var(--color-naranja-journey); display: flex; align-items: center; justify-content: center; font-size: 1.05rem; border: 1px solid rgba(233, 77, 0, 0.25); flex-shrink: 0; }

        .whatsapp-float { position: fixed; bottom: 25px; right: 25px; width: 60px; height: 60px; background-color: #25D366; color: #FFF; border-radius: 50px; display: flex; align-items: center; justify-content: center; font-size: 30px; box-shadow: 0 8px 20px rgba(37, 211, 102, 0.4); z-index: 1050; text-decoration: none; }
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
            <div class="text-white"><i class="bi bi-envelope-fill text-warning me-1"></i> <?php echo $email_address; ?></div>
        </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-custom">
        <div class="container-fluid px-3 px-lg-5">
            <a href="https://www.perusafejourneysgroup.com/">
                <img src="https://www.perusafejourneysgroup.com/wp-content/uploads/2026/10/Diseno-sin-titulo.png" alt="Logo" class="logo-img-header">
            </a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
                <i class="bi bi-list fs-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item"><a class="nav-link" href="https://www.perusafejourneysgroup.com/">INICIO</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://www.perusafejourneysgroup.com/destinos/" data-bs-toggle="dropdown">
                            DESTINOS
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom shadow-lg">
                            <?php foreach($destinos_submenu as $sub_item): ?>
                                <li>
                                    <a class="dropdown-item dropdown-item-custom" href="<?php echo $sub_item['url']; ?>">
                                        <span><?php echo $sub_item['name']; ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://www.perusafejourneysgroup.com/experiencias/">EXPERIENCIAS</a></li>
                    <li class="nav-item"><a class="nav-link active" href="https://www.perusafejourneysgroup.com/programas/">PROGRAMAS</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.perusafejourneysgroup.com/nosotros/">NOSOTROS</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.perusafejourneysgroup.com/contacto/">CONTACTO</a></li>
                </ul>
                <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>" class="btn-reserva-llama">Reserva tu Viaje</a>
            </div>
        </div>
    </nav>

    <!-- BANNER -->
    <section class="page-header-banner">
        <div class="container-fluid px-3 px-lg-5">
            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold mb-2">ITINERARIOS A MEDIDA</span>
            <h1 class="display-5 fw-extrabold text-white">Programas Completos</h1>
            <p class="fs-6 text-light max-w-700 mx-auto">Planificación profesional de 3 a 10 días para recorrer lo mejor del Perú sin preocupaciones.</p>
        </div>
    </section>

    <!-- CONTENIDO PROGRAMAS -->
    <section class="py-4">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4 p-4 text-center">
                        <i class="bi bi-stars fs-1 text-warning mb-2"></i>
                        <h3 class="fs-5 fw-bold">Cusco Mágico (4 Días / 3 Noches)</h3>
                        <p class="text-secondary small">Incluye City Tour, Valle Sagrado Big, Machu Picchu y traslado seguro desde/hacia el aeropuerto.</p>
                        <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>" class="btn btn-reserva-llama mt-auto justify-content-center">Solicitar Itinerario</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4 p-4 text-center">
                        <i class="bi bi-compass-fill fs-1 text-warning mb-2"></i>
                        <h3 class="fs-5 fw-bold">Ruta Andina Extrema (5 Días)</h3>
                        <p class="text-secondary small">Diseñado para amantes de la naturaleza: Humantay, Vinicunca y 7 Lagunas del Ausangate.</p>
                        <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>" class="btn btn-reserva-llama mt-auto justify-content-center">Solicitar Itinerario</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4 p-4 text-center">
                        <i class="bi bi-gem fs-1 text-warning mb-2"></i>
                        <h3 class="fs-5 fw-bold">Perú Auténtico VIP (7 Días)</h3>
                        <p class="text-secondary small">Experiencia privada de lujo por Cusco, Valle Sagrado, Machu Picchu y Turismo Vivencial.</p>
                        <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>" class="btn btn-reserva-llama mt-auto justify-content-center">Solicitar Itinerario</a>
                    </div>
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>
</html>
