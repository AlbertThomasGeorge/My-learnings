<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress">
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="sclass">
                <option selected disabled>Select Class</option>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed 🥺"); // if connection happened successfully the code below this line is run, if connection did not happen successfully Connection Failed 🥺 is displayed and the code below this line is not run 
                    $sql = "SELECT * FROM studentclass";
                    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful"); // if query ran successfully the code below this line is run, if query ran unsuccessfully Query Unsuccessful is displayed and the code below this line is not run 
                    while ($row = mysqli_fetch_assoc($result)){
                ?>
                        <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>
                <?php
                    } 
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone">
        </div>
        <input class="submit" type="submit" value="Save"> <!--button with Save mentioned is made-->
    </form>
</div>
</div>
</body>
</html>