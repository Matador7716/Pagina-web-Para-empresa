-- CandelaWEB - Services Database Setup

CREATE DATABASE IF NOT EXISTS candelaweb_services;

USE candelaweb_services;

CREATE TABLE `products` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `price` DECIMAL(10, 2) NOT NULL,
    `image` VARCHAR(255),
    `category` VARCHAR(50)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `services` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `contacts` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `message` TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Populate services
INSERT INTO `services` (`name`, `description`) VALUES
('Diseño de paginas Web', 'Creamos páginas web a medida, adaptadas a sus necesidades.'),
('Diseño de sistemas de ventas web', 'Desarrollamos sistemas de ventas online para que pueda vender sus productos en internet.'),
('Facturacion electronica', 'Integramos sistemas de facturación electrónica en su empresa.'),
('Soporte tecnico de equipos informaticos', 'Ofrecemos soporte técnico para ordenadores, portátiles e impresoras.');

-- Populate products
INSERT INTO `products` (`name`, `description`, `price`, `image`, `category`) VALUES
('Ordenador 1', 'Descripción del ordenador 1.', 1000.00, 'images/computer1.jpg', 'computer'),
('Ordenador 2', 'Descripción del ordenador 2.', 1100.00, 'images/computer2.jpg', 'computer'),
('Ordenador 3', 'Descripción del ordenador 3.', 1200.00, 'images/computer3.jpg', 'computer'),
('Ordenador 4', 'Descripción del ordenador 4.', 1300.00, 'images/computer4.jpg', 'computer'),
('Ordenador 5', 'Descripción del ordenador 5.', 1400.00, 'images/computer5.jpg', 'computer'),
('Portátil 1', 'Descripción del portátil 1.', 1500.00, 'images/laptop1.jpg', 'laptop'),
('Portátil 2', 'Descripción del portátil 2.', 1600.00, 'images/laptop2.jpg', 'laptop'),
('Portátil 3', 'Descripción del portátil 3.', 1700.00, 'images/laptop3.jpg', 'laptop'),
('Portátil 4', 'Descripción del portátil 4.', 1800.00, 'images/laptop4.jpg', 'laptop'),
('Portátil 5', 'Descripción del portátil 5.', 1900.00, 'images/laptop5.jpg', 'laptop'),
('Impresora 1', 'Descripción de la impresora 1.', 200.00, 'images/printer1.jpg', 'printer'),
('Impresora 2', 'Descripción de la impresora 2.', 250.00, 'images/printer2.jpg', 'printer'),
('Impresora 3', 'Descripción de la impresora 3.', 300.00, 'images/printer3.jpg', 'printer'),
('Impresora 4', 'Descripción de la impresora 4.', 350.00, 'images/printer4.jpg', 'printer'),
('Impresora 5', 'Descripción de la impresora 5.', 400.00, 'images/printer5.jpg', 'printer');
