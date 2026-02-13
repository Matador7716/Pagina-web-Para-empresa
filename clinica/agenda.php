<?php
$page_title = 'Agenda';
require_once 'includes/header.php';
require_once 'php/db.php';

// Get list of patients for the select
$pacientes = $conn->query("SELECT id, nombre FROM pacientes ORDER BY nombre");
?>

<!-- FullCalendar CSS -->
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css' rel='stylesheet' />

<div class="row mb-4">
    <div class="col-md-6">
        <h2>Agenda de Citas</h2>
    </div>
    <div class="col-md-6 text-end">
        <button class="btn btn-primary" id="btnNuevaCita">
            <i class="fas fa-plus"></i> Nueva Cita
        </button>
    </div>
</div>

<div class="card p-4">
    <div id='calendar'></div>
</div>

<!-- Modal Telemedicina -->
<div class="modal fade" id="modalTelemedicina" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Videollamada Segura</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
          <iframe id="jitsiFrame" allow="camera; microphone; fullscreen; display-capture; autoplay" src="" style="height: 100%; width: 100%; border: 0;"></iframe>
      </div>
    </div>
  </div>
</div>

<!-- Modal Cita -->
<div class="modal fade" id="modalCita" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCitaTitle">Programar Cita</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formCita">
        <input type="hidden" name="id" id="citaId">
        <input type="hidden" name="accion" id="citaAccion" value="crear">
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Paciente</label>
            <select class="form-select" name="id_paciente" id="citaPaciente" required>
                <option value="">Seleccione un paciente...</option>
                <?php while($p = $pacientes->fetch_assoc()): ?>
                <option value="<?php echo htmlspecialchars($p['id'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($p['nombre']); ?></option>
                <?php endwhile; ?>
            </select>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="citaFecha" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Hora</label>
                <input type="time" class="form-control" name="hora" id="citaHora" required>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Tipo de Sesión</label>
            <select class="form-select" name="tipo" id="citaTipo">
                <option value="presencial">Presencial</option>
                <option value="virtual">Virtual (Telemedicina)</option>
            </select>
          </div>
          <div id="divVirtual" class="mb-3 d-none">
            <label class="form-label">Link de Videollamada</label>
            <div class="input-group mb-2">
                <input type="text" class="form-control" name="link_videollamada" id="citaLink">
                <button class="btn btn-outline-secondary" type="button" id="btnGenerarLink">Generar Jitsi</button>
            </div>
            <div id="divJoinMeeting" class="d-none">
                <button type="button" class="btn btn-info w-100" id="btnJoinMeeting">
                    <i class="fas fa-video"></i> Unirse a Videollamada
                </button>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Notas / Motivo</label>
            <textarea class="form-control" name="notas" id="citaNotas"></textarea>
          </div>
          <div class="mb-3">
              <label class="form-label">Estado</label>
              <select class="form-select" name="estado" id="citaEstado">
                  <option value="pendiente">Pendiente</option>
                  <option value="completada">Completada</option>
                  <option value="cancelada">Cancelada</option>
                  <option value="reprogramada">Reprogramada</option>
              </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger d-none" id="btnEliminarCita">Eliminar</button>
          <button type="button" class="btn btn-success d-none" id="btnRecordatorio">
            <i class="fab fa-whatsapp"></i> Recordatorio
          </button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require_once 'includes/footer.php'; ?>

