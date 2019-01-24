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
    <link rel="stylesheet" type="text/css" href="styles/form.css">
    <script src="js/Request.js"></script>


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
                <img src="images/fashybild3.jpg" alt="" width="100%">
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


        <!-- Beschreibungen für Formularfelder -->

        <span id="p1" hidden>Ihre Wünsche</span>
        <span id="p2" hidden>Telefonnummer ohne Leerzeichen</span>
        <span id="p3" hidden>Emailadresse Pflichfeld</span>
        <span id="p4" hidden>Nachname Pflichtfeld</span>
        <span id="p5" hidden>Vorname Pflichtfeld</span>
        <div id="GroesseHelp" hidden>Sie können mehrere Größen auswählen.</div>
        <div id="landDesc" hidden>Wähle dein Land.</div>



        <section id="bademantel" class="requestForm has-text-centered">
            <form class="columns" action="sendPHPmail.php" method="post" aria-label="Anfrageformular">
                <h2 class="formUE">Anfrageformular</h2>
                <strong class="FormHeading">Bademantel Texas</strong><br><br>
                <div hidden>
                    <label for="productT">Produkt:</label>
                    <input type="text" name="productT" id="productT" value="bademantel Texas">
                </div>

<div class="formSections column has-text-centered">
    <fieldset>
        <legend hidden>Produkt Daten</legend>
                <label for="farbe" class="DataField">Wähle eine Farbe:</label>
                <select id="farbe" name="farbe" class="DataField">
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
    </fieldset>
    <fieldset>
        <legend hidden>Persönliche Daten</legend>
                <label for="groesse"  class="DataField">Wähle eine Größe:</label>
                <select id="groesse" name="groesse[]"  class="DataField" aria-describedby="GroesseHelp" multiple required>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
    </fieldset>
                <fieldset>
                    <legend>Wähle dein Land</legend>
                    <div class="row">
                        <input type="radio" id="de" name="land[]" value="de" aria-describedby="landDesc" checked/>
                        <label for="de" class="checkboxGroesse">Deutschland</label><br>

                        <input type="radio" id="at" name="land[]" value="at" aria-describedby="landDesc" />
                        <label for="at" class="checkboxGroesse">Österreich</label><br>

                        <input type="radio" id="ch" name="land[]" value="ch" aria-describedby="landDesc" />
                        <label for="ch" class="checkboxGroesse">Schweiz</label><br>

                        <input type="radio" id="ot" name="land[]" value="ot" aria-describedby="landDesc" />
                        <label for="ot" class="checkboxGroesse">Anderes Land</label>
                    </div>
                </fieldset>
