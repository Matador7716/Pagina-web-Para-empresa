<?php
header('Content-Type: application/json');
include '../db.php';

$response = ['success' => false, 'message' => 'Error desconocido.'];

try {
    // Validar que los datos necesarios han sido enviados
    if (isset($_POST['control_card']) && isset($_POST['parent_name']) && isset($_POST['parent_dni'])) {

        $control_card = $_POST['control_card'];
        $student_grade = $_POST['student_grade'] ?? '';
        $student_section = $_POST['student_section'] ?? '';
        $student_level = $_POST['student_level'] ?? '';
        $student_shift = $_POST['student_shift'] ?? '';
        $parent_name = $_POST['parent_name'];
        $parent_dni = $_POST['parent_dni'];
        $parent_phone = $_POST['parent_phone'] ?? '';
        $observations = $_POST['observations'] ?? '';

        // Preparar la sentencia SQL para evitar inyección SQL
        $stmt = $conn->prepare(
            "INSERT INTO registrations (control_card, student_grade, student_section, student_level, student_shift, parent_name, parent_dni, parent_phone, observations) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );

        if ($stmt === false) {
            throw new Exception('Error al preparar la consulta: ' . $conn->error);
        }

        // Vincular parámetros
        $stmt->bind_param(
            "sssssssss",
            $control_card,
            $student_grade,
            $student_section,
            $student_level,
            $student_shift,
            $parent_name,
            $parent_dni,
            $parent_phone,
            $observations
        );

        // Ejecutar la sentencia
        if ($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = 'Registro creado exitosamente.';
            $response['inserted_id'] = $conn->insert_id; // Devolver el ID del nuevo registro
        } else {
            throw new Exception('Error al ejecutar la consulta: ' . $stmt->error);
        }

        $stmt->close();
    } else {
        $response['message'] = 'Faltan datos requeridos.';
    }
} catch (Exception $e) {
    $response['message'] = 'Error en el servidor: ' . $e->getMessage();
}

$conn->close();
echo json_encode($response);
?>
