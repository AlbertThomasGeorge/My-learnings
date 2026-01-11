<?php
    /*
        $colors = ["red", 20, "blue", 12.5];
        echo $colors[1];
        output is 20
    */
?>
<?php
    /*
        $colors = ["red", 20, "blue", 12.5];
        print_r($colors);
        output is Array ( [0] => red [1] => 20 [2] => blue [3] => 12.5 )
    */
?>
<?php
    /*
        $colors = ["red", 20, "blue", 12.5];
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        output is Array
                  (
                      [0] => red
                      [1] => 20
                      [2] => blue
                      [3] => 12.5
                  )
    */
?>
<?php
    /*
        $colors[0] = "red";
        $colors[1] = "yellow";
        $colors[2] = "blue";
        $colors[3] = "green";
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        output is Array
                  (
                      [0] => red
                      [1] => yellow
                      [2] => blue
                      [3] => green
                  )
    */
?>
<?php
    /*
        $colors = ["red", 20, "blue", 12.5];
        for($i = 0; $i < 4; $i++){
            echo $colors[$i]."<br>";
        }
        output is 
        red
        20
        blue
        12.5
    */
?>
<?php
    /*
        $age = array("bill"=>25, "steve"=>28, "elon"=>22);
        echo $age["steve"];
        output is 28
    */
?>
<?php
    /*
        $age = ["bill"=>25, "steve"=>28, "elon"=>22];
        echo $age["steve"];
        output is 28
    */
?>
<?php
    /*
        $age = ["bill"=>25, "steve"=>28, "elon"=>22];
        echo "<pre>";
        print_r($age);
        echo "</pre>";
        output is Array
                  (
                      [bill] => 25
                      [steve] => 28
                      [elon] => 22
                  )
    */
?>
<?php
    /*
        $age = ["bill"=>25, "steve"=>28, "elon"=>22];
        echo "<pre>";
        var_dump($age);
        echo "</pre>";
        output is array(3) {
                    ["bill"]=>
                    int(25)
                    ["steve"]=>
                    int(28)
                    ["elon"]=>
                    int(22)
                  }
        key and value can have any datatype in an array
    */
?>
<?php
    /*
        $colors = ["red", "green", "blue"];
        foreach($colors as $value){
            echo $value."<br>";
        }
        output is
        red
        green
        blue
    */
?>
<?php
    /*
        $age = ["bill"=>25, "steve"=>28, "elon"=>22];
        foreach($age as $value){
            echo $value."<br>";
        }
        output is 25
                  28
                  22
    */
?>
<?php
    /*
        $age = ["bill"=>25, "steve"=>28, "elon"=>22];
        foreach($age as $key => $value){
            echo "$key = $value <br>";
        }
        output is
        bill = 25
        steve = 28
        elon = 22
    */
?>
<?php
    /*
        $emp = [[1, "Amit", "Computer Operator"],
                [2, "Abel", "Driver"],
                [3, "Abin", "Professor"],
                [4, "Alex", "Cleaner"]];
        echo "<pre>";
        print_r($emp);
        echo "</pre>";
        output is
        Array
        (
            [0] => Array
                   (
                       [0] => 1
                       [1] => Amit
                       [2] => Computer Operator
                   )
            [1] => Array
                   (
                       [0] => 2
                       [1] => Abel
                       [2] => Driver
                   )
            [2] => Array
                   (
                       [0] => 3
                       [1] => Abin
                       [2] => Professor
                   )
            [3] => Array
                   (
                       [0] => 4
                       [1] => Alex
                       [2] => Cleaner
                   )
        )
    */
?>
<?php
    /*
        $emp = [[1, "Amit", "Computer Operator"],
                [2, "Abel", "Driver"],
                [3, "Abin", "Professor"],
                [4, "Alex", "Cleaner"]];
        echo $emp[0][0];
    */
?>
<?php
    /*
        $emp = [[1, "Amit", "Computer Operator"],
                [2, "Abel", "Driver"],
                [3, "Abin", "Professor"],
                [4, "Alex", "Cleaner"]];
        foreach($emp as $v1){
            foreach($v1 as $v2){
                echo $v2." ";
            }
            echo "<br>";
        }
        output is
        1 Amit Computer Operator
        2 Abel Driver
        3 Abin Professor
        4 Alex Cleaner
    */
?>
<?php
    /*
        $emp = [[1, "Amit", "Computer Operator"],
                [2, "Abel", "Driver"],
                [3, "Abin", "Professor"],
                [4, "Alex", "Cleaner"]];
        echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>";
        foreach($emp as $v1){
            echo "<tr>";
            foreach($v1 as $v2){
                echo "<td>$v2</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        each table data would have a border, inside each cell there would be padding, there would be no space between cells
    */
?>
<?php
    /*
        $emp = [[1, "Amit", "Computer Operator"],
                [2, "Abel", "Driver"],
                [3, "Abin", "Professor"],
                [4, "Alex", "Cleaner"]];
        echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>";
        echo "<tr>";
        echo "<th>Emp Id.</th>";
        echo "<th>Emp Name</th>";
        echo "<th>Designation</th>";
        echo "</tr>";
        foreach($emp as $v1){
            echo "<tr>";
            foreach($v1 as $v2){
                echo "<td>$v2</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        Emp Id., Emp Name and Designation would appear as the headings of each of the columns
    */
?>
<?php
    /*
        $marks = ["Kevin" => ["Physics" => 85, "Maths" => 78, "Chemistry" => 89],
                  "Jojo" => ["Physics" => 68, "Maths" => 73, "Chemistry" => 79],
                  "Jake" => ["Physics" => 68, "Maths" => 67, "Chemistry" => 92]];
        echo "<pre>";
        print_r($marks);
        echo "</pre>";
        output is
        Array
        (
            [Kevin] => Array
                       (
                           [Physics] => 85
                           [Maths] => 78
                           [Chemistry] => 89
                       )
            [Jojo] => Array
                       (
                           [Physics] => 68
                           [Maths] => 73
                           [Chemistry] => 79
                       )
            [Jake] => Array
                       (
                           [Physics] => 68
                           [Maths] => 67
                           [Chemistry] => 92
                       )
        )
    */
?>
<?php
    /*
        $marks = ["Kevin" => ["Physics" => 85, "Maths" => 78, "Chemistry" => 89],
                  "Jojo" => ["Physics" => 68, "Maths" => 73, "Chemistry" => 79],
                  "Jake" => ["Physics" => 68, "Maths" => 67, "Chemistry" => 92]];
        foreach($marks as $key => $v1){
            echo $key."<br>";
        }
        output is 
        Kevin
        Jojo
        Jake
    */
?>
<?php
    /*
        $marks = ["Kevin" => ["Physics" => 85, "Maths" => 78, "Chemistry" => 89],
                  "Jojo" => ["Physics" => 68, "Maths" => 73, "Chemistry" => 79],
                  "Jake" => ["Physics" => 68, "Maths" => 67, "Chemistry" => 92]];  
        foreach($marks as $key => $v1){
            echo $key." ";
            foreach($v1 as $v2){
                echo $v2." ";
            }
            echo "<br>";
        }
        output is 
        Kevin 85 78 89
        Jojo 68 73 79
        Jake 68 67 92
    */
?>
<?php
    /*
        $marks = ["Kevin" => ["Physics" => 85, "Maths" => 78, "Chemistry" => 89],
                  "Jojo" => ["Physics" => 68, "Maths" => 73, "Chemistry" => 79],
                  "Jake" => ["Physics" => 68, "Maths" => 67, "Chemistry" => 92]]; 
        echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Physics</th>";
        echo "<th>Maths</th>";
        echo "<th>Chemistry</th>";
        echo "</tr>";
        foreach($marks as $key => $v1){
            echo "<tr>";
            echo "<td>$key</td>";
            foreach($v1 as $v2){
                echo "<td>$v2</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        output is a table, each of the table's data and headings has a border
    */
