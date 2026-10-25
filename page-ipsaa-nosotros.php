<?php
/*
 Template Name: IPSAA Nosotros
 Description: Página institucional "Nosotros" para IPSAA (International Peruvian Students & Alumni Association) priorizando Quiénes Somos, Propósito y Principios, Nuestra Historia, El Equipo y Transparencia.
*/
?>
<!DOCTYPE html>
<html <?php if (function_exists('language_attributes')) language_attributes(); else echo 'lang="es"'; ?>>
<head>
    <meta charset="<?php if (function_exists('bloginfo')) bloginfo('charset'); else echo 'UTF-8'; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - IPSAA | International Peruvian Students &amp; Alumni Association</title>
    <meta name="description" content="Conoce la historia, propósito, equipo directivo y compromisos de transparencia de IPSAA: la red global de estudiantes y egresados peruanos." />

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

        /* Redesigned Premium Split Hero Section */
        .nosotros-hero {
            background: linear-gradient(135deg, #380009 0%, #670010 50%, #4a000b 100%);
            color: var(--white);
            padding: 80px 0 90px;
            position: relative;
            overflow: hidden;
        }

        .nosotros-hero::before {
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

        .nosotros-hero::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 450px;
            height: 450px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(103, 0, 16, 0.4) 0%, transparent 75%);
            pointer-events: none;
        }

        .nosotros-hero-layout {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 50px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .nosotros-hero-copy {
            display: flex;
            flex-direction: flex-start;
            flex-direction: column;
        }

        .nosotros-hero h1 {
            font-size: clamp(2.3rem, 4.2vw, 3.4rem);
            font-weight: 800;
            line-height: 1.16;
            margin-bottom: 22px;
            letter-spacing: -0.5px;
            color: var(--white);
            text-shadow: 0 2px 10px rgba(0,0,0,0.25);
        }

        .nosotros-hero h1 span {
            color: var(--beige-calido);
            position: relative;
            display: inline-block;
        }

        .nosotros-hero p.lead {
            font-size: clamp(1.05rem, 1.8vw, 1.2rem);
            color: rgba(255, 255, 255, 0.92);
            margin-bottom: 32px;
            font-weight: 300;
            line-height: 1.7;
            max-width: 660px;
        }

        .nosotros-hero-actions {
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .hero-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 13px 28px;
            border-radius: 50px;
            font-size: 0.95rem;
            font-weight: 600;
            transition: var(--transition);
            cursor: pointer;
        }

        .hero-btn--primary {
            background: var(--beige-calido);
            color: var(--red-dark);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .hero-btn--primary:hover {
            background: #ffffff;
            color: var(--red-ipsaa);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
        }

        .hero-btn--secondary {
            background: rgba(255, 255, 255, 0.12);
            color: var(--white);
            border: 1px solid rgba(232, 195, 158, 0.4);
            backdrop-filter: blur(8px);
        }

        .hero-btn--secondary:hover {
            background: rgba(255, 255, 255, 0.22);
            border-color: var(--white);
            color: var(--white);
        }

        /* Hero Right Media Box */
        .nosotros-hero-media {
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
        .nosotros-hero-stats {
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
        .nosotros-section {
            padding: 90px 0;
            position: relative;
        }

        .nosotros-section--alt {
            background-color: var(--beige-soft);
        }

        .nosotros-section--dark {
            background-color: var(--red-ipsaa);
            color: var(--white);
        }

        .section-header {
            max-width: 760px;
            margin: 0 auto 56px;
            text-align: center;
        }

        .section-header h2 {
            font-size: 2.3rem;
            font-weight: 800;
            color: var(--navy-ipsaa);
            letter-spacing: -0.5px;
            margin-bottom: 14px;
        }

        .nosotros-section--dark .section-header h2 {
            color: var(--white);
        }

        .section-header p {
            font-size: 1.1rem;
            color: var(--text-muted);
            line-height: 1.7;
        }

        .nosotros-section--dark .section-header p {
            color: rgba(255, 255, 255, 0.85);
        }

        /* Section 1: Quiénes Somos */
        .quienes-somos-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 60px;
            align-items: center;
        }

        .quienes-somos-text h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--red-ipsaa);
            margin-bottom: 18px;
            line-height: 1.3;
        }

        .quienes-somos-text p {
            font-size: 1.05rem;
            color: var(--text-dark);
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .quienes-somos-highlight {
            background: var(--white);
            padding: 24px 28px;
            border-left: 5px solid var(--red-ipsaa);
            border-radius: 0 var(--radius-md) var(--radius-md) 0;
            box-shadow: var(--shadow-sm);
            margin-top: 24px;
        }

        .quienes-somos-highlight p {
            font-size: 1rem;
            font-weight: 600;
            color: var(--navy-ipsaa);
            margin-bottom: 0;
        }

        .quienes-somos-image-box {
            position: relative;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            height: 480px;
        }

        .quienes-somos-image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .quienes-somos-image-badge {
            position: absolute;
            bottom: 24px;
            left: 24px;
            right: 24px;
            background: rgba(103, 0, 16, 0.92);
            backdrop-filter: blur(10px);
            color: var(--white);
            padding: 20px;
            border-radius: var(--radius-md);
            border: 1px solid rgba(232, 195, 158, 0.3);
        }

        .quienes-somos-image-badge h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--beige-calido);
            margin-bottom: 4px;
        }

        .quienes-somos-image-badge p {
            font-size: 0.88rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 0;
        }

        /* Section 2: Propósito y Principios */
        .proposito-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 32px;
            margin-bottom: 60px;
        }

        .proposito-card {
            background: var(--white);
            padding: 40px;
            border-radius: var(--radius-lg);
            border: 1px solid rgba(103, 0, 16, 0.1);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .proposito-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--red-ipsaa);
        }

        .proposito-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
        }

        .proposito-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(103, 0, 16, 0.08);
            color: var(--red-ipsaa);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .proposito-icon .ms {
            font-size: 32px;
        }

        .proposito-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--navy-ipsaa);
            margin-bottom: 12px;
        }

        .proposito-card p {
            font-size: 1rem;
            color: var(--text-muted);
            line-height: 1.7;
        }

        /* Principios Grid */
        .principios-title {
            text-align: center;
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--navy-ipsaa);
            margin-bottom: 36px;
        }

        .principios-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
        }

        .principio-card {
            background: var(--white);
            padding: 28px 24px;
            border-radius: var(--radius-md);
            border: 1px solid rgba(0, 0, 0, 0.06);
            transition: var(--transition);
        }

        .principio-card:hover {
            border-color: var(--beige-calido);
            transform: translateY(-4px);
            box-shadow: var(--shadow-sm);
        }

        .principio-num {
            font-size: 0.85rem;
            font-weight: 800;
            color: var(--red-ipsaa);
            background: rgba(103, 0, 16, 0.08);
            padding: 4px 12px;
            border-radius: 50px;
            display: inline-block;
            margin-bottom: 14px;
        }

        .principio-card h4 {
            font-size: 1.18rem;
            font-weight: 700;
            color: var(--navy-ipsaa);
            margin-bottom: 10px;
        }

        .principio-card p {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* Section 3: Nuestra Historia (Timeline) */
        .timeline-wrapper {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px 0;
        }

        .timeline-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 4px;
            background: rgba(232, 195, 158, 0.4);
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 50px;
            width: 50%;
            padding: 0 40px;
        }

        .timeline-item--left {
            left: 0;
            text-align: right;
        }

        .timeline-item--right {
            left: 50%;
            text-align: left;
        }

        .timeline-dot {
            position: absolute;
            top: 0;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--beige-calido);
            border: 4px solid var(--red-ipsaa);
            box-shadow: 0 0 12px rgba(232, 195, 158, 0.8);
            z-index: 2;
        }

        .timeline-item--left .timeline-dot {
            right: -12px;
        }

        .timeline-item--right .timeline-dot {
            left: -12px;
        }

        .timeline-content {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            padding: 28px;
            border-radius: var(--radius-md);
            border: 1px solid rgba(232, 195, 158, 0.25);
            box-shadow: var(--shadow-sm);
        }

        .timeline-year {
            font-size: 1.3rem;
            font-weight: 800;
            color: var(--beige-calido);
            margin-bottom: 8px;
            display: inline-block;
        }

        .timeline-content h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 10px;
        }

        .timeline-content p {
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.6;
        }

        /* Section 4: El Equipo */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 32px;
        }

        .team-card {
            background: var(--white);
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(103, 0, 16, 0.08);
            transition: var(--transition);
            text-align: center;
        }

        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-md);
            border-color: rgba(232, 195, 158, 0.6);
        }

        .team-avatar-wrap {
            position: relative;
            height: 260px;
            overflow: hidden;
        }

        .team-avatar-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .team-card:hover .team-avatar-wrap img {
            transform: scale(1.06);
        }

        .team-badge {
            position: absolute;
            bottom: 12px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--red-ipsaa);
            color: var(--white);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 50px;
            white-space: nowrap;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .team-body {
            padding: 24px;
        }

        .team-body h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--navy-ipsaa);
            margin-bottom: 4px;
        }

        .team-role {
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--red-ipsaa);
            margin-bottom: 10px;
            display: block;
        }

        .team-univ {
            font-size: 0.82rem;
            color: var(--text-muted);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 4px;
        }

        .team-bio {
            font-size: 0.88rem;
            color: var(--text-dark);
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .team-social {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(103, 0, 16, 0.08);
            color: var(--red-ipsaa);
            transition: var(--transition);
        }

        .team-social:hover {
            background: #0A66C2;
            color: var(--white);
            transform: scale(1.1);
        }

        /* Section 5: Transparencia & Gobernanza */
        .transparencia-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .transparencia-box {
            background: var(--white);
            padding: 36px;
            border-radius: var(--radius-lg);
            border: 1px solid rgba(103, 0, 16, 0.1);
            box-shadow: var(--shadow-sm);
        }

        .transparencia-box h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--navy-ipsaa);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .transparencia-box h3 .ms {
            color: var(--red-ipsaa);
        }

        .transparencia-box p {
            font-size: 0.98rem;
            color: var(--text-muted);
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .transparencia-list {
            list-style: none;
            margin-bottom: 24px;
        }

        .transparencia-list li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 0.92rem;
            color: var(--text-dark);
            margin-bottom: 12px;
        }

        .transparencia-list li .ms {
            color: #10B981;
            font-size: 20px;
            margin-top: 2px;
        }

        .btn-download {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--red-ipsaa);
            color: var(--white);
            padding: 12px 24px;
            border-radius: 50px;
            font-size: 0.92rem;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: 0 4px 12px rgba(103, 0, 16, 0.25);
        }

        .btn-download:hover {
            background: var(--red-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(103, 0, 16, 0.35);
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

            .quienes-somos-grid,
            .proposito-grid,
            .transparencia-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .timeline-wrapper::before {
                left: 20px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 50px;
                padding-right: 0;
                text-align: left !important;
            }

            .timeline-item--right {
                left: 0;
            }

            .timeline-dot {
                left: 8px !important;
                right: auto !important;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 576px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }

            .nosotros-hero {
                padding: 60px 0;
            }
        }
    </style>
</head>
<body <?php if (function_exists('body_class')) body_class(); ?>>

    <!-- Header Navigation -->
    <header class="site-header">
        <div class="nav-wrap">
            <a class="brand" href="http://localhost/IPSAA%20CUSCO/" title="IPSAA Inicio">
                <img src="http://localhost/IPSAA%20CUSCO/wp-content/uploads/2026/10/Logo-3_sinfondo.png" alt="IPSAA Logo" class="header-logo-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" />
                <div class="brand-text" style="display:none; color:var(--navy-ipsaa); font-weight:800; font-size:1.6rem;">IPSAA<span style="color:var(--red-ipsaa)">.</span></div>
            </a>
            <button class="nav-toggle" aria-label="Menú" onclick="document.getElementById('nav').classList.toggle('open')">
                <span class="ms">menu</span>
            </button>
            <nav class="nav" id="nav">
                <div class="nav-item">
                    <a class="nav-link" href="http://localhost/IPSAA%20CUSCO/">Inicio</a>
                    <div class="submenu">
                        <a href="http://localhost/IPSAA%20CUSCO/#que-es">Presentación</a>
                        <a href="http://localhost/IPSAA%20CUSCO/#hoja-ruta">Elige tu camino</a>
                        <a href="http://localhost/IPSAA%20CUSCO/#ultimas-novedades">Últimas novedades</a>
                        <a href="http://localhost/IPSAA%20CUSCO/#voces-home">Historias destacadas</a>
                        <a href="http://localhost/IPSAA%20CUSCO/#red-ipsaa-home">La Red IPSAA</a>
                        <a href="http://localhost/IPSAA%20CUSCO/#registro-comunidad-home">Conecta con lo que viene</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link active" href="http://localhost/IPSAA%20CUSCO/?page_id=8">Nosotros</a>
                    <div class="submenu">
                        <a href="#quienes-somos">Quiénes somos</a>
                        <a href="#proposito-principios">Propósito y principios</a>
                        <a href="#nuestra-historia">Nuestra historia</a>
                        <a href="#el-equipo">El equipo</a>
                        <a href="#transparencia">Transparencia</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="http://localhost/IPSAA%20CUSCO/?page_id=10">Red IPSAA</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="http://localhost/IPSAA%20CUSCO/?page_id=12">Actividades</a>
                    <div class="submenu">
                        <a href="http://localhost/IPSAA%20CUSCO/#ultimas-novedades">Mentoría Horizontes</a>
                        <a href="http://localhost/IPSAA%20CUSCO/#ultimas-novedades">Webinars y Bootcamps</a>
                        <a href="http://localhost/IPSAA%20CUSCO/#ultimas-novedades">Perú Connect 2026</a>
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
        <!-- Redesigned Hero Header -->
        <section class="nosotros-hero">
            <div class="container">
                <div class="nosotros-hero-layout">
                    <!-- Left Copy Column -->
                    <div class="nosotros-hero-copy">
                        <span class="eyebrow eyebrow--light"><span class="ms" style="font-size:18px">verified</span> Conoce IPSAA</span>
                        <h1>El talento peruano en el mundo unido por el <span>desarrollo del Perú</span></h1>
                        <p class="lead">Somos la International Peruvian Students &amp; Alumni Association (IPSAA), una plataforma global e independiente que conecta a estudiantes, egresados y asociaciones peruanas en universidades de prestigio para democratizar la educación superior de excelencia.</p>

                        <div class="nosotros-hero-actions">
                            <a href="#proposito-principios" class="hero-btn hero-btn--primary">
                                Conoce nuestro propósito <span class="ms">arrow_forward</span>
                            </a>
                            <a href="#nuestra-historia" class="hero-btn hero-btn--secondary">
                                <span class="ms">history_edu</span> Ver nuestra historia
                            </a>
                        </div>
                    </div>

                    <!-- Right Hero Media Box -->
                    <div class="nosotros-hero-media">
                        <div class="hero-media-card">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1000&q=80" alt="Comunidad Peruana en el Extranjero" />
                        </div>
                        <div class="hero-floating-badge">
                            <div class="badge-icon-box">
                                <span class="ms" style="font-size:26px">public</span>
                            </div>
                            <div class="badge-info">
                                <strong>Comunidad Global IPSAA</strong>
                                <span>Presentes en América, Europa y Asia</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Grid Statistics -->
                    <div class="nosotros-hero-stats">
                        <div class="hero-stat-card">
                            <strong>10+</strong>
                            <span>Asociaciones aliadas</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>15+</strong>
                            <span>Países con presencia</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>500+</strong>
                            <span>Estudiantes y Alumni</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>100%</strong>
                            <span>Independiente y Abierta</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 1: Quiénes Somos -->
        <section class="nosotros-section" id="quienes-somos">
            <div class="container">
                <div class="quienes-somos-grid">
                    <div class="quienes-somos-text">
                        <span class="eyebrow"><span class="ms" style="font-size:18px">groups</span> Identidad Institucional</span>
                        <h3>Una red construida desde la empatía y la excelencia académica</h3>
                        <p>IPSAA nació de la iniciativa voluntaria de estudiantes y egresados peruanos en instituciones de reconocido prestigio internacional. Entendemos de primera mano los desafíos que representa postular y adaptarse a entornos académicos altamente exigentes fuera del Perú.</p>
                        <p>Trabajamos de forma articulada para derribar barreras de información, brindar orientación transparente y generar un espacio permanente donde el conocimiento adquirido internacionalmente retorne en forma de proyectos, mentorías e investigación colaborativa.</p>

                        <div class="quienes-somos-highlight">
                            <p>“Creemos firmemente que el origen socioeconómico o geográfico de un profesional peruano no debe limitar su capacidad para formarse en las mejores aulas del planeta.”</p>
                        </div>
                    </div>

                    <div class="quienes-somos-image-box">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1000&q=80" alt="Comunidad IPSAA trabajando junta" />
                        <div class="quienes-somos-image-badge">
                            <h4>Ecosistema Colaborativo Global</h4>
                            <p>Conectando el talento desde Cambridge, Stanford, Oxford, Tokio, Madrid y más allá.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Propósito y Principios -->
        <section class="nosotros-section nosotros-section--alt" id="proposito-principios">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow"><span class="ms" style="font-size:18px">center_focus_strong</span> Nuestro Norte</span>
                    <h2>Propósito, Misión y Principios Rectores</h2>
                    <p>Orientamos nuestras iniciativas bajo convicciones claras que guían cada programa de mentoría, webinar y encuentro comunitario.</p>
                </div>

                <div class="proposito-grid">
                    <div class="proposito-card">
                        <div class="proposito-icon">
                            <span class="ms">rocket_launch</span>
                        </div>
                        <h3>Nuestra Misión</h3>
                        <p>Articular y potenciar la red de estudiantes y alumni peruanos en el extranjero para acompañar a futuras generaciones de postulantes, promoviendo el acceso equitativo a educación superior de calidad e impulsando iniciativas de desarrollo con impacto directo en el Perú.</p>
                    </div>

                    <div class="proposito-card">
                        <div class="proposito-icon">
                            <span class="ms">visibility</span>
                        </div>
                        <h3>Nuestra Visión</h3>
                        <p>Ser el referente global de la comunidad académica y profesional peruana en el extranjero, reconocido por su capacidad de conectar el talento, influir positivamente en el desarrollo científico y cultural del país, y consolidar puentes permanentes entre el Perú y el mundo.</p>
                    </div>
                </div>

                <h3 class="principios-title">Principios de la Red IPSAA</h3>

                <div class="principios-grid">
                    <div class="principio-card">
                        <span class="principio-num">01 · Colaboración</span>
                        <h4>Solidaridad y Reciprocidad</h4>
                        <p>Promovemos una cultura de apoyo mutuo genuino donde la experiencia compartida ilumina el camino de quienes vienen detrás.</p>
                    </div>

                    <div class="principio-card">
                        <span class="principio-num">02 · Inclusión</span>
                        <h4>Equidad y Oportunidad</h4>
                        <p>Fomentamos la diversidad regional, de género y disciplinaria, garantizando que la información sea libre y accesible para todos.</p>
                    </div>

                    <div class="principio-card">
                        <span class="principio-num">03 · Excelencia</span>
                        <h4>Rigurosidad e Rigor</h4>
                        <p>Fomentamos altos estándares de integridad académica y profesional en cada convocatoria, proyecto y alianza estratégica.</p>
                    </div>

                    <div class="principio-card">
                        <span class="principio-num">04 · Impacto</span>
                        <h4>Compromiso con el Perú</h4>
                        <p>Orientamos nuestras capacidades a la generación de soluciones concretas para las necesidades prioritarias del país.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Nuestra Historia -->
        <section class="nosotros-section nosotros-section--dark" id="nuestra-historia">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow eyebrow--light"><span class="ms" style="font-size:18px">history_edu</span> Trayectoria e Hitos</span>
                    <h2>Nuestra Historia</h2>
                    <p>De conversaciones entre asociaciones de estudiantes en distintos continentes a una red global estructurada.</p>
                </div>

                <div class="timeline-wrapper">
                    <div class="timeline-item timeline-item--left">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="timeline-year">2020 · El Origen</span>
                            <h3>El Primer Encuentro Inter-Asociaciones</h3>
                            <p>En medio de la pandemia global, líderes de asociaciones de estudiantes peruanos en EE.UU., Europa y Asia organizan el primer webinar conjunto para orientar a postulantes peruanos.</p>
                        </div>
                    </div>

                    <div class="timeline-item timeline-item--right">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="timeline-year">2022 · Articulación</span>
                            <h3>Consolidador de la Identidad IPSAA</h3>
                            <p>Se acuerdan las bases fundacionales de IPSAA como una red independiente. Se suman más de 10 organizaciones de posgrado en universidades de prestigio en 4 continentes.</p>
                        </div>
                    </div>

                    <div class="timeline-item timeline-item--left">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="timeline-year">2024 · Programa Horizontes</span>
                            <h3>Lanzamiento de Mentoría Horizontes</h3>
                            <p>Se lanza la primera edición oficial del programa de mentorías 1 a 1 entre pares, conectando a postulantes peruanos de regiones con mentores graduados en universidades top.</p>
                        </div>
                    </div>

                    <div class="timeline-item timeline-item--right">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="timeline-year">2026 · Expansión</span>
                            <h3>Perú Connect &amp; Red Institucional</h3>
                            <p>Despliegue del encuentro presencial Perú Connect en Lima y consolidación de repositorios libres de recursos para maestrías, doctorados y financiamiento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: El Equipo -->
        <section class="nosotros-section" id="el-equipo">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow"><span class="ms" style="font-size:18px">badge</span> Liderazgo Voluntario</span>
                    <h2>El Equipo Directivo</h2>
                    <p>Un equipo multidisciplinario de profesionales y graduados comprometidos con impulsar la misión de IPSAA voluntariamente.</p>
                </div>

                <div class="team-grid">
                    <!-- Team Member 1 -->
                    <div class="team-card">
                        <div class="team-avatar-wrap">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=600&q=80" alt="Directora Ejecutiva IPSAA" />
                            <span class="team-badge">Harvard Alumni</span>
                        </div>
                        <div class="team-body">
                            <h3>María Alejandra Torres</h3>
                            <span class="team-role">Presidencia &amp; Relaciones Institucionales</span>
                            <span class="team-univ"><span class="ms" style="font-size:16px">school</span> Master in Public Policy - Harvard</span>
                            <p class="team-bio">Especialista en políticas públicas e inclusión educativa. Apasionada por conectar el talento regional peruano con oportunidades globales.</p>
                            <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="team-social" title="LinkedIn"><span class="ms" style="font-size:20px">link</span></a>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="team-card">
                        <div class="team-avatar-wrap">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=600&q=80" alt="Director de Mentoría IPSAA" />
                            <span class="team-badge">Oxford Student</span>
                        </div>
                        <div class="team-body">
                            <h3>Carlos Mendoza</h3>
                            <span class="team-role">Director de Programa Horizontes</span>
                            <span class="team-univ"><span class="ms" style="font-size:16px">school</span> DPhil in Economics - Oxford</span>
                            <p class="team-bio">Economista orientado a modelos de desarrollo sostenible. Coordina la red de mentores y postulantes a maestrías y doctorados.</p>
                            <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="team-social" title="LinkedIn"><span class="ms" style="font-size:20px">link</span></a>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="team-card">
                        <div class="team-avatar-wrap">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80" alt="Directora de Comunicaciones IPSAA" />
                            <span class="team-badge">MIT Alumni</span>
                        </div>
                        <div class="team-body">
                            <h3>Sofia Quispe</h3>
                            <span class="team-role">Directora de Comunidad &amp; Redes</span>
                            <span class="team-univ"><span class="ms" style="font-size:16px">school</span> MSc in Engineering - MIT</span>
                            <p class="team-bio">Ingeniera de sistemas dedicada a crear herramientas digitales para la divulgación de ciencia y becas internacionales.</p>
                            <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="team-social" title="LinkedIn"><span class="ms" style="font-size:20px">link</span></a>
                        </div>
                    </div>

                    <!-- Team Member 4 -->
                    <div class="team-card">
                        <div class="team-avatar-wrap">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=600&q=80" alt="Director de Alianzas IPSAA" />
                            <span class="team-badge">UB España</span>
                        </div>
                        <div class="team-body">
                            <h3>Diego Flores</h3>
                            <span class="team-role">Director de Alianzas Estratégicas</span>
                            <span class="team-univ"><span class="ms" style="font-size:16px">school</span> Máster en Gestión Cultural - UB</span>
                            <p class="team-bio">Gestor cultural enfocado en fortalecer los vínculos entre asociaciones peruanas en Europa y la academia nacional.</p>
                            <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="team-social" title="LinkedIn"><span class="ms" style="font-size:20px">link</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5: Transparencia & Gobernanza -->
        <section class="nosotros-section nosotros-section--alt" id="transparencia">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow"><span class="ms" style="font-size:18px">verified_user</span> Integridad &amp; Rendición de Cuentas</span>
                    <h2>Transparencia y Gobernanza</h2>
                    <p>Nuestra credibilidad se sostiene en el manejo ético, independiente y transparente de todos nuestros recursos e iniciativas.</p>
                </div>

                <div class="transparencia-grid">
                    <div class="transparencia-box">
                        <h3><span class="ms">shield</span> Principios de Gobernanza</h3>
                        <p>IPSAA es una asociación sin fines de lucro, aconfesional y sin afiliación político-partidaria. Nos regimos por los siguientes compromisos institucionales:</p>
                        <ul class="transparencia-list">
                            <li><span class="ms">check_circle</span> <strong>Independencia total:</strong> Nuestras decisiones académicas e institucionales no responden a intereses particulares ni comerciales.</li>
                            <li><span class="ms">check_circle</span> <strong>Uso responsable de fondos:</strong> Todos los aportes o subvenciones se destinan exclusivamente al financiamiento de programas sociales y plataformas de acceso libre.</li>
                            <li><span class="ms">check_circle</span> <strong>Protección de datos:</strong> Salvaguardamos rigurosamente la privacidad de nuestros mentees, mentores y miembros registrados.</li>
                        </ul>
                    </div>

                    <div class="transparencia-box">
                        <h3><span class="ms">analytics</span> Informes de Gestión y Memoria Annual</h3>
                        <p>Publicamos periódicamente los avances de nuestro trabajo, métricas de impacto de las convocatorias de mentoría e informes ejecutivos de actividades.</p>
                        <p>Invitamos a nuestra comunidad y aliados estratégicos a revisar nuestros documentos institucionales abiertos para consulta pública.</p>

                        <div style="margin-top: 24px;">
                            <a href="#" onclick="alert('Descargando Memoria Anual IPSAA...'); return false;" class="btn-download">
                                <span class="ms">download</span> Descargar Memoria de Gestión 2025 (PDF)
                            </a>
                        </div>
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
                    <img src="http://localhost/IPSAA%20CUSCO/wp-content/uploads/2026/10/Logo-3_sinfondo.png" alt="IPSAA Logo" class="footer-logo-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" />
                    <div class="brand-text" style="display:none; color:var(--white); font-weight:800; font-size:1.6rem;">IPSAA<span style="color:var(--red-ipsaa)">.</span></div>
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
                    <a href="#quienes-somos">Voces de la Red</a>
                    <a href="#proposito-principios">Nuestra Misión</a>
                    <a href="http://localhost/IPSAA%20CUSCO/?page_id=18">Sé parte</a>
                </div>
                <div class="footer-col">
                    <h4>Iniciativas</h4>
                    <a href="#proposito-principios">Mentoría Horizontes</a>
                    <a href="#nuestra-historia">Perú Connect 2026</a>
                    <a href="#transparencia">Transparencia</a>
                </div>
                <div class="footer-col">
                    <h4>Contacto</h4>
                    <a href="http://localhost/IPSAA%20CUSCO/?page_id=18">Escríbenos</a>
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

    <?php if (function_exists('wp_footer')) wp_footer(); ?>
</body>
</html>
