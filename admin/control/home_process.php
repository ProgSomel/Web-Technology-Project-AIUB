<?php
include "../model/mydb.php";
session_start();

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
            <button><a href=''></a></button>
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
  else {
    echo "<h2>No stock for this Brand! Try another Brand</h2>";
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
            <button><a href=''>Add to Cart</a></button>
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

    


?>
