<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Acceso denegado']);
    exit();
}

$accion = $_GET['accion'] ?? $_POST['accion'] ?? '';

if ($accion === 'listar') {
    $events = [];
    $query = "SELECT c.*, p.nombre as paciente_nombre
              FROM citas c
              JOIN pacientes p ON c.id_paciente = p.id";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $color = '#4e73df'; // Default
        if ($row['estado'] === 'completada') $color = '#1cc88a';
        if ($row['estado'] === 'cancelada') $color = '#e74a3b';
        if ($row['estado'] === 'reprogramada') $color = '#f6c23e';
        if ($row['tipo'] === 'virtual') $color = '#36b9cc';

        $events[] = [
            'id' => $row['id'],
            'title' => $row['paciente_nombre'] . ($row['tipo'] == 'virtual' ? ' (V)' : ''),
            'start' => $row['fecha'] . 'T' . $row['hora'],
            'backgroundColor' => $color,
            'borderColor' => $color,
            'extendedProps' => [
                'id_paciente' => $row['id_paciente'],
                'tipo' => $row['tipo'],
                'link_videollamada' => $row['link_videollamada'],
                'notas' => $row['notas'],
                'estado' => $row['estado']
            ]
        ];
    }
    echo json_encode($events);

} elseif ($accion === 'crear') {
    $id_paciente = $_POST['id_paciente'] ?? '';
    $fecha = $_POST['fecha'] ?? '';
    $hora = $_POST['hora'] ?? '';
    $tipo = $_POST['tipo'] ?? 'presencial';
    $link = $_POST['link_videollamada'] ?? '';
    $notas = $_POST['notas'] ?? '';
    $id_usuario = $_SESSION['user_id'];

    if (empty($id_paciente) || empty($fecha) || empty($hora)) {
        echo json_encode(['status' => 'error', 'message' => 'Faltan datos obligatorios']);
        exit();
    }

    // Overlap check: No more than 1 appointment at the same time
    $check = $conn->prepare("SELECT id FROM citas WHERE fecha = ? AND hora = ? AND estado != 'cancelada'");
    $check->bind_param("ss", $fecha, $hora);
    $check->execute();
    if ($check->get_result()->num_rows > 0) {
        echo json_encode(['status' => 'error', 'message' => 'Ya existe una cita programada para esta fecha y hora.']);
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO citas (id_paciente, id_usuario, fecha, hora, tipo, link_videollamada, notas) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iisssss", $id_paciente, $id_usuario, $fecha, $hora, $tipo, $link, $notas);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Cita programada correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al programar cita']);
    }

} elseif ($accion === 'editar') {
    $id = $_POST['id'] ?? '';
    $id_paciente = $_POST['id_paciente'] ?? '';
    $fecha = $_POST['fecha'] ?? '';
    $hora = $_POST['hora'] ?? '';
    $tipo = $_POST['tipo'] ?? 'presencial';
    $link = $_POST['link_videollamada'] ?? '';
    $notas = $_POST['notas'] ?? '';
    $estado = $_POST['estado'] ?? 'pendiente';

    if (empty($id) || empty($id_paciente) || empty($fecha) || empty($hora)) {
        echo json_encode(['status' => 'error', 'message' => 'Faltan datos obligatorios']);
        exit();
    }

    // Overlap check (excluding self)
    $check = $conn->prepare("SELECT id FROM citas WHERE fecha = ? AND hora = ? AND id != ? AND estado != 'cancelada'");
    $check->bind_param("ssi", $fecha, $hora, $id);
    $check->execute();
    if ($check->get_result()->num_rows > 0) {
        echo json_encode(['status' => 'error', 'message' => 'Ya existe otra cita programada para esta fecha y hora.']);
        exit();
    }

    $stmt = $conn->prepare("UPDATE citas SET id_paciente=?, fecha=?, hora=?, tipo=?, link_videollamada=?, notas=?, estado=? WHERE id=?");
    $stmt->bind_param("issssssi", $id_paciente, $fecha, $hora, $tipo, $link, $notas, $estado, $id);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Cita actualizada correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al actualizar cita']);
    }

} elseif ($accion === 'eliminar') {
    $id = $_POST['id'] ?? '';
    $stmt = $conn->prepare("DELETE FROM citas WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Cita eliminada correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al eliminar cita']);
    }
}
?>
