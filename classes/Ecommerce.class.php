<?php

// CLASSE GENITORE
class Ecommerce {
    // ATTIBUTI
    public $produttore;
    public $colore;
    public $prezzo;
    public $sconto = 0;
    
    // CONSTRUTTORE
    public function __construct($_produttore, $_colore, $_prezzo)
    {
        $this -> produttore = $_produttore;
        $this -> colore = $_colore;
        $this -> prezzo = $_prezzo;

    }

    // METODI
    public function setSconto($_fidelity)
	{
		if($_fidelity == true) {
			$this->sconto = 10;
		}
	}

    /**
     * getSconto
     * restituisce lo sconto
     * @return int
     */
	public function getSconto()
	{
		return $this->sconto;
	}

}

?>