<?php
    session_start();
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
?>
<!--output is 
    Array
    (
        [favcolor] => orange
    )
    if http://localhost/Albert%20PHP/Lesson%2031/session_view.php is typed and enter is pressed after running session_create.php
-->
