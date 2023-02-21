<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Museum</title>
    <link rel="stylesheet" href="ProductDashboardStyle.php">
</head>
<body>
  <header><a href="HomeAdmin.php">MuseumEX</a></header>
<div class="navbar">
    <a href="HomeAdmin.php">HOME</a>
    <div class="dropdown">
      <button class="dropbtn">DASHBOARD
      </button>
      <div class="dropdown-content">
        <a href="UsersDashboard.php">Users</a>
        <a href="MessagesDashboard.php">Messages</a>
        <a href="ProductsDashboard.php">Products</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">MUSEUMS
      </button>
      <div class="dropdown-content">
        <a href="Louvre.php">Louvre Museum</a>
        <a href="Uffizi.php">Uffizi Gallery</a>
        <a href="BM.php">The British Museum</a>
        <a href="MMA.php">The Museum of Modern Art</a>
      </div>
  </div>
    <a href="AboutUs.php">ABOUT US</a> 
    <a href="Logout.php">LOG OUT</a> 
    </div>
    
    <div class = "header">
      <h1>Products</h1>
    </div>
        <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Author</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
            <th>InsertedBy</th>
        </tr>
        <?php
        include_once '../Services/ProductService.php';
        $productsService  = new ProductService();
        $products = $productsService->getAllProducts();
        foreach($products as $product){
           echo 
           "
           <tr>
               <td>$product[Id]</td>
               <td>$product[Name]</td>
               <td>$product[Author]</td>
               <td>$product[Description]</td>
               <td><img src='Images/$product[Image]' width = 100px> </td>
               <td>$product[Price]</td> 
               <td>$product[InsertedBy]</td>
               <td><a href='EditProduct.php?Id=$product[Id]'>Edit</a></td>
               <td><a href='DeleteProduct.php?Id=$product[Id]'>Delete</a></td>
           </tr>
           ";
        }
        ?>
    </body>
    </html>