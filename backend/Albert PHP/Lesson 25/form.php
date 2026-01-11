<!--isset($_POST['save']) returns true if there is a key named save in $_POST array when it is displayed whose value is not null-->
<html>
    <head>
        <title>Form Pge</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label>Name: </label>
            <input type="text" name="fname"><br><br>
            <label> Age: </label>
            <input type="text" name="age"><br><br>
            <input type="submit" name="save"> <!--a button with Submit mentioned is made-->
        </form>
        <?php
            if (isset($_POST['save'])){
                echo $_POST['fname']."<br>";
                echo $_POST['age'];
            }
        ?>
    </body>
</html>
<!--suppose after running file we type name as Yahoo Baba and age as 30 and we click the button Submit then we would see below the form
    Yahoo Baba
    30
    displayed--> 