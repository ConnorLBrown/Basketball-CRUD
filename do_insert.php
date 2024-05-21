<?php session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    exit(0);
}


// TODO: insert the new school based on data from the insert.php form

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "una_bball";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT into opponent(school, city, state) VALUES('$_POST[school]','$_POST[city]','$_POST[state]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location:index.php");
?>
