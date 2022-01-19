<!-- Definire classe User:
ATTRIBUTI (private):
- username 
- password
- age

METODI:
- costruttore che accetta username, e password
- proprieta' getter/setter
- printMe: che stampa se stesso
- toString: "username: age [password]"

ECCEZIONI:
- scatenare eccezione quando username e' minore di 3 caratteri o maggiore di 16
- scatenare eccezione se password non contiene un carattere speciale (non alpha-numerico)
- scatenare eccezione se age non e' un numero

NOTE:
- per testare il singolo carattere di una stringa

Testare la classe appena definita con dati corretti e NON corretti all'interno di un
try-catch e eventualmente informare l'utente del problema -->
      
<?php
class User{
    private $username;
    private $password;
    private $age;

    public function __construct($username, $password){
        $this->setUsername($username);
        $this->setPassword($password);
        
    }

    public function getUsername(){
        return $this->username;
    }
    public function setUsername($username){
        if(strlen($username) < 3 || strlen($username) > 16)
            throw new Exception ("username troppo corto o troppo lungo");

        $this->username = $username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        if(ctype_alnum($password))
            throw new Exception ("la pw deve contenere almeno un carattere speciale");
        $this->password = $password;
    }

    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        if(!is_numeric($age))
        throw new Exception("l'età va espressa con un numero");
        $this->age = $age;
    }

    public function printMe(){
        echo $this . "<br>";
    }
    public function __toString(){
        return $this->username . ": " . $this->age . " [" . $this->password . "]";
    }
    
}
 try{
    $u1 = new User("Marco" , "ciamb3lla@");
    $u1->setAge(20);
    echo $u1;
 }catch (Exception $e){
    echo  "<h2>" . $e -> getMessage() . "</h2>";
 }

 ?>    