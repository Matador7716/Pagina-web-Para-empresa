<?php
/*
 Template Name: IPSAA Sé Parte
 Description: Página de involucramiento "Sé parte" para IPSAA (International Peruvian Students & Alumni Association) cubriendo modalidades de participación (Estudiantes, Mentores, Asociaciones, Voluntarios y Alianzas), beneficios de integrarse y formulario interactivo de registro.
*/
?>
<!DOCTYPE html>
<html <?php if (function_exists('language_attributes')) language_attributes(); else echo 'lang="es"'; ?>>
<head>
    <meta charset="<?php if (function_exists('bloginfo')) bloginfo('charset'); else echo 'UTF-8'; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sé Parte de IPSAA - Súmate a la Red Global del Talento Peruano</title>
    <meta name="description" content="Únete a la comunidad de IPSAA como estudiante, mentor/a, asociación aliada o voluntario/a. Transforma el acceso a la educación superior de excelencia y conecta con el desarrollo del Perú." />

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

        .nav-link--cta,
        .nav-link--cta.active {
            background: var(--red-ipsaa) !important;
            color: var(--white) !important;
            padding: 10px 22px !important;
            border-radius: 50px !important;
            font-weight: 700 !important;
            box-shadow: 0 4px 14px rgba(103, 0, 16, 0.28) !important;
        }

        .nav-link--cta:hover,
        .nav-link--cta.active:hover {
            background: var(--red-dark) !important;
            color: var(--beige-calido) !important;
            box-shadow: 0 6px 18px rgba(103, 0, 16, 0.38) !important;
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
        .separte-hero {
            background: linear-gradient(135deg, #380009 0%, #670010 50%, #4a000b 100%);
            color: var(--white);
            padding: 80px 0 90px;
            position: relative;
            overflow: hidden;
        }

        .separte-hero::before {
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

        .separte-hero-layout {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 50px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .separte-hero-copy {
            display: flex;
            flex-direction: column;
        }

        .separte-hero h1 {
            font-size: clamp(2.3rem, 4.2vw, 3.4rem);
            font-weight: 800;
            line-height: 1.16;
            margin-bottom: 22px;
            letter-spacing: -0.5px;
            color: var(--white);
            text-shadow: 0 2px 10px rgba(0,0,0,0.25);
        }

        .separte-hero h1 span {
            color: var(--beige-calido);
            position: relative;
            display: inline-block;
        }

        .separte-hero p.lead {
            font-size: clamp(1.05rem, 1.8vw, 1.2rem);
            color: rgba(255, 255, 255, 0.92);
            margin-bottom: 32px;
            font-weight: 300;
            line-height: 1.7;
            max-width: 660px;
        }

        .separte-hero-actions {
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
        .separte-hero-media {
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
        .separte-hero-stats {
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
        .separte-section {
            padding: 90px 0;
            position: relative;
        }

        .separte-section--alt {
            background-color: var(--beige-soft);
        }

        .separte-section--dark {
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

        .separte-section--dark .section-header h2 {
            color: var(--white);
        }

        .section-header p {
            font-size: 1.1rem;
            color: var(--text-muted);
            line-height: 1.7;
        }

        /* Modalidades de Participación */
        .modalidades-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 28px;
        }

        .modalidad-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(103, 0, 16, 0.08);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .modalidad-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-md);
            border-color: rgba(232, 195, 158, 0.6);
        }

        .modalidad-media {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .modalidad-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .modalidad-card:hover .modalidad-media img {
            transform: scale(1.06);
        }

        .modalidad-icon-badge {
            position: absolute;
            top: 16px;
            right: 16px;
            background: var(--red-ipsaa);
            color: var(--white);
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.25);
        }

        .modalidad-body {
            padding: 28px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .modalidad-body h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--navy-ipsaa);
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .modalidad-body p {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 24px;
            flex-grow: 1;
        }

        .btn-modalidad-cta {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: var(--red-ipsaa);
            color: var(--white);
            padding: 12px 24px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 700;
            transition: var(--transition);
            box-shadow: 0 4px 12px rgba(103, 0, 16, 0.2);
        }

        .btn-modalidad-cta:hover {
            background: var(--red-dark);
            color: var(--beige-calido);
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(103, 0, 16, 0.35);
        }

        /* Beneficios Section */
        .beneficios-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 28px;
        }

        .beneficio-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            padding: 32px 26px;
            border-radius: var(--radius-lg);
            border: 1px solid rgba(232, 195, 158, 0.25);
            transition: var(--transition);
        }

        .beneficio-card:hover {
            background: rgba(255, 255, 255, 0.14);
            border-color: var(--beige-calido);
            transform: translateY(-6px);
        }

        .beneficio-icon {
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background: rgba(232, 195, 158, 0.2);
            color: var(--beige-calido);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .beneficio-icon .ms {
            font-size: 28px;
        }

        .beneficio-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 12px;
        }

        .beneficio-card p {
            font-size: 0.92rem;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.6;
        }

        /* Interactive Registration Form Section */
        .form-registration-wrap {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 60px;
            align-items: center;
        }

        .form-info-text h3 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--navy-ipsaa);
            margin-bottom: 16px;
        }

        .form-info-text p {
            font-size: 1.05rem;
            color: var(--text-muted);
            line-height: 1.7;
            margin-bottom: 24px;
        }

        .form-card {
            background: var(--white);
            padding: 40px;
            border-radius: var(--radius-lg);
            border: 1px solid rgba(103, 0, 16, 0.1);
            box-shadow: var(--shadow-md);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--navy-ipsaa);
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 14px 18px;
            border-radius: var(--radius-sm);
            border: 1px solid rgba(0,0,0,0.15);
            background: #FAFAFA;
            color: var(--text-dark);
            font-family: var(--font-main);
            font-size: 0.95rem;
            outline: none;
            transition: var(--transition);
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--red-ipsaa);
            background: var(--white);
            box-shadow: 0 0 0 3px rgba(103, 0, 16, 0.1);
        }

        .btn-submit-registration {
            width: 100%;
            background: var(--red-ipsaa);
            color: var(--white);
            padding: 14px 28px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1rem;
            transition: var(--transition);
            box-shadow: 0 4px 14px rgba(103, 0, 16, 0.3);
            cursor: pointer;
        }

        .btn-submit-registration:hover {
            background: var(--red-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(103, 0, 16, 0.4);
        }

        .form-success-alert {
            display: none;
            margin-top: 16px;
            padding: 14px;
            background: rgba(16, 185, 129, 0.12);
            border: 1px solid #10B981;
            border-radius: var(--radius-sm);
            color: #065F46;
            font-size: 0.9rem;
            text-align: center;
            font-weight: 600;
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

            .separte-hero-layout,
            .form-registration-wrap {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .modalidades-grid {
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

            .separte-hero {
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
                    <a class="nav-link" href="http://localhost/IPSAA%20CUSCO/?page_id=8">Nosotros</a>
                    <div class="submenu">
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=8#quienes-somos">Quiénes somos</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=8#proposito-principios">Propósito y principios</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=8#nuestra-historia">Nuestra historia</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=8#el-equipo">El equipo</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=8#transparencia">Transparencia</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="http://localhost/IPSAA%20CUSCO/?page_id=10">Red IPSAA</a>
                    <div class="submenu">
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=10#presentacion-red">Presentación de la Red</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=10#directorio-asociaciones">Directorio de Asociaciones</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=10#beneficios-alianzas">Beneficios de articulación</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=10#sumar-asociacion">Sumar mi Asociación</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="http://localhost/IPSAA%20CUSCO/?page_id=12">Actividades</a>
                    <div class="submenu">
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=12#mentoria-horizontes">Mentoría Horizontes</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=12#biblioteca-horizontes">Biblioteca Horizontes</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=12#webinars-bootcamps">Webinars y Bootcamps</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=12#peru-connect">Perú Connect 2026</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="http://localhost/IPSAA%20CUSCO/?page_id=14">Recursos</a>
                    <div class="submenu">
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=14#guias-postulacion">Guías de Postulación</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=14#modelos-ensayos">Modelos de Ensayos &amp; SOP</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=14#plantillas-cv">Plantillas de CV &amp; Cartas</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=14#becas-financiamiento">Becas &amp; Financiamiento</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=14#examenes-estandarizados">Exámenes Estandarizados</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="http://localhost/IPSAA%20CUSCO/?page_id=16">Blog</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link nav-link--cta active" href="http://localhost/IPSAA%20CUSCO/?page_id=18">Sé parte</a>
                    <div class="submenu">
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=18#modalidades">Modalidades de Participación</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=18#beneficios">Beneficios de la Red</a>
                        <a href="http://localhost/IPSAA%20CUSCO/?page_id=18#formulario-registro">Formulario de Registro</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="separte-hero">
            <div class="container">
                <div class="separte-hero-layout">
                    <!-- Left Copy Column -->
                    <div class="separte-hero-copy">
                        <span class="eyebrow eyebrow--light"><span class="ms" style="font-size:18px">volunteer_activism</span> Suma tu Talento</span>
                        <h1>Uniendo Fuerzas para <span>Transformar Vidas</span> en el Perú</h1>
                        <p class="lead">Sé parte activa de la comunidad global IPSAA como postulante, mentor/a, asociación aliada, voluntario/a operativo o aliado institucional. Tu experiencia y vocación son el motor del cambio.</p>

                        <div class="separte-hero-actions">
                            <a href="#formulario-registro" class="hero-btn hero-btn--primary">
                                Registrarme Ahora <span class="ms">arrow_forward</span>
                            </a>
                            <a href="#modalidades" class="hero-btn hero-btn--secondary">
                                <span class="ms">explore</span> Ver Modalidades
                            </a>
                        </div>
                    </div>

                    <!-- Right Hero Media Box -->
                    <div class="separte-hero-media">
                        <div class="hero-media-card">
                            <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1000&q=80" alt="Comunidad de Voluntarios e Integrantes de IPSAA" />
                        </div>
                        <div class="hero-floating-badge">
                            <div class="badge-icon-box">
                                <span class="ms" style="font-size:26px">handshake</span>
                            </div>
                            <div class="badge-info">
                                <strong>Comunidad 100% Voluntaria</strong>
                                <span>Presentes en más de 15 países</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Grid Statistics -->
                    <div class="separte-hero-stats">
                        <div class="hero-stat-card">
                            <strong>500+</strong>
                            <span>Voluntarios y Miembros</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>15+</strong>
                            <span>Equipos de Trabajo</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>100%</strong>
                            <span>Inclusión Regional</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>10+</strong>
                            <span>Alianzas Universitarias</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 1: Modalidades de Participación -->
        <section class="separte-section" id="modalidades">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow"><span class="ms" style="font-size:18px">diversity_3</span> Elige tu Rol</span>
                    <h2>Modalidades para Sumarte a IPSAA</h2>
                    <p>Diseñamos distintos niveles de participación adaptados a tu etapa académica o disponibilidad de tiempo.</p>
                </div>

                <div class="modalidades-grid">
                    <!-- Modalidad 1: Mentores -->
                    <article class="modalidad-card">
                        <div class="modalidad-media">
                            <img src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?auto=format&fit=crop&w=800&q=80" alt="Ser Mentor/a IPSAA" />
                            <div class="modalidad-icon-badge"><span class="ms">school</span></div>
                        </div>
                        <div class="modalidad-body">
                            <h3>Sé Mentor/a en Programa Horizontes</h3>
                            <p>Si eres estudiante o egresado/a de posgrado en una universidad del exterior, acompaña voluntariamente a un/a profesional peruano/a en su proceso de postulación a becas y admisiones.</p>
                            <a href="#formulario-registro" onclick="selectRole('mentor')" class="btn-modalidad-cta">Postular como Mentor/a <span class="ms">arrow_forward</span></a>
                        </div>
                    </article>

                    <!-- Modalidad 2: Postulantes & Mentees -->
                    <article class="modalidad-card">
                        <div class="modalidad-media">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80" alt="Postular como Mentee" />
                            <div class="modalidad-icon-badge"><span class="ms">person_search</span></div>
                        </div>
                        <div class="modalidad-body">
                            <h3>Recibe Acompañamiento como Mentee</h3>
                            <p>Si planeas postular a una maestría o doctorado en el extranjero en los próximos 12 meses, regístrate para acceder a mentorías 1 a 1, revisión de ensayos y webinars de orientación.</p>
                            <a href="#formulario-registro" onclick="selectRole('mentee')" class="btn-modalidad-cta">Solicitar Mentoría <span class="ms">arrow_forward</span></a>
                        </div>
                    </article>

                    <!-- Modalidad 3: Voluntariado Operativo -->
                    <article class="modalidad-card">
                        <div class="modalidad-media">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Voluntariado Operativo" />
                            <div class="modalidad-icon-badge"><span class="ms">groups</span></div>
                        </div>
                        <div class="modalidad-body">
                            <h3>Voluntariado en Equipos IPSAA</h3>
                            <p>Intégrate a nuestros equipos centrales de Comunicaciones, Gestión de Comunidad, Alianzas Estratégicas, Desarrollo Web o Contenido Científico para dinamizar la red.</p>
                            <a href="#formulario-registro" onclick="selectRole('voluntario')" class="btn-modalidad-cta">Unirme al Equipo <span class="ms">arrow_forward</span></a>
                        </div>
                    </article>

                    <!-- Modalidad 4: Asociaciones & Alianzas -->
                    <article class="modalidad-card">
                        <div class="modalidad-media">
                            <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=800&q=80" alt="Asociaciones y Alianzas" />
                            <div class="modalidad-icon-badge"><span class="ms">hub</span></div>
                        </div>
                        <div class="modalidad-body">
                            <h3>Asociaciones &amp; Aliados Institucionales</h3>
                            <p>Representa a un club o asociación de estudiantes peruanos en el extranjero, o conecta tu institución pública/privada con el talento de la diáspora peruana.</p>
                            <a href="#formulario-registro" onclick="selectRole('alianza')" class="btn-modalidad-cta">Registrar Alianza <span class="ms">arrow_forward</span></a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Section 2: Beneficios de Integrarse -->
        <section class="separte-section separte-section--dark" id="beneficios">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow eyebrow--light"><span class="ms" style="font-size:18px">verified</span> ¿Por qué sumarte?</span>
                    <h2>Beneficios de Pertenecer a la Red IPSAA</h2>
                    <p>Formar parte de nuestra red te conecta con profesionales de alto nivel e impulsa tu crecimiento profesional y vocación social.</p>
                </div>

                <div class="beneficios-grid">
                    <div class="beneficio-card">
                        <div class="beneficio-icon"><span class="ms">public</span></div>
                        <h3>Networking Global de Excelencia</h3>
                        <p>Acceso directo a una red viva de peruanos/as graduados y estudiantes en instituciones como Harvard, Oxford, MIT, Stanford, Tokio, Madrid y más.</p>
                    </div>

                    <div class="beneficio-card">
                        <div class="beneficio-icon"><span class="ms">workspace_premium</span></div>
                        <h3>Certificación Institucional</h3>
                        <p>Reconocimiento oficial emitido por IPSAA respaldando tu valiosa contribución voluntaria como mentor/a, tallerista o coordinador/a de equipo.</p>
                    </div>

                    <div class="beneficio-card">
                        <div class="beneficio-icon"><span class="ms">lightbulb</span></div>
                        <h3>Desarrollo de Habilidades de Liderazgo</h3>
                        <p>Oportunidad de liderar proyectos de impacto nacional, organizar encuentros como Perú Connect y gestionar comunidades multidisciplinarias.</p>
                    </div>

                    <div class="beneficio-card">
                        <div class="beneficio-icon"><span class="ms">volunteer_activism</span></div>
                        <h3>Impacto Directo en el Perú</h3>
                        <p>Moviliza tu conocimiento para acompañar el talento peruano sin distinción de origen geográfico o condición socioeconómica.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Formulario Interactivo de Registro -->
        <section class="separte-section" id="formulario-registro">
            <div class="container">
                <div class="form-registration-wrap">
                    <div class="form-info-text">
                        <span class="eyebrow"><span class="ms" style="font-size:18px">how_to_reg</span> Formulario de Registro</span>
                        <h3>¿Listo/a para dar el primer paso con IPSAA?</h3>
                        <p>Completa tus datos e indícanos tu modalidad de interés. Nuestro equipo de Gestión de Comunidad revisará tu perfil y te contactará a la brevedad para orientar tu integración.</p>

                        <div style="background: var(--white); padding: 24px; border-radius: var(--radius-md); border-left: 5px solid var(--red-ipsaa); box-shadow: var(--shadow-sm); margin-top: 24px;">
                            <p style="font-size: 0.95rem; font-weight: 600; color: var(--navy-ipsaa); margin-bottom: 0;">
                                “Creemos en el poder transformador de las redes solidarias de conocimiento para reconectar el talento global con el desarrollo de nuestro país.”
                            </p>
                        </div>
                    </div>

                    <div class="form-card">
                        <form onsubmit="handleRegistrationSubmit(event)">
                            <div class="form-group">
                                <label for="reg-name">Nombre Completo *</label>
                                <input id="reg-name" type="text" placeholder="Tu nombre y apellidos" required />
                            </div>

                            <div class="form-group">
                                <label for="reg-email">Correo Electrónico *</label>
                                <input id="reg-email" type="email" placeholder="nombre@correo.com" required />
                            </div>

                            <div class="form-group">
                                <label for="reg-role">Modalidad de Interés *</label>
                                <select id="reg-role" required>
                                    <option value="" disabled selected>Selecciona una modalidad</option>
                                    <option value="mentor">Quiero ser Mentor/a (Estudiante o Alumni en el exterior)</option>
                                    <option value="mentee">Quiero ser Mentee (Postulante a maestrías/doctorados)</option>
                                    <option value="voluntario">Voluntariado en Equipos IPSAA (Comunicaciones, Web, Eventos)</option>
                                    <option value="alianza">Asociación / Aliado Institucional</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="reg-univ">Universidad o Institución Actual</label>
                                <input id="reg-univ" type="text" placeholder="Ej: Universidad de Oxford / PUCP / UNMSM" />
                            </div>

                            <div class="form-group">
                                <label for="reg-country">País de Residencia *</label>
                                <input id="reg-country" type="text" placeholder="Ej: Perú, Estados Unidos, Reino Unido, Japón..." required />
                            </div>

                            <div class="form-group">
                                <label for="reg-comments">¿Por qué deseas sumarte a IPSAA? (Opcional)</label>
                                <textarea id="reg-comments" rows="3" placeholder="Cuéntanos brevemente tus expectativas o interés..."></textarea>
                            </div>

                            <button type="submit" class="btn-submit-registration">Enviar Registro a la Red IPSAA</button>

                            <div id="reg-success-msg" class="form-success-alert" role="status">
                                ¡Gracias! Recibimos tu solicitud para ser parte de IPSAA. Te contactaremos por correo muy pronto.
                            </div>
                        </form>
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
                    <a href="#modalidades">Ser Mentor/a</a>
                    <a href="#modalidades">Ser Mentee</a>
                    <a href="#formulario-registro">Sé parte</a>
                </div>
                <div class="footer-col">
                    <h4>Iniciativas</h4>
                    <a href="#beneficios">Beneficios de la Red</a>
                    <a href="#formulario-registro">Voluntariado</a>
                    <a href="http://localhost/IPSAA%20CUSCO/?page_id=12#peru-connect">Perú Connect 2026</a>
                </div>
                <div class="footer-col">
                    <h4>Contacto</h4>
                    <a href="#formulario-registro">Escríbenos</a>
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

    <!-- Interactive Script -->
    <script>
        function selectRole(roleValue) {
            const selectEl = document.getElementById('reg-role');
            if (selectEl) {
                selectEl.value = roleValue;
            }
            const formSection = document.getElementById('formulario-registro');
            if (formSection) {
                formSection.scrollIntoView({ behavior: 'smooth' });
            }
        }

        function handleRegistrationSubmit(e) {
            e.preventDefault();
            const msg = document.getElementById('reg-success-msg');
            if (msg) {
                msg.style.display = 'block';
                e.target.reset();
            }
        }
    </script>

    <?php if (function_exists('wp_footer')) wp_footer(); ?>
</body>
</html>
