<?php include('partials/menu.php');?>

<div>
    <h1>Admin</h1>

    <?php
    if (isset($_SESSION['add'])){
        echo $_SESSION['add'];
        unset($_SESSION['add']); //display the message
    }
    ?>

    <form action ="" method = "POST">
        <div>
            <table class= 'tableadmin'>
                <tr>
                    <td>Full Name </td> 
                    <td><input type= "text" name= "full_name" 
                    placeholder="enter your name"></td>
                   
                </tr>
                <br>
                <tr>
                    <td>username </td> 
                    <td><input type= "text" name= "username" 
                    placeholder="enter your name"></td>
                  
                </tr>
                <br>
                <tr>
                    <td>Password </td>
                     <td><input type= "password" name= "password"
                     placeholder="enter your name"></td>
                </tr>
                <br>
                <tr>
                    <td colspan = "2"><input type= "submit" name = "submit" value=" Add Admin " class="addadmin"></td>
                    
                </tr>
            </table>
</div>

    </form>
</div>
<?php include('partials/footer.php');?>
<?php
    if(isset($_POST['submit']))
    {
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
    
    //save data into database
    $sql = "INSERT INTO admin SET
    full_name = '$full_name',
     username = '$username', 
     password = '$password' " ;

     $res = mysqli_query($conn, $sql) or die(mysqli_error());
   
    }
    if ($res == True){
        $_SESSION['add']= "admin added successfully";
        header("location:".SITEURL.'admin/manage-admin.php');
    }else{
        $_SESSION['add']= "admin added failed";
        header("location:".SITEURL.'admin/add-admin.php');
    }
?>