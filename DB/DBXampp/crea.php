<?php 
/*
  creazione di un database con MySQLi.
  La prima operazione richiesta sarà quella relativa alla definizione
  del blocco dei parametri per la connessione
*/
// nome di host
$host = "localhost";
// username dell'utente in connessione
$user = "root";
// password dell'utente
$password = "";

// stringa di connessione al DBMS
$connessione = new mysqli($host, $user, $password);

// verifica su eventuali errori di connessione
if ($connessione->connect_errno) {
    echo "Connessione fallita: ". $connessione->connect_error . ".";
    exit();
}

// esecuzione della query per la creazione del database
if (!$connessione->query("CREATE DATABASE nuova_rubrica")) {
    echo "Errore della query: " . $connessione->error . ".";
}else{
    echo "Databese creato correttamente.";
}

// chiusura della connessione
$connessione->close();
?>
