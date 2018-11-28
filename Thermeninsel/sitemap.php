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




    <!-- Contact -->


    <div id="main" class="has-text-centered" tabindex="-1">
            <h1>Sitemap</h1>
            <ul id="SitemapList">
                <li>
                    <a href="index.php"
                       tabindex="0"
                       lang="en">
                        Home
                    </a>
                </li>
                <li>
                    <a href="about.php"
                       tabindex="0">
                        Über uns
                    </a>
                </li>
                <li>
                    <a href="shop.php"
                       tabindex="0">
                        Sortiment
                    </a>
                </li>
                <li>
                    <a href="request.php"
                       tabindex="0">
                        Anfragen
                    </a>
                </li>
                <li>
                    <a href="contact.php"
                       tabindex="0">
                        Kontakt
                    </a>
                </li>
            </ul>



        </div>










<?php
include("Components/Footer.html");
?>

</div>


</body>
</html>