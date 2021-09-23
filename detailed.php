<!-- Call header -->
<?php
    include_once 'header.php';
?>

<!-- Call database -->
<?php
    
    $dsn = 'mysql:host=localhost:8111;dbname=BookCatalog';
    // $dsn = 'mysql:host=localhost;dbname=BookCatalog';
    $username = 'mgs_user';
    $password = 'pa55word';

    // creates a PDO database connection object
    $db = new PDO($dsn, $username, $password); 

    // Get image result from submission
    // $imageValue = filter_input(INPUT_POST, 'imageValue');
    $imageValue = $_GET['imageValue'];

    $query = 'SELECT course.courseID, course.courseTitle, course.credit, 
                book.bookTitle, 
                book.price, 
                authorbook.author = :author_id, authorbook.book
                book.publisher,
                book.edition,
                book.length,
                book.isbn13, 
                book.description
                FROM course 
                INNER JOIN authorbook  
                on authorbook.book = book.isbn13
                INNER JOIN book
                on book.publisher = authorbook.author
                LIMIT 1';
    $statement = $db->prepare($query);
    $author_id = 1;
    $statement->bindValue(':author_id', $author_id);
    $statement->execute();

    // fetchAll() gets all rows from the prepared query statement
    $products = $statement->fetchAll();
    $statement->closeCursor();
    ?>

    <!-- courseID Course Title Credits -->
    <!-- Book Title -->
    <!-- Price -->
    <!-- Author -->
    <!-- Publisher -->
    <!-- Edition -->
    <!-- Length -->
    <!-- ISB13 -->

    <!-- Production Description -->
    SELECT * FROM 

<!-- Footer -->
<?php
    include_once 'footer.php';
?>