</div>

                <fieldset class="formSections column is-centered ">
                    <legend hidden>Persönliche Daten</legend>

                    <div>
                        <label for="first_name" class="DataField">Vorname *
                            <input type="text" autocomplete="on" id="first_name" name="first_name" aria-labelledby="p5" required="required">
                        </label>
                    </div>
                    <div>
                        <label for="last_name" class="DataField">Nachname *
                            <input type="text" autocomplete="on" id="last_name" name="last_name" aria-labelledby="p4" required="required">
                        </label>
                    </div>
                    <div>
                        <label for="email" class="DataField">E-Mail Adresse*
                            <input type="email" autocomplete="on" id="email" name="email" required="required" aria-labelledby="p3">
                        </label>
                    </div>
                    <div>
                        <label for="telephone" class="DataField">Telefonnummer:
                            <input type="tel" pattern="[0-9]{10,13}" autocomplete="on" id="telephone" name="telephone" aria-labelledby="p2">
                        </label>
                    </div>
                    <div>
                        <label for="desires" class="DataField">Ihre Wünsche:
                            <textarea id="desires" name="desires" aria-labelledby="p1"></textarea>
                        </label>
                    </div>
                </fieldset>
                <button type="submit" name="Produktanfrage senden" role="button" aria-label="Produktanfrage senden">Senden</button>
            </form>
            <div class="tableButton">
                <button type="button" name="tabelle" role="button" class="buttonGroesse" onclick="setTable()" aria-label="Größentabelle für Bikinis anzeigen">Größentabelle</button>
            </div>
        </section>

        <section id="hose" class="requestForm has-text-centered">
            <form class="columns" action="sendPHPmail.php" method="post" aria-label="Anfrageformular">
                <h2 class="formUE">Anfrageformular</h2>
                <strong class="FormHeading">Bademantel Dallas</strong><br><br>
                <div hidden>
                    <label for="productD">Produkt:</label>
                    <input type="text" name="productD" id="productD" value="Bademantel Dallas">
                </div>
                <div class="formSections column has-text-centered">

                <fieldset >
                    <legend hidden>Produkt Daten</legend>
                <label for="farbe2" class="DataField">Wähle eine Farbe:</label>
                <select id="farbe2" name="farbe" class="DataField">
                    <option value="Flanell">Flanell</option>
                    <option value="Shell">Shell</option>
                    <option value="Rubin">Rubin</option>
                    <option value="Winternight">Winternight</option>
                    <option value="Turquoise">Turquoise</option>
                    <option value="Weiss">Weiß</option>
                </select>
                </fieldset>
                <fieldset class="is-centered">
                    <legend hidden>Persönliche Daten</legend>
                <label for="groesse2" aria-describedby="GroesseHelp" class="DataField">Wähle eine Größe:</label>
                <select id="groesse2" name="groesse[]" aria-describedby="GroesseHelp" class="DataField" multiple required>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
                </fieldset>

                <fieldset>
                    <legend>Wähle dein Land</legend>
                    <div class="row">
                        <input type="radio" id="de2" name="land[]" value="de" aria-describedby="landDesc" checked/>
                        <label for="de2" class="checkboxGroesse">Deutschland</label><br>

                        <input type="radio" id="at2" name="land[]" value="at" aria-describedby="landDesc" />
                        <label for="at2" class="checkboxGroesse">Österreich</label><br>

                        <input type="radio" id="ch2" name="land[]" value="ch" aria-describedby="landDesc" />
                        <label for="ch2" class="checkboxGroesse">Schweiz</label><br>

                        <input type="radio" id="ot2" name="land[]" value="ot" aria-describedby="landDesc" />
                        <label for="ot2" class="checkboxGroesse">Anderes Land</label>
                    </div>
                </fieldset>
                </div>
                <fieldset class="formSections column is-centered ">
                    <legend hidden>Persönliche Daten</legend>

                    <div>
                        <label for="first_name2" class="DataField">Vorname<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="text" autocomplete="on" id="first_name2" name="first_name" aria-labelledby="p5" required="required">
                        </label>
                    </div>
                    <div>
                        <label for="last_name2" class="DataField">Nachname<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="text" autocomplete="on" id="last_name2" name="last_name" aria-labelledby="p4" required="required">
                        </label>
                    </div>
                    <div>
                        <label for="email2" class="DataField">E-Mail<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="email" autocomplete="on" id="email2" name="email" required="required" aria-labelledby="p3">
                        </label>
                    </div>
                    <div>
                        <label for="telephone2" class="DataField">Telefon:
                            <input type="tel" pattern="[0-9]{10,13}" autocomplete="on" id="telephone2" name="telephone" aria-labelledby="p2">
                        </label>
                    </div>
                    <div>
                        <label for="desires2" class="DataField">Ihre Wünsche:
                            <textarea id="desires2" name="desires" aria-labelledby="p1"></textarea>
                        </label>
                    </div>
                </fieldset>
                <button type="submit" name="Produktanfrage senden" role="button" aria-label="Produktanfrage senden">Senden</button>
            </form>
            <div class="tableButton">
                <button type="button" name="tabelle" role="button" class="buttonGroesse" onclick="setTable()" aria-label="Größentabelle für Bikinis anzeigen">Größentabelle</button>
            </div>
        </section>



        <section id="bikini" class="requestForm has-text-centered">
            <form class="columns" action="sendPHPmail.php" method="post" aria-label="Anfrageformular">
                <h2 class="formUE">Anfrageformular</h2>
                <strong class="FormHeading">Bademantel Poppy</strong><br><br>
                <div hidden>
                    <label for="productP">Produkt:</label>
                    <input type="text" name="productP" id="productP" value="Bademantel Poppy">
                </div>
                <div class="formSections column has-text-centered">

                <fieldset>
                    <legend hidden>Produkt Daten</legend>
                <label for="farbe3"  class="DataField">Wähle eine Farbe:</label>
                <select id="farbe3" name="farbe"  class="DataField">
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
                </fieldset>

                <fieldset class="is-centered">
                    <legend hidden>Persönliche Daten</legend>
                <label for="groesse3" aria-describedby="GroesseHelp"  class="DataField">Wähle eine Größe:</label>
                <select id="groesse3" name="groesse[]"  class="DataField" aria-describedby="GroesseHelp" multiple required>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
                </fieldset>
                <fieldset>
                    <legend>Wähle dein Land</legend>
                    <div class="row">
                        <input type="radio" id="de3" name="land[]" value="de" aria-describedby="landDesc" checked/>
                        <label for="de3" class="checkboxGroesse">Deutschland</label><br>

                        <input type="radio" id="at3" name="land[]" value="at" aria-describedby="landDesc" />
                        <label for="at3" class="checkboxGroesse">Österreich</label><br>

                        <input type="radio" id="ch3" name="land[]" value="ch" aria-describedby="landDesc" />
                        <label for="ch3" class="checkboxGroesse">Schweiz</label><br>

                        <input type="radio" id="ot3" name="land[]" value="ot" aria-describedby="landDesc" />
                        <label for="ot3" class="checkboxGroesse">Anderes Land</label>
                    </div>
                </fieldset>
                </div>
                <fieldset class="formSections column is-centered ">
                    <legend hidden>Persönliche Daten</legend>
                    <div>
                        <label for="first_name3" class="DataField">Vorname<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="text" autocomplete="on" id="first_name3" name="first_name" aria-labelledby="p5" required="required">
                        </label>
                    </div>
                    <div>
                        <label for="last_name3" class="DataField">Nachname<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="text" autocomplete="on" id="last_name3" name="last_name" aria-labelledby="p4" required="required">
                        </label>
                    </div>
                    <div>
                        <label for="email3" class="DataField">E-Mail<abbr class="require" title="Pflichtfeld">*</abbr>
                            <input type="email" autocomplete="on" id="email3" name="email" required="required" aria-labelledby="p3">
                        </label>
                    </div>
                    <div>
                        <label for="telephone3" class="DataField">Telefon:
                            <input type="tel" pattern="[0-9]{10,13}" autocomplete="on" id="telephone3" name="telephone" aria-labelledby="p2">
                        </label>
                    </div>
                    <div>
                        <label for="desires3" class="DataField">Ihre Wünsche:
                            <textarea id="desires3" name="desires" aria-labelledby="p1"></textarea>
                        </label>
                    </div>
                </fieldset>
                <button type="submit" name="Produktanfrage senden" role="button" aria-label="Produktanfrage senden">Senden</button>
            </form>
            <div class="tableButton">
           <button type="button" name="tabelle" role="button" class="buttonGroesse" onclick="setTable()" aria-label="Größentabelle für Bikinis anzeigen">Größentabelle</button>
            </div>
        </section>

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
</div>


</body>
</html>

