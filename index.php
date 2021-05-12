<?php

include_once __DIR__ . '/classes/sommaSconti.class.php';
include_once __DIR__ . '/classes/totale.class.php';

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

    public function setSconto($_fidelity)
	{
		if($_fidelity == true) {
			$this->sconto = 10;
		}
	}

	public function getSconto()
	{
		return $this->sconto;
	}

}

// CLASSE FIGLIA PHONE
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

    // METHOD
    public function setTechBonus($_prezzo)
    {
        if($_prezzo > 200){
            $this -> sconto = 10;
        }
    }

    public function getTechBonus()
    {
        return $this -> sconto;
    }
}

// CLASSE FIGLIA SHOE
class Shoe extends Ecommerce
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

// CREAZIONE ISTANZE
$pocoPhone = new Phone ("xiaomi", "black", 250, "Android 10.0", "4G");
var_dump($pocoPhone);
$pocoPhone -> setSconto(true);
echo "Lo sconto per aver acquistato da noi questo cellulare è: " . $pocoPhone -> getSconto() . " €" . "<br>";
$pocoPhone -> setTechBonus($pocoPhone -> prezzo);
echo "Per l'acquisto di questo prodotto tech hai diritto ad un ulteriore sconto di: " . $pocoPhone -> getTechBonus() . " €" . "<br>";

echo "Gli sconti da te accumulati sono pari a: " . SommaSconti::sum($pocoPhone -> getSconto(), $pocoPhone -> getTechBonus()) . " €" . "<br>"; 

$somma = SommaSconti::sum($pocoPhone -> getSconto(), $pocoPhone -> getTechBonus());


echo "Il totale da pagare é: " . Totale::sum($pocoPhone -> prezzo, $somma);
// echo "Totale: " . $pocoPhone -> prezzo . " - " . $pocoPhone -> getSconto() . " - " . $pocoPhone -> getTechBonus() . " = 230 €" ;

$superRunner = new Shoe ("nike", "orange", 130, "rubber", 43);
var_dump($superRunner);
$superRunner -> setSconto(true);
echo "Lo sconto per aver acquistato da noi queste scarpe è: " . $superRunner -> getSconto() . " €" . "<br>";
echo "Totale: " . $superRunner -> prezzo . " - " . $superRunner -> getSconto() . " = 120 €";
?>