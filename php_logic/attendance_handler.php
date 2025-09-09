<?php
header('Content-Type: application/json');
include '../db.php';

$response = ['success' => false, 'message' => 'Error desconocido.'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ---- GUARDAR O ACTUALIZAR ASISTENCIA ----
    $data = json_decode(file_get_contents('php://input'), true);

    try {
        if (isset($data['registration_id'], $data['event_block'], $data['event_index'], $data['status'])) {

            $registration_id = intval($data['registration_id']);
            $event_block = $data['event_block'];
            $event_index = intval($data['event_index']);
            $status = intval($data['status']);

            // Usamos INSERT ... ON DUPLICATE KEY UPDATE para crear o actualizar el registro
            // Esto depende de la clave UNIQUE definida en la tabla: (registration_id, event_block, event_index)
            $stmt = $conn->prepare(
                "INSERT INTO attendance (registration_id, event_block, event_index, status)
                 VALUES (?, ?, ?, ?)
                 ON DUPLICATE KEY UPDATE status = VALUES(status)"
            );

            if ($stmt === false) {
                throw new Exception('Error al preparar la consulta: ' . $conn->error);
            }

            $stmt->bind_param("isii", $registration_id, $event_block, $event_index, $status);

            if ($stmt->execute()) {
                $response['success'] = true;
                $response['message'] = 'Asistencia guardada correctamente.';
            } else {
                throw new Exception('Error al ejecutar la consulta: ' . $stmt->error);
            }

            $stmt->close();
        } else {
            $response['message'] = 'Faltan datos para guardar la asistencia.';
        }
    } catch (Exception $e) {
        $response['message'] = 'Error en el servidor: ' . $e->getMessage();
    }

} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // ---- LEER ASISTENCIAS DE UN REGISTRO ----
    try {
        if (isset($_GET['registration_id'])) {
            $registration_id = intval($_GET['registration_id']);

            $stmt = $conn->prepare("SELECT event_block, event_index, status FROM attendance WHERE registration_id = ?");
            $stmt->bind_param("i", $registration_id);
            $stmt->execute();
            $result = $stmt->get_result();

            $attendance_data = [];
            while ($row = $result->fetch_assoc()) {
                if (!isset($attendance_data[$row['event_block']])) {
                    $attendance_data[$row['event_block']] = [];
                }
                $attendance_data[$row['event_block']][$row['event_index']] = $row['status'];
            }

            $response['success'] = true;
            $response['message'] = 'Asistencias cargadas.';
            $response['data'] = $attendance_data;

            $stmt->close();
        } else {
            $response['message'] = 'Falta el ID del registro.';
        }
    } catch (Exception $e) {
        $response['message'] = 'Error en el servidor: ' . $e->getMessage();
    }
} else {
    $response['message'] = 'Método de solicitud no válido.';
}


$conn->close();
echo json_encode($response);
?>
