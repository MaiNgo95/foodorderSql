<?php
    //use session destroy to log out 
    include('./config/connectsql.php');
    session_destroy();

    //come to the log in page
    header('location:'.SITEURL.'admin/login.php');

?>
