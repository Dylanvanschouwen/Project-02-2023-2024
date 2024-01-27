<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set the character set and viewport for the HTML document -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        // Set the page title dynamically using PHP
        $pageTitle = "Index/home pagina";
        echo "<title>$pageTitle</title>";
    ?>

    <!-- Include an external stylesheet for styling -->
    <link rel="stylesheet" href="stylesheet.css">

    <?php 
        // Include a navigation bar using PHP
        include ('../Include/navbar.php'); 
    ?>
</head>
<body>
    <!-- Main content of the page -->
    <main>
        <!-- Section for game thumbnails -->
        <section class="thumbnails">
        <br><br><br><br><br>
            <!-- Thumbnails of games with alt text for accessibility -->
            <div class="thumbnail-png">
                <img src="../Images/thumbnailRoald.png" alt="Roald game">
                <img src="../Images/ball clicker.png" alt="Marlon game">
                <img src="../Images/thumbnailDylan.png" alt="Dylan game"> 
            </div>
        </section>

        <!-- Section for game explanations -->
        <section class="game-explanation">
            <!-- Links to detailed game explanations -->
            <div class="Game-explanation-links">
                <a href="Game-uitleg-Roald.php">Game explanation: Number guessing game</a>
                <a href="Game-uitleg-Marlon.php">Game explanation: Ball clicker</a>
                <a href="Game-uitleg-Dylan.php">Game explanation: Tic tac toe</a>
            </div>
        </section>

        <!-- Section about the team -->
        <section class="about-us">
            <!-- Title for the team section -->
            <h1>About us</h1>
            <!-- Information about the team and their assignment -->
            <p>
                We're students at the TCR college in Rotterdam, and our assignment for this period was to make a game in JavaScript for charity.
            </p> 
            <!-- Profiles of team members -->
            <div class="profiles">
                <img src="../Images/Roald.jpg" alt="Roald">
                <img src="../Images/marlon.jpg" alt="Marlon">
                <img src="../Images/Dylan.png" alt="Dylan">
            </div>
            <!-- Link to view the team's portfolio -->
            <p id="profile-para"><a href="links-portfolio.php" id="profile-para-a">You can view our portfolio here.</a></p>
        </section>

        <!-- Section about "Donate to play" concept -->
        <section class="Donate-to-play">
            <!-- Title for the "Donate to play" section -->
            <h1>Donate to play</h1>
            <!-- Explanation of the concept -->
            <div class="Donate-to-play-explanation">
                <p>
                    "Donate to play" is a phrase that can be used in the context of fundraising or charitable initiatives related to gaming or online content creation. <br>
                    It typically refers to a scenario where individuals or viewers can make a donation to a cause or charity in exchange for the opportunity to play a game or participate in an event.<br> 
                    For example, a streamer on a platform like Twitch might organize a charity livestream where viewers can donate to a chosen charity. <br>
                    In return, the donors may have the chance to play a game with the streamer, receive special in-game items, or participate in other interactive activities during the stream.<br> 
                    The idea is to encourage donations by offering some form of engagement or interaction as a reward.<br> 
                    This approach is often used by content creators to leverage their platform and audience for charitable causes, making the act of donating more engaging and enjoyable for the contributors.
                </p>
            </div>
        </section>
    </main>

    <!-- Include a footer using PHP -->
    <?php include ('../Include/footer.php'); ?>
</body>
</html>
