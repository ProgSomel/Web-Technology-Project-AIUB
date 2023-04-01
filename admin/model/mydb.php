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

//! ------------------------CATEGORIES-------------------

//! Inserting Categories to Database
function insertCategory($tableName,$category_title ,$conn){
    //? SQL Query for Inserting Data into Database
    $sql="INSERT INTO $tableName (category_title) VALUES ('$category_title')";
    //! Executing Query
    $result=$conn->query($sql);
    return $result;
    }
//! Getting Categories with Condition on category_title From Database
function getCategories($tableName, $category_title, $conn) {
    $sql = "SELECT * FROM $tableName WHERE category_title = '$category_title'";
    $result = $conn->query($sql);
    return $result;

}
//! Getting All Category for Displaying on Home Page From Database
function getAllCategory($tableName, $conn) {
    $sql = "SELECT * FROM $tableName";
    $result = $conn->query($sql);
    return $result;

}
//! ------------------------BRANDS-------------------

//! Inserting Brands to Database
function insertBrand($tableName,$brand_title ,$conn){
    //? SQL Query for Inserting Brand into Database
    $sql="INSERT INTO $tableName (brand_title) VALUES ('$brand_title')";
    //! Executing Query
    $result=$conn->query($sql);
    return $result;
    }
//! Getting brand with condition on brand_title From Database
function getBrands($tableName, $brand_title, $conn) {
    $sql = "SELECT * FROM $tableName WHERE brand_title = '$brand_title'";
    $result = $conn->query($sql);
    return $result;

}
//! Getting All Brand for Displaying on Home Page From Database
function getAllBrand($tableName, $conn) {
    $sql = "SELECT * FROM $tableName";
    $result = $conn->query($sql);
    return $result;

}

}


?>
