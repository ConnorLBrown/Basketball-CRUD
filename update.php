<?php session_start();
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
        Enter the name of the school to update.
        <form action="display_for_update.php" method="post">
            School: <input type="text" name="school" />
            <input type="submit" />
        </form>
    </body>
</html>
