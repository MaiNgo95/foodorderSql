<?php
    //create content to enter store 
    session_start(); //go back and forth the page 

    define('SITEURL', 'http://localhost/foodorder/');
    define('LOCALHOST','localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'foododer');

 $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die (mysqli_error($conn));
 $db_select = mysqli_select_db($conn, DB_NAME) or die (mysqli_error($conn));
 //$res = mysqli_query($conn, $sql) or die(mysqli_error());
?>