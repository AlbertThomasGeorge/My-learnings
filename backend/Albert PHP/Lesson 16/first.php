<?php
    /*
        $str = "Hello world. It's a beautiful day.";
        $newArray = explode(" ", $str);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Hello
            [1] => world.
            [2] => It's
            [3] => a
            [4] => beautiful
            [5] => day.
        ) 
    */
?>
<?php
    /*
        $str = "Hello world. It's a beautiful day.";
        $newArray = explode(".", $str);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is
        Array
        (
            [0] => Hello world
            [1] =>  It's a beautiful day
            [2] => 
        )
        at index 2 is an empty string
    */
?>
<?php
    /*
        $str = "Hello world. It's a beautiful day";
        $newArray = explode(".", $str);
q
        output is 
        Array
        (
            [0] => Hello world
            [1] =>  It's a beautiful day
        )
    */
?>
<?php
    /*
        $str = "Hello world. It's a beautiful day";
        $newArray = explode(" ", $str, 4); there would be 4 values inside the array
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Hello
            [1] => world.
            [2] => It's
            [3] => a beautiful day
        )
    */
?>
<?php
    /*
        $str = "Hello world. It's a beautiful day";
        $newArray = explode(" ", $str, 1); there would be only 1 value inside the array
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Hello world. It's a beautiful day
        )
    */
?>
<?php
    /*
        $str = "Hello world. It's a beautiful day";
        $newArray = explode(" ", $str, 0); there would be only 1 value inside the array
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Hello world. It's a beautiful day
        )
    */
?>
<?php
    /*
        $str = "Hello world. It's a beautiful day";
        $newArray = explode(" ", $str, -1); day is not a value in the array
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Hello
            [1] => world.
            [2] => It's
            [3] => a
            [4] => beautiful
        )
    */
?>
<?php
    /*
        $str = "Hello world. It's a beautiful day";
        $newArray = explode(" ", $str, -2); day and beautiful is not a value in the array
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Hello
            [1] => world.
            [2] => It's
            [3] => a
        )
    */
?>
<?php
    /*
        $array = ['Hello', 'World!', 'Beautiful', 'Day!'];
        $str = implode(" ", $array);
        echo $str;
        output is Hello World! Beautiful Day!
    */
?>
<?php
    /*
        $array = ['Hello', 'World!', 'Beautiful', 'Day!'];
        $str = implode(",", $array);
        echo $str;
        output is Hello,World!,Beautiful,Day!
    */
?>
<?php
    /*
        $array = ['Hello', 'World!', 'Beautiful', 'Day!'];
        $str = implode("wow", $array);
        echo $str;
        output is HellowowWorld!wowBeautifulwowDay!
    */
?>
<?php
    /*
        $array = ['Hello', 'World!', 'Beautiful', 'Day!'];
        $str = implode("<br>", $array);
        echo $str;
        output is 
        Hello
        World!
        Beautiful
        Day!
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        $array = str_split($str);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Y
            [1] => a
            [2] => h
            [3] => o
            [4] => o
            [5] =>  
            [6] => B
            [7] => a
            [8] => b
            [9] => a
        )
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        $array = str_split($str, 2);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Ya
            [1] => ho
            [2] => o 
            [3] => Ba
            [4] => ba
        )
        */
?>
<?php
    /*
        $str  = "Yahoo Baba";
        $newStr = chunk_split($str, 1, "..");
        echo $newStr;
        output is Y..a..h..o..o.. ..B..a..b..a..
    */
?>
<?php
    /*
        $str  = "Yahoo Baba";
        $newStr = chunk_split($str, 2, "..");
        echo $newStr;
        output is Ya..ho..o ..Ba..ba..
    */
?>
<?php
    /*
        $str  = "Yahoo Baba";
        $newStr = chunk_split($str, 3, "<br>");
        echo $newStr;
        output is 
        Yah
        oo
        Bab
        a
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        $newStr = strtolower($str);
        echo $newStr;
        output is yahoo baba
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        $newStr = strtoupper($str);
        echo $newStr;
        output is YAHOO BABA
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        $newStr = lcfirst($str); first character of string str is converted to lowercase
        echo $newStr;
        output is yahoo Baba
    */
