<!--html can be there within a php file-->
<?php
    /*
        <html>
            <head>
                <title>PHP</title>
            </head>
            <body>
                <?php 
                    echo "Hello"; o/p is Hello on screen 
                ?>
            </body>
        </html>
    */
?>
<?php
    /*
        <html>
            <head>
                <title>PHP</title>
            </head>
            <body>
                <?php 
                    echo ("Hello"); o/p is Hello on screen 
                ?>
            </body>
        </html>
    */
?>
<?php
    /*
        <html>
            <head>
                <title>PHP</title>
            </head>
            <body>
                <?php 
                    echo "Hello"."Hi"; o/p is HelloHi, . joins strings 
                ?>
            </body>
        </html>
    */
?>
<?php
    /*
        <html>
            <head>
                <title>PHP</title>
            </head>
            <body>
                <?php 
                    echo "Hello","Hi"; // o/p is HelloHi, , prints multiple values 
                ?>
            </body>
        </html>
    */
?>
<?php
    /*
        <html>
            <head>
                <title>PHP</title>
            </head>
            <body>
                <?php 
                    echo "<b>This text is bold</b>"; // This text is bold is display boldly 
                ?>
            </body>
        </html>
    */
?>
<?php
    /*
        <html>
            <head>
                <title>PHP</title>
            </head>
            <body>
                <?php 
                    echo 502.34; // 502.34 is displayed 
                ?>
            </body>
        </html>
    */
?>
<?php
    /*
        <html>
            <head>
                <title>PHP</title>
            </head>
            <body>
                <?php 
                    echo "<b>Yahoo"." Baba</b>"; // Yahoo Baba is displayed boldly 
                ?>
            </body>
        </html>
    */
?>
<?php
    /*
        echo "<h1><i>Yahoo"." Baba</i></h1>"; Yahoo Baba is displayed as h1 heading and it is itallic
        echo 567; 567 is displayed below Yahoo Baba that is displayed as h1 heading and is itallic
    */
?>
<!--print cannot print multiple values using comma-->
<?php
    print "<h1><i>Yahoo"." Baba</i></h1>"; // Yahoo Baba is displayed as h1 heading and it is itallic
    print 567; // 567 is displayed below Yahoo Baba that is displayed as h1 heading and is itallic
?>
