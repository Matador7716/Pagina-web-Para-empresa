<?php
include 'includes/header.php';
include 'includes/sidebar.php';

// Fetch customers for the sale
$stmt = $pdo->query("SELECT * FROM customers ORDER BY name ASC");
$customers = $stmt->fetchAll();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Punto de Venta (POS)</h1>
    </div>

    <div class="row">
        <!-- Search and List -->
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                        <input type="text" id="product-search" class="form-control" placeholder="Buscar producto por nombre o código de barras..." autofocus>
                    </div>
                    <div id="search-results" class="list-group position-absolute w-100" style="z-index: 1000; display: none;"></div>

                    <div class="table-responsive">
                        <table class="table table-bordered align-middle" id="cart-table">
                            <thead class="table-light">
                                <tr>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th style="width: 100px;">Cant.</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Cart items will be here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Summary and Checkout -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Resumen de Venta</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Cliente</label>
                        <select id="customer-id" class="form-select">
                            <option value="">Cliente Genérico</option>
                            <?php foreach ($customers as $c): ?>
                                <option value="<?php echo $c['id']; ?>"><?php echo htmlspecialchars($c['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Método de Pago</label>
                        <select id="payment-method" class="form-select">
                            <option value="cash">Efectivo</option>
                            <option value="card">Tarjeta</option>
                            <option value="transfer">Transferencia</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipo de Comprobante</label>
                        <select id="invoice-type" class="form-select">
                            <option value="boleta">Boleta</option>
                            <option value="factura">Factura</option>
                        </select>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal:</span>
                        <span id="summary-subtotal">$0.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <h4 class="fw-bold">Total:</h4>
                        <h4 class="fw-bold text-primary" id="summary-total">$0.00</h4>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-success btn-lg" id="btn-complete-sale">
                            <i class="bi bi-check-circle me-2"></i> Finalizar Venta
                        </button>
                        <button class="btn btn-outline-danger" id="btn-clear-cart">
                            <i class="bi bi-trash me-2"></i> Limpiar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

<script>
let cart = [];

$(document).ready(function() {
    // Search products
    $('#product-search').on('keyup', function() {
        let query = $(this).val();
        if (query.length > 1) {
            $.get('php_logic/pos_actions.php?action=search&q=' + query, function(data) {
                let products = JSON.parse(data);
                let html = '';
                products.forEach(p => {
                    html += `<button type="button" class="list-group-item list-group-item-action add-to-cart"
                                data-id="${p.id}" data-name="${p.name}" data-price="${p.sale_price}" data-stock="${p.stock}">
                                <div class="d-flex justify-content-between">
                                    <span>${p.name} (${p.code})</span>
                                    <span class="badge bg-primary">$${p.sale_price}</span>
                                </div>
                                <small>Stock: ${p.stock}</small>
                             </button>`;
                });
                $('#search-results').html(html).show();
            });
        } else {
            $('#search-results').hide();
        }
    });

    // Add to cart
    $(document).on('click', '.add-to-cart', function() {
        let id = $(this).data('id');
        let name = $(this).data('name');
        let price = parseFloat($(this).data('price'));
        let stock = parseInt($(this).data('stock'));

        let existing = cart.find(item => item.id === id);
        if (existing) {
            if (existing.quantity < stock) {
                existing.quantity++;
            } else {
                alert('Stock insuficiente');
            }
        } else {
            if (stock > 0) {
                cart.push({id: id, name: name, price: price, quantity: 1, stock: stock});
            } else {
                alert('Producto sin stock');
            }
        }
        $('#product-search').val('').focus();
        $('#search-results').hide();
        renderCart();
    });

    // Update quantity
    $(document).on('change', '.cart-qty', function() {
        let id = $(this).data('id');
        let qty = parseInt($(this).val());
        let item = cart.find(i => i.id === id);
        if (qty > item.stock) {
            alert('Stock insuficiente');
            $(this).val(item.quantity);
        } else if (qty < 1) {
            removeFromCart(id);
        } else {
            item.quantity = qty;
        }
        renderCart();
    });

    // Remove from cart
    $(document).on('click', '.remove-item', function() {
        let id = $(this).data('id');
        removeFromCart(id);
    });

    function removeFromCart(id) {
        cart = cart.filter(i => i.id !== id);
        renderCart();
    }

    function renderCart() {
        let html = '';
        let total = 0;
        cart.forEach(item => {
            let subtotal = item.price * item.quantity;
            total += subtotal;
            html += `<tr>
                        <td>${item.name}</td>
                        <td>$${item.price.toFixed(2)}</td>
                        <td>
                            <input type="number" class="form-control form-control-sm cart-qty" data-id="${item.id}" value="${item.quantity}" min="1">
                        </td>
                        <td>$${subtotal.toFixed(2)}</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-danger remove-item" data-id="${item.id}"><i class="bi bi-x"></i></button>
                        </td>
                    </tr>`;
        });
        $('#cart-table tbody').html(html);
        $('#summary-subtotal').text('$' + total.toFixed(2));
        $('#summary-total').text('$' + total.toFixed(2));
    }

    $('#btn-clear-cart').click(function() {
        cart = [];
        renderCart();
    });

    // Complete sale
    $('#btn-complete-sale').click(function() {
        if (cart.length === 0) {
            alert('El carrito está vacío');
            return;
        }

        let data = {
            csrf_token: '<?php echo get_csrf_token(); ?>',
            customer_id: $('#customer-id').val(),
            payment_method: $('#payment-method').val(),
            invoice_type: $('#invoice-type').val(),
            items: cart
        };

        $.post('php_logic/pos_actions.php?action=process_sale', JSON.stringify(data), function(response) {
            let res = JSON.parse(response);
            if (res.success) {
                if (confirm('Venta completada con éxito. ¿Desea ver el comprobante?')) {
                    window.location.href = 'view_sale.php?id=' + res.sale_id;
                } else {
                    cart = [];
                    renderCart();
                    window.location.reload();
                }
            } else {
                alert('Error: ' + res.message);
            }
        });
    });
});
</script>
