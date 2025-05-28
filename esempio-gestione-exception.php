<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php


    /**
     * 
     * serve per verificare le scorte del magazzino
     * se se scorte sono sotto un certo livello
     * viene lanciata una exception....
     * 
     * @param mixed $scorte
     * @return void
     */
    function verificaScorteMagazzino($scorte) {

        try{

            $soglia_limite = 10;

            if($scorte <= $soglia_limite){
                throw new Exception("le scorte stanno finendo");
            }

            echo "le scorte vanno bene!!!";

        } catch(Exception ){
            echo "---- le scorte stanno finendo -----";

            //chiamare altre funzioni......
        }

       

    }

    verificaScorteMagazzino(5);


?>


</body>
</html>