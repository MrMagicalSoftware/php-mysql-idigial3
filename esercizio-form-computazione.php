<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="esercizio-form-computazione.php" method="get">

<label for="numero1">Numero 1:</label>
        <input type="number" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Numero 2:</label>
        <input type="number" id="numero2" name="numero2" required><br><br>

        <label for="simbolo">Simbolo:</label>
        <select id="simbolo" name="simbolo" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>
        <button type="submit" value="submit">Invia dati</button>


</form>





<?php

error_reporting(E_ERROR); // Solo errori 



/**
 * 
 * questa funzione prende in ingresso 2 numeri 
 * e un simbolo e ritorna il calcolo corrispondente
 * 
 * Es : (10  , 2 , *)  ritorna 20
 * 
 * @param mixed $num1
 * @param mixed $num2
 * @param mixed $simbolo
 * @return void
 */
function elabora($num1 , $num2 , string $simbolo): float{

    switch($simbolo){
        case "+":
            return $num1 + $num2;
        case "*":
            return $num1 * $num2;
        case "-":
            return $num1 - $num2;
        case "/":
            return dividi( $num1 , $num2);
        default:
            return 0 ;
    }


}


function dividi($numero1 , $numero2) : float {

    try{
        return $numero1 /  $numero2;
    }catch ( Error  ){
        return 0 ;
    }

}


/*

echo elabora( 10 , 2 , "*") . "<br>";
echo elabora( 10 , 2 , "+") . "<br>";
echo elabora( 10 , 2 , "/") . "<br>";
echo elabora( 10 , 2 , "-") . "<br>";
echo elabora( 10 , 2 , "£") . "<br>";
*/


//echo elabora($_GET["numero1"] , 2 , "*");

$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];
$simbolo = $_GET["simbolo"];


if(isset($numero1 ,$numero2 , $simbolo)){
    echo elabora($numero1  , $numero2 , $simbolo ) ;
}










?>




</body>
</html>