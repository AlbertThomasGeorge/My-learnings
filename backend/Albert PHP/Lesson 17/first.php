<?php
    /*
        $val = max(22, 14, 68, 18, 15);
        echo $val;
        output is 68
    */
?>
<?php
    /*
        $val = min(22, 14, 68, 18, 15);
        echo $val;
        output is 14
    */
?>
<?php
    /*
        $val = min([22, 14, 68, 18, 15]);
        echo $val;
        output is 14
    */
?>
<?php
    /*
        $minArray = min([2, 4, 8], [2, 5, 1]);
        echo "<pre>";
        print_R($minArray);
        echo "</pre>";
        initially first value of first array is compared to first value of second array, they are found to be equal, next second value of first array is compared with second value of second array, second value of first array which is 4 is found to be smaller than second value of second array which is 5, so first array is smaller 
        than second array
        output is 
        Array
        (
            [0] => 2
            [1] => 4
            [2] => 8
        )
    */
?>
<?php
    /*
        $maxArray = max([2, 4, 8], [2, 5, 1]);
        echo "<pre>";
        print_R($maxArray);
        echo "</pre>";
        initially first value of first array is compared to first value of second array, they are found to be equal, next second value of first array is compared with second value of second array, second value of first array which is 4 is found to be smaller than second value of second array which is 5, so second array is bigger 
        than first array
        output is 
        Array
        (
            [0] => 2
            [1] => 5
            [2] => 1
        )
    */
?>
<?php
    /*
        $val = max(TRUE, FALSE);
        echo $val;
        output is 1
    */
?>
<?php
    /*
        $val = min(TRUE, FALSE);
        echo $val;
        nothig is displayed
    */
?>
<?php
    /*
        $val = min(TRUE, 0);
        echo $val;
        output is 0 
    */
?>
<?php
    /*
        $val = max(TRUE, 0);
        echo $val;
        output is 1
    */
?>
<?php
    /*
        echo(ceil(0.60));
        output is 1
    */
?>
<?php
    /*
        echo(floor(1.9));
        output is 1
    */
?>
<?php
    /*
        echo(round(0.6)."<br>");
        echo(round(-0.5)."<br>");
        echo(round(1.4));
        output is 
        1
        -1
        1
    */
?>
<?php
    /*
        echo(abs(-4.6));
        output is 4.6
    */
?>
<?php
    /*
        echo intdiv(8, 4);
        output is 2 i.e. 8/4
    */
?>
<?php
    /*
        echo intdiv(5, 2);
        output is floor of 5/2 i.e. 2
    */
?>
<?php
    /*
        echo intdiv(-5, -2);
        output is 2 which is floor of -5/-2
    */
?>
<?php
    /*
        echo sqrt(9);
        output is 3
    */
?>
<?php
    /*
        echo sqrt(5);
        output is 2.236067977499
    */
?>
<?php
    /*
        echo pow(2,3);
        output is 8 i.e. 2 power 3
    */
?>
<?php
    /*
        echo rand();
        output would be something random, example 54533415
    */
?>
<?php
    /*
        echo rand()."<br>";
        echo rand();
        output maybe
        1076562514
        566703074
    */
?>
<?php
    /*
        echo rand(0, 10);
        output is either 0 or 1 or 2 or 3 or 4 or 5 or 6 or 7 or 8 or 9 or 10
    */
?>
<?php
    /*
        mt_rand() works similar to rand(), however it is faster 
        echo lcg_value();
        output is 0 or any number between 0 and 1
        output maybe 0.54961300882061
    */
?>

