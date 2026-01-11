<?php
    /*
        echo "Some Message"."<br>";
        echo "Some Message"."<br>";
        echo "Some Message"."<br>";
        echo "Some Message"."<br>";
        echo "Some Message";
        output is 
        Some Message
        Some Message
        Some Message
        Some Message
        Some Message
    */
?>
<?php
    /*
        echo "Some Message"."<br>";
        echo "Some Message"."<br>";
        echo "Some Message"."<br>";
        die();
        echo "Some Message"."<br>";
        echo "Some Message";
        output is 
        Some Message
        Some Message
        Some Message
    */
?>
<?php
    /*
        echo "Some Message"."<br>";
        echo "Some Message"."<br>";
        echo "Some Message"."<br>";
        die("Simply stopping further code execution");
        echo "Some Message"."<br>";
        echo "Some Message";
        output is 
        Some Message
        Some Message
        Some Message
        Simply stopping further code execution
    */
?>
<?php
    /*
        echo "Some Message"."<br>";
        echo "Some Message"."<br>";
        echo "Some Message"."<br>";
        exit();
        echo "Some Message"."<br>";
        echo "Some Message";
        output is 
        Some Message
        Some Message
        Some Message
    */
?>
<?php
    /*
        echo "Some Message"."<br>";
        echo "Some Message"."<br>";
        echo "Some Message"."<br>";
        exit("Simply stopping further code execution");
        echo "Some Message"."<br>";
        echo "Some Message";
        output is 
        Some Message
        Some Message
        Some Message
        Simply stopping further code execution
    */
?>