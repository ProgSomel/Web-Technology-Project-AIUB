<?php

if(isset($_GET['edit_viewProducts'])) {
   $productId = $_GET['edit_viewProducts'];
   
   $mydb= new MyDB();//? Creating A Object $mydb for Class MyDB
        $conobj= $mydb->openCon();//?Accessing openCon() function using $mydb object
        $result = $mydb->getAllProductsUsingProductId("products", $productId, $conobj);
        $row=$result->fetch_assoc();

        $productTitle = $row['product_title'];
        $producDescription = $row['product_description'];
        $productKeywords = $row['product_keyword'];
        $productCategoryId = $row['category_id'];
        $productBrandId = $row['brand_id'];
        $productImage1 = $row['product_image1'];
        $productImage2 = $row['product_image2'];
        $productPrice = $row['product_price'];
        
        //?Fetching category title from categories table using category_id which is gotten from products table 
        $categoryId = $mydb->getCategoriesUsingId('categories', $productCategoryId, $conobj);
        $categoryIdFromCategories=$categoryId->fetch_assoc();
        $categoryName = $categoryIdFromCategories['category_title'];

        //?Fetching brand title from brands table using brand_id which is gotten from products table 
        $brandId = $mydb->getBrandsUsingId('brands',  $productBrandId, $conobj);
        $brandIdFromBrands=$brandId->fetch_assoc();
        $brandName = $brandIdFromBrands['brand_title'];

        //! Getting all the Categories Name
        $categoryAll = $mydb->getCategoriesAll('categories', $conobj);

        //! Getting all the Brands Name
        $brandAll = $mydb->getAllBrand('brands', $conobj);


        if(isset($_POST['update-product-btn'])) {
           $productTitle = $_POST['product-title'];
           $productDescription = $_POST['product-description'];
           $productKeyword = $_POST['product-keywords'];
           $productCategory = $_POST['product-category'];
           $productBrand = $_POST['product-brand'];
           $productPrice = $_POST['product-price'];
           
           $productImage1 = $_FILES['product-image1']['name'];
           $productImage2 = $_FILES['product-image2']['name'];
           $tempImage1 = $_FILES['product-image1']['tmp_name'];
           $tempImage2 = $_FILES['product-image2']['tmp_name'];

           if($productTitle=="" || $productDescription=="" || $productKeyword=="" || $productCategory=="" || $productBrand=="" || $productImage1=="" || $productImage2=="" || $productPrice=="") {
            echo "!please fill all the fields";
           }
           else {
            move_uploaded_file($tempImage1, "../uploads/products_images/$productImage1");
            move_uploaded_file($tempImage2, "../uploads/products_images/$productImage2");

            //? Query to Update Products
            $mydb = new MyDB();
            $conobj = $mydb->openCon();
            $updatedProduct = $mydb->updateProducts("products", $productTitle, $producDescription, $productKeyword, $productCategory, $productBrand, $productImage1, $productImage2, $productPrice, $productId, $conobj);

            if($updatedProduct) {
               echo "Updated Successfully";
              }
              else {
                 echo "!Updated Failed";
              }
           }
           
           
           
           

          


        }


}
?>