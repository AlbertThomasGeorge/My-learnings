<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: http://localhost/Albert%20PHP/Lesson%2042/news-site/admin/index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN Panel</title>
        <!-- Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- Font Awesome Icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div id="header-admin">
            <div class="container div-in-admin-of-header">
                <div class="row">
                    <div>
                        <a href="post.php"><img class="logo-in-header" src="images/news.jpg"></a>
                    </div>
                    <div>
                        <a href="logout.php" class="admin-logout" >logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="admin-menubar">
            <div class="container">
                <div class="row div-in-admin-of-header">
                    <div>
                            <?php
                                if($_SESSION['user_role']==0){
                            ?>
                                    <ul class="normal-user-style">
                                    <li>
                                        <a href="post.php">Post</a>
                                    </li>
                            <?php
                                }
                            ?>
                            <?php
                                if($_SESSION['user_role']==1){
                            ?>
                                    <ul class="admin-menu">
                                    <li>
                                        <a href="post.php">Post</a>
                                    </li>
                                    <li>
                                        <a href="category.php">Category</a>
                                    </li>
                                    <li>
                                        <a href="users.php">Users</a>
                                    </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
