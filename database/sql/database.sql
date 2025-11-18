-- Candela Hotel Database Schema
-- Version 1.0

-- Create database if it doesn't exist
CREATE DATABASE IF NOT EXISTS candela_hotel CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE candela_hotel;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--
CREATE TABLE `roles` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nombre_rol` VARCHAR(50) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--
INSERT INTO `roles` (`nombre_rol`) VALUES
('Administrador'),
('Recepcionista'),
('Limpieza'),
('Finanzas'),
('Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--
CREATE TABLE `usuarios` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nombre_usuario` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `nombre_completo` VARCHAR(100),
  `rol_id` INT,
  `fecha_creacion` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`rol_id`) REFERENCES `roles`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--
INSERT INTO `usuarios` (`nombre_usuario`, `password`, `email`, `nombre_completo`, `rol_id`) VALUES
('RudyCan', '$2y$10$vbsWoapaMujCkAK4eNDrF.h0Ebh1Pjm3FcxoFdoMX0Y2AmtLD7rKq', 'admin@candelahotel.com', 'Administrador Principal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permisos`
--
CREATE TABLE `permisos` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nombre_permiso` VARCHAR(100) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `rol_permisos`
--
CREATE TABLE `rol_permisos` (
  `rol_id` INT,
  `permiso_id` INT,
  PRIMARY KEY (`rol_id`, `permiso_id`),
  FOREIGN KEY (`rol_id`) REFERENCES `roles`(`id`),
  FOREIGN KEY (`permiso_id`) REFERENCES `permisos`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categorias_habitacion`
--
CREATE TABLE `categorias_habitacion` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nombre_categoria` VARCHAR(100) NOT NULL,
  `descripcion` TEXT,
  `capacidad` INT,
  `precio_base` DECIMAL(10, 2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `habitaciones`
--
CREATE TABLE `habitaciones` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `numero_habitacion` VARCHAR(10) NOT NULL UNIQUE,
  `categoria_id` INT,
  `estado` ENUM('Limpio', 'Sucio', 'En mantenimiento', 'Ocupado') DEFAULT 'Limpio',
  `piso` INT,
  `descripcion` TEXT,
  FOREIGN KEY (`categoria_id`) REFERENCES `categorias_habitacion`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `limpieza`
--
CREATE TABLE `limpieza` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `habitacion_id` INT,
  `usuario_id` INT,
  `fecha_asignacion` DATETIME,
  `fecha_finalizacion` DATETIME,
  `estado` ENUM('Pendiente', 'En progreso', 'Completado') DEFAULT 'Pendiente',
  `observaciones` TEXT,
  FOREIGN KEY (`habitacion_id`) REFERENCES `habitaciones`(`id`),
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `huespedes`
--
CREATE TABLE `huespedes` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(100) NOT NULL,
  `apellido` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) UNIQUE,
  `telefono` VARCHAR(20),
  `nacionalidad` VARCHAR(50),
  `fecha_nacimiento` DATE,
  `documento_identidad` VARCHAR(50) UNIQUE,
  `fecha_registro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservas`
--
CREATE TABLE `reservas` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `huesped_id` INT,
  `habitacion_id` INT,
  `fecha_entrada` DATE NOT NULL,
  `fecha_salida` DATE NOT NULL,
  `numero_adultos` INT,
  `numero_ninos` INT,
  `costo_total` DECIMAL(10, 2),
  `estado` ENUM('Pendiente', 'Confirmada', 'Cancelada', 'Check-in', 'Check-out') DEFAULT 'Pendiente',
  `origen` VARCHAR(50),
  `fecha_creacion` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`huesped_id`) REFERENCES `huespedes`(`id`),
  FOREIGN KEY (`habitacion_id`) REFERENCES `habitaciones`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pagos`
--
CREATE TABLE `pagos` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `reserva_id` INT,
  `monto` DECIMAL(10, 2) NOT NULL,
  `metodo_pago` VARCHAR(50),
  `fecha_pago` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `codigo_transaccion` VARCHAR(100),
  FOREIGN KEY (`reserva_id`) REFERENCES `reservas`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `finanzas`
--
CREATE TABLE `finanzas` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `tipo` ENUM('Ingreso', 'Egreso') NOT NULL,
  `descripcion` TEXT,
  `monto` DECIMAL(10, 2) NOT NULL,
  `fecha` DATE,
  `categoria` VARCHAR(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `crm_clientes`
--
CREATE TABLE `crm_clientes` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `huesped_id` INT,
  `tipo_cliente` VARCHAR(50),
  `preferencias` TEXT,
  `frecuencia` INT DEFAULT 0,
  `ultima_visita` DATE,
  FOREIGN KEY (`huesped_id`) REFERENCES `huespedes`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comunicaciones`
--
CREATE TABLE `comunicaciones` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `cliente_id` INT,
  `tipo` ENUM('Email', 'Telefono', 'WhatsApp') NOT NULL,
  `fecha` DATETIME,
  `asunto` VARCHAR(255),
  `notas` TEXT,
  FOREIGN KEY (`cliente_id`) REFERENCES `crm_clientes`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pos_categorias_producto`
--
CREATE TABLE `pos_categorias_producto` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nombre` VARCHAR(100) NOT NULL,
    `descripcion` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `pos_productos`
--
CREATE TABLE `pos_productos` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` TEXT,
  `precio` DECIMAL(10, 2) NOT NULL,
  `stock` INT,
  `categoria_id` INT,
  FOREIGN KEY (`categoria_id`) REFERENCES `pos_categorias_producto`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pos_ventas`
--
CREATE TABLE `pos_ventas` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `huesped_id` INT NULL,
  `total` DECIMAL(10, 2) NOT NULL,
  `fecha_venta` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`huesped_id`) REFERENCES `huespedes`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pos_detalle_venta`
--
CREATE TABLE `pos_detalle_venta` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `venta_id` INT,
    `producto_id` INT,
    `cantidad` INT,
    `precio_unitario` DECIMAL(10, 2),
    `subtotal` DECIMAL(10, 2),
    FOREIGN KEY (`venta_id`) REFERENCES `pos_ventas`(`id`),
    FOREIGN KEY (`producto_id`) REFERENCES `pos_productos`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marketing_plantillas`
--
CREATE TABLE `marketing_plantillas` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nombre` VARCHAR(100) NOT NULL,
    `asunto` VARCHAR(255),
    `cuerpo_html` TEXT,
    `tipo` ENUM('Bienvenida', 'Confirmacion', 'Recordatorio', 'Promocion', 'Cumpleanos')
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marketing_automatizacion`
--
CREATE TABLE `marketing_automatizacion` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `cliente_id` INT,
  `plantilla_id` INT,
  `fecha_envio` DATETIME,
  `estado` ENUM('Pendiente', 'Enviado', 'Fallido') DEFAULT 'Pendiente',
  FOREIGN KEY (`cliente_id`) REFERENCES `crm_clientes`(`id`),
  FOREIGN KEY (`plantilla_id`) REFERENCES `marketing_plantillas`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--
CREATE TABLE `logs` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario_id` INT,
  `accion` VARCHAR(255),
  `tabla_afectada` VARCHAR(50),
  `registro_afectado_id` INT,
  `fecha` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
