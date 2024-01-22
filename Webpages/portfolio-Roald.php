<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Document metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <!-- Link to the external stylesheet -->
    <link rel="stylesheet" href="stylesheet.css">
    <!-- Include the navigation bar from an external file -->
    <?php include ('../Include/navbar.php'); ?>
</head>
<body>
    <!-- Main content of the page -->
    <main>
        <!-- Marlon's portfolio section -->
        <div class="marlon-portfolio">

            <!-- Personal information section -->
            <section>
                <!-- Heading with Marlon's name -->
                <h1>Marlon</h1> <br>
                <!-- Introduction about Marlon -->
                <p>About Me:</p> 
                <!-- Personal details -->
                <p>My name is Marlon, and I am 20 years old.</p>

                <!-- Skills section -->
                <h2>My Skills</h2>
                <!-- Unordered list of skills -->
                <ul>
                    <li>Perseverant</li>
                    <li>Flexible</li>
                    <li>Creative</li>
                    <!-- Added a new skill -->
                    <li>Team Player</li>
                </ul>

                <!-- Projects section -->
                <h2>My Projects</h2>
                <!-- Unordered list of projects with descriptions -->
                <ul>
                    <li><strong>Project 1: TCR Website</strong> - Website about TCR School with related information.</li>
                    <li><strong>Project 2: Donate to Play</strong> - Project with a game for a charity.</li>
                    <!-- Improved project descriptions for clarity -->
                </ul>
            </section>

        </div>
    </main>
    <!-- Include the footer from an external file -->
    <?php include ('../Include/footer.php'); ?>
</body>
</html>
