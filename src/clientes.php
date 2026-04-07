<?php
require_once "includes/header.php";
require_once "../conexion.php";

$search = isset($_GET['search']) ? mysqli_real_escape_string($conexion, $_GET['search']) : '';
$where = "";
if ($search != '') {
    $where = "WHERE dni LIKE '%$search%' OR nombre LIKE '%$search%'";
}

$query = mysqli_query($conexion, "SELECT * FROM clientes $where");
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Clientes</h1>
    <button type="button" class="btn btn-pharmacy" data-bs-toggle="modal" data-bs-target="#modalCliente" onclick="nuevoCliente()">
        <i class="fas fa-user-plus me-1"></i> Nuevo
    </button>
</div>

<div class="card mb-4">
    <div class="card-body">
        <form action="" method="get" class="row g-3 mb-4">
            <div class="col-md-10">
                <input type="text" name="search" class="form-control" placeholder="Buscar por DNI o nombre..." value="<?php echo $search; ?>">
            </div>
            <div class="col-md-2 d-grid">
                <button type="submit" class="btn btn-pharmacy">Buscar</button>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td><?php echo $data['idcliente']; ?></td>
                        <td><?php echo $data['dni']; ?></td>
                        <td><?php echo $data['nombre']; ?></td>
                        <td><?php echo $data['telefono']; ?></td>
                        <td><?php echo $data['direccion']; ?></td>
                        <td>
                            <button class="btn btn-sm btn-info text-white" onclick="editarCliente(<?php echo $data['idcliente']; ?>)">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" onclick="eliminarCliente(<?php echo $data['idcliente']; ?>)">
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

<!-- Modal Cliente -->
<div class="modal fade" id="modalCliente" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModal">Registrar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formCliente">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id_cli">
                    <div class="mb-3">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="text" name="dni" id="dni" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre Completo</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" name="direccion" id="direccion" class="form-control">
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
function nuevoCliente() {
    document.getElementById('formCliente').reset();
    document.getElementById('id_cli').value = "";
    document.getElementById('titleModal').innerHTML = "Registrar Cliente";
    document.getElementById('btnAccion').innerHTML = "Registrar";
}

$(document).on('submit', '#formCliente', function(e) {
    e.preventDefault();
    $.ajax({
        url: 'ajax/clientes.php?action=save',
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

function editarCliente(id) {
    $.ajax({
        url: 'ajax/clientes.php?action=get&id=' + id,
        type: 'GET',
        success: function(response) {
            const data = JSON.parse(response);
            $('#id_cli').val(data.idcliente);
            $('#dni').val(data.dni);
            $('#nombre').val(data.nombre);
            $('#telefono').val(data.telefono);
            $('#direccion').val(data.direccion);
            $('#titleModal').html("Editar Cliente");
            $('#btnAccion').html("Actualizar");
            $('#modalCliente').modal('show');
        }
    });
}

function eliminarCliente(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: 'ajax/clientes.php?action=delete&id=' + id,
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
