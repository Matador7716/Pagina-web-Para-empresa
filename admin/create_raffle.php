<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

require_once '../config/db.php';
require_once '../includes/header.php';
require_once '../includes/csrf.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    validate_csrf_token();
    $name = $_POST['name'];
    $description = $_POST['description'];
    $prize = $_POST['prize'];
    $ticket_price = $_POST['ticket_price'];
    $total_tickets = $_POST['total_tickets'];
    $end_date = $_POST['end_date'];

    if (!empty($name) && !empty($prize) && !empty($ticket_price) && !empty($total_tickets) && !empty($end_date)) {
        $stmt = $conn->prepare("INSERT INTO raffles (name, description, prize, ticket_price, total_tickets, end_date) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssdis", $name, $description, $prize, $ticket_price, $total_tickets, $end_date);

        if ($stmt->execute()) {
            $message = '¡Sorteo creado exitosamente!';
        } else {
            $message = 'Error: No se pudo crear el sorteo.';
        }
    } else {
        $message = 'Por favor, completa todos los campos requeridos.';
    }
}
?>

<main class="container">
    <h2>Crear Nuevo Sorteo</h2>
    <?php if ($message): ?>
        <div class="alert alert-info"><?php echo $message; ?></div>
    <?php endif; ?>
    <form action="create_raffle.php" method="post">
        <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre del Sorteo:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="prize" class="form-label">Premio:</label>
            <input type="text" name="prize" id="prize" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="ticket_price" class="form-label">Precio del Boleto:</label>
            <input type="number" step="0.01" name="ticket_price" id="ticket_price" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="total_tickets" class="form-label">Total de Boletos:</label>
            <input type="number" name="total_tickets" id="total_tickets" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label">Fecha de Finalización:</label>
            <input type="datetime-local" name="end_date" id="end_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Sorteo</button>
    </form>
</main>

<?php require_once '../includes/footer.php'; ?>
