<?php
require_once __DIR__ . '/includes/functions.php';

$pageTitle = "Seguimiento de Pedidos - SIS CandeWeb Botica Cusco";
$codigo = trim($_GET['codigo'] ?? '');
$pedido = null;
$error = '';

if (!empty($codigo)) {
    $stmt = $pdo->prepare("SELECT * FROM pedidos WHERE codigo_pedido = ?");
    $stmt->execute([$codigo]);
    $pedido = $stmt->fetch();
    if (!$pedido) {
        $error = "No encontramos ningún pedido con el número proporcionado.";
    }
}

// Estados secuenciales
$estados = ['Pendiente', 'Pagado', 'En proceso', 'Enviado', 'Entregado'];
$currentIndex = $pedido ? array_search($pedido['estado_pedido'], $estados) : -1;

require_once __DIR__ . '/includes/header.php';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 mb-4 text-center">
                <h3 class="fw-bold mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i>Seguimiento en Vivo de Pedido</h3>
                <p class="text-muted small">Ingresa el código que recibiste al completar tu compra (ej: PED-2025-00001)</p>

                <form method="GET" action="seguimiento.php" class="d-flex gap-2 mx-auto my-3" style="max-width: 450px;">
                    <input type="text" name="codigo" class="form-control text-uppercase" placeholder="PED-2025-XXXXX" value="<?= e($codigo) ?>" required>
                    <button type="submit" class="btn btn-primary px-4 fw-bold">Consultar</button>
                </form>

                <?php if ($error): ?>
                    <div class="alert alert-warning py-2 small"><?= e($error) ?></div>
                <?php endif; ?>
            </div>

            <?php if ($pedido): ?>
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                    <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                        <div>
                            <span class="small text-muted">Pedido:</span>
                            <h4 class="fw-bold text-primary mb-0"><?= e($pedido['codigo_pedido']) ?></h4>
                        </div>
                        <div class="text-end">
                            <span class="small text-muted">Estado Actual:</span>
                            <div>
                                <span class="badge bg-<?= $pedido['estado_pedido'] === 'Cancelado' ? 'danger' : 'success' ?> fs-6">
                                    <?= e($pedido['estado_pedido']) ?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <?php if ($pedido['estado_pedido'] !== 'Cancelado'): ?>
                        <!-- Stepper Timeline -->
                        <div class="d-flex justify-content-between my-4 position-relative">
                            <?php foreach ($estados as $index => $est):
                                $isCompleted = $currentIndex !== false && $index <= $currentIndex;
                                $isActive = $currentIndex !== false && $index === $currentIndex;
                            ?>
                                <div class="stepper-item <?= $isCompleted ? 'completed' : '' ?> <?= $isActive ? 'active' : '' ?>">
                                    <div class="stepper-counter">
                                        <?php if ($isCompleted): ?>
                                            <i class="bi bi-check-lg"></i>
                                        <?php else: ?>
                                            <?= $index + 1 ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="small fw-semibold mt-2 text-center"><?= $est ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-danger">Este pedido fue cancelado. Comunícate con atención al cliente si tienes dudas.</div>
                    <?php endif; ?>

                    <div class="bg-light p-3 rounded-4 mt-4 small">
                        <div class="row g-2">
                            <div class="col-sm-6"><strong>Destinatario:</strong> <?= e($pedido['nombre_cliente']) ?></div>
                            <div class="col-sm-6"><strong>Teléfono:</strong> <?= e($pedido['telefono_cliente']) ?></div>
                            <div class="col-sm-6"><strong>Destino:</strong> <?= e($pedido['direccion_envio']) ?> (<?= e($pedido['ciudad_envio']) ?>)</div>
                            <div class="col-sm-6"><strong>Método de Entrega:</strong> <?= ucfirst($pedido['metodo_envio']) ?></div>
                            <?php if (!empty($pedido['empresa_courier'])): ?>
                                <div class="col-sm-6"><strong>Empresa Courier:</strong> <?= e($pedido['empresa_courier']) ?></div>
                            <?php endif; ?>
                            <?php if (!empty($pedido['numero_guia'])): ?>
                                <div class="col-sm-6"><strong>N° de Guía de Envío:</strong> <span class="badge bg-dark"><?= e($pedido['numero_guia']) ?></span></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
