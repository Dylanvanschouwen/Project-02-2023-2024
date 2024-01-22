<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set the character set and viewport for the HTML document -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Set a static title for the page -->
    <?php
        $pageTitle = "Explanation for Guess the number game";
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
    <main> 
        <br>
        <!-- Instruction for the user to type in a number, click submit, and find out if they guessed correctly -->
        <p>Type in a number, click submit, and find out if you guessed correctly!</p>
        <br>
    </main>

    <?php 
        // Include a footer using PHP
        include ('../Include/footer.php'); 
    ?>
</body>
</html>
