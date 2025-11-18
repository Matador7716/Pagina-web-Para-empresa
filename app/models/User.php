<?php

class User {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function findUserByUsername($username) {
        $stmt = $this->db->prepare("SELECT u.*, r.nombre_rol FROM usuarios u JOIN roles r ON u.rol_id = r.id WHERE u.nombre_usuario = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_object();
        } else {
            return false;
        }
    }

    public function getAllUsers() {
        $result = $this->db->query("SELECT u.*, r.nombre_rol FROM usuarios u JOIN roles r ON u.rol_id = r.id");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addUser($data) {
        $stmt = $this->db->prepare("INSERT INTO usuarios (nombre_usuario, email, password, rol_id, nombre_completo) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssis", $data['nombre_usuario'], $data['email'], $data['password'], $data['rol_id'], $data['nombre_completo']);
        return $stmt->execute();
    }

    public function getUserById($id) {
        $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_object();
    }

    public function updateUser($data) {
        $stmt = $this->db->prepare("UPDATE usuarios SET nombre_usuario = ?, email = ?, rol_id = ?, nombre_completo = ? WHERE id = ?");
        $stmt->bind_param("ssisi", $data['nombre_usuario'], $data['email'], $data['rol_id'], $data['nombre_completo'], $data['id']);
        return $stmt->execute();
    }

    public function deleteUser($id) {
        $stmt = $this->db->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
