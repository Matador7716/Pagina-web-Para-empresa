<?php
$host = "localhost";
$user = "candela_user";
$pass = "candela123";
$db   = "candelaweb_marketing";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8mb4
$conn->set_charset("utf8mb4");
?>
