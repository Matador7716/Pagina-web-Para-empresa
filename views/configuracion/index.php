<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración de la Empresa</title>
</head>
<body>
    <h1>Configuración de la Empresa</h1>
    <a href="index.php?controller=dashboard&action=index">Volver al Dashboard</a>
    <hr>

    <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
        <p style="color: green;">¡Configuración guardada exitosamente!</p>
    <?php elseif (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
        <p style="color: red;">Error al guardar la configuración.</p>
    <?php endif; ?>

    <form action="index.php?controller=configuracion&action=guardar" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="logo_actual" value="<?php echo htmlspecialchars($config['logo'] ?? ''); ?>">
        <fieldset>
            <legend>Datos Generales</legend>
            <p>
                <label for="nombre">Nombre de la Empresa:</label><br>
                <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($config['nombre'] ?? ''); ?>" required>
            </p>
            <p>
                <label for="ruc">RUC:</label><br>
                <input type="text" id="ruc" name="ruc" value="<?php echo htmlspecialchars($config['ruc'] ?? ''); ?>" required>
            </p>
            <p>
                <label for="direccion">Dirección:</label><br>
                <textarea id="direccion" name="direccion" rows="3"><?php echo htmlspecialchars($config['direccion'] ?? ''); ?></textarea>
            </p>
            <p>
                <label for="telefono">Teléfono:</label><br>
                <input type="tel" id="telefono" name="telefono" value="<?php echo htmlspecialchars($config['telefono'] ?? ''); ?>">
            </p>
            <p>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($config['email'] ?? ''); ?>">
            </p>
            <p>
                <label for="logo">Logo:</label><br>
                <input type="file" id="logo" name="logo">
                <?php if (!empty($config['logo'])): ?>
                    <img src="public/uploads/<?php echo htmlspecialchars($config['logo']); ?>" alt="Logo Actual" width="100">
                <?php endif; ?>
            </p>
        </fieldset>

        <fieldset>
            <legend>Parámetros Financieros</legend>
            <p>
                <label for="simbolo_moneda">Símbolo de Moneda:</label><br>
                <input type="text" id="simbolo_moneda" name="simbolo_moneda" value="<?php echo htmlspecialchars($config['simbolo_moneda'] ?? ''); ?>" placeholder="Ej: $">
            </p>
            <p>
                <label for="nombre_impuesto">Nombre del Impuesto:</label><br>
                <input type="text" id="nombre_impuesto" name="nombre_impuesto" value="<?php echo htmlspecialchars($config['nombre_impuesto'] ?? ''); ?>" placeholder="Ej: IVA">
            </p>
            <p>
                <label for="porcentaje_impuesto">Porcentaje del Impuesto (%):</label><br>
                <input type="number" step="0.01" id="porcentaje_impuesto" name="porcentaje_impuesto" value="<?php echo htmlspecialchars($config['porcentaje_impuesto'] ?? ''); ?>">
            </p>
        </fieldset>

        <br>
        <button type="submit">Guardar Configuración</button>
    </form>
</body>
</html>
