<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Prima Pagina in Php</h1>

<br>

<a href="esercitazione-selezioni.php">Pagina sulle esercitazioni</a><br>
<a href="esercitazione-cicli.php">Pagina sui cicli </a><br>
<a href="esercitazione-cicli-for.php">Pagina sui cicli for </a><br>
<a href="esercitazione-su-funzioni.php">Esercitazione su funzioni</a><br>
<a href="esercitazione-form.php">Esercitazione Form </a><br>
<a href="esercizio-form-computazione.php">Esercitazione Form </a><br>

<br>

<?php

echo "ciao a tutti";
echo "<br>";
echo "che bella giornata";
echo "<br>";
echo "--------------------";

$mio_nome = "Roberto"; // questa variabile mi rappresenta il nome...

echo "<br>";

echo $mio_nome;


// questo è un commento viene ignotato da php

$somma = 0; // variabile di tipo intero

$esempio_numero_virgola_mobile = 3.77; //numero virgola mobile

$isSunny = true;    // true oppure false


$isFormUserCompleted = false ; 


echo $somma . " " . $esempio_numero_virgola_mobile . " " . $isSunny . " " . $isFormUserCompleted;



echo "<br>";


/*

var_dump($somma);
var_dump($esempio_numero_virgola_mobile);
var_dump($isSunny);
var_dump($isFormUserCompleted);

*/


$lista_della_spesa = ["latte" , "caffe" , "uovo"] ;// array vettore 

echo $lista_della_spesa[1];

//echo $lista_della_spesa;

$mio_vettore = [ 1 , 10 , 70 , 90];

echo $mio_vettore[2];


echo "<h2> Esempio Operatori Aritmetici </h2>";

$numero1 = 20;
$numero2 = 10;
$risultato;

// operazioni

$risultato = $numero1 + $numero2;

echo "la somma tra " . $numero1 . " e " . $numero2 . " vale " . $risultato . "<br>";

$risultato =  $numero1 - $numero2;
echo "la diff tra " . $numero1 . " e " . $numero2 . " vale " . $risultato . "<br>";


$risultato =  $numero1 * $numero2;
echo "la molti tra " . $numero1 . " e " . $numero2 . " vale " . $risultato . "<br>";

$risultato =  $numero1 / $numero2;
echo "la divisione tra " . $numero1 . " e " . $numero2 . " vale " . $risultato . "<br>";



$risultato =  $numero1 % $numero2;
echo "il modulo tra " . $numero1 . " e " . $numero2 . " vale " . $risultato . "<br>";



$risultato =  $numero1 ** $numero2;
echo "la potenza tra " . $numero1 . " e " . $numero2 . " vale " . $risultato . "<br>";


$example = 10 ;
$example++;
echo $example;


$my_value = 10;
$shipping = 30;


echo "<br>";


//           10 > 5   and   30 < 100 ---------->   true and true ---> true
$my_result = $my_value > 5 && $shipping > 100 ;  // 0 e 1 

echo $my_result;

var_dump($my_result)

?>



</body>
</html>