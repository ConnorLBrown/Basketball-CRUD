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

        <a href="index.php">Main menu</a>

    </body>
</html>
