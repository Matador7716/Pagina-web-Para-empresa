-- Base de datos para el sistema "SIS CandeWeb Ventas"
-- Nombre de la BD: bdboticacusco
CREATE DATABASE IF NOT EXISTS `bdboticacusco` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `bdboticacusco`;

-- 1. Tabla de Configuración del Sistema
DROP TABLE IF EXISTS `configuracion`;
CREATE TABLE `configuracion` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `clave` VARCHAR(50) NOT NULL UNIQUE,
  `valor` TEXT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `configuracion` (`clave`, `valor`) VALUES
('empresa_nombre', 'SIS CandeWeb Ventas - Botica Cusco'),
('empresa_ruc', '20601234567'),
('empresa_direccion', 'Av. De la Cultura 780, Wanchaq, Cusco'),
('empresa_telefono', '+51 984 765 432'),
('empresa_whatsapp', '51984765432'),
('empresa_email', 'contacto@boticacusco.pe'),
('moneda_simbolo', 'S/.'),
('igv_porcentaje', '18.00'),
('costo_envio_local', '8.00'),
('costo_envio_nacional', '18.00');

-- 2. Tabla de Usuarios (Administrador, Vendedores, Clientes)
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(100) NOT NULL,
  `apellido` VARCHAR(100) NOT NULL,
  `email` VARCHAR(150) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `telefono` VARCHAR(20) NULL,
  `direccion` VARCHAR(255) NULL,
  `ciudad` VARCHAR(100) DEFAULT 'Cusco',
  `rol` ENUM('admin', 'vendedor', 'cliente') DEFAULT 'cliente',
  `estado` ENUM('activo', 'inactivo') DEFAULT 'activo',
  `token_recuperacion` VARCHAR(100) NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Usuarios de prueba (Contraseña: Admin123!)
-- Hash BCRYPT de 'Admin123!'
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `telefono`, `direccion`, `ciudad`, `rol`, `estado`) VALUES
(1, 'Administrador', 'CandeWeb', 'admin@boticacusco.pe', '$2y$10$xVihTr9H0kRdbuVmf50OZuEBlZI3Tmy259JRny5AY3a2zzpF4CPJW', '+51 984 765 432', 'Av. El Sol 450, Cusco', 'Cusco', 'admin', 'activo'),
(2, 'Juan', 'Pérez', 'cliente@gmail.com', '$2y$10$xVihTr9H0kRdbuVmf50OZuEBlZI3Tmy259JRny5AY3a2zzpF4CPJW', '+51 984 112 233', 'Av. Cultura 120, Wanchaq', 'Cusco', 'cliente', 'activo');

-- 3. Categorías y Subcategorías
DROP TABLE IF EXISTS `subcategorias`;
DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(100) NOT NULL,
  `slug` VARCHAR(120) NOT NULL UNIQUE,
  `descripcion` TEXT NULL,
  `icono` VARCHAR(50) DEFAULT 'bi-capsule',
  `estado` ENUM('activo', 'inactivo') DEFAULT 'activo',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `subcategorias` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `categoria_id` INT NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `slug` VARCHAR(120) NOT NULL,
  `estado` ENUM('activo', 'inactivo') DEFAULT 'activo',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`categoria_id`) REFERENCES `categorias`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `categorias` (`id`, `nombre`, `slug`, `icono`) VALUES
(1, 'Medicamentos y Fármacos', 'medicamentos-farmacos', 'bi-capsule'),
(2, 'Cuidado Personal y Belleza', 'cuidado-personal-belleza', 'bi-heart-pulse'),
(3, 'Vitaminas y Suplementos', 'vitaminas-suplementos', 'bi-shield-plus'),
(4, 'Mamá y Bebé', 'mama-bebe', 'bi-balloon'),
(5, 'Dispositivos Médicos y Primeros Auxilios', 'dispositivos-primeros-auxilios', 'bi-hospital');