?>
<?php
    /*
        $emp = [[1, "Amit", "Computer Operator"],
                [2, "Abel", "Driver"],
                [3, "Abin", "Professor"],
                [4, "Alex", "Cleaner"]];
        foreach($emp as list($id, $name, $designation)){
            echo "$id $name $designation<br>";
        }
        output is
        1 Amit Computer Operator
        2 Abel Driver
        3 Abin Professor
        4 Alex Cleaner
    */
?>
<?php
    /*
        $emp = [[1, "Amit", "Computer Operator"],
                [2, "Abel", "Driver"],
                [3, "Abin", "Professor"],
                [4, "Alex", "Cleaner"]];
        echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>";
        echo "<tr>";
        echo "<th>Emp Id.</th>";
        echo "<th>Name</th>";
        echo "<th>Designation</th>";
        echo "</tr>";
        foreach($emp as list($id, $name, $designation)){
            echo "<tr><td>$id</td><td>$name</td><td>$designation</td></tr>";
        }
        echo "</table>";
        output is a table, each of the table's data and headings has a border
    */
?>
<?php
    /*
        $emp = [["id" => 1, "name" => "Amit", "designation" => "Computer Operator"],
                ["id" => 2, "name" => "Abel", "designation" => "Driver"],
                ["id" => 3, "name" => "Abin", "designation" => "Professsor"],
                ["id" => 4, "name" => "Alex", "designation" => "Cleaner"]];
        echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>";
        echo "<tr>";
        echo "<th>Emp Id.</th>";
        echo "<th>Name</th>";
        echo "<th>Designation</th>";
        echo "</tr>";
        foreach($emp as list("id" => $id, "name" => $name, "designation" => $designation)){
            echo "<tr><td>$id</td><td>$name</td><td>$designation</td></tr>";
        }
        echo "</table>";
        output is same as the output of the code that was commenetd just above this comment
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'apple'];
        echo count($fruits); 
        output is 3
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'apple'];
        echo sizeof($fruits);
        output is 3
    */
?>
<?php
    /*
        $foods = ['fruits' => ['orange', 'banana', 'apple'],
                 'veggies' => ['carrot', 'collard', 'pea']];
        echo count($foods);
        output is 2
    */
?>
<?php
    /*
        $foods = ['fruits' => ['orange', 'banana', 'apple'],
                 'veggies' => ['carrot', 'collard', 'pea']];
        echo sizeof($foods);
        output is 2
    */
?>
<?php
    /*
        $foods = ['fruits' => ['orange', 'banana', 'apple'],
                  'veggies' => ['carrot', 'collard', 'pea']];
        echo count($foods, 1);
        output is 8 which is the total number of values in all arrays 
    */
?>
<?php
    /*
        $foods = ['fruits' => ['orange', 'banana', 'apple'],
                'veggies' => ['carrot', 'collard', 'pea']];
        echo count($foods['fruits']);
        output is 3
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'apple'];
        $len = count($fruits);
        for($i = 0; $i < $len; $i++){
            echo $fruits[$i]."<br>";
        }
        output is
        orange
        banana
        apple
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'orange', 'apple'];
        echo "<pre>";
        print_r(array_count_values($fruits));
        echo "</pre>";
        output is
        Array
        (
            [orange] => 2
            [banana] => 1
            [apple] => 1
        )
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'orange', 'apple'];
        echo in_array('apple', $fruits);
        output is 1 because apple is there in the array named fruits, if apple was not there in the array named fruits then no output would have been displayed
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'orange', 'apple'];
        if(in_array('lime', $fruits)){
            echo "Found Successfully";
        }
        else{
            echo "Can't Find";
        }
        output is Can't Find since lime was not there in the array, if lime was there in the array then the output would have been Found Successfully
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'orange', '55', 'apple'];
        if(in_array(55, $fruits)){
            echo "Found Successfully";
        }
        else{
            echo "Can't Find";
        }
        output is Found Successfully
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'orange', '55', 'apple'];
        if(in_array(55, $fruits, true)){
            echo "Found Successfully";
        }
        else{
            echo "Can't Find";
        }
        output is Can't Find
    */
?>
<?php
    /*
        $a = [['p', 'h'], ['p', 'r'], 'o'];
        if(in_array(['p', 'h'], $a)){
            echo "Found Successfully";
        }
        else{
            echo "Can't Find";
        }
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'orange', '55', 'apple'];
        echo array_search('apple', $fruits);
        output is 4 which is the index of apple
    */
?>
<?php
    /*
        $foods = ['a' => 'orange', 'b' => 'banana', 'c' => 'apple', 'd' => 'grapes'];
        echo array_search('apple', $foods); 
        output is c
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'apple', 'grapes'];
        $veggies = ['carrot', 'pea'];
        $newArray = array_replace($fruits, $veggies);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => carrot
            [1] => pea
            [2] => apple
            [3] => grapes
        )
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'apple', 1 => 'grapes'];
        $veggies = ['carrot', 'pea'];
        $newArray = array_replace($fruits, $veggies);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        pea which is at index 1 of veggies array is put in place of banana which has an index of 1 and grapes which has a key of 1
        output is
        Array
        (
            [0] => carrot
            [1] => pea
            [2] => apple
        )
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'apple', 'grapes', 'kiwi'];
        $veggies = ['carrot', 'pea', 'radish', 'pumpkin'];
        $colors = ['red', 'green', 'blue'];
        $newArray = array_replace($fruits, $veggies, $colors);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => red
            [1] => green
            [2] => blue
            [3] => pumpkin
            [4] => kiwi
        )
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'apple', 'grapes'];
        $veggies = ['a' => 'carrot', 'b' => 'pea'];
        $newArray = array_replace($fruits, $veggies);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => orange
            [1] => banana
            [2] => apple
            [3] => grapes
            [a] => carrot
            [b] => pea
        )
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'apple', 'grapes'];
        $veggies = ['a' => 'carrot', 1 => 'pea'];
        $newArray = array_replace($fruits, $veggies);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"; 
        output is
        Array
        (
            [0] => orange
            [1] => pea
            [2] => apple
            [3] => grapes
            [a] => carrot
        )  
    */
?>
<?php
    /*
        $fruits = ['orange', 'banana', 'a' => 'apple', 'grapes'];
        $veggies = ['a' => 'carrot', 1 => 'pea'];
        $newArray = array_replace($fruits, $veggies);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => orange
            [1] => pea
            [a] => carrot
            [2] => grapes
        )
    */
?>
<?php
    /*
        $array1 = ['a' => ['red'], 'b' => ['green', 'pink']];
        $array2 = ['a' => ['yellow'], 'b' => ['black']];
        $newArray = array_replace_recursive($array1, $array2);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [a] => Array
                   (
                       [0] => yellow
                   )
            [b] => Array
                   (
                       [0] => black
                       [1] => pink
                   )
        )
    */
?>
<?php
    /*
        $fruits = ["orange", "banana", "apple", "grapes"];
        array_pop($fruits);
        echo "<pre>";
        print_r($fruits);
        echo "</pre>";
        output is
        Array
        (
            [0] => orange
            [1] => banana
            [2] => apple
        )
    */
?>
<?php
    /*
        $fruits = ["orange", "banana", "apple", "grapes"];
        array_push($fruits, "kiwi");
        echo "<pre>";
        print_r($fruits);
        echo "</pre>";
        output is
        Array
        (
            [0] => orange
            [1] => banana
            [2] => apple
            [3] => grapes
            [4] => kiwi
        )
    */
