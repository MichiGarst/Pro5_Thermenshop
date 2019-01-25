<section id="bademantel" class="requestForm">
    <form  action="sendPHPmail.php" method="post" aria-label="Anfrageformular">
        <h2 class="formUE">Anfrageformular</h2>
        <strong class="FormHeading">Bademantel Texas</strong><br><br>
        <div hidden>
            <label for="productT">Produkt:</label>
            <input type="text" name="productT" id="productT" value="bademantel Texas">
        </div>

        <div class="formSections">
            <fieldset class="field">
                <legend hidden>Produkt Daten</legend>
                <label for="farbe" class="label">Wähle eine Farbe:</label>
                <div class="control">
                    <div class="select">
                        <select>
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
                </div>
            </fieldset>
            <fieldset>
                <fieldset class="field">
                    <legend hidden>Produkt Daten</legend>
                    <label for="farbe" class="label">Wähle eine Größe:</label>
                    <div class="control">
                        <div class="select">
                            <select>
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
                </fieldset>

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

                <div class="field">
                    <legend>Wähle dein Land</legend>
                    <div class="control">
                        <label for="de" class="radio">
                            <input type="radio" id="de" name="land[]" value="de" aria-describedby="landDesc" checked/>
                            Deutschland
                        </label>
                        <label for="at" class="radio">
                            <input type="radio" id="at" name="land[]" value="at" aria-describedby="landDesc" checked/>
                            Österreich
                        </label>
                        <label for="ch" class="radio">
                            <input type="radio" id="ch" name="land[]" value="ch" aria-describedby="landDesc" checked/>
                            Schweiz
                        </label>
                        <label for="ot" class="radio">
                            <input type="radio" id="ot" name="land[]" value="ot" aria-describedby="landDesc" checked/>
                            Anderes Land
                        </label>
                    </div>
                </div>
            </fieldset>
        </div>

        <fieldset>
            <legend hidden>Persönliche Daten</legend>
            <div class="field">
                <label for="first_name" class="label">Vorname*</label>
                <div class="control">
                    <input class="input" placeholder="Vorname" type="text" autocomplete="on" id="first_name" name="first_name" aria-labelledby="p5" required="required">
                </div>
            </div>
            <div class="field">
                <label for="last_name" class="label">Nachname*</label>
                <div class="control">
                    <input placeholder="Nachname" class="input" type="text" autocomplete="on" id="last_name" name="last_name" aria-labelledby="p4" required="required">
                </div>
            </div>
            <div class="field">
                <label for="email" class="label">Email*</label>
                <div class="control">
                    <input class="input is-danger" placeholder="Email" type="email" autocomplete="on" id="email" name="email" aria-labelledby="p3" required="required">
                </div>
            </div>
            <div class="field">
                <label for="telephone" class="label">Telefonnummer:</label>
                <div class="control">
                    <input class="input" pattern="[0-9]{5,15}" placeholder="Telefonnmmer" type="tel" autocomplete="on" id="telephone" name="telephone" aria-labelledby="p2">
                </div>
            </div>
            <div class="field">
                <label for="desires" class="label">Ihre Wünsche:</label>
                <div class="control">
                    <textarea id="desires" name="desires" class="textarea" placeholder="Kommentar" aria-labelledby="p1"></textarea>
                </div>
            </div>
        </fieldset>



    </form>
</section>