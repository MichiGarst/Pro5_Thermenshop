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


        <main role="main" id="main" class="has-text-centered" tabindex="-1">
            <h1>Sitemap</h1>
            <ul id="SitemapList">
                <li>
                    <a href="index.php" tabindex="0" lang="en" class="clickLink"> Home </a>
                </li>
                <li>
                    <a href="about.php" tabindex="0" class="clickLink"> Über uns </a>
                </li>
                <li>
                    <a href="shop.php" tabindex="0" class="clickLink"> Sortiment </a>
                </li>
                <li>
                    <a href="request.php" tabindex="0" class="clickLink"> Anfragen </a>
                </li>
                <li>
                    <a href="contact.php" tabindex="0" class="clickLink"> Kontakt </a>
                </li>
            </ul>
        </main>





<style>
    .clickLink{
        display:block;
        height: 48px;
    }

    #SitemapList{
        list-style-type: none;
    }
</style>




<?php
include("Components/Footer.html");
?>

</div>


</body>
</html>