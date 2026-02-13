<?php
include_once "includes/header.php";

$where = "";
if (!empty($_GET['numero'])) {
    $num = mysqli_real_escape_string($conexion, $_GET['numero']);
    $where = " WHERE numero_whatsapp LIKE '%$num%'";
}
?>

<div class="container-fluid">
    <h2 class="mb-4">Monitor de Chats</h2>

    <div class="card mb-4">
        <div class="card-body">
            <form method="GET" class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Filtrar por Número</label>
                    <input type="text" name="numero" class="form-control" placeholder="Ej: 51935..." value="<?php echo $_GET['numero'] ?? ''; ?>">
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100"><i class="fas fa-search me-2"></i> Filtrar</button>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <a href="chats.php" class="btn btn-secondary w-100">Limpiar</a>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>WhatsApp</th>
                            <th>Mensaje Usuario</th>
                            <th>Respuesta Bot</th>
                            <th>Fecha/Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM chats $where ORDER BY fecha DESC");
                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><strong><?php echo $row['numero_whatsapp']; ?></strong></td>
                                <td><?php echo htmlspecialchars($row['mensaje_usuario']); ?></td>
                                <td><span class="text-primary"><?php echo htmlspecialchars($row['respuesta_bot']); ?></span></td>
                                <td><?php echo $row['fecha']; ?></td>
                            </tr>
                        <?php }
                        if (mysqli_num_rows($query) == 0) {
                            echo "<tr><td colspan='5' class='text-center'>No se encontraron registros</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>
