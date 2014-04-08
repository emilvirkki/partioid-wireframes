<?php

function head($title = 'PartioID') {
?>
<!DOCTYPE html>
<html lang="fi">
	<head>
		<meta charset="utf-8">
		<title><?php print $title; ?></title>
		<link rel="stylesheet" href="style.css" type="text/css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div id="skiplink"><a href="#nav">Siirry valikkoon</a></div>

		<main id="main" role="main">
			<div class="inner">
<?php
}

function foot() {
?>
			</div>
		</main>
		
		<nav id="lang">
			<h1 class="content-label">Kielivalinta</h1>
			<strong>Suomeksi</strong> | <a href="#">På Svenska</a> | <a href="#">In English</a>
		</nav>
		<nav id="nav">
			<ul>
				<li class="login"><a href="login.php">Kirjaudu</a></li>
				<li class="register"><a href="register.php?phase=1">Rekisteröidy</a></li>
				<li class="about"><a href="about.php">Mikä on PartioID?</a></li>
			</ul>
		</nav>
		<footer id="footer">
			Copyright © 2013-2014 Suomen Partiolaiset - Finlands Scouter ry<br>
			<a href="#">Käyttöehdot</a> | <a href="#">Rekisteriseloste</a>
		</footer>
		<div id="portalbar">
			<div class="inner">
				<img src="gfx/partio-logo.png" alt="Partio - Scout">
			</div>
		</div>
		<script src="jquery.js"></script>
		<script>
		$('button').on('click', function() {
			
		});
		</script>
	</body>
</html>
<?php
}

function regform($buttons = '', $show_checkbox = FALSE) {
?>
<form class="regform">
<div class="row">
<div class="field text">
<label for="memberid">Jäsennumero:</label>
<input type="number" id="memberid" size="10">
</div>
<div class="form-help-pw"><small>Löydät tämän jäsenkortista tai jäsenmaksulaskusta</small></div>
</div>
<div class="row">
<div class="field text">
<label for="mail">Sähköpostiosoite:</label>
<input type="email" id="mail" size="30">
</div>
<div class="form-help-pw"><small>Oltava sama kuin jäsenrekisterissä</small></div>
</div>
<?php if($show_checkbox): ?>
	<div class="approve-terms">
	<input type="checkbox" class="cb"> Hyväksyn palvelun <a href="#">käyttöehdot</a> ja olen tietoinen <a href="">rekisteriselosteesta</a>.
	</div>
<?php endif; ?>
<div class="buttons">
<?php print $buttons; ?>
</div>
</form>
<?php
}

function passwdform($buttons='', $username='') {
?>
<form class="passwdform">
<div class="row">
<label for="name">Käyttäjätunnus:</label>
<input type="text" id="name" size="20" value="<?php print $username; ?>">
<div class="form-help-pw"><small>Kirjaimet a - z, numerot ja alaviiva (_) sallittu. Isoja ja pieniä kirjaimia ei erotella.</small></div>
</div>
<div class="row">
<label for="pass">Salasana:</label>
<input type="password" id="pass" size="20">
<div class="form-help-pw"><small>Vähintään 8 merkkiä, vähintään yksi iso kirjain, pieni kirjain ja numero</small></div>
</div>
<div class="row">
<label for="pass2">Salasana uudelleen:</label>
<input type="password" id="pass2" size="20">
</div>

<div class="buttons">
<?php print $buttons; ?>
</div>
</form>
<?php
}