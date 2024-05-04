<?php session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    exit(0);
}

// TODO: validate the input form data

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "una_bball";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE opponent SET city='$_POST[city]', state='$_POST[state]' WHERE id='$_POST[id]'";
if ($conn->query($sql) === TRUE) {
    $_SESSION['error'] = '';
} else {
    $_SESSION['error'] = "Error updating record: " . $conn->error;
}

$conn->close();

header("location:index.php");
?>
