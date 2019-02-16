<!DOCTYPE html>
<html lang="de">
<head>
    <title>Thermeninsel - Bademoden Bestellen</title>
    <meta charset="utf-8">
    <meta name="description" content="Thermenshop Bad Füssing Kontakt">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bulma einbindung -->
    <?php
    include("BulmaEinbindung.html");
    ?>

    <!-- Andere Stylesheets-->
    <link rel="stylesheet" type="text/css" href="styles/requeststyleNew.css">
    <link rel="stylesheet" type="text/css" href="styles/formNew.css">

    <script src="js/Request.js"></script>


</head>
<body>

<div class="content">

    <!-- Header -->

    <?php
    include("Header.html");
    ?>
    <!-- Menu -->

    <div id="anfrageAussen">
        <div class="columns is-centered" id="anfrage">
            <div class="is-centered">
                <img src="images/fashybild3.jpg" alt="" width="100%">
            </div>
            <section id="welcome" class="has-text-centered">
                <h1 class="ueberschrift" id="h1">Anfrage senden</h1>
                <p>Hier können Sie Bademäntel bestellen. Einfach Größe und Farbe auswählen und eine Anfrage
                    abschicken. Wir nehmen dann gerne mit Ihnen
                    Kontakt auf und geben Bescheid, wann der Artikel ankommt! <br>
                    Weitere tolle Angebote wie beispielsweise Badeanzüge, Bikinis, Badehosen, Badeaccessoires und viele weitere
                    Artikel für einen perfekten Badetag finden Sie zusätzlich auch bei unserem Partner <a href="http://www.fashy.de/bademoden/">Fashy</a>.</p>
            </section>
        </div>
    </div>

    <!-- Contact -->
    <div class="box">
        <main id="main" role="main" tabindex="-1" >
            <div class="columns" id="produkte">
                <div class="column is-one-third" onclick="setForm('bademantel', 'texas')" id="texas">
                    <img src="images/Texas.jpg" alt="" class="produktPic">
                    <p onclick="setForm('bademantel', 'texas')"><strong>Vossen Texas</strong><br>
                        Der absolut trendige Kapuzenbademantel Texas ist in acht sehr
                        modernen, frischen Farben erhältlich. Aufgrund seiner hochwertigen Veloursoberfläche zeichnet sich
                        der Mantel durch eine besondere
                        Leichtigkeit und einen angenehm zarten Griff aus. Die etwas kürzere Länge von 110cm macht dieses
                        Model zu einem absoluten Blickfang. <br>
                        <strong>100% Baumwolle</strong> <br>
                        <strong>UVP 59,95 €</strong></p>
                </div>
                <div class="column" onclick="setForm('bikini', 'poppy')" id="poppy">
                    <img src="images/Poppy.jpg" alt="" class="produktPic">
                    <p onclick="setForm('bikini', 'poppy')"><strong>Vossen Poppy</strong><br>
                        Der Doubleface-Kapuzenbademantel liegt mit seiner Farbstellung voll im Trend. Die farblich dunklere
                        Außenseite aus Mikrofaser setzt sich optisch von der etwas helleren Innenseite aus hochwertigem
                        Wirkfrottier ab. Dadurch wird dieser einzigartige Mantel zu einem absoluten Blickfang. Neben den
                        modernen Farben zeichnet sich Poppy durch einen wunderbar flauschigen Griff, einen sehr hohen
                        Tragekomfort und höchste Saugfähigkeit aus.<br>
                        <strong>20% Baumwolle, 35% Bambus, 45% Polyester</strong><br>
                        <strong>UVP 69,95 €</strong></p>
                </div>
                <div class="column" onclick="setForm('hose', 'dallas')" id="dallas">
                    <img src="images/Dallas.jpg" alt="" class="produktPic">
                    <p onclick="setForm('hose', 'dallas')"><strong>Vossen Dallas</strong><br>
                        Comfort Line / Unisex / Dallas, der moderne Velours-Unisexmantel aus
                        100% Baumwolle besticht durch beste Qualität und höchsten Tragekomfort.
                        Der exklusive Schnitt und die etwas kürzere Länge machen diesen Mantel
                        zu einem absoluten Blickfang. Diese Kollektion ist in sehr modernen Farben erhältlich. <br>
                        <strong>100% Baumwolle</strong><br>
                        <strong>UVP 59,95 €</strong></p>
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
                <form  action="sendPHPmail.php" method="post" aria-label="Anfrageformular">
                    <h2 class="formUE">Anfrageformular</h2>
                    <strong class="FormHeading">Bademantel Texas</strong><br><br>
                    <div hidden>
                        <label for="productT">Produkt:</label>
                        <input type="text" name="productT" id="productT" value="bademantel Texas">
                    </div>
                    <fieldset>

                        <legend hidden>Produkt Daten</legend>
                        <div class="field is-horizontal dataFieldsSize">
                            <div class="field-label">
                                <label for="farbe" class="label">Farbe</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-narrow">
                                    <div class="control">
                                        <div class="select is-fullwidth">
                                            <select id="farbe" name="farbe">
                                                <option value="Atlantik">Atlantik</option>
                                                <option value="Purpur">Purpur</option>
                                                <option value="Lagoon">Lagoon</option>
                                                <option value="Cranberry">Cranberry</option>
                                                <option value="Flanell">Flanell</option>
                                                <option value="Schwarz">Schwarz</option>
                                                <option value="Winternight">Winternight</option>
                                                <option value="Turquoise">Turquoise</option>
                                                <option value="Weiss">Weiß</option>
                                                <option value="MeadowGreen">Meadow Green</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="field is-horizontal dataFieldsSize">
                            <div class="field-label is-normal">
                                <label for="groesse" class="label">Größe</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-narrow">
                                    <div class="control">
                                        <div class="select is-fullwidth">
                                            <select id="groesse" name="groesse[]" aria-describedby="GroesseHelp" required>
                                                <option value="XS">XS</option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                                <option value="XXXL">XXXL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal dataFieldsSize">
                            <div class="field-label">
                                <div class="label">Land</div>
                            </div>
                            <div class="field-body">
                                <div class="field is-narrow">
                                    <div class="control">
                                        <label class="radio checkboxGroesse" for="de">
                                            <input type="radio" id="de" name="land[]" value="de" aria-describedby="landDesc" checked/>
                                            Deutschland
                                        </label>
                                        <label class="radio checkboxGroesse" for="at">
                                            <input type="radio" id="at" name="land[]" value="at" aria-describedby="landDesc" />
                                            Österreich
                                        </label>
                                        <label class="radio checkboxGroesse" for="ch">
                                            <input type="radio" id="ch" name="land[]" value="ch" aria-describedby="landDesc" />
                                            Schweiz
                                        </label>
                                        <label class="radio checkboxGroesse" for="ot">
                                            <input type="radio" id="ot" name="land[]" value="ot" aria-describedby="landDesc" />
                                            Andere
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="personData">
                        <legend hidden>Persönliche Daten</legend>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <div class="label">Name*</div>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <label class="label nameHide" for="first_name" >Vorname*</label>
                                        <input class="input" placeholder="Vorname" type="text" autocomplete="on" id="first_name" name="first_name" aria-labelledby="p5" required="required">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <label class="label nameHide" for="last_name" hidden>Nachname*</label>
                                        <input placeholder="Nachname" class="input" type="text" autocomplete="on" id="last_name" name="last_name" aria-labelledby="p4" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="email">Email*</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" placeholder="Email" type="email" autocomplete="on" id="email" name="email" aria-labelledby="p3" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="telephone">Telefonnummer</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" pattern="[0-9]{5,15}" placeholder="Telefonnummer" type="tel" autocomplete="on" id="telephone" name="telephone" aria-labelledby="p2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="desires">Anmerkungen</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <textarea id="desires" name="desires" class="textarea" placeholder="Kommentar" aria-labelledby="p1"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="field is-horizontal">
                        <div class="field-label">
                            <!-- Left empty for spacing -->
                        </div>
                        <div class="field-body">
                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link" type="submit" name="Produktanfrage senden" role="button" aria-label="Produktanfrage senden">Senden</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="field is-horizontal">
                    <div class="field-label">
                        <!-- Left empty for spacing -->
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <button name="tabelle" role="button" class="button" onclick="setTable('groesseTabelle')" aria-label="Größentabelle für Bademäntel anzeigen">Größentabelle</button>
                                <button name="tabelleC" role="button" class="button" onclick="setTable('farbTabelle')" aria-label="Farbtabelle anzeigen">Farbtabelle</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="hose" class="requestForm has-text-centered">
                <form  action="sendPHPmail.php" method="post" aria-label="Anfrageformular">
                    <h2 class="formUE">Anfrageformular</h2>
                    <strong class="FormHeading">Bademantel Dallas</strong><br><br>
                    <div hidden>
                        <label for="productD">Produkt:</label>
                        <input type="text" name="productD" id="productD" value="bademantel Dallas">
                    </div>
                    <fieldset>

                        <legend hidden>Produkt Daten</legend>
                        <div class="field is-horizontal dataFieldsSize">
                            <div class="field-label">
                                <label for="farbe1" class="label">Farbe</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-narrow">
                                    <div class="control">
                                    <div class="select is-fullwidth">
                                        <select id="farbe1" name="farbe">
                                            <option value="Turquoise">Turquoise</option>
                                            <option value="Weiss">Weiß</option>
                                            <option value="Shell">Shell</option>
                                            <option value="Flanell">Flanell</option>
                                            <option value="Purpur">Purpur</option>
                                            <option value="Winternight">Winternight</option>



                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="field is-horizontal dataFieldsSize">
                            <div class="field-label is-normal">
                                <label for="groesse1" class="label">Größe</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-narrow">
                                    <div class="control">
                                        <div class="select is-fullwidth">
                                            <select id="groesse1" name="groesse[]" aria-describedby="GroesseHelp" required>
                                                <option value="XS">XS</option>
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                                <option value="XXXL">XXXL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal dataFieldsSize">
                            <div class="field-label">
                                <div class="label">Land</div>
                            </div>
                            <div class="field-body">
                                <div class="field is-narrow">
                                    <div class="control">
                                        <label class="radio checkboxGroesse" for="de1">
                                            <input type="radio" id="de1" name="land[]" value="de" aria-describedby="landDesc" checked/>
                                            Deutschland
                                        </label>
                                        <label class="radio checkboxGroesse" for="at1">
                                            <input type="radio" id="at1" name="land[]" value="at" aria-describedby="landDesc" />
                                            Österreich
                                        </label>
                                        <label class="radio checkboxGroesse" for="ch1">
                                            <input type="radio" id="ch1" name="land[]" value="ch" aria-describedby="landDesc" />
                                            Schweiz
                                        </label>
                                        <label class="radio checkboxGroesse" for="ot1">
                                            <input type="radio" id="ot1" name="land[]" value="ot" aria-describedby="landDesc" />
                                            Andere
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="personData">
                        <legend hidden>Persönliche Daten</legend>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <div class="label">Name*</div>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <label class="label nameHide" for="first_name1" >Vorname*</label>
                                        <input class="input" placeholder="Vorname" type="text" autocomplete="on" id="first_name1" name="first_name" aria-labelledby="p5" required="required">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <label class="label nameHide" for="last_name1" hidden>Nachname*</label>
                                        <input placeholder="Nachname" class="input" type="text" autocomplete="on" id="last_name1" name="last_name" aria-labelledby="p4" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="email1">Email*</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" placeholder="Email" type="email" autocomplete="on" id="email1" name="email" aria-labelledby="p3" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="telephone1">Telefonnummer</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" pattern="[0-9]{5,15}" placeholder="Telefonnummer" type="tel" autocomplete="on" id="telephone1" name="telephone" aria-labelledby="p2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="desires1">Anmerkungen</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <textarea id="desires1" name="desires" class="textarea" placeholder="Kommentar" aria-labelledby="p1"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="field is-horizontal">
                        <div class="field-label">
                            <!-- Left empty for spacing -->
                        </div>
                        <div class="field-body">
                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link" type="submit" name="Produktanfrage senden" role="button" aria-label="Produktanfrage senden">Senden</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="field is-horizontal">
                    <div class="field-label">
                        <!-- Left empty for spacing -->
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <button name="tabelle" role="button" class="button" onclick="setTable('groesseTabelle')" aria-label="Größentabelle für Bademäntel anzeigen">Größentabelle</button>
                                <button name="tabelleC" role="button" class="button" onclick="setTable('farbTabelle')" aria-label="Farbtabelle anzeigen">Farbtabelle</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="bikini" class="requestForm has-text-centered">
                <form  action="sendPHPmail.php" method="post" aria-label="Anfrageformular">
                    <h2 class="formUE">Anfrageformular</h2>
                    <strong class="FormHeading">Bademantel Poppy</strong><br><br>
                    <div hidden>
                        <label for="productP">Produkt:</label>
                        <input type="text" name="productP" id="productP" value="bademantel Poppy">
                    </div>
                    <fieldset>

                        <legend hidden>Produkt Daten</legend>
                        <div class="field is-horizontal dataFieldsSize">
                            <div class="field-label">
                                <label for="farbe2" class="label">Farbe</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-narrow">
                                    <div class="control">
                                        <div class="select is-fullwidth">
                                            <select id="farbe2" name="farbe">
                                                <option value="Purpur">Purpur</option>
                                                <option value="Timber">Timber</option>
                                                <option value="Cranberry">Cranberry</option>
                                                <option value="Flanell">Flanell</option>
                                                <option value="Winternight">Winternight</option>
                                                <option value="Graphit">Graphit</option>
                                                <option value="Cosmos">Cosmos</option>
                                                <option value="Violet">Violet</option>
                                                <option value="Lagoon">Lagoon</option>
                                                <option value="Curacao">Curacao</option>
                                                <option value="ValleyGreen">Valley Green</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="field is-horizontal dataFieldsSize">
                        <div class="field-label is-normal">
                            <label for="groesse2" class="label">Größe</label>
                        </div>
                        <div class="field-body">
                            <div class="field is-narrow">
                                <div class="control">
                                    <div class="select is-fullwidth">
                                        <select id="groesse2" name="groesse[]" aria-describedby="GroesseHelp" required>
                                            <option value="XS">XS</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                            <option value="XXXL">XXXL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal dataFieldsSize">
                        <div class="field-label">
                            <div class="label">Land</div>
                        </div>
                        <div class="field-body">
                            <div class="field is-narrow">
                                <div class="control">
                                    <label class="radio checkboxGroesse" for="de2">
                                        <input type="radio" id="de2" name="land[]" value="de" aria-describedby="landDesc" checked/>
                                        Deutschland
                                    </label>
                                    <label class="radio checkboxGroesse" for="at2">
                                        <input type="radio" id="at2" name="land[]" value="at" aria-describedby="landDesc" />
                                        Österreich
                                    </label>
                                    <label class="radio checkboxGroesse" for="ch2">
                                        <input type="radio" id="ch2" name="land[]" value="ch" aria-describedby="landDesc" />
                                        Schweiz
                                    </label>
                                    <label class="radio checkboxGroesse" for="ot2">
                                        <input type="radio" id="ot2" name="land[]" value="ot" aria-describedby="landDesc" />
                                        Andere
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    </fieldset>
                    <fieldset class="personData">
                        <legend hidden>Persönliche Daten</legend>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <div class="label">Name*</div>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <label class="label nameHide" for="first_name2" >Vorname*</label>
                                        <input class="input" placeholder="Vorname" type="text" autocomplete="on" id="first_name2" name="first_name" aria-labelledby="p5" required="required">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <label class="label nameHide" for="last_name2" hidden>Nachname*</label>
                                        <input placeholder="Nachname" class="input" type="text" autocomplete="on" id="last_name2" name="last_name" aria-labelledby="p4" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="email2">Email*</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" placeholder="Email" type="email" autocomplete="on" id="email2" name="email" aria-labelledby="p3" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="telephone2">Telefonnummer</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" pattern="[0-9]{5,15}" placeholder="Telefonnummer" type="tel" autocomplete="on" id="telephone2" name="telephone" aria-labelledby="p2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="desires2">Anmerkungen</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <textarea id="desires2" name="desires" class="textarea" placeholder="Kommentar" aria-labelledby="p1"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="field is-horizontal">
                        <div class="field-label">
                            <!-- Left empty for spacing -->
                        </div>
                        <div class="field-body">
                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link" type="submit" name="Produktanfrage senden" role="button" aria-label="Produktanfrage senden">Senden</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="field is-horizontal">
                    <div class="field-label">
                        <!-- Left empty for spacing -->
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <button name="tabelle" role="button" class="button" onclick="setTable('groesseTabelle')" aria-label="Größentabelle für Bademäntel anzeigen">Größentabelle</button>
                                <button name="tabelleC" role="button" class="button" onclick="setTable('farbTabelle')" aria-label="Farbtabelle anzeigen">Farbtabelle</button>
                            </div>
                        </div>
                    </div>
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

                <div id="farbTabelle">
                    <div id="tabeleSum1" hidden>Diese Tabelle beschreibt alle Farben.</div>
                    <table summary="In dieser Tabelle werden alle Farben beschrieben.">
                        <caption aria-describedby="tabeleSum1">Farbtabelle</caption>
                        <tr>
                            <th scope="col" colspan="2">Farbe</th>
                        </tr>

                        <tr>
                            <th scope="row">Weiß</th>
                            <td><img src="images/weiss.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Shell</th>
                            <td><img src="images/Shell.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Graphit</th>
                            <td><img src="images/Graphit.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Cosmos</th>
                            <td><img src="images/Cosmos.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Violet</th>
                            <td><img src="images/Violet.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Curacao</th>
                            <td><img src="images/Curacao.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Valley Green</th>
                            <td><img src="images/ValleyGreen.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Timber</th>
                            <td><img src="images/timber.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Winternight</th>
                            <td><img src="images/winternight.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">MeadowGreen</th>
                            <td><img src="images/MEadowGreen.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Turquoise</th>
                            <td><img src="images/Turquoise.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Flanell</th>
                            <td><img src="images/flanell.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Schwarz</th>
                            <td><img src="images/schwarz.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Cranberry</th>
                            <td><img src="images/Cranberry.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Lagoon</th>
                            <td><img src="images/Lagoon.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Purpur</th>
                            <td><img src="images/Purpur.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row">Atlantik</th>
                            <td><img src="images/Atlantik.jpg" alt=""></td>
                        </tr>
                    </table>
            </div>
        </main>
        <?php
        include("Footer.html");
        ?>

    </div>
</div>


</body>
</html>



