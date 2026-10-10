<?php
// page-programas.php - Perú Safe Journeys
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

// Submenú de Destinos
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

// Programas Turísticos Completos
$programas_list = [
    [
        'title' => 'Cusco Clásico & Machu Picchu Mágico',
        'duration' => '4 Días / 3 Noches',
        'badge' => 'Más Vendido',
        'price_usd' => '280',
        'price_pen' => '966.00',
        'desc' => 'El paquete perfecto para explorar los tesoros esenciales del Imperio Inca. Incluye recepción en el aeropuerto, City Tour Arqueológico en Cusco, recorrido completo por el Valle Sagrado (Pisac y Ollantaytambo), tren panorámico hacia Aguas Calientes y la visita guiada en la impresionante ciudadela sagrada de Machu Picchu.',
        'main_image' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
        'gallery' => [
            'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80'
        ],
        'highlights' => ['City Tour Cusco', 'Valle Sagrado', 'Machu Picchu VIP']
    ],
    [
        'title' => 'Ruta Andina Extrema & Maravillas Naturales',
        'duration' => '5 Días / 4 Noches',
        'badge' => 'Aventura & Trekking',
        'price_usd' => '320',
        'price_pen' => '1104.00',
        'desc' => 'Diseñado para amantes de la naturaleza y caminatas de alta montaña. Disfruta de una expedición completa que abarca la mística Laguna Humantay de aguas turquesas, la caminata a la Montaña de 7 Colores (Vinicunca) o ATV, el impresionante circuito de las 7 Lagunas del Ausangate y tiempo libre en la histórica ciudad del Cusco.',
        'main_image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
        'gallery' => [
            'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80'
        ],
        'highlights' => ['Laguna Humantay', 'Vinicunca 7 Colores', 'Ausangate Trekking']
    ],
    [
        'title' => 'Perú Inolvidable: Cusco, Puno & Lago Titicaca',
        'duration' => '7 Días / 6 Noches',
        'badge' => 'Gran Circuito Sur',
        'price_usd' => '520',
        'price_pen' => '1794.00',
        'desc' => 'Una travesía inolvidable que une los Andes y el altiplano peruano. Explora la majestuosidad de Cusco y Machu Picchu, viaja en la Ruta del Sol con paradas en Andahuaylillas y Raqchi, y navega en las legendarias aguas del Lago Titicaca visitando las islas flotantes de los Uros y Taquile.',
        'main_image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80',
        'gallery' => [
            'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80'
        ],
        'highlights' => ['Machu Picchu', 'Ruta del Sol', 'Lago Titicaca & Uros']
    ],
    [
        'title' => 'Experiencia Espiritual & Turismo Vivencial VIP',
        'badge' => 'Inmersión Total',
        'duration' => '6 Días / 5 Noches',
        'price_usd' => '450',
        'price_pen' => '1552.50',
        'desc' => 'Conecta profundamente con la cosmovisión Inca y las comunidades locales. Incluye ceremonias de pago a la Pachamama con chamanes andinos, talleres de tejido ancestral en Ollantaytambo, estadía en casas hospedaje rurales, recorridos gastronómicos con insumos orgánicos y paseos privados por santuarios arqueológicos.',
        'main_image' => 'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80',
        'gallery' => [
            'https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1589802829985-817e51171b92?auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?auto=format&fit=crop&w=800&q=80'
        ],
        'highlights' => ['Pago a la Pachamama', 'Conexión Comunitaria', 'Machu Picchu Exclusivo']
    ]
];

