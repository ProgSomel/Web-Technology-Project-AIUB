<?php
include '../control/process.php';
?>

<html>
    <head>
    <title>Admin Registration Page</title>
    <!-- CSS link  -->
    <link rel="stylesheet" href="../../css/mystyle.css">
    </head>
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





<td >
<a href="../../index.php">HOME</a>
<a href="../../admin/view/adminLogin.php">ADMIN</a>
<a href="./View/Employee_login.php">EMPLOYEE</a>
<a href="../view/login.php">CUSTOMER</a>     
<a href="./View/Vlogin.php">SUPLIER</a>
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
</tr>
</table>
</header>
<hr>
      
      
     

      <main>
        
       
       
      <div align = "center" >
<h1>User Registration</h1>
</div>
<script src="../js/myscript.js"></script>
      <div align="center">
    <form class="admin-registration-form" action="" method="POST" enctype="multipart/form-data" onsubmit="return validation()">
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
                <input type="text" id="fname" name="fname" placeholder="Enter your First Name"/>
                <p id="fnameerror"></p>
                <?php echo $fnameMessage ?>
                
                <br>
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
                <input type="text" name="lname" id="lname" placeholder="Enter your Last Name" >
                <p id="lnameerror"></p>
                <?php echo $lnameMessage ?><br>
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
                <input type="text" name="userName" id="UserName" placeholder="Enter your User Name">
                <p id="usernameerror"></p>
                <?php echo $userNameMessage ?><br>
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
                <input type="date" name="dateOfBirth" id="dateOfBirth">
                <p id="dateOfBirthError"></p>
                <?php echo $dateOfBirthMessage ?><br>
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
                <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Enter your Number" >
                <p id="phoneNumberError"></p>
                <?php echo $phoneNumberMessage ?>
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
                <input type="text" name="email" id="email" placeholder="abc@example.com">
                <p id="emailError"></p>
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
            <input type="radio" name="gender" id="gender" value = "Male">Male
            <input type="radio" name="gender" id="gender" value = "Female">Female
            <input type="radio" name="gender" id="gender" value = "NotInterested">Not Interested.
            <p id="genderError"></p> 
            <?php echo $genderMessage ?>
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
            <select id="city" name="city">
    <option value="Dhaka">Dhaka</option>
    <option value="Gazipur">Gazipur</option>
    <option value="Mymensingh">Mymensingh</option>
    <option value="Rajshahi">Rajshahi</option>
    <option value="Chittagonj">Chittagonj</option>
    <option value="Comilla">Comilla</option>
    <option value="Sylhet">Sylhet</option>
    <option value="Rangpur">Rangpur</option>
    <p id="cityError"></p>
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
<input type="text" name="zipCode" id="zipCode" placeholder="Enter Zip Code"> 
<p id="zipCodeError"></p>
<?php echo $zipCodeMessage ?>
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
                <textarea name="address" id="address" cols="25" rows="5"></textarea>
                <p id="addressError"></p>
                 <?php echo $addressMessage ?>
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
                <input type="password" name="password" id="password" placeholder="Enter Password">
                <p id="passwordError"></p>
                <?php echo $passwordMessage ?>
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
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm your Password">
                <p id="confirmPasswordError"></p>
                <?php echo $confirmPasswordMessage ?>
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
  <input type="file" name="File" id="file">
  <p id="fileError"></p>
  <?php echo $profileImageMessage ?>
     </td>
      </tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
          <tr>
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
          <tr></tr>
          <tr></tr>
          <tr>
<td></td>
            <td>

              <input type="reset" value="Reset">
              <input type="submit" name="submit" value="Submit">

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
            <td>Already have an Account? <a href="../view/adminLogin.php">login</a> </td>
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