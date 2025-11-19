<?php
// app/models/User.php

class User {
    private $conn;
    private $table = 'users';

    public $id;
    public $username;
    public $password;
    public $email;
    public $role_id;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function findByUsername($username) {
        $query = 'SELECT u.id, u.username, u.password, r.name as role_name
                  FROM ' . $this->table . ' u
                  JOIN roles r ON u.role_id = r.id
                  WHERE u.username = :username
                  LIMIT 1';

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        return $stmt;
    }
}
?>
