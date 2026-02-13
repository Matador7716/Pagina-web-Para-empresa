<?php
session_start();
if (empty($_SESSION['active']) || $_SESSION['rol'] != 'Administrador') {
    die("Acceso denegado");
}
require_once "../../conexion.php";

if ($_POST) {
    $action = $_POST['action'];

    if ($action == 'add') {
        $pregunta = $_POST['pregunta'];
        $respuesta = $_POST['respuesta'];

        $stmt = mysqli_prepare($conexion, "INSERT INTO preguntas_frecuentes (pregunta, respuesta) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $pregunta, $respuesta);
        if (mysqli_stmt_execute($stmt)) {
            echo "ok";
        }
    }

    if ($action == 'delete') {
        $id = $_POST['id'];
        $stmt = mysqli_prepare($conexion, "DELETE FROM preguntas_frecuentes WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        if (mysqli_stmt_execute($stmt)) {
            echo "ok";
        }
    }
}
?>
