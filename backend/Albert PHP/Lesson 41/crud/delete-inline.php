<?php
    $stu_id = $_GET['id']; 
    include 'config.php';
    $sql = "DELETE FROM student WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful"); // if query ran successfully the code below this line is run, if query ran unsuccessfully Query Unsuccessful is displayed and the code below this line is not run 
    header("Location: http://localhost/Albert%20PHP/Lesson%2041/crud/index.php");
    mysqli_close($conn);
?>