<?php
for($arv = 1; $arv <= 10; $arv++){
	  if($arv % 2 == 0){
		      $varv = 'blue';
		 } else {
		    $varv = 'red';}
echo '<p style=color:'.$varv.'>'.$arv.'</style><br />';}