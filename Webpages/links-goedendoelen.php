<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set the character set and viewport for the HTML document -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        // Set the page title dynamically using PHP
        $pageTitle = "Links to our chosen charities";
        echo "<title>$pageTitle</title>";
    ?>

    <!-- Include an external stylesheet for styling -->
    <link rel="stylesheet" href="stylesheet.css">

    <?php 
        // Include a navigation bar using PHP
        include ('../Include/navbar.php'); 
    ?>
</head>
<body>
    <!-- Main content of the page -->
    <main id="links_main">
        <!-- Header section with a title -->
        <header id="links_header">
            <h1>Links to our charities of choice!</h1>
        </header>

        <!-- Section with a list of links to charities -->
        <section>
            <ul id="links_list">
                <!-- Link to Dylan's chosen charity with a description -->
                <li><a href="Goedendoelen-Dylan.php">This is the charity that Dylan chose and why he supports them.</a></li>

                <!-- Link to Marlon's chosen charities with a description -->
                <li><a href="Goedendoelen-marlon.php">Marlon's charities and why he chose them.</a></li>

                <!-- Link to Roald's chosen charities with a description -->
                <li><a href="Goedendoelen-Roald.php">Roald's charities and why he chose them.</a></li>
            </ul>
        </section>
    </main>

    <!-- Include a footer using PHP -->
    <?php include ('../Include/footer.php'); ?>
</body>
</html>
