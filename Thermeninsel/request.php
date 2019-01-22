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
            <section id="welcome" class="has-text-centered">
                <h1 class="ueberschrift" id="h1">Anfrage senden</h1>
                <p>Hier können Sie Bademäntel oder Lederbadehosen bestellen. Einfach Größe, Farbe auswählen und eine Anfrage
                    abschicken. Wir nehmen dann gerne mit Ihnen
                    Kontakt auf und geben Bescheid, wann der Artikel ankommt!</p>
            </section>
        </div>
</div>

    <!-- Contact -->
<div class="box">
    <main id="main" role="main" tabindex="-1" class="has-text-centered">
        <div class="columns" id="produkte">
            <div class="column is-one-third" onclick="setForm('bademantel', 'texas')" id="texas">
                <img src="images/Texas3.jpg" alt="" class="produktPic">
                <p onclick="setForm('bademantel', 'texas')"><strong>Vossen Texas</strong><br>
                    Der absolut trendige Kapuzenbademantel Texas ist in acht sehr
                    modernen, frischen Farben erhältlich. Aufgrund seiner hochwertigen Veloursoberfläche zeichnet sich
                    der Mantel durch eine besondere
                    Leichtigkeit und einen angenehm zarten Griff aus. Die etwas kürzere Länge von 110cm macht dieses
                    Model zu einem absoluten Blickfang. <br>
                    <strong>100% Baumwolle</strong></p>
            </div>
            <div class="column" onclick="setForm('bikini', 'poppy')" id="poppy">
                <img src="images/poppy1.jpg" alt="" class="produktPic">
                <p onclick="setForm('bikini', 'poppy')"><strong>Vossen Poppy</strong><br>
                    Der Doubleface-Kapuzenbademantel liegt mit seiner Farbstellung voll im Trend. Die farblich dunklere
                    Außenseite aus Mikrofaser setzt sich optisch von der etwas helleren Innenseite aus hochwertigem
                    Wirkfrottier ab. Dadurch wird dieser einzigartige Mantel zu einem absoluten Blickfang. Neben den
                    modernen Farben zeichnet sich Poppy durch einen wunderbar flauschigen Griff, einen sehr hohen
                    Tragekomfort und höchste Saugfähigkeit aus.<br>
                    <strong>20% Baumwolle, 35% Bambus, 45% Polyester</strong></p>
            </div>
            <div class="column" onclick="setForm('hose', 'dallas')" id="dallas">
                <img src="images/texas2.jpg" alt="" class="produktPic">
                <p onclick="setForm('hose', 'dallas')"><strong>Vossen Dallas</strong><br>
                    Comfort Line / Unisex / Dallas, der moderne Velours-Unisexmantel aus
                    100% Baumwolle besticht durch beste Qualität und höchsten Tragekomfort.
                    Der exklusive Schnitt und die etwas kürzere Länge machen diesen Mantel
                    zu einem absoluten Blickfang. Diese Kollektion ist in sehr modernen Farben erhältlich. <br>
                    <strong>100% Baumwolle</strong></p>
            </div>
        </div>

        <section id="bademantel" class="requestForm has-text-centered">
            <h2 id="requestForm">Anfrageformular</h2>
            <form class="columns "  action="sendPHPmail.php" id="checkbox" method="post" aria-label="Anfrageformular" autocomplete="on">
                <strong class="FormHeading">Bademantel Texas</strong><br><br>
                <div hidden>
                    <label for="product">Produkt:</label>
                    <input type="text" id="product" name="product" value="bademantel Texas">
                </div>
              <!--  <div>
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
                </div> -->
<div class="column has-text-centered">
                <label for="farbe">Wähle eine Farbe:</label>
                <select id="farbe" name="farbe">
                    <option value="Purpur">Purpur</option>
                    <option value="Lagoon">Lagoon</option>
                    <option value="Winternight">Winternight</option>
                    <option value="Cranberry">Cranberry</option>
                    <option value="Flanell">Flanell</option>
                    <option value="Atlantik">Atlantik</option>
                    <option value="Schwarz">Schwarz</option>
                    <option value="Turquoise">Turquoise</option>
                    <option value="Weiss">Weiß</option>
                    <option value="MeadowGreen">Meadow Green</option>

                </select>
</div>
                <br>
