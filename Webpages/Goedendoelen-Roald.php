<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set the character set and viewport for the HTML document -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        // Set the page title dynamically using PHP
        $pageTitle = "Roald's chosen charity";
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
        <!-- Break for better spacing -->
        <br>

        <!-- Introduction to Roald's chosen charity, Team Seas -->
        <p>I chose Team Seas because I think protecting the oceans is important.</p>
        
        <!-- Overview of Team Seas initiative -->
        <p>
            Team Seas is a collaborative environmental initiative launched by popular creators MrBeast and Mark Rober.
            This global movement aims to combat ocean pollution by removing 30 million pounds of trash from the world's oceans by the end of 2022.
            Through the power of community support and fundraising efforts, Team Seas works with various organizations and cleanup projects to make a positive impact on our planet's oceans, striving for a cleaner and healthier marine environment.
            Joining Team Seas means contributing to a collective effort to address the urgent issue of ocean pollution and protect the Earth's vital ecosystems.
        </p>
        
        <!-- Break for better spacing -->
        <br>
        
        <!-- Image of MrBeast -->
        <div id="beast"><img src="../Images/beast.png" alt="MrBeast"></div>

        <!-- Second HTML document for donation -->
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <!-- Set the character set and viewport for the HTML document -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Your Page Title</title>
        </head>
        <body>
            <!-- Main content of the second HTML document -->
            <main>
                <!-- Donation button linking to the Team Seas website -->
                <div class="donate">
                    <a href="https://teamseas.org/" target="_blank">
                        <img src="../images/donate (2).png" alt="Donate to Team Seas">
                    </a>
                </div>
            </main>

            <!-- Include a footer using PHP -->
            <?php include ('../Include/footer.php'); ?>
        </body>
        </html>

    </main>
    
    <!-- Include a footer using PHP -->
    <?php include ('../Include/footer.php'); ?>
</body>
</html>
