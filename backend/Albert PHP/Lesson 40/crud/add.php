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
            <select name="class">
                <option selected disabled>Select Class</option>
                <option value="1">BCA</option> <!--if BCA is clicked and then Save is clicked, $_POST array would include [class] => 1 if displayed--> 
                <option value="2">B.TECH</option>
                <option value="3">BSW</option>
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
