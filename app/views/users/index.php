<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios - Sistema de Farmacia</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Gestión de Usuarios</h2>
        <?php require_once __DIR__ . '/../partials/_messages.php'; ?>
        <a href="index.php?action=user_create">Crear Nuevo Usuario</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre Completo</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?php echo $user->id; ?></td>
                        <td><?php echo $user->nombre_usuario; ?></td>
                        <td><?php echo $user->nombre_completo; ?></td>
                        <td><?php echo $user->rol; ?></td>
                        <td><?php echo $user->estado; ?></td>
                        <td>
                            <a href="index.php?action=user_edit&id=<?php echo $user->id; ?>">Editar</a>
                            <form action="index.php?action=user_delete&id=<?php echo $user->id; ?>" method="post" style="display:inline;">
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
