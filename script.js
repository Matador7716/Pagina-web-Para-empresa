$(document).ready(function () {
    // Listar detalle al cargar nueva_venta
    if ($('#detalle_venta').length > 0) {
        listarDetalle();
    }

    // Buscar Cliente por DNI
    $('#dni_cliente').keyup(function (e) {
        e.preventDefault();
        var dni = $(this).val();
        if (dni.length >= 8) {
            $.ajax({
                url: 'ajax.php',
                type: 'POST',
                data: { action: 'buscarCliente', dni: dni },
                success: function (response) {
                    if (response != 0) {
                        var data = JSON.parse(response);
                        $('#id_cliente').val(data.id);
                        $('#nom_cliente').val(data.nombre);
                        $('#tel_cliente').val(data.telefono);
                        $('#dir_cliente').val(data.direccion);
                    } else {
                        $('#id_cliente').val('');
                        $('#nom_cliente').val('');
                        $('#tel_cliente').val('');
                        $('#dir_cliente').val('');
                    }
                }
            });
        }
    });

    // Autocomplete para Producto por Nombre
    $("#nombre_producto").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: "ajax.php",
                type: 'POST',
                dataType: "json",
                data: {
                    action: 'buscarProducto',
                    codigo: request.term,
                    autocomplete: 'true'
                },
                success: function(data) {
                    response(data);
                }
            });
        },
        minLength: 2,
        select: function(event, ui) {
            $('#id_producto').val(ui.item.id);
            $('#codigo_producto').val(ui.item.codigo);
            $('#nombre_producto').val(ui.item.label);
            $('#precio_producto').val(ui.item.precio);
            $('#stock_producto').val(ui.item.stock);
            $('#cantidad_producto').focus();
            calcularSubtotal();
            return false;
        }
    });

    // Buscar Producto por Código
    $('#codigo_producto').keyup(function (e) {
        e.preventDefault();
        var codigo = $(this).val();
        if (codigo.length >= 1) {
            $.ajax({
                url: 'ajax.php',
                type: 'POST',
                data: { action: 'buscarProducto', codigo: codigo },
                success: function (response) {
                    if (response != 0) {
                        var data = JSON.parse(response);
                        $('#id_producto').val(data.id);
                        $('#nombre_producto').val(data.nombre);
                        $('#precio_producto').val(data.precio_venta);
                        $('#stock_producto').val(data.cantidad);
                        $('#cantidad_producto').focus();
                        calcularSubtotal();
                    } else {
                        $('#id_producto').val('');
                        $('#nombre_producto').val('');
                        $('#precio_producto').val('');
                        $('#stock_producto').val('');
                        $('#subtotal_producto').val('');
                    }
                }
            });
        }
    });

    // Calcular subtotal al cambiar cantidad
    $('#cantidad_producto').on('keyup change', function () {
        calcularSubtotal();
    });

    // Agregar producto al detalle
    $('#btn_agregar_producto').click(function (e) {
        e.preventDefault();
        var id = $('#id_producto').val();
        var cant = $('#cantidad_producto').val();
        var stock = $('#stock_producto').val();

        if (id == '' || cant < 1) {
            Swal.fire('Error', 'Seleccione un producto y cantidad válida', 'warning');
            return;
        }

        if (parseInt(cant) > parseInt(stock)) {
            Swal.fire('Error', 'Stock insuficiente. Disponible: ' + stock, 'error');
            return;
        }

        $.ajax({
            url: 'ajax.php',
            type: 'POST',
            data: { action: 'agregarProducto', id: id, cantidad: cant },
            success: function (res) {
                if (res == 'ok') {
                    listarDetalle();
                    $('#id_producto').val('');
                    $('#codigo_producto').val('').focus();
                    $('#nombre_producto').val('');
                    $('#precio_producto').val('');
                    $('#stock_producto').val('');
                    $('#subtotal_producto').val('');
                    $('#cantidad_producto').val('1');
                } else {
                    Swal.fire('Error', 'No se pudo agregar el producto', 'error');
                }
            },
            error: function() {
                Swal.fire('Error', 'Error de conexión', 'error');
            }
        });
    });

    // Botón generar venta
    $('#btn_generar_venta').click(function () {
        var rows = $('#detalle_venta tr').length;
        if (rows > 0) {
            $('#modal_tipo_comprobante').modal('show');
        } else {
            Swal.fire('Error', 'No hay productos en la venta', 'warning');
        }
    });
});

function calcularSubtotal() {
    var cant = $('#cantidad_producto').val();
    var precio = $('#precio_producto').val();
    var subtotal = cant * precio;
    $('#subtotal_producto').val(subtotal.toFixed(2));
}

function listarDetalle() {
    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: { action: 'listarDetalle' },
        success: function (response) {
            try {
                var data = JSON.parse(response);
                $('#detalle_venta').html(data.html);
                $('#detalle_totales').html(data.footer);
            } catch (e) {
                console.error("Error parsing JSON:", response);
            }
        }
    });
}

function eliminarDetalle(key) {
    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: { action: 'eliminarDetalle', key: key },
        success: function (response) {
            if (response == 'ok') {
                listarDetalle();
            }
        }
    });
}

function procesarVenta(tipo) {
    var id_cliente = $('#id_cliente').val();
    if (id_cliente == '') {
        Swal.fire('Error', 'Debe seleccionar un cliente', 'warning');
        return;
    }
    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: { action: 'procesarVenta', id_cliente: id_cliente, tipo: tipo },
        success: function (response) {
            if (response.indexOf('insuficiente_') !== -1) {
                var prod = response.replace('insuficiente_', '');
                Swal.fire('Error', 'Stock insuficiente para: ' + prod, 'error');
            } else if (response == 'vacio') {
                Swal.fire('Error', 'La venta está vacía', 'warning');
            } else if (response != 'error') {
                $('#modal_tipo_comprobante').modal('hide');
                Swal.fire({
                    title: 'Venta Generada',
                    text: '¿Desea imprimir el comprobante?',
                    icon: 'success',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, imprimir',
                    cancelButtonText: 'No, después'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.open('pdf/ticket.php?id=' + response, '_blank');
                    }
                    location.reload();
                });
            } else {
                Swal.fire('Error', 'No se pudo procesar la venta', 'error');
            }
        }
    });
}
