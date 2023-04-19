<?php
class MyDB{//? Creating a class Called MyDB

function openCon(){ //? Creating a Function called openCon() for stabling A Connection with the Database
$conn = new mysqli("localhost","root","","abc_ecommerce");//? Creating Database Connection; serverName, username, password, databaseName
return $conn;
}
function deleteUser($tablename, $id,$conn){
    $sql= "DELETE FROM $tablename WHERE id = '$id' ";
    $result=$conn->query($sql);
    return $result;
    }
}
?>