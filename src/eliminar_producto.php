<?php
session_start();
if ($_SESSION['rol'] != 'administrador' && $_SESSION['rol'] != 'supervisor') {
    header('location: dashboard.php');
    exit;
}
include_once "../conexion.php";
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM productos WHERE id = $id");
    header("Location: productos.php");
}
?>
