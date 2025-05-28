<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php


$lista_della_spesa =["item1","item2" ,"item3" ];


$index = 0 ;
while($index < count($lista_della_spesa) ){
    echo $lista_della_spesa[$index] . " ";
    $index++;
}


for($i = 0 ; $i < count($lista_della_spesa); $i++){
    echo $lista_della_spesa[$i] . " ";
}



?>




</body>
</html>