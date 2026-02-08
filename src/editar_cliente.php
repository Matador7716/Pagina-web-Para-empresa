<?php
include_once "includes/header.php";
$id = (int)$_GET['id'];
$stmt = mysqli_prepare($conexion, "SELECT * FROM clientes WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$data = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombre']) || empty($_POST['dni']) || empty($_POST['telefono']) || empty($_POST['direccion'])) {
        $alert = '<div class="alert alert-warning" role="alert">Todos los campos son obligatorios</div>';
    } else {
        $nombre = $_POST['nombre'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];

        $stmt_update = mysqli_prepare($conexion, "UPDATE clientes SET nombre = ?, dni = ?, telefono = ?, direccion = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt_update, "ssssi", $nombre, $dni, $telefono, $direccion, $id);
        if (mysqli_stmt_execute($stmt_update)) {
            $alert = '<div class="alert alert-success" role="alert">Cliente actualizado correctamente</div>';
            header("Location: clientes.php");
            exit;
        } else {
            $alert = '<div class="alert alert-danger" role="alert">Error al actualizar el cliente</div>';
        }
    }
}
?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Editar Cliente
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <?php echo isset($alert) ? $alert : ''; ?>
                    <div class="mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo htmlspecialchars($data['nombre']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" name="dni" id="dni" value="<?php echo htmlspecialchars($data['dni']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo htmlspecialchars($data['telefono']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo htmlspecialchars($data['direccion']); ?>">
                    </div>
                    <input type="submit" value="Actualizar" class="btn btn-primary">
                    <a href="clientes.php" class="btn btn-danger">Regresar</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php"; ?>
