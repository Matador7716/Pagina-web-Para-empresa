<?php
$activePage = 'productos';
$panelTitle = "Gestión de Productos & Catálogo - SIS CandeWeb";
require_once __DIR__ . '/header.php';

$mensaje = '';
$error = '';

// Procesar Creación o Edición
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = "Token no válido.";
    } else {
        $accion = $_POST['action'] ?? '';

        if ($accion === 'guardar') {
            $id = (int)($_POST['id'] ?? 0);
            $catId = (int)$_POST['categoria_id'];
            $nombre = trim($_POST['nombre']);
            $slug = trim($_POST['slug']);
            if (empty($slug)) {
                $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $nombre)));
            }
            $marca = trim($_POST['marca']);
            $codigoBarra = trim($_POST['codigo_barra']);
            $precioCompra = (float)$_POST['precio_compra'];
            $precioVenta = (float)$_POST['precio_venta'];
            $precioDescuento = !empty($_POST['precio_descuento']) ? (float)$_POST['precio_descuento'] : null;
            $stock = (int)$_POST['stock'];
            $stockMinimo = (int)$_POST['stock_minimo'];
            $lote = trim($_POST['lote']);
            $vencimiento = !empty($_POST['fecha_vencimiento']) ? $_POST['fecha_vencimiento'] : null;
            $registro = trim($_POST['registro_sanitario']);
            $requiereReceta = isset($_POST['requiere_receta']) ? 1 : 0;
            $destacado = isset($_POST['destacado']) ? 1 : 0;
            $descCorta = trim($_POST['descripcion_corta']);
            $descripcion = trim($_POST['descripcion']);
            $videoUrl = trim($_POST['video_url']);

            // Imagen principal
            $imagenPrincipal = $_POST['imagen_actual'] ?? 'assets/images/default-product.png';
            if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
                $ext = strtolower(pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION));
                if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp'])) {
                    $upDir = __DIR__ . '/../assets/images/products/';
                    if (!is_dir($upDir)) mkdir($upDir, 0777, true);
                    $newFile = 'prod_' . time() . '_' . rand(100, 999) . '.' . $ext;
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $upDir . $newFile);
                    $imagenPrincipal = 'assets/images/products/' . $newFile;
                }
            }

            if ($id > 0) {
                $stmt = $pdo->prepare("UPDATE productos SET categoria_id=?, codigo_barra=?, nombre=?, slug=?, marca=?, descripcion_corta=?, descripcion=?, precio_compra=?, precio_venta=?, precio_descuento=?, stock=?, stock_minimo=?, lote=?, fecha_vencimiento=?, registro_sanitario=?, requiere_receta=?, imagen_principal=?, video_url=?, destacado=? WHERE id=?");
                $stmt->execute([$catId, $codigoBarra, $nombre, $slug, $marca, $descCorta, $descripcion, $precioCompra, $precioVenta, $precioDescuento, $stock, $stockMinimo, $lote, $vencimiento, $registro, $requiereReceta, $imagenPrincipal, $videoUrl, $destacado, $id]);
                $mensaje = "Producto actualizado con éxito.";
            } else {
                $stmt = $pdo->prepare("INSERT INTO productos (categoria_id, codigo_barra, nombre, slug, marca, descripcion_corta, descripcion, precio_compra, precio_venta, precio_descuento, stock, stock_minimo, lote, fecha_vencimiento, registro_sanitario, requiere_receta, imagen_principal, video_url, destacado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([$catId, $codigoBarra, $nombre, $slug, $marca, $descCorta, $descripcion, $precioCompra, $precioVenta, $precioDescuento, $stock, $stockMinimo, $lote, $vencimiento, $registro, $requiereReceta, $imagenPrincipal, $videoUrl, $destacado]);
                $mensaje = "Producto registrado exitosamente.";
            }
        } elseif ($accion === 'eliminar') {
            $id = (int)$_POST['id'];
            $pdo->prepare("UPDATE productos SET estado = 'inactivo' WHERE id = ?")->execute([$id]);
            $mensaje = "Producto marcado como inactivo.";
        }
    }
}

// Búsqueda y listado
$q = trim($_GET['q'] ?? '');
if ($q !== '') {
    $stmt = $pdo->prepare("SELECT p.*, c.nombre as categoria_nombre FROM productos p JOIN categorias c ON p.categoria_id = c.id WHERE (p.nombre LIKE ? OR p.codigo_barra LIKE ? OR p.marca LIKE ?) AND p.estado = 'activo' ORDER BY p.id DESC");
    $stmt->execute(["%$q%", "%$q%", "%$q%"]);
} else {
    $stmt = $pdo->query("SELECT p.*, c.nombre as categoria_nombre FROM productos p JOIN categorias c ON p.categoria_id = c.id WHERE p.estado = 'activo' ORDER BY p.id DESC");
}
$productos = $stmt->fetchAll();

