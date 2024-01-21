<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $pageTitle = "Links to our portfolio";
        echo "<title>$pageTitle</title>";
    ?>
    <link rel="stylesheet" href="stylesheet.css">
    <?php include ('../Include/navbar.php'); ?>
</head>
<body>
<main id="links_main">
    <header id="links_header">
        <h1>Here you'll find our portfolio's</h1>
    </header>
    <section>
        <ul id="links_list">
            <li><a href="Portfolio-Dylan.php">this is Dylan's portfolio!</a></li>
            <li><a href="Portfolio-marlon.php">this is Marlon's portfolio!</a></li>
            <li><a href="Portfolio-Roald.php">this is Roald's portfolio!</a></li>
        </ul>
    </section>
</main>

    <?php include ('../Include/footer.php'); ?>
</body>
</html>