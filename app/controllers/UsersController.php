<?php

class UsersController extends Controller {
    public function __construct() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . BASE_URL . '/auth/login');
            exit;
        }
        $this->userModel = $this->model('User');
        $userRole = $this->userModel->getRoleById($_SESSION['user_id']);
        if ($userRole !== 'Administrador') {
            header('Location: '. BASE_URL . '/dashboard');
            exit;
        }
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        $data = [
            'title' => 'Gestión de Usuarios',
            'users' => $users
        ];
        $this->view('users/index', $data);
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!CSRF::validateToken($_POST['csrf_token'])) {
                die('Invalid CSRF Token');
            }
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => 'Agregar Usuario',
                'nombre_usuario' => trim($_POST['nombre_usuario']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'rol_id' => trim($_POST['rol_id']),
                'nombre_completo' => trim($_POST['nombre_completo']),
                'errors' => []
            ];

            // Validate form
            if (empty($data['nombre_usuario'])) $data['errors']['nombre_usuario'] = 'El nombre de usuario es obligatorio.';
            if (empty($data['email'])) $data['errors']['email'] = 'El email es obligatorio.';
            if (empty($data['password'])) $data['errors']['password'] = 'La contraseña es obligatoria.';
            if ($data['password'] != $data['confirm_password']) $data['errors']['confirm_password'] = 'Las contraseñas no coinciden.';

            if (empty($data['errors'])) {
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                if ($this->userModel->addUser($data)) {
                    header('Location: ' . BASE_URL . '/users');
                    exit;
                } else {
                    die('Something went wrong');
                }
            } else {
                $this->view('users/add', $data);
            }
        } else {
            $data = [
                'title' => 'Agregar Usuario',
                'nombre_usuario' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'rol_id' => '',
                'nombre_completo' => '',
                'errors' => []
            ];
            $this->view('users/add', $data);
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!CSRF::validateToken($_POST['csrf_token'])) {
                die('Invalid CSRF Token');
            }
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => 'Editar Usuario',
                'id' => $id,
                'nombre_usuario' => trim($_POST['nombre_usuario']),
                'email' => trim($_POST['email']),
                'rol_id' => trim($_POST['rol_id']),
                'nombre_completo' => trim($_POST['nombre_completo']),
                'errors' => []
            ];

            if (empty($data['nombre_usuario'])) $data['errors']['nombre_usuario'] = 'El nombre de usuario es obligatorio.';
            if (empty($data['email'])) $data['errors']['email'] = 'El email es obligatorio.';

            if (empty($data['errors'])) {
                if ($this->userModel->updateUser($data)) {
                    header('Location: ' . BASE_URL . '/users');
                    exit;
                } else {
                    die('Something went wrong');
                }
            } else {
                $this->view('users/edit', $data);
            }
        } else {
            $user = $this->userModel->getUserById($id);
            $data = [
                'title' => 'Editar Usuario',
                'id' => $id,
                'nombre_usuario' => $user->nombre_usuario,
                'email' => $user->email,
                'rol_id' => $user->rol_id,
                'nombre_completo' => $user->nombre_completo,
                'errors' => []
            ];
            $this->view('users/edit', $data);
        }
    }

    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!CSRF::validateToken($_POST['csrf_token'])) {
                die('Invalid CSRF Token');
            }
            if ($this->userModel->deleteUser($id)) {
                header('Location: ' . BASE_URL . '/users');
                exit;
            } else {
                die('Something went wrong');
            }
        }
    }
}
