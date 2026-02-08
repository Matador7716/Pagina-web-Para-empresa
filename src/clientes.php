<?php
include_once "includes/header.php";

if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombre']) || empty($_POST['dni']) || empty($_POST['telefono']) || empty($_POST['direccion'])) {
        $alert = '<div class="alert alert-warning" role="alert">Todos los campos son obligatorios</div>';
    } else {
        $nombre = $_POST['nombre'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];

        $stmt = mysqli_prepare($conexion, "SELECT * FROM clientes WHERE dni = ?");
        mysqli_stmt_bind_param($stmt, "s", $dni);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $alert = '<div class="alert alert-danger" role="alert">El DNI ya existe</div>';
        } else {
            $stmt_insert = mysqli_prepare($conexion, "INSERT INTO clientes(nombre, dni, telefono, direccion) VALUES (?, ?, ?, ?)");
            mysqli_stmt_bind_param($stmt_insert, "ssss", $nombre, $dni, $telefono, $direccion);
            if (mysqli_stmt_execute($stmt_insert)) {
                $alert = '<div class="alert alert-success" role="alert">Cliente registrado correctamente</div>';
            } else {
                $alert = '<div class="alert alert-danger" role="alert">Error al registrar el cliente</div>';
            }
        }
    }
}

// Search
$search = isset($_GET['search']) ? $_GET['search'] : '';
$where = "";
$params = [];
if ($search != '') {
    $where = "WHERE dni LIKE ? OR nombre LIKE ?";
    $searchTerm = "%$search%";
    $params = [$searchTerm, $searchTerm];
}

$sql_query = "SELECT * FROM clientes $where";
$stmt_query = mysqli_prepare($conexion, $sql_query);
if ($search != '') {
    mysqli_stmt_bind_param($stmt_query, "ss", ...$params);
}
mysqli_stmt_execute($stmt_query);
$query = mysqli_stmt_get_result($stmt_query);
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <span>Gestión de Clientes</span>
                <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#nuevo_cliente">Nuevo Cliente</button>
            </div>
            <div class="card-body">
                <form action="clientes.php" method="get" class="row g-3 mb-4">
                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="Buscar por DNI o nombre" value="<?php echo htmlspecialchars($search); ?>">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </form>

                <?php echo isset($alert) ? $alert : ''; ?>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>DNI</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) { ?>
                                    <tr>
                                        <td><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['nombre']; ?></td>
                                        <td><?php echo $data['dni']; ?></td>
                                        <td><?php echo $data['telefono']; ?></td>
                                        <td><?php echo $data['direccion']; ?></td>
                                        <td>
                                            <a href="editar_cliente.php?id=<?php echo $data['id']; ?>" class="btn btn-success"><i class='fas fa-edit'></i></a>
                                            <form action="eliminar_cliente.php?id=<?php echo $data['id']; ?>" method="post" class="confirmar d-inline">
                                                <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i></button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php }
                            } else {
                                echo "<tr><td colspan='6' class='text-center'>No hay clientes registrados</td></tr>";
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nuevo Cliente -->
<div class="modal fade" id="nuevo_cliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" autocomplete="off">
                    <div class="mb-3">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" placeholder="Ingrese nombre" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="dni">Número de DNI</label>
                        <input type="text" placeholder="Ingrese DNI" class="form-control" name="dni" id="dni" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono">Teléfono</label>
                        <input type="text" placeholder="Ingrese teléfono" class="form-control" name="telefono" id="telefono" required>
                    </div>
                    <div class="mb-3">
                        <label for="direccion">Dirección</label>
                        <input type="text" placeholder="Ingrese dirección" class="form-control" name="direccion" id="direccion" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>
