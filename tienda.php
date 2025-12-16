<?php include 'header.php'; ?>

    <main>
        <section id="tienda">
            <h2>TIENDA VIRTUAL</h2>
            <div id="products-container">
                <?php
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="product">';
                        echo '<h3>' . $row['name'] . '</h3>';
                        echo '<img src="' . $row['image'] . '" alt="' . $row['name'] . '">';
                        echo '<p>' . $row['description'] . '</p>';
                        echo '<p><strong>Price:</strong> ' . $row['price'] . '</p>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
