<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Elaboro form in php</h1>

<?php

   // $_GET['nome'];
   // $_GET['cognome'];
   // $_GET['eta'];


    $myName = $_GET['nome'];
    $myCognome =  $_GET['cognome'];
    $myAge =  $_GET['eta'];

    if($myAge >= 18){
        echo "la persona inserita puo accedere qui,....";
    }
    else{
        echo "la persona non può accedere";
    }


?>


</body>
</html>