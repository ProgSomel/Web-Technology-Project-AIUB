<?php
include ("../control/update_control.php");
?>
<html>

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
<a href="../../index.php">HOME</a>
<a href="../../admin/view/adminLogin.php">ADMIN</a>
<a href="./View/Employee_login.php">EMPLOYEE</a>
<a href="../view/login.php">CUSTOMER</a>     
<a href="./View/Vlogin.php">SUPLIER</a>
</td>
<form method="post">
<td><input type="text" name="search"size="30"><button type="button" name="btn">search</button></td>
<td></td>
</form>
</tr>
</table>
</header>
<hr>

<div align="center">
<form action="" method="POST" enctype="multipart/form-data">
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
                <input type="text" name="fname" value="<?php echo $fname; ?>"  id=""  >
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
                <input type="text" name="lname" id="" placeholder="Enter your Last Name" value="<?php echo   $lname; ?>" >
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
                <input type="text" name="userName" id="" placeholder="Enter your User Name" value="<?php echo $userName?>">
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
                <input type="date" name="dateOfBirth" id="" value="<?php echo $dateOfBirth?>">
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
                <input type="text" name="phoneNumberCountryCode" id="" value="+880" size="1">
                <input type="text" name="phoneNumber" id="" value="<?php echo $phoneNumber?>" >
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
            <!------- Gender --------- -->
            <th>Gender: </th>



            <td>
            <input type="radio" name="gender" id="" value = "Male" <?php
if($gender=="Male")
echo "checked";
?>>Male
            <input type="radio" name="gender" id="" value = "Female" <?php
if($gender=="Female")
echo "checked";
?>>Female
            <input type="radio" name="gender" id="" value = "NotInterested" <?php
if($gender=="NotInterested")
echo "checked";
?>>Not Interested. 
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
    <option value="Dhaka" <?php 
if($city=="Dhaka")
echo "selected"; ?>>Dhaka</option>
    <option value="Gazipur" <?php 
if($city=="Gazipur")
echo "selected"; ?>>Gazipur</option>
    <option value="Mymensingh" <?php 
if($city=="Mymensingh")
echo "selected"; ?>>Mymensingh</option>
    <option value="Rajshahi" <?php 
if($city=="Rajshahi")
echo "selected"; ?>>Rajshahi</option>
    <option value="Chittagonj" <?php 
if($city=="Chittagonj")
echo "selected"; ?>>Chittagonj</option>
    <option value="Comilla" <?php 
if($city=="Comilla")
echo "selected"; ?>>Comilla</option>
    <option value="Sylhet" <?php 
if($city=="Sylhet")
echo "selected"; ?>>Sylhet</option>
    <option value="Rangpur" <?php 
if($city=="Rangpur")
echo "selected"; ?>>Rangpur</option>
</select>
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
<input type="text" name="zipCode" id="" value="<?php echo $zipCode ?>"> 
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
                <textarea name="address" id="" cols="25" rows="5" value="<?php echo $address ?>"></textarea> 
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
                <input type="password" name="password" id="" value="<?php echo $password ?>">
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
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr?>

           <th>Set Profile Picture: </th>

     <td>
  <input type="file" name="profileImage" id="">
  <img src="<?php echo $File; ?>" width="100" height="100">
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

            <input type="submit" name="update" value="Update">

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
        </table>
</form>
</div>
<footer>
<?php
include "../../layouts/footer.php";
?>
</footer>
</body>
</html>