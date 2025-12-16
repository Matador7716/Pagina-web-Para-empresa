<?php include 'header.php'; ?>

    <main>
        <section id="servicios">
            <h2>SERVICIOS</h2>
            <?php
            $sql = "SELECT * FROM services";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div id="servicio-' . $row['id'] . '">';
                    echo '<h3>' . $row['name'] . '</h3>';
                    echo '<p>' . $row['description'] . '</p>';
                    echo '</div>';
                }
            }
            ?>
        </section>
    </main>

<?php include 'footer.php'; ?>
