<?php

// CLASSE FIGLIA PHONE
class Phone extends Ecommerce
{
    // ATTRIBUTI
    public $sistemaOperativo;
    public $connettivita;

    // CONSTRUTTORE
    public function __construct(string $_produttore, string $_colore, int $_prezzo, string $_sistemaOperativo, string $_connettivita)
    {
        parent::__construct($_produttore, $_colore, $_prezzo);
        $this -> sistemaOperativo = $_sistemaOperativo;
        $this -> connettivita = $_connettivita;
    }

    // METODI

    /**
     * setTechBonus
     *
     * @param integer $_prezzo
     * @return void
     */
    public function setTechBonus(int $_prezzo)
    {
        if($_prezzo > 200){
            $this -> sconto = 10;
        }
    }

    /**
     * getTechBonus
     * restituisce lo sconto
     * @return int
     */
    public function getTechBonus():int
    {
        return $this -> sconto;
    }
}

?>