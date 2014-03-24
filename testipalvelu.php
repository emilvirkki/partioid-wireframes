<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Testipalvelu</title>
	</head>
	<body>
		<h1>Testipalvelu</h1>
		<p>Testipalvelu on jokin partiopalvelu, parempi kuin Teltta tai sitten ei.</p>
		<p>
		<?php if($_GET['loggedin'] != 'yes'): ?>
			Et ole kirjautunut. <a href="login.php">Kirjaudu PartioID:lläsi</a>.
		<?php else: ?>
			Olet kirjatunut käyttäjänä <strong>Erkki Esimerkki</strong>.
		<?php endif; ?>
		</p>
	</body>
</html>
<?php

?>