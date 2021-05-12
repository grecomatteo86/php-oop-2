<?php

// CLASSE GENITORE
class Ecommerce {
    // ATTIBUTI
    public $produttore;
    public $colore;
    public $prezzo;
    public $sconto = 0;
    
    // CONSTRUTTORE
    public function __construct(string $_produttore, string $_colore, int $_prezzo)
    {
        $this -> produttore = $_produttore;
        $this -> colore = $_colore;
        $this -> prezzo = $_prezzo;

    }

    // METODI

    /**
     * setSconto
     *
     * @param boolean $_fidelity
     * @return void
     */
    public function setSconto( bool $_fidelity)
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
	public function getSconto():int
	{
		return $this->sconto;
	}

}

?>