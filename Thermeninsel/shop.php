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
	<link rel="stylesheet" type="text/css" href="styles/Nav.css">

</head>
<body>

<div class="content">

	<!-- Header -->

    <?php
    include("Components/Header.html");
    ?>

	<!-- Menu -->
	<div class="is-centered">
		<img src="images/fashybild2.jpg" alt="" width="100%" id="thermePic">
	</div>


	<!-- Contact -->




	<div class="has-text-centered">
		<h1>Der Thermenshop</h1>
		<p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata est Lorem ipsum dolor sit amet.</p>
		<h2>Unsere Prdukte</h2>
		<br>
		<div tabindex="-1" class="columns is-multiline is-centered is-mobile" id="produkte">
			<div class="column is-narrow">
				<img src="images/poppy1.jpg" alt="" width="18%" class="produktPic">
				<p class="produktText"><strong>Vossen Poppy</strong><br>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, </p>
			</div>
			<div class="column is-narrow">
				<img src="images/texas2.jpg" alt="" width="18%" class="produktPic">
				<p class="produktText"><strong>Vossen Texas</strong><br>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, </p>
			</div>
			<div class="column is-narrow">
				<img src="images/lederbadehose.jpg" alt="" width="18%" class="produktPic">
				<p class="produktText"><strong>Lederbadehose</strong><br>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, </p>
			</div>
		</div>

		<h2>Unsere Marken</h2>
		<br>
		<div tabindex="-1" class="columns is-multiline is-centered is-mobile">
			<div class="column is-narrow">
				<img src="images/fashyLogo.png" alt="" width="18%" class="produktPic">
			</div>
			<div class="column is-narrow">
				<img src="images/palmbeachlogo.jpg" alt="" width="18%" class="produktPic">
			</div>
			<div class="column is-narrow">
				<img src="images/selfcollectionlogo.png" alt="" width="18%" class="produktPic">
			</div>
			<div class="column is-narrow">
				<img src="images/vossenlogo.png" alt="" width="18%" class="produktPic">
			</div>
			<div class="column is-narrow">
				<img src="images/comtessalogo.png" alt="" width="18%" class="produktPic">
			</div>
			<div class="column is-narrow">
				<img src="images/wewologo.png" alt="" width="18%" class="produktPic">
			</div>
		</div>

	</div>

    <?php
    include("Components/Footer.html");
    ?>

</div>

<!-- Javascript -->
<script src="JS/Navigation.js"></script>
</body>
</html>