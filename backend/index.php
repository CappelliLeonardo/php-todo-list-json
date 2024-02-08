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

// Dico al client che la risposta contiene un json
header('Content-Type: application/json');

// Rispondo con il json preso dal file
echo $jsonContent;
?>