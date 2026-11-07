<?php
$activePage = 'pos';
$panelTitle = "Punto de Venta Rápido (POS) - SIS CandeWeb";
require_once __DIR__ . '/header.php';

$mensaje = '';
$error = '';

// Procesar Venta POS
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'completar_pos') {
    if (!verifyCsrfToken($_POST['csrf_token'] ?? '')) {
        $error = "Token no válido.";
    } else {
        $itemsJson = $_POST['pos_items'] ?? '[]';
        $items = json_decode($itemsJson, true);
        $tipoComprobante = $_POST['tipo_comprobante'] ?? 'boleta';
        $docCliente = trim($_POST['doc_cliente'] ?? '00000000');
        $nombreCliente = trim($_POST['nombre_cliente'] ?? 'Cliente Mostrador');
        $metodoPago = $_POST['metodo_pago'] ?? 'efectivo';

        if (empty($items)) {
            $error = "Debe agregar al menos un producto al ticket de venta.";
        } else {
            $pdo->beginTransaction();
            try {
                $subtotal = 0;
                foreach ($items as $it) {
                    $subtotal += (float)$it['precio'] * (int)$it['cantidad'];
                }

                $igvRate = 0.18;
                $base = round($subtotal / 1.18, 2);
                $igv = round($subtotal - $base, 2);
                $codigo = generateOrderNumber($pdo);

                $stmt = $pdo->prepare("INSERT INTO pedidos (codigo_pedido, usuario_id, tipo_comprobante, documento_cliente, nombre_cliente, email_cliente, telefono_cliente, direccion_envio, ciudad_envio, metodo_envio, metodo_pago, estado_pago, estado_pedido, subtotal, igv, costo_envio, total) VALUES (?, ?, ?, ?, ?, 'pos@boticacusco.pe', '000000000', 'Venta en Tienda - Mostrador', 'Cusco', 'recojo_tienda', ?, 'pagado', 'Entregado', ?, ?, 0.00, ?)");

                $stmt->execute([
                    $codigo,
                    $currentUser['id'],
                    $tipoComprobante,
                    $docCliente,
                    $nombreCliente,
                    $metodoPago,
                    $subtotal,
                    $igv,
                    $subtotal
                ]);
                $pedidoId = $pdo->lastInsertId();

                $stmtDet = $pdo->prepare("INSERT INTO pedido_detalles (pedido_id, producto_id, cantidad, precio_unitario, subtotal) VALUES (?, ?, ?, ?, ?)");
                $stmtStock = $pdo->prepare("UPDATE productos SET stock = stock - ? WHERE id = ?");
                $stmtKardex = $pdo->prepare("INSERT INTO inventario_movimientos (producto_id, usuario_id, tipo, cantidad, stock_anterior, stock_nuevo, motivo, documento_referencia) VALUES (?, ?, 'salida', ?, ?, ?, 'Venta POS Mostrador', ?)");

                foreach ($items as $it) {
                    $itemSub = (float)$it['precio'] * (int)$it['cantidad'];
                    $stmtDet->execute([$pedidoId, $it['id'], $it['cantidad'], $it['precio'], $itemSub]);
                    $stmtStock->execute([$it['cantidad'], $it['id']]);

                    // Obtener stock actual
                    $sStmt = $pdo->prepare("SELECT stock FROM productos WHERE id = ?");
                    $sStmt->execute([$it['id']]);
                    $currStk = (int)$sStmt->fetchColumn();

                    $stmtKardex->execute([$it['id'], $currentUser['id'], $it['cantidad'], $currStk + (int)$it['cantidad'], $currStk, $codigo]);
                }

                $pdo->commit();
                $mensaje = "¡Venta $codigo procesada con éxito!";
                echo "<script>window.open('imprimir_comprobante.php?id=$pedidoId', '_blank');</script>";

            } catch (Exception $e) {
                $pdo->rollBack();
                $error = "Error al registrar la venta: " . $e->getMessage();
            }
        }
    }
}

// Cargar catálogo rápido para POS
$catalogo = $pdo->query("SELECT id, codigo_barra, nombre, precio_venta, precio_descuento, stock FROM productos WHERE estado = 'activo' ORDER BY nombre ASC")->fetchAll();
?>

