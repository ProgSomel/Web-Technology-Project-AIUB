<?php 
include '../model/mydb.php';
session_start();
if(isset($_REQUEST['delete'])) {
    $mydb = new MyDB(); //? Creating A Object $mydb for Class MyDB
    $conobj = $mydb->openCon(); //?Accessing openCon() function using $mydb object
    $result = $mydb->deleteUser("employee", $_REQUEST['id'], $conobj );//? Calling deleteUser() function using $mydb object
    echo "Deleted employee Successfully";
}
else {
    echo "can not delete employee";
}

?>