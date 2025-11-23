<?php
// init.php

// Iniciar sesión
session_start();

// Definir constantes de ruta
define('ROOT_PATH', __DIR__ . '/');
define('APP_PATH', ROOT_PATH . 'app/');
define('CONFIG_PATH', ROOT_PATH . 'config/');
define('PUBLIC_PATH', ROOT_PATH . 'public/');

// Incluir archivos de configuración
require_once CONFIG_PATH . 'database.php';

// Autocargar clases de modelos y controladores
spl_autoload_register(function ($class) {
    $paths = [
        APP_PATH . 'models/',
        APP_PATH . 'controllers/'
    ];

    foreach ($paths as $path) {
        if (file_exists($path . $class . '.php')) {
            require_once $path . $class . '.php';
            return;
        }
    }
});

// Helpers (futuras funciones de ayuda)
// require_once APP_PATH . 'helpers.php';
?>