?>
<?php
    /*
        $str = "yahoo Baba";
        $newStr = ucfirst($str); first character of string str is converted to uppercase
        echo $newStr;
        output is Yahoo Baba
    */
?>
<?php
    /*
        $str = "yahoo baba";
        $newStr = ucwords($str); first character of every word is converted to uppercase
        echo $newStr;
        output is Yahoo Baba
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        echo strlen($str);
        output is 10 since there are 10 characters in string
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        echo str_word_count($str);
        output is 2
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        echo str_word_count($str, 0); second parameter is 0 by default
        output is 2
    */
?>
<?php
    /*
        $str = "Yah oo Baba";
        $array = str_word_count($str, 1);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Yah
            [1] => oo
            [2] => Baba
        )
    */
?>
<?php
    /*
        $str = "Yah oo Baba";
        $array = str_word_count($str, 2);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        output is 
        Array
        (
            [0] => Yah
            [4] => oo
            [7] => Baba
        ) 
        at index 0 of str is Y, at index 4 is the first o of str, at index 7 is B of str
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo substr_count($str, "world");
        output was 2 since world was there twice in str
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo substr_count($str, "world", 7); if the first character of the string str is H then the 7th charcter of the string str is w, only part of string after w is searched
        output is 1
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo substr_count($str, "world", 7, 15); starting from o which is the eight character if H is the first character 15 consecutive characters are searched
        output is 1 since world is found once
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo substr_count($str, "world", 7, 14);
        output is 0
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo substr_count($str, "World");
        output is 0
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo strpos($str, "world"); 
        output is 6, 6 is the index of w of the first world 
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo strpos($str, "world", 10); 
        output is 17, from d of first world onwards searching happens
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo strpos($str, "world", -20); 
        output is 17, from d of first world onwards searching happens
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo strrpos($str, "world"); 
        output is 17, the index of w of the last world in string is shown
    */
?>
<?php
    /* 
        strpos and strrpos are case sensitive
        incase substring to search is not found in string no index is shown 
    */
?>
<?php
    /*
        $str = "Hello WORLD. The World is nice";
        echo stripos($str, "world")."<br>";
        echo strripos($str, "world");
        output is 
        6
        17
        stripos and strripos are case insensitive
    */
?>
<?php
    /*
        $str = "Hello WORLD. The World is nice";
        echo stripos($str, "world", 10)."<br>"; starting index is 10
        echo strripos($str, "world");
        output is
        17
        17
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo strstr($str, "world"); there is also a third parameter which is set to false by default
        output is world. The world is nice
        whatever is after the first world encountered including the first world encountered is displayed
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo strstr($str, "world", true);
        output is Hello 
        whatever is before the first world encountered is displayed
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo strstr($str, "World", true);
        nothing is displayed
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo strstr($str, "World");
        nothing is displayed
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo stristr($str, "World", true);
        output is Hello , stristr is case insensitive
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo stristr($str, "World");
        output is world. The world is nice
    */
?>
<?php
    /* strchr works exactly the same way strstr works */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo strrchr($str, "world");
        output is world is nice
        whatever is after the last world encountered including the last world encountered is displayed
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo strpbrk($str, "d");
        output is d. The world is nice
        whatever is after the first d encountered including the first d encountered is displayed
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo strpbrk($str, "oe");
        output is ello world. The world is nice
        whatever is after the first letter which can be either o or e encountered including the first letter encountered that is either o or e is displayed
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo substr($str, 6);
        output is world. The world is nice
        whatever is after index 5 of string str is displayed
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo substr($str, -4); 
        output is nice
        whatever is after index -5 is displayed
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo substr($str, 0, 10); 0 is starting index
        output is Hello worl
        10 charcters starting from index 0 is displayed
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo substr($str, 10, -8); 10 is starting index
        output is d. The world, the last 8 charcters are not displayed
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo substr($str, -10, -3); //-10 is starting index
        output is ld is n 
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo str_replace("world", "earth", $str);
        output is Hello earth. The earth is nice
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo str_replace("world", "", $str);
        output is Hello . The is nice, only one space is displayed
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";  
        $find = ["Hello", "world"];
        $replace = ["Hi", "Earth"];
        echo str_replace($find, $replace, $str);
        output is Hi Earth. The Earth is nice
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";  
        $find = ["Hello", "World"];
        $replace = ["Hi", "Earth"];
        echo str_replace($find, $replace, $str);
        output is Hi world. The world is nice
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";  
        $find = ["Hello", "World"];
        $replace = ["Hi", "Earth"];
        echo str_ireplace($find, $replace, $str);
        output is Hi Earth. The Earth is nice
        str_ireplace is case insensitive
    */
