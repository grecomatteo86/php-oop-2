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

    // METHODS
    public function setSconto($_fidelity)
	{
		if($_fidelity == true) {
			$this->sconto = 10;
		}
	}

    /**
     * getSconto
     *
     * restituisce lo sconto
     * @return int
     */
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

    // METHODS
    public function setTechBonus($_prezzo)
    {
        if($_prezzo > 200){
            $this -> sconto = 10;
        }
    }

    /**
     * getTechBonus
     *
     * restituisce lo sconto
     * @return int
     */
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

// PHONE
$pocoPhone = new Phone ("xiaomi", "black", 250, "Android 10.0", "4G");
var_dump($pocoPhone);
// PRIMO SCONTO - METODO GENITORE
$pocoPhone -> setSconto(true);
echo "Lo sconto per aver acquistato da noi questo cellulare è: " . $pocoPhone -> getSconto() . " €" . "<br>";
// SECONDO SCONTO - METODO FIGLIO
$pocoPhone -> setTechBonus($pocoPhone -> prezzo);
echo "Per l'acquisto di questo prodotto tech hai diritto ad un ulteriore sconto di: " . $pocoPhone -> getTechBonus() . " €" . "<br>";
// UTILIZZO METODO STATICO UNO - SOMMASCONTI
echo "Gli sconti da te accumulati sono pari a: " . SommaSconti::sum($pocoPhone -> getSconto(), $pocoPhone -> getTechBonus()) . " €" . "<br>"; 
// SALVATAGGIO IN VARIABILE
$somma = SommaSconti::sum($pocoPhone -> getSconto(), $pocoPhone -> getTechBonus());
// UTILIZZO METODO STATICO DUE - TOTALE
echo "Il totale da pagare é: " . Totale::calc($pocoPhone -> prezzo, $somma);


// SHOE
$superRunner = new Shoe ("nike", "orange", 130, "rubber", 43);
var_dump($superRunner);
$superRunner -> setSconto(true);
echo "Lo sconto per aver acquistato da noi queste scarpe è: " . $superRunner -> getSconto() . " €" . "<br>";
echo "Totale: " . $superRunner -> prezzo . " - " . $superRunner -> getSconto() . " = 120 €";
?>