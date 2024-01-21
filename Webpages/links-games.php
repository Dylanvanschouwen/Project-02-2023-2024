<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $pageTitle = "Links to the games we made";
        echo "<title>$pageTitle</title>";
    ?>
    <link rel="stylesheet" href="stylesheet.css">
    <?php include ('../Include/navbar.php'); ?>
</head>
<body>
<main id="links_main">
    <header id="links_header">
        <h1>Hier vind je de games die wij gemaakt hebben!</h1>
    </header>
    <section>
        <ul id="links_list">
            <li><a href="Game-Dylan.php">Dit is de game van Dylan. Hij heeft Boter, kaas en eieren gemaakt. </a></li>
            <li><a href="Game-marlon.php">Goedendoelen van Marlon en ik deze heb gekozen!</a></li>
            <li><a href="Game-Roald.php">Goedendoelen van Roald en ik deze heb gekozen!</a></li>
        </ul>
    </section>
</main>
    <?php include ('../Include/footer.php'); ?>
</body>
</html>