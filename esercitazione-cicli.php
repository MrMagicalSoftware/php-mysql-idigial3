<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "######################## <br>";

        /*
            stampare a video tutti i numeri compresi tra 20 e 40 
        */

        // 20 21 22 ............. 40 

        $i = 20;

        while ($i <= 40){
            echo "$i " ;
            $i++;
        }

       


    ?>

    <?php

        //stampare i numeri pari compresi tra 20 e 40
        // 20 22 24 ...  ...... 40  

        echo "<br><br><br>";
        $i = 20;

        
        while ($i <= 40){
            if($i % 2 == 0 ){
                echo "$i " ;
            }
            $i++;
        }

            // 20 21 22 23 ....... 40 
        


        echo "partenza del secondo ciclo ";

        $i = 20;
        while ($i <= 40){
            echo "$i " ;
            $i +=2;  // $i = $i + 2
        }
        //20 22 24 26 28 30 32 34 36 38 40

    ?>


    <?php
        // stampare a video tutta la tabellina del 2 ....

        // 2 * 0 = 0
        // 2 * 1 = 2
        // .... .

        // 2 * 10 = 20


        echo "esercizio tabellina";
        echo "<br><br>";

        $i = 0;

        while($i <= 10){
            echo "2 * $i  => " . ($i * 2 ) . " " . "<br>";
            $i++;
        }
    ?>

    <?php

        //creare un programma che dati 2 calcoli la potenza 

        $base = 2;
        $esponente = 3 ;

        // $ris = 8 ;  2 * 2 * 2

        echo $base ** $esponente;
        echo "<br><br><br>";

        $i = 0;
        $ris = 1 ; 

        while($i < $esponente){
            $ris *= $base ;   // $ris = $ris * base;

            $i++;
        }

        echo $ris;
        /**
         * 
         * 
         * 
         * 
         */


    ?>


    <?php
        echo "<br><br>";
        echo "esercizio sommatoria";
        $i = 1;
        $somma = 0;
        while($i <= 10 ){
            $somma += $i;
            $i++;
        }
        echo "la somma vale $somma";
    ?>

    <?php
        //inizializzare una variabile con un valore maggiore di 0
        // calcolare il fattoriale del numero.

        // esempio 5! = 5 * 4 * 3 * 2 * 1 = 120
        //           3! = 3 * 2 * 1 
        //           2! = 2 * 1 

        $numero = 5;

        echo "fattoriale di $numero .....";


        $i = 1;
        $risultato_fattoriale = 1;

        while($i <= $numero){

            $risultato_fattoriale *= $numero;
            $numero--;
        }

        echo "fattoriale vale $risultato_fattoriale"
        // 1 <=5
        // fatt = 1 * 5
        // 1 <= 4
        // fatt = 1 * 5 * 4

    ?>

    <br><br><br>



    <?php

        $numero = 2; // partenza della tabellina
        $i = 1;

        while($i <= 4){

            //mi fa il calcolo della tabellina i-esima
            $j = 0 ;
            while($j <= 10){

                echo "$numero * $j" . " == " . ($numero * $j) . "<br>";
                $j++;
            }

            $numero++;
            echo "<br>";
            $i++;
        }

    ?>







</body>
</html>