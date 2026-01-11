<?php
    $stu_name = $_POST['sname'];
    $stu_address = $_POST['saddress'];
    $stu_class = $_POST['sclass'];
    $stu_phone = $_POST['sphone'];
    $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed 🥺"); // if connection happened successfully the code below this line is run, if connection did not happen successfully Connection Failed 🥺 is displayed and the code below this line is not run 
    $sql = "INSERT into student (sname, saddress, sclass, sphone) VALUES ('{$stu_name}', '{$stu_address}', {$stu_class}, '{$stu_phone}')";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful"); // if query ran successfully the code below this line is run, if query ran unsuccessfully Query Unsuccessful is displayed and the code below this line is not run 
    header("Location: http://localhost/Albert%20PHP/Lesson%2041/crud/index.php"); // %20 represents space, if query ran successfully then only redirection to url mentioned in code in this line would occur else Query Unsuccessful would be displayed in url http://localhost/Albert%20PHP/Lesson%2041/crud/savedata.php
    mysqli_close($conn);
?>
<!--if we added two records for first time then we deleted one record and then we tried to add, then after adding id would be 4, to correct this we can type ALTER TABLE student AUTO_INCREMENT = 3; in phpMyAdmin and run, now if we add one record then id would be 3--> 
