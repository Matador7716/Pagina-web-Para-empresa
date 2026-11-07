<?php
/**
 * Conexión a la Base de Datos bdboticacusco
 * SIS CandeWeb Ventas
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$dbHost = '127.0.0.1';
$dbPort = '3306';
$dbName = 'bdboticacusco';
$dbUser = 'root';
$dbPass = '';

try {
    $dsn = "mysql:host={$dbHost};port={$dbPort};dbname={$dbName};charset=utf8mb4";
    $pdo = new PDO($dsn, $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);
} catch (PDOException $e) {
    die("Error de conexión a la base de datos bdboticacusco: " . $e->getMessage());
}

// Cargar configuración global del sistema
$sysConfig = [];
try {
    $stmtConfig = $pdo->query("SELECT clave, valor FROM configuracion");
    while ($row = $stmtConfig->fetch()) {
        $sysConfig[$row['clave']] = $row['valor'];
    }
} catch (Exception $e) {
    // Si la tabla aún no está lista
}
