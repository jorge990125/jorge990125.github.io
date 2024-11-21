
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas de World of Warcraft</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Ofertas de World of Warcraft</h1>
    </header>
    <section>
        <?php
        $ofertas = [
            [
                "titulo" => "Oferta 1: Montura Épica",
                "descripcion" => "Obtén la exclusiva montura épica 'Dragón de Zafiro' por solo $15.99. Oferta válida hasta el 30 de noviembre.",
                "imagen" => "images/montura_epica.jpg",
            ],
            [
                "titulo" => "Oferta 2: Mascota Legendaria",
                "descripcion" => "Adquiere la mascota legendaria 'Mini Illidan' por solo $9.99. ¡Un complemento perfecto para tus aventuras!",
                "imagen" => "images/mascota_legendaria.jpg",
            ],
        ];
        foreach ($ofertas as $oferta) {
            echo "<div class='offer'>";
            echo "<img src='{$oferta['imagen']}' alt='{$oferta['titulo']}' class='offer-image'>";
            echo "<h2>{$oferta['titulo']}</h2>";
            echo "<p>{$oferta['descripcion']}</p>";
            echo "</div>";
        }
        ?>
    </section>
    <section>
        <div class="info">
            <h2>Sobre mí</h2>
            <p>¡Bienvenidos a mi web! Soy un apasionado de World of Warcraft y me encanta ofrecer los mejores artículos para la comunidad. Si tienes alguna pregunta o necesitas algo en específico, no dudes en contactarme.</p>
        </div>
    </section>
    <footer>
        <p>© 2024 Mi Tienda de World of Warcraft. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
