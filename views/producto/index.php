<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
</head>
<body>
    <h1>Gestión de Productos</h1>
    <a href="index.php?controller=dashboard&action=index">Volver al Dashboard</a>
    <a href="index.php?controller=producto&action=formulario">Añadir Nuevo Producto</a>
    <hr>

    <table border="1" style="width:100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Stock</th>
                <th>Precio Compra</th>
                <th>Precio Venta</th>
                <th>Categoría</th>
                <th>Marca</th>
                <th>Presentación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($productos)): ?>
                <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($producto['descripcion']); ?></td>
                        <td><?php echo htmlspecialchars($producto['stock']); ?></td>
                        <td><?php echo htmlspecialchars($producto['precio_compra']); ?></td>
                        <td><?php echo htmlspecialchars($producto['precio_venta']); ?></td>
                        <td><?php echo htmlspecialchars($producto['categoria']); ?></td>
                        <td><?php echo htmlspecialchars($producto['marca']); ?></td>
                        <td><?php echo htmlspecialchars($producto['presentacion']); ?></td>
                        <td>
                            <a href="index.php?controller=producto&action=formulario&id=<?php echo $producto['id_producto']; ?>">Editar</a>
                            <a href="index.php?controller=producto&action=eliminar&id=<?php echo $producto['id_producto']; ?>" onclick="return confirm('¿Estás seguro de que quieres eliminar este producto?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="9">No hay productos registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
