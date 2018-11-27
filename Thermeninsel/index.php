<!DOCTYPE html>
<html lang="de">
<head>
    <title>Thermeninsel</title>
    <meta charset="utf-8">
    <meta name="description" content="Thermenshop Bad Füssing Kontakt">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bulma einbindung -->
    <?php
    include("Components/BulmaEinbindung.html");
    ?>
    <!-- Andere Stylesheets -->
    <link rel="stylesheet" type="text/css" href="styles/indexstyle.css">
    <link rel="stylesheet" type="text/css" href="styles/Nav.css">
    <link rel="stylesheet" type="text/css" href="styles/accessibility.css">


</head>
<body>

<div class="content">

    <!-- Header -->
    <?php
    include("Components/Header.html");
    ?>

            <!--
            <ul id="menubar1"
                role="menubar"
                aria-label="Navigation">
                <li>
                    <a role="menuitem"
                       href="index.html"
                       tabindex="0"
                       lang="en">
                        Home
                    </a>
                </li>
                <li>
                    <a role="menuitem"
                       href="about.html"
                       tabindex="0">
                        Über uns
                    </a>
                </li>
                <li>
                    <a role="menuitem"
                       href="shop.html"
                       tabindex="0">
                        Sortiment
                    </a>
                </li>
                <li>
                    <a role="menuitem"
                       href="request.html"
                       tabindex="0">
                        Anfragen
                    </a>
                </li>
                <li>
                    <a role="menuitem"
                       href="coffee.html"
                       tabindex="0">
                        Kaffee
                    </a>
                </li>
                <li>
                    <a role="menuitem"
                       href="contact.html"
                       tabindex="0">
                        Kontakt
                    </a>
                </li>
            </ul>
            -->

    <!-- Menu -->
    <div class="is-centered">
         <img src="images/fashybild8.jpg" alt="" width="100%" id="thermePic">
     </div>


     <!-- Contact -->

    <div id="main" class="has-text-centered">


        <div id="welcome">
            <h1>Herzlich Willkommen bei der Thermeninsel</h1>
            <p class="text">Wir sind ihr Spezialist in Sachen Bademoden!
                Bei uns ist dein Badevergnügen sicher. Hier findest du alles, was du für einen gelungenen Badetag oder Wellnestag benötigst.<br>
                Keinen Bademantel dabei? Badeschuhe vergessen? Badehose zu Hause gelassen? Die Sonnencreme schon leer?
                <br> KEIN PROBLEM: Bei unserem großen Sortiment findest du immer das Richtige. Wir sind für jeden Notfall ausgerüstet! <br>
                Wir bieten: Bademoden, Bade-Accessoires, Kosmetik, Aloe-Vera-Produkte, Sonnenschutz, Zeitschriften, Bücher
                und erstklassigen Kaffe an unserer Café-Bar! <br>
                Außerdem sind wir <b>365 Tage im Jahr </b>für dich da. Schau einfach vorbei. <br> Wir freuen uns auf dich!
            </p>
        </div>
        <div class="columns">
            <div class="column is-centered" id="contact">
                <p id="kontakt">
                <h2>Kontakt</h2>
                <div class="kontaktUE">Adresse</div>
                <div class="kontaktText">Kurallee 1, 94072 Bad Füssing</div>
                <div class="kontaktUE">Telefon</div>
                <div class="kontaktText">+49 8531 978706</div>
                <div class="kontaktUE">E-Mail</div>
                <div class="kontaktText">info@lorenzer.com</div>
                </p>
            </div>
            <div class="column is-centered" id="time">
                <p id="Öffnungszeiten">
                <h2>Öffnungszeiten</h2>
                <div class="tag">Montag - Freitag</div>
                <div class="zeit">07:30 - 17:30</div>
                <div class="tag">Samstag</div>
                <div class="zeit">08:30 - 16:30</div>
                <div class="tag">Sonn- und Feiertag</div>
                <div class="zeit">08:30 - 16:30</div>
                </p>
            </div>
        </div>
        <div id="kaffee">
            <h1>Café Bar</h1>
            <div class="columns is-centered">
                <img src="images/coffee.jpg" alt="" id="coffee" class="column is-half">
                <p class="column is-half" id="text">
                    Bei unserer Café Bar kannst du dich nach dem Baden noch etwas entspannen. Egal ob Cappuccino, Latte Macchiato oder einfach nur ein
                    normaler Café Crema. Lass noch einen Moment die Seele baumeln, bevor der stressige Alltag dich wieder einholt.
                    Natürlich kann man bei sowohl Kaltgetränke in Flaschen als auch Kaffee mitnehmen.

                </p>
            </div>
        </div>
    </div>

    <?php
    include("Components/Footer.html");
    ?>

</div>


<!-- Javascript -->
<script src="JS/Navigation.js"></script>

</body>
</html>