<?php
include "../control/home_process.php";


?>
<html>
<head>
  <title>Document</title>
  <!-- CSS Link  -->
  <link rel="stylesheet" href="../../CSS/mystyle.css">
  
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
<a href="../../admin/view/adminLogin.php">ADMIN</a>
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

<td><a href="../view/cart.php"><img src="../../assets/cart icon/cartIcon1.png" alt="" height="40px" width="40px"><sup><?php cartItemNumber(); ?></sup></a></td>

<td></td>
<td></td>
<td></td>
<td></td>
<td></td>


<td>
  <a href="">Total Price:<?php TotalCartPrice();?>Tk </a>

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

<form action="searchProduct.php" method="post">
<td><input type="search" placeholder="search" name="search-product"></td>
<td><input  type="submit" value="Search" class="search-btn" name="search-product-btn"></td>
<td></td>
</form>
</tr>
</table>
  </nav>

</header>
<hr>
<br>
<!-- Main  -->
<main>
  <!-- Main Container  -->
  <?php
echo $printCookie;
?>
<div class="home-card-container">
        <div>
          <table>
            <tr>
            <?php
              //  Calling getProducts() function to Display Data
             getProducts();
             getClickedCategoryProducts();
             getClickedBrandProducts();
             cart();
          ?>
            </tr>
          </table>
        
        </div>
       
        <div>
        <h1 class="homePage-Category-title">Categories</h1></a>
      <?php
       getCategories();
?>
    
    
      <!-- Brands  -->
    <h1 class="homePage-brand-title">Brands</h1></a>
    <?php
    getBrands();
?>
        </div>
</main>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
include '../../layouts/footer.php';
?>

</body>


<html>