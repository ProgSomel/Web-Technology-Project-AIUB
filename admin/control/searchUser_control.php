<?php
include ("../model/mydb.php");

$email=$_REQUEST["email"];
$mydb= new MyDB();
$conobj=$mydb->openCon();
$result=$mydb->searchUser("customer", $conobj, $email);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc()){
        $file=$row["File"];
        $fname=$row["fname"];
        $lname=$row["lname"];
        $email=$row["email"];
        $gender=$row["gender"];
        $course=$row["dateOfBirth"];
        $course=$row["city"];
        echo "<div class='column'";
        echo "<div class='card'>";
        echo "<img src='".$row["File"]."' alt=".$row["fname"]." width='100px' height='100px' />";
       echo " <p class='title'>".$row["fname"]." ".$row["lname"]."</h4> ";
        echo "<p>".$row["email"]."</p>";
        echo "<p>".$row["gender"]."</p>";
        echo "<p>".$row["dateOfBirth"]."</p>";
        echo "<p>".$row["city"]."</p>";
    echo "<a class='allUsers-edit-btn' href='../../customer/view/updateUser.php?email=".$row["email"]."'>Edit</a>";
    echo "<a class='allUsers-delete-btn' href='deleteuser.php?email=".$row["email"]."'>Delete</a>";
    echo "</div>";
    echo "</div>";

    }
}
else
{
    echo "no data found";
}


?>