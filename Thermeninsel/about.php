<!DOCTYPE html>
<html lang="de">
<head>
    <title>Die Thermeninsel stellt sich vor</title>
    <meta charset="utf-8">
    <meta name="description" content="Thermenshop Bad Füssing Kontakt">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/accessibility.css">
    <link rel="stylesheet" type="text/css" href="styles/aboutstyle.css">

    <!-- Bulma einbindung -->
    <?php
    include("Components/BulmaEinbindung.html");
    ?>
    <!-- Andere Stylesheets -->
</head>
<body>

<div class="content">

    <!-- Header -->

    <?php
    include("Components/Header.html");
    ?>

    <!-- Menu -->

    <div id="aboutAussen">
        <div class="columns is-centered" id="aboutInnen">
            <div class="is-centered">
                <img src="images/fashybild1.jpg" alt="" id="thermePic">
            </div>
            <div id="welcome">
                <h1 class="ueberschrift" id="ueberschrift1">Die Thermeninsel</h1>
                <p class="text">
                    Die Seele der Thermeninsel sind unsere Mitarbeiter, die mit viel Herz, Erfahrung und Tatendrang ihre Arbeit
                    erledigen.
                    Mit unserer jahrenlagen Erfahrung beraten wir dich gerne und helfen dir das richtige zu finden.
                </p>
            </div>
        </div>
    </div>

    <main role="main" id="main" tabindex="-1" class="has-text-centered">

        <div id="team">
            <h2>Das Team</h2>
            <div tabindex="-1" class="columns is-multiline is-centered">
                <div class="column is-narrow has-text-centered is-one-quarter">
                    <img src="images/Karl.jpg" alt="" class="team">
                    <p>
                        <strong>Karl Lorenzer</strong><br>Inhaber, Geschäftsführer
                    </p>
                </div>
                <div class="column is-narrow has-text-centered is-one-quarter">
                    <img src="images/Resi.jpg" alt="" class="team">
                    <p>
                        <strong>Theresa Dichtleder</strong><br>Mitarbeiterin
                    </p>
                </div>
                <div class="column is-narrow has-text-centered is-one-quarter">
                    <img src="images/Mimi.jpeg" alt="" class="team">
                    <p>
                        <strong>Mirjam Tweraser</strong><br>Mitarbeiterin
                    </p>
                </div>
                <div class="column is-narrow has-text-centered is-one-quarter">
                    <figure>                                                      <!-- Bereich ist kleiner weil ".content figure" margins besitzt -->
                        <img src="images/Kathi.jpeg" alt="" class="team">
                        <figcaption><strong>Katharina Graf</strong><br>Mitarbeiterin</figcaption>
                    </figure>
                </div>
            </div>
        </div>

    </main>

    <?php
    include("Components/Footer.html");
    ?>

</div>

</body>
</html>