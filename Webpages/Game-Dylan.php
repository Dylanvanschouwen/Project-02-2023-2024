<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dit is het spel van Dylan.</title>
    <link rel="stylesheet" href="stylesheet.css">
    <?php include ('../Include/navbar.php'); ?>
</head>
<body>
<main> 
        <section class="dylan-game">
            <h1 id=D-title>Tic Tac Toe</h1>
            <div id="board" class="board">
                <!-- Loop for creating 9 buttons instead of 9 divs -->
                <?php for ($i = 1; $i <= 9; $i++) : ?>
                    <input type="button" id="b<?php echo $i; ?>">
                <?php endfor; ?>
            </div>
            <button onclick="reloadGame()" id="restart-button">Restart Game</button>
        </section>

        <script src="dylan-game.js"></script>
    </main>
    <?php include ('../Include/footer.php'); ?>
</body>
</html>