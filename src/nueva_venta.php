<?php
include_once "includes/header.php";
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Nueva Venta
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="card-header bg-dark text-white">
                                Datos del Cliente
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <input type="hidden" id="id_cliente" value="1">
                                    <label for="dni_cliente">DNI / RUC</label>
                                    <input type="text" id="dni_cliente" class="form-control" placeholder="Ingrese DNI">
                                </div>
                                <div class="mb-3">
                                    <label for="nom_cliente">Nombre</label>
                                    <input type="text" id="nom_cliente" class="form-control" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="tel_cliente">Teléfono</label>
                                    <input type="text" id="tel_cliente" class="form-control" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="dir_cliente">Dirección</label>
                                    <input type="text" id="dir_cliente" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                Buscar Producto
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="codigo_producto">Código</label>
                                            <input type="text" id="codigo_producto" class="form-control" placeholder="Código de barras">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="mb-3">
                                            <label for="nombre_producto">Descripción</label>
                                            <input type="text" id="nombre_producto" class="form-control" placeholder="Nombre del producto">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label for="cantidad_producto">Cantidad</label>
                                            <input type="number" id="cantidad_producto" class="form-control" value="1" min="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>Precio</label>
                                            <input type="text" id="precio_producto" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>Stock</label>
                                            <input type="text" id="stock_producto" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label>Subtotal</label>
                                            <input type="text" id="subtotal_producto" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 d-flex align-items-end">
                                        <button class="btn btn-primary w-100 mb-3" id="btn_agregar_producto">Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive mt-4">
                    <table class="table table-hover" id="tabla_venta">
                        <thead class="bg-dark text-white">
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
                            <!-- Aquí se cargarán los productos mediante AJAX -->
                        </tbody>
                        <tfoot id="detalle_totales">
                            <!-- Totales -->
                        </tfoot>
                    </table>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4 ms-auto text-end">
                        <button class="btn btn-success" id="btn_generar_venta">GENERAR VENTA</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para elegir tipo de comprobante -->
<div class="modal fade" id="modal_tipo_comprobante" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Seleccionar Tipo de Comprobante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary btn-lg" onclick="procesarVenta('ticket')">Ticket</button>
                    <button class="btn btn-outline-primary btn-lg" onclick="procesarVenta('boleta')">Boleta</button>
                    <button class="btn btn-outline-primary btn-lg" onclick="procesarVenta('factura')">Factura</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>
