<?php
include_once '../model/mydb.php';

//! Inserting Products to Database

if ( isset( $_REQUEST['insert_product_btn'] ) ) {

    $product_title = $_REQUEST['product_title'];
    $product_description = $_REQUEST['product_description'];
    $product_keyword = $_REQUEST['product_keyword'];
    $product_category = $_REQUEST['product_category'];
    $product_brand = $_REQUEST['product_brand'];
    $product_price = $_REQUEST['product_price'];
    $product_status = 'true';
    //? Checking Empty
    if ( $product_title == '' || $product_description == '' || $product_keyword == '' || $product_category == '' || $product_brand == '' || $product_price == '' ) {
        echo "Please fill all fields!";

    } else {

        $product_image1 = $_FILES['product_image1']['name'];
        move_uploaded_file( $_FILES["product_image1"]["tmp_name"], "../uploads/products_images/$product_image1");
        $product_image2 = $_FILES['product_image2']['name'];
        move_uploaded_file( $_FILES["product_image2"]["tmp_name"], "../uploads/products_images/$product_image2" );

        //? Inserting to Database
        $mydb = new MyDB(); //? Creating A Object $mydb for Class MyDB
        $conobj = $mydb->openCon(); //?Accessing openCon() function using $mydb object
        $result = $mydb->insertProducts( "products", $product_title, $product_description, $product_keyword, $product_category, $product_brand, $product_image1, $product_image2, $product_price, date( "l jS \of F Y h:i:s A" ), $product_status, $conobj );

        if ( $result == true ) {
            echo "Product Added successfully";

        } else {
            echo "Error".$conobj->error;
        }

    }

}
//! Getting ALl Categories
$mydb = new MyDB(); //? Creating A Object $mydb for Class MyDB
$conobj = $mydb->openCon(); //?Accessing openCon() function using $mydb object
$resultcategory = $mydb->getAllCategory( "categories", $conobj );
//! Getting All Brands
$mydb = new MyDB(); //? Creating A Object $mydb for Class MyDB
$conobj = $mydb->openCon(); //?Accessing openCon() function using $mydb object
$resultBrand = $mydb->getAllBrand( "brands", $conobj );
?>