?>
<?php
    /*
        $fruits = ["orange", "banana", "apple", "grapes"];
        array_push($fruits, "guava", "kiwi");
        echo "<pre>";
        print_r($fruits);
        echo "</pre>";
        output is
        Array
        (
            [0] => orange
            [1] => banana
            [2] => apple
            [3] => grapes
            [4] => guava
            [5] => kiwi
        )
    */
?>
<?php
    /*
        $fruits = ["orange", "banana", "apple", "grapes"];
        array_shift($fruits);
        echo "<pre>";
        print_r($fruits);
        echo "</pre>";
        output is
        Array
        (
            [0] => banana
            [1] => apple
            [2] => grapes
        )
    */
?>
<?php
    /*
        $fruits = ["orange", "banana", "apple", "grapes"];
        array_unshift($fruits, "kiwi");
        echo "<pre>";
        print_r($fruits);
        echo "</pre>";
        output is
        Array
        (
            [0] => kiwi
            [1] => orange
            [2] => banana
            [3] => apple
            [4] => grapes
        )
    */
?>
<?php
    /*
        $fruits = ["orange", "banana", "apple", "grapes"];
        array_unshift($fruits, "kiwi", "lemon");
        echo "<pre>";
        print_r($fruits);
        echo "</pre>";
        output is
        Array
        (
            [0] => kiwi
            [1] => lemon
            [2] => orange
            [3] => banana
            [4] => apple
            [5] => grapes
        )
    */
?>
<?php
    /*
        $fruits = ["orange", "banana", "grapes"];
        $veggies = ["carrot", "pumpkin"];
        $newArray = array_merge($fruits, $veggies);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => orange
            [1] => banana
            [2] => grapes
            [3] => carrot
            [4] => pumpkin
        )
    */
?>
<?php
    /*
        $fruits = ["orange", "banana", "grapes"];
        $veggies = ["carrot", "pumpkin"];
        $colors = ["red", "blue"];
        $newArray = array_merge($fruits, $veggies, $colors);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => orange
            [1] => banana
            [2] => grapes
            [3] => carrot
            [4] => pumpkin
            [5] => red
            [6] => blue
        )
    */
?>
<?php
    /*
        $fruits = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];
        $veggies = ["carrot", "pumpkin"];
        $newArray = array_merge($fruits, $veggies);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [a] => orange
            [b] => banana
            [c] => grapes
            [0] => carrot
            [1] => pumpkin
        )
    */
?>
<?php
    /*
        $fruits = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];
        $veggies = ['d' => "carrot", 'e' => "pumpkin"];
        $newArray = array_merge($fruits, $veggies);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [a] => orange
            [b] => banana
            [c] => grapes
            [d] => carrot
            [e] => pumpkin
        )
    */
?>
<?php
    /*
        $fruits = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];
        $veggies = ['b' => "carrot", 'e' => "pumpkin"];
        $newArray = array_merge($fruits, $veggies);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"; 
        output is
        Array
        (
            [a] => orange
            [b] => carrot
            [c] => grapes
            [e] => pumpkin
        )
    */ 
?>
<?php
    /*
        $fruits = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];
        $veggies = ['b' => "carrot", 'e' => "pumpkin", 55, 68];
        $newArray = array_merge($fruits, $veggies);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [a] => orange
            [b] => carrot
            [c] => grapes
            [e] => pumpkin
            [0] => 55
            [1] => 68
        )
    */
?>
<?php
    /*
        $fruits = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];
        $veggies = ['b' => "carrot", 'e' => "pumpkin", 55, 68];
        $newArray = $fruits + $veggies;
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [a] => orange
            [b] => banana
            [c] => grapes
            [e] => pumpkin
            [0] => 55
            [1] => 68
        )
    */
?>
<?php
    /*
        $fruits = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];
        $veggies = ['b' => "carrot", 'e' => "pumpkin", 55, 68];
        $newArray = array_merge_recursive($fruits, $veggies);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [a] => orange
            [b] => Array
                (
                    [0] => banana
                    [1] => carrot
                )
            [c] => grapes
            [e] => pumpkin
            [0] => 55
            [1] => 68
        )
    */
?>
<?php
    /*
        $fruits = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];
        $veggies = ['b' => ['colors' => ['red', 'blue', 'green']], 'e' => "pumpkin", 55, 68];
        $newArray = array_merge_recursive($fruits, $veggies);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [a] => orange
            [b] => Array
                (
                        [0] => banana
                        [colors] => Array
                                (
                                    [0] => red
                                    [1] => blue
                                    [2] => green
                                )

                )
            [c] => grapes
            [e] => pumpkin
            [0] => 55
            [1] => 68
        )
    */
?>
<?php
    /*
        $names = ["Alby", "Tommy", "Sunny"];
        $ages = ["35", "37", "43"];
        $newArray = array_combine($names, $ages);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [Alby] => 35
            [Tommy] => 37
            [Sunny] => 43
        )
    */
?>
<?php
    /*
        $colors = ['red', 'green', 'blue', 'violet', 'yellow'];
        $newArray = array_slice($colors, 1, 3); start index is 1, length is 3
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => green
            [1] => blue
            [2] => violet
        )
    */
?>
<?php
    /*
        $colors = ['red', 'green', 'blue', 'violet', 'yellow'];
        $newArray = array_slice($colors, -2, 2); start index is -2, length is 2
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => violet
            [1] => yellow
        )
    */
?>
<?php
    /*
        $colors = ['red', 'green', 'blue', 'violet', 'yellow'];
        $newArray = array_slice($colors, -2, 2, true);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [3] => violet
            [4] => yellow
        )
    */
?>
<?php
    /*
        $colors = ['a' => 'red', 'b' => 'green', '42' => 'blue', 'd' => 'yellow'];
        $newArray = array_slice($colors, 1, 3);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [b] => green
            [0] => blue
            [d] => yellow
        )
    */
?>
<?php
    /*
        $colors = ['a' => 'red', 'b' => 'green', '42' => 'blue', 'd' => 'yellow'];
        $newArray = array_slice($colors, 1, 3, true);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [b] => green
            [42] => blue
            [d] => yellow
        )
    */
?>
<?php
    /*
        $colors = ["0" => "red", "1" => "green", "2" => "blue", "3" => "yellow", "4" => "brown"];
        $newArray = array_slice($colors, 1, 3, true);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [1] => green
            [2] => blue
            [3] => yellow
        )
    */
?>
<?php
    /*
        $colors = ["0" => "red", "1" => "green", "2" => "blue", "3" => "yellow", "4" => "brown"];
        $newArray = array_slice($colors, 1, 3);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => green
            [1] => blue
            [2] => yellow
        )
    */
?>
<?php
    /*
        $colors = ["red", "green", "blue", "yellow", "brown"];
        array_splice($colors, 1); all the values starting from the first index onwards is removed
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        output is
        Array
        (
            [0] => red
        )
    */
?>
<?php
    /*
        $colors = ["red", "green", "blue", "yellow", "brown"];
        array_splice($colors, 2, 1); one value starting from index 2 onwards is removed
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        output is
        Array
        (
            [0] => red
            [1] => green
            [2] => yellow
            [3] => brown
        )
    */
?>
<?php
    /*
        $colors = ["red", "green", "blue", "yellow", "brown"];
        array_splice($colors, 1, -1); starting from index 1 onwards all values are removed except for the value at index -1 
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        output is
        Array
        (
            [0] => red
            [1] => brown
        )
    */
