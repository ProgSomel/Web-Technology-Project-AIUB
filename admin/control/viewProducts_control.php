<?php
 include_once "../model/mydb.php";
 $mydb= new MyDB();
 $conobj=$mydb->openCon();
 $result=$mydb->getAllProductsAdmin("products", $conobj);
?>