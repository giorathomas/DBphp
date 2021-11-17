<?php

include "connessione.php";

if(!$connessione ->query("CREATE TABLE IF NOT EXISTS agenda (
    id int(4) NOT NULL AUTO_INCREMENT,
    nome varchar(30) NOT NULL,
    cognome varchar(30) NOT NULL,
    PRIMARY KEY (id)
)")){
    echo "Errore della query: ".$connessione->error . ".";
} else {
    echo "Tabella creata correttamente.";
}

$connessione ->close();

