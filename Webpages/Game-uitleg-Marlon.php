<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set the character set and viewport for the HTML document -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Set a static title for the page -->
    <?php
        $pageTitle = "Explanation for Ball clicker game";
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
    <!-- Container for game information related to Marlon's mini-game -->
    <div class="gameinfomarlon">
        <!-- Main content of the page -->
        <p>Introduction:<br>
            This is a minigame where you have to click the balls to get more points.
        </p> 
        <br>
        <p>Features:</p>
        <p>
            Orb Creation: Balls are dynamically created on the screen with random positions and colors.<br>
            Scoring: Players earn points by clicking on the orbs, and the score is displayed on the page.<br><br>
            Speed Increase: The interval between orb spawns decreases over time, making the game progressively challenging.<br><br>
            Reset Functionality: Players can reset the game, clearing all orbs and resetting the score.
        </p> 
        <br>
        <!-- Instruction for when you are done playing -->
        <p>
            When you are done, click on the reset button to clear all the balls and reset the speed to start over.
        </p>

        <?php 
            // Include a footer using PHP
            include ('../Include/footer.php'); 
        ?>
    </div>
</body>
</html>
