<?php

$dsn = 'mysql:host=localhost:8111;dbname=BookCatalog';
$username = 'chytran';
$password = 'nYMnpgWyUzvfR29S';

try {
    $db = new PDO($dsn, $username, $password);
    foreach($db->query('SELECT * FROM author') as $row) {
        print_r($row);
    }
    $db = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


