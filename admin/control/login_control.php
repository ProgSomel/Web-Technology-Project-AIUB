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
        //? Getting File Data From JSON File
        $fileData = file_get_contents( "../data/jsondata.json" );

        //? COnverting JSON Data to PHP Data
        $phpObject = json_decode( $fileData );
        foreach ( $phpObject as $myObj ) {
            if ( $myObj->email == $_REQUEST["email"] && $myObj->password == $_REQUEST["password"] ) {
                $_SESSION["email"] = $myObj->email;
                header( "Location: ../view/AdminProfile.php" );
                $matched = 1;
            }
        }
        if ( $matched == 0 ) {
            $errorMessage = "logging failed! Please give Correct credentials";
        }
    }
}

?>