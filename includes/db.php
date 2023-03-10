<?php 

// Database connection
$connect = mysqli_connect('localhost','root','','phpblog');

// Check connection
if($connect){
    echo "Database connected";
}else{
    echo "Database not connected";
}
?>