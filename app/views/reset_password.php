<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña - Sistema de Farmacia</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="login-container">
        <form action="index.php?action=reset_password" method="post">
            <h2>Restablecer Contraseña</h2>
            <?php require_once __DIR__ . '/partials/_messages.php'; ?>
            <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
            <div class="form-group">
                <label for="password">Nueva Contraseña</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirm">Confirmar Nueva Contraseña</label>
                <input type="password" name="password_confirm" id="password_confirm" required>
            </div>
            <button type="submit">Restablecer Contraseña</button>
        </form>
    </div>
</body>
</html>
