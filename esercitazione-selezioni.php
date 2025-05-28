<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESERCITAZIONI SULLE SELEZIONI</title>
</head>
<body>
   
    <h1>Esercitazione Sulle selezioni</h1>

    <?php

        
        echo "Benvenuto nelle selezioni ";
        //primo esercizio ---
        /*
            creare 2 variabili di tipo interno chiamate numero1 , numero2 ,
            assegnare dei valori a queste variabili
            stampare a video il valore piu grande tra i due 

            Es : 10 e 20 ----> 20 

        */


        $numero1 = 10000;
        $numero2 = 20;

        if ($numero1 > $numero2) {
            echo $numero1;
        }
        else{
            echo $numero2;
        }


        //creare una variabile e stampare a video se è pari oppure dispari 

        // numero % 2 == 0 

        echo "<br>";

        $my_value = 31;

        if($my_value % 2 == 0 ){
            echo "<b style='color:red'>numero pari</b>";

            //echo "$my_value";
        }
        else{
            echo "<b style='color:blue'>numero dispari</b>";
        }

    ?>


    <!-- questo è un commento in html -->

    <?php
        /*
            creare 3 variabili di tipo intero 
            $num1 , $num2 , $num3
            stampare a video la maggiore tra le 3 variabili 

            Es : 10 , 3 , 50 ----> 50 // tips and && 
        */

        $num1 = 150;
        $num2 = 6665;
        $num3 = 50;

        if ($num1 > $num2  && $num1 > $num3){
            echo $num1;
        }
        else if($num2 > $num1  && $num2 > $num3){
            echo $num2;
        }
        else{
            echo $num3;
        }


     

    ?>


    <!-- verifica che possiedi la maggiore età -->

    <?php

        /*
        Scrivi un programma che inizialli una variabile con l'età 
        Il programma deve verificare se l'utente è maggiorenne (18 anni o più) e stampare un messaggio appropriato.
        */
        $eta = 19;
        // operatore ternario
        //  ( condizione) ? situazione_true : situazione_false
        $ris = ($eta >= 18) ?  "maggiore di 18" :  "no";
        echo $ris 
        
    ?>


    <?php

        /*
        Crea un programma che chieda all'utente di inserire un voto (da 0 a 100) e stampi la classificazione
        corrispondente: "Insufficiente" (0-59), "Sufficiente" (60-69), "Buono" (70-89), "Ottimo" (90-100).
        */

        $voto = 30;
    
        /*
        if($voto <=59){

        }
        else if($voto >= 60 &&  $voto <= 70){
            //
        }
        */

        //utilizzo dello swith 


        switch($voto){
            case($voto >= 0 && $voto < 60):
                echo "insuff";
                break;
            case($voto >= 60 && $voto < 70 ):
                echo "suff";
                break;
            case($voto >= 70 && $voto < 90 ):
                echo "buono";
                break;
            case($voto >= 90 && $voto < 100 ):
                echo "ottimo";
                break;
            default:
                echo "invalid score";
                break;
        }


    ?>

    <?php

    //Scrivi un programma che chieda all'utente di inserire l'età e il giorno della settimana in cui desidera andare al cinema.
    //Il programma deve calcolare il prezzo del biglietto in base alle seguenti regole:
    /*


    Prezzo standard: €10
    Sconto per bambini (0-12 anni): €5
    Sconto per anziani (65 anni e oltre): €7
    Sconto del 20% per biglietti acquistati il martedì

    !=

    */

        echo "esercizio con swith case ";
        echo "<br><br>";
        $eta = 18;
        $day = "martedi";

        switch(true){
            case ($day == "martedi"):
                echo "8";
                break;
            case ($eta > 0 && $eta <= 12):
                echo "5";
                break;
            case ($eta > 65 ):
                echo "7";
                break;
            default :
                echo "10";
                break;
        }

    ?>






</body>
</html>