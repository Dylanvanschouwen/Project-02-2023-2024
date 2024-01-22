<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set the character set and viewport for the HTML document -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        // Set the page title dynamically using PHP
        $pageTitle = "Dit is het spel dat Roald heeft gemaakt.";
        echo "<title>$pageTitle</title>";
    ?>

    <!-- Include an external stylesheet for styling -->
    <link rel="stylesheet" href="stylesheet.css">

    <?php 
        // Include a navigation bar using PHP
        include ('../Include/navbar.php'); 
    ?>

    <!-- Include the JavaScript file for the game logic -->
    <script src="roald-game.js"></script>
</head>
<body>
    <!-- Main content of the page -->
    <main> 
        <!-- Section for Roald's Guessing Game -->
        <section>
            <!-- Title of Roald's Guessing Game -->
            <div class="R-title"> 
                <h1>Guessing Game</h1>
            </div>

            <!-- Explanation and input for the guessing game -->
            <div id="R-explanation">
                <p>Switch players after every guess</p>
                <p>Guess a number between 1 and 100:</p>
            </div>

            <!-- Input field and button for submitting guesses -->
            <div class="R-guess">
                <input type="number" id="guessInput" min="1" max="10">
                <button onclick="checkGuess()">Submit Guess</button>
                <p id="result"></p>
            </div>
        </section>

        <!-- Include the JavaScript file for the game logic again (redundant) -->
        <script src="roald-game.js"></script>
    </main>

    <?php 
        // Include a footer using PHP
        include ('../Include/footer.php'); 
    ?>
</body>
</html>
