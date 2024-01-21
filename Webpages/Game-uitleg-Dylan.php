<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $pageTitle = "Explanation for Tic-tac-toe Game";
        echo "<title>$pageTitle</title>";
    ?>
    <link rel="stylesheet" href="stylesheet.css">
    <?php include ('../Include/navbar.php'); ?>
</head>
<body>
    <main> 
        <section class="Uitleg-D-game">
            <div id="D-uitleg">
                <!-- Introduction Section -->
                <div class="D-Inleiding"> 
                    <h1>Introduction</h1>
                    <p>Welcome to the game of Tic Tac Toe! Also known as Noughts and Crosses, this simple and classic game is a great way to have fun and test your strategic thinking. Whether you are young or old, this game is suitable for everyone.</p>
                </div>
                <!-- Game Objective Section -->
                <div id="D-doel-spel">
                    <h1>Objective of the Game</h1>
                    <p>The objective of Tic Tac Toe is to be the first to form a row of three of your own symbols on a 3x3 game board. The symbols can be "X" and "O," with one player representing "X" and the other "O." The row can be horizontal, vertical, or diagonal.</p>
                </div>
                <!-- Game Board Section -->
                <div id="D-speelbord">
                    <h1>The Game Board</h1>
                    <p>The game board is a grid of 3 by 3 spots. Each spot can be filled with a symbol ("X" or "O"). Players take turns placing their symbols on the board.</p>
                </div>
                <!-- Game Rules Section -->
                <div id="D-uitleg-spel">            
                    <h1>How to Play</h1>
                    <ul>
                        <li>Determine who is "X" and who is "O": Players decide who will be "X" and who will be "O." This can be determined randomly or based on personal preference.</li>
                        <li>Take turns: The player with the "X" symbol goes first. Players take turns making a move by placing their symbol in an empty spot.</li>
                        <li>Winning condition: The first player to successfully form a horizontal, vertical, or diagonal row of their symbol wins the game.</li>
                        <li>Draw: If all spots are filled and there is no winner, the game ends in a draw.</li>
                    </ul>
                </div>
                <!-- More Explanation and Sources Section -->
                <div id="D-meer-uitleg">
                    <h1>More Explanation and Sources</h1>
                    <p>For more detailed explanations of the history, strategies, and variations of Tic Tac Toe, you can visit the Wikipedia page: <a href="https://en.wikipedia.org/wiki/Tic-tac-toe" target="_blank">Tic Tac Toe on Wikipedia</a>.</p>
                </div>
                
                <!-- Button to Go Back to Game-Dylan.php -->
                <div>
                    <button onclick="window.location.href='../Game-Dylan.php'">Back to Game</button>
                </div>
            </div>
        </section>
    </main>
    <?php include ('../Include/footer.php'); ?>
</body>
</html>
