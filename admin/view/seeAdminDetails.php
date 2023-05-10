<?php
include '../control/profile_process.php';
?>
<html>
<head>
  <title>Admin Details</title>
</head>
<body>
  <!-- main  -->
    <!-- main  -->
    <main>
  <div align="center">
    <h1>Admin Details</h1>
    <h4> Hello
<?php

echo $_SESSION["email"]; ?>

</h4> 
    </div>
    <br>
    <br>
    <br>
    <form action="" method="post">
    <div align="center" >
    <img src="<?php echo $File ?>" alt="profile-picture" width="100px" height="100px"><br>
First Name: <?php echo $fname; ?>
<br>Last Name: <?php echo $lname; ?>
<br>User Name: <?php echo $userName; ?>
<br>Date of Birth: <?php echo $dateOfBirth?>
<br>Phone Number: <?php echo $phoneNumber; ?>
<br>Gender: <?php echo $gender; ?>
<br>City: <?php echo $city; ?>
<br>Address: <?php echo $address; ?>
<br>Password: <?php echo $password; ?>
<br>


</div>
    </form>

  </main>
</body>
</html>