<?php
include "connessione.php";

if(!$connessione ->query("INSERT INTO agenda (nome, cognome)
                            VALUES ('Lionel','Messi'),('Cristiano','Ronaldo')")){
    echo "Errore della query: $connessione->error.";
} else {
    echo "Inserimenti effettuati correttamente";
}

$connessione->close();
