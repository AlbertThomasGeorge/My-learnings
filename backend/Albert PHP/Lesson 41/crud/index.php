<!--each cell of the table would have a padding at the top, bottom, left and right of 7px if cellpadding is set to 7px--> 
<!--text inside th tag within thead tag is centered horizontally within cell by default--> 
<!--anchor tags are inline by default-->
<?php include 'header.php'; ?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed 🥺"); // if connection happened successfully the code below this line is run, if connection did not happen successfully Connection Failed 🥺 is displayed and the code below this line is not run 
        $sql = "SELECT * FROM student JOIN studentclass on student.sclass = studentclass.cid ORDER BY student.sid";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful"); // if query ran successfully the code below this line is run, if query ran unsuccessfully Query Unsuccessful is displayed and the code below this line is not run 
        if(mysqli_num_rows($result) > 0){
    ?>
            <table cellpadding="7px"> 
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Class</th>
                    <th>Phone</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                            <tr>
                                <td><?php echo $row['sid']; ?></td>
                                <td><?php echo $row['sname']; ?></td>
                                <td><?php echo $row['saddress']; ?></td>
                                <td><?php echo $row['cname']; ?></td>
                                <td><?php echo $row['sphone']; ?></td>
                                <td>
                                    <a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a> <!--if Edit is clicked from a row with id 2 then a new webpage is opened with output obtained after running edit.php file, the url of that page is http://localhost/Albert%20PHP/Lesson%2041/crud/edit.php?id=2 -->
                                    <a href='delete-inline.php?id=<?php echo $row['sid']; ?>'>Delete</a>
                                </td>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
    <?php 
        } 
        else{
            echo "<h2>No Records Found</h2>";
        }
        mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>