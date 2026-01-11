<?php
    $cookie_name = "name";
    $cookie_value = "Yahoo Baba";
    setcookie($cookie_name, $cookie_value, time()+(86400*30), "/");
    // setcookie function must be before html code
?>
<html>
    <body>
        <?php
            if(!isset($_COOKIE[$cookie_name])){
                echo "Cookie is not yet saved by the browser or Cookies are disabled";
            }
            else{
                echo $_COOKIE[$cookie_name];
            }
        ?>
    </body>
</html>