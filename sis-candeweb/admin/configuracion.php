<?php
$activePage = 'configuracion';
$panelTitle = "Configuración del Sistema - SIS CandeWeb";
require_once __DIR__ . '/header.php';
requireAuth('admin');

$mensaje = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = "Token no válido.";
    } else {
        $keys = [
            'empresa_nombre', 'empresa_ruc', 'empresa_direccion',
            'empresa_telefono', 'empresa_whatsapp', 'empresa_email',
            'igv_porcentaje', 'costo_envio_local', 'costo_envio_nacional'
        ];

        foreach ($keys as $k) {
            if (isset($_POST[$k])) {
                $v = trim($_POST[$k]);
                $stmt = $pdo->prepare("INSERT INTO configuracion (clave, valor) VALUES (?, ?) ON DUPLICATE KEY UPDATE valor = ?");
                $stmt->execute([$k, $v, $v]);
                $sysConfig[$k] = $v;
            }
        }
        $mensaje = "Configuración del sistema guardada exitosamente.";
    }
}
?>

<?php if ($mensaje): ?>
    <div class="alert alert-success alert-dismissible fade show"><?= e($mensaje) ?></div>
<?php endif; ?>
<?php if ($error): ?>
    <div class="alert alert-danger alert-dismissible fade show"><?= e($error) ?></div>
<?php endif; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="fw-bold mb-0">Configuración General del Sistema</h4>
        <small class="text-muted">Parámetros de empresa, impuestos, costos de delivery y SEO</small>
    </div>
</div>

<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
    <form method="POST" action="configuracion.php">
        <input type="hidden" name="csrf_token" value="<?= getCsrfToken() ?>">

        <h6 class="fw-bold text-primary mb-3"><i class="bi bi-building me-2"></i>Datos de la Botica & Farmacia</h6>
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label class="form-label small fw-bold">Nombre Comercial del Sistema</label>
                <input type="text" name="empresa_nombre" class="form-control" value="<?= e($sysConfig['empresa_nombre'] ?? 'SIS CandeWeb Ventas - Botica Cusco') ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label small fw-bold">RUC de la Empresa</label>
                <input type="text" name="empresa_ruc" class="form-control" value="<?= e($sysConfig['empresa_ruc'] ?? '20601234567') ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label small fw-bold">Dirección Principal en Cusco</label>
                <input type="text" name="empresa_direccion" class="form-control" value="<?= e($sysConfig['empresa_direccion'] ?? 'Av. De la Cultura 780, Wanchaq, Cusco') ?>">
            </div>
            <div class="col-md-3">
                <label class="form-label small fw-bold">Teléfono Fijo / Central</label>
                <input type="text" name="empresa_telefono" class="form-control" value="<?= e($sysConfig['empresa_telefono'] ?? '+51 984 765 432') ?>">
            </div>
            <div class="col-md-3">
                <label class="form-label small fw-bold">WhatsApp Bot (51...)</label>
                <input type="text" name="empresa_whatsapp" class="form-control" value="<?= e($sysConfig['empresa_whatsapp'] ?? '51984765432') ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label small fw-bold">Correo Electrónico de Notificaciones</label>
                <input type="email" name="empresa_email" class="form-control" value="<?= e($sysConfig['empresa_email'] ?? 'contacto@boticacusco.pe') ?>">
            </div>
        </div>

        <hr class="my-4">

        <h6 class="fw-bold text-primary mb-3"><i class="bi bi-cash-coin me-2"></i>Impuestos y Tarifas de Envíos</h6>
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <label class="form-label small fw-bold">Porcentaje de IGV (%)</label>
                <input type="number" step="0.1" name="igv_porcentaje" class="form-control" value="<?= e($sysConfig['igv_porcentaje'] ?? '18.00') ?>">
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold">Delivery Local Cusco (S/.)</label>
                <input type="number" step="0.5" name="costo_envio_local" class="form-control" value="<?= e($sysConfig['costo_envio_local'] ?? '8.00') ?>">
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold">Envío Nacional / Courier (S/.)</label>
                <input type="number" step="0.5" name="costo_envio_nacional" class="form-control" value="<?= e($sysConfig['costo_envio_nacional'] ?? '18.00') ?>">
            </div>
        </div>

        <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill fw-bold">
            <i class="bi bi-save me-1"></i> Guardar Cambios de Configuración
        </button>
    </form>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
