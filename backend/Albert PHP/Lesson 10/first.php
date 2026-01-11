<?php
    /*
        $x = 15;
        if($x>30){
            echo "X is greater";
        }
        else{
            echo "X is smaller";
        }
    */
?>
<?php
    /*
        $name = "Yahoo Baba";
        $gender = "male";
        if($gender == "male"){
            echo "Hello Mr.".$name;
        }
        else{
            echo "Hello Miss".$name;
        }
        o/p is Hello Mr.Yahoo Baba
    */
?>
<?php
    /* in php there is elseif */
?>
<?php
    /*
        $weekday = 9;
        switch($weekday){
            case 1:
                echo "Today is Monday";
                break;
            case 2:
                echo "Today is Tuesday";
                break;
            case 3:
                echo "Today is Wednesday";
                break;
            case 4:
                echo "Today is Thursday";
                break;
            case 5:
                echo "Today is Friday";
                break;
            case 6:
                echo "Today is Saturday";
                break;
            case 7:
                echo "Today is Sundeay";
                break;
            default:
                echo "Enter valid week day";
        }
    */
?>
<?php
    /*
        $weekday = 3;
        switch($weekday){
            case 1: case 2: case 3:
                echo "Today is Monday or Tuesday or Wednesday";
                break;
            case 4:
                echo "Today is Thursday";
                break;
            case 5:
                echo "Today is Friday";
                break;
            case 6:
                echo "Today is Saturdsy";
                break;
            case 7:
                echo "Today is Sunday";
                break;
            default:
                echo " Enter valid weekday";
        }
    */
?>
<?php
    $age = 18;
    switch(true){
        case($age >= 15 && $age <= 20):
            echo "You are Elligible";
            break;
        case($age >= 21 && $age <= 30):
            echo "You are not Eligible";
            break;
        default:
            echo "Enter valid age";
    }
?>