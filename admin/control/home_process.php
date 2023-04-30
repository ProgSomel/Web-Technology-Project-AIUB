<?php
include "../model/mydb.php";
session_start();
$userId =1;
$printCookie = '';
$count=0;
setcookie( "randomUserId", "$userId", time() + ( 86400 ) );
if(isset($_COOKIE['randomUserId'])) {
     $printCookie='Visited';
}
else {
  setcookie( "randomUserId", "$userId", time() + ( 86400 ) );
      $printCookie=$count++;
}

//! function for getting products from Database
function getProducts() {
    //? condition for checking is isset or not 
    if(!isset($_REQUEST['category'])){
      if(!isset($_REQUEST['brand'])) {

      
    
    $mydb = new MyDB(); //? Creating A Object $mydb for Class MyDB
$conobj = $mydb->openCon(); //?Accessing openCon() function using $mydb object
    $allProductsData = $mydb->getAllProducts("products", $conobj );
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
            <p>Price: $producPrice/-</p>
            <button><a href='home.php?add-to-cart=$productId'>Add to Cart</a></button>
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
}


//!   function for getting categories from the database 
  function getCategories() {
    $mydb = new MyDB(); //? Creating A Object $mydb for Class MyDB
$conobj = $mydb->openCon(); //?Accessing openCon() function using $mydb object
$categoryData = $mydb->getAllCategory( "categories", $conobj );
    if ( $categoryData->num_rows > 0 ) {
        while ( $row = $categoryData->fetch_assoc() ) {
            $categoryName = $row['category_title'];
            $categoryId = $row['category_id'];
            echo "<li><a href='home.php?category=$categoryId'>$categoryName</a></li>";
        }
        ;
    } else {
        echo "No Data";
    
    }
    
  }
//!   function for getting brands from  the database 
  function getBrands() {
    $mydb = new MyDB(); //? Creating A Object $mydb for Class MyDB
$conobj = $mydb->openCon(); //?Accessing openCon() function using $mydb object
$BrandData = $mydb->getAllBrand( "brands", $conobj );
    if ( $BrandData->num_rows > 0 ) {
        while ( $row = $BrandData->fetch_assoc() ) {
            $BrandName = $row['brand_title'];
            $BrandId = $row['brand_id'];
            echo "<li><a href='home.php?brand=$BrandId'>$BrandName</a></li>";
        }
        ;
    } else {
        echo "No Data";
    
    }
    
  }

  //! function for getting clicked Category products from Database
function getClickedCategoryProducts() {
    //? condition for checking is isset or not 
    if(isset($_REQUEST['category'])){
      $category_id = $_REQUEST['category'];
    
    $mydb = new MyDB(); //? Creating A Object $mydb for Class MyDB
$conobj = $mydb->openCon(); //?Accessing openCon() function using $mydb object
    $allProductsData = $mydb->getClickedCategoryProducts("products", $category_id, $conobj );
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
            <p>Price: $producPrice/-</p>
            <button><a href='home.php?add-to-cart=$productId'>Add to Cart</a></button>
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
  else {
    echo "<h2>No stock for this Category! Try another Category</h2>";
  }
}
    }
  //! function for getting clicked brand products from Database
function getClickedBrandProducts() {
    //? condition for checking is isset or not 
    if(isset($_REQUEST['brand'])){
      $brand_id = $_REQUEST['brand'];
    
    $mydb = new MyDB(); //? Creating A Object $mydb for Class MyDB
$conobj = $mydb->openCon(); //?Accessing openCon() function using $mydb object
    $allProductsData = $mydb->getClickedBrandProducts("products", $brand_id, $conobj );
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
            <p>Price: $producPrice/-</p>
            <button><a href='home.php?add-to-cart=$productId'>Add to Cart</a></button>
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
  else {
    echo "<h2>No stock for this Brand! Try another Brand</h2>";
  }
}
    }
    //! Function for Searching Products
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
                <p>Price: $producPrice/-</p>
                <button><a href='home.php?add-to-cart=$productId'>Add to Cart</a></button>
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
  
  //! View More Function
    function viewMore() {
      //? condition for checking is isset or not
      if(isset($_REQUEST['product_id'])) {
    if(!isset($_REQUEST['category'])){
      if(!isset($_REQUEST['brand'])) {
        $productId = $_REQUEST['product_id'];
    $mydb = new MyDB(); //? Creating A Object $mydb for Class MyDB
$conobj = $mydb->openCon(); //?Accessing openCon() function using $mydb object
    $allProductsData = $mydb->viewMore("products", $productId, $conobj );
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
            <p>Price: $producPrice/-</p>
            <button><a href='home.php?add-to-cart=$productId'>Add to Cart</a></button>
            <button><a href='home.php'>Go Home</a></button>
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
  }
}

//! Cart Function
function cart() {
  if(isset($_REQUEST['add-to-cart'])) {

  
  global $userId;
    $getProductId = $_REQUEST['add-to-cart'];
    $mydb = new MyDB();
    $conobj = $mydb->openCon();
  $cartValue = $mydb->getCartValue("cart", $userId, $getProductId ,$conobj);
  
  if($cartValue->num_rows>0) {
      echo "This item is already present in Cart";
      
  }
  else {
      $mydb = new MyDB();
      $conobj = $mydb->openCon();
      $result = $mydb->insertIntoCart("cart", $getProductId, $userId, 0, $conobj);
      echo "Item added to cart successfully";
  }
}
}

//! Function to get cart item numbers
function cartItemNumber() {
  if(isset($_REQUEST['add-to-cart'])) {

  
    global $userId;
      
      $mydb = new MyDB();
      $conobj = $mydb->openCon();
    $result = $mydb->getCartValueForItems("cart", $userId, $conobj);
    $countCartItems = mysqli_num_rows($result);//? this mysqli_num_rows function will return the number of rows available in database
  }
    
    else {
      global $userId;
      
      $mydb = new MyDB();
      $conobj = $mydb->openCon();
    $result = $mydb->getCartValueForItems("cart", $userId, $conobj);
    $countCartItems = mysqli_num_rows($result);
  
    }
    echo $countCartItems;

  }

  //! Function for Total Cart Price 
  function TotalCartPrice() {
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
        $productValues = array_sum($productPrice);
        $totalPrice+=$productValues;

      }
    }
    echo $totalPrice;
  }


  


    


?>
