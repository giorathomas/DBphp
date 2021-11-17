<?php

include "connessione.php";

if(!$connessione ->query("UPDATE agenda SET nome='Lio' WHERE id=1")){
    echo "Errore della query UPDATE: $connessione->error";
    exit();
} else {
    if(!$result = $connessione ->query("SELECT nome, cognome FROM agenda WHERE id=1")){
        echo "Errore della query: $connessione->error";
        exit();
    } else {
        if($result->num_rows>0){
            while ($row=$result->fetch_array(MYSQLI_ASSOC)){
                echo "$row[nome] $row[cognome] <br>";
            }
            $result->close();
        }
    }
}

$connessione->close();
