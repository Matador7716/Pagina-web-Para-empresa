<?php
$page_title = 'Gestión de Pacientes';
require_once 'includes/header.php';
require_once 'php/db.php';
?>

<div class="row mb-4">
    <div class="col-md-6">
        <h2>Gestión de Pacientes</h2>
    </div>
    <div class="col-md-6 text-end">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalPaciente">
            <i class="fas fa-user-plus"></i> Nuevo Paciente
        </button>
    </div>
</div>

<div class="card p-4">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $conn->query("SELECT * FROM pacientes");
                while($p = $stmt->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($p['dni']); ?></td>
                    <td><?php echo htmlspecialchars($p['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($p['telefono']); ?></td>
                    <td><?php echo htmlspecialchars($p['correo']); ?></td>
                    <td>
                        <button class="btn btn-sm btn-info btn-view" data-id="<?php echo $p['id']; ?>" data-nombre="<?php echo htmlspecialchars($p['nombre'], ENT_QUOTES); ?>" data-dni="<?php echo htmlspecialchars($p['dni'], ENT_QUOTES); ?>" data-telefono="<?php echo htmlspecialchars($p['telefono'], ENT_QUOTES); ?>" data-correo="<?php echo htmlspecialchars($p['correo'], ENT_QUOTES); ?>" data-direccion="<?php echo htmlspecialchars($p['direccion'], ENT_QUOTES); ?>" data-historial="<?php echo htmlspecialchars($p['historial_clinico'], ENT_QUOTES); ?>">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-sm btn-warning btn-edit" data-id="<?php echo $p['id']; ?>" data-nombre="<?php echo htmlspecialchars($p['nombre'], ENT_QUOTES); ?>" data-dni="<?php echo htmlspecialchars($p['dni'], ENT_QUOTES); ?>" data-telefono="<?php echo htmlspecialchars($p['telefono'], ENT_QUOTES); ?>" data-correo="<?php echo htmlspecialchars($p['correo'], ENT_QUOTES); ?>" data-direccion="<?php echo htmlspecialchars($p['direccion'], ENT_QUOTES); ?>" data-historial="<?php echo htmlspecialchars($p['historial_clinico'], ENT_QUOTES); ?>">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-danger btn-delete" data-id="<?php echo $p['id']; ?>">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <?php endwhile; ?>
                <?php if($stmt->num_rows == 0): ?>
                <tr>
                    <td colspan="5" class="text-center">No hay pacientes registrados</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Paciente -->
<div class="modal fade" id="modalPaciente" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Nuevo Paciente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formPaciente">
        <input type="hidden" name="id" id="pacienteId">
        <input type="hidden" name="accion" id="pacienteAccion" value="crear">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" name="nombre" id="pacienteNombre" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">DNI / Documento</label>
                <input type="text" class="form-control" name="dni" id="pacienteDni" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="telefono" id="pacienteTelefono">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo" id="pacienteCorreo">
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion" id="pacienteDireccion">
          </div>
          <div class="mb-3">
            <label class="form-label">Historial Clínico / Notas</label>
            <textarea class="form-control" name="historial_clinico" id="pacienteHistorial" rows="5"></textarea>
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

<!-- Modal Ver Historial -->
<div class="modal fade" id="modalVer" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Expediente Clínico</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div id="viewContent"></div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
    $('.btn-edit').click(function() {
        $('#modalTitle').text('Editar Paciente');
        $('#pacienteAccion').val('editar');
        $('#pacienteId').val($(this).data('id'));
        $('#pacienteNombre').val($(this).data('nombre'));
        $('#pacienteDni').val($(this).data('dni'));
        $('#pacienteTelefono').val($(this).data('telefono'));
        $('#pacienteCorreo').val($(this).data('correo'));
        $('#pacienteDireccion').val($(this).data('direccion'));
        $('#pacienteHistorial').val($(this).data('historial'));
        $('#modalPaciente').modal('show');
    });

    $('.btn-view').click(function() {
        const data = $(this).data();
        let content = `
            <div class="row">
                <div class="col-md-6"><strong>Nombre:</strong> ${data.nombre}</div>
                <div class="col-md-6"><strong>DNI:</strong> ${data.dni}</div>
                <div class="col-md-6 mt-2"><strong>Teléfono:</strong> ${data.telefono}</div>
                <div class="col-md-6 mt-2"><strong>Correo:</strong> ${data.correo}</div>
                <div class="col-12 mt-2"><strong>Dirección:</strong> ${data.direccion}</div>
                <div class="col-12 mt-4">
                    <h6>Historial Clínico:</h6>
                    <div class="p-3 bg-light border rounded" style="white-space: pre-wrap;">${data.historial}</div>
                </div>
            </div>
        `;
        $('#viewContent').html(content);
        $('#modalVer').modal('show');
    });

    $('#modalPaciente').on('hidden.bs.modal', function () {
        $('#formPaciente')[0].reset();
        $('#modalTitle').text('Nuevo Paciente');
        $('#pacienteAccion').val('crear');
        $('#pacienteId').val('');
    });

    $('#formPaciente').submit(function(e) {
        e.preventDefault();
        $.post('php/pacientes_handler.php', $(this).serialize(), function(data) {
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
            text: "Se eliminarán también sus citas y cobros.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.post('php/pacientes_handler.php', {accion: 'eliminar', id: id}, function(data) {
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

<?php require_once 'includes/footer.php'; ?>
