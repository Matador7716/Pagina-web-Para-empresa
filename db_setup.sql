CREATE DATABASE IF NOT EXISTS candela_web;
USE candela_web;

CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    subject VARCHAR(200),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    description TEXT,
    image_url VARCHAR(255),
    project_link VARCHAR(255),
    category VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    description TEXT,
    image_url VARCHAR(255),
    price DECIMAL(10, 2),
    category VARCHAR(50)
);

-- Insert some sample data
INSERT INTO projects (title, description, image_url, project_link, category) VALUES
('E-commerce de Ropa', 'Tienda online completa con pasarela de pagos.', 'images/project1.jpg', '#', 'web'),
('Sistema de Inventario', 'Gestión de stock para ferreterías.', 'images/project2.jpg', '#', 'desktop');

INSERT INTO courses (title, description, image_url, price, category) VALUES
('Diseño de páginas web', 'Aprende desde cero a crear sitios profesionales.', 'images/course1.jpg', 0.00, 'web'),
('Curso de PHP', 'Domina el lenguaje del lado del servidor.', 'images/course2.jpg', 0.00, 'programming'),
('Curso de HTML y CSS', 'Fundamentos esenciales para la web moderna.', 'images/course3.jpg', 0.00, 'web'),
('Curso de OFIMÁTICA', 'Productividad con herramientas de oficina.', 'images/course4.jpg', 0.00, 'office'),
('Cursos de cómputo general', 'Conceptos básicos y avanzados de computación.', 'images/course5.jpg', 0.00, 'it');
