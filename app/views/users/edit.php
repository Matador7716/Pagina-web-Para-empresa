<?php require_once '../app/views/partials/header.php'; ?>

<style>
    .form-container {
        max-width: 600px;
        margin: 2rem auto;
        padding: 2rem;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .form-title {
        text-align: center;
        margin-bottom: 1.5rem;
        color: #333;
    }
    .form-group {
        margin-bottom: 1rem;
    }
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: #555;
    }
    .form-group input,
    .form-group select {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .form-group .error {
        color: #d9534f;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }
    .btn-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 1.5rem;
    }
    .btn {
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        cursor: pointer;
        text-decoration: none;
        text-align: center;
    }
    .btn-primary {
        background-color: var(--primary-color);
        color: white;
    }
    .btn-secondary {
        background-color: #6c757d;
        color: white;
    }
</style>

<div class="form-container">
    <h2 class="form-title"><?php echo $data['title']; ?></h2>
    <form action="<?php echo BASE_URL; ?>/users/edit/<?php echo $data['id']; ?>" method="post">
        <input type="hidden" name="csrf_token" value="<?php echo CSRF::generateToken(); ?>">
        <div class="form-group">
            <label for="nombre_usuario">Nombre de Usuario</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" value="<?php echo htmlspecialchars($data['nombre_usuario']); ?>">
            <?php if (!empty($data['errors']['nombre_usuario'])): ?><div class="error"><?php echo $data['errors']['nombre_usuario']; ?></div><?php endif; ?>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>">
            <?php if (!empty($data['errors']['email'])): ?><div class="error"><?php echo $data['errors']['email']; ?></div><?php endif; ?>
        </div>
        <div class="form-group">
            <label for="nombre_completo">Nombre Completo</label>
            <input type="text" id="nombre_completo" name="nombre_completo" value="<?php echo htmlspecialchars($data['nombre_completo']); ?>">
        </div>
        <div class="form-group">
            <label for="rol_id">Rol</label>
            <select id="rol_id" name="rol_id">
                <option value="1" <?php echo ($data['rol_id'] == 1) ? 'selected' : ''; ?>>Administrador</option>
                <option value="2" <?php echo ($data['rol_id'] == 2) ? 'selected' : ''; ?>>Recepcionista</option>
                <option value="3" <?php echo ($data['rol_id'] == 3) ? 'selected' : ''; ?>>Limpieza</option>
                <option value="4" <?php echo ($data['rol_id'] == 4) ? 'selected' : ''; ?>>Finanzas</option>
                <option value="5" <?php echo ($data['rol_id'] == 5) ? 'selected' : ''; ?>>Marketing</option>
            </select>
        </div>
        <div class="btn-container">
            <a href="<?php echo BASE_URL; ?>/users" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
</div>

<?php require_once '../app/views/partials/footer.php'; ?>
