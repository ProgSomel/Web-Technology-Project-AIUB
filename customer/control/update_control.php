<?php
session_start();
include '../model/mydb.php';
$fname = $lname = $userName = $phoneNumber = $email = $gender = $city = $address = $File = "";
$selected = "";
$email = $_REQUEST["email"];
$mydb = new MyDB();
$conobj = $mydb->openCon();
$result = $mydb->getUserInfo( "customer", $email, $conobj );
if ( $result->num_rows > 0 ) {
    //? While will run until all columns values gotten after that it will stop
    while ( $row = $result->fetch_assoc() ) { //?Here Fetch method will convert data into php associative array
        $fname = $row['fname'];
        $lname = $row['lname'];
        $userName = $row['userName'];
        $dateOfBirth = $row['dateOfBirth'];
        $phoneNumber = $row['phoneNumber'];
        $email = $row['email'];
        $gender = $row['gender'];
        $city = $row['city'];
        $address = $row['address'];
        $File = $row['File'];
        $password = $row['password'];
        $zipCode = $row['zipCode'];

    }
}

if ( isset( $_REQUEST["update"] ) ) {

    if ($_FILES["profileImage"]["name"]!= "" ) {
        $File = "../uploads/".$email.".jpg";
        move_uploaded_file($_FILES["profileImage"]["tmp_name"],$File );
    }
    $mydb = new MyDB();
    $conobj = $mydb->openCon();
    $result = $mydb->updateUser("customer", $_REQUEST["fname"],
        $_REQUEST["lname"],
        $_REQUEST["userName"],
        $_REQUEST["dateOfBirth"],
        $_REQUEST["phoneNumber"],
        $_REQUEST["gender"],
        $_REQUEST["city"],
        $_REQUEST["zipCode"],
        $_REQUEST["address"],
        $_REQUEST["password"], $File, $email, $conobj);
        echo "Updated Successfully";

}
else {
    echo "Error!";

}

?>