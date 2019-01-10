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
    <main id="main" role="main" tabindex="-1" class="has-text-centered">
        <div class="columns" id="produkte">
            <div role="region" class="column is-one-third" onclick="setForm('bademantel', 'eins')" id="eins">
                <img src="images/Texas3.jpg" alt="" class="produktPic">
                <p onclick="setForm('bademantel', 'eins')"><strong>Vossen Texas</strong><br>
                    Der absolut trendige Kapuzenbademantel Texas ist in acht sehr
                    modernen, frischen Farben erhältlich. Aufgrund seiner hochwertigen Veloursoberfläche zeichnet sich
                    der Mantel durch eine besondere
                    Leichtigkeit und einen angenehm zarten Griff aus. Die etwas kürzere Länge von 110cm macht dieses
                    Model zu einem absoluten Blickfang. <br>
                    <strong>100% Baumwolle</strong></p>
            </div>
            <div role="region" class="column" onclick="setForm('bikini', 'zwei')" id="zwei">
                <img src="images/poppy1.jpg" alt="" class="produktPic">
                <p onclick="setForm('bikini', 'zwei')"><strong>Vossen Poppy</strong><br>
                    Der Doubleface-Kapuzenbademantel liegt mit seiner Farbstellung voll im Trend. Die farblich dunklere
                    Außenseite aus Mikrofaser setzt sich optisch von der etwas helleren Innenseite aus hochwertigem
                    Wirkfrottier ab. Dadurch wird dieser einzigartige Mantel zu einem absoluten Blickfang. Neben den
                    modernen Farben zeichnet sich Poppy durch einen wunderbar flauschigen Griff, einen sehr hohen
                    Tragekomfort und höchste Saugfähigkeit aus.<br>
                    <strong>20% Baumwolle, 35% Bambus, 45% Polyester</strong></p>
            </div>
            <div role="region" class="column" onclick="setForm('hose', 'drei')" id="drei">
                <img src="images/texas2.jpg" alt="" class="produktPic">
                <p onclick="setForm('hose', 'drei')"><strong>Vossen Texas</strong><br>
                    Der absolut trendige Kapuzenbademantel Texas ist in acht sehr
                    modernen, frischen Farben erhältlich. Aufgrund seiner hochwertigen Veloursoberfläche zeichnet sich
                    der Mantel durch eine besondere
                    Leichtigkeit und einen angenehm zarten Griff aus. Die etwas kürzere Länge von 110cm macht dieses
                    Model zu einem absoluten Blickfang. <br>
                    <strong>100% Baumwolle</strong></p>
            </div>
        </div>

        <div id="bademantel" class="requestForm has-text-centered">
            <form action="sendPHPmail.php" id="checkbox" method="post" aria-label="Anfrageformular" autocomplete="on">
                <div hidden>
                    <label for="product">Produkt:</label>
                    <input type="text" id="product" name="product" value="bademantel">
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

                <label for="farbe">Wähle eine Farbe:</label>
                <select id="farbe" name="farbe">
                    <option value="Atlantic">Atlantic</option>
                    <option value="Purpur">Purpur</option>
                    <option value="Lagoon">Lagoon</option>
                </select>

                <br>

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

                <fieldset>
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

                <div class="is-centered">
                    <div>
                        <span id="p5" hidden>Vorname Pflichtfeld</span>
                        <label for="first_name">Vorname *
                            <input type="text" autocomplete="on" id="first_name" name="first_name" aria-labelledby="p5" required="required">
                        </label>
                    </div>
                    <div>
                        <label>
                            Vorname * <input type="text" role="combobox" aria-required="true" required>
                        </label>
                    </div>
                    <div>
                        <span id="p4" hidden>Nachname Pflichtfeld</span>
                        <label for="last_name">Nachname *
                            <input type="text" autocomplete="on" id="last_name" name="last_name" aria-labelledby="p4" required="required">
                        </label>
                    </div>
                    <div>
                        <span id="p3" hidden>Emailadresse Pflichfeld</span>
                        <label for="email">E-Mail *
                            <input type="email" autocomplete="on" id="email" name="email" required="required" aria-labelledby="p3">
                        </label>
                    </div>
                    <div>
                        <span id="p2" hidden>Telefonnummer ohne Leerzeichen</span>
                        <label for="telephone">Telefon:
                            <input type="tel" pattern="[0-9]{12}" autocomplete="on" id="telephone" name="telephone" aria-labelledby="p2">
                        </label>
                    </div>
                    <div>
                        <span id="p1" hidden>Ihre Wünsche</span>
                        <label for="desires">Ihre Wünsche:</label>
                        <textarea type="text" id="desires" name="desires" aria-labelledby="p1"></textarea>
                    </div>
                </div>
                <button type="submit" name="Produktanfrage senden" role="button" aria-label="Produktanfrage senden">Senden</button>
            </form>
            <section id="tableButton">
                <button type="button" name="tabelle" role="button" id="buttonGroesse" onclick="setTable()" aria-label="Größentabelle für Bikinis anzeigen">Größentabelle</button>
            </section>
        </div>




        <div id="hose" class="requestForm has-text-centered">
            <form action="sendPHPmail.php" id="checkbox" method="post" aria-label="Anfrageformular" autocomplete="on">
                <div hidden>
                    <label for="product">Produkt:</label>
                    <input type="text" id="product" name="product" value="hose">
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
                    <option value="Atlantic">Atlantic</option>
                    <option value="Purpur">Purpur</option>
                    <option value="Lagoon">Lagoon</option>
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

                <div class="is-centered">
                    <div>
                        <span id="p5" hidden>Vorname Pflichtfeld</span>
                        <label for="first_name2">Vorname<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="text" autocomplete="on" id="first_name2" name="first_name" aria-labelledby="p5" required="required">
                        </label>
                    </div>
                    <div>
                        <label>
                            Vorname * <input type="text" role="combobox" aria-required="true" required>
                        </label>
                    </div>
                    <div>
                        <span id="p4" hidden>Nachname Pflichtfeld</span>
                        <label for="last_name2">Nachname<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="text" autocomplete="on" id="last_name2" name="last_name" aria-labelledby="p4" required="required">
                        </label>
                    </div>
                    <div>
                        <span id="p3" hidden>Emailadresse Pflichfeld</span>
                        <label for="email2">E-Mail<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="email" autocomplete="on" id="email2" name="email" required="required" aria-labelledby="p3">
                        </label>
                    </div>
                    <div>
                        <span id="p2" hidden>Telefonnummer ohne Leerzeichen</span>
                        <label for="telephone2">Telefon:
                            <input type="tel" pattern="[0-9]{12}" autocomplete="on" id="telephone2" name="telephone" aria-labelledby="p2">
                        </label>
                    </div>
                    <div>
                        <span id="p1" hidden>Ihre Wünsche</span>
                        <label for="desires2">Ihre Wünsche:</label>
                        <textarea type="text" id="desires2" name="desires" aria-labelledby="p1"></textarea>
                    </div>
                </div>
                <button type="submit" name="Produktanfrage senden" role="button" aria-label="Produktanfrage senden">Senden</button>
            </form>
            <section id="tableButton">
                <button type="button" name="tabelle" role="button" id="buttonGroesse" onclick="setTable()" aria-label="Größentabelle für Bikinis anzeigen">Größentabelle</button>
            </section>
        </div>



        <div id="bikini" class="requestForm has-text-centered">
            <form action="sendPHPmail.php" id="checkbox" method="post" aria-label="Anfrageformular" autocomplete="on">
                <div hidden>
                    <label for="product">Produkt:</label>
                    <input type="text" id="product" name="product" value="bikini">
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
                    <option value="Atlantic">Atlantic</option>
                    <option value="Purpur">Purpur</option>
                    <option value="Lagoon">Lagoon</option>
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

                <div class="is-centered">
                    <div>
                        <span id="p5" hidden>Vorname Pflichtfeld</span>
                        <label for="first_name3">Vorname<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="text" autocomplete="on" id="first_name3" name="first_name" aria-labelledby="p5" required="required">
                        </label>
                    </div>
                    <div>
                        <label>
                            Vorname * <input type="text" role="combobox" aria-required="true" required>
                        </label>
                    </div>
                    <div>
                        <span id="p4" hidden>Nachname Pflichtfeld</span>
                        <label for="last_name3">Nachname<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="text" autocomplete="on" id="last_name3" name="last_name" aria-labelledby="p4" required="required">
                        </label>
                    </div>
                    <div>
                        <span id="p3" hidden>Emailadresse Pflichfeld</span>
                        <label for="email3">E-Mail<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="email" autocomplete="on" id="email3" name="email" required="required" aria-labelledby="p3">
                        </label>
                    </div>
                    <div>
                        <span id="p2" hidden>Telefonnummer ohne Leerzeichen</span>
                        <label for="telephone3">Telefon:
                            <input type="tel" pattern="[0-9]{12}" autocomplete="on" id="telephone3" name="telephone" aria-labelledby="p2">
                        </label>
                    </div>
                    <div>
                        <span id="p1" hidden>Ihre Wünsche</span>
                        <label for="desires3">Ihre Wünsche:</label>
                        <textarea type="text" id="desires3" name="desires" aria-labelledby="p1"></textarea>
                    </div>
                </div>
                <button type="submit" name="Produktanfrage senden" role="button" aria-label="Produktanfrage senden">Senden</button>
            </form>
            <section id="tableButton">
           <button type="button" name="tabelle" role="button" id="buttonGroesse" onclick="setTable()" aria-label="Größentabelle für Bikinis anzeigen">Größentabelle</button>
            </section>
        </div>

        <div id="GroesseHelp" hidden>Sie können mehrere Größen auswählen.</div>
        <div id="checkboxHelpHide" hidden>Sie können einmal oder mehrmals dasselbe Produkt bestellen.</div>


        <div id="groesseTabelle">
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
                </tr>
                <tr>
                    <th scope="row">Konfektionsgröße</th>
                    <td>34</td>
                    <td>36</td>
                    <td>40</td>
                    <td>44</td>
                    <td>48</td>
                    <td>52</td>
                </tr>
                <tr>
                    <th scope="row">Brustumfang</th>
                    <td>86</td>
                    <td>90</td>
                    <td>99</td>
                    <td>109</td>
                    <td>119</td>
                    <td>129</td>
                </tr>
                <tr>
                    <th scope="row">Hüftumfang</th>
                    <td>96</td>
                    <td>98</td>
                    <td>107</td>
                    <td>117</td>
                    <td>127</td>
                    <td>137</td>
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