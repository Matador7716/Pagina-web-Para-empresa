-- =================================================================
--  Script de Configuración de la Base de Datos
--  Proyecto: Sistema de Citas Médicas - Clínica Psicológica
-- =================================================================

CREATE DATABASE IF NOT EXISTS clinica_psicologia CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE clinica_psicologia;

-- ---
-- 1. Tabla de Usuarios
-- ---
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    usuario VARCHAR(50) UNIQUE NOT NULL,
    clave VARCHAR(255) NOT NULL,
    rol ENUM('administrador', 'secretaria') NOT NULL,
    correo VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- ---
-- 2. Tabla de Pacientes
-- ---
CREATE TABLE IF NOT EXISTS pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    dni VARCHAR(20) UNIQUE NOT NULL,
    telefono VARCHAR(20),
    correo VARCHAR(100),
    direccion TEXT,
    historial_clinico TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- ---
-- 3. Tabla de Citas
-- ---
CREATE TABLE IF NOT EXISTS citas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_paciente INT NOT NULL,
    id_usuario INT NOT NULL,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    estado ENUM('pendiente', 'completada', 'cancelada', 'reprogramada') DEFAULT 'pendiente',
    tipo ENUM('presencial', 'virtual') DEFAULT 'presencial',
    link_videollamada VARCHAR(255),
    notas TEXT,
    FOREIGN KEY (id_paciente) REFERENCES pacientes(id) ON DELETE CASCADE,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
) ENGINE=InnoDB;

-- ---
-- 4. Tabla de Cobros
-- ---
CREATE TABLE IF NOT EXISTS cobros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cita INT NOT NULL,
    monto DECIMAL(10, 2) NOT NULL,
    metodo_pago ENUM('efectivo', 'tarjeta', 'transferencia') NOT NULL,
    estado_pago ENUM('pendiente', 'pagado') DEFAULT 'pendiente',
    fecha_pago DATETIME,
    FOREIGN KEY (id_cita) REFERENCES citas(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---
-- Datos Iniciales
-- ---
-- Admin por defecto: admin / admin123
INSERT IGNORE INTO usuarios (nombre, usuario, clave, rol) VALUES
('Administrador Sistema', 'admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'administrador');
-- Nota: La clave de arriba es un hash de ejemplo, pero se recomienda cambiarla.
