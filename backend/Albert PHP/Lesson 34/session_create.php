<?php
    session_start(); /* session_start() if used in a php file should be the first line of code that is executable */
    $_SESSION["favcolor"] = "orange";
    echo "Session started and a key named favcolor in an array named \$_SESSION is assigned value orange";
?>
<!--output is always
    Session started and a key named favcolor in an array named $_SESSION is assigned value orange--> 