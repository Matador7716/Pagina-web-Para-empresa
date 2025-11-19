-- =================================================================
-- Script de Configuración de la Base de Datos
-- Proyecto: Sistema de Punto de Venta para Farmacia
-- =================================================================

-- 1. Creación de la Base de Datos
CREATE DATABASE IF NOT EXISTS farmacia_db
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 2. Selección de la Base de Datos
USE farmacia_db;

-- 3. Creación de la Tabla `roles`
-- Almacena los roles de usuario (ej: Administrador, Vendedor).
CREATE TABLE `roles` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 4. Inserción de Roles por Defecto
INSERT INTO `roles` (`name`) VALUES
('Administrador'),
('Vendedor');

-- 5. Creación de la Tabla `users`
-- Almacena la información de los usuarios que accederán al sistema.
CREATE TABLE `users` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL COMMENT 'Contraseña hasheada',
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `role_id` INT(11) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`) ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 6. Creación de un Usuario Administrador por Defecto
-- Contraseña: "admin" (sin hashear). La aplicación la hasheará antes de guardarla.
-- En un sistema real, la inserción se haría a través de un script de registro seguro.
-- Por ahora, lo hashearemos directamente para facilitar las pruebas iniciales.
-- El hash corresponde a la contraseña "admin"
INSERT INTO `users` (`username`, `password`, `email`, `role_id`) VALUES
('admin', '$2y$10$.iqfoDPgR9QO4KlFI28Uhu/QwZ.cHncdc2.ybCFfnjN0PBW9Y.KSS', 'admin@farmacia.com', 1);

-- =================================================================
-- Fin del script
-- =================================================================
