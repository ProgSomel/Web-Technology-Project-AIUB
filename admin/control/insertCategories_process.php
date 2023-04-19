<?php
 include '../model/mydb.php';
 if(isset($_POST['insert_cat'])) {
    $category_title = $_POST['category_title'];
    $mydb= new MyDB();//? Creating A Object $mydb for Class MyDB
        $conobj= $mydb->openCon();//?Accessing openCon() function using $mydb object
        $result = $mydb->getCategories("categories", $_REQUEST["category_title"], $conobj);
        if($result->num_rows>0) {
            echo "<script>alert('This Category is alreay presented in Database')</script>";  
        }
        else {
            //! Accessing insertCategory() from mydb.php function using $mydb object
        $result=$mydb->insertCategory("categories",$_POST['category_title'], $conobj);
        if($result===TRUE)//? === will check the value and it will also check the data type of both left and right 
        {
            echo "<script>alert('Category Has been inserted Successfully')</script>";
        }
        else
        {
            echo "Error".$conobj->error;
        }
        }
        
 }
?>