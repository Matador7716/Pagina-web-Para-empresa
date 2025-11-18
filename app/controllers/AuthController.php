<?php
// app/controllers/AuthController.php

require_once ROOT_PATH . 'init.php';

class AuthController {
    private $db;
    private $user;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
        $this->user = new User($this->db);
    }

    // Mostrar el formulario de registro
    public function showRegisterForm() {
        require_once APP_PATH . 'views/auth/register.php';
    }

    // Procesar el registro
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->user->name = $_POST['name'];
            $this->user->email = $_POST['email'];
            $this->user->password = $_POST['password'];
            $this->user->role = $_POST['role']; // Asumiendo que hay un campo para el rol en el formulario

            if ($this->user->create()) {
                // Redirigir al login
                header('Location: /login.php');
            } else {
                // Manejar error
                echo 'Error al registrar el usuario.';
            }
        }
    }

    // Mostrar el formulario de login
    public function showLoginForm() {
        require_once APP_PATH . 'views/auth/login.php';
    }

    // Procesar el login
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userData = $this->user->findByEmail($email);

            if ($userData && password_verify($password, $userData['password'])) {
                // Iniciar sesión
                $_SESSION['user_id'] = $userData['id'];
                $_SESSION['user_name'] = $userData['name'];
                $_SESSION['user_role'] = $userData['role'];

                // Redirigir al dashboard
                header('Location: /dashboard.php');
            } else {
                // Error de autenticación
                echo 'Email o contraseña incorrectos.';
            }
        }
    }

    // Cerrar sesión
    public function logout() {
        session_destroy();
        header('Location: /login.php');
    }
}
?>