?>
<?php
    /*
        $colors = ["blue", "red", "green", "yellow"];
        echo "<pre>";
        print_r(str_replace("red", "pink", $colors));
        echo "</pre>";
        output is 
        Array
        (
            [0] => blue
            [1] => pink
            [2] => green
            [3] => yellow
        )
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo substr_replace($str, "Earth", 6); starting index is 6, 6 upto end everything there would be replaced to Earth
        output is Hello Earth
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo substr_replace($str, "Earth", 6, 10); starting index is 6, length is 10  
        output is Hello Earth world is nice  
        10 characters starting from index 6 onwards would be replaced to Earth
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo substr_replace($str, "Earth", 6, -4);
        output is Hello Earthnice
        last 4 characters are not replaced, except for that everything starting from index 6 onwards is replaced
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo substr_replace($str, "Earth", 0, 0);
        output is EarthHello world. The world is nice
        Earth is added at the beginning of string in str
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        echo strtr($str, "oe", "ai");
        output is Hilla warld. Thi warld is nici
        all e's in string str are replaced with i, all o's in string str are replaced with a
    */
?>
<?php
    /*
        $str = "Hello world. The world is nice";
        $array = ["Hello" => "Hi", "world" => "earth"];
        echo strtr($str, $array);
        output is Hi earth. The earth is nice
        Hello is replaced with Hi, world is replaced with earth in string str
    */
?>
<?php
    /*
        echo strcmp("Hello world!", "Hello world!");
        output is 0 since both the strings are the same
    */
?>
<?php
    /*
        echo strcmp("Hello world!", "Hello");
        output is 7 since first string has 7 more characters than the second string
    */
?>
<?php
    /*
        echo strcmp("Hello world!", "Hello world! Hello");
        output is -6 since the second string has 6 more characters than the first string
    */
?>
<?php
    /*
        echo strncmp("Hello world!", "Hello world! Hello", 6);
        output is 0
        the first six characters of both the strings are compared, since they are equal 0 is returned
    */
?>
<?php
    /*
        echo strncmp("Hello world!", "hello world! Hello", 6);
        the first six characters of both the strings are compared, output is -1 since ascii value of h is more than the ascii value of H
    */
?>
<?php
    /*
        echo strcasecmp("Hello world!", "hello world!");
        output is 0 since both the strings given are considered equal, strcasecmp is case insensitive
    */
?>
<?php
    /*
        echo strcasecmp("Hello world!", "hello world! Hello");
        output is -6 since the second string has 6 more characters than the first string
    */
?>
<?php
    /*
        echo strcasecmp("Hello World!", "hello world! Hello",  5);
        output is 0, the first 5 characters of the the two strings are checked whether same or not without bothering case
    */
?>
<?php
    /*
        echo strnatcmp("hello world!", "hello world!");
        output is 0 since both the strings are the same
    */
?>
<?php
    /*
        echo strnatcmp("2hello world!", "10hello world!");
        output is -1 since the 2 of the first string is smaller than the 10 of the second string
    */
?>
<?php
    /*
        echo strcmp("2hello world!", "10hello world!");
        output is 1 since ascii value of 2 of first string is more than ascii value of 1 of second string
    */
?>
<?php
    /*
        echo strnatcmp("2hello world!", "2hello WORLD!");
        output is 1 since the ascii value of w of first string is more than the ascii value of W of second string
    */
?>
<?php
    /*
        echo strnatcasecmp("2hello world!", "2hello WORLD!");
        output is 0 since both the strings are the same if case is not bothered 
    */
