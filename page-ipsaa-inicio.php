<?php
/*
 Template Name: IPSAA Inicio
 Description: Página de Inicio institucional para IPSAA (International Peruvian Students & Alumni Association) con carrusel de noticias, presentación institucional, novedades, historias destacadas y suscripción.
*/
?>
<!DOCTYPE html>
<html <?php if (function_exists('language_attributes')) language_attributes(); else echo 'lang="es"'; ?>>
<head>
    <meta charset="<?php if (function_exists('bloginfo')) bloginfo('charset'); else echo 'UTF-8'; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPSAA - International Peruvian Students &amp; Alumni Association</title>
    <meta name="description" content="IPSAA: red global de estudiantes y egresados peruanos en universidades líderes del mundo." />

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
            --beige-soft: #f2d9bf;
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
            display: inline-block;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: var(--red-ipsaa);
            margin-bottom: 12px;
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

        .brand-text {
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--navy-ipsaa);
            letter-spacing: -0.5px;
        }

        .brand-text span {
            color: var(--red-ipsaa);
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

        .nav-link:hover {
            color: var(--red-ipsaa);
            background: rgba(217, 37, 42, 0.06);
        }

        .nav-link--cta {
            background: var(--red-ipsaa);
            color: var(--white) !important;
            padding: 10px 22px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 4px 14px rgba(217, 37, 42, 0.28);
        }

        .nav-link--cta:hover {
            background: var(--red-dark);
            box-shadow: 0 6px 18px rgba(217, 37, 42, 0.38);
            transform: translateY(-1px);
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

        .nav-toggle {
            display: none;
            color: var(--navy-ipsaa);
            font-size: 28px;
        }

        /* Enhanced Hero Carousel Section */
        .hero--editorial {
            position: relative;
            background-color: var(--navy-ipsaa);
            color: var(--white);
            overflow: hidden;
            min-height: 600px;
        }

        .home-news-carousel {
            position: relative;
            width: 100%;
            min-height: 600px;
        }

        .hero-carousel-content {
            position: relative;
            width: 100%;
            height: 600px;
        }

        .hero-message {
            position: absolute;
            inset: 0;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            padding: 0 8% 80px;
            z-index: 1;
        }

        .hero-slide-bg {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            transform: scale(1.08);
            transition: transform 6s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .hero-message.active .hero-slide-bg {
            transform: scale(1);
        }

        .hero-message::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(11, 25, 44, 0.94) 0%, rgba(11, 25, 44, 0.78) 55%, rgba(11, 25, 44, 0.42) 100%);
            z-index: 1;
        }

        .hero-slide-card {
            position: relative;
            z-index: 2;
            max-width: 760px;
            transform: translateY(28px);
            opacity: 0;
            transition: all 0.7s cubic-bezier(0.2, 0.8, 0.2, 1) 0.15s;
        }

        .hero-message.active {
            opacity: 1;
            visibility: visible;
            z-index: 2;
        }

        .hero-message.active .hero-slide-card {
            transform: translateY(0);
            opacity: 1;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--red-ipsaa);
            color: var(--white);
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin-bottom: 20px;
            box-shadow: 0 4px 14px rgba(217, 37, 42, 0.35);
        }

        .hero-message h2 {
            font-size: clamp(2.2rem, 4.2vw, 3.4rem);
            font-weight: 800;
            line-height: 1.18;
            margin-bottom: 18px;
            color: var(--white);
            letter-spacing: -0.5px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero-message p.lead {
            font-size: clamp(1.05rem, 1.8vw, 1.22rem);
            color: rgba(255, 255, 255, 0.92);
            margin-bottom: 32px;
            font-weight: 400;
            line-height: 1.6;
            max-width: 660px;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .link-cta {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--red-ipsaa);
            color: var(--white);
            font-weight: 600;
            padding: 14px 30px;
            border-radius: 50px;
            font-size: 0.95rem;
            transition: var(--transition);
            box-shadow: 0 6px 20px rgba(217, 37, 42, 0.4);
            cursor: pointer;
        }

        .link-cta:hover {
            background: var(--red-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(217, 37, 42, 0.5);
        }

        .link-cta--secondary {
            background: rgba(255, 255, 255, 0.12);
            color: var(--white);
            border: 1px solid rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(10px);
            box-shadow: none;
        }

        .link-cta--secondary:hover {
            background: var(--white);
            color: var(--navy-ipsaa);
        }

        /* Modern Slider Arrow Buttons */
        .hero-carousel-arrow {
            position: absolute;
            top: 45%;
            transform: translateY(-50%);
            z-index: 10;
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: rgba(11, 25, 44, 0.55);
            backdrop-filter: blur(12px);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.25);
            cursor: pointer;
        }

        .hero-carousel-arrow:hover {
            background: var(--red-ipsaa);
            border-color: var(--red-ipsaa);
            transform: translateY(-50%) scale(1.08);
        }

        .hero-carousel-arrow--prev {
            left: 28px;
        }

        .hero-carousel-arrow--next {
            right: 28px;
        }

        /* Slider Bottom Control Bar with Preview Tabs & Progress Indicator */
        .hero-carousel-bottom-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 10;
            background: linear-gradient(180deg, rgba(11, 25, 44, 0) 0%, rgba(11, 25, 44, 0.9) 100%);
            padding: 16px 8%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .hero-carousel-previews {
            display: flex;
            align-items: center;
            gap: 12px;
            flex: 1;
            max-width: 960px;
        }

        .hero-preview-tab {
            flex: 1;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: var(--radius-sm);
            padding: 10px 14px;
            text-align: left;
            color: rgba(255, 255, 255, 0.7);
            transition: var(--transition);
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .hero-preview-tab:hover {
            background: rgba(255, 255, 255, 0.2);
            color: var(--white);
        }

        .hero-preview-tab.active {
            background: rgba(255, 255, 255, 0.22);
            border-color: var(--red-ipsaa);
            color: var(--white);
        }

        .hero-preview-num {
            font-size: 0.72rem;
            font-weight: 700;
            color: var(--beige-calido);
            margin-bottom: 2px;
            display: block;
        }

        .hero-preview-tab.active .hero-preview-num {
            color: #ffffff;
        }

        .hero-preview-title {
            font-size: 0.82rem;
            font-weight: 600;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: block;
        }

        .hero-progress-line {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            background: var(--red-ipsaa);
            width: 0%;
            transition: width 0.1s linear;
        }

        .hero-preview-tab.active .hero-progress-line {
            width: 100%;
        }

        .hero-counter {
            font-size: 0.88rem;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.85);
            letter-spacing: 1px;
            white-space: nowrap;
        }

        /* Purpose Section (Presentación Institucional) */
        .purpose-feature {
            padding: 90px 0;
            background: var(--white);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .purpose-layout {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .purpose-heading {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-bottom: 24px;
        }

        .purpose-logo-img {
            height: 80px;
            width: auto;
            max-width: 350px;
            object-fit: contain;
            align-self: flex-start;
            transition: var(--transition);
        }

        .purpose-logo-img:hover {
            transform: scale(1.03);
        }

        .purpose-heading-text h2 {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--navy-ipsaa);
            line-height: 1.25;
            letter-spacing: -0.5px;
        }

        .purpose-copy p {
            font-size: 1.1rem;
            color: var(--text-dark);
            line-height: 1.8;
            margin-bottom: 24px;
        }

        .purpose-media {
            height: 400px;
            border-radius: var(--radius-lg);
            background: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat;
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
        }

        .purpose-media::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: var(--radius-lg);
            border: 2px solid rgba(217, 37, 42, 0.15);
            pointer-events: none;
        }

        /* Section Global Styling */
        .section {
            padding: 85px 0;
        }

        .section--beige {
            background-color: var(--beige-calido);
        }

        .section-head {
            margin-bottom: 48px;
        }

        .section-head.center {
            text-align: center;
            max-width: 720px;
            margin-left: auto;
            margin-right: auto;
        }

        .section-head h2 {
            font-size: 2.3rem;
            font-weight: 800;
            color: var(--navy-ipsaa);
            margin-bottom: 12px;
            letter-spacing: -0.5px;
        }

        .section-head p.lead {
            font-size: 1.1rem;
            color: var(--text-muted);
        }

        /* Route Cards ("Elige tu camino") */
        .route-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
        }

        .route-card {
            position: relative;
            background: var(--white);
            padding: 36px 28px;
            border-radius: var(--radius-md);
            border: 1px solid rgba(11, 25, 44, 0.08);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
            cursor: pointer;
        }

        .route-card::before {
            content: attr(data-route);
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 0.78rem;
            font-weight: 700;
            color: var(--text-muted);
            letter-spacing: 0.5px;
        }

        .route-card .ms {
            font-size: 42px;
            color: var(--red-ipsaa);
            margin-bottom: 24px;
        }

        .route-card h3 {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--navy-ipsaa);
            margin-bottom: 12px;
        }

        .route-card p {
            font-size: 0.95rem;
            color: var(--text-muted);
            line-height: 1.5;
        }

        .route-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
            border-color: rgba(217, 37, 42, 0.35);
        }

        .route-card--dark {
            background: var(--navy-ipsaa);
            color: var(--white);
            border: none;
        }

        .route-card--dark h3 {
            color: var(--white);
        }

        .route-card--dark p {
            color: rgba(255, 255, 255, 0.75);
        }

        .route-card--dark .ms {
            color: var(--beige-calido);
        }

        .route-card--dark::before {
            color: rgba(255, 255, 255, 0.4);
        }

        /* News Grid (Novedades) */
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 28px;
        }

        .news-card {
            height: 430px;
            border-radius: var(--radius-md);
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            display: flex;
            align-items: flex-end;
        }

        .news-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(11,25,44,0.1) 0%, rgba(11,25,44,0.85) 70%, rgba(11,25,44,0.96) 100%);
            transition: var(--transition);
        }

        .news-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
        }

        .news-card:hover::before {
            background: linear-gradient(180deg, rgba(11,25,44,0.2) 0%, rgba(11,25,44,0.92) 65%, rgba(11,25,44,0.98) 100%);
        }

        .news-card-content {
            position: relative;
            z-index: 2;
            padding: 32px;
            color: var(--white);
        }

        .pill {
            display: inline-block;
            background: var(--red-ipsaa);
            color: var(--white);
            padding: 4px 14px;
            border-radius: 50px;
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 14px;
        }

        .news-card-content h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .news-card-content p {
            font-size: 0.92rem;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .news-card-content .link-cta {
            background: rgba(255, 255, 255, 0.15);
            color: var(--white);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            font-size: 0.88rem;
            padding: 8px 18px;
            cursor: pointer;
            box-shadow: none;
        }

        .news-card-content .link-cta:hover {
            background: var(--white);
            color: var(--navy-ipsaa);
        }

        /* Voces de la Red (Historias Destacadas) */
        .voice-home-wrap {
            background: var(--navy-ipsaa);
            color: var(--white);
        }

        .voice-home-wrap .section-head h2 {
            color: var(--white);
        }

        .voice-home-wrap .section-head p {
            color: rgba(255,255,255,0.75);
        }

        .voice-home-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
        }

        .voice-home-card {
            position: relative;
            height: 350px;
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            cursor: pointer;
            transition: var(--transition);
        }

        .voice-home-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .voice-home-card .play {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: rgba(217, 37, 42, 0.9);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 3;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            transition: var(--transition);
        }

        .voice-home-card:hover img {
            transform: scale(1.08);
        }

        .voice-home-card:hover .play {
            transform: scale(1.15);
            background: var(--red-ipsaa);
        }

        .voice-home-card .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(11,25,44,0.1) 0%, rgba(11,25,44,0.92) 80%);
            padding: 24px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            z-index: 2;
        }

        .voice-home-card .overlay strong {
            font-size: 1.15rem;
            color: var(--white);
            font-weight: 600;
            margin-bottom: 6px;
            line-height: 1.3;
        }

        .voice-home-card .overlay span {
            font-size: 0.85rem;
            color: var(--beige-calido);
            font-weight: 500;
            opacity: 0.9;
        }

        /* La Red IPSAA Counter Section */
        .network-home-section {
            background: var(--white);
            border-bottom: 1px solid rgba(0,0,0,0.06);
        }

        .network-home-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .network-home-number {
            display: flex;
            align-items: baseline;
            gap: 20px;
            margin: 24px 0;
            background: var(--beige-calido);
            padding: 24px 32px;
            border-radius: var(--radius-md);
            border-left: 5px solid var(--red-ipsaa);
        }

        .network-home-number strong {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--red-ipsaa);
            line-height: 1;
        }

        .network-home-number span {
            font-size: 1.05rem;
            font-weight: 600;
            color: var(--navy-ipsaa);
        }

        .map-mock {
            height: 380px;
            border-radius: var(--radius-lg);
            background: url('https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat;
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
        }

        .map-mock::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(11, 25, 44, 0.4);
            border-radius: var(--radius-lg);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: var(--transition);
            cursor: pointer;
        }

        .btn-primary {
            background: var(--red-ipsaa);
            color: var(--white);
            box-shadow: 0 4px 14px rgba(217, 37, 42, 0.3);
        }

        .btn-primary:hover {
            background: var(--red-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(217, 37, 42, 0.4);
        }

        .btn-tertiary {
            background: var(--navy-ipsaa);
            color: var(--white);
        }

        .btn-tertiary:hover {
            background: var(--navy-light);
            transform: translateY(-2px);
        }

        /* Community Newsletter Invitation */
        .community-invite {
            background: linear-gradient(135deg, var(--navy-ipsaa) 0%, var(--navy-light) 100%);
            color: var(--white);
        }

        .newsletter-layout {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 60px;
            align-items: center;
        }

        .newsletter-copy h2 {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--white);
            margin-top: 8px;
            margin-bottom: 16px;
        }

        .newsletter-copy p.lead {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.82);
        }

        .newsletter-form {
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(12px);
            padding: 36px;
            border-radius: var(--radius-lg);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        .newsletter-field {
            margin-bottom: 20px;
        }

        .newsletter-field label {
            display: block;
            font-size: 0.88rem;
            font-weight: 500;
            margin-bottom: 8px;
            color: rgba(255, 255, 255, 0.9);
        }

        .newsletter-field input {
            width: 100%;
            padding: 14px 18px;
            border-radius: var(--radius-sm);
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.08);
            color: var(--white);
            font-family: var(--font-main);
            font-size: 0.95rem;
            outline: none;
            transition: var(--transition);
        }

        .newsletter-field input:focus {
            border-color: var(--red-ipsaa);
            background: rgba(255, 255, 255, 0.15);
        }

        .newsletter-field input::placeholder {
            color: rgba(255, 255, 255, 0.45);
        }

        .newsletter-form .btn-tertiary {
            width: 100%;
            background: var(--red-ipsaa);
            color: var(--white);
            margin-top: 10px;
            font-size: 1.05rem;
        }

        .newsletter-form .btn-tertiary:hover {
            background: var(--red-dark);
        }

        .newsletter-note {
            font-size: 0.78rem;
            color: rgba(255, 255, 255, 0.55);
            margin-top: 16px;
            text-align: center;
        }

        .newsletter-success {
            display: none;
            margin-top: 16px;
            padding: 12px;
            background: rgba(34, 197, 94, 0.2);
            border: 1px solid rgba(34, 197, 94, 0.4);
            border-radius: var(--radius-sm);
            color: #4ADE80;
            font-size: 0.9rem;
            text-align: center;
            font-weight: 500;
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

            .submenu {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                border: none;
                padding: 0 0 0 16px;
                display: none;
            }

            .nav-item:hover .submenu {
                display: block;
            }

            .purpose-layout,
            .network-home-layout,
            .newsletter-layout {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }

            .hero-message {
                padding: 0 6% 120px;
            }

            .hero-carousel-previews {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .hero-message {
                padding: 0 20px 100px;
            }

            .hero-carousel-arrow {
                display: none;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body <?php if (function_exists('body_class')) body_class(); ?>>

    <!-- Header Navigation -->
    <header class="site-header">
        <div class="nav-wrap">
            <a class="brand" href="<?php echo function_exists('home_url') ? esc_url(home_url('/')) : '#'; ?>" title="IPSAA Inicio">
                <img src="http://localhost/IPSAA%20CUSCO/wp-content/uploads/2026/10/Logo-3_sinfondo.png" alt="IPSAA Logo" class="header-logo-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" />
                <div class="brand-text" style="display:none;">IPSAA<span>.</span></div>
            </a>
            <button class="nav-toggle" aria-label="Menú" onclick="document.getElementById('nav').classList.toggle('open')">
                <span class="ms">menu</span>
            </button>
            <nav class="nav" id="nav">
                <div class="nav-item">
                    <a class="nav-link" href="http://localhost/IPSAA%20CUSCO/">Inicio</a>
                    <div class="submenu">
                        <a href="#que-es">Presentación</a>
                        <a href="#hoja-ruta">Elige tu camino</a>
                        <a href="#ultimas-novedades">Últimas novedades</a>
                        <a href="#voces-home">Historias destacadas</a>
                        <a href="#red-ipsaa-home">La Red IPSAA</a>
                        <a href="#registro-comunidad-home">Conecta con lo que viene</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="http://localhost/IPSAA%20CUSCO/?page_id=8">Nosotros</a>
                    <div class="submenu">
                        <a href="#que-es">Quiénes somos</a>
                        <a href="#que-es">Propósito y principios</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="http://localhost/IPSAA%20CUSCO/?page_id=10">Red IPSAA</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="http://localhost/IPSAA%20CUSCO/?page_id=12">Actividades</a>
                    <div class="submenu">
                        <a href="#ultimas-novedades">Mentoría Horizontes</a>
                        <a href="#ultimas-novedades">Webinars y Bootcamps</a>
                        <a href="#ultimas-novedades">Perú Connect 2026</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="http://localhost/IPSAA%20CUSCO/?page_id=14">Recursos</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="http://localhost/IPSAA%20CUSCO/?page_id=16">Blog</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link nav-link--cta" href="http://localhost/IPSAA%20CUSCO/?page_id=18">Sé parte</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero Section: Enhanced Carrusel de Noticias IPSAA -->
        <section class="page" id="inicio">
            <div class="hero hero--home hero--editorial">
                <div class="home-news-carousel" id="heroCarouselContainer">
                    <div class="hero-carousel-content">
                        <!-- Slide 1 -->
                        <article class="hero-message active">
                            <div class="hero-slide-bg" style="background-image:url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=80');"></div>
                            <div class="hero-slide-card">
                                <span class="hero-eyebrow"><span class="ms" style="font-size:18px">campaign</span> Noticias IPSAA</span>
                                <h2>Un webinar fue el punto de partida</h2>
                                <p class="lead">Conoce cómo la unión de asociaciones peruanas en el extranjero abrió el camino para construir una red global de impacto y colaboración.</p>
                                <div class="hero-actions">
                                    <button class="link-cta" type="button">Leer nota completa <span class="ms">arrow_forward</span></button>
                                    <a href="#que-es" class="link-cta link-cta--secondary">Conoce nuestro propósito</a>
                                </div>
                            </div>
                        </article>

                        <!-- Slide 2 -->
                        <article class="hero-message">
                            <div class="hero-slide-bg" style="background-image:url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1600&q=80');"></div>
                            <div class="hero-slide-card">
                                <span class="hero-eyebrow"><span class="ms" style="font-size:18px">school</span> Mentoría Horizontes</span>
                                <h2>Programa Horizontes: Convocatoria Abierta</h2>
                                <p class="lead">Conectamos a profesionales peruanos que postulan a maestría con mentores estudiantes y egresados en universidades top del mundo.</p>
                                <div class="hero-actions">
                                    <button class="link-cta" type="button">Postula como Menteé <span class="ms">arrow_forward</span></button>
                                    <a href="#ultimas-novedades" class="link-cta link-cta--secondary">Ver bases</a>
                                </div>
                            </div>
                        </article>

                        <!-- Slide 3 -->
                        <article class="hero-message">
                            <div class="hero-slide-bg" style="background-image:url('https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1600&q=80');"></div>
                            <div class="hero-slide-card">
                                <span class="hero-eyebrow"><span class="ms" style="font-size:18px">groups</span> Perú Connect 2026</span>
                                <h2>Perú Connect: Encuentro Presencial en Lima</h2>
                                <p class="lead">Reuniendo el talento peruano global para intercambiar ideas, activar alianzas estratégicas y reconectar la innovación con el Perú.</p>
                                <div class="hero-actions">
                                    <button class="link-cta" type="button">Reservar mi cupo <span class="ms">arrow_forward</span></button>
                                    <a href="#red-ipsaa-home" class="link-cta link-cta--secondary">Explora la Red</a>
                                </div>
                            </div>
                        </article>

                        <!-- Slide 4 -->
                        <article class="hero-message">
                            <div class="hero-slide-bg" style="background-image:url('https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=1600&q=80');"></div>
                            <div class="hero-slide-card">
                                <span class="hero-eyebrow"><span class="ms" style="font-size:18px">public</span> Impacto Global</span>
                                <h2>Impulsando el Talento e Investigación Peruana</h2>
                                <p class="lead">Generamos puentes de conocimiento entre las mejores academias internacionales y las necesidades de desarrollo sostenible de nuestro país.</p>
                                <div class="hero-actions">
                                    <a href="#registro-comunidad-home" class="link-cta">Sumarte a la comunidad <span class="ms">arrow_forward</span></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Carousel Arrow Controls -->
                    <button class="hero-carousel-arrow hero-carousel-arrow--prev" aria-label="Noticia anterior" onclick="changeHeroSlide(-1)" type="button">
                        <span class="ms">chevron_left</span>
                    </button>
                    <button class="hero-carousel-arrow hero-carousel-arrow--next" aria-label="Noticia siguiente" onclick="changeHeroSlide(1)" type="button">
                        <span class="ms">chevron_right</span>
                    </button>

                    <!-- Bottom Control Bar with Preview Tabs & Counter -->
                    <div class="hero-carousel-bottom-bar">
                        <div class="hero-carousel-previews" aria-label="Seleccionar noticia del carrusel">
                            <button class="hero-preview-tab active" onclick="setHeroSlide(0)" type="button">
                                <span class="hero-preview-num">01 · NOTICIA</span>
                                <span class="hero-preview-title">Un webinar fue el punto de partida</span>
                                <div class="hero-progress-line" id="progressLine0"></div>
                            </button>
                            <button class="hero-preview-tab" onclick="setHeroSlide(1)" type="button">
                                <span class="hero-preview-num">02 · MENTORÍA</span>
                                <span class="hero-preview-title">Programa Horizontes Convocatoria</span>
                                <div class="hero-progress-line" id="progressLine1"></div>
                            </button>
                            <button class="hero-preview-tab" onclick="setHeroSlide(2)" type="button">
                                <span class="hero-preview-num">03 · ENCUENTRO</span>
                                <span class="hero-preview-title">Perú Connect 2026 Lima</span>
                                <div class="hero-progress-line" id="progressLine2"></div>
                            </button>
                            <button class="hero-preview-tab" onclick="setHeroSlide(3)" type="button">
                                <span class="hero-preview-num">04 · IMPACTO</span>
                                <span class="hero-preview-title">Investigación y Talento Peruano</span>
                                <div class="hero-progress-line" id="progressLine3"></div>
                            </button>
                        </div>
                        <div class="hero-counter" id="heroCounter">01 / 04</div>
                    </div>
                </div>
            </div>

            <!-- Presentación Institucional -->
            <div class="purpose-feature" id="que-es">
                <div class="container purpose-layout">
                    <div class="purpose-copy">
                        <div class="purpose-heading">
                            <img src="http://localhost/IPSAA%20CUSCO/wp-content/uploads/2026/10/Logo-3_sinfondo.png" alt="IPSAA Logo" class="purpose-logo-img" onerror="this.style.display='none';" />
                            <div class="purpose-heading-text">
                                <span class="eyebrow">Nuestro propósito</span>
                                <h2>El talento peruano puede abrir caminos y transformar el país</h2>
                            </div>
                        </div>
                        <p>Promovemos un <strong>ecosistema de aprendizaje y colaboración</strong> que conecta a postulantes, estudiantes y egresados de universidades líderes del mundo. Ampliamos el acceso a oportunidades internacionales y movilizamos el conocimiento adquirido hacia proyectos que impulsen el desarrollo del Perú.</p>
                        <a href="#registro-comunidad-home" class="btn btn-primary">Sumarte a la Red <span class="ms">arrow_forward</span></a>
                    </div>
                    <div class="purpose-media" role="img" aria-label="Comunidad IPSAA trabajando colaborativamente"></div>
                </div>
            </div>

            <!-- Elige tu camino -->
            <div class="section" id="hoja-ruta">
                <div class="container">
                    <div class="section-head center">
                        <span class="eyebrow">Encuentra lo que necesitas</span>
                        <h2>Elige tu camino</h2>
                    </div>
                    <div class="route-grid">
                        <a class="route-card" data-route="01 · Antes" href="#hoja-ruta">
                            <span class="ms" aria-hidden="true">person_search</span>
                            <h3>Quiero postular</h3>
                            <p>Encuentra orientación sobre aplicaciones, requisitos y financiamiento.</p>
                        </a>
                        <a class="route-card" data-route="02 · Durante" href="#hoja-ruta">
                            <span class="ms" aria-hidden="true">school</span>
                            <h3>Estoy estudiando</h3>
                            <p>Conecta con redes, actividades y oportunidades durante tu experiencia en el extranjero.</p>
                        </a>
                        <a class="route-card" data-route="03 · Después" href="#hoja-ruta">
                            <span class="ms" aria-hidden="true">work</span>
                            <h3>Ya egresé</h3>
                            <p>Fortalece tu red profesional y descubre nuevas formas de reconectar con el Perú.</p>
                        </a>
                        <a class="route-card route-card--dark" data-route="04 · Comunidad" href="#registro-comunidad-home">
                            <span class="ms" aria-hidden="true">volunteer_activism</span>
                            <h3>Quiero sumarme</h3>
                            <p>Participa en la comunidad como asociación, voluntario/a, aliado o donante.</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Últimas Novedades -->
            <div class="section section--beige" id="ultimas-novedades">
                <div class="container">
                    <div class="section-head center">
                        <span class="eyebrow">Agenda IPSAA</span>
                        <h2>En marcha y próximos</h2>
                        <p class="lead">Programas y encuentros que están ocurriendo o comenzarán próximamente. Explora cada iniciativa para conocer sus detalles.</p>
                    </div>
                    <div class="news-grid">
                        <article class="news-card" style="background-image:url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1000&q=80')">
                            <div class="news-card-content">
                                <span class="pill">Convocatoria 2026</span>
                                <h3>Horizontes</h3>
                                <p>Nuestra primera mentoría entre pares para profesionales peruanos que preparan su postulación a universidades del extranjero.</p>
                                <a class="link-cta">Conoce el programa <span class="ms">arrow_forward</span></a>
                            </div>
                        </article>
                        <article class="news-card" style="background-image:url('https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=1000&q=80')">
                            <div class="news-card-content">
                                <span class="pill">Aprende con la red</span>
                                <h3>Webinars IPSAA</h3>
                                <p>Conversaciones prácticas con estudiantes y egresados sobre postulación, financiamiento y experiencia universitaria.</p>
                                <a class="link-cta">Ver próximos webinars <span class="ms">arrow_forward</span></a>
                            </div>
                        </article>
                        <article class="news-card" style="background-image:url('https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1000&q=80')">
                            <div class="news-card-content">
                                <span class="pill">Diciembre 2026</span>
                                <h3>Perú Connect</h3>
                                <p>Un encuentro presencial para reconectar al talento peruano global, intercambiar experiencias y generar nuevas colaboraciones.</p>
                                <a class="link-cta">Conoce el encuentro <span class="ms">arrow_forward</span></a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <!-- Voces de la Red (Historias) -->
            <div class="section voice-home-wrap" id="voces-home">
                <div class="container">
                    <div class="section-head center">
                        <span class="eyebrow" style="color: var(--beige-calido);">Voces de la Red</span>
                        <h2>Historias destacadas</h2>
                        <p>Nuestra comunidad comparte aprendizajes, decisiones y experiencias desde distintos lugares del mundo.</p>
                    </div>
                    <div class="voice-home-grid">
                        <div class="voice-home-card">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80" alt="Historia sobre postulación">
                            <div class="play"><span class="ms" aria-hidden="true">play_arrow</span></div>
                            <div class="overlay">
                                <strong>“Estudiar fuera también puede ser para ti.”</strong>
                                <span>Postulación sin estereotipos</span>
                            </div>
                        </div>
                        <div class="voice-home-card">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=800&q=80" alt="Historia sobre oportunidades académicas">
                            <div class="play"><span class="ms" aria-hidden="true">play_arrow</span></div>
                            <div class="overlay">
                                <strong>“No necesitas tener todo resuelto para empezar.”</strong>
                                <span>Dar el primer paso</span>
                            </div>
                        </div>
                        <div class="voice-home-card">
                            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=800&q=80" alt="Historia sobre comunidad peruana">
                            <div class="play"><span class="ms" aria-hidden="true">play_arrow</span></div>
                            <div class="overlay">
                                <strong>“Llegar lejos no significa llegar solo.”</strong>
                                <span>Comunidad que acompaña</span>
                            </div>
                        </div>
                        <div class="voice-home-card">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=800&q=80" alt="Historia sobre retorno al Perú">
                            <div class="play"><span class="ms" aria-hidden="true">play_arrow</span></div>
                            <div class="overlay">
                                <strong>“Lo aprendido puede volver convertido en impacto.”</strong>
                                <span>Conexión con el Perú</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- La Red IPSAA -->
            <div class="section network-home-section" id="red-ipsaa-home">
                <div class="container network-home-layout">
                    <div>
                        <span class="eyebrow">Una red de redes</span>
                        <h2>La Red IPSAA</h2>
                        <div class="network-home-number">
                            <strong>10+</strong>
                            <span>asociaciones estudiantiles y de alumni ya forman parte de la Red IPSAA.</span>
                        </div>
                        <p class="lead" style="margin-bottom: 28px;">Una plataforma para encontrarnos, compartir experiencia y activar nuevas colaboraciones.</p>
                        <a class="btn btn-primary" href="#red-ipsaa-home">Conoce la red</a>
                    </div>
                    <div class="map-mock" role="img" aria-label="Mapa conceptual de la red global IPSAA"></div>
                </div>
            </div>

            <!-- Formulario / Registro Comunidad -->
            <div class="section community-invite" id="registro-comunidad-home">
                <div class="container newsletter-layout">
                    <div class="newsletter-copy">
                        <div>
                            <span class="eyebrow" style="color:var(--beige-calido)">Comunidad IPSAA</span>
                            <h2>Conecta con lo que viene</h2>
                        </div>
                        <p class="lead">Recibe convocatorias, actividades e historias de la Red IPSAA.</p>
                    </div>
                    <form class="newsletter-form" onsubmit="handleNewsletterSubmit(event)">
                        <div class="newsletter-field">
                            <label for="newsletter-name">Nombre</label>
                            <input id="newsletter-name" name="name" type="text" placeholder="Tu nombre" autocomplete="given-name" required />
                        </div>
                        <div class="newsletter-field">
                            <label for="newsletter-lastname">Apellido</label>
                            <input id="newsletter-lastname" name="lastname" type="text" placeholder="Tu apellido" autocomplete="family-name" required />
                        </div>
                        <div class="newsletter-field">
                            <label for="newsletter-email">Correo electrónico</label>
                            <input id="newsletter-email" name="email" type="email" placeholder="nombre@correo.com" autocomplete="email" required />
                        </div>
                        <button class="btn btn-tertiary" type="submit">Quiero recibir novedades</button>
                        <p class="newsletter-note">Al registrarte, aceptas recibir comunicaciones de IPSAA. Podrás cancelar la suscripción cuando quieras.</p>
                        <p class="newsletter-success" id="newsletter-success" role="status">¡Gracias! Registramos tu interés en el boletín de IPSAA.</p>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Site Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <img src="http://localhost/IPSAA%20CUSCO/wp-content/uploads/2026/10/Logo-3_sinfondo.png" alt="IPSAA Logo" class="footer-logo-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" />
                    <div class="brand-text" style="display:none; color:var(--white);">IPSAA<span style="color:var(--red-ipsaa)">.</span></div>
                    <p style="margin-top:12px">© 2026 International Peruvian Students &amp; Alumni Association (IPSAA). Todos los derechos reservados.</p>
                </div>
                <div class="footer-col">
                    <h4>Navegación</h4>
                    <a href="http://localhost/IPSAA%20CUSCO/">Inicio</a>
                    <a href="http://localhost/IPSAA%20CUSCO/?page_id=8">Nosotros</a>
                    <a href="http://localhost/IPSAA%20CUSCO/?page_id=10">Red IPSAA</a>
                    <a href="http://localhost/IPSAA%20CUSCO/?page_id=12">Actividades</a>
                    <a href="http://localhost/IPSAA%20CUSCO/?page_id=14">Recursos</a>
                </div>
                <div class="footer-col">
                    <h4>Comunidad</h4>
                    <a href="http://localhost/IPSAA%20CUSCO/?page_id=16">Blog</a>
                    <a href="#voces-home">Voces de la Red</a>
                    <a href="#registro-comunidad-home">Convocatorias</a>
                    <a href="http://localhost/IPSAA%20CUSCO/?page_id=18">Sé parte</a>
                </div>
                <div class="footer-col">
                    <h4>Iniciativas</h4>
                    <a href="#ultimas-novedades">Mentoría Horizontes</a>
                    <a href="#ultimas-novedades">Perú Connect 2026</a>
                    <a href="#ultimas-novedades">Webinars y Bootcamps</a>
                </div>
                <div class="footer-col">
                    <h4>Contacto</h4>
                    <a href="#registro-comunidad-home">Escríbenos</a>
                    <a href="mailto:ipsaa.peru@gmail.com">ipsaa.peru@gmail.com</a>
                </div>
                <div class="footer-col">
                    <h4>Síguenos</h4>
                    <div class="footer-socials">
                        <!-- Ordered logically: LinkedIn (Professional network), Instagram (Visual community), Facebook (Events & groups) -->
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

    <!-- Slider & Interactive Script -->
    <script>
        let heroCurrentIndex = 0;
        const heroSlides = document.querySelectorAll('.hero-message');
        const heroTabs = document.querySelectorAll('.hero-preview-tab');
        const heroCounter = document.getElementById('heroCounter');
        const slideDuration = 6000; // 6 seconds per slide
        let heroTimer = null;
        let progressInterval = null;
        let progressStartTime = 0;

        function showHeroSlide(index) {
            if (heroSlides.length === 0) return;

            if (index >= heroSlides.length) heroCurrentIndex = 0;
            else if (index < 0) heroCurrentIndex = heroSlides.length - 1;
            else heroCurrentIndex = index;

            heroSlides.forEach((slide, i) => {
                if (i === heroCurrentIndex) {
                    slide.classList.add('active');
                } else {
                    slide.classList.remove('active');
                }
            });

            heroTabs.forEach((tab, i) => {
                const line = document.getElementById('progressLine' + i);
                if (i === heroCurrentIndex) {
                    tab.classList.add('active');
                } else {
                    tab.classList.remove('active');
                    if (line) line.style.width = '0%';
                }
            });

            if (heroCounter) {
                const formattedNum = String(heroCurrentIndex + 1).padStart(2, '0');
                const formattedTotal = String(heroSlides.length).padStart(2, '0');
                heroCounter.textContent = `${formattedNum} / ${formattedTotal}`;
            }

            startProgressAnimation();
        }

        function setHeroSlide(index) {
            showHeroSlide(index);
            restartHeroTimer();
        }

        function changeHeroSlide(step) {
            showHeroSlide(heroCurrentIndex + step);
            restartHeroTimer();
        }

        function startProgressAnimation() {
            if (progressInterval) clearInterval(progressInterval);
            progressStartTime = Date.now();
            const activeLine = document.getElementById('progressLine' + heroCurrentIndex);

            progressInterval = setInterval(() => {
                const elapsed = Date.now() - progressStartTime;
                const percentage = Math.min((elapsed / slideDuration) * 100, 100);
                if (activeLine) activeLine.style.width = percentage + '%';
                if (elapsed >= slideDuration) {
                    clearInterval(progressInterval);
                }
            }, 50);
        }

        function restartHeroTimer() {
            if (heroTimer) clearInterval(heroTimer);
            heroTimer = setInterval(() => {
                changeHeroSlide(1);
            }, slideDuration);
        }

        function handleNewsletterSubmit(e) {
            e.preventDefault();
            const successMsg = document.getElementById('newsletter-success');
            if (successMsg) {
                successMsg.style.display = 'block';
                e.target.reset();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            showHeroSlide(0);
            restartHeroTimer();

            // Pause autoplay on carousel hover
            const carouselContainer = document.getElementById('heroCarouselContainer');
            if (carouselContainer) {
                carouselContainer.addEventListener('mouseenter', () => {
                    if (heroTimer) clearInterval(heroTimer);
                    if (progressInterval) clearInterval(progressInterval);
                });
                carouselContainer.addEventListener('mouseleave', () => {
                    restartHeroTimer();
                    startProgressAnimation();
                });
            }
        });
    </script>

    <?php if (function_exists('wp_footer')) wp_footer(); ?>
</body>
</html>
