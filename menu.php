<?php include('./config/connectsql.php');
include('login_check.php');?>

<html>
    <head>
        <title>RESNOSA</title>
        <!-- use link ref to link css page -->
        <link rel="stylesheet" href="../style.css"> 
    </head>
    <body>
        <div class ="menu text-center"> 
            <div class= "wrapper">
                <ul>
                    <li><a href = "index.php">Home</a></li> <!-- use to continue another page -->
                    <li><a href = "manage-admin.php">Admin</a></li>
                    <li><a href = "manage-category.php">Catergory</a></li>
                    <li><a href = "manage-food.php">Order</a></li>
                    <!-- //log out system, back log in page-->
                    <li><a href = "logout.php">Log out</a></li> 
                </ul>
            </div>
        </div>
