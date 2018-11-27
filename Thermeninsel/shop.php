<!DOCTYPE html>
<html lang="de">
<head>
    <title>Sortiment</title>
    <meta charset="utf-8">
    <meta name="description" content="Thermenshop Bad Füssing Kontakt">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/accessibility.css">

    <!-- Bulma einbindung -->
    <?php
    include("Components/BulmaEinbindung.html");
    ?>

    <!-- Andere Stylesheets -->
    <link rel="stylesheet" type="text/css" href="styles/shopstyle.css">

</head>
<body>

<div class="content">

    <!-- Header -->

    <?php
    include("Components/Header.html");
    ?>

    <!-- Menu -->
    <div class="is-centered">
        <img src="images/fashybild2.jpg" alt="" width="100%" id="thermePic">
    </div>


    <!-- Contact -->


    <div id="main" class="has-text-centered">
        <div id="welcome">
            <h1>Der Thermenshop</h1>
            <p class="text">Bei uns erhältst du alles, was du für einen entspannten Bade- und Saunaaufenthalt. Wir sind dein Profi, wenn es
            um Bademoden für Damen und Herren geht.<br> Mit unseren großen Auswahl findet jeder das richtige. Modisch immer aktuell auf dem neuesten
             Stand und exklusive Bademode aus Italien.<br> Egal ob Bademäntel, Badeanzüge, Bikini, Tankini, Badehosen oder Bermudas, bei uns ist alles von bester Qualität
             und ausgewählten Marken, auch Made-in-Germany.
            </p>
        </div>
        <div id="produkte">
            <h2>Unsere Prdukte</h2>
            <br>
            <div tabindex="-1" class="columns is-multiline is-centered is-mobile">
                <div class="column is-narrow">
                    <img src="images/poppy1.jpg" alt="" width="18%" class="produktPic">
                    <p class="produktText"><strong>Vossen Poppy</strong><br>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, </p>
                </div>
                <div class="column is-narrow">
                    <img src="images/texas2.jpg" alt="" width="18%" class="produktPic">
                    <p class="produktText"><strong>Vossen Texas</strong><br>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, </p>
                </div>
                <div class="column is-narrow">
                    <img src="images/lederbadehose.jpg" alt="" width="18%" class="produktPic">
                    <p class="produktText"><strong>Lederbadehose</strong><br>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, </p>
                </div>
            </div>
        </div>

        <div id="marken">
            <h2>Unsere Marken</h2>
            <br>
            <div tabindex="-1" class="columns is-multiline is-centered is-mobile">
                <div class="column is-narrow">
                    <img src="images/fashyLogo.png" alt="" width="18%" class="produktPic">
                </div>
                <div class="column is-narrow">
                    <img src="images/palmbeachlogo.jpg" alt="" width="18%" class="produktPic">
                </div>
                <div class="column is-narrow">
                    <img src="images/selfcollectionlogo.png" alt="" width="18%" class="produktPic">
                </div>
                <div class="column is-narrow">
                    <img src="images/vossenlogo.png" alt="" width="18%" class="produktPic">
                </div>
                <div class="column is-narrow">
                    <img src="images/comtessalogo.png" alt="" width="18%" class="produktPic">
                </div>
                <div class="column is-narrow">
                    <img src="images/wewologo.png" alt="" width="18%" class="produktPic">
                </div>
            </div>
        </div>

    </div>

    <?php
    include("Components/Footer.html");
    ?>

</div>


</body>
</html>