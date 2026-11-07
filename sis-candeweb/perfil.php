<?php
require_once __DIR__ . '/includes/functions.php';
requireAuth();

$userId = $_SESSION['user_id'];
$msg = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = "Token no válido.";
    } else {
        $nombre = trim($_POST['nombre'] ?? '');
        $apellido = trim($_POST['apellido'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $direccion = trim($_POST['direccion'] ?? '');
        $ciudad = trim($_POST['ciudad'] ?? 'Cusco');
        $newPass = $_POST['new_password'] ?? '';

        if (empty($nombre) || empty($apellido)) {
            $error = "El nombre y apellido no pueden estar vacíos.";
        } else {
            if (!empty($newPass)) {
                if (strlen($newPass) < 6) {
                    $error = "La nueva contraseña debe tener mínimo 6 caracteres.";
                } else {
                    $hash = password_hash($newPass, PASSWORD_DEFAULT);
                    $stmt = $pdo->prepare("UPDATE usuarios SET nombre = ?, apellido = ?, telefono = ?, direccion = ?, ciudad = ?, password = ? WHERE id = ?");
                    $stmt->execute([$nombre, $apellido, $telefono, $direccion, $ciudad, $hash, $userId]);
                    $msg = "Perfil y contraseña actualizados exitosamente.";
                }
            } else {
                $stmt = $pdo->prepare("UPDATE usuarios SET nombre = ?, apellido = ?, telefono = ?, direccion = ?, ciudad = ? WHERE id = ?");
                $stmt->execute([$nombre, $apellido, $telefono, $direccion, $ciudad, $userId]);
                $msg = "Perfil actualizado exitosamente.";
            }

            $_SESSION['user_nombre'] = $nombre;
            $_SESSION['user_apellido'] = $apellido;
            $_SESSION['user_telefono'] = $telefono;
        }
    }
}

$uStmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
$uStmt->execute([$userId]);
$user = $uStmt->fetch();

$pageTitle = "Mi Perfil - SIS CandeWeb Botica Cusco";
require_once __DIR__ . '/includes/header.php';
?>

<div class="container py-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-4 text-center">
                <div class="bg-primary-subtle text-primary p-3 rounded-circle d-inline-block mx-auto mb-3" style="width: 80px; height: 80px; line-height: 50px;">
                    <i class="bi bi-person fs-1"></i>
                </div>
                <h5 class="fw-bold mb-1"><?= e($user['nombre'] . ' ' . $user['apellido']) ?></h5>
                <p class="text-muted small mb-3"><?= e($user['email']) ?></p>
                <span class="badge bg-primary rounded-pill mb-4"><?= strtoupper($user['rol']) ?></span>

                <div class="list-group list-group-flush text-start small">
                    <a href="perfil.php" class="list-group-item list-group-item-action active fw-bold"><i class="bi bi-person me-2"></i> Mis Datos</a>
                    <a href="historial_compras.php" class="list-group-item list-group-item-action"><i class="bi bi-bag-check me-2"></i> Mis Compras</a>
                    <a href="wishlist.php" class="list-group-item list-group-item-action"><i class="bi bi-heart me-2"></i> Mi Lista de Deseos</a>
                    <a href="logout.php" class="list-group-item list-group-item-action text-danger"><i class="bi bi-box-arrow-right me-2"></i> Cerrar Sesión</a>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card border-0 shadow-sm rounded-4 p-4">
                <h4 class="fw-bold mb-4">Editar Datos Personales</h4>

                <?php if ($msg): ?>
                    <div class="alert alert-success small"><?= e($msg) ?></div>
                <?php endif; ?>
                <?php if ($error): ?>
                    <div class="alert alert-danger small"><?= e($error) ?></div>
                <?php endif; ?>

                <form method="POST" action="perfil.php">
                    <input type="hidden" name="csrf_token" value="<?= getCsrfToken() ?>">

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Nombres</label>
                            <input type="text" name="nombre" class="form-control" required value="<?= e($user['nombre']) ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Apellidos</label>
                            <input type="text" name="apellido" class="form-control" required value="<?= e($user['apellido']) ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Correo (No modificable)</label>
                            <input type="email" class="form-control bg-light" value="<?= e($user['email']) ?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Teléfono / Celular</label>
                            <input type="text" name="telefono" class="form-control" value="<?= e($user['telefono']) ?>">
                        </div>
                        <div class="col-md-8">
                            <label class="form-label small fw-bold">Dirección Habitual</label>
                            <input type="text" name="direccion" class="form-control" value="<?= e($user['direccion']) ?>">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-bold">Ciudad</label>
                            <input type="text" name="ciudad" class="form-control" value="<?= e($user['ciudad']) ?>">
                        </div>
                    </div>

                    <hr class="my-4">

                    <h6 class="fw-bold mb-2">Cambiar Contraseña (Opcional)</h6>
                    <p class="small text-muted mb-3">Deja el campo vacío si no deseas cambiar tu contraseña actual.</p>

                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Nueva Contraseña</label>
                            <input type="password" name="new_password" class="form-control" minlength="6" placeholder="Mínimo 6 caracteres">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill fw-bold">
                        Guardar Cambios
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
