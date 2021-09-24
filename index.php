<?php
    include_once 'header.php';
?>
        <?php
            include_once 'database.php' 

        ?>
        <table border=“1”>
            <tr style="background-color: #99CCFF;">
                <td style="text-decoration=underline;"><a href="courseSort/page1.php">Course</a></td>
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
                        <img src="images/<?php echo '9781890774448' . '.jpg'; ?>" alt=""><a href=""></a>
                        <img src="images/<?php echo '9781890774561' . '.jpg'; ?>" alt=""><a href=""></a>
                    <?php } else { ?>
                        <form action="detailed.php" method="POST">
                        <input type="hidden" name="courseTitle" value="<?php echo $product['courseTitle']; ?>">
                            <input type="hidden" name="bookTitle" value="<?php echo $product['bookTitle']; ?>">
                            <input type="hidden" name="credit" value="<?php echo $product['credit']; ?>">
                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                            <input type="hidden" name="author" value="<?php echo $product['firstName'] . ' ' . $product['lastName']; ?>">
                            <input type="hidden" name="publisher" value="<?php echo $product['publisher']; ?>">
                            <input type="hidden" name="edition" value="<?php echo $product['edition']; ?>">
                            <input type="hidden" name="publishDate" value="<?php echo $product['publishDate']; ?>">
                            <input type="hidden" name="length" value="<?php echo $product['length']; ?>">
                            <input type="hidden" name="imageValue" value="<?php echo $product['book'];?>">
                            <input type="image" src="images/<?php echo $product['book'] . '.jpg'; ?>">
                        </form>
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
                        <form action="detailed.php" method="POST">
                            <input type="hidden" name="courseTitle" value="<?php echo $product['courseTitle']; ?>">
                            <input type="hidden" name="bookTitle" value="<?php echo $product['bookTitle']; ?>">
                            <input type="hidden" name="credit" value="<?php echo $product['credit']; ?>">
                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                            <input type="hidden" name="author" value="<?php echo $product['firstName'] . ' ' . $product['lastName']; ?>">
                            <input type="hidden" name="publisher" value="<?php echo $product['publisher']; ?>">
                            <input type="hidden" name="edition" value="<?php echo $product['edition']; ?>">
                            <input type="hidden" name="publishDate" value="<?php echo $product['publishDate']; ?>">
                            <input type="hidden" name="length" value="<?php echo $product['length']; ?>">
                            <input type="hidden" name="imageValue" value="<?php echo $product['book'];?>">
                            <input type="image" src="images/<?php echo $product['book'] . '.jpg'; ?>">
                        </form>
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
            <a href="page5.php">5</a>
        </div>
<?php
    include_once 'footer.php';
?>