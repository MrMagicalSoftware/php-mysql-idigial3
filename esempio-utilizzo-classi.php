<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

class User {

    //attributi
    public string $name;
    private int $eta;



    public function __construct(string $name , int $eta) {
        $this->name = $name;
        $this->eta = $eta;
    }

    public function saluta(){
        return "ciao mi chiamo $this->name";
    }


    // metodo get
    public function getEta(){
        return $this->eta;
    }

    public function setEta($eta){
        if($eta > 0 && $eta < 110)
            $this->eta = $eta;
    }

}


$prima_persona = new User("mario" , 18);
echo $prima_persona->saluta();

echo "<br>";

$seconda_persona = new User("luigi", 45);
echo $seconda_persona->saluta();



echo "<br><br>";

/*
if($prima_persona->eta > $seconda_persona->eta)
    echo $prima_persona->name;
else
    echo $seconda_persona->name;


$prima_persona->eta  = -10;

echo $prima_persona->eta . "<br>";
echo $prima_persona->stampa_eta() . "<br>";

*/



$seconda_persona->setEta(8);

echo $seconda_persona->getEta();


?>


</body>
</html>