<?php include('tpl.php'); ?>
<?php head('Kirjaudu | PartioID') ?>

<?php
	if($_GET['state'] == 'failed') {
		print '<div class="error">Väärä käyttäjätunnus tai salasana. <a href="forgot_password.php">Unohditko salasanasi?</a> Olethan <a href="register.php">rekisteröitynyt</a>?</div>';
	}
?>

<section id="login-external">
	<h1>Kirjaudu sisään PartioID-tunnukseesi liitetyllä tilillä</h1>
	<a id="facebook" class="ext-svc" href="testipalvelu.php?loggedin=yes">Facebook-kirjautuminen</a>
	<a id="google" class="ext-svc" href="testipalvelu.php?loggedin=yes">Google-kirjautuminen</a>
</section>

<section id="login-password">
	<h1>Kirjaudu PartioID-tunnuksesi käyttäjätunnuksella ja salasanalla</h1>
	<form action="testipalvelu.php">
		<input type="hidden" name="loggedin" value="yes">
		<label>
			Käyttäjätunnus:
			<input type="text">
		</label>
		<label>
			Salasana:
			<input type="password">
		</label>
		<div class="form-help"><a href="forgot_password.php">Unohditko salasanasi tai käyttäjätunnuksesi?</a></div>
		<div id="login-btn">
		<button>Kirjaudu</button>
		</div>
	</form>
</section>

<section id="login-register">
	<span class="register-text">Eikö sinulla vielä ole PartioID:tä?</span> <a href="register.php?phase=1" class="button">Rekisteröidy</a>
</section>

<?php foot(); ?>