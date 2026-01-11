<?php
    $cookie_name = "user";
    $cookie_value = "Yahoo Baba";
    setcookie($cookie_name, $cookie_value, time()+(86400*30), "/");
    // setcookie function must be before html code
?>
<html>
    <body>
        <?php
            echo $_COOKIE[$cookie_name];
        ?>
    </body>
</html>
<!--php code does not run on our computer always, it may run on some other computer called server, initially when we type localhost/Albert PHP/Lesson 27/create_cookie.php after setting a cookie that was not saved by the browser already the browser asks the server to run the code in create_cookie.php file, the server starts running the code line by line, when the server encounters the line 
    setcookie($cookie_name, $cookie_value, time()+(86400*30), "/"); the server just makes a note that the browser has to save a cookie named user with value Yahoo Baba, later when server encounters the line echo $_COOKIE[$cookie_name]; the server checks the array named $_COOKIE which contains list of cookies saved by browser, since the server just made a note to tell the browser to save a cookie but
    did not yet send the note as a result of which the cookie is not yet saved in the browser the array $_COOKIE does not contain key named user, so when server tries to run echo $_COOKIE[$cookie_name]; an error occurs, the error that occured is displayed in the webpage that is opened when localhost/Albert PHP/Lesson 27/create_cookie.php is typed as url for first time after setting a cookie that was not 
    saved by the browser already and enter is pressed, during second time page load after setting a cookie that was not saved by the browser already $_COOKIE contains "user" => "Yahoo Baba" because the note that php had made during first time page load after setting a cookie that was not not saved by the browser already was sent to the browser and the browser saved the cookie, but since server ran the
    full php code first after which only browser saved the cookie before second time page load after setting a cookie that was not saved by the browser already error had come during first time page load after setting a cookie that was not saved by the browser already, so after second time page load after setting a cookie that was not saved by the browser already Yahoo Baba is displayed-->
<!--the third parameter was mentioned as time()+(86400*30) which means that after 30 days since browser saved the cookie the cookie would be deleted-->
<!--/ was put as fourth parameter, it means that all urls beginning with http://localhost/ can access the saved cookie, if /Albert PHP/Lesson 27/ was put as fouth parameter it would mean all urls beginning with http://localhost/Albert PHP/Lesson 27/ can access the saved cookie--> 
