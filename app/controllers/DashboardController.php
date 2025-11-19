<?php
require_once __DIR__ . '/../models/ProductModel.php';

class DashboardController {
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
        // Proteger el controlador
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?action=login');
            exit();
        }
    }

    public function index() {
        $lowStockProducts = $this->productModel->getLowStockProducts();
        $expiringProducts = $this->productModel->getExpiringProducts();
        require_once __DIR__ . '/../views/dashboard.php';
    }
}
