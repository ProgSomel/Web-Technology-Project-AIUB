<?php
include("../control/editProducts_control.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
</head>
<body>
   <h1 class="edit-products-title">Edit Product</h1>
   <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-data-container">
        <label for="product-Title" class="edit-product-label">Product Title</label><br>
        <input type="text" class="edit-product-input" name="product-title" id="product-title" value="<?php echo $productTitle ?>">
    </div>
    <div class="form-data-container">
        <label for="product-description" class="edit-product-label">Product Description</label><br>
        <input type="text" class="edit-product-input-description" name="product-description" id="product-description" value="<?php echo  $producDescription ?>">
    </div>
    <div class="form-data-container">
        <label for="product-kewords" class="edit-product-label">Product Keywords</label><br>
        <input type="text" class="edit-product-input" name="product-keywords" id="product-keyword" value="<?php echo $productKeywords ?>">
    </div>
    <div class="form-data-container">
    <label for="product-category" class="edit-product-label">Product Categories</label><br>
        <select name="product-category" class="edit-product-input">
            <option value="<?php echo $categoryName?>"><?php echo $categoryName?></option>
            <?php
               while($row=$categoryAll->fetch_assoc()) {
                $categoryName = $row['category_title'];
                $categoryId = $row['category_id'];
                echo "<option value='$categoryId'>$categoryName</option>";

               };
               
            ?>
        </select>
    </div>
    <div class="form-data-container">
    <label for="product-brand" class="edit-product-label">Product Brands</label><br>
        <select name="product-brand" class="edit-product-input">
            <option value="<?php echo $brandName?>"><?php echo $brandName?></option>
            <?php
               while($row=$brandAll->fetch_assoc()) {
                $brandName = $row['brand_title'];
                $brandId = $row['brand_id'];
                echo "<option value='$brandId'>$brandName</option>";

               };
               
            ?>
           
        </select>
    </div>
    <div class="form-data-container">
        <label for="product-image1" class="edit-product-label">Product Image1</label><br>
        <div class="edit-product-image1-container">
        <input type="file" class="edit-product-image1" name="product-image1" id="product-image1" >
        <img src="../uploads/products_images/<?php echo  $productImage1 ?>" alt="" width="70px" height="70px">
        </div>
        
    </div>
    <div class="form-data-container">
        <label for="product-image2" class="edit-product-label">Product Image2</label><br>
        <div class="edit-product-image2-container">
        <input type="file" class="edit-product-image2" name="product-image2" id="product-image2">
        <img src="../uploads/products_images/<?php echo  $productImage2 ?>" alt="" width="70px" height="70px">
        </div>
        
    </div>
    <div class="form-data-container">
        <label for="product-price" class="edit-product-label">Product Price</label><br>
        <input type="text" class="edit-product-input" name="product-price" id="product-price" value="<?php echo  $productPrice ?> " >
    </div>
    <div class="edit-product-btn-container">
        <input type="submit" value="update Product" name="update-product-btn" class="edit-product-btn">
    </div>
   </form>
</body>
</html>