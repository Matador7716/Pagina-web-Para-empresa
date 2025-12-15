<?php
require_once '../config/db.php';
require_once '../includes/header.php';
require_once '../includes/csrf.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    validate_csrf_token();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Basic validation
    if (!empty($username) && !empty($password) && !empty($email)) {
        // Hash password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $hashed_password, $email);

        if ($stmt->execute()) {
            $message = '¡Registro exitoso! Ahora puedes <a href="login.php">iniciar sesión</a>.';
        } else {
            $message = 'Error: No se pudo registrar. El nombre de usuario o email ya existe.';
        }
    } else {
        $message = 'Por favor, completa todos los campos.';
    }
}
?>

<main class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Registro de Usuario</h2>
            <?php if ($message): ?>
                <div class="alert alert-info"><?php echo $message; ?></div>
            <?php endif; ?>
            <form action="register.php" method="post">
                <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>">
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de Usuario:</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </form>
        </div>
    </div>
</main>

<?php require_once '../includes/footer.php'; ?>
