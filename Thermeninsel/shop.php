<!DOCTYPE html>
<html lang="de">
<head>
    <title>Thermeninsel - Bademoden Sortiment</title>
    <meta charset="utf-8">
    <meta name="description" content="Thermenshop Bad Füssing Kontakt">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/accessibility.css">

    <!-- Bulma einbindung -->
    <?php
    include("BulmaEinbindung.html");
    ?>

    <!-- Andere Stylesheets -->
    <link rel="stylesheet" type="text/css" href="styles/shopstyleNew.css">

</head>
<body>

<div class="content">

    <!-- Header -->

    <?php
    include("Header.html");
    ?>

    <!-- Menu -->

    <div id="shopAussen">
        <div class="columns is-centered" id="shop">
            <div class="is-centered">
                <img src="images/fashybild2.jpg" alt="" id="thermePic">
            </div>
            <section id="welcome">
                <h1 class="ueberschrift" id="ueberschrift1">Der Thermenshop</h1>
                <p class="text">Bei uns erhältst du alles, was du für einen entspannten Bade- und Saunaaufenthalt benötigst. Wir sind dein Profi, wenn es
                    um Bademoden für Damen und Herren geht.<br> Mit unseren großen Auswahl findet jeder das richtige. Modisch immer aktuell auf dem neuesten
                    Stand und exklusive Bademode aus Italien.<br> Egal ob Bademäntel, Badeanzüge, Bikini, Tankini, Badehosen oder Bermudas, bei uns ist alles von bester Qualität
                    und ausgewählten Marken, auch Made-in-Germany.
                </p>
            </section>
        </div>
    </div>

    <!-- Contact -->



    <main id="main" role="main" class="has-text-centered" tabindex="-1">

        <section id="produkte">
            <h2 class="ueberschrift" id="ueberschrift2">Unsere Produkte</h2>
            <br>
            <div class="columns is-multiline is-centered">
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
                        Wir verkaufen auch Badehauben, Caps, Sonnenbrillen, Schwimmbrillen, Badetaschen, Badetücher, Saunatücher, <abbr title="und viele mehr">uvm.</abbr></p>
                </div>
                <div class="column is-one-quarter">
                    <img src="images/kosmetik.jpg" alt="" class="produktPic">
                    <p class="produktText"><strong>Kosmetik</strong><br>
                        In unserer Kosmetikabteilung findest du Duschgel, Shampoo,<br> Aloe Vera
                     Produkte, Spitzner Duschschaum, Bodylotion, Sunlotion <abbr title="und viele mehr">uvm.</abbr></p>
                </div>
                <div class="column is-one-quarter">
                    <img src="images/magazine.jpg" alt="" class="produktPic">
                    <p class="produktText"><strong>Pressefachhandel</strong><br>
                        Tageszeitungen, Zeitschriften, Taschenbücher und Romane  </p>
                </div>
               <!-- <div class="column is-one-quarter">
                    <figure class="effect-sadie">
                        <img src="images/poppy2.jpg" alt="img02" class="produktPic"/>
                        <figcaption>
                            <h2>Bade <span>mäntel</span></h2>
                            <p>Große Auswahl an Bademäntel. Einige sind in unseren Shop erhältlich.</p>
                        </figcaption>
                    </figure>
                </div> -->
            </div>
        </section>


        <section id="main2" class="has-text-centered" tabindex="-1">
            <div id="marken">
                <h2 id="ueberschrift3">Unsere Marken</h2>
                <br>
                <div tabindex="-1" class="columns is-multiline is-centered is-mobile">
                    <div class="column is-narrow">
                        <img src="images/fashyLogo.png" alt="Fashy" width="18%" class="produktPic">
                    </div>
                    <div class="column is-narrow">
                        <img src="images/palmbeachlogo.jpg" alt="Palmbeach" width="18%" class="produktPic">
                    </div>
                    <div class="column is-narrow">
                        <img src="images/selfcollectionlogo.png" alt="Selfcollection" width="18%" class="produktPic">
                    </div>
                    <div class="column is-narrow">
                        <img src="images/vossenlogo.png" alt="Vossen" width="18%" class="produktPic">
                    </div>
                    <div class="column is-narrow">
                        <img src="images/comtessalogo.png" alt="Comtessa" width="18%" class="produktPic">
                    </div>
                    <div class="column is-narrow">
                        <img src="images/wewologo.png" alt="wewo" width="18%" class="produktPic">
                    </div>
                </div>
            </div>
        </section>
    </main>


    <?php
    include("Footer.html");
    ?>

</div>


</body>
</html>
