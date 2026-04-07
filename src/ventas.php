<?php
require_once "includes/header.php";
require_once "../conexion.php";
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header bg-pharmacy text-white">
                <h4 class="mb-0">Datos del Cliente</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label>DNI</label>
                            <div class="input-group">
                                <input type="text" id="dni_cliente" class="form-control" placeholder="Ingrese DNI">
                                <button class="btn btn-outline-secondary" type="button" id="btn_buscar_cliente"><i class="fas fa-search"></i></button>
                                <button class="btn btn-pharmacy" type="button" data-bs-toggle="modal" data-bs-target="#modalListarClientes"><i class="fas fa-list"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text" id="nombre_cliente" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label>Teléfono</label>
                            <input type="text" id="tel_cliente" class="form-control" readonly>
                            <input type="hidden" id="id_cliente">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-secondary text-white">
                <h4 class="mb-0">Buscar Producto</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label>Código</label>
                            <input type="text" id="codigo_producto" class="form-control" placeholder="Ingrese Código">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label>Producto</label>
                            <input type="text" id="nombre_producto" class="form-control" placeholder="Nombre del producto">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="mb-3">
                            <label>Stock</label>
                            <input type="text" id="stock_producto" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="mb-3">
                            <label>Precio</label>
                            <input type="text" id="precio_producto" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="mb-3">
                            <label>Cant.</label>
                            <input type="number" id="cant_producto" class="form-control" value="1">
                        </div>
                    </div>
                    <div class="col-md-2 d-grid">
                        <div class="mb-3">
                            <label>&nbsp;</label>
                            <button class="btn btn-pharmacy" id="btn_agregar_producto">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover" id="tablaVenta">
                <thead class="table-dark">
                    <tr>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Subtotal</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="detalle_venta">
                    <!-- Dinámico -->
                </tbody>
                <tfoot id="detalle_totales">
                    <tr>
                        <td colspan="4" class="text-end"><strong>TOTAL S/</strong></td>
                        <td id="total_pagar">0.00</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-success btn-lg" id="btn_generar_venta">
                <i class="fas fa-save me-2"></i> GENERAR VENTA
            </button>
        </div>
    </div>
</div>

<!-- Modal Listar Clientes -->
<div class="modal fade" id="modalListarClientes" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lista de Clientes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="tablaClientes">
                        <thead>
                            <tr>
                                <th>DNI</th>
                                <th>Nombre</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody id="lista_clientes_modal">
                            <!-- Dinámico -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>

<script>
let items = [];

// Listar clientes en el modal
$('#modalListarClientes').on('show.bs.modal', function () {
    $.ajax({
        url: 'ajax/clientes.php?action=list',
        type: 'GET',
        success: function(response) {
            const res = JSON.parse(response);
            let html = '';
            res.forEach(cli => {
                html += `<tr>
                    <td>${cli.dni}</td>
                    <td>${cli.nombre}</td>
                    <td><button class="btn btn-sm btn-pharmacy" onclick="seleccionarCliente(${cli.idcliente}, '${cli.dni}', '${cli.nombre}', '${cli.telefono}')">Seleccionar</button></td>
                </tr>`;
            });
            $('#lista_clientes_modal').html(html);
        }
    });
});

function seleccionarCliente(id, dni, nombre, tel) {
    $('#id_cliente').val(id);
    $('#dni_cliente').val(dni);
    $('#nombre_cliente').val(nombre);
    $('#tel_cliente').val(tel);
    $('#modalListarClientes').modal('hide');
}

// Buscar Cliente
$('#btn_buscar_cliente').click(function() {
    let dni = $('#dni_cliente').val();
    if (dni == '') return;
    $.ajax({
        url: 'ajax/ventas.php?action=searchClient&dni=' + dni,
        type: 'GET',
        success: function(response) {
            const res = JSON.parse(response);
            if (res.status) {
                $('#id_cliente').val(res.data.idcliente);
                $('#nombre_cliente').val(res.data.nombre);
                $('#tel_cliente').val(res.data.telefono);
            } else {
                Swal.fire('No encontrado', 'El cliente no existe', 'warning');
            }
        }
    });
});

