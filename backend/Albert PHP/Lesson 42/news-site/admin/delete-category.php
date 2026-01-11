<?php
    if($_SESSION['user_role']==0){
      header("Location: http://localhost/Albert%20PHP/Lesson%2042/news-site/admin/post.php");
    }
    include 'config.php';
    $catid = $_GET['catid'];
    $sql = "DELETE FROM category WHERE category_id = {$catid}";
    if(mysqli_query($conn, $sql)){
        mysqli_close($conn);
        header("Location: http://localhost/Albert%20PHP/Lesson%2042/news-site/admin/category.php");
    }
    else{
        mysqli_close($conn);
        echo "<p>Can't Delete Record</p>";
    }
?>