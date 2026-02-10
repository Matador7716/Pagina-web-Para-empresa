<?php
include_once "includes/header.php";
if ($_SESSION['rol'] != 'administrador') {
    header('location: dashboard.php');
    exit;
}
$id = (int)$_GET['id'];
$stmt = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$data = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['rol'])) {
        $alert = '<div class="alert alert-warning" role="alert">Todos los campos son obligatorios</div>';
    } else {
        $nombre = $_POST['nombre'];
        $email = $_POST['correo'];
        $user = $_POST['usuario'];
        $rol = $_POST['rol'];

        $stmt_update = mysqli_prepare($conexion, "UPDATE usuarios SET nombre = ?, correo = ?, usuario = ?, rol = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt_update, "ssssi", $nombre, $email, $user, $rol, $id);
        if (mysqli_stmt_execute($stmt_update)) {
            $alert = '<div class="alert alert-success" role="alert">Usuario actualizado correctamente</div>';
            header("Location: usuarios.php");
            exit;
        } else {
            $alert = '<div class="alert alert-danger" role="alert">Error al actualizar the usuario</div>';
        }
    }
}
?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Editar Usuario
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <?php echo isset($alert) ? $alert : ''; ?>
                    <div class="mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" placeholder="Ingrese nombre" class="form-control" name="nombre" id="nombre" value="<?php echo htmlspecialchars($data['nombre']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="correo">Correo</label>
                        <input type="email" placeholder="Ingrese correo" class="form-control" name="correo" id="correo" value="<?php echo htmlspecialchars($data['correo']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="usuario">Usuario</label>
                        <input type="text" placeholder="Ingrese usuario" class="form-control" name="usuario" id="usuario" value="<?php echo htmlspecialchars($data['usuario']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="rol">Rol</label>
                        <select name="rol" id="rol" class="form-control">
                            <option value="administrador" <?php if ($data['rol'] == 'administrador') echo 'selected'; ?>>Administrador</option>
                            <option value="ventas" <?php if ($data['rol'] == 'ventas') echo 'selected'; ?>>Ventas</option>
                            <option value="supervisor" <?php if ($data['rol'] == 'supervisor') echo 'selected'; ?>>Supervisor</option>
                        </select>
                    </div>
                    <input type="submit" value="Actualizar" class="btn btn-primary">
                    <a href="usuarios.php" class="btn btn-danger">Regresar</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php"; ?>
