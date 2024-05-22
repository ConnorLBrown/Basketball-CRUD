<?php session_start();


$user = trim($_POST['user']);
$new_password = trim($_POST['pwd']);
$repeat = trim($_POST['repeat']);

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
