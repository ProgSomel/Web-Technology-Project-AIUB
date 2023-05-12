<?php
include "../../admin/control/home_process.php";
?>
<html>
<head>
  <title>ABC Ecommerce-Cart Details</title>
  <!-- CSS Link  -->
<link rel="stylesheet" href="../../css/mystyle.css">
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


<td><a href="../view/cart.php"><img src="../../assets/cart icon/cartIcon1.png" alt="" height="40px" width="40px"><sup><?php cartItemNumber();?></sup></a></td>

<td></td>
<td></td>
<td></td>
<td></td>
<td></td>



<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
  <form action="" method="post">
  <table class="cart-details-table">

        <tbody>
           <!-- PHP Code  -->
           <?php
           global $userId;
           $totalPrice = 0;
           $mydb = new MyDB();
           $conobj = $mydb->openCon();
           $result = $mydb->getCartValueForItems("cart", $userId, $conobj);
           if($result->num_rows>0) {
              
            echo "   <thead>
            <tr >
               
               <th class='cart-details-table-header'>Product Title</th>
               <th class='cart-details-table-header'>Product Image</th>
               <th class='cart-details-table-header'>Quantity</th>
               <th class='cart-details-table-header'>Total Price</th>
               <th class='cart-details-table-header'>Remove</th>
               <th class='cart-details-table-header' colspan='2'>Operation</th>
             </tr>
                 </thead>";


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
            <!-- Quantity  -->
            <td class="card-details-table-body-content"><input type="text" name="qty"></td>
            <?php
             if(isset($_POST['update-cart-btn'])) {

              if($updatedCartQuantity) {
                $totalPrice = $totalPrice*(intval($quantity));

              }

             }
            ?>
            
            <td class="card-details-table-body-content"><?php echo $priceTable;?></td>
            <td class="card-details-table-body-content"><input type="checkbox" name="removeItem[]" id="" value="<?php
            echo $productId?>"></td>
            <td class="card-details-table-body-content">
              <!-- Update Button  -->
              <input  type="submit" class="cart-operation-btn" value="update" name="update-cart-btn">
              <!-- Remove Button  -->
              <input  type="submit" class="cart-operation-btn" value="Remove" name="remove-cart-btn">
              
            </td>
          </tr>
          <?php
          
        }
      } 
     } 
      else {
        echo "<h1 class='cart-empty-msg'>!Cart is Empty</h1>";
      }
     ?>
        </tbody>
    
   </table>
  <!-- subtotal  -->
  <div class="cart-subtotal-container">
    <?php
       global $userId;
       $mydb = new MyDB();
       $conobj = $mydb->openCon();
       $result = $mydb->getCartValueForItems("cart", $userId, $conobj);
       if($result->num_rows>0) {
        echo "<h3 class='cart-subtotal'>Subtotal: <strong class='cart-subtotal-price'> $totalPrice/-</strong></h3>
        
        <input  type='submit' class='continue-shopping-btn' value='Continue Shopping' name='continue-shopping-btn'>

        <input  type='submit' class='checkout-btn ' value='Checkout ' name='checkout-shopping-btn'>";

       }
       else {
        echo "<input  type='submit' class='continue-shopping-btn' value='Continue Shopping' name='continue-shopping-btn'>";
       }
       if(isset($_POST['continue-shopping-btn'])) {
        echo "<script>window.open('../../index.php','_self')</script>";
       }
    ?>
    
  </div>
  </form>
   
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