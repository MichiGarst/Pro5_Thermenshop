<!DOCTYPE html>
<html lang="de">
<head>
    <title>Thermeninsel - Bademoden Bestellen</title>
    <meta charset="utf-8">
    <meta name="description" content="Thermenshop Bad Füssing Kontakt">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bulma einbindung -->
    <?php
    include("Components/BulmaEinbindung.html");
    ?>

    <!-- Andere Stylesheets-->
    <link rel="stylesheet" type="text/css" href="styles/requeststyleNew.css">
</head>
<body>

<div class="content">

    <!-- Header -->

    <?php
    include("Components/Header.html");
    ?>
    <!-- Menu -->

<div id="anfrageAussen">
        <div class="columns is-centered" id="anfrage">
            <div class="is-centered">
                <img src="images/fashybild3.jpg" alt="" width="100%" id="">
            </div>
            <div id="welcome" class="has-text-centered">
                <h1 class="ueberschrift" id="h1">Anfrage senden</h1>
                <p>Hier können Sie Bademäntel oder Lederbadehosen bestellen. Einfach Größe, Farbe auswählen und eine Anfrage
                    abschicken. Wir nehmen dann gerne mit Ihnen
                    Kontakt auf und geben Bescheid, wann der Artikel ankommt!</p>
            </div>
        </div>
</div>

    <!-- Contact -->
