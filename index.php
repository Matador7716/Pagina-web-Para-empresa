<?php
session_start();
if (!empty($_SESSION['active'])) {
    header('location: src/');
} else {
    if (!empty($_POST)) {
        $alert = '';
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = '<div class="alert alert-danger" role="alert">Ingrese su usuario y contraseña</div>';
        } else {
            require_once "conexion.php";
            $user = $_POST['usuario'];

            $query = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE usuario = ?");
            mysqli_stmt_bind_param($query, "s", $user);
            mysqli_stmt_execute($query);
            $result = mysqli_stmt_get_result($query);
            $num_rows = mysqli_num_rows($result);

            if ($num_rows > 0) {
                $data = mysqli_fetch_array($result);
                if (password_verify($_POST['clave'], $data['clave'])) {
                    $_SESSION['active'] = true;
                    $_SESSION['idUser'] = $data['idusuario'];
                    $_SESSION['nombre'] = $data['nombre'];
                    $_SESSION['email'] = $data['correo'];
                    $_SESSION['user'] = $data['usuario'];
                    $_SESSION['rol'] = $data['rol'];
                    header('location: src/');
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
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Farmacia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #004d40 0%, #00acc1 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            border: 1px solid rgba(255, 255, 255, 0.18);
            width: 100%;
            max-width: 400px;
            color: white;
        }
        .btn-primary {
            background-color: #004d40;
            border: none;
        }
        .btn-primary:hover {
            background-color: #00332c;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
        }
        .form-control:focus {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border-color: #fff;
            box-shadow: none;
        }
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2 class="text-center mb-4">Farmacia Saludable</h2>
        <form action="" method="post" autocomplete="off">
            <?php echo isset($alert) ? $alert : ''; ?>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese usuario">
            </div>
            <div class="mb-3">
                <label for="clave" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="clave" id="clave" placeholder="Ingrese contraseña">
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
        </form>
    </div>
</body>
</html>
