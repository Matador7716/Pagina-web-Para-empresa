CREATE TABLE caja (
    id_caja          INT NOT NULL AUTO_INCREMENT,
    nombre           VARCHAR(50) NOT NULL,
    estado           VARCHAR(20) NOT NULL,
    fecha_apertura   DATE NOT NULL,
    monto_inicial    NUMERIC(10, 2) NOT NULL,
    monto_actual     NUMERIC(10, 2) NOT NULL,
    fecha_cierre     DATE NOT NULL,
    id_usuario       INT NOT NULL,
    PRIMARY KEY (id_caja)
);

CREATE TABLE categoria (
    id_categoria   INT NOT NULL AUTO_INCREMENT,
    nombre         VARCHAR(50) NOT NULL,
    descripcion    VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_categoria)
);

CREATE TABLE cliente (
    id_cliente         INT NOT NULL AUTO_INCREMENT,
    nombres            VARCHAR(100) NOT NULL,
    apellidos          VARCHAR(100) NOT NULL,
    sexo               VARCHAR(20) NOT NULL,
    fecha_nacimiento   DATE NOT NULL,
    tipo_documento     VARCHAR(20) NOT NULL,
    num_documento      VARCHAR(20) NOT NULL,
    telefono           VARCHAR(20) NOT NULL,
    direccion          VARCHAR(100) NOT NULL,
    email              VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_cliente)
);

CREATE TABLE compra (
    id_compra           INT NOT NULL AUTO_INCREMENT,
    tipo_comprobante    VARCHAR(20) NOT NULL,
    serie_comprobante   VARCHAR(20) NOT NULL,
    num_comprobante     VARCHAR(20) NOT NULL,
    fecha               DATE NOT NULL,
    total               NUMERIC(10, 2) NOT NULL,
    estado              VARCHAR(20) NOT NULL,
    id_proveedor        INT NOT NULL,
    id_usuario          INT NOT NULL,
    PRIMARY KEY (id_compra)
);

CREATE TABLE configuracion (
    id_configuracion       INT NOT NULL AUTO_INCREMENT,
    nombre                 VARCHAR(100) NOT NULL,
    ruc                    VARCHAR(20) NOT NULL,
    direccion              VARCHAR(100) NOT NULL,
    telefono               VARCHAR(20) NOT NULL,
    email                  VARCHAR(100) NOT NULL,
    logo                   VARCHAR(100) NULL,
    simbolo_moneda         VARCHAR(10) NOT NULL,
    nombre_impuesto        VARCHAR(50) NOT NULL,
    porcentaje_impuesto    NUMERIC(10, 2) NOT NULL,
    PRIMARY KEY (id_configuracion)
);

CREATE TABLE credito_compra (
    id_credito_compra   INT NOT NULL AUTO_INCREMENT,
    fecha_credito       DATE NOT NULL,
    monto_credito       NUMERIC(10, 2) NOT NULL,
    monto_pagado        NUMERIC(10, 2) NOT NULL,
    monto_restante      NUMERIC(10, 2) NOT NULL,
    estado              VARCHAR(20) NOT NULL,
    id_compra           INT NOT NULL,
    PRIMARY KEY (id_credito_compra)
);

CREATE TABLE credito_venta (
    id_credito_venta   INT NOT NULL AUTO_INCREMENT,
    fecha_credito      DATE NOT NULL,
    monto_credito      NUMERIC(10, 2) NOT NULL,
    monto_pagado       NUMERIC(10, 2) NOT NULL,
    monto_restante     NUMERIC(10, 2) NOT NULL,
    estado             VARCHAR(20) NOT NULL,
    id_venta           INT NOT NULL,
    PRIMARY KEY (id_credito_venta)
);

CREATE TABLE detalle_compra (
    id_detalle_compra   INT NOT NULL AUTO_INCREMENT,
    cantidad            INT NOT NULL,
    precio              NUMERIC(10, 2) NOT NULL,
    id_compra           INT NOT NULL,
    id_producto         INT NOT NULL,
    PRIMARY KEY (id_detalle_compra)
);

CREATE TABLE detalle_venta (
    id_detalle_venta   INT NOT NULL AUTO_INCREMENT,
    cantidad           INT NOT NULL,
    precio             NUMERIC(10, 2) NOT NULL,
    id_venta           INT NOT NULL,
    id_producto        INT NOT NULL,
    PRIMARY KEY (id_detalle_venta)
);

CREATE TABLE marca (
    id_marca   INT NOT NULL AUTO_INCREMENT,
    nombre     VARCHAR(50) NOT NULL,
    PRIMARY KEY (id_marca)
);

