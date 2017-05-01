<?php

session_start();
$email=$_POST['email'];
$pass=$_POST['password'];
$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$filter = ['email' => $email, 'password' => $pass ];
$query = new MongoDB\Driver\Query($filter);
$res = $mng->executeQuery("bloodbank.users", $query);
$rows = current($res->toArray());
if (!empty($rows)) {
    echo "true";
    $_SESSION['email'] = $rows->email;
}
else
    echo "false";

if(isset($_POST['action']))
    unset($_SESSION['email']);

/*  PHP code for db
require_once 'config.php';
$query = "Select * from users where email = ? and password = ?";
$statement = $con->prepare($query);
$statement->bind_param('ss',$email,$pass);
$statement->execute();
$result = $statement->get_result();
$row = $result->fetch_assoc();
if ($result->num_rows == 1) {
    echo "true";
    $_SESSION['name'] = $row['fname'];
    $_SESSION['email'] = $row['email'];
}
else {
    echo "false";
}
$statement->close();
*/
?>