<?php
class DashboardController {
    public function __construct() {
        // Verificar si el usuario está logueado
        if (!isset($_SESSION['usuario'])) {
            header('Location: index.php?controller=login&action=index');
            exit;
        }
    }

    public function index() {
        // Cargar la vista del dashboard
        require_once BASE_PATH . '/views/dashboard/index.php';
    }
}
?>
