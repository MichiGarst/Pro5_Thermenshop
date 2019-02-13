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
    include("BulmaEinbindung.html");
    ?>
    <!-- Andere Stylesheets -->
</head>
<body>

<figure class="content">

    <!-- Header -->

    <?php
    include("Header.html");
    ?>

    <!-- Menu -->

    <div id="aboutAussen">
        <div class="columns is-centered" id="aboutInnen">
            <div class="is-centered">
                <img src="images/fashybild1.jpg" alt="" id="thermePic">
            </div>
            <section id="welcome">
                <h1 class="ueberschrift" id="ueberschrift1">Die Thermeninsel</h1>
                <p class="text">
                    Die Seele der Thermeninsel sind unsere Mitarbeiter, die mit viel Herz, Erfahrung und Tatendrang ihre Arbeit
                    erledigen.
                    Mit unserer jahrenlagen Erfahrung beraten wir Sie gerne und helfen Ihnen das Richtige zu finden.
                </p>
            </section>
        </div>
    </div>

    <main role="main" id="main" tabindex="-1" class="has-text-centered">

        <section id="team">
            <h2>Das Team</h2>
            <div tabindex="-1" class="columns is-multiline is-centered">
                <div  class="column is-narrow has-text-centered is-one-quarter">
                    <figure>
                        <img src="images/Karl.jpg" alt="" class="team">
                        <figcaption><strong>Karl Lorenzer</strong><br>Inhaber, Geschäftsführer</figcaption>
                    </figure>
                </div>
                <div  class="column is-narrow has-text-centered is-one-quarter">
                    <p>
                        Die Thermeninsel gibt es seit 2008 und befindet sich im Eingangsbereich der THERME EINS. So
                        ist es mir möglich alle Kunden glücklich zu machen, egal ob Gast der Therme 1 oder Besucher von außerhalb.
                        Ich liebe meine Arbeit und den Kontakt mit Kunden. Am Ende vom Tag bin ich glücklich, wenn ich allen helfen konnte
                        und einen erholsamen Urlaub ohne Stress genießen können. Besuchen auch Sie mich und meine netten Kollegen
                        gerne in der Thermeninsel.
                    </p>
                </div>
                <div>

                </div>

            </div>
        </section>

    </main>

    <?php
    include("Footer.html");
    ?>

</figure>

</body>
</html>