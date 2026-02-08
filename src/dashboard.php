<?php
include_once "includes/header.php";

$usuarios = mysqli_query($conexion, "SELECT id FROM usuarios");
$totalU = mysqli_num_rows($usuarios);
$clientes = mysqli_query($conexion, "SELECT id FROM clientes");
$totalC = mysqli_num_rows($clientes);
$productos = mysqli_query($conexion, "SELECT id FROM productos");
$totalP = mysqli_num_rows($productos);
$ventas = mysqli_query($conexion, "SELECT id FROM ventas");
$totalV = mysqli_num_rows($ventas);
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
                        <label for="mes" class="visually-hidden">Mes</label>
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
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Filtrar</button>
                    </div>
                </form>
                <?php
                $mes = isset($_GET['mes']) ? $_GET['mes'] : date('m');
                $año = date('Y');
                $stmt_stats = mysqli_prepare($conexion, "SELECT SUM(total) as total_mes, COUNT(*) as cant_ventas FROM ventas WHERE MONTH(fecha) = ? AND YEAR(fecha) = ?");
                mysqli_stmt_bind_param($stmt_stats, "ss", $mes, $año);
                mysqli_stmt_execute($stmt_stats);
                $stats = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt_stats));
                ?>
                <div class="alert alert-info">
                    <strong>Resumen del mes:</strong><br>
                    Ventas realizadas: <?php echo $stats['cant_ventas'] ? $stats['cant_ventas'] : 0; ?><br>
                    Total recaudado: S/ <?php echo number_format($stats['total_mes'] ? $stats['total_mes'] : 0, 2); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>
