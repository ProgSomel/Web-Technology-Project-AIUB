<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$lnamePattern = '/^[A-Za-z]*$/';
$userName = $_POST['userName'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$dateOfBirth = $_POST['dateOfBirth'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$zipCode = $_POST['zipCode'];
$address = $_POST['address'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

//? --------First Name-----------
if ( empty( $fname ) ) {
    echo "First Name is Missing !";
} else {
    if ( preg_match( '/[^a-z_]+/i', $fname ) ) {
        $error = " <br> First Name may only contain letters";
        echo $error;
    } else {
        echo " <br> Your First Name : $fname";
    }

}
//? -----------Last Name-----------
if ( empty( $lname ) ) {
    echo "First Name is Missing !";
} else {
    if ( preg_match( '/[^a-z_]+/i', $lname ) ) {
        $error = " <br> Last Name may only contain letters";
        echo $error;
    } else {
        echo " <br> Your Last Name : $lname";
    }

}
//? -------------User Name --------------------
if ( empty( $userName ) ) {
    echo " <br> User Name Is Missing! ";
} else {
    if ( preg_match( '/[^a-z0-9_@!#$%^&*]+/i', $userName ) ) {
        $error = " <br> User Name may only contain letters, numbers, \"_\" , \"-\" and special characters";
        echo $error;
    } else {
        echo " <br> Your username : $userName ";
    }
}

//? ----------Phone Number----------

if ( empty( $phoneNumber ) ) {
    echo " <br> Please enter your Phone Number!";
} else {
    if ( preg_match( '/^[0-9 -]{11,11}$/', $phoneNumber ) ) {
        echo " <br>Your phone number: $phoneNumber";

    } else {

        echo " <br> Invalid Phone Number ! Phone must contains number and one space - and length must be 12";
    }

}
//? ---------Birth Date---------
if ( empty( $dateOfBirth ) ) {
    echo " <br> Please enter your Birth Date!";
} else {
    echo " <br> Your Birth Date : $dateOfBirth";
}
//? --------------Email---------------
if ( empty( $email ) ) {
    echo " <br> Please enter your Email Address !";
} else {
    if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        echo " <br> Invalid Email Format";

    } else {
        echo " <br> Your Email Address : $email";
    }

}

//? ----------Gender-----------
if ( empty( $gender ) ) {
    echo " <br> Please enter your Gender !";
} else {
    echo " <br> Your Gender : $gender ";
}
//? -----------City-----------
if(isset($_REQUEST['city']) && $_REQUEST['city'] == 'Select City') { 
    echo ' <br>City is Missing! Please select a city.'; 
  }  else {

    echo " <br> Your City : $city ";

}
//? ----------Zip Code ---------
if (empty($zipCode)) {
    echo " <br> Zip Code is Missing! Please enter your zip code.";
}
else {
    echo " <br> Your zip code is : $zipCode";

}
//? ----------Address ----------
if (empty($address)) {
    echo " <br> Address is Missing! Please enter your address.";
}
else {
    echo " <br> Your address is : $address";
}
//? ---------Password-----------
if ( empty( $password ) ) {
    echo " <br> Please enter your Password!";
} else {
    if (strlen($password) <= 8) {
        echo " <br> Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        echo "<br>Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        echo "<br>Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        echo "<br>Your Password Must Contain At Least 1 Lowercase Letter!";
    }
    elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)) {
        echo "<br>Your Password Must Contain At Least 1 Special Character !"."<br>";
    }
     else {
        echo " <br> Your Password : $password";
    }
    
}
//? ----------Confirm Password-----------
if ( empty( $confirmPassword) ) {
    echo " <br> Please  Confirm your Password!";
} else {
    if ( $password == $confirmPassword ) {
        echo " <br> Your Confirm Password : $confirmPassword";
    } else {
        echo " <br>  Confrim Password Didn't mathched !";
    }
}
