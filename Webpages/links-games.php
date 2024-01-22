<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set the character set and viewport for the HTML document -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        // Set the page title dynamically using PHP
        $pageTitle = "Links to the games we made";
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
            <h1>Here you will find the games that we made!</h1>
        </header>

        <!-- Section with a list of links to the games -->
        <section>
            <ul id="links_list">
                <!-- Link to Dylan's game with a description -->
                <li><a href="Game-Dylan.php">This is the game Dylan made, it's called Tic-Tac-Toe</a></li>

                <!-- Link to Marlon's game with a description -->
                <li><a href="Game-marlon.php">This is Marlon's game he made ball clicker!</a></li>

                <!-- Link to Roald's game with a description -->
                <li><a href="Game-Roald.php">This is Roald's name he made Number guessing game!</a></li>
            </ul>
        </section>
    </main>

    <!-- Include a footer using PHP -->
    <?php include ('../Include/footer.php'); ?>
</body>
</html>
