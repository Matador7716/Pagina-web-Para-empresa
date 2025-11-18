<?php require_once '../app/views/partials/header.php'; ?>

<style>
    .container {
        padding: 2rem;
    }
    .table-container {
        background-color: #fff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .table-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }
    .table-title {
        margin: 0;
        font-size: 1.5rem;
        color: #333;
    }
    .add-btn {
        background-color: var(--primary-color);
        color: white;
        padding: 0.75rem 1.25rem;
        border-radius: 4px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s;
    }
    .add-btn:hover {
        background-color: #063b3d;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
    }
    th, td {
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f8f8f8;
        font-weight: bold;
        color: #555;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    .action-links a {
        color: var(--primary-color);
        margin-right: 1rem;
        text-decoration: none;
    }
    .action-links a:hover {
        text-decoration: underline;
    }
    .action-links .delete-btn {
        color: #d9534f;
        cursor: pointer;
        background: none;
        border: none;
        padding: 0;
        font: inherit;
    }
</style>

<div class="container">
    <div class="table-container">
        <div class="table-header">
            <h2 class="table-title"><?php echo $data['title']; ?></h2>
            <a href="users/add" class="add-btn">Añadir Usuario</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Nombre Completo</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['users'] as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['nombre_usuario']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['nombre_completo']; ?></td>
                    <td><?php echo $user['nombre_rol']; ?></td>
                    <td class="action-links">
                        <a href="<?php echo BASE_URL; ?>/users/edit/<?php echo $user['id']; ?>">Editar</a>
                        <form action="<?php echo BASE_URL; ?>/users/delete/<?php echo $user['id']; ?>" method="post" style="display:inline;">
                            <input type="hidden" name="csrf_token" value="<?php echo CSRF::generateToken(); ?>">
                            <button type="submit" class="delete-btn" onclick="return confirm('¿Estás seguro de que quieres eliminar a este usuario?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once '../app/views/partials/footer.php'; ?>