?>
<?php
    /*
        $colors = ["red", "green", "blue", "yellow", "brown"];
        array_splice($colors, 1, -2); starting from index 1 onwards all values are removed except for the values at index -2 and -1
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        output is
        Array
        (
            [0] => red
            [1] => yellow
            [2] => brown
        )
    */
?>
<?php
    /*
        $colors = ["red", "green", "blue", "yellow", "brown"];
        array_splice($colors, -1); only the last value of the array is removed
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        output is
        Array
        (
            [0] => red
            [1] => green
            [2] => blue
            [3] => yellow
        )
    */
?>
<?php
    /*
        $colors = ['red', 'green', 'blue', 'yellow', 'brown'];
        $fruits = ['orange', 'apple'];
        array_splice($colors, 0, 2, $fruits); the values at index 0 and 1 of colors array is replaced with the values orange and apple
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        output is
        Array
        (
            [0] => orange
            [1] => apple
            [2] => blue
            [3] => yellow
            [4] => brown
        )
    */
?>
<?php
    /*
        $colors = ['red', 'green', 'blue', 'yellow', 'brown'];
        $fruits = ['orange', 'apple'];
        array_splice($colors, 2, 2, $fruits); the values at index 2 and 3 of colors array is replaced with the values orange and apple
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        output is
        Array
        (
            [0] => red
            [1] => green
            [2] => orange
            [3] => apple
            [4] => brown
        )
    */
?>
<?php
    /*
        $colors = ['red', 'green', 'blue', 'yellow', 'brown'];
        $fruits = ['orange', 'apple'];
        array_splice($colors, 2, count($colors), $fruits); literally 5 values would have to be removed starting from index 2 and replaced with the values in the fruits array but since there are only three values just all the values starting from index 2 onwards would be removed and replaced with the values in the fruits array
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        output is
        Array
        (
            [0] => red
            [1] => green
            [2] => orange
            [3] => apple
        )
    */
?>
<?php
    /*
        $colors = ['red', 'green', 'blue', 'yellow', 'brown'];
        $fruits = ['orange', 'apple'];
        array_splice($colors, 2, 0, $fruits); 
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        Array
        (
            [0] => red
            [1] => green
            [2] => orange
            [3] => apple
            [4] => blue
            [5] => yellow
            [6] => brown
        )
    */
?>
<?php
    /*
        $colors = ['red', 'green', 'blue', 'yellow', 'brown'];
        $fruits = ['orange', 'apple'];
        array_splice($colors, 0, 0, $fruits); 
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        output is
        Array
        (
            [0] => orange
            [1] => apple
            [2] => red
            [3] => green
            [4] => blue
            [5] => yellow
            [6] => brown
        )
    */
?>
<?php
    /*
        $colors = ['red', 'green', 'blue', 'yellow', 'brown'];
        $fruits = ['orange', 'apple'];
        array_splice($colors, count($colors), 0, $fruits); 
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        output is
        Array
        (
            [0] => red
            [1] => green
            [2] => blue
            [3] => yellow
            [4] => brown
            [5] => orange
            [6] => apple
        )
    */
?>
<?php
    /*
        $colors = ["red", "green", "blue", "yellow"];
        $newArray = array_keys($colors);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => 0
            [1] => 1
            [2] => 2
            [3] => 3
        )
    */
?>
<?php
    /*
        $colors = ["first" => "red", "second" => "green", "third" => "blue", "fourth" => "yellow"];
        $newArray = array_keys($colors);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => first
            [1] => second
            [2] => third
            [3] => fourth
        )
    */
?>
<?php
    /*
        $colors = ["first" => "red", "second" => "green", "third" => "blue", "fourth" => "yellow"];
        $newArray = array_key_first($colors);
        echo $newArray;
        output is first
    */
?>
<?php
    /*
        $colors = ["first" => "red", "second" => "green", "third" => "blue", "fourth" => "yellow"];
        $lastkey = array_key_last($colors);
        echo $lastkey;
        output is fourth
    */
?>
<?php
    /*
        $colors = ["first" => "red", "second" => "green", "third" => "blue", "fourth" => "yellow"];
        $keyexists = array_key_exists("third", $colors);
        echo $keyexists;
        output is 1 since a key named third exists in colors array but suppose third was not a key in the array named colors then nothing would have been displayed
    */
?>
<?php
    /*
        $colors = ["first" => "red", "second" => "green", "third" => "blue", "fourth" => "yellow"];
        $keyexists = key_exists("third", $colors);
        echo $keyexists;
        output is 1 since a key named third exists in colors array but suppose third was not a key in the array named colors then nothing would have been displayed
    */
?>
<?php
    /*
        $colors = ["first" => "red", "second" => "green", "third" => "blue", "fourth" => "yellow"];
        $keyexists = key_exists("third", $colors);
        if($keyexists){
            echo "Key exists!";
        }
        else{
            echo "Key does not exist";
        }
        output is Key exists!, if third was not a key in colors array then Key does not exist would have been displayed
    */
?>
<?php
    /*
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_intersect($a1, $a2); values are matched 
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [a] => red
            [b] => green
        )
    */
?>
<?php
    /*
        $a1 = ["a" => "Red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_intersect($a1, $a2);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [b] => green
        )
    */
?>
<?php
    /*
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $a3 = ["a" => "red", "b" => "black", "h" => "yellow"];
        $newArray = array_intersect($a1, $a2, $a3);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [a] => red
        )
    */
?>
<?php
    /*
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_intersect_key($a1, $a2); keys are matched 
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [a] => red
            [d] => yellow
        )
    */
?>
<?php
    /*
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_intersect_assoc($a1, $a2); keys and values are matched
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [a] => red
        )
    */
?>
<?php
    /*
        function compare($a,$b){
            if($a === $b){
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_intersect_uassoc($a1, $a2, "compare"); compare function compares keys, php engine compares values, a which is a parameter of compare function is a key of a1 array, b which is a parameter of compare function is a key of a2 array
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [a] => red
        )
    */
?>
<?php
    /*
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_intersect_uassoc($a1, $a2, "strcasecmp"); 
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [a] => red
        )
    */
?>
<?php
    /*
        $a1 = ["a" => "Red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_intersect_uassoc($a1, $a2, "strcasecmp"); 
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
        )
    */
?>
<?php
    /*
        function compare($a,$b){
            if($a === $b){
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }
        $a1 = ["a" => "Red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_uintersect_assoc($a1, $a2, "compare"); compare function compares values, php engine compares keys
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
        )
    */
?>
<?php
    /*
        function compare($a,$b){
            if($a === $b){
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_uintersect_assoc($a1, $a2, "compare"); compare function compares values, php engine compares keys
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [a] => red
        )
    */
?>
<?php
    /*
        function compare($a,$b){
            if($a === $b){
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_intersect_ukey($a1, $a2, "compare"); compare function compares keys
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [a] => red
            [d] => yellow
        )
    */
?>
<?php
    /*
        function compare($a,$b){
            if($a === $b){
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_uintersect($a1, $a2, "compare"); compare function compares values, a which is a parameter of compare function is a value of a1 array, b which is a parameter of compare function is a value of a2 array
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"; 
        output is 
        Array
        (
            [a] => red
            [b] => green
        )
    */
?>
<?php
    /*
        function compareKeys($a,$b){
            if($a === $b){
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }
        function compareValues($a,$b){
            if($a === $b){
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_uintersect_uassoc($a1, $a2, "compareKeys", "compareValues");
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"
        Array
        (
            [a] => red
        )
    */
?>
<?php
    /*
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_diff($a1, $a2); an array of key value pairs is returned, the keys are of the values that are only there in a1 but not in a2
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"
        output is
        Array
        (
            [c] => blue
            [d] => yellow
        )
    */