CREATE TABLE presentacion (
    id_presentacion   INT NOT NULL AUTO_INCREMENT,
    nombre            VARCHAR(50) NOT NULL,
    PRIMARY KEY (id_presentacion)
);

CREATE TABLE producto (
    id_producto         INT NOT NULL AUTO_INCREMENT,
    nombre              VARCHAR(100) NOT NULL,
    descripcion         VARCHAR(200) NOT NULL,
    stock               INT NOT NULL,
    precio_compra       NUMERIC(10, 2) NOT NULL,
    precio_venta        NUMERIC(10, 2) NOT NULL,
    fecha_vencimiento   DATE NULL,
    id_categoria        INT NOT NULL,
    id_marca            INT NOT NULL,
    id_presentacion     INT NOT NULL,
    PRIMARY KEY (id_producto)
);

CREATE TABLE proveedor (
    id_proveedor       INT NOT NULL AUTO_INCREMENT,
    nombres            VARCHAR(100) NOT NULL,
    apellidos          VARCHAR(100) NOT NULL,
    tipo_documento     VARCHAR(20) NOT NULL,
    num_documento      VARCHAR(20) NOT NULL,
    telefono           VARCHAR(20) NOT NULL,
    direccion          VARCHAR(100) NOT NULL,
    email              VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_proveedor)
);

CREATE TABLE usuario (
    id_usuario   INT NOT NULL AUTO_INCREMENT,
    nombre       VARCHAR(50) NOT NULL,
    contrasena   VARCHAR(255) NOT NULL,
    rol          VARCHAR(20) NOT NULL,
    estado       VARCHAR(20) NOT NULL,
    PRIMARY KEY (id_usuario)
);

CREATE TABLE venta (
    id_venta            INT NOT NULL AUTO_INCREMENT,
    tipo_comprobante    VARCHAR(20) NOT NULL,
    serie_comprobante   VARCHAR(20) NOT NULL,
    num_comprobante     VARCHAR(20) NOT NULL,
    fecha               DATE NOT NULL,
    total               NUMERIC(10, 2) NOT NULL,
    estado              VARCHAR(20) NOT NULL,
    id_cliente          INT NOT NULL,
    id_usuario          INT NOT NULL,
    PRIMARY KEY (id_venta)
);

ALTER TABLE caja
    ADD CONSTRAINT caja_usuario_fk FOREIGN KEY ( id_usuario )
        REFERENCES usuario ( id_usuario );

ALTER TABLE compra
    ADD CONSTRAINT compra_proveedor_fk FOREIGN KEY ( id_proveedor )
        REFERENCES proveedor ( id_proveedor );

ALTER TABLE compra
    ADD CONSTRAINT compra_usuario_fk FOREIGN KEY ( id_usuario )
        REFERENCES usuario ( id_usuario );

ALTER TABLE credito_compra
    ADD CONSTRAINT credito_compra_compra_fk FOREIGN KEY ( id_compra )
        REFERENCES compra ( id_compra );

ALTER TABLE credito_venta
    ADD CONSTRAINT credito_venta_venta_fk FOREIGN KEY ( id_venta )
        REFERENCES venta ( id_venta );

ALTER TABLE detalle_compra
    ADD CONSTRAINT detalle_compra_compra_fk FOREIGN KEY ( id_compra )
        REFERENCES compra ( id_compra );

ALTER TABLE detalle_compra
    ADD CONSTRAINT detalle_compra_producto_fk FOREIGN KEY ( id_producto )
        REFERENCES producto ( id_producto );

ALTER TABLE detalle_venta
    ADD CONSTRAINT detalle_venta_producto_fk FOREIGN KEY ( id_producto )
        REFERENCES producto ( id_producto );

ALTER TABLE detalle_venta
    ADD CONSTRAINT detalle_venta_venta_fk FOREIGN KEY ( id_venta )
        REFERENCES venta ( id_venta );

ALTER TABLE producto
    ADD CONSTRAINT producto_categoria_fk FOREIGN KEY ( id_categoria )
        REFERENCES categoria ( id_categoria );

ALTER TABLE producto
    ADD CONSTRAINT producto_marca_fk FOREIGN KEY ( id_marca )
        REFERENCES marca ( id_marca );

ALTER TABLE producto
    ADD CONSTRAINT producto_presentacion_fk FOREIGN KEY ( id_presentacion )
        REFERENCES presentacion ( id_presentacion );

ALTER TABLE venta
    ADD CONSTRAINT venta_cliente_fk FOREIGN KEY ( id_cliente )
        REFERENCES cliente ( id_cliente );

ALTER TABLE venta
    ADD CONSTRAINT venta_usuario_fk FOREIGN KEY ( id_usuario )
        REFERENCES usuario ( id_usuario );
