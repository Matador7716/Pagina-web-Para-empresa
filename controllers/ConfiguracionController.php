<?php
class ConfiguracionController {
    private $db;

    public function __construct() {
        // Verificar si el usuario está logueado
        if (!isset($_SESSION['usuario'])) {
            header('Location: index.php?controller=login&action=index');
            exit;
        }
        $this->db = Conexion::getInstancia()->getConexion();
    }

    public function index() {
        // Obtener la configuración actual
        $query = "SELECT * FROM configuracion LIMIT 1";
        $resultado = $this->db->query($query);
        $config = $resultado->fetch_assoc() ?? [];

        // Cargar la vista del formulario de configuración
        require_once BASE_PATH . '/views/configuracion/index.php';
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recoger los datos del formulario
            $nombre = $_POST['nombre'] ?? '';
            $ruc = $_POST['ruc'] ?? '';
            $direccion = $_POST['direccion'] ?? '';
            $telefono = $_POST['telefono'] ?? '';
            $email = $_POST['email'] ?? '';
            $simbolo_moneda = $_POST['simbolo_moneda'] ?? '';
            $nombre_impuesto = $_POST['nombre_impuesto'] ?? '';
            $porcentaje_impuesto = $_POST['porcentaje_impuesto'] ?? 0;
            $logo_actual = $_POST['logo_actual'] ?? '';
            $logo_nombre = $logo_actual;

            // Lógica para manejar la subida del logo
            if (isset($_FILES['logo']) && $_FILES['logo']['error'] == UPLOAD_ERR_OK) {
                $upload_dir = BASE_PATH . '/public/uploads/';
                if (!file_exists($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                }
                $logo_nombre = uniqid() . '-' . basename($_FILES['logo']['name']);
                $upload_file = $upload_dir . $logo_nombre;

                // Mover el archivo subido
                if (move_uploaded_file($_FILES['logo']['tmp_name'], $upload_file)) {
                    // Si hay un logo antiguo y es diferente, borrarlo
                    if (!empty($logo_actual) && $logo_actual !== $logo_nombre) {
                        $old_logo_path = $upload_dir . $logo_actual;
                        if (file_exists($old_logo_path)) {
                            unlink($old_logo_path);
                        }
                    }
                } else {
                    $logo_nombre = $logo_actual; // Si falla la subida, mantener el antiguo
                }
            }

            // Verificar si ya existe una configuración para decidir si es INSERT o UPDATE
            $query = "SELECT COUNT(*) as total FROM configuracion";
            $resultado = $this->db->query($query);
            $existe = $resultado->fetch_assoc()['total'] > 0;

            if ($existe) {
                // Actualizar la configuración existente
                $stmt = $this->db->prepare("UPDATE configuracion SET nombre = ?, ruc = ?, direccion = ?, telefono = ?, email = ?, logo = ?, simbolo_moneda = ?, nombre_impuesto = ?, porcentaje_impuesto = ?");
                $stmt->bind_param("ssssssssd", $nombre, $ruc, $direccion, $telefono, $email, $logo_nombre, $simbolo_moneda, $nombre_impuesto, $porcentaje_impuesto);
            } else {
                // Insertar nueva configuración
                $stmt = $this->db->prepare("INSERT INTO configuracion (nombre, ruc, direccion, telefono, email, logo, simbolo_moneda, nombre_impuesto, porcentaje_impuesto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                 $stmt->bind_param("ssssssssd", $nombre, $ruc, $direccion, $telefono, $email, $logo_nombre, $simbolo_moneda, $nombre_impuesto, $porcentaje_impuesto);
            }

            if ($stmt->execute()) {
                // Redirigir con mensaje de éxito
                header('Location: index.php?controller=configuracion&action=index&status=success');
            } else {
                // Redirigir con mensaje de error
                header('Location: index.php?controller=configuracion&action=index&status=error');
            }
            exit;
        }
    }
}
?>
