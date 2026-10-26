<?php
/*
 Template Name: IPSAA Red
 Description: Página institucional "Red IPSAA" para IPSAA (International Peruvian Students & Alumni Association) con presentación y directorio de asociaciones de estudiantes y egresados peruanos en el mundo.
*/
?>
<!DOCTYPE html>
<html <?php if (function_exists('language_attributes')) language_attributes(); else echo 'lang="es"'; ?>>
<head>
    <meta charset="<?php if (function_exists('bloginfo')) bloginfo('charset'); else echo 'UTF-8'; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red IPSAA - Directorio Global de Asociaciones | International Peruvian Students &amp; Alumni Association</title>
    <meta name="description" content="Explora la Red IPSAA: directorio y plataforma de articulación de asociaciones de estudiantes y egresados peruanos en universidades del mundo." />

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

        /* Premium Split Hero Section */
        .red-hero {
            background: linear-gradient(135deg, #380009 0%, #670010 50%, #4a000b 100%);
            color: var(--white);
            padding: 80px 0 90px;
            position: relative;
            overflow: hidden;
        }

        .red-hero::before {
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

        .red-hero::after {
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

        .red-hero-layout {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 50px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .red-hero-copy {
            display: flex;
            flex-direction: column;
        }

        .red-hero h1 {
            font-size: clamp(2.3rem, 4.2vw, 3.4rem);
            font-weight: 800;
            line-height: 1.16;
            margin-bottom: 22px;
            letter-spacing: -0.5px;
            color: var(--white);
            text-shadow: 0 2px 10px rgba(0,0,0,0.25);
        }

        .red-hero h1 span {
            color: var(--beige-calido);
            position: relative;
            display: inline-block;
        }

        .red-hero p.lead {
            font-size: clamp(1.05rem, 1.8vw, 1.2rem);
            color: rgba(255, 255, 255, 0.92);
            margin-bottom: 32px;
            font-weight: 300;
            line-height: 1.7;
            max-width: 660px;
        }

        .red-hero-actions {
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
        .red-hero-media {
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
        .red-hero-stats {
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
        .red-section {
            padding: 90px 0;
            position: relative;
        }

        .red-section--alt {
            background-color: var(--beige-soft);
        }

        .red-section--dark {
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

        .red-section--dark .section-header h2 {
            color: var(--white);
        }

        .section-header p {
            font-size: 1.1rem;
            color: var(--text-muted);
            line-height: 1.7;
        }

        .red-section--dark .section-header p {
            color: rgba(255, 255, 255, 0.85);
        }

        /* Section 1: Presentación de la Red */
        .presentacion-red-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 60px;
            align-items: center;
        }

        .presentacion-red-text h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--red-ipsaa);
            margin-bottom: 18px;
            line-height: 1.3;
        }

        .presentacion-red-text p {
            font-size: 1.05rem;
            color: var(--text-dark);
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .presentacion-red-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 28px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            background: var(--white);
            padding: 16px;
            border-radius: var(--radius-sm);
            border: 1px solid rgba(103, 0, 16, 0.08);
            box-shadow: var(--shadow-sm);
        }

        .feature-item .ms {
            color: var(--red-ipsaa);
            font-size: 28px;
            flex-shrink: 0;
        }

        .feature-item h4 {
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--navy-ipsaa);
            margin-bottom: 4px;
        }

        .feature-item p {
            font-size: 0.85rem;
            color: var(--text-muted);
            line-height: 1.4;
            margin-bottom: 0;
        }

        .presentacion-red-image-box {
            position: relative;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            height: 480px;
        }

        .presentacion-red-image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .presentacion-red-badge {
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

        .presentacion-red-badge h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--beige-calido);
            margin-bottom: 4px;
        }

        .presentacion-red-badge p {
            font-size: 0.88rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 0;
        }

        /* Section 2: Directorio de Asociaciones */
        .directorio-filter {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 44px;
        }

        .filter-btn {
            padding: 10px 22px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            background: var(--white);
            color: var(--navy-ipsaa);
            border: 1px solid rgba(103, 0, 16, 0.15);
            transition: var(--transition);
            cursor: pointer;
        }

        .filter-btn:hover, .filter-btn.active {
            background: var(--red-ipsaa);
            color: var(--white);
            border-color: var(--red-ipsaa);
            box-shadow: 0 4px 14px rgba(103, 0, 16, 0.25);
        }

        .asociaciones-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 32px;
        }

        .asociacion-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(103, 0, 16, 0.08);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .asociacion-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-md);
            border-color: rgba(232, 195, 158, 0.6);
        }

        .asociacion-header {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .asociacion-header img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .asociacion-card:hover .asociacion-header img {
            transform: scale(1.06);
        }

        .asociacion-region-tag {
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
        }

        .asociacion-body {
            padding: 28px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .asociacion-meta {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.82rem;
            color: var(--text-muted);
            margin-bottom: 10px;
            font-weight: 500;
        }

        .asociacion-meta .ms {
            font-size: 18px;
            color: var(--red-ipsaa);
        }

        .asociacion-body h3 {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--navy-ipsaa);
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .asociacion-univ {
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--red-ipsaa);
            margin-bottom: 14px;
        }

        .asociacion-desc {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 24px;
            flex-grow: 1;
        }

        .asociacion-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 18px;
            border-top: 1px solid rgba(0,0,0,0.06);
        }

        .asociacion-members {
            font-size: 0.82rem;
            font-weight: 600;
            color: var(--navy-ipsaa);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .asociacion-members .ms {
            font-size: 18px;
            color: var(--red-ipsaa);
        }

        .asociacion-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--red-ipsaa);
            transition: var(--transition);
        }

        .asociacion-link:hover {
            color: var(--red-dark);
            transform: translateX(3px);
        }

        /* Section 3: Beneficios de la Articulación */
        .beneficios-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
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

        /* Section 4: Registro / Sumar Asociación */
        .sumar-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 60px;
            align-items: center;
        }

        .sumar-info h3 {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--navy-ipsaa);
            margin-bottom: 16px;
        }

        .sumar-info p {
            font-size: 1.05rem;
            color: var(--text-muted);
            line-height: 1.7;
            margin-bottom: 24px;
        }

        .sumar-steps {
            list-style: none;
        }

        .sumar-steps li {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 20px;
        }

        .step-num {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--red-ipsaa);
            color: var(--white);
            font-weight: 800;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .step-text h4 {
            font-size: 1rem;
            font-weight: 700;
            color: var(--navy-ipsaa);
            margin-bottom: 4px;
        }

        .step-text p {
            font-size: 0.88rem;
            color: var(--text-muted);
            margin-bottom: 0;
        }

        .sumar-form-card {
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

        .btn-submit-association {
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

        .btn-submit-association:hover {
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

            .presentacion-red-grid,
            .sumar-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .asociaciones-grid {
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

            .red-hero {
                padding: 60px 0;
            }

            .presentacion-red-features {
                grid-template-columns: 1fr;
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
                    <a class="nav-link active" href="http://localhost/IPSAA%20CUSCO/?page_id=10">Red IPSAA</a>
                    <div class="submenu">
                        <a href="#presentacion-red">Presentación de la Red</a>
                        <a href="#directorio-asociaciones">Directorio de Asociaciones</a>
                        <a href="#beneficios-alianzas">Beneficios de articulación</a>
                        <a href="#sumar-asociacion">Sumar mi Asociación</a>
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
                    <a class="nav-link nav-link--cta" href="http://localhost/IPSAA%20CUSCO/?page_id=18">Sé parte</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <!-- Red Hero Section -->
        <section class="red-hero">
            <div class="container">
                <div class="red-hero-layout">
                    <!-- Left Copy Column -->
                    <div class="red-hero-copy">
                        <span class="eyebrow eyebrow--light"><span class="ms" style="font-size:18px">hub</span> Ecosistema Institucional</span>
                        <h1>Red IPSAA: <span>Articulación Global</span> de Asociaciones Peruanas</h1>
                        <p class="lead">Conectamos a las asociaciones de estudiantes y egresados peruanos en las universidades más prestigiosas de Norteamérica, Europa, Asia y Latinoamérica para potenciar iniciativas conjuntas y acelerar el desarrollo del Perú.</p>

                        <div class="red-hero-actions">
                            <a href="#directorio-asociaciones" class="hero-btn hero-btn--primary">
                                Explorar Directorio <span class="ms">arrow_forward</span>
                            </a>
                            <a href="#sumar-asociacion" class="hero-btn hero-btn--secondary">
                                <span class="ms">group_add</span> Sumar mi Asociación
                            </a>
                        </div>
                    </div>

                    <!-- Right Hero Media Box -->
                    <div class="red-hero-media">
                        <div class="hero-media-card">
                            <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1000&q=80" alt="Directorio de Asociaciones de la Red IPSAA" />
                        </div>
                        <div class="hero-floating-badge">
                            <div class="badge-icon-box">
                                <span class="ms" style="font-size:26px">travel_explore</span>
                            </div>
                            <div class="badge-info">
                                <strong>Directorio Oficial IPSAA</strong>
                                <span>Alianzas activas en 4 continentes</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Grid Statistics -->
                    <div class="red-hero-stats">
                        <div class="hero-stat-card">
                            <strong>12+</strong>
                            <span>Asociaciones Registradas</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>18+</strong>
                            <span>Universidades Top</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>600+</strong>
                            <span>Estudiantes y Alumni</span>
                        </div>
                        <div class="hero-stat-card">
                            <strong>4</strong>
                            <span>Continentes Conectados</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 1: Presentación de la Red IPSAA -->
        <section class="red-section" id="presentacion-red">
            <div class="container">
                <div class="presentacion-red-grid">
                    <div class="presentacion-red-text">
                        <span class="eyebrow"><span class="ms" style="font-size:18px">diversity_3</span> Plataforma de Integración</span>
                        <h3>Una alianza autónoma de comunidades peruanas universitarias</h3>
                        <p>La <strong>Red IPSAA</strong> agrupa a las agrupaciones oficiales de estudiantes de posgrado, pregrado y redes de alumni peruanos constituidas en universidades líderes del exterior. Funcionamos como una federación colaborativa que respeta la autonomía de cada asociación mientras multiplica su impacto institucional.</p>
                        <p>Facilitamos el intercambio de buenas prácticas, organizamos seminarios académicos binacionales y ofrecemos un punto de contacto único para instituciones del Estado peruano, empresas y organizaciones civiles que buscan colaborar con la diáspora académica.</p>

                        <div class="presentacion-red-features">
                            <div class="feature-item">
                                <span class="ms">share</span>
                                <div>
                                    <h4>Difusión Multiplicada</h4>
                                    <p>Difundimos eventos y convocatorias en todos los nodos globales de la Red.</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <span class="ms">handshake</span>
                                <div>
                                    <h4>Alianzas Estratégicas</h4>
                                    <p>Canalizamos oportunidades de proyectos de investigación y financiamiento.</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <span class="ms">school</span>
                                <div>
                                    <h4>Mentorías Inter-Red</h4>
                                    <p>Conectamos postulantes peruano/as con miembros de las asociaciones según su disciplina.</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <span class="ms">hub</span>
                                <div>
                                    <h4>Representatividad</h4>
                                    <p>Voz unificada ante organismos de cooperación y desarrollo educativo.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="presentacion-red-image-box">
                        <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?auto=format&fit=crop&w=1000&q=80" alt="Conexión global de la Red IPSAA" />
                        <div class="presentacion-red-badge">
                            <h4>Red de Redes Institucionales</h4>
                            <p>Democratizando el acceso al conocimiento y oportunidades académicas de alto impacto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Directorio de Asociaciones -->
        <section class="red-section red-section--alt" id="directorio-asociaciones">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow"><span class="ms" style="font-size:18px">menu_book</span> Directorio Oficial</span>
                    <h2>Asociaciones Integrantes de la Red IPSAA</h2>
                    <p>Conoce las agrupaciones estudiantiles y de graduados peruanos articuladas en nuestra red global.</p>
                </div>

                <!-- Region Filters -->
                <div class="directorio-filter">
                    <button class="filter-btn active" onclick="filterAsociaciones('todas', this)">Todas las Regiones</button>
                    <button class="filter-btn" onclick="filterAsociaciones('norteamerica', this)">Norteamérica</button>
                    <button class="filter-btn" onclick="filterAsociaciones('europa', this)">Europa &amp; UK</button>
                    <button class="filter-btn" onclick="filterAsociaciones('asia', this)">Asia &amp; Oceanía</button>
                    <button class="filter-btn" onclick="filterAsociaciones('latam', this)">Latinoamérica</button>
                </div>

                <!-- Associations Grid -->
                <div class="asociaciones-grid">
                    <!-- Association 1: Harvard Peru Student Association -->
                    <article class="asociacion-card" data-region="norteamerica">
                        <div class="asociacion-header">
                            <img src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=800&q=80" alt="Harvard University Campus" />
                            <span class="asociacion-region-tag">Norteamérica</span>
                        </div>
                        <div class="asociacion-body">
                            <div class="asociacion-meta">
                                <span class="ms">location_on</span> Cambridge, Massachusetts · Estados Unidos
                            </div>
                            <h3>Peruvian Students Association at Harvard (HPSA)</h3>
                            <span class="asociacion-univ">Harvard University</span>
                            <p class="asociacion-desc">Comunidad de estudiantes de posgrado en HKS, HBS, HGSE y GSAS dedicados a promover la cultura peruana, el debate sobre políticas públicas y el apoyo a postulantes.</p>
                            <div class="asociacion-footer">
                                <span class="asociacion-members"><span class="ms">group</span> 45+ Miembros</span>
                                <a href="https://www.harvard.edu" target="_blank" rel="noopener" class="asociacion-link">Visitar asociación <span class="ms" style="font-size:16px">open_in_new</span></a>
                            </div>
                        </div>
                    </article>

                    <!-- Association 2: Oxford Peruvian Society -->
                    <article class="asociacion-card" data-region="europa">
                        <div class="asociacion-header">
                            <img src="https://images.unsplash.com/photo-1580674684081-7617fbf3d745?auto=format&fit=crop&w=800&q=80" alt="University of Oxford" />
                            <span class="asociacion-region-tag">Europa &amp; UK</span>
                        </div>
                        <div class="asociacion-body">
                            <div class="asociacion-meta">
                                <span class="ms">location_on</span> Oxford · Reino Unido
                            </div>
                            <h3>Oxford University Peruvian Society (OUPS)</h3>
                            <span class="asociacion-univ">University of Oxford</span>
                            <p class="asociacion-desc">Red de graduados e investigadores peruanos en la Universidad de Oxford orientada al intercambio académico, investigación en desarrollo sostenible y mentorías.</p>
                            <div class="asociacion-footer">
                                <span class="asociacion-members"><span class="ms">group</span> 30+ Miembros</span>
                                <a href="https://www.ox.ac.uk" target="_blank" rel="noopener" class="asociacion-link">Visitar asociación <span class="ms" style="font-size:16px">open_in_new</span></a>
                            </div>
                        </div>
                    </article>

                    <!-- Association 3: MIT Peru Club -->
                    <article class="asociacion-card" data-region="norteamerica">
                        <div class="asociacion-header">
                            <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=800&q=80" alt="MIT Campus" />
                            <span class="asociacion-region-tag">Norteamérica</span>
                        </div>
                        <div class="asociacion-body">
                            <div class="asociacion-meta">
                                <span class="ms">location_on</span> Cambridge, Massachusetts · Estados Unidos
                            </div>
                            <h3>Peruvian Association at MIT (Club Perú MIT)</h3>
                            <span class="asociacion-univ">Massachusetts Institute of Technology</span>
                            <p class="asociacion-desc">Agrupación de estudiantes e investigadores en ingeniería, ciencias y administración enfocada en transferencias tecnológicas y divulgación científica para el Perú.</p>
                            <div class="asociacion-footer">
                                <span class="asociacion-members"><span class="ms">group</span> 25+ Miembros</span>
                                <a href="https://www.mit.edu" target="_blank" rel="noopener" class="asociacion-link">Visitar asociación <span class="ms" style="font-size:16px">open_in_new</span></a>
                            </div>
                        </div>
                    </article>

                    <!-- Association 4: Asociación de Peruanos en España Académica -->
                    <article class="asociacion-card" data-region="europa">
                        <div class="asociacion-header">
                            <img src="https://images.unsplash.com/photo-1543783207-ec64e4d95325?auto=format&fit=crop&w=800&q=80" alt="Madrid Universidad" />
                            <span class="asociacion-region-tag">Europa &amp; UK</span>
                        </div>
                        <div class="asociacion-body">
                            <div class="asociacion-meta">
                                <span class="ms">location_on</span> Madrid &amp; Barcelona · España
                            </div>
                            <h3>Red de Estudiantes Peruanos en España (REPE)</h3>
                            <span class="asociacion-univ">UCM, UB, UAB, IE University</span>
                            <p class="asociacion-desc">Asociación multidisciplinaria que conecta a universitarios y posgraduados peruanos en instituciones de enseñanza superior en territorio español.</p>
                            <div class="asociacion-footer">
                                <span class="asociacion-members"><span class="ms">group</span> 120+ Miembros</span>
                                <a href="https://www.ucm.es" target="_blank" rel="noopener" class="asociacion-link">Visitar asociación <span class="ms" style="font-size:16px">open_in_new</span></a>
                            </div>
                        </div>
                    </article>

                    <!-- Association 5: Peru Students in Japan -->
                    <article class="asociacion-card" data-region="asia">
                        <div class="asociacion-header">
                            <img src="https://images.unsplash.com/photo-1503899036084-c55cdd92da26?auto=format&fit=crop&w=800&q=80" alt="Tokyo Japan Campus" />
                            <span class="asociacion-region-tag">Asia &amp; Oceanía</span>
                        </div>
                        <div class="asociacion-body">
                            <div class="asociacion-meta">
                                <span class="ms">location_on</span> Tokio &amp; Kioto · Japón
                            </div>
                            <h3>Peruvian Scholars in Japan (PSJ)</h3>
                            <span class="asociacion-univ">University of Tokyo, Kyoto University, TITech</span>
                            <p class="asociacion-desc">Comunidad de becarios MEXT e investigadores peruanos en universidades japonesas dedicados a la innovación sísmica, robótica y cooperación bilaterial.</p>
                            <div class="asociacion-footer">
                                <span class="asociacion-members"><span class="ms">group</span> 35+ Miembros</span>
                                <a href="https://www.u-tokyo.ac.jp" target="_blank" rel="noopener" class="asociacion-link">Visitar asociación <span class="ms" style="font-size:16px">open_in_new</span></a>
                            </div>
                        </div>
                    </article>

                    <!-- Association 6: Red de Alumni en Latinoamérica -->
                    <article class="asociacion-card" data-region="latam">
                        <div class="asociacion-header">
                            <img src="https://images.unsplash.com/photo-1589561253898-768105ca91a8?auto=format&fit=crop&w=800&q=80" alt="Latam Campus" />
                            <span class="asociacion-region-tag">Latinoamérica</span>
                        </div>
                        <div class="asociacion-body">
                            <div class="asociacion-meta">
                                <span class="ms">location_on</span> Ciudad de México &amp; Santiago · Chile / México
                            </div>
                            <h3>Asociación de Becarios Peruanos en Latinoamérica (ABPEL)</h3>
                            <span class="asociacion-univ">UNAM, TEC de Monterrey, UC Chile</span>
                            <p class="asociacion-desc">Colectivo de estudiantes e investigadores peruanos articulando iniciativas de desarrollo sostenible e integración regional en América Latina.</p>
                            <div class="asociacion-footer">
                                <span class="asociacion-members"><span class="ms">group</span> 50+ Miembros</span>
                                <a href="https://www.unam.mx" target="_blank" rel="noopener" class="asociacion-link">Visitar asociación <span class="ms" style="font-size:16px">open_in_new</span></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Section 3: Beneficios de la Articulación -->
        <section class="red-section red-section--dark" id="beneficios-alianzas">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow eyebrow--light"><span class="ms" style="font-size:18px">workspace_premium</span> Valor Agregado</span>
                    <h2>Beneficios de Formar Parte de la Red IPSAA</h2>
                    <p>Potenciamos a cada asociación aliada mediante herramientas compartidas y amplificación de alcance institucional.</p>
                </div>

                <div class="beneficios-grid">
                    <div class="beneficio-card">
                        <div class="beneficio-icon">
                            <span class="ms">campaign</span>
                        </div>
                        <h3>Alcance Global Garantizado</h3>
                        <p>Tus convocatorias, webinars y comunicados oficiales son difundidos a través de nuestros canales centrales de alto alcance en más de 15 países.</p>
                    </div>

                    <div class="beneficio-card">
                        <div class="beneficio-icon">
                            <span class="ms">diversity_1</span>
                        </div>
                        <h3>Acceso a la Red de Mentores</h3>
                        <p>Tus miembros pueden integrarse como mentores del Programa Horizontes o recibir capacitación exclusiva sobre liderazgo y gestión de proyectos.</p>
                    </div>

                    <div class="beneficio-card">
                        <div class="beneficio-icon">
                            <span class="ms">account_tree</span>
                        </div>
                        <h3>Proyectos Inter-Asociaciones</h3>
                        <p>Facilitamos co-organización de congresos, simposios y mesas de trabajo temáticas con grupos peruanos de otras universidades de prestigio.</p>
                    </div>

                    <div class="beneficio-card">
                        <div class="beneficio-icon">
                            <span class="ms">verified</span>
                        </div>
                        <h3>Respaldo Institucional</h3>
                        <p>Forma parte de una federación reconocida y formalizada para postular a fondos de cooperación internacional y convenios en el Perú.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Sumar a tu Asociación -->
        <section class="red-section" id="sumar-asociacion">
            <div class="container">
                <div class="sumar-grid">
                    <div class="sumar-info">
                        <span class="eyebrow"><span class="ms" style="font-size:18px">group_add</span> Registro Abierto</span>
                        <h3>¿Conduces una asociación o club peruano en el extranjero?</h3>
                        <p>Si eres parte de la directiva de una agrupación de estudiantes o egresados peruanos en tu universidad, te invitamos a sumar tu organización a la Red IPSAA.</p>

                        <ul class="sumar-steps">
                            <li>
                                <div class="step-num">1</div>
                                <div class="step-text">
                                    <h4>Completa el formulario de registro</h4>
                                    <p>Envía los datos básicos de tu asociación y punto de contacto.</p>
                                </div>
                            </li>
                            <li>
                                <div class="step-num">2</div>
                                <div class="step-text">
                                    <h4>Reunión de articulación corta</h4>
                                    <p>Un miembro del equipo directivo de IPSAA agendará una llamada informativa.</p>
                                </div>
                            </li>
                            <li>
                                <div class="step-num">3</div>
                                <div class="step-text">
                                    <h4>Incorporación al Directorio Oficial</h4>
                                    <p>Tu asociación figurará en la Red y comenzará a participar en las coordinaciones globales.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="sumar-form-card">
                        <form onsubmit="handleAssociationSubmit(event)">
                            <div class="form-group">
                                <label for="assoc-name">Nombre de la Asociación / Club *</label>
                                <input id="assoc-name" type="text" placeholder="Ej: Peruvian Students at Harvard" required />
                            </div>

                            <div class="form-group">
                                <label for="assoc-univ">Universidad e Institución *</label>
                                <input id="assoc-univ" type="text" placeholder="Ej: Harvard University" required />
                            </div>

                            <div class="form-group">
                                <label for="assoc-region">Región / País *</label>
                                <select id="assoc-region" required>
                                    <option value="" disabled selected>Selecciona una región</option>
                                    <option value="norteamerica">Norteamérica (EE.UU. / Canadá)</option>
                                    <option value="europa">Europa &amp; Reino Unido</option>
                                    <option value="asia">Asia &amp; Oceanía</option>
                                    <option value="latam">Latinoamérica</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="assoc-contact">Nombre del Representante / Cargo *</label>
                                <input id="assoc-contact" type="text" placeholder="Tu nombre y cargo (Ej: Presidente/a)" required />
                            </div>

                            <div class="form-group">
                                <label for="assoc-email">Correo de Contacto Oficial *</label>
                                <input id="assoc-email" type="email" placeholder="contacto@asociacion.org" required />
                            </div>

                            <div class="form-group">
                                <label for="assoc-desc">Breve descripción de la asociación</label>
                                <textarea id="assoc-desc" rows="3" placeholder="Comenta brevemente sobre los miembros y objetivos de tu asociación..."></textarea>
                            </div>

                            <button type="submit" class="btn-submit-association">Solicitar Integración a la Red IPSAA</button>

                            <div id="assoc-success-msg" class="form-success-alert" role="status">
                                ¡Gracias! Recibimos la solicitud de tu asociación. Nos pondremos en contacto muy pronto.
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
                    <a href="#presentacion-red">Presentación Red</a>
                    <a href="#directorio-asociaciones">Directorio Global</a>
                    <a href="http://localhost/IPSAA%20CUSCO/?page_id=18">Sé parte</a>
                </div>
                <div class="footer-col">
                    <h4>Iniciativas</h4>
                    <a href="#beneficios-alianzas">Beneficios de Articulación</a>
                    <a href="#sumar-asociacion">Sumar mi Asociación</a>
                    <a href="http://localhost/IPSAA%20CUSCO/?page_id=8#nuestra-historia">Perú Connect 2026</a>
                </div>
                <div class="footer-col">
                    <h4>Contacto</h4>
                    <a href="#sumar-asociacion">Regístrate</a>
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

    <!-- Interactive Filter Script & Form Handling -->
    <script>
        function filterAsociaciones(region, btnEl) {
            const cards = document.querySelectorAll('.asociacion-card');
            const buttons = document.querySelectorAll('.filter-btn');

            buttons.forEach(btn => btn.classList.remove('active'));
            if (btnEl) btnEl.classList.add('active');

            cards.forEach(card => {
                if (region === 'todas' || card.getAttribute('data-region') === region) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function handleAssociationSubmit(e) {
            e.preventDefault();
            const alertMsg = document.getElementById('assoc-success-msg');
            if (alertMsg) {
                alertMsg.style.display = 'block';
                e.target.reset();
            }
        }
    </script>

    <?php if (function_exists('wp_footer')) wp_footer(); ?>
</body>
</html>