?>
<?php
    /*
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $a3 = ["a" => "red", "b" => "black", "h" => "yellow"];
        $newArray = array_diff($a1, $a2, $a3); an array of key value pairs is returned, the keys are of the values that are only there in a1 but not in a2 and a3
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"
        output is
        Array
        (
            [c] => blue
        )
    */
?>
<?php
    /*
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_diff_key($a1, $a2); an array of key value pairs is returned, the values are of the keys that are only there in a1 but not in a2 
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"
        output is
        Array
        (
            [b] => green
            [c] => blue
        )
    */
?>
<?php
    /*
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_diff_assoc($a1, $a2); an array of key value pairs are returned, the key value pairs that are returned don't exist in a2 array  
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"
        output is 
        Array
        (
            [b] => green
            [c] => blue
            [d] => yellow
        )
    */
?>
<?php
    /*
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "Red", "f" => "green", "d" => "purple"];
        $newArray = array_diff_assoc($a1, $a2); an array of key value pairs are returned, the key value pairs that are returned don't exist in a2 array  
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"
        output is 
        Array
        (
            [a] => red
            [b] => green
            [c] => blue
            [d] => yellow
        )
    */
?>
<?php
    /*
        function compare($a, $b){
            if($a === $b){
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_diff_uassoc($a1, $a2, "compare"); compare function compares keys, php engine compares values  
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"
        output is
        Array
        (
            [b] => green
            [c] => blue
            [d] => yellow
        )
    */
?>
<?php
    /*
        function compare($a, $b){
            if($a === $b){
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_udiff_assoc($a1, $a2, "compare"); here the compare function compares values and not keys  
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"
        output is 
        Array
        (
            [b] => green
            [c] => blue
            [d] => yellow
        )
    */
?>
<?php
    /*
        function compare($a, $b){
            if($a === $b){
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_diff_ukey($a1, $a2, "compare"); here the compare function compares keys  
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"
        output is 
        Array
        (
            [b] => green
            [c] => blue
        )
    */
?>
<?php
    /*
        function compare($a, $b){
            if($a === $b){
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_udiff($a1, $a2, "compare"); compare function here compares values and not keys   
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"
        output is 
        Array
        (
            [c] => blue
            [d] => yellow
        )
    */
?>
<?php
    /*
        function compareKeys($a, $b){
            if($a === $b){
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }
        function compareValues($a, $b){
            if($a === $b){
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }       
        $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $a2 = ["a" => "red", "f" => "green", "d" => "purple"];
        $newArray = array_udiff_uassoc($a1, $a2, "compareKeys", "compareValues");    
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"
        output is 
        Array
        (
            [b] => green
            [c] => blue
            [d] => yellow
        )
    */
?>
<?php
    /*
        $colors = ["a" => "red", "b" => "green", "c" => "red", "d" => "yellow"];
        $newArray = array_values($colors);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => red
            [1] => green
            [2] => red
            [3] => yellow
        )
    */
?>
<?php
    /*
        $colors = ["a" => "red", "b" => "green", "c" => "red", "d" => "yellow"];
        $newArray = array_unique($colors); only unique values are returned
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [a] => red
            [b] => green
            [d] => yellow
        )
    */
?>
<?php
    /*
        $array = [['id' => 2201, 'first_name' => 'Anil', 'last_name' => 'Kapoor'],
                ['id' => 2202, 'first_name' => 'Salman', 'last_name' => 'Khan'],
                ['id' => 2203, 'first_name' => 'John', 'last_name' => 'Abraham']];
        $newArray = array_column($array, 'first_name');
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Anil
            [1] => Salman
            [2] => John
        )
    */
?>
<?php 
    /*
        $array = [['id' => 2201, 'first_name' => 'Anil', 'last_name' => 'Kapoor'],
                ['id' => 2202, 'first_name' => 'Salman', 'last_name' => 'Khan'],
                ['id' => 2203, 'first_name' => 'John', 'last_name' => 'Abraham']];
        $newArray = array_column($array, 'last_name', 'id'); last_name would be value, id would be key
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [2201] => Kapoor
            [2202] => Khan
            [2203] => Abraham
        )
    */
?>
<?php
    /*
        $colors = ["red", "blue", "green", "peach", "olive green", "violet"];
        $newArray = array_chunk($colors, 2); each subarray is of length 2
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => Array
                   (
                       [0] => red
                       [1] => blue
                   )
            [1] => Array
                   (
                       [0] => green
                       [1] => peach
                   )
            [2] => Array
                   (
                       [0] => olive green
                       [1] => violet
                   )
        )
    */
?>
<?php
    /*
        $age  = ["Mohan" => "35", "Aman" => "37", "Ram" => "43", "Salman" => "25"];
        $newArray = array_chunk($age, 3);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Array
                   (
                       [0] => 35
                       [1] => 37
                       [2] => 43
                   )
            [1] => Array
                   (
                       [0] => 25
                   )
        )
    */
?>
<?php
    /*
        $age  = ["Mohan" => "35", "Aman" => "37", "Ram" => "43", "Salman" => "25"];
        $newArray = array_chunk($age, 3, true); // keys are preserved
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Array
                   (
                       [Mohan] => 35
                       [Aman] => 37
                       [Ram] => 43
                   )
            [1] => Array
                   (
                       [Salman] => 25
                   ) 
        )
    */
?>
<?php
    /*
        $a = ["Bill" => 10, "Joe" => 20, "Peter" => 30];
        $newArray = array_flip($a);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [10] => Bill
            [20] => Joe
            [30] => Peter
        )
    */
?>
<?php 
    /*
        $a = ["Bill" => 10, "Joe" => 20, "Peter" => 30];
        $newArray = array_change_key_case($a); default is lowercase
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [bill] => 10
            [joe] => 20
            [peter] => 30
        )
    */
?>
<?php
    /*
        $a = ["Bill" => 10, "Joe" => 20, "Peter" => 30];
        $newArray = array_change_key_case($a, CASE_UPPER); 
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [BILL] => 10
            [JOE] => 20
            [PETER] => 30
        )
    */
?>
<?php
    /*
        $a = [2, 4, 6, 8];
        echo "Sum = ".array_sum($a);
        output is 
        Sum = 20
    */
?>
<?php
    /*
        $a = ["a" => 1.2, "b" => 2.3, "c" => 3.4];
        echo "Sum = ".array_sum($a);
        output is 
        Sum = 6.9
    */
?>
<?php
    /*
        $a = [2, 4, 6, 8];
        echo "Product = ".array_product($a);
        output is 
        Product = 384
    */
?>
<?php
    /*
        $colors = ["red", "green", "blue", "yellow", "brown"];
        $randomIndex = array_rand($colors);
        echo $randomIndex;
        output is a random index value. The random index value can be 0 or 1 or 2 or 3 or 4
    */
?>
<?php
    /*
        $colors = ["red", "green", "blue", "yellow", "brown"];
        $randomIndex = array_rand($colors);
        echo $colors[$randomIndex];
        output is either red or green or blue or yellow or brown
    */
?>
<?php
    /*
        $colors = ["red", "green", "blue", "yellow", "brown"];
        $randomIndexes = array_rand($colors, 2);
        echo "<pre>";
        print_r($randomIndexes);
        echo "</pre>";
        output maybe
        Array
        (
            [0] => 1
            [1] => 3
        )
        the two random indexes chosen are unique and random always, so the two random indexes chosen can never be the same
    */
?>
<?php
    /*
        $colors = ["red", "green", "blue", "yellow", "brown"];
        $randomIndexes = array_rand($colors, 2);
        echo $colors[$randomIndexes[0]]."<br>";
        echo $colors[$randomIndexes[1]];
        output is two colors that are always different and random
    */
