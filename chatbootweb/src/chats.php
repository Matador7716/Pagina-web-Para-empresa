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
                        if (!empty($_GET['numero'])) {
                            $num = "%" . $_GET['numero'] . "%";
                            $stmt = mysqli_prepare($conexion, "SELECT id, numero_whatsapp, mensaje_usuario, respuesta_bot, fecha FROM chats WHERE numero_whatsapp LIKE ? ORDER BY fecha DESC");
                            mysqli_stmt_bind_param($stmt, "s", $num);
                        } else {
                            $stmt = mysqli_prepare($conexion, "SELECT id, numero_whatsapp, mensaje_usuario, respuesta_bot, fecha FROM chats ORDER BY fecha DESC");
                        }

                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_bind_result($stmt, $cid, $cwa, $cmsg, $cresp, $cfecha);
                        $has_rows = false;
                        while (mysqli_stmt_fetch($stmt)) {
                            $has_rows = true;
                        ?>
                            <tr>
                                <td><?php echo $cid; ?></td>
                                <td><strong><?php echo $cwa; ?></strong></td>
                                <td><?php echo htmlspecialchars($cmsg); ?></td>
                                <td><span class="text-primary"><?php echo htmlspecialchars($cresp); ?></span></td>
                                <td><?php echo $cfecha; ?></td>
                            </tr>
                        <?php }
                        mysqli_stmt_close($stmt);
                        if (!$has_rows) {
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
