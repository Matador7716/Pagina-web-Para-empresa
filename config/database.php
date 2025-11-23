<?php
class Conexion {
    private static $instancia = null;
    private $conexion;

    private function __construct() {
        $config = parse_ini_file(BASE_PATH . '/config.ini', true);

        $servidor = $config['database']['servidor'];
        $usuario = $config['database']['usuario'];
        $contrasena = $config['database']['contrasena'];
        $base_de_datos = $config['database']['base_de_datos'];

        $this->conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public static function getInstancia() {
        if (self::$instancia == null) {
            self::$instancia = new Conexion();
        }
        return self::$instancia;
    }

    public function getConexion() {
        return $this->conexion;
    }

    // Prevenir la clonación del objeto
    private function __clone() { }
}
?>
