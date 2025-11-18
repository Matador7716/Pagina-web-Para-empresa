<?php require_once '../app/views/partials/header.php'; ?>

<div class="container">
    <h1>Bienvenido al Dashboard de Candela Hotel</h1>
    <p>Hola, <?php echo $_SESSION['user_name']; ?>!</p>
</div>

<?php require_once '../app/views/partials/footer.php'; ?>
