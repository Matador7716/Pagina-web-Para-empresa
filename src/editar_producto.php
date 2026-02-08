<?php
include_once "includes/header.php";
if ($_SESSION['rol'] != 'administrador' && $_SESSION['rol'] != 'supervisor') {
    header('location: dashboard.php');
    exit;
}
$id = (int)$_GET['id'];
$stmt = mysqli_prepare($conexion, "SELECT * FROM productos WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$data = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

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

        $stmt_update = mysqli_prepare($conexion, "UPDATE productos SET codigo = ?, nombre = ?, precio_compra = ?, precio_venta = ?, cantidad = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt_update, "ssddii", $codigo, $nombre, $precio_compra, $precio_venta, $cantidad, $id);
        if (mysqli_stmt_execute($stmt_update)) {
            $alert = '<div class="alert alert-success" role="alert">Producto actualizado correctamente</div>';
            header("Location: productos.php");
            exit;
        } else {
            $alert = '<div class="alert alert-danger" role="alert">Error al actualizar el producto</div>';
        }
    }
}
?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Editar Producto
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <?php echo isset($alert) ? $alert : ''; ?>
                    <div class="mb-3">
                        <label for="codigo">Código</label>
                        <input type="text" class="form-control" name="codigo" id="codigo" value="<?php echo htmlspecialchars($data['codigo']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo htmlspecialchars($data['nombre']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="precio_compra">Precio Compra</label>
                        <input type="number" step="0.01" class="form-control" name="precio_compra" id="precio_compra" value="<?php echo $data['precio_compra']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="precio_venta">Precio Venta</label>
                        <input type="number" step="0.01" class="form-control" name="precio_venta" id="precio_venta" value="<?php echo $data['precio_venta']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" class="form-control" name="cantidad" id="cantidad" value="<?php echo $data['cantidad']; ?>">
                    </div>
                    <input type="submit" value="Actualizar" class="btn btn-primary">
                    <a href="productos.php" class="btn btn-danger">Regresar</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php"; ?>
