<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña - Sistema de Farmacia</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="login-container">
        <form action="index.php?action=forgot_password" method="post">
            <h2>Recuperar Contraseña</h2>
            <?php require_once __DIR__ . '/partials/_messages.php'; ?>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email" required>
            </div>
            <button type="submit">Enviar Enlace de Recuperación</button>
            <p><a href="index.php?action=login">Volver a Iniciar Sesión</a></p>
        </form>
    </div>
</body>
</html>
