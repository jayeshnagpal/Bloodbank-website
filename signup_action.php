<?php
/**
 * Created by PhpStorm.
 * User: Jayesh
 * Date: 06-04-2017
 * Time: 09:14
 */

$email=$_POST['email'];
$pass=$_POST['password'];
$first = $_POST['fname'];
$last = $_POST['lname'];
$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$filter = ['email' => $email];
$query = new MongoDB\Driver\Query($filter);
$coll = 'bloodbank.users';
$res = $mng->executeQuery($coll, $query);
$rows = current($res->toArray());
if (!empty($rows))
    echo" $email already exists";
else
{
    $bulk = new MongoDB\Driver\BulkWrite;
    $ins = [
        'name' => array('first' => $first,
        'last'=>$last),
        'email' => $email,
        'password' => $pass,
        ];
    $bulk->insert($ins);
    $mng->executeBulkWrite($coll, $bulk);
    echo "you are a member";
}
?>

