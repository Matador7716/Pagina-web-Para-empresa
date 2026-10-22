<?php
// Notaría Huanca Cusco - Anta
// Sistema Web Integral y Mesa de Partes Virtual
$page_title = "Notaría Huanca | Cusco - Anta | Fe Pública y Seguridad Jurídica";

// Simple PHP handler for contact form or mesa de partes submission if posted
$submission_success = false;
$generated_expediente = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'submit_mesa_partes') {
        $submission_success = true;
        $random_num = rand(1000, 9999);
        $sede_prefix = (isset($_POST['sede']) && $_POST['sede'] === 'anta') ? 'ANT' : 'CUS';
        $generated_expediente = "EXP-2025-" . $sede_prefix . "-" . $random_num;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <!-- Meta Tags SEO & Social -->
    <meta name="description" content="Notaría Huanca en Cusco y Anta. Servicios notariales, escrituras públicas, transferencias vehiculares, sucesiones intestadas y Mesa de Partes Virtual.">
    <meta name="keywords" content="Notaria Huanca, Notaria Cusco, Notaria Anta, Mesa de Partes Virtual, Escritura Publica, Transferencia Vehicular, Cusco, Anta">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        :root {
            --primary-navy: #0a2240;
            --primary-navy-dark: #06152a;
            --accent-gold: #c59b27;
            --accent-gold-light: #e6be53;
            --accent-gold-dark: #997517;
            --text-dark: #1e293b;
            --text-muted: #64748b;
            --bg-light: #f8fafc;
            --bg-card: #ffffff;
            --border-color: #e2e8f0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-dark);
            background-color: var(--bg-light);
            overflow-x: hidden;
        }

        h1, h2, h3, .font-serif {
            font-family: 'Cinzel', serif;
        }

        /* Top Bar */
        .top-bar {
            background-color: var(--primary-navy-dark);
            color: #d1d5db;
            font-size: 0.85rem;
            padding: 8px 0;
            border-bottom: 1px solid rgba(197, 155, 39, 0.3);
        }

        .top-bar a {
            color: #f3f4f6;
            text-decoration: none;
            transition: color 0.2s;
        }

        .top-bar a:hover {
            color: var(--accent-gold-light);
        }

        .top-bar .badge-sede {
            background-color: var(--accent-gold);
            color: var(--primary-navy-dark);
            font-weight: 700;
            font-size: 0.72rem;
            padding: 3px 8px;
            border-radius: 4px;
        }

        /* Main Navbar */
        .navbar-custom {
            background-color: var(--primary-navy);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            padding: 12px 0;
            sticky-top: top;
            z-index: 1030;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-logo-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--accent-gold), var(--accent-gold-dark));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.5rem;
            box-shadow: 0 2px 10px rgba(197, 155, 39, 0.4);
        }

        .brand-title {
            color: #ffffff;
            font-family: 'Cinzel', serif;
            font-weight: 700;
            font-size: 1.35rem;
            line-height: 1.1;
            margin: 0;
            letter-spacing: 0.5px;
        }

        .brand-subtitle {
            color: var(--accent-gold-light);
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 600;
        }

        .nav-link {
            color: #e2e8f0 !important;
            font-weight: 600;
            font-size: 0.92rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 8px 16px !important;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--accent-gold-light) !important;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 16px;
            right: 16px;
            height: 3px;
            background-color: var(--accent-gold);
            border-radius: 2px;
        }

        .btn-gold {
            background: linear-gradient(135deg, var(--accent-gold), var(--accent-gold-dark));
            color: #ffffff !important;
            font-weight: 700;
            border: none;
            padding: 10px 22px;
            border-radius: 6px;
            box-shadow: 0 4px 12px rgba(197, 155, 39, 0.3);
            transition: all 0.3s ease;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }

        .btn-gold:hover {
            background: linear-gradient(135deg, var(--accent-gold-light), var(--accent-gold));
            box-shadow: 0 6px 18px rgba(197, 155, 39, 0.5);
            transform: translateY(-2px);
        }

        .btn-outline-gold {
            border: 2px solid var(--accent-gold);
            color: var(--accent-gold);
            font-weight: 700;
            padding: 8px 20px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .btn-outline-gold:hover {
            background-color: var(--accent-gold);
            color: var(--primary-navy);
        }

        /* Tab content handling */
        .tab-section {
            display: none;
            padding: 60px 0;
        }

        .tab-section.active-section {
            display: block;
            animation: fadeIn 0.4s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Hero Section (Home) */
        .hero-section {
            background: linear-gradient(135deg, rgba(10, 34, 64, 0.92), rgba(6, 21, 42, 0.96)), url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            color: #ffffff;
            padding: 90px 0 100px 0;
            position: relative;
        }

        .hero-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: #ffffff;
            line-height: 1.25;
            margin-bottom: 20px;
        }

        .hero-title span {
            color: var(--accent-gold-light);
        }

        .hero-subtitle {
            font-size: 1.15rem;
            color: #cbd5e1;
            margin-bottom: 35px;
            line-height: 1.6;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(197, 155, 39, 0.2);
            border: 1px solid var(--accent-gold);
            color: var(--accent-gold-light);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* Card Styles */
        .stat-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 24px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border-bottom: 4px solid var(--accent-gold);
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-family: 'Cinzel', serif;
            font-size: 2.4rem;
            font-weight: 700;
            color: var(--primary-navy);
        }

        .stat-label {
            color: var(--text-muted);
            font-size: 0.9rem;
            font-weight: 600;
            margin-top: 5px;
        }

        .service-card {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--border-color);
            padding: 30px 24px;
            height: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            box-shadow: 0 15px 35px rgba(10, 34, 64, 0.1);
            border-color: var(--accent-gold);
            transform: translateY(-5px);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background: rgba(10, 34, 64, 0.05);
            color: var(--primary-navy);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            background: var(--primary-navy);
            color: var(--accent-gold-light);
        }

        .service-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--primary-navy);
            margin-bottom: 12px;
        }

        .service-desc {
            color: var(--text-muted);
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        /* Section Header */
        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-subtitle {
            color: var(--accent-gold-dark);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.85rem;
            margin-bottom: 8px;
            display: block;
        }

        .section-title {
            color: var(--primary-navy);
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .section-divider {
            width: 70px;
            height: 4px;
            background: linear-gradient(to right, var(--primary-navy), var(--accent-gold));
            margin: 0 auto;
            border-radius: 2px;
        }

        /* Mesa de Partes Special Box */
        .mesa-partes-box {
            background: linear-gradient(135deg, var(--primary-navy), var(--primary-navy-dark));
            color: #ffffff;
            border-radius: 16px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(197, 155, 39, 0.3);
        }

        .mesa-partes-box::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: rgba(197, 155, 39, 0.1);
            border-radius: 50%;
        }

        /* Location Card */
        .location-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--border-color);
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .location-header {
            background: var(--primary-navy);
            color: #ffffff;
            padding: 20px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .location-body {
            padding: 25px;
        }

        .location-info-item {
            display: flex;
            gap: 15px;
            margin-bottom: 18px;
            align-items: flex-start;
        }

        .location-info-item i {
            color: var(--accent-gold);
            font-size: 1.2rem;
            margin-top: 3px;
        }

        .map-container {
            width: 100%;
            height: 260px;
            border: 0;
            border-radius: 8px;
        }

        /* Tracking Timeline */
        .timeline-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-top: 30px;
        }

        .timeline-steps::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 3px;
            background: #e2e8f0;
            z-index: 1;
        }

        .timeline-step {
            position: relative;
            z-index: 2;
            background: #fff;
            padding: 0 10px;
            text-align: center;
        }

        .step-icon {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #e2e8f0;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px auto;
            font-weight: 700;
        }

        .timeline-step.completed .step-icon {
            background: #10b981;
            color: #ffffff;
        }

        .timeline-step.active .step-icon {
            background: var(--accent-gold);
            color: var(--primary-navy);
            box-shadow: 0 0 0 4px rgba(197, 155, 39, 0.2);
        }

        /* Footer */
        footer {
            background-color: var(--primary-navy-dark);
            color: #94a3b8;
            padding: 70px 0 30px 0;
            border-top: 3px solid var(--accent-gold);
        }

        footer h5 {
            color: #ffffff;
            font-family: 'Cinzel', serif;
            font-size: 1.1rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        footer h5::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 35px;
            height: 2px;
            background-color: var(--accent-gold);
        }

        footer a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.2s;
        }

        footer a:hover {
            color: var(--accent-gold-light);
        }

        /* WhatsApp Floating Button */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 32px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            color: #FFF;
            box-shadow: 0 6px 20px rgba(37,211,102,0.5);
        }

        /* Service Modal */
        .modal-header-custom {
            background: var(--primary-navy);
            color: #ffffff;
        }

        .modal-header-custom .btn-close {
            filter: invert(1);
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-9">
                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <div>
                            <i class="fa-solid fa-clock text-warning me-1"></i>
                            <strong>Atención:</strong> Lun - Vie 8:00am - 5:00pm | Sáb 9:00am - 1:00pm
                        </div>
                        <div class="d-none d-sm-block">|</div>
                        <div>
                            <span class="badge-sede me-1"><i class="fa-solid fa-building me-1"></i>CUSCO:</span>
                            <a href="tel:084224890"><i class="fa-solid fa-phone me-1"></i>(084) 224-890</a>
                        </div>
                        <div class="d-none d-sm-block">|</div>
                        <div>
                            <span class="badge-sede me-1"><i class="fa-solid fa-building me-1"></i>ANTA:</span>
                            <a href="tel:084501234"><i class="fa-solid fa-phone me-1"></i>(084) 501-234</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 text-end d-none d-md-block">
                    <a href="https://wa.me/51984123456?text=Hola%20Notaria%20Huanca,%20deseo%20realizar%20una%20consulta" target="_blank" class="text-white font-weight-bold">
                        <i class="fa-brands fa-whatsapp text-success fs-6 me-1"></i> WhatsApp Directo
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#inicio" onclick="switchTab('inicio')">
                <div class="brand-logo-icon">
                    <i class="fa-solid fa-scale-balanced"></i>
                </div>
                <div>
                    <div class="brand-title">NOTARÍA HUANCA</div>
                    <div class="brand-subtitle">Cusco - Provincia de Anta</div>
                </div>
            </a>

            <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#notariaNavbar" aria-controls="notariaNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars fs-2 text-warning"></i>
            </button>

            <div class="collapse navbar-collapse" id="notariaNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-inicio" href="#inicio" onclick="switchTab('inicio')">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-nosotros" href="#nosotros" onclick="switchTab('nosotros')">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-servicios" href="#servicios" onclick="switchTab('servicios')">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-mesa-partes" href="#mesa-partes" onclick="switchTab('mesa-partes')">Mesa de Partes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-contacto" href="#contacto" onclick="switchTab('contacto')">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-ubicacion" href="#ubicacion" onclick="switchTab('ubicacion')">Ubicación</a>
                    </li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <button class="btn btn-gold w-100" onclick="switchTab('mesa-partes')">
                            <i class="fa-solid fa-file-signature me-1"></i> Mesa de Partes
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENT SECTIONS -->

    <!-- 1. TAB INICIO -->
    <section id="tab-inicio" class="tab-section active-section p-0">
        <!-- Hero Section -->
        <div class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-badge animate__animated animate__fadeInDown">
                            <i class="fa-solid fa-shield-halved"></i> Fe Pública & Seguridad Jurídica Garantizada
                        </div>
                        <h1 class="hero-title animate__animated animate__fadeInLeft">
                            Garantía, Respaldo y <span>Legalidad Notarial</span> para Cusco y Anta
                        </h1>
                        <p class="hero-subtitle animate__animated animate__fadeInLeft">
                            Brindamos servicios notariales integrales con la máxima eficiencia, transparencia y rigor legal. Tramite sus escrituras, poderes, vehículos y documentos en nuestras sedes o mediante nuestra Mesa de Partes Virtual.
                        </p>
                        <div class="d-flex flex-wrap gap-3 animate__animated animate__fadeInUp">
                            <button class="btn btn-gold btn-lg" onclick="switchTab('mesa-partes')">
                                <i class="fa-solid fa-paper-plane me-2"></i> Trámites Virtuales
                            </button>
                            <button class="btn btn-outline-light btn-lg font-weight-bold" onclick="switchTab('servicios')">
                                <i class="fa-solid fa-book-bookmark me-2"></i> Ver Servicios Notariales
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5 mt-lg-0 d-none d-lg-block">
                        <div class="card border-0 shadow-lg p-4 bg-white text-dark rounded-4" style="border-top: 5px solid var(--accent-gold) !important;">
                            <div class="text-center mb-3">
                                <div class="badge bg-navy px-3 py-2 text-uppercase mb-2" style="background-color: var(--primary-navy); color: var(--accent-gold-light);">Atención Inmediata</div>
                                <h4 class="font-serif fw-bold text-navy">¿Necesita Asesoría Notarial?</h4>
                                <p class="text-muted small">Seleccione su sede de interés o envíe su expediente de forma virtual</p>
                            </div>
                            <div class="d-grid gap-2">
                                <button onclick="switchTab('mesa-partes')" class="btn btn-outline-navy py-2 font-weight-bold" style="border: 1px solid var(--primary-navy); color: var(--primary-navy);">
                                    <i class="fa-solid fa-file-upload text-gold me-2"></i> Ingresar Mesa de Partes
                                </button>
                                <a href="https://wa.me/51984123456?text=Consulta%20Sede%20Cusco" target="_blank" class="btn btn-success py-2 fw-bold">
                                    <i class="fa-brands fa-whatsapp me-2"></i> Sede Cusco (+51 984 123 456)
                                </a>
                                <a href="https://wa.me/51984654321?text=Consulta%20Sede%20Anta" target="_blank" class="btn btn-success py-2 fw-bold">
                                    <i class="fa-brands fa-whatsapp me-2"></i> Sede Anta (+51 984 654 321)
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Metrics Bar -->
        <div class="container mt-n5 position-relative" style="z-index: 10;">
            <div class="row g-3">
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-number">+15</div>
                        <div class="stat-label">Años de Trayectoria</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-number">+50k</div>
                        <div class="stat-label">Trámites Atendidos</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-number">2</div>
                        <div class="stat-label">Sedes (Cusco y Anta)</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Seguridad Jurídica</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Featured Services Section -->
        <div class="container py-5 mt-4">
            <div class="section-header">
                <span class="section-subtitle">Áreas de Especialidad</span>
                <h2 class="section-title">Servicios Notariales Destacados</h2>
                <div class="section-divider"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa-solid fa-file-contract"></i>
                        </div>
                        <h3 class="service-title">Escrituras Públicas</h3>
                        <p class="service-desc">Otorgamiento de escrituras de compraventa de inmuebles, donaciones, permutación, hipotecas y constitución de sociedades comerciales.</p>
                        <button onclick="openRequirementsModal('escrituras')" class="btn btn-link p-0 text-decoration-none fw-bold text-navy">
                            Ver Requisitos <i class="fa-solid fa-arrow-right ms-1 text-gold"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa-solid fa-car-side"></i>
                        </div>
                        <h3 class="service-title">Trámites Vehiculares</h3>
                        <p class="service-desc">Transferencias de propiedad vehicular, actas de transferencia, levantamiento de prendas e inscripciones ante la SUNARP.</p>
                        <button onclick="openRequirementsModal('vehicular')" class="btn btn-link p-0 text-decoration-none fw-bold text-navy">
                            Ver Requisitos <i class="fa-solid fa-arrow-right ms-1 text-gold"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa-solid fa-users-rectangle"></i>
                        </div>
                        <h3 class="service-title">Asuntos No Contenciosos</h3>
                        <p class="service-desc">Sucesión Intestada (Declaratoria de Herederos), rectificación de partidas, divorcio notarial y constitución de patrimonio familiar.</p>
                        <button onclick="openRequirementsModal('sucesion')" class="btn btn-link p-0 text-decoration-none fw-bold text-navy">
                            Ver Requisitos <i class="fa-solid fa-arrow-right ms-1 text-gold"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </div>
                        <h3 class="service-title">Cartas Notariales</h3>
                        <p class="service-desc">Redacción, diligenciamiento y entrega con fe notarial de cartas a personas naturales o jurídicas en Cusco y la provincia de Anta.</p>
                        <button onclick="openRequirementsModal('cartas')" class="btn btn-link p-0 text-decoration-none fw-bold text-navy">
                            Ver Requisitos <i class="fa-solid fa-arrow-right ms-1 text-gold"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa-solid fa-plane-departure"></i>
                        </div>
                        <h3 class="service-title">Autorización de Viaje de Menor</h3>
                        <p class="service-desc">Permisos notariales para el viaje de niños y adolescentes al interior o exterior del país cumpliendo las exigencias de Migraciones.</p>
                        <button onclick="openRequirementsModal('viaje')" class="btn btn-link p-0 text-decoration-none fw-bold text-navy">
                            Ver Requisitos <i class="fa-solid fa-arrow-right ms-1 text-gold"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fa-solid fa-stamp"></i>
                        </div>
                        <h3 class="service-title">Poderes y Legalizaciones</h3>
                        <p class="service-desc">Poderes por escritura pública, fuera de registro, legalización de firmas, certificaciones de fotocopias y libros de actas.</p>
                        <button onclick="openRequirementsModal('poderes')" class="btn btn-link p-0 text-decoration-none fw-bold text-navy">
                            Ver Requisitos <i class="fa-solid fa-arrow-right ms-1 text-gold"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button class="btn btn-navy px-4 py-2 font-weight-bold" onclick="switchTab('servicios')" style="background-color: var(--primary-navy); color: #fff;">
                    <i class="fa-solid fa-list-check me-2 text-warning"></i> Ver Todos los Servicios Notariales
                </button>
            </div>
        </div>

        <!-- Callout Banner Mesa de Partes -->
        <div class="container my-4">
            <div class="mesa-partes-box">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-3 mb-lg-0">
                        <div class="badge bg-warning text-dark font-weight-bold px-3 py-2 mb-2">MESA DE PARTES VIRTUAL 24/7</div>
                        <h3 class="text-white font-serif fw-bold">¿Desea ingresar su solicitud o documento sin salir de casa?</h3>
                        <p class="text-light mb-0">Presente sus cartas, solicitudes, proyectos de minutas y documentos adjuntos de forma 100% digital con seguimiento de código de expediente.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <button onclick="switchTab('mesa-partes')" class="btn btn-gold btn-lg w-100 w-lg-auto">
                            <i class="fa-solid fa-laptop-file me-2"></i> Ir a Mesa de Partes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. TAB NOSOTROS -->
    <section id="tab-nosotros" class="tab-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Institucional</span>
                <h2 class="section-title">Sobre Notaría Huanca</h2>
                <div class="section-divider"></div>
            </div>

            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="pe-lg-4">
                        <h3 class="font-serif fw-bold mb-3" style="color: var(--primary-navy);">Fe Pública y Tradición Legal en Cusco y Anta</h3>
                        <p class="text-muted">
                            La <strong>Notaría Huanca</strong> es una institución notarial de reconocido prestigio en la Región del Cusco y la Provincia de Anta. Dirigida con el más estricto apego a la ética y la legalidad, brindamos seguridad jurídica a los actos y contratos de nuestros usuarios.
                        </p>
                        <p class="text-muted">
                            Con sedes estratégicamente ubicadas en el <strong>Cercado del Cusco</strong> y la <strong>Plaza de Armas de Anta</strong>, nuestro equipo de profesionales y asesores legales calificados garantiza la celeridad y la eficacia en cada uno de sus trámites.
                        </p>
                        <div class="p-3 bg-light rounded border-start border-4 border-warning mt-4">
                            <p class="fst-italic text-dark mb-0 fw-semibold">
                                "Nuestra misión es otorgar certeza jurídica a la ciudadanía, protegiendo sus derechos y patrimonio bajo los principios de imparcialidad, reserva profesional y modernización tecnológica."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=800&q=80" alt="Notaría Huanca" class="img-fluid rounded-4 shadow-lg">
                        <div class="bg-navy text-white p-4 rounded-3 position-absolute bottom-0 start-0 m-3 shadow-lg d-none d-sm-block" style="background-color: var(--primary-navy); max-width: 280px; border-left: 4px solid var(--accent-gold);">
                            <div class="h5 fw-bold text-gold font-serif mb-1">Cusco & Anta</div>
                            <small class="text-light">Atención descentralizada para la conveniencia de la población cusqueña y anteña.</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pillars -->
            <div class="row g-4 mt-2">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="border-top: 4px solid var(--primary-navy) !important;">
                        <div class="text-gold fs-1 mb-3"><i class="fa-solid fa-scale-balanced"></i></div>
                        <h4 class="font-serif fw-bold text-navy mb-2">Imparcialidad</h4>
                        <p class="text-muted mb-0">Actuamos como terceros neutrales, asesorando a las partes por igual para garantizar acuerdos transparentes e inexpugnables.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="border-top: 4px solid var(--accent-gold) !important;">
                        <div class="text-navy fs-1 mb-3"><i class="fa-solid fa-vault"></i></div>
                        <h4 class="font-serif fw-bold text-navy mb-2">Seguridad Jurídica</h4>
                        <p class="text-muted mb-0">Conservación rigurosa de los protocolos notariales conforme al Decreto Legislativo N° 1049 - Ley del Notariado.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-4 rounded-4" style="border-top: 4px solid var(--primary-navy) !important;">
                        <div class="text-gold fs-1 mb-3"><i class="fa-solid fa-microchip"></i></div>
                        <h4 class="font-serif fw-bold text-navy mb-2">Innovación Digital</h4>
                        <p class="text-muted mb-0">Sistemas de verificación biométrica, firma digital notarial e integración con la Mesa de Partes Virtual y la SUNARP.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. TAB SERVICIOS -->
    <section id="tab-servicios" class="tab-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Catálogo de Trámites</span>
                <h2 class="section-title">Servicios Notariales Integrales</h2>
                <div class="section-divider"></div>
            </div>

            <!-- Category Nav Pills -->
            <ul class="nav nav-pills justify-content-center mb-5 gap-2" id="services-pills">
                <li class="nav-item">
                    <button class="nav-link active btn-navy-pill" onclick="filterServices('all', this)">Todos los Servicios</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link btn-navy-pill" onclick="filterServices('protocolares', this)">Instrumentos Protocolares</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link btn-navy-pill" onclick="filterServices('extraprotocolares', this)">Extraprotocolares</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link btn-navy-pill" onclick="filterServices('nocontenciosos', this)">No Contenciosos</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link btn-navy-pill" onclick="filterServices('vehicular', this)">Vehiculares</button>
                </li>
            </ul>

            <div class="row g-4" id="services-grid">
                <!-- Item 1 -->
                <div class="col-md-6 col-lg-4 service-item" data-cat="protocolares">
                    <div class="service-card">
                        <div class="badge bg-navy text-gold mb-3 px-3 py-2" style="background-color: var(--primary-navy); color: var(--accent-gold-light);">Protocolar</div>
                        <h4 class="service-title">Escritura Pública de Compraventa</h4>
                        <p class="service-desc">Formalización de transferencia de inmuebles (casas, terrenos, departamentos) otorgando fe de titularidad y pago de impuestos.</p>
                        <button onclick="openRequirementsModal('escrituras')" class="btn btn-outline-gold btn-sm w-100">
                            <i class="fa-solid fa-list-check me-1"></i> Requisitos y Pasos
                        </button>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-md-6 col-lg-4 service-item" data-cat="nocontenciosos">
                    <div class="service-card">
                        <div class="badge bg-warning text-dark mb-3 px-3 py-2">No Contencioso</div>
                        <h4 class="service-title">Sucesión Intestada</h4>
                        <p class="service-desc">Declaratoria de herederos legales ante el fallecimiento del causante sin haber dejado testamento formal.</p>
                        <button onclick="openRequirementsModal('sucesion')" class="btn btn-outline-gold btn-sm w-100">
                            <i class="fa-solid fa-list-check me-1"></i> Requisitos y Pasos
                        </button>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-md-6 col-lg-4 service-item" data-cat="vehicular">
                    <div class="service-card">
                        <div class="badge bg-info text-dark mb-3 px-3 py-2">Vehicular</div>
                        <h4 class="service-title">Transferencia de Vehículos</h4>
                        <p class="service-desc">Actas notariales de transferencia de autos, motos y camionetas con verificación biométrica e inscripción SUNARP.</p>
                        <button onclick="openRequirementsModal('vehicular')" class="btn btn-outline-gold btn-sm w-100">
                            <i class="fa-solid fa-list-check me-1"></i> Requisitos y Pasos
                        </button>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="col-md-6 col-lg-4 service-item" data-cat="extraprotocolares">
                    <div class="service-card">
                        <div class="badge bg-secondary text-white mb-3 px-3 py-2">Extraprotocolar</div>
                        <h4 class="service-title">Cartas Notariales</h4>
                        <p class="service-desc">Comprobación notarial del envío y recepción de requerimientos, cobros o notificaciones fehacientes a terceros.</p>
                        <button onclick="openRequirementsModal('cartas')" class="btn btn-outline-gold btn-sm w-100">
                            <i class="fa-solid fa-list-check me-1"></i> Requisitos y Pasos
                        </button>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="col-md-6 col-lg-4 service-item" data-cat="extraprotocolares">
                    <div class="service-card">
                        <div class="badge bg-secondary text-white mb-3 px-3 py-2">Extraprotocolar</div>
                        <h4 class="service-title">Autorización de Viaje de Menores</h4>
                        <p class="service-desc">Permiso notarial requerido por la Ley de Extranjería y Migraciones para viajes de menores solos o con un progenitor.</p>
                        <button onclick="openRequirementsModal('viaje')" class="btn btn-outline-gold btn-sm w-100">
                            <i class="fa-solid fa-list-check me-1"></i> Requisitos y Pasos
                        </button>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="col-md-6 col-lg-4 service-item" data-cat="protocolares">
                    <div class="service-card">
                        <div class="badge bg-navy text-gold mb-3 px-3 py-2" style="background-color: var(--primary-navy); color: var(--accent-gold-light);">Protocolar</div>
                        <h4 class="service-title">Constitución de Empresas (EIRL, SAC, SA)</h4>
                        <p class="service-desc">Redacción de estatutos, otorgamiento de escritura de constitución e inscripción registral para nuevos negocios.</p>
                        <button onclick="openRequirementsModal('empresa')" class="btn btn-outline-gold btn-sm w-100">
                            <i class="fa-solid fa-list-check me-1"></i> Requisitos y Pasos
                        </button>
                    </div>
                </div>

                <!-- Item 7 -->
                <div class="col-md-6 col-lg-4 service-item" data-cat="extraprotocolares">
                    <div class="service-card">
                        <div class="badge bg-secondary text-white mb-3 px-3 py-2">Extraprotocolar</div>
                        <h4 class="service-title">Legalización de Firmas y Fotocopias</h4>
                        <p class="service-desc">Certificación notarial de la autenticidad de la firma y huella digital o la fidelidad de copias de documentos originales.</p>
                        <button onclick="openRequirementsModal('legalizacion')" class="btn btn-outline-gold btn-sm w-100">
                            <i class="fa-solid fa-list-check me-1"></i> Requisitos y Pasos
                        </button>
                    </div>
                </div>

                <!-- Item 8 -->
                <div class="col-md-6 col-lg-4 service-item" data-cat="nocontenciosos">
                    <div class="service-card">
                        <div class="badge bg-warning text-dark mb-3 px-3 py-2">No Contencioso</div>
                        <h4 class="service-title">Rectificación de Partidas</h4>
                        <p class="service-desc">Sanción notarial para la corrección de errores materiales o de tipeo en partidas de nacimiento, matrimonio o defunción.</p>
                        <button onclick="openRequirementsModal('rectificacion')" class="btn btn-outline-gold btn-sm w-100">
                            <i class="fa-solid fa-list-check me-1"></i> Requisitos y Pasos
                        </button>
                    </div>
                </div>

                <!-- Item 9 -->
                <div class="col-md-6 col-lg-4 service-item" data-cat="protocolares">
                    <div class="service-card">
                        <div class="badge bg-navy text-gold mb-3 px-3 py-2" style="background-color: var(--primary-navy); color: var(--accent-gold-light);">Protocolar</div>
                        <h4 class="service-title">Poderes por Escritura Pública</h4>
                        <p class="service-desc">Otorgamiento de facultades de representación amplias y generales para actos de disposición, trámites bancarios o judiciales.</p>
                        <button onclick="openRequirementsModal('poderes')" class="btn btn-outline-gold btn-sm w-100">
                            <i class="fa-solid fa-list-check me-1"></i> Requisitos y Pasos
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. TAB MESA DE PARTES VIRTUAL -->
    <section id="tab-mesa-partes" class="tab-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Ventanilla Única Digital</span>
                <h2 class="section-title">Mesa de Partes Virtual</h2>
                <p class="text-muted max-w-600 mx-auto">Presente cartas notariales, solicitudes, minutas y documentos dirigidos a la Notaría Huanca para la Sede Cusco o Sede Anta.</p>
                <div class="section-divider"></div>
            </div>

            <?php if ($submission_success): ?>
                <div class="alert alert-success border-0 shadow p-4 rounded-4 mb-4">
                    <div class="d-flex align-items-center gap-3">
                        <i class="fa-solid fa-circle-check fs-1 text-success"></i>
                        <div>
                            <h4 class="fw-bold mb-1">¡Documento Registrado Correctamente!</h4>
                            <p class="mb-1">Su expediente ha sido asignado con el siguiente código de seguimiento:</p>
                            <div class="h3 font-serif fw-bold text-navy bg-light d-inline-block px-3 py-2 rounded border border-success">
                                <?php echo htmlspecialchars($generated_expediente); ?>
                            </div>
                            <p class="small text-muted mt-2 mb-0">Conserve este código para consultar el estado de su trámite en la sección inferior.</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row g-4">
                <!-- Form Submission -->
                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                        <h3 class="font-serif fw-bold text-navy mb-4 border-bottom pb-2">
                            <i class="fa-solid fa-cloud-arrow-up text-gold me-2"></i> Formulario de Presentación
                        </h3>

                        <form action="notaria-huanca.php#mesa-partes" method="POST" enctype="multipart/form-data" id="formMesaPartes">
                            <input type="hidden" name="action" value="submit_mesa_partes">

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Sede Destino <span class="text-danger">*</span></label>
                                    <select name="sede" class="form-select" required>
                                        <option value="cusco">Sede Cusco (Av. El Sol)</option>
                                        <option value="anta">Sede Anta (Plaza de Armas)</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Tipo de Solicitante <span class="text-danger">*</span></label>
                                    <select name="tipo_solicitante" class="form-select" required>
                                        <option value="persona_natural">Persona Natural</option>
                                        <option value="persona_juridica">Persona Jurídica (Empresa)</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Nombres y Apellidos / Razón Social <span class="text-danger">*</span></label>
                                    <input type="text" name="remitente" class="form-control" placeholder="Ej. Juan Carlos Pérez" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">N° Documento (DNI / RUC) <span class="text-danger">*</span></label>
                                    <input type="text" name="num_doc" class="form-control" placeholder="DNI de 8 dígitos o RUC" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Teléfono / Celular WhatsApp <span class="text-danger">*</span></label>
                                    <input type="tel" name="telefono" class="form-control" placeholder="Ej. 984123456" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Correo Electrónico <span class="text-danger">*</span></label>
                                    <input type="email" name="correo" class="form-control" placeholder="correo@ejemplo.com" required>
                                </div>

                                <div class="col-md-8">
                                    <label class="form-label fw-bold">Asunto del Documento / Trámite <span class="text-danger">*</span></label>
                                    <input type="text" name="asunto" class="form-control" placeholder="Ej. Presentación de Carta Notarial a Empresa X" required>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label fw-bold">N° de Folios <span class="text-danger">*</span></label>
                                    <input type="number" name="folios" class="form-control" min="1" value="1" required>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold">Adjuntar Documentos (PDF, DOC, JPG - Máx 20MB) <span class="text-danger">*</span></label>
                                    <div class="border border-2 border-dashed rounded-3 p-4 text-center bg-light">
                                        <i class="fa-solid fa-file-pdf text-danger fs-1 mb-2"></i>
                                        <p class="mb-2 fw-semibold text-dark">Arrastre y suelte su archivo aquí o haga clic para examinar</p>
                                        <input type="file" name="documento" class="form-control" required style="max-width: 350px; margin: 0 auto;">
                                        <small class="text-muted d-block mt-2">Formatos permitidos: .PDF, .DOCX, .JPG, .PNG</small>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold">Observaciones adicionales</label>
                                    <textarea name="mensaje" class="form-control" rows="3" placeholder="Indique detalles relevantes para la revisión del abogado asesor..."></textarea>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="declaracion" required>
                                        <label class="form-check-label small text-muted" for="declaracion">
                                            Declaro bajo juramento que los datos ingresados y la documentación adjunta son veraces y fehacientes.
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-gold btn-lg w-100 fw-bold">
                                        <i class="fa-solid fa-paper-plane me-2"></i> Enviar a Mesa de Partes Virtual
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Tracking and Info -->
                <div class="col-lg-5">
                    <!-- Tracking Box -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white mb-4">
                        <h4 class="font-serif fw-bold text-navy mb-3">
                            <i class="fa-solid fa-magnifying-glass text-gold me-2"></i> Consulta de Expediente
                        </h4>
                        <p class="text-muted small">Ingrese su código de seguimiento expedido por Mesa de Partes para ver el estado de su solicitud en tiempo real.</p>

                        <div class="input-group mb-3">
                            <input type="text" id="trackingCodeInput" class="form-control text-uppercase fw-bold" placeholder="Ej. EXP-2025-CUS-1001">
                            <button onclick="buscarExpediente()" class="btn btn-navy text-white fw-bold" style="background-color: var(--primary-navy);">
                                Buscar
                            </button>
                        </div>

                        <div class="alert alert-light border small text-muted">
                            <i class="fa-solid fa-circle-info text-info me-1"></i> Códigos de demostración activos: <strong>EXP-2025-CUS-1001</strong> o <strong>EXP-2025-ANT-2002</strong>
                        </div>

                        <!-- Result Box -->
                        <div id="trackingResult" class="mt-3 p-3 bg-light rounded border d-none">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold text-navy" id="resCodigo">EXP-2025-CUS-1001</span>
                                <span class="badge bg-warning text-dark fw-bold" id="resEstado">En Calificación Legal</span>
                            </div>
                            <p class="small text-muted mb-2" id="resAsunto">Asunto: Presentación de Carta Notarial</p>
                            <p class="small text-muted mb-3" id="resSede">Sede: Sede Cusco (Av. El Sol)</p>

                            <!-- Timeline -->
                            <div class="timeline-steps">
                                <div class="timeline-step completed" id="st1">
                                    <div class="step-icon"><i class="fa-solid fa-check"></i></div>
                                    <div class="small fw-bold">Ingresado</div>
                                </div>
                                <div class="timeline-step active" id="st2">
                                    <div class="step-icon">2</div>
                                    <div class="small fw-bold">Calificación</div>
                                </div>
                                <div class="timeline-step" id="st3">
                                    <div class="step-icon">3</div>
                                    <div class="small fw-bold">Firma/Pago</div>
                                </div>
                                <div class="timeline-step" id="st4">
                                    <div class="step-icon">4</div>
                                    <div class="small fw-bold">Entregado</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Horarios Mesa de Partes Box -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-navy text-white" style="background-color: var(--primary-navy);">
                        <h4 class="font-serif fw-bold text-gold mb-3"><i class="fa-solid fa-clock me-2"></i> Horarios de Procesamiento</h4>
                        <p class="small text-light">Los documentos recibidos a través de la Mesa de Partes Virtual fuera del horario de oficina serán registrados con fecha del siguiente día hábil.</p>
                        <ul class="list-unstyled small mb-0">
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i> Lunes a Viernes: 8:00 AM - 5:00 PM</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i> Sábados: 9:00 AM - 1:00 PM</li>
                            <li><i class="fa-solid fa-check text-warning me-2"></i> Confirmación vía correo electrónico y WhatsApp</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. TAB CONTACTO -->
    <section id="tab-contacto" class="tab-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Atención Directa</span>
                <h2 class="section-title">Contacto y Consultas</h2>
                <div class="section-divider"></div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                        <h3 class="font-serif fw-bold text-navy mb-4">Envíenos un mensaje</h3>
                        <form id="contactForm" onsubmit="handleContactSubmit(event)">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Nombre Completo</label>
                                    <input type="text" class="form-control" required placeholder="Su nombre">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Teléfono / Celular</label>
                                    <input type="tel" class="form-control" required placeholder="Su número de celular">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Correo Electrónico</label>
                                    <input type="email" class="form-control" required placeholder="correo@ejemplo.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Sede Preferida</label>
                                    <select class="form-select">
                                        <option>Sede Cusco</option>
                                        <option>Sede Anta</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold">Consulta Notarial</label>
                                    <textarea class="form-control" rows="4" required placeholder="Escriba aquí los detalles de su trámite o duda legal..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-gold btn-lg w-100 fw-bold">
                                        <i class="fa-solid fa-paper-plane me-2"></i> Enviar Consulta
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="d-flex flex-column gap-4 h-100">
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white border-start border-5 border-navy" style="border-left-color: var(--primary-navy) !important;">
                            <div class="d-flex align-items-center gap-3">
                                <div class="brand-logo-icon fs-3"><i class="fa-solid fa-building"></i></div>
                                <div>
                                    <h4 class="font-serif fw-bold text-navy mb-1">Central Notarial Cusco</h4>
                                    <p class="mb-1 text-muted"><i class="fa-solid fa-location-dot text-danger me-1"></i> Av. El Sol N° 456, Cercado del Cusco</p>
                                    <p class="mb-0 text-muted"><i class="fa-solid fa-phone text-navy me-1"></i> (084) 224-890 | <i class="fa-brands fa-whatsapp text-success me-1"></i> +51 984 123 456</p>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white border-start border-5 border-gold" style="border-left-color: var(--accent-gold) !important;">
                            <div class="d-flex align-items-center gap-3">
                                <div class="brand-logo-icon fs-3" style="background: var(--primary-navy);"><i class="fa-solid fa-landmark"></i></div>
                                <div>
                                    <h4 class="font-serif fw-bold text-navy mb-1">Sede Provincial Anta</h4>
                                    <p class="mb-1 text-muted"><i class="fa-solid fa-location-dot text-danger me-1"></i> Av. Jaquijahuana N° 210, Plaza de Armas, Anta</p>
                                    <p class="mb-0 text-muted"><i class="fa-solid fa-phone text-navy me-1"></i> (084) 501-234 | <i class="fa-brands fa-whatsapp text-success me-1"></i> +51 984 654 321</p>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white border-start border-5 border-success">
                            <div class="d-flex align-items-center gap-3">
                                <div class="brand-logo-icon fs-3 bg-success text-white"><i class="fa-brands fa-whatsapp"></i></div>
                                <div>
                                    <h4 class="font-serif fw-bold text-navy mb-1">Atención WhatsApp Inmediata</h4>
                                    <p class="mb-2 text-muted">¿Necesita respuestas rápidas para sus requisitos?</p>
                                    <a href="https://wa.me/51984123456?text=Consulta%20Rapida%20Notarial" target="_blank" class="btn btn-success fw-bold btn-sm">
                                        <i class="fa-brands fa-whatsapp me-1"></i> Iniciar Chat en Vivo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. TAB UBICACIÓN -->
    <section id="tab-ubicacion" class="tab-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Nuestras Sedes</span>
                <h2 class="section-title">Ubicación y Mapas</h2>
                <div class="section-divider"></div>
            </div>

            <div class="row g-4">
                <!-- Sede Cusco -->
                <div class="col-lg-6">
                    <div class="location-card">
                        <div class="location-header">
                            <div>
                                <h4 class="font-serif fw-bold mb-0">SEDE CUSCO (CERCADO)</h4>
                                <small class="text-gold">Av. El Sol N° 456 - Frente a Qorikancha</small>
                            </div>
                            <i class="fa-solid fa-building-columns fs-2 text-gold"></i>
                        </div>
                        <div class="location-body">
                            <div class="location-info-item">
                                <i class="fa-solid fa-map-location-dot"></i>
                                <div>
                                    <strong>Dirección:</strong>
                                    <p class="text-muted mb-0">Av. El Sol N° 456, Piso 2, Cercado del Cusco, Perú.</p>
                                </div>
                            </div>
                            <div class="location-info-item">
                                <i class="fa-solid fa-compass"></i>
                                <div>
                                    <strong>Referencia:</strong>
                                    <p class="text-muted mb-0">A media cuadra del Banco de la Nación, frente al parque Coricancha.</p>
                                </div>
                            </div>
                            <div class="location-info-item">
                                <i class="fa-solid fa-phone"></i>
                                <div>
                                    <strong>Teléfonos de Contacto:</strong>
                                    <p class="text-muted mb-0">(084) 224-890 | Celular / WhatsApp: +51 984 123 456</p>
                                </div>
                            </div>

                            <div class="mt-3">
                                <iframe class="map-container" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.168731118182!2d-71.9774!3d-13.5186!2m3!1f0!0!0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd67332247f15%3A0x6b10696956f4!2sAv.%20El%20Sol%2C%20Cusco!5e0!3m2!1ses!2spe!4v1680000000000!5m2!1ses!2spe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                            <div class="mt-3 text-center">
                                <a href="https://maps.google.com/?q=Av.+El+Sol+Cusco" target="_blank" class="btn btn-outline-navy fw-bold w-100" style="border-color: var(--primary-navy); color: var(--primary-navy);">
                                    <i class="fa-solid fa-route me-1"></i> Cómo llegar a la Sede Cusco
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sede Anta -->
                <div class="col-lg-6">
                    <div class="location-card">
                        <div class="location-header" style="background-color: var(--primary-navy-dark);">
                            <div>
                                <h4 class="font-serif fw-bold mb-0">SEDE PROVINCIAL ANTA</h4>
                                <small class="text-gold">Plaza de Armas de Anta N° 210</small>
                            </div>
                            <i class="fa-solid fa-landmark-flag fs-2 text-gold"></i>
                        </div>
                        <div class="location-body">
                            <div class="location-info-item">
                                <i class="fa-solid fa-map-location-dot"></i>
                                <div>
                                    <strong>Dirección:</strong>
                                    <p class="text-muted mb-0">Av. Jaquijahuana N° 210, Plaza de Armas, Anta, Cusco.</p>
                                </div>
                            </div>
                            <div class="location-info-item">
                                <i class="fa-solid fa-compass"></i>
                                <div>
                                    <strong>Referencia:</strong>
                                    <p class="text-muted mb-0">A un costado de la Municipalidad Provincial de Anta.</p>
                                </div>
                            </div>
                            <div class="location-info-item">
                                <i class="fa-solid fa-phone"></i>
                                <div>
                                    <strong>Teléfonos de Contacto:</strong>
                                    <p class="text-muted mb-0">(084) 501-234 | Celular / WhatsApp: +51 984 654 321</p>
                                </div>
                            </div>

                            <div class="mt-3">
                                <iframe class="map-container" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15518.2312!2d-72.1522!3d-13.4683!2m3!1f0!0!0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dc0a50b8686d1%3A0x6a100!2sAnta%2C%20Cusco!5e0!3m2!1ses!2spe!4v1680000000000!5m2!1ses!2spe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                            <div class="mt-3 text-center">
                                <a href="https://maps.google.com/?q=Plaza+de+Armas+Anta+Cusco" target="_blank" class="btn btn-outline-navy fw-bold w-100" style="border-color: var(--primary-navy); color: var(--primary-navy);">
                                    <i class="fa-solid fa-route me-1"></i> Cómo llegar a la Sede Anta
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="brand-logo-icon" style="width: 38px; height: 38px; font-size: 1.1rem;">
                            <i class="fa-solid fa-scale-balanced"></i>
                        </div>
                        <h4 class="font-serif text-white fw-bold mb-0">NOTARÍA HUANCA</h4>
                    </div>
                    <p class="small text-light">Ofrecemos seguridad jurídica, fe pública y atención personalizada a la ciudadanía de Cusco y Anta en todos los actos notariales, protocolares y extraprotocolares.</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px;"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px;"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px;"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6">
                    <h5>Navegación</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#inicio" onclick="switchTab('inicio')">Inicio</a></li>
                        <li class="mb-2"><a href="#nosotros" onclick="switchTab('nosotros')">Nosotros</a></li>
                        <li class="mb-2"><a href="#servicios" onclick="switchTab('servicios')">Servicios</a></li>
                        <li class="mb-2"><a href="#mesa-partes" onclick="switchTab('mesa-partes')">Mesa de Partes</a></li>
                        <li class="mb-2"><a href="#contacto" onclick="switchTab('contacto')">Contacto</a></li>
                        <li class="mb-2"><a href="#ubicacion" onclick="switchTab('ubicacion')">Ubicación</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-6">
                    <h5>Trámites Frecuentes</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#servicios" onclick="switchTab('servicios'); openRequirementsModal('escrituras');">Escrituras Públicas</a></li>
                        <li class="mb-2"><a href="#servicios" onclick="switchTab('servicios'); openRequirementsModal('vehicular');">Transferencias Vehiculares</a></li>
                        <li class="mb-2"><a href="#servicios" onclick="switchTab('servicios'); openRequirementsModal('sucesion');">Sucesiones Intestadas</a></li>
                        <li class="mb-2"><a href="#servicios" onclick="switchTab('servicios'); openRequirementsModal('cartas');">Cartas Notariales</a></li>
                        <li class="mb-2"><a href="#servicios" onclick="switchTab('servicios'); openRequirementsModal('viaje');">Autorización de Viaje</a></li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <h5>Enlaces Oficiales</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="https://www.sunarp.gob.pe/" target="_blank"><i class="fa-solid fa-external-link me-1"></i> SUNARP en Línea</a></li>
                        <li class="mb-2"><a href="https://www.notarios.org.pe/" target="_blank"><i class="fa-solid fa-external-link me-1"></i> Junta de Decanos de Notarios</a></li>
                        <li class="mb-2"><a href="https://www.gob.pe/reniec" target="_blank"><i class="fa-solid fa-external-link me-1"></i> RENIEC Perú</a></li>
                        <li class="mb-2"><a href="https://www.gob.pe/minjus" target="_blank"><i class="fa-solid fa-external-link me-1"></i> Ministerio de Justicia (MINJUS)</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-top border-secondary pt-4 text-center small">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> Notaría Huanca - Cusco & Anta. Todos los derechos reservados. Desarrollado con los más altos estándares de Seguridad Notarial.</p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/51984123456?text=Hola%20Notaria%20Huanca,%20deseo%20realizar%20una%20consulta" target="_blank" class="whatsapp-float" title="Consultar por WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- REQUIREMENTS MODAL -->
    <div class="modal fade" id="requirementsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 rounded-4 shadow-lg overflow-hidden">
                <div class="modal-header modal-header-custom p-4">
                    <h4 class="modal-title font-serif fw-bold" id="reqModalTitle">Requisitos del Trámite</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4" id="reqModalContent">
                    <!-- Dynamic content filled by JS -->
                </div>
                <div class="modal-footer bg-light p-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-gold" onclick="switchTab('mesa-partes'); bootstrap.Modal.getInstance(document.getElementById('requirementsModal')).hide();">
                        <i class="fa-solid fa-paper-plane me-1"></i> Tramitar en Mesa de Partes
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Tab Switcher function
        function switchTab(tabId) {
            // Hide all tab sections
            const sections = document.querySelectorAll('.tab-section');
            sections.forEach(sec => sec.classList.remove('active-section'));

            // Remove active class from all nav links
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => link.classList.remove('active'));

            // Show selected section
            const targetSection = document.getElementById('tab-' + tabId);
            if (targetSection) {
                targetSection.classList.add('active-section');
            }

            // Set active class on navbar link
            const targetNavLink = document.getElementById('nav-' + tabId);
            if (targetNavLink) {
                targetNavLink.classList.add('active');
            }

            // Collapse navbar in mobile view
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show')) {
                navbarToggler.click();
            }

            // Scroll to top of section smooth
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // Handle URL hash on page load
        window.addEventListener('DOMContentLoaded', () => {
            const hash = window.location.hash.replace('#', '');
            if (hash && ['inicio', 'nosotros', 'servicios', 'mesa-partes', 'contacto', 'ubicacion'].includes(hash)) {
                switchTab(hash);
            }
        });

        // Filter Services function
        function filterServices(category, btn) {
            // Update button styles
            const pills = document.querySelectorAll('#services-pills .nav-link');
            pills.forEach(p => p.classList.remove('active'));
            btn.classList.add('active');

            const items = document.querySelectorAll('.service-item');
            items.forEach(item => {
                if (category === 'all' || item.getAttribute('data-cat') === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Requirements Data Dictionary
        const requirementsData = {
            'escrituras': {
                title: 'Escritura Pública de Compraventa de Inmuebles',
                content: `
                    <p class="text-muted">Para la compraventa o transferencia formal de inmuebles en Cusco o Anta se requiere:</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> DNI original y copia de Compradores y Vendedores (vigentes).</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Copia Literal actualizada de la Partida Registral del inmueble (SUNARP - antigüedad no mayor a 30 días).</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> HR (Hoja de Resumen) y PU (Predio Urbano) cancelados del año en curso.</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Constancia de No Laudo o pago del Impuesto de Alcabala (Municipalidad).</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Medio de pago bancarizado (Voucher, Cheque de Gerencia o Transferencia).</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Minuta firmada por Abogado colegiado (si no cuenta con ella, la Notaría puede asistirlos).</li>
                    </ul>
                `
            },
            'sucesion': {
                title: 'Sucesión Intestada (Declaratoria de Herederos)',
                content: `
                    <p class="text-muted">Proceso no contencioso para declarar herederos de una persona fallecida:</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Acta de Defunción original del causante.</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Partidas de Nacimiento originales de los hijos del causante.</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Partida de Matrimonio original (si el fallecido era casado).</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Certificate de Negativa de Sucesión Intestada y Negativa de Testamento (SUNARP).</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Copia de DNI del solicitante y relación de bienes conocidos.</li>
                    </ul>
                `
            },
            'vehicular': {
                title: 'Transferencia de Propiedad Vehicular',
                content: `
                    <p class="text-muted">Requisitos para el acta de transferencia vehicular:</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> DNI original y físico de Vendedor(es) y Comprador(es).</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Tarjeta de Identificación Vehicular (física o digital SUNARP).</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> SOAT vigente (físico o electrónico).</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Verificación de pago de Impuesto Vehicular (si el auto tiene menos de 3 años de antigüedad).</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Constancia de pago bancarizado para montos superiores a S/ 3,500 o $ 1,000 USD.</li>
                    </ul>
                `
            },
            'cartas': {
                title: 'Diligenciamiento de Carta Notarial',
                content: `
                    <p class="text-muted">Requisitos para notificar formalmente vía carta notarial:</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Carta redactada e impresa en 2 juegos originales.</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Firma y DNI del remitente.</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Dirección exacta y detallada del destinatario dentro del ámbito territorial (Cusco o Anta).</li>
                    </ul>
                `
            },
            'viaje': {
                title: 'Autorización Notarial de Viaje de Menor',
                content: `
                    <p class="text-muted">Permiso para viaje nacional o internacional de niños y adolescentes:</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> DNI original de los padres y del menor de edad.</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Partida de Nacimiento original e actualizada del menor.</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Datos del viaje: Aerolínea o empresa de transporte, destino y rango de fechas.</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Presencia obligatoria del padre o madre que otorga la autorización con verificación biométrica.</li>
                    </ul>
                `
            },
            'empresa': {
                title: 'Constitución de Empresas (EIRL, SAC, S.A.)',
                content: `
                    <p class="text-muted">Requisitos para crear su empresa en Cusco o Anta:</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Reserva de Nombre ante la SUNARP.</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Copia de DNI de los socios y cónyuges (si aplica).</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Objeto social detallado de la empresa.</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Declaración jurada de aportes de bienes o depósito de capital bancario.</li>
                    </ul>
                `
            },
            'legalizacion': {
                title: 'Legalización de Firmas y Copias Certificadas',
                content: `
                    <p class="text-muted">Certificación de autenticidad de firmas y fotocopias:</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Documento original a firmar en presencia del Notario.</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> DNI original y físico del firmante (con verificación biométrica).</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Para fotocopias: Presentar el documento original impreso y las copias a certificar.</li>
                    </ul>
                `
            },
            'rectificacion': {
                title: 'Rectificación Notarial de Partidas',
                content: `
                    <p class="text-muted">Corrección de errores evidentes en nombres o fechas en partidas:</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Partida de Nacimiento, Matrimonio o Defunción con el error original.</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Documentos probatorios acreditantes de la corrección (Partida de Bautismo antigua, DNI histórico, etc.).</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Solicitud con firma de abogado y DNI del interesado.</li>
                    </ul>
                `
            },
            'poderes': {
                title: 'Otorgamiento de Poderes Notariales',
                content: `
                    <p class="text-muted">Requisitos para otorgar poder a un tercero:</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> DNI del Poderdante (quien otorga) y datos completos del Apoderado.</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Especificación de facultades: Generales, Especiales, Financieras o de Disposición.</li>
                        <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Para poderes por Escritura Pública: Minuta debidamente elaborada.</li>
                    </ul>
                `
            }
        };

        function openRequirementsModal(key) {
            const data = requirementsData[key];
            if (data) {
                document.getElementById('reqModalTitle').innerText = data.title;
                document.getElementById('reqModalContent').innerHTML = data.content;
                const modal = new bootstrap.Modal(document.getElementById('requirementsModal'));
                modal.show();
            }
        }

        // Demo Expediente Database for Tracking Simulation
        const expedientesDB = {
            'EXP-2025-CUS-1001': {
                codigo: 'EXP-2025-CUS-1001',
                estado: 'En Calificación Legal',
                badgeClass: 'bg-warning text-dark',
                asunto: 'Presentación de Carta Notarial a Empresa X',
                sede: 'Sede Cusco (Av. El Sol N° 456)',
                step: 2
            },
            'EXP-2025-ANT-2002': {
                codigo: 'EXP-2025-ANT-2002',
                estado: 'Listo para Firma y Pago',
                badgeClass: 'bg-info text-dark',
                asunto: 'Sucesión Intestada - Familia Quispe',
                sede: 'Sede Anta (Plaza de Armas)',
                step: 3
            }
        };

        function buscarExpediente() {
            const input = document.getElementById('trackingCodeInput').value.trim().toUpperCase();
            const resBox = document.getElementById('trackingResult');

            if (!input) {
                alert('Por favor ingrese un código de expediente.');
                return;
            }

            resBox.classList.remove('d-none');

            if (expedientesDB[input]) {
                const exp = expedientesDB[input];
                document.getElementById('resCodigo').innerText = exp.codigo;
                document.getElementById('resEstado').innerText = exp.estado;
                document.getElementById('resEstado').className = 'badge fw-bold ' + exp.badgeClass;
                document.getElementById('resAsunto').innerText = 'Asunto: ' + exp.asunto;
                document.getElementById('resSede').innerText = 'Sede: ' + exp.sede;

                // Update timeline
                for (let i = 1; i <= 4; i++) {
                    const st = document.getElementById('st' + i);
                    st.className = 'timeline-step';
                    if (i < exp.step) {
                        st.classList.add('completed');
                        st.querySelector('.step-icon').innerHTML = '<i class="fa-solid fa-check"></i>';
                    } else if (i === exp.step) {
                        st.classList.add('active');
                        st.querySelector('.step-icon').innerText = i;
                    } else {
                        st.querySelector('.step-icon').innerText = i;
                    }
                }
            } else {
                // Generate dynamic fallback for newly submitted or custom codes
                document.getElementById('resCodigo').innerText = input;
                document.getElementById('resEstado').innerText = 'Recibido - En Revisión';
                document.getElementById('resEstado').className = 'badge bg-secondary text-white fw-bold';
                document.getElementById('resAsunto').innerText = 'Asunto: Trámite ingresado vía Mesa de Partes Virtual';
                document.getElementById('resSede').innerText = 'Sede: Mesa de Partes Digital';

                for (let i = 1; i <= 4; i++) {
                    const st = document.getElementById('st' + i);
                    st.className = 'timeline-step';
                    if (i === 1) {
                        st.classList.add('completed');
                        st.querySelector('.step-icon').innerHTML = '<i class="fa-solid fa-check"></i>';
                    } else if (i === 2) {
                        st.classList.add('active');
                        st.querySelector('.step-icon').innerText = '2';
                    } else {
                        st.querySelector('.step-icon').innerText = i;
                    }
                }
            }
        }

        // Contact Form Handler
        function handleContactSubmit(e) {
            e.preventDefault();
            alert('¡Gracias por su consulta! Un asesor legal de la Notaría Huanca se pondrá en contacto con usted a la brevedad.');
            e.target.reset();
        }
    </script>
</body>
</html>