<fieldset class="column">
                <div id="GroesseHelp" hidden>Sie können mehrere Größen auswählen.</div>
                <label for="groesse">Wähle eine Größe:</label>
                <select id="groesse" name="groesse[]" aria-describedby="GroesseHelp" multiple required>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
</fieldset>
                <fieldset class="column">
                    <legend>Wähle dein Land</legend>
                    <div class="row">
                        <input type="radio" id="de" name="land[]" value="de" checked/>
                        <label for="de" class="checkboxGroesse">Deutschland</label><br>

                        <input type="radio" id="at" name="land[]" value="at" />
                        <label for="at" class="checkboxGroesse">Österreich</label><br>

                        <input type="radio" id="ch" name="land[]" value="ch" />
                        <label for="ch" class="checkboxGroesse">Schweiz</label><br>

                        <input type="radio" id="ot" name="land[]" value="ot" />
                        <label for="ot" class="checkboxGroesse">Anderes Land</label>
                    </div>
                </fieldset>

                <fieldset class="column is-centered ">
                    <div>
                        <span id="p5" hidden>Vorname Pflichtfeld</span>
                        <label for="first_name" class="DataField">Vorname *
                            <input type="text" autocomplete="on" id="first_name" name="first_name" aria-labelledby="p5" required="required">
                        </label>
                    </div>
                    <div>
                        <label class="DataField">
                            Vorname * <input type="text" role="combobox" aria-required="true" required>
                        </label>
                    </div>
                    <div>
                        <span id="p4" hidden>Nachname Pflichtfeld</span>
                        <label for="last_name" class="DataField">Nachname *
                            <input type="text" autocomplete="on" id="last_name" name="last_name" aria-labelledby="p4" required="required">
                        </label>
                    </div>
                    <div>
                        <span id="p3" hidden>Emailadresse Pflichfeld</span>
                        <label for="email" class="DataField">E-Mail Adresse*
                            <input type="email" autocomplete="on" id="email" name="email" required="required" aria-labelledby="p3">
                        </label>
                    </div>
                    <div>
                        <span id="p2" hidden>Telefonnummer ohne Leerzeichen</span>
                        <label for="telephone" class="DataField">Telefonnummer:
                            <input type="tel" pattern="[0-9]{10,13}" autocomplete="on" id="telephone" name="telephone" aria-labelledby="p2">
                        </label>
                    </div>
                    <div>
                        <span id="p1" hidden>Ihre Wünsche</span>
                        <label for="desires" class="DataField">Ihre Wünsche:</label>
                        <textarea id="desires" name="desires" aria-labelledby="p1"></textarea>
                    </div>
                </fieldset>
                <button type="submit" name="Produktanfrage senden" role="button" aria-label="Produktanfrage senden">Senden</button>
            </form>
            <section id="tableButton">
                <button type="button" name="tabelle" role="button" id="buttonGroesse" onclick="setTable()" aria-label="Größentabelle für Bikinis anzeigen">Größentabelle</button>
            </section>
        </section>




        <section id="hose" class="requestForm has-text-centered">
            <h2 id="requestForm">Anfrageformular</h2>
            <form action="sendPHPmail.php" id="checkbox" method="post" aria-label="Anfrageformular" autocomplete="on">
                <strong class="FormHeading">Bademantel Dallas</strong><br><br>
                <div hidden>
                    <label for="product">Produkt:</label>
                    <input type="text" id="product" name="product" value="Bademantel Dallas">
                </div>
               <!-- <div>
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
                </div> -->

                <label for="farbe2">Wähle eine Farbe:</label>
                <select id="farbe2" name="farbe">
                    <option value="Flanell">Flanell</option>
                    <option value="Shell">Shell</option>
                    <option value="Rubin">Rubin</option>
                    <option value="Winternight">Winternight</option>
                    <option value="Turquoise">Turquoise</option>
                    <option value="Weiss">Weiß</option>
                </select>
                <br>
                <label for="groesse2" aria-describedby="GroesseHelp">Wähle eine Größe:</label>
                <select id="groesse2" name="groesse[]" aria-describedby="GroesseHelp" multiple required>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
               <!-- <div>
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
                </div> -->
                <fieldset>
                    <legend>Wähle dein Land</legend>
                    <div class="row">
                        <input type="radio" id="de2" name="land[]" value="de" checked/>
                        <label for="de2" class="checkboxGroesse">Deutschland</label><br>

                        <input type="radio" id="at2" name="land[]" value="at" />
                        <label for="at2" class="checkboxGroesse">Österreich</label><br>

                        <input type="radio" id="ch2" name="land[]" value="ch" />
                        <label for="ch2" class="checkboxGroesse">Schweiz</label><br>

                        <input type="radio" id="ot2" name="land[]" value="ot" />
                        <label for="ot2" class="checkboxGroesse">Anderes Land</label>
                    </div>
                </fieldset>


                <!--  <fieldset>
                      <legend aria-describedby="GroesseHelp">Wähle die Größe:</legend>
                      <input id="xs" type="checkbox" name="toppings" value="xs" class="checkboxGroesse">
                      <label for="xs">XS</label><br>
                      <input id="s" type="checkbox" name="toppings" value="s" class="checkboxGroesse">
                      <label for="s">S</label><br>
                <label for="xs" class="testingIT">XS
                          <input id="xs" type="checkbox" name="toppings" value="xs" class="checkboxGroesse">
                          <span class="checkmark"></span>
                      </label><br>
                      <label for="s" class="testingIT">S
                          <input id="s" type="checkbox" name="toppings" value="s" class="checkboxGroesse">
                          <span class="checkmark"></span>
                      </label><br>
                      <label for="m" class="testingIT">M
                          <input id="m" type="checkbox" name="toppings" value="m" class="checkboxGroesse">
                          <span class="checkmark"></span>
                      </label><br>
                      <label for="L" class="testingIT">L
                          <input id="L" type="checkbox" name="toppings" value="L" class="checkboxGroesse">
                          <span class="checkmark"></span>
                      </label><br>
                      <label for="XL" class="testingIT">XL
                          <input id="XL" type="checkbox" name="toppings" value="XL" class="checkboxGroesse">
                          <span class="checkmark"></span>
                      </label><br>
                      <label for="XXL" class="testingIT">XXL
                          <input id="XXL" type="checkbox" name="toppings" value="XXL" class="checkboxGroesse">
                          <span class="checkmark"></span>
                      </label><br>
                    <input id="m" type="checkbox" name="toppings" value="m" class="checkboxGroesse">
                    <label for="m">M</label><br>
                    <input id="L" type="checkbox" name="toppings" value="L" class="checkboxGroesse">
                    <label for="L">L</label><br>
                    <input id="XL" type="checkbox" name="toppings" value="XL" class="checkboxGroesse">
                    <label for="XL">XL</label><br>
                    <input id="XXL" type="checkbox" name="toppings" value="XXL" class="checkboxGroesse">
                    <label for="XXL">XXL</label>
                </fieldset>-->

                <fieldset class="is-centered">
                    <div>
                        <span id="p5" hidden>Vorname Pflichtfeld</span>
                        <label for="first_name2" class="DataField">Vorname<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="text" autocomplete="on" id="first_name2" name="first_name" aria-labelledby="p5" required="required">
                        </label>
                    </div>
                    <div>
                        <label class="DataField">
                            Vorname * <input type="text" role="combobox" aria-required="true" required>
                        </label>
                    </div>
                    <div>
                        <span id="p4" hidden>Nachname Pflichtfeld</span>
                        <label for="last_name2" class="DataField">Nachname<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="text" autocomplete="on" id="last_name2" name="last_name" aria-labelledby="p4" required="required">
                        </label>
                    </div>
                    <div>
                        <span id="p3" hidden>Emailadresse Pflichfeld</span>
                        <label for="email2" class="DataField">E-Mail<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="email" autocomplete="on" id="email2" name="email" required="required" aria-labelledby="p3">
                        </label>
                    </div>
                    <div>
                        <span id="p2" hidden>Telefonnummer ohne Leerzeichen</span>
                        <label for="telephone2" class="DataField">Telefon:
                            <input type="tel" pattern="[0-9]{10,13}" autocomplete="on" id="telephone2" name="telephone" aria-labelledby="p2">
                        </label>
                    </div>
                    <div>
                        <span id="p1" hidden>Ihre Wünsche</span>
                        <label for="desires2" class="DataField">Ihre Wünsche:</label>
                        <textarea type="text" id="desires2" name="desires" aria-labelledby="p1"></textarea>
                    </div>
                </fieldset>
                <button type="submit" name="Produktanfrage senden" role="button" aria-label="Produktanfrage senden">Senden</button>
            </form>
            <section id="tableButton">
                <button type="button" name="tabelle" role="button" id="buttonGroesse" onclick="setTable()" aria-label="Größentabelle für Bikinis anzeigen">Größentabelle</button>
            </section>
        </section>



        <section id="bikini" class="requestForm has-text-centered">
            <h2 id="requestForm">Anfrageformular</h2>
            <form action="sendPHPmail.php" id="checkbox" method="post" aria-label="Anfrageformular" autocomplete="on">
                <strong class="FormHeading">Bademantel Poppy</strong><br><br>
                <div hidden>
                    <label for="product">Produkt:</label>
                    <input type="text" id="product" name="product" value="Bademantel Poppy">
                </div>
              <!--  <div>
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
                </div> -->

                <label for="farbe3">Wähle eine Farbe:</label>
                <select id="farbe3" name="farbe">
                    <option value="Purpur">Purpur</option>
                    <option value="Timber">Timber</option>
                    <option value="Cranberry">Cranberry</option>
                    <option value="Flanell">Flanell</option>
                    <option value="Winternight">Winternight</option>
                    <option value="Anthrazit">Anthrazit</option>
                    <option value="Graphit">Graphit</option>
                    <option value="Cosmos">Cosmos</option>
                    <option value="Violet">Violet</option>
                    <option value="Lagoon">Lagoon</option>
                    <option value="ValleyGreen">Valley Green</option>
                    <option value="Curacao">Curacao</option>
                </select>

                <br>

                <label for="groesse3" aria-describedby="GroesseHelp">Wähle eine Größe:</label>
                <select id="groesse3" name="groesse[]" aria-describedby="GroesseHelp" multiple required>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>

                <fieldset>
                    <legend>Wähle dein Land</legend>
                    <div class="row">
                        <input type="radio" id="de3" name="land[]" value="de" checked/>
                        <label for="de3" class="checkboxGroesse">Deutschland</label><br>

                        <input type="radio" id="at3" name="land[]" value="at" />
                        <label for="at3" class="checkboxGroesse">Österreich</label><br>

                        <input type="radio" id="ch3" name="land[]" value="ch" />
                        <label for="ch3" class="checkboxGroesse">Schweiz</label><br>

                        <input type="radio" id="ot3" name="land[]" value="ot" />
                        <label for="ot3" class="checkboxGroesse">Anderes Land</label>
                    </div>
                </fieldset>

                <fieldset class="is-centered">
                    <div>
                        <span id="p5" hidden>Vorname Pflichtfeld</span>
                        <label for="first_name3" class="DataField">Vorname<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="text" autocomplete="on" id="first_name3" name="first_name" aria-labelledby="p5" required="required">
                        </label>
                    </div>
                    <div>
                        <label class="DataField">
                            Vorname * <input type="text" role="combobox" aria-required="true" required>
                        </label>
                    </div>
                    <div>
                        <span id="p4" hidden>Nachname Pflichtfeld</span>
                        <label for="last_name3" class="DataField">Nachname<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="text" autocomplete="on" id="last_name3" name="last_name" aria-labelledby="p4" required="required">
                        </label>
                    </div>
                    <div>
                        <span id="p3" hidden>Emailadresse Pflichfeld</span>
                        <label for="email3" class="DataField">E-Mail<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="email" autocomplete="on" id="email3" name="email" required="required" aria-labelledby="p3">
                        </label>
                    </div>
                    <div>
                        <span id="p2" hidden>Telefonnummer ohne Leerzeichen</span>
                        <label for="telephone3" class="DataField">Telefon:
                            <input type="tel" pattern="[0-9]{10,13}" autocomplete="on" id="telephone3" name="telephone" aria-labelledby="p2">
                        </label>
                    </div>
                    <div>
                        <span id="p1" hidden>Ihre Wünsche</span>
                        <label for="desires3" class="DataField">Ihre Wünsche:</label>
                        <textarea type="text" id="desires3" name="desires" aria-labelledby="p1"></textarea>
                    </div>
                </fieldset>
                <button type="submit" name="Produktanfrage senden" role="button" aria-label="Produktanfrage senden">Senden</button>
            </form>
            <section id="tableButton">
           <button type="button" name="tabelle" role="button" id="buttonGroesse" onclick="setTable()" aria-label="Größentabelle für Bikinis anzeigen">Größentabelle</button>
            </section>
        </section>

        <div id="GroesseHelp" hidden>Sie können mehrere Größen auswählen.</div>
      <!--  <div id="checkboxHelpHide" hidden>Sie können einmal oder mehrmals dasselbe Produkt bestellen.</div>-->


       <!-- <div id="groesseTabelle">
            <div id="tabelleSummary" hidden>Diese Tabelle beschreibt alle Bikinigrößen.</div>
            <table summary="In dieser Tabelle werden alle Bikinigößen beschrieben.">
                <caption aria-describedby="tabelleSummary">Größentabelle</caption>
                <tr>
                    <th scope="col">Größe</th>
                    <th scope="col">XS</th>
                    <th scope="col">S</th>
                    <th scope="col">M</th>
                    <th scope="col">L</th>
                    <th scope="col">XL</th>
                    <th scope="col">XXL</th>
                    <th scope="col">3XL</th>
                    <th scope="col">4XL</th>
                    <th scope="col">5XL</th>
                </tr>
                <tr>
                    <th scope="row">Konfektionsgröße</th>
                    <td>34/40</td>
                    <td>38/44</td>
                    <td>42/48</td>
                    <td>46/52</td>
                    <td>50/56</td>
                    <td>54/60</td>
                    <td>58/64</td>
                    <td>62/68</td>
                    <td>66/72</td>
                </tr>
                <tr>
                    <th scope="row">Länge</th>
                    <td>110</td>
                    <td>110</td>
                    <td>110</td>
                    <td>110</td>
                    <td>110</td>
                    <td>114</td>
                    <td>114</td>
                    <td>114</td>
                    <td>114</td>
                </tr>
            </table> -->

         <div id="groesseTabelle">
            <div id="tabeleSum" hidden>Diese Tabelle beschreibt alle Bademantelgrößen.</div>
            <table summary="In dieser Tabelle werden alle Bademantelgrößen beschrieben.">
                <caption aria-describedby="tabeleSum">Größentabelle</caption>
                <tr>
                    <th scope="col">Größe</th>
                    <th scope="col">Konfektionsgröße</th>
                    <th scope="col">Länge</th>
                </tr>
                <tr>
                    <th scope="row">XS</th>
                    <td>34 / 40</td>
                    <td>110</td>
                </tr>
                <tr>
                    <th scope="row">S</th>
                    <td>38 / 44</td>
                    <td>110</td>
                </tr>
                <tr>
                    <th scope="row">M</th>
                    <td>42 / 48</td>
                    <td>110</td>
                </tr>
                <tr>
                    <th scope="row">L</th>
                    <td>46 / 52</td>
                    <td>110</td>
                </tr>
                <tr>
                    <th scope="row">XL</th>
                    <td>50 / 56</td>
                    <td>110</td>
                </tr>
                <tr>
                    <th scope="row">XXL</th>
                    <td>54 / 60</td>
                    <td>114</td>
                </tr>
                <tr>
                    <th scope="row">3XL</th>
                    <td>58 / 64</td>
                    <td>114</td>
                </tr>
                <tr>
                    <th scope="row">4XL</th>
                    <td>62 / 68</td>
                    <td>114</td>
                </tr>
                <tr>
                    <th scope="row">5XL</th>
                    <td>66 / 72</td>
                    <td>114</td>
                </tr>
            </table>
        </div>
    </main>
    <?php
    include("Components/Footer.html");
    ?>

