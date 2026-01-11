<?php
    session_start();
    session_unset();
    session_destroy();
    echo "Session is destroyed";
?>
<!--output after typing http://localhost/Albert%20PHP/Lesson%2033/session_delete.php and pressing enter is always Session is destroyed-->