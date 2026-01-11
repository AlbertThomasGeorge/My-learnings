<?php
    /*
        a constant is created using the syntax define(name, value, case-insensitive)
        by default case-insensitive is set to false
        for displaying we type echo name
        define("test", 50);
        echo test; 50 is displayed 
    */
?>
<?php
    define("test", 50);
    $sum = test + 20;
    echo $sum; /* o/p is 70 */
?>
