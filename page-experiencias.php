<?php
// page-experiencias.php - Perú Safe Journeys
$company_name = "Perú Safe Journeys";
$company_tagline = "Experiencias de Viaje Únicas";

$phones = [
    'ventas' => ['number' => '+51 931 352 810', 'clean' => '51931352810', 'label' => 'Ventas'],
    'operaciones' => ['number' => '+51 930 823 110', 'clean' => '51930823110', 'label' => 'Operaciones'],
    'calidad' => ['number' => '+51 913 716 197', 'clean' => '51913716197', 'label' => 'Calidad 24/7']
];

$email_address = "informes-web@perusafejourneys.com";
$current_year = date('Y');

$destinos_submenu = [
    ['name' => '7 LAGUNAS DEL AUSANGATE', 'price_usd' => '$ 80.00', 'price_pen' => 'S/. 275.50', 'url' => 'https://www.perusafejourneysgroup.com/destinos/7-lagunas-del-ausangate/'],
    ['name' => 'ATV MONTAÑA DE COLORES FD', 'price_usd' => '$ 85.00 Simp. / $ 65.00 Dob.', 'price_pen' => 'S/. 292.60 Simp. / S/. 223.73 Dob.', 'url' => 'https://www.perusafejourneysgroup.com/destinos/atv-montana-de-colores-fd/'],
    ['name' => 'LAGUNA HUMANTAY FD', 'price_usd' => '$ 30.00', 'price_pen' => 'S/. 103.50', 'url' => 'https://www.perusafejourneysgroup.com/destinos/laguna-humantay-fd/'],
    ['name' => 'MONTAÑA VINICUNCA FD', 'price_usd' => '$ 30.00', 'price_pen' => 'S/. 103.50', 'url' => 'https://www.perusafejourneysgroup.com/destinos/montana-vinicunca-fd/'],
    ['name' => 'PALLAY PUNCHOY FD', 'price_usd' => '$ 45.00', 'price_pen' => 'S/. 154.90', 'url' => 'https://www.perusafejourneysgroup.com/destinos/pallay-punchoy-fd/'],
    ['name' => 'QUELCAYA FD', 'price_usd' => '$ 80.00', 'price_pen' => 'S/. 275.50', 'url' => 'https://www.perusafejourneysgroup.com/destinos/quelcaya-fd/'],
    ['name' => 'VALLE SAGRADO BIG', 'price_usd' => '$ 35.00', 'price_pen' => 'S/. 120.50', 'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-big/'],
    ['name' => 'VALLE SAGRADO FD', 'price_usd' => '$ 30.00', 'price_pen' => 'S/. 103.50', 'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sagrado-fd/'],
    ['name' => 'VALLE SUR', 'price_usd' => '$ 25.00', 'price_pen' => 'S/. 86.50', 'url' => 'https://www.perusafejourneysgroup.com/destinos/valle-sur/'],
    ['name' => 'WAQRAPUKARA FD', 'price_usd' => '$ 40.00', 'price_pen' => 'S/. 138.00', 'url' => 'https://www.perusafejourneysgroup.com/destinos/waqrapukara-fd/']
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencias – <?php echo $company_name; ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">

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
            --color-naranja-glow: rgba(233, 77, 0, 0.4);
        }

        body { font-family: 'Manrope', sans-serif; background-color: var(--color-blanco); color: var(--color-texto-oscuro); overflow-x: hidden; width: 100vw; margin: 0; padding: 0; }
        h1, h2, h3, h4, h5, h6, .nav-link, .dropdown-item, .btn-reserva-llama { font-family: 'Poppins', sans-serif; }

        .top-bar { background: linear-gradient(90deg, #001220 0%, #002238 50%, #001220 100%); font-size: 0.85rem; border-bottom: 1px solid rgba(255, 255, 255, 0.1); padding: 0.5rem 0; }
        .topbar-phone-badge { background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); padding: 0.3rem 0.85rem; border-radius: 50px; font-size: 0.82rem; color: #E2E8F0 !important; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; }

        .navbar-custom { background: rgba(0, 34, 56, 0.95); backdrop-filter: blur(20px); border-bottom: 1px solid rgba(233, 77, 0, 0.25); padding: 0.55rem 0; }
        .logo-img-header { height: 92px; object-fit: contain; }
        .nav-link { color: var(--color-blanco) !important; font-weight: 600; font-size: 0.92rem; padding: 0.6rem 1.1rem !important; text-transform: uppercase; }
        .nav-link:hover, .nav-link.active { color: var(--color-naranja-journey) !important; }

        .dropdown-menu-custom { background: rgba(0, 18, 32, 0.98) !important; border: 1px solid rgba(233, 77, 0, 0.3) !important; border-top: 4px solid var(--color-naranja-journey) !important; border-radius: 18px !important; min-width: 390px; }
        .dropdown-item-custom { color: #E2E8F0 !important; font-size: 0.83rem !important; font-weight: 700 !important; padding: 0.65rem 1rem !important; display: flex; align-items: center; justify-content: space-between; }
        .dropdown-item-custom:hover { background-color: var(--color-naranja-journey) !important; color: var(--color-blanco) !important; }

        .btn-reserva-llama { background: linear-gradient(135deg, var(--color-naranja-journey) 0%, #FF6200 100%); color: var(--color-blanco) !important; font-weight: 700; font-size: 0.88rem; border-radius: 50px; padding: 0.65rem 1.4rem; display: inline-flex; align-items: center; gap: 8px; text-decoration: none; box-shadow: 0 4px 16px var(--color-naranja-glow); text-transform: uppercase; }

        .page-header-banner { background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%); padding: 5rem 0 4rem; color: var(--color-blanco); text-align: center; border-bottom: 3px solid var(--color-naranja-journey); }

        .footer-custom { background: #001220; border-top: 2px solid var(--color-naranja-journey); padding: 4rem 0 2rem; color: #CBD5E1; width: 100vw; }
        .whatsapp-float { position: fixed; bottom: 30px; right: 30px; width: 65px; height: 65px; background-color: #25D366; color: #FFF; border-radius: 50px; display: flex; align-items: center; justify-content: center; font-size: 34px; box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4); z-index: 1050; text-decoration: none; }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container-fluid px-3 px-lg-5 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="topbar-phone-badge"><i class="bi bi-telephone-fill"></i> Ventas: <?php echo $phones['ventas']['number']; ?></a>
                <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="topbar-phone-badge"><i class="bi bi-gear-fill"></i> Operaciones: <?php echo $phones['operaciones']['number']; ?></a>
                <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="topbar-phone-badge"><i class="bi bi-shield-check"></i> Calidad: <?php echo $phones['calidad']['number']; ?></a>
            </div>
            <div class="text-white"><i class="bi bi-envelope-fill text-warning"></i> <?php echo $email_address; ?></div>
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
                            DESTINOS <i class="bi bi-chevron-down text-warning"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-custom shadow-lg">
                            <?php foreach($destinos_submenu as $sub_item): ?>
                                <li>
                                    <a class="dropdown-item dropdown-item-custom" href="<?php echo $sub_item['url']; ?>">
                                        <span><i class="bi bi-geo-alt-fill text-warning"></i> <?php echo $sub_item['name']; ?></span>
                                        <span class="badge bg-warning text-dark"><?php echo $sub_item['price_usd']; ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="https://www.perusafejourneysgroup.com/experiencias/">EXPERIENCIAS</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.perusafejourneysgroup.com/programas/">PROGRAMAS</a></li>
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
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">✨ VIVE EL PERÚ AUTÉNTICO</span>
            <h1 class="display-4 fw-extrabold text-white">Experiencias Inolvidables</h1>
            <p class="fs-5 text-light max-w-700 mx-auto">Desde trekings andinos hasta vivencias comunitarias con seguridad y confort garantizado.</p>
        </div>
    </section>

    <!-- CONTENIDO -->
    <section class="py-5">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Experiencia Vivencial" style="height: 220px; object-fit: cover;">
                        <div class="card-body p-4">
                            <span class="badge bg-warning text-dark mb-2">Cultura Live</span>
                            <h3 class="fs-5 fw-bold text-dark">Turismo Vivencial Andino</h3>
                            <p class="text-secondary">Comparte con familias locales en el Valle Sagrado, aprende sus técnicas textiles y la gastronomía ancestral.</p>
                            <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>" class="btn btn-sm btn-reserva-llama">Consultar Experiencia</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Aventura ATV" style="height: 220px; object-fit: cover;">
                        <div class="card-body p-4">
                            <span class="badge bg-warning text-dark mb-2">Adrenalina</span>
                            <h3 class="fs-5 fw-bold text-dark">Rutas Extrenas & ATVs</h3>
                            <p class="text-secondary">Siente la velocidad en la Montaña de 7 Colores conduciendo cuatrimotos de última generación.</p>
                            <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>" class="btn btn-sm btn-reserva-llama">Consultar Experiencia</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Trekking" style="height: 220px; object-fit: cover;">
                        <div class="card-body p-4">
                            <span class="badge bg-warning text-dark mb-2">Trekking</span>
                            <h3 class="fs-5 fw-bold text-dark">Caminatas por Glaciares</h3>
                            <p class="text-secondary">Explora la majestuosidad de la Laguna Humantay y el glaciar Quelcaya en itinerarios seguros.</p>
                            <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>" class="btn btn-sm btn-reserva-llama">Consultar Experiencia</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer-custom text-center">
        <div class="container-fluid px-3 px-lg-5">
            <p class="mb-0">&copy; <?php echo $current_year; ?> Todos los derechos reservados para: <strong>Perú Safe Journeys | Viajes Perú</strong></p>
        </div>
    </footer>

    <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>" class="whatsapp-float"><i class="bi bi-whatsapp"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>
</html>
