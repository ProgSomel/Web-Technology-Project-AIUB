<?php
include '../control/admin_login_control.php'
?>
<html>
<head>

    <title>Admin Login Page</title>
    <!-- CSS link  -->
    <link rel="stylesheet" href="../../CSS/mystyle.css">
</head>
<body >
<header class="admin-loginPage-header">
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
<a href="../view/adminLogin.php">ADMIN</a>
<a href="./View/Employee_login.php">EMPLOYEE</a>
<a href="../../customer/view/login.php">CUSTOMER</a>     <a href="./View/Vlogin.php">SUPLIER</a>
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
</tr>
</table>

</header>
<hr>


<main>


   <table>
   
    <tr>
        <td>
            <img src="../../assets/adminImages/adminLoginimage.jfif" alt="" width="700px" height="400px">
        </td>
        <td>
        <div>
<table>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    </table>

    <div align="center">

    <form action="" method="post" class="adminLogin-form">

        <table>
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
            <tr>
            <th>
                <h1 class="admin-login-title">Admin Login</h1>
            </th>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td class="adminLoginPage-email-title">Email: </td>

            </tr>
            <tr>
            <td>
                    <input type="email" name="email" id="" size="50"> <br>

                </td>
            </tr>
            <tr>
                <td class="adminLoginPage-password-title">Password: </td>

            </tr>
            <tr>
            <td>
                    <input type="password" name="password" id="" size="50">
                </td>

            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>
                    <input class="admin-login-btn" type="submit" name="login-btn" value="login" >
                </td>

            </tr>
            <tr>
            <td>
                    Don't Have an Account ? <a href="registration.php">Register</a>
                </td>
            </tr>
            <tr>
                <td>
                <?php
echo $errorMessage;
?>
                </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
            </tr>
        </table>
    </form>
    </div>
</div>




   </div>
        </td>
    </tr>
   </table>

</main>

</body>
<footer>
    <table align="center">
        <tr>

            <td> <?php
include '../../layouts/footer.php';
?></td>
        </tr>
    </table>


</footer>
</html>