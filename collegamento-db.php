<?php


/*
$servername = "192.168.1.5"; // o l'indirizzo IP del contenitore MySQL
$username = "root"; // o il tuo nome utente
$password = "corso"; // la tua password
$dbname = "db"; // il nome del database a cui vuoi connetterti


// Crea la connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controlla la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

echo "Connessione riuscita";

// operazioni di crud

// Chiudi la connessione
$conn->close();

*/

require 'data-connector.php';

//$dd = new Data_connector("192.168.1.5", "root" ,"corso","db");

$myData = new Data_connector("192.168.1.5", "root" ,"corso","db" );
$myData->check_connection();


//$myData->createTable();


//$myData->insertPersonale("luigi" , cognome: "luigini" ,telefono: "111000");



$myData->deletePersonaleById(1);
$myData->readAllPersonale();




$myData->close();






?>