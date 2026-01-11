<?php
    /*
        function hello(){
            echo "Hello Everybody.<br>";
        }
        hello();
        hello();
        echo "Hey this is an example. ";
        hello();
        hello();
        output is Hello Everybody.
                Hello Everybody.
                Hey this is an example. Hello Everybody.
                Hello Everybody.
    */
?>
<?php
    /*
        function hello($name){
            echo "Hello $name.<br>";
        }
        hello("Yahoo Baba");
        output is Hello Yahoo Baba.
    */
?>
<?php
    /*
        function hello($fname, $lname){
            echo "Hello $fname $lname.<br>";
        }
        hello("Yahoo", "Baba");
        output is Hello Yahoo Baba.
    */
?>
<?php
    /*
        function hello($fname = "First", $lname = "Last"){
            echo "Hello $fname $lname.<br>";
        }
        hello();
        output is Hello First Last.
    */
?>
<?php
    /*
        function sum($a, $b){
            echo $a + $b;
        }
        sum(10, 20);
        output is 30
    */
?>
<?php
    /*
        function hello($fname = "First", $lname = "Last"){
            $v = "$fname $lname";
            return $v;
        }
        echo hello("Yahoo", "Baba");
        output is Yahoo Baba
    */
?>
<?php
    /*
        function hello($fname = "First", $lname = "Last"){
                $v = "$fname $lname";
                return $v;
            }
        $name = hello("Yahoo", "Baba");
        echo $name;
    */
?>
<?php
    /*
        function sum($math, $eng, $sc){
            $s = $math + $eng + $sc;
            return $s;
        }
        function percentage($st){
            $per =  $st/3;
            echo $per."%";
        }
        $total = sum(55, 65, 88);
        percentage($total);
    */
?>
<?php
    /*
        function wow($a){
            $a = "Hey";
        }
        $str = "Hello";
        wow($str);
        echo $str;
        output is Hello
    */
?>
<?php
    /*
        function wow(&$a){
            $a = "Hey";
        }
        $str = "Hello";
        wow($str);
        echo $str;
        output is Hey
    */
?>
<?php
    /*
        function testing(&$string){
            $string .= " and something extra.";
        }
        $str = "This is a string";
        testing($str);
        echo $str;
        output is This is a string and something extra. 
    */
?>
<?php
    /*
        function wow(){
            echo "Hello";
        }
        $func = "wow";
        $func();
        output is Hello
    */
?>
<?php
    /*
        $sayHello = function($name){
            echo "Hello $name";
        };
        $sayHello("Yahoo Baba");
        output is Hello Yahoo Baba
    */
?>
<?php
    /*
        function display($number){
            if($number < 5){
                echo "$number <br>";
                display($number + 1);
            }
        }
        display(1);
        output is 1
                2
                3
                4
    */
?>
<?php
    /*
        function factorial($n){
            if($n == 0){
                return 1;
            }
            else{
                return $n*factorial($n-1);
            }
        }
        echo factorial(6);
        output is 720
    */
?>
<?php
    /* variables declared inside a function are local variables */
    /* 
        function test(){
            $a = 10;
        }
        test();
        echo $a; 
    */
    /* code mentioned in comment just above this comment would lead to error */
?>
<?php
    /* variables declared outside a function are global variables */
    /*
        $x = 10;
        function test(){
            echo "Variable x: $x";  
        }
        test();
    */
    /* code mentioned in comment just above this comment would lead to error */    
?>
<?php
    /*
        $x = 10;
        function test(){
            global $x;
            echo "Variable x: $x";
        }
        test();
        output is Variable x: 10
    */
?>
<?php
    /*
        $x = 10;
        $y = 5;
        function test(){
            global $x, $y;
            $x = $x + $y;
        }
        test();
        echo $x;
        output is 15
    */
?>



