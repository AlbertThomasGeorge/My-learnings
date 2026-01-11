<?php
    /*
        $x = 10;
        ($x > 20) ? $z = "Greater" : $z = "Smaller";
        echo $z;
        output is Smaller
    */
?>
<?php
    /*
        $x = 35;
        $z = ($x > 20) ? "Greater" : "Smaller";
        echo $z;
        output is Greater
    */
?>
<?php
    $x = 15;
    $z = "Value is : ".(($x > 20) ? "Greater" : "Smaller");
    echo $z;
    // output is Value is : Smaller
?>