<?php
// app/models/User.php

class User {
    private $conn;
    private $table = 'users';

    public $id;
    public $name;
    public $email;
    public $password;
    public $role;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Crear un nuevo usuario
    public function create() {
        $query = 'INSERT INTO ' . $this->table . ' SET name = :name, email = :email, password = :password, role = :role';

        $stmt = $this->conn->prepare($query);

        // Limpiar datos
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->role = htmlspecialchars(strip_tags($this->role));

        // Hashear la contraseña
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);

        // Vincular parámetros
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':role', $this->role);

        if($stmt->execute()) {
            return true;
        }

        printf("Error: %s.\n", $stmt->error);

        return false;
    }

    // Encontrar usuario por email
    public function findByEmail($email) {
        $query = 'SELECT id, name, email, password, role FROM ' . $this->table . ' WHERE email = :email LIMIT 1';

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Comprobar si un email ya existe
    public function emailExists($email) {
        $query = 'SELECT id FROM ' . $this->table . ' WHERE email = :email LIMIT 1';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if ($stmt->fetch(PDO::FETCH_ASSOC)) {
            return true;
        }
        return false;
    }
}
?>
