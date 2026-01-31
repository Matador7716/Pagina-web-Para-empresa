<?php
include 'includes/header.php';
include 'includes/sidebar.php';

// Fetch suppliers
$stmt = $pdo->query("SELECT * FROM suppliers ORDER BY name ASC");
$suppliers = $stmt->fetchAll();

// Fetch products
$stmt = $pdo->query("SELECT * FROM products ORDER BY name ASC");
$products = $stmt->fetchAll();

// Fetch recent purchases
$stmt = $pdo->query("SELECT p.*, s.name as supplier_name, u.full_name as user_name FROM purchases p LEFT JOIN suppliers s ON p.supplier_id = s.id LEFT JOIN users u ON p.user_id = u.id ORDER BY p.purchase_date DESC LIMIT 20");
$purchases = $stmt->fetchAll();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Entradas de Stock (Compras)</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPurchaseModal">
            Nueva Entrada
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Proveedor</th>
                    <th>Registrado por</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($purchases as $pur): ?>
                <tr>
                    <td><?php echo $pur['id']; ?></td>
                    <td><?php echo $pur['purchase_date']; ?></td>
                    <td><?php echo htmlspecialchars($pur['supplier_name']); ?></td>
                    <td><?php echo htmlspecialchars($pur['user_name']); ?></td>
                    <td>$<?php echo number_format($pur['total'], 2); ?></td>
                    <td>
                        <?php if ($pur['status'] === 'received'): ?>
                            <span class="badge bg-success">Recibido</span>
                        <?php elseif ($pur['status'] === 'pending'): ?>
                            <span class="badge bg-warning text-dark">Pendiente</span>
                        <?php else: ?>
                            <span class="badge bg-danger">Cancelado</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <div class="dropdown d-inline">
                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Acción
                            </button>
                            <ul class="dropdown-menu">
                                <?php if ($pur['status'] === 'pending'): ?>
                                    <li><a class="dropdown-menu-item btn btn-sm w-100 text-start" href="php_logic/purchase_actions.php?action=status&id=<?php echo $pur['id']; ?>&status=received&csrf_token=<?php echo get_csrf_token(); ?>">Marcar Recibido</a></li>
                                    <li><a class="dropdown-menu-item btn btn-sm w-100 text-start" href="php_logic/purchase_actions.php?action=status&id=<?php echo $pur['id']; ?>&status=cancelled&csrf_token=<?php echo get_csrf_token(); ?>">Cancelar</a></li>
                                <?php endif; ?>
                                <li><a class="dropdown-menu-item btn btn-sm w-100 text-start" href="view_purchase.php?id=<?php echo $pur['id']; ?>">Detalles</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<!-- Modal Add Purchase -->
<div class="modal fade" id="addPurchaseModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="php_logic/purchase_actions.php?action=add" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo get_csrf_token(); ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrar Entrada de Mercadería</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Proveedor</label>
                        <select name="supplier_id" class="form-select" required>
                            <option value="">Seleccione un proveedor...</option>
                            <?php foreach ($suppliers as $s): ?>
                                <option value="<?php echo $s['id']; ?>"><?php echo htmlspecialchars($s['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Estado Inicial</label>
                        <select name="status" class="form-select">
                            <option value="received">Recibido (Suma stock inmediatamente)</option>
                            <option value="pending">Pendiente (Orden de compra)</option>
                        </select>
                    </div>

                    <h6>Productos</h6>
                    <div id="purchase-items">
                        <div class="row mb-2 item-row">
                            <div class="col-md-6">
                                <select name="product_id[]" class="form-select" required>
                                    <option value="">Seleccione producto...</option>
                                    <?php foreach ($products as $p): ?>
                                        <option value="<?php echo $p['id']; ?>"><?php echo htmlspecialchars($p['name']); ?> (Stock: <?php echo $p['stock']; ?>)</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="number" name="quantity[]" class="form-control" placeholder="Cant." required min="1">
                            </div>
                            <div class="col-md-3">
                                <input type="number" step="0.01" name="price[]" class="form-control" placeholder="P. Costo" required>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary" id="btn-add-item">
                        <i class="bi bi-plus"></i> Añadir otro producto
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Entrada</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<script>
$(document).ready(function() {
    $('#btn-add-item').click(function() {
        let newRow = $('.item-row').first().clone();
        newRow.find('input').val('');
        $('#purchase-items').append(newRow);
    });
});
</script>
