<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
    <?php 
    include ('../Include/navbar.php'); 
    include ('../Include/footer.php');
    ?>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orb Clicker Game</title>
  <style>
    body {
      margin: 0;
      overflow: hidden; /* Prevent scrollbars */
    }

    #game-container {
      position: absolute;
      width: 100%;
      height: 100%;
      background: linear-gradient(to bottom, #87CEEB, #1E90FF); /* Customize the background color or use an image */
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

    #score {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div id="game-container"></div>
  <button id="resetButton">Reset Game</button>
  <p id="score">Score: 0</p>
  <script src="app.js"></script>
</body>
</html>

</body>
</html>