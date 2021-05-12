<?php
// CLASSE GENITORE
class Ecommerce {
    public $produttore;
    public $colore;
    public $prezzo;
    public $sconto = 0;
    
    // METODI
    public function __constructor($_produttore, $_colore, $_prezzo)
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
}

// CLASSE FIGLIA
class Shoes extends Ecommerce
{
    public $materiale;
    public $numero;
}

?>