$categorias = $pdo->query("SELECT * FROM categorias WHERE estado = 'activo'")->fetchAll();
?>

<?php if ($mensaje): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i><?= e($mensaje) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="fw-bold mb-0">Catálogo de Productos Farmacéuticos</h4>
        <small class="text-muted">Total: <?= count($productos) ?> productos registrados y activos</small>
    </div>
    <button type="button" class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#productModal" onclick="prepareCreateModal()">
        <i class="bi bi-plus-lg me-1"></i> Nuevo Producto
    </button>
</div>

<div class="card border-0 shadow-sm rounded-4 p-4 bg-white mb-4">
    <form method="GET" action="productos.php" class="row g-2 mb-4">
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-text bg-light"><i class="bi bi-search"></i></span>
                <input type="text" name="q" class="form-control" placeholder="Buscar por nombre, código de barra o marca..." value="<?= e($q) ?>">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
        <?php if ($q): ?>
            <div class="col-md-2">
                <a href="productos.php" class="btn btn-outline-secondary w-100">Limpiar</a>
            </div>
        <?php endif; ?>
    </form>

    <div class="table-responsive">
        <table class="table align-middle table-hover">
            <thead class="table-light">
                <tr>
                    <th>Producto</th>
                    <th>Categoría</th>
                    <th>Código Barra</th>
                    <th>P. Compra</th>
                    <th>P. Venta</th>
                    <th>Stock</th>
                    <th>Vencimiento</th>
                    <th class="text-end">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $p): ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <img src="../<?= e($p['imagen_principal']) ?>" class="rounded border" style="width: 45px; height: 45px; object-fit: cover;" onerror="this.src='https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=90';">
                                <div>
                                    <strong class="d-block text-dark"><?= e($p['nombre']) ?></strong>
                                    <small class="text-muted"><?= e($p['marca']) ?> &bull; <?= e($p['registro_sanitario'] ?? 'S/R') ?></small>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-light text-dark border"><?= e($p['categoria_nombre']) ?></span></td>
                        <td><code><?= e($p['codigo_barra'] ?? 'N/A') ?></code></td>
                        <td>S/. <?= number_format($p['precio_compra'], 2) ?></td>
                        <td>
                            <strong class="text-primary">S/. <?= number_format($p['precio_venta'], 2) ?></strong>
                            <?php if ($p['precio_descuento']): ?>
                                <small class="text-danger d-block">Oferta: S/. <?= number_format($p['precio_descuento'], 2) ?></small>
                            <?php endif; ?>
                        </td>
                        <td>
                            <span class="badge bg-<?= $p['stock'] <= $p['stock_minimo'] ? 'danger' : 'success' ?>">
                                <?= $p['stock'] ?> unid.
                            </span>
                        </td>
                        <td class="small"><?= e($p['fecha_vencimiento'] ?? 'N/D') ?></td>
                        <td class="text-end">
                            <button type="button" class="btn btn-sm btn-light border" onclick='editProduct(<?= json_encode($p) ?>)'><i class="bi bi-pencil-square text-primary"></i></button>
                            <form method="POST" action="productos.php" class="d-inline" onsubmit="return confirm('¿Marcar como inactivo este producto?');">
                                <input type="hidden" name="csrf_token" value="<?= getCsrfToken() ?>">
                                <input type="hidden" name="action" value="eliminar">
                                <input type="hidden" name="id" value="<?= $p['id'] ?>">
                                <button type="submit" class="btn btn-sm btn-light border text-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal para Crear / Editar Producto -->
