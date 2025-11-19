<?php
require_once __DIR__ . '/../../config/database.php';

class UserModel {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findUserByUsername($username) {
        $this->db->query('SELECT * FROM usuarios WHERE nombre_usuario = :username');
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        return $row;
    }

    public function register($data) {
        $this->db->query('INSERT INTO usuarios (nombre_usuario, contrasena, rol, nombre_completo, creado_por) VALUES (:nombre_usuario, :contrasena, :rol, :nombre_completo, :creado_por)');

        $this->db->bind(':nombre_usuario', $data['nombre_usuario']);
        $this->db->bind(':contrasena', $data['contrasena']);
        $this->db->bind(':rol', $data['rol']);
        $this->db->bind(':nombre_completo', $data['nombre_completo']);
        $this->db->bind(':creado_por', $data['creado_por']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($username, $password) {
        $row = $this->findUserByUsername($username);

        if ($row) {
            $hashed_password = $row->contrasena;
            if (password_verify($password, $hashed_password)) {
                return $row;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getUsers() {
        $this->db->query('SELECT id, nombre_usuario, rol, nombre_completo, estado FROM usuarios');
        $results = $this->db->resultSet();
        return $results;
    }

    public function getUserById($id) {
        $this->db->query('SELECT * FROM usuarios WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function updateUser($data) {
        $this->db->query('UPDATE usuarios SET nombre_usuario = :nombre_usuario, rol = :rol, nombre_completo = :nombre_completo, estado = :estado WHERE id = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nombre_usuario', $data['nombre_usuario']);
        $this->db->bind(':rol', $data['rol']);
        $this->db->bind(':nombre_completo', $data['nombre_completo']);
        $this->db->bind(':estado', $data['estado']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($id) {
        $this->db->query('DELETE FROM usuarios WHERE id = :id');
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findUserByEmail($email) {
        $this->db->query('SELECT * FROM usuarios WHERE email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        return $row;
    }

    public function createPasswordResetToken($user_id, $token, $expires_at) {
        $this->db->query('INSERT INTO password_resets (user_id, token, expires_at) VALUES (:user_id, :token, :expires_at)');
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':token', $token);
        $this->db->bind(':expires_at', $expires_at);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findPasswordResetToken($token) {
        $this->db->query('SELECT * FROM password_resets WHERE token = :token');
        $this->db->bind(':token', $token);
        $row = $this->db->single();
        return $row;
    }

    public function updatePassword($user_id, $password) {
        $this->db->query('UPDATE usuarios SET contrasena = :contrasena WHERE id = :id');
        $this->db->bind(':id', $user_id);
        $this->db->bind(':contrasena', $password);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePasswordResetToken($token) {
        $this->db->query('DELETE FROM password_resets WHERE token = :token');
        $this->db->bind(':token', $token);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
