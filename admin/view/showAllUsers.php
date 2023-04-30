<?php
include "../control/showalluser_process.php";
?>

<html>
<head>   
<title>  
Show All Users  
</title>  

<link rel="stylesheet" type="text/css" href="../../css/card.css">
<link rel="stylesheet" type="text/css" href="../../css/mystyle.css">
</head>  

<body> 
<header>
      <!-- navbar  -->
  <nav class="navbar">
  <table align="right" class="nav-table">
<tr>
<td><?php
include '../../layouts/header.php';
?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>



<td >
<a href="../../index.php" class="nav-link">HOME</a>
<a href="../view/adminProfile.php">ADMIN</a>
<a href="">EMPLOYEE</a>
<a href="">SUPPLIER</a>
<a href="../../customer/view/login.php">CUSTOMER</a>

</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>






<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>

</tr>

</table>
  </nav>
</header> 
<hr>
<div class="showAllUsers-container">
<h1 class="showAllUsers-title">All Users</h1>
<?php

if($result->num_rows > 0)
{
  
    while($row=$result->fetch_assoc()){

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
    echo "no data available";
}

?>



</div>

</body>
    <html>