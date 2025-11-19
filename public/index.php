<?php
// public/index.php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Cargar variables de entorno y configuración inicial
require_once '../config/bootstrap.php';

require_once '../app/controllers/AuthController.php';

// Simple router
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

$authController = new AuthController();

switch ($action) {
    case 'login':
        $authController->login();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'dashboard':
        // Placeholder for the dashboard - we'll create this properly later
        session_start();
        if (isset($_SESSION['user_id'])) {
            echo "<h1>Bienvenido al Dashboard, " . htmlspecialchars($_SESSION['username']) . "!</h1>";
            echo "<p>Tu rol es: " . htmlspecialchars($_SESSION['role']) . "</p>";
            echo '<a href="index.php?action=logout">Cerrar Sesión</a>';
        } else {
            header('Location: index.php');
            exit();
        }
        break;
    default:
        // For any other case, redirect to login
        header('Location: index.php');
        exit();
}
?>
