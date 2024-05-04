<?php // TODO: make sure that you can access the session ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>UNA Basketball 2018-2019</h2>
        <?php
            if (isset($_SESSION['error'])) {
                echo "<em>" . $_SESSION['error'] . "</em>";
                // TODO: clear the error after it has been displayed
            }
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                echo "Welcome, $username";
                include 'menu.html';
            } else {
        ?>
        <h3>Login</h3>
        <form action="authenticate.php" method="post">
            Username: <input type="text" name="enduser"><br>
            Password: <input type="password" name="userpass"><br>
            <input type="submit">
        </form>
        <p/>
        <a href="register.php">New User? Click here to register.</a>
        <?php
            }
        ?>
    </body>
</html>
