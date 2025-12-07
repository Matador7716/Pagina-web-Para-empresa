<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CandelaWEB - Services</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>CandelaWEB - Services</h1>
        <nav>
            <ul>
                <li><a href="#inicio">INICIO</a></li>
                <li><a href="#nosotros">NOSOTROS</a></li>
                <li class="dropdown">
                    <a href="#servicios">SERVICIOS</a>
                    <div class="dropdown-content">
                        <?php
                        $sql = "SELECT * FROM services";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo '<a href="#servicio-' . $row['id'] . '">' . $row['name'] . '</a>';
                            }
                        }
                        ?>
                        <a href="#tienda">Venta de equipos informaticos</a>
                    </div>
                </li>
                <li><a href="#paginas-web">PAGINAS WEB</a></li>
                <li><a href="#woocommerce">WOOCOMMERCE</a></li>
                <li><a href="#contacto">CONTACTO</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="inicio">
            <h2>INICIO</h2>
            <p>Bienvenido a CandelaWEB - Services. Ofrecemos soluciones informáticas para su negocio.</p>
        </section>
        <section id="nosotros">
            <h2>NOSOTROS</h2>
            <p>Somos una empresa con más de 10 años de experiencia en el sector.</p>
        </section>
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
        <section id="paginas-web">
            <h2>PAGINAS WEB</h2>
            <p>Aquí puede ver algunos de nuestros trabajos.</p>
        </section>
        <section id="woocommerce">
            <h2>WOOCOMMERCE</h2>
            <p>Somos expertos en WooCommerce, la plataforma de comercio electrónico más popular del mundo.</p>
        </section>
        <section id="contacto">
            <h2>CONTACTO</h2>
            <form id="contact-form">
                <input type="text" name="name" placeholder="Nombre">
                <input type="email" name="email" placeholder="Email">
                <textarea name="message" placeholder="Mensaje"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>
