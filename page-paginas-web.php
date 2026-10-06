<?php
// page-paginas-web.php - CANDELAWEB / Todo Web Cusco
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Páginas Web Estáticas y Dinámicas | CANDELAWEB</title>
    <meta name="description" content="Diseño y desarrollo de Páginas Web Estáticas y Dinámicas en CANDELAWEB. Sitios corporativos, tiendas online, sistemas de reservas y plataformas a medida.">

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
            top: 35%;
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

        .btn-custom-green {
            background: linear-gradient(135deg, #28a745 0%, var(--color-green) 100%);
            color: var(--color-text-white);
            border: none;
            padding: 15px 34px;
            font-weight: 700;
            border-radius: 50px;
            box-shadow: 0 8px 25px rgba(40, 167, 69, 0.5);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-custom-green:hover {
            transform: translateY(-4px) scale(1.03);
            box-shadow: 0 12px 30px rgba(40, 167, 69, 0.8);
            color: var(--color-text-white);
        }

        /* Hero Header Section */
        .page-hero {
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.95) 0%, rgba(6, 21, 120, 0.88) 50%, rgba(3, 99, 38, 0.8) 100%), url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1600&q=80') center/cover;
            padding: 90px 0 80px;
            position: relative;
            border-bottom: 2px solid rgba(0, 167, 250, 0.3);
            text-align: center;
        }

        .page-hero-badge {
            background: linear-gradient(90deg, var(--color-gold), #e0cb1c);
            color: var(--color-black);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            padding: 8px 22px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            box-shadow: 0 0 20px rgba(196, 174, 4, 0.6);
            margin-bottom: 20px;
        }

        .page-hero-title {
            font-size: 3.5rem;
            font-weight: 900;
            letter-spacing: -1px;
            color: var(--color-text-white);
            margin-bottom: 15px;
            text-shadow: 0 4px 20px rgba(0,0,0,0.8);
        }

        .page-hero-title span {
            color: var(--color-blue-cyan);
            filter: drop-shadow(0 0 12px rgba(0, 167, 250, 0.7));
        }

        .page-hero-subtitle {
            font-size: 1.5rem;
            color: var(--color-gold);
            font-weight: 700;
            margin-bottom: 25px;
            text-shadow: 0 0 12px rgba(196, 174, 4, 0.4);
        }

        .page-hero-desc {
            max-width: 880px;
            margin: 0 auto;
            font-size: 1.15rem;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.95);
        }

        /* Section Titles */
        .section-header {
            text-align: center;
            margin-bottom: 50px;
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
            font-size: 2.5rem;
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

        /* Feature Cards */
        .content-card {
            background: var(--color-card-bg);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 167, 250, 0.25);
            border-radius: 24px;
            padding: 40px;
            height: 100%;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.6);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .content-card:hover {
            transform: translateY(-8px);
            border-color: var(--color-blue-cyan);
            box-shadow: 0 20px 50px rgba(0, 167, 250, 0.35);
        }

        .card-tag {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 20px;
            font-weight: 800;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .card-tag-cyan {
            background: rgba(0, 167, 250, 0.2);
            border: 1px solid var(--color-blue-cyan);
            color: var(--color-blue-cyan);
        }

        .card-tag-gold {
            background: rgba(196, 174, 4, 0.2);
            border: 1px solid var(--color-gold);
            color: var(--color-gold);
        }

        .list-styled {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .list-styled li {
            padding: 9px 0;
            color: rgba(255, 255, 255, 0.95);
            font-size: 0.98rem;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .list-styled li:last-child {
            border-bottom: none;
        }

        .list-styled li i {
            color: var(--color-gold);
            font-size: 1.1rem;
            filter: drop-shadow(0 0 6px rgba(196, 174, 4, 0.6));
        }

        .pill-badge {
            background: rgba(6, 21, 120, 0.6);
            border: 1px solid rgba(0, 167, 250, 0.3);
            color: var(--color-text-white);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .pill-badge:hover {
            background: var(--color-blue-deep);
            border-color: var(--color-gold);
            transform: translateY(-2px);
        }

        /* Creative Comparison Box & Table */
        .comparison-wrapper {
            background: linear-gradient(145deg, rgba(11, 19, 43, 0.98), rgba(2, 6, 23, 0.98));
            backdrop-filter: blur(20px);
            border: 2px solid rgba(0, 167, 250, 0.4);
            border-radius: 28px;
            padding: 35px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.9), 0 0 35px rgba(0, 167, 250, 0.2);
            position: relative;
            overflow: hidden;
        }

        .comparison-cards-header {
            margin-bottom: 30px;
        }

        .comp-card-head {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 20px;
            padding: 24px;
            text-align: center;
            height: 100%;
            transition: all 0.3s ease;
        }

        .comp-card-head.estatica {
            border-color: rgba(0, 167, 250, 0.5);
            background: linear-gradient(180deg, rgba(0, 167, 250, 0.18) 0%, rgba(6, 21, 120, 0.25) 100%);
            box-shadow: 0 10px 30px rgba(0, 167, 250, 0.2);
        }

        .comp-card-head.dinamica {
            border-color: rgba(196, 174, 4, 0.5);
            background: linear-gradient(180deg, rgba(196, 174, 4, 0.18) 0%, rgba(3, 99, 38, 0.25) 100%);
            box-shadow: 0 10px 30px rgba(196, 174, 4, 0.2);
        }

        .comp-card-head h4 {
            color: #ffffff !important;
            font-weight: 800;
            font-size: 1.35rem;
            margin-bottom: 8px;
        }

        .comp-card-head p {
            color: #ffffff !important;
            font-size: 0.95rem;
            margin-bottom: 0;
            opacity: 0.95;
        }

        .table-custom-enhanced {
            width: 100%;
            margin-bottom: 0;
            color: #ffffff !important;
            border-collapse: separate;
            border-spacing: 0 10px;
        }

        .table-custom-enhanced th {
            background: rgba(2, 6, 23, 0.95) !important;
            color: #ffffff !important;
            font-weight: 800;
            font-size: 1.15rem;
            padding: 20px 24px;
            border: none;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .table-custom-enhanced th:first-child {
            border-radius: 14px 0 0 14px;
        }

        .table-custom-enhanced th:last-child {
            border-radius: 0 14px 14px 0;
        }

        .table-custom-enhanced td {
            background: rgba(255, 255, 255, 0.04) !important;
            color: #ffffff !important;
            padding: 18px 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 1rem;
            font-weight: 600;
            vertical-align: middle;
        }

        .table-custom-enhanced tr td:first-child {
            border-left: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 14px 0 0 14px;
            color: #ffffff !important;
        }

        .table-custom-enhanced tr td:last-child {
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0 14px 14px 0;
        }

        .table-custom-enhanced tr:hover td {
            background: rgba(0, 167, 250, 0.2) !important;
            border-color: rgba(0, 167, 250, 0.4);
            color: #ffffff !important;
        }

        .badge-status-included {
            background: linear-gradient(135deg, #036326 0%, #28a745 100%);
            color: #ffffff !important;
            padding: 7px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            box-shadow: 0 0 12px rgba(40, 167, 69, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .badge-status-excluded {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ffffff !important;
            padding: 7px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            opacity: 0.85;
        }

        .badge-status-limited {
            background: linear-gradient(135deg, rgba(196, 174, 4, 0.4) 0%, rgba(196, 174, 4, 0.8) 100%);
            border: 1px solid #c4ae04;
            color: #ffffff !important;
            padding: 7px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            box-shadow: 0 0 12px rgba(196, 174, 4, 0.4);
        }

        /* Concept Banner Section */
        .concept-banner {
            background: linear-gradient(135deg, rgba(2, 6, 23, 0.95) 0%, rgba(6, 21, 120, 0.9) 50%, rgba(3, 99, 38, 0.85) 100%);
            border: 2px solid var(--color-gold);
            border-radius: 28px;
            padding: 50px 40px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
            position: relative;
        }

        .concept-card {
            background: rgba(11, 19, 43, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 167, 250, 0.3);
            border-radius: 20px;
            padding: 30px;
            height: 100%;
            transition: all 0.3s ease;
        }

        .concept-card:hover {
            transform: translateY(-6px);
            border-color: var(--color-gold);
            box-shadow: 0 15px 35px rgba(196, 174, 4, 0.3);
        }

        /* Call To Action Banner */
        .cta-banner {
            background: linear-gradient(135deg, var(--color-blue-deep) 0%, var(--color-green) 100%);
            border-radius: 28px;
            padding: 60px 40px;
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
                            <a class="nav-link" href="https://www.todowebcusco.com/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="https://www.todowebcusco.com/paginas-web/">Página Web</a>
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

    <!-- PAGE HERO SECTION -->
    <section class="page-hero">
        <div class="container position-relative z-2">
            <span class="page-hero-badge animate__animated animate__fadeInDown">
                <i class="bi bi-globe"></i> Soluciones Web Profesionales
            </span>
            <h1 class="page-hero-title animate__animated animate__fadeInUp">
                PÁGINAS <span>WEB</span>
            </h1>
            <h2 class="page-hero-subtitle animate__animated animate__fadeInUp">
                Tu presencia digital comienza aquí
            </h2>
            <div class="page-hero-desc animate__animated animate__fadeInUp">
                <p class="mb-3">
                    En <strong>CANDELAWEB</strong> diseñamos y desarrollamos páginas web modernas, profesionales y adaptadas a las necesidades de cada proyecto.
                </p>
                <p class="mb-3 opacity-90">
                    Desde una página corporativa sencilla hasta una plataforma web con funcionalidades avanzadas, convertimos tus ideas en una experiencia digital atractiva, rápida y funcional.
                </p>
                <p class="fw-semibold text-warning fs-5 m-0">
                    Creamos páginas web que no solo se ven bien, sino que ayudan a comunicar, conectar y hacer crecer tu negocio.
                </p>
            </div>
        </div>
    </section>

    <!-- SECTIONS 1 & 2: PÁGINAS WEB ESTÁTICAS Y DINÁMICAS -->
    <section class="py-5 position-relative">
        <div class="container py-4">
            <div class="row g-5">

                <!-- 1. PÁGINAS WEB ESTÁTICAS -->
                <div class="col-lg-6" id="estaticas">
                    <div class="content-card">
                        <span class="card-tag card-tag-cyan">
                            <i class="bi bi-lightning-charge-fill me-1"></i> Opción 1
                        </span>
                        <h2 class="fw-extrabold text-white mb-2 fs-2">1. PÁGINAS WEB ESTÁTICAS</h2>
                        <h4 class="text-info fw-semibold mb-4 fs-5">Simple. Rápida. Profesional.</h4>

                        <p class="text-white opacity-90 mb-4" style="line-height: 1.7;">
                            Una página web estática es ideal para empresas, profesionales y emprendimientos que necesitan presentar sus servicios, productos o información de manera clara y profesional.
                        </p>

                        <h5 class="text-warning fw-bold mb-3 fs-6">Secciones recomendadas:</h5>
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <span class="pill-badge"><i class="bi bi-house-fill text-info"></i> Inicio</span>
                            <span class="pill-badge"><i class="bi bi-people-fill text-info"></i> Nosotros</span>
                            <span class="pill-badge"><i class="bi bi-gear-fill text-info"></i> Servicios</span>
                            <span class="pill-badge"><i class="bi bi-box-seam-fill text-info"></i> Productos</span>
                            <span class="pill-badge"><i class="bi bi-images text-info"></i> Galería</span>
                            <span class="pill-badge"><i class="bi bi-envelope-fill text-info"></i> Contacto</span>
                            <span class="pill-badge"><i class="bi bi-geo-alt-fill text-info"></i> Ubicación</span>
                            <span class="pill-badge"><i class="bi bi-share-fill text-info"></i> Redes Sociales</span>
                        </div>

                        <h5 class="text-warning fw-bold mb-3 fs-6">Ideal para:</h5>
                        <p class="text-white fw-medium mb-4 fs-6">
                            Empresas · Profesionales · Emprendedores · Portafolios · Instituciones · Eventos
                        </p>

                        <h5 class="text-warning fw-bold mb-3 fs-6">Características principales:</h5>
                        <ul class="list-styled mb-4">
                            <li><i class="bi bi-check-circle-fill"></i> Carga rápida y optimizada</li>
                            <li><i class="bi bi-check-circle-fill"></i> Diseño adaptable a celulares (Responsive)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Diseño 100% personalizado</li>
                            <li><i class="bi bi-check-circle-fill"></i> Optimización básica para buscadores (SEO)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Integración con Google Maps</li>
                            <li><i class="bi bi-check-circle-fill"></i> Botones directos de WhatsApp y Redes Sociales</li>
                            <li><i class="bi bi-check-circle-fill"></i> Formularios de contacto interactivos</li>
                            <li><i class="bi bi-check-circle-fill"></i> Certificado de Seguridad SSL incluido</li>
                            <li><i class="bi bi-check-circle-fill"></i> Dominio y hosting disponibles</li>
                        </ul>

                        <div class="p-3 mb-4 rounded-3 border border-info" style="background: rgba(0, 167, 250, 0.12);">
                            <span class="text-info fw-bold d-block mb-1">Concepto comercial:</span>
                            <span class="text-white fs-6 fw-medium">"Una presencia profesional en Internet, sin complicaciones."</span>
                        </div>

                        <div class="text-center text-md-start">
                            <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20crear%20mi%20P%C3%A1gina%20Web%20Est%C3%A1tica" target="_blank" class="btn-custom-gold w-100 justify-content-center">
                                <i class="bi bi-rocket-takeoff-fill"></i> Crear mi Página Web
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2. PÁGINAS WEB DINÁMICAS -->
                <div class="col-lg-6" id="dinamicas">
                    <div class="content-card" style="border-color: rgba(196, 174, 4, 0.35);">
                        <span class="card-tag card-tag-gold">
                            <i class="bi bi-cpu-fill me-1"></i> Opción 2
                        </span>
                        <h2 class="fw-extrabold text-white mb-2 fs-2">2. PÁGINAS WEB DINÁMICAS</h2>
                        <h4 class="text-warning fw-semibold mb-4 fs-5">Más que una página: una herramienta para tu negocio.</h4>

                        <p class="text-white opacity-90 mb-4" style="line-height: 1.7;">
                            Las páginas web dinámicas permiten incorporar funcionalidades interactivas y contenidos que pueden ser administrados y actualizados de acuerdo con las necesidades del proyecto.
                        </p>

                        <p class="text-white opacity-90 mb-4" style="line-height: 1.7;">
                            Son ideales para negocios que necesitan que su sitio web interactúe con usuarios, gestione información o automatice procesos internos.
                        </p>

                        <h5 class="text-warning fw-bold mb-3 fs-6">Podemos desarrollar:</h5>
                        <ul class="list-styled mb-4">
                            <li><i class="bi bi-cart-check-fill"></i> Tiendas online (E-Commerce)</li>
                            <li><i class="bi bi-calendar-check-fill"></i> Sistemas de reservas y citas</li>
                            <li><i class="bi bi-person-check-fill"></i> Registro de usuarios y perfiles</li>
                            <li><i class="bi bi-lock-fill"></i> Áreas privadas y portales de clientes</li>
                            <li><i class="bi bi-grid-3x3-gap-fill"></i> Catálogos administrables</li>
                            <li><i class="bi bi-journal-text"></i> Blogs y secciones de noticias administrables</li>
                            <li><i class="bi bi-credit-card-fill"></i> Integración de pasarelas de pagos</li>
                            <li><i class="bi bi-speedometer2"></i> Paneles administrativos a medida</li>
                            <li><i class="bi bi-ui-checks"></i> Formularios avanzados y cotizadores</li>
                            <li><i class="bi bi-bell-fill"></i> Sistema de notificaciones automáticas</li>
                            <li><i class="bi bi-database-fill"></i> Bases de datos relacionales seguras</li>
                            <li><i class="bi bi-plug-fill"></i> Integración con APIs y servicios externos</li>
                        </ul>

                        <h5 class="text-warning fw-bold mb-3 fs-6">Ideal para:</h5>
                        <p class="text-white fw-medium mb-4 fs-6">
                            Empresas · Tiendas · Restaurantes · Hoteles · Agencias de viajes · Instituciones · Academias · Emprendimientos digitales
                        </p>

                        <div class="p-3 mb-4 rounded-3 border border-warning" style="background: rgba(196, 174, 4, 0.12);">
                            <span class="text-warning fw-bold d-block mb-1">Concepto comercial:</span>
                            <span class="text-white fs-6 fw-medium">"Tu página web evoluciona junto con tu negocio."</span>
                        </div>

                        <div class="text-center text-md-start">
                            <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20quiero%20desarrollar%20mi%20Proyecto%20Web%20Din%C3%A1mico" target="_blank" class="btn-custom-primary w-100 justify-content-center">
                                <i class="bi bi-code-slash"></i> Desarrollar mi Proyecto Web
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. ESTÁTICA vs DINÁMICA (CREATIVE COMPARATIVE TABLE) -->
    <section class="py-5 position-relative" id="comparativa">
        <div class="container py-4">
            <div class="section-header">
                <span class="section-subtitle" style="color: #ffffff !important;">Cuadro Comparativo</span>
                <h2 class="section-title" style="color: #ffffff !important;">3. ESTÁTICA vs DINÁMICA</h2>
                <p class="text-white fs-5 mt-3 opacity-90">
                    Compara de un vistazo las características y alcance de cada tipo de desarrollo web.
                </p>
            </div>

            <div class="comparison-wrapper">
                <!-- Header Summary Cards -->
                <div class="row g-4 comparison-cards-header">
                    <div class="col-md-6">
                        <div class="comp-card-head estatica">
                            <span class="badge bg-info text-dark fw-bold mb-2">OPCIÓN 1</span>
                            <h4 class="text-white fw-bold">🌐 WEB ESTÁTICA</h4>
                            <p class="text-white">Para presentar tu empresa con rapidez, elegancia y alto impacto visual.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="comp-card-head dinamica">
                            <span class="badge bg-warning text-dark fw-bold mb-2">OPCIÓN 2</span>
                            <h4 class="text-white fw-bold">🚀 WEB DINÁMICA</h4>
                            <p class="text-white">Para autogestionar contenidos, vender online e interactuar con usuarios.</p>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-custom-enhanced align-middle text-center">
                        <thead>
                            <tr>
                                <th class="text-start text-white">CARACTERÍSTICA / FUNCIONALIDAD</th>
                                <th class="text-white">🌐 ESTÁTICA</th>
                                <th class="text-white">🚀 DINÁMICA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start text-white">Información corporativa y catálogo básico</td>
                                <td><span class="badge-status-included"><i class="bi bi-check-circle-fill"></i> Incluido</span></td>
                                <td><span class="badge-status-included"><i class="bi bi-check-circle-fill"></i> Incluido</span></td>
                            </tr>
                            <tr>
                                <td class="text-start text-white">Diseño personalizado adaptable a celulares</td>
                                <td><span class="badge-status-included"><i class="bi bi-check-circle-fill"></i> Incluido</span></td>
                                <td><span class="badge-status-included"><i class="bi bi-check-circle-fill"></i> Incluido</span></td>
                            </tr>
                            <tr>
                                <td class="text-start text-white">Formularios de contacto e integración WhatsApp</td>
                                <td><span class="badge-status-included"><i class="bi bi-check-circle-fill"></i> Incluido</span></td>
                                <td><span class="badge-status-included"><i class="bi bi-check-circle-fill"></i> Incluido</span></td>
                            </tr>
                            <tr>
                                <td class="text-start text-white">Certificado SSL de Seguridad y Optimización SEO</td>
                                <td><span class="badge-status-included"><i class="bi bi-check-circle-fill"></i> Incluido</span></td>
                                <td><span class="badge-status-included"><i class="bi bi-check-circle-fill"></i> Incluido</span></td>
                            </tr>
                            <tr>
                                <td class="text-start text-white">Contenido administrable sin programar</td>
                                <td><span class="badge-status-excluded"><i class="bi bi-dash-circle"></i> No aplica</span></td>
                                <td><span class="badge-status-included"><i class="bi bi-check-circle-fill"></i> Incluido</span></td>
                            </tr>
                            <tr>
                                <td class="text-start text-white">Base de datos relacional y panel administrativo</td>
                                <td><span class="badge-status-excluded"><i class="bi bi-dash-circle"></i> No incluye</span></td>
                                <td><span class="badge-status-included"><i class="bi bi-check-circle-fill"></i> Incluido</span></td>
                            </tr>
                            <tr>
                                <td class="text-start text-white">Gestión de usuarios, clientes y perfiles</td>
                                <td><span class="badge-status-excluded"><i class="bi bi-dash-circle"></i> No incluye</span></td>
                                <td><span class="badge-status-included"><i class="bi bi-check-circle-fill"></i> Incluido</span></td>
                            </tr>
                            <tr>
                                <td class="text-start text-white">Sistema de reservas, citas o eventos</td>
                                <td><span class="badge-status-limited"><i class="bi bi-exclamation-triangle-fill"></i> Vía WhatsApp</span></td>
                                <td><span class="badge-status-included"><i class="bi bi-check-circle-fill"></i> Automatizado</span></td>
                            </tr>
                            <tr>
                                <td class="text-start text-white">Tienda online con pasarela de pagos (E-Commerce)</td>
                                <td><span class="badge-status-excluded"><i class="bi bi-dash-circle"></i> No incluye</span></td>
                                <td><span class="badge-status-included"><i class="bi bi-check-circle-fill"></i> Incluido</span></td>
                            </tr>
                            <tr>
                                <td class="text-start text-white">Integraciones avanzadas con APIs externas</td>
                                <td><span class="badge-status-limited"><i class="bi bi-dash-circle-fill"></i> Limitadas</span></td>
                                <td><span class="badge-status-included"><i class="bi bi-check-circle-fill"></i> Completa</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- CONCEPTO GENERAL PARA CANDELAWEB -->
    <section class="py-5 position-relative">
        <div class="container py-3">
            <div class="concept-banner">
                <div class="text-center mb-5">
                    <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold text-uppercase fs-6">💡 Concepto general para CANDELAWEB</span>
                    <h2 class="display-6 fw-extrabold text-white mt-3 mb-2" style="font-weight: 900; letter-spacing: -1px;">
                        DOS CAMINOS. UNA SOLUCIÓN DIGITAL.
                    </h2>
                </div>

                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="concept-card text-center">
                            <div class="fs-1 text-info mb-3"><i class="bi bi-bank2"></i></div>
                            <h3 class="text-white fw-bold fs-4 mb-2">¿Necesitas presentar tu negocio?</h3>
                            <p class="text-white opacity-90 fs-5 mb-0">
                                Comenzamos con una <strong class="text-info">Página Web Estática</strong> impecable, rápida y elegante.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="concept-card text-center">
                            <div class="fs-1 text-warning mb-3"><i class="bi bi-rocket-takeoff-fill"></i></div>
                            <h3 class="text-white fw-bold fs-4 mb-2">¿Necesitas gestionar, vender o automatizar?</h3>
                            <p class="text-white opacity-90 fs-5 mb-0">
                                Creamos una <strong class="text-warning">Página Web Dinámica</strong> potente y altamente escalable.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-4 rounded-4 text-center border border-warning" style="background: rgba(196, 174, 4, 0.15);">
                    <h3 class="text-white fw-bold fs-3 m-0">
                        <i class="bi bi-fire text-warning me-2"></i> Tú tienes la idea. <span style="color: var(--color-blue-cyan);">CANDELAWEB</span> la convierte en una experiencia digital.
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <!-- LLAMADA FINAL (CTA) -->
    <section class="py-5 position-relative" id="llamada-final">
        <div class="container">
            <div class="cta-banner">
                <div class="text-center max-w-2xl mx-auto mb-5">
                    <span class="badge bg-warning text-dark fw-bold px-3 py-1 mb-2">🔥 Llamada final</span>
                    <h2 class="fw-extrabold text-white mb-3 fs-1">¿Qué tipo de página necesita tu negocio?</h2>
                    <p class="text-white opacity-90 fs-5">
                        Elige la opción que mejor se adapte a tus metas actuales y encendamos tu proyecto digital hoy mismo.
                    </p>
                </div>

                <div class="row g-4 align-items-center mb-5">
                    <!-- Card 1: ESTÁTICA -->
                    <div class="col-md-6">
                        <div class="p-4 rounded-4 border border-info h-100" style="background: rgba(2, 6, 23, 0.85); backdrop-filter: blur(10px);">
                            <span class="badge bg-info text-dark fw-bold mb-2">Opción 1</span>
                            <h3 class="text-white fw-bold fs-3 mb-3">ESTÁTICA</h3>
                            <p class="text-white opacity-90 fs-5 mb-4">
                                Para presentar tu empresa, servicios o proyecto de manera profesional.
                            </p>
                            <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20deseo%20cotizar%20una%20P%C3%A1gina%20Web%20Est%C3%A1tica" target="_blank" class="btn-custom-gold w-100 justify-content-center">
                                <i class="bi bi-whatsapp"></i> Cotizar Estática
                            </a>
                        </div>
                    </div>

                    <!-- Card 2: DINÁMICA -->
                    <div class="col-md-6">
                        <div class="p-4 rounded-4 border border-warning h-100" style="background: rgba(2, 6, 23, 0.85); backdrop-filter: blur(10px);">
                            <span class="badge bg-warning text-dark fw-bold mb-2">Opción 2</span>
                            <h3 class="text-white fw-bold fs-3 mb-3">DINÁMICA</h3>
                            <p class="text-white opacity-90 fs-5 mb-4">
                                Para interactuar con tus clientes, administrar información y hacer crecer tu negocio.
                            </p>
                            <a href="https://wa.me/51935209781?text=Hola%20CANDELAWEB,%20deseo%20cotizar%20una%20P%C3%A1gina%20Web%20Din%C3%A1mica" target="_blank" class="btn-custom-primary w-100 justify-content-center">
                                <i class="bi bi-whatsapp"></i> Cotizar Dinámica
                            </a>
                        </div>
                    </div>
                </div>

                <div class="text-center border-top border-white border-opacity-25 pt-4">
                    <h3 class="text-white fw-extrabold fs-2 m-0" style="letter-spacing: 1px;">
                        CANDELAWEB
                    </h3>
                    <p class="text-warning fw-bold fs-4 m-0 mt-1" style="text-shadow: 0 0 10px rgba(196, 174, 4, 0.5);">
                        Diseñamos. Desarrollamos. Encendemos tus ideas.
                    </p>
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
