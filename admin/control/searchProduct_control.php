<?php
include_once '../model/mydb.php';
//! seraching Products
function search_product() {
    if(isset($_REQUEST['search-product-btn'])) {
        $userSearch_data = $_REQUEST['search-product'];
   $mydb = new MyDB(); //? Creating A Object $mydb for Class MyDB
  $conobj = $mydb->openCon(); //?Accessing openCon() function using $mydb object
      $allProductsData = $mydb->searchProducts("products", $userSearch_data, $conobj );
      $count = 0;
            
      if($allProductsData->num_rows>0) {
        while($row=$allProductsData->fetch_assoc()) {
            $productId = $row["product_id"];
            $productTitle = $row["product_title"];
            $productDescription = $row["product_description"];
            $productImage1 = $row["product_image1"];
            $producPrice = $row["product_price"];
            $categoryId = $row["category_id"];
            $brandId = $row["brand_id"];
             if($count!=3) {
              echo "<td>
              <img src='../uploads/products_images/$productImage1' alt='' width='200px' height='200px'>
              <h3>$productTitle</h3>
              <p>$productDescription</p>
              <button>Add to Cart</button>
              <button><a href='product-deatils.php?product_id=$productId'>View More</a></button>
              </td>
              ";
              $count++;
             }
             else {
              echo "</tr>";
              $count = 0;
             }
              
             
    
        }
        
    }
  }
}
      
?>