<?php
session_start();

require_once __DIR__ . '/../models/UserModel.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'username_err' => '',
                'password_err' => '',
            ];

            if (empty($data['username'])) {
                $data['username_err'] = 'Por favor ingrese su usuario';
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'Por favor ingrese su contraseña';
            }

            if ($this->userModel->findUserByUsername($data['username'])) {
                // User found
            } else {
                $data['username_err'] = 'Usuario no encontrado';
            }

            if (empty($data['username_err']) && empty($data['password_err'])) {
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $error = 'Contraseña incorrecta';
                    require_once __DIR__ . '/../views/login.php';
                }
            } else {
                $error = 'Por favor, rellene todos los campos';
                require_once __DIR__ . '/../views/login.php';
            }
        } else {
            require_once __DIR__ . '/../views/login.php';
        }
    }

    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_username'] = $user->nombre_usuario;
        $_SESSION['user_role'] = $user->rol;
        header('Location: index.php?action=dashboard');
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_username']);
        unset($_SESSION['user_role']);
        session_destroy();
        header('Location: index.php?action=login');
    }

    public function forgotPassword() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
            $email = trim($_POST['email']);

            if (empty($email)) {
                $_SESSION['error'] = 'Por favor ingrese su correo electrónico';
                header('Location: index.php?action=forgot_password');
                exit();
            }

            $user = $this->userModel->findUserByEmail($email);

            if ($user) {
                $token = bin2hex(random_bytes(50));
                $expires = new DateTime('now +1 hour');

                $this->userModel->createPasswordResetToken($user->id, $token, $expires->format('Y-m-d H:i:s'));

                // En una aplicación real, aquí se enviaría un correo electrónico con el token
                // Por ahora, mostraremos el token en la página
                $_SESSION['message'] = 'Se ha generado un token para restablecer su contraseña: ' . $token;
            } else {
                $_SESSION['error'] = 'No se encontró ningún usuario con ese correo electrónico';
            }

            header('Location: index.php?action=forgot_password');
        } else {
            require_once __DIR__ . '/../views/forgot_password.php';
        }
    }

    public function resetPassword() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
            $token = trim($_POST['token']);
            $password = trim($_POST['password']);
            $password_confirm = trim($_POST['password_confirm']);

            if (empty($token) || empty($password) || empty($password_confirm)) {
                $_SESSION['error'] = 'Por favor, rellene todos los campos';
                header('Location: index.php?action=reset_password');
                exit();
            }

            if ($password !== $password_confirm) {
                $_SESSION['error'] = 'Las contraseñas no coinciden';
                header('Location: index.php?action=reset_password&token=' . $token);
                exit();
            }

            $reset = $this->userModel->findPasswordResetToken($token);

            if ($reset) {
                $expires = new DateTime($reset->expires_at);
                if ($expires > new DateTime()) {
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    if ($this->userModel->updatePassword($reset->user_id, $hashed_password)) {
                        $this->userModel->deletePasswordResetToken($token);
                        $_SESSION['message'] = 'Contraseña actualizada correctamente';
                        header('Location: index.php?action=login');
                    } else {
                        $_SESSION['error'] = 'Algo salió mal al actualizar la contraseña';
                        header('Location: index.php?action=reset_password&token=' . $token);
                    }
                } else {
                    $_SESSION['error'] = 'El token ha expirado';
                    header('Location: index.php?action=reset_password');
                }
            } else {
                $_SESSION['error'] = 'Token inválido';
                header('Location: index.php?action=reset_password');
            }
        } else {
            $token = isset($_GET['token']) ? $_GET['token'] : '';
            require_once __DIR__ . '/../views/reset_password.php';
        }
    }
}
