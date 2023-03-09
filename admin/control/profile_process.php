<?php
session_start();
$fname=$lname=$email="";
if(empty($_SESSION["email"]))
{
    header("Location: ../view/login.php");
}

$jsondata = file_get_contents("../data/jsondata.json");
$phpdata= json_decode($jsondata);
foreach($phpdata as $myobj)
{
    if($_SESSION["email"]==$myobj->email)
    {
        $fname= $myobj->fname."<br>";
        $lname= $myobj->lname."<br>";
        $userName= $myobj->userName."<br>";
        $phoneNumber= $myobj->phoneNumber."<br>";
        $email= $myobj->email."<br>";
        $gender= $myobj->gender."<br>";
        $city= $myobj->city."<br>";
        $address= $myobj->address."<br>";
        
    }
}


?>