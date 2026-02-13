<?php
session_start();
if (!empty($_SESSION['active'])) {
    header('location: src/dashboard.php');
    exit;
}
require_once "conexion.php";

$alert = '';
if (!empty($_POST)) {
    if (empty($_POST['usuario']) || empty($_POST['clave'])) {
        $alert = '<div class="alert alert-danger" role="alert">Ingrese su usuario y contraseña</div>';
    } else {
        $user = $_POST['usuario'];
        $pass = $_POST['clave'];

        $stmt = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE usuario = ? AND estado = 1");
        mysqli_stmt_bind_param($stmt, "s", $user);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_array($result);
            if (password_verify($pass, $data['clave'])) {
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['id'];
                $_SESSION['nombre'] = $data['nombre'];
                $_SESSION['user'] = $data['usuario'];
                $_SESSION['rol'] = $data['rol'];
                header('location: src/dashboard.php');
                exit;
            } else {
                $alert = '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos</div>';
                session_destroy();
            }
        } else {
            $alert = '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos</div>';
            session_destroy();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CHATBOOTWEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="text-center mb-4">
                <img src="assets/img/default_logo.png" alt="Logo" style="width: 100px;" onerror="this.src='https://via.placeholder.com/100?text=CHATBOOT'">
                <h4 class="mt-2">CHATBOOTWEB</h4>
                <p class="text-muted">Inicia sesión para continuar</p>
            </div>
            <form method="POST" autocomplete="off">
                <?php echo isset($alert) ? $alert : ''; ?>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese usuario" required>
                </div>
                <div class="mb-3">
                    <label for="clave" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="clave" name="clave" placeholder="Ingrese contraseña" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2">Ingresar</button>
            </form>
        </div>
    </div>
</body>
</html>