// Puntos clave del mapa interactivo
$map_points = [
    ['name' => 'Lima', 'region' => 'Costa Central', 'desc' => 'Gastronomía & Capital'],
    ['name' => 'Cusco', 'region' => 'Andes del Sur', 'desc' => 'Ombligo del Mundo'],
    ['name' => 'Machu Picchu', 'region' => 'Valle Sagrado', 'desc' => 'Maravilla del Mundo'],
    ['name' => 'Humantay', 'region' => 'Anta', 'desc' => 'Laguna Turquesa'],
    ['name' => 'Vinicunca', 'region' => 'Quispicanchi', 'desc' => 'Montaña de 7 Colores'],
    ['name' => 'Ausangate', 'region' => 'Canchis', 'desc' => 'Glaciares & 7 Lagunas'],
    ['name' => 'Puno', 'region' => 'Altiplano', 'desc' => 'Lago Titicaca & Uros'],
    ['name' => 'Arequipa', 'region' => 'Andes Volcánicos', 'desc' => 'Cañón del Colca']
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programas – <?php echo $company_name; ?></title>

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <style>
        :root {
            --color-naranja-journey: #E94D00;
            --color-naranja-hover: #C74000;
            --color-blanco: #FFFFFF;
            --color-azul-peru-safe: #002238;
            --color-azul-andino: #0B527A;
            --color-dorado-andino: #D9A441;
            --color-tripadvisor-green: #00AA6C;
            --color-gris-claro: #F8FAFC;
            --color-texto-oscuro: #0F172A;
            --color-texto-suave: #475569;
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

        /* NAVBAR HEADER */
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

        .llama-svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }

        /* BANNER HEADER */
        .page-header-banner {
            background: linear-gradient(135deg, #001220 0%, var(--color-azul-peru-safe) 100%);
            padding: 3.8rem 0 3.2rem;
            color: var(--color-blanco);
            text-align: center;
            border-bottom: 3px solid var(--color-naranja-journey);
        }

        .section-badge-clean {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(233, 77, 0, 0.08);
            color: var(--color-naranja-journey);
            font-weight: 800;
            font-size: 0.8rem;
            padding: 0.38rem 1.1rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin-bottom: 0.6rem;
            border: 1px solid rgba(233, 77, 0, 0.22);
        }

        .section-title {
            font-size: 2.35rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0.3rem;
            letter-spacing: -0.4px;
        }

        .section-lead-concept {
            font-size: 1.08rem;
            color: var(--color-texto-suave);
            max-width: 820px;
            margin: 0.3rem auto 1.4rem auto;
            line-height: 1.6;
            font-weight: 400;
        }

        /* MAPA INTERACTIVO DE PERÚ */
        .peru-map-section {
            background: linear-gradient(135deg, #001220 0%, #002238 60%, #001A2C 100%);
            padding: 3.5rem 0;
            color: #FFFFFF;
            width: 100vw;
            border-top: 2px solid var(--color-naranja-journey);
            border-bottom: 2px solid var(--color-naranja-journey);
            position: relative;
            overflow: hidden;
        }

        .map-wrapper-card {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 24px;
            padding: 2rem;
            backdrop-filter: blur(10px);
        }

        .map-graphic-box {
            position: relative;
            width: 100%;
            height: 480px;
            background: radial-gradient(circle at center, rgba(11, 82, 122, 0.3) 0%, rgba(0, 18, 32, 0.8) 100%);
            border-radius: 20px;
            border: 1px solid rgba(233, 77, 0, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .peru-svg-contour {
            width: auto;
            height: 88%;
            max-width: 90%;
            filter: drop-shadow(0 0 15px rgba(233, 77, 0, 0.25));
            opacity: 0.85;
        }

        /* PUNTOS NARANJAS GLOWING EN EL MAPA */
        .map-marker-orange {
            position: absolute;
            width: 16px;
            height: 16px;
            background-color: var(--color-naranja-journey);
            border: 2px solid #FFFFFF;
            border-radius: 50%;
            box-shadow: 0 0 12px var(--color-naranja-journey), 0 0 20px #FF6200;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .map-marker-orange::after {
            content: '';
            position: absolute;
            top: -6px;
            left: -6px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: rgba(233, 77, 0, 0.4);
            animation: pulseGlow 2s infinite;
        }

        @keyframes pulseGlow {
            0% { transform: scale(0.8); opacity: 1; }
            100% { transform: scale(1.8); opacity: 0; }
        }

        .map-marker-orange:hover {
            transform: scale(1.4);
            background-color: #FFB800;
        }

        .map-marker-label {
            position: absolute;
            background: rgba(0, 18, 32, 0.92);
            border: 1px solid var(--color-naranja-journey);
            color: #FFFFFF;
            font-size: 0.7rem;
            font-weight: 700;
            padding: 0.2rem 0.55rem;
            border-radius: 50px;
            white-space: nowrap;
            transform: translateY(-24px);
            pointer-events: none;
            backdrop-filter: blur(6px);
        }

        /* POSICIONES DE LOS PUNTOS EN EL MAPA DE PERÚ */
        .marker-lima { top: 48%; left: 32%; }
        .marker-cusco { top: 62%; left: 62%; }
        .marker-machupicchu { top: 58%; left: 58%; }
        .marker-humantay { top: 56%; left: 55%; }
        .marker-vinicunca { top: 64%; left: 66%; }
        .marker-ausangate { top: 66%; left: 68%; }
        .marker-puno { top: 74%; left: 74%; }
        .marker-arequipa { top: 78%; left: 60%; }

        .map-list-badge {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            padding: 0.8rem 1rem;
            border-radius: 14px;
            margin-bottom: 0.75rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .map-list-badge:hover {
            border-color: var(--color-naranja-journey);
            background: rgba(233, 77, 0, 0.12);
            transform: translateX(4px);
        }

        .map-list-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--color-naranja-journey);
            color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            flex-shrink: 0;
            box-shadow: 0 0 10px rgba(233, 77, 0, 0.4);
        }

        /* TARJETAS PROGRAMAS TURÍSTICOS */
        .prog-card-item {
            background: #FFFFFF;
            border-radius: 22px;
            overflow: hidden;
            border: 1px solid var(--color-gris-border);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.35s ease;
        }

        .prog-card-item:hover {
            border-color: var(--color-naranja-journey);
            transform: translateY(-6px);
            box-shadow: 0 16px 32px rgba(0, 34, 56, 0.09);
        }

        .prog-card-img-main {
            position: relative;
            height: 240px;
            overflow: hidden;
        }

        .prog-card-img-main img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .prog-card-item:hover .prog-card-img-main img {
            transform: scale(1.08);
        }

        .prog-card-badge {
            position: absolute;
            top: 14px;
            right: 14px;
            background: var(--color-naranja-journey);
            color: #FFFFFF;
            font-size: 0.75rem;
            font-weight: 800;
            padding: 0.38rem 0.95rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            z-index: 2;
        }

        .prog-duration-badge {
            position: absolute;
            bottom: 14px;
            left: 14px;
            background: rgba(0, 18, 32, 0.88);
            backdrop-filter: blur(8px);
            color: #FFFFFF;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.35rem 0.85rem;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            z-index: 2;
        }

        /* GALERÍA DE MINIATURAS */
        .prog-gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 6px;
            padding: 8px 12px 0;
            background-color: #F8FAFC;
            border-bottom: 1px solid var(--color-gris-border);
        }

        .prog-gallery-thumb {
            position: relative;
            height: 75px;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            border: 1.5px solid transparent;
            transition: all 0.25s ease;
        }

        .prog-gallery-thumb img {
            width: 100%;
            height: 75px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .prog-gallery-thumb:hover {
            border-color: var(--color-naranja-journey);
        }

        .prog-gallery-thumb:hover img {
            transform: scale(1.1);
        }

        .prog-card-body {
            padding: 1.6rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }

        .prog-header-price-row {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 0.6rem;
        }

        .prog-card-title {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--color-azul-peru-safe);
            margin-bottom: 0;
            line-height: 1.35;
            flex: 1;
        }

        .prog-inline-price {
            text-align: right;
            flex-shrink: 0;
            white-space: nowrap;
        }

        .prog-price-usd {
            font-size: 1.35rem;
            font-weight: 500;
            color: var(--color-naranja-journey);
            line-height: 1;
        }

        .prog-price-pen {
            font-size: 0.72rem;
            font-weight: 400;
            color: var(--color-texto-suave);
            line-height: 1.1;
            margin-top: 2px;
        }

        .prog-card-desc {
            font-size: 0.93rem;
            color: #475569;
            line-height: 1.7;
            margin-bottom: 1.2rem;
        }

        .prog-highlights-box {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 1.4rem;
        }

        .prog-highlight-tag {
            background-color: rgba(11, 82, 122, 0.08);
            color: var(--color-azul-andino);
            font-size: 0.72rem;
            font-weight: 700;
            padding: 0.25rem 0.65rem;
            border-radius: 50px;
            border: 1px solid rgba(11, 82, 122, 0.18);
        }

        /* DOS BOTONES PARA ACCIÓN DIRECTA */
        .prog-card-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-top: auto;
        }

        .btn-action-whatsapp {
            background-color: #25D366;
            color: #FFFFFF !important;
            font-weight: 700;
            font-size: 0.82rem;
            padding: 0.72rem 0.8rem;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            text-decoration: none;
            transition: all 0.28s ease;
            text-transform: uppercase;
            border: none;
        }

        .btn-action-whatsapp:hover {
            background-color: #1EBE5A;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(37, 211, 102, 0.3);
        }

        .btn-action-call {
            background-color: var(--color-azul-peru-safe);
            color: #FFFFFF !important;
            font-weight: 700;
            font-size: 0.82rem;
            padding: 0.72rem 0.8rem;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            text-decoration: none;
            transition: all 0.28s ease;
            text-transform: uppercase;
            border: none;
        }

        .btn-action-call:hover {
            background-color: var(--color-naranja-journey);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(233, 77, 0, 0.3);
        }

        /* FOOTER */
        .footer-custom {
            background: #001220;
            border-top: 2px solid var(--color-naranja-journey);
            padding-top: 3.5rem;
            padding-bottom: 1.5rem;
            font-size: 0.9rem;
            color: #CBD5E1;
            width: 100vw;
        }

        .footer-logo {
            font-size: 1.65rem;
            font-weight: 800;
            color: var(--color-blanco);
            margin-bottom: 0.8rem;
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

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            margin-top: 2.5rem;
            padding-top: 1.4rem;
            text-align: center;
            color: #94A3B8;
            font-size: 0.85rem;
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
            text-align: center;
            font-size: 28px;
            z-index: 1050;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.25s ease;
        }

        .whatsapp-float:hover {
            color: #FFF;
            background-color: #20BA5A;
            transform: scale(1.08);
        }

        @media (max-width: 991.98px) {
            .navbar-custom { position: relative; top: 0; background: #FFFFFF; }
            .nav-link { color: var(--color-azul-peru-safe) !important; text-shadow: none; }
            .logo-img-header { height: 68px; }
            .map-graphic-box { height: 380px; }
        }

        @media (max-width: 575.98px) {
            .logo-img-header { height: 54px; }
            .prog-card-actions { grid-template-columns: 1fr; }
            .map-graphic-box { height: 320px; }
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container-fluid px-3 px-lg-5 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="topbar-phone-badge">
                    <i class="bi bi-telephone-fill text-warning"></i>
                    <span><strong><?php echo $phones['ventas']['label']; ?>:</strong> <?php echo $phones['ventas']['number']; ?></span>
                </a>
                <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="topbar-phone-badge">
                    <i class="bi bi-gear-fill text-warning"></i>
                    <span><strong><?php echo $phones['operaciones']['label']; ?>:</strong> <?php echo $phones['operaciones']['number']; ?></span>
                </a>
                <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="topbar-phone-badge">
                    <i class="bi bi-shield-check text-warning"></i>
                    <span><strong><?php echo $phones['calidad']['label']; ?>:</strong> <?php echo $phones['calidad']['number']; ?></span>
                </a>
            </div>

            <div class="d-flex align-items-center gap-3">
                <a href="https://facebook.com" target="_blank" class="topbar-social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com" target="_blank" class="topbar-social-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://tiktok.com" target="_blank" class="topbar-social-icon" title="TikTok"><i class="bi bi-tiktok"></i></a>
                <a href="https://youtube.com" target="_blank" class="topbar-social-icon" title="YouTube"><i class="bi bi-youtube"></i></a>

                <a href="https://wa.me/<?php echo $phones['ventas']['clean']; ?>?text=Hola,%20deseo%20reservar%20un%20viaje%20con%20Per%C3%BA%20Safe%20Journeys" target="_blank" class="topbar-btn-reserva">
                    <svg class="llama-svg" viewBox="0 0 512 512">
                        <path d="M224 96c0-26.5 21.5-48 48-48s48 21.5 48 48c0 14.7-6.6 27.8-17 36.7 18.2 16.5 29 40 29 65.3v24h16c35.3 0 64 28.7 64 64v16c0 17.7-14.3 32-32 32h-16v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-80h-32v80c0 17.7-14.3 32-32 32h-16c-17.7 0-32-14.3-32-32v-96c0-44.2 35.8-80 80-80v-24c0-13.3-5.3-25.3-14-34.1-10.4-10.5-17-24.8-17-40.6zM272 80c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16z"/>
                    </svg>
                    <span>Reserva tu Viaje</span>
                </a>
            </div>
        </div>
    </div>

    <!-- NAVBAR HEADER -->
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
                        <a class="nav-link active" href="https://www.perusafejourneysgroup.com/programas/">PROGRAMAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneysgroup.com/nosotros/">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.perusafejourneysgroup.com/contacto/">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- BANNER HEADER -->
    <section class="page-header-banner">
        <div class="container-fluid px-3 px-lg-5">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">ITINERARIOS A MEDIDA</span>
            <h1 class="display-5 fw-extrabold text-white">Programas Completos de Viaje</h1>
            <p class="fs-6 text-light max-w-700 mx-auto mb-0">Planificación profesional de 3 a 10 días para recorrer los tesoros del Perú con absoluta tranquilidad.</p>
        </div>
    </section>

    <!-- TÍTULO DIVISOR CON DESCRIPCIÓN -->
    <section class="divider-section">
        <div class="container-fluid px-3 px-lg-5 text-center">
            <span class="section-badge-clean">CIRCUITOS RECOMENDADOS</span>
            <h2 class="section-title">Paquetes Turísticos Especiales</h2>
            <p class="section-lead-concept">Explora nuestros paquetes turísticos diseñados minuciosamente con alojamiento, traslados privados, guiado especializado e ingresos incluidos. Vive el Perú sin preocupaciones logísticas.</p>
        </div>
    </section>

    <!-- PROGRAMAS ENRIQUECIDOS CON GALERÍA Y BOTONES DE CONTACTO -->
    <section class="pb-5">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row g-4">
                <?php foreach($programas_list as $index => $prog): ?>
                    <div class="col-lg-6">
                        <div class="prog-card-item">
                            <!-- IMAGEN PRINCIPAL -->
                            <div class="prog-card-img-main">
                                <img src="<?php echo $prog['main_image']; ?>" id="progMainImg_<?php echo $index; ?>" alt="<?php echo $prog['title']; ?>" loading="lazy">
                                <span class="prog-card-badge"><?php echo $prog['badge']; ?></span>
                                <span class="prog-duration-badge"><i class="bi bi-clock me-1"></i><?php echo $prog['duration']; ?></span>
                            </div>

                            <!-- GALERÍA MINIATURAS INTERACTIVAS -->
                            <div class="prog-gallery-grid">
                                <?php foreach($prog['gallery'] as $gIndex => $gImg): ?>
                                    <div class="prog-gallery-thumb" onclick="switchProgGalleryImg('progMainImg_<?php echo $index; ?>', '<?php echo $gImg; ?>')">
                                        <img src="<?php echo $gImg; ?>" alt="Galería <?php echo $gIndex + 1; ?>" loading="lazy">
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="prog-card-body">
                                <div>
                                    <!-- FILA TÍTULO Y PRECIO -->
                                    <div class="prog-header-price-row">
                                        <h3 class="prog-card-title"><?php echo $prog['title']; ?></h3>
                                        <div class="prog-inline-price">
                                            <div class="prog-price-usd">$<?php echo $prog['price_usd']; ?></div>
                                            <div class="prog-price-pen">S/. <?php echo $prog['price_pen']; ?></div>
                                        </div>
                                    </div>

                                    <p class="prog-card-desc"><?php echo $prog['desc']; ?></p>

                                    <!-- TAGS HIGHLIGHTS -->
                                    <div class="prog-highlights-box">
                                        <?php foreach($prog['highlights'] as $tag): ?>
                                            <span class="prog-highlight-tag"><i class="bi bi-check-circle-fill text-warning me-1"></i><?php echo $tag; ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <!-- DOS BOTONES DE CONTACTO DIRECTO DE VENTA (+51 931 352 810) -->
                                <div class="prog-card-actions">
                                    <a href="https://wa.me/51931352810?text=Hola,%20deseo%20m%C3%A1s%20informaci%C3%B3n%20para%20reservar%20el%20programa:%20<?php echo urlencode($prog['title']); ?>"
                                       target="_blank"
                                       class="btn-action-whatsapp">
                                        <i class="bi bi-whatsapp"></i>
                                        <span>WhatsApp</span>
                                    </a>
                                    <a href="tel:+51931352810" class="btn-action-call">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span>Llamar Ahora</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- MAPA VISUAL DE PERÚ CON PUNTOS NARANJAS GLOWING -->
    <section class="peru-map-section">
        <div class="container-fluid px-3 px-lg-5">
            <div class="text-center max-w-800 mx-auto mb-4">
                <span class="section-badge-clean">MAPA DE DESTINOS VISITADOS</span>
                <h2 class="section-title text-white">Nuestra Cobertura de Viaje en el Perú</h2>
                <p class="section-lead-concept text-light opacity-90 mb-3">Conoce los puntos geográficos clave donde operamos nuestros itinerarios turísticos con asistencia local personalizada.</p>
            </div>

            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <div class="map-wrapper-card">
                        <!-- GRÁFICO MAPA PERÚ CON PUNTOS GLOWING -->
                        <div class="map-graphic-box">
                            <!-- SILUETA ILUSTRATIVA SVG DE PERÚ -->
                            <svg class="peru-svg-contour" viewBox="0 0 500 650" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M120,40 Q180,20 260,30 Q340,50 380,100 Q420,160 400,240 Q380,320 440,380 Q480,420 420,500 Q360,580 300,620 Q240,600 180,540 Q120,480 80,400 Q40,320 60,240 Q80,160 120,40 Z" fill="#0B527A" opacity="0.35" stroke="#E94D00" stroke-width="2" stroke-dasharray="4 4"/>
                                <path d="M140,80 Q200,60 280,70 Q340,90 360,140 Q380,200 370,270 Q350,330 400,390 Q420,430 380,490 Q340,540 280,570 Q220,540 170,490 Q120,440 90,360 Q70,300 85,220 Z" fill="rgba(233, 77, 0, 0.08)" stroke="rgba(255, 255, 255, 0.2)"/>
                            </svg>

                            <!-- PUNTOS NARANJAS DE DESTINOS VISITADOS -->
                            <div class="map-marker-orange marker-lima" title="Lima - Capital">
                                <span class="map-marker-label">Lima</span>
                            </div>
                            <div class="map-marker-orange marker-cusco" title="Cusco">
                                <span class="map-marker-label">Cusco</span>
                            </div>
                            <div class="map-marker-orange marker-machupicchu" title="Machu Picchu">
                                <span class="map-marker-label">Machu Picchu</span>
                            </div>
                            <div class="map-marker-orange marker-humantay" title="Laguna Humantay">
                                <span class="map-marker-label">Humantay</span>
                            </div>
                            <div class="map-marker-orange marker-vinicunca" title="Vinicunca">
                                <span class="map-marker-label">Vinicunca</span>
                            </div>
                            <div class="map-marker-orange marker-ausangate" title="Ausangate">
                                <span class="map-marker-label">Ausangate</span>
                            </div>
                            <div class="map-marker-orange marker-puno" title="Puno & Titicaca">
                                <span class="map-marker-label">Puno</span>
                            </div>
                            <div class="map-marker-orange marker-arequipa" title="Arequipa & Colca">
                                <span class="map-marker-label">Arequipa</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="pe-lg-3">
                        <h3 class="fs-4 fw-bold text-white mb-3">Puntos Turísticos en Ruta</h3>
                        <p class="text-light opacity-80 mb-4" style="line-height: 1.7;">
                            Nuestros programas cubren las principales regiones geográficas del Perú con transporte privado, guías bilingües y coordinación permanente desde la llegada.
                        </p>

                        <?php foreach($map_points as $pt): ?>
                            <div class="map-list-badge">
                                <div class="map-list-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div>
                                    <strong class="d-block text-white fs-6"><?php echo $pt['name']; ?></strong>
                                    <small class="text-warning fw-semibold me-2"><?php echo $pt['region']; ?>:</small>
                                    <small class="text-light opacity-80"><?php echo $pt['desc']; ?></small>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer-custom" id="contacto">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <a href="https://www.perusafejourneysgroup.com/" class="footer-logo">
                        Perú Safe Journeys <span>| Viajes Perú</span>
                    </a>
                    <p class="pe-lg-3" style="color: #94A3B8;">
                        Agencia de viajes especializada en experiencias auténticas, seguras y personalizadas. Conectamos viajeros con el corazón cultural del Perú.
                    </p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="https://facebook.com" target="_blank" class="topbar-social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com" target="_blank" class="topbar-social-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://tiktok.com" target="_blank" class="topbar-social-icon" title="TikTok"><i class="bi bi-tiktok"></i></a>
                        <a href="https://youtube.com" target="_blank" class="topbar-social-icon" title="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
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
                        <div class="footer-contact-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <small class="d-block text-secondary">Ventas:</small>
                            <a href="tel:<?php echo $phones['ventas']['clean']; ?>" class="text-white text-decoration-none fw-bold"><?php echo $phones['ventas']['number']; ?></a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <div>
                            <small class="d-block text-secondary">Operaciones:</small>
                            <a href="tel:<?php echo $phones['operaciones']['clean']; ?>" class="text-white text-decoration-none fw-bold"><?php echo $phones['operaciones']['number']; ?></a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <small class="d-block text-secondary">Calidad 24/7:</small>
                            <a href="tel:<?php echo $phones['calidad']['clean']; ?>" class="text-white text-decoration-none fw-bold"><?php echo $phones['calidad']['number']; ?></a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <small class="d-block text-secondary">Correo de contacto:</small>
                            <a href="mailto:<?php echo $email_address; ?>" class="text-white text-decoration-none fw-bold"><?php echo $email_address; ?></a>
                        </div>
                    </div>
                </div>
            </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS para Galería Interactiva -->
    <script>
        function switchProgGalleryImg(mainImgId, newSrc) {
            const mainImg = document.getElementById(mainImgId);
            if (mainImg) {
                mainImg.style.opacity = '0.4';
                setTimeout(() => {
                    mainImg.src = newSrc;
                    mainImg.style.opacity = '1';
                }, 150);
            }
        }
    </script>
</body>
</html>
