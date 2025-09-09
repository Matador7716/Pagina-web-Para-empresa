<?php
header('Content-Type: application/json');
include '../db.php';

$response = ['success' => false, 'message' => 'Error al leer los datos.', 'data' => []];

try {
    // Lógica de búsqueda priorizada: DNI > ID > Todos
    if (isset($_GET['dni'])) {
        $dni = $_GET['dni'];
        $stmt = $conn->prepare("SELECT * FROM registrations WHERE parent_dni = ?");
        $stmt->bind_param("s", $dni);
    } elseif (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $stmt = $conn->prepare("SELECT * FROM registrations WHERE id = ?");
        $stmt->bind_param("i", $id);
    } else {
        // Para la vista de lista y el dropdown, necesitamos estos campos.
        $stmt = $conn->prepare("SELECT id, control_card, parent_name, parent_dni FROM registrations ORDER BY parent_name ASC");
    }

    if ($stmt === false) {
        throw new Exception('Error al preparar la consulta: ' . $conn->error);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    $response['success'] = true;
    $response['message'] = 'Datos leídos correctamente.';
    $response['data'] = $data;

    $stmt->close();

} catch (Exception $e) {
    $response['message'] = 'Error en el servidor: ' . $e->getMessage();
}

$conn->close();
echo json_encode($response);
?>
