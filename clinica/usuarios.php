<?php
$page_title = 'Gestión de Usuarios';
require_once 'includes/header.php';

if ($_SESSION['user_rol'] !== 'administrador') {
    echo "<div class='alert alert-danger'>Acceso denegado. Solo administradores pueden acceder a esta sección.</div>";
    require_once 'includes/footer.php';
    exit();
}

require_once 'php/db.php';
?>

<div class="row mb-4">
    <div class="col-md-6">
        <h2>Gestión de Usuarios</h2>
    </div>
    <div class="col-md-6 text-end">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUsuario">
            <i class="fas fa-user-plus"></i> Nuevo Usuario
        </button>
    </div>
</div>

<div class="card p-4">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $conn->query("SELECT * FROM usuarios");
                while($u = $stmt->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($u['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($u['usuario']); ?></td>
                    <td><?php echo htmlspecialchars($u['correo']); ?></td>
                    <td><span class="badge bg-<?php echo $u['rol'] == 'administrador' ? 'danger' : 'secondary'; ?>"><?php echo ucfirst($u['rol']); ?></span></td>
                    <td>
                        <button class="btn btn-sm btn-warning btn-edit" data-id="<?php echo $u['id']; ?>" data-nombre="<?php echo htmlspecialchars($u['nombre'], ENT_QUOTES); ?>" data-usuario="<?php echo htmlspecialchars($u['usuario'], ENT_QUOTES); ?>" data-correo="<?php echo htmlspecialchars($u['correo'], ENT_QUOTES); ?>" data-rol="<?php echo htmlspecialchars($u['rol'], ENT_QUOTES); ?>">
                            <i class="fas fa-edit"></i>
                        </button>
                        <?php if($u['usuario'] !== 'admin'): ?>
                        <button class="btn btn-sm btn-danger btn-delete" data-id="<?php echo $u['id']; ?>">
                            <i class="fas fa-trash"></i>
                        </button>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Usuario -->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Nuevo Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formUsuario">
        <input type="hidden" name="id" id="userId">
        <input type="hidden" name="accion" id="userAccion" value="crear">
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" name="nombre" id="userNombre" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Usuario</label>
            <input type="text" class="form-control" name="usuario" id="userUsuario" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="email" class="form-control" name="correo" id="userCorreo">
          </div>
          <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <div class="input-group">
                <input type="password" class="form-control" name="clave" id="userClave">
                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            <small class="text-muted" id="claveHelp">Dejar en blanco para no cambiar si está editando.</small>
          </div>
          <div class="mb-3">
            <label class="form-label">Rol</label>
            <select class="form-select" name="rol" id="userRol" required>
                <option value="administrador">Administrador</option>
                <option value="secretaria">Secretaria</option>
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

<?php require_once 'includes/footer.php'; ?>

<script>
$(document).ready(function() {
    $('#togglePassword').click(function() {
        const type = $('#userClave').attr('type') === 'password' ? 'text' : 'password';
        $('#userClave').attr('type', type);
        $(this).find('i').toggleClass('fa-eye fa-eye-slash');
    });

    $('.btn-edit').click(function() {
        $('#modalTitle').text('Editar Usuario');
        $('#userAccion').val('editar');
        $('#userId').val($(this).data('id'));
        $('#userNombre').val($(this).data('nombre'));
        $('#userUsuario').val($(this).data('usuario'));
        $('#userCorreo').val($(this).data('correo'));
        $('#userRol').val($(this).data('rol'));
        $('#userClave').val('');
        $('#claveHelp').show();
        $('#modalUsuario').modal('show');
    });

    $('#modalUsuario').on('hidden.bs.modal', function () {
        $('#formUsuario')[0].reset();
        $('#modalTitle').text('Nuevo Usuario');
        $('#userAccion').val('crear');
        $('#userId').val('');
        $('#claveHelp').hide();
    });

    $('#formUsuario').submit(function(e) {
        e.preventDefault();
        $.post('php/usuarios_handler.php', $(this).serialize(), function(data) {
            const res = JSON.parse(data);
            if(res.status === 'success') {
                Swal.fire('Éxito', res.message, 'success').then(() => location.reload());
            } else {
                Swal.fire('Error', res.message, 'error');
            }
        });
    });

    $('.btn-delete').click(function() {
        const id = $(this).data('id');
        Swal.fire({
            title: '¿Estás seguro?',
            text: "Esta acción no se puede deshacer.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.post('php/usuarios_handler.php', {accion: 'eliminar', id: id}, function(data) {
                    const res = JSON.parse(data);
                    if(res.status === 'success') {
                        Swal.fire('Eliminado', res.message, 'success').then(() => location.reload());
                    } else {
                        Swal.fire('Error', res.message, 'error');
                    }
                });
            }
        });
    });
});
</script>
