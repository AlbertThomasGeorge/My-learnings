<?php
    $cookie_name = "user--name";
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
<!--first time we type url as http://localhost/Albert%20PHP/Lesson%2030/create_cookie.php and press enter Cookie is not yet saved by the browser or Cookies are disabled is displayed, on reloading the page with url http://localhost/Albert%20PHP/Lesson%2030/create_cookie.php Yahoo Baba is displayed-->
<!--setcookie has a fifth parameter domain which can be used if we have purchased a domain, setcookie has a sixth parameter named secure, it's set to false by default, if it is set to true only urls beginning with https can make the browser save a cookie, if it is set to false urls beginning with http or https can make the browser save a cookie, setcookie has a 
    seventh parameter named httponly, it is set to false by  default, if it is set to true only backend languages can access the value of a cookie, if it is set to false both backend and frontend languages can access the value of a cookie--> 