?>
<?php
    /*
        echo substr_compare("hello world!", "world!", 6);
        output is 0 
        everything that is after index 5 of the string hello world! is compared with world!, since they are the same output is 0
    */
?>
<?php
    /*
        echo substr_compare("hello world!", "World!", 6);
        everything that is after index 5 of the string hello world! is compared with World!, since world! is not same as World! if cases are also matched output is not 0
        since ascii value of w of first string is more than the ascii value of W of second string output is 1 
    */
?>
<?php
    /*
        echo substr_compare("hello world!", "world!", 0);
        the full first string is compared with world!, since the ascii value of h of first string is smaller than the ascii value of w of second string, so -1 is returned
    */
?>
<?php
    /*
        echo substr_compare("hello world!", "world!", 0, 3); 
        hel of first string is compared with  wor of second string, since ascii value of h of first string is smaller than the ascii value of w of second string the output is -1
    */
?>
<?php
    /*
        echo substr_compare("hello world!", "world!", 6, 3);
        wor of first string is compared with wor of second string, since they are the same the output is 0
    */ 
?>
<?php
    /*
        echo substr_compare("hello world!", "world!", -2, -2);
        d! of first string is compared with wo of second string, since ascii value of d of first string is smaller than the ascii value of w of second string the output is -1
    */
?>
<?php
    /*
        echo substr_compare("hello world!", "d!", -2, 2);
        d! of first string i compared with d! of second string, output is 0
    */
?>
<?php
    /*
        echo substr_compare("hello worlD!", "d!", -2, 2, TRUE); default value of the fifth parameter is false
        output is 0 since D! of first string is same as d! of second string if case is ignored
    */
?>
<?php
    /*
        echo substr_compare("hello worlD!", "d!", -2, 2);
        D! of first string is compared with d! of second string, since the ascii value of D of first string is lower than the ascii value of d of second string the output is -1
    */
?>
<?php
    /*
        echo similar_text("hello worlD!", "Hello yahoobaba");
        output is 6, ello  is the longest continuous string that is present in both the strings, it's length is 5, left of ello  in first string is h, left of ello  in second string is H, the longest continuous string common between h and H is having length 0, right of ello  in first string is worlD!, right of ello  in second 
        string is yahoobaba, the longest continuous string common between worlD! and yahoobaba is o which has a length of 1, left of o within worlD! is w, left of first o within yahoobaba is yah, the longest continuous string common between w and yah has a length of 0, right of o within worlD! is rlD!,  right of first o within 
        yahoobaba is obaba, the longest continuous string  common between rlD! and obaba has a length of 0, so the final output is sum of all lengths of longest continuous strings that were common which is 5+0+1+0+0 i.e. 6
    */
?>
<?php
    /*
        echo similar_text("hello worlD!", "Hello yahoobaba", $percent)."<br>";
        echo "Percentage = $percent";
        output is 
        6
        Percentage = 44.444444444444
        percentage is calculated by the formula, percentage = (2 × matched_characters) ÷ (length_of_string1 + length_of_string2) × 100
                                                            = (2*6) + (12+15) * 100 
    */
?>
<?php
    /*
        echo strrev("Yahoo Baba");
        output is abaB oohaY
    */
?>
<?php
    /*
        echo str_shuffle("Yahoo Baba");
        output maybe BaaYhoa bo
        each time webpage is refreshed all characters in the string are shuffled randomly
    */
?>
<?php
    /*
        $str = "Hello World";
        echo str_pad($str, 20, ".");
        output is Hello World........., the total length of the string displayed is 20, by default the dots would appear at the right 
    */
?>
<?php
    /*
        $str = "Hello World";
        echo str_pad($str, 20, "+=");
        output is Hello World+=+=+=+=+, the total length of the string displayed is 20 
    */
?>
<?php
    /*
        $str = "Hello World";
        echo str_pad($str, 20, "-", STR_PAD_LEFT);
        output is ---------Hello World, the total length of the string displayed is 20
    */
