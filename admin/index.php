<?php
session_start();
// Simple admin check
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

require_once '../includes/header.php';
?>

<main class="container">
    <h2>Panel de Administración</h2>
    <p>Bienvenido al panel de administración. Aquí puedes gestionar los sorteos.</p>
    <ul>
        <li><a href="create_raffle.php">Crear Nuevo Sorteo</a></li>
    </ul>
</main>

<?php require_once '../includes/footer.php'; ?>
