<?php
// app/controllers/AuthController.php

require_once '../app/models/User.php';
require_once '../config/database.php';

class AuthController {

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $database = new Database();
            $db = $database->connect();

            $user = new User($db);

            $username = $_POST['username'];
            $password = $_POST['password'];

            $stmt = $user->findByUsername($username);

            if ($stmt->rowCount() == 1) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if (password_verify($password, $row['password'])) {
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['role'] = $row['role_name'];
                    header('Location: index.php?action=dashboard');
                    exit();
                }
            }

            $_SESSION['error'] = 'Usuario o contraseña incorrectos.';
            header('Location: index.php');
            exit();

        } else {
            require_once '../app/views/auth/login.php';
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        header('Location: index.php');
        exit();
    }
}
?>
