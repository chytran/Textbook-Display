<?php 
    $dsn = 'mysql:host=localhost:8111;dbname=BookCatalog';
    // $dsn = 'mysql:host=localhost;dbname=BookCatalog';
    $username = 'mgs_user';
    $password = 'pa55word';

    // creates a PDO database connection object
    $db = new PDO($dsn, $username, $password); 

    $query = 'SELECT course.courseTitle, course.credit, book.isbn13, book.price, book.bookTitle, coursebook.course, coursebook.book
                FROM course 
                INNER JOIN courseBook  
                on course.courseID = coursebook.course
                INNER JOIN book
                on book.isbn13 = coursebook.book';
    $statement = $db->prepare($query);
    // $author_id = 1;
    // $statement->bindValue(':author_id', $author_id);
    $statement->execute();

    // fetchAll() gets all rows from the prepared query statement
    $products = $statement->fetchAll();
    $statement->closeCursor();
    ?>

