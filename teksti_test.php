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

require_once 'vtekst.php';
// värvilise objekti loomine ja sinu määramine
$punaneTekst = new vtekst('Punane tekst', '#FF0000');
echo '<pre>';
print_r($punaneTekst);
echo '</pre>';
$punaneTekst->prindiTekst();
