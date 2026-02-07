<?php
session_start();
if (!empty($_SESSION['active'])) {
    header('location: src/');
} else {
    if (!empty($_POST)) {
        $alert = '';
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Ingrese usuario y contraseña
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
        } else {
            require_once "conexion.php";
            $user = $_POST['usuario'];
            $clave = md5($_POST['clave']);

            // Uso de sentencias preparadas para mayor seguridad
            $stmt = $conexion->prepare("SELECT * FROM usuario WHERE usuario = ? AND clave = ?");
            $stmt->bind_param("ss", $user, $clave);
            $stmt->execute();
            $query = $stmt->get_result();

            if ($query->num_rows > 0) {
                $dato = $query->fetch_array();
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $dato['idusuario'];
                $_SESSION['nombre'] = $dato['nombre'];
                $_SESSION['user'] = $dato['usuario'];
                header('Location: src/');
            } else {
                $alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Usuario o contraseña incorrectos
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                session_destroy();
            }
            $stmt->close();
            mysqli_close($conexion);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE VENTAS - Login</title>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #004d40 0%, #000000 100%);
            --glass-bg: rgba(255, 255, 255, 0.12);
            --glass-border: rgba(255, 255, 255, 0.2);
            --accent-color: #26a69a;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--primary-gradient);
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            color: #fff;
        }

        .login-card {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .login-card h2 {
            font-weight: 600;
            margin-bottom: 30px;
            font-size: 1.8rem;
            letter-spacing: 1px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .input-group {
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50px;
            padding: 5px 15px;
            border: 1px solid transparent;
            transition: all 0.3s;
        }

        .input-group:focus-within {
            border-color: var(--accent-color);
            background: rgba(255, 255, 255, 0.15);
        }

        .input-group-text {
            background: transparent;
            border: none;
            color: rgba(255, 255, 255, 0.7);
        }

        .form-control {
            background: transparent;
            border: none;
            color: #fff;
            padding: 10px;
            font-size: 1rem;
        }

        .form-control:focus {
            background: transparent;
            box-shadow: none;
            color: #fff;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .btn-login {
            background: var(--accent-color);
            border: none;
            border-radius: 50px;
            padding: 12px;
            width: 100%;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            margin-top: 10px;
            transition: all 0.3s;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #2bbbad;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(38, 166, 154, 0.4);
        }

        .alert {
            border-radius: 15px;
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        .footer-info {
            margin-top: 25px;
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.5);
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>SISTEMA DE VENTAS</h2>
        <form action="" method="POST">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" name="usuario" placeholder="Usuario" autocomplete="off" required>
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" name="clave" placeholder="Contraseña" autocomplete="off" required>
            </div>

            <?php echo (isset($alert)) ? $alert : '' ; ?>

            <button type="submit" class="btn btn-login">Ingresar</button>
        </form>
        <div class="footer-info">
            &copy; <?php echo date('Y'); ?> Sistema de Gestión - APAFA
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
