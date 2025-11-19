<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto - Sistema de Farmacia</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Crear Nuevo Producto</h2>
        <?php require_once __DIR__ . '/../partials/_messages.php'; ?>
        <form action="index.php?action=product_create" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="sku">SKU</label>
                <input type="text" name="sku" id="sku" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <input type="text" name="categoria" id="categoria">
            </div>
            <div class="form-group">
                <label for="presentacion">Presentación</label>
                <input type="text" name="presentacion" id="presentacion">
            </div>
            <div class="form-group">
                <label for="laboratorio">Laboratorio</label>
                <input type="text" name="laboratorio" id="laboratorio">
            </div>
            <div class="form-group">
                <label for="precio_compra">Precio de Compra</label>
                <input type="number" step="0.01" name="precio_compra" id="precio_compra" required>
            </div>
            <div class="form-group">
                <label for="precio_venta">Precio de Venta</label>
                <input type="number" step="0.01" name="precio_venta" id="precio_venta" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" required>
            </div>
            <div class="form-group">
                <label for="stock_minimo">Stock Mínimo</label>
                <input type="number" name="stock_minimo" id="stock_minimo" required>
            </div>
            <div class="form-group">
                <label for="fecha_vencimiento">Fecha de Vencimiento</label>
                <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" required>
            </div>
            <div class="form-group">
                <label for="lote">Lote</label>
                <input type="text" name="lote" id="lote">
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
