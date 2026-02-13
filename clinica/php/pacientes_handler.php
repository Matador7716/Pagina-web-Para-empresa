<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Acceso denegado']);
    exit();
}

$accion = $_POST['accion'] ?? '';

if ($accion === 'crear') {
    $nombre = $_POST['nombre'] ?? '';
    $dni = $_POST['dni'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $direccion = $_POST['direccion'] ?? '';
    $historial = $_POST['historial_clinico'] ?? '';

    if (empty($nombre) || empty($dni)) {
        echo json_encode(['status' => 'error', 'message' => 'Nombre y DNI son obligatorios']);
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO pacientes (nombre, dni, telefono, correo, direccion, historial_clinico) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nombre, $dni, $telefono, $correo, $direccion, $historial);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Paciente registrado correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al registrar paciente: ' . $conn->error]);
    }

} elseif ($accion === 'editar') {
    $id = $_POST['id'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $dni = $_POST['dni'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $direccion = $_POST['direccion'] ?? '';
    $historial = $_POST['historial_clinico'] ?? '';

    if (empty($id) || empty($nombre) || empty($dni)) {
        echo json_encode(['status' => 'error', 'message' => 'Faltan campos obligatorios']);
        exit();
    }

    $stmt = $conn->prepare("UPDATE pacientes SET nombre=?, dni=?, telefono=?, correo=?, direccion=?, historial_clinico=? WHERE id=?");
    $stmt->bind_param("ssssssi", $nombre, $dni, $telefono, $correo, $direccion, $historial, $id);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Paciente actualizado correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al actualizar paciente']);
    }

} elseif ($accion === 'eliminar') {
    $id = $_POST['id'] ?? '';
    if (empty($id)) {
        echo json_encode(['status' => 'error', 'message' => 'ID no proporcionado']);
        exit();
    }

    $stmt = $conn->prepare("DELETE FROM pacientes WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Paciente eliminado correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al eliminar paciente']);
    }
}
?>
