<?php
$activePage = 'proveedores';
$panelTitle = "Gestión de Proveedores - SIS CandeWeb";
require_once __DIR__ . '/header.php';

$mensaje = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = "Token no válido.";
    } else {
        $ruc = trim($_POST['ruc']);
        $razon = trim($_POST['razon_social']);
        $contacto = trim($_POST['contacto']);
        $telefono = trim($_POST['telefono']);
        $email = trim($_POST['email']);
        $direccion = trim($_POST['direccion']);

        if (empty($ruc) || empty($razon)) {
            $error = "RUC y Razón Social son requeridos.";
        } else {
            $stmt = $pdo->prepare("INSERT INTO proveedores (ruc, razon_social, contacto, telefono, email, direccion) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$ruc, $razon, $contacto, $telefono, $email, $direccion]);
            $mensaje = "Proveedor registrado exitosamente.";
        }
    }
}

$proveedores = $pdo->query("SELECT pr.*, COUNT(p.id) as total_productos FROM proveedores pr LEFT JOIN productos p ON pr.id = p.proveedor_id GROUP BY pr.id ORDER BY pr.id DESC")->fetchAll();
?>

<?php if ($mensaje): ?>
    <div class="alert alert-success alert-dismissible fade show"><?= e($mensaje) ?></div>
<?php endif; ?>
<?php if ($error): ?>
    <div class="alert alert-danger alert-dismissible fade show"><?= e($error) ?></div>
<?php endif; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="fw-bold mb-0">Gestión de Droguerías y Proveedores</h4>
        <small class="text-muted">Total: <?= count($proveedores) ?> proveedores registrados</small>
    </div>
    <button class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#provModal">
        <i class="bi bi-plus-lg me-1"></i> Nuevo Proveedor
    </button>
</div>

<div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>RUC</th>
                    <th>Razón Social</th>
                    <th>Contacto</th>
                    <th>Teléfono / Email</th>
                    <th>Dirección</th>
                    <th class="text-center">Productos Asignados</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proveedores as $pr): ?>
                    <tr>
                        <td><code><?= e($pr['ruc']) ?></code></td>
                        <td class="fw-bold"><?= e($pr['razon_social']) ?></td>
                        <td><?= e($pr['contacto'] ?? 'N/D') ?></td>
                        <td class="small">
                            <div><?= e($pr['telefono'] ?? '-') ?></div>
                            <span class="text-muted"><?= e($pr['email'] ?? '-') ?></span>
                        </td>
                        <td class="small"><?= e($pr['direccion'] ?? '-') ?></td>
                        <td class="text-center"><span class="badge bg-light text-dark border"><?= $pr['total_productos'] ?></span></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Proveedor -->
<div class="modal fade" id="provModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="proveedores.php">
                <input type="hidden" name="csrf_token" value="<?= getCsrfToken() ?>">

                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Nuevo Proveedor / Droguería</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label small fw-bold">RUC (11 dígitos) *</label>
                        <input type="text" name="ruc" class="form-control" required maxlength="20">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Razón Social *</label>
                        <input type="text" name="razon_social" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Persona de Contacto</label>
                        <input type="text" name="contacto" class="form-control">
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-6">
                            <label class="form-label small fw-bold">Teléfono</label>
                            <input type="text" name="telefono" class="form-control">
                        </div>
                        <div class="col-6">
                            <label class="form-label small fw-bold">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Dirección de Droguería / Almacén</label>
                        <input type="text" name="direccion" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary px-4 fw-bold">Guardar Proveedor</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
