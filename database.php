<?php 
    $dsn = 'mysql:host=localhost:8111;dbname=BookCatalog';
    // $dsn = 'mysql:host=localhost;dbname=BookCatalog';
    $username = 'mgs_user';
    $password = 'pa55word';

    // creates a PDO database connection object
    $db = new PDO($dsn, $username, $password); 

    $query = 'SELECT course.courseTitle, course.credit, course.courseID,
                book.isbn13, book.price, book.bookTitle, book.publisher, book.edition, book.length, book.description, book.publishDate,
                coursebook.book,
                publisher.publisherID, publisher.publisher,
                authorbook.author, authorbook.book,
                author.authorID, author.firstName, author.lastName
                FROM course 
                INNER JOIN coursebook  
                on coursebook.course = course.courseID 
                INNER JOIN book
                on book.isbn13 = coursebook.book
                INNER JOIN publisher
                on book.publisher = publisher.publisherID  
                INNER JOIN authorbook
                on authorbook.book = book.isbn13 
                INNER JOIN author
                on author.authorID = authorbook.author
                ORDER BY course.courseID
                LIMIT 3 OFFSET 0
                
                ';
    $statement = $db->prepare($query);
    // $author_id = 1;
    // $statement->bindValue(':author_id', $author_id);
    $statement->execute();

    // fetchAll() gets all rows from the prepared query statement
    $products = $statement->fetchAll();
    $statement->closeCursor();

    $query1 = 'SELECT course.courseTitle, course.credit, course.courseID,
                book.isbn13, book.price, book.bookTitle, book.publisher, book.edition, book.length, book.description, book.publishDate,
                coursebook.book,
                publisher.publisherID, publisher.publisher,
                authorbook.author, authorbook.book,
                author.authorID, author.firstName, author.lastName
                FROM course 
                INNER JOIN coursebook  
                on coursebook.course = course.courseID 
                INNER JOIN book
                on book.isbn13 = coursebook.book
                INNER JOIN publisher
                on book.publisher = publisher.publisherID  
                INNER JOIN authorbook
                on authorbook.book = book.isbn13 
                INNER JOIN author
                on author.authorID = authorbook.author
                ORDER BY course.courseID
                LIMIT 2 OFFSET 5
                
                ';
    $statement = $db->prepare($query1);
    // $author_id = 1;
    // $statement->bindValue(':author_id', $author_id);
    $statement->execute();

    // fetchAll() gets all rows from the prepared query statement
    $products2 = $statement->fetchAll();
    $statement->closeCursor();
    ?>

