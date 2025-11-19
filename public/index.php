<?php
// public/index.php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Cargar variables de entorno y configuración inicial
require_once '../config/bootstrap.php';

// Iniciar la sesión en un solo lugar
session_start();

require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/DashboardController.php';
require_once '../app/controllers/SalesController.php';
require_once '../app/controllers/InventoryController.php';
require_once '../app/controllers/ReportsController.php';
require_once '../app/controllers/PurchasesController.php';
require_once '../app/controllers/UsersController.php';
require_once '../app/controllers/SettingsController.php';

// Simple router
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

$authController = new AuthController();
$dashboardController = new DashboardController();
$salesController = new SalesController();
$inventoryController = new InventoryController();
$reportsController = new ReportsController();
$purchasesController = new PurchasesController();
$usersController = new UsersController();
$settingsController = new SettingsController();

switch ($action) {
    case 'login':
        $authController->login();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'dashboard':
        if (isset($_SESSION['user_id'])) {
            $dashboardController->index();
        } else {
            header('Location: index.php');
            exit();
        }
        break;
    case 'sales':
        if (isset($_SESSION['user_id'])) {
            $salesController->index();
        } else {
            header('Location: index.php');
            exit();
        }
        break;
    case 'inventory':
        if (isset($_SESSION['user_id'])) {
            $inventoryController->index();
        } else {
            header('Location: index.php');
            exit();
        }
        break;
    case 'reports':
        if (isset($_SESSION['user_id'])) {
            $reportsController->index();
        } else {
            header('Location: index.php');
            exit();
        }
        break;
    case 'purchases':
        if (isset($_SESSION['user_id'])) {
            $purchasesController->index();
        } else {
            header('Location: index.php');
            exit();
        }
        break;
    case 'users':
        if (isset($_SESSION['user_id'])) {
            $usersController->index();
        } else {
            header('Location: index.php');
            exit();
        }
        break;
    case 'settings':
        if (isset($_SESSION['user_id'])) {
            $settingsController->index();
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