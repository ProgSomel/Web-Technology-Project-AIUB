<?php
include 'admin/model/mydb.php';
$printCookie = '';
setcookie( "visit", "1", time() + ( 86400 ) * 30 );
if ( isset( $_COOKIE["visit"] ) ) {
    $printCookie = "visited";
} else {
    $printCookie = "welcome";
}


?>
<html>
<head>
  <title>Document</title>
</head>
<body>
  <?php
echo $printCookie;
?>


<header>
<table align="right">
<tr>
<td><?php
include 'layouts/header.php';
?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>



<td >
<a href="home.php">HOME</a>
<a href="admin/view/adminProfile.php">ADMIN</a>
<a href="">EMPLOYEE</a>
<a href="">SUPPLIER</a>
<a href="customer/view/login.php">CUSTOMER</a>

</td>
<form method="post">
<td><input type="text" name="search"size="30"><button type="button" name="btn">search</button></td>
<td></td>
</form>
</tr>
</table>
</header>
<hr>
<br>
<!-- Main  -->
<main>
  <!-- Main Container  -->
  <div align="left" >
    <table>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <img src="assets/bike1.jfif" alt="" width="200px" height="200px">
          <h1>Bike</h1>
          <p>Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Aliquam, eum? Consequuntur at <br> sed mollitia dolore, eligendi nam. <br> Soluta facere reiciendis ad et quasi,<br> sit labore architecto cumque possimus <br> illo maxime!</p>
          <button>Add to Cart</button>
          <button>View More</button>
        </td>
        <td>
           <img src="assets/shirt1.jfif" alt="" width="200px" height="200px">
           <h1>Shirt</h1>
          <p>Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Aliquam, eum? Consequuntur at <br> sed mollitia dolore, eligendi nam. <br> Soluta facere reiciendis ad et quasi,<br> sit labore architecto cumque possimus <br> illo maxime!</p>
          <button>Add to Cart</button>
          <button>View More</button>
        </td>
        <td>
           <img src="assets/sunglass1.jfif" alt="" width="200px" height="200px">
           <h1>Sunglass</h1>
          <p>Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Aliquam, eum? Consequuntur at <br> sed mollitia dolore, eligendi nam. <br> Soluta facere reiciendis ad et quasi,<br> sit labore architecto cumque possimus <br> illo maxime!</p>
          <button>Add to Cart</button>
          <button>View More</button>
        </td>
        <td>
           <img src="assets/phone1.jfif" alt="" width="200px" height="200px">
           <h1>Phone</h1>
          <p>Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Aliquam, eum? Consequuntur at <br> sed mollitia dolore, eligendi nam. <br> Soluta facere reiciendis ad et quasi,<br> sit labore architecto cumque possimus <br> illo maxime!</p>
          <button>Add to Cart</button>
          <button>View More</button>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>

    <td align="right">
      <!-- Brands  -->
    <div>
    <h1>Categories</h1></a>
      <?php
         $mydb= new MyDB();//? Creating A Object $mydb for Class MyDB
         $conobj= $mydb->openCon();//?Accessing openCon() function using $mydb object
         $result = $mydb->getAllCategory("categories",  $conobj);
         while($row_data = mysqli_fetch_assoc($result)) {
          $categoryName = $row_data['category_title'];
          $categoryId = $row_data['category_id'];
          echo "<li><a href=''>$categoryName</a></li>";
         };  
        
      ?>
    </div>
    <div>
      <!-- Brands  -->
    <h1>Brands</h1></a>
    <?php
         $mydb= new MyDB();//? Creating A Object $mydb for Class MyDB
         $conobj= $mydb->openCon();//?Accessing openCon() function using $mydb object
         $result = $mydb->getAllBrand("brands",  $conobj);
         while($row_data = mysqli_fetch_assoc($result)) {
          $brandName = $row_data['brand_title'];
          $brandId = $row_data['brand_id'];
          echo "<li><a href=''>$brandName</a></li>";

         };  
         ?>
    </div>
   
    </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <img src="assets/shoe1.jfif" alt="" width="200px" height="200px">
          <h1>Shoe</h1>
          <p>Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Aliquam, eum? Consequuntur at <br> sed mollitia dolore, eligendi nam. <br> Soluta facere reiciendis ad et quasi,<br> sit labore architecto cumque possimus <br> illo maxime!</p>
          <button>Add to Cart</button>
          <button>View More</button>
        </td>
        <td>
           <img src="assets/apple.jfif" alt="" width="200px" height="200px">
           <h1>Apple</h1>
          <p>Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Aliquam, eum? Consequuntur at <br> sed mollitia dolore, eligendi nam. <br> Soluta facere reiciendis ad et quasi,<br> sit labore architecto cumque possimus <br> illo maxime!</p>
          <button>Add to Cart</button>
          <button>View More</button>
        </td>
        <td>
           <img src="assets/watch1.jfif" alt="" width="200px" height="200px">
           <h1>Watch</h1>
          <p>Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Aliquam, eum? Consequuntur at <br> sed mollitia dolore, eligendi nam. <br> Soluta facere reiciendis ad et quasi,<br> sit labore architecto cumque possimus <br> illo maxime!</p>
          <button>Add to Cart</button>
          <button>View More</button>
        </td>
        <td>
           <img src="assets/speaker1.jfif" alt="" width="200px" height="200px">
           <h1>Speaker</h1>
          <p>Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Aliquam, eum? Consequuntur at <br> sed mollitia dolore, eligendi nam. <br> Soluta facere reiciendis ad et quasi,<br> sit labore architecto cumque possimus <br> illo maxime!</p>
          <button>Add to Cart</button>
          <button>View More</button>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>

      </tr>
    </table>

  </div>
</main>
</body>
</html>







<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
include 'layouts/footer.php';
?>

</body>


<html>