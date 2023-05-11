<?php
if(isset($_GET['delete_product'])) {
    $productId = $_GET['delete_product'];
    $mydb = new MyDB();
    $conobj = $mydb->openCon();
    $result = $mydb->deleteProduct("products",$productId, $conobj);
    if($result) {
        echo "Product deleted successfully";
    }

}
?>