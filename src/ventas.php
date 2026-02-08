<?php
include_once "includes/header.php";

$stmt = mysqli_prepare($conexion, "SELECT v.*, c.nombre FROM ventas v INNER JOIN clientes c ON v.cliente_id = c.id ORDER BY v.id DESC");
mysqli_stmt_execute($stmt);
$query = mysqli_stmt_get_result($stmt);
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Historial de Ventas
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Fecha</th>
                                <th>Cliente</th>
                                <th>Total</th>
                                <th>Tipo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_assoc($query)) { ?>
                                    <tr>
                                        <td><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['fecha']; ?></td>
                                        <td><?php echo htmlspecialchars($data['nombre']); ?></td>
                                        <td><?php echo number_format($data['total'], 2); ?></td>
                                        <td><?php echo strtoupper($data['tipo']); ?></td>
                                        <td>
                                            <a href="pdf/ticket.php?id=<?php echo $data['id']; ?>" target="_blank" class="btn btn-danger"><i class='fas fa-file-pdf'></i></a>
                                        </td>
                                    </tr>
                            <?php }
                            } else {
                                echo "<tr><td colspan='6' class='text-center'>No hay ventas registradas</td></tr>";
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>
