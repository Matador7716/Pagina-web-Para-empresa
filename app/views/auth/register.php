<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container">
        <form action="/register.php" method="post">
            <h2>Registro</h2>
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="role">Rol:</label>
                <select name="role" id="role">
                    <option value="Recepcionista">Recepcionista</option>
                    <option value="Contador">Contador</option>
                    <option value="Administrador">Administrador</option>
                </select>
            </div>
            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>
