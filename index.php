<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>

    <<!--=============== CSS =================-->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

</head>
<body>

<!--=============================== PHP CODE =====================================-->
<?php

$dsn = 'mysql:host=localhost:8111;dbname=BookCatalog';
$username = 'chytran';
$password = 'nYMnpgWyUzvfR29S';

try {
    $db = new PDO($dsn, $username, $password);
    foreach($db->query('SELECT * FROM author') as $row) {
        print_r($row);
    }
    $db = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

// course table information (courseID, courseTitle, credit)
$query = 'SELECT course.courseID, course.courseTitle, course.credit 
            FROM course 
            CROSS JOIN 
            WHERE courseID = :course_id';
$statement = $db->prepare($query);
$course_id = 1; //hard-code course id
$statement->bindValue(':course_id', $course_id);
$statement->execute();

// fetchAll() gets all row from the prepare query statement
$products = $statement->fetchAll();
$statement->closeCursor();
?>

<table border="1">
    <?php foreach ($products as $product) { ?>
        <tr>
            <td><?php echo $product;?></td>
            <td><?php echo "hi";?></td>
            <td><?php echo "hi";?></td>
        </tr>  
    <?php } ?>
</table>
</body>
</html>