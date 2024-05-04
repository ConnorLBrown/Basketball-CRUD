<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    exit(0);
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "una_bball";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("500 Internal Server Error ");
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
            $sql = "SELECT * FROM opponent where school = '" . $_POST['school'] . "'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                if ($row = $result->fetch_assoc()) {
        ?>
                    <form name="f" action="do_update.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
                        <label ><?php echo $row['school']; ?></label><br/>
                        City: <input type="text" name="city" value="<?php echo $row['city']; ?>"><br/>
                        State: <input type="text" name="state" value="<?php echo $row['state']; ?>"><br/>
                        <br/>
                        <input type="submit" value="Update">
                    </form>
        <?php
                }
            } else {
                echo "There is no school by that name in the database.";
                echo"<a href='index.php'>Menu</a>";
            }
            $conn->close();
        ?>
    </body>
</html>
