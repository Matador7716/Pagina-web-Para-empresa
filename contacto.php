<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<header class="bg-black text-white py-5 text-center" style="border-bottom: 3px solid var(--primary-color);">
    <div class="container">
        <h1 class="display-4 font-weight-bold">Contáctanos</h1>
        <p class="lead">¿Tienes un proyecto en mente? ¡Hablemos!</p>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5">
                <h2 class="section-title text-start">Información de <span style="color: var(--primary-color)">Contacto</span></h2>
                <p>Estamos listos para ayudarte a llevar tu negocio al siguiente nivel. No dudes en contactarnos a través de cualquiera de nuestros canales oficiales.</p>

                <div class="d-flex align-items-center mb-4">
                    <div class="icon-box me-3 mb-0"><i class="fas fa-phone-alt"></i></div>
                    <div>
                        <h5 class="mb-0">Teléfono / WhatsApp</h5>
                        <p class="mb-0">+51 935 209 781</p>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <div class="icon-box me-3 mb-0"><i class="far fa-envelope"></i></div>
                    <div>
                        <h5 class="mb-0">Correo Electrónico</h5>
                        <p class="mb-0">informes@candelaweb.com</p>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <div class="icon-box me-3 mb-0"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <h5 class="mb-0">Ubicación</h5>
                        <p class="mb-0">Cusco, Perú</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4 shadow">
                    <h3 class="mb-4 text-center">Envíanos un Mensaje</h3>
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="asunto" class="form-label">Asunto</label>
                            <input type="text" class="form-control" id="asunto" name="asunto" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" style="background-color: var(--primary-color); border: none;">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
