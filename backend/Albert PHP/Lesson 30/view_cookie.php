<?php
    echo "Cookie Value : ".$_COOKIE["user--name"];
    setcookie("user--name", "", time()-(86400*30), "/");
?>
<!--after the browser has saved a cookie named user--name if we type http://localhost/Albert%20PHP/Lesson%2030/view_cookie.php for the first time as url and press enter we get output Cookie Value : Yahoo Baba-->
<!--during first time loading of page with url http://localhost/Albert%20PHP/Lesson%2030/view_cookie.php after browser saves a cookie named user--name the server runs view_cookie.php file, when it encounters the line setcookie("user--name", "", time()-(86400*30), "/"); it makes a note to delete a cookie named user--name, after first time page loading of page with url  
    http://localhost/Albert%20PHP/Lesson%2030/view_cookie.php after browser saves a cookie named user--name and before page reloading after first time page loading of page with url http://localhost/Albert%20PHP/Lesson%2030/view_cookie.php after browser saves a cookie named user--name the browser deletes the cookie named user--name, so after page reloading after first time page loading of page with url 
    http://localhost/Albert%20PHP/Lesson%2030/view_cookie.php after browser saves a cookie named user--name an error would be shown because there would be no key named user--name in $_COOKIE array-->