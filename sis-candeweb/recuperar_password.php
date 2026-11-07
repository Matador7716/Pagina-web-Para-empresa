<?php
require_once __DIR__ . '/includes/functions.php';

$pageTitle = "Recuperar Contraseña - SIS CandeWeb Ventas";
$msg = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = "Token no válido.";
    } else {
        $email = trim($_POST['email'] ?? '');
        $stmt = $pdo->prepare("SELECT id, nombre FROM usuarios WHERE email = ? AND estado = 'activo'");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user) {
            $token = bin2hex(random_bytes(24));
            $uStmt = $pdo->prepare("UPDATE usuarios SET token_recuperacion = ? WHERE id = ?");
            $uStmt->execute([$token, $user['id']]);

            addNotification(
                $pdo,
                $user['id'],
                null,
                'recuperacion_clave',
                'Instrucciones de recuperación de contraseña',
                'Se solicitó restablecer la contraseña. Token temporal: ' . $token,
                'email'
            );

            $msg = "Hemos enviado las instrucciones a tu correo electrónico. Por favor revisa tu bandeja de entrada o spam.";
        } else {
            $error = "El correo no se encuentra registrado en nuestro sistema.";
        }
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                <div class="text-center mb-4">
                    <span class="brand-badge fs-2 d-inline-block mb-2"><i class="bi bi-key-fill"></i></span>
                    <h3 class="fw-bold">Recuperar Contraseña</h3>
                    <p class="text-muted small">Ingresa el correo asociado a tu cuenta para restablecer tu clave.</p>
                </div>

                <?php if ($msg): ?>
                    <div class="alert alert-success small"><?= e($msg) ?></div>
                <?php endif; ?>
                <?php if ($error): ?>
                    <div class="alert alert-danger small"><?= e($error) ?></div>
                <?php endif; ?>

                <form method="POST" action="recuperar_password.php">
                    <input type="hidden" name="csrf_token" value="<?= getCsrfToken() ?>">

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Correo Electrónico</label>
                        <input type="email" name="email" class="form-control" required placeholder="tu-correo@ejemplo.com">
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold rounded-pill mb-3">
                        Enviar Enlace de Recuperación
                    </button>

                    <div class="text-center small">
                        <a href="login.php" class="text-decoration-none"><i class="bi bi-arrow-left"></i> Volver a Iniciar Sesión</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
