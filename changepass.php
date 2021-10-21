<?php include('partials/menu.php')?>
<?php
?>
<div class="main-content">
        <div class="wapper">
            <h1>UPDATE ADMIN</h1>

            <form action =" " method= "POST">
            <table>
                <tr>
                    <td>Old password</td>
                    <td> <input type="password" name="current_password"></td>
                </tr>
                <tr>
                    <td>New password</td>
                    <td> <input type="password" name="new_password"></td>
                </tr>
                <tr>
                    <td>Comfirm password</td>
                    <td> <input type="password" name="confirm_password" ></td>
                </tr>
                <tr>
                    <td colspan = '2'>
                        <input type= "hidden" name="id" value = "<?php echo $id;?>"></td>
                        <input type='submit' name='submit' value="changepasword" class="buttonadd">

                    </td>
                </tr>
            </table>
    </form>
<?php
    if(isset($_POST['submit']))
    {
        //echo " clicked"
        //get the data from form
        $id = $_POST['id'];
        $current_password = md5($_POST['current_password']);
        $new_password = md5($_POST['new_password']);
        $confirm_passord =  md5($_POST['confirm_password']);

        $sql = "SELECT * FROM admin WHERE id =$id AND password='$current_password' ";
        $res = mysqli_query($conn, $sql);
        if($res == TRUE)
        {
            $count = mysqli_num_rows($res);
            if($count ==1)
            {
                echo "User found";
                header('location:'.SITEURL.'admin/manage-admin.php');
            }
            else
            {
                $_SESSION['user-not-found'] = '<div class = "error"> User not found</div>';
                header('location:'.SITEURL.'admin/manage-admin.php');
            }
        }
    }
?>

<?php include('partials/footer.php')?>
