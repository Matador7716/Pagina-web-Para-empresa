<?php
/*
 Template Name: IPSAA Recursos
 Description: Página de Recursos y Repositorio Académico Abierto para IPSAA (International Peruvian Students & Alumni Association) cubriendo Guías de Postulación, Modelos de Ensayos (SOP), Plantillas de CV, Becas & Financiamiento, y Exámenes Estandarizados.
*/
?>
<!DOCTYPE html>
<html <?php if (function_exists('language_attributes')) language_attributes(); else echo 'lang="es"'; ?>>
<head>
    <meta charset="<?php if (function_exists('bloginfo')) bloginfo('charset'); else echo 'UTF-8'; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos y Repositorio Académico - IPSAA | Guías, Plantillas y Ensayos</title>
    <meta name="description" content="Explora el repositorio académico abierto de IPSAA: guías de postulación, ejemplos de personal statements, modelos de CV, herramientas para becas y simuladores de exámenes estandarizados." />

    <!-- Google Fonts & Material Symbols -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap" rel="stylesheet">

    <?php if (function_exists('wp_head')) wp_head(); ?>

    <style>
        :root {
            /* Custom IPSAA Brand Palette */
            --red-ipsaa: #670010;
            --red-dark: #4a000b;
            --red-light: #8a0016;
            --navy-ipsaa: #670010;
            --navy-light: #52000d;
            --navy-dark: #380009;
            --beige-calido: #e8c39e;
            --beige-soft: #f8eee4;
            --text-dark: #1F2937;
            --text-muted: #6B7280;
            --white: #FFFFFF;
            --font-main: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --shadow-sm: 0 2px 8px rgba(103, 0, 16, 0.08);
            --shadow-md: 0 8px 24px rgba(103, 0, 16, 0.15);
            --shadow-lg: 0 16px 36px rgba(103, 0, 16, 0.22);
            --radius-sm: 8px;
            --radius-md: 16px;
            --radius-lg: 24px;
            --transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Reset & Global Styles */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-main);
            color: var(--text-dark);
            background-color: #FAFAFA;
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        button {
            font-family: var(--font-main);
            border: none;
            cursor: pointer;
            background: none;
        }

        .ms {
            font-family: 'Material Symbols Outlined';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-smoothing: antialiased;
            vertical-align: middle;
        }

        .container {
            width: 100%;
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: var(--red-ipsaa);
            background: rgba(103, 0, 16, 0.08);
            padding: 6px 16px;
            border-radius: 50px;
            margin-bottom: 16px;
        }

        .eyebrow--light {
            color: var(--beige-calido);
            background: rgba(232, 195, 158, 0.15);
        }

        /* Header Navigation */
        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(11, 25, 44, 0.08);
            box-shadow: var(--shadow-sm);
        }

        .nav-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1280px;
            margin: 0 auto;
            padding: 8px 24px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .header-logo-img {
            height: 60px;
            width: auto;
            max-width: 280px;
            object-fit: contain;
            transition: var(--transition);
        }

        .header-logo-img:hover {
            transform: scale(1.04);
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--navy-ipsaa);
            padding: 8px 12px;
            border-radius: var(--radius-sm);
            transition: var(--transition);
            cursor: pointer;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--red-ipsaa);
            background: rgba(103, 0, 16, 0.06);
            font-weight: 600;
        }

        .nav-link--cta {
            background: var(--red-ipsaa);
            color: var(--white) !important;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 4px 14px rgba(103, 0, 16, 0.28);
        }

        /* Submenu Dropdowns */
        .submenu {
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 230px;
            background: var(--white);
            border-radius: var(--radius-md);
            padding: 12px;
            box-shadow: var(--shadow-md);
            border: 1px solid rgba(0,0,0,0.06);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: var(--transition);
        }

        .nav-item:hover .submenu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .submenu a {
            display: block;
            padding: 10px 14px;
            font-size: 0.88rem;
            color: var(--text-dark);
            border-radius: var(--radius-sm);
            font-weight: 500;
            transition: var(--transition);
            cursor: pointer;
        }

        .submenu a:hover {
            background: var(--beige-calido);
            color: var(--red-ipsaa);
        }

        .nav-link--cta:hover {
            background: var(--red-dark);
            box-shadow: 0 6px 18px rgba(103, 0, 16, 0.38);
            transform: translateY(-1px);
        }

        .nav-toggle {
            display: none;
            color: var(--navy-ipsaa);
            font-size: 28px;
        }

        /* Hero Section */
        .recursos-hero {
            background: linear-gradient(135deg, #380009 0%, #670010 50%, #4a000b 100%);
            color: var(--white);
            padding: 80px 0 90px;
            position: relative;
            overflow: hidden;
        }

        .recursos-hero::before {
            content: '';
            position: absolute;
            top: -120px;
            right: -120px;
            width: 550px;
            height: 550px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(232, 195, 158, 0.18) 0%, transparent 70%);
            pointer-events: none;
        }

        .recursos-hero-layout {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 50px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .recursos-hero-copy {
            display: flex;
            flex-direction: column;
        }

        .recursos-hero h1 {
            font-size: clamp(2.3rem, 4.2vw, 3.4rem);
            font-weight: 800;
            line-height: 1.16;
            margin-bottom: 22px;
            letter-spacing: -0.5px;
            color: var(--white);
            text-shadow: 0 2px 10px rgba(0,0,0,0.25);
        }

        .recursos-hero h1 span {
            color: var(--beige-calido);
            position: relative;
            display: inline-block;
        }

        .recursos-hero p.lead {
            font-size: clamp(1.05rem, 1.8vw, 1.2rem);
            color: rgba(255, 255, 255, 0.92);
            margin-bottom: 32px;
            font-weight: 300;
            line-height: 1.7;
            max-width: 660px;
        }

        /* Search Bar in Hero */
        .hero-search-box {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(232, 195, 158, 0.35);
            border-radius: 50px;
            padding: 6px 10px 6px 20px;
            max-width: 600px;
            margin-bottom: 36px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.2);
            transition: var(--transition);
        }

        .hero-search-box:focus-within {
            background: rgba(255, 255, 255, 0.2);
            border-color: var(--beige-calido);
        }

        .hero-search-box .ms {
            color: var(--beige-calido);
            font-size: 24px;
            margin-right: 10px;
        }

        .hero-search-input {
            width: 100%;
            background: transparent;
            border: none;
            outline: none;
            color: var(--white);
            font-family: var(--font-main);
            font-size: 0.95rem;
        }

        .hero-search-input::placeholder {
            color: rgba(255, 255, 255, 0.65);
        }

        .hero-btn-search {
            background: var(--beige-calido);
            color: var(--red-dark);
            font-weight: 700;
            padding: 10px 22px;
            border-radius: 50px;
            font-size: 0.88rem;
            transition: var(--transition);
            cursor: pointer;
            white-space: nowrap;
        }

        .hero-btn-search:hover {
            background: var(--white);
            color: var(--red-ipsaa);
        }

        /* Hero Right Media Box */
        .recursos-hero-media {
            position: relative;
            border-radius: var(--radius-lg);
        }

        .hero-media-card {
            position: relative;
            height: 440px;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            border: 2px solid rgba(232, 195, 158, 0.3);
        }

        .hero-media-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.88);
            transition: transform 0.6s ease;
        }

        .hero-media-card:hover img {
            transform: scale(1.05);
        }

        .hero-floating-badge {
            position: absolute;
            bottom: -20px;
            left: -20px;
            background: rgba(56, 0, 9, 0.92);
            backdrop-filter: blur(14px);
            border: 1px solid rgba(232, 195, 158, 0.4);
            padding: 18px 22px;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
            display: flex;
            align-items: center;
            gap: 16px;
            z-index: 3;
        }

        .badge-icon-box {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: rgba(232, 195, 158, 0.2);
            color: var(--beige-calido);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .badge-info strong {
            display: block;
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--white);
        }

        .badge-info span {
            font-size: 0.8rem;
            color: var(--beige-calido);
        }

        /* Hero Stats Row */
        .recursos-hero-stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            grid-column: 1 / -1;
            padding-top: 36px;
            margin-top: 20px;
            border-top: 1px solid rgba(232, 195, 158, 0.2);
        }

        .hero-stat-card {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(10px);
            padding: 22px 18px;
            border-radius: var(--radius-md);
            border: 1px solid rgba(232, 195, 158, 0.22);
            text-align: center;
            transition: var(--transition);
        }

        .hero-stat-card:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: var(--beige-calido);
            transform: translateY(-4px);
        }

        .hero-stat-card strong {
            display: block;
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--beige-calido);
            line-height: 1;
            margin-bottom: 6px;
        }

        .hero-stat-card span {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.88);
            font-weight: 500;
        }

        /* Global Section Styling */
        .recursos-section {
            padding: 90px 0;
            position: relative;
        }

        .recursos-section--alt {
            background-color: var(--beige-soft);
        }

        .recursos-section--dark {
            background-color: var(--red-ipsaa);
            color: var(--white);
        }

        .section-header {
            max-width: 760px;
            margin: 0 auto 48px;
            text-align: center;
        }

        .section-header h2 {
            font-size: 2.3rem;
            font-weight: 800;
            color: var(--navy-ipsaa);
            letter-spacing: -0.5px;
            margin-bottom: 14px;
        }

        .recursos-section--dark .section-header h2 {
            color: var(--white);
        }

        .section-header p {
            font-size: 1.1rem;
            color: var(--text-muted);
            line-height: 1.7;
        }

        /* Filter Tabs */
        .recursos-filter-bar {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 48px;
        }

        .recursos-filter-btn {
            padding: 10px 22px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            background: var(--white);
            color: var(--navy-ipsaa);
            border: 1px solid rgba(103, 0, 16, 0.15);
            transition: var(--transition);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .recursos-filter-btn .ms {
            font-size: 20px;
            color: var(--red-ipsaa);
        }

        .recursos-filter-btn:hover, .recursos-filter-btn.active {
            background: var(--red-ipsaa);
            color: var(--white);
            border-color: var(--red-ipsaa);
            box-shadow: 0 4px 14px rgba(103, 0, 16, 0.25);
        }

        .recursos-filter-btn:hover .ms, .recursos-filter-btn.active .ms {
            color: var(--beige-calido);
        }

        /* Resource Grid */
        .recursos-catalog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 32px;
        }

        .recurso-card-item {
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(103, 0, 16, 0.08);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .recurso-card-item:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-md);
            border-color: rgba(232, 195, 158, 0.6);
        }

        .recurso-card-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .recurso-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .recurso-card-item:hover .recurso-card-image img {
            transform: scale(1.06);
        }

        .recurso-format-badge {
            position: absolute;
            top: 16px;
            right: 16px;
            background: rgba(103, 0, 16, 0.9);
            color: var(--white);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 5px 14px;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .recurso-card-body {
            padding: 28px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .recurso-card-category {
            font-size: 0.82rem;
            font-weight: 700;
            color: var(--red-ipsaa);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 8px;
        }

        .recurso-card-body h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--navy-ipsaa);
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .recurso-card-desc {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 24px;
            flex-grow: 1;
        }

        .recurso-card-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 18px;
            border-top: 1px solid rgba(0,0,0,0.06);
        }

        .recurso-downloads-count {
            font-size: 0.82rem;
            font-weight: 600;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .recurso-downloads-count .ms {
            font-size: 18px;
            color: var(--red-ipsaa);
        }

        .btn-action-recurso {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--red-ipsaa);
            color: var(--white);
            padding: 8px 18px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: var(--transition);
        }

        .btn-action-recurso:hover {
            background: var(--red-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(103, 0, 16, 0.3);
        }

        /* FAQ & Request Section */
        .recursos-faq-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: flex-start;
        }

        .faq-box {
            background: var(--white);
            padding: 36px;
            border-radius: var(--radius-lg);
            border: 1px solid rgba(103, 0, 16, 0.1);
            box-shadow: var(--shadow-sm);
        }

        .faq-item {
            margin-bottom: 24px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(0,0,0,0.06);
        }

        .faq-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .faq-item h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--navy-ipsaa);
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .faq-item h4 .ms {
            color: var(--red-ipsaa);
            font-size: 22px;
        }

        .faq-item p {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* Site Footer */
        .site-footer {
            background: #060F1A;
            color: var(--white);
            padding: 70px 0 35px;
            border-top: 1px solid rgba(255,255,255,0.08);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr repeat(5, 1fr);
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-logo-img {
            height: 84px;
            width: auto;
            max-width: 340px;
            object-fit: contain;
            margin-bottom: 16px;
            transition: var(--transition);
        }

        .footer-logo-img:hover {
            transform: scale(1.04);
        }

        .footer-brand p {
            font-size: 0.88rem;
            color: rgba(255, 255, 255, 0.6);
            line-height: 1.6;
        }

        .footer-col h4 {
            font-size: 0.95rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--beige-calido);
            margin-bottom: 20px;
        }

        .footer-col a {
            display: block;
            font-size: 0.88rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 12px;
            transition: var(--transition);
            cursor: pointer;
        }

        .footer-col a:hover {
            color: var(--red-ipsaa);
            transform: translateX(3px);
        }

        .footer-socials {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-top: 8px;
        }

        .footer-social-link {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(232, 195, 158, 0.25);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .footer-social-link svg {
            width: 20px;
            height: 20px;
            fill: currentColor;
            transition: transform 0.35s ease;
        }

        .footer-social-link:hover {
            transform: translateY(-6px) scale(1.15);
            border-color: var(--beige-calido);
            color: #ffffff;
            box-shadow: 0 10px 22px rgba(103, 0, 16, 0.6), 0 0 15px rgba(232, 195, 158, 0.4);
        }

        .footer-social-link--linkedin:hover {
            background: linear-gradient(135deg, #0A66C2 0%, #004182 100%);
            border-color: #0A66C2;
        }

        .footer-social-link--instagram:hover {
            background: linear-gradient(135deg, #833AB4 0%, #FD1D1D 50%, #FCB045 100%);
            border-color: #FD1D1D;
        }

        .footer-social-link--facebook:hover {
            background: linear-gradient(135deg, #1877F2 0%, #0B51AA 100%);
            border-color: #1877F2;
        }

        .footer-social-link:hover svg {
            transform: scale(1.12) rotate(-4deg);
        }

        /* Responsive Breakpoints */
        @media (max-width: 992px) {
            .nav-toggle {
                display: block;
            }

            .nav {
                position: fixed;
                top: 75px;
                left: 0;
                width: 100%;
                background: var(--white);
                flex-direction: column;
                padding: 24px;
                box-shadow: var(--shadow-md);
                display: none;
                gap: 16px;
                border-bottom: 1px solid rgba(0,0,0,0.1);
            }

            .nav.open {
                display: flex;
            }

            .recursos-hero-layout,
            .recursos-faq-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .recursos-catalog-grid {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 576px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }

            .recursos-hero {
                padding: 60px 0;
            }
        }
    </style>
</head>
<body <?php if (function_exists('body_class')) body_class(); ?>>

    <!-- Header Navigation -->
    <header class="site-header">
        <div class="nav-wrap">
            <a class="brand" href="https://www.ipsaaperu.com/inicio/" title="IPSAA Inicio">
                <img src="https://www.ipsaaperu.com/wp-content/uploads/2026/10/Logo-3_sinfondo.png" alt="IPSAA Logo" class="header-logo-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" />
                <div class="brand-text" style="display:none; color:var(--navy-ipsaa); font-weight:800; font-size:1.6rem;">IPSAA<span style="color:var(--red-ipsaa)">.</span></div>
            </a>
            <button class="nav-toggle" aria-label="Menú" onclick="document.getElementById('nav').classList.toggle('open')">
                <span class="ms">menu</span>
            </button>
            <nav class="nav" id="nav">
                <div class="nav-item">
                    <a class="nav-link" href="https://www.ipsaaperu.com/inicio/">Inicio</a>
                    <div class="submenu">
                        <a href="https://www.ipsaaperu.com/inicio/#que-es">Presentación</a>
                        <a href="https://www.ipsaaperu.com/inicio/#hoja-ruta">Elige tu camino</a>
                        <a href="https://www.ipsaaperu.com/inicio/#ultimas-novedades">Últimas novedades</a>
                        <a href="https://www.ipsaaperu.com/inicio/#voces-home">Historias destacadas</a>
                        <a href="https://www.ipsaaperu.com/inicio/#red-ipsaa-home">La Red IPSAA</a>
                        <a href="https://www.ipsaaperu.com/inicio/#registro-comunidad-home">Conecta con lo que viene</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="https://www.ipsaaperu.com/nosotros/">Nosotros</a>
                    <div class="submenu">
                        <a href="https://www.ipsaaperu.com/nosotros/#quienes-somos">Quiénes somos</a>
                        <a href="https://www.ipsaaperu.com/nosotros/#proposito-principios">Propósito y principios</a>
                        <a href="https://www.ipsaaperu.com/nosotros/#nuestra-historia">Nuestra historia</a>
                        <a href="https://www.ipsaaperu.com/nosotros/#el-equipo">El equipo</a>
                        <a href="https://www.ipsaaperu.com/nosotros/#transparencia">Transparencia</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="https://www.ipsaaperu.com/red-ipsaa/">Red IPSAA</a>
                    <div class="submenu">
                        <a href="https://www.ipsaaperu.com/red-ipsaa/#presentacion-red">Presentación de la Red</a>
                        <a href="https://www.ipsaaperu.com/red-ipsaa/#directorio-asociaciones">Directorio de Asociaciones</a>
                        <a href="https://www.ipsaaperu.com/red-ipsaa/#beneficios-alianzas">Beneficios de articulación</a>
                        <a href="https://www.ipsaaperu.com/red-ipsaa/#sumar-asociacion">Sumar mi Asociación</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="https://www.ipsaaperu.com/actividades/">Actividades</a>
                    <div class="submenu">
                        <a href="https://www.ipsaaperu.com/actividades/#mentoria-horizontes">Mentoría Horizontes</a>
                        <a href="https://www.ipsaaperu.com/actividades/#biblioteca-horizontes">Biblioteca Horizontes</a>
                        <a href="https://www.ipsaaperu.com/actividades/#webinars-bootcamps">Webinars y Bootcamps</a>
                        <a href="https://www.ipsaaperu.com/actividades/#peru-connect">Perú Connect 2026</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link active" href="https://www.ipsaaperu.com/recursos/">Recursos</a>
                    <div class="submenu">
                        <a href="#guias-postulacion">Guías de Postulación</a>
                        <a href="#modelos-ensayos">Modelos de Ensayos &amp; SOP</a>
                        <a href="#plantillas-cv">Plantillas de CV &amp; Cartas</a>
                        <a href="#becas-financiamiento">Becas &amp; Financiamiento</a>
                        <a href="#examenes-estandarizados">Exámenes Estandarizados</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="https://www.ipsaaperu.com/blog/">Blog</a>
                    <div class="submenu">
                        <a href="https://www.ipsaaperu.com/blog/#postales-del-camino">Postales del Camino</a>
                        <a href="https://www.ipsaaperu.com/blog/#voces-de-la-red">Voces de la Red</a>
                        <a href="https://www.ipsaaperu.com/blog/#noticias-ipsaa">Noticias IPSAA</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link nav-link--cta" href="https://www.ipsaaperu.com/se-parte/">Sé parte</a>
                    <div class="submenu">
                        <a href="https://www.ipsaaperu.com/se-parte/#modalidades">Modalidades de Participación</a>
                        <a href="https://www.ipsaaperu.com/se-parte/#beneficios">Beneficios de la Red</a>
                        <a href="https://www.ipsaaperu.com/se-parte/#formulario-registro">Formulario de Registro</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <!-- Recursos Hero Section -->
        <section class="recursos-hero">
            <div class="container">
                <div class="recursos-hero-layout">
                    <!-- Left Copy Column -->
                    <div class="recursos-hero-copy">
                        <span class="eyebrow eyebrow--light"><span class="ms" style="font-size:18px">library_books</span> Repositorio Abierto</span>
                        <h1>Recursos Académicos para <span>Impulsar tu Postulación</span></h1>
                        <p class="lead">Accede libremente a guías estructuradas, ejemplos reales de personal statements, formatos de currículum vitae y hojas de cálculo para organizar tu aplicación a maestrías y doctorados.</p>

                        <!-- Search Box -->
                        <div class="hero-search-box">
                            <span class="ms">search</span>
                            <input type="text" class="hero-search-input" id="searchResourceInput" placeholder="Ej: Personal Statement Harvard, GRE, Chevening..." onkeyup="filterResourcesBySearch()" />
                            <button class="hero-btn-search" type="button" onclick="filterResourcesBySearch()">Buscar</button>
                        </div>
                    </div>

                    <!-- Right Hero Media Box -->
                    <div class="recursos-hero-media">
                        <div class="hero-media-card">
                            <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?auto=format&fit=crop&w=1000&q=80" alt="Biblioteca Académica IPSAA" />
                        </div>
                        <div class="hero-floating-badge">
                            <div class="badge-icon-box">
                                <span class="ms" style="font-size:26px">auto_stories</span>
                            </div>
                            <div class="badge-info">
                                <strong>Biblioteca Abierta IPSAA</strong>
                                <span>100% Gratuito e Independiente</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Grid Statistics -->
                    <div class="recursos-hero-stats">
                        <div class="hero-stat-card">
                            <strong>40+</strong>
                            <span>Documentos Abiertos</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>15+</strong>
                            <span>Ejemplos de SOP</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>10K+</strong>
                            <span>Descargas Acumuladas</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>100%</strong>
                            <span>Libre de Registro</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Catalog Section -->
        <section class="recursos-section" id="catalogo-recursos">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow"><span class="ms" style="font-size:18px">grid_view</span> Explorar por Categoria</span>
                    <h2>Catálogo General de Recursos Academicos</h2>
                    <p>Filtra según el componente específico de tu proceso de postulación a universidades internacionales.</p>
                </div>

                <!-- Filter Bar -->
                <div class="recursos-filter-bar">
                    <button class="recursos-filter-btn active" onclick="filterRecursos('todos', this)"><span class="ms">apps</span> Todos</button>
                    <button class="recursos-filter-btn" id="btn-guias" onclick="filterRecursos('guias', this)"><span class="ms">menu_book</span> Guías de Postulación</button>
                    <button class="recursos-filter-btn" id="btn-ensayos" onclick="filterRecursos('ensayos', this)"><span class="ms">description</span> Ensayos &amp; SOP</button>
                    <button class="recursos-filter-btn" id="btn-plantillas" onclick="filterRecursos('plantillas', this)"><span class="ms">badge</span> CV &amp; Cartas</button>
                    <button class="recursos-filter-btn" id="btn-becas" onclick="filterRecursos('becas', this)"><span class="ms">payments</span> Becas &amp; Financiamiento</button>
                    <button class="recursos-filter-btn" id="btn-examenes" onclick="filterRecursos('examenes', this)"><span class="ms">quiz</span> Exámenes Estandarizados</button>
                </div>

                <!-- Resources Grid -->
                <div class="recursos-catalog-grid">
                    <!-- Resource 1 -->
                    <article class="recurso-card-item" data-category="guias" id="guias-postulacion">
                        <div class="recurso-card-image">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80" alt="Guía de Postulación a Posgrado" />
                            <span class="recurso-format-badge"><span class="ms" style="font-size:16px">picture_as_pdf</span> PDF · 18 Págs</span>
                        </div>
                        <div class="recurso-card-body">
                            <span class="recurso-card-category">Guías de Postulación</span>
                            <h3>Manual Integral para Postular a Maestrías en EE.UU. y Europa</h3>
                            <p class="recurso-card-desc">Paso a paso cronológico de 12 meses para preparar una aplicación competitiva: desde la selección de programas hasta el envío de dossier.</p>
                            <div class="recurso-card-footer">
                                <span class="recurso-downloads-count"><span class="ms">download</span> 2,450 descargas</span>
                                <a href="#" onclick="alert('Descargando Manual Integral...'); return false;" class="btn-action-recurso">Descargar PDF</a>
                            </div>
                        </div>
                    </article>

                    <!-- Resource 2 -->
                    <article class="recurso-card-item" data-category="ensayos" id="modelos-ensayos">
                        <div class="recurso-card-image">
                            <img src="https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=800&q=80" alt="Modelos de Ensayos y SOP" />
                            <span class="recurso-format-badge"><span class="ms" style="font-size:16px">article</span> DOCX / PDF</span>
                        </div>
                        <div class="recurso-card-body">
                            <span class="recurso-card-category">Modelos de Ensayos &amp; SOP</span>
                            <h3>Compendio de Personal Statements Exitosos (Harvard, Oxford, MIT)</h3>
                            <p class="recurso-card-desc">Colección de 5 ensayos reales de mentees IPSAA admitidos con beca completa, comentados y anotados por la red de mentores.</p>
                            <div class="recurso-card-footer">
                                <span class="recurso-downloads-count"><span class="ms">download</span> 3,890 descargas</span>
                                <a href="#" onclick="alert('Descargando Compendio de Ensayos...'); return false;" class="btn-action-recurso">Descargar Pack</a>
                            </div>
                        </div>
                    </article>

                    <!-- Resource 3 -->
                    <article class="recurso-card-item" data-category="plantillas" id="plantillas-cv">
                        <div class="recurso-card-image">
                            <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?auto=format&fit=crop&w=800&q=80" alt="Plantillas de CV Académico" />
                            <span class="recurso-format-badge"><span class="ms" style="font-size:16px">file_present</span> DOCX Editables</span>
                        </div>
                        <div class="recurso-card-body">
                            <span class="recurso-card-category">Plantillas de CV &amp; Cartas</span>
                            <h3>Formatos de Curriculum Vitae Académico (Estándar Harvard / Oxford)</h3>
                            <p class="recurso-card-desc">Plantillas limpias en Word optimizadas para ATS y comités de admisión académicos, sin elementos gráficos innecesarios.</p>
                            <div class="recurso-card-footer">
                                <span class="recurso-downloads-count"><span class="ms">download</span> 1,980 descargas</span>
                                <a href="#" onclick="alert('Descargando Plantillas de CV...'); return false;" class="btn-action-recurso">Descargar Word</a>
                            </div>
                        </div>
                    </article>

                    <!-- Resource 4 -->
                    <article class="recurso-card-item" data-category="becas" id="becas-financiamiento">
                        <div class="recurso-card-image">
                            <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=800&q=80" alt="Matriz de Becas y Financiamiento" />
                            <span class="recurso-format-badge"><span class="ms" style="font-size:16px">table_chart</span> Excel Tracker</span>
                        </div>
                        <div class="recurso-card-body">
                            <span class="recurso-card-category">Becas &amp; Financiamiento</span>
                            <h3>Matriz Consolidada de Becas Internacionales para Peruanos</h3>
                            <p class="recurso-card-desc">Hoja de cálculo interactiva con requisitos, coberturas, restricciones y calendarios de Chevening, Fulbright, Pronabec y Becas OEA.</p>
                            <div class="recurso-card-footer">
                                <span class="recurso-downloads-count"><span class="ms">download</span> 4,120 descargas</span>
                                <a href="#" onclick="alert('Descargando Matriz Excel de Becas...'); return false;" class="btn-action-recurso">Descargar Excel</a>
                            </div>
                        </div>
                    </article>

                    <!-- Resource 5 -->
                    <article class="recurso-card-item" data-category="examenes" id="examenes-estandarizados">
                        <div class="recurso-card-image">
                            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80" alt="Exámenes Estandarizados GRE y TOEFL" />
                            <span class="recurso-format-badge"><span class="ms" style="font-size:16px">folder_zip</span> Pack PDF &amp; Links</span>
                        </div>
                        <div class="recurso-card-body">
                            <span class="recurso-card-category">Exámenes Estandarizados</span>
                            <h3>Kit Autodidacta para GRE General Test y TOEFL / IELTS</h3>
                            <p class="recurso-card-desc">Lista curada de plataformas de práctica simulada gratuita, listas de vocabulario de alta frecuencia y estrategias para la sección cuantitativa.</p>
                            <div class="recurso-card-footer">
                                <span class="recurso-downloads-count"><span class="ms">download</span> 1,650 descargas</span>
                                <a href="#" onclick="alert('Accediendo al Kit GRE / TOEFL...'); return false;" class="btn-action-recurso">Abrir Kit</a>
                            </div>
                        </div>
                    </article>

                    <!-- Resource 6 -->
                    <article class="recurso-card-item" data-category="plantillas">
                        <div class="recurso-card-image">
                            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80" alt="Cartas de Recomendación Guía" />
                            <span class="recurso-format-badge"><span class="ms" style="font-size:16px">mail_lock</span> Guía &amp; Plantilla</span>
                        </div>
                        <div class="recurso-card-body">
                            <span class="recurso-card-category">Plantillas de CV &amp; Cartas</span>
                            <h3>Guía de Orientación para Recomendadores Académicos</h3>
                            <p class="recurso-card-desc">Borrador y lista de cotejo útil para entregar a tus profesores o jefes recomendadores para facilitar la redacción de sus cartas.</p>
                            <div class="recurso-card-footer">
                                <span class="recurso-downloads-count"><span class="ms">download</span> 1,340 descargas</span>
                                <a href="#" onclick="alert('Descargando Guía para Recomendadores...'); return false;" class="btn-action-recurso">Descargar PDF</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Section FAQ & Solicitar Recurso -->
        <section class="recursos-section recursos-section--alt">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow"><span class="ms" style="font-size:18px">help_outline</span> Consultas Frecuentes</span>
                    <h2>Preguntas sobre los Recursos Abiertos</h2>
                    <p>Información clave sobre los derechos de uso y aportes al repositorio de la Red IPSAA.</p>
                </div>

                <div class="recursos-faq-grid">
                    <div class="faq-box">
                        <div class="faq-item">
                            <h4><span class="ms">lock_open</span> ¿Los recursos son completamente gratuitos?</h4>
                            <p>Sí, el 100% de las guías, plantillas y compilaciones alojadas en el repositorio IPSAA son de acceso libre y gratuito para toda la comunidad.</p>
                        </div>
                        <div class="faq-item">
                            <h4><span class="ms">security</span> ¿Cómo protegen la privacidad de los ensayos compartidos?</h4>
                            <p>Todos los modelos de personal statements presentados han sido previamente anonimizados con la autorización explícita de sus autores/as.</p>
                        </div>
                        <div class="faq-item">
                            <h4><span class="ms">cloud_upload</span> ¿Puedo donar mis documentos de postulación?</h4>
                            <p>¡Por supuesto! Si fuiste admitido/a a un posgrado internacional y deseas ayudar a futuras generaciones, puedes enviar tus documentos anonimizados.</p>
                        </div>
                    </div>

                    <div class="faq-box" style="background: var(--navy-ipsaa); color: var(--white);">
                        <h3 style="color: var(--beige-calido); margin-bottom: 16px; font-size: 1.4rem;"><span class="ms">add_circle</span> ¿Necesitas una plantilla o guía específica?</h3>
                        <p style="color: rgba(255,255,255,0.85); font-size: 0.95rem; margin-bottom: 24px;">Si no encuentras el recurso que buscas para tu área o beca de interés, escríbenos para sugerir su elaboración a nuestro equipo de mentores.</p>

                        <a href="https://www.ipsaaperu.com/se-parte/" class="btn-action-recurso" style="background: var(--beige-calido); color: var(--navy-ipsaa); padding: 12px 28px; font-weight: 700; width: 100%; justify-content: center;">
                            Solicitar nuevo recurso a IPSAA <span class="ms">send</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Site Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <img src="https://www.ipsaaperu.com/wp-content/uploads/2026/10/Logo-3_sinfondo.png" alt="IPSAA Logo" class="footer-logo-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" />
                    <div class="brand-text" style="display:none; color:var(--white);">IPSAA<span style="color:var(--red-ipsaa)">.</span></div>
                    <p style="margin-top:12px">© 2026 International Peruvian Students &amp; Alumni Association (IPSAA). Todos los derechos reservados.</p>
                </div>
                <div class="footer-col">
                    <h4>Navegación</h4>
                    <a href="https://www.ipsaaperu.com/inicio/">Inicio</a>
                    <a href="https://www.ipsaaperu.com/nosotros/">Nosotros</a>
                    <a href="https://www.ipsaaperu.com/red-ipsaa/">Red IPSAA</a>
                    <a href="https://www.ipsaaperu.com/actividades/">Actividades</a>
                    <a href="https://www.ipsaaperu.com/recursos/">Recursos</a>
                </div>
                <div class="footer-col">
                    <h4>Comunidad</h4>
                    <a href="https://www.ipsaaperu.com/blog/">Blog</a>
                    <a href="#guias-postulacion">Guías PDF</a>
                    <a href="#modelos-ensayos">SOP Ejemplos</a>
                    <a href="https://www.ipsaaperu.com/se-parte/">Sé parte</a>
                </div>
                <div class="footer-col">
                    <h4>Iniciativas</h4>
                    <a href="#plantillas-cv">Plantillas de CV</a>
                    <a href="#becas-financiamiento">Matriz de Becas</a>
                    <a href="#examenes-estandarizados">Kit GRE / TOEFL</a>
                </div>
                <div class="footer-col">
                    <h4>Contacto</h4>
                    <a href="https://www.ipsaaperu.com/se-parte/">Escríbenos</a>
                    <a href="mailto:ipsaa.peru@gmail.com">ipsaa.peru@gmail.com</a>
                </div>
                <div class="footer-col">
                    <h4>Síguenos</h4>
                    <div class="footer-socials">
                        <a class="footer-social-link footer-social-link--linkedin" href="https://www.linkedin.com/company/ipsaa-peru/" target="_blank" rel="noopener noreferrer" title="LinkedIn IPSAA" aria-label="IPSAA en LinkedIn">
                            <svg viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                        </a>
                        <a class="footer-social-link footer-social-link--instagram" href="https://www.instagram.com/ipsaa.peru/" target="_blank" rel="noopener noreferrer" title="Instagram IPSAA" aria-label="IPSAA en Instagram">
                            <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a class="footer-social-link footer-social-link--facebook" href="https://www.facebook.com/profile.php?id=61575592629967" target="_blank" rel="noopener noreferrer" title="Facebook IPSAA" aria-label="IPSAA en Facebook">
                            <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Filter & Search Script -->
    <script>
        function filterRecursos(category, btnEl) {
            const cards = document.querySelectorAll('.recurso-card-item');
            const buttons = document.querySelectorAll('.recursos-filter-btn');

            buttons.forEach(btn => btn.classList.remove('active'));
            if (btnEl) btnEl.classList.add('active');

            cards.forEach(card => {
                if (category === 'todos' || card.getAttribute('data-category') === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function filterResourcesBySearch() {
            const query = document.getElementById('searchResourceInput').value.toLowerCase().trim();
            const cards = document.querySelectorAll('.recurso-card-item');

            cards.forEach(card => {
                const text = card.textContent.toLowerCase();
                if (query === '' || text.includes(query)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>

    <?php if (function_exists('wp_footer')) wp_footer(); ?>
</body>
</html>
