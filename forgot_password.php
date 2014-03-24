<?php include('tpl.php'); ?>
<?php head('Salasanan palautus | PartioID') ?>

<?php if($_GET['state'] == 'wrongmail'): ?>
<div class="error">
Antamasi sähköpostiosoite ei vastannut antamaasi jäsennumeroa. Tarkista, että olet kirjoittanut tiedot oikein
ja että antamasi sähköpostiosoite on sama kuin jäsenrekisteriin merkitty. Jos et muista sähköpostiosoitettasi, ota yhteyttä
lippukuntasi jäsenrekisterinhoitajaan.
</div>
<?php elseif($_GET['state'] == 'noaccount'): ?>
<div class="error">
Et ole vielä <a href="register.php?phase=1">rekisteröitynyt</a> PartioID-käyttäjäksi.

Jos olet varma, että olet jo rekisteröitynyt, tarkista että olet kirjoittanut jäsennumerosi oikein.
</div>
<?php elseif($_GET['state'] == 'exists_ext'): ?>
<div class="error">
Olet aiemmin käyttänyt kirjautumisessa Google-tiliäsi <strong>example@gmail.com</strong>, etkä käyttäjätunnusta ja salasanaa.

<div id="google" class="ext-svc" style="width: 300px"><a href="testipalvelu.php?loggedin=yes">Kirjaudu Google-tililläsi</a></div>

<p>Jos et halua enää käyttää kirjautumiseen Google-tiliäsi, voit luoda itsellesi käyttäjätunnuksen ja salasanan.
Tällöin et voi enää käyttää Google-tiliäsi kirjautumisessa.
</p>
<p><a href="restore_mail_sent.php" class="button">Luo käyttäjätunnus ja salasana</a> <a href="login.php" class="button secondary">Peruuta</a></p>
</div>
<?php endif; ?>

<h1>Salasanan palautus</h1>

<p>Anna jäsennumerosi ja jäsenrekisteriin merkitty sähköpostiosoitteesi. Saat sähköpostiin linkin, jonka
kautta voit asettaa uuden salasan ja halutessasi vaihtaa käyttäjätunnuksesi. Jos et muista jäsenrekisteriin merkittyä sähköpostiosoitettasi, ota yhteyttä
lippukuntasi jäsenrekisterinhoitajaan.</p>

<?php regform('<a href="restore_mail_sent.php" class="button">Lähetä</a>'); ?>

<?php foot(); ?>