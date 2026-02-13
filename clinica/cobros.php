<?php
$page_title = 'Cobros y Pagos';
require_once 'includes/header.php';
require_once 'php/db.php';

// Get appointments that don't have a record in cobros yet or are pending
$citas_pendientes = $conn->query("
    SELECT c.id, p.nombre as paciente_nombre, c.fecha, c.hora
    FROM citas c
    JOIN pacientes p ON c.id_paciente = p.id
    LEFT JOIN cobros co ON c.id = co.id_cita
    WHERE co.id IS NULL OR co.estado_pago = 'pendiente'
    ORDER BY c.fecha DESC
");
?>

<div class="row mb-4">
    <div class="col-md-6">
        <h2>Gestión de Cobros</h2>
    </div>
    <div class="col-md-6 text-end">
        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalCobro">
            <i class="fas fa-file-invoice-dollar"></i> Registrar Pago
        </button>
    </div>
</div>

<div class="card p-4">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Fecha Cita</th>
                    <th>Paciente</th>
                    <th>Monto</th>
                    <th>Método</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $conn->query("
                    SELECT co.*, p.nombre as paciente_nombre, c.fecha as fecha_cita
                    FROM cobros co
                    JOIN citas c ON co.id_cita = c.id
                    JOIN pacientes p ON c.id_paciente = p.id
                    ORDER BY co.id DESC
                ");
                while($c = $stmt->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($c['fecha_cita']); ?></td>
                    <td><?php echo htmlspecialchars($c['paciente_nombre']); ?></td>
                    <td>S/ <?php echo htmlspecialchars(number_format($c['monto'], 2)); ?></td>
                    <td><?php echo htmlspecialchars(ucfirst($c['metodo_pago'])); ?></td>
                    <td>
                        <span class="badge bg-<?php echo $c['estado_pago'] == 'pagado' ? 'success' : 'warning'; ?>">
                            <?php echo htmlspecialchars(ucfirst($c['estado_pago'])); ?>
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-warning btn-edit-cobro" data-id="<?php echo htmlspecialchars($c['id'], ENT_QUOTES); ?>" data-id-cita="<?php echo htmlspecialchars($c['id_cita'], ENT_QUOTES); ?>" data-monto="<?php echo htmlspecialchars($c['monto'], ENT_QUOTES); ?>" data-metodo="<?php echo htmlspecialchars($c['metodo_pago'], ENT_QUOTES); ?>" data-estado="<?php echo htmlspecialchars($c['estado_pago'], ENT_QUOTES); ?>">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-danger btn-delete-cobro" data-id="<?php echo $c['id']; ?>">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <?php endwhile; ?>
                <?php if($stmt->num_rows == 0): ?>
                <tr>
                    <td colspan="6" class="text-center">No hay cobros registrados</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Cobro -->
<div class="modal fade" id="modalCobro" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCobroTitle">Registrar Cobro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formCobro">
        <input type="hidden" name="id" id="cobroId">
        <input type="hidden" name="accion" id="cobroAccion" value="crear">
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Cita / Sesión</label>
            <select class="form-select" name="id_cita" id="cobroCita" required>
                <option value="">Seleccione una cita...</option>
                <?php while($cp = $citas_pendientes->fetch_assoc()): ?>
                <option value="<?php echo htmlspecialchars($cp['id'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($cp['fecha'] . ' - ' . $cp['paciente_nombre']); ?></option>
                <?php endwhile; ?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Monto (S/)</label>
            <input type="number" step="0.01" class="form-control" name="monto" id="cobroMonto" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Método de Pago</label>
            <select class="form-select" name="metodo_pago" id="cobroMetodo" required>
                <option value="efectivo">Efectivo</option>
                <option value="tarjeta">Tarjeta</option>
                <option value="transferencia">Transferencia</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Estado de Pago</label>
            <select class="form-select" name="estado_pago" id="cobroEstado">
                <option value="pendiente">Pendiente</option>
                <option value="pagado">Pagado</option>
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
    $('.btn-edit-cobro').click(function() {
        $('#modalCobroTitle').text('Editar Cobro');
        $('#cobroAccion').val('editar');
        $('#cobroId').val($(this).data('id'));

        // Add current cita to select if not present
        const citaId = $(this).data('id-cita');
        const citaTexto = $(this).closest('tr').find('td:eq(1)').text();
        if ($("#cobroCita option[value='" + citaId + "']").length == 0) {
            $('#cobroCita').append($('<option>', {
                value: citaId,
                text: citaTexto
            }));
        }

        $('#cobroCita').val(citaId);
        $('#cobroMonto').val($(this).data('monto'));
        $('#cobroMetodo').val($(this).data('metodo'));
        $('#cobroEstado').val($(this).data('estado'));
        $('#modalCobro').modal('show');
    });

    $('#modalCobro').on('hidden.bs.modal', function () {
        $('#formCobro')[0].reset();
        $('#modalCobroTitle').text('Registrar Cobro');
        $('#cobroAccion').val('crear');
        $('#cobroId').val('');
    });

    $('#formCobro').submit(function(e) {
        e.preventDefault();
        $.post('php/cobros_handler.php', $(this).serialize(), function(data) {
            const res = JSON.parse(data);
            if(res.status === 'success') {
                Swal.fire('Éxito', res.message, 'success').then(() => location.reload());
            } else {
                Swal.fire('Error', res.message, 'error');
            }
        });
    });

    $('.btn-delete-cobro').click(function() {
        const id = $(this).data('id');
        Swal.fire({
            title: '¿Eliminar registro de cobro?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.post('php/cobros_handler.php', {accion: 'eliminar', id: id}, function(data) {
                    const res = JSON.parse(data);
                    if(res.status === 'success') {
                        Swal.fire('Eliminado', res.message, 'success').then(() => location.reload());
                    }
                });
            }
        });
    });
});
</script>
