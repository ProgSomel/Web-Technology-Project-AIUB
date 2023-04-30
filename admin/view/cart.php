<?php
include "../../admin/control/home_process.php";
?>
<html>
<head>
  <title>ABC Ecommerce-Cart Details</title>
  <!-- CSS Link  -->
<link rel="stylesheet" href="../../../Web-Technology-Project-AIUB/CSS/style.css">
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

<td >
<a href="../../index.php" class="nav-link">HOME</a>
<a href="../view/adminLogin.php">ADMIN</a>
<a href="">EMPLOYEE</a>
<a href="">SUPPLIER</a>
<a href="../../customer/view/login.php">CUSTOMER</a>

</td>


<td><a href="../../customer/view/cart.php"><img src="../../assets/cart icon/cartIcon1.png" alt="" height="40px" width="40px"><sup><?php cartItemNumber();?></sup></a></td>

<td></td>
<td></td>
<td></td>
<td></td>
<td></td>



<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<br>
<!-- Main  -->
<main>
  <!-- Main Container  -->
  <?php
echo $printCookie;
?>
</table>
<!-- cart detailes  -->
<div class="cart-container">
   <table class="cart-details-table">
   <thead>
   <tr >
      
      <th class="cart-details-table-header">Product Title</th>
      <th class="cart-details-table-header">Product Image</th>
      <th class="cart-details-table-header">Quantity</th>
      <th class="cart-details-table-header">Total Price</th>
      <th class="cart-details-table-header">Remove</th>
      <th class="cart-details-table-header" colspan="2">Operation</th>
    </tr>
        </thead>
        <tbody>
           <!-- PHP Code  -->
           <?php
           global $userId;
           $totalPrice = 0;
           $mydb = new MyDB();
           $conobj = $mydb->openCon();
           $result = $mydb->getCartValueForItems("cart", $userId, $conobj);
           while($row=mysqli_fetch_array($result)) {
             $productId = $row['product_id'];
             $selectProductsForPrice = $mydb->getProductByProductId("products", $productId, $conobj);
             while($row_product_price=mysqli_fetch_array($selectProductsForPrice)) {
               $productPrice = array($row_product_price['product_price']);
               $priceTable = $row_product_price['product_price'];
               $productTitle = $row_product_price['product_title'];
               $productImage1 = $row_product_price['product_image1'];
               $productValues = array_sum($productPrice);
               $totalPrice+=$productValues;
         
       
           ?>
          <tr>
            <td class="card-details-table-body-content"><?php echo $productTitle;?></td>

            <td class="card-details-table-body-content cart-product-image"><img src="../uploads/products_images/<?php echo $productImage1;?>" alt="" height="70px" width="70px"></td>
            <td class="card-details-table-body-content"><input type="text"></td>
            <td class="card-details-table-body-content"><?php echo $priceTable;?></td>
            <td class="card-details-table-body-content"><input type="checkbox" name="" id=""></td>
            <td class="card-details-table-body-content">
              <button class="cart-operation-btn">Update</button><button class="cart-operation-btn">Remove</button>
            </td>
          </tr>
          <?php
          
        }
      } 
          ?>
        </tbody>
    
   </table>
  <!-- subtotal  -->
  <div class="cart-subtotal-container">
    <h3 class="cart-subtotal">Subtotal: <strong class="cart-subtotal-price"><?php echo $totalPrice;?>/-</strong></h3>
    <a href="../../index.php"><button class="continue-shopping-btn">Continue Shopping</button></a>
    <a href="../../index.php"><button class="checkout-btn">Checkout</button></a>
  </div>
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