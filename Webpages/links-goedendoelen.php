<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $pageTitle = "Links to our chosen charities";
        echo "<title>$pageTitle</title>";
    ?>
    <link rel="stylesheet" href="stylesheet.css">
    <?php include ('../Include/navbar.php'); ?>
</head>
<body> 
<!-- Main code -->
<main id="links_main">
    <header id="links_header">
        <h1>Links naar de goedendoelen die wij gekozen hebben!</h1>
    </header>
    <section>
        <ul id="links_list">
            <li><a href="Goedendoelen-Dylan.php"> Goedendoelen van Dylan en ik deze heb gekozen!</a></li>
            <li><a href="Goedendoelen-marlon.php">Goedendoelen van Marlon en ik deze heb gekozen!</a></li>
            <li><a href="Goedendoelen-Roald.php">Goedendoelen van Roald en ik deze heb gekozen!</a></li>
        </ul>
    </section>
</main>
<?php include ('../Include/footer.php'); ?>
</body>
</html>