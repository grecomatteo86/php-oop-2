<?php
// CLASSE FIGLIA SHOE
class Shoe extends Ecommerce
{
    // ATTRIBUTI
    public $materiale;
    public $numero;
    public $performance;
    // CONSTRUTTORE
    public function __construct(string $_produttore, string $_colore, int $_prezzo, string $_materiale, int $_numero, string $_performance)
    {
        parent::__construct($_produttore, $_colore, $_prezzo);
        $this -> materiale = $_materiale;
        $this -> numero = $_numero;
        $this -> performance = $_performance;
    }
    // METODI
    /**
     * setPerformance
     *
     * in base alla performance attribuisce un valore numerico
     * @param string $_performance
     * @return void
     */
    public function setPerformance(string $_performance)
    {
        if($_performance == "amatoriale"){
            $this -> performance = 5;
        }elseif($_performance == "professionista"){
            $this -> performance = 10;
        }
    }
    /**
     * setSconto
     *
     * imposta lo sconto in base al valore numerico dato dalla performance
     * @return void
     */
    public function setSconto()
    {
        $this -> sconto = $this -> performance * 2;
    }
}
?>