?>
<?php
    /*
        $str = "Hello World";
        echo str_pad($str, 20, "-", STR_PAD_BOTH);
        output is ----Hello World-----, the total length of the string displayed is 20, the string Hello World! has 11 characters already, 9 minuses are to be added, since the number is odd minuses are put in such a way that there would be 1 more minus in the right when compared to left of original string, if even number of minuses
        were to be put the number of minuses to be placed at the left and the right would be the same
    */
?>
<?php
    /*
        $str = "Hello World";
        echo str_pad($str, 20, "-", STR_PAD_RIGHT);
        output is Hello World---------, total length  of string displayed is 20
    */
?>
<?php
    /*
        $str = "WOW";
        echo str_repeat($str, 5);
        output is WOWWOWWOWWOWWOW, WOW is repeated 5 times
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        echo trim($str, "a");
        output is Yahoo Bab, all a's from the extreme left and right of string are rmmoved, since there was only one a it was only removed
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        echo trim($str, "Y");
        output is ahoo Baba, all Y's from the extreme left and right of string are removed, since there was only one Y it was only removed
    */
?>
<?php   
    /*
        $str = "Yahoo Baba";
        echo trim($str, "b");
        output is Yahoo Baba, all b's from the extreme left and right of sstring are remmoved, since there was no b at the extreme left and right nothing was removed
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        echo trim($str, "ba");
        output is Yahoo B, all b's and a's from the extreme left and right are removed
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        echo trim($str, "Yba");
        output is hoo B, all Y's, b's and a's are removed from the extreme left and right of the string
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        echo rtrim($str, "Yba");
        output is Yahoo B, all Y's, b's and a's from the extreme right of the string are only removed
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        echo ltrim($str, "Yba");
        output is hoo Baba, all Y's, b's and a's from the extreme left of the string are only removed
    */
?>
<?php
    /*
        $str = "    Yahoo Baba ";
        echo trim($str);
        output is Yahoo Baba with no space at the end or beginning of Yahoo Baba 
    */
?>
<?php
    /*
        $str = "    Yahoo Baba ";
        echo rtrim($str);
        output is Yahoo Baba with no space at the end of Yahoo Baba
        the webpage hides the space at the beginning of Yahoo Baba, so it is not visible
    */
?>
<?php
    /*
        $str = "Yahoo Baba";
        echo chop($str, "Yba");
        output is Yahoo B, all Y's, b's and a's from the extreme right of the string are removed
    */
?>
<?php
    /*
        $str = "Yahoo Baba ";
        echo chop($str);
        output is Yahoo Baba, the space at the end of the Yahoo Baba is removed
    */
?>
<?php
    /*
        $str = "Hello I am 'Yahoo Baba'";
        echo $str."<br>";
        echo addslashes($str);
        output is 
        Hello I am 'Yahoo Baba'
        Hello I am \'Yahoo Baba\'
    */
?>
<?php
    /*
        $str = 'Hello I am "Yahoo Baba"';
        echo $str."<br>";
        echo addslashes($str);
        output is 
        Hello I am "Yahoo Baba"
        Hello I am \"Yahoo Baba\"
    */
?>
<?php
    /*
        $str = 'Hello I am "Yahoo Baba"';
        echo $str."<br>";
        $newStr = addslashes($str);
        echo stripslashes($newStr)."<br>";
        echo $newStr;
        output is 
        Hello I am "Yahoo Baba"
        Hello I am "Yahoo Baba"
        Hello I am \"Yahoo Baba\"
    */
?>
<?php
    /*
        $str = 'Hello I am Yahoo Baba';
        echo $str."<br>";
        $newStr = addcslashes($str, "Y"); \ is added  before all Y's in string str
        echo $newStr;
        output is 
        Hello I am Yahoo Baba
        Hello I am \Yahoo Baba
    */
?>
<?php
    /*
        $str = 'Hello I am Yahoo Baba';
        echo $str."<br>";
        $newStr = addcslashes($str, "Ya"); \ is added before all Y's and a's in string str
        echo $newStr;
        output is 
        Hello I am Yahoo Baba
        Hello I \am \Y\ahoo B\ab\a
    */
?>
<?php
    /*
        $str = 'Hello I am Yahoo Baba';
        echo $str."<br>";
        $newStr = addcslashes($str, "A..Z"); \ is added before all letters from A to Z in string str
        echo $newStr;     
        output is
        Hello I am Yahoo Baba
        \Hello \I am \Yahoo \Baba 
    */  
