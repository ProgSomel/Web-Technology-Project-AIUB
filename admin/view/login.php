<?php
include '../control/login_control.php'
?>
<html>
<head>

    <title>Document</title>
</head>
<body >
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
<a href="../view/login.php">ADMIN</a>
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
   <table>
    <tr>
        <td>
            <img src="http://localhost/webTechnology/Web-Technology-Project-AIUB/assets/login.webp" alt="" width="700px" height="400px">
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

    <form action="" method="post">

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
                <h1>Login</h1>
            </th>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>Email: </td>

            </tr>
            <tr>
            <td>
                    <input type="email" name="email" id="" size="50"> <br>

                </td>
            </tr>
            <tr>
                <td>Password: </td>

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
                    <input type="submit" name="login-btn" value="login" >
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
            <td>
                    Don't Have an Account ? <a href="../../admin/view/registration.php">Register</a>
                </td>
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