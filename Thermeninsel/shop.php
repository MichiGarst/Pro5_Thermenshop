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
    <link rel="stylesheet" type="text/css" href="styles/shopstyleNew.css">

</head>
<body>

<div class="content">

    <!-- Header -->

    <?php
    include("Components/Header.html");
    ?>

    <!-- Menu -->

    <div id="shopAussen">
        <div class="columns is-centered" id="shop">
            <div class="is-centered">
                <img src="images/fashybild2.jpg" alt="" id="thermePic">
            </div>
            <div id="welcome">
                <h1 class="ueberschrift" id="ueberschrift1">Der Thermenshop</h1>
                <p class="text">Bei uns erhältst du alles, was du für einen entspannten Bade- und Saunaaufenthalt. Wir sind dein Profi, wenn es
                    um Bademoden für Damen und Herren geht.<br> Mit unseren großen Auswahl findet jeder das richtige. Modisch immer aktuell auf dem neuesten
                    Stand und exklusive Bademode aus Italien.<br> Egal ob Bademäntel, Badeanzüge, Bikini, Tankini, Badehosen oder Bermudas, bei uns ist alles von bester Qualität
                    und ausgewählten Marken, auch Made-in-Germany.
                </p>
            </div>
        </div>
    </div>

    <!-- Contact -->


    <div id="main" class="has-text-centered" tabindex="-1">

        <div id="produkte">
            <h2 class="ueberschrift" id="ueberschrift2">Unsere Prdukte</h2>
            <br>
            <div tabindex="-1" class="columns is-multiline is-centered">
                <div class="column is-one-quarter">
                    <img src="images/poppy2.jpg" alt="" class="produktPic">
                    <p class="produktText"><strong>Bademäntel</strong><br>
                        Große Auswahl an Bademäntel. Einige sind in unseren Shop erhältlich. </p>
                </div>
                <div class="column is-one-quarter">
                    <img src="images/fashyStart2.jpg" alt="" class="produktPic">
                    <p class="produktText"><strong>Damen Bademode</strong><br>
                        Von Badeanzüge, über Tankini bis hin zu Bikni ist alles dabei.</p>
                </div>
                <div class="column is-one-quarter">
                    <img src="images/mann3.jpg" alt="" class="produktPic" >
                    <p class="produktText"><strong>Herren Bademode</strong><br>
                        Für unsere Männer bieten wir verschiedene Modelle von Slips bis Bermuda an.</p>
                </div>
                <div class="column is-one-quarter">
                    <img src="images/Badeschuhe.jpg" alt="" class="produktPic">
                    <p class="produktText"><strong>Badeschuhe</strong><br>
                        Unsere Badeschuhabteilung bietet natürlich auch Abwechslung, damit jeder den richtigen Schuh findet. </p>
                </div>
                <div class="column is-one-quarter">
                    <img src="images/Accessoiress.jpg" alt="" class="produktPic">
                    <p class="produktText"><strong>Bade- und Saunaaccessoires</strong><br>
                        Wir verkaufen auch Badehauben, Caps, Sonnenbrillen, Taucherbrillen, Badetaschen, Badetücher, Saunatücher, uvm.  </p>
                </div>
                <div class="column is-one-quarter">
                    <img src="images/kosmetik.jpg" alt="" class="produktPic">
                    <p class="produktText"><strong>Kosmetik</strong><br>
                        In unserer Kosmetikabteilung findest du Duschgel, Shampoo,<br> Aloe Vera
                     Produkte, Spitzner Duschschaum, Bodylotion, Sunlotion uvm.</p>
                </div>
                <div class="column is-one-quarter">
                    <img src="images/magazine.jpg" alt="" class="produktPic">
                    <p class="produktText"><strong>Pressefachhandel</strong><br>
                        Tageszeitungen, Zeitschriften, Taschenbücher und Romane  </p>
                </div>
            </div>
        </div>

        <div id="marken">
            <h2 id="ueberschrift3">Unsere Marken</h2>
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