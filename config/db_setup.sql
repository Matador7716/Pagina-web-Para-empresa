-- =================================================================
--  Script de Configuración de la Base de Datos
--  Proyecto: Sistema de Sorteos y Rifas
-- =================================================================

-- ---
-- 1. Creación de la Base de Datos
-- ---
CREATE DATABASE IF NOT EXISTS raffle_system
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- ---
-- 2. Selección de la Base de Datos
-- ---
USE raffle_system;

-- ---
-- 3. Creación de la Tabla `users`
-- ---
CREATE TABLE `users` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `is_admin` BOOLEAN NOT NULL DEFAULT FALSE,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ---
-- 4. Creación de la Tabla `raffles`
-- ---
CREATE TABLE `raffles` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `prize` VARCHAR(255) NOT NULL,
    `ticket_price` DECIMAL(10, 2) NOT NULL,
    `total_tickets` INT(11) NOT NULL,
    `end_date` DATETIME NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ---
-- 5. Creación de la Tabla `tickets`
-- ---
CREATE TABLE `tickets` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `raffle_id` INT(11) NOT NULL,
    `user_id` INT(11) NOT NULL,
    `ticket_number` INT(11) NOT NULL,
    `order_id` INT(11) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`raffle_id`) REFERENCES `raffles`(`id`) ON DELETE CASCADE,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE,
    UNIQUE KEY `unique_ticket` (`raffle_id`, `ticket_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ---
-- 6. Creación de la Tabla `orders`
-- ---
CREATE TABLE `orders` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT(11) NOT NULL,
    `total_amount` DECIMAL(10, 2) NOT NULL,
    `status` VARCHAR(50) NOT NULL DEFAULT 'pending',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ---
-- Fin del script
-- ---
