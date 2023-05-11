<?php
include("../control/profile_process.php"); 
?>
<html>
    <head>
        <title>Admin Profile</title>
        <link rel="stylesheet" href="../../CSS/mystyle.css">
    </head>
    <body>
        <!-- navbar  -->
        <div>
            <table>
                <tr>
               
                    <td>
                    <?php
include '../../layouts/header.php';
?>
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

                    <td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                    <td >
                        <div >
                            Hello
                        <?php

            echo  $_SESSION["email"]; ?>

</h4> 
                        </div>
                    </td>
                    <td>
                    <a href="../view/adminLogin.php"> <img src="../../assets/logout_icon.png" alt="" width="30px" height="30px"> </a>
                    </td>
                </tr>
            </table>

        </div>
        <hr>
        <main>
            <!-- section 1  -->
            <div align="center">
                <h3>Manage Details</h3>
            </div>
            <!-- section 2  -->
            <div>
                <table>
                    <tr>
                        <td>
                            <img src="<?php echo $File ?>" alt="" width="50px" height="50px">
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
                       
                    <td><button class="adminProfile-btn"><a href="insert_products.php">Insert Products</a></button></td>
                    <td></td>
                    <td><button class="adminProfile-btn"><a href="adminProfile.php?view_products">View Products</a></button></td>
                    <td></td>
                    <td><button class="adminProfile-btn"><a href="adminProfile.php?insert_category">Insert Categories</a></button></td>
                    <td></td>
                    <td><button class="adminProfile-btn"><a href="">View Categories</a></button></td>
                    <td></td>
                    <td></td>
                    <td><button class="adminProfile-btn"><a href="adminProfile.php?insert_brand">Insert Brands</a></button></td>
                    <td></td>
                    <td><button class="adminProfile-btn"><a href="">View Brands</a></button></td>
                    <td></td>
                    <td><button class="adminProfile-btn"><a href="">All Orders</a></button></td>
                    <td></td>
                    <td><button class="adminProfile-btn"><a href="">All Payments</a></button></td>
                    <td></td>
                    <td><button class="adminProfile-btn"><a href="../view/showAllUsers.php">Show all Users</a></button></td>
                    <td></td>
                    <td>
                    <td><button class="adminProfile-btn"><a href="adminProfile.php?searchUser">Search Users</a></button></td>
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
                   
                   
                    </tr>
                    <tr>
                        <td>
                            <p><?php echo "$fname".""."$lname" ?></p>
                        </td>
                    </tr>
                    <tr>
                    <td><button class="adminProfile-btn"><a href="adminProfile.php?see_details">See Profile</a></button></td>
                    </tr>
                </table>
            </div>
            <div>
            </div>
            <div>
                <?php
                if(isset($_GET['insert_category'])) {
                    include('insert_categories.php');
                }
                if(isset($_GET['insert_brand'])) {
                    include('insert_brands.php');
                }
                if(isset($_GET['list_user'])) {
                    include('insert_brands.php');
                }
                if(isset($_GET['searchUser'])) {
                    include('searchUser.php');
                }
                if(isset($_GET['see_details'])) {
                    include('seeAdminDetails.php');
                }
                if(isset($_GET['view_products'])) {
                    include('viewProducts.php');
                }
                if(isset($_GET['edit_viewProducts'])) {
                    include('editProducts.php');
                }
                ?>
            </div>
        </main>
        <!-- footer  -->
       <footer>
        <?php
include "../../layouts/footer.php";
?>
       </footer>

        
    </body>
</html>