<?php
include_once "includes/header.php";

// Counts for dashboard
// Usuarios
$stmt = mysqli_prepare($conexion, "SELECT COUNT(*) FROM usuarios WHERE estado = 1");
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $total_users);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);

// Chats
$stmt = mysqli_prepare($conexion, "SELECT COUNT(*) FROM chats");
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $total_chats);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);

// Respuestas
$stmt = mysqli_prepare($conexion, "SELECT COUNT(*) FROM preguntas_frecuentes");
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $total_respuestas);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);
?>

<div class="container-fluid">
    <h2 class="mb-4">Dashboard</h2>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="stat-card bg-primary">
                <h5>Total Chats</h5>
                <h2><?php echo $total_chats; ?></h2>
                <i class="fas fa-comments"></i>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="stat-card bg-success" style="background-color: #28a745 !important;">
                <h5>Respuestas IA</h5>
                <h2><?php echo $total_respuestas; ?></h2>
                <i class="fas fa-robot"></i>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="stat-card bg-info" style="background-color: #17a2b8 !important;">
                <h5>Usuarios</h5>
                <h2><?php echo $total_users; ?></h2>
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white">
                    <h5 class="card-title mb-0">Últimas Conversaciones</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>WhatsApp</th>
                                    <th>Mensaje</th>
                                    <th>Respuesta Bot</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $stmt = mysqli_prepare($conexion, "SELECT numero_whatsapp, mensaje_usuario, respuesta_bot, fecha FROM chats ORDER BY fecha DESC LIMIT 5");
                                mysqli_stmt_execute($stmt);
                                mysqli_stmt_bind_result($stmt, $num_wa, $msg_u, $resp_b, $fecha);
                                $has_records = false;
                                while (mysqli_stmt_fetch($stmt)) {
                                    $has_records = true;
                                    echo "<tr>
                                        <td>{$num_wa}</td>
                                        <td>" . htmlspecialchars($msg_u) . "</td>
                                        <td>" . htmlspecialchars($resp_b) . "</td>
                                        <td>{$fecha}</td>
                                    </tr>";
                                }
                                mysqli_stmt_close($stmt);
                                if (!$has_records) {
                                    echo "<tr><td colspan='4' class='text-center'>No hay chats registrados</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>