INSERT INTO `subcategorias` (`categoria_id`, `nombre`, `slug`) VALUES
(1, 'Analgésicos y Antiinflamatorios', 'analgesicos-antiinflamatorios'),
(1, 'Antibióticos', 'antibioticos'),
(1, 'Gripe y Respiratorios', 'gripe-respiratorios'),
(2, 'Cuidado de la Piel', 'cuidado-piel'),
(2, 'Higiene Bucal', 'higiene-bucal'),
(3, 'Multivitamínicos', 'multivitaminicos'),
(3, 'Colágeno y Articulaciones', 'colageno-articulaciones'),
(4, 'Fórmulas y Papillas', 'formulas-papillas'),
(4, 'Pañales y Toallitas', 'panales-toallitas'),
(5, 'Tensiómetros y Oxímetros', 'tensiometros-oximetros'),
(5, 'Gasas, Alcohol y Curitas', 'gasas-alcohol-curitas');

-- 4. Proveedores
DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE `proveedores` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `ruc` VARCHAR(20) NOT NULL UNIQUE,
  `razon_social` VARCHAR(150) NOT NULL,
  `contacto` VARCHAR(100) NULL,
  `telefono` VARCHAR(20) NULL,
  `email` VARCHAR(100) NULL,
  `direccion` VARCHAR(255) NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `proveedores` (`ruc`, `razon_social`, `contacto`, `telefono`, `email`, `direccion`) VALUES
('20100017491', 'Droguería Farmacéutica del Sur S.A.C.', 'Carlos Mendoza', '+51 984 554 433', 'ventas@farmasur.pe', 'Parque Industrial A-12, Cusco'),
('20512398711', 'Distribuidora Médica Andina E.I.R.L.', 'Elena Quispe', '+51 984 887 766', 'pedidos@medandina.pe', 'Av. Huancaro 500, Santiago, Cusco');

