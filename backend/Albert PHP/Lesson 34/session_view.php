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
            if(isset($_SESSION["favcolor"])){
                echo "Favorite Color : ".$_SESSION["favcolor"];
            }
        ?>
    </body>
</html>
<!--output is 
    Array
    (
        [favcolor] => orange
    )
    Favorite Color : orange
    or 
    output includes
    Array
    (
    )
    output array has no keys only if session was destroyed after which this file was run without creating it after destroying it,
    if this file was run immediately after session was created then output array has a key named favcolor with value orange-->