<?php if ($mensaje): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i><?= e($mensaje) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<?php if ($error): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i><?= e($error) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<div class="row g-3">
    <!-- Catálogo de productos & Búsqueda / Código de barras -->
    <div class="col-lg-7">
        <div class="card border-0 shadow-sm rounded-4 p-3 bg-white h-100">
            <div class="mb-3">
                <label class="form-label fw-bold small"><i class="bi bi-upc-scan text-primary me-1"></i> Buscar Producto o Escanear Código de Barras:</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input type="text" id="posSearchInput" class="form-control" placeholder="Escribe el nombre o código de barra y presiona Enter..." autofocus autocomplete="off">
                </div>
            </div>

            <div class="table-responsive" style="max-height: 520px; overflow-y: auto;">
                <table class="table table-hover align-middle small" id="posProductsTable">
                    <thead class="table-light sticky-top">
                        <tr>
                            <th>Código</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($catalogo as $prod):
                            $finalPrice = (!empty($prod['precio_descuento']) && $prod['precio_descuento'] > 0) ? (float)$prod['precio_descuento'] : (float)$prod['precio_venta'];
                        ?>
                            <tr class="pos-row" data-id="<?= $prod['id'] ?>" data-name="<?= e($prod['nombre']) ?>" data-barcode="<?= e($prod['codigo_barra']) ?>" data-price="<?= $finalPrice ?>" data-stock="<?= $prod['stock'] ?>">
                                <td><code><?= e($prod['codigo_barra'] ?? 'S/C') ?></code></td>
                                <td class="fw-bold"><?= e($prod['nombre']) ?></td>
                                <td>S/. <?= number_format($finalPrice, 2) ?></td>
                                <td>
                                    <span class="badge bg-<?= $prod['stock'] > 5 ? 'success' : 'danger' ?>"><?= $prod['stock'] ?></span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary rounded-circle" onclick="addPosItem(<?= $prod['id'] ?>, '<?= addslashes(e($prod['nombre'])) ?>', <?= $finalPrice ?>, <?= $prod['stock'] ?>)" <?= $prod['stock'] <= 0 ? 'disabled' : '' ?>>
                                        <i class="bi bi-plus"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Ticket de Venta Actual -->
    <div class="col-lg-5">
        <div class="card border-0 shadow-sm rounded-4 p-4 bg-white h-100 d-flex flex-column">
            <h5 class="fw-bold mb-3 d-flex justify-content-between align-items-center">
                <span><i class="bi bi-receipt text-primary me-2"></i>Ticket de Venta</span>
                <button type="button" class="btn btn-sm btn-outline-danger" onclick="clearPosCart()"><i class="bi bi-trash"></i> Vaciar</button>
            </h5>

            <form method="POST" action="pos.php" id="posForm" class="d-flex flex-column flex-grow-1">
                <input type="hidden" name="csrf_token" value="<?= getCsrfToken() ?>">
                <input type="hidden" name="action" value="completar_pos">
                <input type="hidden" name="pos_items" id="posItemsInput" value="[]">

                <div class="row g-2 mb-3">
                    <div class="col-6">
                        <select name="tipo_comprobante" class="form-select form-select-sm">
                            <option value="ticket">Ticket de Venta</option>
                            <option value="boleta">Boleta Electrónica</option>
                            <option value="factura">Factura con RUC</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <select name="metodo_pago" class="form-select form-select-sm">
                            <option value="efectivo">Efectivo</option>
                            <option value="yape">Yape</option>
                            <option value="plin">Plin</option>
                            <option value="tarjeta">Tarjeta Débito/Crédito</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <input type="text" name="doc_cliente" class="form-control form-control-sm" placeholder="DNI / RUC" value="00000000">
                    </div>
                    <div class="col-6">
                        <input type="text" name="nombre_cliente" class="form-control form-control-sm" placeholder="Nombre del Cliente" value="Cliente Mostrador">
                    </div>
                </div>

                <!-- Lista de items en ticket -->
                <div class="flex-grow-1 border rounded-3 p-2 mb-3 overflow-auto" style="min-height: 200px; max-height: 300px;">
                    <table class="table table-sm align-middle mb-0" id="ticketTable">
                        <thead class="table-light">
                            <tr>
                                <th>Item</th>
                                <th class="text-center" style="width: 70px;">Cant</th>
                                <th class="text-end">Subt</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="ticketTbody">
                            <!-- Inyectado vía JS -->
                        </tbody>
                    </table>
                </div>

                <!-- Totales -->
                <div class="bg-light p-3 rounded-3 mb-3">
                    <div class="d-flex justify-content-between mb-1 small text-muted">
                        <span>Base Imponible:</span>
                        <span id="posBase">S/. 0.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-1 small text-muted">
                        <span>IGV (18%):</span>
                        <span id="posIgv">S/. 0.00</span>
                    </div>
                    <div class="d-flex justify-content-between fs-4 fw-bold text-dark border-top pt-2">
                        <span>Total:</span>
                        <span id="posTotal" class="text-primary">S/. 0.00</span>
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-lg w-100 py-3 fw-bold rounded-pill shadow-sm">
                    <i class="bi bi-printer-fill me-2"></i> Cobrar e Imprimir Ticket
                </button>
            </form>
        </div>
    </div>
