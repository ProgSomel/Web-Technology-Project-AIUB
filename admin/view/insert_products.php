<?php
include '../control/insert_products_control.php';
?>
<html>
<head>
    <title>Insert Products-Admin Dashboard</title>
</head>
<body>
    <div align="center">
       <h1>Insert Products</h1>
       <!-- Insert Products Form  -->
       <form action="" method="POST" enctype="multipart/form-data">
          <div>
            <table>
                <!-- product title  -->
                <tr>
                    <td>Product Title</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="product_title" placeholder="Enter your product title" autocomplete="off">
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <!-- product description  -->
                <tr>
                    <td>Product Description</td>
                </tr>
                <tr>
                    <td>
                        <textarea name="product_description" id="" cols="30" rows="5"></textarea>
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <!-- product keyword  -->
                <tr>
                    <td>Product Keywords</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="product_keyword" placeholder="Enter product keywords" autocomplete="off">
                    </td>
                </tr>
                <!-- select categories  -->
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>
                        <select name="product_category" id="">
                            <option value="">Select a Category</option>
                            <?php
                            if($resultcategory->num_rows>0) {
                                 while($row = $resultcategory->fetch_assoc()) {
                                    $category_title = $row['category_title'];
                                    $category_id = $row['category_id'];
                                    echo "<option value=' $category_id'>$category_title</option>";

                                 }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <!-- select brand  -->
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>
                        <select name="product_brand" id="">
                            <option value="">Select a Brand</option>
                           
                            <?php
                            if($resultBrand->num_rows>0) {
                                 while($row = $resultBrand->fetch_assoc()) {
                                    $brand_title = $row['brand_title'];
                                    $brand_id = $row['brand_id'];
                                    echo "<option value=' $brand_id'>$brand_title</option>";

                                 }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <!-- Image 1  -->
                <tr>
                    <td>Product Iamge 1</td>
                </tr>
                <tr>
                    <td>
                        <input type="file" name="product_image1" placeholder="Enter product Iamge">
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <!-- Image 2  -->
                <tr>
                    <td>Product Iamge 2</td>
                </tr>
                <tr>
                    <td>
                        <input type="file" name="product_image2" placeholder="Enter product Iamge">
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <!-- product Price  -->
                <tr>
                    <td>Product Price</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="product_price" placeholder="Enter product price" autocomplete="off">
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>
                        <input type="submit" name="insert_product_btn" value="Insert Product">
                    </td>
                </tr>
            </table>
          </div>
       </form>
    </div>
</body>
</html>