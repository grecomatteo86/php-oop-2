<?php

class Product {
    private $produttore;
    private $colore;
    private $prezzo;
  
    private $sistemaOperativo;
    private $connettività;

    private $materiale;
    private $numero;
    



    public function __constructor($_produttore, $_colore, $_prezzo)
    {
        $this -> produttore = $_produttore;
        $this -> colore = $_colore;
        $this -> prezzo = $_prezzo;

    }

}

?>