CREATE DATABASE IF NOT EXISTS farmacia_db;

USE farmacia_db;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    rol ENUM('Administrador', 'Cajero', 'Inventario', 'Farmacéutico') NOT NULL,
    nombre_completo VARCHAR(100) NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ultima_modificacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    ultimo_login TIMESTAMP NULL,
    creado_por INT NULL,
    estado ENUM('activo', 'inactivo') DEFAULT 'activo',
    FOREIGN KEY (creado_por) REFERENCES usuarios(id) ON DELETE SET NULL
);

CREATE TABLE IF NOT EXISTS password_resets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    token VARCHAR(255) NOT NULL,
    expires_at DATETIME NOT NULL,
    FOREIGN KEY (user_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- Insertar un usuario administrador por defecto
-- La contraseña es 'admin'
INSERT INTO usuarios (nombre_usuario, email, contrasena, rol, nombre_completo)
VALUES ('admin', 'admin@example.com', '$2y$10$2ZUsnxHex2Fdq0IcNg/hr.YRKoFc1ONIQ4j5CyWpQt6aumnPVoj5i', 'Administrador', 'Administrador del Sistema');

CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    sku VARCHAR(100) NOT NULL UNIQUE,
    categoria VARCHAR(100),
    presentacion VARCHAR(100),
    laboratorio VARCHAR(100),
    precio_compra DECIMAL(10, 2) NOT NULL,
    precio_venta DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL,
    stock_minimo INT NOT NULL,
    fecha_vencimiento DATE NOT NULL,
    lote VARCHAR(100),
    imagen VARCHAR(255),
    estado ENUM('activo', 'inactivo') DEFAULT 'activo'
);