</div>

</body>
</html>


<script type="text/javascript">

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
        window.scrollTo(0,document.getElementById(product).offsetTop);

    }

    function setTable() {
        var g = document.getElementById("groesseTabelle");
        if(g.style.display === 'inline'){
            g.style.display = 'none'
        } else {
            g.style.display = 'inline'
        }
    }



</script>

<style>
    .requestForm{
        display: none;
    }

    .checkboxGroesse {
        font-size: 1.5em;
        margin-right: 10%;
        line-height: 2.15em;
        padding: 15px 1px;
    }

    #groesseTabelle{
        display: none;
    }

    .row{
        float: left;
        width: 100%;
    }

    #tableButton{
        height: 5em;
    }

    #farbe{
        margin-bottom: 0.5em;
    }

    #buttonGroesse{
        padding: 0.6em 0em;
        font-size: 1em;
        width: 130px;
        float: right;
        margin-top: 2em;
    }

    #groesse{
        float: right;
        /* line-height: 40px; */
        min-height: 20px;
        /* margin: 40px; */
        padding: 40px;
    }

    fieldset {
        display: block;
        padding-top: 0.35em;
        padding-bottom: 0.625em;
        padding-left: 0.75em;
        padding-right: 0.75em;
        width: 20em;
        border: none;
        margin-top: 1em;
        margin-bottom: 0.8em;
    }

    table{
        margin-top: 2em;
    }

    input[type="checkbox"],input[type="radio"]{
        cursor: pointer;
        -webkit-appearance: none;
        background: lightgrey;
        border-radius: 1px;
        position: relative;
        box-sizing: content-box ;
        width: 30px;
        height: 30px;
        border-width: 0;
        transition: all .3s linear;
    }


    button{
        cursor: pointer;
        -webkit-appearance: none;
        background: lightgrey;
        border-radius: 1px;
        position: relative;
        box-sizing: content-box ;
        width: 85px;
        height: 30px;
        border-width: 0;
        padding: 0.2em;
        font-size: 1.3em;
        margin-top: 0.5em;
        transition: all .3s linear;
    }


    input[type="text"], input[type="email"], input[type="tel"], textarea{
        cursor: pointer;
        -webkit-appearance: none;
        background: lightgrey;
        border-radius: 1px;
        position: relative;
        box-sizing: content-box;
        margin-bottom: 1.25em;
        width: 200px;
        height: 35px;
        border-width: 0;
        transition: all .3s linear;
    }

    textarea{
        height: 100px;
        margin-bottom: 0em;

    }

    caption{
        font-size: 1.5em;
    }

    select{
        cursor: pointer;
        -webkit-appearance: none;
        background: lightgrey;
        border-radius: 1px;
        position: relative;
        box-sizing: content-box ;
        margin-bottom: 0.8em;
        width: 200px;
        height: 35px;
        border-width: 0;
        padding: 0.2em;
        font-size: 1.5em;
        transition: all .3s linear;
    }

    input[type="checkbox"]:checked, input[type="radio"]:checked{
        background-color: #ffcc00;
    }
    input[type="checkbox"]:focus, input[type="radio"]:focus{
        outline: 0 none;
        box-shadow: none;
    }

    .require{
        text-decoration: none !important;
    }

    input[type="checkbox"]:after, input[type="radio"]:after {
        left: 9px;
        top: 5px;
        width: 7px;
        height: 13px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }


    .FormHeading{
        margin-top: 1.7em;
        margin-bottom: 1em;
    }

    #requestForm{
        margin-top: 2.25em;

    }

    @media only screen and (max-width: 600px) {
        .DataField{
            float: left;
        }
    }
   /* .testingIT {
        margin-left: auto;
        /* margin-right: auto; */
        /* width: 960px; */
      /*  position: relative;
        font-size: 1.6em;
        vertical-align: middle;
        text-align: left;
        text-transform: none;
        color: black;
        padding-left: 2em;
        /* padding-top: 0.15em; */
     /*   margin-bottom: 1em;
        height: 1em;
        /* float: left; */
        /* margin-top: 0.2em; */
    /*   line-height: 1.05em;
       -webkit-appearance: none;
   }

  .testingIT input {
       position: absolute;
       opacity: 0;
       cursor: pointer;
       -webkit-appearance: none;
   }

   .checkmark {
       position: absolute;
       /* top: 0; */
    /* left: 0;
     height: 25px;
     width: 25px;
     background-color: gainsboro;
     margin-left: 0.5em;
     -webkit-appearance: none;
 }

    .testingIT:hover input ~ .checkmark {
        background-color: #ccc;
    }

    .testingIT input:checked ~ .checkmark {
        background-color: darkgray;
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .testingIT input:checked ~ .checkmark:after {
        display: block;
    }

    .testingIT .checkmark:after {
        left: 9px;
        top: 5px;
        width: 7px;
        height: 13px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    } */


</style>