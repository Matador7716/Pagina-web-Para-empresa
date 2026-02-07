-- =================================================================
--  Script de Configuración de la Base de Datos
--  Proyecto: Sistema de Registro de Asistencia APAFA
-- =================================================================

-- Se recomienda ejecutar este script desde un cliente de MySQL o
-- a través de la pestaña SQL en phpMyAdmin.

-- ---
-- 1. Creación de la Base de Datos
-- ---
-- Crea la base de datos `apafa_tarjetaasis` si no existe.
-- Se utiliza el juego de caracteres utf8mb4 para una compatibilidad
-- completa con caracteres internacionales y emojis.
CREATE DATABASE IF NOT EXISTS apafa_tarjetaasis
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


-- ---
-- 2. Selección de la Base de Datos
-- ---
-- Pone en uso la base de datos recién creada para ejecutar las
-- siguientes instrucciones de creación de tablas en ella.
USE apafa_tarjetaasis;


-- ---
-- 3. Creación de la Tabla `registrations`
-- ---
-- Almacena la información principal de cada registro, incluyendo
-- los datos del alumno y del apoderado.
CREATE TABLE `registrations` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `control_card` VARCHAR(50) NOT NULL,
    `student_grade` VARCHAR(50),
    `student_section` VARCHAR(50),
    `student_level` VARCHAR(50),
    `student_shift` VARCHAR(50),
    `parent_name` VARCHAR(255) NOT NULL,
    `parent_dni` VARCHAR(20) NOT NULL,
    `parent_phone` VARCHAR(20),
    `observations` TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX `idx_parent_dni` (`parent_dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- ---
-- 4. Creación de la Tabla `attendance`
-- ---
-- Almacena cada marca de asistencia individualmente, vinculada a
-- un registro principal.
CREATE TABLE `attendance` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `registration_id` INT(11) NOT NULL,
    `event_block` VARCHAR(100) NOT NULL COMMENT 'Identificador de la tabla de asistencia (ej: asambleas_manana)',
    `event_index` INT(2) NOT NULL COMMENT 'La posición de la celda en la tabla (0-8)',
    `status` INT(1) NOT NULL COMMENT '1 para Asistió (A), 0 para Faltó (F)',

    -- Crea una relación con la tabla de registros.
    -- ON DELETE CASCADE asegura que si se borra un registro, sus asistencias se borran automáticamente.
    FOREIGN KEY (`registration_id`) REFERENCES `registrations`(`id`) ON DELETE CASCADE,

    -- Asegura que no se pueda marcar la misma asistencia dos veces para la misma persona y evento.
    UNIQUE KEY `unique_attendance` (`registration_id`, `event_block`, `event_index`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ---
-- 5. Creación de la Tabla `usuario`
-- ---
-- Almacena los usuarios del sistema para el control de acceso.
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ---
-- 6. Inserción de Usuario Administrador Inicial
-- ---
-- Inserta un usuario predeterminado: admin / admin123 (md5: 0192023a7bbd73250516f069df18b500)
INSERT INTO `usuario` (`nombre`, `correo`, `usuario`, `clave`)
SELECT 'Administrador', 'admin@correo.com', 'admin', '0192023a7bbd73250516f069df18b500'
WHERE NOT EXISTS (SELECT 1 FROM `usuario` WHERE `usuario` = 'admin');

-- ---
-- Fin del script
-- ---
