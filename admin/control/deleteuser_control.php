<?php
include ("../model/mydb.php");


$email=$_REQUEST["email"];


$mydb = new MyDB();
$conobj = $mydb->openCon();
$result=$mydb->deleteUser("customer", $conobj, $email);

if($result==TRUE)
{
    header("Location: ../view/showAllUsers.php");
}
else
{
    echo "can't delete";
}




?>