?>
<?php
    /*
        $colors = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        $randomKeys = array_rand($colors, 2);
        echo "<pre>";
        print_r($randomKeys);
        echo "</pre>";
        output maybe
        Array
        (
            [0] => b
            [1] => d
        )
        the two random keys chosen are unique and random always, so the two random keys chosen can never be the same
    */
?>
<?php
    /*
        $colors = ["red", "green", "blue", "yellow", "brown"];
        shuffle($colors);
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        output maybe
        Array
        (
            [0] => green
            [1] => red
            [2] => blue
            [3] => yellow
            [4] => brown
        )
        the array can be shuffled in many random ways including the original order as well defined in code
    */
?>
<?php
    /*
        $colors = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
        shuffle($colors);
        echo "<pre>";
        print_r($colors);
        echo "</pre>";
        output maybe
        Array
        (
            [0] => green
            [1] => red
            [2] => yellow
            [3] => blue
        )
        the array can be shuffled in many random ways including the original order as well defined in code
    */
?>
<?php
    /*
        $a = ["a", "b", "c", "d", "e"];
        $newArray = array_fill_keys($a, "Testing");
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [a] => Testing
            [b] => Testing
            [c] => Testing
            [d] => Testing
            [e] => Testing
        )
    */
?>
<?php
    /*
        $newArray = array_fill(3, 4, "Testing"); starting key is 3, number of keys beginning from the starting key is 4
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [3] => Testing
            [4] => Testing
            [5] => Testing
            [6] => Testing
        )
    */
?>
<?php
    /*
        $newArray = array_fill(-2, 5, "Testing"); 
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [-2] => Testing
            [0] => Testing
            [1] => Testing
            [2] => Testing
            [3] => Testing
        )
        after a negative start key, key is resetted to 0
    */
?>
<?php
    /*
        $fruits = ["a" => "Lemon", "b" => "Orange", "c" => "Banana", "d" => "Apple"];
        array_walk($fruits, "myFunction");
        function myFunction($value, $key){
            echo "$key : $value<br>";
        }
        output is
        a : Lemon
        b : Orange
        c : Banana
        d : Apple
    */
?>
<?php
    /*
        $fruits = ["a" => "Lemon", "b" => "Orange", "c" => "Banana", "d" => "Apple"];
        array_walk($fruits, "myFunction", "is a key of");
        function myFunction($value, $key, $param){
            echo "$key $param $value<br>";
        }
        output is 
        a is a key of Lemon
        b is a key of Orange
        c is a key of Banana
        d is a key of Apple
    */
?>
<?php
    /*
        $veggies = ["1" => "Carrot", "2" => "Tomatoes"];
        $foods = [$veggies, "a" => "Lemon", "b" => "Orange", "c" => "Banana", "d" => "Apple"];
        array_walk_recursive($foods, "myFunction", "is a key of");
        function myFunction($value, $key, $param){
            echo "$key $param $value<br>";
        }
        output is 
        1 is a key of Carrot
        2 is a key of Tomatoes
        a is a key of Lemon
        b is a key of Orange
        c is a key of Banana
        d is a key of Apple
    */
?>
<?php
    /*
        $a = [1,2,3,4,5];
        $newArray =  array_map('square', $a);
        function square($n){
            return $n*$n;
        }
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => 1
            [1] => 4
            [2] => 9
            [3] => 16
            [4] => 25
        )
    */
?>
<?php
    /*
        $a = [1,2,3,4,5];
        $b = ["lemon", "orange", "banana", "apple", "guava"]; 
        $newArray = array_map('myFunction', $a, $b);
        function myFunction($aValue, $bValue){
            return "$aValue = $bValue";
        }
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [0] => 1 = lemon
            [1] => 2 = orange
            [2] => 3 = banana
            [3] => 4 = apple
            [4] => 5 = guava
        )
    */
?>
<?php
    /*
        $a = [1,2,3,4,5];
        $b = ["lemon", "orange", "banana", "apple", "guava"]; 
        $newArray = array_map('myFunction', $a, $b);
        function myFunction($aValue, $bValue){
            return "$aValue for $bValue";
        }
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [0] => 1 for lemon
            [1] => 2 for orange
            [2] => 3 for banana
            [3] => 4 for apple
            [4] => 5 for guava
        )
    */
?>
<?php
    /*
        $a = [1,2,3,4,5];
        $b = ["lemon", "orange", "banana", "apple", "guava"]; 
        $newArray = array_map('myFunction', $a, $b);
        function myFunction($aValue, $bValue){
            return [$aValue => $bValue];
        }
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"; 
        output is
        Array
        (
            [0] => Array
                   (
                       [1] => lemon
                   )
            [1] => Array
                   (
                       [2] => orange
                   )
            [2] => Array
                   (
                       [3] => banana
                   )
            [3] => Array
                   (
                       [4] => apple
                   )
            [4] => Array
                   (
                       [5] => guava
                   )
        )
    */
?>
<?php
    /*
        $a = [1,2,3,4,5];
        $b = ["lemon", "orange", "banana", "apple", "guava"]; 
        $newArray = array_map(null, $a, $b);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Array
                   (
                       [0] => 1
                       [1] => lemon
                   )
            [1] => Array
                   (
                       [0] => 2
                       [1] => orange
                   )
            [2] => Array
                   (
                       [0] => 3
                       [1] => banana
                   )
            [3] => Array
                   (
                       [0] => 4
                       [1] => apple
                   )
            [4] => Array
                   (
                       [0] => 5
                       [1] => guava
                   )
        )
    */
?>
<?php
    /*
        function myFunction($n){
            return strtoupper($n);
        }
        $a = ["one" => "Apple", "two" => "Banana", "three" => "Orange"];
        $newArray = array_map('myFunction', $a); values are converted to uppercase
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        Array
        (
            [one] => APPLE
            [two] => BANANA
            [three] => ORANGE
        )
    */
?>
<?php
    /*
        $a = ['orange', 'banana', 'apple'];
        $string = array_reduce($a, 'myFunction');
        function myFunction($n, $m){
            return $n."-".$m;
        }
        echo $string;
        output is 
        -orange-banana-apple
        initially n is empty string and m is orange, -orange is returned, now n is -orange and m is banana, -orange-banana is returned, now n is -orange-banana and m is apple, -orange-banana-apple is returned 
    */
?>
<?php
    /*
        $a = ['orange', 'banana', 'apple'];
        $string = array_reduce($a, 'myFunction', 'lemon');
        function myFunction($n, $m){
            return $n."-".$m;
        }
        echo $string;
        output is 
        lemon-orange-banana-apple
        initially n is lemon, m is orange, lemon-orange is returned, now n is lemon-orange and m is banana, lemon-orange-banana is returned, now n is lemon-orange-banana and m is apple, lemon-orange-banana-apple is returned
    */
?>
<?php
    /*
        $a = ['orange', 'banana', 'apple'];
        $string = array_reduce($a, 'myFunction', 20);
        function myFunction($n, $m){
            return $n."-".$m;
        }
        echo $string;
        output is 
        20-orange-banana-apple
    */
?>
<?php
    /*
        $a = [1,2,3];
        $string = array_reduce($a, 'myFunction', 20);
        function myFunction($n, $m){
            return $n."-".$m;
        }
        echo $string;
        output is 
        20-1-2-3
    */
?>
<?php
    /*
        $a = [1,2,3];
        $sum = array_reduce($a, 'myFunction');
        function myFunction($n, $m){
            return $n+$m;
        }
        echo $sum;
        initially n is 0, m is 1, 1 is returned, now n is 1 and m is 2, 3 is returned, now n is 3 and mis 3, 6 is returned
    */
