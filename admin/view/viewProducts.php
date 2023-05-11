<?php
include("../control/viewProducts_control.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <!-- CSS Link  -->
    <link rel="stylesheet" href="../../css/mystyle.css">
    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <h1 class="view-products-title">All Products</h1>
    <table class="view-products-table">
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Total Sold</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
         if($result->num_rows > 0) {
            while($row=$result->fetch_assoc()) {
                $productId = $row['product_id'];
                $productTitle = $row['product_title'];
                $productImage1 = $row['product_image1'];
                $productPrice = $row['product_price'];
                $productStatus = $row['status'];
                ?>
                <tr>
                <td><?php echo $productId?></td>
                <td><?php echo $productTitle?></td>
                <td><img src='../uploads/products_images/<?php echo $productImage1?>'width='50px' height='50px'></td>
                <td><?php echo $productPrice?></td>
                <td>0</td>
                <td><?php echo $productStatus?></td>
                <td><a href='adminProfile.php?edit_viewProducts=<?php echo $productId?>'><i class='fa-solid fa-pen-to-square'></i></a></td>
                <td><a href='adminProfile.php?delete_product=<?php echo $productId?>'><i class='fa-solid fa-trash'></i></a></td>
            </tr>

            <?php
         }
        }
        ?>
        
    </tbody>
</table>
</body>
</html>