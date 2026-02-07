<?php
require_once "../../conexion.php";
$id_venta = $_GET['id'];

// Get company data
$config = mysqli_query($conexion, "SELECT * FROM configuracion LIMIT 1");
$data_config = mysqli_fetch_assoc($config);

// Get sale data
$venta_q = mysqli_prepare($conexion, "SELECT v.*, c.nombre, c.dni, c.telefono, c.direccion FROM ventas v INNER JOIN clientes c ON v.id_cliente = c.idcliente WHERE v.idventa = ?");
mysqli_stmt_bind_param($venta_q, "i", $id_venta);
mysqli_stmt_execute($venta_q);
$data_venta = mysqli_fetch_assoc(mysqli_stmt_get_result($venta_q));

// Get details
$detalles_q = mysqli_prepare($conexion, "SELECT d.*, p.descripcion FROM detalle_venta d INNER JOIN productos p ON d.id_producto = p.idproducto WHERE d.id_venta = ?");
mysqli_stmt_bind_param($detalles_q, "i", $id_venta);
mysqli_stmt_execute($detalles_q);
$detalles = mysqli_stmt_get_result($detalles_q);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ticket de Venta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            width: 80mm;
            margin: 0 auto;
            padding: 10px;
        }
        .text-center { text-align: center; }
        .text-right { text-align: right; }
        .bold { font-weight: bold; }
        .divider { border-top: 1px dashed #000; margin: 5px 0; }
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; }
    </style>
</head>
<body onload="window.print();">
    <div class="text-center">
        <span class="bold" style="font-size: 16px;"><?php echo $data_config['nombre']; ?></span><br>
        RUC: <?php echo $data_config['ruc']; ?><br>
        <?php echo $data_config['direccion']; ?><br>
        Tel: <?php echo $data_config['telefono']; ?><br>
    </div>
    <div class="divider"></div>
    <div>
        FECHA: <?php echo $data_venta['fecha']; ?><br>
        TICKET: <?php echo str_pad($id_venta, 8, "0", STR_PAD_LEFT); ?><br>
        CLIENTE: <?php echo $data_venta['nombre']; ?><br>
        DNI: <?php echo $data_venta['dni']; ?><br>
    </div>
    <div class="divider"></div>
    <table>
        <thead>
            <tr>
                <th>CANT</th>
                <th>DESCRIPCIÓN</th>
                <th class="text-right">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($detalles)) { ?>
            <tr>
                <td><?php echo $row['cantidad']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>
                <td class="text-right"><?php echo number_format($row['cantidad'] * $row['precio'], 2); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="divider"></div>
    <div class="text-right bold">
        TOTAL S/: <?php echo number_format($data_venta['total'], 2); ?>
    </div>
    <div class="divider"></div>
    <div class="text-center">
        ¡GRACIAS POR SU COMPRA!
    </div>
</body>
</html>
