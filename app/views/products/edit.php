<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto - Sistema de Farmacia</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Editar Producto</h2>
        <?php require_once __DIR__ . '/../partials/_messages.php'; ?>
        <form action="index.php?action=product_edit&id=<?php echo $product->id; ?>" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo $product->nombre; ?>" required>
            </div>
            <div class="form-group">
                <label for="sku">SKU</label>
                <input type="text" name="sku" id="sku" value="<?php echo $product->sku; ?>" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <input type="text" name="categoria" id="categoria" value="<?php echo $product->categoria; ?>">
            </div>
            <div class="form-group">
                <label for="presentacion">Presentación</label>
                <input type="text" name="presentacion" id="presentacion" value="<?php echo $product->presentacion; ?>">
            </div>
            <div class="form-group">
                <label for="laboratorio">Laboratorio</label>
                <input type="text" name="laboratorio" id="laboratorio" value="<?php echo $product->laboratorio; ?>">
            </div>
            <div class="form-group">
                <label for="precio_compra">Precio de Compra</label>
                <input type="number" step="0.01" name="precio_compra" id="precio_compra" value="<?php echo $product->precio_compra; ?>" required>
            </div>
            <div class="form-group">
                <label for="precio_venta">Precio de Venta</label>
                <input type="number" step="0.01" name="precio_venta" id="precio_venta" value="<?php echo $product->precio_venta; ?>" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" value="<?php echo $product->stock; ?>" required>
            </div>
            <div class="form-group">
                <label for="stock_minimo">Stock Mínimo</label>
                <input type="number" name="stock_minimo" id="stock_minimo" value="<?php echo $product->stock_minimo; ?>" required>
            </div>
            <div class="form-group">
                <label for="fecha_vencimiento">Fecha de Vencimiento</label>
                <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" value="<?php echo $product->fecha_vencimiento; ?>" required>
            </div>
            <div class="form-group">
                <label for="lote">Lote</label>
                <input type="text" name="lote" id="lote" value="<?php echo $product->lote; ?>">
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" required>
                    <option value="activo" <?php echo ($product->estado == 'activo') ? 'selected' : ''; ?>>Activo</option>
                    <option value="inactivo" <?php echo ($product->estado == 'inactivo') ? 'selected' : ''; ?>>Inactivo</option>
                </select>
            </div>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>
</html>
