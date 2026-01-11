<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid">
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show"> <!--a button named Show is displayed, if Show button is clicked $_POST array would contain [showbtn] => Show if displayed, no action is done on clicking the Show button-->
    </form>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid" value=""> <!--this input is hidden, if Update button is clicked then $_POST array would contain ['sid'] => ""-->
            <input type="text" name="sname" value=""> <!--if Update button is clicked without typing any name then $_POST array would contain ['sname'] => "", if Update button is clicked after typing Aaron in the input box then $_POST array would contain ['sname'] => "Aaron"-->
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="">
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="sclass">
                <option selected disabled>Select Class</option>
                <option value="1">BCA</option>
                <option value="2">B.TECH</option>
                <option value="3">BSW</option>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="">
        </div>
        <input class="submit" type="submit" value="Update"> <!--button with Update mentioned is made-->
    </form>
</div>
</div>
</body>
</html>
