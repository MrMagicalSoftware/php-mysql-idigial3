<?php


class Data_connector
{

    private string $servername ; //= "192.168.1.5"; // l'indirizzo IP del contenitore MySQL
    private string $username ; // "root"; //  il tuo nome utente
    private string $password ; //"corso"; la tua password
    private string  $dbname ; // "db"; il nome del database a cui vuoi connetterti
    private $conn; // è un object di tipo mysqli

    public function __construct($servername ,$username, $password ,  $dbname ){
        $this->servername = $servername; // dovrei richiamare il metodo setServerName()
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->conn = new mysqli( $this->servername , $this->username ,    $this->password  ,  $this->dbname );
    }

    public function check_connection(){
        if ($this->conn->connect_error) {
            die("Connessione fallita: " . $this->conn->connect_error);
        }
        echo "OK CHECK SUBITO ";
    }


    public function createTable() {
        $sql = "CREATE TABLE IF NOT EXISTS Personale (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(50) NOT NULL,
            cognome VARCHAR(50) NOT NULL,
            telefono VARCHAR(15) NOT NULL
        )";

        if ($this->conn->query($sql) === TRUE) {
            echo "Tabella 'Personale' creata con successo.";
        } else {
            echo "Errore nella creazione della tabella: " . $this->conn->error;
        }
    }


    public function close(){
        $this->conn->close();
    }


    public function insertPersonale($nome, $cognome, $telefono) {
        $stmt = $this->conn->prepare("INSERT INTO Personale (nome, cognome, telefono) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $cognome, $telefono);

        if ($stmt->execute()) {
            echo "Nuovo record inserito con successo.";
        } else {
            echo "Errore nell'inserimento del record: " . $stmt->error;
        }

        $stmt->close();
    }



    public function readAllPersonale() {
        $sql = "SELECT * FROM Personale";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            // Output dei dati di ogni riga
            while ($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - Cognome: " . $row["cognome"] . " - Telefono: " . $row["telefono"] . "<br>";
            }
        } else {
            echo "Nessun record trovato.";
        }
    }



    public function deletePersonaleById($id) {
        $stmt = $this->conn->prepare("DELETE FROM Personale WHERE id = ?");
        $stmt->bind_param("i", $id); // "i" indica che il parametro è un intero

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "Record con ID $id cancellato con successo.";
            } else {
                echo "Nessun record trovato con ID $id.";
            }
        } else {
            echo "Errore nella cancellazione del record: " . $stmt->error;
        }

        $stmt->close();
    }











}





?>