<?php
session_start();
require_once '../config/db.php';
require_once '../includes/header.php';
require_once '../includes/csrf.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    validate_csrf_token();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $username;
            header('Location: index.php');
            exit;
        } else {
            $message = 'Nombre de usuario o contraseña incorrectos.';
        }
    } else {
        $message = 'Por favor, completa todos los campos.';
    }
}
?>

<main class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Iniciar Sesión</h2>
            <?php if ($message): ?>
                <div class="alert alert-danger"><?php echo $message; ?></div>
            <?php endif; ?>
            <form action="login.php" method="post">
                <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>">
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de Usuario:</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</main>

<?php require_once '../includes/footer.php'; ?>
