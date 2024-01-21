<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $pageTitle = "Index/home pagina";
        echo "<title>$pageTitle</title>";
    ?>
    <link rel="stylesheet" href="stylesheet.css">
    <?php include ('../Include/navbar.php'); ?>
</head>
<body>
    <main>
<section class="thumbnails">
    <h1 id=index-thumbnails-title>Game clickbait!</h1>
    <div class="thumbnail-png">
            <img src="../Images/thumbnailRoald.png" alt="Roald game">
            <img src="../Images/ball clicker.png" alt="Marlon game">
            <img src="../Images/thumbnailDylan.png" alt="Dylan game"> 
    </div>
</section>
<section class="game-explanation">
    <div class="Game-explanation-links">
        <a href="Game-uitleg-Roald.php">Game explanation: Number guessing game</a>
        <a href="Game-uitleg-Marlon.php">Game explanation: Ball clicker</a>
        <a href="Game-uitleg-Dylan.php">Game explanation: Tic tac toe</a>
    </div>
</section>
<section class="about-us">
    <h1>About us</h1>
    <p>
        We're students at the TCR college in Rotterdam, our assignment for this period was to make a game in javascript for charity.
    </p> 
    <div class="profiles">
        <img src="../Images/Roald.jpg" alt="Roald">
        <img src="../Images/marlon.jpg" alt="Marlon">
        <img src="../Images/Dylan.png" alt="Dylan">
    </div>
    <p id="profile-para"><a href="links-portfolio.php" id="profile-para-a"> you can view our portfolio here.</a> </p>
</section>
<section class="Donate-to-play">
    <h1>Donate to play</h1>
    <div class="Donate-to-play-explaination">
        <p> "Donate to play" is a phrase that can be used in the context of fundraising or charitable initiatives related to gaming or online content creation. 
            It typically refers to a scenario where individuals or viewers can make a donation to a cause or charity in exchange for the opportunity to play a game or participate in an event. 
            For example, a streamer on a platform like Twitch might organize a charity livestream where viewers can donate to a chosen charity. 
            In return, the donors may have the chance to play a game with the streamer, receive special in-game items, or participate in other interactive activities during the stream. 
            The idea is to encourage donations by offering some form of engagement or interaction as a reward. 
            This approach is often used by content creators to leverage their platform and audience for charitable causes, making the act of donating more engaging and enjoyable for the contributors.
        </p>
    </div>
</section>
    </main>
</body>
<?php include ('../Include/footer.php'); ?>
</html>
