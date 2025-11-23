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
            // Validar que el email no exista
            if ($this->user->emailExists($_POST['email'])) {
                $_SESSION['error'] = 'El correo electrónico ya está registrado.';
                header('Location: /register.php');
                exit;
            }

            $this->user->name = $_POST['name'];
            $this->user->email = $_POST['email'];
            $this->user->password = $_POST['password'];
            $this->user->role = $_POST['role'];

            if ($this->user->create()) {
                $_SESSION['success'] = '¡Registro exitoso! Ahora puedes iniciar sesión.';
                header('Location: /login.php');
                exit;
            } else {
                $_SESSION['error'] = 'Error al registrar el usuario. Por favor, inténtalo de nuevo.';
                header('Location: /register.php');
                exit;
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
                exit;
            } else {
                // Error de autenticación
                $_SESSION['error'] = 'Email o contraseña incorrectos.';
                header('Location: /login.php');
                exit;
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
