
<?php include('partials/menu.php');?>

   
    <div class="main-content">
        <div class="wapper">
            <h1>UPDATE ADMIN</h1>

            <?php
                $id = $_GET['id']; //get user id then lead to information
                $sql = "SElECT * FROM admin WHERE id=$id";
                $res= mysqli_query($conn, $sql);

                if ($res ==TRUE)
                {
                    $count = mysqli_num_rows($res); //Check the data 
                    if($count == 1)
                    {
                        //get details from new update
                        $row = mysqli_fetch_assoc($res); 
                        $full_name = $row['full_name'];
                        $username = $row['username'];
                    }
                    else{
                        header('location:'.SITEURL.'admin/manage-admin.php'); //if not come back to manage page
                    }
                }

            ?>
            <div>
                <form action = "" method="POST">
                    <table class= "table">
                        <tr>
                            <td>Full name</td>
                            <td><input type= "text" name="full_name" value = "<?php echo $full_name;?>"></td>
                        </tr>

                        <tr>
                            <td>username</td>
                            <td><input type= "text" name="username" value = "<?php echo $username;?>"></td>
                        </tr>

                        <tr>
                            <td colspan= '2'>
                            <!-- //no need to show id  -->
                                <input type= "hidden" name="id" value = "<?php echo $id;?>"></td> 
                                <input type= "submit" name="submit" value = "Update Admin" class = "buttonadd">
                            </td>
                        </tr>

                    </table>
                </form>
            </div>
        </div>
    </div>

<?php 
//update the admin info
    if(isset($_POST['submit']))
    {
        //if submited-> update, now get the data display after updating using POST for form
        $id = $_POST['id']; //or POST???
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];

        //update in SQL
        $sql = "UPDATE admin SET
        full_name = '$full_name',
        username = '$username',
        WHERE id = '$id'
        ";

        // check and display the message
        $res =mysqli_query($conn, $sql);
         if ($res == TRUE)
         {
            $_SESSION['update'] = '<div class = "delete"> Admin updated </div>';
            header("location:".SITEURL.'admin/manage-admin.php');
         }
         else
         {
            $_SESSION['update'] = '<div class = "error">Admin updated failed </div>';           
            header("location:".SITEURL.'admin/manage-admin.php');
         }
    }
?>
<?php
    include('partials/footer.php');?>
