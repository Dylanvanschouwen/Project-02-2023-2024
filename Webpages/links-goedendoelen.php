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
        <h1>Links to our charities of choice!</h1>
    </header>
    <section>
        <ul id="links_list">
            <li><a href="Goedendoelen-Dylan.php">Dylan's charities and why I chose them.</a></li>
            <li><a href="Goedendoelen-marlon.php">Marlon's charities and why I chose them.</a></li>
            <li><a href="Goedendoelen-Roald.php">Roald's charities and why I chose them.</a></li>
        </ul>
    </section>
</main>
<?php include ('../Include/footer.php'); ?>
</body>
</html>