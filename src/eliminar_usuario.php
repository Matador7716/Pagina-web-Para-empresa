<?php
session_start();
if ($_SESSION['rol'] != 'administrador') {
    header('location: dashboard.php');
    exit;
}
include_once "../conexion.php";
if (!empty($_GET['id'])) {
    $id = (int)$_GET['id'];
    $stmt = mysqli_prepare($conexion, "DELETE FROM usuarios WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    header("Location: usuarios.php");
    exit;
}
?>
