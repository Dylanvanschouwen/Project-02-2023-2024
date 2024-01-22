<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set the character set and viewport for the HTML document -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        // Set the page title dynamically using PHP
        $pageTitle = "Marlon's chosen charity";
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
    <!-- Container for the main content -->
    <div class="container">

        <!-- Section about Team Trees charity -->
        <div class="team-trees">
            <img src="../Images/teamtrees.jpg" alt="Team Trees Image">
        </div>

        <!-- Text about Team Trees and the donation campaign -->
        <div class="donate-text">
            <!-- Add line breaks for better spacing -->
            <br><br><br><br><br>

            <!-- Opening div tag is missing for the paragraph -->
            <div>
                <p>Team Trees is a global environmental project launched by YouTuber MrBeast (Jimmy Donaldson) and Mark Rober, a former NASA engineer. The goal of Team Trees is to plant 20 million trees worldwide.</p>

                <p>The initiative began when MrBeast uploaded a video on his YouTube channel titled "I Planted 20,000,000 Trees." In this video, he called on his viewers to contribute to tree planting by donating money to the Arbor Day Foundation. For every $1 donation, he pledged to plant a tree. The Arbor Day Foundation is a non-profit organization focusing on tree planting projects and environmental conservation.</p>

                <p>This campaign quickly went viral and garnered support from numerous celebrities, influencers, and businesses. The aim was not only to raise awareness about the importance of forest conservation and the fight against climate change but also to take concrete action by planting trees.</p>

                <!-- Add line breaks for better spacing -->
                <br><br>

                <p>You can now donate with the button below. 🌳✨</p>
            </div>
        </div>
    </div>

    <!-- Main content of the second HTML document -->
    <main>
        <!-- Donation button linking to the Team Trees website -->
        <div class="donate">
            <a href="https://teamtrees.org" target="_blank">
                <img src="../images/donate (2).png" alt="Donate to Team Trees">
            </a>
        </div>
    </main>

    <?php 
        // Include a footer using PHP
        include ('../Include/footer.php'); 
    ?>
</body>
</html>
