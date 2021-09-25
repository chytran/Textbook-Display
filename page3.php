<?php
    include_once 'header.php';
?>
<?php
    include_once 'database.php';
?>
<?php
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
    LIMIT 2 OFFSET 21';
    $statement = $db->prepare($query);
    // $author_id = 1;
    // $statement->bindValue(':author_id', $author_id);
    $statement->execute();

    // fetchAll() gets all rows from the prepared query statement
    $products = $statement->fetchAll();
    $statement->closeCursor();

    // Query 2
    $query2 = 'SELECT course.courseTitle, course.credit, course.courseID,
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
    LIMIT 2 OFFSET 24';
    $statement = $db->prepare($query2);
    // $author_id = 1;
    // $statement->bindValue(':author_id', $author_id);
    $statement->execute();

    // fetchAll() gets all rows from the prepared query statement
    $products2 = $statement->fetchAll();
    $statement->closeCursor();

    // Query 3
    $query3 = 'SELECT course.courseTitle, course.credit, course.courseID,
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
    LIMIT 1 OFFSET 28';
    $statement = $db->prepare($query3);
    // $author_id = 1;
    // $statement->bindValue(':author_id', $author_id);
    $statement->execute();

    // fetchAll() gets all rows from the prepared query statement
    $products3 = $statement->fetchAll();
    $statement->closeCursor();

    ?>
        <table border=“1”>
            <tr style="background-color: #99CCFF;">
                <td style="text-decoration=underline;"><a href="courseSort/page1.php">Course #</a></td>
                <td>Course title</td>
                <td>Book Image</td>
                <td>Book Title</td>
                <td style="text-decoration=underline;"><a href="priceSort/page1.php">Price</a></td>
            </tr>
            <?php foreach ($products as $product) { ?>
            <tr>
                
                <!-- course #, course title, book image, book title, price -->
                <td><?php echo $product['courseID'] . ' (' . $product['credit'] . ')'; ?></td>
                <td><?php echo $product['courseTitle']; ?></td>
                <td> 
                    <?php if ($product['courseID'] == 'IS 424'){ ?>
                        <img src="..images/<?php echo '9781890774448' . '.jpg'; ?>" alt=""><a href=""></a>
                        <img src="..images/<?php echo '9781890774561' . '.jpg'; ?>" alt=""><a href=""></a>
                    <?php } else { ?>
                        <?php
                            include 'formMain.php';
                        ?>
                    <?php } ?>

                
                </td>
                <td><?php echo $product['bookTitle']; ?></td>
                <td>
                    <?php if ($product['courseID'] == 'IS 424'){ ?>
                        <div>
                            $33.51
                            <br>
                            $34.34
                        </div>
                    <?php } else { ?>
                        <?php echo '$' . $product['price']; ?>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>

            <!-- 2nd -->
            <?php foreach ($products2 as $product) { ?>
            <tr>
                
                <!-- course #, course title, book image, book title, price -->
                <td><?php echo $product['courseID'] . ' (' . $product['credit'] . ')'; ?></td>
                <td><?php echo $product['courseTitle']; ?></td>
                <td> 
                    <?php if ($product['courseID'] == 'IS 424'){ ?>
                        <img src="images/<?php echo '9781890774448' . '.jpg'; ?>" alt=""><a href=""></a>
                        <img src="images/<?php echo '9781890774561' . '.jpg'; ?>" alt=""><a href=""></a>
                    <?php } else { ?>
                        <?php
                            include 'formMain.php';
                        ?>
                    <?php } ?>

                
                </td>
                <td><?php echo $product['bookTitle']; ?></td>
                <td>
                    <?php if ($product['courseID'] == 'IS 424'){ ?>
                        <div>
                            $33.51
                            <br>
                            $34.34
                        </div>
                    <?php } else { ?>
                        <?php echo '$' . $product['price']; ?>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>

            <!-- 3rd -->
            <?php foreach ($products3 as $product) { ?>
            <tr>
                
                <!-- course #, course title, book image, book title, price -->
                <td><?php echo $product['courseID'] . ' (' . $product['credit'] . ')'; ?></td>
                <td><?php echo $product['courseTitle']; ?></td>
                <td> 
                    <?php if ($product['courseID'] == 'IS 424'){ ?>
                        <img src="images/<?php echo '9781890774448' . '.jpg'; ?>" alt=""><a href=""></a>
                        <img src="images/<?php echo '9781890774561' . '.jpg'; ?>" alt=""><a href=""></a>
                    <?php } else { ?>
                        <?php
                            include 'formMain.php';
                        ?>
                    <?php } ?>

                
                </td>
                <td><?php echo $product['bookTitle']; ?></td>
                <td>
                    <?php if ($product['courseID'] == 'IS 424'){ ?>
                        <div>
                            $33.51
                            <br>
                            $34.34
                        </div>
                    <?php } else { ?>
                        <?php echo '$' . $product['price']; ?>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>

            
        </table>
        <div class="number__container">
            <a href="index.php">1</a>
            <a href="page2.php">2</a>
            <a href="page3.php">3</a>
            <a href="page4.php">4</a>
        </div>
<?php
    include_once 'footer.php';
?>