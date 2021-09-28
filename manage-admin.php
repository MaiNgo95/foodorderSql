<?php include('partials/menu.php');?>
        <!--body -->
    <div class = "main-content">
        <div class='wrapper'>
            <strong> Admin Management</strong>
    </div>

    <?php
    if (isset($_SESSION['add'])){
        echo $_SESSION['add'];
        unset($_SESSION['add']); //display the message
    }
    ?>
    <div class= "fixaddadmin">
        <!--create a button to add admin-->
        <a href = "add-admin.php" class = "addadmin">Add admin </a>
</div>
    <div>
        <table class= "tabstyle">
            <tr>
                <th>id</th>
                <th>full_name</th>
                <th>username</th>
                <th>password</th>
                <th> Action</th>
            </tr>
            
            <tr>
                <td>1</td>
                <td>mai</td>
                <td>maingo</td>
                <td>jsfljsklfjkl</td>
                <td> <a href = "" class = "admin">Update admin </a>
                <a href = "" class = "admin">Delete admin </a> </td>
                
            </tr>

            <tr>
                <td>2</td>
                <td>mai</td>
                <td>maingo</td>
                <td>jsfljsklfjkl</td>
                <td> <a href = "" class = "admin">Update admin </a>
                <a href = "" class = "admin">Delete admin </a> </td>
                
            </tr>

            <tr>
                <td>3</td>
                <td>mai</td>
                <td>maingo</td>
                <td>jsfljsklfjkl</td>
                <td> <a href = "" class = "admin">Update admin </a>
                <a href = "" class = "admin">Delete admin </a> </td>
                
            </tr>

            <tr>
                <td>4</td>
                <td>mai</td>
                <td>maingo</td>
                <td>jsfljsklfjkl</td>
                <td> <a href = "" class = "admin">Update admin </a>
                <a href = "" class = "admin">Delete admin </a> </td>
                
            </tr><tr>
                <td>5</td>
                <td>mai</td>
                <td>maingo</td>
                <td>jsfljsklfjkl</td>
                <td> <a href = "" class = "admin">Update admin </a>
                <a href = "" class = "admin">Delete admin </a> </td>
                
            </tr>
            </table>
    </div>
   
<?php include('partials/footer.php');?>
