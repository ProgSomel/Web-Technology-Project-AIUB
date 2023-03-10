<?php
include "../control/profile_process.php";
?>
<html>
<head>
<title>
Profile Page
</title>
</head>
<body>
    <?php
include '../../layouts/header.php';
?>
    <br>
    <a href="../../home.php">Home</a>
    <br>
    <hr>
    <br>
Hello
<?php

echo $_SESSION["email"]; ?>

<br>
<br>
<!-- Personal Information  -->
<div>
<br>First Name: <?php echo $fname; ?>
<br>Last Name: <?php echo $lname; ?>
<br>User Name: <?php echo $userName; ?>
<br>Phone Number: <?php echo $phoneNumber; ?>
<br>Email: <?php echo $email; ?>
<br>Gender: <?php echo $gender; ?>
<br>City: <?php echo $city; ?>
<br>Address: <?php echo $address; ?>



<br>
<br>
</div>


<a href="../control/logout_contol.php">log out </a>
<?php
include "../../layouts/footer.php";
?>
<body>
</html>