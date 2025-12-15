<?php
require_once '../config/db.php';
require_once '../includes/header.php';

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$raffle_id = (int)$_GET['id'];
$stmt = $conn->prepare("SELECT * FROM raffles WHERE id = ?");
$stmt->bind_param("i", $raffle_id);
$stmt->execute();
$result = $stmt->get_result();
$raffle = $result->fetch_assoc();

if (!$raffle) {
    echo "<p>Sorteo no encontrado.</p>";
    require_once '../includes/footer.php';
    exit;
}
?>

<main class="container">
    <h2><?php echo htmlspecialchars($raffle['name']); ?></h2>
    <div class="row">
        <div class="col-md-8">
            <p><?php echo htmlspecialchars($raffle['description']); ?></p>
            <p><strong>Premio:</strong> <?php echo htmlspecialchars($raffle['prize']); ?></p>
            <p><strong>Precio del Boleto:</strong> $<?php echo htmlspecialchars($raffle['ticket_price']); ?></p>
            <p><strong>Fecha de finalización:</strong> <?php echo htmlspecialchars($raffle['end_date']); ?></p>
        </div>
        <div class="col-md-4">
            <h4>Comprar Boletos</h4>
            <form action="cart.php" method="post">
                <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>">
                <input type="hidden" name="raffle_id" value="<?php echo $raffle['id']; ?>">
                <div class="mb-3">
                    <label for="quantity" class="form-label">Cantidad:</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-success">Añadir al Carrito</button>
            </form>
        </div>
    </div>
</main>

<?php require_once '../includes/footer.php'; ?>
