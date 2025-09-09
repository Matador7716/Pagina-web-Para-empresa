<?php
/*
 * Archivo de configuración de la base de datos.
 * ---------------------------------------------
 * Completa los siguientes datos con la información de tu servidor de base de datos.
 */

$servername = "localhost"; // o la IP del servidor de base de datos
$username = "root";        // tu usuario de base de datos
$password = "";            // tu contraseña de base de datos
$dbname = "apafa_tarjetaasis"; // NOMBRE DE LA BASE DE DATOS ACTUALIZADO

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Error de conexión a la base de datos: ' . $conn->connect_error]);
    die();
}

/*
 * =================================================================
 *  NOTA SOBRE LA CONFIGURACIÓN DE LA BASE DE DATOS
 * =================================================================
 * Para configurar la base de datos, por favor, importa o ejecuta
 * el archivo `db_setup.sql` que se encuentra en la raíz del proyecto
 * usando una herramienta como phpMyAdmin.
 *
 * Ese archivo creará la base de datos y las tablas necesarias.
 * =================================================================
 */
?>
