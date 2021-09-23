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
    // $imageValue = $_GET['imageValue'];

    $query = 'SELECT course.courseID, course.courseTitle, course.credit, coursebook.
                FROM course 
                INNER JOIN courseBook  
                on course.courseID = coursebook.course
                INNER JOIN book
                on book.isbn13 = coursebook.book
                ORDER BY course.courseID
                LIMIT 5';
    $statement = $db->prepare($query);
    // $author_id = 1;
    // $statement->bindValue(':author_id', $author_id);
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