?>
<?php
    /*
        $str = 'Hello I am Yahoo Baba';
        echo $str."<br>";
        $newStr = addcslashes($str, "a..z"); \ is added before all letters from a to z in string str
        echo $newStr;
        output is
        H\e\l\l\o I \a\m Y\a\h\o\o B\a\b\a
    */
?>
<?php
    /*
        $str = 'Hello I am Yahoo Baba';
        echo $str."<br>";
        $newStr = addcslashes($str, "a..f"); \ is added before all letters from a to f in string str
        echo $newStr;
        output is 
        Hello I am Yahoo Baba
        H\ello I \am Y\ahoo B\a\b\a
    */
?>
<?php
    /*
        $str = 'Hello I am Yahoo Baba';
        echo $str."<br>";
        $newStr = addcslashes($str, "a..f"); \ is added before all letters from a to f in string str
        echo stripslashes($newStr)."<br>";
        echo $newStr;        
        output is 
        Hello I am Yahoo Baba
        Hello I am Yahoo Baba
        H\ello I \am Y\ahoo B\a\b\a
    */
?>
<?php
    /*
        $str = "A 'quote' is <b>bold</b>";
        echo $str."<br>";
        echo htmlentities($str);
        output is 
        A 'quote' is bold
        A 'quote' is <b>bold</b>
        when right click on webpage and click view page source 
        A 'quote' is <b>bold</b><br>A 'quote' is &lt;b&gt;bold&lt;/b&gt; is displayed 
        single quote is not converted to it's corresponding html entity, <, > are converted however
    */
?>
<?php
    /*
        $str  = '<a href="https://www.yahoobaba.net">Yahoo Baba</a>';
        echo $str."<br>";
        echo htmlentities($str);
        output is 
        Yahoo Baba
        <a href="https://www.yahoobaba.net">Yahoo Baba</a>
        when right click on webpage and click view page source
        <a href="https://www.yahoobaba.net">Yahoo Baba</a><br>&lt;a href=&quot;https://www.yahoobaba.net&quot;&gt;Yahoo Baba&lt;/a&gt; is displayed
        <. > and " are conerted to their corresponding html entities
    */
?>
<?php
    /*
        $str = "A 'quote' is <b>bold</b>";
        echo $str."<br>";
        echo htmlentities($str, ENT_QUOTES);
        output is
        A 'quote' is bold
        A 'quote' is <b>bold</b>
        when right click on webpage and click view page source 
        A 'quote' is <b>bold</b><br>A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt; is displayed 
        <, >, ' and " are converted to their corresponding html entities 
    */
?>
<?php
    /*
        $str = "A 'quote' is <b>bold</b>";
        echo $str."<br>";
        echo htmlentities($str, ENT_NOQUOTES);
        output is 
        A 'quote' is bold
        A 'quote' is <b>bold</b>
        when right click on webpage and click view page source 
        A 'quote' is <b>bold</b><br>A 'quote' is &lt;b&gt;bold&lt;/b&gt; is displayed
        < and > are converted to their corresponding html entities, ' and " are nott converted to their corresponding html entities
    */
?>
<?php
    /*
        $str  = '<a href="https://www.yahoobaba.net">Yahoo Baba</a>';
        echo $str."<br>";
        echo htmlentities($str, ENT_NOQUOTES);
        output is
        Yahoo Baba
        <a href="https://www.yahoobaba.net">Yahoo Baba</a>
        when right click on webpagge and click view page source
        <a href="https://www.yahoobaba.net">Yahoo Baba</a><br>&lt;a href="https://www.yahoobaba.net"&gt;Yahoo Baba&lt;/a&gt; is displayed
        < and > are converted to their corresponding html entities, ' and " are nott converted to their corresponding html entities        
    */
