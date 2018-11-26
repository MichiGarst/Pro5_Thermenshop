<!DOCTYPE html>
<html lang="de">
<head>
	<title>Über uns</title>
	<meta charset="utf-8">
	<meta name="description" content="Thermenshop Bad Füssing Kontakt">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/accessibility.css">

	<!-- Bulma einbindung -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"
		  integrity="sha256-2pUeJf+y0ltRPSbKOeJh09ipQFYxUdct5nTY6GAXswA=" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css"
		  integrity="sha256-dMQYvN6BU9M4mHK94P22cZ4dPGTSGOVP41yVXvXatws=" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"
		  integrity="sha256-2pUeJf+y0ltRPSbKOeJh09ipQFYxUdct5nTY6GAXswA=" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css.map">

	<!-- Andere Stylesheets -->
	<link rel="stylesheet" type="text/css" href="styles/Nav.css">
</head>
<body>

<div class="content">

	<!-- Header -->

    <?php
    include("Components/Header.html")
    ?>

	<!-- Menu -->
	<div class="is-centered">
		<img src="images/fashyHorizontalStart.jpg" alt="" width="100%" id="thermePic">
	</div>
	<!-- Contact -->

	<div id="main" tabindex="-1" class="has-text-centered">
		<h1>Die Thermeninsel</h1>
		<p class="text">
			Die Seele der Thermeninsel sind unsere Mitarbeiter, die mit viel Herz, Erfahrung und Tatendrang ihre Arbeit erledigen.
			Mit unserer jahrenlagen Erfahrung beraten wir dich gerne und helfen dir das richtige zu finden.
		</p>

		<h2>Das Team</h2>
		<div tabindex="-1" class="columns is-multiline is-centered is-mobile">
			<div class="column is-narrow has-text-centered">
				<img src="images/Person2.png" alt="" class="team">
				<p>
					<strong>Karl Lorenzer</strong><br>Inhaber, Geschäftsführer
				</p>
			</div>
			<div class="column is-narrow has-text-centered">
				<img src="images/Person2.png" alt="" class="team">
				<p>
					<strong>Theresa Dichtleder</strong><br>Mitarbeiterin
				</p>
			</div>
			<div class="column is-narrow has-text-centered">
				<img src="images/Person2.png" alt="" class="team">
				<p>
					<strong>Mirjam Jobst</strong><br>Mitarbeiterin
				</p>
			</div>
			<div class="column is-narrow has-text-centered">
				<img src="images/Person2.png" alt="" class="team">
				<p>
					<strong>Petra Kreuzhuber</strong><br>Mitarbeiterin
				</p>
			</div>
			<div class="column is-narrow has-text-centered">
				<img src="images/Person2.png" alt="" class="team">
				<p>
					<strong>Katharina Graf</strong><br>Mitarbeiterin
				</p>
			</div>
		</div>
	</div>

    <?php
    include("Components/Footer.html")
    ?>

</div>
<!-- Javascript -->
<script src="JS/Navigation.js"></script>
</body>
</html>