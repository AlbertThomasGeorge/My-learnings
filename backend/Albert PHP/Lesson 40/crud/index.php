<!--each cell of the table would have a padding at the top, bottom, left and right of 7px if cellpadding is set to 7px--> 
<!--text inside th tag within thead tag is centered horizontally within cell by default--> 
<!--anchor tags are inline by default-->
<?php include 'header.php'; ?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed 🥺"); // if connection happened successfully the code below this line is run, if connection did not happen successfully Connection Failed 🥺 is displayed and the code below this line is not run 
        $sql = "SELECT * FROM student JOIN studentclass on student.sclass = studentclass.cid";
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
                    <tr>
                        <td>1</td>
                        <td>Aaron</td>
                        <td>Delhi</td>
                        <td>BCA</td>
                        <td>9876543210</td>
                        <td>
                            <a href='edit.php'>Edit</a>
                            <a href='delete-inline.php'>Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bennita</td>
                        <td>Punjab</td>
                        <td>Btech</td>
                        <td>9876543210</td>
                        <td>
                            <a href='edit.php'>Edit</a>
                            <a href='delete-inline.php'>Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Charles</td>
                        <td>Haryana</td>
                        <td>BSC</td>
                        <td>9876543210</td>
                        <td>
                            <a href='edit.php'>Edit</a>
                            <a href='delete-inline.php'>Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Kevin</td>
                        <td>Gujrat</td>
                        <td>BCA</td>
                        <td>9876543210</td>
                        <td>
                            <a href='edit.php'>Edit</a>
                            <a href='delete-inline.php'>Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Sandra</td>
                        <td>Delhi</td>
                        <td>BSW</td>
                        <td>9876543210</td>
                        <td>
                            <a href='edit.php'>Edit</a>
                            <a href='delete-inline.php'>Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
    <?php 
        } 
    ?>
</div>
</div>
</body>
</html>
<!--only if number of rows retrieved after executing SELECT * FROM student JOIN studentclass on student.sclass = studentclass.cid" is more than 0 is the table disp0layed, if the number of rows retrieved after executing the query SELECT * FROM student JOIN studentclass on student.sclass = studentclass.cid is 0 then the table is not displayed-->

