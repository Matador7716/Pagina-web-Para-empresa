<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema_farmacia";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error en la conexion: " . mysqli_connect_error());
}

mysqli_set_charset($conexion, "utf8");
?>
