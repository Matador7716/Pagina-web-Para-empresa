<?php
require_once '../config/db.php';
require_once '../includes/header.php';

$result = $conn->query("SELECT * FROM raffles ORDER BY end_date ASC");
?>

<main class="container">
    <h2>Sorteos Disponibles</h2>
    <div class="row">
        <?php while ($raffle = $result->fetch_assoc()): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($raffle['name']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($raffle['description']); ?></p>
                        <p><strong>Premio:</strong> <?php echo htmlspecialchars($raffle['prize']); ?></p>
                        <p><strong>Precio del Boleto:</strong> $<?php echo htmlspecialchars($raffle['ticket_price']); ?></p>
                        <a href="raffle_details.php?id=<?php echo $raffle['id']; ?>" class="btn btn-primary">Ver Sorteo</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</main>

<?php require_once '../includes/footer.php'; ?>
