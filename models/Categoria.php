<?php
class Categoria {
    private $db;
    private $table = 'categoria';

    public function __construct() {
        $this->db = Conexion::getInstancia()->getConexion();
    }

    public function getAll() {
        $query = "SELECT * FROM {$this->table} ORDER BY nombre ASC";
        $resultado = $this->db->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}
?>
