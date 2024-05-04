<?php session_start();
// 1. make sure user is not already in the database
// 2. make sure that pwd and repeat match
// 3. insert a new row
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "una_bball";

$user = trim($_POST['user']);
$pwd = trim($_POST['pwd']);
$repeat = trim($_POST['repeat']);

// TODO: make sure the password and repeat match

// TODO: write a sql statement to make sure the username has not
// been used before (if it has, send back to form w/ error message)



$password = password_hash($pwd, PASSWORD_DEFAULT);

$sql = "INSERT INTO users(username, password) VALUES('$user', '$password')";
if ($conn->query($sql) === TRUE) {
    $_SESSION['username'] = $user;
    unset($_SESSION['error']);
} else {
    $_SESSION['error'] = "Error: " . $sql . " " . $conn->error;
}

$conn->close();
header("location:index.php");
?>
