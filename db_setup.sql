-- =================================================================
--  Script de Configuración de la Base de Datos
--  Proyecto: Sistema de Ventas para Bar y Licorería
-- =================================================================

CREATE DATABASE IF NOT EXISTS inventory_system
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE inventory_system;

-- ---
-- 1. Tabla de Usuarios
-- ---
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `full_name` VARCHAR(100),
    `role` ENUM('admin', 'seller') DEFAULT 'seller',
    `status` TINYINT(1) DEFAULT 1,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ---
-- 2. Tabla de Categorías
-- ---
CREATE TABLE IF NOT EXISTS `categories` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `description` TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ---
-- 3. Tabla de Productos
-- ---
CREATE TABLE IF NOT EXISTS `products` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `barcode` VARCHAR(50) UNIQUE,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `category_id` INT,
    `purchase_price` DECIMAL(10,2) DEFAULT 0.00,
    `sale_price` DECIMAL(10,2) NOT NULL,
    `stock` INT DEFAULT 0,
    `min_stock` INT DEFAULT 5,
    `image_path` VARCHAR(255),
    `status` TINYINT(1) DEFAULT 1,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ---
-- 4. Tabla de Control de Caja
-- ---
CREATE TABLE IF NOT EXISTS `cash_registers` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT NOT NULL,
    `opening_balance` DECIMAL(10,2) NOT NULL,
    `closing_balance` DECIMAL(10,2) DEFAULT NULL,
    `opening_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `closing_date` TIMESTAMP NULL DEFAULT NULL,
    `status` ENUM('open', 'closed') DEFAULT 'open',
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ---
-- 5. Tabla de Ventas
-- ---
CREATE TABLE IF NOT EXISTS `sales` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT NOT NULL,
    `cash_register_id` INT NOT NULL,
    `customer_name` VARCHAR(100) DEFAULT 'Público General',
    `total_amount` DECIMAL(10,2) NOT NULL,
    `discount_amount` DECIMAL(10,2) DEFAULT 0.00,
    `final_amount` DECIMAL(10,2) NOT NULL,
    `payment_method` ENUM('cash', 'card', 'transfer') DEFAULT 'cash',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
    FOREIGN KEY (`cash_register_id`) REFERENCES `cash_registers`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ---
-- 6. Tabla de Detalle de Ventas
-- ---
CREATE TABLE IF NOT EXISTS `sale_items` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `sale_id` INT NOT NULL,
    `product_id` INT NOT NULL,
    `quantity` INT NOT NULL,
    `unit_price` DECIMAL(10,2) NOT NULL,
    `discount` DECIMAL(10,2) DEFAULT 0.00,
    `subtotal` DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (`sale_id`) REFERENCES `sales`(`id`) ON DELETE CASCADE,
    FOREIGN KEY (`product_id`) REFERENCES `products`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ---
-- 7. Tabla de Movimientos de Caja (Ingresos/Egresos extras)
-- ---
CREATE TABLE IF NOT EXISTS `cash_movements` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `cash_register_id` INT NOT NULL,
    `type` ENUM('income', 'expense') NOT NULL,
    `amount` DECIMAL(10,2) NOT NULL,
    `description` TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`cash_register_id`) REFERENCES `cash_registers`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ---
-- Datos iniciales
-- ---
INSERT INTO `users` (`username`, `password`, `full_name`, `role`) VALUES
('admin', '$2y$10$xGFGyrwlXcJEmHIJIS6yRueNqYAp7dC54HUZlDeKQ6dfpuW570rt.', 'Administrador', 'admin');
-- password es 'admin123'
