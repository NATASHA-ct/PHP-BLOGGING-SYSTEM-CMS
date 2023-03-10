<?php
include "includes/header.php";
include "includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
<p>HELLO</p>


    <?php 
    $sql = "SELECT * FROM `categories`";

    $select_all_cats = mysqli_query($connect, $sql);
   
// the data will be stored in the assoc array
    while($row = mysqli_fetch_assoc($select_all_cats)){

    //  get the title from the array
        $cat_title = $row['cat_title'];

        echo "<li><a href='#'>{$cat_title}</a></li>";
    }
    
    ?>
    </div>

<?php
include "includes/footer.php";
?>
</body>
</html>