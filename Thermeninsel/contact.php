<!DOCTYPE html>
<html lang="de">
<head>
    <title>Kontakt</title>
    <meta charset="utf-8">
    <meta name="description" content="Thermenshop Bad Füssing Kontakt">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    include("Components/BulmaEinbindung.html");
    ?>

    <link rel="stylesheet" type="text/css" href="styles/contactstyle.css">

</head>
<body>

<div class="content">

    <!-- Header -->

    <?php
    include("Components/Header.html");
    ?>

    <!-- Menu -->


    <!-- Contact -->

    <main role="main" id="main" tabindex="-1">

        <h1 class="ueberschrift" id="h1">Kontaktinformationen</h1>

        <div class="columns is-multiline has-text-centered" id="information">
            <div class="column is-centered" id="contact">
                <section id="Kontakt">
                    <h2>Kontakt</h2>
                    <div class="kontaktUE">Adresse</div>
                    <div class="kontaktText"><a href="http://maps.google.com/?q=1200 Kurallee 1,Bad Füssing, 94072 " target="_blank">Kurallee 1, 94072 Bad Füssing</a></div>
                    <div class="kontaktUE">Telefon</div>
                    <div class="kontaktText"> <a href="tel:+49 8531 97 87 06">+49 8531 978706</a></div>
                    <div class="kontaktUE">E-Mail</div>
                    <div class="kontaktText"><a href="mailto:info@lorenzer.com">info@lorenzer.com</a></div>
                </section>
            </div>
           <div class="column is-centered" id="time">
                <section id="Öffnungszeiten">
                    <h2>Öffnungszeiten</h2>
                    <div class="tag">Montag - Freitag</div>
                    <div class="zeit">07:30 - 17:30</div>
                    <div class="tag">Samstag</div>
                    <div class="zeit">08:30 - 16:30</div>
                    <div class="tag">Sonn- und Feiertag</div>
                    <div class="zeit">08:30 - 16:30</div>
                </section>
            </div>
        </div>
        <div class="column is-centered" id="maps" aria-describedby="mapsDes">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2651.3122690543278!2d13.310488315995087!3d48.3545229792414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4774442c918c4b39%3A0xca1cd92b66fe1e54!2sThermeninsel+Bad+F%C3%BCssing+in+der+Therme+1!5e0!3m2!1sde!2sde!4v1543326955698"
                    width="400" title="Google Maps Einbindung" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div id="mapsDes" hidden>Hier befindet sich eine Google Maps Einbindung</div>

    </main>

    <?php
    include("Components/Footer.html");
    ?>

</div>

</body>
</html>