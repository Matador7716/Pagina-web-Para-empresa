<?php
session_start();

// Directorio base de la aplicación
define('BASE_PATH', __DIR__);

// Autocarga de clases (opcional pero recomendado)
spl_autoload_register(function ($className) {
    $file = BASE_PATH . '/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Incluir el archivo de configuración de la base de datos
require_once BASE_PATH . '/config/database.php';

// Sistema de Enrutamiento Básico
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'login';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Construir el nombre del archivo del controlador
$controllerFile = BASE_PATH . '/controllers/' . ucfirst($controller) . 'Controller.php';

// Verificar si el archivo del controlador existe
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    // Construir el nombre de la clase del controlador
    $controllerClassName = ucfirst($controller) . 'Controller';
    // Instanciar el controlador
    $controllerInstance = new $controllerClassName();

    // Verificar si la acción (método) existe en el controlador
    if (method_exists($controllerInstance, $action)) {
        // Llamar a la acción
        $controllerInstance->$action();
    } else {
        // Manejar error: Acción no encontrada
        echo "Error 404: Acción no encontrada.";
    }
} else {
    // Manejar error: Controlador no encontrado
    echo "Error 404: Controlador no encontrado.";
}
?>
