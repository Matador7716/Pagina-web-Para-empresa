<?php
session_start();
require_once '../config/db.php';
require_once '../includes/header.php';
require_once '../includes/csrf.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add to cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['raffle_id'])) {
    validate_csrf_token();
    $raffle_id = (int)$_POST['raffle_id'];
    $quantity = (int)$_POST['quantity'];

    if ($quantity > 0) {
        if (isset($_SESSION['cart'][$raffle_id])) {
            $_SESSION['cart'][$raffle_id] += $quantity;
        } else {
            $_SESSION['cart'][$raffle_id] = $quantity;
        }
    }
    header('Location: cart.php');
    exit;
}

// Checkout
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkout'])) {
    // This is a simulation. In a real application, you would integrate a payment gateway here.
    $user_id = $_SESSION['user_id'];
    $total_amount = 0;

    foreach ($_SESSION['cart'] as $raffle_id => $quantity) {
        $stmt = $conn->prepare("SELECT ticket_price FROM raffles WHERE id = ?");
        $stmt->bind_param("i", $raffle_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $raffle = $result->fetch_assoc();
        $total_amount += $raffle['ticket_price'] * $quantity;
    }

    $conn->begin_transaction();
    try {
        $stmt = $conn->prepare("INSERT INTO orders (user_id, total_amount, status) VALUES (?, ?, 'completed')");
        $stmt->bind_param("id", $user_id, $total_amount);
        $stmt->execute();
        $order_id = $conn->insert_id;

        // Generate and save tickets
        $ticket_stmt = $conn->prepare("INSERT INTO tickets (raffle_id, user_id, order_id, ticket_number) VALUES (?, ?, ?, ?)");
        $check_ticket_stmt = $conn->prepare("SELECT id FROM tickets WHERE raffle_id = ? AND ticket_number = ?");

        foreach ($_SESSION['cart'] as $raffle_id => $quantity) {
            for ($i = 0; $i < $quantity; $i++) {
                $is_unique = false;
                while (!$is_unique) {
                    $ticket_number = rand(1000, 9999);
                    $check_ticket_stmt->bind_param("ii", $raffle_id, $ticket_number);
                    $check_ticket_stmt->execute();
                    $result = $check_ticket_stmt->get_result();
                    if ($result->num_rows === 0) {
                        $is_unique = true;
                    }
                }
                $ticket_stmt->bind_param("iiii", $raffle_id, $user_id, $order_id, $ticket_number);
                $ticket_stmt->execute();
            }
        }

        $conn->commit();
        $_SESSION['cart'] = [];
        header('Location: order_confirmation.php?order_id=' . $order_id);
        exit;
    } catch (Exception $e) {
        $conn->rollback();
        // Handle the error, maybe show a message to the user
    }
}
?>

<main class="container">
    <h2>Carrito de Compras</h2>
    <?php if (empty($_SESSION['cart'])): ?>
        <p>Tu carrito está vacío.</p>
    <?php else: ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Sorteo</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_cart_amount = 0;
                foreach ($_SESSION['cart'] as $raffle_id => $quantity):
                    $stmt = $conn->prepare("SELECT name, ticket_price FROM raffles WHERE id = ?");
                    $stmt->bind_param("i", $raffle_id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $raffle = $result->fetch_assoc();
                    $line_total = $raffle['ticket_price'] * $quantity;
                    $total_cart_amount += $line_total;
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($raffle['name']); ?></td>
                        <td><?php echo $quantity; ?></td>
                        <td>$<?php echo htmlspecialchars($raffle['ticket_price']); ?></td>
                        <td>$<?php echo number_format($line_total, 2); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p><strong>Total:</strong> $<?php echo number_format($total_cart_amount, 2); ?></p>
        <form action="cart.php" method="post">
            <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>">
            <button type="submit" name="checkout" class="btn btn-success">Proceder al Pago</button>
        </form>
    <?php endif; ?>
</main>

<?php require_once '../includes/footer.php'; ?>
