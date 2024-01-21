<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
    <?php include ('../Include/navbar.php'); ?>
    <script src="roald-game.js"></script>
</head>
<body>
    <main> 
<div class="R-title"> 
    <h1>Number Guessing Game</h1> 
</div>
<p>Switch players after every guess</p>
<p>Guess a number between 1 and 100:</p>

<input type="number" id="guessInput" min="1" max="10">
<button onclick="checkGuess()">Submit Guess</button>

<p id="result"></p>
<script src="roald-game.js"></script>
    </main>
    <?php include ('../Include/footer.php'); ?>
</body>
</html>