?>
<?php
    /*
        $str  = '<a href="https://www.yahoobaba.net">Yahoo Baba</a>';
        echo $str."<br>";
        echo htmlspecialchars($str, ENT_NOQUOTES);
        output is
        Yahoo Baba
        <a href="https://www.yahoobaba.net">Yahoo Baba</a>
        when right click on webpagge and click view page source
        <a href="https://www.yahoobaba.net">Yahoo Baba</a><br>&lt;a href="https://www.yahoobaba.net"&gt;Yahoo Baba&lt;/a&gt; is displayed
        < and > are converted to their corresponding html entities, ' and " are nott converted to their corresponding html entities     
    */
?>
<?php
    /*
        $str  = '<a href="https://www.yahoobaba.net">Yahoo Baba</a>';
        echo $str."<br>";
        $htmlent = htmlentities($str, ENT_NOQUOTES);
        echo $htmlent."<br>";
        echo html_entity_decode($htmlent)."<br>";
        echo $htmlent;
        output is 
        Yahoo Baba
        <a href="https://www.yahoobaba.net">Yahoo Baba</a>
        Yahoo Baba
        <a href="https://www.yahoobaba.net">Yahoo Baba</a>
        when right click on webpage and click view page source
        <a href="https://www.yahoobaba.net">Yahoo Baba</a><br>&lt;a href="https://www.yahoobaba.net"&gt;Yahoo Baba&lt;/a&gt;<br><a href="https://www.yahoobaba.net">Yahoo Baba</a><br>&lt;a href="https://www.yahoobaba.net"&gt;Yahoo Baba&lt;/a&gt; is displayed
    */
?>
<?php
    /*
        $str  = '<a href="https://www.yahoobaba.net">Yahoo Baba</a>';
        echo $str."<br>";
        $htmlent = htmlspecialchars($str, ENT_NOQUOTES);
        echo $htmlent."<br>";
        echo htmlspecialchars_decode($htmlent)."<br>";
        echo $htmlent;
        output is 
        Yahoo Baba
        <a href="https://www.yahoobaba.net">Yahoo Baba</a>
        Yahoo Baba
        <a href="https://www.yahoobaba.net">Yahoo Baba</a>
        when right click on webpage and click view page source 
        <a href="https://www.yahoobaba.net">Yahoo Baba</a><br>&lt;a href="https://www.yahoobaba.net"&gt;Yahoo Baba&lt;/a&gt;<br><a href="https://www.yahoobaba.net">Yahoo Baba</a><br>&lt;a href="https://www.yahoobaba.net"&gt;Yahoo Baba&lt;/a&gt; is displayed 
    */
?>
<?php
    /*
        echo "<pre>";
        print_r(get_html_translation_table(HTML_SPECIALCHARS));
        echo "</pre>";
        output is 
        Array
        (
            ["] => "
            [&] => &
            [<] => <
            [>] => >
        )
        when right click on webpage and click view page source 
        <pre>Array
        (
            ["] => &quot;
            [&] => &amp;
            [<] => &lt;
            [>] => &gt;
        )
        </pre>
        is displayed, what is displayed is the characters that can be converted to html entities with help of htmlspecialchars function
    */
?>
<?php
    /*
        echo "<pre>";
        print_r(get_html_translation_table(HTML_ENTITIES));
        echo "</pre>";
        output is a very huge array, ' is not included since it is not convertable to html entity by defaut
        when right click on webpage and click view page source a huge array is shown, the values of the array are html entities, single quote's html entity is not mentioned
    */
?>
<?php
    /*
        $str = "Hello";
        echo "md5 : ".md5($str, TRUE)."<br>";
        echo "md5 : ".md5($str);
        output is 
        md5 : ��S�a��'���x�
        md5 : 8b1a9953c4611296a827abf8c47804d7, length is 32 always irrespective of string value
        md5 is used for protection
    */
?>
<?php
    /*
        $str = "Hello";
        echo "sha1 : ".sha1($str, TRUE)."<br>";
        echo "sha1 : ".sha1($str);
        output is 
        sha1 : ����{���p�Z]x^��Ы�
        sha1 : f7ff9e8b7bb2e09b70935a5d785e0cc5d9d0abf0, length is always 40 irrespective of string value
        sha1 is used for protection
    */
?>
<?php
    /*
        $str = "Hello";
        if(md5($str) == "8b1a9953c4611296a827abf8c47804d7"){
            echo "Password Matched";
        }
        output is Password Matched
    */