// Buscar Producto por Código
$('#codigo_producto').keyup(function(e) {
    if (e.which == 13) {
        let codigo = $(this).val();
        buscarProducto(codigo, 'code');
    }
});

// Buscar Producto por Nombre (autocomplete simplified)
$('#nombre_producto').keyup(function(e) {
    if (e.which == 13) {
        let nombre = $(this).val();
        buscarProducto(nombre, 'name');
    }
});

function buscarProducto(valor, type) {
    $.ajax({
        url: 'ajax/ventas.php?action=searchProduct&valor=' + valor + '&type=' + type,
        type: 'GET',
        success: function(response) {
            const res = JSON.parse(response);
            if (res.status) {
                $('#codigo_producto').val(res.data.codigo);
                $('#nombre_producto').val(res.data.descripcion);
                $('#stock_producto').val(res.data.existencia);
                $('#precio_producto').val(res.data.precio_venta);
                $('#cant_producto').focus();
            }
        }
    });
}

// Agregar producto a la lista
$('#btn_agregar_producto').click(function() {
    let codigo = $('#codigo_producto').val();
    let descripcion = $('#nombre_producto').val();
    let cant = parseInt($('#cant_producto').val());
    let precio = parseFloat($('#precio_producto').val());
    let stock = parseInt($('#stock_producto').val());

    if (codigo == '' || cant <= 0 || isNaN(precio)) return;

    if (cant > stock) {
        Swal.fire('Stock insuficiente', 'Solo hay ' + stock + ' en stock', 'warning');
        return;
    }

    let item = {
        codigo: codigo,
        descripcion: descripcion,
        cantidad: cant,
        precio: precio,
        subtotal: (cant * precio).toFixed(2)
    };

    items.push(item);
    renderTable();
    limpiarCamposProducto();
});

function renderTable() {
    let html = '';
    let total = 0;
    items.forEach((item, index) => {
        html += `<tr>
            <td>${item.codigo}</td>
            <td>${item.descripcion}</td>
            <td>${item.cantidad}</td>
            <td>${item.precio}</td>
            <td>${item.subtotal}</td>
            <td><button class="btn btn-danger btn-sm" onclick="removeItem(${index})"><i class="fas fa-times"></i></button></td>
        </tr>`;
        total += parseFloat(item.subtotal);
    });
    $('#detalle_venta').html(html);
    $('#total_pagar').html(total.toFixed(2));
}

function removeItem(index) {
    items.splice(index, 1);
    renderTable();
}

function limpiarCamposProducto() {
    $('#codigo_producto').val('').focus();
    $('#nombre_producto').val('');
    $('#stock_producto').val('');
    $('#precio_producto').val('');
    $('#cant_producto').val('1');
}

// Generar Venta
$('#btn_generar_venta').click(function() {
    let id_cliente = $('#id_cliente').val();
    if (id_cliente == '') {
        Swal.fire('Error', 'Debe seleccionar un cliente', 'warning');
        return;
    }
    if (items.length == 0) {
        Swal.fire('Error', 'No hay productos en la venta', 'warning');
        return;
    }

    $.ajax({
        url: 'ajax/ventas.php?action=generateSale',
        type: 'POST',
        data: {
            id_cliente: id_cliente,
            items: JSON.stringify(items),
            total: $('#total_pagar').text()
        },
        success: function(response) {
            const res = JSON.parse(response);
            if (res.status) {
                Swal.fire('Éxito', 'Venta generada correctamente', 'success').then(() => {
                    window.open('pdf/ticket.php?id=' + res.id_venta, '_blank');
                    location.reload();
                });
            } else {
                Swal.fire('Error', res.msg, 'error');
            }
        }
    });
});
</script>
