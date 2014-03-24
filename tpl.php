<?php

function head($title = 'PartioID') {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php print $title; ?></title>
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body>
		<div id="portalbar"></div>
		<div id="lang"><strong>Suomeksi</strong> | <a href="#">På Svenska</a> | <a href="#">In English</a></div>
		<div id="nav">
			<div id="inner">
				<div class="item login">Kirjaudu</div>
				<div class="item register">Rekisteröidy</div>
				<div class="item about">Mikä on PartioID?</div>
			</div>
		</div>

		<div id="main">
<?php
}

function foot() {
?>
		</div>
		<div id="footer">
			Copyright © 2013-2014 Suomen Partiolaiset - Finlands Scouter ry<br>
			<a href="#">Käyttöehdot</a> | <a href="#">Rekisteriseloste</a>
		</div>
	</body>
</html>
<?php
}

function regform($buttons = '', $show_checkbox = FALSE) {
?>
<form class="regform">
<div class="row">
<label for="memberid">Jäsennumero:</label>
<input type="number" id="memberid" size="10">
<div class="form-help-pw"><small>Kuusi numeroa, löydät tämän jäsenkortista tai jäsenmaksulaskusta</small></div>
</div>
<div class="row">
<label for="mail">Sähköpostiosoite:</label>
<input type="email" id="mail" size="30">
<div class="form-help-pw"><small>Oltava sama kuin jäsenrekisterissä</small></div>
</div>
<?php if($show_checkbox): ?>
	<div class="cbc">
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