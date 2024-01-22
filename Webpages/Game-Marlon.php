<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Set the character set and viewport for the HTML document -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
    // Set the page title dynamically using PHP
    $pageTitle = "Dit is het spel dat Marlon heeft gemaakt.";
    echo "<title>$pageTitle</title>";
  ?>

  <!-- Include an external stylesheet for styling -->
  <link rel="stylesheet" href="stylesheet.css">

  <?php 
    // Include a navigation bar using PHP
    include ('../Include/navbar.php'); 
  ?>

  <!-- Set a static title for the page -->
  <title>Orb Clicker Game</title>
</head>
<body>
  <!-- Main content of the page -->
  <main>
    <!-- Container for the game -->
    <div id="game-container"></div>

    <!-- Link and button for navigation -->
    <a href="Index.php">
      <button id="terug">terug</button>
    </a>

    <!-- Button to reset the game -->
    <button id="resetButton">Reset Game</button>

    <!-- Display the current score -->
    <p id="score">Score: 0</p>

    <!-- Include the JavaScript file for the game logic -->
    <script src="marlon-game.js"></script>
  </main>

  <?php 
    // Include a footer using PHP
    include ('../Include/footer.php'); 
  ?>
</body>
</html>
