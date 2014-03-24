<?php include('tpl.php'); ?>
<?php head('Kirjaudu | PartioID') ?>

<?php
	if($_GET['state'] == 'failed') {
		print '<div class="error">Väärä käyttäjätunnus tai salasana. <a href="forgot_password.php">Unohditko salasanasi?</a> Olethan <a href="register.php">rekisteröitynyt</a>?</div>';
	}
?>

<div id="login-left">
	<h1>Kirjaudu sisään PartioID-tunnukseesi liitetyllä tilillä</h1>
	<div id="facebook" class="ext-svc">Facebook-kirjautuminen</div>
	<div id="google" class="ext-svc">Google-kirjautuminen</div>
</div>

<div id="login-right">
	<h1>Kirjaudu PartioID-tunnuksesi käyttäjätunnuksella ja salasanalla</h1>
	<form>
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
</div>

<div id="login-cancel">
	<span class="cancel-text">Eikö sinulla vielä ole PartioID:tä?</span> <button>Rekisteröidy</button>
</div>

<?php foot(); ?>