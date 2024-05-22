<?php

session_start();

include 'validate.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "una_bball";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    $_SESSION['error'] = "500 Internal Server Error: contact system administrator";
}


$endUser = $endUserPassword = "";
$endUser = $_POST['enduser'];
$endUserPass = $_POST['endUserPass'];
$hashedPassword = "";


$sql = "SELECT password FROM users where username = '".$endUser."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    if ($row = $result->fetch_assoc()) {
        $hashedPassword = $row["password"];
    }
} else {
    $_SESSION['error'] = "invalid username or password";
    header("location:index.php");
    $conn->close();
    exit;
}

if (password_verify($userPass, $hashedPassword)) {
    $_SESSION['username'] = $endUser;
    unset($_SESSION['error']);
} else {
    $_SESSION['error'] = "invalid username or password";
}

$conn->close();

header("location:index.php");
?>

