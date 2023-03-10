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
   
<p>HELLO</p>

<div>

<?php

 $sql = "SELECT * FROM `posts`";
 $select_all_posts = mysqli_query($connect, $sql);

    while($row = mysqli_fetch_assoc($select_all_posts)){
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_content = $row['post_content'];
    
        echo "<h2><a href='#'>{$post_title}</a></h2>";

        echo "<p class='lead'>by <a href='index.php'>{$post_author}</a></p>";

        echo "<p><span class='glyphicon glyphicon-time'></span> Posted on {$post_date}</p>";


        echo "<hr>";

        echo "<img class='img-responsive' src='images/{$post_image}' alt=''>";

        echo "<hr>";

        echo "<p>{$post_content}</p>";

        echo "<a class='btn btn-primary' href='#'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>";

        echo "<hr>";
    }


?>
  <p></p>

</div>
 <div>
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