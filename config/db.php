<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raffle_system";

// IMPORTANT: In a production environment, it is strongly recommended to use
// environment variables to store database credentials for better security.
// Do not hardcode credentials in this file.

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
