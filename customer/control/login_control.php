<?php
session_start();
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
        
    }
}

?>