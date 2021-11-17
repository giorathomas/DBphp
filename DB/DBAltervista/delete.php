<?php

include "connessione.php";

if(!$result=$connessione->query("DELETE FROM agenda WHERE id=2")){
    echo "Errore della query: $connessione->error.";
    exit();
}

$connessione->close();
