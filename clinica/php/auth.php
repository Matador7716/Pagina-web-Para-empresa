<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $clave   = $_POST['clave'] ?? '';

    if (!empty($usuario) && !empty($clave)) {
        $stmt = $conn->prepare("SELECT id, nombre, clave, rol FROM usuarios WHERE usuario = ?");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($user = $result->fetch_assoc()) {
            if (password_verify($clave, $user['clave'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_nombre'] = $user['nombre'];
                $_SESSION['user_rol'] = $user['rol'];

                header("Location: ../dashboard.php");
                exit();
            }
        }
    }

    header("Location: ../index.php?error=1");
    exit();
} else {
    header("Location: ../index.php");
    exit();
}
?>
