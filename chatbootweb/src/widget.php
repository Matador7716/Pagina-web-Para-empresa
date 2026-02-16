<?php
include_once "includes/header.php";

$stmt_conf = mysqli_prepare($conexion, "SELECT whatsapp_numero, mensaje_bienvenida, mensaje_joinchat FROM configuracion LIMIT 1");
mysqli_stmt_execute($stmt_conf);
mysqli_stmt_bind_result($stmt_conf, $numero, $mensaje, $mensaje_jc);
if (!mysqli_stmt_fetch($stmt_conf)) {
    $numero = '+51 905 590 656';
    $mensaje = '¡Hola! Soy el asistente virtual...';
    $mensaje_jc = 'Hola, vengo de la web y quiero información';
}
mysqli_stmt_close($stmt_conf);
?>

<div class="container-fluid">
    <h2 class="mb-4">Integración con Sitios Web (JoinChat / Widget)</h2>

    <div class="row">
        <div class="col-md-7">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Integración Webhook (Para desarrolladores)</h5>
                </div>
                <div class="card-body">
                    <p>Para que el Bot responda automáticamente en WhatsApp real, debes configurar este URL en tu gateway (Evolution API, etc.):</p>
                    <div class="mb-3">
                        <label class="form-label">URL del Webhook:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" value="http://chatbootweb.notariahuancacusco.com/webhook.php" readonly id="webhook_url">
                            <button class="btn btn-outline-secondary" onclick="copyToClipboard('webhook_url')"><i class="fas fa-copy"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Configuración para JoinChat (WordPress)</h5>
                </div>
                <div class="card-body">
                    <p>Si usas el plugin <strong>JoinChat</strong> en WordPress, utiliza estos datos para conectar con tu Bot:</p>
                    <div class="mb-3">
                        <label class="form-label">Teléfono:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" value="<?php echo $numero; ?>" readonly id="jc_phone">
                            <button class="btn btn-outline-secondary" onclick="copyToClipboard('jc_phone')"><i class="fas fa-copy"></i></button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mensaje Inicial (Call to Action):</label>
                        <div class="input-group">
                            <textarea class="form-control" readonly id="jc_msg"><?php echo htmlspecialchars($mensaje_jc); ?></textarea>
                            <button class="btn btn-outline-secondary" onclick="copyToClipboard('jc_msg')"><i class="fas fa-copy"></i></button>
                        </div>
                        <small class="text-muted">Asegúrate de que este mensaje coincida con una palabra clave en 'Respuestas IA' para que el bot responda automáticamente.</small>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Widget Flotante (Cualquier Sitio Web)</h5>
                </div>
                <div class="card-body">
                    <p>Copia y pega este código antes de cerrar la etiqueta <code>&lt;/body&gt;</code> de tu sitio web:</p>
                    <pre class="bg-light p-3 border rounded" style="font-size: 0.8rem;">
&lt;!-- ChatBootWeb Widget --&gt;
&lt;a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', $numero); ?>?text=<?php echo urlencode($mensaje_jc); ?>"
   style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 2px 2px 3px #999;z-index:100;" target="_blank"&gt;
&lt;i class="fab fa-whatsapp" style="margin-top:16px;"&gt;&lt;/i&gt;
&lt;/a&gt;
&lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"&gt;
                    </pre>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card" style="height: 100%;">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">Vista Previa</h5>
                </div>
                <div class="card-body d-flex align-items-center justify-content-center" style="background: #f0f2f5; position: relative; min-height: 400px;">
                    <div class="text-center">
                        <h6>Tu sitio web</h6>
                        <p class="text-muted small">El botón aparecerá en la esquina inferior derecha</p>
                    </div>

                    <!-- Floating Button Preview -->
                    <div style="position:absolute;width:60px;height:60px;bottom:20px;right:20px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 2px 2px 3px #999; cursor: pointer;">
                        <i class="fab fa-whatsapp" style="margin-top:16px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>

<script>
function copyToClipboard(id) {
    var copyText = document.getElementById(id);
    copyText.select();
    if (copyText.setSelectionRange) copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: 'Copiado',
        showConfirmButton: false,
        timer: 1000
    });
}
</script>
