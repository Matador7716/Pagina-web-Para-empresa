<?php
require_once "../../conexion.php";
session_start();

$action = $_GET['action'] ?? '';

if ($action == 'searchClient') {
    $dni = $_GET['dni'];
    $query = mysqli_prepare($conexion, "SELECT * FROM clientes WHERE dni = ?");
    mysqli_stmt_bind_param($query, "s", $dni);
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);
    $data = mysqli_fetch_assoc($result);
    if ($data) {
        echo json_encode(['status' => true, 'data' => $data]);
    } else {
        echo json_encode(['status' => false]);
    }
}

if ($action == 'searchProduct') {
    $valor = $_GET['valor'];
    $type = $_GET['type'];
    if ($type == 'code') {
        $query = mysqli_prepare($conexion, "SELECT * FROM productos WHERE codigo = ?");
        mysqli_stmt_bind_param($query, "s", $valor);
    } else {
        $valor_like = "%$valor%";
        $query = mysqli_prepare($conexion, "SELECT * FROM productos WHERE descripcion LIKE ? LIMIT 1");
        mysqli_stmt_bind_param($query, "s", $valor_like);
    }
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);
    $data = mysqli_fetch_assoc($result);
    if ($data) {
        echo json_encode(['status' => true, 'data' => $data]);
    } else {
        echo json_encode(['status' => false]);
    }
}

if ($action == 'generateSale') {
    $id_cliente = $_POST['id_cliente'];
    $id_usuario = $_SESSION['idUser'];
    $total = $_POST['total'];
    $items = json_decode($_POST['items'], true);

    mysqli_begin_transaction($conexion);

    try {
        $query_venta = mysqli_prepare($conexion, "INSERT INTO ventas (id_cliente, total, id_usuario) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($query_venta, "idi", $id_cliente, $total, $id_usuario);
        mysqli_stmt_execute($query_venta);
        $id_venta = mysqli_insert_id($conexion);

        foreach ($items as $item) {
            $codigo = $item['codigo'];
            $cantidad = $item['cantidad'];
            $precio = $item['precio'];

            // Get product ID
            $query_p = mysqli_prepare($conexion, "SELECT idproducto, existencia FROM productos WHERE codigo = ?");
            mysqli_stmt_bind_param($query_p, "s", $codigo);
            mysqli_stmt_execute($query_p);
            $res_p = mysqli_stmt_get_result($query_p);
            $data_p = mysqli_fetch_assoc($res_p);

            $id_producto = $data_p['idproducto'];
            $nuevo_stock = $data_p['existencia'] - $cantidad;

            // Insert detail
            $query_detalle = mysqli_prepare($conexion, "INSERT INTO detalle_venta (id_venta, id_producto, cantidad, precio) VALUES (?, ?, ?, ?)");
            mysqli_stmt_bind_param($query_detalle, "iiid", $id_venta, $id_producto, $cantidad, $precio);
            mysqli_stmt_execute($query_detalle);

            // Update stock
            $query_upd = mysqli_prepare($conexion, "UPDATE productos SET existencia = ? WHERE idproducto = ?");
            mysqli_stmt_bind_param($query_upd, "ii", $nuevo_stock, $id_producto);
            mysqli_stmt_execute($query_upd);
        }

        mysqli_commit($conexion);
        echo json_encode(['status' => true, 'id_venta' => $id_venta]);

    } catch (Exception $e) {
        mysqli_rollback($conexion);
        echo json_encode(['status' => false, 'msg' => $e->getMessage()]);
    }
}
?>
