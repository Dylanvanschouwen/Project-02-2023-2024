<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $pageTitle = "Dit is het spel dat Dylan heeft gemaakt.";
        echo "<title>$pageTitle</title>";
    ?>
    <link rel="stylesheet" href="stylesheet.css">
    <?php include ('../Include/navbar.php'); ?>
</head>
<body>
<main> 
    <section class="dylan-game">
        <h1 id=D-title>Tic Tac Toe</h1>
        <div id="board" class="board">
            <?php for ($i = 1; $i <= 9; $i++) : ?>
                <input type="button" id="b<?php echo $i; ?>">
            <?php endfor; ?>
        </div>
        <button onclick="reloadGame()" id="restart-button">Restart Game</button>
    </section>
    <a href="Game-uitleg-Dylan.php" id="D-explain-button">Learn How to Play</a>
    <script src="dylan-game.js"></script>
</main>
    <?php include ('../Include/footer.php'); ?>
</body>
</html>
