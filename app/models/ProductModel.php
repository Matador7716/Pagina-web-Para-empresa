<?php
require_once __DIR__ . '/../../config/database.php';

class ProductModel {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getProducts() {
        $this->db->query('SELECT * FROM productos');
        $results = $this->db->resultSet();
        return $results;
    }

    public function getProductById($id) {
        $this->db->query('SELECT * FROM productos WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function createProduct($data) {
        $this->db->query('INSERT INTO productos (nombre, sku, categoria, presentacion, laboratorio, precio_compra, precio_venta, stock, stock_minimo, fecha_vencimiento, lote, imagen) VALUES (:nombre, :sku, :categoria, :presentacion, :laboratorio, :precio_compra, :precio_venta, :stock, :stock_minimo, :fecha_vencimiento, :lote, :imagen)');

        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':sku', $data['sku']);
        $this->db->bind(':categoria', $data['categoria']);
        $this->db->bind(':presentacion', $data['presentacion']);
        $this->db->bind(':laboratorio', $data['laboratorio']);
        $this->db->bind(':precio_compra', $data['precio_compra']);
        $this->db->bind(':precio_venta', $data['precio_venta']);
        $this->db->bind(':stock', $data['stock']);
        $this->db->bind(':stock_minimo', $data['stock_minimo']);
        $this->db->bind(':fecha_vencimiento', $data['fecha_vencimiento']);
        $this->db->bind(':lote', $data['lote']);
        $this->db->bind(':imagen', $data['imagen']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateProduct($data) {
        $this->db->query('UPDATE productos SET nombre = :nombre, sku = :sku, categoria = :categoria, presentacion = :presentacion, laboratorio = :laboratorio, precio_compra = :precio_compra, precio_venta = :precio_venta, stock = :stock, stock_minimo = :stock_minimo, fecha_vencimiento = :fecha_vencimiento, lote = :lote, imagen = :imagen, estado = :estado WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':sku', $data['sku']);
        $this->db->bind(':categoria', $data['categoria']);
        $this->db->bind(':presentacion', $data['presentacion']);
        $this->db->bind(':laboratorio', $data['laboratorio']);
        $this->db->bind(':precio_compra', $data['precio_compra']);
        $this->db->bind(':precio_venta', $data['precio_venta']);
        $this->db->bind(':stock', $data['stock']);
        $this->db->bind(':stock_minimo', $data['stock_minimo']);
        $this->db->bind(':fecha_vencimiento', $data['fecha_vencimiento']);
        $this->db->bind(':lote', $data['lote']);
        $this->db->bind(':imagen', $data['imagen']);
        $this->db->bind(':estado', $data['estado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteProduct($id) {
        $this->db->query('DELETE FROM productos WHERE id = :id');
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function searchProducts($searchTerm) {
        $this->db->query('SELECT * FROM productos WHERE nombre LIKE :term OR sku LIKE :term OR laboratorio LIKE :term');
        $this->db->bind(':term', '%' . $searchTerm . '%');
        $results = $this->db->resultSet();
        return $results;
    }

    public function getLowStockProducts() {
        $this->db->query('SELECT * FROM productos WHERE stock <= stock_minimo');
        $results = $this->db->resultSet();
        return $results;
    }

    public function getExpiringProducts() {
        $this->db->query('SELECT * FROM productos WHERE fecha_vencimiento <= CURDATE() + INTERVAL 30 DAY');
        $results = $this->db->resultSet();
        return $results;
    }
}
