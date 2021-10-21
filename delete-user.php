<?php
    include('./config/connectsql.php');
//get the id of user to delete
    $id= $_GET['id'];
    $sql = "DELETE FROM admin WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if ($res == TRUE)
    {
            // session adisplay message
       $_SESSION['delete'] = '<div class="delete">Deleted admin</div>';
       header("location:".SITEURL.'admin/manage-admin.php'); //come to the previous page 
    }
    else
    {
        $_SESSION['delete'] = '<div class="error">Delete admin unsuccessfully</div>';
        header("location:".SITEURL.'admin/manage-admin.php');
    }
?>
