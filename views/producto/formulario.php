<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $producto ? 'Editar' : 'Crear'; ?> Producto</title>
</head>
<body>
    <h1><?php echo $producto ? 'Editar' : 'Crear'; ?> Producto</h1>
    <a href="index.php?controller=producto&action=index">Volver al Listado</a>
    <hr>

    <form action="index.php?controller=producto&action=guardar" method="POST">
        <input type="hidden" name="id_producto" value="<?php echo $producto['id_producto'] ?? ''; ?>">

        <p>
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($producto['nombre'] ?? ''); ?>" required>
        </p>
        <p>
            <label for="descripcion">Descripción:</label><br>
            <textarea id="descripcion" name="descripcion" rows="3"><?php echo htmlspecialchars($producto['descripcion'] ?? ''); ?></textarea>
        </p>
        <p>
            <label for="stock">Stock:</label><br>
            <input type="number" id="stock" name="stock" value="<?php echo htmlspecialchars($producto['stock'] ?? '0'); ?>" required>
        </p>
        <p>
            <label for="precio_compra">Precio de Compra:</label><br>
            <input type="number" step="0.01" id="precio_compra" name="precio_compra" value="<?php echo htmlspecialchars($producto['precio_compra'] ?? '0.00'); ?>" required>
        </p>
        <p>
            <label for="precio_venta">Precio de Venta:</label><br>
            <input type="number" step="0.01" id="precio_venta" name="precio_venta" value="<?php echo htmlspecialchars($producto['precio_venta'] ?? '0.00'); ?>" required>
        </p>
        <p>
            <label for="fecha_vencimiento">Fecha de Vencimiento (para perecederos):</label><br>
            <input type="date" id="fecha_vencimiento" name="fecha_vencimiento" value="<?php echo htmlspecialchars($producto['fecha_vencimiento'] ?? ''); ?>">
        </p>
        <p>
            <label for="id_categoria">Categoría:</label><br>
            <select id="id_categoria" name="id_categoria" required>
                <option value="">-- Seleccione --</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?php echo $categoria['id_categoria']; ?>" <?php echo (isset($producto) && $producto['id_categoria'] == $categoria['id_categoria']) ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($categoria['nombre']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label for="id_marca">Marca:</label><br>
            <select id="id_marca" name="id_marca" required>
                <option value="">-- Seleccione --</option>
                <?php foreach ($marcas as $marca): ?>
                    <option value="<?php echo $marca['id_marca']; ?>" <?php echo (isset($producto) && $producto['id_marca'] == $marca['id_marca']) ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($marca['nombre']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label for="id_presentacion">Presentación:</label><br>
            <select id="id_presentacion" name="id_presentacion" required>
                <option value="">-- Seleccione --</option>
                <?php foreach ($presentaciones as $presentacion): ?>
                    <option value="<?php echo $presentacion['id_presentacion']; ?>" <?php echo (isset($producto) && $producto['id_presentacion'] == $presentacion['id_presentacion']) ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($presentacion['nombre']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>

        <br>
        <button type="submit">Guardar Producto</button>
    </form>
</body>
</html>
