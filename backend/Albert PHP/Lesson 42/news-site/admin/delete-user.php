<?php
    if($_SESSION['user_role']==0){
      header("Location: http://localhost/Albert%20PHP/Lesson%2042/news-site/admin/post.php");
    }
    include 'config.php';
    $userid = $_GET['id'];
    $sql = "DELETE FROM users WHERE user_id = {$userid}";
    if(mysqli_query($conn, $sql)){
        mysqli_close($conn);
        header("Location: http://localhost/Albert%20PHP/Lesson%2042/news-site/admin/users.php");
    }
    else{
        mysqli_close($conn);
        echo "<p>Can't Delete Record</p>";
    }
?>