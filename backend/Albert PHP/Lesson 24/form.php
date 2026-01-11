<html>
    <head>
        <title>Form Pge</title>
    </head>
    <body>
        <form action="testform.php" method="get">
            <label>Name: </label>
            <input type="text" name="fname"><br><br>
            <label> Age: </label>
            <input type="text" name="age"><br><br>
            <input type="submit" name="save"> <!--a button with Submit mentioned is made-->
        </form>
    </body>
</html>
<!--suppose after running file we type name as Yahoo Baba and age as 30 and we click the button Submit then we would be directed to another webpage weith url http://localhost/Albert%20PHP/Lesson%2024/testform.php?fname=Yahoo+Baba&age=30&save=Submit,
    output displayed in the webpage with url http://localhost/Albert%20PHP/Lesson%2024/testform.php?fname=Yahoo+Baba&age=30&save=Submit would include
    Array
    (
        [SERVER_NAME] => localhost
        [SERVER_PORT] => 80
        [QUERY_STRING] => fname=Yahoo+Baba&age=30&save=Submit
        [REQUEST_URI] => /Albert%20PHP/Lesson%2024/testform.php?fname=Yahoo+Baba&age=30&save=Submit
        [SCRIPT_NAME] => /Albert PHP/Lesson 24/testform.php
        [PHP_SELF] => /Albert PHP/Lesson 24/testform.php
    )
    80
    localhost-->
