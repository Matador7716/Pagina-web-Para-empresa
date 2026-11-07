<?php
require_once __DIR__ . '/../includes/functions.php';
requireAuth('staff');

$id = (int)($_GET['id'] ?? 0);
$stmt = $pdo->prepare("SELECT * FROM pedidos WHERE id = ?");
$stmt->execute([$id]);
$pedido = $stmt->fetch();

if (!$pedido) {
    die("Comprobante de venta no encontrado.");
}

$detStmt = $pdo->prepare("SELECT d.*, p.nombre, p.codigo_barra FROM pedido_detalles d JOIN productos p ON d.producto_id = p.id WHERE d.pedido_id = ?");
$detStmt->execute([$id]);
$detalles = $detStmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= strtoupper($pedido['tipo_comprobante']) ?> - <?= e($pedido['codigo_pedido']) ?></title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            font-size: 13px;
            color: #000;
            background: #fff;
            margin: 0;
            padding: 20px;
        }
        .ticket-wrapper {
            max-width: 380px;
            margin: auto;
            border: 1px dashed #ccc;
            padding: 15px;
        }
        .text-center { text-align: center; }
        .text-end { text-align: right; }
        .fw-bold { font-weight: bold; }
        hr { border: none; border-top: 1px dashed #000; margin: 10px 0; }
        table { width: 100%; border-collapse: collapse; font-size: 12px; }
        th, td { padding: 4px 0; }
        @media print {
            .no-print { display: none; }
            .ticket-wrapper { border: none; padding: 0; width: 100%; }
        }
    </style>
</head>
<body>

<div class="no-print" style="text-align: center; margin-bottom: 20px;">
    <button onclick="window.print()" style="padding: 10px 20px; font-weight: bold; cursor: pointer; background: #0284c7; color: white; border: none; border-radius: 5px;">
        🖨️ Imprimir Comprobante (PDF / Ticket)
    </button>
</div>

<div class="ticket-wrapper">
    <div class="text-center">
        <h2 style="margin: 0; font-size: 18px; font-weight: bold;">SIS CANDEWEB VENTAS</h2>
        <div>BOTICA CUSCO - FARMACIA & SALUD</div>
        <div>RUC: <?= e($sysConfig['empresa_ruc'] ?? '20601234567') ?></div>
        <div><?= e($sysConfig['empresa_direccion'] ?? 'Av. De la Cultura 780, Cusco') ?></div>
        <div>Tel: <?= e($sysConfig['empresa_telefono'] ?? '+51 984 765 432') ?></div>
    </div>

    <hr>

    <div class="text-center fw-bold" style="font-size: 14px;">
        <?= strtoupper($pedido['tipo_comprobante']) ?> ELECTRÓNICA
    </div>
    <div class="text-center fw-bold">
        N°: <?= e($pedido['codigo_pedido']) ?>
    </div>

    <hr>

    <div><strong>Fecha Emisión:</strong> <?= date('d/m/Y H:i:s', strtotime($pedido['created_at'])) ?></div>
    <div><strong>Cliente:</strong> <?= e($pedido['nombre_cliente']) ?></div>
    <div><strong>Doc / RUC:</strong> <?= e($pedido['documento_cliente']) ?></div>
    <div><strong>Dirección:</strong> <?= e($pedido['direccion_envio']) ?></div>
    <div><strong>Forma Pago:</strong> <?= strtoupper($pedido['metodo_pago']) ?></div>

    <hr>

    <table>
        <thead>
            <tr>
                <th style="text-align: left;">DESCRIPCIÓN</th>
                <th style="text-align: center;">CANT</th>
                <th class="text-end">P.UNIT</th>
                <th class="text-end">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($detalles as $d): ?>
                <tr>
                    <td colspan="4" style="padding-top: 6px;"><strong><?= e($d['nombre']) ?></strong></td>
                </tr>
                <tr>
                    <td><?= e($d['codigo_barra'] ?? '') ?></td>
                    <td style="text-align: center;"><?= $d['cantidad'] ?></td>
                    <td class="text-end">S/. <?= number_format($d['precio_unitario'], 2) ?></td>
                    <td class="text-end">S/. <?= number_format($d['subtotal'], 2) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <hr>

    <table>
        <tr>
            <td>OP. GRAVADA:</td>
            <td class="text-end">S/. <?= number_format($pedido['subtotal'] - $pedido['igv'], 2) ?></td>
        </tr>
        <tr>
            <td>IGV (18%):</td>
            <td class="text-end">S/. <?= number_format($pedido['igv'], 2) ?></td>
        </tr>
        <?php if ($pedido['descuento'] > 0): ?>
            <tr>
                <td>DESCUENTO:</td>
                <td class="text-end">-S/. <?= number_format($pedido['descuento'], 2) ?></td>
            </tr>
        <?php endif; ?>
        <?php if ($pedido['costo_envio'] > 0): ?>
            <tr>
                <td>ENVÍO DELIVERY:</td>
                <td class="text-end">S/. <?= number_format($pedido['costo_envio'], 2) ?></td>
            </tr>
        <?php endif; ?>
        <tr style="font-size: 15px; font-weight: bold;">
            <td>TOTAL A PAGAR:</td>
            <td class="text-end">S/. <?= number_format($pedido['total'], 2) ?></td>
        </tr>
    </table>

    <hr>

    <div class="text-center" style="font-size: 11px;">
        <div>¡Gracias por su preferencia!</div>
        <div>Representación impresa de la <?= ucfirst($pedido['tipo_comprobante']) ?> Electrónica.</div>
        <div>Consulte su validez en www.boticacusco.pe</div>
    </div>
</div>

</body>
</html>
