<?php
header('Content-Type: application/json');
include '../db.php';

$response = ['success' => false, 'message' => 'Error desconocido.'];

// Leer el cuerpo de la solicitud para el método DELETE
parse_str(file_get_contents("php://input"), $_DELETE);

try {
    if (isset($_DELETE['registration_id']) && isset($_DELETE['event_block'])) {
        $registration_id = intval($_DELETE['registration_id']);
        $event_block = $_DELETE['event_block'];

        $stmt = $conn->prepare("DELETE FROM attendance WHERE registration_id = ? AND event_block = ?");

        if ($stmt === false) {
            throw new Exception('Error al preparar la consulta: ' . $conn->error);
        }

        $stmt->bind_param("is", $registration_id, $event_block);

        if ($stmt->execute()) {
            $response['success'] = true;
            // Devolvemos un mensaje indicando cuántos registros se borraron, aunque sea 0.
            $response['message'] = 'Se limpiaron ' . $stmt->affected_rows . ' marcas de asistencia del bloque.';
        } else {
            throw new Exception('Error al ejecutar la consulta: ' . $stmt->error);
        }

        $stmt->close();
    } else {
        $response['message'] = 'Faltan datos requeridos (ID de registro o bloque de evento).';
    }
} catch (Exception $e) {
    $response['message'] = 'Error en el servidor: ' . $e->getMessage();
}

$conn->close();
echo json_encode($response);
?>
