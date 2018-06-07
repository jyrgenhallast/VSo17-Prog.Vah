<?php
require_once 'tekst.php';

//loome teksti objekti
$minuTekst = new tekst();
// määrame tekstile konkreetse sisu
$minuTekst = new tekst('Tere Maailm!');
// objekti sisu vaatamine
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// printimine
$minuTekst->prindiTekst();

// uus objekt, määrame sisu
$mustTekst = new tekst('Must tekst');
echo '<pre>';
print_r($mustTekst);
echo '</pre>';
//prindimine
$mustTekst->prindiTekst();
