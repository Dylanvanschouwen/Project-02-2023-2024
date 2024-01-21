<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set character set and viewport for responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Set the page title using PHP -->
    <?php
        $pageTitle = "Dit is het spel dat Dylan heeft gemaakt.";
        echo "<title>$pageTitle</title>";
    ?>

    <!-- Link to external stylesheet -->
    <link rel="stylesheet" href="stylesheet.css">

    <!-- Include navigation bar using PHP -->
    <?php include ('../Include/navbar.php'); ?>
</head>
<body>
    <!-- Main content of the page -->
    <main> 
        <!-- Section for Dylan's game -->
        <section class="dylan-game">
            <!-- Title of the game -->
            <h1 id="D-title">Tic Tac Toe</h1>

            <!-- Game board with buttons (input type: button) representing cells -->
            <div id="board" class="board">
                <?php for ($i = 1; $i <= 9; $i++) : ?>
                    <input type="button" id="b<?php echo $i; ?>">
                <?php endfor; ?>
            </div>

            <!-- Button to restart the game, triggers the reloadGame() function -->
            <button onclick="reloadGame()" id="restart-button">Restart Game</button>
        </section>

        <!-- Link to a page explaining how to play the game -->
        <a href="Game-uitleg-Dylan.php" id="D-explain-button">Learn How to Play</a>

        <!-- Include the JavaScript file for Dylan's game -->
        <script src="dylan-game.js"></script>
    </main>

    <!-- Include footer using PHP -->
    <?php include ('../Include/footer.php'); ?>
</body>
</html>