<!-- FullCalendar JS -->
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'es',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: 'php/agenda_handler.php?accion=listar',
        dateClick: function(info) {
            $('#formCita')[0].reset();
            $('#citaAccion').val('crear');
            $('#citaId').val('');
            $('#citaFecha').val(info.dateStr);
            $('#modalCitaTitle').text('Programar Cita');
            $('#btnEliminarCita').addClass('d-none');
            $('#btnRecordatorio').addClass('d-none');
            $('#divVirtual').addClass('d-none');
            $('#divJoinMeeting').addClass('d-none');
            $('#modalCita').modal('show');
        },
        eventClick: function(info) {
            const ev = info.event;
            const props = ev.extendedProps;
            $('#citaId').val(ev.id);
            $('#citaAccion').val('editar');
            $('#citaPaciente').val(props.id_paciente);
            $('#citaFecha').val(ev.startStr.split('T')[0]);
            $('#citaHora').val(ev.startStr.split('T')[1].substring(0, 5));
            $('#citaTipo').val(props.tipo);
            $('#citaLink').val(props.link_videollamada);
            $('#citaNotas').val(props.notas);
            $('#citaEstado').val(props.estado);

            $('#modalCitaTitle').text('Editar Cita');
            $('#btnEliminarCita').removeClass('d-none');
            $('#btnRecordatorio').removeClass('d-none');

            if(props.tipo === 'virtual') {
                $('#divVirtual').removeClass('d-none');
                if(props.link_videollamada) {
                    $('#divJoinMeeting').removeClass('d-none');
                } else {
                    $('#divJoinMeeting').addClass('d-none');
                }
            } else {
                $('#divVirtual').addClass('d-none');
                $('#divJoinMeeting').addClass('d-none');
            }

            $('#modalCita').modal('show');
        }
    });
    calendar.render();

    $('#btnNuevaCita').click(function() {
        $('#formCita')[0].reset();
        $('#citaAccion').val('crear');
        $('#citaId').val('');
        $('#modalCitaTitle').text('Programar Cita');
        $('#btnEliminarCita').addClass('d-none');
        $('#btnRecordatorio').addClass('d-none');
        $('#divVirtual').addClass('d-none');
        $('#divJoinMeeting').addClass('d-none');
        $('#modalCita').modal('show');
    });

    $('#citaTipo').change(function() {
        if($(this).val() === 'virtual') {
            $('#divVirtual').removeClass('d-none');
        } else {
            $('#divVirtual').addClass('d-none');
        }
    });

    $('#btnGenerarLink').click(function() {
        const room = 'ClinicaPsico-' + Math.random().toString(36).substring(7);
        $('#citaLink').val('https://meet.jit.si/' + room);
        $('#divJoinMeeting').removeClass('d-none');
    });

    $('#btnJoinMeeting').click(function() {
        const url = $('#citaLink').val();
        if(url) {
            $('#jitsiFrame').attr('src', url);
            $('#modalTelemedicina').modal('show');
        }
    });

    $('#modalTelemedicina').on('hidden.bs.modal', function () {
        $('#jitsiFrame').attr('src', '');
    });

    $('#formCita').submit(function(e) {
        e.preventDefault();
        $.post('php/agenda_handler.php', $(this).serialize(), function(data) {
            const res = JSON.parse(data);
            if(res.status === 'success') {
                Swal.fire('Éxito', res.message, 'success').then(() => {
                    $('#modalCita').modal('hide');
                    calendar.refetchEvents();
                });
            } else {
                Swal.fire('Error', res.message, 'error');
            }
        });
    });

    $('#btnEliminarCita').click(function() {
        const id = $('#citaId').val();
        Swal.fire({
            title: '¿Eliminar cita?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.post('php/agenda_handler.php', {accion: 'eliminar', id: id}, function(data) {
                    const res = JSON.parse(data);
                    if(res.status === 'success') {
                        Swal.fire('Eliminado', res.message, 'success').then(() => {
                            $('#modalCita').modal('hide');
                            calendar.refetchEvents();
                        });
                    }
                });
            }
        });
    });

    $('#btnRecordatorio').click(function() {
        Swal.fire({
            title: 'Enviar Recordatorio',
            text: 'Se enviará un mensaje de WhatsApp simulado al paciente.',
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: 'Enviar'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire('Enviado', 'El recordatorio ha sido enviado con éxito.', 'success');
            }
        });
    });
});
</script>
