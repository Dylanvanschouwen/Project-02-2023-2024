<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orb Clicker Game</title>
    <link rel="stylesheet" href="stylesheet.css">
    <?php include ('../Include/navbar.php'); ?>
  <title>Orb Clicker Game</title>
  <style>
    body {
      margin: 0;
      overflow: hidden; /* geen scrollbars */
    }

    #game-container {
      position: absolute;
      width: 100%;
      height: 100%;
      background: linear-gradient(to bottom, #87CEEB, #1E90FF); /* achtergrond*/
    }

    .orb {
      position: absolute;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      cursor: pointer;
    }

    #resetButton {
      position: absolute;
      top: 10px;
      left: 10px;
      font-size: 16px;
      cursor: pointer;
    }
    
    #terug {
      position: absolute;
      top: 960px;
      left: 10px;
      font-size: 16px;
      cursor: pointer;
    }

    #score {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 16px;
    }
  </style>
</head>
<body>
    <main>
      <div id="game-container"></div>
  <a href="Index.php"> <button id="terug">terug</button></a>
      <button id="resetButton">Reset Game</button>
      <p id="score">Score: 0</p>
      <script src="marlon-game.js"></script>
    </main>
    <?php include ('../Include/footer.php'); ?>
</body>
</html>