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


    <div class="container">

        <div class="row" style="margin-top: 50px;">

            <div class="col-md-6">

                <h2>Inserisci un record</h2>



                <form action="gestionale.php" method="get">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Inserisci il tuo nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="cognome" class="form-label">Cognome</label>
                        <input type="text" name="cognome" class="form-control" id="cognome" placeholder="Inserisci il tuo cognome" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono<" class="form-label">telefono</label>
                        <input type="text" name="telefono" class="form-control" id="telefono<" placeholder="Inserisci il tuo telefono" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>

            </div>

            <div class="col-md-6">
                <h2>Elimina un record</h2>



                <form action="gestionale.php" method="get">
                    <div class="mb-3">
                        <label for="id" class="form-label">id</label>
                        <input type="id" name="id" class="form-control" id="id" placeholder="Inserisci id da eliminare" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Elimina id</button>
                </form>


            </div>


            <div class="col-md-12">






                <hr>



                <!--Display dall value -->

                <?php

                require "data-connector.php";

                $data_manager = new Data_connector("192.168.1.5", "root", "corso", "db");



                if (isset($_GET["nome"], $_GET["cognome"], $_GET["telefono"])) {

                    //inserisco i valori nel database;
                    $data_manager->insertPersonale($_GET["nome"], $_GET["cognome"], $_GET["telefono"]);

                    header("Location: " . $_SERVER['PHP_SELF']);
                    exit(); // Always call exit after a header redirect
                }


                if (isset($_GET["id"])) {
                    //elimina uno specifico elemento

                    $data_manager->deletePersonaleById($_GET["id"]);
                }

                echo "<br>";
                $data_manager->readAllPersonale();



                ?>





            </div>
        </div>

    </div>








</body>

</html>