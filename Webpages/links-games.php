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
        <h1>Here you will find the games that we made!</h1>
    </header>
    <section>
        <ul id="links_list">
            <li><a href="Game-Dylan.php">This is Dylan's game he made Tic tac toe!</a></li>
            <li><a href="Game-marlon.php">This is Marlon's game he made ball clicker!</a></li>
            <li><a href="Game-Roald.php">This is Roald's name he made Number guessing game!</a></li>
        </ul>
    </section>
</main>
    <?php include ('../Include/footer.php'); ?>
</body>
</html>