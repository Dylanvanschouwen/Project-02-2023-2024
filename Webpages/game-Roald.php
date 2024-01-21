<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $pageTitle = "Dit is het spel dat Roald heeft gemaakt.";
        echo "<title>$pageTitle</title>";
    ?>
    <link rel="stylesheet" href="stylesheet.css">
    <?php include ('../Include/navbar.php'); ?>
    <script src="roald-game.js"></script>
</head>
<body>
    <main> 
<section>
    <div class="R-title"> 
        <h1>Roald's Guessing Game</h1>
    </div>
    <div id="R-explanation">
        <p>Switch players after every guess</p>
        <p>Guess a number between 1 and 100:</p>
    </div>
    <div class="R-guess">
        <input type="number" id="guessInput" min="1" max="10">
        <button onclick="checkGuess()">Submit Guess</button>
        <p id="result"></p>
    </div>
</section>
<script src="roald-game.js"></script>
    </main>
    <?php include ('../Include/footer.php'); ?>
</body>
</html>