<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adbms";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ( isset($_POST['email']) ) {
    print_r($_POST['email']);
}
else echo('Nothing');

$username = $_POST['user'];
$password = $_POST['pass'];
print_r($username);

if ( isset($_POST['email']) ) {
    print_r($_POST['email']);
}
else echo('Nothing');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->close();

?>