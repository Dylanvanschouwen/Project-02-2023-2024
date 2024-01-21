<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $pageTitle = "Uitleg voor Tic-tac-toe spel";
        echo "<title>$pageTitle</title>";
    ?>
    <link rel="stylesheet" href="stylesheet.css">
    <?php include ('../Include/navbar.php'); ?>
</head>
<body>
    <main> 
        <section class="Uitleg-D-game">
            <div id="D-uitleg"> 
                <h1>Inleiding</h1>
                <p>Welkom bij het spel Boter, Kaas en Eieren! Ook bekend als Tic Tac Toe, is dit eenvoudige en klassieke spel een geweldige manier om plezier te hebben en je strategisch denkvermogen te testen. Of je nu jong of oud bent, dit spel is geschikt voor iedereen.</p>

                <h1>Doel van het spel</h1>
                <p>Het doel van Boter, Kaas en Eieren is om als eerste een rij van drie van je eigen symbolen te vormen op een 3x3 speelbord. De symbolen kunnen "X" en "O" zijn, waarbij de ene speler "X" vertegenwoordigt en de andere "O". De rij kan horizontaal, verticaal of diagonaal zijn.</p>

                <h1>Het Speelbord</h1>
                <p>Het speelbord is een rooster van 3 bij 3 spots. Elke spot kan worden gevuld met een symbool ("X" of "O"). Spelers wisselen elkaar af om hun symbolen op het bord te plaatsen.</p>

                <h1>Hoe te spelen</h1>
                <ol>
                    <li>Bepaal wie "X" en wie "O" is: Spelers beslissen wie "X" en wie "O" zal zijn. Dit kan willekeurig worden bepaald of op basis van persoonlijke voorkeur.</li>
                    <li>Neem beurten: De speler met het symbool "X" begint. Spelers nemen om de beurt een zet door hun symbool in een lege spot te plaatsen.</li>
                    <li>Winconditie: De eerste speler die erin slaagt een horizontale, verticale of diagonale rij van hun symbool te vormen, wint het spel.</li>
                    <li>Gelijkspel: Als alle spots zijn gevuld en er geen winnaar is, eindigt het spel in een gelijkspel.</li>
                </ol>

                <h1>Meer Uitleg en Bronnen</h1>
                <p>Voor meer gedetailleerde uitleg over de geschiedenis, strategieën en varianten van Tic Tac Toe, kun je de Wikipedia-pagina bezoeken: <a href="https://nl.wikipedia.org/wiki/Kruisje-rondje" target="_blank">Tic Tac Toe op Wikipedia</a>.</p>
            </div>
        </section>
    </main>
    <?php include ('../Include/footer.php'); ?>
</body>
</html>