<div class="modal fade" id="productModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="productos.php" enctype="multipart/form-data">
                <input type="hidden" name="csrf_token" value="<?= getCsrfToken() ?>">
                <input type="hidden" name="action" value="guardar">
                <input type="hidden" name="id" id="prodId" value="0">
                <input type="hidden" name="imagen_actual" id="prodImgActual" value="">

                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="modalTitle">Nuevo Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label class="form-label small fw-bold">Nombre del Producto *</label>
                            <input type="text" name="nombre" id="prodNombre" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-bold">Categoría *</label>
                            <select name="categoria_id" id="prodCatId" class="form-select" required>
                                <?php foreach ($categorias as $c): ?>
                                    <option value="<?= $c['id'] ?>"><?= e($c['nombre']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-bold">Marca / Laboratorio</label>
                            <input type="text" name="marca" id="prodMarca" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-bold">Código de Barra</label>
                            <input type="text" name="codigo_barra" id="prodBarcode" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-bold">Registro DIGEMID</label>
                            <input type="text" name="registro_sanitario" id="prodRegistro" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-bold">Precio Compra (S/.)</label>
                            <input type="number" step="0.10" name="precio_compra" id="prodCompra" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-bold">Precio Venta (S/.) *</label>
                            <input type="number" step="0.10" name="precio_venta" id="prodVenta" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-bold">Precio Descuento (Opcional)</label>
                            <input type="number" step="0.10" name="precio_descuento" id="prodDescuento" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label small fw-bold">Stock Inicial</label>
                            <input type="number" name="stock" id="prodStock" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label small fw-bold">Stock Mínimo Alerta</label>
                            <input type="number" name="stock_minimo" id="prodMinimo" class="form-control" value="5">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label small fw-bold">Lote</label>
                            <input type="text" name="lote" id="prodLote" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label small fw-bold">Vencimiento</label>
                            <input type="date" name="fecha_vencimiento" id="prodVencimiento" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">Imagen del Producto</label>
                            <input type="file" name="imagen" class="form-control" accept="image/*">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold">URL Video Demostrativo (YouTube embed)</label>
                            <input type="url" name="video_url" id="prodVideo" class="form-control" placeholder="https://www.youtube.com/embed/...">
                        </div>
                        <div class="col-12">
                            <label class="form-label small fw-bold">Descripción Corta</label>
                            <input type="text" name="descripcion_corta" id="prodDescCorta" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label small fw-bold">Descripción Completa y Posología</label>
                            <textarea name="descripcion" id="prodDesc" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input" type="checkbox" name="requiere_receta" id="prodReceta" value="1">
                                <label class="form-check-label small fw-bold" for="prodReceta">Requiere Receta Médica</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input" type="checkbox" name="destacado" id="prodDestacado" value="1">
                                <label class="form-check-label small fw-bold" for="prodDestacado">Producto Destacado en Inicio</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary px-4 fw-bold">Guardar Producto</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function prepareCreateModal() {
    document.getElementById('modalTitle').textContent = 'Nuevo Producto';
    document.getElementById('prodId').value = 0;
    document.getElementById('prodImgActual').value = '';
    document.getElementById('prodNombre').value = '';
    document.getElementById('prodMarca').value = '';
    document.getElementById('prodBarcode').value = '';
    document.getElementById('prodRegistro').value = '';
    document.getElementById('prodCompra').value = '';
    document.getElementById('prodVenta').value = '';
    document.getElementById('prodDescuento').value = '';
    document.getElementById('prodStock').value = 10;
    document.getElementById('prodMinimo').value = 5;
    document.getElementById('prodLote').value = '';
    document.getElementById('prodVencimiento').value = '';
    document.getElementById('prodVideo').value = '';
    document.getElementById('prodDescCorta').value = '';
    document.getElementById('prodDesc').value = '';
    document.getElementById('prodReceta').checked = false;
    document.getElementById('prodDestacado').checked = false;
}

function editProduct(p) {
    document.getElementById('modalTitle').textContent = 'Editar Producto: ' + p.nombre;
    document.getElementById('prodId').value = p.id;
    document.getElementById('prodImgActual').value = p.imagen_principal;
    document.getElementById('prodNombre').value = p.nombre;
    document.getElementById('prodCatId').value = p.categoria_id;
    document.getElementById('prodMarca').value = p.marca;
    document.getElementById('prodBarcode').value = p.codigo_barra || '';
    document.getElementById('prodRegistro').value = p.registro_sanitario || '';
    document.getElementById('prodCompra').value = p.precio_compra;
    document.getElementById('prodVenta').value = p.precio_venta;
    document.getElementById('prodDescuento').value = p.precio_descuento || '';
    document.getElementById('prodStock').value = p.stock;
    document.getElementById('prodMinimo').value = p.stock_minimo;
    document.getElementById('prodLote').value = p.lote || '';
    document.getElementById('prodVencimiento').value = p.fecha_vencimiento || '';
    document.getElementById('prodVideo').value = p.video_url || '';
    document.getElementById('prodDescCorta').value = p.descripcion_corta || '';
    document.getElementById('prodDesc').value = p.descripcion || '';
    document.getElementById('prodReceta').checked = (p.requiere_receta == 1);
    document.getElementById('prodDestacado').checked = (p.destacado == 1);

    const myModal = new bootstrap.Modal(document.getElementById('productModal'));
    myModal.show();
}
</script>

<?php require_once __DIR__ . '/footer.php'; ?>
