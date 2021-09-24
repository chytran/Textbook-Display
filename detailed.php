<!-- Call header -->
<?php
    include_once 'header.php';
?>

<!-- Call database -->
<?php
    
    $dsn = 'mysql:host=localhost:8111;dbname=BookCatalog';
    // $dsn = 'mysql:host=localhost;dbname=BookCatalog';
    $username = 'mgs_user';
    $password = 'pa55word';

    // creates a PDO database connection object
    $db = new PDO($dsn, $username, $password); 

    // Get image result from submission
    $imageValue = filter_input(INPUT_POST, 'imageValue');
    $courseTitle = filter_input(INPUT_POST, 'courseTitle');
    $credit = filter_input(INPUT_POST, 'credit');
    $bookTitle = filter_input(INPUT_POST, 'bookTitle');
    $price = filter_input(INPUT_POST, 'price');
    $author = filter_input(INPUT_POST, 'author');
    $publisher = filter_input(INPUT_POST, 'publisher');
    $edition = filter_input(INPUT_POST, 'edition');
    $publishDate = filter_input(INPUT_POST, 'publishDate');
    if ($imageValue == '9781890774561') {
        $author = 'Joel Murach, Ray Harris';
    } else if ($imageValue == '9781890774448') {
        $author = 'Joel Murach, Andrea Steelman';
    } else if ($imageValue == '9780596527525') {
        $author = 'Jennifer Robbins, Aaron Gustafson';
    }
    
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
            <td>
                <img src="images/<?php echo $imageValue . '.jpg'; ?>" alt="">
            </td>
            <td>
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <p>For course: <?php echo $courseTitle . ' (' . $credit . '*)';?></p>
                    <p>Book Title: <?php echo $bookTitle;?></p>
                    <p>Book Title: <?php echo $price;?></p>
                </div>
            </td>
        </tr>
        <tr>

        </tr>
    </table>

<!-- Footer -->
<?php
    include_once 'footer.php';
?>