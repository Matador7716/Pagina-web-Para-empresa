<?php
// config/database.php

class Database {
    private $host = 'localhost';
    private $db_name = 'candela_hotel';
    private $username = 'root';
    private $password = ''; // DEPRECATED: En un entorno de producción, utilice variables de entorno en lugar de credenciales codificadas.
    private $conn;

    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;
    }
}
?>
