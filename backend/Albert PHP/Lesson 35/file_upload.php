<?php
    if(isset($_FILES['photo'])){
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        echo $file_name = $_FILES['photo']['name'];
    }
?>
<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data"> <!--if form has an input with type file method has to be set to post and enctype has to be set to multipart/form-data-->
            <input type="file" name="photo"><br><br> 
            <input type="submit"> <!--a button with Submit mentioned is made-->
        </form>
    </body>
</html>
<!--after choosing file saved as htmllogo.png and clicking submit output obtained was
    Array
    (
        [photo] => Array
                   (
                       [name] => htmllogo.png
                       [type] => image/png
                       [tmp_name] => C:\xampp\tmp\php23C7.tmp
                       [error] => 0
                       [size] => 3192
                   )
    )
    htmllogo.png
    key named error is set to 0 which  signifies no error
    size is mentioned in bytes
    while code in php file is running after submitting, the file chosen after which submit was clicked is temporarily stored inside tmp folder i.e. inside xampp folder i.e. in C drive, immediately after the code in php file has run the file stored inside tmp folder i.e. inside xampp folder i.e. in C drive is removed-->
