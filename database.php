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

// course table information (courseID, courseTitle, credit)
$query = 'SELECT courseID, courseTitle, credit FROM course WHERE courseID = :course_id';
$statement = $db->prepare($query);
$course_id = 1; //hard-code course id
$statement->bindValue(':course_id', $course_id);
$statement->execute();

// fetchAll() gets all row from the prepare query statement
$products = $statement->fetchAll();
$statement->closeCursor();
?>



