<?php
include_once "includes/header.php";
if ($_SESSION['rol'] != 'administrador' && $_SESSION['rol'] != 'supervisor') {
    header('location: dashboard.php');
    exit;
}

if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['codigo']) || empty($_POST['nombre']) || empty($_POST['precio_compra']) || empty($_POST['precio_venta']) || empty($_POST['cantidad'])) {
        $alert = '<div class="alert alert-warning" role="alert">Todos los campos son obligatorios</div>';
    } else {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $precio_compra = $_POST['precio_compra'];
        $precio_venta = $_POST['precio_venta'];
        $cantidad = $_POST['cantidad'];

        $stmt = mysqli_prepare($conexion, "SELECT * FROM productos WHERE codigo = ?");
        mysqli_stmt_bind_param($stmt, "s", $codigo);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $alert = '<div class="alert alert-danger" role="alert">El código de barras ya existe</div>';
        } else {
            $stmt_insert = mysqli_prepare($conexion, "INSERT INTO productos(codigo, nombre, precio_compra, precio_venta, cantidad) VALUES (?, ?, ?, ?, ?)");
            mysqli_stmt_bind_param($stmt_insert, "ssddi", $codigo, $nombre, $precio_compra, $precio_venta, $cantidad);
            if (mysqli_stmt_execute($stmt_insert)) {
                $alert = '<div class="alert alert-success" role="alert">Producto registrado correctamente</div>';
            } else {
                $alert = '<div class="alert alert-danger" role="alert">Error al registrar el producto</div>';
            }
        }
    }
}

// Search logic
$search = isset($_GET['search']) ? $_GET['search'] : '';
$where = "";
$params = [];
$types = "";
if ($search != '') {
    $where = "WHERE codigo LIKE ? OR nombre LIKE ?";
    $searchTerm = "%$search%";
    $params = [$searchTerm, $searchTerm];
    $types = "ss";
}

// Pagination logic
$sql_count = "SELECT COUNT(*) as total_registro FROM productos $where";
if ($search != '') {
    $stmt_count = mysqli_prepare($conexion, $sql_count);
    mysqli_stmt_bind_param($stmt_count, $types, ...$params);
    mysqli_stmt_execute($stmt_count);
    $result_count = mysqli_stmt_get_result($stmt_count);
} else {
    $result_count = mysqli_query($conexion, $sql_count);
}
$result_registe = mysqli_fetch_array($result_count);
$total_registro = $result_registe['total_registro'] ?? 0;

$por_pagina = 20;
$pagina = !empty($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$desde = ($pagina - 1) * $por_pagina;
$total_paginas = ceil($total_registro / $por_pagina);

$sql_query = "SELECT * FROM productos $where LIMIT ?, ?";
$stmt_query = mysqli_prepare($conexion, $sql_query);
$queryParams = $params;
$queryParams[] = $desde;
$queryParams[] = $por_pagina;
$queryTypes = $types . "ii";
mysqli_stmt_bind_param($stmt_query, $queryTypes, ...$queryParams);
mysqli_stmt_execute($stmt_query);
$query = mysqli_stmt_get_result($stmt_query);
?>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <span>Gestión de Productos</span>
                <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#nuevo_producto">Nuevo Producto</button>
            </div>
            <div class="card-body">
                <form action="productos.php" method="get" class="row g-3 mb-4">
                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="Buscar por código o nombre" value="<?php echo htmlspecialchars($search); ?>">
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
                                <th>Código</th>
                                <th>Producto</th>
                                <th>Precio Compra</th>
                                <th>Precio Venta</th>
                                <th>Stock</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) { ?>
                                    <tr>
                                        <td><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['codigo']; ?></td>
                                        <td><?php echo htmlspecialchars($data['nombre']); ?></td>
                                        <td><?php echo $data['precio_compra']; ?></td>
                                        <td><?php echo $data['precio_venta']; ?></td>
                                        <td><?php echo $data['cantidad']; ?></td>
                                        <td>
                                            <a href="editar_producto.php?id=<?php echo $data['id']; ?>" class="btn btn-success"><i class='fas fa-edit'></i></a>
                                            <a href="eliminar_producto.php?id=<?php echo $data['id']; ?>" class="btn btn-danger confirmar"><i class='fas fa-trash-alt'></i></a>
                                        </td>
                                    </tr>
                            <?php }
                            } else {
                                echo "<tr><td colspan='7' class='text-center'>No hay productos registrados</td></tr>";
                            } ?>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <nav>
                    <ul class="pagination">
                        <?php
                        $search_param = ($search != '') ? "&search=" . urlencode($search) : "";
                        if ($pagina != 1) {
                        ?>
                            <li class="page-item"><a class="page-link" href="?pagina=1<?php echo $search_param; ?>">|<</a></li>
                            <li class="page-item"><a class="page-link" href="?pagina=<?php echo $pagina - 1; ?><?php echo $search_param; ?>"><<</a></li>
                        <?php
                        }
                        for ($i = 1; $i <= $total_paginas; $i++) {
                            if ($i == $pagina) {
                                echo '<li class="page-item active"><a class="page-link">' . $i . '</a></li>';
                            } else {
                                echo '<li class="page-item"><a class="page-link" href="?pagina=' . $i . $search_param . '">' . $i . '</a></li>';
                            }
                        }
                        if ($pagina < $total_paginas && $total_paginas > 0) {
                        ?>
                            <li class="page-item"><a class="page-link" href="?pagina=<?php echo $pagina + 1; ?><?php echo $search_param; ?>">>></a></li>
                            <li class="page-item"><a class="page-link" href="?pagina=<?php echo $total_paginas; ?><?php echo $search_param; ?>">>|</a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nuevo Producto -->
<div class="modal fade" id="nuevo_producto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" autocomplete="off">
                    <div class="mb-3">
                        <label for="codigo">Código de Barras</label>
                        <input type="text" placeholder="Ingrese código de barras" class="form-control" name="codigo" id="codigo" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre">Nombre del Producto</label>
                        <input type="text" placeholder="Ingrese nombre" class="form-control" name="nombre" id="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="precio_compra">Precio Compra</label>
                        <input type="number" step="0.01" placeholder="0.00" class="form-control" name="precio_compra" id="precio_compra" required>
                    </div>
                    <div class="mb-3">
                        <label for="precio_venta">Precio Venta</label>
                        <input type="number" step="0.01" placeholder="0.00" class="form-control" name="precio_venta" id="precio_venta" required>
                    </div>
                    <div class="mb-3">
                        <label for="cantidad">Cantidad (Stock)</label>
                        <input type="number" placeholder="0" class="form-control" name="cantidad" id="cantidad" required>
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
