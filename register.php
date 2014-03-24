<?php include('tpl.php'); ?>
<?php head('Rekisteröidy | PartioID'); ?>
<?php $phase = intval($_GET['phase']); ?>

<h1>Rekisteröidy</h1>

<div id="phases">
<div class="phase phase-1 active-<?php print $phase; ?>"><span class="num">1</span> Täytä jäsentietosi</div>
<div class="phase phase-2 active-<?php print $phase; ?>"><span class="num">2</span> Vahvista sähköpostiosoitteesi</div>
<div class="phase phase-3 active-<?php print $phase; ?>"><span class="num">3</span> Valitse kirjautumistapa</div>
<div class="phase phase-4 active-<?php print $phase; ?>"><span class="num">4</span> Jatka palveluun</div>
</div>

<?php if($phase == 1): ?>
	<p>
	PartioID on käytössä ainoastaan partiolaisille. Tunnistaudu partiolaiseksi käyttäen jäsenkortistasi
	löytyvää jäsennumeroa ja jäsenrekisterissä olevaa sähköpostiosoitetta.
	Sähköpostiosoitetta käytetään mahdollisiin palvelua koskeviin yhteydenottoihin jatkossa.
	</p>
	<?php regform('<button class="continue">Jatka</button> <button class="secondary">Peruuta</button>',TRUE); ?>
<?php elseif($phase == 2): ?>
	<p>
		Antamaasi sähköpostiosoitteeseen on lähetetty linkki, jonka kautta sinun on vahvistettava sähköpostiosoitteesi. Jos et
		ole saanut linkkiä, tarkista roskapostikansiosi.
	</p>
<?php elseif($phase == 3): ?>
	<?php if($_GET['pw'] == 'yes'): ?>
		<p>Valitse PartioID-kirjautumista varten käyttäjätunnus ja salasana.<br><br></p>
		<?php passwdform('<br><button>Viimeistele rekisteröityminen</button> <button class="secondary">Peruuta</button>'); ?>

		<p><br>Jos haluat kirjautua Facebook- tai Google-tililläsi, <a href="#">vaihda kirjautumistapaa</a>.</p>
	<?php elseif($_GET['ext'] == 'yes'): ?>
		<p>Käytät kirjautumisessa jatkossa Google-tiliäsi <strong>example@gmail.com</strong>.<br><br></p>
		<button>Viimeistele rekisteröityminen</button> <button class="secondary">Peruuta</button>

		<p><br>Jos haluat kirjautua Facebook-tililläsi tai käyttäjätunnuksella ja salasanalla, <a href="#">vaihda kirjautumistapaa</a>.</p>
	<?php else: ?>
		<p>Kirjaudu PartioID:lläsi jatkossa käyttäen:</p>
		<div id="choose-service">
			<div id="google" class="ext-svc">Google-tiliäsi</div>
			<div id="fb" class="ext-svc">Facebook-tiliäsi</div>
			<div id="password" class="ext-svc">Käyttäjätunnusta ja salasanaa</div>
		</div>
	<?php endif; ?>
<?php elseif($phase == 4): ?>
	<?php if($_GET['pw'] == 'yes'): ?>
		<p>Kirjaudut jatkossa PartioID-palvelussa käyttäjätunnuksen <strong>esimerkki</strong> ja antamasi
		salasanan avulla.</p>
	<?php else: ?>
		<p>Kirjaudut jatkossa PartioID-palvelussa Google-tililläsi <strong>esimerkki@gmail.com</strong>.</p>
	<?php endif; ?>
		<p>Kiitos rekisteröitymisestäsi!</p>
		<br><button>Jatka palveluun Purkki</button>
<?php endif; ?>

<?php foot(); ?>