<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    //esercitazioni su funzioni...

    //scrivere una funzione che prenda in ingresso un numero , la funzione restitusce true 
    //se il numero è pari altrimenti false...

    //in(numero) ------> out ( true | false)


   





    // funzione che fa somma

    function somma_numeri(int $numero1 ,int $numero2){
        return $numero1 + $numero2;
    }



    echo somma_numeri(10 , 3);

    $primo_numero = 40;
    $secondo_numero = 10;

    echo somma_numeri($primo_numero  , $secondo_numero);



    function isEven($numero){

        /*
        Primo modo
        if($numero % 2 == 0 )
            return true;
        else
            return false;
        */
        /*
        secondo modo
        */
        return $numero %2 == 0 ? true : false;
    }



    //costruiamo una funzione che prenda in ingresso un vettore e restruisce true
    //se tutti gli elementi del vettore sono pari.....
    // es [ 10 , 2  , 4] ==> true   [ 10 , 1 , 2 ] => false


    function isAllElementsEven(array $vett): bool{

    
        foreach($vett as $elmento){
            if( !isEven($elmento) ){
            
                return false;
            }
               
        }
        return true;

    }
    
    echo "<br>";
    echo "sono tutti pari gli elementi del vettore ??";
    $ris = isAllElementsEven([10 , 2 , 3]);
  
    echo ".-----> " . ($ris ? 'true' : 'false') . " <-------";    

?>


<?php


    //costruire una funzione che prenda in ingresso un vettore 
    //e un numero , la funzione restituisce true o false ,
    // true se l'elemento è presente nel vettore altrimentri false;


    //  in (array , elemento ) -----> out ( true o false
    
    // ([10 , 2 , 4  , 1 ] , 4 ) ----> true
    // ([10 , 2 , 4  , 1 ] , 7 ) ----> false


    function cerca_elemento(array $vett , int $elemento) : bool {

        foreach($vett as $myValue){
            if($myValue == $elemento)
                return true;
        }

        return false;
    }



    function smallestInteger ($arr) {
       
        $min = $arr[0];

        foreach($arr as $elemento){
            if($elemento < $min){
                $min = $elemento;
            }
        }
        return $min;
    }

?>








</body>
</html>