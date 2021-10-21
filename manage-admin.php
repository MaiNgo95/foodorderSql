<?php include('partials/menu.php');?>
<!-- put partials inside admin file -->

        <div class ="main-content"> 
            <div class= "wrapper">
               <h1><strong>ADMIN</strong></h1>
               <?php 
                if (isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']); //display the message
                }
               if (isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']); //display the message
                } 
                if (isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];
                    unset($_SESSION['update']); //display the message
                } 
                if (isset($_SESSION['user-not-found']))
                {
                    echo $_SESSION['user-not-found'];
                    unset($_SESSION['user-not-found']); //display the message
                } 
                ?>
               <div>
        <div>
            <p class = "buttonadd"> <a href="add-admin.php"> Add Admin</a></p>
        </div>
        <table class= "tabstyle">
            <tr>
                <th>id</th>
                <th>full_name</th>
                <th>username</th>
                <th>password</th>
                <th> Action</th>
            </tr>
        
            <!--******!!!! display data from sql !!!!******-->
            <?php
                $sql = "SELECT * FROM admin";
                $res = mysqli_query($conn, $sql);
                $sn = 1; //set the number id after deleting
                if ($res == TRUE)
                {
                    $count = mysqli_num_rows($res);
                    if($count> 0 )
                    {
                        while($rows = mysqli_fetch_assoc($res))
                        {
                            $id= $rows['id'];
                            $full_name= $rows['full_name'];
                            $username= $rows['username'];
                            $password= $rows['password'];
                        
                        ?>
                        <!-- display data to table -->
                        <tr>
                            <!-- sn use for id to get the number right after deleting -->
                            <td><?php echo $sn++;?></td> 
                            <td><?php echo $full_name;?></td>
                            <td> <?php echo $username;?></td>
                            <td> <?php echo $password;?></td>
                            <!-- GO to page of delete and update link -->
                            <td> 
                            <!-- //set up button -->
                                <a href = "<?php echo SITEURL;?>admin/changepass.php?id=<?php echo $id;?>" class = "admin"> Change password </a> 
                                <!-- ?id uses to pass id into update and delete page so we can use it again -->
                                <a href = "<?php echo SITEURL;?>admin/updateuser.php?id=<?php echo $id;?>" class = "admin"> Update admin </a>
                                <!-- this line of code use to create a string which is the URL of detete page -->
                                <a href = "<?php echo SITEURL;?>admin/delete-user.php?id=<?php echo $id;?>" class = "admin"> Delete admin </a> 
                            </td>
                        </tr>
                        <br>
                        <?php
                        }
                    }
                    else
                    {
                    }
                }
            ?>

        </table>
        
    </div>
    

<?php include('partials/footer.php');?>

    
