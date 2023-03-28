<?php
session_start();
include '../model/mydb.php';
$passwordMessage = "";
$errorMessage = "";
if ( isset( $_REQUEST['login-btn'] ) ) {
    $emailMessage = "";
    $matched = 0;
    if ( empty( $_REQUEST['email'] ) ) {
        $emailMessage = "Please enter your Email address!";

    } elseif ( empty( $_REQUEST['password'] ) ) {
        $passwordMessage = "Please enter your Password!";
    } else {
        $mydb = new MyDB();
        $conobj = $mydb->openCon();
        $result = $mydb->checkUsers("customer", $_REQUEST["email"], $_REQUEST["password"],$conobj);
        if( $result->num_rows>0) {
            $_SESSION["email"] = $_REQUEST["email"];
            header("location:../view/customerProfile.php");   
        }
        else {
            echo "login failed! Please enter correct credentials";
        }

    }
}

?>