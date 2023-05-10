<?php
class MyDB { //? Creating a class Called MyDB

    function openCon() { //? Creating a Function called openCon() for stabling A Connection with the Database
        $conn = new mysqli( "localhost", "root", "", "abc_ecommerce" ); //? Creating Database Connection; serverName, username, password, databaseName
        return $conn;
    }

//! Function for Inserting Data into Database
    function insertData( $tableName, $fname, $lname, $userName, $dateOfBirth, $phonenumber, $email, $gender, $city, $zipCode, $address, $password, $confirmPassword, $File, $conn ) {
//? SQL Query for Inserting Data into Database
        $sql = "INSERT INTO $tableName (fname,lname, userName, dateOfBirth, phonenumber, email, gender, city, zipCode, address, password, confirmPassword, File) VALUES ('$fname','$lname', '$userName', '$dateOfBirth', '$phonenumber', '$email', '$gender', '$city', '$zipCode', '$address', '$password', '$confirmPassword', '$File')";
//! Executing Query
        $result = $conn->query( $sql );
        return $result;
    }

//! Checking Email and Password in Database
    function checkUsers( $tableName, $email, $password, $conn ) {
        $sql = "SELECT email FROM $tableName WHERE email = '$email' AND password = '$password'";
        $result = $conn->query( $sql );
        return $result;
    }

//! Getting User's Email information
    function getUserEmail( $tableName, $email, $conn ) {
        $sql = "SELECT email FROM $tableName WHERE email = '$email'";
        $result = $conn->query( $sql );
        return $result;

    }

//! Getting User's All Informations
    function getUserInfo($tableName, $email, $conn ) {
        $sql = "SELECT * FROM $tableName WHERE email = '$email'";
        $result = $conn->query( $sql );
        return $result;

    }
//! Updating User
    function updateUser($tableName, $fname, $lname, $userName, $dateOfBirth, $phoneNumber, $gender, $city, $zipCode, $address, $password, $File, $email, $conn ) {
        $sql = "UPDATE $tableName SET fname = '$fname', lname = '$lname', userName = '$userName', dateOfBirth = '$dateOfBirth', phoneNumber = '$phoneNumber', gender = '$gender', city = '$city', zipCode = '$zipCode', address = '$address', password = '$password', File = '$File'  WHERE email = '$email'";
        $result = $conn->query( $sql );
        return $result;
    }
    //! Deleting User
    function deleteUser($tablename, $email, $conn){
        $sql= "DELETE FROM $tablename WHERE email = '$email' ";
        $result=$conn->query($sql);
        return $result;
        }
        
}

?>
