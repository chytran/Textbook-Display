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
    $courseTitle = filter_input(INPUT_POST, 'courseTitle');
    $imageValue = filter_input(INPUT_POST, 'imageValue');
    $bookTitle = filter_input(INPUT_POST, 'bookTitle');
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
    SELECT * FROM 

    <p>
        <?php echo $imageValue; ?>
    </p>
    <table border=“1”>
        <tr>
            <td>
                <img src="images/<?php echo $imageValue . '.jpg'; ?>" alt=""><a href=""></a>
            </td>
            <td>
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <p>For course: <?php echo $courseTitle;?></p>
                    
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