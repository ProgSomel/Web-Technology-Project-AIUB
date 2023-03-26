<?php
class MyDB{//? Creating a class Called MyDB

function openCon(){ //? Creating a Function called openCon() for stabling A Connection with the Database
$conn = new mysqli("localhost","root","","abc_ecommerce");//? Creating Database Connection; serverName, username, password, databaseName
return $conn;
}

//! Function for Inserting Data into Database
function insertData($tableName, $fname,$lname, $userName, $dateOfBirth, $phonenumber, $email, $gender, $city, $zipCode, $address, $password, $confirmPassword, $File,$conn){
//? SQL Query for Inserting Data into Database
$sql="INSERT INTO $tableName (fname,lname, userName, dateOfBirth, phonenumber, email, gender, city, zipCode, address, password, confirmPassword, File) VALUES ('$fname','$lname', '$userName', '$dateOfBirth', '$phonenumber', '$email', '$gender', '$city', '$zipCode', '$address', '$password', '$confirmPassword', '$File')";
//! Executing Query
$result=$conn->query($sql);
return $result;
}

//! Checking EMail and Password in Database
function checkUsers($tableName, $email, $password, $conn) {
    $sql = "SELECT * FROM $tableName WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    return $result;
}


}


?>
