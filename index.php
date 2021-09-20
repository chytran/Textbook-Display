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

        $query = 'SELECT course.courseID, course.courseTitle, course.credit 
                  FROM course
                  CROSS JOIN book';
        $statement = $db->prepare($query);
        // $author_id = 1;
        // $statement->bindValue(':author_id', $author_id);
        $statement->execute();

        // fetchAll() gets all rows from the prepared query statement
        $products = $statement->fetchAll();
        $statement->closeCursor();
        ?>
        <table border=“1”>
        <?php foreach ($products as $product) { ?>
        <tr>
            <!-- course #, course title, book image, book title, price -->
            <td><?php echo $product['courseID']; ?></td>
            <td><?php echo $product['courseTitle']; ?></td>
            <td><?php echo $product['credit']; ?></td>
        </tr>
        <?php } ?>
        </table>
    </body>
</html>