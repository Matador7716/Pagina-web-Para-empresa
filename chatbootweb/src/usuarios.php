<?php
include_once "includes/header.php";

if ($_SESSION['rol'] != 'Administrador') {
    header('location: dashboard.php');
    exit;
}

// Logic for creating/editing users will be handled via AJAX or simple POST for now
// I'll implement a simple list with a modal for adding
?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="mb-0">Gestión de Usuarios</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUsuario">
            <i class="fas fa-plus me-2"></i> Nuevo Usuario
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="tableUsers">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Rol</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE estado = 1");
                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['usuario']; ?></td>
                                <td><span class="badge bg-<?php echo ($row['rol'] == 'Administrador' ? 'primary' : 'info'); ?>"><?php echo $row['rol']; ?></span></td>
                                <td><span class="badge bg-success">Activo</span></td>
                                <td>
                                    <!-- Simplified actions for the demo -->
                                    <button class="btn btn-sm btn-danger" onclick="eliminarUsuario(<?php echo $row['id']; ?>)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalUsuario" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="formUsuario">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nombre Completo</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Usuario</label>
                        <input type="text" name="usuario" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="clave" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Rol</label>
                        <select name="rol" class="form-select" required>
                            <option value="Administrador">Administrador</option>
                            <option value="Supervisor">Supervisor</option>
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

<?php include_once "includes/footer.php"; ?>

<script>
$(document).ready(function() {
    $('#formUsuario').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'ajax/usuarios_handler.php',
            type: 'POST',
            data: $(this).serialize() + '&action=add',
            success: function(response) {
                if (response == 'ok') {
                    Swal.fire('Éxito', 'Usuario guardado', 'success').then(() => {
                        location.reload();
                    });
                } else {
                    Swal.fire('Error', response, 'error');
                }
            }
        });
    });
});

function eliminarUsuario(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "Se desactivará al usuario",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: 'ajax/usuarios_handler.php',
                type: 'POST',
                data: {id: id, action: 'delete'},
                success: function(response) {
                    if (response == 'ok') {
                        location.reload();
                    }
                }
            });
        }
    });
}
</script>
