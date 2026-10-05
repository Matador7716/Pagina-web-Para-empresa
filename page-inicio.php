<?php
// page-inicio.php - CANDELAWEB / Todo Web Cusco
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANDELAWEB | Encendemos tus ideas con tecnología</title>
    <meta name="description" content="CANDELAWEB: Desarrollo web, sistemas personalizados, soporte informático y posicionamiento SEO. Transformamos tus ideas en soluciones digitales.">

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome 6 & Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
        :root {
            --color-black: #000000;
            --color-gold: #c4ae04;
            --color-green: #036326;
            --color-blue-deep: #061578;
            --color-blue-cyan: #00a7fa;
            --color-dark-bg: #020617;
            --color-card-bg: rgba(11, 19, 43, 0.85);
            --color-text-white: #ffffff;
            --color-text-light: #f8f9fa;
        }

        * {
            font-family: 'Poppins', sans-serif !important;
        }

        body {
            font-family: 'Poppins', sans-serif !important;
            background-color: var(--color-dark-bg);
            color: var(--color-text-white);
            overflow-x: hidden;
            position: relative;
        }

        /* Ambient Glow Background Orbs */
        .ambient-glow {
            position: absolute;
            border-radius: 50%;
            filter: blur(100px);
            z-index: 0;
            pointer-events: none;
            opacity: 0.35;
        }

        .glow-1 {
            width: 500px;
            height: 500px;
            background: var(--color-blue-cyan);
            top: -100px;
            left: -150px;
        }

        .glow-2 {
            width: 450px;
            height: 450px;
            background: var(--color-gold);
            top: 40%;
            right: -150px;
        }

        .glow-3 {
            width: 550px;
            height: 550px;
            background: var(--color-green);
            bottom: 10%;
            left: -200px;
        }

        /* Top Bar */
        .top-bar {
            background-color: var(--color-black);
            border-bottom: 2px solid var(--color-blue-deep);
            font-size: 0.88rem;
            padding: 8px 0;
            position: relative;
            z-index: 1040;
        }

        .top-bar a {
            color: var(--color-text-white);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .top-bar a:hover {
            color: var(--color-blue-cyan);
            text-shadow: 0 0 10px rgba(0, 167, 250, 0.8);
        }

        .top-bar .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(0, 167, 250, 0.3);
            color: var(--color-text-white);
            margin-left: 8px;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-decoration: none;
        }

        .top-bar .social-icons a:hover {
            background: linear-gradient(135deg, var(--color-blue-cyan), var(--color-gold));
            color: var(--color-black);
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 0 15px rgba(0, 167, 250, 0.8);
        }

        /* Main Header Navigation */
        .main-header {
            background: rgba(2, 6, 23, 0.92);
            backdrop-filter: blur(16px);
            position: sticky;
            top: 0;
            z-index: 1030;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.8);
            border-bottom: 1px solid rgba(0, 167, 250, 0.25);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.7rem;
            letter-spacing: -0.5px;
            color: var(--color-text-white) !important;
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.03);
        }

        .navbar-brand span.cyan {
            color: var(--color-blue-cyan);
            text-shadow: 0 0 12px rgba(0, 167, 250, 0.6);
        }

        .nav-link {
            color: var(--color-text-white) !important;
            font-weight: 500;
            font-size: 0.95rem;
            padding: 0.6rem 1rem !important;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--color-blue-cyan) !important;
            text-shadow: 0 0 10px rgba(0, 167, 250, 0.5);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            border-radius: 2px;
            background: linear-gradient(90deg, var(--color-gold), var(--color-blue-cyan));
            transition: all 0.3s ease;
            transform: translateX(-50%);
            box-shadow: 0 0 10px var(--color-blue-cyan);
        }

        .nav-link:hover::after, .nav-link.active::after {
            width: 85%;
        }

        .dropdown-menu {
            background-color: rgba(11, 19, 43, 0.96);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 167, 250, 0.4);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.8);
            border-radius: 12px;
            padding: 0.6rem;
        }

        .dropdown-item {
            color: var(--color-text-white);
            font-weight: 500;
            padding: 0.7rem 1.2rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: linear-gradient(90deg, var(--color-blue-deep), var(--color-blue-cyan));
            color: var(--color-text-white);
            transform: translateX(6px);
            box-shadow: 0 4px 15px rgba(0, 167, 250, 0.4);
        }

        /* 1. CREATIVE & AUTOMATIC HERO CAROUSEL SLIDER */
        .hero-slider {
            position: relative;
            overflow: hidden;
            border-bottom: 2px solid rgba(0, 167, 250, 0.3);
        }

        .hero-slider .carousel-item {
            height: 88vh;
            min-height: 600px;
            background-size: cover;
            background-position: center;
            position: relative;
            transition: transform 1.2s cubic-bezier(0.25, 1, 0.5, 1), opacity 1s ease-in-out;
        }

        .hero-slider .carousel-item::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.92) 0%, rgba(6, 21, 120, 0.85) 50%, rgba(3, 99, 38, 0.75) 100%);
            z-index: 1;
        }

        .hero-slider .carousel-item::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: radial-gradient(circle at 30% 50%, rgba(0, 167, 250, 0.25), transparent 70%);
            z-index: 1;
            pointer-events: none;
        }

        .hero-card-glass {
            position: relative;
            z-index: 2;
            background: rgba(2, 6, 23, 0.65);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(0, 167, 250, 0.35);
            border-radius: 24px;
            padding: 45px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8), inset 0 0 20px rgba(0, 167, 250, 0.15);
            max-width: 850px;
        }

        .hero-badge {
            background: linear-gradient(90deg, var(--color-gold), #e0cb1c);
            color: var(--color-black);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.8px;
            padding: 8px 20px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.88rem;
            box-shadow: 0 0 20px rgba(196, 174, 4, 0.6);
        }

        .hero-title {
            font-size: 3.4rem;
            font-weight: 900;
            line-height: 1.15;
            margin-top: 18px;
            margin-bottom: 22px;
            color: var(--color-text-white);
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.9);
            letter-spacing: -1px;
        }

        .hero-title span {
            background: linear-gradient(90deg, var(--color-blue-cyan), var(--color-gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0 2px 8px rgba(0, 167, 250, 0.5));
        }

        .hero-desc {
            font-size: 1.22rem;
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: 32px;
            font-weight: 400;
            line-height: 1.7;
        }

        .carousel-indicators [data-bs-target] {
            width: 45px;
            height: 8px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.4);
            border: none;
            transition: all 0.4s ease;
        }

        .carousel-indicators .active {
            width: 70px;
            background: linear-gradient(90deg, var(--color-gold), var(--color-blue-cyan));
            box-shadow: 0 0 15px var(--color-blue-cyan);
        }

        .hero-control-btn {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background: rgba(6, 21, 120, 0.75);
            backdrop-filter: blur(10px);
            border: 2px solid var(--color-blue-cyan);
            color: var(--color-text-white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(0, 167, 250, 0.4);
        }

        .hero-control-btn:hover {
            background: var(--color-gold);
            color: var(--color-black);
            border-color: var(--color-gold);
            transform: scale(1.15);
            box-shadow: 0 0 25px rgba(196, 174, 4, 0.8);
        }

        /* Buttons Styling */
        .btn-custom-primary {
            background: linear-gradient(135deg, var(--color-blue-cyan) 0%, var(--color-blue-deep) 100%);
            color: var(--color-text-white);
            border: none;
            padding: 15px 34px;
            font-weight: 700;
            border-radius: 50px;
            box-shadow: 0 8px 25px rgba(0, 167, 250, 0.5);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-custom-primary:hover {
            transform: translateY(-4px) scale(1.03);
            box-shadow: 0 12px 30px rgba(0, 167, 250, 0.8);
            color: var(--color-text-white);
        }

        .btn-custom-gold {
            background: linear-gradient(135deg, var(--color-gold) 0%, #e5d122 100%);
            color: var(--color-black);
            border: none;
            padding: 15px 34px;
            font-weight: 800;
            border-radius: 50px;
            box-shadow: 0 8px 25px rgba(196, 174, 4, 0.5);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-custom-gold:hover {
            transform: translateY(-4px) scale(1.03);
            box-shadow: 0 12px 30px rgba(196, 174, 4, 0.8);
            color: var(--color-black);
        }

        /* Section Titles */
        .section-header {
            text-align: center;
            margin-bottom: 55px;
            position: relative;
            z-index: 2;
        }

        .section-subtitle {
            color: var(--color-gold);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-size: 0.92rem;
            display: block;
            margin-bottom: 10px;
            text-shadow: 0 0 10px rgba(196, 174, 4, 0.4);
        }

        .section-title {
            font-size: 2.6rem;
            font-weight: 900;
            color: var(--color-text-white);
            position: relative;
            display: inline-block;
            letter-spacing: -0.5px;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 5px;
            background: linear-gradient(90deg, var(--color-blue-cyan), var(--color-green), var(--color-gold));
            margin: 14px auto 0;
            border-radius: 3px;
            box-shadow: 0 0 12px var(--color-blue-cyan);
        }

        /* 2. ENHANCED ICON STYLING & CREATIVE CARDS */
        .service-card {
            background: var(--color-card-bg);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 167, 250, 0.22);
            border-radius: 20px;
            padding: 35px 28px;
            height: 100%;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--color-blue-cyan), var(--color-green), var(--color-gold));
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            border-color: var(--color-blue-cyan);
            box-shadow: 0 20px 45px rgba(0, 167, 250, 0.3);
            background: rgba(11, 19, 43, 0.95);
        }

        .service-card:hover::before {
            opacity: 1;
        }

        /* ENHANCED SERVICE ICON BOX */
        .service-icon-wrapper {
            width: 75px;
            height: 75px;
            border-radius: 20px;
            background: linear-gradient(135deg, rgba(6, 21, 120, 0.9), rgba(0, 167, 250, 0.25));
            border: 2px solid var(--color-blue-cyan);
            box-shadow: 0 0 25px rgba(0, 167, 250, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            color: var(--color-blue-cyan);
            margin-bottom: 25px;
            transition: all 0.4s ease;
            position: relative;
        }

        .service-card:hover .service-icon-wrapper {
            background: linear-gradient(135deg, var(--color-gold), #e0cb1c);
            color: var(--color-black);
            border-color: var(--color-gold);
            transform: rotate(8deg) scale(1.1);
            box-shadow: 0 0 30px rgba(196, 174, 4, 0.8);
        }

        .service-title {
            font-size: 1.45rem;
            font-weight: 800;
            margin-bottom: 14px;
            color: var(--color-text-white);
        }

        .service-description {
            color: rgba(255, 255, 255, 0.92);
            font-size: 0.95rem;
            line-height: 1.65;
            margin-bottom: 22px;
        }

        .service-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-list li {
            padding: 7px 0;
            font-size: 0.92rem;
            color: var(--color-text-white);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .service-list li i {
            color: var(--color-gold);
            font-size: 1rem;
            filter: drop-shadow(0 0 6px rgba(196, 174, 4, 0.6));
        }

        /* 3. ENHANCED CATEGORIES & CREATIVE CARDS */
        .card-dark-custom {
            background: var(--color-card-bg);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 167, 250, 0.22);
            border-radius: 20px;
            padding: 32px 25px;
            height: 100%;
            transition: all 0.4s ease;
            position: relative;
            color: var(--color-text-white);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .card-dark-custom:hover {
            transform: translateY(-8px);
            border-color: var(--color-gold);
            box-shadow: 0 15px 40px rgba(196, 174, 4, 0.3);
        }

        /* ICON BADGES WITH NEON GLOW */
        .icon-badge-glow {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            margin: 0 auto 20px;
            position: relative;
            transition: all 0.4s ease;
        }

        .icon-badge-blue {
            background: rgba(0, 167, 250, 0.15);
            border: 2px solid var(--color-blue-cyan);
            color: var(--color-blue-cyan);
            box-shadow: 0 0 20px rgba(0, 167, 250, 0.4);
        }

        .icon-badge-gold {
            background: rgba(196, 174, 4, 0.15);
            border: 2px solid var(--color-gold);
            color: var(--color-gold);
            box-shadow: 0 0 20px rgba(196, 174, 4, 0.4);
        }

        .icon-badge-green {
            background: rgba(3, 99, 38, 0.25);
            border: 2px solid var(--color-green);
            color: #28d053;
            box-shadow: 0 0 20px rgba(3, 99, 38, 0.6);
        }

        .card-dark-custom:hover .icon-badge-glow {
            transform: scale(1.15) rotate(-5deg);
        }

        /* Slogans Banner */
        .slogans-box {
            background: linear-gradient(135deg, rgba(6, 21, 120, 0.8) 0%, rgba(3, 99, 38, 0.7) 100%);
            border: 2px solid var(--color-gold);
            border-radius: 24px;
            padding: 42px 35px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.7), inset 0 0 20px rgba(196, 174, 4, 0.2);
            position: relative;
        }

        .slogan-pill {
            background: rgba(2, 6, 23, 0.85);
            border: 1px solid rgba(0, 167, 250, 0.4);
            color: var(--color-text-white);
            padding: 11px 22px;
            border-radius: 30px;
            font-size: 0.95rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        .slogan-pill:hover {
            border-color: var(--color-gold);
            background: rgba(6, 21, 120, 0.95);
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 5px 15px rgba(196, 174, 4, 0.4);
        }

        /* Structure Section */
        .structure-card {
            background: rgba(11, 19, 43, 0.9);
            border: 1px solid rgba(0, 167, 250, 0.25);
            border-radius: 16px;
            padding: 24px;
            height: 100%;
            transition: all 0.3s ease;
            position: relative;
            color: var(--color-text-white);
        }

        .structure-card:hover {
            border-color: var(--color-gold);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(196, 174, 4, 0.3);
        }

        .structure-num {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--color-blue-cyan), var(--color-blue-deep));
            color: var(--color-text-white);
            font-weight: 900;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.15rem;
            margin-bottom: 14px;
            box-shadow: 0 0 15px rgba(0, 167, 250, 0.5);
        }

        /* Digital Transformation Visual Section */
        .impact-section {
            background: linear-gradient(180deg, #020617 0%, #061578 50%, #020617 100%);
            padding: 95px 0;
            position: relative;
            overflow: hidden;
            border-y: 2px solid rgba(0, 167, 250, 0.2);
        }

        .flow-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            max-width: 950px;
            margin: 45px auto 0;
        }

        @media (min-width: 992px) {
            .flow-wrapper {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                gap: 0;
            }
        }

        .flow-step {
            background: rgba(2, 6, 23, 0.92);
            backdrop-filter: blur(10px);
            border: 2px solid var(--color-blue-cyan);
            border-radius: 20px;
            padding: 26px 20px;
            text-align: center;
            width: 100%;
            max-width: 170px;
            position: relative;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.7);
            color: var(--color-text-white);
        }

        .flow-step:hover {
            transform: scale(1.12) translateY(-8px);
            border-color: var(--color-gold);
            box-shadow: 0 0 30px rgba(196, 174, 4, 0.8);
            background: rgba(11, 19, 43, 0.98);
        }

        .flow-step-num {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--color-gold);
            color: var(--color-black);
            font-weight: 900;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
            box-shadow: 0 0 12px rgba(196, 174, 4, 0.8);
        }

        .flow-step-icon {
            font-size: 2.2rem;
            color: var(--color-blue-cyan);
            margin-bottom: 12px;
            transition: all 0.3s ease;
            filter: drop-shadow(0 0 8px rgba(0, 167, 250, 0.6));
        }

        .flow-step:hover .flow-step-icon {
            color: var(--color-gold);
            transform: scale(1.2);
            filter: drop-shadow(0 0 12px rgba(196, 174, 4, 0.9));
        }

        .flow-step-title {
            font-weight: 800;
            font-size: 1.1rem;
            letter-spacing: 1px;
            color: var(--color-text-white);
            margin: 0;
        }

        .flow-arrow {
            color: var(--color-gold);
            font-size: 2.2rem;
            animation: pulseArrow 1.5s infinite alternate;
            filter: drop-shadow(0 0 10px rgba(196, 174, 4, 0.8));
        }

        @keyframes pulseArrow {
            0% { transform: scale(0.9); opacity: 0.6; }
            100% { transform: scale(1.25); opacity: 1; }
        }

        @media (max-width: 991px) {
            .flow-arrow i {
                transform: rotate(90deg);
            }
        }

        /* Why Choose Us Cards */
        .why-card {
            background: rgba(11, 19, 43, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 18px;
            padding: 32px 26px;
            height: 100%;
            transition: all 0.3s ease;
            position: relative;
            color: var(--color-text-white);
        }

        .why-card:hover {
            background: rgba(6, 21, 120, 0.65);
            border-color: var(--color-green);
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(3, 99, 38, 0.4);
        }

        .why-icon-box {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            background: rgba(3, 99, 38, 0.3);
            border: 1px solid var(--color-green);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: #28d053;
            margin-bottom: 18px;
            box-shadow: 0 0 18px rgba(3, 99, 38, 0.5);
            transition: all 0.3s ease;
        }

        .why-card:hover .why-icon-box {
            background: var(--color-gold);
            color: var(--color-black);
            border-color: var(--color-gold);
            box-shadow: 0 0 25px rgba(196, 174, 4, 0.8);
        }

        .why-title {
            font-weight: 800;
            font-size: 1.3rem;
            margin-bottom: 12px;
            color: var(--color-text-white);
        }

        .why-desc {
            color: rgba(255, 255, 255, 0.92);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        /* Tech Badges */
        .tech-box {
            background: var(--color-card-bg);
            border: 1px solid rgba(0, 167, 250, 0.25);
            border-radius: 16px;
            padding: 24px 18px;
            text-align: center;
            transition: all 0.3s ease;
            color: var(--color-text-white);
            box-shadow: 0 8px 20px rgba(0,0,0,0.5);
        }

        .tech-box:hover {
            border-color: var(--color-blue-cyan);
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0, 167, 250, 0.4);
            background: rgba(6, 21, 120, 0.8);
        }

        .tech-icon {
            font-size: 2.8rem;
            margin-bottom: 12px;
            transition: transform 0.3s ease;
        }

        .tech-box:hover .tech-icon {
            transform: scale(1.2);
        }

        /* Call To Action Banner */
        .cta-banner {
            background: linear-gradient(135deg, var(--color-blue-deep) 0%, var(--color-green) 100%);
            border-radius: 24px;
            padding: 55px 35px;
            border: 2px solid var(--color-blue-cyan);
            box-shadow: 0 20px 50px rgba(0, 167, 250, 0.3);
            position: relative;
            overflow: hidden;
            color: var(--color-text-white);
        }

        /* Footer */
        footer {
            background-color: var(--color-black);
            border-top: 1px solid rgba(0, 167, 250, 0.25);
            padding-top: 65px;
            padding-bottom: 25px;
            color: var(--color-text-white);
            font-size: 0.9rem;
            position: relative;
            z-index: 2;
        }

        footer h5 {
            color: var(--color-text-white);
            font-weight: 800;
            margin-bottom: 22px;
            position: relative;
            padding-bottom: 12px;
        }

        footer h5::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: var(--color-gold);
            box-shadow: 0 0 8px var(--color-gold);
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer ul li {
            margin-bottom: 11px;
        }

        footer ul li a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        footer ul li a:hover {
            color: var(--color-blue-cyan);
            padding-left: 6px;
            text-shadow: 0 0 8px rgba(0, 167, 250, 0.6);
        }

        /* Floating WhatsApp Button */
        .btn-whatsapp-float {
            position: fixed;
            bottom: 28px;
            right: 28px;
            width: 65px;
            height: 65px;
            background-color: #25d366;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6);
            z-index: 1050;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-decoration: none;
            border: 2px solid #ffffff;
        }

        .btn-whatsapp-float:hover {
            transform: scale(1.15) rotate(10deg);
            color: #ffffff;
            box-shadow: 0 10px 28px rgba(37, 211, 102, 0.9);
        }
    </style>
</head>
<body>

    <!-- Ambient Background Glow Orbs -->
    <div class="ambient-glow glow-1"></div>
    <div class="ambient-glow glow-2"></div>
    <div class="ambient-glow glow-3"></div>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-center text-md-start mb-2 mb-md-0">
                    <span class="me-4 fw-medium">
                        <i class="bi bi-telephone-fill text-warning me-2"></i>
                        <a href="https://wa.me/51935209781" target="_blank">+51 935 209 781</a>
                    </span>
                    <span class="fw-medium">
                        <i class="bi bi-envelope-fill text-info me-2"></i>
                        <a href="mailto:adminweb@todowebcusco.com">adminweb@todowebcusco.com</a>
                    </span>
                </div>
                <div class="col-md-4 text-center text-md-end">
                    <span class="me-2 d-none d-lg-inline text-white opacity-75 fw-medium">Síguenos:</span>
                    <div class="social-icons d-inline-block">
                        <a href="https://facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://tiktok.com" target="_blank" title="TikTok"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN HEADER & NAVIGATION -->
    <header class="main-header">
        <nav class="navbar navbar-expand-lg navbar-dark py-2">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2" href="https://www.todowebcusco.com/">
                    <i class="bi bi-fire text-warning fs-2" style="filter: drop-shadow(0 0 8px rgba(196, 174, 4, 0.8));"></i>
                    <span>CANDELA<span class="cyan">WEB</span></span>
                </a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ms-auto align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="https://www.todowebcusco.com/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.todowebcusco.com/paginas-web/">Página Web</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.todowebcusco.com/tiendas-virtuales/">Tiendas Virtuales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.todowebcusco.com/desarrollo-de-apps/">Desarrollo de Apps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.todowebcusco.com/anuncios-en-google/">Anuncios en Google</a>
                        </li>

                        <!-- Marketing Submenu Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="marketingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Marketing Digital
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="marketingDropdown">
                                <li>
                                    <a class="dropdown-item" href="https://www.todowebcusco.com/social-media-marketing/">
                                        <i class="bi bi-share me-2 text-info"></i>Social Media Marketing
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://www.todowebcusco.com/posicionamiento-web-seo/">
                                        <i class="bi bi-search me-2 text-warning"></i>Posicionamiento Web (SEO)
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://www.todowebcusco.com/marketing-digital/">
                                        <i class="bi bi-graph-up-arrow me-2 text-success"></i>Marketing Digital
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.todowebcusco.com/portafolio/">Portafolio</a>
                        </li>
                        <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                            <a class="btn btn-custom-gold btn-sm px-4" href="https://www.todowebcusco.com/contacto/">
                                <i class="bi bi-chat-left-dots-fill me-1"></i> Contacto
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- 1. CREATIVE & AUTOMATIC HERO CAROUSEL SLIDER -->
    <section class="hero-slider" id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-indicators mb-4">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=1600&q=80');">
                    <div class="container h-100 d-flex align-items-center">
                        <div class="hero-card-glass animate__animated animate__fadeInLeft">
                            <span class="hero-badge animate__animated animate__fadeInDown">
                                <i class="bi bi-fire"></i> CANDELAWEB
                            </span>
                            <h1 class="hero-title animate__animated animate__fadeInUp">
                                “Encendemos tus ideas <span>con tecnología.”</span>
                            </h1>
                            <p class="hero-desc animate__animated animate__fadeInUp">
                                Soluciones digitales integrales que transforman proyectos en marcas potentes, eficientes y altamente rentables.
                            </p>
                            <div class="d-flex flex-wrap gap-3 animate__animated animate__zoomIn">
                                <a href="https://www.todowebcusco.com/contacto/" class="btn-custom-primary">
                                    <i class="bi bi-rocket-takeoff-fill"></i> Empezar Mi Proyecto
                                </a>
                                <a href="https://wa.me/51935209781" target="_blank" class="btn-custom-gold">
                                    <i class="bi bi-whatsapp"></i> Hablar por WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1600&q=80');">
                    <div class="container h-100 d-flex align-items-center">
                        <div class="hero-card-glass animate__animated animate__fadeInRight">
                            <span class="hero-badge animate__animated animate__fadeInDown">
                                <i class="bi bi-cpu-fill"></i> Sistemas & Software
                            </span>
                            <h1 class="hero-title animate__animated animate__fadeInUp">
                                Digitalizamos y <span>Optimizamos Tus Procesos</span>
                            </h1>
                            <p class="hero-desc animate__animated animate__fadeInUp">
                                Sistemas de ventas, inventarios, reservas y plataformas empresariales adaptadas exactamente a tus requerimientos corporativos.
                            </p>
                            <div class="d-flex flex-wrap gap-3 animate__animated animate__zoomIn">
                                <a href="https://www.todowebcusco.com/desarrollo-de-apps/" class="btn-custom-primary">
                                    <i class="bi bi-cpu-fill"></i> Ver Sistemas Web
                                </a>
                                <a href="https://www.todowebcusco.com/contacto/" class="btn-custom-gold">
                                    <i class="bi bi-envelope-paper-fill"></i> Solicitar Cotización
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1600&q=80');">
                    <div class="container h-100 d-flex align-items-center">
                        <div class="hero-card-glass animate__animated animate__fadeInUp">
                            <span class="hero-badge animate__animated animate__fadeInDown">
                                <i class="bi bi-graph-up-arrow"></i> Crecimiento Digital
                            </span>
                            <h1 class="hero-title animate__animated animate__fadeInUp">
                                Posicionamiento SEO y <span>Estrategias de Marketing</span>
                            </h1>
                            <p class="hero-desc animate__animated animate__fadeInUp">
                                Aumenta tu visibilidad en Google y atrae clientes potenciales calificados con nuestras campañas avanzadas de marketing digital.
                            </p>
                            <div class="d-flex flex-wrap gap-3 animate__animated animate__zoomIn">
                                <a href="https://www.todowebcusco.com/posicionamiento-web-seo/" class="btn-custom-primary">
                                    <i class="bi bi-graph-up"></i> Estrategia SEO
                                </a>
                                <a href="https://wa.me/51935209781" target="_blank" class="btn-custom-gold">
                                    <i class="bi bi-telephone-outbound-fill"></i> Asesoría Gratuita
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="hero-control-btn"><i class="bi bi-chevron-left"></i></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="hero-control-btn"><i class="bi bi-chevron-right"></i></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </section>

    <!-- 2. PRESENTACIÓN & SOBRE CANDELAWEB + SLOGANS -->
    <section class="py-5 position-relative" id="sobre-candelaweb">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="section-subtitle">Sobre CANDELAWEB</span>
                    <h2 class="section-title text-start mb-4">
                        Tecnología creada para hacer crecer tus ideas
                    </h2>
                    <p class="fs-5 text-white mb-3 fw-medium">
                        <strong class="text-warning">CANDELAWEB</strong> nace con la visión de acercar la tecnología a empresas, emprendedores, instituciones y profesionales, ofreciendo soluciones digitales que combinen diseño, funcionalidad y alta precisión técnica.
                    </p>
                    <p class="text-white mb-3 fs-6" style="line-height: 1.8; opacity: 0.95;">
                        Nuestro trabajo va desde la creación de una página web corporativa hasta el desarrollo de sistemas personalizados capaces de transformar procesos completos de una organización.
                    </p>
                    <div class="p-4 my-4 rounded-4 border border-warning" style="background: rgba(196, 174, 4, 0.12); backdrop-filter: blur(8px);">
                        <p class="mb-0 text-white fs-5 font-italic fw-semibold">
                            <i class="bi bi-quote fs-1 text-warning me-2 align-middle"></i>
                            Tu proyecto comienza con una idea. Nosotros ayudamos a convertirla en tecnología.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="slogans-box">
                        <h4 class="text-warning fw-extrabold mb-4 d-flex align-items-center gap-2 fs-3">
                            <i class="bi bi-fire text-warning fs-2"></i> Slogans para CANDELAWEB
                        </h4>

                        <!-- Main Slogan Highlight -->
                        <div class="p-4 mb-4 rounded-4 border border-info" style="background: rgba(0, 167, 250, 0.18); backdrop-filter: blur(10px);">
                            <span class="badge bg-warning text-dark mb-2 fw-extrabold px-3 py-1 fs-6">Opción Principal</span>
                            <h3 class="text-white fw-bold m-0 fs-2">
                                CANDELAWEB <br>
                                <span style="color: var(--color-blue-cyan); filter: drop-shadow(0 0 10px rgba(0, 167, 250, 0.6));">“Encendemos tus ideas con tecnología.”</span>
                            </h3>
                        </div>

                        <p class="text-white fw-semibold mb-3 fs-6">Otras alternativas de valor:</p>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="slogan-pill"><i class="bi bi-stars text-warning fs-5"></i> “Tecnología que transforma ideas.”</span>
                            <span class="slogan-pill"><i class="bi bi-lightning-charge text-warning fs-5"></i> “Tu idea. Nuestra tecnología.”</span>
                            <span class="slogan-pill"><i class="bi bi-graph-up-arrow text-warning fs-5"></i> “Soluciones digitales que hacen crecer tu negocio.”</span>
                            <span class="slogan-pill"><i class="bi bi-code-slash text-warning fs-5"></i> “Creamos tecnología para tus proyectos.”</span>
                            <span class="slogan-pill"><i class="bi bi-arrow-right-circle text-warning fs-5"></i> “De una idea a una solución digital.”</span>
                            <span class="slogan-pill"><i class="bi bi-lightbulb text-warning fs-5"></i> “Innovación que empieza con una idea.”</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SPECIAL SECTION: ESTRUCTURA RECOMENDADA PARA TU PÁGINA WEB (10 PUNTOS) -->
    <section class="py-5 position-relative" id="estructura-recomendada" style="background: rgba(6, 21, 120, 0.25); border-y: 1px solid rgba(0,167,250,0.2);">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Arquitectura Digital Estratégica</span>
                <h2 class="section-title">Estructura recomendada para tu página web</h2>
                <p class="text-white fs-5 mt-3 max-w-2xl mx-auto opacity-90">
                    Yo organizaría la Home de CANDELAWEB así para lograr el máximo impacto y conversión:
                </p>
            </div>

            <div class="row g-4">
                <!-- 1. Hero -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">1</div>
                        <h4 class="text-info fw-bold mb-2">Hero</h4>
                        <p class="text-white m-0 opacity-90">
                            <strong>Mensaje clave:</strong> Encendemos tus ideas con tecnología. Impacto directo al ingresar al sitio.
                        </p>
                    </div>
                </div>

                <!-- 2. Presentación -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">2</div>
                        <h4 class="text-info fw-bold mb-2">Presentación</h4>
                        <p class="text-white m-0 opacity-90">
                            Desarrollo web, sistemas web y soluciones informáticas orientadas a resultados.
                        </p>
                    </div>
                </div>

                <!-- 3. Servicios -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">3</div>
                        <h4 class="text-info fw-bold mb-2">Servicios</h4>
                        <p class="text-white m-0 opacity-90">
                            Páginas Web | Sistemas Web | Servicios Informáticos | Posicionamiento SEO
                        </p>
                    </div>
                </div>

                <!-- 4. ¿Qué podemos desarrollar? -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">4</div>
                        <h4 class="text-info fw-bold mb-2">¿Qué podemos desarrollar?</h4>
                        <p class="text-white m-0 opacity-90">
                            Empresas | Emprendimientos | Instituciones | Profesionales
                        </p>
                    </div>
                </div>

                <!-- 5. Proceso de trabajo -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">5</div>
                        <h4 class="text-info fw-bold mb-2">Proceso de trabajo</h4>
                        <p class="text-white m-0 opacity-90">
                            Analizamos → Diseñamos → Desarrollamos → Implementamos → Acompañamos
                        </p>
                    </div>
                </div>

                <!-- 6. Proyectos / Portafolio -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">6</div>
                        <h4 class="text-info fw-bold mb-2">Proyectos / Portafolio</h4>
                        <p class="text-white m-0 opacity-90">
                            Muestra visual de nuestros casos de éxito y soluciones implementadas.
                        </p>
                    </div>
                </div>

                <!-- 7. ¿Por qué CANDELAWEB? -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">7</div>
                        <h4 class="text-info fw-bold mb-2">¿Por qué CANDELAWEB?</h4>
                        <p class="text-white m-0 opacity-90">
                            Creatividad, tecnología, personalización, soporte continuo y orientación a resultados.
                        </p>
                    </div>
                </div>

                <!-- 8. Tecnologías -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">8</div>
                        <h4 class="text-info fw-bold mb-2">Tecnologías</h4>
                        <p class="text-white m-0 opacity-90">
                            Herramientas y lenguajes modernos para garantizar soluciones rápidas, seguras y escalables.
                        </p>
                    </div>
                </div>

                <!-- 9. Testimonios / Clientes -->
                <div class="col-md-6 col-lg-4">
                    <div class="structure-card">
                        <div class="structure-num">9</div>
                        <h4 class="text-info fw-bold mb-2">Testimonios / Clientes</h4>
                        <p class="text-white m-0 opacity-90">
                            Reseñas y experiencia de empresas y profesionales que confían en nuestro trabajo.
                        </p>
                    </div>
                </div>

                <!-- 10. CTA Final -->
                <div class="col-12">
                    <div class="p-4 rounded-4 text-center border border-warning" style="background: linear-gradient(135deg, var(--color-blue-deep), var(--color-green)); box-shadow: 0 10px 30px rgba(0,0,0,0.6);">
                        <div class="d-inline-block px-3 py-1 rounded-pill bg-warning text-dark fw-bold mb-2">Punto 10: CTA Final</div>
                        <h3 class="text-white fw-bold fs-2 mb-3">
                            ¿Tienes una idea? Enciéndela con CANDELAWEB.
                        </h3>
                        <a href="https://wa.me/51935209781" target="_blank" class="btn btn-custom-gold fs-5">
                            <i class="bi bi-whatsapp"></i> Hablar con un Asesor
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. NUESTROS SERVICIOS WITH ENHANCED ICON VISUALS -->
    <section class="py-5 position-relative" id="servicios">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Soluciones Integrales</span>
                <h2 class="section-title">Nuestros Servicios</h2>
            </div>

            <div class="row g-4">
                <!-- Card 1: Desarrollo de Páginas Web -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon-wrapper">
                            <i class="bi bi-window-sidebar"></i>
                        </div>
                        <h3 class="service-title">Desarrollo de Páginas Web</h3>
                        <p class="service-description">
                            Creamos sitios web modernos, rápidos, adaptables a celulares y diseñados de acuerdo con la identidad de cada negocio.
                        </p>
                        <ul class="service-list">
                            <li><i class="bi bi-check-circle-fill"></i> Páginas corporativas</li>
                            <li><i class="bi bi-check-circle-fill"></i> Landing pages</li>
                            <li><i class="bi bi-check-circle-fill"></i> Tiendas online</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sitios institucionales</li>
                            <li><i class="bi bi-check-circle-fill"></i> Blogs</li>
                            <li><i class="bi bi-check-circle-fill"></i> Portafolios profesionales</li>
                            <li><i class="bi bi-check-circle-fill"></i> Rediseño de páginas web</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2: Sistemas Web -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon-wrapper">
                            <i class="bi bi-cpu-fill"></i>
                        </div>
                        <h3 class="service-title">Sistemas Web</h3>
                        <p class="service-description">
                            Desarrollamos sistemas personalizados para digitalizar y optimizar los procesos de tu empresa.
                        </p>
                        <ul class="service-list">
                            <li><i class="bi bi-check-circle-fill"></i> Sistemas administrativos</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sistemas de ventas</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sistemas de inventario</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sistemas para restaurantes</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sistemas de reservas</li>
                            <li><i class="bi bi-check-circle-fill"></i> Plataformas educativas</li>
                            <li><i class="bi bi-check-circle-fill"></i> Paneles administrativos</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 3: Servicios Informáticos -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon-wrapper">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h3 class="service-title">Servicios Informáticos</h3>
                        <p class="service-description">
                            Soluciones tecnológicas para mantener tus equipos, sistemas y proyectos funcionando correctamente.
                        </p>
                        <ul class="service-list">
                            <li><i class="bi bi-check-circle-fill"></i> Soporte informático</li>
                            <li><i class="bi bi-check-circle-fill"></i> Instalación y configuración</li>
                            <li><i class="bi bi-check-circle-fill"></i> Mantenimiento de computadoras</li>
                            <li><i class="bi bi-check-circle-fill"></i> Redes</li>
                            <li><i class="bi bi-check-circle-fill"></i> Configuración de servidores</li>
                            <li><i class="bi bi-check-circle-fill"></i> Asesoría tecnológica</li>
                            <li><i class="bi bi-check-circle-fill"></i> Soluciones para empresas</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 4: Posicionamiento y Presencia Digital -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="service-icon-wrapper">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h3 class="service-title">Posicionamiento & Presencia Digital</h3>
                        <p class="service-description">
                            Ayudamos a que tu negocio tenga una presencia digital más profesional y visible en internet.
                        </p>
                        <ul class="service-list">
                            <li><i class="bi bi-check-circle-fill"></i> SEO y Optimización web</li>
                            <li><i class="bi bi-check-circle-fill"></i> Google Business</li>
                            <li><i class="bi bi-check-circle-fill"></i> Integración de redes sociales</li>
                            <li><i class="bi bi-check-circle-fill"></i> Analítica web</li>
                            <li><i class="bi bi-check-circle-fill"></i> Optimización de velocidad</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. ¿QUÉ PODEMOS DESARROLLAR? -->
    <section class="py-5 position-relative" id="que-desarrollamos">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Soluciones adaptadas a cada perfil</span>
                <h2 class="section-title">¿Qué podemos desarrollar?</h2>
            </div>

            <div class="row g-4 text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="card-dark-custom">
                        <div class="icon-badge-glow icon-badge-blue">
                            <i class="bi bi-building"></i>
                        </div>
                        <h4 class="fw-bold text-white mb-2">Empresas</h4>
                        <p class="text-white opacity-90 m-0">Sistemas corporativos, plataformas de gestión y portales institucionales de alto impacto.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card-dark-custom">
                        <div class="icon-badge-glow icon-badge-gold">
                            <i class="bi bi-rocket-takeoff-fill"></i>
                        </div>
                        <h4 class="fw-bold text-white mb-2">Emprendimientos</h4>
                        <p class="text-white opacity-90 m-0">Landing pages, tiendas virtuales y soluciones ágiles para arrancar con fuerza en el mercado.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card-dark-custom">
                        <div class="icon-badge-glow icon-badge-green">
                            <i class="bi bi-bank"></i>
                        </div>
                        <h4 class="fw-bold text-white mb-2">Instituciones</h4>
                        <p class="text-white opacity-90 m-0">Sitios oficiales, aulas virtuales y plataformas de atención e información al ciudadano.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card-dark-custom">
                        <div class="icon-badge-glow icon-badge-blue">
                            <i class="bi bi-person-badge-fill"></i>
                        </div>
                        <h4 class="fw-bold text-white mb-2">Profesionales</h4>
                        <p class="text-white opacity-90 m-0">Portafolios profesionales, blogs de autor y sistemas de reservas de citas personalizadas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PROCESO DE TRABAJO & SECCIÓN VISUAL DE IMPACTO -->
    <section class="impact-section" id="proceso-de-trabajo">
        <div class="container text-center position-relative z-2">
            <span class="badge bg-warning text-dark px-4 py-2 rounded-pill fw-extrabold text-uppercase fs-6 shadow-sm">Proceso de Trabajo</span>
            <h2 class="display-5 fw-extrabold text-white mt-3 mb-2" style="font-weight: 900; letter-spacing: -1px; text-shadow: 0 0 20px rgba(0,167,250,0.5);">
                ENCENDEMOS TU TRANSFORMACIÓN DIGITAL
            </h2>
            <p class="fs-5 text-white max-w-2xl mx-auto opacity-90">
                Desde una página web hasta un sistema completo para tu empresa.
            </p>

            <div class="flow-container">
                <div class="flow-wrapper">

                    <!-- Step 1: IDEA -->
                    <div class="flow-step">
                        <div class="flow-step-num">1</div>
                        <div class="flow-step-icon"><i class="bi bi-search"></i></div>
                        <h4 class="flow-step-title">ANALIZAMOS</h4>
                        <span class="badge bg-secondary mt-2">IDEA</span>
                    </div>

                    <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>

                    <!-- Step 2: DISEÑO -->
                    <div class="flow-step">
                        <div class="flow-step-num">2</div>
                        <div class="flow-step-icon"><i class="bi bi-palette-fill"></i></div>
                        <h4 class="flow-step-title">DISEÑAMOS</h4>
                        <span class="badge bg-secondary mt-2">DISEÑO</span>
                    </div>

                    <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>

                    <!-- Step 3: DESARROLLO -->
                    <div class="flow-step">
                        <div class="flow-step-num">3</div>
                        <div class="flow-step-icon"><i class="bi bi-code-square"></i></div>
                        <h4 class="flow-step-title">DESARROLLAMOS</h4>
                        <span class="badge bg-secondary mt-2">DESARROLLO</span>
                    </div>

                    <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>

                    <!-- Step 4: TECNOLOGÍA -->
                    <div class="flow-step">
                        <div class="flow-step-num">4</div>
                        <div class="flow-step-icon"><i class="bi bi-cpu-fill"></i></div>
                        <h4 class="flow-step-title">IMPLEMENTAMOS</h4>
                        <span class="badge bg-secondary mt-2">TECNOLOGÍA</span>
                    </div>

                    <div class="flow-arrow"><i class="bi bi-arrow-right-short"></i></div>

                    <!-- Step 5: RESULTADO -->
                    <div class="flow-step" style="border-color: var(--color-gold);">
                        <div class="flow-step-num" style="background: var(--color-blue-cyan); color: #fff;">5</div>
                        <div class="flow-step-icon" style="color: var(--color-gold);"><i class="bi bi-trophy-fill"></i></div>
                        <h4 class="flow-step-title" style="color: var(--color-gold);">ACOMPAÑAMOS</h4>
                        <span class="badge bg-warning text-dark mt-2 fw-bold">RESULTADO</span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 6. PROYECTOS / PORTAFOLIO -->
    <section class="py-5 position-relative" id="portafolio">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Casos de Éxito</span>
                <h2 class="section-title">Proyectos Destacados</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card-dark-custom p-0 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80" class="img-fluid" alt="Proyecto Portal Web">
                        <div class="p-4">
                            <span class="badge bg-info text-dark mb-2">Página Web</span>
                            <h4 class="text-white fw-bold mb-2">Portal Corporativo</h4>
                            <p class="text-white opacity-90 fs-6">Diseño responsive de alta velocidad optimizado para posicionamiento en motores de búsqueda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-dark-custom p-0 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556742049-0a67d511894b?auto=format&fit=crop&w=600&q=80" class="img-fluid" alt="E-Commerce">
                        <div class="p-4">
                            <span class="badge bg-success text-white mb-2">Tienda Online</span>
                            <h4 class="text-white fw-bold mb-2">E-Commerce Multicategoría</h4>
                            <p class="text-white opacity-90 fs-6">Integración de pasarelas de pago, gestión de catálogo e inventario automatizado.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-dark-custom p-0 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80" class="img-fluid" alt="Sistema Administrativo">
                        <div class="p-4">
                            <span class="badge bg-warning text-dark mb-2">Sistema Web</span>
                            <h4 class="text-white fw-bold mb-2">Sistema de Ventas & Reservas</h4>
                            <p class="text-white opacity-90 fs-6">Plataforma a medida para la digitalización integral de procesos administrativos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. ¿POR QUÉ CANDELAWEB? WITH STYLISH ICON BOXES -->
    <section class="py-5 position-relative" id="nosotros">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Nuestro Valor Agregado</span>
                <h2 class="section-title">¿Por qué elegir CANDELAWEB?</h2>
            </div>

            <div class="row g-4">
                <!-- Item 1: Creatividad -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-card">
                        <div class="why-icon-box"><i class="bi bi-brush-fill"></i></div>
                        <h3 class="why-title">Creatividad</h3>
                        <p class="why-desc">
                            Convertimos conceptos e ideas en experiencias digitales atractivas, funcionales y memorables.
                        </p>
                    </div>
                </div>

                <!-- Item 2: Tecnología -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-card">
                        <div class="why-icon-box"><i class="bi bi-gear-wide-connected"></i></div>
                        <h3 class="why-title">Tecnología</h3>
                        <p class="why-desc">
                            Utilizamos herramientas y tecnologías actuales para desarrollar soluciones altamente eficientes e innovadoras.
                        </p>
                    </div>
                </div>

                <!-- Item 3: Personalización -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-card">
                        <div class="why-icon-box"><i class="bi bi-sliders"></i></div>
                        <h3 class="why-title">Personalización</h3>
                        <p class="why-desc">
                            Cada proyecto se adapta meticulosamente a las necesidades reales y objetivos específicos de cada cliente.
                        </p>
                    </div>
                </div>

                <!-- Item 4: Soporte -->
                <div class="col-md-6 col-lg-6">
                    <div class="why-card">
                        <div class="why-icon-box"><i class="bi bi-headset"></i></div>
                        <h3 class="why-title">Soporte Continuo</h3>
                        <p class="why-desc">
                            Te acompañamos de forma activa después de poner tu proyecto en funcionamiento, garantizando tranquilidad total.
                        </p>
                    </div>
                </div>

                <!-- Item 5: Orientación a resultados -->
                <div class="col-md-12 col-lg-6">
                    <div class="why-card">
                        <div class="why-icon-box"><i class="bi bi-bullseye"></i></div>
                        <h3 class="why-title">Orientación a Resultados</h3>
                        <p class="why-desc">
                            Desarrollamos pensando estratégicamente en los objetivos reales de tu negocio, no solamente en la apariencia estética.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. TECNOLOGÍAS -->
    <section class="py-5 position-relative" id="tecnologias" style="background: rgba(8, 17, 43, 0.6);">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Stack Tecnológico</span>
                <h2 class="section-title">Tecnologías que utilizamos</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="tech-box">
                        <i class="fab fa-html5 tech-icon text-danger"></i>
                        <h5 class="m-0 text-white fs-6 fw-bold">HTML5 / CSS3</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="tech-box">
                        <i class="fab fa-js-square tech-icon text-warning"></i>
                        <h5 class="m-0 text-white fs-6 fw-bold">JavaScript</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="tech-box">
                        <i class="fab fa-php tech-icon text-info"></i>
                        <h5 class="m-0 text-white fs-6 fw-bold">PHP 8</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="tech-box">
                        <i class="fas fa-database tech-icon text-success"></i>
                        <h5 class="m-0 text-white fs-6 fw-bold">MySQL</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="tech-box">
                        <i class="fab fa-bootstrap tech-icon" style="color: #7952b3;"></i>
                        <h5 class="m-0 text-white fs-6 fw-bold">Bootstrap 5</h5>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="tech-box">
                        <i class="fab fa-wordpress tech-icon text-primary"></i>
                        <h5 class="m-0 text-white fs-6 fw-bold">WordPress</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. TESTIMONIOS / CLIENTES -->
    <section class="py-5 position-relative" id="testimonios">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle">Confianza y Garantía</span>
                <h2 class="section-title">Lo que dicen nuestros clientes</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card-dark-custom">
                        <div class="d-flex align-items-center mb-3">
                            <div class="text-warning fs-5 me-2">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <p class="text-white opacity-90 fs-6 mb-3">
                            “CANDELAWEB transformó la imagen de nuestra empresa. La velocidad de la página web y el sistema de gestión interna optimizaron todas nuestras ventas.”
                        </p>
                        <h5 class="text-info fw-bold mb-0">Carlos Mendoza</h5>
                        <small class="text-white opacity-75">Gerente Comercial - Empresa Turística Cusco</small>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card-dark-custom">
                        <div class="d-flex align-items-center mb-3">
                            <div class="text-warning fs-5 me-2">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <p class="text-white opacity-90 fs-6 mb-3">
                            “Excelente atención y acompañamiento constante. Entendieron perfectamente nuestra idea y la convirtieron en un sistema web súper intuitivo.”
                        </p>
                        <h5 class="text-info fw-bold mb-0">Mariela Quispe</h5>
                        <small class="text-white opacity-75">Directora - Institución Educativa</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. CTA FINAL & CALL TO ACTION BANNER -->
    <section class="py-5 position-relative" id="cta-final">
        <div class="container">
            <div class="cta-banner text-center text-lg-start">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <span class="badge bg-warning text-dark fw-bold px-3 py-1 mb-2">CTA Final</span>
                        <h2 class="fw-extrabold text-white mb-2 fs-1">¿Tienes una idea? Enciéndela con CANDELAWEB.</h2>
                        <p class="text-white mb-0 fs-5 opacity-90">
                            Desde una página web hasta un sistema completo para tu empresa.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="https://wa.me/51935209781" target="_blank" class="btn-custom-gold fs-5">
                            <i class="bi bi-whatsapp"></i> Hablar con un Asesor
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <a class="navbar-brand d-inline-block mb-3" href="#">
                        <i class="bi bi-fire text-warning fs-3 me-2"></i>
                        <span>CANDELA<span class="cyan">WEB</span></span>
                    </a>
                    <p class="text-white opacity-90">
                        Agencia especializada en desarrollo web, creación de sistemas a medida, posicionamiento SEO y marketing digital en Cusco y todo el Perú.
                    </p>
                    <div class="social-icons mt-3">
                        <a href="https://facebook.com" class="btn btn-outline-light btn-sm rounded-circle me-1" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://instagram.com" class="btn btn-outline-light btn-sm rounded-circle me-1" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://tiktok.com" class="btn btn-outline-light btn-sm rounded-circle" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h5>Enlaces Rápidos</h5>
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li><a href="https://www.todowebcusco.com/">Inicio</a></li>
                                <li><a href="https://www.todowebcusco.com/paginas-web/">Página Web</a></li>
                                <li><a href="https://www.todowebcusco.com/tiendas-virtuales/">Tiendas Virtuales</a></li>
                                <li><a href="https://www.todowebcusco.com/desarrollo-de-apps/">Desarrollo Apps</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li><a href="https://www.todowebcusco.com/anuncios-en-google/">Google Ads</a></li>
                                <li><a href="https://www.todowebcusco.com/marketing-digital/">Marketing Digital</a></li>
                                <li><a href="https://www.todowebcusco.com/portafolio/">Portafolio</a></li>
                                <li><a href="https://www.todowebcusco.com/contacto/">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h5>Contacto</h5>
                    <ul class="text-white opacity-90">
                        <li class="mb-2"><i class="bi bi-geo-alt-fill text-warning me-2"></i> Cusco, Perú</li>
                        <li class="mb-2"><i class="bi bi-telephone-fill text-success me-2"></i> +51 935 209 781</li>
                        <li class="mb-2"><i class="bi bi-envelope-fill text-info me-2"></i> adminweb@todowebcusco.com</li>
                        <li class="mb-2"><i class="bi bi-clock-fill text-primary me-2"></i> Lunes a Sábado: 8:00 am - 7:00 pm</li>
                    </ul>
                </div>
            </div>

            <hr class="mt-4 border-secondary opacity-25">

            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-white opacity-90">&copy; <?php echo date('Y'); ?> CANDELAWEB / Todo Web Cusco. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                    <span class="text-white opacity-75 small">Encendemos tus ideas con tecnología</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp button -->
    <a href="https://wa.me/51935209781" class="btn-whatsapp-float" target="_blank" title="Contactar por WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Explicitly initialize Bootstrap Carousel for automatic sliding
        document.addEventListener('DOMContentLoaded', function() {
            const heroCarouselEl = document.querySelector('#heroCarousel');
            if (heroCarouselEl) {
                const heroCarousel = new bootstrap.Carousel(heroCarouselEl, {
                    interval: 4000,
                    ride: 'carousel',
                    pause: 'hover',
                    wrap: true
                });
            }
        });

        // Smooth scroll for internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>
