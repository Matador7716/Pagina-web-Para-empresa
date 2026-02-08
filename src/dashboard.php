<?php
include_once "includes/header.php";

$stmt_u = mysqli_prepare($conexion, "SELECT COUNT(*) as total FROM usuarios");
mysqli_stmt_execute($stmt_u);
$totalU = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt_u))['total'];

$stmt_c = mysqli_prepare($conexion, "SELECT COUNT(*) as total FROM clientes");
mysqli_stmt_execute($stmt_c);
$totalC = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt_c))['total'];

$stmt_p = mysqli_prepare($conexion, "SELECT COUNT(*) as total FROM productos");
mysqli_stmt_execute($stmt_p);
$totalP = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt_p))['total'];

$stmt_v = mysqli_prepare($conexion, "SELECT COUNT(*) as total FROM ventas");
mysqli_stmt_execute($stmt_v);
$totalV = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt_v))['total'];
?>

<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1">Usuarios</h6>
                        <h2 class="mb-0"><?php echo $totalU; ?></h2>
                    </div>
                    <i class="fas fa-users fa-2x"></i>
                </div>
            </div>
            <a href="usuarios.php" class="card-footer text-white d-flex align-items-center justify-content-between small">
                Ver Detalles <i class="fas fa-angle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
        <div class="card bg-success text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1">Clientes</h6>
                        <h2 class="mb-0"><?php echo $totalC; ?></h2>
                    </div>
                    <i class="fas fa-user-friends fa-2x"></i>
                </div>
            </div>
            <a href="clientes.php" class="card-footer text-white d-flex align-items-center justify-content-between small">
                Ver Detalles <i class="fas fa-angle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
        <div class="card bg-warning text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1">Productos</h6>
                        <h2 class="mb-0"><?php echo $totalP; ?></h2>
                    </div>
                    <i class="fas fa-box fa-2x"></i>
                </div>
            </div>
            <a href="productos.php" class="card-footer text-white d-flex align-items-center justify-content-between small">
                Ver Detalles <i class="fas fa-angle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
        <div class="card bg-danger text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-uppercase mb-1">Ventas Totales</h6>
                        <h2 class="mb-0"><?php echo $totalV; ?></h2>
                    </div>
                    <i class="fas fa-shopping-cart fa-2x"></i>
                </div>
            </div>
            <a href="ventas.php" class="card-footer text-white d-flex align-items-center justify-content-between small">
                Ver Detalles <i class="fas fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-dark text-white">
                Resumen Estadístico de Ventas
            </div>
            <div class="card-body">
                <form action="dashboard.php" method="get" class="row g-3 mb-4">
                    <div class="col-auto">
                        <label for="fecha" class="form-label">Por Día:</label>
                        <input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo isset($_GET['fecha']) ? $_GET['fecha'] : ''; ?>">
                    </div>
                    <div class="col-auto">
                        <label for="mes" class="form-label">Por Mes:</label>
                        <select name="mes" id="mes" class="form-select">
                            <option value="">Seleccionar Mes</option>
                            <option value="01">Enero</option>
                            <option value="02">Febrero</option>
                            <option value="03">Marzo</option>
                            <option value="04">Abril</option>
                            <option value="05">Mayo</option>
                            <option value="06">Junio</option>
                            <option value="07">Julio</option>
                            <option value="08">Agosto</option>
                            <option value="09">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                        </select>
                    </div>
                    <div class="col-auto d-flex align-items-end">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </div>
                </form>
                <?php
                if (isset($_GET['fecha']) && !empty($_GET['fecha'])) {
                    $fecha = $_GET['fecha'];
                    $stmt_stats = mysqli_prepare($conexion, "SELECT SUM(total) as total_res, COUNT(*) as cant_ventas FROM ventas WHERE DATE(fecha) = ?");
                    mysqli_stmt_bind_param($stmt_stats, "s", $fecha);
                    $titulo = "Resumen del día ($fecha)";
                } else {
                    $mes = (isset($_GET['mes']) && !empty($_GET['mes'])) ? $_GET['mes'] : date('m');
                    $año = date('Y');
                    $stmt_stats = mysqli_prepare($conexion, "SELECT SUM(total) as total_res, COUNT(*) as cant_ventas FROM ventas WHERE MONTH(fecha) = ? AND YEAR(fecha) = ?");
                    mysqli_stmt_bind_param($stmt_stats, "ss", $mes, $año);
                    $titulo = "Resumen del mes ($mes/$año)";
                }
                mysqli_stmt_execute($stmt_stats);
                $stats = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt_stats));
                ?>
                <div class="alert alert-info">
                    <strong><?php echo $titulo; ?>:</strong><br>
                    Ventas realizadas: <?php echo $stats['cant_ventas'] ? $stats['cant_ventas'] : 0; ?><br>
                    Total recaudado: S/ <?php echo number_format($stats['total_res'] ? $stats['total_res'] : 0, 2); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>
