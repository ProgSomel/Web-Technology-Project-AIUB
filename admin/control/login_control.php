<?php
if ( isset( $_REQUEST['login-btn'] ) ) {
    $matched = 0;
    if ( empty( $_REQUEST['email'] ) ) {
        echo "Please enter your email address!";

    } elseif ( empty( $_REQUEST['password'] ) ) {
        echo "Please enter your password!";
    } else {
        //? Getting File Data From JSON File
        $fileData = file_get_contents( "../data/jsondata.json" );

        //? COnverting JSON Data to PHP Data
        $phpObject = json_decode( $fileData );
        foreach ( $phpObject as $myObj ) {
            if ( $myObj->email == $_REQUEST["email"] && $myObj->password == $_REQUEST["password"] ) {

                $matched = 1;
            }
        }
        if ( $matched == 1 ) {
            header( "Location: ../view/profile.php" );
        } else {
            echo "logging failed";
        }
    }
}

?>