</div>

<script>
let posCart = [];

function addPosItem(id, name, price, stock) {
    const existing = posCart.find(i => i.id === id);
    if (existing) {
        if (existing.cantidad + 1 > stock) {
            alert('No hay más stock disponible (' + stock + ')');
            return;
        }
        existing.cantidad += 1;
    } else {
        posCart.push({ id, nombre: name, precio: price, stock: stock, cantidad: 1 });
    }
    renderPosTicket();
}

function updatePosQty(id, qty) {
    const item = posCart.find(i => i.id === id);
    if (!item) return;
    qty = parseInt(qty);
    if (qty <= 0) {
        posCart = posCart.filter(i => i.id !== id);
    } else if (qty > item.stock) {
        alert('Stock máximo: ' + item.stock);
    } else {
        item.cantidad = qty;
    }
    renderPosTicket();
}

function removePosItem(id) {
    posCart = posCart.filter(i => i.id !== id);
    renderPosTicket();
}

function clearPosCart() {
    posCart = [];
    renderPosTicket();
}

function renderPosTicket() {
    const tbody = document.getElementById('ticketTbody');
    tbody.innerHTML = '';
    let total = 0;

    posCart.forEach(item => {
        const sub = item.precio * item.cantidad;
        total += sub;
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td><small class="fw-bold">${item.nombre}</small></td>
            <td class="text-center">
                <input type="number" class="form-control form-control-sm text-center p-0" min="1" max="${item.stock}" value="${item.cantidad}" onchange="updatePosQty(${item.id}, this.value)">
            </td>
            <td class="text-end small fw-bold">S/. ${sub.toFixed(2)}</td>
            <td class="text-end"><button type="button" class="btn btn-sm text-danger p-0" onclick="removePosItem(${item.id})"><i class="bi bi-x-lg"></i></button></td>
        `;
        tbody.appendChild(tr);
    });

    const base = total / 1.18;
    const igv = total - base;

    document.getElementById('posBase').textContent = 'S/. ' + base.toFixed(2);
    document.getElementById('posIgv').textContent = 'S/. ' + igv.toFixed(2);
    document.getElementById('posTotal').textContent = 'S/. ' + total.toFixed(2);
    document.getElementById('posItemsInput').value = JSON.stringify(posCart);
}

// Búsqueda en vivo de productos
document.getElementById('posSearchInput').addEventListener('input', function(e) {
    const term = e.target.value.toLowerCase().trim();
    const rows = document.querySelectorAll('.pos-row');
    rows.forEach(r => {
        const name = r.dataset.name.toLowerCase();
        const barcode = (r.dataset.barcode || '').toLowerCase();
        if (name.includes(term) || barcode.includes(term)) {
            r.style.display = '';
        } else {
            r.style.display = 'none';
        }
    });
});

// Soporte lector código de barras con Enter
document.getElementById('posSearchInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        const term = this.value.trim();
        const row = document.querySelector(`.pos-row[data-barcode="${term}"]`);
        if (row) {
            addPosItem(
                parseInt(row.dataset.id),
                row.dataset.name,
                parseFloat(row.dataset.price),
                parseInt(row.dataset.stock)
            );
            this.value = '';
            document.querySelectorAll('.pos-row').forEach(r => r.style.display = '');
        }
    }
});
</script>

<?php require_once __DIR__ . '/footer.php'; ?>
