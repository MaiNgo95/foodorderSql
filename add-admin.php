<?php include('partials/menu.php');?>
<!-- put partials inside admin file -->

        <div class ="main-content"> 
            <div class= "wrapper">
               <h1><strong>Add Admin</strong></h1>

               <form action = "" method = "POST">
                   <table class = "tableaddadmin">
                       <td> Full name:</td>
                       <td><input type="text" name="full_name" placeholder = "Enter your name"></td>
                   </table>

                   <table class = "tableaddadmin">
                       <td> User name:</td>
                       <td><input type="text" name="username" placeholder = "Enter your user name"></td>
                   </table>

                   <table class = "tableaddadmin">
                       <td> Password:</td>
                       <td><input type="password" name="password" placeholder = " "></td>
                   </table>

                   <table colpan="2">
                       <td><input type="submit" name="submit" value = "Add admin" class= ""></td>
                   </table>
            </div>
        </div>

<?php include('partials/footer.php');?>

<!-- add admin into database    -->
<?php
    if(isset($_POST['submit']))
    {
        //save data into php page
        $full_name= $_POST['full_name'];
        $username= $_POST['username'];
        $password= md5($_POST['password']); //encryption for password
        
        //SQL part to save the data into MySQL
        $sql = "INSERT INTO admin SET
            full_name = '$full_name',
            username = '$username',
            password = '$password'
            ";
            //echo $sql;
        //save data into database
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }
    if($res == TRUE){
        $_SESSION['add'] = "New admin added."; //give a message
        header("location:".SITEURL.'admin/manage-admin.php'); //the loacation to save the new input
    }
    else{
        $_SESSION['add'] = "New admin not added.";
    }
    
    // {
    //     echo " yes";
    // }
    // else{
    //     echo "no";
    // }
?>
