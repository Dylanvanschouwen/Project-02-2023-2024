<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $pageTitle = "The portfolio of Marlon";
        echo "<title>$pageTitle</title>";
    ?>
    <link rel="stylesheet" href="stylesheet.css">
    <?php include ('../Include/navbar.php'); ?>
</head>
<body>
    <main>
        <!-- Marlon's portfolio section -->
        <div class="marlon-portfolio">

            <!-- Personal information section -->
            <section>
                <h1>Marlon</h1> <br>
                <p>About Me:</p> 
                <p>My name is Marlon, and I am 16 years old.</p>

                <!-- Skills section -->
                <h2>My Skills</h2>
                <ul>
                    <li>Perseverant</li>
                    <li>Flexible</li>
                    <li>Patient</li>
                </ul>

                <!-- Projects section -->
                <h2>My Projects</h2>
                <ul>
                    <li><strong>Project 1: TCR Website</strong> Website about TCR School with related information.</li>
                    <li><strong>Project 2: Donate to play</strong> Project with a game for a charity.</li>
                </ul>
            </section>

        </div>
    </main>
    <?php include ('../Include/footer.php'); ?>
</body>
</html>
