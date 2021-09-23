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
                <td style="text-decoration=underline;"><a href="priceSort/page1.php"></a></td>
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
                        <img src="images/<?php echo $product['isbn13'] . '.jpg'; ?>" alt=""><a href=""></a>
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