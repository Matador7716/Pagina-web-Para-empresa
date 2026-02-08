CREATE DATABASE IF NOT EXISTS sistema_farmacia;
USE sistema_farmacia;

CREATE TABLE usuarios (
    idusuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    clave VARCHAR(255) NOT NULL,
    rol VARCHAR(20) NOT NULL
);

CREATE TABLE configuracion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ruc VARCHAR(20) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    direccion TEXT NOT NULL
);

CREATE TABLE productos (
    idproducto INT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(50) NOT NULL UNIQUE,
    descripcion VARCHAR(255) NOT NULL,
    precio_compra DECIMAL(10,2) NOT NULL,
    precio_venta DECIMAL(10,2) NOT NULL,
    existencia INT NOT NULL
);

CREATE TABLE clientes (
    idcliente INT AUTO_INCREMENT PRIMARY KEY,
    dni VARCHAR(15) NOT NULL UNIQUE,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    direccion VARCHAR(255)
);

CREATE TABLE ventas (
    idventa INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    id_cliente INT NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES clientes(idcliente),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(idusuario)
);

CREATE TABLE detalle_venta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_venta INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_venta) REFERENCES ventas(idventa),
    FOREIGN KEY (id_producto) REFERENCES productos(idproducto)
);

-- Datos iniciales
INSERT INTO usuarios (nombre, correo, usuario, clave, rol) VALUES
('Admin', 'admin@farmacia.com', 'admin', '$2y$10$sBCEzKSMMZsrSTpO5HzQEu5zx0bWXgmEJHBd6DmU2uVWO/HLTfVJK', 'administrador'); -- clave: admin

INSERT INTO configuracion (ruc, nombre, telefono, correo, direccion) VALUES
('20123456789', 'Farmacia Saludable', '987654321', 'contacto@farmacia.com', 'Av. Salud 123');
