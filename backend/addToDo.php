<?php

//Recupero tutti i todo attualmetne esistenti
$allTodosJSON = file_get_contents('db.json');

//Trasformo la stringa JSON corrispondente ai todo
//attualmente in essere in un array di array associativi
// se mettiamo true si tradofrma in array adociativi altrimenti (false) rende oggetti
$allTodos = json_decode($allTodosJSON, true);


// creare il nuovo todo
$newTodo =[
    'task'=> $_POST['task'],
    'completed' => false
];

//eseguo il push di newTodo all'interno di alltodos
// Aggiungere nell'array il buovo todo
$allTodos[] = $newTodo;

//ritrasformo l'array in una stringa JSON

$allTodosWithNewJSON = json_encode($allTodos);

//Adesso dobbiamo scrivere la nuova stringa aggiornata all'interno del file JSON

file_put_contents('db.json', $allTodosWithNewJSON);

var_dump($_POST);