<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'config/db.php';

if ($_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit;
}

$stmt = $pdo->query("SELECT * FROM users ORDER BY created_at DESC");
$users = $stmt->fetchAll();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestión de Usuarios</h1>
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#userModal">
            <i class="bi bi-person-plus"></i> Nuevo Usuario
        </button>
    </div>

    <div class="table-responsive bg-white p-3 rounded shadow-sm">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $u): ?>
                <tr>
                    <td><?php echo htmlspecialchars($u['full_name']); ?></td>
                    <td><?php echo htmlspecialchars($u['username']); ?></td>
                    <td><span class="badge bg-info text-dark"><?php echo ucfirst($u['role']); ?></span></td>
                    <td>
                        <span class="badge bg-<?php echo $u['status'] ? 'success' : 'danger'; ?>">
                            <?php echo $u['status'] ? 'Activo' : 'Inactivo'; ?>
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-warning edit-user" data-user='<?php echo htmlspecialchars(json_encode($u), ENT_QUOTES, 'UTF-8'); ?>'>
                            <i class="bi bi-pencil"></i>
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Usuario -->
    <div class="modal fade" id="userModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="userForm">
                    <div class="modal-header">
                        <h5 class="modal-title">Nuevo Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="user_id">
                        <input type="hidden" name="csrf_token" value="<?php echo get_csrf_token(); ?>">
                        <div class="mb-3">
                            <label class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" name="full_name" id="user_full_name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Usuario (Username)</label>
                            <input type="text" class="form-control" name="username" id="user_username" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="user_password" placeholder="Dejar en blanco si no desea cambiarla">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rol</label>
                            <select class="form-select" name="role" id="user_role">
                                <option value="seller">Vendedor</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>
