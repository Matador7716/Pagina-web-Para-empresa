<?php
session_start();
require_once '../config/db.php';
require_once '../includes/header.php';

if (!isset($_SESSION['user_id']) || !isset($_GET['order_id'])) {
    header('Location: index.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$order_id = (int)$_GET['order_id'];

// Fetch order details
$stmt = $conn->prepare("SELECT * FROM orders WHERE id = ? AND user_id = ?");
$stmt->bind_param("ii", $order_id, $user_id);
$stmt->execute();
$order_result = $stmt->get_result();
$order = $order_result->fetch_assoc();

if (!$order) {
    echo "<p>Pedido no encontrado.</p>";
    require_once '../includes/footer.php';
    exit;
}

// Fetch the tickets for this order
$ticket_stmt = $conn->prepare("SELECT t.ticket_number, r.name as raffle_name FROM tickets t JOIN raffles r ON t.raffle_id = r.id WHERE t.order_id = ?");
$ticket_stmt->bind_param("i", $order_id);
$ticket_stmt->execute();
$ticket_result = $ticket_stmt->get_result();

$tickets_by_raffle = [];
while ($ticket = $ticket_result->fetch_assoc()) {
    $tickets_by_raffle[$ticket['raffle_name']][] = $ticket['ticket_number'];
}

$whatsapp_message = "¡Gracias por tu compra! Tu pedido #{$order_id} ha sido confirmado.\nTus boletos son:\n";
foreach ($tickets_by_raffle as $raffle_name => $ticket_numbers) {
    $whatsapp_message .= "\nSorteo: " . $raffle_name . "\nBoletos: " . implode(', ', $ticket_numbers) . "\n";
}

$whatsapp_url = "https://api.whatsapp.com/send?text=" . urlencode($whatsapp_message);
?>

<main class="container">
    <h2>¡Gracias por tu compra!</h2>
    <p>Tu pedido ha sido confirmado con el número de orden: <strong><?php echo $order_id; ?></strong>.</p>
    <p>A continuación se muestran los detalles de tu compra. Haz clic en el botón para enviar los tickets a tu WhatsApp.</p>

    <?php foreach ($tickets_by_raffle as $raffle_name => $ticket_numbers): ?>
        <h4><?php echo htmlspecialchars($raffle_name); ?></h4>
        <p>Tus números de boleto son: <?php echo implode(', ', $ticket_numbers); ?></p>
    <?php endforeach; ?>

    <a href="<?php echo $whatsapp_url; ?>" target="_blank" class="btn btn-success mt-3">
        <i class="fab fa-whatsapp"></i> Enviar Tickets a WhatsApp
    </a>
</main>

<!-- Font Awesome for the WhatsApp icon -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<?php require_once '../includes/footer.php'; ?>
