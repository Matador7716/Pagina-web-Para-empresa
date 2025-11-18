-- SQLINES DEMO *** ----------------------------------------------------------------
-- SQLINES DEMO *** Script de Configuración de la Base de Datos
-- SQLINES DEMO *** Proyecto: Candela Hotel
-- SQLINES DEMO *** ----------------------------------------------------------------

-- SQLINES DEMO *** --------------------------------------------
-- SQLINES DEMO *** 1. Creación de la Base de Datos
-- SQLINES DEMO *** --------------------------------------------
-- SQLINES DEMO *** Crea la base de datos `candela_hotel` si no existe.
-- SQLINES DEMO *** Se utiliza el juego de caracteres utf8mb4 para compatibilidad con caracteres internacionales.
CREATE DATABASE IF NOT EXISTS candela_hotel
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- SQLINES DEMO *** --------------------------------------------
-- SQLINES DEMO *** 2. Selección de la Base de Datos
-- SQLINES DEMO *** --------------------------------------------
-- SQLINES DEMO *** Pone en uso la base de datos recién creada.
USE candela_hotel;

-- SQLINES DEMO *** --------------------------------------------
-- SQLINES DEMO *** 3. Creación de la Tabla `users`
-- SQLINES DEMO *** --------------------------------------------
-- SQLINES DEMO *** Almacena la información de los usuarios del sistema.
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('Administrador', 'Recepcionista', 'Contador') NOT NULL,
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- SQLINES DEMO *** (Opcional) Crear un usuario administrador por defecto
-- SQLINES DEMO *** La contraseña es 'admin123' (hasheada). Se recomienda cambiarla.
-- SQLINES DEMO *** La contraseña es 'admin123' (hasheada). Se recomienda cambiarla.
-- SQLINES DEMO *** Contraseña sin hashear: admin123
INSERT INTO users (name, email, password, role) VALUES ('Administrador', 'admin@candelahotel.com', '$2y$10$ON87lXZohQgxZk0MPTBQsOIp7D/ROuQFR0msSNjv4/sbdWsaJsI0S', 'Administrador');
