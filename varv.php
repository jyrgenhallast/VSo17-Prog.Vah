<?php
for($rida = 1; $rida <= 5; $rida++){
	    $varv = '#';
	    for($kord = 1; $kord <= 6; $kord++){
		       $juhuarv = rand(0, 15);
		       $symbol = dechex($juhuarv);
		       $varv = $varv.$symbol;
		    }
    echo '<h1 style=color:'.$varv.'>'.
                  'Värviline tekst'.
                  '</h1>'.
                  '<br />';
 }