<?php
    //authorization -Access control
    if(isset($_SESSION['user']))
    {
        // redirect to login page with message
        $_SESSION['no-login-message'] = ' <div class="error"> Please login to access Admin Panel</div>';
        header('location:'.SITEURL.'/admin/login.php');
    }

?>