<div class="box">
    <div id="main" tabindex="-1" class="has-text-centered">
        <div class="columns" id="produkte">
            <div class="column is-one-third" onclick="setForm('bademantel', 'eins')" id="eins">
                <img src="images/Texas3.jpg" alt="" class="produktPic">
                <p><strong>Vossen Texas</strong><br>
                    Der absolut trendige Kapuzenbademantel Texas ist in acht sehr
                    modernen, frischen Farben erhältlich. Aufgrund seiner hochwertigen Veloursoberfläche zeichnet sich
                    der Mantel durch eine besondere
                    Leichtigkeit und einen angenehm zarten Griff aus. Die etwas kürzere Länge von 110cm macht dieses
                    Model zu einem absoluten Blickfang. <br>
                    <b>100% Baumwolle</b></p>
            </div>
            <div class="column" onclick="setForm('bikini', 'zwei')" id="zwei">
                <img src="images/poppy1.jpg" alt="" class="produktPic">
                <p><strong>Vossen Poppy</strong><br>
                    Der Doubleface-Kapuzenbademantel liegt mit seiner Farbstellung voll im Trend. Die farblich dunklere
                    Außenseite aus Mikrofaser setzt sich optisch von der etwas helleren Innenseite aus hochwertigem
                    Wirkfrottier ab. Dadurch wird dieser einzigartige Mantel zu einem absoluten Blickfang. Neben den
                    modernen Farben zeichnet sich Poppy durch einen wunderbar flauschigen Griff, einen sehr hohen
                    Tragekomfort und höchste Saugfähigkeit aus.<br>
                    <b>20% Baumwolle, 35% Bambus, 45% Polyester</b></p>
            </div>
            <div class="column" onclick="setForm('hose', 'drei')" id="drei">
                <img src="images/texas2.jpg" alt="" class="produktPic">
                <p><strong>Vossen Texas</strong><br>
                    Der absolut trendige Kapuzenbademantel Texas ist in acht sehr
                    modernen, frischen Farben erhältlich. Aufgrund seiner hochwertigen Veloursoberfläche zeichnet sich
                    der Mantel durch eine besondere
                    Leichtigkeit und einen angenehm zarten Griff aus. Die etwas kürzere Länge von 110cm macht dieses
                    Model zu einem absoluten Blickfang. <br>
                    <b>100% Baumwolle</b></p>
            </div>
        </div>
    </div>
        <div id="bademantel" class="requestForm has-text-centered">
            <form action="sendPHPmail.php" id="checkbox" method="post" aria-label="Anfrageformular">
                <div hidden>
                    <label for="product">Produkt:</label>
                    <input type="text" id="product" name="product" value="bademantel">
                </div>
                <div>
                    <div role="checkbox"
                         class="group_checkbox"
                         aria-checked="false"
                         aria-labelledby="label1"
                         aria-describedby="checkboxHelpHide"
                         tabindex="0"
                         id="label1"
                         onclick="toggleGroupCheckbox(event)"
                         onkeydown="toggleGroupCheckbox(event)"
                         onfocus="focusCheckbox(event)"
                         onblur="blurCheckbox(event)">
                        <img src="./images/checkbox-unchecked-black.png" alt="">
                        <span> Farbe1: </span>

                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox1[]" id="checkbox1_group1" value="Atlantic"
                               aria-labelledby="label1">
                        <label for="checkbox1_group1">Atlantic</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox1[]" id="checkbox2_group1" value="Purpur"
                               aria-labelledby="label1">
                        <label for="checkbox2_group1">Purpur</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox1[]" id="checkbox3_group1" value="Lagoon"
                               aria-labelledby="label1">
                        <label for="checkbox3_group1">Lagoon</label>
                    </div>
                </div>

                <div>
                    <div role="checkbox"
                         class="group_checkbox"
                         aria-checked="false"
                         aria-labelledby="label2"
                         aria-describedby="checkboxHelpHide"
                         tabindex="0"
                         id="label2"
                         onclick="toggleGroupCheckbox(event)"
                         onkeydown="toggleGroupCheckbox(event)"
                         onfocus="focusCheckbox(event)"
                         onblur="blurCheckbox(event)">
                        <img src="./images/checkbox-unchecked-black.png" alt="">
                        <span> Größe: </span>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox1_group2" value="xs"
                               aria-labelledby="label2">
                        <label for="checkbox1_group2">XS</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox2_group2" value="s"
                               aria-labelledby="label2">
                        <label for="checkbox2_group2">S</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox3_group2" value="m"
                               aria-labelledby="label2">
                        <label for="checkbox3_group2">M</label>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox4_group2" value="l"
                               aria-labelledby="label2">
                        <label for="checkbox4_group2">L</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox5_group2" value="xl"
                               aria-labelledby="label2">
                        <label for="checkbox5_group2">XL</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox6_group2" value="xxl"
                               aria-labelledby="label2">
                        <label for="checkbox6_group2">XXL</label>
                    </div>
                </div>

                <div id="checkboxHelp">Sie können einmal oder mehrmals dasselbe Produkt bestellen.</div>
                <div id="checkboxHelpHide" hidden>Sie können einmal oder mehrmals dasselbe Produkt bestellen.</div>
                <div class="is-centered">
                    <div>
                        <label for="first_name">Vorname:</label>
                        <input type="text" autocomplete="first_name" id="first_name" name="first_name" required>
                    </div>
                    <div>
                        <label for="last_name">Nachname:</label>
                        <input type="text" autocomplete="last_name" id="last_name" name="last_name" required>
                    </div>
                    <div>
                        <label for="email">E-Mail:</label>
                        <input type="email" autocomplete="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="telephone">Telefon:</label>
                        <input type="tel" pattern="[0-9]{11}" autocomplete="telephone" id="telephone" name="telephone"
                               required>
                    </div>
                    <div>
                        <label for="desires">Ihre Wünsche:</label>
                        <textarea type="text" id="desires" name="desires"></textarea>
                    </div>
                </div>
                <button type="submit">Senden</button>
            </form>
        </div>


        <div id="hose" class="requestForm has-text-centered">
            <form action="sendPHPmail.php" id="checkbox" method="post" aria-label="Anfrageformular">
                <div hidden>
                    <label for="product">Produkt:</label>
                    <input type="text" id="product" name="product" value="hose">
                </div>
                <div>
                    <div role="checkbox"
                         class="group_checkbox"
                         aria-checked="false"
                         aria-labelledby="label1"
                         aria-describedby="checkboxHelpHide"
                         tabindex="0"
                         id="label1"
                         onclick="toggleGroupCheckbox(event)"
                         onkeydown="toggleGroupCheckbox(event)"
                         onfocus="focusCheckbox(event)"
                         onblur="blurCheckbox(event)">
                        <img src="./images/checkbox-unchecked-black.png" alt="">
                        <span> Farbe2: </span>

                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox1[]" id="checkbox1_group1" value="Atlantic"
                               aria-labelledby="label1">
                        <label for="checkbox1_group1">Atlantic</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox1[]" id="checkbox2_group1" value="Purpur"
                               aria-labelledby="label1">
                        <label for="checkbox2_group1">Purpur</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox1[]" id="checkbox3_group1" value="Lagoon"
                               aria-labelledby="label1">
                        <label for="checkbox3_group1">Lagoon</label>
                    </div>
                </div>

                <div>
                    <div role="checkbox"
                         class="group_checkbox"
                         aria-checked="false"
                         aria-labelledby="label2"
                         aria-describedby="checkboxHelpHide"
                         tabindex="0"
                         id="label2"
                         onclick="toggleGroupCheckbox(event)"
                         onkeydown="toggleGroupCheckbox(event)"
                         onfocus="focusCheckbox(event)"
                         onblur="blurCheckbox(event)">
                        <img src="./images/checkbox-unchecked-black.png" alt="">
                        <span> Größe: </span>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox1_group2" value="xs"
                               aria-labelledby="label2">
                        <label for="checkbox1_group2">XS</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox2_group2" value="s"
                               aria-labelledby="label2">
                        <label for="checkbox2_group2">S</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox3_group2" value="m"
                               aria-labelledby="label2">
                        <label for="checkbox3_group2">M</label>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox4_group2" value="l"
                               aria-labelledby="label2">
                        <label for="checkbox4_group2">L</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox5_group2" value="xl"
                               aria-labelledby="label2">
                        <label for="checkbox5_group2">XL</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox6_group2" value="xxl"
                               aria-labelledby="label2">
                        <label for="checkbox6_group2">XXL</label>
                    </div>
                </div>

                <div id="checkboxHelp">Sie können einmal oder mehrmals dasselbe Produkt bestellen.</div>
                <div id="checkboxHelpHide" hidden>Sie können einmal oder mehrmals dasselbe Produkt bestellen.</div>
                <div class="is-centered">
                    <div>
                        <label for="first_name">Vorname:</label>
                        <input type="text" autocomplete="first_name" id="first_name" name="first_name" required>
                    </div>
                    <div>
                        <label for="last_name">Nachname:</label>
                        <input type="text" autocomplete="last_name" id="last_name" name="last_name" required>
                    </div>
                    <div>
                        <label for="email">E-Mail:</label>
                        <input type="email" autocomplete="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="telephone">Telefon:</label>
                        <input type="tel" pattern="[0-9]{11}" autocomplete="telephone" id="telephone" name="telephone"
                               required>
                    </div>
                    <div>
                        <label for="desires">Ihre Wünsche:</label>
                        <textarea type="text" id="desires" name="desires"></textarea>
                    </div>
                </div>
                <button type="submit">Senden</button>
            </form>
        </div>

        <div id="bikini" class="requestForm has-text-centered">
            <form action="sendPHPmail.php" id="checkbox" method="post" aria-label="Anfrageformular">
                <div hidden>
                    <label for="product">Produkt:</label>
                    <input type="text" id="product" name="product" value="bikini">
                </div>
                <div>
                    <div role="checkbox"
                         class="group_checkbox"
                         aria-checked="false"
                         aria-labelledby="label1"
                         aria-describedby="checkboxHelpHide"
                         tabindex="0"
                         id="label1"
                         onclick="toggleGroupCheckbox(event)"
                         onkeydown="toggleGroupCheckbox(event)"
                         onfocus="focusCheckbox(event)"
                         onblur="blurCheckbox(event)">
                        <img src="./images/checkbox-unchecked-black.png" alt="">
                        <span> Farbe3: </span>

                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox1[]" id="checkbox1_group1" value="Atlantic"
                               aria-labelledby="label1">
                        <label for="checkbox1_group1">Atlantic</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox1[]" id="checkbox2_group1" value="Purpur"
                               aria-labelledby="label1">
                        <label for="checkbox2_group1">Purpur</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox1[]" id="checkbox3_group1" value="Lagoon"
                               aria-labelledby="label1">
                        <label for="checkbox3_group1">Lagoon</label>
                    </div>
                </div>

                <div>
                    <div role="checkbox"
                         class="group_checkbox"
                         aria-checked="false"
                         aria-labelledby="label2"
                         aria-describedby="checkboxHelpHide"
                         tabindex="0"
                         id="label2"
                         onclick="toggleGroupCheckbox(event)"
                         onkeydown="toggleGroupCheckbox(event)"
                         onfocus="focusCheckbox(event)"
                         onblur="blurCheckbox(event)">
                        <img src="./images/checkbox-unchecked-black.png" alt="">
                        <span> Größe: </span>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox1_group2" value="xs"
                               aria-labelledby="label2">
                        <label for="checkbox1_group2">XS</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox2_group2" value="s"
                               aria-labelledby="label2">
                        <label for="checkbox2_group2">S</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox3_group2" value="m"
                               aria-labelledby="label2">
                        <label for="checkbox3_group2">M</label>
                    </div>

                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox4_group2" value="l"
                               aria-labelledby="label2">
                        <label for="checkbox4_group2">L</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox5_group2" value="xl"
                               aria-labelledby="label2">
                        <label for="checkbox5_group2">XL</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox2[]" id="checkbox6_group2" value="xxl"
                               aria-labelledby="label2">
                        <label for="checkbox6_group2">XXL</label>
                    </div>
                </div>

                <div id="checkboxHelp">Sie können einmal oder mehrmals dasselbe Produkt bestellen.</div>
                <div id="checkboxHelpHide" hidden>Sie können einmal oder mehrmals dasselbe Produkt bestellen.</div>
                <div class="is-centered">
                    <div>
                        <label for="first_name">Vorname:</label>
                        <input type="text" autocomplete="first_name" id="first_name" name="first_name" required>
                    </div>
                    <div>
                        <label for="last_name">Nachname:</label>
                        <input type="text" autocomplete="last_name" id="last_name" name="last_name" required>
                    </div>
                    <div>
                        <label for="email">E-Mail:</label>
                        <input type="email" autocomplete="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="telephone">Telefon:</label>
                        <input type="tel" pattern="[0-9]{11}" autocomplete="telephone" id="telephone" name="telephone"
                               required>
                    </div>
                    <div>
                        <label for="desires">Ihre Wünsche:</label>
                        <textarea type="text" id="desires" name="desires"></textarea>
                    </div>
                </div>
                <button type="submit" name="Produktanfrage jetzt senden" value="Produktanfrage senden" aria-describedby="Halloooooo" aria-labelledby="Anfrage senden sofort">Senden</button>
            </form>
        </div>
    </div>

    <?php
    include("Components/Footer.html");
    ?>

</div>

</body>
</html>

<script>
    function setForm(product, line123) {
        var x = document.getElementsByClassName("requestForm");
        var i;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }

        var y = document.getElementsByClassName("column");
        var j;
        for (j = 0; j < y.length; j++) {
            y[j].style.backgroundColor = "#F7F7F6";
        }

        document.getElementById(product).style.display='inline';
        document.getElementById(line123).style.backgroundColor ='#ffcc00';
    }
</script>

<style>
    .requestForm{
        display: none;
    }
</style>