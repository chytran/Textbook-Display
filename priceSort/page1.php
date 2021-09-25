<?php
    include_once '../header.php';
?>
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
                ORDER BY book.price
                LIMIT 1 OFFSET 0';
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
                ORDER BY book.price
                LIMIT 1 OFFSET 3';
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
                ORDER BY book.price
                LIMIT 1 OFFSET 5';
    $statement = $db->prepare($query3);
    // $author_id = 1;
    // $statement->bindValue(':author_id', $author_id);
    $statement->execute();

    // fetchAll() gets all rows from the prepared query statement
    $products3 = $statement->fetchAll();
    $statement->closeCursor();

    // Query 4
    $query4 = 'SELECT course.courseTitle, course.credit, course.courseID,
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
                ORDER BY book.price
                LIMIT 1 OFFSET 10';
    $statement = $db->prepare($query4);
    // $author_id = 1;
    // $statement->bindValue(':author_id', $author_id);
    $statement->execute();

    // fetchAll() gets all rows from the prepared query statement
    $products4 = $statement->fetchAll();
    $statement->closeCursor();

    // Query 5
    $query5 = 'SELECT course.courseTitle, course.credit, course.courseID,
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
                ORDER BY book.price
                LIMIT 1 OFFSET 14';
    $statement = $db->prepare($query5);
    // $author_id = 1;
    // $statement->bindValue(':author_id', $author_id);
    $statement->execute();

    // fetchAll() gets all rows from the prepared query statement
    $products5 = $statement->fetchAll();
    $statement->closeCursor();

    ?>
        <table border=“1”>
            <tr style="background-color: #99CCFF;">
                <td style="text-decoration=underline;"><a href="../index.php">Course</a></td>
                <td>Course title</td>
                <td>Book Image</td>
                <td>Book Title</td>
                <td style="text-decoration=underline;"><a href="page1.php">Price</a></td>
            </tr>
            <?php foreach ($products as $product) { ?>
            <tr>
                
                <!-- course #, course title, book image, book title, price -->
                <td><?php echo $product['courseID'] . ' (' . $product['credit'] . ')'; ?></td>
                <td><?php echo $product['courseTitle']; ?></td>
                <td> 
                    <?php if ($product['courseID'] == 'IS 424'){ ?>
                        <img src="../images/<?php echo '9781890774448' . '.jpg'; ?>" alt=""><a href=""></a>
                        <img src="../images/<?php echo '9781890774561' . '.jpg'; ?>" alt=""><a href=""></a>
                    <?php } else { ?>
                        <?php
                            include '../formPrice.php';
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
                        <img src="../images/<?php echo '9781890774448' . '.jpg'; ?>" alt=""><a href=""></a>
                        <img src="../images/<?php echo '9781890774561' . '.jpg'; ?>" alt=""><a href=""></a>
                    <?php } else { ?>
                        <?php
                            include '../formPrice.php';
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
                        <img src="../images/<?php echo '9781890774448' . '.jpg'; ?>" alt=""><a href=""></a>
                        <img src="../images/<?php echo '9781890774561' . '.jpg'; ?>" alt=""><a href=""></a>
                    <?php } else { ?>
                        <?php
                            include '../formPrice.php';
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

            <!-- 4th -->
            <?php foreach ($products4 as $product) { ?>
            <tr>
                
                <!-- course #, course title, book image, book title, price -->
                <td><?php echo $product['courseID'] . ' (' . $product['credit'] . ')'; ?></td>
                <td><?php echo $product['courseTitle']; ?></td>
                <td> 
                    <?php if ($product['courseID'] == 'IS 424'){ ?>
                        <img src="../images/<?php echo '9781890774448' . '.jpg'; ?>" alt=""><a href=""></a>
                        <img src="../images/<?php echo '9781890774561' . '.jpg'; ?>" alt=""><a href=""></a>
                    <?php } else { ?>
                        <?php
                            include '../formPrice.php';
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

            <!-- 5th -->
            <?php foreach ($products5 as $product) { ?>
            <tr>
                
                <!-- course #, course title, book image, book title, price -->
                <td><?php echo $product['courseID'] . ' (' . $product['credit'] . ')'; ?></td>
                <td><?php echo $product['courseTitle']; ?></td>
                <td> 
                    <?php if ($product['courseID'] == 'IS 424'){ ?>
                        <form action="../detailed.php" method="POST">
                            <input type="hidden" name="courseTitle" value="<?php echo $product['courseTitle']; ?>">
                            <input type="hidden" name="bookTitle" value="<?php echo $product['bookTitle']; ?>">
                            <input type="hidden" name="credit" value="<?php echo $product['credit'] ?>">
                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                            <input type="hidden" name="author" value="<?php echo $product['firstName'] . ' ' . $product['lastName']; ?>">
                            <input type="hidden" name="publisher" value="<?php echo $product['publisher']; ?>">
                            <input type="hidden" name="edition" value="<?php echo $product['edition']; ?>">
                            <input type="hidden" name="publishDate" value="<?php echo date("Y/m/d", strtotime($product["publishDate"])); ?>">
                            <input type="hidden" name="length" value="<?php echo $product['length']; ?>">
                            <input type="hidden" name="description" value="<?php echo $product['description']; ?>">
                            <input type="hidden" name="imageValue" value="<?php echo '9781890774448';?>">
                            <input type="image" src="../images/9781890774448.jpg">
                        </form>

                        <form action="../detailed.php" method="POST">
                            <input type="hidden" name="courseTitle" value="<?php echo 'Advanced Java Programming for Business'; ?>">
                            <input type="hidden" name="bookTitle" value="<?php echo "Murach's PHP and MySQL"; ?>">
                            <input type="hidden" name="credit" value="<?php echo '4'?>">
                            <input type="hidden" name="price" value="<?php echo '34.34'; ?>">
                            <input type="hidden" name="author" value="<?php echo 'Joel Murach'; ?>">
                            <input type="hidden" name="publisher" value="<?php echo 'Mike Murach & Associates Inc'; ?>">
                            <input type="hidden" name="edition" value="<?php echo '1st.'; ?>">
                            <input type="hidden" name="publishDate" value="<?php echo '2010/11/23'; ?>">
                            <input type="hidden" name="length" value="<?php echo '840'; ?>">
                            <input type="hidden" name="description" value="<?php echo "This book was developed by the same team that authored Murach's JavaScript and DOM Scripting, and it has the same strong content organization that lets you focus on what you need to know, when you need to know it."; ?>">
                            <input type="hidden" name="imageValue" value="<?php echo '9781890774561';?>">
                            <input type="image" src="../images/9781890774561.jpg">
                        </form>
                    <?php } else { ?>
                        <?php
                            include '../formPrice.php';
                        ?>
                    <?php } ?>

                
                </td>
                <td>
                    <?php if ($product['courseID'] == 'IS 424'){ ?>
                        <div>
                            Murach's Java Servlets and JSP
                            <br>
                            Murach's PHP and MySQL
                        </div>
                    <?php } else { ?>
                        <?php echo $product['bookTitle']; ?>
                    <?php } ?>

                </td>
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
            <a href="page1.php">1</a>
            <a href="page2.php">2</a>
            <a href="page3.php">3</a>
            <a href="page4.php">4</a>
            <a href="page5.php">5</a>
        </div>
<?php../
    include_once '../footer.php';
?>