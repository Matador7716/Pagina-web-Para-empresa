<?php
require_once __DIR__ . '/../models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
        // Proteger el controlador de usuarios
        if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'Administrador') {
            header('Location: index.php?action=login');
            exit();
        }
    }

    public function index() {
        $users = $this->userModel->getUsers();
        require_once __DIR__ . '/../views/users/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $data = [
                'nombre_usuario' => trim($_POST['nombre_usuario']),
                'contrasena' => trim($_POST['contrasena']),
                'rol' => trim($_POST['rol']),
                'nombre_completo' => trim($_POST['nombre_completo']),
                'creado_por' => $_SESSION['user_id']
            ];

            $data['contrasena'] = password_hash($data['contrasena'], PASSWORD_DEFAULT);

            if ($this->userModel->register($data)) {
                $_SESSION['message'] = 'Usuario creado correctamente';
                header('Location: index.php?action=users');
            } else {
                $_SESSION['error'] = 'Algo salió mal al crear el usuario';
                header('Location: index.php?action=user_create');
            }
        } else {
            require_once __DIR__ . '/../views/users/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $data = [
                'id' => $id,
                'nombre_usuario' => trim($_POST['nombre_usuario']),
                'rol' => trim($_POST['rol']),
                'nombre_completo' => trim($_POST['nombre_completo']),
                'estado' => trim($_POST['estado'])
            ];

            if ($this->userModel->updateUser($data)) {
                $_SESSION['message'] = 'Usuario actualizado correctamente';
                header('Location: index.php?action=users');
            } else {
                $_SESSION['error'] = 'Algo salió mal al actualizar el usuario';
                header('Location: index.php?action=user_edit&id=' . $id);
            }
        } else {
            $user = $this->userModel->getUserById($id);
            require_once __DIR__ . '/../views/users/edit.php';
        }
    }

    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->userModel->deleteUser($id)) {
                $_SESSION['message'] = 'Usuario eliminado correctamente';
                header('Location: index.php?action=users');
            } else {
                $_SESSION['error'] = 'Algo salió mal al eliminar el usuario';
                header('Location: index.php?action=users');
            }
        } else {
            header('Location: index.php?action=users');
        }
    }
}
