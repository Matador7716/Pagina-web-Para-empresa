<?php
header('Content-Type: application/json');
include '../db.php';

$response = ['success' => false, 'message' => 'Error desconocido.'];

// PHP no maneja 'PUT' o 'DELETE' en $_POST, así que leemos el input directamente.
parse_str(file_get_contents("php://input"), $_PUT);

try {
    if (isset($_PUT['id']) && isset($_PUT['control_card']) && isset($_PUT['parent_name']) && isset($_PUT['parent_dni'])) {

        $id = intval($_PUT['id']);
        $control_card = $_PUT['control_card'];
        $student_grade = $_PUT['student_grade'] ?? '';
        $student_section = $_PUT['student_section'] ?? '';
        $student_level = $_PUT['student_level'] ?? '';
        $student_shift = $_PUT['student_shift'] ?? '';
        $parent_name = $_PUT['parent_name'];
        $parent_dni = $_PUT['parent_dni'];
        $parent_phone = $_PUT['parent_phone'] ?? '';
        $observations = $_PUT['observations'] ?? '';

        $stmt = $conn->prepare(
            "UPDATE registrations SET
                control_card = ?,
                student_grade = ?,
                student_section = ?,
                student_level = ?,
                student_shift = ?,
                parent_name = ?,
                parent_dni = ?,
                parent_phone = ?,
                observations = ?
            WHERE id = ?"
        );

        if ($stmt === false) {
            throw new Exception('Error al preparar la consulta: ' . $conn->error);
        }

        $stmt->bind_param(
            "sssssssssi",
            $control_card,
            $student_grade,
            $student_section,
            $student_level,
            $student_shift,
            $parent_name,
            $parent_dni,
            $parent_phone,
            $observations,
            $id
        );

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                $response['success'] = true;
                $response['message'] = 'Registro actualizado exitosamente.';
            } else {
                $response['message'] = 'No se realizaron cambios o el registro no fue encontrado.';
            }
        } else {
            throw new Exception('Error al ejecutar la consulta: ' . $stmt->error);
        }

        $stmt->close();
    } else {
        $response['message'] = 'Faltan datos requeridos, incluido el ID del registro.';
    }
} catch (Exception $e) {
    $response['message'] = 'Error en el servidor: ' . $e->getMessage();
}

$conn->close();
echo json_encode($response);
?>
