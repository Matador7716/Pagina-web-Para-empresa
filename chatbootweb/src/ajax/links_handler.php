<?php
session_start();
if (empty($_SESSION['active'])) {
    die("Acceso denegado");
}
require_once "../../conexion.php";

if ($_POST) {
    $action = $_POST['action'];

    if ($action == 'add') {
        $nombre = $_POST['nombre'];
        $numero = $_POST['numero'];
        $mensaje = $_POST['mensaje'];

        $stmt = mysqli_prepare($conexion, "INSERT INTO links_whatsapp (nombre, numero, mensaje_predeterminado) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $nombre, $numero, $mensaje);
        if (mysqli_stmt_execute($stmt)) {
            echo "ok";
        }
    }

    if ($action == 'delete') {
        $id = $_POST['id'];
        $stmt = mysqli_prepare($conexion, "DELETE FROM links_whatsapp WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        if (mysqli_stmt_execute($stmt)) {
            echo "ok";
        }
    }
}
?>
