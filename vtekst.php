<?php
require_once 'tekst.php';
class vtekst extends tekst
{
	// värvi lisamine
    var $varv = '';

    /**
     * vtekst constructor.
     * @param string $varv
     */
    public function __construct($sone, $varv)
    {
        parent::__construct($sone);
        $this->maaraVarv($varv);
    }

    function maaraVarv($varv){
	        $this->varv = $varv;
	    }
	}