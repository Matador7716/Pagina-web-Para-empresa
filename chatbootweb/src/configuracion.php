<?php
include_once "includes/header.php";

if ($_SESSION['rol'] != 'Administrador') {
    header('location: dashboard.php');
    exit;
}

$alert = '';

// Fetch current configuration
$stmt_ref = mysqli_prepare($conexion, "SELECT nombre_empresa, whatsapp_numero, mensaje_bienvenida, logo FROM configuracion LIMIT 1");
mysqli_stmt_execute($stmt_ref);
mysqli_stmt_bind_result($stmt_ref, $r_nom, $r_wa, $r_msg, $r_logo);
mysqli_stmt_fetch($stmt_ref);
$data_conf = [
    'nombre_empresa' => $r_nom,
    'whatsapp_numero' => $r_wa,
    'mensaje_bienvenida' => $r_msg,
    'logo' => $r_logo
];
mysqli_stmt_close($stmt_ref);

if (!empty($_POST)) {
    $nombre = $_POST['nombre_empresa'];
    $whatsapp = $_POST['whatsapp_numero'];
    $mensaje = $_POST['mensaje_bienvenida'];

    // Handle logo upload
    $logo_name = $data_conf['logo'] ?? 'default_logo.png';
    if (!empty($_FILES['logo']['name'])) {
        $logo_name = $_FILES['logo']['name'];
        $logo_tmp = $_FILES['logo']['tmp_name'];
        $dest = "../assets/img/" . $logo_name;
        move_uploaded_file($logo_tmp, $dest);
    }

    $stmt_upd = mysqli_prepare($conexion, "UPDATE configuracion SET nombre_empresa = ?, whatsapp_numero = ?, mensaje_bienvenida = ?, logo = ? WHERE id = 1");
    mysqli_stmt_bind_param($stmt_upd, "ssss", $nombre, $whatsapp, $mensaje, $logo_name);

    if (mysqli_stmt_execute($stmt_upd)) {
        $alert = '<div class="alert alert-success" role="alert">Configuración actualizada correctamente.</div>';
        // Refresh data (manual fetch for compatibility)
        $stmt_ref = mysqli_prepare($conexion, "SELECT nombre_empresa, whatsapp_numero, mensaje_bienvenida, logo FROM configuracion LIMIT 1");
        mysqli_stmt_execute($stmt_ref);
        mysqli_stmt_bind_result($stmt_ref, $r_nom, $r_wa, $r_msg, $r_logo);
        mysqli_stmt_fetch($stmt_ref);
        $data_conf = [
            'nombre_empresa' => $r_nom,
            'whatsapp_numero' => $r_wa,
            'mensaje_bienvenida' => $r_msg,
            'logo' => $r_logo
        ];
        mysqli_stmt_close($stmt_ref);
    } else {
        $alert = '<div class="alert alert-danger" role="alert">Error al actualizar la configuración.</div>';
    }
    mysqli_stmt_close($stmt_upd);
}
?>

<div class="container-fluid">
    <h2 class="mb-4">Configuración del Sistema</h2>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <?php echo $alert; ?>
                    <form method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nombre de la Empresa</label>
                                <input type="text" name="nombre_empresa" class="form-control" value="<?php echo $data_conf['nombre_empresa']; ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Número de WhatsApp (Bot)</label>
                                <input type="text" name="whatsapp_numero" class="form-control" value="<?php echo $data_conf['whatsapp_numero']; ?>" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Mensaje de Bienvenida (IA Creativa)</label>
                                <textarea name="mensaje_bienvenida" class="form-control" rows="3" required><?php echo $data_conf['mensaje_bienvenida']; ?></textarea>
                                <small class="text-muted">Este mensaje iniciará la conversación de forma animada y creativa.</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Logo de la Empresa</label>
                                <input type="file" name="logo" class="form-control" accept="image/*">
                            </div>
                            <div class="col-md-6 mb-3 text-center">
                                <img src="../assets/img/<?php echo $data_conf['logo']; ?>" alt="Logo" style="max-width: 150px;" class="mt-2 img-thumbnail" onerror="this.src='https://via.placeholder.com/150?text=Logo'">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save me-2"></i> Guardar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>