?>
<?php
    /*
        $a = [1,2,3];
        $product = array_reduce($a, 'myFunction', 1);
        function myFunction($n, $m){
            return $n*$m;
        }
        echo $product;
        output is 6
    */
?>
<?php
    /*
        $a = [1,2,3];
        $sum = array_reduce($a, 'myFunction');
        function myFunction($n, $m){
            $n = $n + $m; 
            return $n;
        }
        echo $sum;
        output is 6
    */
?>
<?php
    /*
        $foods = ['orange', 'banana', 'grapes', 'apple'];
        sort($foods); sorting happens in ascending order
        echo "<pre>";
        print_r($foods);
        echo "</pre>";
        output is 
        Array
        (
            [0] => apple
            [1] => banana
            [2] => grapes
            [3] => orange
        )
    */
?>
<?php
    /*
        $foods = ['orange', 'banana', 'grapes', 'apple'];
        rsort($foods); sorting happens in descending order
        echo "<pre>";
        print_r($foods);
        echo "</pre>";
        output is 
        Array
        (
            [0] => orange
            [1] => grapes
            [2] => banana
            [3] => apple
        )
    */
?>
<?php
    /*
        $numbers = [22, 15, 3, 65];
        rsort($numbers);
        echo "<pre>";
        print_r($numbers);
        echo "</pre>";
        output is 
        Array
        (
            [0] => 65
            [1] => 22
            [2] => 15
            [3] => 3
        )
    */
?>
<?php
    /*
        $foods = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
        sort($foods); values are sorted in ascending order 
        echo "<pre>";
        print_r($foods);
        echo "</pre>";
        output is 
        Array
        (
            [0] => apple
            [1] => banana
            [2] => lemon
            [3] => orange
        )
    */
?>
<?php
    /*
        $foods = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
        asort($foods); values are sorted in ascending order  
        echo "<pre>";
        print_r($foods);
        echo "</pre>";
        output is 
        Array
        (
            [c] => apple
            [b] => banana
            [d] => lemon
            [a] => orange
        )
    */
?>
<?php
    /*
        $foods = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
        arsort($foods); values are sorted in descending order  
        echo "<pre>";
        print_r($foods);
        echo "</pre>";
        output is 
        Array
        (
            [a] => orange
            [d] => lemon
            [b] => banana
            [c] => apple
        )
    */
?>
<?php
    /*
        $foods = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
        ksort($foods); keys are sorted in ascending order  
        echo "<pre>";
        print_r($foods);
        echo "</pre>";
        output is 
        Array
        (
            [a] => orange
            [b] => banana
            [c] => apple
            [d] => lemon
        )
    */
?>
<?php
    /*
        $foods = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];
        krsort($foods); keys are sorted in descending order  
        echo "<pre>";
        print_r($foods);
        echo "</pre>";
        output is 
        Array
        (
            [d] => lemon
            [c] => apple
            [b] => banana
            [a] => orange
        )
    */
?>
<?php
    /*
        $array = ["img12.png", "img10.png", "img1.png", "img2.png"];
        natsort($array);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        output is 
        Array
        (
            [2] => img1.png
            [3] => img2.png
            [1] => img10.png
            [0] => img12.png
        )
    */
?>
<?php
    /*
        $array = ["Img12.png", "img11.png", "Img2.png", "img1.png"];
        natsort($array);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        output is 
        Array
        (
            [2] => Img2.png
            [0] => Img12.png
            [3] => img1.png
            [1] => img11.png
        )
        note that the numbers are not in ascending order
    */
?>
<?php
    /*
        $array = ["Img12.png", "img11.png", "Img2.png", "img1.png"];
        natcasesort($array);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        output is 
        Array
        (
            [3] => img1.png
            [2] => Img2.png
            [1] => img11.png
            [0] => Img12.png
        )
        note that now the numbers are displayed in ascending order
    */
?>
<?php
    /*
        $names = ["Jim", "Alfred", "Manuel", "Richard", "Kevin"];
        $ages = [21, 22, 23, 24, 25];
        let age of Jim be 21
        let age of Alfred be 22
        let age of Manuel be 23
        let age of Richard be 24
        let age of Kevin be 25 
        we can use array_multisort to sort the names array alphabetically and shuffle the ages array so that name at index x of names array has age at index x of ages array 
        array_multisort($names, $ages);
        echo "<pre>";
        print_r($names);
        echo "</pre>";
        echo "<pre>";
        print_r($ages);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Alfred
            [1] => Jim
            [2] => Kevin
            [3] => Manuel
            [4] => Richard
        )
        Array
        (
            [0] => 22
            [1] => 21
            [2] => 25
            [3] => 23
            [4] => 24
        )
    */
?>
<?php
    /*
        $names = ["Jim", "Alfred", "Manuel", "Richard", "Kevin"];
        $newArray = array_reverse($names);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Kevin
            [1] => Richard
            [2] => Manuel
            [3] => Alfred
            [4] => Jim
        )
    */
?>
<?php
    /*
        $foods = ['orange', 'banana', 'apple', 'grapes'];
        echo "<b>Every array has a pointer.<Br>Initially the pointer points at the first value of the array</b><br>";
        echo "<b>Current Pointer points at value:</b> ".current($foods)."<br>";
        echo "<b>Current Pointer points at key:</b> ".key($foods);
        output is
        Every array has a pointer.
        Initially the pointer points at the first value of the array
        Current Pointer points at value: orange
        Current Pointer points at key: 0
    */
?>
<?php
    /*
        $foods = ['orange', 'banana', 'apple', 'grapes'];
        echo "<b>Every array has a pointer.<Br>Initially the pointer points at the first value of the array</b><br>";
        echo "<b>Current Pointer points at value:</b> ".pos($foods)."<br>";
        echo "<b>Current Pointer points at key:</b> ".key($foods);
        output is
        Every array has a pointer.
        Initially the pointer points at the first value of the array
        Current Pointer points at value: orange
        Current Pointer points at key: 0
    */
?>
<?php
    /*
        $foods = ['orange', 'banana', 'apple', 'grapes'];
        next($foods);
        echo "<b>Current Pointer points at value:</b> ".current($foods)."<br>";
        echo "<b>Current Pointer points at key:</b> ".key($foods)."<br>";
        prev($foods);
        echo "<b>Current Pointer points at value:</b> ".current($foods)."<br>";
        echo "<b>Current Pointer points at key:</b> ".key($foods)."<br>";
        end($foods);
        echo "<b>Current Pointer points at value:</b> ".current($foods)."<br>";
        echo "<b>Current Pointer points at key:</b> ".key($foods);
        output is 
        Current Pointer points at value: banana
        Current Pointer points at key: 1
        Current Pointer points at value: orange
        Current Pointer points at key: 0
        Current Pointer points at value: grapes
        Current Pointer points at key: 3
    */
?>
<?php
    /*
        $foods = ['orange', 'banana', 'apple', 'grapes'];
        next($foods);
        next($foods);
        prev($foods);
        echo "<pre>";
        print_r(each($foods));
        echo "</pre>";
        output is 
        Array
        (
            [1] => banana
            [value] => banana
            [0] => 1
            [key] => 1
        ) 
    */
?>
<?php
    /*
        $foods = ['orange', 'banana', 'apple', 'grapes'];
        next($foods);
        next($foods);
        prev($foods);
        reset($foods);
        echo "<b>Current Pointer points at value:</b> ".current($foods)."<br>";
        echo "<b>Current Pointer points at key:</b> ".key($foods);  
        output is 
        Current Pointer points at value: orange
        Current Pointer points at key: 0   
        reset resets the pointer to the beginning  
    */
