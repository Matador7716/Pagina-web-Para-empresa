<?php
session_start();
if (empty($_SESSION['active']) || $_SESSION['rol'] != 'Administrador') {
    die("Acceso denegado");
}
require_once "../../conexion.php";

if ($_POST) {
    $action = $_POST['action'];

    if ($action == 'add') {
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);
        $rol = $_POST['rol'];

        // Check if exists
        $stmt = mysqli_prepare($conexion, "SELECT id FROM usuarios WHERE usuario = ?");
        mysqli_stmt_bind_param($stmt, "s", $usuario);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            echo "El usuario ya existe";
        } else {
            $stmt = mysqli_prepare($conexion, "INSERT INTO usuarios (nombre, usuario, clave, rol) VALUES (?, ?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "ssss", $nombre, $usuario, $clave, $rol);
            if (mysqli_stmt_execute($stmt)) {
                echo "ok";
            } else {
                echo "Error al insertar";
            }
        }
    }

    if ($action == 'delete') {
        $id = $_POST['id'];
        $stmt = mysqli_prepare($conexion, "UPDATE usuarios SET estado = 0 WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        if (mysqli_stmt_execute($stmt)) {
            echo "ok";
        }
    }
}
?>
