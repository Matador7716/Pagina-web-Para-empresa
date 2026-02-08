<?php
require_once "includes/header.php";
require_once "../conexion.php";

if ($_SESSION['rol'] != 'administrador') {
    header('location: index.php');
    exit;
}

$query = mysqli_query($conexion, "SELECT * FROM configuracion LIMIT 1");
$data = mysqli_fetch_assoc($query);

if ($_POST) {
    $ruc = $_POST['ruc'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $id = $_POST['id'];

    $update = mysqli_prepare($conexion, "UPDATE configuracion SET ruc=?, nombre=?, telefono=?, correo=?, direccion=? WHERE id=?");
    mysqli_stmt_bind_param($update, "sssssi", $ruc, $nombre, $telefono, $correo, $direccion, $id);

    if (mysqli_stmt_execute($update)) {
        $alert = '<div class="alert alert-success">Datos actualizados</div>';
        $query = mysqli_query($conexion, "SELECT * FROM configuracion LIMIT 1");
        $data = mysqli_fetch_assoc($query);
    } else {
        $alert = '<div class="alert alert-danger">Error al actualizar</div>';
    }
}
?>

<div class="row">
    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header bg-pharmacy text-white">
                <h4 class="mb-0">Configuración de la Empresa</h4>
            </div>
            <div class="card-body">
                <?php echo isset($alert) ? $alert : ''; ?>
                <form action="" method="post" autocomplete="off">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <div class="mb-3">
                        <label>RUC</label>
                        <input type="text" name="ruc" class="form-control" value="<?php echo $data['ruc']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Nombre de la Empresa</label>
                        <input type="text" name="nombre" class="form-control" value="<?php echo $data['nombre']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Teléfono</label>
                        <input type="text" name="telefono" class="form-control" value="<?php echo $data['telefono']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Correo Electrónico</label>
                        <input type="email" name="correo" class="form-control" value="<?php echo $data['correo']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Dirección</label>
                        <input type="text" name="direccion" class="form-control" value="<?php echo $data['direccion']; ?>" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-pharmacy">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>
