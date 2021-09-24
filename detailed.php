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
    $imageValue = filter_input(INPUT_POST, 'imageValue');
    // $imageValue = $_GET['imageValue'];

    // $query = 'SELECT course.courseID, course.courseTitle, course.credit, 
    //             book.bookTitle, 
    //             book.price, 
    //             authorbook.author, authorbook.book,
    //             book.publisher,
    //             book.isbn13
    //             book.edition,
    //             book.length, 
    //             book.description
    //             FROM course 
    //             INNER JOIN authorbook  
    //             on authorbook.book = book.isbn13
    //             INNER JOIN book
    //             on book.publisher = authorbook.author
    //             LIMIT 1';

    $query = 'SELECT course, book
                FROM coursebook
                WHERE book = :book';
                $statement = $db->prepare($query);
                $coursebook_book = $imageValue;
                $statement->bindValue(':book', $coursebook_book);
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

    <p>
        <?php echo $imageValue; ?>
    </p>
    <table border=“1”>
        <tr>
            <td>
                <img src="images/<?php echo $imageValue;?>" alt="">
            </td>
            <td>
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <p>For course: <?php echo $imageValue;?></p>
                    
                </div>
            </td>
        </tr>
        <tr>

        </tr>
    </table>

<!-- Footer -->
<?php
    include_once 'footer.php';
?>