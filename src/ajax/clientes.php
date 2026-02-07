<?php
require_once "../../conexion.php";

$action = $_GET['action'] ?? '';

if ($action == 'save') {
    $id = $_POST['id'];
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    if (empty($id)) {
        $query = mysqli_prepare($conexion, "INSERT INTO clientes (dni, nombre, telefono, direccion) VALUES (?, ?, ?, ?)");
        mysqli_stmt_bind_param($query, "ssss", $dni, $nombre, $telefono, $direccion);
    } else {
        $query = mysqli_prepare($conexion, "UPDATE clientes SET dni=?, nombre=?, telefono=?, direccion=? WHERE idcliente=?");
        mysqli_stmt_bind_param($query, "ssssi", $dni, $nombre, $telefono, $direccion, $id);
    }

    if (mysqli_stmt_execute($query)) {
        echo json_encode(['status' => true, 'msg' => 'Cliente guardado correctamente']);
    } else {
        echo json_encode(['status' => false, 'msg' => 'Error al guardar el cliente: ' . mysqli_error($conexion)]);
    }
}

if ($action == 'get') {
    $id = $_GET['id'];
    $query = mysqli_prepare($conexion, "SELECT * FROM clientes WHERE idcliente = ?");
    mysqli_stmt_bind_param($query, "i", $id);
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);
    $data = mysqli_fetch_assoc($result);
    echo json_encode($data);
}

if ($action == 'list') {
    $query = mysqli_query($conexion, "SELECT * FROM clientes");
    $data = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    echo json_encode($data);
}

if ($action == 'delete') {
    $id = $_GET['id'];
    $query = mysqli_prepare($conexion, "DELETE FROM clientes WHERE idcliente = ?");
    mysqli_stmt_bind_param($query, "i", $id);
    if (mysqli_stmt_execute($query)) {
        echo json_encode(['status' => true, 'msg' => 'Cliente eliminado']);
    } else {
        echo json_encode(['status' => false, 'msg' => 'Error al eliminar']);
    }
}
?>
