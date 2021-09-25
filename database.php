<?php 
    $dsn = 'mysql:host=localhost:8111;dbname=BookCatalog';
    // $dsn = 'mysql:host=localhost;dbname=BookCatalog';
    $username = 'php';
    $password = 'php';

    // creates a PDO database connection object
    $db = new PDO($dsn, $username, $password); 



