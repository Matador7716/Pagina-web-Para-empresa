<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario - Sistema de Farmacia</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Crear Nuevo Usuario</h2>
        <?php require_once __DIR__ . '/../partials/_messages.php'; ?>
        <form action="index.php?action=user_create" method="post">
            <div class="form-group">
                <label for="nombre_usuario">Usuario</label>
                <input type="text" name="nombre_usuario" id="nombre_usuario" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena" required>
            </div>
            <div class="form-group">
                <label for="nombre_completo">Nombre Completo</label>
                <input type="text" name="nombre_completo" id="nombre_completo" required>
            </div>
            <div class="form-group">
                <label for="rol">Rol</label>
                <select name="rol" id="rol" required>
                    <option value="Administrador">Administrador</option>
                    <option value="Cajero">Cajero</option>
                    <option value="Inventario">Inventario</option>
                    <option value="Farmacéutico">Farmacéutico</option>
                </select>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
