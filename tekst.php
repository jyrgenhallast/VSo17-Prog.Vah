<?php
class tekst
{ // klassi algus
	// klassi omadused, väljad
	// klassi muutuja
	var $sone = '';// teksti kirjeldavad sõnad

    /**
     * tekst constructor.
     * @param string $sone
     */
    public function __construct($sone)
    {
        $this->maaraTekst($sone);
    }


	// klassi tegevuse meetoditena
	//teksti määramine
	// maaraTekst(Tere Maailm!);
	function maaraTekst($sone) {
		$this->sone = $sone;
	}
	//teksti väljastamine
	function prindiTekst () {
		echo $this->sone.'<br/>';
	}
} // klassi lõpp