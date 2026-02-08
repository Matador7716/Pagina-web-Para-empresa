<?php
include_once "../../conexion.php";
$id_venta = (int)$_GET['id'];
$query_config = mysqli_query($conexion, "SELECT * FROM configuracion");
$config = mysqli_fetch_assoc($query_config);

$stmt_venta = mysqli_prepare($conexion, "SELECT v.*, c.nombre as cliente, c.dni, c.telefono, c.direccion, u.nombre as vendedor
    FROM ventas v
    INNER JOIN clientes c ON v.cliente_id = c.id
    INNER JOIN usuarios u ON v.usuario_id = u.id
    WHERE v.id = ?");
mysqli_stmt_bind_param($stmt_venta, "i", $id_venta);
mysqli_stmt_execute($stmt_venta);
$venta = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt_venta));

$stmt_det = mysqli_prepare($conexion, "SELECT d.*, p.nombre
    FROM detalle_ventas d
    INNER JOIN productos p ON d.producto_id = p.id
    WHERE d.venta_id = ?");
mysqli_stmt_bind_param($stmt_det, "i", $id_venta);
mysqli_stmt_execute($stmt_det);
$detalle = mysqli_stmt_get_result($stmt_det);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comprobante de Venta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            width: 80mm;
            margin: 0;
            padding: 5mm;
        }
        .header {
            text-align: center;
            margin-bottom: 10px;
        }
        .info-empresa {
            font-size: 12px;
        }
        .info-venta {
            font-size: 11px;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 10px;
        }
        th {
            border-bottom: 1px dashed #000;
            text-align: left;
        }
        td {
            padding: 2px 0;
        }
        .total {
            text-align: right;
            font-weight: bold;
            font-size: 12px;
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            font-size: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body onload="window.print();">
    <div class="header">
        <strong><?php echo $config['nombre']; ?></strong><br>
        <span class="info-empresa">
            RUC: <?php echo $config['ruc']; ?><br>
            Tel: <?php echo $config['telefono']; ?><br>
            <?php echo $config['correo']; ?>
        </span>
    </div>
    <div class="info-venta">
        <hr>
        <strong><?php echo strtoupper($venta['tipo']); ?> N° <?php echo $id_venta; ?></strong><br>
        Fecha: <?php echo $venta['fecha']; ?><br>
        Cliente: <?php echo $venta['cliente']; ?><br>
        DNI: <?php echo $venta['dni']; ?><br>
        Vendedor: <?php echo $venta['vendedor']; ?>
        <hr>
    </div>
    <table>
        <thead>
            <tr>
                <th>Cant.</th>
                <th>Producto</th>
                <th>P. Unit</th>
                <th>Sub</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($detalle)) { ?>
                <tr>
                    <td><?php echo $row['cantidad']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><?php echo $row['subtotal']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="total">
        TOTAL: S/ <?php echo number_format($venta['total'], 2); ?>
    </div>
    <div class="footer">
        Gracias por su compra!<br>
        FERRETERIA CANDELAWEB
    </div>
</body>
</html>
