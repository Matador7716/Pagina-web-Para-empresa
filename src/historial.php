<?php
require_once "includes/header.php";
require_once "../conexion.php";

$query = mysqli_query($conexion, "SELECT v.*, c.nombre AS cliente, u.nombre AS usuario FROM ventas v INNER JOIN clientes c ON v.id_cliente = c.idcliente INNER JOIN usuarios u ON v.id_usuario = u.idusuario ORDER BY v.idventa DESC");
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">Historial de Ventas</h1>
</div>

<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Cliente</th>
                        <th>Total</th>
                        <th>Vendedor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td><?php echo $data['idventa']; ?></td>
                        <td><?php echo $data['fecha']; ?></td>
                        <td><?php echo $data['cliente']; ?></td>
                        <td><?php echo $data['total']; ?></td>
                        <td><?php echo $data['usuario']; ?></td>
                        <td>
                            <a href="pdf/ticket.php?id=<?php echo $data['idventa']; ?>" target="_blank" class="btn btn-danger btn-sm">
                                <i class="fas fa-file-pdf me-1"></i> PDF
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>
