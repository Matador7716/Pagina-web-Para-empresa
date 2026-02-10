<?php
include_once "includes/header.php";
if ($_SESSION['rol'] != 'administrador') {
    header('location: dashboard.php');
    exit;
}

$query = mysqli_query($conexion, "SELECT * FROM configuracion");
$data = mysqli_fetch_assoc($query);

if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombre']) || empty($_POST['telefono']) || empty($_POST['correo']) || empty($_POST['ruc'])) {
        $alert = '<div class="alert alert-warning" role="alert">Todos los campos son obligatorios</div>';
    } else {
        $nombre = $_POST['nombre'];
        $tel = $_POST['telefono'];
        $email = $_POST['correo'];
        $ruc = $_POST['ruc'];
        $id = (int)$_POST['id'];

        $stmt = mysqli_prepare($conexion, "UPDATE configuracion SET nombre = ?, telefono = ?, correo = ?, ruc = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "ssssi", $nombre, $tel, $email, $ruc, $id);
        if (mysqli_stmt_execute($stmt)) {
            $alert = '<div class="alert alert-success" role="alert">Configuración actualizada correctamente</div>';
            // Update the local data to show the new values immediately
            $data['nombre'] = $nombre;
            $data['telefono'] = $tel;
            $data['correo'] = $email;
            $data['ruc'] = $ruc;
        } else {
            $alert = '<div class="alert alert-danger" role="alert">Error al actualizar la configuración</div>';
        }
    }
}
?>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Configuración de la Empresa
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <?php echo isset($alert) ? $alert : ''; ?>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <div class="mb-3">
                        <label for="nombre">Nombre de la Empresa</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo htmlspecialchars($data['nombre']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo htmlspecialchars($data['telefono']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo">Correo Electrónico</label>
                        <input type="email" class="form-control" name="correo" id="correo" value="<?php echo htmlspecialchars($data['correo']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="ruc">Número de RUC</label>
                        <input type="text" class="form-control" name="ruc" id="ruc" value="<?php echo htmlspecialchars($data['ruc']); ?>" required>
                    </div>
                    <input type="submit" value="Guardar Cambios" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>
