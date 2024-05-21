<?php session_start();
// 1. make sure user is not already in the database
// 2. make sure that pwd and repeat match
// 3. insert a new row


$user = trim($_POST['user']);
$new_password = trim($_POST['pwd']);
$repeat = trim($_POST['repeat']);

// TODO: make sure the password and repeat match
if (!($repeat === $new_password)) {
    $_SESSION['error'] = "Error: passwords must match";
    header("location:register.php");
    exit;
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "una_bball";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// TODO: write a sql statement to make sure the username has not
// been used before (if it has, send back to form w/ error message)

$sql = "SELECT * FROM users where username = '$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $_SESSION['error'] = "Error: invalid username";
    header("location:register.php");
    $conn->close();
    exit;
}



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
