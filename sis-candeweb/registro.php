<?php
require_once __DIR__ . '/includes/functions.php';

$pageTitle = "Crear Cuenta de Cliente - SIS CandeWeb Ventas";
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
        $nombre = trim($_POST['nombre'] ?? '');
        $apellido = trim($_POST['apellido'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $confirmPassword = $_POST['confirm_password'] ?? '';
        $telefono = trim($_POST['telefono'] ?? '');
        $direccion = trim($_POST['direccion'] ?? '');

        if (empty($nombre) || empty($apellido) || empty($email) || empty($password)) {
            $error = "Por favor completa todos los campos requeridos.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "El formato de correo no es válido.";
        } elseif (strlen($password) < 6) {
            $error = "La contraseña debe tener al menos 6 caracteres.";
        } elseif ($password !== $confirmPassword) {
            $error = "Las contraseñas no coinciden.";
        } else {
            // Verificar si correo existe
            $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
            $stmt->execute([$email]);
            if ($stmt->fetch()) {
                $error = "El correo ya se encuentra registrado. Por favor inicia sesión.";
            } else {
                $hashed = password_hash($password, PASSWORD_DEFAULT);
                $ins = $pdo->prepare("INSERT INTO usuarios (nombre, apellido, email, password, telefono, direccion, rol, estado) VALUES (?, ?, ?, ?, ?, ?, 'cliente', 'activo')");
                $ins->execute([$nombre, $apellido, $email, $hashed, $telefono, $direccion]);
                $newUserId = $pdo->lastInsertId();

                // Notificación de bienvenida automática
                addNotification(
                    $pdo,
                    $newUserId,
                    null,
                    'bienvenida',
                    '¡Bienvenido a SIS CandeWeb Ventas!',
                    'Hola ' . $nombre . ', gracias por unirte a nuestra botica online en Cusco. Disfruta de delivery rápido y ofertas.',
                    'email'
                );

                // Auto login
                $_SESSION['user_id'] = $newUserId;
                $_SESSION['user_nombre'] = $nombre;
                $_SESSION['user_apellido'] = $apellido;
                $_SESSION['user_email'] = $email;
                $_SESSION['user_rol'] = 'cliente';
                $_SESSION['user_telefono'] = $telefono;

                header("Location: index.php?msg=cuenta_creada");
                exit;
            }
        }
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                <div class="text-center mb-4">
                    <span class="brand-badge fs-2 d-inline-block mb-2"><i class="bi bi-person-plus-fill"></i></span>
                    <h3 class="fw-bold">Crear Cuenta</h3>
                    <p class="text-muted small">Regístrate para guardar tu carrito, ver tu historial y acumular descuentos.</p>
                </div>

                <?php if ($error): ?>
                    <div class="alert alert-danger py-2 small"><?= e($error) ?></div>
                <?php endif; ?>

                <form method="POST" action="registro.php">
                    <input type="hidden" name="csrf_token" value="<?= getCsrfToken() ?>">

                    <div class="row g-2 mb-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Nombres *</label>
                            <input type="text" name="nombre" class="form-control" required value="<?= e($_POST['nombre'] ?? '') ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Apellidos *</label>
                            <input type="text" name="apellido" class="form-control" required value="<?= e($_POST['apellido'] ?? '') ?>">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Correo Electrónico *</label>
                        <input type="email" name="email" class="form-control" required value="<?= e($_POST['email'] ?? '') ?>">
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Teléfono / WhatsApp</label>
                            <input type="text" name="telefono" class="form-control" placeholder="984 000 000" value="<?= e($_POST['telefono'] ?? '') ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Dirección en Cusco</label>
                            <input type="text" name="direccion" class="form-control" placeholder="Av. o Calle" value="<?= e($_POST['direccion'] ?? '') ?>">
                        </div>
                    </div>

                    <div class="row g-2 mb-4">
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Contraseña *</label>
                            <input type="password" name="password" class="form-control" required minlength="6">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Confirmar Contraseña *</label>
                            <input type="password" name="confirm_password" class="form-control" required minlength="6">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold mb-3 shadow-sm rounded-pill">
                        Crear Cuenta Gratis
                    </button>
                </form>

                <div class="text-center small text-muted">
                    ¿Ya tienes una cuenta registrada? <a href="login.php" class="fw-bold text-primary">Inicia sesión</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
