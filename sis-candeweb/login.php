<?php
require_once __DIR__ . '/includes/functions.php';

$pageTitle = "Iniciar Sesión - SIS CandeWeb Ventas";
$error = '';
$success = '';

if (isLoggedIn()) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = "Token de seguridad no válido.";
    } else {
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if (empty($email) || empty($password)) {
            $error = "Por favor ingresa tu correo y contraseña.";
        } else {
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ? AND estado = 'activo'");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_nombre'] = $user['nombre'];
                $_SESSION['user_apellido'] = $user['apellido'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_rol'] = $user['rol'];
                $_SESSION['user_telefono'] = $user['telefono'];

                // Restaurar carrito guardado si existe
                $cStmt = $pdo->prepare("SELECT contenido_json FROM carrito_guardado WHERE usuario_id = ?");
                $cStmt->execute([$user['id']]);
                $saved = $cStmt->fetchColumn();
                if ($saved) {
                    $decoded = json_decode($saved, true);
                    if (is_array($decoded) && !empty($decoded)) {
                        $_SESSION['cart'] = array_merge($_SESSION['cart'] ?? [], $decoded);
                    }
                }

                if (in_array($user['rol'], ['admin', 'vendedor'])) {
                    header("Location: admin/index.php");
                } else {
                    header("Location: index.php");
                }
                exit;
            } else {
                $error = "Credenciales incorrectas o cuenta inactiva.";
            }
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
                    <span class="brand-badge fs-2 d-inline-block mb-2"><i class="bi bi-heart-pulse-fill"></i></span>
                    <h3 class="fw-bold">Iniciar Sesión</h3>
                    <p class="text-muted small">Accede a tu cuenta de SIS CandeWeb Ventas</p>
                </div>

                <?php if ($error): ?>
                    <div class="alert alert-danger py-2 small"><?= e($error) ?></div>
                <?php endif; ?>

                <form method="POST" action="login.php" id="loginForm">
                    <input type="hidden" name="csrf_token" value="<?= getCsrfToken() ?>">

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Correo Electrónico</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="ejemplo@correo.com" required value="<?= e($_POST['email'] ?? '') ?>">
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <label class="form-label small fw-bold">Contraseña</label>
                            <a href="recuperar_password.php" class="small text-decoration-none text-primary">¿Olvidaste tu contraseña?</a>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold mb-3 shadow-sm">
                        Ingresar a Mi Cuenta
                    </button>
                </form>

                <div class="text-center small text-muted">
                    ¿No tienes una cuenta aún? <a href="registro.php" class="fw-bold text-primary">Regístrate aquí</a>
                </div>

                <div class="mt-4 pt-3 border-top small bg-light p-2 rounded">
                    <strong>Cuentas de demostración:</strong><br>
                    &bull; Admin: <code>admin@boticacusco.pe</code> / <code>Admin123!</code><br>
                    &bull; Cliente: <code>cliente@gmail.com</code> / <code>Admin123!</code>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
