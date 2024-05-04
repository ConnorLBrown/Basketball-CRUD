<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    exit(0);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <!-- TODO: sql select goes here (show everything except the id column -->
        <!-- TODO: display teams in alphabetic order -->

        <!-- link to main menu -->
        <a href="index.php">Main menu</a>

    </body>
</html>
