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
    <input type="hidden" name="imageValue" value="<?php echo $product['book'];?>">
    <input type="image" src="../images/<?php echo $product['book'] . '.jpg'; ?>">
</form>