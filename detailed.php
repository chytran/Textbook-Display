<!-- Call header -->
<?php
    include_once 'header.php';
?>

<?php
    include 'database.php';
?>
<!-- Call database -->
<?php 

    // Get image result from submission
    $imageValue = filter_input(INPUT_POST, 'imageValue');
    $courseTitle = filter_input(INPUT_POST, 'courseTitle');
    $creditTime = filter_input(INPUT_POST, 'credit');
    $bookTitle = filter_input(INPUT_POST, 'bookTitle');
    $price = filter_input(INPUT_POST, 'price');
    $author = filter_input(INPUT_POST, 'author');
    $publisher = filter_input(INPUT_POST, 'publisher');
    $edition = filter_input(INPUT_POST, 'edition');
    $publishDate = filter_input(INPUT_POST, 'publishDate');
    $length= filter_input(INPUT_POST, 'length');
    $description= filter_input(INPUT_POST, 'description');
    
    // include_once 'author.php';
    

    // $imageValue = $_GET['imageValue'];

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
    <table border=“1”>
        <tr>
            <td style="width:40%;">
                <div">
                    <img src="images/<?php echo $imageValue . '.jpg'; ?>" alt="">
                </div>
            </td>
            <td style="width: 100%;">
                <div style="display: flex; justify-content: center; align-items: flex-start; flex-direction: column;">
                    <p>For course: <?php echo $courseTitle . ' (' . $creditTime . ')';?></p>
                    <p>Book Title: <?php echo $bookTitle;?></p>
                    <p>Price: <?php echo $price;?></p>
                    <?php  
                        include 'author.php';
                    ?>
                    <p>Publisher: <?php echo $publisher;?></p>
                    <p>Edition: <?php echo $edition . ' edition' . ' (' . $publishDate . ')';?></p>
                    <p>Length: <?php echo $length;?></p>
                    <p>ISBN-13: <?php echo $imageValue;?></p>
                </div>
            </td>
        </tr>
    </table>
    <table border=“1”>
        <tr>
            <td style="width: 100%;">
                <div style="width: 100%;">
                    Production Description:
                    <br>
                    <p><?php echo $description;?></p>
                </div>
            </td>
        </tr>
    </table>

<!-- Footer -->
<?php
    include_once 'footer.php';
?>