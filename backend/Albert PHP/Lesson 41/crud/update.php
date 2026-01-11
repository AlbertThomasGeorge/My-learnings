<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid">
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show"> <!--a button named Show is displayed, if Show button is clicked $_POST array would contain [showbtn] => Show if displayed, no action is done on clicking the Show button-->
    </form>
    <?php
        if(isset($_POST['showbtn'])){
            $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed 🥺"); // if connection happened successfully the code below this line is run, if connection did not happen successfully Connection Failed 🥺 is displayed and the code below this line is not run 
            $stud_id = $_POST['sid'];
            $sqlquery1 = "SELECT * FROM student WHERE sid = {$stud_id}";
            $result1 = mysqli_query($conn, $sqlquery1) or die("Query Unsuccessful"); // if query ran successfully the code below this line is run, if query ran unsuccessfully Query Unsuccessful is displayed and the code below this line is not run 
            if(mysqli_num_rows($result1) > 0){
                while($row1 = mysqli_fetch_assoc($result1)){
    ?>
                    <form class="post-form" action="updatedata.php" method="post">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="hidden" name="sid" value="<?php echo $row1['sid']; ?>"> <!--this input is hidden, if Update button is clicked then $_POST array would contain ['sid'] => ""-->
                            <input type="text" name="sname" value="<?php echo $row1['sname']; ?>"> <!--if Update button is clicked without typing any name then $_POST array would contain ['sname'] => "", if Update button is clicked after typing Aaron in the input box then $_POST array would contain ['sname'] => "Aaron"-->
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="saddress" value="<?php echo $row1['saddress']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Class</label>
                            <?php
                                $sqlquery2 = "SELECT * FROM studentclass";
                                $result2 = mysqli_query($conn, $sqlquery2) or die("Query Unsuccessful"); // if query ran successfully the code below this line is run, if query ran unsuccessfully Query Unsuccessful is displayed and the code below this line is not run 
                                if(mysqli_num_rows($result2) > 0){
                                    echo '<select name="sclass">';
                                    while($row2 = mysqli_fetch_assoc($result2)){
                                        if($row1['sclass'] === $row2['cid']){
                                            $select = "selected";
                                        }
                                        else{
                                            $select = "";
                                        }
                                        echo "<option {$select} value='{$row2['cid']}'>{$row2['cname']}</option>"; // when edit is clicked for a student with id 2, the webpage that is opened will have selected what class the student with id 2 had joined already  
                                    }
                                    echo '</select>';
                            ?>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="sphone" value="<?php echo $row1['sphone']; ?>">
                        </div>
                        <input class="submit" type="submit" value="Update"> <!--button with Update mentioned is made-->
                    </form>
    <?php
                }
            }
        }
    ?>
</div>
</div>
</body>
</html>
<!--each time Show is clicked the entire page is rebuilt from the beginning starting from an empty webpage--> 
