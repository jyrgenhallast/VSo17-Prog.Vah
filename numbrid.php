<?php
for($arv = 1; $arv <= 10; $arv++){
	  if($arv % 2 == 0){
		      $varv = 'blue';
		 } else {
		    $varv = 'red';}
echo '<p style=color:'.$varv.'>'.$arv.'</p><br>';
}

echo '<h3>++ ja -- </h3> <br> ';

$a = 5; $b = 2;
$c = $a++;
$d = $b--;
echo 'a = '.$a.'<br />';
echo 'b = '.$b.'<br />';
echo 'c = '.$c.'<br />';
echo 'd = '.$d.'<br />';

$a = 5; $b = 2;
$c = ++$a;
$d = --$b;
echo 'a = '.$a.'<br />';
echo 'b = '.$b.'<br />';
echo 'c = '.$c.'<br />';
echo 'd = '.$d.'<br />';