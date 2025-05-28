<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>


    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <?php

                echo "Esercitazione su array  for foreach";

                $insieme = [10, 3, 6, 5, 2];
                //creare uno script che conta quanti sono i numeri pari...
                $conta_pari = 0;

                for ($i = 0; $i < count($insieme); $i++) {
                    if ($insieme[$i] % 2 == 0) {
                        $conta_pari++;
                    }
                }

                echo "i pari nel vettore sono " . $conta_pari;


                ?>

                <?php
                //dato un vettore ... 

                $vett = [10, 2, 4, 1];
                // stampare a video la somma di tutti gli elementi del vettore

                $somma_totale = 0;

                for ($i = 0; $i < count($vett); $i++) {
                    $somma_totale += $vett[$i];  // $somma_totale = $somma_totale + nuova
                }

                echo "la somma totale vale " . $somma_totale;


                //versione con il foreach
                $somma_totale = 0;
                foreach ($vett as $my_num) {
                    $somma_totale += $my_num;
                }
                echo "<br>" . "la somma totale con il foreach vale  $somma_totale";

                function saluta()
                {
                    echo "<br>" . "ciao a tutti";
                }


                saluta();



                ?>

                






            </div>
        </div>
    </div>


</body>

</html>