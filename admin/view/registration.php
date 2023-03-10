<?php
include '../control/process.php';
?>

<html>
    <head></head>
    <body>
    <header>
<table align="right">
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



<td >
<a href="../../home.php">HOME</a>
<a href="login.php">ADMIN</a>
<a href="./View/Employee_login.php">EMPLOYEE</a>
<a href="./View/Login.php">CUSTOMER</a>     <a href="./View/Vlogin.php">SUPLIER</a>
</td>
<form method="post">
<td><input type="text" name="search"size="30"><button type="button" name="btn">search</button></td>
<td></td>
</form>
</tr>
</table>
</header>
<hr>
      
      
     

      <main>
      <div align = "center" >
<h1>User Registration</h1>
</div>
      <div align="center">
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
          <tr>
            <!------------ First Name ------- -->
            <th>First Name:</th>
            <td>
                <input type="text" name="fname" id="" placeholder="Enter your First Name"  ><?php echo $fnameMessage ?><br>
            </td>

          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <th>Last Name: </th>


            <td>
                <input type="text" name="lname" id="" placeholder="Enter your Last Name" ><?php echo $lnameMessage ?><br>
            </td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
          <th>User Name: </th>

            <td>
                <input type="text" name="userName" id="" placeholder="Enter your User Name"><?php echo $userNameMessage ?><br>
            </td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <!------- Date of Birth ------ -->
            <th>Date of Birth: </th>


            <td>
                <input type="date" name="dateOfBirth" id=""><?php echo $dateOfBirthMessage ?><br>
            </td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <!--------- Phone Number ------- -->
            <th>Phone Number: </th>


            <td>
                <input type="text" name="phoneNumberCountryCode" id="" value="+88" size="1">
                <input type="text" name="phoneNumber" id="" placeholder="Enter your Number" ><?php echo $phoneNumberMessage ?>
            </td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <!-------Email ------ -->
            <th>Email: </th>


            <td>
                <input type="email" name="email" id="" placeholder="abc@example.com">
                <?php echo $emailMessage ?>
            </td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <!------- Gender --------- -->
            <th>Gender: </th>



            <td>
            <input type="radio" name="gender" id="" value = "Male">Male
            <input type="radio" name="gender" id="" value = "Female">Female
            <input type="radio" name="gender" id="" value = "NotInterested">Not Interested. <?php echo $genderMessage ?>
            </td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <!------- City ------ -->
            <th>City: </th>


            <td>
            <select  name="city">
    <option value="Select City">Select City</option>
    <option value="Dhaka">Dhaka</option>
    <option value="Gazipur">Gazipur</option>
    <option value="Mymensingh">Mymensingh</option>
    <option value="Rajshahi">Rajshahi</option>
    <option value="Chittagonj">Chittagonj</option>
    <option value="Comilla">Comilla</option>
    <option value="Sylhet">Sylhet</option>
    <option value="Rangpur">Rangpur</option>
</select> <?php echo $cityMessage ?>
            </td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <!------- Zip Code --------- -->
            <th>Zip Code: </th>



            <td>
<input type="text" name="zipCode" id="" placeholder="Enter Zip Code"> <?php echo $zipCodeMessage ?>
            </td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <!---------- Address -------- -->
            <th>Address: </th>


            <td>
                <textarea name="address" id="" cols="25" rows="5"></textarea> <?php echo $addressMessage ?>
            </td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <!------ Password------->
            <th>Password: </th>


            <td>
                <input type="password" name="password" id="" placeholder="Enter Password"><?php echo $passwordMessage ?>
            </td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <!------ Confirm Password ------ -->
            <th>Confirm Password: </th>


            <td>
                <input type="password" name="confirmPassword" id="" placeholder="Confirm your Password"><?php echo $confirmPasswordMessage ?>
            </td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr?>

           <th>Set Profile Picture: </th>

     <td>
  <input type="file" name="profileImage" id=""><?php echo $profileImageMessage ?>
     </td>
      </tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
          <tr>
          <td></td>
            <td>
                <input type="checkbox" name="iAcceptCheckbox" id="" required> I Accept
            </td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
<td></td>
            <td>

              <input type="reset" value="Reset">
              <input type="submit" name="submit" value="Submit"/>

            </td>

            <td></td>
          </tr>

          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>

          <tr>
          <td></td>
            <td>Already have an Account? <a href="../../admin/view/login.php">login</a> </td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>

    </form>
</div>
      </main>
<footer>
<?php
include "../../layouts/footer.php";
?>
</footer>


    </body>
</html>