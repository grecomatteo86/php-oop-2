<?php
// CLASSE GENITORE
class Ecommerce {
    public $produttore;
    public $colore;
    public $prezzo;
    public $sconto = 0;
    
    // CONSTRUCT
    public function __construct($_produttore, $_colore, $_prezzo)
    {
        $this -> produttore = $_produttore;
        $this -> colore = $_colore;
        $this -> prezzo = $_prezzo;

    }

    public function setSconto($_socio)
	{
		if($_socio == true) {
			$this->sconto = 10;
		}
	}

	public function getSconto()
	{
		return $this->sconto;
	}

}

// CLASSE FIGLIA
class Phone extends Ecommerce
{
    public $sistemaOperativo;
    public $connettivita;

    // CONSTRUCT
    public function __construct($_produttore, $_colore, $_prezzo, $_sistemaOperativo, $_connettivita)
    {
        parent::__construct($_produttore, $_colore, $_prezzo);
        $this -> sistemaOperativo = $_sistemaOperativo;
        $this -> connettivita = $_connettivita;
    }
}

// CLASSE FIGLIA
class Shoes extends Ecommerce
{
    public $materiale;
    public $numero;

    // CONSTRUCT
    public function __construct($_produttore, $_colore, $_prezzo, $_materiale, $_numero)
    {
        parent::__construct($_produttore, $_colore, $_prezzo);
        $this -> materiale = $_materiale;
        $this -> numero = $_numero;
    }
}

?>