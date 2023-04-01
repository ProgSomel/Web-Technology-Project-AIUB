<?php
 include '../model/mydb.php';
 if(isset($_POST['insert_brand'])) {
    $brand_title = $_POST['brand_title'];
    $mydb= new MyDB();//? Creating A Object $mydb for Class MyDB
        $conobj= $mydb->openCon();//?Accessing openCon() function using $mydb object
        $result = $mydb->getBrands("brands", $_REQUEST["brand_title"], $conobj);
        if( $result->num_rows>0) {
            echo "<script>alert('This Brand is alreay presented in Database')</script>";  
        }
        else {
            //! Accessing insertBrand() from mydb.php function using $mydb object
        $result=$mydb->insertBrand("brands",$_POST['brand_title'], $conobj);
        if($result===TRUE)//? === will check the value and it will also check the data type of both left and right 
        {
            echo "<script>alert('Brand Has been inserted Successfully')</script>";
        }
        else
        {
            echo "Error".$conobj->error;
        }
        }
        
 }
?>