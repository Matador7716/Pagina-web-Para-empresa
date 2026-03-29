<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "bdchatboot";

// Descomentar para ver errores en producción
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    echo "<h3>Error de conexión a la base de datos</h3>";
    echo "Verifica que el usuario, contraseña y nombre de la base de datos sean correctos en <b>conexion.php</b>.<br>";
    echo "Error: " . mysqli_connect_error();
    exit;
}

mysqli_set_charset($conexion, "utf8mb4");
?>
