<?php
class MyDB{//? Creating a class Called MyDB
function openCon(){ //? Creating a Function called openCon() for stabling A Connection with the Database
$conn = new mysqli("localhost","root","","abc_ecommerce");//? Creating Database Connection; serverName, username, password, databaseName
return $conn;
}

//! Function for Inserting Data into Database
    function insertData( $tableName, $fname, $lname, $userName, $dateOfBirth, $phonenumber, $email, $gender, $city, $zipCode, $address, $password, $confirmPassword, $File, $conn ) {
//? SQL Query for Inserting Data into Database
        $sql = "INSERT INTO $tableName (fname,lname, userName, dateOfBirth, phonenumber, email, gender, city, zipCode, address, password, confirmPassword, File) VALUES ('$fname','$lname', '$userName', '$dateOfBirth', '$phonenumber', '$email', '$gender', '$city', '$zipCode', '$address', '$password', '$confirmPassword', '$File')";
//! Executing Query
        $result = $conn->query( $sql );
        return $result;
    }

//! Checking Email and Password in Database
function checkUsers($tableName, $email, $password, $conn) {
    $sql = "SELECT email FROM $tableName WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    return $result;
}

//! Getting User's All Informations
function getUserInfo( $tableName, $email, $conn ) {
    $sql = "SELECT * FROM $tableName WHERE email = '$email'";
    $result = $conn->query( $sql );
    return $result;

}

//! Getting User's Email information
function getUserEmail( $tableName, $email, $conn ) {
    $sql = "SELECT email FROM $tableName WHERE email = '$email'";
    $result = $conn->query( $sql );
    return $result;

}

//!Getting All Users
function getAllUsers($tablename, $conn)
{
    $sql="SELECT * FROM $tablename";
    $result = $conn->query($sql);
    return $result;
}
//! Updating Admin Details
function updateAdminDetails( $tableName, $fname, $lname, $userName, $dateOfBirth, $phoneNumber, $gender, $city, $zipCode, $address, $password, $File, $email, $conn ) {
    $sql = "UPDATE $tableName SET fname = '$fname', lname = '$lname', userName = '$userName', dateOfBirth = '$dateOfBirth', phoneNumber = '$phoneNumber', gender = '$gender', city = '$city', zipCode = '$zipCode', address = '$address', password = '$password', File = '$File'  WHERE email = '$email'";
    $result = $conn->query( $sql );
    return $result;
}
//! Delete Users
function deleteUser($tablename, $conn, $email){
    $sql= "DELETE FROM $tablename WHERE email = '$email' ";
    $result=$conn->query($sql);
    return $result;
    }

//! Getting Admin's All Informations
    function getAdminInfo( $tableName, $email, $conn ) {
        $sql = "SELECT * FROM $tableName WHERE email = '$email'";
        $result = $conn->query( $sql );
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
//! Getting Categories with Condition on category_id From Database
function getCategoriesUsingId($tableName, $categoryId, $conn) {
    $sql = "SELECT * FROM $tableName WHERE category_id ='$categoryId'";
    $result = $conn->query($sql);
    return $result;

}
//! Getting Categories From Database
function getCategoriesAll($tableName, $conn) {
    $sql = "SELECT * FROM $tableName";
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
//! Getting brand with condition on brand_id From Database
function getBrandsUsingId($tableName, $brandId, $conn) {
    $sql = "SELECT * FROM $tableName WHERE brand_id = '$brandId'";
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
    $sql="INSERT INTO $tableName (product_title,product_description, product_keyword, category_id, brand_id, product_image1, product_image2, product_price, date, status) VALUES ('$productTtile','$productDescription', '$productKeyword', '$productCategory', '$productBrand', '$productImage1', '$productImage2', '$productPrice', '$date', '$status')";
    //! Executing Query
    $result=$conn->query($sql);
    return $result;
    }

    //!Getting All The Products From The Database
    function getAllProducts($tableName, $conn) {
        $sql = "SELECT * FROM $tableName order by rand()";
        $result = $conn->query($sql);
        return $result ;
    }
    function getAllProductsAdmin($tableName, $conn) {
        $sql = "SELECT * FROM $tableName";
        $result = $conn->query($sql);
        return $result ;
    }
    function getAllProductsUsingProductId($tableName,$productId, $conn) {
        $sql = "SELECT * FROM $tableName where product_id = $productId";
        $result = $conn->query($sql);
        return $result ;
    }

    //! Upadting Products Table
    function updateProducts( $tableName, $productTitle, $productDescription, $productKeyword, $productCategory, $productBrand, $productImage1, $productImage2, $productPrice, $productId, $conn ) {
        $sql = "UPDATE $tableName SET product_title = '$productTitle', product_description = '$productDescription', product_keyword = '$productKeyword', category_id = '$productCategory', brand_id = '$productBrand',product_image1 = '$productImage1', product_image2 = '$productImage2',	product_price = '$productPrice' WHERE product_id = '$productId'";
        $result = $conn->query( $sql );
        return $result;
    }

    //! Delete Product
    function deleteProduct($tablename, $productId, $conn){
        $sql= "DELETE FROM $tablename WHERE product_id = '$productId' ";
        $result=$conn->query($sql);
        return $result;
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
    //! Getting Product by Product_Id
    function getProductByProductId($tableName, $productId, $conn) {
        $sql = "SELECT * FROM $tableName WHERE product_id='$productId'";
        $result = $conn->query($sql);
        return $result ;
    }

    //! View More Button
    function viewMore($tableName, $productId, $conn) {
        $sql = "SELECT * FROM $tableName WHERE product_id='$productId'";
        $result = $conn->query($sql);
        return $result ;
    }
    //! Inserting into Cart
    function insertIntoCart($tablename, $productId, $userId, $quantity, $conn) {
        $sql ="INSERT INTO $tablename (product_id,userId, quantity) VALUES ('$productId', '$userId', '$quantity')";
        //! Executing Query
                $result = $conn->query( $sql );
                return $result;
    }
    //! Getting value from cart table
    function getCartValue($tableName, $userId, $productId, $conn) {
        $sql = "SELECT * FROM $tableName where userId='$userId' AND  product_id = '$productId'";
        $result=$conn->query($sql);
        return $result;
    }
    //! Getting cart Numbers
    function getCartValueForItems($tableName, $userId, $conn) {
        $sql = "SELECT * FROM $tableName where userId='$userId'";
        $result=$conn->query($sql);
        return $result;
    }
    //! Getting Total Cart Amount
    function totalCartPrice($tableName, $userId, $conn) {
        $sql = "SELECT * FROM $tableName where userId='$userId'";
        $result=$conn->query($sql);
        return $result;
    }
    //! Searching Users 
    function searchUser($tablename, $conn, $email) {
    $sql="SELECT * FROM $tablename WHERE email = '$email'";
    $result = $conn->query($sql);
    return $result;
}

//! Updating Cart Table
function updateCart($tableName, $quantity, $userID,  $conn ) {
    $sql = "UPDATE $tableName SET quantity = '$quantity' WHERE userId='$userID'";
    $result = $conn->query( $sql );
    return $result;
}

//! Removing Cart Item 
function removeCartItem($tablename, $productId, $conn){
    $sql= "DELETE FROM $tablename WHERE product_id = '$productId' ";
    $result=$conn->query($sql);
    return $result;
    }







}


?>