-- 5. Productos
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `categoria_id` INT NOT NULL,
  `subcategoria_id` INT NULL,
  `proveedor_id` INT NULL,
  `codigo_barra` VARCHAR(50) NULL UNIQUE,
  `nombre` VARCHAR(200) NOT NULL,
  `slug` VARCHAR(220) NOT NULL UNIQUE,
  `marca` VARCHAR(100) NOT NULL,
  `descripcion_corta` VARCHAR(255) NULL,
  `descripcion` TEXT NULL,
  `precio_compra` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  `precio_venta` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  `precio_descuento` DECIMAL(10,2) NULL,
  `stock` INT NOT NULL DEFAULT 0,
  `stock_minimo` INT NOT NULL DEFAULT 5,
  `lote` VARCHAR(50) NULL,
  `fecha_vencimiento` DATE NULL,
  `registro_sanitario` VARCHAR(100) NULL,
  `requiere_receta` TINYINT(1) DEFAULT 0,
  `imagen_principal` VARCHAR(255) DEFAULT 'assets/images/default-product.png',
  `galeria_imagenes` TEXT NULL,
  `video_url` VARCHAR(255) NULL,
  `destacado` TINYINT(1) DEFAULT 0,
  `estado` ENUM('activo', 'inactivo') DEFAULT 'activo',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (`categoria_id`) REFERENCES `categorias`(`id`),
  FOREIGN KEY (`subcategoria_id`) REFERENCES `subcategorias`(`id`) ON DELETE SET NULL,
  FOREIGN KEY (`proveedor_id`) REFERENCES `proveedores`(`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `productos` (`id`, `categoria_id`, `subcategoria_id`, `proveedor_id`, `codigo_barra`, `nombre`, `slug`, `marca`, `descripcion_corta`, `descripcion`, `precio_compra`, `precio_venta`, `precio_descuento`, `stock`, `stock_minimo`, `lote`, `fecha_vencimiento`, `registro_sanitario`, `requiere_receta`, `imagen_principal`, `destacado`) VALUES
(1, 1, 1, 1, '7750123456789', 'Panadol Antigripal NF Caja x 24 Tabletas', 'panadol-antigripal-nf-caja-24-tabletas', 'GSK', 'Alivio rápido de la congestión nasal, fiebre y malestar.', 'Panadol Antigripal NF combate los principales síntomas de la gripe y resfriado común como dolor de cabeza, dolor de garganta, congestión nasal y fiebre.', 18.50, 28.00, 24.50, 45, 10, 'LT-9821', '2027-08-30', 'EE-04512-DIGEMID', 0, 'assets/images/products/panadol.jpg', 1),
(2, 1, 1, 1, '7750123456790', 'Bismutol Suspensión Frasco 150 ml', 'bismutol-suspension-150ml', 'Medifarma', 'Protector gástrico y alivio de acidez e indigestión.', 'Bismutol subsalicilato de bismuto está indicado para el tratamiento de diarreas inespecíficas, malestar estomacal, acidez y náuseas.', 14.00, 22.00, NULL, 30, 8, 'LT-3301', '2027-04-15', 'EN-01284-DIGEMID', 0, 'assets/images/products/bismutol.jpg', 1),
(3, 5, 10, 2, '7750123456791', 'Tensiómetro Digital de Brazo Automático', 'tensiometro-digital-brazo-automatico', 'Omron', 'Medición precisa y digital de la presión arterial con memoria.', 'Tensiómetro digital de alta precisión para medir la presión sistólica, diastólica y pulso en casa. Incluye brazalete universal y pantalla LCD retroiluminada.', 110.00, 175.00, 159.00, 9, 3, 'OM-2025', '2030-12-31', 'DM-09941-DIGEMID', 0, 'assets/images/products/tensiometro.jpg', 1),
(4, 5, 10, 2, '7750123456792', 'Oxímetro de Pulso Digital Fingertip', 'oximetro-pulso-digital-fingertip', 'ChoiceMMed', 'Medidor de saturación de oxígeno SpO2 y frecuencia cardíaca.', 'Oxímetro portátil con pantalla OLED multicolor para control en altitud (ideal para Cusco). Lectura rápida en menos de 5 segundos.', 25.00, 48.00, 39.90, 4, 5, 'OX-8812', '2029-06-30', 'DM-07712-DIGEMID', 0, 'assets/images/products/oximetro.jpg', 1),
(5, 3, 6, 1, '7750123456793', 'Vitamina C + Zinc Efervescente Tubo x 10 Tabletas', 'vitamina-c-zinc-efervescente-10-tabletas', 'Redoxon', 'Refuerza el sistema inmunológico con agradable sabor a naranja.', 'Fórmula avanzada con 1000 mg de Vitamina C y 10 mg de Zinc para potenciar las defensas naturales del cuerpo durante todo el año.', 16.00, 26.50, NULL, 50, 10, 'RX-4410', '2027-11-20', 'DE-03310-DIGEMID', 0, 'assets/images/products/vitamina-c.jpg', 1),
(6, 4, 9, 2, '7750123456794', 'Pañales Huggies Natural Care Talla M x 48 unid.', 'panales-huggies-natural-care-talla-m-48', 'Huggies', 'Máxima absorción y cuidado para la piel delicada del bebé.', 'Pañales con tecnología de absorción superior, barreras antiderrames y materiales respirables para mantener a tu bebé seco y cómodo.', 38.00, 56.00, 49.90, 35, 10, 'HG-1200', '2028-10-01', 'NSOH-0012-DIGEMID', 0, 'assets/images/products/panales.jpg', 1),
(7, 2, 4, 1, '7750123456795', 'Bloqueador Solar SPF 50+ Facial Toque Seco 50ml', 'bloqueador-solar-spf50-facial-toque-seco-50ml', 'La Roche-Posay', 'Protección solar extrema contra rayos UVA/UVB en altura.', 'Protector solar con acabado mate toque seco, ideal para el clima andino y alta radiación de la región de Cusco.', 75.00, 115.00, 105.00, 18, 5, 'LRP-552', '2027-09-30', 'NSOC-44120-PE', 0, 'assets/images/products/bloqueador.jpg', 1),
(8, 1, 2, 1, '7750123456796', 'Amoxicilina 500mg Caja x 30 Cápsulas', 'amoxicilina-500mg-caja-30-capsulas', 'Genfar', 'Antibiótico bactericida de amplio espectro.', 'Tratamiento de infecciones respiratorias, urinarias y dentales. Medicamento sujeto a presentación de receta médica.', 12.00, 20.00, NULL, 28, 8, 'GF-9090', '2027-03-31', 'NG-08812-DIGEMID', 1, 'assets/images/products/amoxicilina.jpg', 0),
(9, 5, 11, 2, '7750123456797', 'Alcohol Medicinal 70° Frasco 1 Litro', 'alcohol-medicinal-70-frasco-1-litro', 'Alkofarma', 'Antiséptico y desinfectante de uso hospitalario y doméstico.', 'Solución de alcohol etílico al 70% para limpieza y desinfección de manos, instrumental y superficies.', 6.50, 12.00, 9.90, 80, 15, 'AL-701', '2029-01-31', 'DS-0291-DIGEMID', 0, 'assets/images/products/alcohol.jpg', 1);

-- 6. Movimientos de Inventario (Kardex)
DROP TABLE IF EXISTS `inventario_movimientos`;
CREATE TABLE `inventario_movimientos` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `producto_id` INT NOT NULL,
  `usuario_id` INT NULL,
  `tipo` ENUM('entrada', 'salida', 'ajuste') NOT NULL,
  `cantidad` INT NOT NULL,
  `stock_anterior` INT NOT NULL,
  `stock_nuevo` INT NOT NULL,
  `motivo` VARCHAR(255) NOT NULL,
  `documento_referencia` VARCHAR(100) NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`producto_id`) REFERENCES `productos`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 7. Cupones de Descuento
DROP TABLE IF EXISTS `cupones`;
CREATE TABLE `cupones` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `codigo` VARCHAR(30) NOT NULL UNIQUE,
  `tipo` ENUM('porcentaje', 'monto_fijo') NOT NULL DEFAULT 'porcentaje',
  `valor` DECIMAL(10,2) NOT NULL,
  `monto_minimo` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  `limite_usos` INT NOT NULL DEFAULT 100,
  `usos_actuales` INT NOT NULL DEFAULT 0,
  `fecha_inicio` DATE NOT NULL,
  `fecha_fin` DATE NULL,
  `estado` ENUM('activo', 'inactivo') DEFAULT 'activo',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cupones` (`codigo`, `tipo`, `valor`, `monto_minimo`, `limite_usos`, `usos_actuales`, `fecha_inicio`, `fecha_fin`, `estado`) VALUES
('BIENVENIDO10', 'porcentaje', 10.00, 30.00, 500, 12, '2025-01-01', '2026-12-31', 'activo'),
('CUSCOSEGURO', 'monto_fijo', 15.00, 80.00, 200, 8, '2025-01-01', '2026-12-31', 'activo');

-- 8. Pedidos / Ventas
DROP TABLE IF EXISTS `pedido_detalles`;
DROP TABLE IF EXISTS `pedidos`;

CREATE TABLE `pedidos` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `codigo_pedido` VARCHAR(30) NOT NULL UNIQUE,
  `usuario_id` INT NULL,
  `tipo_comprobante` ENUM('boleta', 'factura', 'ticket') DEFAULT 'boleta',
  `documento_cliente` VARCHAR(20) NOT NULL,
  `nombre_cliente` VARCHAR(150) NOT NULL,
  `email_cliente` VARCHAR(150) NOT NULL,
  `telefono_cliente` VARCHAR(20) NOT NULL,
  `direccion_envio` VARCHAR(255) NOT NULL,
  `ciudad_envio` VARCHAR(100) DEFAULT 'Cusco',
  `metodo_envio` ENUM('local', 'nacional', 'recojo_tienda') DEFAULT 'local',
  `metodo_pago` ENUM('tarjeta', 'paypal', 'yape', 'plin', 'transferencia', 'efectivo') NOT NULL,
  `estado_pago` ENUM('pendiente', 'pagado', 'rechazado') DEFAULT 'pendiente',
  `comprobante_pago` VARCHAR(255) NULL,
  `estado_pedido` ENUM('Pendiente', 'Pagado', 'En proceso', 'Enviado', 'Entregado', 'Cancelado') DEFAULT 'Pendiente',
  `numero_guia` VARCHAR(100) NULL,
  `empresa_courier` VARCHAR(100) NULL,
  `subtotal` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  `descuento` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  `cupon_codigo` VARCHAR(30) NULL,
  `igv` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  `costo_envio` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  `total` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  `notas` TEXT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `pedido_detalles` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `pedido_id` INT NOT NULL,
  `producto_id` INT NOT NULL,
  `cantidad` INT NOT NULL,
  `precio_unitario` DECIMAL(10,2) NOT NULL,
  `subtotal` DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (`pedido_id`) REFERENCES `pedidos`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`producto_id`) REFERENCES `productos`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `pedidos` (`id`, `codigo_pedido`, `usuario_id`, `tipo_comprobante`, `documento_cliente`, `nombre_cliente`, `email_cliente`, `telefono_cliente`, `direccion_envio`, `ciudad_envio`, `metodo_envio`, `metodo_pago`, `estado_pago`, `estado_pedido`, `subtotal`, `descuento`, `igv`, `costo_envio`, `total`) VALUES
