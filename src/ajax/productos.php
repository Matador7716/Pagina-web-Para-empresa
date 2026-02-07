<?php
require_once "../../conexion.php";
session_start();

$action = $_GET['action'] ?? '';

if ($action == 'save') {
    $id = $_POST['id'];
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $precio_compra = $_POST['precio_compra'];
    $precio_venta = $_POST['precio_venta'];
    $existencia = $_POST['existencia'];

    if (empty($id)) {
        // Registrar
        $query = mysqli_prepare($conexion, "INSERT INTO productos (codigo, descripcion, precio_compra, precio_venta, existencia) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($query, "ssddi", $codigo, $descripcion, $precio_compra, $precio_venta, $existencia);
    } else {
        // Actualizar
        $query = mysqli_prepare($conexion, "UPDATE productos SET codigo=?, descripcion=?, precio_compra=?, precio_venta=?, existencia=? WHERE idproducto=?");
        mysqli_stmt_bind_param($query, "ssddii", $codigo, $descripcion, $precio_compra, $precio_venta, $existencia, $id);
    }

    if (mysqli_stmt_execute($query)) {
        echo json_encode(['status' => true, 'msg' => 'Producto guardado correctamente']);
    } else {
        echo json_encode(['status' => false, 'msg' => 'Error al guardar el producto: ' . mysqli_error($conexion)]);
    }
}

if ($action == 'get') {
    $id = $_GET['id'];
    $query = mysqli_prepare($conexion, "SELECT * FROM productos WHERE idproducto = ?");
    mysqli_stmt_bind_param($query, "i", $id);
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);
    $data = mysqli_fetch_assoc($result);
    echo json_encode($data);
}

if ($action == 'delete') {
    $id = $_GET['id'];
    $query = mysqli_prepare($conexion, "DELETE FROM productos WHERE idproducto = ?");
    mysqli_stmt_bind_param($query, "i", $id);
    if (mysqli_stmt_execute($query)) {
        echo json_encode(['status' => true, 'msg' => 'Producto eliminado']);
    } else {
        echo json_encode(['status' => false, 'msg' => 'Error al eliminar']);
    }
}
?>
