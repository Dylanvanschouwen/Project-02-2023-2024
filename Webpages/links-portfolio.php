<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set the character set and viewport for the HTML document -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        // Set the page title dynamically using PHP
        $pageTitle = "Links to our portfolio";
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
            <h1>Here you'll find our portfolios</h1>
        </header>

        <!-- Section with a list of links to portfolios -->
        <section>
            <ul id="links_list">
                <!-- Link to Dylan's portfolio with a description -->
                <li><a href="Portfolio-Dylan.php">This is Dylan's portfolio. Click here to learn about him!</a></li>

                <!-- Link to Marlon's portfolio with a description -->
                <li><a href="Portfolio-marlon.php">This is Marlon's portfolio!</a></li>

                <!-- Link to Roald's portfolio with a description -->
                <li><a href="Portfolio-Roald.php">This is Roald's portfolio!</a></li>
            </ul>
        </section>
    </main>

    <!-- Include a footer using PHP -->
    <?php include ('../Include/footer.php'); ?>
</body>
</html>
