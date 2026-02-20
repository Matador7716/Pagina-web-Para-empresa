<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Acceso denegado']);
    exit();
}

$accion = $_POST['accion'] ?? '';

if ($accion === 'crear') {
    $id_cita = $_POST['id_cita'] ?? '';
    $monto = $_POST['monto'] ?? '';
    $metodo = $_POST['metodo_pago'] ?? '';
    $estado = $_POST['estado_pago'] ?? 'pendiente';
    $fecha_pago = ($estado === 'pagado') ? date('Y-m-d H:i:s') : null;

    if (empty($id_cita) || empty($monto) || empty($metodo)) {
        echo json_encode(['status' => 'error', 'message' => 'Faltan datos obligatorios']);
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO cobros (id_cita, monto, metodo_pago, estado_pago, fecha_pago) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("idsss", $id_cita, $monto, $metodo, $estado, $fecha_pago);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Cobro registrado correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al registrar cobro']);
    }

} elseif ($accion === 'editar') {
    $id = $_POST['id'] ?? '';
    $id_cita = $_POST['id_cita'] ?? '';
    $monto = $_POST['monto'] ?? '';
    $metodo = $_POST['metodo_pago'] ?? '';
    $estado = $_POST['estado_pago'] ?? 'pendiente';

    if (empty($id) || empty($monto)) {
        echo json_encode(['status' => 'error', 'message' => 'Faltan datos obligatorios']);
        exit();
    }

    $stmt_old = $conn->prepare("SELECT estado_pago, fecha_pago FROM cobros WHERE id = ?");
    $stmt_old->bind_param("i", $id);
    $stmt_old->execute();
    $old = $stmt_old->get_result()->fetch_assoc();

    $fecha_pago = $old['fecha_pago'];
    if ($estado === 'pagado' && $old['estado_pago'] !== 'pagado') {
        $fecha_pago = date('Y-m-d H:i:s');
    } elseif ($estado === 'pendiente') {
        $fecha_pago = null;
    }

    $stmt = $conn->prepare("UPDATE cobros SET id_cita=?, monto=?, metodo_pago=?, estado_pago=?, fecha_pago=? WHERE id=?");
    $stmt->bind_param("idsssi", $id_cita, $monto, $metodo, $estado, $fecha_pago, $id);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Cobro actualizado correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al actualizar cobro']);
    }

} elseif ($accion === 'eliminar') {
    $id = $_POST['id'] ?? '';
    $stmt = $conn->prepare("DELETE FROM cobros WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Cobro eliminado correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al eliminar cobro']);
    }
}
?>
