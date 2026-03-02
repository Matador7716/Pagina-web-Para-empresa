$(document).ready(function() {
    // Inventory - Edit Product
    $('.edit-product').click(function() {
        const product = $(this).data('product');
        $('#prod_id').val(product.id);
        $('#prod_barcode').val(product.barcode);
        $('#prod_name').val(product.name);
        $('#prod_category').val(product.category_id);
        $('#prod_purchase_price').val(product.purchase_price);
        $('#prod_sale_price').val(product.sale_price);
        $('#prod_stock').val(product.stock);
        $('#prod_min_stock').val(product.min_stock);
        $('#productModalLabel').text('Editar Producto');
        $('#productModal').modal('show');
    });

    $('#productModal').on('hidden.bs.modal', function () {
        $('#productForm')[0].reset();
        $('#prod_id').val('');
        $('#productModalLabel').text('Nuevo Producto');
    });

    // Save Product AJAX
    $('#productForm').submit(function(e) {
        e.preventDefault();
        const formData = $(this).serialize();
        $.post('php_logic/inventory/save_product.php', formData, function(response) {
            if (response.success) {
                location.reload();
            } else {
                alert(response.message);
            }
        }, 'json');
    });

    // Delete Product
    $('.delete-product').click(function() {
        if (confirm('¿Estás seguro de que deseas eliminar este producto?')) {
            const id = $(this).data('id');
            const csrf_token = $('input[name="csrf_token"]').val();
            $.post('php_logic/inventory/delete_product.php', { id, csrf_token }, function(response) {
                if (response.success) {
                    location.reload();
                } else {
                    alert(response.message);
                }
            }, 'json');
        }
    });

    // Save Category
    $('#categoryForm').submit(function(e) {
        e.preventDefault();
        const formData = $(this).serialize();
        $.post('php_logic/inventory/save_category.php', formData, function(response) {
            if (response.success) {
                location.reload();
            } else {
                alert(response.message);
            }
        }, 'json');
    });

    // Delete Category
    $('.delete-category').click(function() {
        if (confirm('¿Estás seguro de que deseas eliminar esta categoría?')) {
            const id = $(this).data('id');
            const csrf_token = $('input[name="csrf_token"]').val();
            $.post('php_logic/inventory/delete_category.php', { id, csrf_token }, function(response) {
                if (response.success) {
                    location.reload();
                } else {
                    alert(response.message);
                }
            }, 'json');
        }
    });

    // Cash Control - Open Cash
    $('#openCashForm').submit(function(e) {
        e.preventDefault();
        $.post('php_logic/sales/open_cash.php', $(this).serialize(), function(response) {
            if (response.success) location.reload(); else alert(response.message);
        }, 'json');
    });

    // Cash Control - Movement
    $('#movementForm').submit(function(e) {
        e.preventDefault();
        $.post('php_logic/sales/save_movement.php', $(this).serialize(), function(response) {
            if (response.success) location.reload(); else alert(response.message);
        }, 'json');
    });

    // Cash Control - Close Cash
    $('#closeCashForm').submit(function(e) {
        e.preventDefault();
        $.post('php_logic/sales/close_cash.php', $(this).serialize(), function(response) {
            if (response.success) location.reload(); else alert(response.message);
        }, 'json');
    });

    // POS - Load Products
    function loadProducts(search = '', category_id = 'all') {
        $.get('php_logic/sales/get_products.php', { search, category_id }, function(products) {
            let html = '';
            products.forEach(p => {
                const productData = JSON.stringify(p).replace(/'/g, "&apos;");
                html += `
                    <div class="col">
                        <div class="card h-100 pos-product-card shadow-sm border-0" data-product='${productData}'>
                            <div class="card-body p-2 text-center">
                                <h6 class="card-title mb-1 text-truncate">${p.name}</h6>
                                <p class="card-text text-primary fw-bold mb-0">S/ ${parseFloat(p.sale_price).toFixed(2)}</p>
                                <small class="text-muted">Stock: ${p.stock}</small>
                            </div>
                        </div>
                    </div>
                `;
            });
            $('#pos-product-list').html(html);
        }, 'json');
    }

    if ($('#pos-product-list').length) {
        loadProducts();

        $('#pos-search').on('keyup', function() {
            loadProducts($(this).val(), $('.filter-cat.active').data('id'));
        });

        $('.filter-cat').click(function() {
            $('.filter-cat').removeClass('active btn-primary').addClass('btn-outline-secondary');
            $(this).addClass('active btn-primary').removeClass('btn-outline-secondary');
            loadProducts($('#pos-search').val(), $(this).data('id'));
        });

        let cart = [];

        $(document).on('click', '.pos-product-card', function() {
            const product = $(this).data('product');
            if (product.stock <= 0) {
                alert('Producto sin stock');
                return;
            }
            addToCart(product);
        });

        function addToCart(product) {
            const index = cart.findIndex(item => item.id === product.id);
            if (index > -1) {
                if (cart[index].quantity < product.stock) {
                    cart[index].quantity++;
                } else {
                    alert('No hay más stock disponible');
                }
            } else {
                cart.push({ ...product, quantity: 1 });
            }
            renderCart();
        }

        function renderCart() {
            let html = '';
            let subtotal = 0;
            cart.forEach((item, index) => {
                const itemTotal = item.quantity * item.sale_price;
                subtotal += itemTotal;
                html += `
                    <tr>
                        <td class="small">${item.name}</td>
                        <td>
                            <input type="number" class="form-control form-control-sm update-qty" data-index="${index}" value="${item.quantity}" min="1" max="${item.stock}" style="width: 60px;">
                        </td>
                        <td>${parseFloat(item.sale_price).toFixed(2)}</td>
                        <td>${itemTotal.toFixed(2)}</td>
                        <td>
                            <button class="btn btn-sm btn-link text-danger remove-item" data-index="${index}"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                `;
            });
            $('#cart-items').html(html);
            $('#pos-subtotal').text(`S/ ${subtotal.toFixed(2)}`);
            updateTotal();
        }

        function updateTotal() {
            const subtotal = parseFloat($('#pos-subtotal').text().replace('S/ ', ''));
            const discount = parseFloat($('#pos-discount').val()) || 0;
            const total = Math.max(0, subtotal - discount);
            $('#pos-total').text(`S/ ${total.toFixed(2)}`);
            $('#pay-total-display').text(`S/ ${total.toFixed(2)}`);
        }

        $('#pos-discount').on('input', updateTotal);

        $(document).on('change', '.update-qty', function() {
            const index = $(this).data('index');
            const qty = parseInt($(this).val());
            const max = parseInt($(this).attr('max'));
            if (qty > 0 && qty <= max) {
                cart[index].quantity = qty;
            } else {
                $(this).val(cart[index].quantity);
                alert('Cantidad no válida o excede el stock');
            }
            renderCart();
        });

        $(document).on('click', '.remove-item', function() {
            const index = $(this).data('index');
            cart.splice(index, 1);
            renderCart();
        });

        $('#btn-cancel-sale').click(function() {
            if (confirm('¿Deseas cancelar la venta?')) {
                cart = [];
                $('#pos-discount').val('0.00');
                renderCart();
            }
        });

        // Payment logic
        $('#payment_method').change(function() {
            if ($(this).val() === 'cash') {
                $('#cash-payment-info').show();
            } else {
                $('#cash-payment-info').hide();
            }
        });

        $('#received_amount').on('input', function() {
            const total = parseFloat($('#pos-total').text().replace('S/ ', ''));
            const received = parseFloat($(this).val()) || 0;
            const change = Math.max(0, received - total);
            $('#change-amount').text(`S/ ${change.toFixed(2)}`);
        });

        $('#btn-confirm-sale').click(function() {
            if (cart.length === 0) {
                alert('El carrito está vacío');
                return;
            }
            const data = {
                csrf_token: $('input[name="csrf_token"]').val(),
                cash_register_id: $('input[name="cash_register_id"]').val(),
                payment_method: $('#payment_method').val(),
                customer_name: $('input[name="customer_name"]').val(),
                discount: $('#pos-discount').val(),
                items: cart
            };

            $.post('php_logic/sales/process_sale.php', data, function(response) {
                if (response.success) {
                    alert('Venta realizada con éxito');
                    window.open('view_sale.php?id=' + response.sale_id, '_blank');
                    location.reload();
                } else {
                    alert(response.message);
                }
            }, 'json');
        });
    }

    // User Management
    $('.edit-user').click(function() {
        const user = $(this).data('user');
        $('#user_id').val(user.id);
        $('#user_full_name').val(user.full_name);
        $('#user_username').val(user.username);
        $('#user_role').val(user.role);
        $('#user_password').val('');
        $('.modal-title').text('Editar Usuario');
        $('#userModal').modal('show');
    });

    $('#userForm').submit(function(e) {
        e.preventDefault();
        $.post('php_logic/auth/save_user.php', $(this).serialize(), function(response) {
            if (response.success) location.reload(); else alert(response.message);
        }, 'json');
    });
});
