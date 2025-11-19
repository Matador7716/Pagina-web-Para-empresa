<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos - Sistema de Farmacia</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Gestión de Productos</h2>
        <?php require_once __DIR__ . '/../partials/_messages.php'; ?>
        <form action="index.php" method="get">
            <input type="hidden" name="action" value="products">
            <input type="text" name="search" placeholder="Buscar por nombre, SKU o laboratorio">
            <button type="submit">Buscar</button>
        </form>
        <a href="index.php?action=product_create">Crear Nuevo Producto</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>SKU</th>
                    <th>Categoría</th>
                    <th>Precio Venta</th>
                    <th>Stock</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?php echo $product->id; ?></td>
                        <td><?php echo $product->nombre; ?></td>
                        <td><?php echo $product->sku; ?></td>
                        <td><?php echo $product->categoria; ?></td>
                        <td><?php echo $product->precio_venta; ?></td>
                        <td><?php echo $product->stock; ?></td>
                        <td><?php echo $product->estado; ?></td>
                        <td>
                            <a href="index.php?action=product_edit&id=<?php echo $product->id; ?>">Editar</a>
                            <form action="index.php?action=product_delete&id=<?php echo $product->id; ?>" method="post" style="display:inline;">
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
