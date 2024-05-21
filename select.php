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
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "una_bball";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * from opponent ORDER BY school ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data for each row
            while ($row = $result->fetch_assoc()) {
                echo "School: " .
                $row["school"] . "   \   City: " .
                $row["city"] . "   \   State: " .
                $row["state"] .
                "<br>";
            }
        
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

        <!-- link to main menu -->
        <a href="index.php">Main menu</a>

    </body>
</html>
