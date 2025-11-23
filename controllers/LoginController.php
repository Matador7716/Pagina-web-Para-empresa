<?php
class LoginController {
    public function index() {
        // Si el usuario ya está logueado, redirigir al dashboard
        if (isset($_SESSION['usuario'])) {
            header('Location: index.php?controller=dashboard&action=index');
            exit;
        }
        // Cargar la vista del formulario de login
        require_once BASE_PATH . '/views/login/index.php';
    }

    public function login() {
        // Validar que se hayan enviado datos por POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $contrasena = $_POST['contrasena'] ?? '';

            // Conectar a la BD
            $db = Conexion::getInstancia()->getConexion();

            // Preparar la consulta
            $stmt = $db->prepare("SELECT id_usuario, nombre, contrasena, rol FROM usuario WHERE nombre = ?");
            $stmt->bind_param("s", $nombre);
            $stmt->execute();
            $resultado = $stmt->get_result();

            // Verificar si el usuario existe
            if ($resultado->num_rows === 1) {
                $usuario = $resultado->fetch_assoc();
                // Verificar la contraseña
                if (password_verify($contrasena, $usuario['contrasena'])) {
                    // Iniciar sesión
                    $_SESSION['usuario'] = $usuario;
                    // Redirigir al dashboard
                    header('Location: index.php?controller=dashboard&action=index');
                    exit;
                }
            }

            // Si las credenciales son incorrectas, mostrar error
            $error = "Nombre de usuario o contraseña incorrectos.";
            require_once BASE_PATH . '/views/login/index.php';

        } else {
            // Si no es POST, redirigir al login
            header('Location: index.php?controller=login&action=index');
        }
    }

    public function logout() {
        // Destruir la sesión
        session_destroy();
        // Redirigir al login
        header('Location: index.php?controller=login&action=index');
        exit;
    }
}
?>
