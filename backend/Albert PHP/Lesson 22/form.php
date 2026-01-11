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
<!--suppose after running file we type name as Yahoo Baba and age as 30 and we click the button Submit then we would be directed to another webpage weith url http://localhost/Albert%20PHP/Lesson%2022/testform.php?fname=Yahoo+Baba&age=30&save=Submit,
    Array
    (
        [fname] => Yahoo Baba
        [age] => 30
        [save] => Submit
    )
    Yahoo Baba
    30
    would be displayed in the webpage with url http://localhost/Albert%20PHP/Lesson%2022/testform.php?fname=Yahoo+Baba&age=30&save=Submit-->