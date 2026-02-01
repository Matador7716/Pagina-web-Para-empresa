<?php
include 'includes/header.php';
include 'includes/sidebar.php';

// Fetch customers
$stmt = $pdo->query("SELECT * FROM customers ORDER BY name ASC");
$customers = $stmt->fetchAll();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Clientes</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
            Nuevo Cliente
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>DNI/RUC</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $c): ?>
                <tr>
                    <td><?php echo htmlspecialchars($c['name']); ?></td>
                    <td><?php echo htmlspecialchars($c['dni_ruc']); ?></td>
                    <td><?php echo htmlspecialchars($c['phone']); ?></td>
                    <td><?php echo htmlspecialchars($c['email']); ?></td>
                    <td><?php echo htmlspecialchars($c['address']); ?></td>
                    <td>
                        <button class="btn btn-sm btn-info edit-cust"
                            data-id="<?php echo $c['id']; ?>"
                            data-name="<?php echo htmlspecialchars($c['name']); ?>"
                            data-dni="<?php echo htmlspecialchars($c['dni_ruc']); ?>"
                            data-phone="<?php echo htmlspecialchars($c['phone']); ?>"
                            data-email="<?php echo htmlspecialchars($c['email']); ?>"
                            data-address="<?php echo htmlspecialchars($c['address']); ?>">Editar</button>
                        <a href="view_customer.php?id=<?php echo $c['id']; ?>" class="btn btn-sm btn-outline-primary">Historial</a>
                        <a href="php_logic/client_actions.php?action=delete&id=<?php echo $c['id']; ?>&csrf_token=<?php echo get_csrf_token(); ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<!-- Modal Add -->
<div class="modal fade" id="addCustomerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form action="php_logic/client_actions.php?action=add" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo get_csrf_token(); ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nuevo Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nombre Completo</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">DNI / RUC</label>
                        <input type="text" name="dni_ruc" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dirección</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editCustomerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form action="php_logic/client_actions.php?action=edit" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo get_csrf_token(); ?>">
            <input type="hidden" name="id" id="edit-id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nombre Completo</label>
                        <input type="text" name="name" id="edit-name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">DNI / RUC</label>
                        <input type="text" name="dni_ruc" id="edit-dni" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono</label>
                        <input type="text" name="phone" id="edit-phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" id="edit-email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dirección</label>
                        <input type="text" name="address" id="edit-address" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<script>
$(document).ready(function() {
    $('.edit-cust').click(function() {
        $('#edit-id').val($(this).data('id'));
        $('#edit-name').val($(this).data('name'));
        $('#edit-dni').val($(this).data('dni'));
        $('#edit-phone').val($(this).data('phone'));
        $('#edit-email').val($(this).data('email'));
        $('#edit-address').val($(this).data('address'));
        var myModal = new bootstrap.Modal(document.getElementById('editCustomerModal'));
        myModal.show();
    });
});
</script>
