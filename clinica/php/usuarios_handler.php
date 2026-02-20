<?php
session_start();
require_once 'db.php';

if ($_SESSION['user_rol'] !== 'administrador') {
    echo json_encode(['status' => 'error', 'message' => 'Acceso denegado']);
    exit();
}

$accion = $_POST['accion'] ?? '';

if ($accion === 'crear') {
    $nombre = $_POST['nombre'] ?? '';
    $usuario = $_POST['usuario'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $clave = $_POST['clave'] ?? '';
    $rol = $_POST['rol'] ?? '';

    if (empty($nombre) || empty($usuario) || empty($clave) || empty($rol)) {
        echo json_encode(['status' => 'error', 'message' => 'Faltan campos obligatorios']);
        exit();
    }

    $hashed_clave = password_hash($clave, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, usuario, correo, clave, rol) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nombre, $usuario, $correo, $hashed_clave, $rol);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Usuario creado correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al crear usuario: ' . $conn->error]);
    }

} elseif ($accion === 'editar') {
    $id = $_POST['id'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $usuario = $_POST['usuario'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $clave = $_POST['clave'] ?? '';
    $rol = $_POST['rol'] ?? '';

    if (empty($id) || empty($nombre) || empty($usuario) || empty($rol)) {
        echo json_encode(['status' => 'error', 'message' => 'Faltan campos obligatorios']);
        exit();
    }

    if (!empty($clave)) {
        $hashed_clave = password_hash($clave, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE usuarios SET nombre=?, usuario=?, correo=?, clave=?, rol=? WHERE id=?");
        $stmt->bind_param("sssssi", $nombre, $usuario, $correo, $hashed_clave, $rol, $id);
    } else {
        $stmt = $conn->prepare("UPDATE usuarios SET nombre=?, usuario=?, correo=?, rol=? WHERE id=?");
        $stmt->bind_param("ssssi", $nombre, $usuario, $correo, $rol, $id);
    }

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Usuario actualizado correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al actualizar usuario']);
    }

} elseif ($accion === 'eliminar') {
    $id = $_POST['id'] ?? '';
    if (empty($id)) {
        echo json_encode(['status' => 'error', 'message' => 'ID no proporcionado']);
        exit();
    }

    $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ? AND usuario != 'admin'");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Usuario eliminado correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al eliminar usuario']);
    }
}
?>
