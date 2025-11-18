<?php

class AuthController extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!CSRF::validateToken($_POST['csrf_token'])) {
                die('Invalid CSRF Token');
            }
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'nombre_usuario' => trim($_POST['nombre_usuario']),
                'password' => trim($_POST['password']),
                'error' => ''
            ];

            if (empty($data['nombre_usuario']) || empty($data['password'])) {
                $data['error'] = 'Por favor, ingrese usuario y contraseña.';
                $this->view('auth/login', $data);
            }

            $user = $this->userModel->findUserByUsername($data['nombre_usuario']);

            if ($user) {
                if (password_verify($data['password'], $user->password)) {
                    $this->createUserSession($user);
                    header('Location: ' . BASE_URL . '/dashboard');
                    exit;
                } else {
                    $data['error'] = 'Contraseña incorrecta.';
                    $this->view('auth/login', $data);
                }
            } else {
                $data['error'] = 'Usuario no encontrado.';
                $this->view('auth/login', $data);
            }
        } else {
            $data = [
                'nombre_usuario' => '',
                'password' => '',
                'error' => ''
            ];
            $this->view('auth/login', $data);
        }
    }

    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->nombre_usuario;
        $_SESSION['user_role'] = $user->rol_id;
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_role']);
        session_destroy();
        header('Location: ' . BASE_URL . '/auth/login');
        exit;
    }

    public function isLoggedIn() {
        if (isset($_SESSION['user_id'])) {
            return true;
        } else {
            return false;
        }
    }
}
