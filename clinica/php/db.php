<?php
$host = "localhost";
$user = "clinica_user";
$pass = "clinica_pass";
$db   = "bdciitasmedica";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Configurar charset a utf8mb4
$conn->set_charset("utf8mb4");
?>
