<html>
    <head>
        <meta charset="UTF-8">
        <title>Product records</title>
    </head>
    <body>
        <?php 
        $dsn = 'mysql:host=localhost:8111;dbname=BookCatalog';
        $username = 'mgs_user';
        $password = 'pa55word';

        // creates a PDO database connection object
        $db = new PDO($dsn, $username, $password); 

        $query = 'SELECT course.courseID, course.courseTitle, course.credit, book.bookTitle, book.price
                  FROM course
                  CROSS JOIN book
                  WHERE authorID = :author_id;';
        $statement = $db->prepare($query);
        $author_id = 1;
        $statement->bindValue(':author_id', $author_id);
        $statement->execute();

        // fetchAll() gets all rows from the prepared query statement
        $products = $statement->fetchAll();
        $statement->closeCursor();
        ?>
        <table border=“1”>
        <?php foreach ($products as $product) { ?>
        <tr>
            <!-- Course #, Course title, Book image, Book Title, Price -->
            <td><?php echo $product['firstName']; ?></td>
            <td><?php echo $product['lastName']; ?></td>
        </tr>
        <?php } ?>
        </table>
    </body>
</html>