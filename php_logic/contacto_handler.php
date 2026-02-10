<?php
header('Content-Type: application/json');
require_once '../config/db.php';

$response = ['success' => false];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $asunto = $_POST['asunto'] ?? '';
    $mensaje = $_POST['mensaje'] ?? '';

    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response['error'] = 'Email inválido';
            echo json_encode($response);
            $conn->close();
            exit;
        }

        $stmt = $conn->prepare("INSERT INTO mensajes (nombre, email, asunto, mensaje) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $email, $asunto, $mensaje);

        if ($stmt->execute()) {
            $response['success'] = true;
        }
        $stmt->close();
    }
}

echo json_encode($response);
$conn->close();
?>
