<?php
/*
  $connection = new Mongo();
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adbms";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if ( isset($_POST['email']) ) {
    print_r($_POST['email']);
}
elseif($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->close();

?>