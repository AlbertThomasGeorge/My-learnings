<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: http://localhost/Albert%20PHP/Lesson%2042/news-site/admin/post.php");
    }
?>
<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN | Login</title>
        <!-- Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- Font Awesome Icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div id="wrapper-admin" class="body-content">
            <div class="container">
                <div class="row">
                    <div>
                        <img class="logo" src="images/news.jpg">
                        <h3 class="heading">Admin</h3>
                        <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                            <input type="submit" name="login" class="btn btn-primary" value="login">
                        </form>
                        <?php
                            if(isset($_POST['login'])){
                                include "config.php";
                                $username = mysqli_real_escape_string($conn, $_POST['username']);
                                $password = mysqli_real_escape_string($conn, md5($_POST['password']));
                                $sql = "SELECT user_id, username, `role` FROM users WHERE username = '{$username}' AND `password` = '{$password}'";
                                $result = mysqli_query($conn, $sql) or die("Query Failed");
                                if(mysqli_num_rows($result)>0){
                                    while($row=mysqli_fetch_assoc($result)){
                                        $_SESSION['username'] = $row['username'];
                                        $_SESSION['user_id'] = $row['user_id'];
                                        $_SESSION['user_role'] = $row['role'];
                                        mysqli_close($conn);
                                        header("Location: http://localhost/Albert%20PHP/Lesson%2042/news-site/admin/post.php");
                                    }
                                }
                                else{
                                    echo '<div class="alert alert-danger">Username and Password are not matched</div>';
                                }
                                mysqli_close($conn);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

