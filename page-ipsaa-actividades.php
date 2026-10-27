<?php
/*
 Template Name: IPSAA Actividades
 Description: Página institucional "Actividades" para IPSAA (International Peruvian Students & Alumni Association) cubriendo Mentoría Horizontes (con Biblioteca de Recursos), Webinars y Bootcamps, y el Encuentro Perú Connect 2026.
*/
?>
<!DOCTYPE html>
<html <?php if (function_exists('language_attributes')) language_attributes(); else echo 'lang="es"'; ?>>
<head>
    <meta charset="<?php if (function_exists('bloginfo')) bloginfo('charset'); else echo 'UTF-8'; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades - IPSAA | Mentorías, Webinars y Encuentros Globales</title>
    <meta name="description" content="Descubre las actividades de IPSAA: Programa de Mentoría Horizontes con su Biblioteca Abierta, Webinars y Bootcamps académicos, y el Encuentro Perú Connect." />

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
        .actividades-hero {
            background: linear-gradient(135deg, #380009 0%, #670010 50%, #4a000b 100%);
            color: var(--white);
            padding: 80px 0 90px;
            position: relative;
            overflow: hidden;
        }

        .actividades-hero::before {
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

        .actividades-hero-layout {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 50px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .actividades-hero-copy {
            display: flex;
            flex-direction: column;
        }

        .actividades-hero h1 {
            font-size: clamp(2.3rem, 4.2vw, 3.4rem);
            font-weight: 800;
            line-height: 1.16;
            margin-bottom: 22px;
            letter-spacing: -0.5px;
            color: var(--white);
            text-shadow: 0 2px 10px rgba(0,0,0,0.25);
        }

        .actividades-hero h1 span {
            color: var(--beige-calido);
            position: relative;
            display: inline-block;
        }

        .actividades-hero p.lead {
            font-size: clamp(1.05rem, 1.8vw, 1.2rem);
            color: rgba(255, 255, 255, 0.92);
            margin-bottom: 32px;
            font-weight: 300;
            line-height: 1.7;
            max-width: 660px;
        }

        .actividades-hero-actions {
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
        .actividades-hero-media {
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
        .actividades-hero-stats {
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
        .actividades-section {
            padding: 90px 0;
            position: relative;
        }

        .actividades-section--alt {
            background-color: var(--beige-soft);
        }

        .actividades-section--dark {
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

        .actividades-section--dark .section-header h2 {
            color: var(--white);
        }

        .section-header p {
            font-size: 1.1rem;
            color: var(--text-muted);
            line-height: 1.7;
        }

        .actividades-section--dark .section-header p {
            color: rgba(255, 255, 255, 0.85);
        }

        /* Section 1: Mentoría Horizontes */
        .mentoria-layout {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 60px;
            align-items: center;
            margin-bottom: 60px;
        }

        .mentoria-copy h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--red-ipsaa);
            margin-bottom: 18px;
            line-height: 1.3;
        }

        .mentoria-copy p {
            font-size: 1.05rem;
            color: var(--text-dark);
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .mentoria-features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 24px;
        }

        .mentoria-feature-card {
            background: var(--white);
            padding: 20px;
            border-radius: var(--radius-md);
            border: 1px solid rgba(103, 0, 16, 0.08);
            box-shadow: var(--shadow-sm);
        }

        .mentoria-feature-card .ms {
            color: var(--red-ipsaa);
            font-size: 32px;
            margin-bottom: 10px;
        }

        .mentoria-feature-card h4 {
            font-size: 1rem;
            font-weight: 700;
            color: var(--navy-ipsaa);
            margin-bottom: 6px;
        }

        .mentoria-feature-card p {
            font-size: 0.88rem;
            color: var(--text-muted);
            line-height: 1.5;
            margin-bottom: 0;
        }

        .mentoria-media-box {
            position: relative;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            height: 480px;
        }

        .mentoria-media-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .mentoria-badge {
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

        .mentoria-badge h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--beige-calido);
            margin-bottom: 4px;
        }

        .mentoria-badge p {
            font-size: 0.88rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 0;
        }

        /* Section 1B: Biblioteca de Recursos Horizontes */
        .biblioteca-wrap {
            background: var(--white);
            padding: 50px;
            border-radius: var(--radius-lg);
            border: 1px solid rgba(103, 0, 16, 0.1);
            box-shadow: var(--shadow-sm);
            margin-top: 40px;
        }

        .biblioteca-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 36px;
            flex-wrap: wrap;
        }

        .biblioteca-header-text h3 {
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--navy-ipsaa);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .biblioteca-header-text h3 .ms {
            color: var(--red-ipsaa);
            font-size: 32px;
        }

        .biblioteca-header-text p {
            font-size: 0.98rem;
            color: var(--text-muted);
            margin-top: 4px;
        }

        .recursos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
        }

        .recurso-card {
            background: #FAFAFA;
            padding: 28px 22px;
            border-radius: var(--radius-md);
            border: 1px solid rgba(0,0,0,0.06);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .recurso-card:hover {
            transform: translateY(-6px);
            border-color: var(--beige-calido);
            box-shadow: var(--shadow-sm);
            background: var(--white);
        }

        .recurso-type-badge {
            display: inline-block;
            background: rgba(103, 0, 16, 0.08);
            color: var(--red-ipsaa);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 14px;
        }

        .recurso-card h4 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--navy-ipsaa);
            margin-bottom: 10px;
        }

        .recurso-card p {
            font-size: 0.88rem;
            color: var(--text-muted);
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .btn-download-recurso {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--red-ipsaa);
            transition: var(--transition);
        }

        .btn-download-recurso:hover {
            color: var(--red-dark);
            transform: translateX(3px);
        }

        /* Section 2: Webinars & Bootcamps */
        .webinars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 32px;
        }

        .webinar-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(103, 0, 16, 0.08);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .webinar-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-md);
            border-color: rgba(232, 195, 158, 0.6);
        }

        .webinar-media {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .webinar-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .webinar-card:hover .webinar-media img {
            transform: scale(1.06);
        }

        .webinar-badge-track {
            position: absolute;
            top: 16px;
            left: 16px;
            background: var(--red-ipsaa);
            color: var(--white);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 5px 14px;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .webinar-body {
            padding: 28px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .webinar-date {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--red-ipsaa);
            margin-bottom: 10px;
        }

        .webinar-body h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--navy-ipsaa);
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .webinar-speaker {
            font-size: 0.88rem;
            color: var(--text-muted);
            margin-bottom: 16px;
            font-weight: 500;
        }

        .webinar-desc {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 24px;
            flex-grow: 1;
        }

        .webinar-cta {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: var(--red-ipsaa);
            color: var(--white);
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .webinar-cta:hover {
            background: var(--red-dark);
            box-shadow: 0 4px 12px rgba(103, 0, 16, 0.3);
            transform: translateY(-2px);
        }

        /* Section 3: Perú Connect 2026 */
        .peruconnect-wrap {
            background: linear-gradient(135deg, #380009 0%, #670010 60%, #4a000b 100%);
            color: var(--white);
            border-radius: var(--radius-lg);
            padding: 60px;
            position: relative;
            overflow: hidden;
            border: 2px solid rgba(232, 195, 158, 0.3);
            box-shadow: var(--shadow-lg);
        }

        .peruconnect-layout {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 50px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .peruconnect-copy h2 {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--white);
            margin-bottom: 16px;
            line-height: 1.18;
        }

        .peruconnect-copy h2 span {
            color: var(--beige-calido);
        }

        .peruconnect-copy p.lead {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.92);
            line-height: 1.7;
            margin-bottom: 32px;
        }

        .peruconnect-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 36px;
        }

        .detail-box {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            padding: 18px 22px;
            border-radius: var(--radius-md);
            border: 1px solid rgba(232, 195, 158, 0.25);
        }

        .detail-box strong {
            display: block;
            font-size: 0.85rem;
            color: var(--beige-calido);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 4px;
        }

        .detail-box span {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--white);
        }

        .peruconnect-card-image {
            position: relative;
            height: 380px;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: 0 16px 32px rgba(0,0,0,0.4);
            border: 2px solid rgba(232, 195, 158, 0.4);
        }

        .peruconnect-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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

            .mentoria-layout,
            .peruconnect-layout {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .peruconnect-wrap {
                padding: 36px;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 576px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }

            .actividades-hero {
                padding: 60px 0;
            }

            .mentoria-features-grid,
            .peruconnect-details {
                grid-template-columns: 1fr;
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
                    <a class="nav-link active" href="https://www.ipsaaperu.com/actividades/">Actividades</a>
                    <div class="submenu">
                        <a href="#mentoria-horizontes">Mentoría Horizontes</a>
                        <a href="#biblioteca-horizontes">Biblioteca Horizontes</a>
                        <a href="#webinars-bootcamps">Webinars y Bootcamps</a>
                        <a href="#peru-connect">Perú Connect 2026</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="https://www.ipsaaperu.com/recursos/">Recursos</a>
                    <div class="submenu">
                        <a href="https://www.ipsaaperu.com/recursos/#guias-postulacion">Guías de Postulación</a>
                        <a href="https://www.ipsaaperu.com/recursos/#modelos-ensayos">Modelos de Ensayos &amp; SOP</a>
                        <a href="https://www.ipsaaperu.com/recursos/#plantillas-cv">Plantillas de CV &amp; Cartas</a>
                        <a href="https://www.ipsaaperu.com/recursos/#becas-financiamiento">Becas &amp; Financiamiento</a>
                        <a href="https://www.ipsaaperu.com/recursos/#examenes-estandarizados">Exámenes Estandarizados</a>
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
        <!-- Actividades Hero Section -->
        <section class="actividades-hero">
            <div class="container">
                <div class="actividades-hero-layout">
                    <!-- Left Copy Column -->
                    <div class="actividades-hero-copy">
                        <span class="eyebrow eyebrow--light"><span class="ms" style="font-size:18px">event_note</span> Agenda IPSAA Global</span>
                        <h1>Iniciativas de <span>Impacto Educativo</span> e Investigación</h1>
                        <p class="lead">Impulsamos la formación académica de excelencia a través del Programa de Mentoría Horizontes, espacios prácticos de formación mediante Webinars y Bootcamps, y encuentros presenciales como Perú Connect.</p>

                        <div class="actividades-hero-actions">
                            <a href="#mentoria-horizontes" class="hero-btn hero-btn--primary">
                                Conoce Programa Horizontes <span class="ms">arrow_forward</span>
                            </a>
                            <a href="#peru-connect" class="hero-btn hero-btn--secondary">
                                <span class="ms">diversity_3</span> Perú Connect 2026
                            </a>
                        </div>
                    </div>

                    <!-- Right Hero Media Box -->
                    <div class="actividades-hero-media">
                        <div class="hero-media-card">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1000&q=80" alt="Mentoría y Actividades IPSAA" />
                        </div>
                        <div class="hero-floating-badge">
                            <div class="badge-icon-box">
                                <span class="ms" style="font-size:26px">school</span>
                            </div>
                            <div class="badge-info">
                                <strong>Programa Horizontes 2026</strong>
                                <span>Convocatoria de Mentorías Abierta</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Grid Statistics -->
                    <div class="actividades-hero-stats">
                        <div class="hero-stat-card">
                            <strong>150+</strong>
                            <span>Mentees Acompañados</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>80+</strong>
                            <span>Mentores Graduados</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>25+</strong>
                            <span>Webinars Realizados</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>100%</strong>
                            <span>Libre y Gratuito</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 1: Mentoría Horizontes -->
        <section class="actividades-section" id="mentoria-horizontes">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow"><span class="ms" style="font-size:18px">school</span> Acompañamiento 1 a 1</span>
                    <h2>Programa de Mentoría Horizontes</h2>
                    <p>Conectamos a profesionales e investigadores peruanos que preparan su postulación a maestrías y doctorados con mentores estudiantes o graduados en universidades top del mundo.</p>
                </div>

                <div class="mentoria-layout">
                    <div class="mentoria-copy">
                        <h3>Orientación estratégica entre pares sin sesgos</h3>
                        <p>El <strong>Programa Horizontes</strong> es la iniciativa insigne de IPSAA creada para democratizar la información sobre admisiones, becas de financiamiento y preparación de ensayos. Cada mentee es emparejado/a con un/a mentor/a de su área de conocimiento.</p>
                        <p>Priorizamos la participación de profesionales de regiones del Perú, garantizando que el talento de todo el país tenga acceso a una mentoría rigurosa y personalizada.</p>

                        <div class="mentoria-features-grid">
                            <div class="mentoria-feature-card">
                                <span class="ms">edit_note</span>
                                <h4>Revisión de Ensayos</h4>
                                <p>Retroalimentación sobre Statement of Purpose y Personal Statement.</p>
                            </div>
                            <div class="mentoria-feature-card">
                                <span class="ms">payments</span>
                                <h4>Estrategia de Becas</h4>
                                <p>Orientación para postular a Chevening, Fulbright, Pronabec y becas propias.</p>
                            </div>
                            <div class="mentoria-feature-card">
                                <span class="ms">record_voice_over</span>
                                <h4>Mock Interviews</h4>
                                <p>Simulaciones de entrevista de admisión con graduados del programa objetivo.</p>
                            </div>
                            <div class="mentoria-feature-card">
                                <span class="ms">verified_user</span>
                                <h4>100% Voluntario</h4>
                                <p>Sin ningún costo para los participantes seleccionados.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mentoria-media-box">
                        <img src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?auto=format&fit=crop&w=1000&q=80" alt="Sesión de Mentoría Horizontes" />
                        <div class="mentoria-badge">
                            <h4>Convocatoria Horizontes 2026</h4>
                            <p>Proceso de postulación abierto para Mentees y Mentores hasta el 30 de abril.</p>
                        </div>
                    </div>
                </div>

                <!-- Section 1B: Biblioteca de Recursos Horizontes -->
                <div class="biblioteca-wrap" id="biblioteca-horizontes">
                    <div class="biblioteca-header">
                        <div class="biblioteca-header-text">
                            <h3><span class="ms">folder_open</span> Biblioteca de Recursos Horizontes</h3>
                            <p>Repositorio de acceso libre con plantillas, guías de preparación y ejemplos reales de postulación exitosa.</p>
                        </div>
                        <a href="https://www.ipsaaperu.com/recursos/" class="hero-btn hero-btn--primary" style="font-size:0.88rem; padding:10px 20px;">
                            Ver todos los Recursos <span class="ms">arrow_forward</span>
                        </a>
                    </div>

                    <div class="recursos-grid">
                        <div class="recurso-card">
                            <div>
                                <span class="recurso-type-badge">Guía PDF</span>
                                <h4>Estructura para el Statement of Purpose (SOP)</h4>
                                <p>Guía paso a paso con la arquitectura narrativa recomendada para redactar un ensayo de propósito competitivo.</p>
                            </div>
                            <a href="#" onclick="alert('Descargando Guía SOP Horizontes...'); return false;" class="btn-download-recurso">
                                <span class="ms">download</span> Descargar Plantilla
                            </a>
                        </div>

                        <div class="recurso-card">
                            <div>
                                <span class="recurso-type-badge">Plantilla Excel</span>
                                <h4>Tracker de Postulaciones y Becas</h4>
                                <p>Hoja de cálculo diseñada para organizar requisitos, fechas límite, cartas de recomendación y costos de aplicación.</p>
                            </div>
                            <a href="#" onclick="alert('Descargando Tracker Excel...'); return false;" class="btn-download-recurso">
                                <span class="ms">download</span> Descargar Excel
                            </a>
                        </div>

                        <div class="recurso-card">
                            <div>
                                <span class="recurso-type-badge">Modelos de CV</span>
                                <h4>CV Académico Formato Harvard / Oxford</h4>
                                <p>Ejemplos adaptados de currículum vitae académico ajustados a los estándares de universidades de EE.UU. y Reino Unido.</p>
                            </div>
                            <a href="#" onclick="alert('Descargando Modelos de CV...'); return false;" class="btn-download-recurso">
                                <span class="ms">download</span> Descargar Ejemplos
                            </a>
                        </div>

                        <div class="recurso-card">
                            <div>
                                <span class="recurso-type-badge">Checklist PDF</span>
                                <h4>Checklist para Cartas de Recomendación</h4>
                                <p>Documento de orientación para orientar a tus recomendadores académicos o profesionales en la redacción de cartas.</p>
                            </div>
                            <a href="#" onclick="alert('Descargando Checklist de Recomendación...'); return false;" class="btn-download-recurso">
                                <span class="ms">download</span> Descargar Checklist
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Webinars & Bootcamps -->
        <section class="actividades-section actividades-section--alt" id="webinars-bootcamps">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow"><span class="ms" style="font-size:18px">video_camera_front</span> Capacitación Abierta</span>
                    <h2>Webinars y Bootcamps Académicos</h2>
                    <p>Espacios virtuales interactivos de formación donde ponentes de la Red IPSAA comparten herramientas prácticas sobre exámenes estandarizados, investigación y vida universitaria.</p>
                </div>

                <div class="webinars-grid">
                    <!-- Webinar 1 -->
                    <article class="webinar-card">
                        <div class="webinar-media">
                            <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=800&q=80" alt="Webinar sobre financiamiento" />
                            <span class="webinar-badge-track">Beca &amp; Financiamiento</span>
                        </div>
                        <div class="webinar-body">
                            <div class="webinar-date">
                                <span class="ms">calendar_today</span> Próximo: 18 de Mayo, 2026 · 19:00 PET
                            </div>
                            <h3>Estrategias Ganadoras para Becas Chevening y Fulbright</h3>
                            <p class="webinar-speaker">Ponentes: Ex-becarios Chevening en LSE y Fulbright en Columbia.</p>
                            <p class="webinar-desc">Análisis detallado de los criterios de selección, consejos para los ensayos de liderazgo y preparación para la fase de entrevistas de las becas internacionales más prestigiadas.</p>
                            <a href="#webinars-bootcamps" onclick="alert('Registro abriendo proximamente...'); return false;" class="webinar-cta">
                                Reservar Cupo Gratuito <span class="ms">arrow_forward</span>
                            </a>
                        </div>
                    </article>

                    <!-- Webinar 2 -->
                    <article class="webinar-card">
                        <div class="webinar-media">
                            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=80" alt="Bootcamp de Ensayos" />
                            <span class="webinar-badge-track">Bootcamp Práctico</span>
                        </div>
                        <div class="webinar-body">
                            <div class="webinar-date">
                                <span class="ms">calendar_today</span> Próximo: 05 de Junio, 2026 · 10:00 PET
                            </div>
                            <h3>Bootcamp Intensivo: Redacción de Ensayos Académicos</h3>
                            <p class="webinar-speaker">Tallerista: Sofía Quispe (MSc MIT) &amp; Carlos Mendoza (DPhil Oxford)</p>
                            <p class="webinar-desc">Taller interactivo de 3 horas con revisión en vivo de párrafos de introducción, hooks narrativos y alineación con las líneas de investigación de los programas.</p>
                            <a href="#webinars-bootcamps" onclick="alert('Registro abriendo proximamente...'); return false;" class="webinar-cta">
                                Reservar Cupo Gratuito <span class="ms">arrow_forward</span>
                            </a>
                        </div>
                    </article>

                    <!-- Webinar 3 -->
                    <article class="webinar-card">
                        <div class="webinar-media">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80" alt="Webinar GRE e Idiomas" />
                            <span class="webinar-badge-track">Exámenes de Admisión</span>
                        </div>
                        <div class="webinar-body">
                            <div class="webinar-date">
                                <span class="ms">play_circle</span> Grabación Disponible · Repositorio IPSAA
                            </div>
                            <h3>Dominando el GRE / TOEFL sin Pagar Cursos Costosos</h3>
                            <p class="webinar-speaker">Ponente: Equipo Académico IPSAA con puntajes top 5% GRE.</p>
                            <p class="webinar-desc">Planes de estudio autodidacta de 3 meses, recursos gratuitos recomendados y estrategias de manejo de tiempo durante la prueba computarizada.</p>
                            <a href="#webinars-bootcamps" onclick="alert('Accediendo a la grabacion...'); return false;" class="webinar-cta">
                                Ver Grabación en HD <span class="ms">play_arrow</span>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Section 3: Perú Connect 2026 -->
        <section class="actividades-section" id="peru-connect">
            <div class="container">
                <div class="peruconnect-wrap">
                    <div class="peruconnect-layout">
                        <div class="peruconnect-copy">
                            <span class="eyebrow eyebrow--light"><span class="ms" style="font-size:18px">groups</span> Encuentro Presencial Anual</span>
                            <h2>Perú Connect 2026: <span>Reconectando el Talento Global</span></h2>
                            <p class="lead">Un espacio presencial único que reúne a estudiantes, egresados en el extranjero, investigadora/es y líderes del sector público y privado en Lima para articular alianzas y proyectos estratégicos de desarrollo para el Perú.</p>

                            <div class="peruconnect-details">
                                <div class="detail-box">
                                    <strong>Fecha del Encuentro</strong>
                                    <span>18 y 19 de Diciembre, 2026</span>
                                </div>
                                <div class="detail-box">
                                    <strong>Sede Presencial</strong>
                                    <span>Lima · Perú (Campus Central)</span>
                                </div>
                                <div class="detail-box">
                                    <strong>Mesas Temáticas</strong>
                                    <span>Ciencia, Políticas, EdTech, IA</span>
                                </div>
                                <div class="detail-box">
                                    <strong>Modalidad</strong>
                                    <span>Presencial + Híbrido Global</span>
                                </div>
                            </div>

                            <a href="https://www.ipsaaperu.com/se-parte/" class="hero-btn hero-btn--primary">
                                Pre-Registrarme para Perú Connect 2026 <span class="ms">arrow_forward</span>
                            </a>
                        </div>

                        <div class="peruconnect-card-image">
                            <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1000&q=80" alt="Encuentro Perú Connect IPSAA" />
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
                    <img src="https://www.ipsaaperu.com/wp-content/uploads/2026/10/Logo-3_sinfondo.png" alt="IPSAA Logo" class="footer-logo-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" />
                    <div class="brand-text" style="display:none; color:var(--white); font-weight:800; font-size:1.6rem;">IPSAA<span style="color:var(--red-ipsaa)">.</span></div>
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
                    <a href="#mentoria-horizontes">Mentorías</a>
                    <a href="#biblioteca-horizontes">Biblioteca</a>
                    <a href="https://www.ipsaaperu.com/se-parte/">Sé parte</a>
                </div>
                <div class="footer-col">
                    <h4>Iniciativas</h4>
                    <a href="#mentoria-horizontes">Programa Horizontes</a>
                    <a href="#webinars-bootcamps">Webinars &amp; Bootcamps</a>
                    <a href="#peru-connect">Perú Connect 2026</a>
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

    <?php if (function_exists('wp_footer')) wp_footer(); ?>
</body>
</html>
