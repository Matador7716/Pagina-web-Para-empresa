<?php
$page_title = 'Dashboard';
require_once 'includes/header.php';
require_once 'php/db.php';

// Get some stats
$res_pacientes = $conn->query("SELECT COUNT(*) as total FROM pacientes");
$total_pacientes = $res_pacientes->fetch_assoc()['total'];

$res_citas = $conn->query("SELECT COUNT(*) as total FROM citas WHERE fecha = CURDATE()");
$citas_hoy = $res_citas->fetch_assoc()['total'];

$res_pendientes = $conn->query("SELECT COUNT(*) as total FROM cobros WHERE estado_pago = 'pendiente'");
$cobros_pendientes = $res_pendientes->fetch_assoc()['total'];
?>

<div class="row">
    <div class="col-md-12 mb-4">
        <h2>Panel de Control</h2>
        <p class="text-muted">Resumen general del sistema</p>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card bg-primary text-white p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-uppercase mb-1">Pacientes Totales</h6>
                    <h2 class="mb-0"><?php echo $total_pacientes; ?></h2>
                </div>
                <i class="fas fa-user-injured stat-icon"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-success text-white p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-uppercase mb-1">Citas para Hoy</h6>
                    <h2 class="mb-0"><?php echo $citas_hoy; ?></h2>
                </div>
                <i class="fas fa-calendar-check stat-icon"></i>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-warning text-dark p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-uppercase mb-1">Cobros Pendientes</h6>
                    <h2 class="mb-0"><?php echo $cobros_pendientes; ?></h2>
                </div>
                <i class="fas fa-wallet stat-icon"></i>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card p-4 h-100">
            <h5 class="card-title mb-4">Próximas Citas</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Paciente</th>
                            <th>Hora</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stmt = $conn->query("SELECT c.*, p.nombre as paciente_nombre FROM citas c JOIN pacientes p ON c.id_paciente = p.id WHERE c.fecha >= CURDATE() ORDER BY c.fecha, c.hora LIMIT 5");
                        while($cita = $stmt->fetch_assoc()):
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($cita['paciente_nombre']); ?></td>
                            <td><?php echo htmlspecialchars($cita['fecha'] . ' ' . $cita['hora']); ?></td>
                            <td>
                                <span class="badge bg-<?php echo $cita['tipo'] == 'virtual' ? 'info' : 'secondary'; ?>">
                                    <?php echo ucfirst($cita['tipo']); ?>
                                </span>
                            </td>
                            <td>
                                <span class="badge bg-<?php echo $cita['estado'] == 'pendiente' ? 'warning' : ($cita['estado'] == 'completada' ? 'success' : 'danger'); ?>">
                                    <?php echo ucfirst($cita['estado']); ?>
                                </span>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                        <?php if($stmt->num_rows == 0): ?>
                        <tr>
                            <td colspan="4" class="text-center">No hay citas programadas</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-4 h-100">
            <h5 class="card-title mb-4">Acciones Rápidas</h5>
            <div class="d-grid gap-2">
                <a href="agenda.php" class="btn btn-outline-primary p-3">
                    <i class="fas fa-calendar-plus me-2"></i> Agendar Nueva Cita
                </a>
                <a href="pacientes.php" class="btn btn-outline-success p-3">
                    <i class="fas fa-user-plus me-2"></i> Registrar Paciente
                </a>
                <a href="cobros.php" class="btn btn-outline-info p-3">
                    <i class="fas fa-receipt me-2"></i> Registrar Cobro
                </a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