?>
<?php
    /*
        $colors = ['red', 'green', 'blue'];
        list($a, $b, $c) = $colors;
        echo "Value of a: $a<br>";
        echo "Value of b: $b<br>";
        echo "Value of c: $c<br>";
        output is 
        Value of a: red
        Value of b: green
        Value of c: blue
    */
?>
<?php
    /*
        $numbers = [1, 2, 3];
        list($a, $b, $c) = $numbers;
        echo "Value of a: $a<br>";
        echo "Value of b: $b<br>";
        echo "Value of c: $c<br>";
        output is 
        Value of a: 1
        Value of b: 2
        Value of c: 3
    */
?>
<?php
    /*
        $numbers = [1, 2, 3, 4];
        list($a, $b, $c) = $numbers;
        echo "Value of a: $a<br>";
        echo "Value of b: $b<br>";
        echo "Value of c: $c<br>";
        output is 
        Value of a: 1
        Value of b: 2
        Value of c: 3
    */
?>
<?php
    /*
        $numbers = [1, 2, 3];
        list($a, , $c) = $numbers;
        echo "Value of a: $a<br>";
        echo "Value of c: $c<br>";
        output is 
        Value of a: 1
        Value of c: 3
    */
?>
<?php
    /*
        $numbers = [1, 2, 3];
        list( , , $c) = $numbers;
        echo "Value of c: $c<br>";
        output is 
        Value of c: 3
    */
?>
<?php
    /*
        $colors = [0  => 'red', 1 => 'green', 2 => 'blue'];
        list($a, $b, $c) = $colors;
        echo "Value of a: $a<br>";
        echo "Value of b: $b<br>";
        echo "Value of c: $c<br>";
        output is 
        Value of a: red
        Value of b: green
        Value of c: blue
    */
?>
<?php
    /*
        $colors = [0  => 'red', 'a' => 'green', 2 => 'blue'];
        list($a, $b, $c) = $colors;
        echo "Value of a: $a<br>";
        echo "Value of b: $b<br>";
        echo "Value of c: $c<br>";
        an error is shown
        the error happens because implicitly $a is assigned $colors[0], $b is assigned $colors[1], $c is assigned $colors[2]
        since $colors[1] is not defined the error happens
    */
?>
<?php
    /*
        $colors = [0  => 'red', 1 => 'green', 2 => 'blue'];
        list($a[0], $a[1], $a[2]) = $colors;
        echo "Value of index 0 of array a: $a[0]<br>";
        echo "Value of index 1 of array a: $a[1]<br>";
        echo "Value of index 2 of array a: $a[2]<br>";
        output is 
        Value of index 0 of array a: red
        Value of index 1 of array a: green
        Value of index 2 of array a: blue
    */
?>
<?php
    /*
        $colors = [0  => 'red', 1 => 'green', 2 => 'blue'];
        list($a[0], ,$a[1]) = $colors;
        echo "Value of index 0 of array a: $a[0]<br>";
        echo "Value of index 1 of array a: $a[1]<br>";
        Value of index 0 of array a: red
        Value of index 1 of array a: blue
    */
?>
<?php
    /*
        $colors = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];
        extract($colors); three variables a, b and c are created, note the name of the variables are the name of the keys, the values stored in the variables are the values of the keys
        echo "Value of a: $a<br>";
        echo "Value of b: $b<br>";
        echo "Value of c: $c<br>";
        output is 
        Value of a: red
        Value of b: green
        Value of c: blue
    */
?>
<?php
    /*
        $a = "orange";
        $colors = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];
        extract($colors);
        echo "Value of a: $a<br>";
        echo "Value of b: $b<br>";
        echo "Value of c: $c<br>";
        output is still 
        Value of a: red
        Value of b: green
        Value of c: blue
    */
?>
<?php
    /*
        $a = "orange";
        $colors = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];
        extract($colors, EXTR_OVERWRITE); output is same as output when extract($colors) was typed, this is because by default EXTR_OVERWRITE is taken as second parameter value
        echo "Value of a: $a<br>";
        echo "Value of b: $b<br>";
        echo "Value of c: $c<br>";
        output is still 
        Value of a: red
        Value of b: green
        Value of c: blue
    */
?>
<?php
    /*
        $a = "orange";
        $colors = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];
        extract($colors, EXTR_SKIP); 
        echo "Value of a: $a<br>";
        echo "Value of b: $b<br>";
        echo "Value of c: $c<br>";
        output is 
        Value of a: orange
        Value of b: green
        Value of c: blue
    */
?>
<?php
    /*
        $a = "orange";
        $colors = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];
        extract($colors, EXTR_PREFIX_SAME, "test"); 
        echo "Value of a: $a<br>";
        echo "Value of a: $test_a<br>";
        echo "Value of b: $b<br>";
        echo "Value of c: $c<br>";
        output is 
        Value of a: orange
        Value of a: red
        Value of b: green
        Value of c: blue
    */
?>
<?php
    /*
        $a = "orange";
        $colors = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];
        extract($colors, EXTR_PREFIX_ALL, "test"); 
        echo "Value of a: $a<br>";
        echo "Value of a: $test_a<br>";
        echo "Value of b: $b<br>";
        echo "Value of c: $c<br>";
        an error would be shown, incase we typed EXTR_PREFIX_SAME we had to use the prefix only if there was a variable with the name of a key, but incase of EXTR_PREFIX_ALL we have to use the prefix before each key
    */
?>
<?php
    /*
        $a = "orange";
        $colors = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];
        extract($colors, EXTR_PREFIX_ALL, "test"); 
        echo "Value of a: $a<br>";
        echo "Value of a: $test_a<br>";
        echo "Value of b: $test_b<br>";
        echo "Value of c: $test_c<br>";
        output is 
        Value of a: orange
        Value of a: red
        Value of b: green
        Value of c: blue
    */
?>
<?php
    /*
        $firstname = "Yahoo";
        $lastname = "Baba";
        $age = "20";
        $newArray = compact("firstname", "lastname", "age");
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [firstname] => Yahoo
            [lastname] => Baba
            [age] => 20
        )
    */
?>
<?php
    /*
        $firstname = "Yahoo";
        $lastname = "Baba";
        $age = "20";
        $gender = "male";
        $country = "India";
        $extra = ["gender", "country"];
        $newArray = compact("firstname", "lastname", "age", $extra);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"; 
        output is 
        Array
        (
            [firstname] => Yahoo
            [lastname] => Baba
            [age] => 20
            [gender] => male
            [country] => India
        )  
    */
?>
<?php
    /*
        $newArray = range(1, 10);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"; 
        output is
        Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
            [3] => 4
            [4] => 5
            [5] => 6
            [6] => 7
            [7] => 8
            [8] => 9
            [9] => 10
        )
    */
?>
<?php
    /*
        $newArray = range(1, 10, 2);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"; 
        Array
        (
            [0] => 1
            [1] => 3
            [2] => 5
            [3] => 7
            [4] => 9
        )
    */
?>
<?php
    /*
        $newArray = range('a', 'h');
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"; 
        output is 
        Array
        (
            [0] => a
            [1] => b
            [2] => c
            [3] => d
            [4] => e
            [5] => f
            [6] => g
            [7] => h
        )
    */
?>
<?php
    /*
        $newArray = range('h', 'a');
        echo "<pre>";
        print_r($newArray);
        echo "</pre>"; 
        output is 
        Array
        (
            [0] => h
            [1] => g
            [2] => f
            [3] => e
            [4] => d
            [5] => c
            [6] => b
            [7] => a
        )
    */
?>
<?php
    /*
        foreach(range('h','a') as $letter){
            echo $letter."<br>";
        }
        output is 
        h
        g
        f
        e
        d
        c
        b
        a
    */
?>







