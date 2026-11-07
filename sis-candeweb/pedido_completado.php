<?php
require_once __DIR__ . '/includes/functions.php';

$codigo = trim($_GET['codigo'] ?? '');
if (empty($codigo)) {
    header('Location: index.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM pedidos WHERE codigo_pedido = ?");
$stmt->execute([$codigo]);
$pedido = $stmt->fetch();

if (!$pedido) {
    header('Location: index.php');
    exit;
}

$detStmt = $pdo->prepare("SELECT d.*, p.nombre, p.imagen_principal FROM pedido_detalles d JOIN productos p ON d.producto_id = p.id WHERE d.pedido_id = ?");
$detStmt->execute([$pedido['id']]);
$detalles = $detStmt->fetchAll();

$pageTitle = "¡Pedido Confirmado! - " . e($pedido['codigo_pedido']);
require_once __DIR__ . '/includes/header.php';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 text-center mb-4">
                <div class="mb-3">
                    <span class="badge bg-success text-white p-3 rounded-circle fs-1 shadow">
                        <i class="bi bi-check-lg"></i>
                    </span>
                </div>
                <h2 class="fw-bold text-success mb-2">¡Gracias por tu compra!</h2>
                <p class="text-muted">Tu pedido ha sido registrado exitosamente en <strong>SIS CandeWeb Ventas</strong>.</p>

                <div class="bg-light p-4 rounded-4 my-4 text-start">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <small class="text-muted d-block">Número de Pedido:</small>
                            <span class="fs-5 fw-bold text-primary"><?= e($pedido['codigo_pedido']) ?></span>
                        </div>
                        <div class="col-sm-6">
                            <small class="text-muted d-block">Estado del Pedido:</small>
                            <span class="badge bg-info text-dark fs-6"><?= e($pedido['estado_pedido']) ?></span>
                        </div>
                        <div class="col-sm-6">
                            <small class="text-muted d-block">Cliente:</small>
                            <strong><?= e($pedido['nombre_cliente']) ?></strong> (<?= e($pedido['documento_cliente']) ?>)
                        </div>
                        <div class="col-sm-6">
                            <small class="text-muted d-block">Total Pagado / a Pagar:</small>
                            <strong class="fs-5 text-dark">S/. <?= number_format($pedido['total'], 2) ?></strong>
                        </div>
                        <div class="col-12">
                            <small class="text-muted d-block">Dirección de Entrega:</small>
                            <span><?= e($pedido['direccion_envio']) ?>, <?= e($pedido['ciudad_envio']) ?></span>
                        </div>
                    </div>
                </div>

                <div class="text-start mb-4">
                    <h6 class="fw-bold mb-3">Detalle de Productos:</h6>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <tbody>
                                <?php foreach ($detalles as $d): ?>
                                    <tr>
                                        <td><?= e($d['nombre']) ?></td>
                                        <td class="text-center"><?= $d['cantidad'] ?>x</td>
                                        <td class="text-end">S/. <?= number_format($d['subtotal'], 2) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="seguimiento.php?codigo=<?= urlencode($pedido['codigo_pedido']) ?>" class="btn btn-primary rounded-pill px-4">
                        <i class="bi bi-truck me-2"></i> Seguir mi Pedido
                    </a>
                    <a href="https://wa.me/<?= e($sysConfig['empresa_whatsapp'] ?? '51984765432') ?>?text=Hola,%20acabo%20de%20realizar%20el%20pedido%20<?= urlencode($pedido['codigo_pedido']) ?>%20por%20S/.%20<?= number_format($pedido['total'], 2) ?>" target="_blank" class="btn btn-outline-success rounded-pill px-4">
                        <i class="bi bi-whatsapp me-2"></i> Confirmar por WhatsApp
                    </a>
                    <a href="index.php" class="btn btn-outline-secondary rounded-pill px-4">
                        Volver a la Tienda
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
