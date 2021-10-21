<?php include('partials/menu.php');?> <!--cut the head into another folder-->

        <!--body -->
    <div class = "main-content">
        <div class='wrapper'>
            <strong> DASH BOARD </strong>
       <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
            ?>

    <div class= "column">
        <h1>pcture</h1>
        categories
    </div>

    <div class= "column">
        <h1>pcture</h1>
        categories
    </div>

    <div class= "column">
        <h1>pcture</h1>
        categories
    </div>

    <div class= "column">
        <h1>pcture</h1>
        categories
    </div>

    <div class= 'clearfix'></div>

    </div>
   </div>


    <?php include('partials/footer.php'); ?> <!--cut the footer into another folder-->
