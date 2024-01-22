<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set the character set and viewport for the HTML document -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        // Set the page title dynamically using PHP
        $pageTitle = "Dylan's chosen charity";
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
    <main id="D-charity-main">
        <!-- Section for information about Dylan's chosen charity (War Child) -->
        <section class="D-charity">
            <!-- Introduction to the charity -->
            <div id="D-charity-intro"> 
                <h1>War Child: Empowering Young Lives Amidst Conflict</h1>
                <p>
                    War Child is a global charity committed to providing crucial support to children and young people affected by conflict.
                    Focused on offering protection, education, and psychosocial assistance, the organization strives to empower these young individuals to overcome the challenges of living in war-torn regions.
                </p>
            </div>
            <div id="D-charity-text">
                <h1>Building Resilient Futures: War Child's Holistic Approach to Healing Young Lives in Conflict Zones</h1>
                <p>
                    War Child is dedicated to alleviating the profound impact of conflict on children and young people worldwide. 
                    The charity's primary focus is to provide comprehensive support encompassing protection, education, and psychosocial aid.
                    In regions ravaged by war, War Child establishes safe spaces where children can find refuge and receive counseling to cope with the emotional toll of their experiences.
                </p> <br>
                <p>
                    Education is a cornerstone of the organization's efforts, as it believes in the transformative power of learning.
                    By facilitating access to quality education, War Child empowers children to break the cycle of poverty and conflict.
                    Additionally, the charity actively engages in psychosocial programs, recognizing the importance of mental well-being in the face of trauma.
                </p> <br>
                <p>
                    Beyond immediate assistance, War Child is committed to fostering resilience within communities, aiming for sustainable, long-term impact.
                    Through advocacy and awareness campaigns, the organization strives to shed light on the plight of children in conflict zones and mobilize support to create positive change.
                </p> <br>
                <p>
                    In essence, War Child works tirelessly to provide a holistic approach to healing and empowerment, enabling young lives to overcome the adversities of war and contribute to the emergence of more stable and hopeful societies.
                </p> <br>
            </div>
            <div id="D-charity-outro">
                <h1>Together, We Shape Hope: Join War Child in Nurturing a Future of Peace and Possibility</h1>
                <p>
                    As War Child continues its unwavering commitment to the well-being of children affected by conflict, the journey towards building brighter futures persists.
                    By combining protection, education, and psychosocial support, the organization strives to instill resilience in the hearts of young lives scarred by the ravages of war.
                </p>
                <a href="Motivatie-Dylan.php" id="D-read-more">
                    If you wish to know why I chose this specific charity to support, then click here
                </a>
            </div>
        </section>
    </main>

    <?php 
        // Include a footer using PHP
        include ('../Include/footer.php'); 
    ?>
</body>
</html>
