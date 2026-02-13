<?php
include_once "includes/header.php";

// Counts for dashboard
$query_users = mysqli_query($conexion, "SELECT COUNT(*) as total FROM usuarios WHERE estado = 1");
$res_users = mysqli_fetch_assoc($query_users);

$query_chats = mysqli_query($conexion, "SELECT COUNT(*) as total FROM chats");
$res_chats = mysqli_fetch_assoc($query_chats);

$query_respuestas = mysqli_query($conexion, "SELECT COUNT(*) as total FROM preguntas_frecuentes");
$res_respuestas = mysqli_fetch_assoc($query_respuestas);
?>

<div class="container-fluid">
    <h2 class="mb-4">Dashboard</h2>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="stat-card bg-primary">
                <h5>Total Chats</h5>
                <h2><?php echo $res_chats['total']; ?></h2>
                <i class="fas fa-comments"></i>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="stat-card bg-success" style="background-color: #28a745 !important;">
                <h5>Respuestas IA</h5>
                <h2><?php echo $res_respuestas['total']; ?></h2>
                <i class="fas fa-robot"></i>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="stat-card bg-info" style="background-color: #17a2b8 !important;">
                <h5>Usuarios</h5>
                <h2><?php echo $res_users['total']; ?></h2>
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
                                $query_last_chats = mysqli_query($conexion, "SELECT * FROM chats ORDER BY fecha DESC LIMIT 5");
                                while ($row = mysqli_fetch_assoc($query_last_chats)) {
                                    echo "<tr>
                                        <td>{$row['numero_whatsapp']}</td>
                                        <td>" . htmlspecialchars($row['mensaje_usuario']) . "</td>
                                        <td>" . htmlspecialchars($row['respuesta_bot']) . "</td>
                                        <td>{$row['fecha']}</td>
                                    </tr>";
                                }
                                if (mysqli_num_rows($query_last_chats) == 0) {
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
