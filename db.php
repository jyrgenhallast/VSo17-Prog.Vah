<?php
// db_function.php-s olevad funkstioonid kasutusele
require_once 'db_function.php';
// tekitame yhenduse andmebaasiga
$dbYhendus = yhendus();
// koostame sql lause ja saadame andmebaasi
$sql = 'SHOW TABLES';
$tulemus = annaAndmed($dbYhendus, $sql);
// tulemuse sisu test kujul
echo '<pre>';
print_r($tulemus);
echo '</pre>';