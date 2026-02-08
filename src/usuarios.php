<?php
include_once "includes/header.php";
if ($_SESSION['rol'] != 'administrador') {
    header('location: dashboard.php');
    exit;
}

if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['rol'])) {
        $alert = '<div class="alert alert-warning" role="alert">Todos los campos son obligatorios</div>';
    } else {
        $nombre = $_POST['nombre'];
        $email = $_POST['correo'];
        $user = $_POST['usuario'];
        $clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);
        $rol = $_POST['rol'];

        $stmt = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE usuario = ? OR correo = ?");
        mysqli_stmt_bind_param($stmt, "ss", $user, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $alert = '<div class="alert alert-danger" role="alert">El correo o el usuario ya existe</div>';
        } else {
            $stmt_insert = mysqli_prepare($conexion, "INSERT INTO usuarios(nombre,correo,usuario,clave,rol) VALUES (?, ?, ?, ?, ?)");
            mysqli_stmt_bind_param($stmt_insert, "sssss", $nombre, $email, $user, $clave, $rol);
            if (mysqli_stmt_execute($stmt_insert)) {
                $alert = '<div class="alert alert-success" role="alert">Usuario registrado correctamente</div>';
            } else {
                $alert = '<div class="alert alert-danger" role="alert">Error al registrar el usuario</div>';
            }
        }
    }
}
?>

<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Registro de Usuarios
            </div>
            <div class="card-body">
                <form action="" method="post" autocomplete="off">
                    <?php echo isset($alert) ? $alert : ''; ?>
                    <div class="mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" placeholder="Ingrese nombre" class="form-control" name="nombre" id="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="correo">Correo</label>
                        <input type="email" placeholder="Ingrese correo" class="form-control" name="correo" id="correo">
                    </div>
                    <div class="mb-3">
                        <label for="usuario">Usuario</label>
                        <input type="text" placeholder="Ingrese usuario" class="form-control" name="usuario" id="usuario">
                    </div>
                    <div class="mb-3">
                        <label for="clave">Contraseña</label>
                        <input type="password" placeholder="Ingrese contraseña" class="form-control" name="clave" id="clave">
                    </div>
                    <div class="mb-3">
                        <label for="rol">Rol</label>
                        <select name="rol" id="rol" class="form-control">
                            <option value="administrador">Administrador</option>
                            <option value="ventas">Ventas</option>
                            <option value="supervisor">Supervisor</option>
                        </select>
                    </div>
                    <input type="submit" value="Registrar" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="table-responsive">
            <table class="table table-striped table-bordered mt-2">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stmt_list = mysqli_prepare($conexion, "SELECT * FROM usuarios");
                    mysqli_stmt_execute($stmt_list);
                    $query = mysqli_stmt_get_result($stmt_list);
                    if (mysqli_num_rows($query) > 0) {
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <tr>
                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo htmlspecialchars($data['nombre']); ?></td>
                                <td><?php echo htmlspecialchars($data['correo']); ?></td>
                                <td><?php echo htmlspecialchars($data['usuario']); ?></td>
                                <td><?php echo htmlspecialchars($data['rol']); ?></td>
                                <td>
                                    <a href="editar_usuario.php?id=<?php echo $data['id']; ?>" class="btn btn-success"><i class='fas fa-edit'></i></a>
                                    <form action="eliminar_usuario.php?id=<?php echo $data['id']; ?>" method="post" class="confirmar d-inline">
                                        <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i></button>
                                    </form>
                                </td>
                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>
