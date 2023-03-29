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

//! Checking Email and Password in Database
function checkUsers($tableName, $email, $password, $conn) {
    $sql = "SELECT email FROM $tableName WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    return $result;
}

//! Getting User's Email information
function getUserEmail($tableName, $email, $conn) {
    $sql = "SELECT email FROM $tableName WHERE email = '$email'";
    $result = $conn->query($sql);
    return $result;

}

//! Getting User's All Informations
function getUserInfo($tableName, $email, $conn) {
    $sql = "SELECT * FROM $tableName WHERE email = '$email'";
    $result = $conn->query($sql);
    return $result;

}

//! Inserting Categories to Database
function insertCategory($tableName,$category_title ,$conn){
    //? SQL Query for Inserting Data into Database
    $sql="INSERT INTO $tableName (category_title) VALUES ('$category_title')";
    //! Executing Query
    $result=$conn->query($sql);
    return $result;
    }
//! Getting Categories From Database
function getCategories($tableName, $category_title, $conn) {
    $sql = "SELECT * FROM $tableName WHERE category_title = '$category_title'";
    $result = $conn->query($sql);
    return $result;

}
}


?>
