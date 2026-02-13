<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "bdchatboot";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

mysqli_set_charset($conexion, "utf8mb4");
?>
