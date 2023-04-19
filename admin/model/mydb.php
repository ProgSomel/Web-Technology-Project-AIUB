<?php
class MyDB{//? Creating a class Called MyDB

function openCon(){ //? Creating a Function called openCon() for stabling A Connection with the Database
$conn = new mysqli("localhost","root","","abc_ecommerce");//? Creating Database Connection; serverName, username, password, databaseName
return $conn;
}


//! Checking Email and Password in Database
function checkUsers($tableName, $email, $password, $conn) {
    $sql = "SELECT email FROM $tableName WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    return $result;
}





//! ------------------------CATEGORIES-------------------

//! Inserting Categories to Database
function insertCategory($tableName,$category_title ,$conn){
    //? SQL Query for Inserting Data into Database
    $sql="INSERT INTO $tableName (category_title) VALUES ('$category_title')";
    //! Executing Query
    $result=$conn->query($sql);
    return $result;
    }
//! Getting Categories with Condition on category_title From Database
function getCategories($tableName, $category_title, $conn) {
    $sql = "SELECT * FROM $tableName WHERE category_title = '$category_title'";
    $result = $conn->query($sql);
    return $result;

}

//! Getting All Category for Displaying on Home Page From Database
function getAllCategory($tableName, $conn) {
    $sql = "SELECT * FROM $tableName";
    $result = $conn->query($sql);//? Executing query
    return $result;

}
//! ------------------------BRANDS-------------------

//! Inserting Brands to Database
function insertBrand($tableName,$brand_title ,$conn){
    //? SQL Query for Inserting Brand into Database
    $sql="INSERT INTO $tableName (brand_title) VALUES ('$brand_title')";
    //! Executing Query
    $result=$conn->query($sql);
    return $result;
    }
//! Getting brand with condition on brand_title From Database
function getBrands($tableName, $brand_title, $conn) {
    $sql = "SELECT * FROM $tableName WHERE brand_title = '$brand_title'";
    $result = $conn->query($sql);
    return $result;

}
//! Getting All Brand for Displaying on Home Page From Database
function getAllBrand($tableName, $conn) {
    $sql = "SELECT * FROM $tableName";
    $result = $conn->query($sql);
    return $result;

}
//! -------------------Products-------------------------------------

//! Inserting Products to Database
function insertProducts($tableName, $productTtile,$productDescription, $productKeyword, $productCategory, $productBrand, $productImage1, $productImage2, $productPrice, $date, $status,$conn){
    //? SQL Query for Inserting Data into Database
    $sql="INSERT INTO $tableName (product_title,	product_description, product_keyword, category_id, brand_id, product_image1, product_image2, product_price, date, status) VALUES ('$productTtile','$productDescription', '$productKeyword', '$productCategory', '$productBrand', '$productImage1', '$productImage2', '$productPrice', '$date', '$status')";
    //! Executing Query
    $result=$conn->query($sql);
    return $result;
    }

    //!Getting All The Products From The Database
    function getAllProducts($tableName, $conn) {
        $sql = "SELECT * FROM $tableName order by rand() LIMIT 0,9";
        $result = $conn->query($sql);
        return $result ;
    }
    //!Getting clicked categroy  Products From The Database
    function getClickedCategoryProducts($tableName, $category_id, $conn) {
        $sql = "SELECT * FROM $tableName where category_id =$category_id";
        $result = $conn->query($sql);
        return $result ;
    }
    //!Getting clicked brand  Products From The Database
    function getClickedBrandProducts($tableName, $brand_id, $conn) {
        $sql = "SELECT * FROM $tableName where brand_id =$brand_id";
        $result = $conn->query($sql);
        return $result ;
    }
    //! Searching Products
    function searchProducts($tableName, $userSearch_data, $conn) {
        $sql = "SELECT * FROM $tableName WHERE product_keyword like '%$userSearch_data%'";//? For % in any position the serach keyword is available it will show search results
        $result = $conn->query($sql);
        return $result ;
    }

    //! View More Button
    function viewMore($tableName, $productId, $conn) {
        $sql = "SELECT * FROM $tableName WHERE product_id=$productId";
        $result = $conn->query($sql);
        return $result ;
    }

}


?>
