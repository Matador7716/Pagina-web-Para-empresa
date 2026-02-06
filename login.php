<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CandelaWeb</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="login-body">
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <img src="images/insignia_igv.png" alt="Logo" class="login-logo">
                <h1>Bienvenido</h1>
                <p>Ingresa tus credenciales para acceder</p>
            </div>
            <form action="php_logic/auth.php" method="POST" class="login-form">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="usuario" placeholder="Usuario" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="clave" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn-login">Iniciar Sesión</button>
                <div class="login-footer">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Floating Icons -->
    <div class="floating-icons">
        <a href="https://wa.me/51935209781" class="whatsapp-icon" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
        <button class="chat-button">
            <i class="fas fa-comments"></i> Asesor Online
        </button>
    </div>

    <script>
        // Basic interactivity if needed
        document.querySelector('.chat-button').addEventListener('click', () => {
            alert('El asesor online no está disponible en este momento.');
        });
    </script>
</body>
</html>
