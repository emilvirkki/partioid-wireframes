<?php include('tpl.php'); ?>
<?php head('Salasanan palautus | PartioID') ?>

<?php if($_GET['state'] == 'account_exists'): ?>
<div class="error">
Valitsemasi käyttäjätunnus on jo varattu, kokeile jotakin toista.
</div>
<?php endif; ?>

<?php if($_GET['state'] == 'done_pass'): ?>
	<h1>Salasana vaihdettu</h1>
	<p>Salasanasi on vaihdettu - voit nyt <a href="login.php">kirjautua</a> PartioID:tä käyttäviin palveluihin käyttäjätunnuksellasi ja uudella salasanallasi.</p>
<?php elseif($_GET['state'] == 'done_both'): ?>
	<h1>Salasana ja käyttäjätunnus vaihdettu</h1>
	<p>Salasanasi ja käyttäjätunnuksesi on vaihdettu - voit nyt <a href="login.php">kirjautua</a> PartioID:tä käyttäviin palveluihin uudella käyttäjätunnuksellasi ja
	salasanallasi.</p>
<?php else: ?>
	<h1>Salasanan palautus</h1>
	<p>Voit nyt asettaa uuden salasanan ja halutessasi vaihtaa käyttäjätunnuksesi.</p>
	<?php passwdform('<a href="restore_password.php?state=done_pass" class="button">Tallenna</a>', 'MyOldUsername88'); ?>
<?php endif; ?>

<?php foot(); ?>