<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'config/db.php';

// Verificar si hay una caja abierta para el usuario actual
$stmt = $pdo->prepare("SELECT * FROM cash_registers WHERE user_id = ? AND status = 'open'");
$stmt->execute([$_SESSION['user_id']]);
$open_cash = $stmt->fetch();

// Obtener historial de cajas
$stmt = $pdo->prepare("SELECT cr.*, u.username FROM cash_registers cr JOIN users u ON cr.user_id = u.id ORDER BY cr.opening_date DESC LIMIT 10");
$stmt->execute();
$cash_history = $stmt->fetchAll();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Control de Caja</h1>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header bg-primary text-white">
                    <i class="bi bi-cash-stack"></i> Estado de Caja
                </div>
                <div class="card-body text-center">
                    <?php if ($open_cash): ?>
                        <div class="alert alert-success">
                            <i class="bi bi-unlock-fill fs-1"></i>
                            <h4>Caja Abierta</h4>
                            <p>Abierta el: <?php echo $open_cash['opening_date']; ?></p>
                            <p class="fs-4">Saldo Inicial: S/ <?php echo number_format($open_cash['opening_balance'], 2); ?></p>
                        </div>

                        <?php
                        // Calcular ventas actuales en esta caja
                        $stmt = $pdo->prepare("SELECT SUM(final_amount) FROM sales WHERE cash_register_id = ?");
                        $stmt->execute([$open_cash['id']]);
                        $current_sales = $stmt->fetchColumn() ?? 0;

                        // Calcular movimientos (ingresos/egresos)
                        $stmt = $pdo->prepare("SELECT SUM(amount) FROM cash_movements WHERE cash_register_id = ? AND type = 'income'");
                        $stmt->execute([$open_cash['id']]);
                        $extra_income = $stmt->fetchColumn() ?? 0;

                        $stmt = $pdo->prepare("SELECT SUM(amount) FROM cash_movements WHERE cash_register_id = ? AND type = 'expense'");
                        $stmt->execute([$open_cash['id']]);
                        $extra_expense = $stmt->fetchColumn() ?? 0;

                        $expected_total = $open_cash['opening_balance'] + $current_sales + $extra_income - $extra_expense;
                        ?>

                        <div class="mb-3">
                            <p>Ventas Realizadas: S/ <?php echo number_format($current_sales, 2); ?></p>
                            <p>Otros Ingresos: S/ <?php echo number_format($extra_income, 2); ?></p>
                            <p>Egresos: S/ <?php echo number_format($extra_expense, 2); ?></p>
                            <hr>
                            <p class="fw-bold fs-5">Total en Caja Esperado: S/ <?php echo number_format($expected_total, 2); ?></p>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#movementModal">
                                <i class="bi bi-plus-minus"></i> Registrar Movimiento
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#closeCashModal">
                                <i class="bi bi-lock-fill"></i> Cerrar Caja
                            </button>
                        </div>

                    <?php else: ?>
                        <div class="alert alert-secondary">
                            <i class="bi bi-lock-fill fs-1"></i>
                            <h4>Caja Cerrada</h4>
                            <p>No tienes una sesión de caja activa.</p>
                        </div>
                        <form id="openCashForm">
                            <input type="hidden" name="csrf_token" value="<?php echo get_csrf_token(); ?>">
                            <div class="mb-3">
                                <label class="form-label">Saldo Inicial</label>
                                <input type="number" step="0.01" class="form-control" name="opening_balance" value="0.00" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Abrir Caja</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    <i class="bi bi-clock-history"></i> Historial de Cajas
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Apertura</th>
                                <th>Cierre</th>
                                <th>S. Inicial</th>
                                <th>S. Final</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cash_history as $ch): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($ch['username']); ?></td>
                                <td><?php echo $ch['opening_date']; ?></td>
                                <td><?php echo $ch['closing_date'] ?? '-'; ?></td>
                                <td>S/ <?php echo number_format($ch['opening_balance'], 2); ?></td>
                                <td>S/ <?php echo $ch['closing_balance'] ? number_format($ch['closing_balance'], 2) : '-'; ?></td>
                                <td>
                                    <span class="badge bg-<?php echo $ch['status'] === 'open' ? 'success' : 'secondary'; ?>">
                                        <?php echo $ch['status'] === 'open' ? 'Abierta' : 'Cerrada'; ?>
                                    </span>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Movimiento -->
    <div class="modal fade" id="movementModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="movementForm">
                    <div class="modal-header">
                        <h5 class="modal-title">Registrar Movimiento de Caja</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="csrf_token" value="<?php echo get_csrf_token(); ?>">
                        <input type="hidden" name="cash_register_id" value="<?php echo $open_cash['id'] ?? ''; ?>">
                        <div class="mb-3">
                            <label class="form-label">Tipo</label>
                            <select class="form-select" name="type" required>
                                <option value="income">Ingreso (+)</option>
                                <option value="expense">Egreso (-)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Monto</label>
                            <input type="number" step="0.01" class="form-control" name="amount" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descripción</label>
                            <textarea class="form-control" name="description" rows="2" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Cerrar Caja -->
    <div class="modal fade" id="closeCashModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="closeCashForm">
                    <div class="modal-header">
                        <h5 class="modal-title">Cerrar Caja</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body text-center">
                        <input type="hidden" name="csrf_token" value="<?php echo get_csrf_token(); ?>">
                        <input type="hidden" name="id" value="<?php echo $open_cash['id'] ?? ''; ?>">
                        <i class="bi bi-exclamation-triangle text-warning display-4"></i>
                        <p class="mt-3">¿Estás seguro de que deseas cerrar la caja?</p>
                        <p>Total esperado: <strong>S/ <?php echo number_format($expected_total, 2); ?></strong></p>
                        <div class="mb-3">
                            <label class="form-label">Saldo Final Real (Conteo Físico)</label>
                            <input type="number" step="0.01" class="form-control" name="closing_balance" value="<?php echo $expected_total; ?>" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Confirmar Cierre</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>
