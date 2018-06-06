<?php
require_once 'tekst.php';

//loome teksti objekti
$minuTekst = new tekst();
// määrame tekstile konkreetse sisu
$minuTekst->maaraTekst('Tere Maailm!');
// objekti sisu vaatamine
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// printimine
$minuTekst->prindiTekst();