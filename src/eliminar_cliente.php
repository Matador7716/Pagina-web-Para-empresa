<?php
session_start();
include_once "../conexion.php";
if (!empty($_GET['id'])) {
    $id = (int)$_GET['id'];
    $stmt = mysqli_prepare($conexion, "DELETE FROM clientes WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    header("Location: clientes.php");
    exit;
}
?>
