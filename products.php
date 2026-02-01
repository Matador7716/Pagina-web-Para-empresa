<?php
include 'includes/header.php';
include 'includes/sidebar.php';

// Fetch products with category name
$stmt = $pdo->query("SELECT p.*, c.name as category_name FROM products p LEFT JOIN categories c ON p.category_id = c.id ORDER BY p.name ASC");
$products = $stmt->fetchAll();

// Fetch categories for dropdown
$stmt = $pdo->query("SELECT * FROM categories ORDER BY name ASC");
$categories = $stmt->fetchAll();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Productos (Inventario)</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
            Nuevo Producto
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm align-middle">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>P. Compra</th>
                    <th>P. Venta</th>
                    <th>Stock</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $p): ?>
                <tr>
                    <td><?php echo htmlspecialchars($p['code']); ?></td>
                    <td><?php echo htmlspecialchars($p['name']); ?></td>
                    <td><?php echo htmlspecialchars($p['category_name']); ?></td>
                    <td>$<?php echo number_format($p['purchase_price'], 2); ?></td>
                    <td>$<?php echo number_format($p['sale_price'], 2); ?></td>
                    <td><?php echo $p['stock']; ?></td>
                    <td>
                        <?php if ($p['stock'] <= $p['min_stock']): ?>
                            <span class="badge bg-danger">Bajo Stock</span>
                        <?php else: ?>
                            <span class="badge bg-success">Ok</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-info edit-prod"
                            data-id="<?php echo $p['id']; ?>"
                            data-code="<?php echo htmlspecialchars($p['code']); ?>"
                            data-name="<?php echo htmlspecialchars($p['name']); ?>"
                            data-desc="<?php echo htmlspecialchars($p['description']); ?>"
                            data-cat="<?php echo $p['category_id']; ?>"
                            data-pprice="<?php echo $p['purchase_price']; ?>"
                            data-sprice="<?php echo $p['sale_price']; ?>"
                            data-stock="<?php echo $p['stock']; ?>"
                            data-minstock="<?php echo $p['min_stock']; ?>">Editar</button>
                        <a href="php_logic/product_actions.php?action=delete&id=<?php echo $p['id']; ?>&csrf_token=<?php echo get_csrf_token(); ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<!-- Modal Add -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="php_logic/product_actions.php?action=add" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo get_csrf_token(); ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nuevo Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Código (Barras)</label>
                            <input type="text" name="code" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Categoría</label>
                            <select name="category_id" class="form-select">
                                <?php foreach ($categories as $cat): ?>
                                    <option value="<?php echo $cat['id']; ?>"><?php echo htmlspecialchars($cat['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Stock Inicial</label>
                            <input type="number" name="stock" class="form-control" value="0" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Precio Compra</label>
                            <input type="number" step="0.01" name="purchase_price" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Precio Venta</label>
                            <input type="number" step="0.01" name="sale_price" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Stock Mínimo</label>
                            <input type="number" name="min_stock" class="form-control" value="5" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="php_logic/product_actions.php?action=edit" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo get_csrf_token(); ?>">
            <input type="hidden" name="id" id="edit-id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Código</label>
                            <input type="text" name="code" id="edit-code" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="name" id="edit-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea name="description" id="edit-desc" class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Categoría</label>
                            <select name="category_id" id="edit-cat" class="form-select">
                                <?php foreach ($categories as $cat): ?>
                                    <option value="<?php echo $cat['id']; ?>"><?php echo htmlspecialchars($cat['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Stock</label>
                            <input type="number" name="stock" id="edit-stock" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Precio Compra</label>
                            <input type="number" step="0.01" name="purchase_price" id="edit-pprice" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Precio Venta</label>
                            <input type="number" step="0.01" name="sale_price" id="edit-sprice" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Stock Mínimo</label>
                            <input type="number" name="min_stock" id="edit-minstock" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<script>
$(document).ready(function() {
    $('.edit-prod').click(function() {
        $('#edit-id').val($(this).data('id'));
        $('#edit-code').val($(this).data('code'));
        $('#edit-name').val($(this).data('name'));
        $('#edit-desc').val($(this).data('desc'));
        $('#edit-cat').val($(this).data('cat'));
        $('#edit-pprice').val($(this).data('pprice'));
        $('#edit-sprice').val($(this).data('sprice'));
        $('#edit-stock').val($(this).data('stock'));
        $('#edit-minstock').val($(this).data('minstock'));
        var myModal = new bootstrap.Modal(document.getElementById('editProductModal'));
        myModal.show();
    });
});
</script>
