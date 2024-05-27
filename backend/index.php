<?php

/* 
    ALTERNATIVA 2: i dati li prendo da un file JSON
*/

// Recupero il contenuto del file contenente i dati
$jsonContent = file_get_contents('db.json');

// // Trasformo la stringa in una struttura dati utilizzabile in PHP
// $data = json_decode($jsonContent, true);

// // Qui dentro metto tutti gli elemtni "validi"
// $elements = [];
// foreach ($data as $index) {
//     if (
//         isset($_GET['task']) == false
//         ||
//         $_GET['task'] == ''
//         ||
//         strtolower($index['task']) == strtolower($_GET['task'])
//     ) {
//         $elements[] = $index;
//     }
// }

// Permetti l'accesso da qualsiasi origine
header("Access-Control-Allow-Origin: *");

// Permetti specifici metodi HTTP
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

// Permetti specifiche intestazioni
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Il tuo codice esistente qui

// Rispondi alla richiesta preflight OPTIONS
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    // Ritorna solo le intestazioni e non il contenuto
    exit(0);
}
// Rispondo con il json preso dal file
echo $jsonContent;
?>