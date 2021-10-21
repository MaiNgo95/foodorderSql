<!-- get the connection with sql -->
<?php include('./config/connectsql.php');?> 
<html>
    <head> 
        <title>Login- Food order system </title>
        <link rel= "stylesheet" href="../style.css">

    </head>
    <body>
        <div class = "login">
            <h1 class="text-center"> Login Account</h1>

            <!-- display message when login -->
            <?php
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
            ?>
            <br><br>


            <!-- start form -->
            <form action="" method="POST" class="text-center">
            <br>
            Username:
            <input type="text" name = "username" placeholder = "Enter your username">
            <br>
            <br>
            Password:
            <input type="password" name = "password" placeholder = "Enter your password">
            <br>  
            <input type="submit" name = "submit" value= "Login!" class="buttonadd">
            </form>
        </div>
    </body>
   
</html>
<?php
    //check button submit and get the input data from form to compare
    if(isset($_POST['submit']))
    {
        //echo " yes";
        //get the data from form
        $username = $_POST['username'];
        $password =md5($_POST['password']);

        //check sql if the user and password exist or not
        $sql ="SELECT * FROM admin WHERE username = '$username' AND password='$password' ";
        //execute the query
        $res = mysqli_query($conn, $sql);

        //coutn rows check whether user exist por not
        $count = mysqli_num_rows($res);
        //check when login
        if($count==1)
        {
            $_SESSION['login'] = "<div class = 'delete'> Login succesful</div>";
            $_SESSION['username']= $username; //show the user name 
            header('location:'.SITEURL.'admin/');
        }
        else
        {
            $_SESSION['login'] = "<div class = 'error'> USER NOT FOUND</div>";
            header('location:'.SITEURL.'admin/');
        }

    }
    else{
        echo "failed";
    }
?>
