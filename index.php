<?php
session_start();
if (!empty($_SESSION['active'])) {
    header('location: src/dashboard.php');
    exit;
}
include_once "conexion.php";

$alert = '';
if (!empty($_POST)) {
    if (empty($_POST['usuario']) || empty($_POST['clave'])) {
        $alert = '<div class="alert alert-danger" role="alert">Ingrese usuario y contraseña</div>';
    } else {
        $user = $_POST['usuario'];
        $clave = $_POST['clave'];

        $query = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE usuario = ?");
        mysqli_stmt_bind_param($query, "s", $user);
        mysqli_stmt_execute($query);
        $result = mysqli_stmt_get_result($query);
        if ($data = mysqli_fetch_assoc($result)) {
            if (password_verify($clave, $data['clave'])) {
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['id'];
                $_SESSION['nombre'] = $data['nombre'];
                $_SESSION['email'] = $data['correo'];
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
    <title>Login - FERRETERIA CANDELAWEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: linear-gradient(135deg, #004d40 0%, #00251a 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            backdrop-filter: blur(10px);
        }
        .login-card h2 {
            color: #004d40;
            margin-bottom: 25px;
            text-align: center;
            font-weight: bold;
        }
        .btn-login {
            background-color: #004d40;
            color: white;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-login:hover {
            background-color: #00695c;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Ferretería CandelaWeb</h2>
        <form method="POST" action="">
            <?php echo isset($alert) ? $alert : ''; ?>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese usuario" required>
            </div>
            <div class="mb-3">
                <label for="clave" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="clave" name="clave" placeholder="Ingrese contraseña" required>
            </div>
            <button type="submit" class="btn btn-login">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
