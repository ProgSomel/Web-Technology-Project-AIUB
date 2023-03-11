<?php
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
<a href="admin/view/login.php">ADMIN</a>
<a href="./View/Employee_login.php">EMPLOYEE</a>
<a href="./View/Login.php">CUSTOMER</a>     <a href="./View/Vlogin.php">SUPLIER</a>
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
          <h1>Title</h1>
          <p>Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Aliquam, eum? Consequuntur at <br> sed mollitia dolore, eligendi nam. <br> Soluta facere reiciendis ad et quasi,<br> sit labore architecto cumque possimus <br> illo maxime!</p>
          <button>Add to Cart</button>
          <button>View More</button>
        </td>
        <td>
           <img src="assets/shirt1.jfif" alt="" width="200px" height="200px">
           <h1>Title</h1>
          <p>Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Aliquam, eum? Consequuntur at <br> sed mollitia dolore, eligendi nam. <br> Soluta facere reiciendis ad et quasi,<br> sit labore architecto cumque possimus <br> illo maxime!</p>
          <button>Add to Cart</button>
          <button>View More</button>
        </td>
        <td>
           <img src="assets/sunglass1.jfif" alt="" width="200px" height="200px">
           <h1>Title</h1>
          <p>Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Aliquam, eum? Consequuntur at <br> sed mollitia dolore, eligendi nam. <br> Soluta facere reiciendis ad et quasi,<br> sit labore architecto cumque possimus <br> illo maxime!</p>
          <button>Add to Cart</button>
          <button>View More</button>
        </td>
        <td>
           <img src="assets/sunglass1.jfif" alt="" width="200px" height="200px">
           <h1>Title</h1>
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
    <div>

    </div>
    <select align ="right"  name="category" value="Category">
    <option value="1">Electronic Device</option>
    <option value="2">Electronic Accessories</option>
    <option value="3">Home Appliances</option>
    <option value="4">Health and Beauty</option>
    <option value="5">Men's Fashion</option>
    <option value="6">Women's Fashion</option>
    <option value="7">Watches and Accessories</option>
    <option value="8">Automobiles & Motorbike</option>
</select>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
          <h1>Title</h1>
          <p>Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Aliquam, eum? Consequuntur at <br> sed mollitia dolore, eligendi nam. <br> Soluta facere reiciendis ad et quasi,<br> sit labore architecto cumque possimus <br> illo maxime!</p>
          <button>Add to Cart</button>
          <button>View More</button>
        </td>
        <td>
           <img src="assets/apple.jfif" alt="" width="200px" height="200px">
           <h1>Title</h1>
          <p>Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Aliquam, eum? Consequuntur at <br> sed mollitia dolore, eligendi nam. <br> Soluta facere reiciendis ad et quasi,<br> sit labore architecto cumque possimus <br> illo maxime!</p>
          <button>Add to Cart</button>
          <button>View More</button>
        </td>
        <td>
           <img src="assets/watch1.jfif" alt="" width="200px" height="200px">
           <h1>Title</h1>
          <p>Lorem ipsum dolor sit <br> amet consectetur adipisicing elit. <br> Aliquam, eum? Consequuntur at <br> sed mollitia dolore, eligendi nam. <br> Soluta facere reiciendis ad et quasi,<br> sit labore architecto cumque possimus <br> illo maxime!</p>
          <button>Add to Cart</button>
          <button>View More</button>
        </td>
        <td>
           <img src="assets/watch1.jfif" alt="" width="200px" height="200px">
           <h1>Title</h1>
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