<?php

// INCLUSIONE CLASSE GENITORE
include_once __DIR__ . '/classes/Ecommerce.class.php';
// INCLUSIONE CLASSE FIGLIA PHONE
include_once __DIR__ . '/classes/Phone.class.php';
// INCLUSIONE CLASSE FIGLIA SHOE
include_once __DIR__ . '/classes/Shoe.class.php';
// INCLUSIONE METODI STATICI
include_once __DIR__ . '/classes/SommaSconti.class.php';
include_once __DIR__ . '/classes/Totale.class.php';


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
$superRunner = new Shoe ("nike", "orange", 130, "rubber", 43, "professionista");
var_dump($superRunner);
// EVOCO METODO FIGLIO - SETPERFORMANCE PER IMPOSTARE LO SCONTO
$superRunner -> setPerformance($superRunner -> performance);
// EVOCO METODO GENITORE MODIFICATO DA POLIMORFISMO PER STABILIRE LO SCONTO FINALE
$superRunner -> setSconto();
echo "Lo sconto che ti spetta in base al livello di performance delle scarpe acquistate è di " . $superRunner -> getSconto() . " €" . "<br>";
// SALVO LO SCONTO IN UNA VARIABILE
$scontoRunner = $superRunner -> getSconto();
// UTILIZZO METODO STATICO DUE - TOTALE
echo "Il totale da pagare é " . Totale::calc($superRunner -> prezzo, $scontoRunner) . " €" . "<br>"



?>