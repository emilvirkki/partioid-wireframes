<?php include('tpl.php'); ?>
<?php head('Rekisteröidy | PartioID'); ?>
<?php $phase = intval($_GET['phase']); ?>

<h1>Rekisteröidy</h1>

<!-- Järjestys: 1 - 2 - 3 -->

<div id="phases">
<div class="phase phase-1 active-<?php print $phase; ?>"><span class="num">1</span> Täytä jäsentietosi</div>
<div class="phase phase-3 active-<?php print $phase; ?>"><span class="num">2</span> Valitse kirjautumistapa</div>
<div class="phase phase-2 active-<?php print $phase; ?>"><span class="num">3</span> Vahvista sähköpostiosoitteesi</div>
</div>

<?php if($phase == 1): ?>
	<p>
	PartioID on käytössä ainoastaan partiolaisille. Tunnistaudu partiolaiseksi käyttäen jäsenkortistasi
	löytyvää jäsennumeroa ja jäsenrekisterissä olevaa sähköpostiosoitetta.
	Sähköpostiosoitetta käytetään mahdollisiin palvelua koskeviin yhteydenottoihin jatkossa.
	</p>
	<?php regform('<button class="continue">Jatka</button> <button class="secondary">Peruuta</button>',TRUE); ?>
<?php elseif($phase == 3): ?>
	<?php if($_GET['pw'] == 'yes'): ?>
		<p>Valitse PartioID-kirjautumista varten käyttäjätunnus ja salasana.<br><br></p>
		<?php passwdform('<br><button>Tallenna</button> <button class="secondary">Peruuta</button>'); ?>

		<p><br>Jos haluat kirjautua Facebook- tai Google-tililläsi, <a href="#">vaihda kirjautumistapaa</a>.</p>
	<?php elseif($_GET['ext'] == 'yes'): ?>
		<p>Käytät kirjautumisessa jatkossa Google-tiliäsi <strong>example@gmail.com</strong>.<br><br></p>
		<button>Tallenna valinta</button> <button class="secondary">Peruuta</button>

		<p><br>Jos haluat kirjautua Facebook-tililläsi tai käyttäjätunnuksella ja salasanalla, <a href="#">vaihda kirjautumistapaa</a>.</p>
	<?php else: ?>
		<?php if($_GET['mail'] == 'confirmed'): ?>
			<p>Sähköpostiosoitteesi on vahvistettu!</p>
		<?php endif; ?>
		<p>Kirjaudu PartioID:lläsi jatkossa käyttäen:</p>
		<div id="choose-service">
			<div id="google" class="ext-svc">Google-tiliäsi</div>
			<div id="fb" class="ext-svc">Facebook-tiliäsi</div>
			<div id="password" class="ext-svc">Käyttäjätunnusta ja salasanaa</div>
		</div>
	<?php endif; ?>
<?php elseif($phase == 2): ?>
	<?php if($_GET['regok'] == 'now'): ?>
		<p>Sähköpostiosoitteesi on nyt vahvistettu ja PartioID-tilisi luonti on valmis. Kiitos rekisteröitymisestäsi!</p>
		<br><button>Jatka palveluun Purkki</button>
	<?php elseif($_GET['regok'] == 'earlier'): ?>
		<p>Vahvistit sähköpostiosoitteesi jo aiemmin, joten PartioID-tilisi luonti on valmis. Kiitos rekisteröitymisestäsi!</p>
		<br><button>Jatka palveluun Purkki</button>
	<?php else: ?>
		<p>
			Jäsenrekisteriin merkittyyn sähköpostiosoitteeseen on lähetetty linkki, jonka kautta sinun on vahvistettava sähköpostiosoitteesi. Jos et
			ole saanut linkkiä, tarkista roskapostikansiosi.
		</p>
	<?php endif; ?>
<?php endif; ?>

<?php foot(); ?>