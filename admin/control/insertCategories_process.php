<?php
 include '../model/mydb.php';
 if(isset($_POST['insert_cat'])) {
    $category_title = $_POST['category_title'];
    $mydb= new MyDB();//? Creating A Object $mydb for Class MyDB
        $conobj= $mydb->openCon();//?Accessing openCon() function using $mydb object
        $result = $mydb->getCategories("categories", $_REQUEST["category_title"], $conobj);
        if($result->num_rows>0) {
            echo "This Category is alreay presented in Database";  
        }
        else {
            //! Accessing insertCategory() from mydb.php function using $mydb object
        $result=$mydb->insertCategory("categories",$_POST['category_title'], $conobj);
        if($result===TRUE)//? === will check the value and it will also check the data type of both left and right 
        {
            echo "Category Has been inserted Successfully";
        }
        else
        {
            echo "Error".$conobj->error;
        }
        }
        
 }
?>