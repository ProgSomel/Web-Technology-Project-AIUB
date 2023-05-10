<?php
session_start();
include_once '../model/mydb.php';
$fname = $lname = $userName = $phoneNumber = $email = $gender = $city = $address = $File = "";

if ( empty( $_SESSION["email"] ) ) {
    header( "Location: ../view/login.php" );
}
$mydb = new MyDB();
        $conobj = $mydb->openCon();
        $result = $mydb->getUserInfo("admin", $_SESSION["email"], $conobj);
        if( $result->num_rows>0) {
              //? While will run until all columns values gotten after that it will stop
              while($row = $result->fetch_assoc())  {//?Here Fetch method will convert data into php associative array
                $fname = $row['fname'];
                $lname = $row['lname'];
                $userName = $row['userName'];
                $dateOfBirth = $row['dateOfBirth'];
                $phoneNumber = $row['phoneNumber'];
                $email = $row['email'];
                $gender = $row['gender'];
                $city = $row['city'];
                $address = $row['address'];
                $password = $row['password'];
                $File = $row['File'];

              }
        }
        


?>