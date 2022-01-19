<!-- Definire classe Computer:
ATTRIBUTI:
- codice univoco
- modello
- prezzo
- marca

METODI:
- costruttore che accetta codice univoco e prezzo
- proprieta' getter/setter per tutte le variabili d'istanza
- printMe: che stampa se stesso (come quella vista a lezione)
- toString: "marca modello: prezzo [codice univoco]"

ECCEZIONI:
- codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
- marca e modello: devono essere costituiti da stringhe tra i 3 e i 20 caratteri
- prezzo: deve essere un valore intero compreso tra 0 e 2000

Testare la classe appena definita con tutte le casistiche interessanti per verificare
il corretto funzionamento dell'algoritmo -->

<?php
class Computer{
    private $codice;
    private $modello;
    private $prezzo;
    private $marca;

    public function __construct($codice,$prezzo){
        $this->setCodice($codice);
        $this->setPrezzo($prezzo);
    }

    public function setCodice($codice){
        if(!Is_Numeric($codice) ||  strlen($codice) != 6)
        throw new Exception("codice non accettato");
        
        $this->codice = $codice;
    }
    public function getCodice(){
        return $this->codice;
    }

    public function setModello($modello){
        if(strlen($modello) < 3 || strlen($modello) > 20)
            throw new Exception ("modello non accettato");
        $this->modello = $modello;
    }
    public function getModello(){
        return $this->modello;
    }

    public function setPrezzo($prezzo){
        if(!is_int($prezzo) || $prezzo < 0 ||  $prezzo > 2000)
            throw new Exception("prezzo non accettato");
        $this->prezzo = $prezzo;
    }
    public function getPrezzo(){
        return $this->prezzo;
    }

    public function setMarca($marca){
        if(strlen($marca) < 3 || strlen($marca) > 20)
            throw new Exception ("marca non accettata");
        $this->marca = $marca;
    }
    public function getMarca(){
        return $this->marca;
    }

    public function printMe(){
        echo $this . "<br>";
    }

    public function __toString(){
        return $this->marca . " " . $this->modello . ": " . $this->prezzo . "€" . " [" . $this->codice . "]";
    }
}
try{
    $c1 = new Computer("656523", 250);
    $c1->setMarca("asus");
    $c1->setModello("rog");
    $c1->printMe();
}catch (Exception $e){
    echo  "<h2>" . $e -> getMessage() . "</h2>";
 }

?>