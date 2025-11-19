<?php
require_once 'app/controllers/AuthController.php';
require_once 'app/controllers/UserController.php';
require_once 'app/controllers/ProductController.php';
require_once 'app/controllers/DashboardController.php';

$authController = new AuthController();

$action = isset($_GET['action']) ? $_GET['action'] : 'login';

switch ($action) {
    case 'login':
        $authController->login();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'dashboard':
        $dashboardController = new DashboardController();
        $dashboardController->index();
        break;
    case 'users':
        $userController = new UserController();
        $userController->index();
        break;
    case 'user_create':
        $userController = new UserController();
        $userController->create();
        break;
    case 'user_edit':
        $userController = new UserController();
        $userController->edit($_GET['id']);
        break;
    case 'user_delete':
        $userController = new UserController();
        $userController->delete($_GET['id']);
        break;
    case 'forgot_password':
        $authController->forgotPassword();
        break;
    case 'reset_password':
        $authController->resetPassword();
        break;
    case 'products':
        $productController = new ProductController();
        $productController->index();
        break;
    case 'product_create':
        $productController = new ProductController();
        $productController->create();
        break;
    case 'product_edit':
        $productController = new ProductController();
        $productController->edit($_GET['id']);
        break;
    case 'product_delete':
        $productController = new ProductController();
        $productController->delete($_GET['id']);
        break;
    default:
        $authController->login();
        break;
}
