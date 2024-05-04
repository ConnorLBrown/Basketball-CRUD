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
        <form action="do_insert.php" method="post">
            School: <input type="text" name="school"><br/>
            City: <input type="text" name="city"><br />
            State: <input type="text" name="state"><br />
            <br/>
            <input type="submit"/>
        </form>
    </body>
</html>
