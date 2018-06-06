<?php
// massiivi loomine
$arvud = array();
// massiivi sisestatavad väärtused
$arvud[] = 5;
$arvud[] = 1;
$arvud[] = 4;
$arvud[] = 2;
$arvud[] = 3;

// massiivi loomine koos väärtustega
$arvud1 = array(1, 2, 3, 4, 5);

echo '<pre>';
print_r($arvud);
echo '</pre>';

// massiivi väljastus
for($i = 0; $i < count($arvud); $i++){
	    echo '<b>'.$arvud[$i].'</b><br />';
}

foreach ($arvud1 as $arv){
	    echo '<i>'.$arv.'</i><br />';
}