CREATE DATABASE IF NOT EXISTS bdchatboot;
USE bdchatboot;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    clave VARCHAR(255) NOT NULL,
    rol ENUM('Administrador', 'Supervisor') NOT NULL,
    foto VARCHAR(255) DEFAULT 'default_user.png',
    estado TINYINT(1) DEFAULT 1
);

CREATE TABLE IF NOT EXISTS configuracion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_empresa VARCHAR(100) NOT NULL,
    logo VARCHAR(255) DEFAULT 'default_logo.png',
    whatsapp_numero VARCHAR(20) NOT NULL,
    mensaje_bienvenida TEXT
);

CREATE TABLE IF NOT EXISTS preguntas_frecuentes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pregunta TEXT NOT NULL,
    respuesta TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS chats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_whatsapp VARCHAR(20) NOT NULL,
    mensaje_usuario TEXT NOT NULL,
    respuesta_bot TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert default admin
-- Password is 'admin123'
INSERT INTO usuarios (nombre, usuario, clave, rol) VALUES ('Administrador', 'admin', '$2y$10$wvUpq0NNYOM79pRKYUtTpO2UG2UiUPOsj5EQTS4RewF9ZkDw0KdoK', 'Administrador');

-- Insert initial config
INSERT INTO configuracion (nombre_empresa, whatsapp_numero, mensaje_bienvenida) VALUES ('CHATBOOTWEB', '51935209781', '¡Hola! Soy el asistente virtual de CHATBOOTWEB. ¿En qué puedo ayudarte hoy? 🚀');
