<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario - Sistema de Farmacia</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Editar Usuario</h2>
        <?php require_once __DIR__ . '/../partials/_messages.php'; ?>
        <form action="index.php?action=user_edit&id=<?php echo $user->id; ?>" method="post">
            <div class="form-group">
                <label for="nombre_usuario">Usuario</label>
                <input type="text" name="nombre_usuario" id="nombre_usuario" value="<?php echo $user->nombre_usuario; ?>" required>
            </div>
            <div class="form-group">
                <label for="nombre_completo">Nombre Completo</label>
                <input type="text" name="nombre_completo" id="nombre_completo" value="<?php echo $user->nombre_completo; ?>" required>
            </div>
            <div class="form-group">
                <label for="rol">Rol</label>
                <select name="rol" id="rol" required>
                    <option value="Administrador" <?php echo ($user->rol == 'Administrador') ? 'selected' : ''; ?>>Administrador</option>
                    <option value="Cajero" <?php echo ($user->rol == 'Cajero') ? 'selected' : ''; ?>>Cajero</option>
                    <option value="Inventario" <?php echo ($user->rol == 'Inventario') ? 'selected' : ''; ?>>Inventario</option>
                    <option value="Farmacéutico" <?php echo ($user->rol == 'Farmacéutico') ? 'selected' : ''; ?>>Farmacéutico</option>
                </select>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" required>
                    <option value="activo" <?php echo ($user->estado == 'activo') ? 'selected' : ''; ?>>Activo</option>
                    <option value="inactivo" <?php echo ($user->estado == 'inactivo') ? 'selected' : ''; ?>>Inactivo</option>
                </select>
            </div>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>
</html>
