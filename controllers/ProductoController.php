<?php
require_once BASE_PATH . '/models/Producto.php';
require_once BASE_PATH . '/models/Categoria.php';
require_once BASE_PATH . '/models/Marca.php';
require_once BASE_PATH . '/models/Presentacion.php';

class ProductoController {
    private $productoModel;

    public function __construct() {
        // Verificar si el usuario está logueado
        if (!isset($_SESSION['usuario'])) {
            header('Location: index.php?controller=login&action=index');
            exit;
        }
        $this->productoModel = new Producto();
    }

    // Listar todos los productos
    public function index() {
        $productos = $this->productoModel->getAll();
        require_once BASE_PATH . '/views/producto/index.php';
    }

    // Mostrar formulario para crear o editar un producto
    public function formulario() {
        $id = $_GET['id'] ?? null;
        $producto = null;

        if ($id) {
            $producto = $this->productoModel->getById($id);
        }

        // Obtener datos para los dropdowns
        $categoriaModel = new Categoria();
        $categorias = $categoriaModel->getAll();

        $marcaModel = new Marca();
        $marcas = $marcaModel->getAll();

        $presentacionModel = new Presentacion();
        $presentaciones = $presentacionModel->getAll();

        require_once BASE_PATH . '/views/producto/formulario.php';
    }

    // Guardar un producto (nuevo o existente)
    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $datos = [
                'id_producto' => $_POST['id_producto'] ?? null,
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['descripcion'],
                'stock' => $_POST['stock'],
                'precio_compra' => $_POST['precio_compra'],
                'precio_venta' => $_POST['precio_venta'],
                'fecha_vencimiento' => !empty($_POST['fecha_vencimiento']) ? $_POST['fecha_vencimiento'] : null,
                'id_categoria' => $_POST['id_categoria'],
                'id_marca' => $_POST['id_marca'],
                'id_presentacion' => $_POST['id_presentacion']
            ];

            if ($datos['id_producto']) {
                // Actualizar
                $this->productoModel->update($datos);
            } else {
                // Crear
                $this->productoModel->create($datos);
            }

            header('Location: index.php?controller=producto&action=index');
        }
    }

    // Eliminar un producto
    public function eliminar() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->productoModel->delete($id);
        }
        header('Location: index.php?controller=producto&action=index');
    }
}
?>
