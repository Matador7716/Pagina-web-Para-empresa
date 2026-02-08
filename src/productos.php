<?php
require_once "includes/header.php";
require_once "../conexion.php";

if ($_SESSION['rol'] != 'administrador' && $_SESSION['rol'] != 'supervisor') {
    header('location: index.php');
    exit;
}

// Pagination logic
$limit = 20;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$search = isset($_GET['search']) ? mysqli_real_escape_string($conexion, $_GET['search']) : '';
$where = "";
if ($search != '') {
    $where = "WHERE codigo LIKE '%$search%' OR descripcion LIKE '%$search%'";
}

$query_total = mysqli_query($conexion, "SELECT count(idproducto) AS total FROM productos $where");
$result_total = mysqli_fetch_array($query_total);
$total_records = $result_total['total'];
$total_pages = ceil($total_records / $limit);

$query = mysqli_query($conexion, "SELECT * FROM productos $where LIMIT $start, $limit");
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Productos</h1>
    <div>
        <button type="button" class="btn btn-pharmacy" data-bs-toggle="modal" data-bs-target="#modalProducto" onclick="nuevoProducto()">
            <i class="fas fa-plus me-1"></i> Nuevo
        </button>
    </div>
</div>

<div class="card mb-4">
    <div class="card-body">
        <form action="" method="get" class="row g-3 mb-4">
            <div class="col-md-10">
                <input type="text" name="search" class="form-control" placeholder="Buscar por código o nombre..." value="<?php echo $search; ?>">
            </div>
            <div class="col-md-2 d-grid">
                <button type="submit" class="btn btn-pharmacy">Buscar</button>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Código</th>
                        <th>Producto</th>
                        <th>Precio Compra</th>
                        <th>Precio Venta</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td><?php echo $data['idproducto']; ?></td>
                        <td><?php echo $data['codigo']; ?></td>
                        <td><?php echo $data['descripcion']; ?></td>
                        <td><?php echo $data['precio_compra']; ?></td>
                        <td><?php echo $data['precio_venta']; ?></td>
                        <td><?php echo $data['existencia']; ?></td>
                        <td>
                            <button class="btn btn-sm btn-info text-white" onclick="editarProducto(<?php echo $data['idproducto']; ?>)">
                                <i class="fas fa-edit"></i>
                            </button>
                            <?php if ($_SESSION['rol'] == 'administrador') { ?>
                            <button class="btn btn-sm btn-danger" onclick="eliminarProducto(<?php echo $data['idproducto']; ?>)">
                                <i class="fas fa-trash"></i>
                            </button>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>&search=<?php echo $search; ?>"><?php echo $i; ?></a>
                </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div>

<!-- Modal Producto -->
<div class="modal fade" id="modalProducto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModal">Registrar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formProducto">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id_prod">
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Código de Barras</label>
                        <input type="text" name="codigo" id="codigo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción del Producto</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="precio_compra" class="form-label">Precio Compra</label>
                            <input type="number" step="0.01" name="precio_compra" id="precio_compra" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="precio_venta" class="form-label">Precio Venta</label>
                            <input type="number" step="0.01" name="precio_venta" id="precio_venta" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="existencia" class="form-label">Cantidad (Stock)</label>
                        <input type="number" name="existencia" id="existencia" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-pharmacy" id="btnAccion">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>

<script>
function nuevoProducto() {
    document.getElementById('formProducto').reset();
    document.getElementById('id_prod').value = "";
    document.getElementById('titleModal').innerHTML = "Registrar Producto";
    document.getElementById('btnAccion').innerHTML = "Registrar";
}

$(document).on('submit', '#formProducto', function(e) {
    e.preventDefault();
    $.ajax({
        url: 'ajax/productos.php?action=save',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            const res = JSON.parse(response);
            if (res.status) {
                Swal.fire('Éxito', res.msg, 'success').then(() => location.reload());
            } else {
                Swal.fire('Error', res.msg, 'error');
            }
        }
    });
});

function editarProducto(id) {
    $.ajax({
        url: 'ajax/productos.php?action=get&id=' + id,
        type: 'GET',
        success: function(response) {
            const data = JSON.parse(response);
            $('#id_prod').val(data.idproducto);
            $('#codigo').val(data.codigo);
            $('#descripcion').val(data.descripcion);
            $('#precio_compra').val(data.precio_compra);
            $('#precio_venta').val(data.precio_venta);
            $('#existencia').val(data.existencia);
            $('#titleModal').html("Editar Producto");
            $('#btnAccion').html("Actualizar");
            $('#modalProducto').modal('show');
        }
    });
}

function eliminarProducto(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: 'ajax/productos.php?action=delete&id=' + id,
                type: 'GET',
                success: function(response) {
                    const res = JSON.parse(response);
                    if (res.status) {
                        Swal.fire('Eliminado', res.msg, 'success').then(() => location.reload());
                    } else {
                        Swal.fire('Error', res.msg, 'error');
                    }
                }
            });
        }
    });
}
</script>
