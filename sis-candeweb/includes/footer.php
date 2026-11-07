    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-3 mt-auto">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="brand-badge fs-4"><i class="bi bi-heart-pulse-fill"></i></span>
                        <h4 class="mb-0 fw-bold text-white">SIS CandeWeb</h4>
                    </div>
                    <p class="text-secondary small">
                        Tu botica y farmacia de confianza en Cusco. Ofrecemos medicamentos garantizados con registro DIGEMID, asesoría farmacéutica y delivery rápido a toda la ciudad.
                    </p>
                    <div class="d-flex gap-3 text-secondary">
                        <i class="bi bi-shield-check fs-4 text-info"></i>
                        <small>Certificado SSL con cifrado de 256 bits para pagos 100% seguros.</small>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6 class="text-uppercase fw-bold mb-3 text-light">Módulos</h6>
                    <ul class="list-unstyled text-secondary small lh-lg">
                        <li><a href="tienda.php" class="text-secondary text-decoration-none">Catálogo Completo</a></li>
                        <li><a href="tienda.php?categoria=medicamentos-farmacos" class="text-secondary text-decoration-none">Medicamentos</a></li>
                        <li><a href="tienda.php?categoria=dispositivos-primeros-auxilios" class="text-secondary text-decoration-none">Primeros Auxilios</a></li>
                        <li><a href="seguimiento.php" class="text-secondary text-decoration-none">Rastrear Pedido</a></li>
                        <li><a href="wishlist.php" class="text-secondary text-decoration-none">Mi Lista de Deseos</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h6 class="text-uppercase fw-bold mb-3 text-light">Métodos de Pago</h6>
                    <p class="small text-secondary mb-2">Aceptamos todos los medios seguros en Cusco y a nivel nacional:</p>
                    <div class="d-flex flex-wrap gap-2 fs-4 text-secondary mb-3">
                        <span class="badge bg-purple text-white bg-opacity-75" style="background:#6f42c1;">Yape</span>
                        <span class="badge bg-info text-white">Plin</span>
                        <span class="badge bg-primary text-white"><i class="bi bi-credit-card-2-front"></i> Tarjetas</span>
                        <span class="badge bg-secondary text-white"><i class="bi bi-paypal"></i> PayPal</span>
                    </div>
                    <small class="text-secondary">Depósito o Transferencia BCP, BBVA, Interbank.</small>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h6 class="text-uppercase fw-bold mb-3 text-light">Atención en Cusco</h6>
                    <ul class="list-unstyled text-secondary small">
                        <li class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i> <?= e($sysConfig['empresa_direccion'] ?? 'Av. De la Cultura 780, Cusco') ?></li>
                        <li class="mb-2"><i class="bi bi-telephone-fill text-success me-2"></i> <?= e($sysConfig['empresa_telefono'] ?? '+51 984 765 432') ?></li>
                        <li class="mb-2"><i class="bi bi-envelope-fill text-warning me-2"></i> <?= e($sysConfig['empresa_email'] ?? 'contacto@boticacusco.pe') ?></li>
                        <li class="mb-2"><i class="bi bi-clock-fill text-info me-2"></i> Lun - Sáb: 7:30 am - 10:30 pm<br>Dom: 8:00 am - 9:00 pm</li>
                    </ul>
                </div>
            </div>

            <hr class="border-secondary my-4">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center text-secondary small">
                <p class="mb-0">&copy; <?= date('Y') ?> SIS CandeWeb Ventas. Botica Cusco - Todos los derechos reservados.</p>
                <div>
                    <span>RUC: <?= e($sysConfig['empresa_ruc'] ?? '20601234567') ?></span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Botón Flotante de WhatsApp para atención y pedidos -->
    <a href="https://wa.me/<?= e($sysConfig['empresa_whatsapp'] ?? '51984765432') ?>?text=Hola%20SIS%20CandeWeb%20Botica%20Cusco,%20deseo%20hacer%20una%20consulta" class="floating-whatsapp" target="_blank" title="Consultar por WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Scripts Bootstrap 5 & Custom JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/store.js"></script>
</body>
</html>
