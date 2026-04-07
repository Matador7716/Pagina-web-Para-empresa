<?php
require_once "../../conexion.php";

$action = $_GET['action'] ?? '';

if ($action == 'save') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $rol = $_POST['rol'];

    if (empty($id)) {
        $clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);
        $query = mysqli_prepare($conexion, "INSERT INTO usuarios (nombre, correo, usuario, clave, rol) VALUES (?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($query, "sssss", $nombre, $correo, $usuario, $clave, $rol);
    } else {
        $query = mysqli_prepare($conexion, "UPDATE usuarios SET nombre=?, correo=?, usuario=?, rol=? WHERE idusuario=?");
        mysqli_stmt_bind_param($query, "ssssi", $nombre, $correo, $usuario, $rol, $id);
    }

    if (mysqli_stmt_execute($query)) {
        echo json_encode(['status' => true, 'msg' => 'Usuario guardado correctamente']);
    } else {
        echo json_encode(['status' => false, 'msg' => 'Error al guardar el usuario']);
    }
}

if ($action == 'get') {
    $id = $_GET['id'];
    $query = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE idusuario = ?");
    mysqli_stmt_bind_param($query, "i", $id);
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);
    $data = mysqli_fetch_assoc($result);
    echo json_encode($data);
}

if ($action == 'delete') {
    $id = $_GET['id'];
    if ($id == 1) {
        echo json_encode(['status' => false, 'msg' => 'No se puede eliminar el administrador principal']);
        exit;
    }
    $query = mysqli_prepare($conexion, "DELETE FROM usuarios WHERE idusuario = ?");
    mysqli_stmt_bind_param($query, "i", $id);
    if (mysqli_stmt_execute($query)) {
        echo json_encode(['status' => true, 'msg' => 'Usuario eliminado']);
    } else {
        echo json_encode(['status' => false, 'msg' => 'Error al eliminar']);
    }
}
?>
