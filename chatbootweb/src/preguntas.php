<?php
include_once "includes/header.php";
?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="mb-0">Base de Conocimientos IA</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPregunta">
            <i class="fas fa-plus me-2"></i> Nueva Respuesta
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Pregunta / Palabra Clave</th>
                            <th>Respuesta Automática</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="listaPreguntas">
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM preguntas_frecuentes");
                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['pregunta']); ?></td>
                                <td><?php echo htmlspecialchars($row['respuesta']); ?></td>
                                <td>
                                    <button class="btn btn-sm btn-danger" onclick="eliminarPregunta(<?php echo $row['id']; ?>)">
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
<div class="modal fade" id="modalPregunta" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Respuesta IA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="formPregunta">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Si el usuario dice (Palabra clave):</label>
                        <input type="text" name="pregunta" class="form-control" placeholder="Ej: precios, hola, horario" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">El Bot responderá:</label>
                        <textarea name="respuesta" class="form-control" rows="4" placeholder="Escribe la respuesta automática..." required></textarea>
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
    $('#formPregunta').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'ajax/preguntas_handler.php',
            type: 'POST',
            data: $(this).serialize() + '&action=add',
            success: function(response) {
                if (response == 'ok') {
                    Swal.fire('Éxito', 'Respuesta agregada', 'success').then(() => {
                        location.reload();
                    });
                }
            }
        });
    });
});

function eliminarPregunta(id) {
    if (confirm('¿Eliminar esta respuesta?')) {
        $.ajax({
            url: 'ajax/preguntas_handler.php',
            type: 'POST',
            data: {id: id, action: 'delete'},
            success: function(response) {
                if (response == 'ok') {
                    location.reload();
                }
            }
        });
    }
}
</script>
