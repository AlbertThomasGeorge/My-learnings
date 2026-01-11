<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: http://localhost/Albert%20PHP/Lesson%2042/news-site/admin/index.php");
?>