<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'config/db.php';

// Obtener categorías para filtros y formularios
$stmt = $pdo->query("SELECT * FROM categories ORDER BY name ASC");
$categories = $stmt->fetchAll();

// Paginación y búsqueda
$search = $_GET['search'] ?? '';
$cat_filter = $_GET['category'] ?? '';

$sql = "SELECT p.*, c.name as category_name FROM products p LEFT JOIN categories c ON p.category_id = c.id WHERE 1=1";
$params = [];

if ($search) {
    $sql .= " AND (p.name LIKE ? OR p.barcode LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
}

if ($cat_filter) {
    $sql .= " AND p.category_id = ?";
    $params[] = $cat_filter;
}

$sql .= " ORDER BY p.name ASC";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$products = $stmt->fetchAll();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Inventario</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#categoryModal">
                <i class="bi bi-tags"></i> Categorías
            </button>
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#productModal">
                <i class="bi bi-plus-lg"></i> Nuevo Producto
            </button>
        </div>
    </div>

    <!-- Filtros -->
    <div class="row mb-3">
        <div class="col-md-6">
            <form class="d-flex" method="GET">
                <input class="form-control me-2" type="search" name="search" placeholder="Nombre o Código de Barras" value="<?php echo htmlspecialchars($search); ?>">
                <select class="form-select me-2" name="category">
                    <option value="">Todas las categorías</option>
                    <?php foreach ($categories as $cat): ?>
                        <option value="<?php echo $cat['id']; ?>" <?php echo $cat_filter == $cat['id'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($cat['name']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>

    <!-- Tabla de Productos -->
    <div class="table-responsive bg-white p-3 rounded shadow-sm">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Precio Compra</th>
                    <th>Precio Venta</th>
                    <th>Stock</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $p): ?>
                <tr>
                    <td><?php echo htmlspecialchars($p['barcode']); ?></td>
                    <td><?php echo htmlspecialchars($p['name']); ?></td>
                    <td><?php echo htmlspecialchars($p['category_name'] ?? 'N/A'); ?></td>
                    <td>S/ <?php echo number_format($p['purchase_price'], 2); ?></td>
                    <td>S/ <?php echo number_format($p['sale_price'], 2); ?></td>
                    <td class="<?php echo $p['stock'] <= $p['min_stock'] ? 'text-danger fw-bold' : ''; ?>">
                        <?php echo $p['stock']; ?>
                    </td>
                    <td>
                        <span class="badge bg-<?php echo $p['status'] ? 'success' : 'danger'; ?>">
                            <?php echo $p['status'] ? 'Activo' : 'Inactivo'; ?>
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-warning edit-product" data-product='<?php echo htmlspecialchars(json_encode($p), ENT_QUOTES, 'UTF-8'); ?>'>
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-danger delete-product" data-id="<?php echo $p['id']; ?>">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Producto -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="productForm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Nuevo Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="prod_id">
                        <input type="hidden" name="csrf_token" value="<?php echo get_csrf_token(); ?>">
                        <div class="mb-3">
                            <label class="form-label">Código de Barras</label>
                            <input type="text" class="form-control" name="barcode" id="prod_barcode" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name" id="prod_name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Categoría</label>
                            <select class="form-select" name="category_id" id="prod_category">
                                <option value="">Seleccionar...</option>
                                <?php foreach ($categories as $cat): ?>
                                    <option value="<?php echo $cat['id']; ?>"><?php echo htmlspecialchars($cat['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Precio Compra</label>
                                <input type="number" step="0.01" class="form-control" name="purchase_price" id="prod_purchase_price">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Precio Venta</label>
                                <input type="number" step="0.01" class="form-control" name="sale_price" id="prod_sale_price" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Stock Inicial</label>
                                <input type="number" class="form-control" name="stock" id="prod_stock" value="0">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Stock Mínimo</label>
                                <input type="number" class="form-control" name="min_stock" id="prod_min_stock" value="5">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Categorías -->
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gestionar Categorías</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="categoryForm" class="mb-3">
                        <input type="hidden" name="csrf_token" value="<?php echo get_csrf_token(); ?>">
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" placeholder="Nueva Categoría" required>
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </form>
                    <ul class="list-group" id="categoryList">
                        <?php foreach ($categories as $cat): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo htmlspecialchars($cat['name']); ?>
                            <button class="btn btn-sm btn-outline-danger delete-category" data-id="<?php echo $cat['id']; ?>">
                                <i class="bi bi-trash"></i>
                            </button>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>
