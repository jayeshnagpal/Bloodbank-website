<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adbms";

$conn = mysqli_connect($servername, $username, $password, $dbname);
print_r($_POST);
/*
$username = $_POST['user'];
$password = $_POST['pass'];
print_r($username);
*/
if ( isset($_POST['user']) ) {
    print_r($_POST['user']);
}
else echo('Nothing');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->close();

?>