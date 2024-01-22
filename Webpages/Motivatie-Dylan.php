<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $pageTitle = "Dylan's chosen charity motivation";
        echo "<title>$pageTitle</title>";
    ?>
    <link rel="stylesheet" href="stylesheet.css">
    <?php include ('../Include/navbar.php'); ?>
</head>
<body>
    <main> 
        <!-- Charity motivation section -->
        <section class="D-motivation">
            <!-- Introduction to the motivation -->
            <div id="D-motivation-intro">
                <h1>Empowering Children in Crisis: Choosing War Child for Lasting Impact</h1>
                <p> 
                    Choosing War Child aligns with a commitment to making a targeted and positive impact on the lives of children affected by conflict.
                    The organization's comprehensive approach, community engagement, and advocacy efforts make it a compelling choice for those passionate about supporting vulnerable populations in times of crisis.
                </p>
            </div>
            
            <!-- Detailed explanation of the motivation -->
            <div id="D-motivation-text">
                <h1>The heartbreaking and family-tearing war currently in Ukraine</h1>
                <p> 
                    Even now, there is a war that tears families apart and leaves children without homes or hope.
                    The innocent children are the ones that have suffered the most in the midst of this tragedy. This is why I chose War Child as the charity to support because they are dedicated to providing these children with a chance for a better future.
                    Their work gives hope to those who need it most, and I believe in their mission to create positive change in the face of adversity.
                </p>
            </div>
            
            <!-- Conclusion and call-to-action -->
            <div id="D-motivation-outro">
                <h1>Empowering Change, One Child at a Time</h1>
                <p>
                    In choosing War Child, we unite in a shared commitment to empower children affected by conflict.
                    Every contribution resonates with the promise of a brighter, more resilient future.
                </p>
                <!-- Link back to the charity page -->
                <a href="Goedendoelen-Dylan.php" id="D-read-more">
                    To go back to my charity page, Click here
                </a>
            </div>
            
            <!-- Image and donation information -->
            <div id="D-motivation-image">
                <p> If you wish to donate to the same cause, then please donate using this QR code </p>
                <img src="../Images/war-child-charity-donate.png" alt="War Child">
            </div>
        </section>
    </main>
    
    <?php include ('../Include/footer.php'); ?>
</body>
</html>
