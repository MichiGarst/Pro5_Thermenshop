<!DOCTYPE html>
<html lang="de">
<head>
	<title>Anfrage</title>
	<meta charset="utf-8">
	<meta name="description" content="Thermenshop Bad Füssing Kontakt">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/accessibility.css">


	<!-- Bulma einbindung -->
    <?php
    include("Components/BulmaEinbindung.html");
    ?>

	<!-- Andere Stylesheets -->
	<link rel="stylesheet" type="text/css" href="styles/Nav.css">
	<link rel="stylesheet" type="text/css" href="styles/requeststyle.css">
	<link rel="stylesheet" type="text/css" href="styles/accessibility.css">
</head>
<body>

<div class="content">

	<!-- Header -->

    <?php
    include("Components/Header.html");
    ?>
	<!-- Menu -->


	<div class="is-centered">
		<img src="images/fashyHorizontalStart.jpg" alt="" width="100%" id="thermePic">
	</div>


	<!-- Contact -->

	<div id="main" tabindex="-1" class="has-text-centered">

		<h1>Anfrage senden</h1>
		<img src="images/Texas3.jpg" alt="" class="produktPic">
		<p id="RequestText"><strong>Vossen Texas</strong><br>
			Vossen Texas, 100% Baumwolle, Unisex </p>
		<form action="sendPHPmail.php" id="checkbox" method="post" aria-label="Anfrageformular">

			<div>

				<div role="checkbox"
					 class="group_checkbox"
					 aria-checked="false"
					 aria-labelledby="label0 group1"
					 aria-describedby="checkboxHelp"
					 tabindex="0"
					 onclick="toggleGroupCheckbox(event)"
					 onkeydown="toggleGroupCheckbox(event)"
					 onfocus="focusCheckbox(event)"
					 onblur="blurCheckbox(event)">
					<img src="./images/checkbox-unchecked-black.png" alt="">
					<span> Farbe: </span>

				</div>
				<div class="checkbox">
					<input type="checkbox" name="checkbox" id="checkbox1_group1" value="value" aria-labelledby="label1 group1">
					<label for="checkbox1_group1">Atlantic</label>

				</div>
				<div class="checkbox">
					<input type="checkbox" name="checkbox" id="checkbox2_group1" value="value" aria-labelledby="label2 group1">
					<label for="checkbox2_group1">Purpur</label>

				</div>
				<div class="checkbox">
					<input type="checkbox" name="checkbox" id="checkbox3_group1" value="value" aria-labelledby="label3 group1">
					<label for="checkbox3_group1">Lagoon</label>
				</div>

			</div>

			<div>

				<div role="checkbox"
					 class="group_checkbox"
					 aria-checked="false"
					 aria-labelledby="label0 group2"
					 aria-describedby="checkboxHelpHide"
					 tabindex="0"
					 onclick="toggleGroupCheckbox(event)"
					 onkeydown="toggleGroupCheckbox(event)"
					 onfocus="focusCheckbox(event)"
					 onblur="blurCheckbox(event)">
					<img src="./images/checkbox-unchecked-black.png" alt="">
					<span> Größe: </span>

				</div>
				<div class="checkbox">
					<input type="checkbox" name="checkbox" id="checkbox1_group2" value="value" aria-labelledby="label1 group2">
					<label for="checkbox1_group2">XS</label>

				</div>
				<div class="checkbox">
					<input type="checkbox" name="checkbox" id="checkbox2_group2" value="value" aria-labelledby="label1 group2">
					<label for="checkbox1_group2">S</label>

				</div>
				<div class="checkbox">
					<input type="checkbox" name="checkbox" id="checkbox3_group2" value="value" aria-labelledby="label2 group2">
					<label for="checkbox2_group2">M</label>

				</div>

				<div class="checkbox">
					<input type="checkbox" name="checkbox" id="checkbox4_group2" value="value" aria-labelledby="label3 group2">
					<label for="checkbox3_group2">L</label>

				</div>
				<div class="checkbox">
					<input type="checkbox" name="checkbox" id="checkbox5_group2" value="value" aria-labelledby="label4 group2">
					<label for="checkbox4_group2">XL</label>

				</div>
				<div class="checkbox">
					<input type="checkbox" name="checkbox" id="checkbox6_group2" value="value" aria-labelledby="label4 group2">
					<label for="checkbox4_group2">XXL</label>

				</div>

			</div>

			<div id="checkboxHelp">Sie können einmal oder mehrmals dasselbe Produkt bestellen. </div>
			<div id="checkboxHelpHide" hidden>Sie können einmal oder mehrmals dasselbe Produkt bestellen. </div>

<div class="is-centered">
	<div>
		<label for="first_name">Vorname:</label>
		<input type="text" autocomplete="first_name" id="first_name" name="first_name">
	</div>
	<div>
		<label for="last_name">Nachname:</label>
		<input type="text" autocomplete="last_name" id="last_name" name="last_name">
	</div>
	<div>
		<label for="email">E-Mail:</label>
		<input type="email" autocomplete="email" id="email" name="email">
	</div>
	<div>
		<label for="telephone">Telefon:</label>
		<input type="tel" autocomplete="telephone" id="telephone" name="telephone">
	</div>
	<div>
		<label for="desires">Ihre Wünsche:</label>
		<textarea type="text" id="desires" name="desires"></textarea>
	</div>

</div>











			<button type="submit">Senden</button>
		</form>



	</div>

    <?php
    include("Components/Footer.html");
    ?>

</div>

</body>
</html>