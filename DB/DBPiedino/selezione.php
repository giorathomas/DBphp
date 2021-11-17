<?php

include "connessione.php";

if(!$result = $connessione ->query("SELECT nome, cognome FROM agenda")){
    echo "Errore della query: $connessione->error.";
    exit();
} else {
    if($result->num_rows >0){
        while ($row=$result->fetch_array(MYSQLI_ASSOC)){
            echo "$row[nome] $row[cognome] <br>";
        }
        $result->close();
    }
}

$connessione->close();
