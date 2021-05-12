<?php

// CLASSE FIGLIA PHONE
class Phone extends Ecommerce
{
    // ATTRIBUTI
    public $sistemaOperativo;
    public $connettivita;

    // CONSTRUTTORE
    public function __construct($_produttore, $_colore, $_prezzo, $_sistemaOperativo, $_connettivita)
    {
        parent::__construct($_produttore, $_colore, $_prezzo);
        $this -> sistemaOperativo = $_sistemaOperativo;
        $this -> connettivita = $_connettivita;
    }

    // METODI
    public function setTechBonus($_prezzo)
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
    public function getTechBonus()
    {
        return $this -> sconto;
    }
}

?>