<?php

include "../control/home_process.php";
include "../control/searchProduct_control.php";
$printCookie = '';
setcookie( "visit", "1", time() + ( 86400 ) * 30 );
if ( isset( $_COOKIE["visit"] ) ) {
    $printCookie = "visited";
} else {
    $printCookie = "welcome";
}

?>
<html>
<head>
  <title>Document</title>
  <!-- CSS Link  -->
  <link rel="stylesheet" href="../../css/style.css">
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<a href="../view/adminLogin.php">ADMIN</a>
<a href="">EMPLOYEE</a>
<a href="">SUPPLIER</a>
<a href="../../customer/view/login.php">CUSTOMER</a>

</td>
<form method="post">
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
              search_product();
             getClickedCategoryProducts();
             getClickedBrandProducts()
          ?>
            </tr>
          </table>
        
        </div>
       
        <div>
        <h1>Categories</h1></a>
      <?php
       getCategories();
?>
    
    
      <!-- Brands  -->
    <h1>Brands</h1></a>
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
<?php
include '../../layouts/footer.php';
?>

</body>


<html>
