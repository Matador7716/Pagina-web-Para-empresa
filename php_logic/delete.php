<?php
header('Content-Type: application/json');
include '../db.php';

$response = ['success' => false, 'message' => 'Error desconocido.'];

// Leer el cuerpo de la solicitud para el método DELETE
parse_str(file_get_contents("php://input"), $_DELETE);

try {
    if (isset($_DELETE['id'])) {
        $id = intval($_DELETE['id']);

        // La tabla 'attendance' tiene una clave foránea con ON DELETE CASCADE,
        // por lo que no es necesario eliminar las asistencias manualmente.
        $stmt = $conn->prepare("DELETE FROM registrations WHERE id = ?");

        if ($stmt === false) {
            throw new Exception('Error al preparar la consulta: ' . $conn->error);
        }

        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                $response['success'] = true;
                $response['message'] = 'Registro eliminado exitosamente.';
            } else {
                $response['message'] = 'El registro no fue encontrado o ya había sido eliminado.';
            }
        } else {
            throw new Exception('Error al ejecutar la consulta: ' . $stmt->error);
        }

        $stmt->close();
    } else {
        $response['message'] = 'No se proporcionó el ID del registro a eliminar.';
    }
} catch (Exception $e) {
    $response['message'] = 'Error en el servidor: ' . $e->getMessage();
}

$conn->close();
echo json_encode($response);
?>
