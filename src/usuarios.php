<?php
require_once "includes/header.php";
require_once "../conexion.php";

if ($_SESSION['rol'] != 'administrador') {
    header('location: index.php');
}

$query = mysqli_query($conexion, "SELECT * FROM usuarios");
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
    <button type="button" class="btn btn-pharmacy" data-bs-toggle="modal" data-bs-target="#modalUsuario" onclick="nuevoUsuario()">
        <i class="fas fa-user-plus me-1"></i> Nuevo
    </button>
</div>

<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td><?php echo $data['idusuario']; ?></td>
                        <td><?php echo $data['nombre']; ?></td>
                        <td><?php echo $data['correo']; ?></td>
                        <td><?php echo $data['usuario']; ?></td>
                        <td><?php echo $data['rol']; ?></td>
                        <td>
                            <button class="btn btn-sm btn-info text-white" onclick="editarUsuario(<?php echo $data['idusuario']; ?>)">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" onclick="eliminarUsuario(<?php echo $data['idusuario']; ?>)">
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

<!-- Modal Usuario -->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModal">Registrar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formUsuario">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id_user">
                    <div class="mb-3">
                        <label>Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Correo</label>
                        <input type="email" name="correo" id="correo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" required>
                    </div>
                    <div class="mb-3" id="div_clave">
                        <label>Contraseña</label>
                        <input type="password" name="clave" id="clave" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Rol</label>
                        <select name="rol" id="rol" class="form-control" required>
                            <option value="administrador">Administrador</option>
                            <option value="ventas">Ventas</option>
                            <option value="supervisor">Supervisor</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-pharmacy" id="btnAccion">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>

<script>
function nuevoUsuario() {
    document.getElementById('formUsuario').reset();
    document.getElementById('id_user').value = "";
    document.getElementById('div_clave').style.display = "block";
    document.getElementById('titleModal').innerHTML = "Registrar Usuario";
    document.getElementById('btnAccion').innerHTML = "Registrar";
}

$(document).on('submit', '#formUsuario', function(e) {
    e.preventDefault();
    $.ajax({
        url: 'ajax/usuarios.php?action=save',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            const res = JSON.parse(response);
            if (res.status) {
                Swal.fire('Éxito', res.msg, 'success').then(() => location.reload());
            } else {
                Swal.fire('Error', res.msg, 'error');
            }
        }
    });
});

function editarUsuario(id) {
    $.ajax({
        url: 'ajax/usuarios.php?action=get&id=' + id,
        type: 'GET',
        success: function(response) {
            const data = JSON.parse(response);
            $('#id_user').val(data.idusuario);
            $('#nombre').val(data.nombre);
            $('#correo').val(data.correo);
            $('#usuario').val(data.usuario);
            $('#rol').val(data.rol);
            $('#div_clave').hide();
            $('#titleModal').html("Editar Usuario");
            $('#btnAccion').html("Actualizar");
            $('#modalUsuario').modal('show');
        }
    });
}

function eliminarUsuario(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: 'ajax/usuarios.php?action=delete&id=' + id,
                type: 'GET',
                success: function(response) {
                    const res = JSON.parse(response);
                    if (res.status) {
                        Swal.fire('Eliminado', res.msg, 'success').then(() => location.reload());
                    } else {
                        Swal.fire('Error', res.msg, 'error');
                    }
                }
            });
        }
    });
}
</script>
