<?php
session_start();
include '../model/mydb.php';

$errorMessage = "";
if ( isset( $_REQUEST['login-btn'] ) ) {
    $matched = 0;
    if (empty($_REQUEST['email']) ) {
        $errorMessage = "Please enter your Email address!";

    } elseif (empty( $_REQUEST['password'] ) ) {
        $errorMessage = "Please enter your Password!";
    } else {
        $mydb = new MyDB();
        $conobj = $mydb->openCon();
        $result = $mydb->checkUsers("admin", $_REQUEST["email"], $_REQUEST["password"],$conobj);
        if( $result->num_rows>0) {
            $_SESSION["email"] = $_REQUEST["email"];
            header("location:../view/adminProfile.php");   
        }
        else {
            echo "login failed! Please enter correct credentials";
        }

    }
}

?>