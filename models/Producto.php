<?php
class Producto {
    private $db;
    private $table = 'producto';

    public function __construct() {
        $this->db = Conexion::getInstancia()->getConexion();
    }

    public function getAll() {
        // Query para obtener productos con los nombres de sus relaciones
        $query = "SELECT p.*, c.nombre as categoria, m.nombre as marca, pr.nombre as presentacion
                  FROM {$this->table} p
                  LEFT JOIN categoria c ON p.id_categoria = c.id_categoria
                  LEFT JOIN marca m ON p.id_marca = m.id_marca
                  LEFT JOIN presentacion pr ON p.id_presentacion = pr.id_presentacion
                  ORDER BY p.nombre ASC";
        $resultado = $this->db->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id_producto = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function create($datos) {
        $stmt = $this->db->prepare(
            "INSERT INTO {$this->table} (nombre, descripcion, stock, precio_compra, precio_venta, fecha_vencimiento, id_categoria, id_marca, id_presentacion)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("ssiddssii",
            $datos['nombre'],
            $datos['descripcion'],
            $datos['stock'],
            $datos['precio_compra'],
            $datos['precio_venta'],
            $datos['fecha_vencimiento'],
            $datos['id_categoria'],
            $datos['id_marca'],
            $datos['id_presentacion']
        );
        return $stmt->execute();
    }

    public function update($datos) {
        $stmt = $this->db->prepare(
            "UPDATE {$this->table} SET
            nombre = ?,
            descripcion = ?,
            stock = ?,
            precio_compra = ?,
            precio_venta = ?,
            fecha_vencimiento = ?,
            id_categoria = ?,
            id_marca = ?,
            id_presentacion = ?
            WHERE id_producto = ?"
        );
        $stmt->bind_param("ssiddssiii",
            $datos['nombre'],
            $datos['descripcion'],
            $datos['stock'],
            $datos['precio_compra'],
            $datos['precio_venta'],
            $datos['fecha_vencimiento'],
            $datos['id_categoria'],
            $datos['id_marca'],
            $datos['id_presentacion'],
            $datos['id_producto']
        );
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM {$this->table} WHERE id_producto = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
