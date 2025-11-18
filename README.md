# Candela Hotel - Sistema de Gestión Hotelera

¡Bienvenido al sistema de gestión para Candela Hotel! Este es un sistema web completo y profesional desarrollado en PHP puro bajo la arquitectura MVC, diseñado para administrar todas las operaciones del hotel.

## Descripción

El sistema incluye módulos para la gestión de usuarios, clientes (CRM), limpieza, huéspedes, reservas, finanzas, punto de venta (POS) y marketing. Está construido desde cero con PHP, MySQL, HTML, CSS y JavaScript, sin el uso de frameworks externos.

## Requisitos Previos

Para ejecutar este sistema en tu entorno local, necesitarás tener instalado el siguiente software:

*   **PHP**: Versión 8.0 o superior.
*   **MySQL**: Un servidor de base de datos como MySQL o MariaDB.
*   Un servidor web (puedes usar el servidor incorporado de PHP para desarrollo).

## Guía de Instalación

Sigue estos pasos para configurar y ejecutar el proyecto en tu máquina.

### 1. Clona el Repositorio

Si tienes `git` instalado, clona el repositorio. De lo contrario, descarga el código fuente y extráelo.

```bash
git clone <url-del-repositorio>
cd <nombre-del-repositorio>
```

### 2. Configuración de la Base de Datos

El sistema requiere una base de datos para funcionar.

1.  **Crea la Base de Datos**: Abre tu cliente de MySQL (como phpMyAdmin, DBeaver, o la línea de comandos) y crea una nueva base de datos.

    ```sql
    CREATE DATABASE candela_hotel CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
    ```

2.  **Importa el Esquema**: Importa el archivo `database/sql/database.sql` en tu nueva base de datos `candela_hotel`. Este archivo creará todas las tablas necesarias y registrará el usuario administrador inicial.

### 3. Configuración de la Conexión

Ahora, necesitas configurar el sistema para que se conecte a tu base de datos.

1.  Abre el archivo de configuración en `config/database.php`.
2.  Modifica las constantes `DB_USER` y `DB_PASS` con tus propias credenciales de acceso a MySQL. `DB_HOST` y `DB_NAME` ya deberían estar configurados correctamente si seguiste los pasos anteriores.

    ```php
    <?php

    // Configuración de la base de datos
    define('DB_HOST', 'localhost');
    define('DB_USER', 'tu_usuario_mysql'); // <-- Cambia esto
    define('DB_PASS', 'tu_contraseña_mysql'); // <-- Cambia esto
    define('DB_NAME', 'candela_hotel');

    // URL base de la aplicación (¡Importante!)
    define('BASE_URL', 'http://localhost:8000'); // Asegúrate de que coincida con tu servidor
    ```

### 4. Ejecución del Servidor

El sistema está diseñado para funcionar con URLs amigables (reescritura de URL), por lo que es importante que inicies el servidor desde la carpeta `public`.

1.  Abre tu terminal o línea de comandos.
2.  Navega hasta la carpeta `public` del proyecto.
3.  Ejecuta el siguiente comando para iniciar el servidor de desarrollo de PHP:

    ```bash
    php -S localhost:8000
    ```

4.  ¡Listo! Ahora puedes acceder al sistema abriendo tu navegador web y visitando `http://localhost:8000`.

## Credenciales de Acceso

Puedes iniciar sesión en el panel de administración con las siguientes credenciales:

*   **Usuario**: `RudyCan`
*   **Contraseña**: `Candelita123@-s`

## Estructura de Carpetas

El proyecto sigue una arquitectura MVC (Modelo-Vista-Controlador) para una mejor organización del código:

*   **/app**: Contiene la lógica principal de la aplicación.
    *   **/controllers**: Controlan el flujo de la aplicación.
    *   **/models**: Interactúan con la base de datos.
    *   **/views**: Contienen el código HTML de la interfaz.
*   **/config**: Archivos de configuración.
*   **/core**: Clases fundamentales del sistema (Router, Controller, etc.).
*   **/database**: Scripts SQL.
*   **/public**: El único punto de entrada a la aplicación (`index.php`) y los archivos públicos (CSS, JS, imágenes).
