<?php
    include_once 'header.php';
?>
        <?php
            include_once 'database.php' 

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
                <td><img src="images/<?php echo $product['isbn13'] . '.jpg'; ?>" alt=""><a href=""></a></td>
                <td><?php echo $product['bookTitle']; ?></td>
                <td><?php echo '$' . $product['price']; ?></td>
            </tr>
            <?php } ?>
        </table>
<?php
    include_once 'footer.php';
?>