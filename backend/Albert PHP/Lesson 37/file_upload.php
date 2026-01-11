<?php
    if(isset($_FILES['photo'])){
        $file_name = $_FILES['photo']['name'];
        $file_size = $_FILES['photo']['size'];
        $file_tmp = $_FILES['photo']['tmp_name'];
        $file_type = $_FILES['photo']['type'];
        if(move_uploaded_file($file_tmp, "upload_photos/". $file_name)){
            echo "File Uploaded Successfully 😃";
        }        
        else{
            echo "Could not upload file 😕";
        }
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
<!--after a small photo is selected after clicking choose file, open is clicked, then submit button is clicked, after that photo goes inside the upload_photos folder and File Uploaded Successfully 😃 is displayed--> 
<!--say instead of uploading to folder named upload_photos we tried to upload to a folder that does not exist example uploaded_photos then Could not upload file 😕 would be displayed--> 