(1, 'PED-2025-00001', 2, 'boleta', '72345678', 'Juan Pérez', 'cliente@gmail.com', '+51 984 112 233', 'Av. Cultura 120, Wanchaq', 'Cusco', 'local', 'yape', 'pagado', 'Entregado', 49.00, 0.00, 7.47, 8.00, 57.00),
(2, 'PED-2025-00002', 2, 'factura', '20123456789', 'Empresa Andina SAC', 'cliente@gmail.com', '+51 984 112 233', 'Calle San Agustín 240', 'Cusco', 'local', 'tarjeta', 'pagado', 'En proceso', 159.00, 10.00, 22.73, 8.00, 157.00);

INSERT INTO `pedido_detalles` (`pedido_id`, `producto_id`, `cantidad`, `precio_unitario`, `subtotal`) VALUES
(1, 1, 2, 24.50, 49.00),
(2, 3, 1, 159.00, 159.00);

-- 9. Lista de Deseos (Wishlist)
DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario_id` INT NOT NULL,
  `producto_id` INT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `user_product_unique` (`usuario_id`, `producto_id`),
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`producto_id`) REFERENCES `productos`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 10. Carrito Guardado para Compras Futuras
DROP TABLE IF EXISTS `carrito_guardado`;
CREATE TABLE `carrito_guardado` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario_id` INT NOT NULL UNIQUE,
  `contenido_json` TEXT NOT NULL,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 11. Notificaciones
DROP TABLE IF EXISTS `notificaciones`;
CREATE TABLE `notificaciones` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `usuario_id` INT NULL,
  `pedido_id` INT NULL,
  `tipo` VARCHAR(50) NOT NULL,
  `titulo` VARCHAR(150) NOT NULL,
  `mensaje` TEXT NOT NULL,
  `canal` ENUM('email', 'whatsapp', 'sistema') DEFAULT 'sistema',
  `leido` TINYINT(1) DEFAULT 0,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`pedido_id`) REFERENCES `pedidos`(`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
