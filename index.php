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

        $query = 'SELECT course.courseID, course.courseTitle, course.credit, book.isbn13, book.price, book.bookTitle 
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
            <tr style="background-color: #99CCFF;">
                <td style="text-decoration=underline;">Course #</td>
                <td>Course title</td>
                <td>Book Image</td>
                <td>Book Title</td>
                <td style="text-decoration=underline;">Price</td>
            </tr>
        <?php foreach ($products as $product) { ?>
        <tr>
            
            <!-- course #, course title, book image, book title, price -->
            <td><?php echo $product['courseID'] . ' (' . $product['credit'] . ')'; ?></td>
            <td><?php echo $product['courseTitle']; ?></td>
            <td><img src="images/<?php echo $product['isbn13'] . '.jpg'; ?>" alt=""></td>
            <td><?php echo $product['bookTitle']; ?></td>
            <td><?php echo '$' . $product['price']; ?></td>
        </tr>
        <?php } ?>
        </table>
    </body>
</html>