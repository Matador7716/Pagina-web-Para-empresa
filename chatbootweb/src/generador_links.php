<?php
include_once "includes/header.php";

$stmt_conf = mysqli_prepare($conexion, "SELECT whatsapp_numero FROM configuracion LIMIT 1");
mysqli_stmt_execute($stmt_conf);
mysqli_stmt_bind_result($stmt_conf, $default_num);
mysqli_stmt_fetch($stmt_conf);
mysqli_stmt_close($stmt_conf);
?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="mb-0">Generador de Links WhatsApp</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLink">
            <i class="fas fa-plus me-2"></i> Nuevo Link
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nombre/Campaña</th>
                            <th>Número</th>
                            <th>Mensaje (Trigger)</th>
                            <th>Link Generado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="listaLinks">
                        <?php
                        $stmt = mysqli_prepare($conexion, "SELECT id, nombre, numero, mensaje_predeterminado FROM links_whatsapp ORDER BY id DESC");
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_bind_result($stmt, $lid, $lnom, $lnum, $lmsg);
                        while (mysqli_stmt_fetch($stmt)) {
                            $clean_num = preg_replace('/[^0-9]/', '', $lnum);
                            $wa_link = "https://wa.me/$clean_num?text=" . urlencode($lmsg);
                        ?>
                            <tr>
                                <td><?php echo htmlspecialchars($lnom); ?></td>
                                <td><?php echo htmlspecialchars($lnum); ?></td>
                                <td><?php echo htmlspecialchars($lmsg); ?></td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" value="<?php echo $wa_link; ?>" readonly id="link_<?php echo $lid; ?>">
                                        <button class="btn btn-outline-secondary" type="button" onclick="copyLink(<?php echo $lid; ?>)">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                        <a href="<?php echo $wa_link; ?>" target="_blank" class="btn btn-outline-success">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-danger" onclick="eliminarLink(<?php echo $lid; ?>)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php }
                        mysqli_stmt_close($stmt);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalLink" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear Link de WhatsApp</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="formLink">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nombre de la Campaña / Referencia</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ej: Promo Verano" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Número de WhatsApp</label>
                        <input type="text" name="numero" class="form-control" value="<?php echo $default_num; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mensaje Predeterminado (Inicia el Bot)</label>
                        <textarea name="mensaje" class="form-control" rows="3" placeholder="Ej: Hola, quiero información sobre los precios" required></textarea>
                        <small class="text-muted">Este mensaje debe contener las palabras clave configuradas en 'Respuestas IA'.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Generar Link</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>

<script>
$(document).ready(function() {
    $('#formLink').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'ajax/links_handler.php',
            type: 'POST',
            data: $(this).serialize() + '&action=add',
            success: function(response) {
                if (response == 'ok') {
                    Swal.fire('Éxito', 'Link generado correctamente', 'success').then(() => {
                        location.reload();
                    });
                }
            }
        });
    });
});

function copyLink(id) {
    var copyText = document.getElementById("link_" + id);
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: 'Link copiado al portapapeles',
        showConfirmButton: false,
        timer: 1500
    });
}

function eliminarLink(id) {
    if (confirm('¿Eliminar este link?')) {
        $.ajax({
            url: 'ajax/links_handler.php',
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