?>
<?php
    /*
        $str = "Hello";
        if(md5($str) == "8b1a9953c4610296a827abf8c47804d7"){
            echo "Password Matched";
        }
        nothing is displayed in webpage
    */
?>
<?php
    /*
        $str = "Hello World";
        echo convert_uuencode($str);
        output is +2&5L;&\@5V]R;&0` `
    */
?>
<?php
    /*
        $str = "Hello World";
        $encodeString = convert_uuencode($str);
        echo $encodeString."<br>";
        $decodeString = convert_uudecode($encodeString);
        echo $decodeString;
        output is 
        +2&5L;&\@5V]R;&0` `
        Hello World
    */
?>
<?php
    /*
        echo bin2hex("Hello World");
        output is 48656c6c6f20576f726c64
    */
?>
<?php
    /*
        echo bin2hex("Hello World Hello Earth");
        output is 48656c6c6f20576f726c642048656c6c6f204561727468
    */
?>
<?php
    /*
        $str = bin2hex("Hello World Hello Earth");
        echo $str."<br>";
        echo hex2bin($str);
        output is 
        48656c6c6f20576f726c642048656c6c6f204561727468
        Hello World Hello Earth
    */
?>
<?php
    /*
        $str = chr(65); 65 is ASCII value of A
        echo $str;
        output is A
    */
?>
<?php
    /*
        $str = chr(0120); 0120 is an octal value
        echo $str;
        output is P 
    */
?>
<?php
    /*
        $str = chr(0x48); 
        echo $str;
        output is H
    */
?>
<?php
    /*
        $asciiValue = ord("A");
        echo $asciiValue;
        output is 65
    */
?>
<?php
    /*
        $asciiValue = ord("Apple");
        echo $asciiValue;
        output is 65 which is the ascii value of the first character of the string Apple
    */
?>
<?php
    /*
        $str = "Hello <b>World</b>, Hello <i>Earth</i>";
        echo $str."<br>";
        echo strip_tags($str);
        output is 
        Hello World, Hello Earth (here World is bold and Earth is itallic)
        Hello World, Hello Earth (here World is not bold and Earth is not itallic)
    */
?>
<?php
    /*
        $str = "Hello <b>World</b>, Hello <i>Earth</i>";
        echo $str."<br>";
        echo strip_tags($str, "<b>"); bold is allowed
        output is 
        Hello World, Hello Earth (here World is bold and Earth is itallic)
        Hello World, Hello Earth (here World is bold and Earth is not itallic)
    */
?>
<?php
    /*
        $str = "This world is beautiful";
        echo wordwrap($str, 10, "<br>");
        output is 
        This world
        is
        beautiful
        words are never split when there are only three parameters mentioned in wordwrap function, the line break happens or not depending on the value of the second parameter, the second parameter when there are only three parameters mentioned in the wordwrap function indicates the maximum characters in a line which may or may
        not be fulfilled as it has less priority than the rule that the words are to not be splitted, in this case This world has a total of 10 charcters which is less than or eaual to 10, so This world is displayed in one line, next line only has is not is beautiful because number of characters of is beautiful is 12 which is 
        more than 10
    */
?>
<?php
    /*
        $str = "This world is beautiful";
        echo wordwrap($str, 5, "<br>");
        output is 
        This 
        world
        is 
        beautiful
        here in this case since This world has a total of 10 charcters which is more than 5 only This appears in the first line, second line since world is has a total of 8 characters which is more than 5 only world appears, third line since is beautiful has a total of 12 characters which is more than 5 only is appears, fourth 
        line the whole word beautiful is displayed even though beautiful has a total of 9 charcters which is more than 5 because more than priority of maximum characters in a line is the priority of the rule that words are not to be splitted when wordwrap function has only three parameters mentioned
    */
?>
<?php
    /*
        $str = "This world is beautiful";
        echo wordwrap($str, 4, "<br>", TRUE);
        output is 
        This
        worl
        d is
        beau
        tifu
        l
        each line has strictly 4 characters excluding space which may be at the end sometimes as after This unlike after beau
    */
?>

