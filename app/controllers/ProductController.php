<?php
require_once __DIR__ . '/../models/ProductModel.php';

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
        // Proteger el controlador de productos
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?action=login');
            exit();
        }
    }

    public function index() {
        if (isset($_GET['search'])) {
            $products = $this->productModel->searchProducts($_GET['search']);
        } else {
            $products = $this->productModel->getProducts();
        }
        require_once __DIR__ . '/../views/products/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $data = [
                'nombre' => trim($_POST['nombre']),
                'sku' => trim($_POST['sku']),
                'categoria' => trim($_POST['categoria']),
                'presentacion' => trim($_POST['presentacion']),
                'laboratorio' => trim($_POST['laboratorio']),
                'precio_compra' => trim($_POST['precio_compra']),
                'precio_venta' => trim($_POST['precio_venta']),
                'stock' => trim($_POST['stock']),
                'stock_minimo' => trim($_POST['stock_minimo']),
                'fecha_vencimiento' => trim($_POST['fecha_vencimiento']),
                'lote' => trim($_POST['lote']),
                'imagen' => '' // Se manejará la subida de archivos más adelante
            ];

            if ($this->productModel->createProduct($data)) {
                $_SESSION['message'] = 'Producto creado correctamente';
                header('Location: index.php?action=products');
            } else {
                $_SESSION['error'] = 'Algo salió mal al crear el producto';
                header('Location: index.php?action=product_create');
            }
        } else {
            require_once __DIR__ . '/../views/products/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $data = [
                'id' => $id,
                'nombre' => trim($_POST['nombre']),
                'sku' => trim($_POST['sku']),
                'categoria' => trim($_POST['categoria']),
                'presentacion' => trim($_POST['presentacion']),
                'laboratorio' => trim($_POST['laboratorio']),
                'precio_compra' => trim($_POST['precio_compra']),
                'precio_venta' => trim($_POST['precio_venta']),
                'stock' => trim($_POST['stock']),
                'stock_minimo' => trim($_POST['stock_minimo']),
                'fecha_vencimiento' => trim($_POST['fecha_vencimiento']),
                'lote' => trim($_POST['lote']),
                'imagen' => '', // Se manejará la subida de archivos más adelante
                'estado' => trim($_POST['estado'])
            ];

            if ($this->productModel->updateProduct($data)) {
                $_SESSION['message'] = 'Producto actualizado correctamente';
                header('Location: index.php?action=products');
            } else {
                $_SESSION['error'] = 'Algo salió mal al actualizar el producto';
                header('Location: index.php?action=product_edit&id=' . $id);
            }
        } else {
            $product = $this->productModel->getProductById($id);
            require_once __DIR__ . '/../views/products/edit.php';
        }
    }

    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->productModel->deleteProduct($id)) {
                $_SESSION['message'] = 'Producto eliminado correctamente';
                header('Location: index.php?action=products');
            } else {
                $_SESSION['error'] = 'Algo salió mal al eliminar el producto';
                header('Location: index.php?action=products');
            }
        } else {
            header('Location: index.php?action=products');
        }
    }
}
