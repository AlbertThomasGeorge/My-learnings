<?php
    session_start();
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "Favorite Color : ".$_SESSION["favcolor"];
        ?>
    </body>
</html>
<!--output is 
    Array
    (
        [favcolor] => orange
    )
    Favorite Color : orange
-->